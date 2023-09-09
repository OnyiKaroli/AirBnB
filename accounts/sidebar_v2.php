<div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="dashboard" class="items-center"><i class="flaticon-discovery mr15"></i>Dashboard</a>
          </div>
          <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>

          <?php
            if ($servedby_role = "client") {
              echo "<div class='sidebar_list_item'>
              <a href='../listing' class='items-center'><i class='flaticon-new-tab mr15'></i>Make a booking</a>
            </div>
            <div class='sidebar_list_item'>
              <a href='all_booking' class='items-center'><i class='flaticon-home mr15'></i>My Bookings</a>
            </div>";
            } elseif ($servedby_role = "Admin") {
              echo "<div class='sidebar_list_item'>
              <a href='dashboard-add-property' class='items-center'><i class='flaticon-new-tab mr15'></i>Add New Property</a>
            </div>
            <div class='sidebar_list_item'>
              <a href='dashboard-properties' class='items-center'><i class='flaticon-home mr15'></i>My Properties</a>
            </div>";              
            }
          ?>

          <div class="sidebar_list_item ">
            <a href="dashboard-favorites" class="items-center"><i class="flaticon-like mr15"></i>Featured</a>
          </div>
          <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
          <div class="sidebar_list_item ">
            <a href="dashboard-profile" class="items-center"><i class="flaticon-user mr15"></i>Edit Profile</a>
          </div>
          <div class="sidebar_list_item ">
          <a href="logout" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
          </div>
        </div>
      </div>