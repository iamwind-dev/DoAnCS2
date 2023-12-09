<?php include('/DA/content/views/shared/headerhome.php') ?>

<section class="py-10 d-flex items-center bg-light-2">
  <div class="container">
    <div class="row y-gap-10 items-center justify-between">
      <div class="col-auto">
        <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
          <?php foreach($data as $e) { ?>
          <div class="col-auto">
            <a href="index.php">
              <div class="">Trang chủ</div>
            </a>
          </div>
          <div class="col-auto">
            <div class=""></div>
          </div>
          <div class="col-auto">
            <a href="index.php">
              <div class="">
                <?php echo $e['tour_location_name'] ?>
              </div>
            </a>
          </div>
          <div class="col-auto">
            <div class="">
              >
              <?php echo $e['tour_name'] ?>
            </div>
          </div>
          <div class="col-auto">
            <div class="text-dark-1"></div>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <a href="#" class="text-14 text-blue-1 underline"
          >Tất cả Tour
          <?php echo $e['tour_location_name'] ?>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="pt-40">
  <?php foreach ($data as $e){ ?>
  <div class="container">
    <div class="row y-gap-15 justify-between items-end">
      <div class="col-auto">
        <h1 class="text-30 fw-600">
          <?php echo $e['tour_name'] ?>
        </h1>

        <div class="row x-gap-20 y-gap-20 items-center pt-10">
          <div class="col-auto">
            <div class="d-flex items-center">
              <div class="d-flex x-gap-5 items-center">
                <i class="icon-star text-10 text-yellow-1"></i>

                <i class="icon-star text-10 text-yellow-1"></i>

                <i class="icon-star text-10 text-yellow-1"></i>

                <i class="icon-star text-10 text-yellow-1"></i>

                <i class="icon-star text-10 text-yellow-1"></i>
              </div>

              <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
            </div>
          </div>

          <div class="col-auto">
            <div class="row x-gap-10 items-center">
              <div class="col-auto">
                <div class="d-flex x-gap-5 items-center">
                  <i class="icon-placeholder text-16 text-light-1"></i>
                  <div class="text-15 text-light-1">
                    <?php echo $e['tour_location_name'] ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <div class="row x-gap-10 y-gap-10"></div>
      </div>
    </div>
  </div>
</section>

<section class="pt-40 js-pin-container">
  <div class="container">
    <div class="row y-gap-30">
      <div class="col-lg-8">
        <div
          class="relative d-flex justify-center overflow-hidden js-section-slider"
          data-slider-cols="base-1"
          data-nav-prev="js-img-prev"
          data-nav-next="js-img-next"
        >
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img
                src="../../../public/img/tours/<?php echo $e['tour_image_url'] ?>"
                alt="image"
                class="rounded-4 col-12 h-full object-cover"
              />
            </div>

            <div class="swiper-slide">
              <img
                src="img/gallery/1/2.png"
                alt="image"
                class="rounded-4 col-12 h-full object-cover"
              />
            </div>

            <div class="swiper-slide">
              <img
                src="img/gallery/1/3.png"
                alt="image"
                class="rounded-4 col-12 h-full object-cover"
              />
            </div>

            <div class="swiper-slide">
              <img
                src="../../../public/img/gallery/1/4.png"
                alt="image"
                class="rounded-4 col-12 h-full object-cover"
              />
            </div>
          </div>

          <div class="absolute h-full col-11">
            <button
              class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-prev"
            >
              <i class="icon icon-chevron-left text-12"></i>
            </button>

            <button
              class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-next"
            >
              <i class="icon icon-chevron-right text-12"></i>
            </button>
          </div>

          <div
            class="absolute h-full col-12 z-2 px-20 py-20 d-flex justify-end items-end"
          >
            <a
              href="../../../public/img/tours/<?php echo $e['tour_image_url'] ?>"
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

        <h3 class="text-22 fw-500 mt-30">Tour snapshot</h3>

        <div class="row y-gap-30 justify-between pt-20">
          <div class="col-md-auto col-6">
            <div class="d-flex">
              <i class="icon-clock text-22 text-blue-1 mr-10"></i>
              <div class="text-15 lh-15">
                Lịch Trình:<br />
                <?php echo $e['tour_schedule'] ?>
              </div>
            </div>
          </div>

          <div class="col-md-auto col-6">
            <div class="d-flex">
              <i class="icon-customer text-22 text-blue-1 mr-10"></i>
              <div class="text-15 lh-15">
                Số lượng:<br />
                <?php echo $e['tour_max_capacity'] ?>
              </div>
            </div>
          </div>

          <div class="col-md-auto col-6">
            <div class="d-flex">
              <i class="icon-route text-22 text-blue-1 mr-10"></i>
              <div class="text-15 lh-15">
                Phương tiện:<br />
                <?php echo $e['tour_vehicle'] ?>
              </div>
            </div>
          </div>

          <div class="col-md-auto col-6">
            <div class="d-flex">
              <i class="icon-access-denied text-22 text-blue-1 mr-10"></i>
              <div class="text-15 lh-15">Huỷ Miễn Phí<br /></div>
            </div>
          </div>
        </div>

        <div class="border-top-light mt-40 mb-40"></div>

        <div class="row x-gap-40 y-gap-40">
          <div class="col-12">
            <h3 class="text-22 fw-500">Giới thiệu</h3>

            <p class="text-dark-1 text-15 mt-20">
              <?php echo $e['tour_introduction'] ?>
            </p>
          </div>

          <div class="col-md-6">
            <h5 class="text-16 fw-500">Chính sách hoàn tiền</h5>
            <div class="text-15 mt-10">
              Được hoàn đủ tiền,hãy huỷ ít nhất trước 24h.
            </div>
          </div>

          <div class="col-12">
            <h5 class="text-16 fw-500">Điểm Nổi Bật</h5>
            <ul class="list-disc text-15 mt-10">
              <li>
                Travel between the UNESCO World Heritage sites aboard a
                comfortable coach
              </li>
              <li>Explore with a guide to delve deeper into the history</li>
              <li>Great for history buffs and travelers with limited time</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="d-flex justify-end js-pin-content">
          <div class="w-360 lg:w-full d-flex flex-column items-center">
            <div class="px-30 py-30 rounded-4 border-light bg-white shadow-4">
              <div class="text-14 text-light-1">
                <span class="text-20 fw-500 text-dark-1 ml-5"
                  >Giá: <br />
                  <?php echo number_format($e['tour_price'], 0, ',', '.').'VND'; ?>
                </span>
              </div>

              <div class="row y-gap-20 pt-30">
                <div class="col-12">
                  <div
                    class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar"
                  >
                    <div data-x-dd-click="searchMenu-date">
                      <h4 class="text-15 fw-500 ls-2 lh-16">Date</h4>

                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <span class="js-first-date">Wed 2 Mar</span>
                        -
                        <span class="js-last-date">Fri 11 Apr</span>
                      </div>
                    </div>

                    <div
                      class="searchMenu-date__field shadow-2"
                      data-x-dd="searchMenu-date"
                      data-x-dd-toggle="-is-active"
                    ></div>
                  </div>
                </div>

                <div class="col-12">
                  <div
                    class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters"
                  >
                    <div data-x-dd-click="searchMenu-guests">
                      <h4 class="text-15 fw-500 ls-2 lh-16">
                        Number of travelers
                      </h4>

                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <span class="js-count-adult">2</span> adults -
                        <span class="js-count-room">1</span> room
                      </div>
                    </div>

                    <div
                      class="searchMenu-guests__field shadow-2"
                      data-x-dd="searchMenu-guests"
                      data-x-dd-toggle="-is-active"
                    >
                      <div class="bg-white px-30 py-30 rounded-4">
                        <div class="row y-gap-10 justify-between items-center">
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

                        <div class="row y-gap-10 justify-between items-center">
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
                    class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white"
                  >
                    Đặt Tour
                  </button>
                </div>
              </div>
            </div>
            <div class="px-30 py-30 border-light rounded-4 mt-30">
              <div class="row y-gap-20 pt-30">
                <div class="text-14 text-light-1">
                  <span class="text-20 fw-500 text-dark-1 ml-5"
                    >Chọn Khách Sạn:
                  </span>
                </div>
                <div class="col-12">
                  <div
                    class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar"
                  >
                    <div data-x-dd-click="searchMenu-date">
                      <input
                        style="width: auto !important"
                        type="checkbox"
                        name=""
                        id=""
                      />
                      <b>ABC Hotel</b>

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
                    class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar"
                  >
                    <div data-x-dd-click="searchMenu-date">
                      <input
                        style="width: auto !important"
                        type="checkbox"
                        name=""
                        id=""
                      />
                      <b>Date</b>

                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <span class="js-first-date">Wed 2 Mar</span>
                        -
                        <span class="js-last-date">Fri 11 Apr</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="px-30">
              <div class="text-14 text-light-1 mt-30">
                Not sure? You can cancel this reservation up to 24 hours in
                advance for a full refund.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="pt-40">
            <div class="container">
                <div class="pt-40 border-top-light">
                    <div class="row x-gap-40 y-gap-40">
                        <div class="col-auto">
                            <h3 class="text-22 fw-500">Important information</h3>
                        </div>
                    </div>

                    <div class="row x-gap-40 y-gap-40 justify-between pt-20">
                        <div class="col-lg-4 col-md-6">
                            <div class="fw-500 mb-10">Inclusions</div>
                            <ul class="list-disc">
                                <li>Superior Coach, Wi-Fi and USB Charging On-board</li>
                                <li>Expert guide</li>
                                <li>Admission to Windsor Castle (if option selected)</li>
                                <li>Admission to Stonehenge</li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="fw-500 mb-10">Departure details</div>
                            <div class="text-15">
                                Departures from 01st April 2022: Tour departs at 8 am (boarding at 7.30 am), Victoria
                                Coach Station Gate 1-5
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="fw-500 mb-10">Know before you go</div>
                            <ul class="list-disc">
                                <li>Duration: 11h</li>
                                <li>Mobile tickets accepted</li>
                                <li>Instant confirmation</li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="fw-500 mb-10">Exclusions</div>
                            <ul class="list-disc">
                                <li>Hotel pick-up and drop-off</li>
                                <li>Gratuities</li>
                                <li>Lunch</li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="fw-500 mb-10">Additional information</div>
                            <ul class="list-disc">
                                <li>Confirmation will be received at time of booking</li>
                                <li>Departs at 8am (boarding at 7.30am), Victoria Coach Station Gate 1-5, 164 Buckingham
                                    Palace Road, London, SW1W 9TP</li>
                                <li>As Windsor Castle is a working royal palace, sometimes the entire Castle or the
                                    State Apartments within the Castle need to be closed at short notice. (if selected
                                    this option)</li>
                                <li>Stonehenge is closed on 21 June due to the Summer Solstice. During this time, we
                                    will instead visit the Avebury Stone Circle.</li>
                                <li>Please note: the tour itinerary and order may change</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

<div class="container mt-40 mb-40">
  <div class="border-top-light"></div>
</div>

<section id="mysection" tabindex="0">
  <div class="container">
    <h3 class="text-22 fw-500 mb-20">Mô tả Tour</h3>
    <?php $mang = explode('#', $e['tour_description']);
                    $idtrangthai = $mang[0];
                    $tentrangthai = $mang[1]; ?>
    <div class="row y-gap-30">
      <div class="col-lg-12">
        <div class="relative">
          <div class="border-test"></div>

          <div class="accordion -map row y-gap-20 js-accordion">
            <?php $a=1;
    for($i = 0; $i < count($mang); $i) { ?>
            <div class="col-12">
              <div class="accordion__item">
                <div class="d-flex">
                  <div
                    class="accordion__icon size-40 flex-center bg-blue-2 text-blue-1 rounded-full"
                  >
                    <div class="text-14 fw-500">
                      <?php echo $a; $a++; ?>
                    </div>
                  </div>

                  <div class="ml-20">
                    <div class="text-16 lh-15 fw-500">
                      <?php echo $mang[$i]; $i++; ?>
                    </div>
                    <div class="text-14 lh-15 text-light-1 mt-5">
                      <?php echo $mang[$i];
                                                    $i++; ?>
                    </div>

                    <div class="accordion__content">
                      <div class="pt-15 pb-15">
                        <?php echo $mang[$i];
                                                        $i++; ?>
                      </div>
                    </div>

                    <div class="accordion__button">
                      <button
                        data-open-change-title="See less"
                        class="d-block lh-15 text-14 text-blue-1 underline fw-500 mt-5"
                      >
                        See details & photo
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container mt-40 mb-40">
  <div class="border-top-light"></div>
</div>

<section>
  <div class="container">
    <div class="row y-gap-40 justify-between">
      <div class="col-xl-3">
        <h3 class="text-22 fw-500">Guest reviews</h3>

        <div class="d-flex items-center mt-20">
          <div
            class="flex-center bg-blue-1 rounded-4 size-70 text-22 fw-600 text-white"
          >
            4.8
          </div>
          <div class="ml-20">
            <div class="text-16 text-dark-1 fw-500 lh-14">Exceptional</div>
            <div class="text-15 text-light-1 lh-14 mt-4">3,014 reviews</div>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="row y-gap-40">
          <div class="col-12">
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

            <div class="row x-gap-30 y-gap-30 pt-20">
              <div class="col-auto">
                <img
                  src="img/testimonials/1/1.png"
                  alt="image"
                  class="rounded-4"
                />
              </div>

              <div class="col-auto">
                <img
                  src="img/testimonials/1/2.png"
                  alt="image"
                  class="rounded-4"
                />
              </div>

              <div class="col-auto">
                <img
                  src="img/testimonials/1/3.png"
                  alt="image"
                  class="rounded-4"
                />
              </div>

              <div class="col-auto">
                <img
                  src="img/testimonials/1/4.png"
                  alt="image"
                  class="rounded-4"
                />
              </div>
            </div>

            <div class="d-flex x-gap-30 items-center pt-20">
              <button class="d-flex items-center text-blue-1">
                <i class="icon-like text-16 mr-10"></i>
                Helpful
              </button>

              <button class="d-flex items-center text-light-1">
                <i class="icon-dislike text-16 mr-10"></i>
                Not helpful
              </button>
            </div>
          </div>

          <div class="col-12">
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

            <div class="row x-gap-30 y-gap-30 pt-20">
              <div class="col-auto">
                <img
                  src="img/testimonials/1/1.png"
                  alt="image"
                  class="rounded-4"
                />
              </div>

              <div class="col-auto">
                <img
                  src="img/testimonials/1/2.png"
                  alt="image"
                  class="rounded-4"
                />
              </div>

              <div class="col-auto">
                <img
                  src="img/testimonials/1/3.png"
                  alt="image"
                  class="rounded-4"
                />
              </div>

              <div class="col-auto">
                <img
                  src="img/testimonials/1/4.png"
                  alt="image"
                  class="rounded-4"
                />
              </div>
            </div>

            <div class="d-flex x-gap-30 items-center pt-20">
              <button class="d-flex items-center text-blue-1">
                <i class="icon-like text-16 mr-10"></i>
                Helpful
              </button>

              <button class="d-flex items-center text-light-1">
                <i class="icon-dislike text-16 mr-10"></i>
                Not helpful
              </button>
            </div>
          </div>

          <div class="col-12">
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

            <div class="d-flex x-gap-30 items-center pt-20">
              <button class="d-flex items-center text-blue-1">
                <i class="icon-like text-16 mr-10"></i>
                Helpful
              </button>

              <button class="d-flex items-center text-light-1">
                <i class="icon-dislike text-16 mr-10"></i>
                Not helpful
              </button>
            </div>
          </div>

          <div class="col-12">
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

            <div class="d-flex x-gap-30 items-center pt-20">
              <button class="d-flex items-center text-blue-1">
                <i class="icon-like text-16 mr-10"></i>
                Helpful
              </button>

              <button class="d-flex items-center text-light-1">
                <i class="icon-dislike text-16 mr-10"></i>
                Not helpful
              </button>
            </div>
          </div>

          <div class="col-auto">
            <a href="#" class="button -md -outline-blue-1 text-blue-1">
              Show all 116 reviews
              <div class="icon-arrow-top-right ml-15"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container mt-40 mb-40">
  <div class="border-top-light"></div>
</div>

<section>
  <div class="container">
    <div class="row y-gap-30 justify-between">
      <div class="col-xl-3">
        <div class="row">
          <div class="col-auto">
            <h3 class="text-22 fw-500">Leave a Reply</h3>
            <p class="text-15 text-dark-1 mt-5">
              Your email address will not be published.
            </p>
          </div>
        </div>

        <div class="row y-gap-30 pt-30">
          <div class="col-sm-6">
            <div class="text-15 lh-1 fw-500">Location</div>
            <div class="d-flex x-gap-5 items-center pt-10">
              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="text-15 lh-1 fw-500">Staff</div>
            <div class="d-flex x-gap-5 items-center pt-10">
              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="text-15 lh-1 fw-500">Cleanliness</div>
            <div class="d-flex x-gap-5 items-center pt-10">
              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="text-15 lh-1 fw-500">Value for money</div>
            <div class="d-flex x-gap-5 items-center pt-10">
              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="text-15 lh-1 fw-500">Comfort</div>
            <div class="d-flex x-gap-5 items-center pt-10">
              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="text-15 lh-1 fw-500">Facilities</div>
            <div class="d-flex x-gap-5 items-center pt-10">
              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="text-15 lh-1 fw-500">Free WiFi</div>
            <div class="d-flex x-gap-5 items-center pt-10">
              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>

              <div class="icon-star text-10 text-yellow-1"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="row y-gap-30">
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
              <textarea required rows="6"></textarea>
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
  <div class="mt-50 border-top-light"></div>
</div>

<?php } ?>
<?php include('/DA/content/views/shared/footer.php') ?>
