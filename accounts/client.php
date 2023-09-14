<div class="row">
            <div class="col-sm-6 col-xxl-3">
            <?php
              // SQL query to count rows with "house" in the category column
              $query= mysqli_query($server, "SELECT * FROM `bookings` WHERE `client_id` = '$servedby_email' ORDER BY `date_booked` DESC LIMIT 1") or die(mysqli_error($server));
              
              if (mysqli_num_rows($query) > 0) {
                // OUTPUT DATA OF EACH ROW
                while($row = mysqli_fetch_assoc($query)) {                        
            ?>
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Property</div>
                  <div class="title"><h3><?php echo $row['property_name']; ?></h3></div>
                </div>
                <div class="icon text-center"><i class="flaticon-home"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Checked In</div>
                  <div class="title"><h3><?php echo $row['init_date']; ?></h3></div>
                </div>
                <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Checked Out</div>
                  <div class="title"><h3><?php echo $row['end_date']; ?></h3></div>
                </div>
                <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Status</div>
                  <div class="title"><h3><?php echo $row['status']; ?></h3></div>
                </div>
                <div class="icon text-center"><i class="flaticon-review"></i></div>
              </div>
            </div><?php }}?>
          </div>