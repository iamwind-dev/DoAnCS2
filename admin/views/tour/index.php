<?php
include('/DA/admin/views/shared/header.php');
?>

<div class="dashboard__main">
  <div class="dashboard__content bg-light-2">
    <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
      <div class="col-auto">
        <h1 class="text-30 lh-14 fw-600">All Tours</h1>
        <div class="text-15 text-light-1">
          Lorem ipsum dolor sit amet, consectetur.
        </div>
      </div>

      <div class="col-auto">
        <a href="../../../admin.php?controller=tour&amp;action=add"
          class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
          Add Tour
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
              All Location
            </button>
          </div>
        </div>

        <div class="tabs__content pt-30 js-tabs-content">
          <div class="tabs__pane -tab-item-1 is-tab-el-active">
            <div class="overflow-scroll scroll-bar-1">
              <table class="table-4 -border-bottom col-12">
                <thead class="bg-light-2">
                  <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th style="width: 400px">Image</th>
                    <th style="width: 400px">Schedule/Price</th>
                    <th>Information/Location</th>
                    <th>Status</th>
                    <th>Rate</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $a = 0;
                  foreach ($data as $element) { ?>
                  
                    <tr>
                      <td><?php echo ++$a; ?></td>
                      <td class="text-blue-1 fw-500">
                        <?php echo $element['tour_name'];
                        ?>
                      </td>
                      <td style="width: 400px">
                        <img style="max-width: 200px; height: 150px"
                          src="/public/img/tours/<?php echo $element['tour_image_url'] ?>" />
                      </td>
                      <td style="width: 400px; height: 150px">
                        <b>Lịch Trình:</b>
                        <?php echo $element['tour_schedule']; ?><br /><b>Giá:</b>
                        <?php echo $element['tour_price']; ?>
                      </td>
                      <td>
                        <b>Địa điểm:</b>
                        <?php echo $element['tour_location_name']; ?><br /><b>Di Chuyển:</b>
                        <?php echo $element['tour_vehicle']; ?><br /><b>Điểm Xuất Phát:</b>
                        <?php echo $element['tour_starting_point']; ?><br /><b>Ngày đi:
                        </b>
                        <?php echo $element['tour_start_date']; ?><br /><b>Ngày về:
                        </b>
                        <?php echo $element['tour_end_date']; ?>
                      </td>
                      <td>
                        <span
                          class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-success-4 text-success-4">Pending</span>
                      </td>
                      <td>
                        <div class="rounded-4 size-35 bg-blue-1 text-white flex-center text-12 fw-600">
                          4.8
                        </div>
                      </td>
                      <td>
                        <div class="row x-gap-10 y-gap-10 items-center">
                          <div class="col-auto">
                            <a href="../../../admin.php?controller=tour&amp;action=edit"><button
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
        </div>
      </div>
    </div>
    <?php include('/DA/admin/views/shared/footer.php') ?>
  </div>
</div>