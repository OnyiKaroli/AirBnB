<?php
  include '../config/conn.php';

  $id = $_GET['id'];

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
  
  <!--End Menu In Hiddn SideBar --> 
  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="images/header-logo.png" alt=""></a>
            <a href="../login"><span class="icon fz18 far fa-user-circle"></span></a>
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
                <h2>Edit Property</h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>



          <form method="POST">
          <?php
            //SQL Query
            $query = mysqli_query($server, "SELECT * FROM `properties` WHERE `id` = '$id'") or die(mysqli_error($server));
            
            if (mysqli_num_rows($query) > 0) {
            // OUTPUT DATA OF EACH ROW
            while($row = mysqli_fetch_assoc($query)) {
        ?>
            <div class="row">
              <div class="col-xl-12">
                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">
                  <div class="navtab-style1">
                    <nav>
                      <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                        <button class="nav-link active fw600 ms-3" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">Property Details</button>
                       
                        
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
                                  <input type="text" name = "title" class="form-control" placeholder="<?php echo $row["title"];?>">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">Description</label>
                                  <textarea name="description" cols="30" rows="5" placeholder="<?php echo $row["description"];?>"></textarea>
                                </div>
                              </div>
                              <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">Select Category</label>
                                  <div class="location-area">
                                    <select name="category" class="selectpicker" multiple>
                                      <option selected><?php echo $row["category"];?></option>
                                      <option value="apartment">Apartments</option>
                                      <option value="bungalow">Bungalow</option>
                                      <option value="house">Houses</option>
                                      <option value="loft">Loft</option>
                                      <option value="townhome">Townhome</option>
                                      <option value="villa">Villa</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6 col-xl-4">
                                <div class="mb30">
                                  <label class="heading-color ff-heading fw600 mb10">Price in $</label>
                                  <input name="label_price" type="text" class="form-control" placeholder="<?php echo $row["price"];?>">
                                </div>
                              </div>                             
                            </div>
                        </div>
                      </div>
                      <div class="" id="nav-item2" role="tabpanel" aria-labelledby="nav-item2-tab">                      
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
                           

                          </form>
                        </div>
                      </div>
                      <div class="" id="nav-item3" role="tabpanel" aria-labelledby="nav-item3-tab">
                        <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                          <h4 class="title fz17 mb30">Listing Location</h4>
                          <form class="form-style1">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">Address</label>
                                  <input name="address" type="text" class="form-control" placeholder="<?php echo $row["address"];?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">County</label>
                                  <div class="location-area">
                                    <select name="county" class="selectpicker" multiple>
                                      <option selected><?php echo $row["county"];?></option>
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
                                      <option><?php echo $row["city"];?></option>
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
                                  <input name="street" type="text" class="form-control" placeholder="<?php echo $row["street"];?>">
                                </div>
                              </div>
                              <div class="col-sm-12">
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="" id="nav-item4" role="tabpanel" aria-labelledby="nav-item4-tab">
                        <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                          <h4 class="title fz17 mb30">Listing Detail</h4>
                            <div class="row">
                              <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">Size in ft (only numbers)</label>
                                  <input name="room_size" type="numeric" class="form-control" placeholder="<?php echo $row["room_size"];?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">Rooms</label>
                                  <input name="no_room" type="numeric" class="form-control" placeholder="<?php echo $row["no_room"];?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">Bedrooms</label>
                                  <input name="no_bedroom" type="numeric" class="form-control" placeholder="<?php echo $row["no_bedroom"];?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">Bathrooms</label>
                                  <input name="no_bathroom" type="numeric" class="form-control" placeholder="<?php echo $row["no_bathroom"];?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-xl-4">
                                <div class="mb20">
                                  <label class="heading-color ff-heading fw600 mb10">Garage size</label>
                                  <input name="garage_size" type="numeric" class="form-control" placeholder="<?php echo $row["garage_size"];?>">
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="" id="nav-item5" role="tabpanel" aria-labelledby="nav-item5-tab">
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
                                <button type="submit" name="pUpdate" class="ud-btn btn-thm" >Update Property<i class="fal fa-arrow-right-long"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php

                          if(isset($_GET['pUpdate'])) {
                            $id = $servedby_email;
                            $delete = mysqli_query($server, "DELETE FROM `properties` WHERE `id`='$id'");
                            if ($delete) {
                              echo "<div class='message-alart-style1'>
                              <div class='alert alart_style_four alert-dismissible fade show mb20' role='alert'><strong>Success!</strong> Property deleted!
                                <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
                              </div>
                            </div>";
                            }else {
                              echo "<div class='message-alart-style1'>
                                      <div class='alert alart_style_three alert-dismissible fade show mb20' role='alert'><strong>Failed:</strong> Try again.
                                        <i class='far fa-xmark btn-close' data-bs-dismiss='alert' aria-label='Close'></i>
                                      </div>
                                    </div>";
                                  }
                                }
                        ?> 
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>

          </form>
        </div>
        <footer class="dashboard_footer pt30 pb10">
          <div class="container">
            <div class="row items-center justify-content-center justify-content-md-between">
              <div class="col-auto">
                <div class="copyright-widget">
                  <p class="text">© <a href="https://windand.co.ke" target="_blank">Windand</a> - All rights reserved</p>
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