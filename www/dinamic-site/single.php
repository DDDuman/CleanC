<?php include("path.php"); 

include "app/controllers/topics.php";
$post = selectPostFromPostsWithUsersOnSingle('posts', 'users', $_GET['post']);

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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;300;400;500;600;700;800;900&family=Lora:ital,wght@0,400;0,500;1,400&family=Playfair:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <title>Cleaning service</title>
  </head>
  <body>

<?php include("app/include/header.php"); ?>

<!-- блок MAIN -->
<div class="container">
    <div class="content row">
        <!-- Main Content -->
        <div class="main-content col-md-9 col-12">
            <h2><?php echo $post['title']; ?></h2>

            <div class="single_post row">
                <div class="img col-12">
                    <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
                </div>
                <div class="info">
                    <i class="far fa-user"> <?=$post['username'];?></i>
                    <i class="far fa-calendar"> <?=$post['created_date'];?></i>
                </div>
                <div class="single_post_text col-12">
                    <?=$post['content'];?>
                </div>
                <?php include("app/include/comments.php"); ?>
            </div>
            

        </div>
        <!-- slidebar Content -->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Search</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Type...">
                </form>
            </div>

            <div class="section topics">
                <h3>Categories</h3>
                <ul>
                <?php foreach ($topics as $key => $topic): ?>
                        <li>
                            <a href="<?=BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?=$topic['name']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- блок MAIN END -->
<!-- footer -->
<?php include("app/include/footer.php"); ?>

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