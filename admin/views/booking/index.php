<?php
include('/DA/admin/views/shared/header.php');
?>

<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">
                <h1 class="text-30 lh-14 fw-600">Danh sách đặt tour</h1>
                
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
                            Danh sách đặt tour
                        </button>
                    </div>
                </div>

                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="overflow-scroll scroll-bar-1">
                            <table class="table-4 -border-bottom col-12">
                                <thead class="bg-light-2">
                                    <tr>
                                        <th style="width: 100px !important">STT</th>
                                        <th style="width: 300px">Tên Tour</th>
                                        <th style="width: 300px" style="width: 300px">Thông tin khách hàng</th>
                                        <th style="width: 500px">Thông tin tour</th>
                                        <th style="width: 300px">Thanh toán</th>
                                        <th style="width: 300px">Trạng Thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $a = 1;
                                    foreach ($data as $element) {
                                        $tour = get_a_record('tour', $element['tour_id']);
                                        foreach ($tour as $b){

                                        
                                        ?>
                                        
                                        <tr>
                                            <td>
                                                <?php echo $a; ?>
                                            </td>
                                            <td class="text-blue-1 fw-500">
                                                <?php echo $b['tour_name'];
                                        
                                                ?>
                                            </td>
                                            <td style="width: 400px">
                                            <b>Tên: </b>
                                                <?php echo $element['customer_name'] ?><br><br>
                                            <b>Email: </b>
                                            <?php echo $element['customer_email'] ?><br><br>
                                            <b>SĐT: </b>
                                            <?php echo $element['customer_phone'] ?><br><br>
                                            <b>Địa chỉ: </b>
                                            <?php echo $element['customer_address'] ?><br><br>
                                            </td>
                                            <td style="width: 500px; height: 150px">

                                                <b>Ngày đi dự kiến: </b>
                                                <?php echo $b['tour_start_date']; ?><br><br>
                                                <b>Số người:</b>
                                                <?php echo $element['capacity'].' người'; ?><br><br>
                                                <b>Khách sạn:</b>
                                                <?php $idht=get_a_record('hotel',$element['hotel_id']);
                                                    foreach($idht as $hotel){
                                                        echo $hotel['hotel_name'];
                                                    
                                                    }
                                                } ?><br><br>
                                                        <b>Tổng giá:</b>
                                                        <span class=" text-center text-14 fw-500 text-red-2">
                                                    <?php echo number_format($element['total'], 0, ',', '.') . 'VND';     ?>
                                                    </span>
<br>
                                                    <b>ghi chú:</b>
<?php echo $element['note']; ?><br><br>
                                                    </td>
                                                    <td>
                                                        Thanh toán trực tiếp
                                            </td>
                                            <td>
                                                <?php if ($element['status_id'] == 5) { ?>
                                                    <span
                                                        class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">
                                                        <?php echo $element['booktour_status']; ?>
                                                    </span>
                                                <?php }
                                                else if ($element['status_id'] == 1) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-light-1 text-light-2">
                                                        <?php echo $element['booktour_status']; ?>
                                                        </span>
                                                <?php }
                                                else if ($element['status_id'] == 4) { ?>
                                                            <span
                                                                class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">
                                                        <?php echo $element['booktour_status']; ?>
                                                            </span>
                                                <?php }else if ($element['status_id'] == 2) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">
                                                        <?php echo $element['booktour_status']; ?>
                                                        </span><?php }
                                                else if ($element['status_id'] == 3) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-success-2 text-light-2   ">
                                                        <?php echo $element['booktour_status']; ?>
                                                        </span> <?php }?>
                                            </td>
                                            
                                            <td>
                          <div class="dropdown js-dropdown js-actions-<?php echo $a ?>-active">
                            <div class="dropdown__button d-flex items-center rounded-4 text-blue-1 bg-blue-1-05 text-14 px-15 py-5" data-el-toggle=".js-actions-<?php echo $a ?>-toggle" data-el-toggle-active=".js-actions-<?php echo $a; ?>-active">
                              <span class="js-dropdown-title">Actions</span>
                              <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                            </div>

                            <div class="toggle-element -dropdown-2 js-click-dropdown js-actions-<?php echo $a;
                                $a++; ?>-toggle">
                              <div class="text-14 fw-500 js-dropdown-list">

                                <a href="" data-ac="Tiếp Nhận" data-id="1" data-idt="<?php echo $element['id'] ?>" class="d-block js-dropdown-link">Tiếp nhận</a>

                                <div><a href="" data-ac="Đã xác nhận" data-id="2" data-idt="<?php echo $element['id'] ?>" class="d-block js-dropdown-link">Đã xác nhận</a></div>

                                    <div><a href="" data-ac="Đã thanh toán" data-id="3" data-idt="<?php echo $element['id'] ?>" class="d-block js-dropdown-link">Đã thanh toán</a></div>

                                        <div><a href="" data-ac="Đã kết thúc" data-id="4" data-idt="<?php echo $element['id'] ?>" class="d-block js-dropdown-link">Đã kết thúc</a></div>
                                            <div><a href="" data-ac="Đã Huỷ" data-id="5" data-idt="<?php echo $element['id'] ?>" class="d-block js-dropdown-link">Đã Huỷ</a></div>
                                              </div>
                            
                                            </div>
                                          </div>
                                        </td>
                                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
    var dropdownLinks = document.querySelectorAll('.js-dropdown-link');

    dropdownLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn điều hướng mặc định

            var id = this.getAttribute('data-id'); // Lấy giá trị data-id từ thuộc tính custom
            var idt = this.getAttribute('data-idt'); // Lấy giá trị data-id từ thuộc tính custom
            var ac = this.getAttribute('data-ac'); // Lấy giá trị data-id từ thuộc tính custom

            // Thực hiện hành động dựa trên id, ví dụ console.log
            console.log('Đã nhấp vào liên kết với id: ' + id + idt+ ac);

            $.ajax({
                    method: "POST",
                    url: '/admin/controllers/booking/action.php',
                    data: {
                        id: id,
                        idt : idt,
                        ac : ac// Send the determined value
                        // Add more data if needed
                    },
                })
                    .done(function (data) {
                        alert('Bạn có muốn lưu dữ liệu?');
                        window.location.reload(); // Reload the page after the action is completed
                        
                    });
            });
        });
    });


                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include('/DA/admin/views/shared/footer.php') ?>
    </div>
</div>