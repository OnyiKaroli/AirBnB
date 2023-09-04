<form action="search_listing.php" method="POST">
            <div class="list-sidebar-style1">
              <div class="widget-wrapper">
                <h6 class="list-title">Find your home</h6>
                <div class="search_area">
                  <input type="text" class="form-control" placeholder="What are you looking for?">
                  <label><span class="flaticon-search"></span></label>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Listing Status</h6>
                <div class="radio-element">
                  <div class="form-check d-flex align-items-center mb10">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Buy</label>
                  </div>
                  <div class="form-check d-flex align-items-center mb10">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="checked">
                    <label class="form-check-label" for="flexRadioDefault2">Rent</label>
                  </div>
                  <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">Sold</label>
                  </div>
                </div>
              </div>
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
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Price Range</h6>
                <!-- Range Slider Desktop Version -->
                <div class="range-slider-style1">
                  <div class="range-wrapper">
                    <div class="slider-range mt30 mb20"></div>
                    <div class="text-center">
                      <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-2 dark-color"></span>
                      <input type="text" class="amount2" placeholder="$70987">
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Bedrooms</h6>
                <div class="d-flex">
                  <div class="selection">
                    <input id="any" name="beds" type="radio" checked>
                    <label for="any">any</label>
                  </div>
                  <div class="selection">
                    <input id="oneplus" name="beds" type="radio">
                    <label for="oneplus">1+</label>
                  </div>
                  <div class="selection">
                    <input id="twoplus" name="beds" type="radio">
                    <label for="twoplus">2+</label>
                  </div>
                  <div class="selection">
                    <input id="threeplus" name="beds" type="radio">
                    <label for="threeplus">3+</label>
                  </div>
                  <div class="selection">
                    <input id="fourplus" name="beds" type="radio">
                    <label for="fourplus">4+</label>
                  </div>
                  <div class="selection">
                    <input id="fiveplus" name="beds" type="radio">
                    <label for="fiveplus">5+</label>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper">
                <h6 class="list-title">Bathrooms</h6>
                <div class="d-flex">
                  <div class="selection">
                    <input id="bathany" name="bath" type="radio" checked>
                    <label for="bathany">any</label>
                  </div>
                  <div class="selection">
                    <input id="bathoneplus" name="bath" type="radio">
                    <label for="bathoneplus">1+</label>
                  </div>
                  <div class="selection">
                    <input id="bathtwoplus" name="bath" type="radio">
                    <label for="bathtwoplus">2+</label>
                  </div>
                  <div class="selection">
                    <input id="baththreeplus" name="bath" type="radio">
                    <label for="baththreeplus">3+</label>
                  </div>
                  <div class="selection">
                    <input id="bathfourplus" name="bath" type="radio">
                    <label for="bathfourplus">4+</label>
                  </div>
                  <div class="selection">
                    <input id="bathfiveplus" name="bath" type="radio">
                    <label for="bathfiveplus">5+</label>
                  </div>
                </div>
              </div>
              <div class="widget-wrapper advance-feature-modal">
                <h6 class="list-title">Location</h6>
                <div class="form-style2 input-group">
            <select class="selectpicker" data-width="100%">
            <option>All Cities</option>
            <option data-tokens="California">California</option>
            <option data-tokens="Chicago">Chicago</option>
            <option data-tokens="LosAngeles">Los Angeles</option>
            <option data-tokens="Manhattan">Manhattan</option>
            <option data-tokens="NewJersey">New Jersey</option>
            <option data-tokens="NewYork">New York</option>
            <option data-tokens="SanDiego">San Diego</option>
            <option data-tokens="SanFrancisco">San Francisco</option>
            <option data-tokens="Texas">Texas</option>
            </select>
                </div>
              </div>
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
              </div>
              <div class="widget-wrapper mb20">
                <div class="btn-area d-grid align-items-center">
                <button class="ud-btn btn-thm"><?php echo "<a class="reset-button" href="search_listing?id=".$column["id"]">;?><span class="flaticon-search align-text-top pr10"></span>Search</a></button>
                </div>
              </div>
              <div class="reset-area d-flex align-items-center justify-content-between">
                <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
              </div>
            </div>
</form>