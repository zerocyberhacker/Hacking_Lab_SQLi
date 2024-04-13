<?php
 require('./config/db.php');
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Home Engine</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
           <?php include('./components/header/contact.php')?>
        </div>
      </div>
      <?php include './components/header/header.php'; ?>
    </header>
    <!-- end header section -->
  </div>


  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <?php
            // Process form submission
            if(isset($_POST['submit'])){
              // Retrieve form data
              $name = $_POST['name'];
              $phone = $_POST['phone'];
              $email = $_POST['email'];
              $message = $_POST['message'];

              // Insert data into the database
              $sql = "INSERT INTO contact_us (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";
              if(mysqli_query($conn, $sql)){
                  echo "<h1>Record inserted successfully.</h1>";
              } else{
                  echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
              }
            }
          ?>
          <?php include("./components/form/content_form.php")?>
        </div>
        <div class="col-md-6 contact-img-2">
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <?php include './components/info/info_session.php'; ?>

  <!-- end info_section -->

  <!-- footer section -->
  <?php include('./components/footer/footer.php')?>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>


</body>

</html>