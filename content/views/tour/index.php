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
        <form action="../../../index.php?controller=booking&action=index" method="post">
        <div class="d-flex justify-end js-pin-content">
          <div class="w-360 lg:w-full d-flex flex-column items-center">
            <div class="px-30 py-30 rounded-4 border-light bg-white shadow-4">
              <div class="text-14 text-light-1">
                <span class="text-20 fw-500 text-dark-1 ml-5"
                  >Giá: <br />
                  <?php echo number_format($e['tour_price'], 0, ',', '.').'VND'; ?>
                </span>
                <input type="text" hidden name="idt" value="<?php echo $_GET['id'] ?>">
              </div>

              <div class="row y-gap-20 pt-30">
                <div class="col-12">
                  <div
                    class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar"
                  >
                    <div data-x-dd-click="searchMenu-date">
                      <h4 class="text-15 fw-500 ls-2 lh-16">Ngày đi - Ngày về</h4>

                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <span class="js-first-date"><?php echo date("d-m-Y", strtotime($e['tour_start_date'])) ?></span>
                        -
                        <span class="js-last-date"><?php echo date("d-m-Y",strtotime($e['tour_end_date'])) ?></span>
                      </div>
                    </div>

                    <div
                      class="searchMenu-date__field shadow-2"
                      data-x-dd="searchMenu-date"
                      data-x-dd-toggle="-is-active"></div>
                  </div>
                </div>

                <div class="col-12">
                  <div
                    class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">
                    <div data-x-dd-click="searchMenu-guests">
                      <h4 class="text-15 fw-500 ls-2 lh-16">
                        Số người
                      </h4>

                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <input type="text" name="songuoi" required>
                      </div>

                      
                    </div>

                    
                  </div>
                </div>

                <div class="col-12">
                  <div
                    class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">
                    <div data-x-dd-click="searchMenu-guests">
                      <h4 class="text-15 fw-500 ls-2 lh-16">
                        Số phòng
                      </h4>

                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <input type="text" name="sophong" >
                      </div>

                      
                    </div>

                    
                  </div>
                </div>

                <div class="col-12">
                  <button
                  type="submit"
                    class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white">
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
                <?php foreach($data1 as $a){ ?>
                <div class="col-12">
                  <div
                    class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar">
                    <div data-x-dd-click="searchMenu-date">
                          <input
                            style="width: auto !important"
                            type="checkbox"
                            name="idks"
                            value="<?php echo $a['id'] ?>"
                          <?php if ($a['hotel_status_id'] == 2) {
                            echo 'disabled';
                          } ?>
                      />
                    
                      <b><?php echo $a['hotel_name'] ?></b><br>
                    Giá:  <?php echo number_format($a['hotel_price'], 0, ',', '.') . 'VND'; ?>
                      <div class="text-15 text-light-1 ls-2 lh-16">
                        <?php if($a['hotel_status_id']==2){ ?>
                        Trạng Thái:<span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2"><?php echo $a['hotel_status']; ?></span>
                        <?php }
                        else if ($a['hotel_status_id'] == 1) { ?>
                        Trạng Thái:<span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1"><?php echo $a['hotel_status'];
                        } ?></span>
                      </div>
                    </div>
                  </div>
                </div>
                    <?php } ?>
                

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
      </form>
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
        <h3 class="text-22 fw-500">Đánh giá </h3>

        <div class="d-flex items-center mt-20">
          <div
            class="flex-center bg-blue-1 rounded-4 size-70 text-22 fw-600 text-white">
            4.8
          </div>
          
        </div>
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
                <img style='width:50px; border-radius:50%' src="../../../public/img/avatars/<?php echo $c['user_avatar'] ?>" alt="image" />
              </div>
              <div class="col-auto">
                
              
                <div class="fw-500 lh-15"><?php 
                    echo $c['user_name'];
                  }  ?></div>
                  
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
          <?php  } ?>
          

        </div>
      </div>
    </div>
  </div>
  <!-- <?php
  if($total_records > 5){
  ?>
  <button id="loadMoreComments">Hiển thị thêm</button>
  <?php
  }
?> -->
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
              <textarea required rows="6" id='noidung'></textarea>
              <input type="text" id='idtour' hidden value='<?php echo $_GET['id'] ?>'>
              <input type="text" id='iduser' hidden value='<?php echo $id  ?>'>
              <input type="text" id='avatar' hidden value='<?php echo $avatar  ?>'>
              <input type="text" id='name' hidden value='<?php echo $name  ?>'>
              <input type="text" id='time' hidden value='<?php $currentDateTime = date("Y-m-d H:i:s"); echo $currentDateTime; ?>'>
              <label class="lh-1 text-16 text-light-1">Viết cảm nhận của bạn</label>
            </div>
          </div>
          <div class="col-auto">
          <button class="button -md -dark-1 bg-blue-1 text-white" type="submit"  id="btnGui">
          
              Đăng
              <div class="icon-arrow-top-right ml-15"></div>
          
                </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="mt-50 border-top-light"></div>
</div>
<script>
$(document).ready(function(){
            var offset = 1;
            var limit = 5; 

            // Hàm để tải thêm comment
            function loadMoreComments() {
                $.ajax({
                    url: "/content/controllers/comment/loadcomment.php",
                    type: "POST",
                    data: {idt: $('#idtour').val(),offset: offset, limit: limit},
                    success: function(data) {
                        $('#binhluan').append(data); 
                        offset += limit; 
                    }
                });
            }

            // Xử lý sự kiện khi nhấp vào nút "Hiển thị thêm"
            $('#loadMoreComments').on('click', function() {
                loadMoreComments();
            });
        });
</script>
<script>
            $("#btnGui").click(function () {
              // Lấy giá trị của #noidung
    var noidung = $('#noidung').val();

    // Kiểm tra noidung có rỗng không
    if (noidung.trim() === '') {
        // Nếu rỗng thì không thực hiện Ajax
        return;
    }
                $.ajax({
                    method: "POST",
                    url: '/content/controllers/comment/postcomment.php',
                    // data: { idtour: $('#idtour').val(), noidung: $('#noidung').val(),iduser: $('#iduser').val() ,avatar: $('#avatar').val() ,name: $('#name').val(), time : $('#time').val()},
                    data: { idt: $('#idtour').val(), noidung: $('#noidung').val(),idu: $('#iduser').val() },
                })
                    .done(function (data) {

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



                        var name =$('#name').val();
                        var avatar =$('#avatar').val();
                        var content =$('#noidung').val();
                        var comment = '<div class="col-12"><div class="row x-gap-20 y-gap-20 items-center"><div class="col-auto"><img style="width:50px; border-radius:50%" src="../../../public/img/avatars/' + avatar + '" alt="image" /></div><div class="col-auto"><div class="fw-500 lh-15">' + name + '</div><div class="text-14 text-light-1 lh-15">'+timeAgo+'</div>  </div></div><p class="text-15 text-dark-1 mt-10">' + content + '  </p></div>'
                          $("#binhluan").prepend(comment);
                      });
                      
              })
          </script>
    <script>
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
      checkbox.addEventListener('click', function() {
        checkboxes.forEach(function(currentCheckbox) {
          if (currentCheckbox !== checkbox) {
            currentCheckbox.checked = false;
          }
        });
      });
    });
  </script>
<?php } ?>
<?php include('/DA/content/views/shared/footer.php') ?>
