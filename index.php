<?php
  require_once 'config/conn.php';
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
    include 'header.php';
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
  <!-- Advance Feature Modal Start -->
  <div class="advance-feature-modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header pl30 pr30">
            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-wrapper">
                  <h6 class="list-title">Price Range</h6>
                  <!-- Range Slider Mobile Version -->
                  <div class="range-slider-style modal-version">
                    <div class="range-wrapper">
                      <div class="mb30 mt35" id="slider"></div>
                      <div class="d-flex align-items-center">
                        <span id="slider-range-value1"></span><i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                        <span id="slider-range-value2"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Type</h6>
                  <div class="form-style2 input-group">
                    <select class="selectpicker" data-live-search="true" data-width="100%">
                      <option>Property</option>
                      <option data-tokens="Apartments">Apartments</option>
                      <option data-tokens="Bungalow">Bungalow</option>
                      <option data-tokens="Houses">Houses</option>
                      <option data-tokens="Loft">Loft</option>
                      <option data-tokens="Office">Office</option>
                      <option data-tokens="Townhome">Townhome</option>
                      <option data-tokens="Villa">Villa</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Property ID</h6>
                  <div class="form-style2">
                    <input type="text" class="form-control" placeholder="RT04949213">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Bedrooms</h6>
                  <div class="d-flex">
                    <div class="selection">
                      <input id="xany" name="xbeds" type="radio" checked>
                      <label for="xany">any</label>
                    </div>
                    <div class="selection">
                      <input id="xoneplus" name="xbeds" type="radio">
                      <label for="xoneplus">1+</label>
                    </div>
                    <div class="selection">
                      <input id="xtwoplus" name="xbeds" type="radio">
                      <label for="xtwoplus">2+</label>
                    </div>
                    <div class="selection">
                      <input id="xthreeplus" name="xbeds" type="radio">
                      <label for="xthreeplus">3+</label>
                    </div>
                    <div class="selection">
                      <input id="xfourplus" name="xbeds" type="radio">
                      <label for="xfourplus">4+</label>
                    </div>
                    <div class="selection">
                      <input id="xfiveplus" name="xbeds" type="radio">
                      <label for="xfiveplus">5+</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Bathrooms</h6>
                  <div class="d-flex">
                    <div class="selection">
                      <input id="yany" name="ybath" type="radio" checked>
                      <label for="yany">any</label>
                    </div>
                    <div class="selection">
                      <input id="yoneplus" name="ybath" type="radio">
                      <label for="yoneplus">1+</label>
                    </div>
                    <div class="selection">
                      <input id="ytwoplus" name="ybath" type="radio">
                      <label for="ytwoplus">2+</label>
                    </div>
                    <div class="selection">
                      <input id="ythreeplus" name="ybath" type="radio">
                      <label for="ythreeplus">3+</label>
                    </div>
                    <div class="selection">
                      <input id="yfourplus" name="ybath" type="radio">
                      <label for="yfourplus">4+</label>
                    </div>
                    <div class="selection">
                      <input id="yfiveplus" name="ybath" type="radio">
                      <label for="yfiveplus">5+</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Location</h6>
                  <div class="form-style2 input-group">
                    <select class="selectpicker" data-live-search="true" data-width="100%">
                      <option>All Cities</option>
                      <option data-tokens="California">California</option>
                      <option data-tokens="Kisumu">Kisumu</option>
                      <option data-tokens="LosAngeles">Nairobi</option>
                      <option data-tokens="Manhattan">Manhattan</option>
                      <option data-tokens="NewJersey">New Jersey</option>
                      <option data-tokens="NewYork">Naivasha</option>
                      <option data-tokens="SanDiego">San Diego</option>
                      <option data-tokens="SanFrancisco">San Francisco</option>
                      <option data-tokens="Texas">Texas</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Square Feet</h6>
                  <div class="space-area">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="form-style1">
                        <input type="text" class="form-control" placeholder="Min.">
                      </div>
                      <span class="dark-color">-</span>
                      <div class="form-style1">
                        <input type="text" class="form-control" placeholder="Max">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-wrapper mb0">
                  <h6 class="list-title mb10">Amenities</h6>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Attic
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Basketball court
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Air Conditioning
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Lawn
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">TV Cable
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Dryer
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Outdoor Shower
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Washer
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Lake view
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Wine cellar
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Front yard
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Refrigerator
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
            <div class="btn-area">
              <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Advance Feature Modal End -->

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="images/header-logo2.svg" alt=""></a>
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
    <!-- Home Banner Style V1 -->
    <section class="home-banner-style2 p0">
      <div class="home-style2">
        <div class="container maxw1600">
          <div class="home2-hero-banner bdrs12"></div>
          <div class="row">
            <div class="col-xl-10 mx-auto">
              <div class="inner-banner-style2 text-center">
                <div class="advance-style2 mt80 mt0-md mb60 mx-auto animate-up-1">
                  <ul class="nav nav-tabs p-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Search House</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="advance-content-style2">
                        <div class="row align-items-center justify-content-start justify-content-md-center">
                          <div class="col-md-5 col-lg-6">
                            <div class="advance-search-field position-relative text-start bdrr1 bdrrn-sm bb1-sm">
                              <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control" type="text" name="search" placeholder="Enter Keyword">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-3 col-lg-3 ps-md-0">
                            <div class="bdrr1 bdrrn-sm pe-0 pe-lg-3 bb1-sm">
                              <div class="bootselect-multiselect">
                                <select class="selectpicker" data-width="100%">
                                  <option data-tokens="Apartments">Apartments</option>
                                  <option data-tokens="Bungalow">Bungalow</option>
                                  <option data-tokens="Houses">Houses</option>
                                  <option data-tokens="Loft">Loft</option>
                                  <option data-tokens="Office">Office</option>
                                  <option data-tokens="TownHome">TownHome</option>
                                  <option data-tokens="Villa">Villa</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                              <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span><a href="listing"> Advanced</a></button>
                              <button class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="advance-content-style2">
                        <div class="row align-items-center justify-content-start justify-content-md-center">
                          <div class="col-md-5 col-lg-6">
                            <div class="advance-search-field position-relative text-start bdrr1 bdrrn-sm bb1-sm">
                              <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control" type="text" name="search" placeholder="Enter Keyword">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-3 col-lg-3 ps-md-0">
                            <div class="bdrr1 bdrrn-sm pe-0 pe-lg-3 bb1-sm">
                              <div class="bootselect-multiselect">
                                <select class="selectpicker" data-width="100%">
                                  <option data-tokens="Apartments">Apartments</option>
                                  <option data-tokens="Bungalow">Bungalow</option>
                                  <option data-tokens="Houses">Houses</option>
                                  <option data-tokens="Loft">Loft</option>
                                  <option data-tokens="Office">Office</option>
                                  <option data-tokens="TownHome">TownHome</option>
                                  <option data-tokens="Villa">Villa</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                              <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                              <button class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <h2 class="hero-title animate-up-2">Find Your Dream Home</h2>
                <p class="hero-text fz15 animate-up-3">Let’s find a home that’s perfect for you</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pb90 pb30-md">
      <div class="container">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="dots_none nav_none slider-dib-sm slider-5-grid owl-theme owl-carousel">
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style4">
                    <span class="icon flaticon-home"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Houses</h6>
                      <?php
                        // SQL query to count rows with "house" in the category column
                        $sql = mysqli_query($server,"SELECT COUNT(`category`) FROM properties WHERE `category` = 'house'") or die(mysqli_error($server));

                        // Fetch the count
                        $row = mysqli_fetch_assoc($sql);
                        $count = $row['count'];
                        
                      ?>
                      <p class="text mb-0"><?php echo $row["count"];?> Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style4">
                    <span class="icon flaticon-corporation"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Apartments</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style4">
                    <span class="icon flaticon-network"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Office</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style4">
                    <span class="icon flaticon-garden"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Villa</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style4">
                    <span class="icon flaticon-chat"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Townhome</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
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
                    <div class="list-price"><?php echo $row["price"];?> / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html"><?php echo $row["title"];?></a></h6>
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
                <a href="page-grid-default-v1.html">
                  <div class="feature-style2 mb30">
                    <div class="feature-img"><img class="w-100" src="images/listings/city-listing-1.jpg" alt=""></div>
                    <div class="feature-content pt20">
                      <h6 class="title mb-1"><?php $row["city"] ?></h6>
                      <p class="text fz15"><?php $row["total_properties"] ?> Properties</p>
                    </div>
                  </div>
                </a>
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
                    <h6 class="list-title"><a href="page-property-single-v1.html"><?php $row["title"]; ?></a></h6>
                    <p class="list-text"><?php echo $row["street"], $row["city"], $row["county"];?></p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span><?php echo $row["no_bedroom"];?> bed</a>
                      <a href=""><span class="flaticon-shower"></span><?php echo $row["no_bathroom"];?> bath</a>
                      <a href=""><span class="flaticon-expand"></span><?php echo $row["room_size"];?> sqft</a>
                    </div>
                    <a href="#" class="btn mt15 fz15">View House<i class="fal fa-arrow-right-long"></i></a>
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
                <p class="paragraph">10,000+ unique online course list designs</p>
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
                      <h4 class="testi-text">What a great experience! I have visited one of the workshops and attended a masterclass, and both were super useful for young designers. Highly recommended.</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade show active" id="pills-2nd" role="tabpanel" aria-labelledby="pills-2nd-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">What a great experience! I have visited one of the workshops and attended a masterclass, and both were super useful for young designers. Highly recommended.</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-3rd" role="tabpanel" aria-labelledby="pills-3rd-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">What a great experience! I have visited one of the workshops and attended a masterclass, and both were super useful for young designers. Highly recommended.</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-4th" role="tabpanel" aria-labelledby="pills-4th-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">What a great experience! I have visited one of the workshops and attended a masterclass, and both were super useful for young designers. Highly recommended.</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-5th" role="tabpanel" aria-labelledby="pills-5th-tab">
                    <div class="testi-content text-center">
                      <span class="icon fas fa-quote-left"></span>
                      <h4 class="testi-text">What a great experience! I have visited one of the workshops and attended a masterclass, and both were super useful for young designers. Highly recommended.</h4>
                      <h6 class="name">Ali Tufan</h6>
                      <p class="design">Product Manager, Apple Inc</p>
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