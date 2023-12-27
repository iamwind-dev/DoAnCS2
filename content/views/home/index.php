<?php
include("content/views/shared/header.php");
?>



<section data-anim-wrap class="masthead -type-6">
  <div data-anim-child="fade" class="masthead__bg bg-dark-3">
    <img src="../../../public/img/masthead/6/bg.png" alt="image">
  </div>

  <div class="container">
    <div class="row justify-center">
      <div class="col-xl-9">
        <div class="text-center">
          <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">"Vì đất nước mình còn
            lạ, cần chi đâu nước ngoài"<br>"Đen vâu"</h1>
          <p data-anim-child="slide-up delay-5" class="text-white mt-5">Đặt Lịch và khám phá ngay!</p>
        </div>

        <div data-anim-child="slide-up delay-6"
          class="mainSearch -w-1000 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100 mt-40">
          <form action="index.php?controller=alltour" method="post">

            <div class="button-grid items-center">

              <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">


                <div data-x-dd-click="searchMenu-loc">
                  <h4 class="text-15 fw-500 ls-2 lh-16">Địa điểm</h4>

                  <div class="text-15 text-light-1 ls-2 lh-16">
                    <input autocomplete="off" name="diadiem" type="search" placeholder="Bạn muốn đi đâu?"
                      class="js-search js-dd-focus" />
                  </div>
                </div>


                <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc"
                  data-x-dd-toggle="-is-active">

                </div>
              </div>
              <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                <div data-x-dd-click="searchMenu-loc">
                  <h4 class="text-15 fw-500 ls-2 lh-16">Ngày</h4>

                  <div class="text-15 text-light-1 ls-2 lh-16">
                    <input autocomplete="off" name="ngay" type="date" class="js-search js-dd-focus" />
                  </div>
                </div>


                <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc"
                  data-x-dd-toggle="-is-active">

                </div>
              </div>
              <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                <div data-x-dd-click="searchMenu-loc">
                  <h4 class="text-15 fw-500 ls-2 lh-16">Mức giá</h4>

                  <div class="text-15 text-light-1 ls-2 lh-16">
                    <select name="gia">
                      <option value="">Chọn giá tour</option>
                      <option value="0 - 2000000">Dưới 2tr</option>
                      <option value="2000000 - 4000000">Từ 2tr - 4tr</option>
                      <option value="4000000 - 6000000">Từ 4tr - 6tr</option>
                      <option value="6000000 - 10000000">Từ 6tr - 10tr</option>
                      <option value="10000000 - 20000000">Từ 10tr - 20tr</option>
                      <option value="20000000 - 50000000">Từ 20tr - 50tr</option>
                      <option value="50000000 - 80000000">Trên 50tr</option>
                    </select>
                  </div>
                </div>


                <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc"
                  data-x-dd-toggle="-is-active">

                </div>
              </div>


              <div class="button-item">
                <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-100 bg-blue-1 text-white">
                  <i class="icon-search text-20 mr-10"></i>
                  Search
                </button>
              </div>
            </div>
          </form>
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
        <a href="../../../index.php?controller=alltour" class="button -blue-1 -md bg-blue-1-05 text-blue-1">
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
            <a href="../../../index.php?controller=tour&amp;action=index&amp;id=<?php echo $e['id']; ?>"
              class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="../../../public/img/tours/<?php echo $e['tour_image_url'] ?>"
                      alt="image">


                  </div>




                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                      nổi bật
                    </div>
                  </div>

                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">
                  <?php echo TimeAgo($e['tour_create_date']) ?>
                </div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span>
                    <?php echo $e['tour_name'] ?>
                  </span>
                </h4>

                <p class="text-light-1 text-14 lh-14 mt-5">
                  <?php echo $e['tour_location_name'] ?>
                </p>

                <div class="row justify-between items-center pt-10">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">
                          <?php echo number_format($e['tour_star'], 1) ?>
                        </span>
                        <?php echo get_total_id('comment', $e['id'], 'tour_id') ?> bình luận
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-14 text-light-1">
                      <span class="text-16 fw-500 text-dark-1">
                        <?php echo number_format($e['tour_price'], 0, ',', '.') . ' VND'; ?>
                      </span>
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
          <p class=" sectionTitle__text mt-5 sm:mt-0">Khách hàng chia sẻ về những kỷ niệm tuyệt vời trên chuyến du lịch
            với chúng tôi.</p>
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
                  "
                  <?php echo $noibat4['comment'];
                  $c = get_a_record('users', $noibat4['user_id']);
                  foreach ($c as $p) {
                    ?>"
                  </div>

                  <div class="mt-40">
                    <h5 class="text-17 lh-15 fw-500">Bạn
                      <?php echo $p['user_name'] ?> -
                    </h5>

                  </div>
                </div>
              </div>
            <?php }
                  foreach ($noibat3 as $o) {
                    $y = get_a_record('users', $o['user_id']);
                    foreach ($y as $n) {
                      ?>
                <div class="swiper-slide">
                  <div class="testimonials -type-2 text-center">
                    <div class="mb-40">
                      <img src="/public/img/misc/quote.svg" alt="quote">
                    </div>

                    <div class="text-22 md:text-18 fw-600 text-dark-1">
                      "
                      <?php echo $o['comment'] ?>"
                    </div>

                    <div class="mt-40">
                      <h5 class="text-17 lh-15 fw-500">Bạn
                        <?php echo $n['user_name'] ?> -
                      </h5>

                    </div>
                  </div>
                </div>
              <?php }
                  } ?>


          </div>

          <div class="pt-60 lg:pt-40">
            <div class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">
              <?php
              $d = get_a_record('users', $noibat4['user_id']);
              foreach ($d as $q) { ?>
                <div class="col-auto">
                  <div class="pagination__item is-active">
                    <img style="width:60px; border-radius: 50% "
                      src="/public/img/avatars/<?php echo $q['user_avatar'] ?>" alt="image">
                  </div>
                </div>
              <?php } ?>
              <?php foreach ($noibat3 as $i) {
                $w = get_a_record('users', $i['user_id']);
                foreach ($w as $t) { ?>
                  <div class="col-auto">
                    <div class="pagination__item ">
                      <img style='width:60px; border-radius:50%' src="/public/img/avatars/<?php echo $t['user_avatar'] ?>"
                        alt="image">
                    </div>
                  </div>
                <?php }
              } ?>
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
    <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Các điểm đến của WinK Travel</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">Những điểm đến phố biến này ở Việt Nam có rất nhiều điều thú vị
          </p>
        </div>
      </div>

      <div class="col-auto">

        <div class="d-flex x-gap-15 items-center justify-center pt-40 sm:pt-20">
          <div class="col-auto">
            <button class="d-flex items-center text-24 arrow-left-hover js-places-prev">
              <i class="icon icon-arrow-left"></i>
            </button>
          </div>

          <div class="col-auto">
            <div class="pagination -dots text-border js-places-pag"></div>
          </div>

          <div class="col-auto">
            <button class="d-flex items-center text-24 arrow-right-hover js-places-next">
              <i class="icon icon-arrow-right"></i>
            </button>
          </div>
        </div>

      </div>
    </div>

    <div class="pt-40 overflow-hidden js-section-slider" data-gap="30" data-slider-cols="xl-5 lg-3 md-2 sm-2 base-1"
      data-nav-prev="js-places-prev" data-pagination="js-places-pag" data-nav-next="js-places-next">
      <div class="swiper-wrapper">
        <?php foreach ($noibat2 as $el) { ?>
          <div data-anim-child="slide-left delay-4" class="swiper-slide">

            <a href="index.php?controller=alltour&idl=<?php echo $el['id'] ?>" class="citiesCard -type-2 ">
              <div class="citiesCard__image rounded-4 ratio ratio-3:4">
                <img class="img-ratio rounded-4 js-lazy"
                  data-src="../../../public/img/location/<?php echo $el['location_image_url'] ?>" src="#" alt="image">
              </div>

              <div class="citiesCard__content mt-10">
                <h4 class="text-18 lh-13 fw-500 text-dark-1">
                  <?php echo $el['location_name']; ?>
                </h4>

              </div>
            </a>

          </div>
        <?php } ?>


        <!-- <div data-anim-child="slide-left delay-5" class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-3:4">
                  <img class="img-ratio rounded-4 js-lazy" data-src="img/destinations/1/2.webp" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Italy</h4>
                  <div class="text-14 text-light-1">147,681 travellers</div>
                </div>
              </a>

            </div>

            <div data-anim-child="slide-left delay-6" class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-3:4">
                  <img class="img-ratio rounded-4 js-lazy" data-src="img/destinations/1/3.webp" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">France</h4>
                  <div class="text-14 text-light-1">147,681 travellers</div>
                </div>
              </a>

            </div>

            <div data-anim-child="slide-left delay-7" class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-3:4">
                  <img class="img-ratio rounded-4 js-lazy" data-src="img/destinations/1/4.webp" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Turkey</h4>
                  <div class="text-14 text-light-1">147,681 travellers</div>
                </div>
              </a>

            </div>

            <div data-anim-child="slide-left delay-8" class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-3:4">
                  <img class="img-ratio rounded-4 js-lazy" data-src="img/destinations/1/5.webp" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Spain</h4>
                  <div class="text-14 text-light-1">147,681 travellers</div>
                </div>
              </a>

            </div>

            <div data-anim-child="slide-left delay-9" class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-3:4">
                  <img class="img-ratio rounded-4 js-lazy" data-src="img/destinations/1/1.webp" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">United Kingdom</h4>
                  <div class="text-14 text-light-1">147,681 travellers</div>
                </div>
              </a>

            </div>

            <div data-anim-child="slide-left delay-10" class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-3:4">
                  <img class="img-ratio rounded-4 js-lazy" data-src="img/destinations/1/2.webp" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">Italy</h4>
                  <div class="text-14 text-light-1">147,681 travellers</div>
                </div>
              </a>

            </div>

            <div data-anim-child="slide-left delay-11" class="swiper-slide">

              <a href="#" class="citiesCard -type-2 ">
                <div class="citiesCard__image rounded-4 ratio ratio-3:4">
                  <img class="img-ratio rounded-4 js-lazy" data-src="img/destinations/1/3.webp" src="#" alt="image">
                </div>

                <div class="citiesCard__content mt-10">
                  <h4 class="text-18 lh-13 fw-500 text-dark-1">France</h4>
                  <div class="text-14 text-light-1">147,681 travellers</div>
                </div>
              </a>

            </div> -->

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
        <a href="https://vinpearl.com/vi/kham-pha-co-do-voi-top-34-dia-diem-du-lich-hue-cuc-hap-dan"
          class="row y-gap-20 items-center" target="_blank">
          <div class="col-auto">
            <img class="size-250 rounded-4" src="../../../public/img/blog/dia-diem-du-lich-Hue-03.jpg" alt="image">
          </div>

          <div class="col">
            <div class="text-15 text-light-1">14/12/2023</div>
            <h4 class="text-22 fw-600 text-dark-1 mt-10">Khám phá cố đô với TOP 34 địa điểm du lịch Huế hấp dẫn nhất
              2023</h4>

          </div>
        </a>
      </div>

      <div data-anim-child="slide-up delay-3" class="col-lg-6">
        <a href="blog-single-1.html" class="row y-gap-20 items-center">
          <div class="col-auto">
            <img class="size-250 rounded-4"
              src="../../../public/img/blog/du-lich-vinh-Ha-Long-hinh-anh3_1625912082_1660489377.png" alt="image">
          </div>

          <div class="col">
            <div class="text-15 text-light-1">April 06, 2022</div>
            <h4 class="text-22 fw-600 text-dark-1 mt-10">Bỏ túi 16 địa điểm du lịch Hạ Long làm say lòng du khách 2023
            </h4>

          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<?php
include("content/views/shared/footer.php");
?>