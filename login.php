<?php
  include 'config/conn.php';
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
<?php
  include 'header_v2.php';
?>
<body class="bgc-f7">
<div class="wrapper ovh">
  <!--div class="preloader"></div-->

  <script type="text/javascript">
    document.addEventListener('contextmenu', event => event.preventDefault());
  </script>

  <div class="body_content">
    <!-- Our Compare Area -->
    <section class="our-compare pt60 pb60">
      <img src="images/icon/login-page-icon.svg" alt="" class="login-bg-icon wow fadeInLeft" data-wow-delay="300ms">
      <form method="POST">
      <div class="container">
        <div class="row wow fadeInRight" data-wow-delay="300ms">
          <div class="col-lg-6">
            <div class="log-reg-form form-style1 bgc-white p50 p30-sm default-box-shadow2 bdrs12">
              <div class="text-center mb40">
                <h2>Sign in</h2>


<?php
if(isset($_SESSION['user']['email'])) {
  header("location:accounts/index");
}
//Logout
if (isset($_GET['logout'])) {
  $end = session_destroy();
  if ($end) {
    echo "
    <div class='alert alart_style_four alert-dismissible fade show mb20' role='alert'>Successfully logged out!
    <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
  </div>";
      header( "refresh:1;url=index" );
  }
}

  
  if (isset($_POST['login']))
  {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $res= mysqli_query($server, "SELECT * FROM `users` WHERE email='$email' AND password='$password'") or 
    die(mysqli_error($server));
    //check rows returned
    $count=mysqli_num_rows($res);

    if($count<1)
    {

      echo "
      <div class='alert alart_style_three alert-dismissible fade show mb20' role='alert'>Error: Check your details and try again.
      <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
        </div>";
    }
    else
    {

      $_SESSION['user']=array();

      $sel = mysqli_query($server, "SELECT * FROM `users` WHERE email='$email' AND password='$password'") or die(mysql_error());
      while ($column = mysqli_fetch_array($sel)) {
        $_SESSION['user']['name'] = $column[1];
        $_SESSION['user']['role'] = $column[9];
        $_SESSION['user']['email'] = $column[4];
        $_SESSION['user']['phone_no'] = $column[6];
        //$_SESSION['user']['status']=$column[7];


      } header("location:accounts/index");
    }
  }
?>

                
                <p class="text">Sign in with this account across the following sites.</p>
              </div>
              <div class="mb25">
                <label class="form-label fw600 dark-color">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
              </div>
              <div class="mb15">
                <label class="form-label fw600 dark-color">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
              </div>
              <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                <label class="custom_checkbox fz14 ff-heading">Remember me
                  <input type="checkbox" checked="checked">
                  <span class="checkmark"></span>
                </label>
                <a class="fz14 ff-heading" href="#">Lost your password?</a>
              </div>
              <div class="d-grid mb20">
                <button class="ud-btn btn-thm" name="login" type="submit">Sign in <i class="fal fa-arrow-right-long"></i></button>
              </div>
              <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600" href="register">Create an account.</a></p>
            </div>
          </div>
        </div>
      </div>
      </form>


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