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
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dashbord_navitaion.css">
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
<div class="wrapper">
  <div class="preloader"></div>
  
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
    <?php
      include 'mobile_header.php';
    ?>
  </div>

  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-md">
      <?php
        include 'sidebar_v2.php';
      ?>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-f7">
          <div class="row pb40">
            <div class="col-lg-12">
              <div class="dashboard_navigationbar d-block d-lg-none">
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                  <ul id="myDropdown" class="dropdown-content">
                    <li><a href="dashboard"><i class="flaticon-discovery mr10"></i>Dashboard</a></li>
                    <li><a href="dashboard-message.html"><i class="flaticon-chat-1 mr10"></i>Message</a></li>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE LISTINGS</p></li>
                    <li><a href="dashboard-add-property.php"><i class="flaticon-new-tab mr10"></i>Add New Property</a></li>
                    <li><a href="dashboard-order.html"><i class="flaticon-home mr10"></i>My Properties</a></li>
                    <li><a href="dashboard-favorites.html"><i class="flaticon-like mr10"></i>My Favorites</a></li>
                    <li class="active"><a href="dashboard-savesearch.html"><i class="flaticon-search-2 mr10"></i>Saved Search</a></li>
                    <li><a href="dashboard-review.html"><i class="flaticon-review mr10"></i>Reviews</a></li>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE ACCOUNT</p></li>
                    <li><a href="dashboard-package.html"><i class="flaticon-protection mr10"></i>My Package</a></li>
                    <li><a href="dashboard-profile.html"><i class="flaticon-user mr10"></i>My Profile</a></li>
                    <li><a class="" href="page-login.html"><i class="flaticon-exit mr10"></i>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>Saved Search</h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="packages_table table-responsive">
                  <table class="table-style3 table at-savesearch">
                    <thead class="t-head">
                      <tr>
                        <th scope="col">Listing title</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="t-body">
                      <tr>
                        <th scope="row">Equestrian Family Home</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Luxury villa in Rego Park</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th class="active" scope="row">Villa on Hollywood Boulevard</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Triple Story House for Rent</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Northwest Office Space</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">House on the beverly hills</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Luxury villa called Elvado</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">House on the Northridge</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Equestrian Family Home</th>
                        <td>December 31, 2022</td>
                        <td>
                          <div class="d-flex">
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="fullscreen"><span class="flaticon-fullscreen-1"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-pen fa"></span></a>
                            <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="flaticon-bin"></span></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="mbp_pagination text-center mt30">
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
        </div>
        <footer class="dashboard_footer pt30 pb10">
          <div class="container">
            <div class="row items-center justify-content-center justify-content-md-between">
              <div class="col-auto">
                <div class="copyright-widget">
                  <p class="text">© Homez - All rights reserved</p>
                </div>
              </div>
              <div class="col-auto">
                <div class="footer_bottom_right_widgets text-center text-lg-end">
                  <p><a href="#">Privacy</a>  ·  <a href="#">Terms</a>  ·  <a href="#">Sitemap</a></p>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
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
<script src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>
</html>