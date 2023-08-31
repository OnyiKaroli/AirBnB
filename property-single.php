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
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
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
    <!-- Property All Lists -->
    <section class="pt60 pb90 bgc-f7">
      <div class="container">
        <div class="row mb30 wow fadeInUp" data-wow-delay="100ms">
          <div class="col-lg-8">
            <div class="single-property-content mb30-md">
              <h2 class="sp-lg-title">Awesome Interior Apartment</h2>
              <div class="pd-meta mb15 d-md-flex align-items-center">
                <p class="text fz15 mb-0 bdrr1 pr10 bdrrn-sm">4834 N 10th St, Philadelphia, PA 19141</p>
                <a class="ff-heading text-thm fz15 bdrr1 pr10 ml0-sm ml10 bdrrn-sm" href=""><i class="fas fa-circle fz10 pe-2"></i>For sale</a>
                <a class="ff-heading bdrr1 fz15 pr10 ml10 ml0-sm bdrrn-sm" href=""><i class="far fa-clock pe-2"></i>1 years ago</a>
                <a class="ff-heading ml10 ml0-sm fz15" href=""><i class="flaticon-fullscreen pe-2 align-text-top"></i>8721</a>
              </div>
              <div class="property-meta d-flex align-items-center">
                <a class="text fz15" href=""><i class="flaticon-bed pe-2 align-text-top"></i>3 bed</a>
                <a class="text ml20 fz15" href=""><i class="flaticon-shower pe-2 align-text-top"></i>4 bath</a>
                <a class="text ml20 fz15" href=""><i class="flaticon-expand pe-2 align-text-top"></i>1200 sqft</a>
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
                <h3 class="price mb-0">$958,000</h3>
                <p class="text space fz15">$2,300/sq ft</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="500ms">
          <div class="col-lg-8">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <div class="ps-v4-hero-tab position-relative">
                <ul class="nav nav-pills justify-content-end" id="pills-tab2" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active mr10" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span class="flaticon-images text-white fz20"></span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link mr10" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><span class="flaticon-map text-white fz20"></span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><span class="flaticon-maps-1 text-white fz20"></span></button>
                  </li>
                </ul>
              </div>
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
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <iframe class="position-relative h510" loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
                  </div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <iframe class="h510 w-100" src="https://www.google.com/maps/embed?pb=!4v1553797194458!6m8!1m7!1sR4K_5Z2wRHTk9el8KLTh9Q!2m2!1d36.82551718071267!2d-76.34864590837246!3f305.15097!4f0!5f0.7820865974627469" allowfullscreen=""></iframe>
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
                      <h6 class="mb-0">Bedroom</h6>
                      <p class="text mb-0 fz15">3</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-shower"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Bath</h6>
                      <p class="text mb-0 fz15">2</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-event"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Year Built</h6>
                      <p class="text mb-0 fz15">2022</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25-xs d-flex align-items-center">
                    <span class="icon flaticon-garage"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Garage</h6>
                      <p class="text mb-0 fz15">2</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25-xs d-flex align-items-center">
                    <span class="icon flaticon-expand"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Sqft</h6>
                      <p class="text mb-0 fz15">1200</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element d-flex align-items-center">
                    <span class="icon flaticon-home-1"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Property Type</h6>
                      <p class="text mb-0 fz15">Apartment</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Property Description</h4>
              <p class="text mb10">This 3-bed with a loft, 2-bath home in the gated community of The Hideout has it all. From the open floor plan to the abundance of light from the windows, this home is perfect for entertaining. The living room and dining room have vaulted ceilings and a beautiful fireplace. You will love spending time on the deck taking in the beautiful views. In the kitchen, you'll find stainless steel appliances and a tile backsplash, as well as a breakfast bar.</p>
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
              <h4 class="title fz17 mb30 mt50">Property Details</h4>
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="d-flex justify-content-between">
                    <div class="pd-list">
                      <p class="fw600 mb10 ff-heading dark-color">Property ID</p>
                      <p class="fw600 mb10 ff-heading dark-color">Price</p>
                      <p class="fw600 mb10 ff-heading dark-color">Property Size</p>
                      <p class="fw600 mb10 ff-heading dark-color">Bathrooms</p>
                      <p class="fw600 mb-0 ff-heading dark-color">Bedrooms</p>
                    </div>
                    <div class="pd-list">
                      <p class="text mb10">RT48</p>
                      <p class="text mb10">$252,000</p>
                      <p class="text mb10">1500 Sq Ft</p>
                      <p class="text mb10">3</p>
                      <p class="text mb-0">2</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4 offset-xl-2">
                  <div class="d-flex justify-content-between">
                    <div class="pd-list">
                      <p class="fw600 mb10 ff-heading dark-color">Garage</p>
                      <p class="fw600 mb10 ff-heading dark-color">Garage Size</p>
                      <p class="fw600 mb10 ff-heading dark-color">Year Built</p>
                      <p class="fw600 mb10 ff-heading dark-color">Property Type</p>
                      <p class="fw600 mb-0 ff-heading dark-color">Property Status</p>
                    </div>
                    <div class="pd-list">
                      <p class="text mb10">2</p>
                      <p class="text mb10">200 SqFt</p>
                      <p class="text mb10">2022</p>
                      <p class="text mb10">Apartment</p>
                      <p class="text mb-0">For Sale</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30 mt30">Address</h4>
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="d-flex justify-content-between">
                    <div class="pd-list">
                      <p class="fw600 mb10 ff-heading dark-color">Address</p>
                      <p class="fw600 mb10 ff-heading dark-color">City</p>
                      <p class="fw600 mb-0 ff-heading dark-color">State/county</p>
                    </div>
                    <div class="pd-list">
                      <p class="text mb10">10425 Tabor St</p>
                      <p class="text mb10">Los Angeles</p>
                      <p class="text mb-0">California</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4 offset-xl-2">
                  <div class="d-flex justify-content-between">
                    <div class="pd-list">
                      <p class="fw600 mb10 ff-heading dark-color">Zip/Postal Code</p>
                      <p class="fw600 mb10 ff-heading dark-color">Area</p>
                      <p class="fw600 mb-0 ff-heading dark-color">Country</p>
                    </div>
                    <div class="pd-list">
                      <p class="text mb10">90034</p>
                      <p class="text mb10">Brookside</p>
                      <p class="text mb-0">United States</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <iframe class="position-relative bdrs12 mt30 h250" loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
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
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Energy Class</h4>
              <div class="row">
                <div class="col-sm-12">
                  <div class="pd-list d-flex justify-content-between">
                    <p class="text mb10">Global Energy Performance Index</p>
                    <p>A+</p>
                  </div>
                  <div class="pd-list d-flex justify-content-between">
                    <p class="text mb10">Renewable energy performance index</p>
                    <p>92.42 kWh / m²a</p>
                  </div>
                  <div class="pd-list d-flex justify-content-between">
                    <p class="text mb10">Energy performance of the building</p>
                    <p>00.00 kWh / m²a</p>
                  </div>
                  <div class="pd-list d-flex justify-content-between">
                    <p class="text mb10">EPC Current Rating</p>
                    <p>92</p>
                  </div>
                  <div class="pd-list d-flex justify-content-between">
                    <p class="text mb10">EPC Potential Rating</p>
                    <p>80+</p>
                  </div>
                </div>
                <div class="col-lg-12 mt20">
                  <img class="w-100" src="images/resource/energy-class.png" alt="">
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Floor Plans</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="accordion-style1 style2">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFirst">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFirst" aria-expanded="true" aria-controls="collapseFirst">
                            <span class="w-100 d-md-flex align-items-center">
                              <span class="mr10-sm">First Floor</span>
                              <span class="ms-auto d-md-flex align-items-center justify-content-end">
                                <span class="me-2 me-md-4">
                                  <span class="fw600">Size:</span>
                                  <span class="text">1267 Sqft</span>
                                </span>
                                <span class="me-2 me-md-4">
                                  <span class="fw600">Bedrooms</span>
                                  <span class="text">2</span>
                                </span>
                                <span class="me-2 me-md-4">
                                  <span class="fw600">Bathrooms</span>
                                  <span class="text">2</span>
                                </span>
                                <span>
                                  <span class="fw600">Price</span>
                                  <span class="text">$920,99</span>
                                </span>
                              </span>
                            </span>
                          </button>
                        </h2>
                        <div id="collapseFirst" class="accordion-collapse collapse" aria-labelledby="headingFirst" data-parent="#accordionExample">
                          <div class="accordion-body text-center"><img class="w-100" src="images/listings/listing-single-1.png" alt=""></div>
                        </div>
                      </div>
                      <div class="accordion-item active">
                        <h2 class="accordion-header" id="headingSecond">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSecond" aria-expanded="false" aria-controls="collapseSecond">
                            <span class="w-100 d-md-flex align-items-center">
                              <span class="mr10-sm">Second Floor</span>
                              <span class="ms-auto d-md-flex align-items-center justify-content-end">
                                <span class="me-2 me-md-4">
                                  <span class="fw600">Size:</span>
                                  <span class="text">1267 Sqft</span>
                                </span>
                                <span class="me-2 me-md-4">
                                  <span class="fw600">Bedrooms</span>
                                  <span class="text">2</span>
                                </span>
                                <span class="me-2 me-md-4">
                                  <span class="fw600">Bathrooms</span>
                                  <span class="text">2</span>
                                </span>
                                <span>
                                  <span class="fw600">Price</span>
                                  <span class="text">$920,99</span>
                                </span>
                              </span>
                            </span>
                          </button>
                        </h2>
                        <div id="collapseSecond" class="accordion-collapse collapse show" aria-labelledby="headingSecond" data-parent="#accordionExample">
                          <div class="accordion-body text-center"><img class="w-100" src="images/listings/listing-single-1.png" alt=""></div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThird">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThird" aria-expanded="false" aria-controls="collapseThird">
                            <span class="w-100 d-md-flex align-items-center">
                              <span class="mr10-sm">Third Floor</span>
                              <span class="ms-auto d-md-flex align-items-center justify-content-end">
                                <span class="me-4">
                                  <span class="fw600">Size:</span>
                                  <span class="text">1267 Sqft</span>
                                </span>
                                <span class="me-4">
                                  <span class="fw600">Bedrooms</span>
                                  <span class="text">2</span>
                                </span>
                                <span class="me-4">
                                  <span class="fw600">Bathrooms</span>
                                  <span class="text">2</span>
                                </span>
                                <span>
                                  <span class="fw600">Price</span>
                                  <span class="text">$920,99</span>
                                </span>
                              </span>
                            </span>
                          </button>
                        </h2>
                        <div id="collapseThird" class="accordion-collapse collapse" aria-labelledby="headingThird" data-parent="#accordionExample">
                          <div class="accordion-body text-center"><img class="w-100" src="images/listings/listing-single-1.png" alt=""></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Video</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="property_video bdrs12 w-100">
                    <a class="video_popup_btn mx-auto popup-img popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">360° Virtual Tour</h4>
              <div class="row">
                <div class="col-md-12">
                  <img src="images/listings/listing-single-7.jpg" alt="" class="w-100 bdrs12">
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">What's Nearby?</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="navtab-style1">
                    <nav>
                      <div class="nav nav-tabs mb20" id="nav-tab2" role="tablist">
                        <button class="nav-link fw600 active" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">Education</button>
                        <button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab" data-bs-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2" aria-selected="false">Health & Medical</button>
                        <button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab" data-bs-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3" aria-selected="false">Transportation</button>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade fz15 active show" id="nav-item1" role="tabpanel" aria-labelledby="nav-item1-tab">
                        <div class="nearby d-sm-flex align-items-center mb20">
                          <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">4</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">South Londonderry Elementary School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                        <div class="nearby d-sm-flex align-items-center mb20">
                          <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">Londonderry Senior High School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                        <div class="nearby d-sm-flex align-items-center">
                          <div class="rating style2 dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">Londonderry Middle School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                      <div class="tab-pane fade fz15" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">
                        <div class="nearby d-sm-flex align-items-center mb20">
                          <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">4</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">South Londonderry Elementary School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                        <div class="nearby d-sm-flex align-items-center mb20">
                          <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">Londonderry Senior High School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                        <div class="nearby d-sm-flex align-items-center">
                          <div class="rating style2 dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">Londonderry Middle School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                      <div class="tab-pane fade fz15" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">
                        <div class="nearby d-sm-flex align-items-center mb20">
                          <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">4</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">South Londonderry Elementary School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                        <div class="nearby d-sm-flex align-items-center mb20">
                          <div class="rating dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">Londonderry Senior High School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                        <div class="nearby d-sm-flex align-items-center">
                          <div class="rating style2 dark-color mr15 ms-1 mt10-xs mb10-xs"><span class="fw600 fz14">5</span><span class="text fz14">/10</span></div>
                          <div class="details">
                            <p class="dark-color fw600 mb-0">Londonderry Middle School</p>
                            <p class="text mb-0">Grades: PK-6   Distance: 3.7 mi</p>
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Walkscore</h4>
              <div class="row">
                <div class="col-md-12">
                  <h4 class="fw400 mb20">10425 Tabor St Los Angeles CA 90034 USA</h4>
                  <div class="walkscore d-sm-flex align-items-center mb20">
                    <span class="icon mr15 mb10-sm flaticon-walking"></span>
                    <div class="details">
                      <p class="dark-color fw600 mb-2">Walk Score</p>
                      <p class="text mb-0">57 / 100  (Somewhat Walkable)</p>
                    </div>
                  </div>
                  <div class="walkscore d-sm-flex align-items-center mb20">
                    <span class="icon mr15 mb10-sm flaticon-bus"></span>
                    <div class="details">
                      <p class="dark-color fw600 mb-2">Transit Score</p>
                      <p class="text mb-0">27 / 100  (Some Transit)</p>
                    </div>
                  </div>
                  <div class="walkscore d-sm-flex align-items-center">
                    <span class="icon mr15 mb10-sm flaticon-bike"></span>
                    <div class="details">
                      <p class="dark-color fw600 mb-2">Walk Score</p>
                      <p class="text mb-0">45 / 100  (Somewhat Bikeable)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Mortgage Calculator</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="d-flex align-items-center flex-wrap calculator-chart-percent">
                    <div class="principal-interest-st"></div>
                    <div class="property-tax-st"></div>
                    <div class="home-insurance-st"></div>
                  </div>
                  <ul class="list-result-calculator d-md-flex flex-wrap justify-content-between bdrb1 mt20 ps-0 pb15 mb-0">
                    <li class="d-sm-flex align-items-center">
                      <span class="name-result text">Principal and Interest</span>
                      <span class="principal-interest-val fw600">$2,412</span>
                    </li>
                    <li class="d-sm-flex align-items-center">
                      <span class="name-result text">Property Taxes</span>
                      <span class="property-tax-val fw600">$2,412</span>
                    </li>
                    <li class="d-sm-flex align-items-center"> 
                      <span class="name-result text">Homeowners' Insurance</span>
                      <span class="home-insurance-val fw600">$2,412</span>
                    </li>
                  </ul>
                  <form class="comments_form mt30">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Total Amount</label>
                          <input type="text" class="form-control" placeholder="$ 250">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Down Payment</label>
                          <input type="text" class="form-control" placeholder="$2304">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Interest Rate</label>
                          <input type="text" class="form-control" placeholder="%3.5">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Loan Terms (Years)</label>
                          <input type="text" class="form-control" placeholder="12">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Property Tax</label>
                          <input type="text" class="form-control" placeholder="$1000">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                          <label class="fw600 ff-heading mb-2">Home Insurance</label>
                          <input type="text" class="form-control" placeholder="$1000">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <a href="page-property-single-v1.html" class="ud-btn btn-white2">Calculate<i class="fal fa-arrow-right-long"></i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <div class="row">
                <div class="col-md-12">
                  <div class="navtab-style1">
                    <div class="d-sm-flex align-items-center justify-content-between">
                      <h4 class="title fz17 mb20">Property Views</h4>
                      <ul class="nav nav-tabs border-bottom-0 mb30" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="hourly-tab" data-bs-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="weekly-tab" data-bs-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="monthly-tab" data-bs-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
                        <canvas class="chart-container" id="doublebar-chart"></canvas>
                      </div>
                      <div class="tab-pane w-100 fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                        <div class="chart-container">
                          <div class="c_container w-100"></div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <div class="chart pt20">
                          <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Home Value</h4>
              <div class="row">
                <div class="col-md-12">
                  <canvas class="canvas w-100" id="myChartweave"></canvas>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Get More Information</h4>
              <div class="agent-single d-sm-flex align-items-center bdrb1 mb30 pb25">
                <div class="single-img mb30-sm">
                  <img class="w90" src="images/team/agent-3.png" alt="">
                </div>
                <div class="single-contant ml30 ml0-xs">
                  <h6 class="title mb-1">Arlene McCoy</h6>
                  <div class="agent-meta mb10 d-md-flex align-items-center">
                    <a class="text fz15 pe-2 bdrr1" href=""><i class="flaticon-call pe-1"></i>(920) 012-3421</a>
                    <a class="text fz15 pe-2 ps-2 bdrr1" href=""><i class="flaticon-smartphone pe-1"></i>(920) 012-4390</a>
                    <a class="text fz15 ps-2" href=""><i class="flaticon-whatsapp pe-1"></i>WhatsApp</a>
                  </div>
                  <div class="agent-social">
                    <a class="mr20" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="mr20" href=""><i class="fab fa-twitter"></i></a>
                    <a class="mr20" href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <form class="form-style1 row">
                    <div class="col-md-6">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Name</label>
                        <input type="text" class="form-control" placeholder="Ali Tufan">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Phone</label>
                        <input type="text" class="form-control" placeholder="Enter your phone">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Email</label>
                        <input type="email" class="form-control" placeholder="creativelayers088">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="widget-wrapper sideborder-dropdown psp-review mb20">
                        <label class="heading-color ff-heading fw600 mb10">I'm a</label>
                        <div class="form-style2 input-group">
                          <select class="selectpicker" data-width="100%">
                            <option>Select</option>
                            <option value="Engineer">Engineer</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Employee">Employee</option>
                            <option value="Businessman">Businessman</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mb10">
                        <label class="heading-color ff-heading fw600 mb10">Message</label>
                        <textarea cols="30" rows="4" placeholder="Hello, I am interested in [Renovated apartment at last floor]"></textarea>
                      </div>
                    </div>
                    <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                      <label class="custom_checkbox fz14 ff-heading">By submitting this form I agree to Terms of Use
                        <input type="checkbox">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="btn-area">
                      <button class="ud-btn btn-white2">Request Information <i class="fal fa-arrow-right-long"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <div class="row">
                <div class="col-md-12">
                  <div class="product_single_content">
                    <div class="mbp_pagination_comments">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="total_review d-flex align-items-center justify-content-between mb20">
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
                            <li class="list-inline-item mb5-sm"><img class="bdrs6" src="images/blog/blog-single-3.jpg" alt="review-img"></li>
                            <li class="list-inline-item mb5-sm"><img class="bdrs6" src="images/blog/blog-single-4.jpg" alt="review-img"></li>
                            <li class="list-inline-item mb5-sm"><img class="bdrs6" src="images/blog/blog-single-5.jpg" alt="review-img"></li>
                            <li class="list-inline-item mb5-sm"><img class="bdrs6" src="images/blog/blog-single-6.jpg" alt="review-img"></li>
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
                          <div class="position-relative pt30">
                            <a href="page-property-single-v1.html" class="ud-btn btn-white2">Show all 134 reviews<i class="fal fa-arrow-right-long"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Leave A Review</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bsp_reveiw_wrt">
                    <form class="comments_form">
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
                          <div class="widget-wrapper sideborder-dropdown psp-review mb-4">
                            <label class="fw600 ff-heading mb-2">Rating</label>
                            <div class="form-style2 input-group">
                              <select class="selectpicker" data-live-search="true" data-width="100%">
                                <option>Select</option>
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
          </div>
          <div class="col-lg-4">
            <div class="default-box-shadow2 bdrs12 bdr1 p30 mb30 bgc-white position-relative">
              <h4 class="form-title mb5">Schedule a tour</h4>
              <p class="text">Choose your preferred day</p>
              <div class="ps-navtab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active mr15 mb5-lg" id="pills-inperson-tab" data-bs-toggle="pill" data-bs-target="#pills-inperson" type="button" role="tab" aria-controls="pills-inperson" aria-selected="true">In Person</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-videochat-tab" data-bs-toggle="pill" data-bs-target="#pills-videochat" type="button" role="tab" aria-controls="pills-videochat" aria-selected="false">Video Chat</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-inperson" role="tabpanel" aria-labelledby="pills-inperson-tab">
                    <form class="form-style1">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="mb20">
                            <input type="text" class="form-control" placeholder="Time" />
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="mb20">
                            <input type="text" class="form-control" placeholder="Name">
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
                            <textarea cols="30" rows="4" placeholder="Enter Your Messages"></textarea>
                          </div>
                        </div>
                        <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                          <label class="custom_checkbox fz14 ff-heading">By submitting this form I agree to Terms of Use
                            <input type="checkbox">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="col-md-12">
                          <div class="d-grid">
                            <a class="ud-btn btn-thm" href="page-contact.html">Submit a Tour Request<i class="fal fa-arrow-right-long"></i></a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="pills-videochat" role="tabpanel" aria-labelledby="pills-videochat-tab">
                    <form class="form-style1">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="mb20">
                            <input type="text" class="form-control" placeholder="Name">
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
                            <textarea cols="30" rows="4" placeholder="Enter Your Messages"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="d-grid">
                            <a class="ud-btn btn-thm" href="page-contact.html">Submit a Tour Request<i class="fal fa-arrow-right-long"></i></a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="agen-personal-info position-relative bgc-white default-box-shadow2 bdrs12 p30 mb30">
              <div class="widget-wrapper mb-0">
                <h6 class="title fz17 mb30">Get More Information</h6>
                <div class="agent-single d-sm-flex align-items-center pb25">
                  <div class="single-img mb30-sm">
                    <img class="w90" src="images/team/agent-3.png" alt="">
                  </div>
                  <div class="single-contant ml20 ml0-xs">
                    <h6 class="title mb-1">Arlene McCoy</h6>
                    <div class="agent-meta mb10 d-md-flex align-items-center">
                      <a class="text fz15" href=""><i class="flaticon-call pe-1"></i>(920) 012-3421</a>
                    </div>
                    <a href="" class="text-decoration-underline fw600">View Listings</a>
                  </div>
                </div>
                <div class="d-grid">
                  <button class="ud-btn btn-white2">Contact Agent<i class="fal fa-arrow-right-long"></i></button>
                </div>
              </div>
            </div>
            <div class="list-sidebar-style1 mb30">
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
                  <div class="accordion" id="accordionExampleN">
                    <div class="accordion-item border-none">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button border-none p-0 after-none feature-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="flaticon-settings"></span> Other Features</button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExampleN">
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
            <div class="list-sidebar-style1">
              <div class="widget-wrapper">
                <h6 class="list-title">Property Showcase</h6>
                <div class="listing-style1 sidebar-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-3.jpg" alt="">
                    <div class="list-price">$14,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content px-0 pb-0">
                    <h6 class="list-title mb-1"><a href="">House on the Northridge</a></h6>
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
                <div class="listing-style1 sidebar-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g1-7.jpg" alt="">
                    <div class="list-price">$14,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content px-0 pb-0">
                    <h6 class="list-title mb-1"><a href="">New apartment nice view</a></h6>
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
              <div class="widget-wrapper">
                <div class="list-news-style d-flex align-items-center mb20">
                  <div class="news-img flex-shrink-0"><img src="images/listings/ps-s-1.jpg" alt=""></div>
                  <div class="news-content flex-shrink-1 ms-3">
                    <h5 class="title mb0">$14,000 /<span class="fz15">mo</span></h5>
                    <p class="new-text mb0 fz14">House on the Northridge</p>
                    <div class="list-meta">
                      <a class="me-2" href=""><span class="flaticon-bed pe-1"></span>3</a>
                      <a class="me-2" href=""><span class="flaticon-shower pe-1"></span>4</a>
                      <a href=""><span class="flaticon-expand pe-1"></span>1200</a>
                    </div>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center mb20">
                  <div class="news-img flex-shrink-0"><img src="images/listings/ps-s-2.jpg" alt=""></div>
                  <div class="news-content flex-shrink-1 ms-3">
                    <h5 class="title mb0">$14,000 /<small>mo</small></h5>
                    <p class="mb0">House on the Northridge</p>
                    <div class="list-meta">
                      <a class="me-2" href=""><span class="flaticon-bed pe-1"></span>3</a>
                      <a class="me-2" href=""><span class="flaticon-shower pe-1"></span>4</a>
                      <a href=""><span class="flaticon-expand pe-1"></span>1200</a>
                    </div>
                  </div>
                </div>
                <div class="list-news-style d-flex align-items-center">
                  <div class="news-img flex-shrink-0"><img src="images/listings/ps-s-3.jpg" alt=""></div>
                  <div class="news-content flex-shrink-1 ms-3">
                    <h5 class="title mb0">$14,000 /<small>mo</small></h5>
                    <p class="mb0">House on the Northridge</p>
                    <div class="list-meta">
                      <a class="me-2" href=""><span class="flaticon-bed pe-1"></span>3</a>
                      <a class="me-2" href=""><span class="flaticon-shower pe-1"></span>4</a>
                      <a href=""><span class="flaticon-expand pe-1"></span>1200</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
              </div>
              <div class="widget-wrapper">
              </div>
              <div class="widget-wrapper">
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
              <div class="item">
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
              <div class="item">
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
              <div class="item">
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
              <div class="item">
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
              <div class="item">
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
              <div class="item">
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
              <div class="item">
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