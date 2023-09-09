<?php 
        include "../../path.php";
        include "../../app/controllers/users.php";
        error_reporting( E_ERROR ); 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--font awesome-->
    <script src="https://kit.fontawesome.com/a19f6bccfd.js" crossorigin="anonymous"></script>

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;300;400;500;600;700;800;900&family=Lora:ital,wght@0,400;0,500;1,400&family=Playfair:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <title>Cleaning service</title>
  </head>
  <body>


<?php include ("../../app/include/header-admin.php"); ?>

<div class="container">
    <?php include "../../app/include/sidebar-admin.php"; ?>  

        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/users/create.php";?>" class="col-2 btn btn-success">Create</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/users/index.php";?>" class="col-2 btn btn-warning">Edit</a>
            </div>
            <div class="row title-table">
                <h2>Create user</h2>               
            </div>
            <div class="row add-post">
            <div class="mb-12 col-12 col-md-12 err">
                    <!-- Вывод массива с ошибками -->
                    <?php include "../../app/helps/errorInfo.php"; ?>
                </div>
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Login</label>
                        <input name ="login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your login">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name = "mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email...">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password...">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Confirm password</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Repeat your password...">
                    </div>
                    <input name="admin" class="form-check-input" value="1" type="checkbox" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Admin
                        </label>
                    <div class="col">
                        <button name="create-user" class="btn btn-primary" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>


<!-- footer -->
<?php include("../../app/include/footer.php"); ?>
<!-- footer END -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>