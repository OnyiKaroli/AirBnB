<?php
  require_once 'config/conn.php';

  $id = $_GET['id'];
  $title = $_GET['title'];
  $agent_id = $_GET['agent_id'];

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
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Aveden - <?php echo $row["title"];?></title>
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
<div class="wrapper ovh">
  <!--div class="preloader"></div-->
  
  <!-- Main Header Nav -->
  <?php
    include 'header_v2.php';
  ?>

  <div class="hiddenbar-body-ovelay"></div>

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
      include 'mobile_header.php'
    ?>
  </div>

  <div class="body_content">
    <!-- Property All Lists -->
    <section class="pt60 pb90 bgc-f7">
    <?php
      $select = mysqli_query($server, "SELECT * FROM `properties` WHERE `id`='$id'") or die(mysqli_error($server));
      while ($row = mysqli_fetch_assoc($select)) {
    ?> 
      <div class="container">
        <div class="row mb30 wow fadeInUp" data-wow-delay="100ms">
          <div class="col-lg-8">
            <div class="single-property-content mb30-md">
              <h2 class="sp-lg-title"><?php echo $row["title"];?></h2>
              <div class="pd-meta mb15 d-md-flex align-items-center">
                <p class="text fz15 mb-0 bdrr1 pr10 bdrrn-sm"><?php echo $row["street"], $row["city"], $row["county"];?></p>
                <a class="ff-heading text-thm fz15 bdrr1 pr10 ml0-sm ml10 bdrrn-sm" href=""><i class="fas fa-circle fz10 pe-2"></i><?php echo $row["listed_in"];?></a>
                <a class="ff-heading bdrr1 fz15 pr10 ml10 ml0-sm bdrrn-sm" href=""><i class="far fa-clock pe-2"></i>Since <?php echo $row["date"];?></a>
              </div>
              <div class="property-meta d-flex align-items-center">
                <a class="text fz15" href=""><i class="flaticon-bed pe-2 align-text-top"></i><?php echo $row["no_bedroom"];?> bed</a>
                <a class="text ml20 fz15" href=""><i class="flaticon-shower pe-2 align-text-top"></i><?php echo $row["no_bathroom"];?> bath</a>
                <a class="text ml20 fz15" href=""><i class="flaticon-expand pe-2 align-text-top"></i><?php echo $row["room_size"];?> sqft</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-property-content">
              <div class="property-action text-lg-end">
                <div class="d-flex mb20 mb10-md align-items-center justify-content-lg-end">
                  <a class="icon mr10" href=""><span class="flaticon-like"></span></a>
                  <a class="icon mr10" href=""><span class="flaticon-new-tab"></span></a>
                  <a class="icon mr10" href=""><span class="flaticon-share-1"></span></a>
                  <a class="icon" href=""><span class="flaticon-printer"></span></a>
                </div>
                <h3 class="price mb-0">$<?php echo $row["price"];?></h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="500ms">
          <div class="col-lg-8">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <div class="ps-v4-hero-tab">
                <div class="tab-content overflow-visible" id="pills-tabContent2">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="container p-0">
                      <div class="row wow fadeInUp" data-wow-delay="300ms">
                        <div class="col-lg-12">
                          <div class="ps-v6-slider nav_none slider-1-grid owl-theme owl-carousel">
                            <div class="item">
                              <img class="bdrs12" src="images/listings/listing-single-6-1.jpg" alt="">
                            </div>
                            <div class="item">
                              <img class="bdrs12" src="images/listings/listing-single-6-2.jpg" alt="">
                            </div>
                            <div class="item">
                              <img class="bdrs12" src="images/listings/listing-single-6-3.jpg" alt="">
                            </div>
                            <div class="item">
                              <img class="bdrs12" src="images/listings/listing-single-6-4.jpg" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Overview</h4>
              <div class="row">
              <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-bed"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Guests</h6>
                      <p class="text mb-0 fz15"><?php echo $row["guest"];?> max</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-bed"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Bedroom</h6>
                      <p class="text mb-0 fz15"><?php echo $row["no_bedroom"];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-shower"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Bath</h6>
                      <p class="text mb-0 fz15"><?php echo $row["no_bathroom"];?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Property Description</h4>
              <p class="text mb10"><?php echo $row["description"];?></p>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30 mt30">Address</h4>
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="d-flex justify-content-between">
                    <div class="pd-list">
                      <p class="fw600 mb10 ff-heading dark-color">Address</p>
                      <p class="fw600 mb10 ff-heading dark-color">City</p>
                    </div>
                    <div class="pd-list">
                      <p class="text mb10"><?php echo $row["address"];?></p>
                      <p class="text mb-0"><?php echo $row["city"];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4 offset-xl-2">
                  <div class="d-flex justify-content-between">
                    <div class="pd-list">
                      <p class="fw600 mb10 ff-heading dark-color">Area</p>
                      <p class="fw600 mb-0 ff-heading dark-color">County</p>
                    </div>
                    <div class="pd-list">
                      <p class="text mb10"><?php echo $row["street"];?></p>
                      <p class="text mb-0"><?php echo $row["county"];?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Features & Amenities</h4>
              <div class="row">
                <div class="col-sm-6 col-md-4">
                  <div class="pd-list mb10-sm">
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Air Conditioning</p>
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Barbeque</p>
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Dryer</p>
                    <p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>Gym</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="pd-list">
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Lawn</p>
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Microwave</p>
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Outdoor Shower</p>
                    <p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>Refrigerator</p>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="pd-list">
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Swimming Pool</p>
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>TV Cable</p>
                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Washer</p>
                    <p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>WiFi6<p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-4">
            <div class="overview-element d-flex align-items-center">
              <div class="ml15">
                <?php echo "<a href='accounts/booking?id=".$row["id"]."&title=".$row["title"]."&price=".$row["price"]."' class='ud-btn btn-dark mb25 me-4'>Book this room<i class='fal fa-arrow-right-long'></i></a>";?>
              </div>
            </div><?php }?>
            <?php
              include 'listing_sidebar.php';
            ?>
            <div class="list-sidebar-style1">
              <div class="widget-wrapper">
                <h6 class="list-title">Property Showcase</h6>
                <div class="listing-style1 sidebar-style1">

                <?php
                //SQL Query
                $query = mysqli_query($server, "SELECT * FROM `properties` ORDER BY RAND() LIMIT 2") or die(mysqli_error($server));
                //$result = mysqli_query($conn, $query);

                if (mysqli_num_rows($query) > 0) {
                // OUTPUT DATA OF EACH ROW
                while($row = mysqli_fetch_assoc($query)) {
                ?>

                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                    <div class="list-price">$<?php echo $row["price"];?> / <span>day</span></div>
                  </div>
                  <div class="list-content px-0 pb-0">
                    <h6 class="list-title mb-1"><a href=""><?php echo $row["title"];?></a></h6>
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
                  </div><?php }}?>
                </div>
              </div>
              <div class="widget-wrapper">
                <?php
                //SQL Query
                $query = mysqli_query($server, "SELECT * FROM `properties` ORDER BY RAND() LIMIT 3") or die(mysqli_error($server));
                //$result = mysqli_query($conn, $query);

                if (mysqli_num_rows($query) > 0) {
                // OUTPUT DATA OF EACH ROW
                while($row = mysqli_fetch_assoc($query)) {
                ?>
                <div class="list-news-style d-flex align-items-center mb20">
                  <div class="news-img flex-shrink-0"><img src="images/listings/ps-s-1.jpg" alt=""></div>
                  <div class="news-content flex-shrink-1 ms-3">
                    <h5 class="title mb0">$<?php echo $row["price"];?> /<span class="fz15">day</span></h5>
                    <p class="new-text mb0 fz14"><?php echo $row["title"];?></p>
                    <div class="list-meta">
                      <a class="me-2" href=""><span class="flaticon-bed pe-1"></span><?php echo $row["no_bedroom"];?></a>
                      <a class="me-2" href=""><span class="flaticon-shower pe-1"></span><?php echo $row["no_bathroom"];?></a>
                      <a href=""><span class="flaticon-expand pe-1"></span><?php echo $row["room_size"];?></a>
                    </div>
                  </div>
                </div><?php }}?>
              </div>
              <div class="widget-wrapper">
              </div>
              <div class="widget-wrapper">
              </div>
              <div class="widget-wrapper">
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Get More Information</h4>
              <div class="agent-single d-sm-flex align-items-center bdrb1 mb30 pb25">
                <div class="single-img mb30-sm">
                  <img class="w90" src="images/team/agent-3.png" alt="">
                </div>

                <?php
                //SQL Query
                $query = mysqli_query($server, "SELECT * FROM `agents` WHERE `id` = '$agent_id'") or die(mysqli_error($server));
                ?>

                <div class="single-contant ml30 ml0-xs">
                  <h6 class="title mb-1"><?php echo $row["name"];?></h6>
                  <div class="agent-meta mb10 d-md-flex align-items-center">
                    <a class="text fz15 pe-2 bdrr1" href=""><i class="flaticon-call pe-1"></i><?php echo $row["tel"];?></a>
                  </div>
                  <div class="agent-social">
                    <a class="mr20" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="mr20" href=""><i class="fab fa-twitter"></i></a>
                    <a class="mr20" href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt30 wow fadeInUp" data-wow-delay="700ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Nearby Similar Homes</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="900ms">
          <div class="col-lg-12">
            <div class="property-city-slider navi_pagi_top_right slider-dib-sm slider-3-grid owl-theme owl-carousel">
              
            <?php
                  $select = mysqli_query($server, "SELECT * FROM `properties` limit 15") or die(mysqli_error($server));
                  if (mysqli_num_rows($select) > 0) {
                    // OUTPUT DATA OF EACH ROW
                    while($row = mysqli_fetch_assoc($select)) {
                  ?>
                <div class="item">

                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-2.jpg" alt="">
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
          </div>
        </div>
      </div>
    </section>

    <!-- Our Footer --> 
    <?php
      include 'footer.php';
    ?>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
</div>
<!-- Wrapper End --> 
<script src="js/jquery-3.6.4.min.js"></script> 
<script src="js/jquery-migrate-3.0.0.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script src="js/jquery.mmenu.all.js"></script> 
<script src="js/ace-responsive-menu.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-custome.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/wow.min.js"></script> 
<script src="js/owl.js"></script> 
<script src="js/isotop.js"></script>
<script src="js/pricing-slider.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>