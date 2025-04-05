<?php include('content/views/shared/headerhome.php') ?>

<section class="py-10 d-flex items-center bg-light-2">
  <div class="container">
    <div class="row y-gap-10 items-center justify-between">
      <div class="col-auto">
        <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
          <?php foreach ($data as $e) { ?>
            <div class="col-auto">
              <a href="index.php">
                <div class="">Trang chủ</div>
              </a>
            </div>
            <div class="col-auto">
              <div class="">/</div>
            </div>
            <div class="col-auto">
              <a href="index.php?controller=alltour&idl=<?php echo $e['tour_location_id'] ?>">
                <div class="">
                  <?php echo $e['tour_location_name'] ?>
                </div>
              </a>
            </div>
            <div class="col-auto">
              <div class="">
                /
                <?php echo $e['tour_name'] ?>
              </div>
            </div>
            <div class="col-auto">
              <div class="text-dark-1"></div>
            </div>
          </div>
        </div>

        <div class="col-auto">
          <a href="index.php?controller=alltour&idl=<?php echo $e['tour_location_id'] ?>"
            class="text-14 text-blue-1 underline">Tất cả Tour
            <?php echo $e['tour_location_name'] ?>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="pt-40">
  <?php foreach ($data as $e) { ?>
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
                  <?php for ($i = 1; $i <= $e['tour_star']; $i++) { ?>
                    <i class="icon-star text-10 text-yellow-1"></i>
                  <?php } ?>

                </div>

                <div class="text-14 text-light-1 ml-10">
                  <?php echo get_total_id('comment', $e['id'], 'tour_id') ?> bình luận |
                  <?php echo $e['tour_total_view'] ?> lượt xem
                </div>
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
          <div id="tourfav" class="row x-gap-10 y-gap-10">
            <?php
            if (isset($_SESSION['user']['id'])) {
              $data3 = get_tourfv($_SESSION['user']['id'], $e['id']);
              if ($data3 == false) {
                ?>
              <div id="remove" class="col-auto" style="display: none ;">
                <button id="removetourfav" class="button px-15 py-10 text-light-2 bg-blue-1">
                  <i class="icon-heart mr-10" style='content: "\e902";'></i>
                  Yêu thích
                </button>
              </div>
              <div id="add" class="col-auto">
                <button id="addtourfav" class="button px-15 py-10 -blue-1 bg-light-2">
                  <i class="icon-heart mr-10"></i>
                  Yêu thích
                </button>

              </div>
            <?php }
              else { ?>
              <div id="remove" class="col-auto">
                <button id="removetourfav" class="button px-15 py-10 text-light-2 bg-blue-1">
                  <i class="icon-heart mr-10"></i>
                  Yêu thích
                </button>
              </div>
              <div id="add" class="col-auto" style="display: none ;">
                <button id="addtourfav" class="button px-15 py-10 -blue-1 bg-light-2">
                  <i class="icon-heart mr-10"></i>
                  Yêu thích
                </button>

              </div>

            <?php }
            } ?>
          </div>
        </div>
        <input type="text" id="idtour" value="<?php echo $e['id'] ?>" hidden>
      </div>
    </div>
    </div>
</section>

  <section class="pt-40 js-pin-container">
    <div class="container">
      <div class="row y-gap-30">
        <div class="col-lg-8">
          <div class="relative d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="base-1"
            data-nav-prev="js-img-prev" data-nav-next="js-img-next">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="../../../public/img/tours/<?php echo $e['tour_image_url'] ?>" alt="image"
                  class="rounded-4 col-12 h-full object-cover" />
              </div>
              
            </div>

          </div>

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
                <i class="icon-location text-22 text-blue-1 mr-10"></i>
                <div class="text-15 lh-15">
                  Điểm Xuất Phát:<br />
                  <?php echo $e['tour_starting_point'] ?>
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

          
          </div>
        </div>

        <div class="col-lg-4">
          <form id="form1" action="../../../index.php?controller=booking&action=index" method="post">
            <div class="d-flex justify-end js-pin-content">
              <div class="w-360 lg:w-full d-flex flex-column items-center">
                <div class="px-30 py-30 rounded-4 border-light bg-white shadow-4">
                  <div class="text-20 text-light-1">
                    Giá:
                    <span class="text-20 fw-500 text-blue-1 ml-5"> <br />
                      <?php echo number_format($e['tour_price'], 0, ',', '.') . 'VND'; ?>
                    </span>
                    <input type="text" hidden name="idt" value="<?php echo $_GET['id'] ?>">
                  </div>

                  <div class="row y-gap-20 pt-30">
                    <div class="col-12">
                      <div class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar">
                        <div data-x-dd-click="searchMenu-date">
                          <h4 class="text-15 fw-500 ls-2 lh-16">Ngày đi</h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input type="date" name="ngaydi" min="<?php echo $e['tour_start_date'] ?>"
                              max="<?php echo $e['tour_end_date'] ?>" required>
                            <input type="number" name="thoiluong" value="<?php echo $e['tour_duration'] ?>" hidden>
                          </div>
                        </div>

                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date"
                          data-x-dd-toggle="-is-active"></div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">
                        <div data-x-dd-click="searchMenu-guests">
                          <h4 class="text-15 fw-500 ls-2 lh-16">
                            Số người
                          </h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input type="number" name="songuoi" min="1" 
                              required>
                          </div>


                        </div>


                      </div>
                    </div>

                    <div class="col-12">
                      <div class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">
                        <div data-x-dd-click="searchMenu-guests">
                          <h4 class="text-15 fw-500 ls-2 lh-16">
                            Số phòng
                          </h4>

                          <div class="text-15 text-light-1 ls-2 lh-16">
                            <input type="number" name="sophong" min="1">
                          </div>


                        </div>


                      </div>
                    </div>

                    <div class="col-12">
                      <button form="form1" type="submit" class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white">
                        Đặt Tour
                      </button>
                    </div>
                  </div>
                </div>
                <div class="px-30 py-30 border-light rounded-4 mt-30">
                  <div class="row y-gap-20 pt-30">
                    <div class="text-14 text-light-1">
                      <span class="text-20 fw-500 text-dark-1 ml-5">Chọn Khách Sạn:
                      </span>
                    </div>
                    <?php foreach ($data1 as $a) { ?>
                      <div class="col-12">
                        <div class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar">
                          <div data-x-dd-click="searchMenu-date">
                            <input style="width: auto !important" type="checkbox" name="idks" value="<?php echo $a['id'] ?>"
                              <?php if ($a['hotel_status_id'] == 2) {
                                echo 'disabled';
                              } ?> />

                            <b>
                              <?php echo $a['hotel_name'] ?>
                            </b><br>
                            <div class="text-15 text-blue-1 ls-2 lh-16">
                              <?php echo number_format($a['hotel_price'], 0, ',', '.') . ' VND / đêm'; ?>
                            </div>
                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <?php if ($a['hotel_status_id'] == 2) { ?>
                                Trạng Thái:<span
                                  class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">
                                  <?php echo $a['hotel_status']; ?>
                                </span>
                              <?php }
                              else if ($a['hotel_status_id'] == 1) { ?>
                                  Trạng Thái:<span
                                    class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">
                                  <?php echo $a['hotel_status'];
                              } ?>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>


                  </div>
                </div>
                <div class="px-30">
                  <div class="text-14 text-light-1 mt-30">

                    Không chắc chắn?Bạn có thể liên hệ chúng tôi để huỷ đặt chỗ này trước 24h để được hoàn tiền 100%.
                  </div>
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
  </section>


  <div class="container mt-40 mb-40">
    <div class="border-top-light"></div>
  </div>
  <?php if ($e['tour_description'] != '') { ?>
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
                <?php $a = 1;
                for ($i = 0; $i < count($mang); $i) { ?>
                  <div class="col-12">
                    <div class="accordion__item">
                      <div class="d-flex">
                        <div class="accordion__icon size-40 flex-center bg-blue-2 text-blue-1 rounded-full">
                          <div class="text-14 fw-500">
                            <?php echo $a;
                            $a++; ?>
                          </div>
                        </div>

                        <div class="ml-20">
                          <div class="text-16 lh-15 fw-500">
                            <?php echo $mang[$i];
                            $i++; ?>
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
                            <button form='form2' data-open-change-title="See less"
                              class="d-block lh-15 text-14 text-blue-1 underline fw-500 mt-5">
                              See more
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
  <?php } ?>
  <div class="container mt-40 mb-40">
    <div class="border-top-light"></div>
  </div>

  <section>
    <div class="container">
      <div class="row y-gap-40 justify-between">
      
          <h3 class="text-22 fw-500">Đánh giá </h3>
          <div class="d-flex items-center mt-20">
            <div class="flex-center bg-blue-1 rounded-4 size-70 text-22 fw-600 text-white">
              <?php echo number_format($e['tour_star'], 1) ?>
            </div>

            <fieldset class="rating">
              <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5"
                title="Awesome - 5 stars"></label>
              <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half"
                title="Pretty good - 4.5 stars"></label>
              <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4"
                title="Pretty good - 4 stars"></label>
              <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half"
                title="Meh - 3.5 stars"></label>
              <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3"
                title="Meh - 3 stars"></label>
              <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half"
                title="Kinda bad - 2.5 stars"></label>
              <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2"
                title="Kinda bad - 2 stars"></label>
              <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half"
                title="Meh - 1.5 stars"></label>
              <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1"
                title="Sucks big time - 1 star"></label>
              <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf"
                title="Sucks big time - 0.5 stars"></label>
              <input type="number" id="num" value="<?php echo $e['tour_number_of_rating'] ?>" hidden>
              <input type="number" id="rating" value="<?php echo $e['tour_star'] ?>" hidden>
            </fieldset>
            </form>

          </div>
        

        <div class="col-xl-8">
          <div id="binhluan" class="row y-gap-40">
            <?php
            foreach ($data2 as $b) { ?>
              <?php
              $data3 = showUser($b['user_id']);
              foreach ($data3 as $c) {
                ?>
                <div class="col-12">
                  <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                      <img style='width:50px; border-radius:50% !important'
                        src="../../../public/img/avatars/<?php echo $c['user_avatar'] ?>" alt="image" />
                    </div>
                    <div class="col-auto">


                      <div class="fw-500 lh-15">
                        <?php
                        echo $c['user_name'];
              } ?>
                    </div>

                    <div class="text-14 text-light-1 lh-15">
                      <?php
                      echo TimeAgo($b['time']); ?>
                    </div>
                  </div>
                </div>

                <p class="text-15 text-dark-1 mt-10">
                  <?php echo $b['comment'] ?>
                </p>

              </div>
            <?php } ?>


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

        <div class="col-xl-12">
          <div class="row y-gap-30">


            <div class="col-12">
              <div class="form-input">
                <?php if(isset($_SESSION['user'])){ ?>
                <textarea required rows="6" id='noidung'></textarea>
                <input type="text" id='idtour' hidden value='<?php echo $_GET['id'] ?>'>
                <input type="text" id='iduser' hidden value='<?php echo $id ?>'>
                <input type="text" id='avatar' hidden value='<?php echo $avatar ?>'>
                <input type="text" id='name' hidden value='<?php echo $name ?>'>
                <input type="text" id='time' hidden
                  value='<?php $currentDateTime = date("Y-m-d H:i:s");
                  echo $currentDateTime; ?>'>
                <label class="lh-1 text-16 text-light-1">Viết cảm nhận của bạn</label>
              </div>
            </div>
            <div class="col-auto">
              <button class="button -md -dark-1 bg-blue-1 text-white" type="submit" id="btnGui">

                Gửi
                <div class="icon-arrow-top-right ml-15"></div>

              </button>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="mt-50 border-top-light"></div>
  </div>
  
  <script>
    $("#btnGui").click(function () {
      // Lấy giá trị của #noidung
      var rating = $('input[name="rating"]:checked').val();

      var noidung = $('#noidung').val();

      // Kiểm tra noidung có rỗng không
      if (noidung.trim() === '') {
        // Nếu rỗng thì không thực hiện Ajax
        return;
      }
      $.ajax({
        method: "POST",
        url: '/content/controllers/comment/postcomment.php',
        
        data: { idt: $('#idtour').val(), noidung: $('#noidung').val(), idu: $('#iduser').val(), rating: $('input[name="rating"]:checked').val(), num: $('#num').val(), rate: $('#rating').val() },
      })
        .done(function (data) {
          
          console.log(data);

          function formatTimeAgo(commentTime) {
            var now = new Date(); // Thời gian hiện tại
            var difference = now - commentTime; // Độ chênh lệch thời gian

            var seconds = Math.floor(difference / 1000);
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var days = Math.floor(hours / 24);
            var months = Math.floor(days / 30);
            var years = Math.floor(days / 365);

            if (years > 0) {
              return years + (years === 1 ? " năm trước" : " năm trước");
            } else if (months > 0) {
              return months + (months === 1 ? " tháng trước" : " tháng trước");
            } else if (days > 0) {
              return days + (days === 1 ? " ngày trước" : " ngày trước");
            } else if (hours > 0) {
              return hours + (hours === 1 ? " giờ trước" : " giờ trước");
            } else if (minutes > 0) {
              return minutes + (minutes === 1 ? " phút trước" : " phút trước");
            } else {
              return "Gần đây";
            }
          }

          // Sử dụng hàm formatTimeAgo với thời gian bình luận để hiển thị kết quả
          var commentTime = $('time').val();
          var timeAgo = formatTimeAgo(commentTime);

          var name = $('#name').val();
          var avatar = $('#avatar').val();
          var content = $('#noidung').val();
          var comment = '<div class="col-12"><div class="row x-gap-20 y-gap-20 items-center"><div class="col-auto"><img style="width:50px; border-radius:50% !important;" src="../../../public/img/avatars/' + avatar + '" alt="image" /></div><div class="col-auto"><div class="fw-500 lh-15">' + name + '</div><div class="text-14 text-light-1 lh-15">' + timeAgo + '</div>  </div></div><p class="text-15 text-dark-1 mt-10">' + content + '  </p></div>'
          $("#binhluan").prepend(comment);

        });

    })
  </script>
  <script>
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
      checkbox.addEventListener('click', function () {
        checkboxes.forEach(function (currentCheckbox) {
          if (currentCheckbox !== checkbox) {
            currentCheckbox.checked = false;
          }
        });
      });
    });
  </script>
<?php } ?>
<?php include('content/views/shared/footer.php') ?>