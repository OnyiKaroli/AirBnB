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
        include 'sidebar_v2.php';
      ?>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-f7">
          <?php
            include 'sidebar.php';
          ?>
          <div class="row">
            <div class="col-xl-12">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 p20-xs mb30 overflow-hidden position-relative">
                <div class="row">

                <?php
                  //SQL Query
                   $query = mysqli_query($server, "SELECT * FROM `properties` WHERE `featured` = 1 ORDER BY RAND()") or die(mysqli_error($server));
                   $count=mysqli_num_rows($query);      
                  if (mysqli_num_rows($query) > 0) {
                  // OUTPUT DATA OF EACH ROW
                  while($row = mysqli_fetch_assoc($query)) {
                ?>

                  <div class="col-sm-6 col-xl-3">
                    <div class="listing-style1 style2">
                      <div class="list-thumb">
                        <a href="" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Item"><span class="fas fa-trash-can"></span></a>
                        <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                        <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div> 
                        <div class="list-price">$<?php echo $row["price"];?> / <span>day</span></div>
                      </div>
                      <div class="list-content">
                        <h6 class="list-title"><?php echo "<a href='property-single?id=".$row["id"]."&title=".$row["title"]."&agent_id=".$row["agent_id"]."'>".$row['title']."</a>"; ?></h6>
                        <p class="list-text"><?php echo $row["street"], $row["city"], $row["county"];?></p>
                        <div class="list-meta d-flex align-items-center">
                          <a href=""><span class="flaticon-bed"></span><?php echo $row["no_bedroom"];?> bed</a>
                          <a href=""><span class="flaticon-shower"></span><?php echo $row["no_bathroom"];?> bath</a>
                          <a href=""><span class="flaticon-expand"></span><?php echo $row["room_size"];?> sqft</a>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="list-meta2 d-flex justify-content-between align-items-center">
                          <span class="for-what"><?php echo $row["listed_in"];?></span>
                          <div class="icons d-flex align-items-center">
                            <a href=""><span class="flaticon-fullscreen"></span></a>
                            <a href=""><span class="flaticon-new-tab"></span></a>
                            <a href=""><span class="flaticon-like"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><?php }}?>
                </div>
                <div class="row">
                  <div class="mbp_pagination text-center">
                    <ul class="page_navigation">
                      <li class="page-item">
                        <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"><a class="page-link" href="#">...</a></li>
                      <li class="page-item"><a class="page-link" href="#">20</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                      </li>
                    </ul>
                    
                    <p class="mt10 pagination_page_count text-center">1 – 20 of <?php echo $count; ?>+ property available</p>
                  </div>
                </div>
              </div>
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