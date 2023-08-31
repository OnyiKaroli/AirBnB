<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Homez - Real Estate HTML Template">
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
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Homez - Real Estate HTML Template</title>
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
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
  <?php
    include 'header_v2.php';
  ?>
  <!-- Signup Modal -->
  <div class="signup-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Welcome to Realton</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="log-reg-form">
              <div class="navtab-style2">
                <nav>
                  <div class="nav nav-tabs mb20" id="nav-tab" role="tablist">
                    <button class="nav-link active fw600" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sign In</button>
                    <button class="nav-link fw600" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">New Account</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent2">
                  <div class="tab-pane fade show active fz15" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="form-style1">
                      <div class="mb25">
                        <label class="form-label fw600 dark-color">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                      </div>
                      <div class="mb15">
                        <label class="form-label fw600 dark-color">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password">
                      </div>
                      <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                        <label class="custom_checkbox fz14 ff-heading">Remember me
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <a class="fz14 ff-heading" href="#">Lost your password?</a>
                      </div>
                      <div class="d-grid mb20">
                        <button class="ud-btn btn-thm" type="button">Sign in <i class="fal fa-arrow-right-long"></i></button>
                      </div>
                      <div class="hr_content mb20"><hr><span class="hr_top_text">OR</span></div>
                      <div class="d-grid mb10">
                        <button class="ud-btn btn-white" type="button"><i class="fab fa-google"></i> Continue Google</button>
                      </div>
                      <div class="d-grid mb10">
                        <button class="ud-btn btn-fb" type="button"><i class="fab fa-facebook-f"></i> Continue Facebook</button>
                      </div>
                      <div class="d-grid mb20">
                        <button class="ud-btn btn-apple" type="button"><i class="fab fa-apple"></i> Continue Apple</button>
                      </div>
                      <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600" href="page-register.html">Create an account.</a></p>
                    </div>
                  </div>
                  <div class="tab-pane fade fz15" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="form-style1">
                      <div class="mb25">
                        <label class="form-label fw600 dark-color">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                      </div>
                      <div class="mb20">
                        <label class="form-label fw600 dark-color">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password">
                      </div>
                      <div class="d-grid mb20">
                        <button class="ud-btn btn-thm" type="button">Create account <i class="fal fa-arrow-right-long"></i></button>
                      </div>
                      <div class="hr_content mb20"><hr><span class="hr_top_text">OR</span></div>
                      <div class="d-grid mb10">
                        <button class="ud-btn btn-white" type="button"><i class="fab fa-google"></i> Continue Google</button>
                      </div>
                      <div class="d-grid mb10">
                        <button class="ud-btn btn-fb" type="button"><i class="fab fa-facebook-f"></i> Continue Facebook</button>
                      </div>
                      <div class="d-grid mb20">
                        <button class="ud-btn btn-apple" type="button"><i class="fab fa-apple"></i> Continue Apple</button>
                      </div>
                      <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600" href="page-register.html">Create an account.</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Menu In Hiddn SideBar -->
  <div class="rightside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Welcome to Realton</h4>
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
                <h6 class="info-mail dark-color"><a href="mailto:hi@homez.com">hi@homez.com</a></h6>
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
    </div>
    <div class="hsidebar-content">
      <div class="widget-wrapper">
        <h6 class="list-title">Find your home</h6>
        <div class="search_area">
          <input type="text" class="form-control" placeholder="What are you looking for?">
          <label><span class="flaticon-search"></span></label>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Listing Status</h6>
        <div class="radio-element">
          <div class="form-check d-flex align-items-center mb10">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">Buy</label>
          </div>
          <div class="form-check d-flex align-items-center mb10">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked="checked">
            <label class="form-check-label" for="flexRadioDefault5">Rent</label>
          </div>
          <div class="form-check d-flex align-items-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
            <label class="form-check-label" for="flexRadioDefault6">Sold</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Property Type</h6>
        <div class="checkbox-style1">
          <label class="custom_checkbox">Houses
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Apartments
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Office
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Villa
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Townhome
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Price Range</h6>
        <!-- Range Slider Mobile Version -->
        <div class="range-slider-style2">
          <div class="range-wrapper">
            <div class="mb30 mt35" id="slider"></div>
            <div class="d-flex align-items-center">
              <span id="slider-range-value1"></span><i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
              <span id="slider-range-value2"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Bedrooms</h6>
        <div class="d-flex">
          <div class="selection">
            <input id="any2" name="beds" type="radio" checked>
            <label for="any2">any</label>
          </div>
          <div class="selection">
            <input id="oneplus2" name="beds" type="radio">
            <label for="oneplus2">1+</label>
          </div>
          <div class="selection">
            <input id="twoplus2" name="beds" type="radio">
            <label for="twoplus2">2+</label>
          </div>
          <div class="selection">
            <input id="threeplus2" name="beds" type="radio">
            <label for="threeplus2">3+</label>
          </div>
          <div class="selection">
            <input id="fourplus2" name="beds" type="radio">
            <label for="fourplus2">4+</label>
          </div>
          <div class="selection">
            <input id="fiveplus2" name="beds" type="radio">
            <label for="fiveplus2">5+</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Bathrooms</h6>
        <div class="d-flex">
          <div class="selection">
            <input id="bathany2" name="bath" type="radio" checked>
            <label for="bathany2">any</label>
          </div>
          <div class="selection">
            <input id="bathoneplus2" name="bath" type="radio">
            <label for="bathoneplus2">1+</label>
          </div>
          <div class="selection">
            <input id="bathtwoplus2" name="bath" type="radio">
            <label for="bathtwoplus2">2+</label>
          </div>
          <div class="selection">
            <input id="baththreeplus2" name="bath" type="radio">
            <label for="baththreeplus2">3+</label>
          </div>
          <div class="selection">
            <input id="bathfourplus2" name="bath" type="radio">
            <label for="bathfourplus2">4+</label>
          </div>
          <div class="selection">
            <input id="bathfiveplus2" name="bath" type="radio">
            <label for="bathfiveplus2">5+</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper advance-feature-modal">
        <h6 class="list-title">Location</h6>
        <div class="form-style2 input-group">
          <select class="selectpicker" data-width="100%">
            <option>All Cities</option>
            <option data-tokens="California">California</option>
            <option data-tokens="Chicago">Chicago</option>
            <option data-tokens="LosAngeles">Los Angeles</option>
            <option data-tokens="Manhattan">Manhattan</option>
            <option data-tokens="NewJersey">New Jersey</option>
            <option data-tokens="NewYork">New York</option>
            <option data-tokens="SanDiego">San Diego</option>
            <option data-tokens="SanFrancisco">San Francisco</option>
            <option data-tokens="Texas">Texas</option>
          </select>
        </div>
      </div>
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
      <div class="widget-wrapper">
        <h6 class="list-title">Year Built</h6>
        <div class="space-area">
          <div class="d-flex align-items-center justify-content-between">
            <div class="form-style1">
              <input type="text" class="form-control" placeholder="2019">
            </div>
            <span class="dark-color">-</span>
            <div class="form-style1">
              <input type="text" class="form-control" placeholder="2022">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <div class="feature-accordion">
          <div class="accordion" id="accordionExample2">
            <div class="accordion-item border-none">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button border-none p-0 after-none feature-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><span class="flaticon-settings"></span> Other Features</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                <div class="accordion-body p-0 mt15">
                  <div class="row">
                    <div class="col-lg-6">
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
                        <label class="custom_checkbox">TV Cable
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Dryer
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox-style1">
                        <label class="custom_checkbox">Outdoor Shower
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Washer
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
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
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper mb20">
        <div class="btn-area d-grid align-items-center">
          <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
        </div>
      </div>
      <div class="reset-area d-flex align-items-center justify-content-between">
        <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
        <a class="reset-button" href="#"><span class="flaticon-favourite"></span><u>Save Search</u></a>
      </div>
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
            <a class="mobile_logo" href="#"><img src="images/header-logo2.svg" alt=""></a>
            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>
        <li><span>Home</span>
          <ul>
            <li><a href="index">Home V1</a></li>
            <li><a href="index2.html">Home V2</a></li>
            <li><a href="index3.html">Home V3</a></li>
            <li><a href="index4.html">Home V4</a></li>
            <li><a href="index5.html">Home V5</a></li>
            <li><a href="index6.html">Home V6</a></li>
            <li><a href="index7.html">Home V7</a></li>
            <li><a href="index8.html">Home V8</a></li>
            <li><a href="index9.html">Home V9</a></li>
            <li><a href="index10.html">Home V10</a></li>
          </ul>
        </li>
        <li><span>Property Listign</span>
          <ul>
            <li><span>Listing Grid</span>
              <ul>
                <li><a href="page-grid-default-v1.html">Grid Default v1</a></li>
                <li><a href="page-grid-default-v2.html">Grid Default v2</a></li>
                <li><a href="page-property-3-col.html">Grid Full Width 3 Cols</a></li>
                <li><a href="page-property-4-col.html">Grid Full Width 4 Cols</a></li>
                <li><a href="page-property-2-col.html">Grid Full Width 2 Cols</a></li>
                <li><a href="page-property-1-col-v1.html">Grid Full Width 1 Cols v1</a></li>
                <li><a href="page-property-1-col-v2.html">Grid Full Width 1 Cols v2</a></li>
                <li><a href="page-property-banner-v1.html">Banner Search v1</a></li>
                <li><a href="page-property-banner-v2.html">Banner Search v2</a></li>
              </ul>
            </li>
            <li><span>List Style</span>
              <ul>
                <li><a href="page-property-list.html">Style V1</a></li>
                <li><a href="page-property-list-all.html">All List</a></li>
              </ul>
            </li>
            <li><span>Listing Single</span>
              <ul>
                <li><a href="page-property-single-v1.html">Single V1</a></li>
                <li><a href="page-property-single-v2.html">Single V2</a></li>
                <li><a href="page-property-single-v3.html">Single V3</a></li>
                <li><a href="page-property-single-v4.html">Single V4</a></li>
                <li><a href="page-property-single-v5.html">Single V5</a></li>
                <li><a href="page-property-single-v6.html">Single V6</a></li>
                <li><a href="page-property-single-v7.html">Single V7</a></li>
                <li><a href="page-property-single-v8.html">Single V8</a></li>
                <li><a href="page-property-single-v9.html">Single V9</a></li>
                <li><a href="page-property-single-v10.html">Single V10</a></li>
              </ul>
            </li>
            <li><span>Map Style</span>
              <ul>
                <li><a href="page-property-header-map-style.html">Map Header</a></li>
                <li><a href="page-property-half-map-v1.html">Map V1</a></li>
                <li><a href="page-property-half-map-v2.html">Map V2</a></li>
                <li><a href="page-property-half-map-v3.html">Map V3</a></li>
                <li><a href="page-property-half-map-v4.html">Map V4</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><span>User Dashboard</span>
          <ul>
            <li><a href="page-dashboard.html">Dashboard</a></li>
            <li><a href="page-dashboard-message.html">Message</a></li>
            <li><a href="page-dashboard-add-property.html">New Property</a></li>
            <li><a href="page-dashboard-properties.html">My Properties</a></li>
            <li><a href="page-dashboard-favorites.html">My Favorites</a></li>
            <li><a href="page-dashboard-savesearch.html">Saved Search</a></li>
            <li><a href="page-dashboard-review.html">Reviews</a></li>
            <li><a href="page-dashboard-package.html">My Package</a></li>
            <li><a href="page-dashboard-profile.html">My Profile</a></li>
          </ul>
        </li>
        <li><span>Blog</span>
          <ul>
            <li><a href="page-blog-v1.html">List V1</a></li>
            <li><a href="page-blog-v2.html">List V2</a></li>
            <li><a href="page-blog-v3.html">List V3</a></li>
            <li><a href="page-blog-single.html">Single</a></li>
          </ul>
        </li>
        <li><span>Pages</span>
          <ul>
            <li><a href="page-about.html">About</a></li>
            <li><a href="page-contact.html">Contact</a></li>
            <li><a href="page-compare.html">Compare</a></li>
            <li><a href="page-pricing.html">Pricing</a></li>
            <li><a href="page-faq.html">Faq</a></li>
            <li><a href="page-login.html">Login</a></li>
            <li><a href="page-register.html">Register</a></li>
            <li><a href="page-error.html">404</a></li>
            <li><a href="page-invoice.html">Invoices</a></li>
            <li><a href="page-ui-element.html">UI Elements</a></li>
          </ul>
        </li>
        <li class="px-3 mobile-menu-btn">
          <a href="page-dashboard-add-property.html" class="ud-btn btn-thm text-white">Submit Property<i class="fal fa-arrow-right-long"></i></a>
        </li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>

  <div class="body_content">
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">New York Homes for Sale</h2>
              <div class="breadcumb-list">
                <a href="">Home</a>
                <a href="">For Rent</a>
              </div>
              <a href="" class="filter-btn-left mobile-filter-btn d-block d-lg-none"><span class="flaticon-settings"></span> Filter</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Property All Lists -->
    <section class="pt0 pb90 bgc-f7">
      <div class="container">
        <div class="row gx-xl-5">
          <div class="col-lg-4 d-none d-lg-block">
            <div class="list-sidebar-style1">
              <div class="widget-wrapper">
                <h6 class="list-title">Find your home</h6>
                <div class="search_area">
                  <input type="text" class="form-control" placeholder="What are you looking for?">
                  <label><span class="flaticon-search"></span></label>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Listing Status</h6>
                <div class="radio-element">
                  <div class="form-check d-flex align-items-center mb10">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Buy</label>
                  </div>
                  <div class="form-check d-flex align-items-center mb10">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="checked">
                    <label class="form-check-label" for="flexRadioDefault2">Rent</label>
                  </div>
                  <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">Sold</label>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Property Type</h6>
                <div class="checkbox-style1">
                  <label class="custom_checkbox">Houses
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="custom_checkbox">Apartments
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                  <label class="custom_checkbox">Office
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="custom_checkbox">Villa
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="custom_checkbox">Townhome
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Price Range</h6>
                <!-- Range Slider Desktop Version -->
                <div class="range-slider-style1">
                  <div class="range-wrapper">
                    <div class="slider-range mt30 mb20"></div>
                    <div class="text-center">
                      <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-2 dark-color"></span>
                      <input type="text" class="amount2" placeholder="$70987">
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Bedrooms</h6>
                <div class="d-flex">
                  <div class="selection">
                    <input id="any" name="beds" type="radio" checked>
                    <label for="any">any</label>
                  </div>
                  <div class="selection">
                    <input id="oneplus" name="beds" type="radio">
                    <label for="oneplus">1+</label>
                  </div>
                  <div class="selection">
                    <input id="twoplus" name="beds" type="radio">
                    <label for="twoplus">2+</label>
                  </div>
                  <div class="selection">
                    <input id="threeplus" name="beds" type="radio">
                    <label for="threeplus">3+</label>
                  </div>
                  <div class="selection">
                    <input id="fourplus" name="beds" type="radio">
                    <label for="fourplus">4+</label>
                  </div>
                  <div class="selection">
                    <input id="fiveplus" name="beds" type="radio">
                    <label for="fiveplus">5+</label>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Bathrooms</h6>
                <div class="d-flex">
                  <div class="selection">
                    <input id="bathany" name="bath" type="radio" checked>
                    <label for="bathany">any</label>
                  </div>
                  <div class="selection">
                    <input id="bathoneplus" name="bath" type="radio">
                    <label for="bathoneplus">1+</label>
                  </div>
                  <div class="selection">
                    <input id="bathtwoplus" name="bath" type="radio">
                    <label for="bathtwoplus">2+</label>
                  </div>
                  <div class="selection">
                    <input id="baththreeplus" name="bath" type="radio">
                    <label for="baththreeplus">3+</label>
                  </div>
                  <div class="selection">
                    <input id="bathfourplus" name="bath" type="radio">
                    <label for="bathfourplus">4+</label>
                  </div>
                  <div class="selection">
                    <input id="bathfiveplus" name="bath" type="radio">
                    <label for="bathfiveplus">5+</label>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper advance-feature-modal">
                <h6 class="list-title">Location</h6>
                <div class="form-style2 input-group">
          <select class="selectpicker" data-width="100%">
            <option>All Cities</option>
            <option data-tokens="California">California</option>
            <option data-tokens="Chicago">Chicago</option>
            <option data-tokens="LosAngeles">Los Angeles</option>
            <option data-tokens="Manhattan">Manhattan</option>
            <option data-tokens="NewJersey">New Jersey</option>
            <option data-tokens="NewYork">New York</option>
            <option data-tokens="SanDiego">San Diego</option>
            <option data-tokens="SanFrancisco">San Francisco</option>
            <option data-tokens="Texas">Texas</option>
          </select>
                </div>
              </div>
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
              <div class="widget-wrapper">
                <h6 class="list-title">Year Built</h6>
                <div class="space-area">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="form-style1">
                      <input type="text" class="form-control" placeholder="2019">
                    </div>
                    <span class="dark-color">-</span>
                    <div class="form-style1">
                      <input type="text" class="form-control" placeholder="2022">
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <div class="feature-accordion">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-none">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button border-none p-0 after-none feature-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="flaticon-settings"></span> Other Features</button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-0 mt15">
                          <div class="row">
                            <div class="col-lg-6">
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
                                <label class="custom_checkbox">TV Cable
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="custom_checkbox">Dryer
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="checkbox-style1">
                                <label class="custom_checkbox">Outdoor Shower
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="custom_checkbox">Washer
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper mb20">
                <div class="btn-area d-grid align-items-center">
                  <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
                </div>
              </div>
              <div class="reset-area d-flex align-items-center justify-content-between">
                <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
                <a class="reset-button" href="#"><span class="flaticon-favourite"></span><u>Save Search</u></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row align-items-center mb20">
              <div class="col-sm-6">
                <div class="text-center text-sm-start">
                  <p class="pagination_page_count mb-0">Showing 1–10 of 13 results</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
                  <div class="pcs_dropdown pr10"><span>Sort by</span>
                    <select class="selectpicker show-tick">
                      <option>Newest</option>
                      <option>Best Seller</option>
                      <option>Best Match</option>
                      <option>Price Low</option>
                      <option>Price High</option>
                    </select>
                  </div>
                  <a class="pl15 pr15 bdrl1 bdrr1 d-none d-md-block" href="">Grid</a>
                  <a class="pl15 d-none d-md-block" href="">List</a>
                </div>
              </div>
            </div>
            <div class="row mt15">
              <div class="col-sm-6 col-lg-6">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-1.jpg" alt="">
                    <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                    <div class="list-price">$14,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href=""><span class="flaticon-fullscreen"></span></a>
                        <a href=""><span class="flaticon-new-tab"></span></a>
                        <a href=""><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                    <div class="list-price">$82,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href=""><span class="flaticon-fullscreen"></span></a>
                        <a href=""><span class="flaticon-new-tab"></span></a>
                        <a href=""><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                    <div class="list-price">$63,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href=""><span class="flaticon-fullscreen"></span></a>
                        <a href=""><span class="flaticon-new-tab"></span></a>
                        <a href=""><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-4.jpg" alt="">
                    <div class="list-price">$63,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story House for Rent</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href=""><span class="flaticon-fullscreen"></span></a>
                        <a href=""><span class="flaticon-new-tab"></span></a>
                        <a href=""><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-5.jpg" alt="">
                    <div class="list-price">$14,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office Space</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href=""><span class="flaticon-fullscreen"></span></a>
                        <a href=""><span class="flaticon-new-tab"></span></a>
                        <a href=""><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-6.jpg" alt="">
                    <div class="list-price">$82,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">House on the beverly hills</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href=""><span class="flaticon-fullscreen"></span></a>
                        <a href=""><span class="flaticon-new-tab"></span></a>
                        <a href=""><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-7.jpg" alt="">
                    <div class="list-price">$63,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa called Elvado</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href=""><span class="flaticon-fullscreen"></span></a>
                        <a href=""><span class="flaticon-new-tab"></span></a>
                        <a href=""><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-6">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-8.jpg" alt="">
                    <div class="list-price">$63,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">House on the Northridge</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href=""><span class="flaticon-bed"></span>3 bed</a>
                      <a href=""><span class="flaticon-shower"></span>4 bath</a>
                      <a href=""><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href=""><span class="flaticon-fullscreen"></span></a>
                        <a href=""><span class="flaticon-new-tab"></span></a>
                        <a href=""><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
                <p class="mt10 pagination_page_count text-center">1 – 20 of 300+ property available</p>
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
<script src="js/wow.min.js"></script> 
<script src="js/pricing-slider.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>