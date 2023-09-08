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
<link rel="stylesheet" href="css/slider.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Aveden - Where Every Stay is a Journey</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
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
  
  <!-- Menu In Hiddn SideBar -->
  <div class="rightside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Welcome to Aveden</h4>
    </div>
    <div class="hsidebar-content">
      <div class="hiddenbar_navbar_content">
        <div class="hiddenbar_navbar_menu">
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="" role="button">Apartments</a></li>
            <li class="nav-item"> <a class="nav-link" href="" role="button">Bungalow</a></li>
            <li class="nav-item"> <a class="nav-link" href="" role="button">Houses</a></li>
            <li class="nav-item"> <a class="nav-link" href="" role="button">Loft</a></li>
            <li class="nav-item"> <a class="nav-link" href="" role="button">Office</a></li>
            <li class="nav-item"> <a class="nav-link" href="" role="button">Townhome</a></li>
            <li class="nav-item"> <a class="nav-link" href="" role="button">Villa</a></li>
          </ul>
        </div>
        <div class="hiddenbar_footer position-relative bdrt1">
          <div class="row pt45 pb30 pl30">
            <div class="col-auto">
              <div class="contact-info">
                <p class="info-title dark-color">Total Free Customer Care</p>
                <h6 class="info-phone dark-color"><a href="+(0)-123-050-945-02">+(0) 123 050 945 02</a></h6>
              </div>
            </div>
            <div class="col-auto">
              <div class="contact-info">
                <p class="info-title dark-color">Need Live Support?</p>
                <h6 class="info-mail dark-color"><a href="mailto:hi@aveden.com">hi@aveden.com</a></h6>
              </div>
            </div>
          </div>
          <div class="row pt30 pb30 bdrt1">
            <div class="col-auto">
              <div class="social-style-sidebar d-flex align-items-center pl30">
                <h6 class="me-4 mb-0">Follow us</h6>
                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Menu In Hiddn SideBar --> 
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
  <?php
    include 'mobile_header.php';
  ?>

  <div class="body_content">
    <!-- UI Elements Sections -->
    <section class="breadcumb-section2 p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">About Us</h2>
              <div class="breadcumb-list">
                <a href="">Home</a>
                <a href="">For Rent</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our About Area -->
    <section class="our-about pb90">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-6">
            <h2>We're on a Mission to Create <br class="d-none d-lg-block"> a world where anyone can belong.</h2>
          </div>
          <div class="col-lg-6">
            <p class="text mb25">At Aveden, we believe in the transformative power of travel and the remarkable connections it fosters. Founded 2020, our journey began with a simple yet revolutionary idea: to provide a platform where people can find unique accommodations and experiences, anywhere in the world.</p>
            <p class="text mb55">Our mission is to create a world where anyone can belong anywhere, transcending traditional notions of travel and hospitality. Whether you're a wanderer seeking a cozy nook in a bustling city or an adventurer yearning for an unforgettable escape, we're here to make your travel dreams a reality.</p>
            <div class="row">
              <div class="col-sm-6">
                <div class="why-chose-list style3">
                  <div class="list-one mb30">
                    <span class="list-icon flex-shrink-0 flaticon-garden mb20"></span>
                    <div class="list-content flex-grow-1">
                      <h6 class="mb-1">Modern Houses</h6>
                      <p class="text mb-0 fz14">House built with current trends <br class="d-none d-sm-block"> put in considerations.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="why-chose-list style3">
                  <div class="list-one mb30">
                    <span class="list-icon flex-shrink-0 flaticon-secure-payment mb20"></span>
                    <div class="list-content flex-grow-1">
                      <h6 class="mb-1">Secure Payment</h6>
                      <p class="text mb-0 fz14">We provide safe and fast<br class="d-none d-sm-block"> methods of payment.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Banner -->
    <section class="our-about pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="about-page-img">
              <img class="w-100" src="images/about/about-page-banner.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Funfact -->
    <section class="pt-0">
      <div class="container">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">50</div></li>
                  <li><span>+</span></li>
                </ul>
                <p class="text mb-0">Award Winning</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">1</div></li>
                  <li><span>K</span></li>
                </ul>
                <p class="text mb-0">Property Ready</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">5K</div></li>
                  <li><span>+</span></li>
                </ul>
                <p class="text mb-0">Happy Customer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Agents -->
    <section class="pt-0 pb80 pb50-md">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9 mx-auto text-center">
            <div class="main-title2">
              <h2 class="title">Our Exclusive Agents</h2>
              <p class="paragraph">We have more than enough qualified agents to help you through in choosing a house.</p>
            </div>
          </div>
        </div>
            <div class="row wow fadeInUp" data-wow-delay="300ms">
        <?php
              //SQL Query
              $query = mysqli_query($server, "SELECT * FROM `agents` ORDER BY RAND() LIMIT 5") or die(mysqli_error($server));
              //$result = mysqli_query($conn, $query);

              if (mysqli_num_rows($query) > 0) {
              // OUTPUT DATA OF EACH ROW
              while($row = mysqli_fetch_assoc($query)) {
            ?>
            <div class="col-auto">  
            <div class="feature-style2 mb30">
              <div class="feature-img"><img class="bdrs12" src="images/team/agent-1.jpg" alt=""></div>
              <div class="feature-content pt20">
                <h6 class="title mb-1"><?php echo $row["name"];?></h6>
                <p class="text fz15"><?php echo $row["house_category"]; ?></p>
              </div>
            </div>
          </div><?php }}?>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="pt-0">
      <div class="cta-banner3 bgc-thm-light mx-auto maxw1600 pt100 pt60-lg pb90 pb60-lg bdrs24 position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-5 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
              <div class="mb30">
                <h2 class="title text-capitalize">Let’s find the right <br class="d-none d-md-block"> selling option for you</h2>
              </div>
              <div class="why-chose-list style2">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-security"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Property Management</h6>
                    <p class="text mb-0 fz15">After property has been placed on the market, we will take care of it for you.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-keywording"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Mortgage Services</h6>
                    <p class="text mb-0 fz15">We offer affordable morgage services which are flexible to accomodate everyone.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-investment"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Currency Services</h6>
                    <p class="text mb-0 fz15">We accept both Kenyan shillings as well as US dollars at the current conversion rates</p>
                  </div>
                </div>
              </div>
              <a href="admin/dashboard-add-property" class="ud-btn btn-dark">Get started<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners --> 
    <section class="our-partners p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="100ms">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
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
    <section class="our-cta">
      <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pb120 pt60-md pb60-md bdrs12 position-relative mx20-lg">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="images/about/element-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="images/about/element-1.png" alt="">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 wow fadeInLeft">
              <div class="cta-style1">
                <h2 class="cta-title">Need help? Talk to our expert.</h2>
                <p class="cta-text mb-0">Talk to our experts or Browse through more properties.</p>
              </div>
            </div>
            <div class="col-lg-5 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
              <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                <a href="contact" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i class="fal fa-arrow-right-long"></i></a>
                <a href="contact" class="ud-btn btn-dark"><span class="flaticon-call vam pe-2"></span>920 851 9087</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Footer --> 
    <section class="footer-style1 pt60 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="footer-widget mb-4 mb-lg-5">
              <a class="footer-logo" href="index"><img class="mb40" src="images/header-logo.svg" alt=""></a>
              <div class="row mb-4 mb-lg-5">
                <div class="col-auto">
                  <div class="contact-info">
                    <p class="info-title">Total Free Customer Care</p>
                    <h6 class="info-phone"><a href="+(0)-123-050-945-02">+(0) 123 050 945 02</a></h6>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="contact-info">
                    <p class="info-title">Nee Live Support?</p>
                    <h6 class="info-mail"><a href="mailto:hi@aveden.com">hi@aveden.com</a></h6>
                  </div>
                </div>
              </div>
              <div class="app-widget">
                <h5 class="title text-white mb10">Apps</h5>
                <div class="row mb-4 mb-lg-5">
                  <div class="col-auto">
                    <a href="">
                      <div class="app-info d-flex align-items-center mb10">
                        <div class="flex-shrink-0">
                          <i class="fab fa-apple fz30 text-white"></i>
                        </div>
                        <div class="flex-grow-1 ml20">
                          <p class="app-text fz13 mb0">Download on the</p>
                          <h6 class="app-title text-white fz14">Apple Store</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-auto">
                    <a href="">
                      <div class="app-info d-flex align-items-center mb10">
                        <div class="flex-shrink-0">
                          <i class="fab fa-google-play fz30 text-white"></i>
                        </div>
                        <div class="flex-grow-1 ml20">
                          <p class="app-text fz13 mb0">Get in on</p>
                          <h6 class="app-title text-white fz14">Google Play</h6>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="social-widget">
                <h6 class="text-white mb20">Follow us on social media</h6>
                <div class="social-style1">
                  <a href=""><i class="fab fa-facebook-f list-inline-item"></i></a>
                  <a href=""><i class="fab fa-twitter list-inline-item"></i></a>
                  <a href=""><i class="fab fa-instagram list-inline-item"></i></a>
                  <a href=""><i class="fab fa-linkedin-in list-inline-item"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="footer-widget mb-4 mb-lg-5">
              <div class="mailchimp-widget mb-4 mb-lg-5">
                <h6 class="title text-white mb20">Keep Yourself Up to Date</h6>
                <div class="mailchimp-style1">
                  <input type="email" class="form-control" placeholder="Your Email">
                  <button type="submit">Subscribe</button>
                </div>
              </div>
              <div class="row justify-content-between">
                <div class="col-auto">
                  <div class="link-style1 mb-3">
                    <h6 class="text-white mb25">Popular Search</h6>
                    <div class="link-list">
                      <a href="">Apartment for Rent</a>
                      <a href="">Apartment Low to hide</a>
                      <a href="">Offices for Buy</a>
                      <a href="">Offices for Rent</a>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="link-style1 mb-3">
                    <h6 class="text-white mb25">Quick Links</h6>
                    <ul class="ps-0">
                      <li><a href="">Terms of Use</a></li>
                      <li><a href="">Privacy Policy</a></li>
                      <li><a href="">Pricing Plans</a></li>
                      <li><a href="">Our Services</a></li>
                      <li><a href="">Contact Support</a></li>
                      <li><a href="">Careers</a></li>
                      <li><a href="">FAQs</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="link-style1 mb-3">
                    <h6 class="text-white mb25">Discover</h6>
                    <ul class="ps-0">
                      <li><a href="">Mombasa</a></li>
                      <li><a href="">Nairobi</a></li>
                      <li><a href="">Kisumu</a></li>
                      <li><a href="">Naivasha</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container white-bdrt1 py-4">
        <div class="row">
          <div class="col-sm-6">
            <div class="text-center text-lg-start">
              <p class="copyright-text text-gray ff-heading">© Homez - All rights reserved</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="text-center text-lg-end">
              <p class="footer-menu ff-heading text-gray"><a class="text-gray" href="#">Privacy</a> · <a class="text-gray" href="#">Terms</a> · <a class="text-gray" href="#">Sitemap</a></p>
            </div>
          </div>
        </div>
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
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/ace-responsive-menu.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>