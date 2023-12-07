
  <?php
  include("/DA/content/views/shared/header.php");
  ?>
  


    <section data-anim-wrap class="masthead -type-6">
      <div data-anim-child="fade" class="masthead__bg bg-dark-3">
        <img src="../../../public/img/masthead/6/bg.png" alt="image">
      </div>

      <div class="container">
        <div class="row justify-center">
          <div class="col-xl-9">
            <div class="text-center">
              <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">"Vì đất nước mình còn lạ, cần chi đâu nước ngoài"<br>"Đen vâu"</h1>
              <h2 data-anim-child="slide-up delay-5" class="text-white mt-5">Đặt Lịch và khám phá ngay!</h2>
            </div>

            <div data-anim-child="slide-up delay-6" class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100 mt-40">
              <div class="button-grid items-center">

                <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                  <div data-x-dd-click="searchMenu-loc">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Địa Điểm</h4>

                    <div class="text-15 text-light-1 ls-2 lh-16">
                      <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
                    </div>
                  </div>


                  <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                      <div class="y-gap-5 js-results">

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                              </div>
                            </div>
                          </button>
                        </div>

                        <div>
                          <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                            <div class="d-flex">
                              <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                              <div class="ml-10">
                                <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                              </div>
                            </div>
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>


                <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar">

                  <div data-x-dd-click="searchMenu-date">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Ngày Đến - Ngày Đi</h4>

                    <div class="text-15 text-light-1 ls-2 lh-16">
                      <span class="js-first-date">Wed 2 Mar</span>
                      -
                      <span class="js-last-date">Fri 11 Apr</span>
                    </div>
                  </div>


                </div>


                <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

                  <div data-x-dd-click="searchMenu-guests">
                    <h4 class="text-15 fw-500 ls-2 lh-16">Số Lượng</h4>

                    <div class="text-15 text-light-1 ls-2 lh-16">
                      <span class="js-count-adult">2</span> Người Lớn
                      -
                      <span class="js-count-child">1</span> Trẻ Em
                      -
                      <span class="js-count-room">1</span> Phòng
                    </div>
                  </div>


                  <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                    <div class="bg-white px-30 py-30 rounded-4">
                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 fw-500">Người Lớn</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">2</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="border-top-light mt-24 mb-24"></div>

                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 lh-12 fw-500">Trẻ Em</div>
                          <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">1</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <div class="border-top-light mt-24 mb-24"></div>

                      <div class="row y-gap-10 justify-between items-center">
                        <div class="col-auto">
                          <div class="text-15 fw-500">Phòng</div>
                        </div>

                        <div class="col-auto">
                          <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                              <i class="icon-minus text-12"></i>
                            </button>

                            <div class="flex-center size-20 ml-15 mr-15">
                              <div class="text-15 js-count">1</div>
                            </div>

                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                              <i class="icon-plus text-12"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="button-item">
                  <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-100 bg-blue-1 text-white">
                    <i class="icon-search text-20 mr-10"></i>
                    Tìm Kiếm
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    

    

    

    <section class="layout-pt-md layout-pb-lg">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Popular Destinations</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>

          <div class="col-auto">
            <a href="#" class="button -blue-1 -md bg-blue-1-05 text-blue-1">
              Xem Tất cả Tour
              <i class="icon-arrow-top-right ml-10"></i>
            </a>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
          data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1">
          <div class="swiper-wrapper">
<?php foreach ($a as $e) { ?>
            <div class="swiper-slide">
            
              <a href="../../../index.php?controller=tour&amp;action=index&amp;id=<?php echo $e['id']; ?>" class="activityCard -type-1 rounded-4 ">
                <div class="activityCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">

                      <img class="rounded-4 col-12" src="../../../public/img/tours/<?php echo $e['tour_image_url'] ?>" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                      nổi bật
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span><?php echo $e['tour_name'] ?></span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5"><?php echo $e['tour_location_name'] ?></p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-14 text-light-1">
                      <span class="text-16 fw-500 text-dark-1"><?php echo number_format($e['tour_price'], 0, ',', '.') . ' VND'; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

            </div>
<?php } ?>

          </div>

          <div class="slider-scrollbar bg-light-2 mt-40 sm:d-none js-scrollbar"></div>
        </div>
      </div>
    </section>

     <section class="section-bg layout-pt-lg layout-pb-lg bg-light-2">
      <div class="section-bg__item col-12">
        <img src="/public/img/backgrounds/testimonials/bg-2.svg" alt="image">
      </div>

      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Testimonials</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row justify-center pt-50 md:pt-30">
          <div class="col-xl-7 col-lg-10">
            <div class="overflow-hidden js-testimonials-slider">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="/public/img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="/public/img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="/public/img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="/public/img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="/public/img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                      <div class="">Product Manager, Apple Inc</div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="pt-60 lg:pt-40">
                <div class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">

                  <div class="col-auto">
                    <div class="pagination__item is-active">
                      <img src="/public/img/avatars/testimonials/1.png" alt="image">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="/public/img/avatars/testimonials/2.png" alt="image">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="/public/img/avatars/testimonials/3.png" alt="image">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="/public/img/avatars/testimonials/4.png" alt="image">
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="/public/img/avatars/testimonials/5.png" alt="image">
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Recommended Activity</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

          <div data-anim-child="slide-up delay-2" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/1.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                      LIKELY TO SELL OUT*
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span>Golden Circle, Kerid Volcanic Crater, and Blue Lagoon Day</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Westminster Borough, London</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/2.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>Edinburgh Sky to Sea Bike Tour by Manual or E-Bike</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Ciutat Vella, Barcelona</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/3.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>Natural Crystal Blue Ice Cave Tour of Vatnajökull Glacier</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Manhattan, New York</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-5" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/4.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                      Top Rated
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>South Coast Full Day Tour by Minibus from Reykjavik</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Vaticano Prati, Rome</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-6" class="col-xl col-md-4 col-sm-6">

            <a href="activity-single.html" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="img/activities/2/5.png" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                      Likely to sell out
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">6+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-16">
                  <span>Golden Circle, Kerid Volcanic Crater, and Blue Lagoon Day</span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">Westminster Borough, London</p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-12">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">4.82</span>
                        94 reviews
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US$72</span>
                    </div>
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
