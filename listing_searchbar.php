          <form action="search_listing.php" method="POST">
            <div class="list-sidebar-style1">
              <div class="widget-wrapper">
                <h6 class="list-title">Find your home</h6>
              </div>
              
              <div class="widget-wrapper advance-feature-modal">
                <h6 class="list-title">Location</h6>
                <div class="form-style2 input-group">
                  <select name="location" class="selectpicker" required="" data-width="100%">
                    <option>All Cities</option>
                    <option value="County A">County A</option>
                    <option value="County B">County B</option>
                    <option value="County C">County C</option>
                    <option value="County D">County D</option>
                    <option value="County E">County E</option>
                    <option value="County F">County F</option>
                    <option value="County G">County G</option>
                    <option value="County H">County H</option>
                    <option value="County I">County I</option>
                  </select>
                </div>
              </div>
              <div class="widget-wrapper">
                <div class="ui-content mb40">
                <div class="form-style1">
                  <label class="form-label fw600 dark-color">Check In</label>
                  <input type="date" name="checkin" class="form-control" placeholder="Check In Date" required="">
                </div>
              </div>
              </div>
              <div class="widget-wrapper">
                <div class="ui-content mb40">
                <div class="form-style1">
                  <label class="form-label fw600 dark-color">Check Out</label>
                  <input type="date" name="checkout" class="form-control" placeholder="Check Out Date" required="">
                </div>
              </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Guests</h6>
                <div class="d-flex">
                  <select class="selectpicker" required="" name="guest" data-width="100%" required="">
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4 Guests</option>
                    <option value="5">5 Guests</option>
                  </select>
                 
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Price Range</h6>
                <!-- Range Slider Desktop Version -->
                <div class="range-slider-style1">
                  <div class="range-wrapper">
                    <div class="slider-range mt30 mb20"></div>
                    <div class="text-center">
                      <input type="number" min="0" name="min_amount" class="amount" placeholder="Min" required=""><span class="fa-sharp fa-solid fa-minus mx-2 dark-color"></span>
                      <input type="number" min="0" name="max_amount" class="amount2" placeholder="Max" required="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Bedrooms</h6>
                <div class="d-flex">
                  <select name="bedrooms" class="selectpicker" data-width="100%">
                    <option value="1">1 bedroom</option>
                    <option value="2">2 bedrooms</option>
                    <option value="3">3 bedrooms</option>
                    <option value="4">4 bedrooms</option>
                    <option value="5">5 bedrooms</option>
                  </select>
                 
                </div>
              </div>

              <div class="widget-wrapper">
                <h6 class="list-title">Bathrooms</h6>
                <div class="d-flex">
                  <select class="selectpicker" required="" name="bathrooms" data-width="100%">
                    <option value="1">1 bathroom</option>
                    <option value="2">2 bathrooms</option>
                    <option value="3">3 bathrooms</option>
                    <option value="4">4 bathrooms</option>
                    <option value="5">5 bathrooms</option>
                  </select>
                 
                </div>
              </div>
              <div class="widget-wrapper mb20">
                <div class="btn-area d-grid align-items-center">
                  <button class="ud-btn btn-thm" name="search"><span class='flaticon-search align-text-top pr10'></span>Search</button>
                </div>
              </div>
            </div>
</form>