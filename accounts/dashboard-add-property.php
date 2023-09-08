<?php
  include '../config/conn.php';

  //Session check
  if(!isset($_SESSION['user']['email'])) {
    header("location:index");
  }
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
<link rel="stylesheet" href="css/dashbord_navitaion.css">
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
<div class="wrapper">
  <!--div class="preloader"></div-->
  
  <!-- Main Header Nav -->
  <?php
    include 'header_v4.php';
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

  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-md">
      <?php
        include 'sidebar_v2.php';
      ?>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content property-page bgc-f7">
          <?php
            include 'sidebar.php';
          ?>
          <div class="row align-items-center pb40">
            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>Add New Property</h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">
                <div class="navtab-style1">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                      <button class="nav-link active fw600 ms-3" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">1. Description</button>
                      <button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab" data-bs-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2" aria-selected="false">2. Media</button>
                      <button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab" data-bs-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3" aria-selected="false">3. Location</button>
                      <button class="nav-link fw600" id="nav-item4-tab" data-bs-toggle="tab" data-bs-target="#nav-item4" type="button" role="tab" aria-controls="nav-item4" aria-selected="false">4. Detail</button>
                      <button class="nav-link fw600" id="nav-item5-tab" data-bs-toggle="tab" data-bs-target="#nav-item5" type="button" role="tab" aria-controls="nav-item5" aria-selected="false">5. Amenities</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-item1" role="tabpanel" aria-labelledby="nav-item1-tab">
                      <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30">Property Description</h4>
                        <div class="row">
                            <div class="col-sm-12">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Title</label>
                                <input type="text" name = "title" class="form-control" placeholder="Your Name">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Description</label>
                                <textarea name="description" cols="30" rows="5" placeholder="There are many variations of passages."></textarea>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Select Category</label>
                                <div class="location-area">
                                  <select name="category" class="selectpicker" multiple>
                                    <option>Apartments</option>
                                    <option>Bungalow</option>
                                    <option>Houses</option>
                                    <option>Loft</option>
                                    <option>Office</option>
                                    <option>Townhome</option>
                                    <option>Villa</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Listed in</label>
                                <div name="listed_in" class="location-area">
                                  <select class="selectpicker" multiple>
                                    <option>All Listing</option>
                                    <option>Active</option>
                                    <option>Sold</option>
                                    <option>Processing</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb30">
                                <label class="heading-color ff-heading fw600 mb10">Price in $</label>
                                <input name="label_price" type="text" class="form-control" placeholder="Your Name">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb30">
                                <label class="heading-color ff-heading fw600 mb10">Yearly Tax Rate</label>
                                <input name="tax_rate" type="text" class="form-control" placeholder="Your Name">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb30">
                                <label class="heading-color ff-heading fw600 mb10">After Price Label</label>
                                <input name="price" type="text" class="form-control" placeholder="Your Name">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="d-sm-flex justify-content-between">
                                <a class="ud-btn btn-dark" href="#nav-item2-tab">Next Step<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">                      
                      <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30">Upload photos of your property</h4>
                        <div class="col-lg-12">
                          <div class="upload-img position-relative overflow-hidden bdrs12 text-center mb30 px-2">
                            <div class="icon mb30"><span class="flaticon-upload"></span></div>
                            <h4 class="title fz17 mb10">Upload photos of your property</h4>
                            <p class="text mb25">Photos must be JPEG or PNG format and least 2048x768</p>
                            <a class="ud-btn btn-white" href="">Browse Files<i class="fal fa-arrow-right-long"></i></a>
                          </div>
                        </div>
                        <div class="col-lg-5">
                          <div class="profile-box position-relative d-md-flex align-items-end mb50">
                            <div class="profile-img position-relative overflow-hidden bdrs12 mb20-sm">
                              <img class="w-100" src="images/listings/profile-1.jpg" alt="">
                              <a href="" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Image" aria-label="Delete Item"><span class="fas fa-trash-can"></span></a>
                            </div>
                            <div class="profile-img position-relative overflow-hidden bdrs12 ml20 ml0-sm">
                              <img class="w-100" src="images/listings/profile-2.jpg" alt="">
                              <a href="" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Image" aria-label="Delete Item"><span class="fas fa-trash-can"></span></a>
                            </div>
                          </div>
                        </div>
                          <div class="row">
                            <h4 class="title fz17 mb30">Video Option</h4>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb30">
                                <label class="heading-color ff-heading fw600 mb10">Video from</label>
                                <div name= "video_type" class="location-area">
                                  <select class="selectpicker" multiple>
                                    <option>Youtube</option>
                                    <option>Facebook</option>
                                    <option>Vimeo</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb30">
                                <label class="heading-color ff-heading fw600 mb10">Embed Video id</label>
                                <input name="link" type="text" class="form-control" placeholder="Your Name">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="d-sm-flex justify-content-between">
                                <a class="ud-btn btn-white" href="#nav-item2-tab">Prev Step<i class="fal fa-arrow-right-long"></i></a>
                                <a class="ud-btn btn-dark" href="#nav-item3-tab">Next Step<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">
                      <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30">Listing Location</h4>
                        <form class="form-style1">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Address</label>
                                <input name="address" type="text" class="form-control" placeholder="Your Name">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">County</label>
                                <div class="location-area">
                                  <select name="county" class="selectpicker" multiple>
                                    <option>Belgiul</option>
                                    <option>France</option>
                                    <option>Kewait</option>
                                    <option>Qatar</option>
                                    <option>Netherland</option>
                                    <option>Germany</option>
                                    <option>Turkey</option>
                                    <option>UK</option>
                                    <option>Kenya</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">City</label>
                                <div class="location-area">
                                  <select name="city" class="selectpicker" multiple>
                                    <option>California</option>
                                    <option>Kisumu</option>
                                    <option>Nairobi</option>
                                    <option>Manhattan</option>
                                    <option>New Jersey</option>
                                    <option>Naivasha</option>
                                    <option>San Diego</option>
                                    <option>San Francisco</option>
                                    <option>Texas</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Neighborhood</label>
                                <input name="street" type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="mb20 mt30">
                                <label class="heading-color ff-heading fw600 mb30">Place the listing pin on the map</label>
                                <iframe class="h550" loading="lazy" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near" title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom"></iframe>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb30">
                                <label class="heading-color ff-heading fw600 mb10">Latitude</label>
                                <input name="latitude" type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb30">
                                <label class="heading-color ff-heading fw600 mb10">Longitude</label>
                                <input name="longitude" type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="d-sm-flex justify-content-between">
                                <a class="ud-btn btn-white" href="#nav-item3-tab">Prev Step<i class="fal fa-arrow-right-long"></i></a>
                                <a class="ud-btn btn-dark" href="#nav-item4-tab">Next Step<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-item4" role="tabpanel" aria-labelledby="nav-item4-tab">
                      <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30">Listing Detail</h4>
                        <form class="form-style1">
                          <div class="row">
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Size in ft (only numbers)</label>
                                <input name="room_size" type="numeric" class="form-control" placeholder="Enter size">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Rooms</label>
                                <input name="no_room" type="numeric" class="form-control" placeholder="No of rooms">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Bedrooms</label>
                                <input name="no_bedroom" type="numeric" class="form-control" placeholder="No of bedrooms">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Bathrooms</label>
                                <input name="no_bathroom" type="numeric" class="form-control" placeholder="No of bathrooms">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Garage size</label>
                                <input name="garage_size" type="numeric" class="form-control" placeholder="Garage size">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Date built (numeric)</label>
                                <input name="date" type="date" class="form-control">
                              </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Structure type</label>
                                <div class="location-area">
                                  <select name="structure_type" class="selectpicker" multiple>
                                    <option>Apartments</option>
                                    <option>Bungalow</option>
                                    <option>Houses</option>
                                    <option>Loft</option>
                                    <option>Office</option>
                                    <option>Townhome</option>
                                    <option>Villa</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6 col-xl-4">
                              <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Floors no</label>
                                <div class="location-area">
                                  <select name="no_floor" class="selectpicker" multiple>
                                    <option>1st</option>
                                    <option>2nd</option>
                                    <option>3rd</option>
                                    <option>4th</option>
                                    <option>5th</option>
                                    <option>6th</option>
                                    <option>7th</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="d-sm-flex justify-content-between">
                                <a class="ud-btn btn-white" href="#nav-item4-tab">Prev Step<i class="fal fa-arrow-right-long"></i></a>
                                <a class="ud-btn btn-dark" href="#nav-item5-tab">Next Step<i class="fal fa-arrow-right-long"></i></a>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-item5" role="tabpanel" aria-labelledby="nav-item5-tab">
                      <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30">Select Amenities</h4>
                        <div class="row">
                          <div class="col-sm-6 col-lg-3 col-xxl-2">
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
                              <label class="custom_checkbox">Swimming Pool
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Barbeque
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Microwave
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-6 col-lg-3 col-xxl-2">
                            <div class="checkbox-style1">
                              <label class="custom_checkbox">TV Cable
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Dryer
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Outdoor Shower
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Washer
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Gym
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Ocean view
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Private space
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-6 col-lg-3 col-xxl-2">
                            <div class="checkbox-style1">
                              <label class="custom_checkbox">Lake view
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Wine cellar
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Front yard
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Refrigerator
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">WiFi
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Laundry
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                              <label class="custom_checkbox">Sauna
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12 mt30">
                            <div class="d-sm-flex justify-content-between">
                              <a class="ud-btn btn-white" href="">Prev Step<i class="fal fa-arrow-right-long"></i></a>
                              <a class="ud-btn btn-thm" href="">Submit Property<i class="fal fa-arrow-right-long"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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
                  <p class="text">© <a href="windand.co.ke" target="_blank">Windand</a> - All rights reserved</p>
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