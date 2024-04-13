<?php require("./config/db.php")?>

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

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>Our serivce</h2>
      </div>
      <div class="row">
        <?php
        // echo $_GET['detail_id'];
          // SELECT statement to retrieve data from the database
          $detail = $_GET['detail'];
          $type = $_GET['type'];
          $sql = "SELECT * FROM service WHERE type = '$type' LIMIT $detail";
          $result = mysqli_query($conn, $sql);

          // Check if any rows were returned
          try{
            if (mysqli_num_rows($result) > 0) {
              // Loop through each row and display the data
              while ($row = mysqli_fetch_assoc($result)) {
                  $svg = $row['svg'];
                  $title = $row['title'];
                  $description = $row['description'];
                  ?>
                  <div class="col-sm-6 col-md-4 mx-auto">
                      <div class="box">
                          <div class="img-box">
                          <?php echo $svg?>
                          </div>
                          <div class="detail-box">
                              <h3><?php echo $title; ?></h3>
                              <p><?php echo $description; ?></p>
                          </div>
                      </div>
                  </div>
                <?php
              }
            } else {
                echo "No data found.";
            }
          }catch(Exception $e){
            echo "Error: " . mysqli_error($conn);
          }
         
          // Close the database connection
          mysqli_close($conn);
        ?>
      </div>
    </div>
  </section>

  <!-- end service section -->

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