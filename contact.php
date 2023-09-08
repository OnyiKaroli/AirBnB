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
                <p class="info-title dark-color">Nee Live Support?</p>
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
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="images/header-logo.png" alt=""></a>
            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
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
    <!-- Our Contact With Map -->
    <section class="p-0">
      <iframe class="home8-map contact-page" loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
    </section>
    <section>
      <div class="container">
        <div class="row d-flex align-items-end">
          <div class="col-lg-5 position-relative">
            <div class="home8-contact-form default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white">
              <h4 class="form-title mb25">Have questions? Get in touch!</h4>
              <form class="form-style1">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">First Name</label>
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Last Name</label>
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb20">
                      <label class="heading-color ff-heading fw600 mb10">Email</label>
                      <input type="email" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb10">
                      <label class="heading-color ff-heading fw600 mb10">Textarea</label>
                      <textarea cols="30" rows="4" placeholder="There are many variations of passages."></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="d-grid">
                      <a class="ud-btn btn-thm" href="page-contact.html">Submit<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-2">
            <h2 class="mb30 text-capitalize">We’d love to hear <br class="d-none d-lg-block">from you.</h2>
            <p class="text">We are here to answer any question you may have. As a partner of corporates, Aveden has offices located in Nairobi and Nakuru.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pt0 pb90 pb10-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">Visit Our Office</h2>
              <p class="paragraph">Aveden has more offices to help serve you better, you can visit us through our offices.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
            <div class="iconbox-style8 text-center">
              <div class="icon"><img src="images/icon/paris.svg" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Nairobi</h4>
                <p class="text mb-1">Tom Mboya Ave, CBD, Nairobi</p>
                <h6 class="mb10">(315) 905-2321</h6>
                <a class="text-decoration-underline" href="">Open Google Map</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
            <div class="iconbox-style8 active text-center">
              <div class="icon"><img src="images/icon/london.svg" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Nakuru</h4>
                <p class="text mb-1">Tom Mboya Ave, CBD, Nakuru</p>
                <h6 class="mb10">(315) 905-2321</h6>
                <a class="text-decoration-underline" href="">Open Google Map</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
            <div class="iconbox-style8 text-center">
              <div class="icon"><img src="images/icon/new-york.svg" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Mombasa</h4>
                <p class="text mb-1">Mama Ngina Ave, CBD, Mombasa</p>
                <h6 class="mb10">(315) 905-2321</h6>
                <a class="text-decoration-underline" href="">Open Google Map</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA --> 
    <section class="our-cta pt-0">
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
                <a href="tel:2540123456" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i class="fal fa-arrow-right-long"></i></a>
                <a href="tel:2547345860" class="ud-btn btn-dark"><span class="flaticon-call vam pe-2"></span>920 851 9087</a>
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
              <a class="footer-logo" href="index"><img class="mb40" src="images/header-logo.png" alt=""></a>
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
<script src="js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>