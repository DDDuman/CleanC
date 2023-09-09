<?php
include SITE_ROOT . "/app/database/db.php";

$errMsg = [];

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['login'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . "admin/posts/index.php");
    }else{
        header('location: ' . BASE_URL);
    }
}

$users = selectAll('users');

//Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        array_push($errMsg, "Not all fields are filled!");
    }elseif (mb_strlen($login, 'UTF8') < 3){
        array_push($errMsg, "Login must be more than 3 characters");
    }elseif ($passF !== $passS){
        array_push($errMsg, "Passwords in both fields must match");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email){
            array_push($errMsg, "User with this email is already registered!");
        }else{
            $pass = password_hash($passF,PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
           $id = insert('users', $post);
           $user = selectOne('users', ['id' => $id] );

           userAuth($user);
        }
    }
}else{
    $login = '';
    $email = '';
}

//Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        array_push($errMsg, "Not all fields are filled!");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){
            userAuth($existence);
        }else{
            array_push($errMsg, "Email or password entered incorrectly!");
        }
    }
}else{
    $email = '';
}

// Код добавления пользователя в админке
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])){



    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        array_push($errMsg, "Not all fields are filled!");
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg, "Login must be more than 2 characters");
    }elseif ($passF !== $passS) {
        array_push($errMsg, "Passwords in both fields must match");
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence['email'] === $email){
            array_push($errMsg, "The user with this email is already registered!");
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            if (isset($_POST['admin'])) $admin = 1;
            $user = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $user);
            $user = selectOne('users', ['id' => $id] );
            userAuth($user);
        }
    }
}else{
    $login = '';
    $email = '';
}

// Код удаления пользователя в админке
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('users', $id);
    header('location: ' . BASE_URL . 'admin/users/index.php');
}

// РЕДАКТИРОВАНИЕ ПОЛЬЗОВАТЕЛЯ ЧЕРЕЗ АДМИНКУ
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])){
    $user = selectOne('users', ['id' => $_GET['edit_id']]);

    $id =  $user['id'];
    $admin =  $user['admin'];
    $username = $user['username'];
    $email = $user['email'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])){

    $id = $_POST['id'];
    $mail = trim($_POST['mail']);
    $login = trim($_POST['login']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    $admin = isset($_POST['admin']) ? 1 : 0;

    if($login === ''){
        array_push($errMsg, "Not all fields are filled!");
    }elseif (mb_strlen($login, 'UTF8') < 2){
        array_push($errMsg, "Login must be more than 2 characters");
    }elseif ($passF !== $passS) {
        array_push($errMsg, "Passwords in both fields must match!");
    }else{
        $pass = password_hash($passF, PASSWORD_DEFAULT);
        if (isset($_POST['admin'])) $admin = 1;
        $user = [
            'admin' => $admin,
            'username' => $login,
//            'email' => $mail,
            'password' => $pass
        ];

        $user = update('users', $id, $user);
        header('location: ' . BASE_URL . 'admin/users/index.php');
    }
}/*else{
        $id =  $user['id'];
        $admin =  $user['admin'];
        $username = $user['username'];
        $email = $user['email'];
}*/