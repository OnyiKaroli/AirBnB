<div class="row">
            <div class="col-sm-6 col-xxl-4">
            <?php
              // SQL query to count rows with "house" in the category column
              $checkout_count= mysqli_query($server, "SELECT * FROM `properties`") or die(mysqli_error($server));
              //check rows returned
              $count=mysqli_num_rows($checkout_count);
                        
                      ?>
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">All Properties</div>
                  <div class="title"><?php echo $count; ?></div>
                </div>
                <div class="icon text-center"><i class="flaticon-home"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-4">
            <?php
              // SQL query to count rows with "house" in the category column
              $checkout_count= mysqli_query($server, "SELECT * FROM `properties` WHERE `listed_in` = 'For sale'") or die(mysqli_error($server));
              //check rows returned
              $count=mysqli_num_rows($checkout_count);
                        
                      ?>
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">For Sale</div>
                  <div class="title"><?php echo $count; ?></div>
                </div>
                <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-4">
              <div class="d-flex justify-content-between statistics_funfact">
              <?php
              // SQL query to count rows with "house" in the category column
              $checkout_count= mysqli_query($server, "SELECT * FROM `bookings` WHERE `status`='booked'") or die(mysqli_error($server));
              //check rows returned
              $count=mysqli_num_rows($checkout_count);
                        
                      ?>
                <div class="details">
                  <div class="text fz25">Currently Booked</div>
                  <div class="title"><?php echo $count; ?></div>
                </div>
                <div class="icon text-center"><i class="flaticon-review"></i></div>
              </div>
            </div>
          </div>