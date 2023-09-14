<header class="header-nav nav-homepage-style at-home2 stricky main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container maxw1600 posr"> 
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logos mr35">
                <a class="header-logo logo1" href="index.html"><img src="images/header-logo.png" alt="Header Logo"></a>
                <a class="header-logo logo2" href="index.html"><img src="images/header-logo.png" alt="Header Logo"></a>
              </div>
              <!-- Responsive Menu Structure-->
              <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="visible_list"><a class="list-item" href="index"><span class="title">Home</span></a></li>
                <li class="visible_list"><a class="list-item" href="listing"><span class="title">Listing</span></a></li>
                <li class="visible_list"><a class="list-item" href="agents"><span class="title">Agents</span></a></li>
                <li class="visible_list"><a class="list-item" href="about"><span class="title">About Us</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex align-items-center">
              <a class="login-info d-flex align-items-center me-3" href="2-911-098-7654"><i class="far fa-phone fz16 me-2"></i> <span class="d-none d-xl-block">2 911 098 7654</span></a>
              <?php
              
              if(!isset($_SESSION['user']['email'])) {
                echo "<a class='login-info d-flex align-items-center' href='login' role='button'><i class='far fa-user-circle fz16 me-2'></i> <span class='d-none d-xl-block'>Login</span></a>";
                echo '<a class="ud-btn add-property menu-btn bdrs60 mx-2 mx-xl-4" href="contact">Contact Us<i class="fal fa-arrow-right-long"></i></a>';
              } else {
                echo "<a class='login-info d-flex align-items-center' href='accounts/index.php' role='button'><i class='far fa-user-circle fz16 me-2'></i> <span class='d-none d-xl-block'>$servedby_name</span></a>";
              }
              
              ?>
              <?php
                if (isset($_SESSION['user']['email']) && $servedby_role = 'client') {
                  echo "<a class='ud-btn add-property menu-btn bdrs60 mx-2 mx-xl-4' href='listing'>Make a Booking<i class='fal fa-arrow-right-long'></i></a>";
                } elseif (isset($_SESSION['user']['email']) && $servedby_role = 'Admin') {
                  echo "<a class='ud-btn add-property menu-btn bdrs60 mx-2 mx-xl-4' href='dashboard-add-property'>Add Property<i class='fal fa-arrow-right-long'></i></a>";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>