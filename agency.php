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
            <li><a href="dashboard">Dashboard</a></li>
            <li><a href="dashboard-message.html">Message</a></li>
            <li><a href="dashboard-add-property.php">New Property</a></li>
            <li><a href="dashboard-properties.html">My Properties</a></li>
            <li><a href="dashboard-favorites.html">My Favorites</a></li>
            <li><a href="dashboard-savesearch.html">Saved Search</a></li>
            <li><a href="dashboard-review.html">Reviews</a></li>
            <li><a href="dashboard-package.html">My Package</a></li>
            <li><a href="dashboard-profile.html">My Profile</a></li>
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
    <section class="breadcumb-section bgc-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">Agencies</h2>
              <div class="breadcumb-list">
                <a href="">Home</a>
                <a href="">For Rent</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Agent Section Area -->
    <section class="our-agents bgc-white pt-0">
      <div class="container">
        <div class="row align-items-center mb10 wow fadeInUp" data-wow-delay="100ms">
          <div class="col-md-9">
            <div class="agent-page-meta dropdown-lists">
              <div class="d-sm-flex">
                <div class="position-relative mb10 mr10">
                  <input type="text" class="form-control" placeholder="Enter agent name">
                </div>
                <div class="position-relative mb10 mr10">
                  <button type="button" class="open-btn box-shadow-0 dropdown-toggle" data-bs-toggle="dropdown">All Categories <i class="fa fa-angle-down ms-2"></i></button>
                  <div class="dropdown-menu">
                    <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                      <div class="checkbox-style1">
                        <label class="custom_checkbox">Apartments
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
                    <div class="text-end mt10 pr10">
                      <button type="button" class="done-btn box-shadow-0 ud-btn btn-thm dropdown-toggle">Done</button>
                    </div>
                  </div>
                </div>
                <div class="position-relative mb10">
                  <button type="button" class="open-btn mb15 drop_btn" data-bs-toggle="dropdown">All Cities <i class="fa fa-angle-down ms-2"></i></button>
                  <div class="drop_content">
                    <div class="widget-wrapper bdrb1 pb25 mb0 p20">
                      <div class="bootselect-multiselect">
                        <select class="selectpicker">
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
                    <div class="text-end mt10 pr10">
                      <button type="button" class="done-btn box-shadow-0 ud-btn btn-thm drop_btn">Done</button>
                    </div>
                  </div>
                </div>
              </div>                   
            </div>
          </div>
          <div class="col-md-3">
            <div class="page_control_shorting text-start text-md-end mb20">
              <div class="pcs_dropdown pr10"><span>Sort by</span>
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
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-md-6 col-lg-4">
            <div class="agency-style1 p30 bdrs12 bdr1 mb30">
              <div class="agency-img">
                <img class="w-100" src="images/team/agency-1.png" alt="">
                <div class="tag">6 Properties</div>
              </div>
              <div class="agency-details pt40">
                <h6 class="fw400"><i class="fas fa-star review-color2 pr10 fz10"></i>4.6</h6>
                <h6 class="agency-title mb-1">All American Real Estate</h6>
                <p class="fz15">1611 Michigan Ave, Mombasa Beach, FL 33139</p>
                <div class="d-grid">
                  <a href="page-agency-single.html" class="ud-btn btn-white2">View Listings<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="agency-style1 p30 bdrs12 bdr1 mb30">
              <div class="agency-img">
                <img class="w-100" src="images/team/agency-2.png" alt="">
              </div>
              <div class="agency-details pt40">
                <h6 class="fw400"><i class="fas fa-star review-color2 pr10 fz10"></i>4.6</h6>
                <h6 class="agency-title mb-1">All American Real Estate</h6>
                <p class="fz15">1611 Michigan Ave, Mombasa Beach, FL 33139</p>
                <div class="d-grid">
                  <a href="page-agency-single.html" class="ud-btn btn-white2">View Listings<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="agency-style1 p30 bdrs12 bdr1 mb30">
              <div class="agency-img">
                <img class="w-100" src="images/team/agency-3.png" alt="">
              </div>
              <div class="agency-details pt40">
                <h6 class="fw400"><i class="fas fa-star review-color2 pr10 fz10"></i>4.6</h6>
                <h6 class="agency-title mb-1">All American Real Estate</h6>
                <p class="fz15">1611 Michigan Ave, Mombasa Beach, FL 33139</p>
                <div class="d-grid">
                  <a href="page-agency-single.html" class="ud-btn btn-white2">View Listings<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="agency-style1 p30 bdrs12 bdr1 mb30">
              <div class="agency-img">
                <img class="w-100" src="images/team/agency-4.png" alt="">
              </div>
              <div class="agency-details pt40">
                <h6 class="fw400"><i class="fas fa-star review-color2 pr10 fz10"></i>4.6</h6>
                <h6 class="agency-title mb-1">All American Real Estate</h6>
                <p class="fz15">1611 Michigan Ave, Mombasa Beach, FL 33139</p>
                <div class="d-grid">
                  <a href="page-agency-single.html" class="ud-btn btn-white2">View Listings<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="agency-style1 p30 bdrs12 bdr1 mb30">
              <div class="agency-img">
                <img class="w-100" src="images/team/agency-5.png" alt="">
              </div>
              <div class="agency-details pt40">
                <h6 class="fw400"><i class="fas fa-star review-color2 pr10 fz10"></i>4.6</h6>
                <h6 class="agency-title mb-1">All American Real Estate</h6>
                <p class="fz15">1611 Michigan Ave, Mombasa Beach, FL 33139</p>
                <div class="d-grid">
                  <a href="page-agency-single.html" class="ud-btn btn-white2">View Listings<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="agency-style1 p30 bdrs12 bdr1 mb30">
              <div class="agency-img">
                <img class="w-100" src="images/team/agency-6.png" alt="">
              </div>
              <div class="agency-details pt40">
                <h6 class="fw400"><i class="fas fa-star review-color2 pr10 fz10"></i>4.6</h6>
                <h6 class="agency-title mb-1">All American Real Estate</h6>
                <p class="fz15">1611 Michigan Ave, Mombasa Beach, FL 33139</p>
                <div class="d-grid">
                  <a href="page-agency-single.html" class="ud-btn btn-white2">View Listings<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="500ms">
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
            <p class="mt10 pagination_page_count mb-0 text-center">1 – 20 of 300+ property available</p>
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