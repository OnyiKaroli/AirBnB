<header class="header-nav nav-innerpage-style main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <a class="header-logo" href="index"><img src="images/header-logo.png" alt="Header Logo"></a>
          </div>
          <div class="col-auto">
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="visible_list"><a class="list-item" href="index"><span class="title">Home</span></a></li>
                <li class="megamenu_style"><a  class="list-item" href="listing"><span class="title">Listing</span></a></li>
                <li class="visible_list"><a class="list-item" href="agents"><span class="title">Agents</span></a></li>
                <li class="visible_list"><a class="list-item" href="about"><span class="title">About</span></a></li>
                <li class="visible_list"><a class="list-item" href="contact"><span class="title">Contact Us</span></a></li>
            </ul> 
          </div>
          <div class="col-auto">
            <div class="d-flex align-items-center">

              <?php
              
              if(!isset($_SESSION['user']['email'])) {
                echo "<a class='login-info d-flex align-items-center' href='login' role='button'><i class='far fa-user-circle fz16 me-2'></i> <span class='d-none d-xl-block'>Login / Register</span></a>";
              } else {
                echo "<a class='login-info d-flex align-items-center' href='accounts/index' role='button'><i class='far fa-user-circle fz16 me-2'></i> <span class='d-none d-xl-block'>$servedby_name</span></a>";
              }
              ?>
              <?php
                if (isset($_SESSION['user']['email']) && $servedby_role = 'client') {
                  echo "<a class='ud-btn btn-transparent add-property bdrs60 mx-2 mx-xl-4' href='listing'>Make a Booking<i class='fal fa-arrow-right-long'></i></a>";
                } elseif (isset($_SESSION['user']['email']) && $servedby_role = 'Admin') {
                  echo "<a class='ud-btn btn-transparent add-property bdrs60 mx-2 mx-xl-4' href='accounts/dashboard-add-property'>Add Property<i class='fal fa-arrow-right-long'></i></a>";
                } else {
                  echo "<a class='ud-btn btn-transparent add-property bdrs60 mx-2 mx-xl-4' href='listing'>View Rooms<i class='fal fa-arrow-right-long'></i></a>";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>