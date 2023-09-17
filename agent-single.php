<?php
  require_once 'config/conn.php';

  $id = $_GET['id'];
  $title = $_GET['name'];
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
<body>
<div class="wrapper ovh">
  <!--div class="preloader"></div-->
  
  <!-- Main Header Nav -->
  <?php
    include 'header_v2.php';
  ?>
  <!-- Filter Content In Hiddn SideBar -->
  <div class="lefttside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Find your home</h4>
    </div>
    <div class="hsidebar-content">
    </div>
  </div>
  <!--End Filter Content In Hiddn SideBar -->

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
      include 'mobile_header.php';
    ?>
  </div>

  <div class="body_content">
    <!-- Agent Section Area -->
    <section class="agent-single pt60">
      <div class="cta-agent bgc-thm-light mx-auto maxw1600 pt60 pb60 bdrs12 position-relative mx20-lg">
        <div class="container">
          <div class="row align-items-center">
            <?php
              //SQL Query
              $query = mysqli_query($server, "SELECT * FROM `agents` WHERE `id` = '$id'") or die(mysqli_error($server));
              //$result = mysqli_query($conn, $query);

              if (mysqli_num_rows($query) > 0) {
              // OUTPUT DATA OF EACH ROW
              while($row = mysqli_fetch_assoc($query)) {
            ?>
            <div class="col-xl-7">
              <div class="agent-single d-sm-flex align-items-center">
                <div class="single-img mb30-sm">
                  <img src="images/team/agent-single.png" alt="">
                </div>
                <div class="single-contant ml30 ml0-xs">
                  <h2 class="title mb-0"><?php echo $row["name"];?></h2>
                  <p class="fz15">Company Agent at <b><?php echo $row["company"];?></b></p>
                  <div class="agent-meta mb15 d-md-flex align-items-center">
                    <a class="text fz15 pe-2 bdrr1" href=""><i class="fas fa-star fz10 review-color2 pr10"></i>5.0 • 49 Reviews</a>
                    <a class="text fz15 pe-2 ps-2 bdrr1" href=""><i class="flaticon-call pe-1"></i><?php echo $row["tel"];?></a>
                    <a class="text fz15 ps-2" href=""><i class="flaticon-smartphone pe-1"></i><?php echo $row["tel"];?></a>
                  </div>
                  <div class="agent-social">
                    <?php echo "<a class='mr20' href='".$row['twitter']."'><i class='fab fa-twitter'></i></a>"; ?>
                    <?php echo "<a class='mr20' href='".$row['insta']."'><i class='fab fa-instagram'></i></a>"; ?>
                  </div>
                </div>
              </div>
              <div class="img-box-11 position-relative d-none d-xl-block">
                <img class="img-1 spin-right" src="images/about/element-3.png" alt="">
                <img class="img-2 bounce-x" src="images/about/element-5.png" alt="">
                <img class="img-3 bounce-y" src="images/about/element-7.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-8 pr40 pr20-lg">
            <div class="row">
              <div class="col-lg-12">
                <div class="agent-single-details mt30 pb30 bdrb1">
                  <h6 class="fz17 mb30">About <?php echo $row["name"];?></h6>
                  <p class="text"><?php echo $row["about"];?></p>
                  <div class="agent-single-accordion">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                    </div>
                  </div>
                </div>
              </div>
            </div><?php }}?>
            <div class="row align-items-center mt20">
              <div class="col-sm-4">
                <h6 class="fz17">Listing 27</h6>
              </div>
              <div class="col-lg-12">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                      <?php
                        //SQL Query
                        $query = mysqli_query($server, "SELECT * FROM `properties` WHERE `agent_id` = '$id' ORDER BY `price` DESC LIMIT 4") or die(mysqli_error($server));
                        $count=mysqli_num_rows($query);
                        if (mysqli_num_rows($query) > 0) {
                          // OUTPUT DATA OF EACH ROW
                          while($row = mysqli_fetch_assoc($query)) {
                      ?>
                      <div class="col-md-6">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="images/listings/g1-1.jpg" alt="">
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
                <div class="d-grid pb30 bdrb1">
                  <a href="#" class="ud-btn btn-white2">Show all <?php echo $count;?> properties<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="agent-single-form home8-contact-form default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white position-relative">
              <h4 class="form-title mb25">Contact Form</h4>
              <form class="form-style1">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb20">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb20">
                      <input type="text" class="form-control" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb10">
                      <textarea cols="30" rows="4" placeholder="There are many variations of passages."></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="d-grid">
                      <a class="ud-btn btn-thm mb15" href="page-contact.html">Send Message<i class="fal fa-arrow-right-long"></i></a>
                      <a class="ud-btn btn-white2" href="page-contact.html">Call<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="agen-personal-info position-relative bgc-white default-box-shadow1 bdrs12 p30 mt30">
            <?php
              //SQL Query
              $query = mysqli_query($server, "SELECT * FROM `agents` WHERE `id` = '$id'") or die(mysqli_error($server));
              
              if (mysqli_num_rows($query) > 0) {
                // OUTPUT DATA OF EACH ROW
                while($row = mysqli_fetch_assoc($query)) {
              ?>
              <div class="widget-wrapper mb-0">
                <h6 class="title fz17 mb35">Professional Information</h6>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Broker address</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14"><?php echo $row["address"];?></p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Office</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14"><?php echo $row["tel"];?></p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Mobile</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14"><?php echo $row["tel"];?></p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Websites</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14"><?php echo $row["website"];?></p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Member since</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14"><?php echo $row["date_hired"];?></p>
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
      include 'footer_v2.php';
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
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>