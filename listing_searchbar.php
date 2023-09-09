          <form action="search_listing.php" method="POST">
            <div class="list-sidebar-style1">
              <div class="widget-wrapper">
                <h6 class="list-title">Find your home</h6>
                <div class="search_area">
                  <input type="text" class="form-control" placeholder="What are you looking for?">
                  <label><span class="flaticon-search"></span></label>
                </div>
              </div>
<!--
              <div class="widget-wrapper">
                <h6 class="list-title">Property Type</h6>
                <div class="checkbox-style1">
                  <label class="custom_checkbox">Houses
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="custom_checkbox">Apartments
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                  </label>
                  <label class="custom_checkbox">Office
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="custom_checkbox">Villa
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                  <label class="custom_checkbox">Townhome
                    <input type="checkbox">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>-->
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
                  <select name="bedrooms" class="selectpicker" required="" data-width="100%">
                    <option value="1">1 bedroom</option>
                    <option value="2">2 bedroom</option>
                    <option value="3">3 bedroom</option>
                    <option value="4">4 bedroom</option>
                    <option value="5">5 bedroom</option>
                  </select>
                 
                </div>
              </div>

              <div class="widget-wrapper">
                <h6 class="list-title">Bathrooms</h6>
                <div class="d-flex">
                  <select class="selectpicker" required="" name="bathrooms" data-width="100%">
                    <option value="1">1 bedroom</option>
                    <option value="2">2 bedroom</option>
                    <option value="3">3 bedroom</option>
                    <option value="4">4 bedroom</option>
                    <option value="5">5 bedroom</option>
                  </select>
                 
                </div>
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
              <!--
              <div class="widget-wrapper">
                <h6 class="list-title">Square Feet</h6>
                <div class="space-area">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="form-style1">
                      <input type="text" class="form-control" placeholder="Min.">
                    </div>
                    <span class="dark-color">-</span>
                    <div class="form-style1">
                      <input type="text" class="form-control" placeholder="Max">
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Year Built</h6>
                <div class="space-area">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="form-style1">
                      <input type="text" class="form-control" placeholder="2019">
                    </div>
                    <span class="dark-color">-</span>
                    <div class="form-style1">
                      <input type="text" class="form-control" placeholder="2022">
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <div class="feature-accordion">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-none">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button border-none p-0 after-none feature-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="flaticon-settings"></span> Other Features</button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-0 mt15">
                          <div class="row">
                            <div class="col-lg-6">
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
                                <label class="custom_checkbox">TV Cable
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="custom_checkbox">Dryer
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="checkbox-style1">
                                <label class="custom_checkbox">Outdoor Shower
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="custom_checkbox">Washer
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="custom_checkbox">Lake view
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="custom_checkbox">Wine cellar
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="custom_checkbox">Front yard
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="custom_checkbox">Refrigerator
                                  <input type="checkbox">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->
              <div class="widget-wrapper mb20">
                <div class="btn-area d-grid align-items-center">
                <button class="ud-btn btn-thm" name="search"><span class='flaticon-search align-text-top pr10'></span>Search</button>
                </div>
              </div>
              <div class="reset-area d-flex align-items-center justify-content-between">
                <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
              </div>
            </div>
</form>