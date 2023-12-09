<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap"
      rel="stylesheet"
    />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../public/css/vendors.css" />
    <link rel="stylesheet" href="../../../public/css/main.css" />

    <title>GoTrip</title>
  </head>

  <body>
    <div class="preloader js-preloader">
      <div class="preloader__wrap">
        <div class="preloader__icon">
          <svg
            width="38"
            height="37"
            viewBox="0 0 38 37"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_1_41)">
              <path
                d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z"
                fill="#3554D1"
              />
            </g>

            <defs>
              <clipPath id="clip0_1_41">
                <rect
                  width="36.92"
                  height="36.92"
                  fill="white"
                  transform="translate(0.540039)"
                />
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>

      <div class="preloader__title">GoTrip</div>
    </div>

    <main>
      <div class="header-margin"></div>
      <header
        data-add-bg=""
        class="header -fixed bg-dark-3 js-header"
        data-x="header"
        data-x-toggle="is-menu-opened"
      >
        <div data-anim="fade" class="header__container px-30 sm:px-20">
          <div class="row justify-between items-center">
            <div class="col-auto">
              <div class="d-flex items-center">
                <a
                  href="index.html"
                  class="header-logo mr-20"
                  data-x="header-logo"
                  data-x-toggle="is-logo-dark"
                >
                  <img src="img/general/logo-light.svg" alt="logo icon" />
                  <img src="img/general/logo-dark.svg" alt="logo icon" />
                </a>

                <div
                  class="header-menu"
                  data-x="mobile-menu"
                  data-x-toggle="is-menu-active"
                >
                  <div class="mobile-overlay"></div>

                  <div class="header-menu__content">
                    <div class="mobile-bg js-mobile-bg"></div>

                    <div class="menu js-navList">
                      <ul class="menu__nav text-white -is-active">
                        <li class="menu-item-has-children">
                          <a data-barba href="">
                            <span class="mr-10">Home</span>
                            <i class="icon icon-chevron-sm-down"></i>
                          </a>

                          <ul class="subnav">
                            <li class="subnav__backBtn js-nav-list-back">
                              <a href="#"
                                ><i class="icon icon-chevron-sm-down"></i>
                                Home</a
                              >
                            </li>

                            <li><a href="index.html">Home 1</a></li>

                            <li><a href="home-2.html">Home 2</a></li>

                            <li><a href="home-3.html">Home 3</a></li>

                            <li><a href="home-4.html">Home 4</a></li>

                            <li><a href="home-5.html">Home 5</a></li>

                            <li><a href="home-6.html">Home 6</a></li>

                            <li><a href="home-7.html">Home 7</a></li>

                            <li><a href="home-8.html">Home 8</a></li>

                            <li><a href="home-9.html">Home 9</a></li>

                            <li><a href="home-10.html">Home 10</a></li>
                          </ul>
                        </li>

                        <li class="menu-item-has-children -has-mega-menu">
                          <a data-barba href="#">
                            <span class="mr-10">Categories</span>
                            <i class="icon icon-chevron-sm-down"></i>
                          </a>

                          <div class="mega">
                            <div class="tabs -underline-2 js-tabs">
                              <div
                                class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 pb-30 js-tabs-controls"
                              >
                                <div class="col-auto">
                                  <button
                                    class="tabs__button text-light-1 fw-500 js-tabs-button is-tab-el-active"
                                    data-tab-target=".-tab-item-1"
                                  >
                                    Hotel
                                  </button>
                                </div>

                                <div class="col-auto">
                                  <button
                                    class="tabs__button text-light-1 fw-500 js-tabs-button"
                                    data-tab-target=".-tab-item-2"
                                  >
                                    Tour
                                  </button>
                                </div>

                                <div class="col-auto">
                                  <button
                                    class="tabs__button text-light-1 fw-500 js-tabs-button"
                                    data-tab-target=".-tab-item-3"
                                  >
                                    Activity
                                  </button>
                                </div>

                                <div class="col-auto">
                                  <button
                                    class="tabs__button text-light-1 fw-500 js-tabs-button"
                                    data-tab-target=".-tab-item-4"
                                  >
                                    Holiday Rentals
                                  </button>
                                </div>

                                <div class="col-auto">
                                  <button
                                    class="tabs__button text-light-1 fw-500 js-tabs-button"
                                    data-tab-target=".-tab-item-5"
                                  >
                                    Car
                                  </button>
                                </div>

                                <div class="col-auto">
                                  <button
                                    class="tabs__button text-light-1 fw-500 js-tabs-button"
                                    data-tab-target=".-tab-item-6"
                                  >
                                    Cruise
                                  </button>
                                </div>

                                <div class="col-auto">
                                  <button
                                    class="tabs__button text-light-1 fw-500 js-tabs-button"
                                    data-tab-target=".-tab-item-7"
                                  >
                                    Flights
                                  </button>
                                </div>
                              </div>

                              <div class="tabs__content js-tabs-content">
                                <div
                                  class="tabs__pane -tab-item-1 is-tab-el-active"
                                >
                                  <div class="mega__content">
                                    <div class="mega__grid">
                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Hotel List
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="hotel-list-1.html"
                                              >Hotel List v1</a
                                            >
                                          </div>

                                          <div>
                                            <a href="hotel-list-2.html"
                                              >Hotel List v2</a
                                            >
                                          </div>

                                          <div>
                                            <a href="hotel-half-map.html"
                                              >Hotel List v3</a
                                            >
                                          </div>

                                          <div>
                                            <a href="hotel-grid-1.html"
                                              >Hotel List v4</a
                                            >
                                          </div>

                                          <div>
                                            <a href="hotel-grid-2.html"
                                              >Hotel List v5</a
                                            >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Hotel Single
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="hotel-single-1.html"
                                              >Hotel Single v1</a
                                            >
                                          </div>

                                          <div>
                                            <a href="hotel-single-2.html"
                                              >Hotel Single v2</a
                                            >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Hotel Booking
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="booking-pages.html"
                                              >Booking Page</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mega__image d-flex relative">
                                      <img
                                        src="#"
                                        data-src="img/backgrounds/7.png"
                                        alt="image"
                                        class="rounded-4 js-lazy"
                                      />

                                      <div
                                        class="absolute w-full h-full px-30 py-24"
                                      >
                                        <div
                                          class="text-22 fw-500 lh-15 text-white"
                                        >
                                          Things to do on <br />
                                          your trip
                                        </div>
                                        <button
                                          class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20"
                                        >
                                          Experinces
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="tabs__pane -tab-item-2">
                                  <div class="mega__content">
                                    <div class="mega__grid">
                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Tour List
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="tour-list-1.html"
                                              >Tour List v1</a
                                            >
                                          </div>

                                          <div>
                                            <a href="tour-grid-1.html"
                                              >Tour List v2</a
                                            >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Tour Pages
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="tour-map.html">Tour Map</a>
                                          </div>

                                          <div>
                                            <a href="tour-single.html"
                                              >Tour Single</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mega__image d-flex relative">
                                      <img
                                        src="img/backgrounds/7.png"
                                        alt="image"
                                        class="rounded-4"
                                      />

                                      <div
                                        class="absolute w-full h-full px-30 py-24"
                                      >
                                        <div
                                          class="text-22 fw-500 lh-15 text-white"
                                        >
                                          Things to do on <br />
                                          your trip
                                        </div>
                                        <button
                                          class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20"
                                        >
                                          Experinces
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="tabs__pane -tab-item-3">
                                  <div class="mega__content">
                                    <div class="mega__grid">
                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Activity List
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="activity-list-1.html"
                                              >Activity List v1</a
                                            >
                                          </div>

                                          <div>
                                            <a href="activity-grid-1.html"
                                              >Activity List v2</a
                                            >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Activity Pages
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="activity-map.html"
                                              >Activity Map</a
                                            >
                                          </div>

                                          <div>
                                            <a href="activity-single.html"
                                              >Activity Single</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mega__image d-flex relative">
                                      <img
                                        src="img/backgrounds/7.png"
                                        alt="image"
                                        class="rounded-4"
                                      />

                                      <div
                                        class="absolute w-full h-full px-30 py-24"
                                      >
                                        <div
                                          class="text-22 fw-500 lh-15 text-white"
                                        >
                                          Things to do on <br />
                                          your trip
                                        </div>
                                        <button
                                          class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20"
                                        >
                                          Experinces
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="tabs__pane -tab-item-4">
                                  <div class="mega__content">
                                    <div class="mega__grid">
                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Rental List
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="rental-list-1.html"
                                              >Rental List v1</a
                                            >
                                          </div>

                                          <div>
                                            <a href="rental-grid-1.html"
                                              >Rental List v2</a
                                            >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Rental Pages
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="rental-map.html"
                                              >Rental Map</a
                                            >
                                          </div>

                                          <div>
                                            <a href="rental-single.html"
                                              >Rental Single</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mega__image d-flex relative">
                                      <img
                                        src="img/backgrounds/7.png"
                                        alt="image"
                                        class="rounded-4"
                                      />

                                      <div
                                        class="absolute w-full h-full px-30 py-24"
                                      >
                                        <div
                                          class="text-22 fw-500 lh-15 text-white"
                                        >
                                          Things to do on <br />
                                          your trip
                                        </div>
                                        <button
                                          class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20"
                                        >
                                          Experinces
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="tabs__pane -tab-item-5">
                                  <div class="mega__content">
                                    <div class="mega__grid">
                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Car List
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="car-list-1.html"
                                              >Car List v1</a
                                            >
                                          </div>

                                          <div>
                                            <a href="car-grid-1.html"
                                              >Car List v2</a
                                            >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Car Pages
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="car-map.html">Car Map</a>
                                          </div>

                                          <div>
                                            <a href="car-single.html"
                                              >Car Single</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mega__image d-flex relative">
                                      <img
                                        src="img/backgrounds/7.png"
                                        alt="image"
                                        class="rounded-4"
                                      />

                                      <div
                                        class="absolute w-full h-full px-30 py-24"
                                      >
                                        <div
                                          class="text-22 fw-500 lh-15 text-white"
                                        >
                                          Things to do on <br />
                                          your trip
                                        </div>
                                        <button
                                          class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20"
                                        >
                                          Experinces
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="tabs__pane -tab-item-6">
                                  <div class="mega__content">
                                    <div class="mega__grid">
                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Cruise List
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="cruise-list-1.html"
                                              >Cruise List v1</a
                                            >
                                          </div>

                                          <div>
                                            <a href="cruise-grid-1.html"
                                              >Cruise List v2</a
                                            >
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Cruise Pages
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="cruise-map.html"
                                              >Cruise Map</a
                                            >
                                          </div>

                                          <div>
                                            <a href="cruise-single.html"
                                              >Cruise Single</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mega__image d-flex relative">
                                      <img
                                        src="img/backgrounds/7.png"
                                        alt="image"
                                        class="rounded-4"
                                      />

                                      <div
                                        class="absolute w-full h-full px-30 py-24"
                                      >
                                        <div
                                          class="text-22 fw-500 lh-15 text-white"
                                        >
                                          Things to do on <br />
                                          your trip
                                        </div>
                                        <button
                                          class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20"
                                        >
                                          Experinces
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="tabs__pane -tab-item-7">
                                  <div class="mega__content">
                                    <div class="mega__grid">
                                      <div class="mega__item">
                                        <div class="text-15 fw-500">
                                          Flight List
                                        </div>
                                        <div class="y-gap-5 text-15 pt-5">
                                          <div>
                                            <a href="flights-list.html"
                                              >Flight list v1</a
                                            >
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="mega__image d-flex relative">
                                      <img
                                        src="img/backgrounds/7.png"
                                        alt="image"
                                        class="rounded-4"
                                      />

                                      <div
                                        class="absolute w-full h-full px-30 py-24"
                                      >
                                        <div
                                          class="text-22 fw-500 lh-15 text-white"
                                        >
                                          Things to do on <br />
                                          your trip
                                        </div>
                                        <button
                                          class="button h-50 px-30 -blue-1 text-dark-1 bg-white mt-20"
                                        >
                                          Experinces
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <ul class="subnav mega-mobile">
                            <li class="subnav__backBtn js-nav-list-back">
                              <a href="#"
                                ><i class="icon icon-chevron-sm-down"></i>
                                Category</a
                              >
                            </li>

                            <li class="menu-item-has-children">
                              <a data-barba href="#">
                                <span class="mr-10">Hotel</span>
                                <i class="icon icon-chevron-sm-down"></i>
                              </a>

                              <ul class="subnav">
                                <li class="subnav__backBtn js-nav-list-back">
                                  <a href="#"
                                    ><i class="icon icon-chevron-sm-down"></i>
                                    Hotel</a
                                  >
                                </li>

                                <li>
                                  <a href="hotel-list-1.html">Hotel List v1</a>
                                </li>

                                <li>
                                  <a href="hotel-list-2.html">Hotel List v2</a>
                                </li>

                                <li>
                                  <a href="hotel-single-1.html"
                                    >Hotel Single v1</a
                                  >
                                </li>

                                <li>
                                  <a href="hotel-single-2.html"
                                    >Hotel Single v2</a
                                  >
                                </li>

                                <li>
                                  <a href="booking-pages.html">Booking Page</a>
                                </li>
                              </ul>
                            </li>

                            <li class="menu-item-has-children">
                              <a data-barba href="#">
                                <span class="mr-10">Tour</span>
                                <i class="icon icon-chevron-sm-down"></i>
                              </a>

                              <ul class="subnav">
                                <li class="subnav__backBtn js-nav-list-back">
                                  <a href="#"
                                    ><i class="icon icon-chevron-sm-down"></i>
                                    Tour</a
                                  >
                                </li>

                                <li>
                                  <a href="tour-list-1.html">Tour List v1</a>
                                </li>

                                <li>
                                  <a href="tour-grid-1.html">Tour List v2</a>
                                </li>

                                <li><a href="tour-map.html">Tour Map</a></li>

                                <li>
                                  <a href="tour-single.html">Tour Single</a>
                                </li>
                              </ul>
                            </li>

                            <li class="menu-item-has-children">
                              <a data-barba href="#">
                                <span class="mr-10">Activity</span>
                                <i class="icon icon-chevron-sm-down"></i>
                              </a>

                              <ul class="subnav">
                                <li class="subnav__backBtn js-nav-list-back">
                                  <a href="#"
                                    ><i class="icon icon-chevron-sm-down"></i>
                                    Activity</a
                                  >
                                </li>

                                <li>
                                  <a href="activity-list-1.html"
                                    >Activity List v1</a
                                  >
                                </li>

                                <li>
                                  <a href="activity-grid-1.html"
                                    >Activity List v2</a
                                  >
                                </li>

                                <li>
                                  <a href="activity-map.html">Activity Map</a>
                                </li>

                                <li>
                                  <a href="activity-single.html"
                                    >Activity Single</a
                                  >
                                </li>
                              </ul>
                            </li>

                            <li class="menu-item-has-children">
                              <a data-barba href="#">
                                <span class="mr-10">Rental</span>
                                <i class="icon icon-chevron-sm-down"></i>
                              </a>

                              <ul class="subnav">
                                <li class="subnav__backBtn js-nav-list-back">
                                  <a href="#"
                                    ><i class="icon icon-chevron-sm-down"></i>
                                    Rental</a
                                  >
                                </li>

                                <li>
                                  <a href="rental-list-1.html"
                                    >Rental List v1</a
                                  >
                                </li>

                                <li>
                                  <a href="rental-grid-1.html"
                                    >Rental List v2</a
                                  >
                                </li>

                                <li>
                                  <a href="rental-map.html">Rental Map</a>
                                </li>

                                <li>
                                  <a href="rental-single.html">Rental Single</a>
                                </li>
                              </ul>
                            </li>

                            <li class="menu-item-has-children">
                              <a data-barba href="#">
                                <span class="mr-10">Car</span>
                                <i class="icon icon-chevron-sm-down"></i>
                              </a>

                              <ul class="subnav">
                                <li class="subnav__backBtn js-nav-list-back">
                                  <a href="#"
                                    ><i class="icon icon-chevron-sm-down"></i>
                                    Car</a
                                  >
                                </li>

                                <li>
                                  <a href="car-list-1.html">Car List v1</a>
                                </li>

                                <li>
                                  <a href="car-grid-1.html">Car List v2</a>
                                </li>

                                <li><a href="car-map.html">Car Map</a></li>

                                <li>
                                  <a href="car-single.html">Car Single</a>
                                </li>
                              </ul>
                            </li>

                            <li class="menu-item-has-children">
                              <a data-barba href="#">
                                <span class="mr-10">Cruise</span>
                                <i class="icon icon-chevron-sm-down"></i>
                              </a>

                              <ul class="subnav">
                                <li class="subnav__backBtn js-nav-list-back">
                                  <a href="#"
                                    ><i class="icon icon-chevron-sm-down"></i>
                                    Cruise</a
                                  >
                                </li>

                                <li>
                                  <a href="cruise-list-1.html"
                                    >Cruise List v1</a
                                  >
                                </li>

                                <li>
                                  <a href="cruise-grid-1.html"
                                    >Cruise List v2</a
                                  >
                                </li>

                                <li>
                                  <a href="cruise-map.html">Cruise Map</a>
                                </li>

                                <li>
                                  <a href="cruise-single.html">Cruise Single</a>
                                </li>
                              </ul>
                            </li>

                            <li class="menu-item-has-children">
                              <a data-barba href="#">
                                <span class="mr-10">Flights</span>
                                <i class="icon icon-chevron-sm-down"></i>
                              </a>

                              <ul class="subnav">
                                <li class="subnav__backBtn js-nav-list-back">
                                  <a href="#"
                                    ><i class="icon icon-chevron-sm-down"></i>
                                    Flights</a
                                  >
                                </li>

                                <li>
                                  <a href="flights-list.html"
                                    >Flights List v1</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>

                        <li>
                          <a href="destinations.html"> Destinations </a>
                        </li>

                        <li class="menu-item-has-children">
                          <a data-barba href="">
                            <span class="mr-10">Blog</span>
                            <i class="icon icon-chevron-sm-down"></i>
                          </a>

                          <ul class="subnav">
                            <li class="subnav__backBtn js-nav-list-back">
                              <a href="#"
                                ><i class="icon icon-chevron-sm-down"></i>
                                Blog</a
                              >
                            </li>

                            <li><a href="blog-list-1.html">Blog list v1</a></li>

                            <li><a href="blog-list-2.html">Blog list v2</a></li>

                            <li><a href="blog-single.html">Blog single</a></li>
                          </ul>
                        </li>

                        <li class="menu-item-has-children">
                          <a data-barba href="">
                            <span class="mr-10">Pages</span>
                            <i class="icon icon-chevron-sm-down"></i>
                          </a>

                          <ul class="subnav">
                            <li class="subnav__backBtn js-nav-list-back">
                              <a href="#"
                                ><i class="icon icon-chevron-sm-down"></i>
                                Pages</a
                              >
                            </li>

                            <li><a href="404.html">404</a></li>

                            <li><a href="about.html">About</a></li>

                            <li>
                              <a href="become-expert.html">Become expert</a>
                            </li>

                            <li><a href="help-center.html">Help center</a></li>

                            <li><a href="login.html">Login</a></li>

                            <li><a href="signup.html">Register</a></li>

                            <li><a href="terms.html">Terms</a></li>

                            <li><a href="invoice.html">Invoice</a></li>

                            <li><a href="ui-elements.html">UI elements</a></li>
                          </ul>
                        </li>

                        <li class="menu-item-has-children">
                          <a data-barba href="">
                            <span class="mr-10">Dashboard</span>
                            <i class="icon icon-chevron-sm-down"></i>
                          </a>

                          <ul class="subnav">
                            <li class="subnav__backBtn js-nav-list-back">
                              <a href="#"
                                ><i class="icon icon-chevron-sm-down"></i>
                                Dashboard</a
                              >
                            </li>

                            <li><a href="db-dashboard.html">Dashboard</a></li>

                            <li><a href="db-booking.html">Booking</a></li>

                            <li><a href="db-settings.html">Settings</a></li>

                            <li><a href="db-wishlist.html">Wishlist</a></li>

                            <li>
                              <a href="db-vendor-dashboard.html"
                                >Vendor dashboard</a
                              >
                            </li>

                            <li>
                              <a href="db-vendor-add-hotel.html"
                                >Vendor add hotel</a
                              >
                            </li>

                            <li>
                              <a href="db-vendor-booking.html"
                                >Vendor booking</a
                              >
                            </li>

                            <li>
                              <a href="db-vendor-hotels.html">Vendor hotels</a>
                            </li>

                            <li>
                              <a href="db-vendor-recovery.html"
                                >Vendor recovery</a
                              >
                            </li>
                          </ul>
                        </li>

                        <li>
                          <a href="contact.html">Contact</a>
                        </li>
                      </ul>
                    </div>

                    <div
                      class="mobile-footer px-20 py-20 border-top-light js-mobile-footer"
                    ></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto">
              <div class="d-flex items-center">
                <div class="row x-gap-20 items-center xxl:d-none">
                  <div class="col-auto">
                    <button
                      class="d-flex items-center text-14 text-white"
                      data-x-click="currency"
                    >
                      <span class="js-currencyMenu-mainTitle">USD</span>
                      <i class="icon-chevron-sm-down text-7 ml-10"></i>
                    </button>
                  </div>

                  <div class="col-auto">
                    <div class="w-1 h-20 bg-white-20"></div>
                  </div>

                  <div class="col-auto">
                    <button
                      class="d-flex items-center text-14 text-white"
                      data-x-click="lang"
                    >
                      <img
                        src="img/general/lang.png"
                        alt="image"
                        class="rounded-full mr-10"
                      />
                      <span class="js-language-mainTitle">United Kingdom</span>
                      <i class="icon-chevron-sm-down text-7 ml-15"></i>
                    </button>
                  </div>
                </div>

                <div
                  class="d-flex items-center ml-20 is-menu-opened-hide md:d-none"
                >
                  <a
                    href="login.html"
                    class="button px-30 fw-400 text-14 -blue-1 bg-white h-50 text-dark-1"
                    >Become An Expert</a
                  >
                  <a
                    href="signup.html"
                    class="button px-30 fw-400 text-14 border-white -blue-1 h-50 text-white ml-20"
                    >Sign In / Register</a
                  >
                </div>

                <div
                  class="d-none xl:d-flex x-gap-20 items-center pl-30 text-white"
                  data-x="header-mobile-icons"
                  data-x-toggle="text-white"
                >
                  <div>
                    <a
                      href="login.html"
                      class="d-flex items-center icon-user text-inherit text-22"
                    ></a>
                  </div>
                  <div>
                    <button
                      class="d-flex items-center icon-menu text-inherit text-20"
                      data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"
                    ></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="py-10 d-flex items-center bg-light-2">
        <div class="container">
          <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
              <div
                class="row x-gap-10 y-gap-5 items-center text-14 text-light-1"
              >
                <div class="col-auto">
                  <div class="">Home</div>
                </div>
                <div class="col-auto">
                  <div class="">></div>
                </div>
                <div class="col-auto">
                  <div class="">London Hotels</div>
                </div>
                <div class="col-auto">
                  <div class="">></div>
                </div>
                <div class="col-auto">
                  <div class="text-dark-1">
                    Great Northern Hotel, a Tribute Portfolio Hotel, London
                  </div>
                </div>
              </div>
            </div>

            <div class="col-auto">
              <a href="#" class="text-14 text-blue-1 underline"
                >All Hotel in London</a
              >
            </div>
          </div>
        </div>
      </section>

      <div class="singleMenu js-singleMenu">
        <div class="singleMenu__content">
          <div class="container">
            <div class="row y-gap-20 justify-between items-center">
              <div class="col-auto">
                <div class="singleMenu__links row x-gap-30 y-gap-10">
                  <div class="col-auto">
                    <a href="#overview">Overview</a>
                  </div>
                  <div class="col-auto">
                    <a href="#rooms">Rooms</a>
                  </div>
                  <div class="col-auto">
                    <a href="#reviews">Reviews</a>
                  </div>
                  <div class="col-auto">
                    <a href="#facilities">Facilities</a>
                  </div>
                  <div class="col-auto">
                    <a href="#faq">Faq</a>
                  </div>
                </div>
              </div>

              <div class="col-auto">
                <div class="row x-gap-15 y-gap-15 items-center">
                  <div class="col-auto">
                    <div class="text-14">
                      From
                      <span class="text-22 text-dark-1 fw-500">US$72</span>
                    </div>
                  </div>

                  <div class="col-auto">
                    <a
                      href="#"
                      class="button h-50 px-24 -dark-1 bg-blue-1 text-white"
                    >
                      Select Room
                      <div class="icon-arrow-top-right ml-15"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="pt-40">
        <div class="container">
          <div class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
              <div class="row x-gap-20 items-center">
                <div class="col-auto">
                  <h1 class="text-30 sm:text-25 fw-600">
                    Warwick Allerton Hotel Chicago
                  </h1>
                </div>

                <div class="col-auto">
                  <i class="icon-star text-10 text-yellow-1"></i>

                  <i class="icon-star text-10 text-yellow-1"></i>

                  <i class="icon-star text-10 text-yellow-1"></i>

                  <i class="icon-star text-10 text-yellow-1"></i>

                  <i class="icon-star text-10 text-yellow-1"></i>
                </div>
              </div>

              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <div class="d-flex items-center text-15 text-light-1">
                    <i class="icon-location-2 text-16 mr-5"></i>
                    Moscow Road, Kensington and Chelsea, London, W2 4EL, United
                    Kingdom
                  </div>
                </div>

                <div class="col-auto">
                  <button
                    data-x-click="mapFilter"
                    class="text-blue-1 text-15 underline"
                  >
                    Show on map
                  </button>
                </div>
              </div>
            </div>

            <div class="col-auto">
              <div class="row x-gap-15 y-gap-15 items-center">
                <div class="col-auto">
                  <div class="text-14">
                    From
                    <span class="text-22 text-dark-1 fw-500">US$72</span>
                  </div>
                </div>

                <div class="col-auto">
                  <a
                    href="#"
                    class="button h-50 px-24 -dark-1 bg-blue-1 text-white"
                  >
                    Select Room
                    <div class="icon-arrow-top-right ml-15"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="galleryGrid -type-1 pt-30">
            <div class="galleryGrid__item relative d-flex">
              <img src="img/gallery/1/1.png" alt="image" class="rounded-4" />

              <div class="absolute px-20 py-20 col-12 d-flex justify-end">
                <button
                  class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1"
                >
                  <i class="icon-heart text-16"></i>
                </button>
              </div>
            </div>

            <div class="galleryGrid__item">
              <img src="img/gallery/1/2.png" alt="image" class="rounded-4" />
            </div>

            <div class="galleryGrid__item relative d-flex">
              <img src="img/gallery/1/3.png" alt="image" class="rounded-4" />

              <div class="absolute h-full col-12 flex-center">
                <a
                  href="https://www.youtube.com/watch?v=ANYfx4-jyqY"
                  class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1 js-gallery"
                  data-gallery="gallery1"
                >
                  <i class="icon-play text-16"></i>
                </a>
              </div>
            </div>

            <div class="galleryGrid__item">
              <img src="img/gallery/1/4.png" alt="image" class="rounded-4" />
            </div>

            <div class="galleryGrid__item relative d-flex">
              <img src="img/gallery/1/5.png" alt="image" class="rounded-4" />

              <div
                class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end"
              >
                <a
                  href="img/gallery/1/1.png"
                  class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery"
                  data-gallery="gallery2"
                >
                  See All 90 Photos
                </a>
                <a
                  href="img/gallery/1/2.png"
                  class="js-gallery"
                  data-gallery="gallery2"
                ></a>
                <a
                  href="img/gallery/1/3.png"
                  class="js-gallery"
                  data-gallery="gallery2"
                ></a>
                <a
                  href="img/gallery/1/4.png"
                  class="js-gallery"
                  data-gallery="gallery2"
                ></a>
                <a
                  href="img/gallery/1/5.png"
                  class="js-gallery"
                  data-gallery="gallery2"
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-30">
        <div class="container">
          <div class="row y-gap-30">
            <div class="col-xl-8">
              <div class="row y-gap-40">
                <div class="col-12">
                  <h3 class="text-22 fw-500">Property highlights</h3>
                  <div class="row y-gap-20 pt-30">
                    <div class="col-lg-3 col-6">
                      <div class="text-center">
                        <i class="icon-city text-24 text-blue-1"></i>
                        <div class="text-15 lh-1 mt-10">
                          In London City Centre
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-6">
                      <div class="text-center">
                        <i class="icon-airplane text-24 text-blue-1"></i>
                        <div class="text-15 lh-1 mt-10">Airport transfer</div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-6">
                      <div class="text-center">
                        <i class="icon-bell-ring text-24 text-blue-1"></i>
                        <div class="text-15 lh-1 mt-10">
                          Front desk [24-hour]
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-3 col-6">
                      <div class="text-center">
                        <i class="icon-tv text-24 text-blue-1"></i>
                        <div class="text-15 lh-1 mt-10">
                          Premium TV channels
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="overview" class="col-12">
                  <h3 class="text-22 fw-500 pt-40 border-top-light">
                    Overview
                  </h3>
                  <p class="text-dark-1 text-15 mt-20">
                    You can directly book the best price if your travel dates
                    are available, all discounts are already included. In the
                    following house description you will find all information
                    about our listing.
                    <br /><br />
                    2-room terraced house on 2 levels. Comfortable and cosy
                    furnishings: 1 room with 1 french bed and radio. Shower,
                    sep. WC. Upper floor: (steep stair) living/dining room with
                    1 sofabed (110 cm, length 180 cm), TV. Exit to the balcony.
                    Small kitchen (2 hot plates, oven,
                  </p>
                  <a
                    href="#"
                    class="d-block text-14 text-blue-1 fw-500 underline mt-10"
                    >Show More</a
                  >
                </div>

                <div class="col-12">
                  <h3 class="text-22 fw-500 pt-40 border-top-light">
                    Most Popular Facilities
                  </h3>
                  <div class="row y-gap-10 pt-20">
                    <div class="col-md-5">
                      <div class="d-flex x-gap-15 y-gap-15 items-center">
                        <i class="icon-no-smoke"></i>
                        <div class="text-15">Non-smoking rooms</div>
                      </div>
                    </div>

                    <div class="col-md-5">
                      <div class="d-flex x-gap-15 y-gap-15 items-center">
                        <i class="icon-wifi"></i>
                        <div class="text-15">Free WiFi</div>
                      </div>
                    </div>

                    <div class="col-md-5">
                      <div class="d-flex x-gap-15 y-gap-15 items-center">
                        <i class="icon-parking"></i>
                        <div class="text-15">Parking</div>
                      </div>
                    </div>

                    <div class="col-md-5">
                      <div class="d-flex x-gap-15 y-gap-15 items-center">
                        <i class="icon-kitchen"></i>
                        <div class="text-15">Kitchen</div>
                      </div>
                    </div>

                    <div class="col-md-5">
                      <div class="d-flex x-gap-15 y-gap-15 items-center">
                        <i class="icon-living-room"></i>
                        <div class="text-15">Living Area</div>
                      </div>
                    </div>

                    <div class="col-md-5">
                      <div class="d-flex x-gap-15 y-gap-15 items-center">
                        <i class="icon-shield"></i>
                        <div class="text-15">Safety &amp; security</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="px-24 py-20 rounded-4 bg-green-1">
                    <div class="row x-gap-20 y-gap-20 items-center">
                      <div class="col-auto">
                        <div class="flex-center size-60 rounded-full bg-white">
                          <i class="icon-star text-yellow-1 text-30"></i>
                        </div>
                      </div>

                      <div class="col-auto">
                        <h4 class="text-18 lh-15 fw-500">
                          This property is in high demand!
                        </h4>
                        <div class="text-15 lh-15">
                          7 travelers have booked today.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4">
              <div class="ml-50 lg:ml-0">
                <div class="px-30 py-30 border-light rounded-4 shadow-4">
                  <div class="d-flex items-center justify-between">
                    <div class="">
                      <span class="text-20 fw-500">US$72</span>
                      <span class="text-14 text-light-1 ml-5">nights</span>
                    </div>

                    <div class="d-flex items-center">
                      <div class="text-14 text-right mr-10">
                        <div class="lh-15 fw-500">Exceptional</div>
                        <div class="lh-15 text-light-1">3,014 reviews</div>
                      </div>

                      <div class="size-40 flex-center bg-blue-1 rounded-4">
                        <div class="text-14 fw-600 text-white">4.8</div>
                      </div>
                    </div>
                  </div>

                  <div class="row y-gap-20 pt-30">
                    <div class="col-12">
                      <div
                        class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar"
                      >
                        <div data-x-dd-click="searchMenu-date">
                          <h4 class="text-15 fw-500 ls-2 lh-16">
                            Check in - Check out
                          </h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <span class="js-first-date">Wed 2 Mar</span>
                            -
                            <span class="js-last-date">Fri 11 Apr</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div
                        class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters"
                      >
                        <div data-x-dd-click="searchMenu-guests">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <span class="js-count-adult">2</span> adults -
                            <span class="js-count-child">1</span> childeren -
                            <span class="js-count-room">1</span> room
                          </div>
                        </div>

                        <div
                          class="searchMenu-guests__field shadow-2"
                          data-x-dd="searchMenu-guests"
                          data-x-dd-toggle="-is-active"
                        >
                          <div class="bg-white px-30 py-30 rounded-4">
                            <div
                              class="row y-gap-10 justify-between items-center"
                            >
                              <div class="col-auto">
                                <div class="text-15 fw-500">Adults</div>
                              </div>

                              <div class="col-auto">
                                <div
                                  class="d-flex items-center js-counter"
                                  data-value-change=".js-count-adult"
                                >
                                  <button
                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down"
                                  >
                                    <i class="icon-minus text-12"></i>
                                  </button>

                                  <div class="flex-center size-20 ml-15 mr-15">
                                    <div class="text-15 js-count">2</div>
                                  </div>

                                  <button
                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up"
                                  >
                                    <i class="icon-plus text-12"></i>
                                  </button>
                                </div>
                              </div>
                            </div>

                            <div class="border-top-light mt-24 mb-24"></div>

                            <div
                              class="row y-gap-10 justify-between items-center"
                            >
                              <div class="col-auto">
                                <div class="text-15 lh-12 fw-500">Children</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">
                                  Ages 0 - 17
                                </div>
                              </div>

                              <div class="col-auto">
                                <div
                                  class="d-flex items-center js-counter"
                                  data-value-change=".js-count-child"
                                >
                                  <button
                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down"
                                  >
                                    <i class="icon-minus text-12"></i>
                                  </button>

                                  <div class="flex-center size-20 ml-15 mr-15">
                                    <div class="text-15 js-count">1</div>
                                  </div>

                                  <button
                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up"
                                  >
                                    <i class="icon-plus text-12"></i>
                                  </button>
                                </div>
                              </div>
                            </div>

                            <div class="border-top-light mt-24 mb-24"></div>

                            <div
                              class="row y-gap-10 justify-between items-center"
                            >
                              <div class="col-auto">
                                <div class="text-15 fw-500">Rooms</div>
                              </div>

                              <div class="col-auto">
                                <div
                                  class="d-flex items-center js-counter"
                                  data-value-change=".js-count-room"
                                >
                                  <button
                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down"
                                  >
                                    <i class="icon-minus text-12"></i>
                                  </button>

                                  <div class="flex-center size-20 ml-15 mr-15">
                                    <div class="text-15 js-count">1</div>
                                  </div>

                                  <button
                                    class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up"
                                  >
                                    <i class="icon-plus text-12"></i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <button
                        class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white"
                      >
                        Check availability
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-40">
        <div class="container">
          <div class="row y-gap-60">
            <div class="col-lg-6">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img src="img/avatars/2.png" alt="image" />
                </div>
                <div class="col-auto">
                  <div class="fw-500 lh-15">Tonko</div>
                  <div class="text-14 text-light-1 lh-15">March 2022</div>
                </div>
              </div>

              <h5 class="fw-500 text-blue-1 mt-20">9.2 Superb</h5>
              <p class="text-15 text-dark-1 mt-10">
                Nice two level apartment in great London location. Located in
                quiet small street, but just 50 meters from main street and bus
                stop. Tube station is short walk, just like two grocery stores.
              </p>
            </div>
          </div>

          <div class="row pt-30">
            <div class="col-auto">
              <a href="#" class="button -md -outline-blue-1 text-blue-1">
                Show all 116 reviews
                <div class="icon-arrow-top-right ml-15"></div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-40">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-10">
              <div class="row">
                <div class="col-auto">
                  <h3 class="text-22 fw-500">Leave a Reply</h3>
                </div>
              </div>

              <div class="row y-gap-30 pt-30">
                <div class="col-xl-4">
                  <div class="d-flex x-gap-5 items-center pt-10">
                    <div class="icon-star text-10 text-yellow-1"></div>

                    <div class="icon-star text-10 text-yellow-1"></div>

                    <div class="icon-star text-10 text-yellow-1"></div>

                    <div class="icon-star text-10 text-yellow-1"></div>

                    <div class="icon-star text-10 text-yellow-1"></div>
                  </div>
                </div>
              </div>

              <div class="row y-gap-30 pt-20">
                <div class="col-xl-6">
                  <div class="form-input">
                    <input type="text" required />
                    <label class="lh-1 text-16 text-light-1">Text</label>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-input">
                    <input type="text" required />
                    <label class="lh-1 text-16 text-light-1">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-input">
                    <textarea required rows="4"></textarea>
                    <label class="lh-1 text-16 text-light-1"
                      >Write Your Comment</label
                    >
                  </div>
                </div>
                <div class="col-auto">
                  <a href="#" class="button -md -dark-1 bg-blue-1 text-white">
                    Post Comment
                    <div class="icon-arrow-top-right ml-15"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="border-top-light mt-30"></div>
      </div>

      <div id="facilities"></div>
      <section class="mt-40">
        <div class="container">
          <div class="row x-gap-40 y-gap-40">
            <div class="col-12">
              <h3 class="text-22 fw-500">Facilities of The Crown Hotel</h3>

              <div class="row x-gap-40 y-gap-40 pt-20">
                <div class="col-xl-4">
                  <div class="row y-gap-30">
                    <div class="col-12">
                      <div class="">
                        <div class="d-flex items-center text-16 fw-500">
                          <i class="icon-bathtub text-20 mr-10"></i>
                          Bathroom
                        </div>

                        <ul class="text-15 pt-10">
                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Towels
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Bath or shower
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Private bathroom
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Toilet
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Free toiletries
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Hairdryer
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Bath
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="">
                        <div class="d-flex items-center text-16 fw-500">
                          <i class="icon-bed text-20 mr-10"></i>
                          Bedroom
                        </div>

                        <ul class="text-15 pt-10">
                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Linen
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Wardrobe or closet
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="">
                        <div class="d-flex items-center text-16 fw-500">
                          <i class="icon-bell-ring text-20 mr-10"></i>
                          Reception services
                        </div>

                        <ul class="text-15 pt-10">
                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Invoice provided
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Private check-in/check-out
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Luggage storage
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            24-hour front desk
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4">
                  <div class="row y-gap-30">
                    <div class="col-12">
                      <div class="">
                        <div class="d-flex items-center text-16 fw-500">
                          <i class="icon-tv text-20 mr-10"></i>
                          Media &amp; Technology
                        </div>

                        <ul class="text-15 pt-10">
                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Flat-screen TV
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Satellite channels
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Radio
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Telephone
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            TV
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="">
                        <div class="d-flex items-center text-16 fw-500">
                          <i class="icon-juice text-20 mr-10"></i>
                          Food &amp; Drink
                        </div>

                        <ul class="text-15 pt-10">
                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Kid meals
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Special diet menus (on request)
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Breakfast in the room
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Bar
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Restaurant
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Tea/Coffee maker
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="">
                        <div class="d-flex items-center text-16 fw-500">
                          <i class="icon-washing-machine text-20 mr-10"></i>
                          Cleaning services
                        </div>

                        <ul class="text-15 pt-10">
                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Daily housekeeping
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Dry cleaning
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Laundry
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4">
                  <div class="row y-gap-30">
                    <div class="col-12">
                      <div class="">
                        <div class="d-flex items-center text-16 fw-500">
                          <i class="icon-shield text-20 mr-10"></i>
                          Safety &amp; security
                        </div>

                        <ul class="text-15 pt-10">
                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Fire extinguishers
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            CCTV in common areas
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Smoke alarms
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            24-hour security
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="">
                        <div class="d-flex items-center text-16 fw-500">
                          <i class="icon-city-2 text-20 mr-10"></i>
                          General
                        </div>

                        <ul class="text-15 pt-10">
                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Hypoallergenic
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Non-smoking throughout
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Wake-up service
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Heating
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Packed lunches
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Carpeted
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Lift
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Fan
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Family rooms
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Facilities for disabled guests
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Ironing facilities
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Non-smoking rooms
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Iron
                          </li>

                          <li class="d-flex items-center">
                            <i class="icon-check text-10 mr-20"></i>
                            Room service
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-40">
        <div class="container">
          <div class="pt-40 border-top-light">
            <div class="row">
              <div class="col-12">
                <h3 class="text-22 fw-500">Some helpful facts</h3>
              </div>
            </div>

            <div class="row x-gap-50 y-gap-30 pt-20">
              <div class="col-lg-4 col-md-6">
                <div class="">
                  <div class="d-flex items-center">
                    <i class="icon-calendar text-20 mr-10"></i>
                    <div class="text-16 fw-500">Check-in/Check-out</div>
                  </div>

                  <div class="row x-gap-50 y-gap-5 pt-10">
                    <div class="col-12">
                      <div class="text-15">Check-in from: 16:00</div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">Check-out until: 12:00</div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">Reception open until: 00:00</div>
                    </div>
                  </div>
                </div>

                <div class="mt-30">
                  <div class="d-flex items-center">
                    <i class="icon-location-pin text-20 mr-10"></i>
                    <div class="text-16 fw-500">Getting around</div>
                  </div>

                  <div class="row x-gap-50 y-gap-5 pt-10">
                    <div class="col-12">
                      <div class="text-15">Airport transfer fee: 60 USD</div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">Distance from city center: 2 km</div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">
                        Travel time to airport (minutes): 45
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="">
                  <div class="d-flex items-center">
                    <i class="icon-ticket text-20 mr-10"></i>
                    <div class="text-16 fw-500">Extras</div>
                  </div>

                  <div class="row x-gap-50 y-gap-5 pt-10">
                    <div class="col-12">
                      <div class="text-15">
                        Breakfast charge (unless included in room price): 25 USD
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">
                        Daily Internet/Wi-Fi fee: 10 USD
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mt-30">
                  <div class="d-flex items-center">
                    <i class="icon-parking text-20 mr-10"></i>
                    <div class="text-16 fw-500">Parking</div>
                  </div>

                  <div class="row x-gap-50 y-gap-5 pt-10">
                    <div class="col-12">
                      <div class="text-15">Daily parking fee: 65 USD</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="">
                  <div class="d-flex items-center">
                    <i class="icon-plans text-20 mr-10"></i>
                    <div class="text-16 fw-500">The property</div>
                  </div>

                  <div class="row x-gap-50 y-gap-5 pt-10">
                    <div class="col-12">
                      <div class="text-15">Non-smoking rooms/floors: Yes</div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">Number of bars/lounges: 1</div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">Number of floors: 26</div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">Number of restaurants: 1</div>
                    </div>

                    <div class="col-12">
                      <div class="text-15">Number of rooms : 443</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="layout-pt-md layout-pb-lg">
        <div class="container">
          <div class="row justify-center text-center">
            <div class="col-auto">
              <div class="sectionTitle -md">
                <h2 class="sectionTitle__title">
                  Popular properties similar to The Crown Hotel
                </h2>
                <p class="sectionTitle__text mt-5 sm:mt-0">
                  Interdum et malesuada fames ac ante ipsum
                </p>
              </div>
            </div>
          </div>

          <div class="row y-gap-30 pt-40 sm:pt-20">
            <div class="col-xl-3 col-lg-3 col-sm-6">
              <a href="hotel-single-1.html" class="hotelsCard -type-1">
                <div class="hotelsCard__image">
                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">
                      <img
                        class="rounded-4 col-12"
                        src="img/hotels/1.png"
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

                    <div class="cardImage__leftBadge">
                      <div
                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white"
                      >
                        Breakfast included
                      </div>
                    </div>
                  </div>
                </div>

                <div class="hotelsCard__content mt-10">
                  <h4
                    class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500"
                  >
                    <span>The Montcalm At Brewery London City</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">
                    Westminster Borough, London
                  </p>

                  <div class="d-flex items-center mt-20">
                    <div
                      class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white"
                    >
                      4.8
                    </div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">
                      Exceptional
                    </div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US$72</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">
              <a href="hotel-single-1.html" class="hotelsCard -type-1">
                <div class="hotelsCard__image">
                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">
                      <div
                        class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider"
                      >
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <img
                              class="col-12"
                              src="img/hotels/2.png"
                              alt="image"
                            />
                          </div>

                          <div class="swiper-slide">
                            <img
                              class="col-12"
                              src="img/hotels/1.png"
                              alt="image"
                            />
                          </div>

                          <div class="swiper-slide">
                            <img
                              class="col-12"
                              src="img/hotels/3.png"
                              alt="image"
                            />
                          </div>
                        </div>

                        <div
                          class="cardImage-slider__pagination js-pagination"
                        ></div>

                        <div class="cardImage-slider__nav -prev">
                          <button
                            class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev"
                          >
                            <i class="icon-chevron-left text-10"></i>
                          </button>
                        </div>

                        <div class="cardImage-slider__nav -next">
                          <button
                            class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next"
                          >
                            <i class="icon-chevron-right text-10"></i>
                          </button>
                        </div>
                      </div>
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

                <div class="hotelsCard__content mt-10">
                  <h4
                    class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500"
                  >
                    <span>Staycity Aparthotels Deptford Bridge Station</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">
                    Ciutat Vella, Barcelona
                  </p>

                  <div class="d-flex items-center mt-20">
                    <div
                      class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white"
                    >
                      4.8
                    </div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">
                      Exceptional
                    </div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US$72</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">
              <a href="hotel-single-1.html" class="hotelsCard -type-1">
                <div class="hotelsCard__image">
                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">
                      <img
                        class="rounded-4 col-12"
                        src="img/hotels/3.png"
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

                    <div class="cardImage__leftBadge">
                      <div
                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white"
                      >
                        Best Seller
                      </div>
                    </div>
                  </div>
                </div>

                <div class="hotelsCard__content mt-10">
                  <h4
                    class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500"
                  >
                    <span>The Westin New York at Times Square</span>
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">
                    Manhattan, New York
                  </p>

                  <div class="d-flex items-center mt-20">
                    <div
                      class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white"
                    >
                      4.8
                    </div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">
                      Exceptional
                    </div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US$72</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-6">
              <a href="hotel-single-1.html" class="hotelsCard -type-1">
                <div class="hotelsCard__image">
                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">
                      <img
                        class="rounded-4 col-12"
                        src="img/hotels/4.png"
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

                    <div class="cardImage__leftBadge">
                      <div
                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1"
                      >
                        Top Rated
                      </div>
                    </div>
                  </div>
                </div>

                <div class="hotelsCard__content mt-10">
                  <h4
                    class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500"
                  >
                    <span
                      >DoubleTree by Hilton Hotel New York Times Square
                      West</span
                    >
                  </h4>

                  <p class="text-light-1 lh-14 text-14 mt-5">
                    Vaticano Prati, Rome
                  </p>

                  <div class="d-flex items-center mt-20">
                    <div
                      class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white"
                    >
                      4.8
                    </div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">
                      Exceptional
                    </div>
                    <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US$72</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <?php
    include("/DA/content/views/shared/footer.php");
    ?>
    </main>
  </body>
</html>
