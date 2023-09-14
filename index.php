<!DOCTYPE html>
<html lang="en">
<?php
  require 'config/conn.php';
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Aveden - Where Every Stay is a Journey">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/ace-responsive-menu.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/ud-custom-spacing.css">
<link rel="stylesheet" href="css/style.css">
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
    include 'header.php';
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
      include 'mobile_header.php';
    ?>
  </div>

  <div class="body_content">
    <!-- Home Banner Style V6 -->
    <section class="home-banner-style6 p0" data-stellar-background-ratio="0.2">
      <div class="home-style1">
        <div class="container">
          <div class="row">
            <div class="col-xl-10">
              <div class="inner-banner-style6">
                <h2 class="hero-title text-white animate-up-1">Find the perfect place to <br class="d-none d-xl-block">Live with your family</h2>
                <p class="hero-text text-white fz15 animate-up-2">Let’s find a home that’s perfect for you</p>
                <div class="advance-search-tab mt60 mt30-md mb25 animate-up-3">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="advance-content-style1">
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <div class="advance-search-field position-relative text-start">
                              <form action="search_listing.php" method="POST" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control bgc-f7 bdrs12" type="text" name="search" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                              <button name="search" class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="advance-content-style1">
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <div class="advance-search-field position-relative text-start">
                              <form action="search_listing.php" method="POST" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control bgc-f7 bdrs12" type="text" name="search" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                              <button name="search" class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="advance-content-style1">
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <div class="advance-search-field position-relative text-start">
                              <form action="search_listing.php" method="POST" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control bgc-f7 bdrs12" type="text" name="search" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                              <button name="search" class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>              
                </div>
                <p class="h6 fw600 text-white fz14 animate-up-4 my-3">Or browse featured categories:</p>
                <div class="home4-icon-style mt20 d-none d-sm-flex animate-up-4">
                  <?php echo '<a href="search-listing?category=house" class="d-flex align-items-center text-white ff-heading me-4"><i class="icon mr10 flaticon-home-1"></i> Houses</a>'?>
                  <?php echo '<a href="search-listing?category=apartment" class="d-flex align-items-center text-white ff-heading me-4"><i class="icon mr10 flaticon-corporation"></i> Apartments</a>'?>
                  <?php echo '<a href="search-listing?category=room" class="d-flex align-items-center text-white ff-heading me-4"><i class="icon mr10 flaticon-network"></i> Rooms</a>'?>
                  <?php echo '<a href="search-listing?category=villa" class="d-flex align-items-center text-white ff-heading"><i class="icon mr10 flaticon-garden"></i> Villa</a>'?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pb90 pb30-md">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 wow fadeInUp" data-wow-delay="100ms">
            <div class="about-box2">
              <h4 class="title">The New Way to Find <br class="d-none d-xl-block"> Your Home</h4>
              <p class="text fz15">With our low and affordable rates <br class="d-none d-xl-block"> hop on to our exclusive listings.</p>
              <a href="about" class="ud-btn btn-thm">More<i class="fal fa-arrow-right-long"></i></a>
              <img class="img-1" src="images/about/home6-about-1.jpg" alt="">
            </div>
          </div>
          <div class="col-xl-6 wow fadeInUp" data-wow-delay="300ms">
            <div class="row">
              <div class="col-sm-6">
                <div class="iconbox-style6">
                  <span class="icon flaticon-search-1"></span>
                  <h3 class="title mb-1">01</h3>
                  <h6 class="subtitle">Get on listing page</h6>
                  <p class="iconbox-text">View the available houses posted on our site</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="iconbox-style6">
                  <span class="icon flaticon-chat"></span>
                  <h3 class="title mb-1">02</h3>
                  <h6 class="subtitle">Refine your search</h6>
                  <p class="iconbox-text">Our enhanced search is will enable you to hand pick the right details.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="iconbox-style6">
                  <span class="icon flaticon-bird-house"></span>
                  <h3 class="title mb-1">03</h3>
                  <h6 class="subtitle">Proceed to Booking</h6>
                  <p class="iconbox-text">Select the house and you'll be transfered to your accounts page.</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="iconbox-style6">
                  <span class="icon flaticon-house-1"></span>
                  <h3 class="title mb-1">04</h3>
                  <h6 class="subtitle">Confirmed!</h6>
                  <p class="iconbox-text">After submitting the necessary details, you'll contacted shortly</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pt0 pb60 pb30-md bgc-white">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Discover Our Featured Listings</h2>
              <p class="paragraph">Explore Our Handpicked Gems</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-3">
              <a class="ud-btn2" href="listing">See All Properties<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="feature-listing-slider2 vam_nav_style dots_none slider-dib-sm slider-3-grid owl-carousel owl-theme">
              <?php
                //SQL Query
                $query = mysqli_query($server, "SELECT * FROM `properties` WHERE `featured` = 1 ORDER BY RAND() LIMIT 6") or die(mysqli_error($server));
                //$result = mysqli_query($conn, $query);

                if (mysqli_num_rows($query) > 0) {
                // OUTPUT DATA OF EACH ROW
                while($row = mysqli_fetch_assoc($query)) {
              ?>  
              <div class="item">
                <div class="listing-style1 style4">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                    <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                    <div class="list-price"><?php echo $row["price"];?> / <span>day</span></div>
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
              </div><?php }} ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Property Cities -->
    <section class="pt0 pb90 pb50-md">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Explore Cities</h2>
              <p class="paragraph">Uncover Urban Adventures</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="property-city-slider navi_pagi_top_right slider-dib-sm slider-4-grid owl-theme owl-carousel">
              
              <?php
                //SQL Query
                $query = mysqli_query($server, "SELECT city, COUNT(*) AS total_properties FROM properties GROUP BY city
                ORDER BY total_properties limit 6") or die(mysqli_error($server));

                // OUTPUT DATA OF EACH ROW
                if (mysqli_num_rows($query) > 0) {
                while($row = mysqli_fetch_assoc($query)) {
              ?> 

              <div class="item">
                  <div class="feature-style2 mb30">
                    <div class="feature-img"><img class="w-100" src="images/listings/city-listing-1.jpg" alt=""></div>
                    <div class="feature-content pt20">
                      <h6 class="title mb-1"><?php $row["city"]; ?></h6>
                      <p class="text fz15"><?php $row["total_properties"]; ?> Properties</p>
                    </div>
                  </div>
              </div><?php }}?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="p-0">
      <div class="how-we-help position-relative mx-auto bgc-thm-light maxw1600 pt120 pt60-md pb90 pb30-md bdrs12 mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
              <div class="main-title text-center">
                <h2 class="title">See how to list your property</h2>
                <p class="paragraph">In three easy steps you can list your property</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
              <div class="iconbox-style3 text-center">
                <div class="icon"><img class="w-100" src="images/icon/property-buy-2.svg" alt=""></div>
                <div class="iconbox-content">
                  <h4 class="title">Create an Account</h4>
                  <p class="text">Fill in the sign up form with the correct details.</p>
                  <a href="register" class="ud-btn btn-thm3">Register<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
              <div class="iconbox-style3 active text-center">
                <div class="icon"><img class="w-100" src="images/icon/property-sell-2.svg" alt=""></div>
                <div class="iconbox-content">
                  <h4 class="title">Your listing gets approved</h4>
                  <p class="text">Once our agents have reviewed your application, you'll be contacted</p>
                  <a href="login" class="ud-btn btn-thm3">Login<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
              <div class="iconbox-style3 text-center">
                <div class="icon"><img class="w-100" src="images/icon/property-rent-2.svg" alt=""></div>
                <div class="iconbox-content">
                  <h4 class="title">All Done!</h4>
                  <p class="text">Your listing is now visible and ready for booking</p>
                  <a href="listing" class="ud-btn btn-thm3">Book<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Us -->
    <section class="about-us">
      <div class="container">
        <div class="row mt80 mt0-md">
          <div class="col-md-6 col-xl-6">
            <div class="position-relative wow fadeInRight" data-wow-delay="300ms">
              <div class="img-box-7">
                <img class="w-100 img-1" src="images/about/about-2.png" alt="">
              </div>
              <div class="img-box-8 position-relative">
                <img class="img-1 spin-right" src="images/about/element-1.png" alt="">
              </div>
              <div class="img-box-10 position-relative">
                <div class="listing-style1 mini-style bounce-y">

                  <?php
                    //SQL Query
                    $query = mysqli_query($server, "SELECT * FROM `properties` WHERE `listed_in` = 'For sale' ORDER BY RAND() LIMIT 1") or die(mysqli_error($server));

                    // OUTPUT DATA OF EACH ROW
                    if (mysqli_num_rows($query) > 0) {
                      while($row = mysqli_fetch_assoc($query)) {
                  ?> 

                  <div class="list-content">
                    <h6 class="list-title"><?php echo "<a href='property-single?id=".$row["id"]."&title=".$row["title"]."&agent_id=".$row["agent_id"]."'>".$row['title']."</a>"; ?></h6>
                    <p class="list-text"><?php echo $row["street"], $row["city"], $row["county"];?></p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span><?php echo $row["no_bedroom"];?> bed</a>
                      <a href=""><span class="flaticon-shower"></span><?php echo $row["no_bathroom"];?> bath</a>
                      <a href=""><span class="flaticon-expand"></span><?php echo $row["room_size"];?> sqft</a>
                    </div>
                    <?php echo "<a href='property-single?id=".$row["id"]."&agent_id=".$row["agent_id"]."' class='btn mt15 fz15'>View House<i class='fal fa-arrow-right-long'></i></a>"; ?>
                  </div><?php }}?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4 offset-xl-2">
            <div class="about-box-1 wow fadeInLeft" data-wow-delay="300ms">
              <h2 class="title mb30">We Will Help You Find Your Dream Home</h2>
              <p class="text mb20 fz15">As the complexity of buildings to increase, the field of architecture.</p>
              <div class="funfact_one">
                <div class="details mb25">
                  <ul class="ps-0 mb-0">
                    <li><div class="timer">400</div></li>
                  </ul>
                  <p class="text mb-0">Stores around the world</p>
                </div>
                <div class="details mb25">
                  <ul class="ps-0 d-flex mb-0">
                    <li><div class="timer">200</div></li>
                    <li><span>+</span></li>
                  </ul>
                  <p class="text mb-0">Stores around the world</p>
                </div>
                <div class="details mb25">
                  <ul class="ps-0 d-flex mb-0">
                    <li><div class="timer">1</div></li>
                    <li><span>K</span></li>
                    <li><span>+</span></li>
                  </ul>
                  <p class="text mb-0">Stores around the world</p>
                </div>
                <a href="listing" class="ud-btn btn-thm">See More<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Testimonials -->
    <section class="our-testimonial p-0">
      <div class="cta-banner2 bgc-f7 maxw1600 mx-auto pt110 pt60-md pb110 pb60-md bdrs12 position-relative">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="300ms">
              <div class="main-title text-center">
                <h2>Testimonials</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 m-auto wow fadeInUp" data-wow-delay="500ms">
              <div class="testimonial-style2">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade" id="pills-1st" role="tabpanel" aria-labelledby="pills-1st-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">Our stay at Aveden was absolutely fantastic! The host was incredibly welcoming, the apartment was spotless, and the location couldn't have been better. We'll definitely be coming back!</h4>
                      <h6 class="name">Mery Mwangi</h6>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="pills-2nd" role="tabpanel" aria-labelledby="pills-2nd-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">I can't say enough good things about Aveden experience. From the breathtaking views to the cozy decor, it felt like a home away from home. We had an unforgettable time, and we'll be recommending this place to all our friends!</h4>
                      <h6 class="name">Fay Teresa</h6>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-3rd" role="tabpanel" aria-labelledby="pills-3rd-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">Staying at Aveden was a dream come true. The host went above and beyond to make our stay comfortable, and the attention to detail in the design of the space was impressive. We can't wait to return!</h4>
                      <h6 class="name">Tessie Moh</h6>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-4th" role="tabpanel" aria-labelledby="pills-4th-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">We had the most amazing weekend getaway at Aveden. The cottage was charming, and the garden was a serene oasis. It was the perfect escape from the city, and we can't wait to return for another relaxing stay.</h4>
                      <h6 class="name">John Evans</h6>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-5th" role="tabpanel" aria-labelledby="pills-5th-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">Our family had an incredible vacation thanks to Aveden. The location was perfect for exploring the area, and the amenities provided made our stay stress-free. We'll cherish the memories we made here forever.</h4>
                      <h6 class="name">Ignatious Onyango</h6>
                    </div>
                  </div>
                </div>
                <div class="tab-list position-relative">
                  <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link ps-0" id="pills-1st-tab" data-bs-toggle="pill" data-bs-target="#pills-1st" type="button" role="tab" aria-controls="pills-1st" aria-selected="true"><img src="images/testimonials/testi-1.png" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-2nd-tab" data-bs-toggle="pill" data-bs-target="#pills-2nd" type="button" role="tab" aria-controls="pills-2nd" aria-selected="false"><img src="images/testimonials/testi-2.png" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-3rd-tab" data-bs-toggle="pill" data-bs-target="#pills-3rd" type="button" role="tab" aria-controls="pills-3rd" aria-selected="false"><img src="images/testimonials/testi-3.png" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-4th-tab" data-bs-toggle="pill" data-bs-target="#pills-4th" type="button" role="tab" aria-controls="pills-4th" aria-selected="false"><img src="images/testimonials/testi-4.png" alt=""></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link pe-0" id="pills-5th-tab" data-bs-toggle="pill" data-bs-target="#pills-5th" type="button" role="tab" aria-controls="pills-5th" aria-selected="false"><img src="images/testimonials/testi-5.png" alt=""></button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Property Cities -->
    <section class="pb90">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Our Exclusive Agents</h2>
              <p class="paragraph">Our guys on the ground are always ready to help</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="500ms">
            <div class="property-city-slider navi_pagi_top_right slider-dib-sm slider-5-grid owl-theme owl-carousel">
            <?php
              //SQL Query
              $query = mysqli_query($server, "SELECT * FROM `agents` ORDER BY RAND() LIMIT 15") or die(mysqli_error($server));
              //$result = mysqli_query($conn, $query);

              if (mysqli_num_rows($query) > 0) {
              // OUTPUT DATA OF EACH ROW
              while($row = mysqli_fetch_assoc($query)) {
            ?>
              <div class="item">
                <a href="#">
                  <div class="team-style1 mb30">
                    <div class="team-img"><img class="w-100" src="images/team/team-1.jpg" alt=""></div>
                    <div class="team-content pt20">
                      <h6 class="name mb-1"><?php echo $row["name"];?></h6>
                      <p class="text fz15 mb-0"><?php echo $row["house_category"]; ?></p>
                    </div>
                  </div>
                </a>
              </div><?php }}?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners --> 
    <section class="our-partners pt0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="500ms">
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="images/partners/1.png" alt="1.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="images/partners/2.png" alt="2.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="images/partners/3.png" alt="3.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="images/partners/4.png" alt="4.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="images/partners/5.png" alt="5.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="images/partners/6.png" alt="6.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA --> 
    <section class="our-cta2 p0 px20">
      <div class="cta-banner2 bgc-thm maxw1600 mx-auto pt100 pt50-md pb85 pb50-md px30-md bdrs12 position-relative">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="images/about/element-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="images/about/element-2.png" alt="">
        </div>
        <div class="cta-style2 d-none d-lg-block wow fadeInRight" data-wow-delay="300ms">
          <img src="images/about/cta-img-1.png" alt="">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-xl-5 wow fadeInUp" data-wow-delay="500ms">
              <div class="cta-style2">
                <h2 class="cta-title">Start Listing or Booking a Property With Aveden</h2>
                <p class="cta-text">Find out more about Aveden.</p>
                <a href="about" class="ud-btn btn-dark mt10">Learn More<i class="fal fa-arrow-right-long"></i></a>
              </div>
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
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/isotop.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/parallax.js"></script>
<script src="js/pricing-slider.js"></script>
<script src="js/swiper.js"></script>
<!-- Custom script for all pages -->
<script src="js/script.js"></script>
</body>
</html>