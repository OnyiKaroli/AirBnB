<?php
  include_once 'config/conn.php';
  //session_destroy();
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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
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
<body class="bgc-f7">
<div class="wrapper ovh">
  <!--div class="preloader"></div-->
<?php
  include 'header_v2.php';

?>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="images/header-logo.png" alt=""></a>
            <a href="login"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <?php
      include 'mobile_header.php';
    ?>
  </div>








  <div class="body_content">
    <!-- Our Compare Area -->
    <section class="our-compare pt60 pb60">
      <img src="images/icon/register-page-icon.svg" alt="" class="login-bg-icon wow fadeInLeft" data-wow-delay="300ms">
      <div class="container">
        <form method="POST">
        <div class="row wow fadeInRight" data-wow-delay="300ms">
          <div class="col-lg-6">
            <div class="log-reg-form form-style1 bgc-white p50 p30-sm default-box-shadow2 bdrs12">
              <div class="text-center mb40">
                <h2>Create account</h2>
<?php



    if (isset($_POST['register'])) {


    $name = $_POST["name"];
    $role = $_POST["role"];
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["cpassword"]);



        //$date = addslashes(date("Y-m-d"));
        //$time = addslashes(date("G:i:s"));
    if ($password !== $cpassword) {          
          echo'
              <div class="message-alart-style1">
                <div class="alert alart_style_three alert-dismissible fade show mb20" role="alert">Passwords do not much. Kindly try again.
                  <i class="far fa-xmark btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                </div>
              </div>';
    }else{

        $duplicator_checker= mysqli_query($server, "SELECT * FROM `users` WHERE email='$email' ") or 
        die(mysqli_error($server));
        //check rows returned

        $count=mysqli_num_rows($duplicator_checker);
        if($count<1)
        {
            //$_SESSION['user']['email'] = $email;
            //$_SESSION['user']['phone_no'] =$phone_no;
            $insert2 = mysqli_query($server, "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')") or die(mysqli_error($server));
                if ($insert2) {
                    echo '<div class="message-alart-style1">
                            <div class="alert alart_style_three alert-dismissible fade show mb20" role="alert">Successfully created account. Kindly <a data-toggle="modal" data-target="login"><u>login</u> to continue</a>
                              <i class="far fa-xmark btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                            </div>
                          </div>';

               
                              //header( "refresh:2;url=login" );           
                }else{
         
          echo'
              <div class="message-alart-style1">
                <div class="alert alart_style_three alert-dismissible fade show mb20" role="alert"><strong>Failed to create account</strong>. Try again.
                  <i class="far fa-xmark btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                </div>
              </div>';


                            ;
                }
        }else{

          echo'
              <div class="message-alart-style1">
                <div class="alert alart_style_four alert-dismissible fade show mb20" role="alert"><strong>Seems like you <strong>have an account</strong>. Try signing in or resetting password.
                  <i class="far fa-xmark btn-close" data-bs-dismiss="alert" aria-label="Close"></i>
                </div>
              </div>';
                        ;
        }
  
    }
}


?>


                <p class="text">Sign in with after account creation</p>
              </div>
              <div class="mb25">
                <label class="form-label fw600 dark-color">Register as</label>
                <select id="role" name="role" class="form-control" required="">
                  <option value="">Select option below</option>
                  <option value="client">Looking for accomodation</option>
                  <option value="owner">Property Owner</option>
                </select>
              </div>
              <div class="mb25">
                <label class="form-label fw600 dark-color">Username</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required="">
              </div>
              <div class="mb25">
                <label class="form-label fw600 dark-color">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required="">
              </div>
              <div class="mb15">
                <label class="form-label fw600 dark-color">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required="">
              </div>
              <div class="mb15">
                <label class="form-label fw600 dark-color">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Renter Password" required="">
              </div>
              <div class="d-grid mb20">
                <button class="ud-btn btn-thm" type="submit" name="register">Sign in <i class="fal fa-arrow-right-long"></i></button>
              </div>
              <p class="dark-color text-center mb0 mt10">Already signed up? <a class="dark-color fw600" href="login">Go to Login</a></p>
            </div>
          </div>
        </div>
        </form>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
</div>
<!-- Wrapper End --> 
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>