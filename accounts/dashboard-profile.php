<?php
  include '../config/conn.php';

  //Session check
  if(!isset($_SESSION['user']['email'])) {
    header("location:index");
  }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
        include 'sidebar_v2.php'
      ?>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content property-page bgc-f7">

          <?php
            include 'sidebar.php';
          ?>
          <div class="row align-items-center pb40">
            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>My Profile</h2>
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

              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="col-xl-7">
                  <div class="profile-box position-relative d-md-flex align-items-end mb50">
                    <div class="profile-img position-relative overflow-hidden bdrs12 mb20-sm">
                      <img class="w-100" src="images/listings/profile-1.jpg" alt="">
                      <a href="" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Image" aria-label="Delete Item"><span class="fas fa-trash-can"></span></a>
                    </div>
                    <div class="profile-content ml30 ml0-sm">
                      <button name="upload" type="submit" class="ud-btn btn-white2 mb30">Upload Profile Files<i class="fal fa-arrow-right-long"></i></button>
                      <p class="text">Photos must be JPEG or PNG format and least 2048x768</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <?php
                    if (isset($_POST['update'])){
                      //$edit_id = $_GET['id'];
                      $name = mysqli_real_escape_string($server, $_POST['name']);
                      $email = mysqli_real_escape_string($server, $_POST['email']);
                      $phone_no = mysqli_real_escape_string($server, $_POST['phone_no']);
                      $fname = mysqli_real_escape_string($server, $_POST['fname']);
                      $lname = mysqli_real_escape_string($server, $_POST['lname']);
                      $about_me = mysqli_real_escape_string($server, $_POST['about_me']);

                      $update = mysqli_query($server, "UPDATE `users` SET `name`='$name',`fname`='$fname',`lname`='$lname',`email`='$email',`phone_no`='$phone_no',`about_me`='$about_me' WHERE `email`='$servedby_email'") or die(mysqli_error($server));
            
                      if ($update) {
                        
                        echo "
                          <div class='message-alart-style1'>
                            <div class='alert alart_style_four alert-dismissible fade show mb20' role='alert'><strong>Success!</strong> Details updated!
                              <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
                            </div>
                          </div>";
                          header("location:logout");
                      } else {
                        echo "
                          <div class='message-alart-style1'>
                            <div class='alert alart_style_three alert-dismissible fade show mb20' role='alert'><strong>Failed:</strong> Try again.
                              <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
                            </div>
                          </div>";
                      }
                        }
                  ?>
                  <form class="form-style1" method="POST">
                    <div class="row">
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">Username</label>
                          <?php echo "<input type='text' name='name' class='form-control' required='' placeholder=".$row["name"].">"; ?>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">Email</label>
                          <?php echo "<input type='email' name='email' class='form-control' required='' placeholder=".$row["email"].">"; ?>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">Phone</label>
                          <?php echo "<input type='text' name='phone_no' class='form-control' required='' placeholder=".$row["phone_no"].">"; ?>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">First Name</label>
                          <?php echo "<input type='text' name='fname' class='form-control' required='' placeholder=".$row["fname"].">"; ?>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">Last Name</label>
                          <?php echo "<input type='text' name='lname' class='form-control' required='' placeholder=".$row["lname"].">"; ?>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">Position</label>
                          <?php echo "<input type='text' class='form-control' required='' placeholder=".$row["role"]." readonly>"; ?>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb10">
                          <label class="heading-color ff-heading fw600 mb10">About me</label>
                          <?php echo "<textarea cols='30' rows='4' name='about_me' required='' placeholder=".$row["about_me"]."></textarea>"; ?>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="text-end">
                          <button type="submit" name="update" class="ud-btn btn-dark" >Update Profile<i class="fal fa-arrow-right-long"></i></button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div><?php }}?>
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <?php


$uemail = $_SESSION['user']['email'];
if (isset($_POST['password'])) {

    $cPassword = md5($_POST['cPassword']);
    $nPassword = md5($_POST['nPassword']);
    $rPassword = md5($_POST['rPassword']);

    if ($nPassword !== $rPassword) {
        echo "
          <div class='message-alart-style1'>
            <div class='alert alart_style_three alert-dismissible fade show mb20' role='alert'><strong>Error:</strong> Passwords Mismatch!
              <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
            </div>
          </div>";
    }else{
    
      $res= mysqli_query($server, "SELECT * FROM `users` WHERE `email`='$uemail' AND `password`='$cpassword'") or 
      die(mysqli_error($server));
      //check rows returned
      $count=mysqli_num_rows($res);

      if($count<1)
      {

        echo "
          <div class='message-alart-style1'>
            <div class='alert alart_style_three alert-dismissible fade show mb20' role='alert'><strong>Wrong</strong> current password. Re-enter and try again!
              <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
            </div>
          </div>";
      }
      else
      {
          $update = mysqli_query($server, "UPDATE `users` SET `password`='$nPassword' WHERE  `email`='$uemail'") or die(mysqli_error($server));

            if ($update) {
              
              echo "
                <div class='message-alart-style1'>
                  <div class='alert alart_style_four alert-dismissible fade show mb20' role='alert'><strong>Success!</strong> Password updated!
                    <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
                  </div>
                </div>";
                header("location:logout");
            } else {
              echo "
                <div class='message-alart-style1'>
                  <div class='alert alart_style_three alert-dismissible fade show mb20' role='alert'><strong>Failed:</strong> Try again.
                    <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
                  </div>
                </div>";
            }
      }


  }
}

?> 
                <h4 class="title fz17 mb30">Change password</h4>
                <form class="form-style1" method="POST">
                  <div class="row">
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Old Password</label>
                        <input type="password" name="cPassword" class="form-control" placeholder="Your current password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">New Password</label>
                        <input type="password" name="nPassword" class="form-control" placeholder="New password">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Confirm New Password</label>
                        <input type="password" name="rPassword" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="text-end">
                        <button type="submit" name="password" class="ud-btn btn-dark">Change Password<i class="fal fa-arrow-right-long"></i></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <footer class="dashboard_footer pt30 pb10">
          <div class="container">
            <div class="row items-center justify-content-center justify-content-md-between">
              <div class="col-auto">
                <div class="copyright-widget">
                  <p class="text">© <a href="windand.co.ke" target="_blank">Windand</a> - All rights reserved</p>
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