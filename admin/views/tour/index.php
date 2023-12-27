<?php
include('admin/views/shared/header.php');
?>

<div class="dashboard__main">
  <div class="dashboard__content bg-light-2">
    <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
      <div class="col-auto">
        <h1 class="text-30 lh-14 fw-600">Tất cả các Tour</h1>
        <div class="text-15 text-light-1">
          Lorem ipsum dolor sit amet, consectetur.
        </div>
      </div>

      <div class="col-auto">
        <a href="../../../admin.php?controller=tour&amp;action=add"
          class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
          Thêm Tour
          <div class="icon-arrow-top-right ml-15"></div>
        </a>
      </div>
    </div>

    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
      <div class="tabs -underline-2 js-tabs">
        <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
          <div class="col-auto">
            <button
              class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
              data-tab-target=".-tab-item-1">
              Tất cả các Tour
            </button>
          </div>
        </div>

        <div class="tabs__content pt-30 js-tabs-content">
          <div class="tabs__pane -tab-item-1 is-tab-el-active">
            <div class="overflow-scroll scroll-bar-1">
              <table class="table-4 -border-bottom col-12">
                <thead class="bg-light-2">
                  <tr>
                    <th style="width: 50px !important">STT</th>
                    <th style="width: 300px">Tên Tour</th>
                    <th style="width: 300px" style="width: 300px">Ảnh</th>
                    <th style="width: 500px">Lịch Trình/Giá</th>
                    <th style="width: 400px">Thông tin/Địa Điểm</th>
                    <th style="width: 300px">Trạng Thái</th>
                    <th>Đánh Giá</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $a = 0;
                  foreach ($data as $element) { ?>

                    <tr>
                      <td>
                        <?php echo ++$a; ?>
                      </td>
                      <td class="text-blue-1 fw-500">
                        <?php echo $element['tour_name'];
                        ?>
                      </td>
                      <td style="width: 400px">
                        <img style=" border-radius:5%; max-width: 200px; height: 150px"
                          src="/public/img/tours/<?php echo $element['tour_image_url'] ?>" />
                      </td>
                      <td style="width: 500px; height: 150px">

                        <b>Hành Trình: </b>
                        <?php echo $element['tour_journey']; ?><br><br>
                        <b>Lịch Trình:</b>
                        <?php echo $element['tour_schedule']; ?><br><br>
                        <b>Số người:</b>
                        <?php echo $element['tour_max_capacity']; ?> <br>
                        <br /><b>Giá:</b>
                        <span class=" text-center text-14 fw-500 text-red-2">
                          <?php echo number_format($element['tour_price'], 0, ',', '.') . 'VND'; ?>
                        </span>

                      </td>
                      <td>
                        <b>Địa điểm:</b>
                        <?php echo $element['tour_location_name']; ?><br><br><b>Di Chuyển:</b>
                        <?php echo $element['tour_vehicle']; ?><br><br><b>Điểm Xuất Phát:</b>
                        <?php echo $element['tour_starting_point']; ?><br><br><b>Ngày bắt đầu:
                        </b>
                        <?php echo date('d/m/Y', strtotime($element['tour_start_date'])); ?><br><br><b>Ngày kết thúc:
                        </b>
                        <?php echo date('d/m/Y', strtotime($element['tour_end_date'])); ?>
                      </td>
                      <td>
                        <?php if ($element['tour_status_id'] == 2) { ?>
                          <span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">
                            <?php echo $element['tour_status']; ?>
                          </span>
                        <?php }
                        else if ($element['tour_status_id'] == 1) { ?>
                            <span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">
                            <?php echo $element['tour_status']; ?>
                            </span>
                        <?php }
                        else if ($element['tour_status_id'] == 3) { ?>
                              <span class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">
                            <?php echo $element['tour_status']; ?>
                              </span>
                        <?php } ?>
                      </td>
                      <td>
                        <div class="rounded-4 size-35 bg-blue-1 text-white flex-center text-12 fw-600">
                          <?php echo number_format($element['tour_star'], 1, ',', '.'); ?>
                        </div>
                      </td>
                      <td>
                        <div class="row x-gap-10 y-gap-10 items-center">
                          <div class="col-auto">
                            <a href="../../../index.php?controller=tour&action=index&id=<?php echo $element['id']; ?>"><button
                                class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-eye text-16 text-light-1"></i>
                              </button>
                            </a>
                          </div>

                          <div class="col-auto">
                            <a
                              href="../../../admin.php?controller=tour&amp;action=edit&amp;id=<?php echo $element['id']; ?>"><button
                                class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-edit text-16 text-light-1"></i>
                              </button>
                            </a>
                          </div>
                          <div class="col-auto">
                            <a
                              href="../../../admin.php?controller=tour&amp;action=delete&amp;id=<?php echo $element['id']; ?>"><button
                                class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-trash-2 text-16 text-light-1"></i></button></a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="pt-30">
            <div class="row justify-between">
              <div class="col-auto">
                <?php if ($current_page > 1 && $total_page > 1) { ?>
                  <a href='../../../admin.php?controller=tour&acion=index&p=<?php echo $current_page - 1 ?> '
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
                        <a href="../../../admin.php?controller=tour&acion=index&p=<?php echo $i ?> ">
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
                <a href='../../../admin.php?controller=tour&acion=index&p=<?php echo $current_page + 1 ?> '
                  class="button -blue-1 size-40 rounded-full border-light">
                  <i class="icon-chevron-right text-12"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('admin/views/shared/footer.php') ?>
  </div>
</div>