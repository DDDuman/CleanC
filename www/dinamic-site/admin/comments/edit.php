<?php 
        include "../../path.php";
        include "../../app/controllers/commentaries.php";
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


<?php include("../../app/include/header-admin.php"); ?>

<div class="container">
    <?php include "../../app/include/sidebar-admin.php"; ?>

    <div class="posts col-9">
        <div class="row title-table">
            <h2>Editing a comment</h2>
        </div>
        <div class="row add-post">
            <div class="mb-12 col-12 col-md-12 err">
                <!-- Вывод массива с ошибками -->
                <?php include "../../app/helps/errorInfo.php"; ?>
            </div>
            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?=$id; ?>">
                <div class="col mb-4">
                    <input value="<?=$email?>" name="title" type="text" disabled class="form-control" placeholder="Title" aria-label="Название статьи">
                </div>
                <div class="col">
                    <label for="editor" class="form-label">Comment</label>
                    <textarea name="content" id="editor" class="form-control" rows="6">
                        <?=$text1?>
                    </textarea>
                </div>


                <div class="form-check">
                    <?php if($pub) $checked = "checked"; else $checked = "";?>
                        <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked" <?=$checked;?> >
                        <label class="form-check-label" for="flexCheckChecked">
                            Publish
                        </label>
                </div>
                <div class="col col-6">
                    <button name="edit_comment" class="btn btn-primary" type="submit">Save</button>
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
    <!-- Adding visual editor CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<script src="../../assets/js/scripts.js"></script>
</body>
</html>