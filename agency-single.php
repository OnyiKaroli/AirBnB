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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
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
    <!-- Agent Section Area -->
    <section class="agent-single pt60">
      <div class="cta-agent bgc-dark mx-auto maxw1600 pt60 pb60 bdrs12 position-relative mx20-lg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-7">
              <div class="agent-single d-sm-flex align-items-center">
                <div class="single-img mb30-sm">
                  <img src="images/team/agency-single-1.png" alt="">
                </div>
                <div class="single-contant ml30 ml0-xs">
                  <h2 class="title mb-0 text-white">All london Real Estate</h2>
                  <p class="fz15 text-white"> 1611 Michigan Ave, Miami Beach, FL 33139</p>
                  <div class="agent-meta mb15 d-md-flex align-items-center">
                    <a class="text text-white fz15 pe-2 bdrr1" href=""><i class="fas fa-star fz10 review-color2 pr10"></i>5.0 • 49 Reviews</a>
                    <a class="text text-white fz15 pe-2 ps-2 bdrr1" href=""><i class="flaticon-call pe-1"></i>+848 032 03 01</a>
                    <a class="text text-white fz15 ps-2" href=""><i class="flaticon-smartphone pe-1"></i>+848 032 03 01</a>
                  </div>
                </div>
              </div>
              <div class="img-box-12 position-relative d-none d-xl-block">
                <img class="img-1 spin-right" src="images/about/element-12.png" alt="">
                <img class="img-2 bounce-x" src="images/about/element-13.png" alt="">
                <img class="img-3 bounce-y" src="images/about/element-11.png" alt="">
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
                  <h6 class="fz17 mb30">About All London Real Estate</h6>
                  <p class="text">This 3-bed with a loft, 2-bath home in the gated community of The Hideout has it all. From the open floor plan to the abundance of light from the windows, this home is perfect for entertaining. The living room and dining room have vaulted ceilings and a beautiful fireplace. You will love spending time on the deck taking in the beautiful views. In the kitchen, you'll find stainless steel appliances and a tile backsplash, as well as a breakfast bar.</p>
                  <div class="agent-single-accordion">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                          <div class="accordion-body p-0"><p class="text">Placeholder content for this accordion, which is intended to demonstrate the class. This is the first item's accordion body you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need.</p></div>
                        </div>
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Show more</button>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center mt20">
              <div class="col-sm-4">
                <h6 class="fz17">Listing 27</h6>
              </div>
              <div class="col-sm-8">
                <div class="dark-light-navtab style4 mt-0 mt-lg-4 mb30">
                  <ul class="nav nav-pills justify-content-start justify-content-sm-end" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">For Rent</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link me-0" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">For Sale</button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                      <div class="col-md-6">
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
                    </div>
                  </div>
                </div>
                <div class="d-grid pb30 bdrb1">
                  <a href="page-property-single-v1.html" class="ud-btn btn-white2">Show all 134 property<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
            <div class="row pt30 bdrb1">
              <div class="col-lg-12">
                <h6 class="fz17">Agents</h6>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="feature-style2 mb20">
                  <div class="feature-img"><img class="bdrs12" src="images/team/agent-1.jpg" alt=""></div>
                  <div class="feature-content pt20">
                    <h6 class="title mb-1">Arlene McCoy</h6>
                    <p class="text fz15">Broker</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="feature-style2 mb20">
                  <div class="feature-img"><img class="bdrs12" src="images/team/agent-2.jpg" alt=""></div>
                  <div class="feature-content pt20">
                    <h6 class="title mb-1">Esther Howard</h6>
                    <p class="text fz15">Broker</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="feature-style2 mb20">
                  <div class="feature-img"><img class="bdrs12" src="images/team/agent-3.jpg" alt=""></div>
                  <div class="feature-content pt20">
                    <h6 class="title mb-1">Cody Fisher</h6>
                    <p class="text fz15">Broker</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="product_single_content mb35">
                  <div class="mbp_pagination_comments">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="total_review d-flex align-items-center justify-content-between mb20 mt30">
                          <h6 class="fz17 mb15"><i class="fas fa-star fz12 pe-2"></i>5.0 · 3 reviews</h6>
                          <div class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
                            <div class="pcs_dropdown mb15"><span>Sort by</span>
                              <select class="selectpicker show-tick">
                                <option>Newest</option>
                                <option>Best Seller</option>
                                <option>Best Match</option>
                                <option>Price Low</option>
                                <option>Price High</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mbp_first position-relative d-flex align-items-center justify-content-start mb30-sm">
                          <img src="images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                          <div class="ml20">
                            <h6 class="mt-0 mb-0">Bessie Cooper</h6>
                            <div><span class="fz14">12 March 2022</span>
                              <div class="blog-single-review">
                                <ul class="mb0 ps-0">
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="text mt20 mb20">Every single thing we tried with John was delicious! Found some awesome places we would definitely go back to on our trip. John was also super friendly and passionate about Beşiktaş and Istanbul.</p>
                        <ul class="mb20 ps-0">
                          <li class="list-inline-item mb5-xs"><img class="bdrs6" src="images/blog/blog-single-3.jpg" alt="review-img"></li>
                          <li class="list-inline-item mb5-xs"><img class="bdrs6" src="images/blog/blog-single-4.jpg" alt="review-img"></li>
                          <li class="list-inline-item mb5-xs"><img class="bdrs6" src="images/blog/blog-single-5.jpg" alt="review-img"></li>
                          <li class="list-inline-item mb5-xs"><img class="bdrs6" src="images/blog/blog-single-6.jpg" alt="review-img"></li>
                        </ul>
                        <div class="review_cansel_btns d-flex bdrb1 pb30">
                          <a href="#"><i class="fas fa-thumbs-up"></i>Helpful</a>
                          <a href="#"><i class="fas fa-thumbs-down"></i>Not helpful</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mbp_first position-relative d-flex align-items-center justify-content-start mt30 mb30-sm">
                          <img src="images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                          <div class="ml20">
                            <h6 class="mt-0 mb-0">Darrell Steward</h6>
                            <div><span class="fz14">12 March 2022</span>
                              <div class="blog-single-review">
                                <ul class="mb0 ps-0">
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                  <li class="list-inline-item me-0"><a href="#"><i class="fas fa-star review-color2 fz10"></i></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="text mt20 mb20">Every single thing we tried with John was delicious! Found some awesome places we would definitely go back to on our trip. John was also super friendly and passionate about Beşiktaş and Istanbul.</p>
                        <div class="review_cansel_btns d-flex bdrb1 pb30">
                          <a href="#"><i class="fas fa-thumbs-up"></i>Helpful</a>
                          <a href="#"><i class="fas fa-thumbs-down"></i>Not helpful</a>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="position-relative bdrb1 pt30 pb20">
                          <a href="page-property-single-v1.html" class="ud-btn btn-white2">Show all 134 reviews<i class="fal fa-arrow-right-long"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bsp_reveiw_wrt">
                  <h6 class="fz17">Leave A Review</h6>
                  <form class="comments_form mt30">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Email</label>
                          <input type="email" class="form-control" placeholder="creativelayers088">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Title</label>
                          <input type="text" class="form-control" placeholder="Enter Title">
                        </div>
                      </div>
                      <div class="col-md-6">
                    <div class="widget-wrapper sideborder-dropdown mb-4">
                      <label class="fw600 ff-heading mb-2">Rating</label>
                      <div class="form-style2 input-group">
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                          <option>Rating</option>
                          <option data-tokens="Five Star">Five Star</option>
                          <option data-tokens="Four Star">Four Star</option>
                          <option data-tokens="Three Star">Three Star</option>
                          <option data-tokens="Two Star">Two Star</option>
                          <option data-tokens="One Star">One Star</option>
                        </select>
                      </div>
                    </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Review</label>
                          <textarea class="pt15" rows="6" placeholder="Write a Review"></textarea>
                        </div>
                        <a href="page-property-single-v1.html" class="ud-btn btn-white2">Submit Review<i class="fal fa-arrow-right-long"></i></a>
                      </div>
                    </div>
                  </form>
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
              <div class="widget-wrapper mb-0">
                <h6 class="title fz17 mb35">Agency Information</h6>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Broker address</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14">House on the Northridge</p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Office</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14">(484) 524-3699</p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Mobile</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14">(484) 524-7963</p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Fax</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14">(484) 524-1023</p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between mb10">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Websites</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14">www.realton.com</p>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center justify-content-between">
                  <div class="flex-shrink-0"><h6 class="fz14 mb-0">Member since</h6></div>
                  <div class="news-content flex-shrink-1 ms-3 text-end">
                    <p class="text mb-0 fz14">10-01-2022</p>
                  </div>
                </div>
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
                    <h6 class="info-mail"><a href="mailto:hi@homez.com">hi@homez.com</a></h6>
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
                      <li><a href="">Miami</a></li>
                      <li><a href="">Los Angeles</a></li>
                      <li><a href="">Chicago</a></li>
                      <li><a href="">New York</a></li>
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