<?php include('content/views/shared/headerhome.php') ?>


<section class="pt-40 pb-40 bg-light-2">
  <div class="container">
    <div class="row justify-center">
      <div class="col-9">
        <div class="text-center">
          <h1 class="text-30 fw-600">Bạn muốn đi đâu?</h1>
          <p>Hơn 100 tour du lịch giá tốt đang chờ bạn</p>
        </div>

        <div class="mainSearch -col-12-big bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">
          <div class="button-grid items-center">
            <div class="d-flex" data-x-dd-click="searchMenu-loc">
              <form action="index.php?controller=alltour" method="post">

                <div class="ml-10">
                  <h4 class="text-15 fw-500 ls-2 lh-16">Địa điểm</h4>

                  <div class="text-15 text-light-1 ls-2 lh-16">
                    <input autocomplete="off" name="diadiem" type="search" placeholder="Bạn muốn đi đâu?"
                      class="js-search js-dd-focus" />
                  </div>
                </div>

            </div>
            <div class="d-flex" data-x-dd-click="searchMenu-loc">


              <div class="ml-10">

                <h4 class="text-15 fw-500 ls-2 lh-16">Ngày</h4>

                <div class="text-15 text-light-1 ls-2 lh-16">
                  <input autocomplete="off" type="date" name="ngay" class="js-search js-dd-focus" />
                </div>
              </div>
            </div>

            <div class="d-flex" data-x-dd-click="searchMenu-loc">


              <div class="ml-10">
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
            </div>


            <div class="button-item">
              <button class="mainSearch__submit button -dark-1 py-15 px-40 col-12 rounded-4 bg-blue-1 text-white">
                <i class="icon-search text-20 mr-10"></i>
                Search
              </button>
              </form>
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


      <div class="col-xl-12 col-lg-8">
        <div class="row y-gap-10 items-center justify-between">
          <div class="col-auto">
            <div class="text-18">
              <?php if ($result > 0) { ?>
                <span class="fw-500">Có
                  <?php echo $result ?> tour
                </span>
              <?php }
              else if ($result == 0) { ?>
                  <span class="fw-500">Không tìm thấy tour</span>
              <?php } ?>
            </div>
          </div>


        </div>



        <div class="mt-30"></div>

        <div class="row y-gap-30">
          <?php
          if ($result > 0) {
            foreach ($a as $e) { ?>
              <div class="col-12">
                <div class="border-top-light pt-30">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">
                      <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                        <div class="cardImage__content">
                          <img class="rounded-4 col-12" src="../../../public/img/tours/<?php echo $e['tour_image_url'] ?>"
                            alt="image" />
                        </div>
                        <!-- <div class="cardImage__wishlist">
                    <button id="addtourfav" class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div> -->
                        <input type="text" id="idtour" value="<?php echo $e['id'] ?>">
                      </div>
                    </div>

                    <div class="col-md">
                      <div class="row x-gap-10 items-center">
                        <div class="col-auto">
                          <p class="text-14 lh-14 mb-5">
                            <?php echo TimeAgo($e['tour_create_date']) ?>
                          </p>
                        </div>


                      </div>

                      <h3 class="text-18 lh-16 fw-500">
                        <?php echo $e['tour_name'] ?>
                      </h3>
                      <p class="text-14 lh-14 mt-5">
                        <?php echo $e['tour_location_name'] ?>
                      </p>

                      <div class="text-14 lh-15 fw-500 mt-20">
                        Thực hiện các biện pháp an toàn
                      </div>
                      <div class="text-14 text-green-2 fw-500 lh-15 mt-5">
                        Huỷ miễn phí
                      </div>
                    </div>

                    <div class="col-md-auto text-right md:text-left">
                      <div class="d-flex x-gap-5 items-center justify-end md:justify-start">
                        <?php for ($i = 1; $i <= $e['tour_star']; $i++) { ?>
                          <i class="icon-star text-10 text-yellow-1"></i>
                        <?php } ?>
                      </div>

                      <div class="text-14 lh-14 text-light-1 mt-10">
                        <?php echo get_total_id('comment', $e['id'], 'tour_id') ?> bình luận
                      </div>
                      <div class="text-14 lh-14 text-light-1 mt-10">
                        <?php echo $e['tour_total_view'] ?> lượt xem
                      </div>

                      <div class="text-14 text-light-1 mt-50 md:mt-20">Từ</div>
                      <div class="text-22 lh-12 fw-600 mt-5">
                        <?php echo number_format($e['tour_price'], 0, ',', '.') . ' VND'; ?>
                      </div>
                      <div class="text-14 text-light-1 mt-5">mỗi người</div>

                      <a href="../../../index.php?controller=tour&action=index&id=<?php echo $e['id'] ?>"
                        class="button -md -dark-1 bg-blue-1 text-white mt-24">
                        Xem chi tiết
                    
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php }
            ?>
          </div>

          <div class="border-top-light mt-30 pt-30"></div>
          <?php if ($total_page > 1) { ?>

            <div class="row justify-between">
              <div class="col-auto">
                <?php if ($current_page > 1 && $total_page > 1) { ?>
                  <a href='../../../index.php?controller=alltour&acion=index&p=<?php echo $current_page - 1 ?> '
                    class="button -blue-1 size-40 rounded-full border-light">
                    <i class="icon-chevron-left text-12"></i>
                  </a>
                <?php } ?>
              </div>

              <div class="col-auto">
                <div class="row x-gap-20 y-gap-20 items-center">
                  <?php for ($i = 1; $i <= $total_page; $i++) {
                    if ($i == $current_page) { ?>
                      <div class="col-auto">

                        <a href="">
                          <div class="size-40 flex-center rounded-full bg-dark-1 text-white">
                            <?php echo $i ?>
                          </div>
                        </a>

                      </div>
                    <?php }
                    else { ?>
                      <div class="col-auto">
                        <a href="../../../index.php?controller=alltour&acion=index&p=<?php echo $i ?> ">
                          <div class="size-40 flex-center rounded-full">
                            <?php echo $i ?>
                          </div>
                        </a>
                      </div>

                    <?php }
                  } ?>




                </div>
              </div>

              <div class="col-auto">
                <a href='../../../index.php?controller=alltour&acion=index&p=<?php echo $current_page + 1 ?> '
                  class="button -blue-1 size-40 rounded-full border-light">
                  <i class="icon-chevron-right text-12"></i>
                </a>
              </div>
            </div>

          <?php }
          } ?>
      </div>
    </div>
  </div>
  </div>
</section>
<script>
  $(document).ready(function () {


    // Hàm để tải thêm comment
    function addtourfav() {
      $.ajax({
        url: "/content/controllers/info/addtourfav.php",
        type: "POST",
        data: { idt: $('#idtour').val(), idu: $('#idu').val() },
        success: function (data) {
          alert(data);
        }
      });
    }

    // Xử lý sự kiện khi nhấp vào nút "Hiển thị thêm"
    $('#addtourfav').on('click', function () {
      addtourfav();
    });
  });
</script>



<?php
include("content/views/shared/footer.php");
?>