<?php
  require_once 'config/conn.php';

  $id = $_GET['id'];
  $title = $_GET['title'];
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
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Aveden - <?php echo $row["title"];?></title>
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
    <?php
      include 'mobile_header.php'
    ?>
  </div>

  <div class="body_content">
    <!-- Property All Lists -->
    <section class="pt60 pb90 bgc-f7">
    <?php
      $select = mysqli_query($server, "SELECT * FROM `properties` WHERE `id`='$id'") or die(mysqli_error($server));
      while ($row = mysqli_fetch_assoc($select)) {
    ?> 
      <div class="container">
        <div class="row mb30 wow fadeInUp" data-wow-delay="100ms">
          <div class="col-lg-8">
            <div class="single-property-content mb30-md">
              <h2 class="sp-lg-title"><?php echo $row["title"];?></h2>
              <div class="pd-meta mb15 d-md-flex align-items-center">
                <p class="text fz15 mb-0 bdrr1 pr10 bdrrn-sm"><?php echo $row["street"], $row["city"], $row["county"];?></p>
                <a class="ff-heading text-thm fz15 bdrr1 pr10 ml0-sm ml10 bdrrn-sm" href=""><i class="fas fa-circle fz10 pe-2"></i><?php echo $row["listed_in"];?></a>
                <a class="ff-heading bdrr1 fz15 pr10 ml10 ml0-sm bdrrn-sm" href=""><i class="far fa-clock pe-2"></i>Since <?php echo $row["date"];?></a>
              </div>
              <div class="property-meta d-flex align-items-center">
                <a class="text fz15" href=""><i class="flaticon-bed pe-2 align-text-top"></i><?php echo $row["no_bedroom"];?> bed</a>
                <a class="text ml20 fz15" href=""><i class="flaticon-shower pe-2 align-text-top"></i><?php echo $row["no_bathroom"];?> bath</a>
                <a class="text ml20 fz15" href=""><i class="flaticon-expand pe-2 align-text-top"></i><?php echo $row["room_size"];?> sqft</a>
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
                <h3 class="price mb-0">$<?php echo $row["price"];?></h3>
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
                      <p class="text mb-0 fz15"><?php echo $row["no_bedroom"];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-shower"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Bath</h6>
                      <p class="text mb-0 fz15"><?php echo $row["no_bathroom"];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-event"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Date Built</h6>
                      <p class="text mb-0 fz15"><?php echo $row["date"];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25-xs d-flex align-items-center">
                    <span class="icon flaticon-garage"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Garage</h6>
                      <p class="text mb-0 fz15"><?php echo $row["garage_size"];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element mb25-xs d-flex align-items-center">
                    <span class="icon flaticon-expand"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Sqft</h6>
                      <p class="text mb-0 fz15"><?php echo $row["room_size"];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="overview-element d-flex align-items-center">
                    <span class="icon flaticon-home-1"></span>
                    <div class="ml15">
                      <h6 class="mb-0">Property Type</h6>
                      <p class="text mb-0 fz15"><?php echo $row["category"];?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30">Property Description</h4>
              <p class="text mb10"><?php echo $row["description"];?></p>
            </div>
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30 mt30">Address</h4>
              <div class="row">
                <div class="col-md-6 col-xl-4">
                  <div class="d-flex justify-content-between">
                    <div class="pd-list">
                      <p class="fw600 mb10 ff-heading dark-color">Address</p>
                      <p class="fw600 mb10 ff-heading dark-color">City</p>
                    </div>
                    <div class="pd-list">
                      <p class="text mb10"><?php echo $row["address"];?></p>
                      <p class="text mb-0"><?php echo $row["city"];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-4 offset-xl-2">
                  <div class="d-flex justify-content-between">
                    <div class="pd-list">
                      <p class="fw600 mb10 ff-heading dark-color">Area</p>
                      <p class="fw600 mb-0 ff-heading dark-color">County</p>
                    </div>
                    <div class="pd-list">
                      <p class="text mb10"><?php echo $row["street"];?></p>
                      <p class="text mb-0"><?php echo $row["county"];?></p>
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
            <?php }?>
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
            <?php
              include 'listing_sidebar.php';
            ?>
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
                    <p class="list-text">Nairobi City, CA, Kenya</p>
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
                    <p class="list-text">Nairobi City, CA, Kenya</p>
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
                    <img class="w-100" src="images/listings/g1-2.jpg" alt="">
                    <div class="list-price">$82,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                    <p class="list-text">Nairobi City, CA, Kenya</p>
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