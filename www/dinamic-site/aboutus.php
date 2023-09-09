<?php 
    include "path.php";
    include "app/controllers/users.php";
 ?>


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

<!-- END header -->


<div class="about-section">
  <h1>About Us Page</h1>
  <p>Welcome to CleanC, your trusted partner in maintaining clean and pristine spaces! At CleanC, we understand that a clean environment is essential for your health, happiness, and productivity. That's why we've made it our mission to provide top-notch cleaning services tailored to meet your unique needs</p>
  <p>Founded in 2023, CleanC has steadily grown to become a reputable and reliable cleaning service provider in Kazakhstan. Our journey began with a simple vision: to make a difference in people's lives by creating cleaner, healthier, and more comfortable living and working spaces</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/images/image_6.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Mile Miller</h2>
        <p class="title">CEO & Founder</p>
        <p>As the CEO and Founder, my journey has been defined by a relentless pursuit of innovation and a commitment to turning my vision into a thriving reality</p>
        <p>MikeMi@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/image_4.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Jane Olli</h2>
        <p class="title">Art Director</p>
        <p>As the Art Director, my creative vision and passion for design have been instrumental in shaping visually stunning and impactful projects that captivate and inspire audiences</p>
        <p>Poaike_011@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/image_5.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Ithan Tunger</h2>
        <p class="title">Designer</p>
        <p>
As a Designer, I thrive on crafting aesthetically pleasing and user-centric designs that seamlessly blend form and function to create meaningful experiences</p>
        <p>IthanTun@gmail.com</p>
      </div>
    </div>
  </div>
</div>

<!-- END FORM -->
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