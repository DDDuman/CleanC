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


<h2 style="text-align:center">Our Services</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/images/image_7.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Commercial Cleaning</h2>
        <p>For all your business cleaning needs. Customized cleaning services for your facility</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/image_9.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Disinfection Services</h2>
        <p>Keep your customers and employees safe from COVID-19 and the flu virus.</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/image_8.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Green Cleaning</h2>
        <p>
        The most comprehensive green office cleaning service options in the industry</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/image_10.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Facilities Serviced</h2>
        <p>Cleaning a variety of commercial buildings, see why Stratus franchisees stand out</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/image_14.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Carpet Cleaning</h2>
        <p>Your carpets take a beating, rejuvenate your facility with fresh, clean carpets</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/images/image_12.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Hard Floor Care</h2>
        <p>
        Make your floors shine like new with our commercial hard floor care services</p>
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