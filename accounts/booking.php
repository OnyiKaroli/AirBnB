<?php
  include '../config/conn.php';
  

  //Session check
  if(!isset($_SESSION['user']['email'])) {
    header("location:../login");
  } else {
    $id = $_GET['id'];
    $title_one = $_GET['title'];
    $price = $_GET['price'];
  }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Aveden - Where Every Stay is a Journey">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/ace-responsive-menu.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<link rel="stylesheet" href="css/ud-custom-spacing.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Aveden - Where Every Stay is a Journey</title>
<!-- Favicon -->
<link href="images/favicon.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.png" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
<link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
<link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper">
  <!--div class="preloader"></div-->
  
  <!-- Main Header Nav -->
  <?php
    include 'header_v4.php';
  ?>
  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="images/header-logo.png" alt=""></a>
            <a href="../login"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <?php
      include 'mobile_header.php';
    ?>
  </div>

  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-md">
      <?php
        include 'sidebar_v2.php';
      ?>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content property-page bgc-f7">
          <?php
            include 'sidebar.php';
          ?>
          <div class="row align-items-center pb40">
            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>Complete the details</h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
            <?php
          
          //SQL Query
          $query = mysqli_query($server, "SELECT * FROM `users` WHERE `email` = '$servedby_email'") or die(mysqli_error($server));

          if (mysqli_num_rows($query) > 0) {
            // OUTPUT DATA OF EACH ROW
            while($row = mysqli_fetch_assoc($query)) {

          ?>
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">
                <form action="booking_process.php" method="post">
                    <div class="col-lg-6">
                        <div class="ui-content mb40">
                        <div class="form-style1">
                            <label class="form-label fw600 dark-color">Username</label>
                            <?php echo "<input type='text' name='username' class='form-control' placeholder=".$row["name"]." readonly>"; ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ui-content mb40">
                        <div class="form-style1">
                            <label class="form-label fw600 dark-color">Email</label>
                            <?php echo "<input type='text' name='email' class='form-control' placeholder=".$row["email"]." readonly>"; ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ui-content mb40">
                        <div class="form-style1">
                            <label class="form-label fw600 dark-color">Property</label>
                            <?php echo "<input type='text' name='property' class='form-control' placeholder=".$title_one." readonly>"; ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ui-content mb40">
                        <div class="form-style1">
                            <label class="form-label fw600 dark-color">Property ID</label>
                            <?php echo "<input type='text' name='id' class='form-control' placeholder=".$id." readonly>"; ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ui-content mb40">
                        <div class="form-style1">
                            <label class="form-label fw600 dark-color">From</label>
                            <input type="date" name="date1" class="form-control" >
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ui-content mb40">
                        <div class="form-style1">
                            <label class="form-label fw600 dark-color">To</label>
                            <input type="date" name="date2" class="form-control">
                        </div>
                        </div>
                    </div>
                    <?php
                        $date1 = strtotime('date1');
                        $date2 = strtotime('date2');

                        $diff = $date2 - $date1;
                        $days = floor($diff / (60 * 60 * 24));
                        $t_price = $days * $price;
                    ?>
                    <div class="col-lg-6">
                        <div class="ui-content mb40">
                        <div class="form-style1">
                            <input type="numeric" name="price" class="ud-btn btn-thm mb25" placeholder="<?php echo $t_price; ?>" readonly>
                        </div>
                        </div>
                    </div>
                    <button type="submit" name="book" class="ud-btn btn-white2 mb25 me-4">Book<i class="fal fa-arrow-right-long"></i></button>
                </form>
              </div>
              <?php }}?>
            </div>
          </div>
        </div>
        <footer class="dashboard_footer pt30 pb10">
          <div class="container">
            <div class="row items-center justify-content-center justify-content-md-between">
              <div class="col-auto">
                <div class="copyright-widget">
                  <p class="text">© <a href="https://windand.co.ke" target="_blank">Windand</a> - All rights reserved</p>
                </div>
              </div>
              <div class="col-auto">
                <div class="footer_bottom_right_widgets text-center text-lg-end">
                  <p><a href="#">Privacy</a>  ·  <a href="#">Terms</a>  ·  <a href="#">Sitemap</a></p>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="js/jquery-3.6.4.min.js"></script> 
<script src="js/jquery-migrate-3.0.0.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script src="js/jquery.mmenu.all.js"></script> 
<script src="js/ace-responsive-menu.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>