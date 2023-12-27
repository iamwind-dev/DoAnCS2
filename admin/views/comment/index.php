<?php
include('admin/views/shared/header.php');
?>

<div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
        <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
            <div class="col-auto">
                <h1 class="text-30 lh-14 fw-600">Danh sách bình luận</h1>
                
            </div>

            
        </div>

        <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="tabs -underline-2 js-tabs">
                <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
                    <div class="col-auto">
                        <button
                            class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                            data-tab-target=".-tab-item-1">
                            Danh sách bình luận
                        </button>
                    </div>
                </div>

                <div class="tabs__content pt-30 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                        <div class="overflow-scroll scroll-bar-1">
                            <table class="table-4 -border-bottom col-12">
                                <thead class="bg-light-2">
                                    <tr>
                                        <th >STT</th>
                                        <th style="width: 300px">Tên User</th>
                                        <th style="width: 300px" style="width: 300px">Email</th>
                                        <th style="width: 300px" style="width: 300px">Tour</th>
                                        <th style="width: 500px">Nội dung</th>
                                        <th style="width: 300px">Trạng Thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $a = 1;
                                    foreach ($data as $element) {
                                        $u = get_a_record('users', $element['user_id']);
                                        foreach ($u as $b) {


                                            ?>
                                        
                                        <tr>
                                            <td>
                                                <?php echo $a; ?>
                                            </td>
                                            <td class="text-blue-1 fw-500">
                                                <?php echo $b['user_name'];

                                                ?>
                                            </td>
                                            <td style="width: 400px"><?php echo $b['user_email'];
                                        }
                                                ?>
                                            
                                                    </td>
                                                    
                                            <td>
                                                <?php $tour = get_a_record('tour', $element['tour_id']);
                                                foreach ($tour as $c) {
                                                    echo $c['tour_name'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $element['comment']; ?>
                                            </td>
                                            <td>
                                                <?php if ($element['status_id'] == 3) { ?>
                                                    <span
                                                        class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">
                                                        <?php echo $element['comment_status']; ?>
                                                    </span>
                                                <?php }
                                                
                                                else if ($element['status_id'] == 2) { ?>
                                                            <span
                                                                class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">
                                                        <?php echo $element['comment_status']; ?>
                                                            </span>
                                                <?php }else if ($element['status_id'] == 1) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">
                                                        <?php echo $element['comment_status']; ?>
                                                        </span><?php }
                                                
                                                        ?>
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

                                <a href="" data-ac="Hiển Thị" data-id="1" data-idt="<?php echo $element['id'] ?>" class="d-block js-dropdown-link">Hiển Thị</a>

                                <div><a href="" data-ac="Nổi Bật" data-id="2" data-idt="<?php echo $element['id'] ?>" class="d-block js-dropdown-link">Nổi Bật</a></div>

                                    <div><a href="" data-ac="Ẩn" data-id="3" data-idt="<?php echo $element['id'] ?>" class="d-block js-dropdown-link">Ẩn</a></div>
                                              </div>
                            
                                            </div>
                                          </div>
                                        </td>
                                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="pt-30">
            <div class="row justify-between">
              <div class="col-auto">
                <?php if ($current_page > 1 && $total_page > 1) { ?>
                                            <a href='../../../admin.php?controller=comments&acion=index&p=<?php echo $current_page - 1 ?> '
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
                                                        <a href="../../../admin.php?controller=comments&acion=index&p=<?php echo $i ?> ">
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
                                        <a href='../../../admin.php?controller=comments&acion=index&p=<?php echo $current_page + 1 ?> '
                                            class="button -blue-1 size-40 rounded-full border-light">
                                            <i class="icon-chevron-right text-12"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                    url: '/admin/controllers/comments/action.php',
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
        
        <?php include('admin/views/shared/footer.php') ?>
    </div>
</div>