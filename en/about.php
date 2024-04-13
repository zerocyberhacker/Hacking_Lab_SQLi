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

  <style>
      input[type="file"] {
            background-color: #f2f2f2; /* Set the background color of the input */
            padding: 10px; /* Add some padding to the input */
            border-radius: 5px; /* Add rounded corners to the input */
      }
      input[type="submit"] {
          background-color: #4caf50; /* Set the background color of the submit button */
          color: #fff; /* Set the text color of the submit button */
          padding: 10px 20px; /* Add some padding to the submit button */
          border: none; /* Remove the border */
          border-radius: 5px; /* Add rounded corners to the submit button */
      }
    </style>
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

  <!-- about section -->

  <section class="about_section" style="padding:40px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              About us
            </h2>
            <p>
              Home-Engine is a highly skilled and innovative team dedicated to the design, development, and production of home hardware engines. With a passion for engineering and a focus on creating efficient and reliable solutions, Home-Engine strives to revolutionize the way we power our homes.
            </p>
            <p> The team at Home-Engine consists of talented engineers, designers, and technicians who work collaboratively to create cutting-edge engine systems specifically tailored for residential applications. They have extensive experience in various engineering disciplines, including mechanical, electrical, and software engineering.</p>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

   <section class="service_section" style="padding:50px;">
    <div class="container ">
      <h1>How should our service be used?</h1>
      <div class="row">
          <div class="col-sm-6 col-md-4 mx-auto">
              <div class="box">
                <h3>Step 1</h3>
                    <p>Please contact our customer support to receive assistance.</p>
              </div>
          </div>
          <div class="col-sm-6 col-md-4 mx-auto">
              <div class="box">
                <h3>Step 2</h3>
                    <p>Our staff will contact you to confirm the details or contract.</p>
              </div>
          </div>
          <div class="col-sm-6 col-md-4 mx-auto">
              <div class="box">
                <h3>Step 3</h3>
                    <p>Kindly stay at home as our staff will be visiting your residence for the next step. </p>
              </div>
          </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <section class="professional_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/law.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h2>
              Engineering Accident Report
            </h2>
            <p>
               If the incident is proven to be true and the damages are confirmed, the responsible party or organization will provide compensation to the victim. The compensation amount will be double the value of the damages suffered by the victim. This is a commitment to ensuring that the victim is fairly compensated for any losses or harm they have experienced as a result of the incident.
                <b>Please provide detailed and precise information regarding the date, time, 
                and location of the incident.<b>
            </p>
            <p>
              <b> 
                If you have incurred any losses, please contact us as soon as possible.
              <b>
            </p>

            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                <input type="submit" name="submit" value="Upload File">
            </form>
            <?php
              $uploadStatus = isset($_GET['upload']) ? $_GET['upload'] : '';
              if(!empty($_GET['upload'])){
                echo '<h5>We have received the report, and we will contact you promptly.</h5>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>


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