
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
                            <p data-anim-child="slide-up delay-5" class="text-white mt-5">Đặt Lịch và khám phá ngay!</p>
                        </div>

                        <div data-anim-child="slide-up delay-6"
                            class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100 mt-40">
                            <div class="button-grid items-center">

                                <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                                    <div data-x-dd-click="searchMenu-loc">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Địa Điểm</h4>

                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="search" placeholder="Bạn muốn đi đâu?"
                                                class="js-search js-dd-focus" />
                                        </div>
                                    </div>


                                    <div class="searchMenu-loc__field shadow-2 js-popup-window"
                                        data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                        
                                    </div>
                                </div>


                                <div class="button-item">
                                    <button
                                        class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-100 bg-blue-1 text-white">
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
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Điểm đến nổi bật</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Những điểm đến nổi bật này có nhiều điều thú vị!!!</p>
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
<?php foreach ($noibat as $e) { ?>
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
              <h2 class="sectionTitle__title">Đánh giá từ những
người đã trải nghiệm</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Khách hàng chia sẻ về những kỷ niệm tuyệt vời trên chuyến du lịch với chúng tôi.</p>
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-2" class="row justify-center pt-50 md:pt-30">
          <div class="col-xl-7 col-lg-10">
            <div class="overflow-hidden js-testimonials-slider">
              <div class="swiper-wrapper">
      <?php for($i=1; $i<=5;$i++) { ?>
                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="/public/img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "Cảm ơn team đã cho mình trải nghiệm quá ưng ý.
Đi đúng hôm thời tiết đẹp,ngắm cảnh vịnh Hạ Long đẹp tuyệt vời.
Nhân viên tư vấn nhiệt tình còn note lại khách dị ứng món gì,phục vụ chu đáo, buffet hải sản tươi ngon,phòng ốc đẹp
Tuyệt vời lắm !!!"
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Bạn Thanh Quân -</h5>
                      
                    </div>
                  </div>
                </div>
<?php } ?>
                <!-- <div class="swiper-slide">
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
                </div> -->

              </div>

              <div class="pt-60 lg:pt-40">
                <div class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">
<?php for($i=1; $i<=1;$i++) { ?>
                  <div class="col-auto">
                    <div class="pagination__item is-active">
                      <img src="/public/img/avatars/testimonials/1.png" alt="image">
                    </div>
                  </div>
<?php } ?>
<?php for($i=1; $i<=5;$i++) { ?>
                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img src="/public/img/avatars/testimonials/2.png" alt="image">
                    </div>
                  </div>
<?php } ?>
                  <!-- <div class="col-auto">
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
                  </div> --> 

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

      <section class="layout-pt-md layout-pb-md">
            <div data-anim-wrap class="container">
                <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title">Các điểm đến của WinK Travel</h2>
                            <p class=" sectionTitle__text mt-5 sm:mt-0">Những điểm đến phố biến này ở Việt Nam có rất nhiều điều thú vị</p>
                        </div>
                    </div>
                </div>

                <div class="row y-gap-40 justify-between pt-40 sm:pt-20">

                    <div data-anim-child="slide-up delay-3" class="col-xl-3 col-md-4 col-sm-6">

                        <a href="#" class="citiesCard -type-3 d-block rounded-4 ">
                            <div class="citiesCard__image ratio ratio-1:1">
                                <img class="img-ratio js-lazy" src="#" data-src="img/destinations/2/1.png" alt="image">
                            </div>

                            <div class="citiesCard__content px-30 py-30">
                                <h4 class="text-26 fw-600 text-white">Los Angeles</h4>
                                <div class="text-15 text-white">1,714 properties</div>
                            </div>
                        </a>

                    </div>

                    <div data-anim-child="slide-up delay-4" class="col-xl-6 col-md-4 col-sm-6">

                        <a href="#" class="citiesCard -type-3 d-block rounded-4 h-full">
                            <div class="citiesCard__image ">
                                <img class="img-ratio js-lazy" src="../../../public/img/tours/kinh-nghiem-du-lich-ha-long-1_1674039271.jpg" data-src="" alt="image">
                            </div>

                            <div class="citiesCard__content px-30 py-30">
                                <h4 class="text-26 fw-600 text-white">London</h4>
                                <div class="text-15 text-white">1,714 properties</div>
                            </div>
                        </a>

                    </div>

                    <div data-anim-child="slide-up delay-5" class="col-xl-3 col-md-4 col-sm-6">

                        <a href="#" class="citiesCard -type-3 d-block rounded-4 ">
                            <div class="citiesCard__image ratio ratio-1:1">
                                <img class="img-ratio js-lazy" src="../../../public/img/tours/kinh-nghiem-du-lich-ha-long-1_1674039271.jpg" data-src="" alt="image">
                            </div>

                            <div class="citiesCard__content px-30 py-30">
                                <h4 class="text-26 fw-600 text-white">Reykjavik</h4>
                                <div class="text-15 text-white">1,714 properties</div>
                            </div>
                        </a>

                    </div>

                    <div data-anim-child="slide-up delay-6" class="col-xl-6 col-md-4 col-sm-6">

                        <a href="#" class="citiesCard -type-3 d-block rounded-4 h-full">
                            <div class="citiesCard__image ">
                                <img class="img-ratio js-lazy" src="#" data-src="../../../public/img/destinations/2/4.png" alt="image">
                            </div>

                            <div class="citiesCard__content px-30 py-30">
                                <h4 class="text-26 fw-600 text-white">Paris</h4>
                                <div class="text-15 text-white">1,714 properties</div>
                            </div>
                        </a>

                    </div>

                    <div data-anim-child="slide-up delay-7" class="col-xl-3 col-md-4 col-sm-6">

                        <a href="#" class="citiesCard -type-3 d-block rounded-4 ">
                            <div class="citiesCard__image ratio ratio-1:1">
                                <img class="img-ratio js-lazy" src="#" data-src="img/destinations/2/5.png" alt="image">
                            </div>

                            <div class="citiesCard__content px-30 py-30">
                                <h4 class="text-26 fw-600 text-white">Amsterdam</h4>
                                <div class="text-15 text-white">1,714 properties</div>
                            </div>
                        </a>

                    </div>

                    <div data-anim-child="slide-up delay-8" class="col-xl-3 col-md-4 col-sm-6">

                        <a href="#" class="citiesCard -type-3 d-block rounded-4 ">
                            <div class="citiesCard__image ratio ratio-1:1">
                                <img class="img-ratio js-lazy" src="#" data-src="img/destinations/2/6.png" alt="image">
                            </div>

                            <div class="citiesCard__content px-30 py-30">
                                <h4 class="text-26 fw-600 text-white">Istanbul</h4>
                                <div class="text-15 text-white">1,714 properties</div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </section>

    <section class="layout-pt-md layout-pb-lg">
            <div data-anim-wrap class="container">
                <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title">Lấy cảm hứng cho chuyến đi tiếp theo của bạn</h2>
                            <p class=" sectionTitle__text mt-5 sm:mt-0">Đôi khi cơn đói được mong đợi</p>
                        </div>
                    </div>
                </div>

                <div class="row y-gap-30 pt-40">

                    <div data-anim-child="slide-up delay-2" class="col-lg-6">
                        <a href="blog-single-1.html" class="row y-gap-20 items-center">
                            <div class="col-auto">
                                <img class="size-250 rounded-4" src="img/blog/1.png" alt="image">
                            </div>

                            <div class="col">
                                <div class="text-15 text-light-1">April 06, 2022</div>
                                <h4 class="text-22 fw-600 text-dark-1 mt-10">10 European ski destinations you should
                                    visit this winter</h4>
                                <p class="mt-10">Ut enim ad minim veniam, quis nostrud exerc ullamco laboris nisi ut
                                    aliquip.</p>
                            </div>
                        </a>
                    </div>

                    <div data-anim-child="slide-up delay-3" class="col-lg-6">
                        <a href="blog-single-1.html" class="row y-gap-20 items-center">
                            <div class="col-auto">
                                <img class="size-250 rounded-4" src="img/blog/2.png" alt="image">
                            </div>

                            <div class="col">
                                <div class="text-15 text-light-1">April 06, 2022</div>
                                <h4 class="text-22 fw-600 text-dark-1 mt-10">Booking travel during Corona: good advice
                                    in an uncertain time</h4>
                                <p class="mt-10">Ut enim ad minim veniam, quis nostrud exerc ullamco laboris nisi ut
                                    aliquip.</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

    <?php
    include("/DA/content/views/shared/footer.php");
    ?>
