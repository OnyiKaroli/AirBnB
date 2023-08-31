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
            <h5 class="modal-title" id="exampleModalToggleLabel">Welcome to Aveden</h5>
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
            <li><a href="dashboard-add-property.php">New Property</a></li>
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
          <a href="dashboard-add-property.php" class="ud-btn btn-thm text-white">Submit Property<i class="fal fa-arrow-right-long"></i></a>
        </li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>

  <div class="body_content">
    <!-- UI Elements Sections -->
    <section class="breadcumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">Blog</h2>
              <div class="breadcumb-list">
                <a href="">Home</a>
                <a href="">For Rent</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section Area -->
    <section class="our-blog pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-xl-12">
            <div class="navpill-style1">
              <ul class="nav nav-pills mb20" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 active fw500 dark-color" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home Improvement</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-lifestyle-tab" data-bs-toggle="pill" data-bs-target="#pills-lifestyle" type="button" role="tab" aria-controls="pills-lifestyle" aria-selected="false">Life & Style</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-finance-tab" data-bs-toggle="pill" data-bs-target="#pills-finance" type="button" role="tab" aria-controls="pills-finance" aria-selected="false">Finance</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-homesell-tab" data-bs-toggle="pill" data-bs-target="#pills-homesell" type="button" role="tab" aria-controls="pills-homesell" aria-selected="false">Selling a Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-homerent-tab" data-bs-toggle="pill" data-bs-target="#pills-homerent" type="button" role="tab" aria-controls="pills-homerent" aria-selected="false">Renting a Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-homebuy-tab" data-bs-toggle="pill" data-bs-target="#pills-homebuy" type="button" role="tab" aria-controls="pills-homebuy" aria-selected="false">Buying a Home</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade fz15 show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-lifestyle" role="tabpanel" aria-labelledby="pills-lifestyle-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-finance" role="tabpanel" aria-labelledby="pills-finance-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-homesell" role="tabpanel" aria-labelledby="pills-homesell-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-homerent" role="tabpanel" aria-labelledby="pills-homerent-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-homebuy" role="tabpanel" aria-labelledby="pills-homebuy-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
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
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>