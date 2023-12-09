<?php
include("/DA/content/views/shared/headerhome.php");
?>

<section class="pt-40 pb-40 bg-light-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h1 class="text-30 fw-600">Bạn muốn đi đâu?</h1>
          <p>Hơn 100 tour du lịch giá tốt đang chờ bạn</p>
        </div>

        <div
          class="mainSearch -col-3-big bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30"
        >
          <div class="button-grid items-center">
            <div class="d-flex" data-x-dd-click="searchMenu-loc">
              <i
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    d="M11 6C13.7614 6 16 8.23858 16 11M16.6588 16.6549L21 21M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                    stroke="black"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path></svg></i>

              <div class="ml-10">
                <h4 class="text-15 fw-500 ls-2 lh-16">Tour</h4>

                <div class="text-15 text-light-1 ls-2 lh-16">
                  <input
                    autocomplete="off"
                    type="search"
                    placeholder="Bạn muốn đi đâu?"
                    class="js-search js-dd-focus"
                  />
                </div>
              </div>
            </div>

            <div
              class="searchMenu-loc pr-30 pl-10 lg:py-20 lg:px-0 js-form-dd js-liverSearch"
            >
              <div class="d-flex" data-x-dd-click="searchMenu-loc">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    d="M5.7 15C4.03377 15.6353 3 16.5205 3 17.4997C3 19.4329 7.02944 21 12 21C16.9706 21 21 19.4329 21 17.4997C21 16.5205 19.9662 15.6353 18.3 15M12 9H12.01M18 9C18 13.0637 13.5 15 12 18C10.5 15 6 13.0637 6 9C6 5.68629 8.68629 3 12 3C15.3137 3 18 5.68629 18 9ZM13 9C13 9.55228 12.5523 10 12 10C11.4477 10 11 9.55228 11 9C11 8.44772 11.4477 8 12 8C12.5523 8 13 8.44772 13 9Z"
                    stroke="black"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>

                <div class="ml-10">
                  <h4 class="text-15 fw-500 ls-2 lh-16"></h4>
                  <div class="text-15 text-light-1 ls-2 lh-16">
                    <input
                      autocomplete="off"
                      type="search"
                      placeholder="Tất cả địa điểm"
                      class="js-search js-dd-focus"
                    />
                  </div>
                </div>
              </div>

              <div
                class="searchMenu-loc__field shadow-2 js-popup-window"
                data-x-dd="searchMenu-loc"
                data-x-dd-toggle="-is-active"
              >
                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                  <div class="y-gap-5 js-results">
                    <div>
                      <button
                        class="-link d-block col-12 text-left rounded-4 px-20 py-10 js-search-option"
                      >
                        <div class="d-flex">
                          <div
                            class="icon-location-2 text-light-1 text-20 pt-4"
                          ></div>
                          <div class="ml-10">
                            <div
                              class="text-15 lh-12 fw-500 js-search-option-target"
                            >
                              Tất cả địa điểm
                            </div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div>
                      <button
                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                      >
                        <div class="d-flex">
                          <div
                            class="icon-location-2 text-light-1 text-20 pt-4"
                          ></div>
                          <div class="ml-10">
                            <div
                              class="text-15 lh-12 fw-500 js-search-option-target"
                            >
                              Huế
                            </div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div>
                      <button
                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                      >
                        <div class="d-flex">
                          <div
                            class="icon-location-2 text-light-1 text-20 pt-4"
                          ></div>
                          <div class="ml-10">
                            <div
                              class="text-15 lh-12 fw-500 js-search-option-target"
                            >
                              Đà Nẵng
                            </div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div>
                      <button
                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                      >
                        <div class="d-flex">
                          <div
                            class="icon-location-2 text-light-1 text-20 pt-4"
                          ></div>
                          <div class="ml-10">
                            <div
                              class="text-15 lh-12 fw-500 js-search-option-target"
                            >
                              Hà Nội
                            </div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div>
                      <button
                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                        <div class="d-flex">
                          <div
                            class="icon-location-2 text-light-1 text-20 pt-4"></div>
                          <div class="ml-10">
                            <div
                              class="text-15 lh-12 fw-500 js-search-option-target">
                              Hạ Long
                            </div>
                          </div>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="searchMenu-loc pr-30 pl-10 lg:py-20 lg:px-0 js-form-dd js-liverSearch"
            >
              <div class="d-flex" data-x-dd-click="searchMenu-loc">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    d="M15 10V9.91667C15 8.85812 14.1419 8 13.0833 8H11C9.89543 8 9 8.89543 9 10C9 11.1046 9.89543 12 11 12H13C14.1046 12 15 12.8954 15 14C15 15.1046 14.1046 16 13 16H10.9583C9.87678 16 9 15.1232 9 14.0417V14M12 17.5V6.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                    stroke="#101828"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>

                <div class="ml-10">
                  <h4 class="text-15 fw-500 ls-2 lh-16"></h4>
                  <div class="text-15 text-light-1 ls-2 lh-16">
                    <input
                      autocomplete="off"
                      type="search"
                      placeholder="Tất cả các mức giá"
                      class="js-search js-dd-focus"
                    />
                  </div>
                </div>
              </div>

              <div
                class="searchMenu-loc__field shadow-2 js-popup-window"
                data-x-dd="searchMenu-loc"
                data-x-dd-toggle="-is-active"
              >
                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                  <div class="y-gap-5 js-results">
                    <div>
                      <button
                        class="-link d-block col-12 text-left rounded-4 px-20 py-10 js-search-option"
                      >
                        <div class="d-flex">
                          <div
                            class="icon-location-2 text-light-1 text-20 pt-4"
                          ></div>
                          <div class="ml-10">
                            <div
                              class="text-15 lh-12 fw-500 js-search-option-target"
                            >
                              1-3 Triệu
                            </div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div>
                      <button
                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                      >
                        <div class="d-flex">
                          <div
                            class="icon-location-2 text-light-1 text-20 pt-4"
                          ></div>
                          <div class="ml-10">
                            <div
                              class="text-15 lh-12 fw-500 js-search-option-target"
                            >
                              3-6 Triệu
                            </div>
                          </div>
                        </div>
                      </button>
                    </div>

                    <div>
                      <button
                        class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option"
                      >
                        <div class="d-flex">
                          <div
                            class="icon-location-2 text-light-1 text-20 pt-4"
                          ></div>
                          <div class="ml-10">
                            <div
                              class="text-15 lh-12 fw-500 js-search-option-target"
                            >
                              > 6 Triệu
                            </div>
                          </div>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="button-item">
              <button
                class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white"
              >
                <i class="icon-search text-20 mr-10"></i>
                Search
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-pt-md layout-pb-lg">
  <div class="container">
    <div class="row y-gap-30">
      <div class="col-xl-3 col-lg-4 lg:d-none">
        <aside class="sidebar y-gap-40">
          <div class="sidebar__item -no-border">
            <h5 class="text-18 fw-500 mb-10">Category Types</h5>
            <div class="sidebar-checkbox">
              <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="form-checkbox">
                      <input type="checkbox" name="name" />
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon icon-check"></div>
                      </div>
                    </div>

                    <div class="text-15 ml-10">Tours</div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-15 text-light-1">92</div>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar__item">
            <h5 class="text-18 fw-500 mb-10">Other</h5>
            <div class="sidebar-checkbox">
              <div class="row y-gap-10 items-center justify-between">
                <div class="col-auto">
                  <div class="d-flex items-center">
                    <div class="form-checkbox">
                      <input type="checkbox" name="name" />
                      <div class="form-checkbox__mark">
                        <div class="form-checkbox__icon icon-check"></div>
                      </div>
                    </div>

                    <div class="text-15 ml-10">Free cancellation</div>
                  </div>
                </div>

                <div class="col-auto">
                  <div class="text-15 text-light-1">92</div>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>

      <div class="col-xl-9 col-lg-8">
        <div class="row y-gap-10 items-center justify-between">
          <div class="col-auto">
            <div class="text-18">
              <span class="fw-500">Tìm thấy 56 kết quả</span>
            </div>
          </div>

          <div class="col-auto">
            <div class="row x-gap-20 y-gap-20">
              <div class="col-auto">
                <button
                  class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1"
                >
                  <i class="icon-up-down text-14 mr-10"></i>
                  Sắp xếp
                </button>
              </div>

              <div class="col-auto d-none lg:d-block">
                <button
                  data-x-click="filterPopup"
                  class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1"
                >
                  <i class="icon-up-down text-14 mr-10"></i>
                  Filter
                </button>
              </div>
            </div>
          </div>
        </div>

        <div
          class="filterPopup bg-white"
          data-x="filterPopup"
          data-x-toggle="-is-active"
        >
          <aside class="sidebar -mobile-filter">
            <div data-x-click="filterPopup" class="-icon-close">
              <i class="icon-close"></i>
            </div>

            <div class="sidebar__item -no-border">
              <h5 class="text-18 fw-500 mb-10">Category Types</h5>
              <div class="sidebar-checkbox">
                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Tours</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Attractions</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Day Trips</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">21</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Outdoor Activities</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">78</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Concerts &amp; Shows</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">679</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Other</h5>
              <div class="sidebar-checkbox">
                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Free cancellation</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar__item pb-30">
              <h5 class="text-18 fw-500 mb-10">Price</h5>
              <div class="row x-gap-10 y-gap-30">
                <div class="col-12">
                  <div class="js-price-rangeSlider">
                    <div class="text-14 fw-500"></div>

                    <div class="d-flex justify-between mb-20">
                      <div class="text-15 text-dark-1">
                        <span class="js-lower"></span>
                        -
                        <span class="js-upper"></span>
                      </div>
                    </div>

                    <div class="px-5">
                      <div class="js-slider"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Duration</h5>
              <div class="sidebar-checkbox">
                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Up to 1 hour</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">1 to 4 hours</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">4 hours to 1 day</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">21</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar__item">
              <h5 class="text-18 fw-500 mb-10">Languages</h5>
              <div class="sidebar-checkbox">
                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">English</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">92</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Spanish</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">French</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">45</div>
                  </div>
                </div>

                <div class="row y-gap-10 items-center justify-between">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="form-checkbox">
                        <input type="checkbox" name="name" />
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 ml-10">Turkish</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-15 text-light-1">21</div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>

        <div class="mt-30"></div>

        <div class="row y-gap-30">
          <div class="col-12">
            <div class="border-top-light pt-30">
              <div class="row x-gap-20 y-gap-20">
                <div class="col-md-auto">
                  <div
                    class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4"
                  >
                    <div class="cardImage__content">
                      <img
                        class="rounded-4 col-12"
                        src="img/lists/tour/1/1.png"
                        alt="image"
                      />
                    </div>

                    <div class="cardImage__wishlist">
                      <button
                        class="button -blue-1 bg-white size-30 rounded-full shadow-2"
                      >
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col-md">
                  <div class="row x-gap-10 items-center">
                    <div class="col-auto">
                      <p class="text-14 lh-14 mb-5">6+ hours</p>
                    </div>
                    <div class="col-auto">
                      <div class="size-3 rounded-full bg-light-1 mb-5"></div>
                    </div>
                    <div class="col-auto">
                      <p class="text-14 lh-14 mb-5">Full-day Tours</p>
                    </div>
                  </div>

                  <h3 class="text-18 lh-16 fw-500">
                    Leeds Castle, Cliffs of Dover and Canterbury Day Trip from
                    London with Guided Cathedral Tour
                  </h3>
                  <p class="text-14 lh-14 mt-5">Westminster Borough, London</p>

                  <div class="text-14 lh-15 fw-500 mt-20">
                    Taking safety measures
                  </div>
                  <div class="text-14 text-green-2 fw-500 lh-15 mt-5">
                    Free cancellation
                  </div>
                </div>

                <div class="col-md-auto text-right md:text-left">
                  <div
                    class="d-flex x-gap-5 items-center justify-end md:justify-start"
                  >
                    <i class="icon-star text-10 text-yellow-1"></i>

                    <i class="icon-star text-10 text-yellow-1"></i>

                    <i class="icon-star text-10 text-yellow-1"></i>

                    <i class="icon-star text-10 text-yellow-1"></i>

                    <i class="icon-star text-10 text-yellow-1"></i>
                  </div>

                  <div class="text-14 lh-14 text-light-1 mt-10">
                    3,014 reviews
                  </div>

                  <div class="text-14 text-light-1 mt-50 md:mt-20">From</div>
                  <div class="text-22 lh-12 fw-600 mt-5">US$72</div>
                  <div class="text-14 text-light-1 mt-5">per adult</div>

                  <a
                    href="#"
                    class="button -md -dark-1 bg-blue-1 text-white mt-24"
                  >
                    View Detail
                    <div class="icon-arrow-top-right ml-15"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="border-top-light mt-30 pt-30">
          <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
            <div class="col-auto md:order-1">
              <button class="button -blue-1 size-40 rounded-full border-light">
                <i class="icon-chevron-left text-12"></i>
              </button>
            </div>

            <div class="col-md-auto md:order-3">
              <div class="row x-gap-20 y-gap-20 items-center md:d-none">
                <div class="col-auto">
                  <div class="size-40 flex-center rounded-full">1</div>
                </div>

                <div class="col-auto">
                  <div
                    class="size-40 flex-center rounded-full bg-dark-1 text-white"
                  >
                    2
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-40 flex-center rounded-full">3</div>
                </div>

                <div class="col-auto">
                  <div class="size-40 flex-center rounded-full bg-light-2">
                    4
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-40 flex-center rounded-full">5</div>
                </div>

                <div class="col-auto">
                  <div class="size-40 flex-center rounded-full">...</div>
                </div>

                <div class="col-auto">
                  <div class="size-40 flex-center rounded-full">20</div>
                </div>
              </div>

              <div
                class="row x-gap-10 y-gap-20 justify-center items-center d-none md:d-flex"
              >
                <div class="col-auto">
                  <div class="size-40 flex-center rounded-full">1</div>
                </div>

                <div class="col-auto">
                  <div
                    class="size-40 flex-center rounded-full bg-dark-1 text-white"
                  >
                    2
                  </div>
                </div>

                <div class="col-auto">
                  <div class="size-40 flex-center rounded-full">3</div>
                </div>
              </div>
            </div>

            <div class="col-auto md:order-2">
              <button class="button -blue-1 size-40 rounded-full border-light">
                <i class="icon-chevron-right text-12"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="layout-pt-md layout-pb-md bg-dark-2">
  <div class="container">
    <div class="row y-gap-30 justify-between items-center">
      <div class="col-auto">
        <div class="row y-gap-20 flex-wrap items-center">
          <div class="col-auto">
            <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
          </div>

          <div class="col-auto">
            <h4 class="text-26 text-white fw-600">
              Your Travel Journey Starts Here
            </h4>
            <div class="text-white">
              Sign up and we'll send the best deals to you
            </div>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
          <div>
            <input class="bg-white h-60" type="text" placeholder="Your Email" />
          </div>

          <div>
            <button class="button -md h-60 bg-blue-1 text-white">
              Subscribe
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include("/DA/content/views/shared/footer.php");
?>
