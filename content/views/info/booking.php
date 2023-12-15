<?php
include("/DA/content/views/shared/headerhome.php");
?>
    <div class="dashboard -is-sidebar-open" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    
    
        <div class="dashboard__main">
            <div class="dashboard__content bg-light-2">
                <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
                    <div class="col-auto">
    
                        <h1 class="text-30 lh-14 fw-600">Tour đã đặt</h1>
                        
    
                    </div>
    
                    <div class="col-auto">
    
                    </div>
                </div>
    
    
                <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                    <div class="tabs -underline-2 js-tabs">
                        <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
    
                            
    
                            <div class="col-auto">
                                <button
                                    class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                                    data-tab-target=".-tab-item-2">Tour</button>
                            </div>
    
                            
    
                            
    
                        </div>
    
                        <div class="tabs__content pt-30 js-tabs-content">
    
                            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                <div class="row y-gap-20">
                <?php foreach ($a as $b) {
                    $c = get_a_record('tour', $b['tour_id']);
                    foreach ($c as $e) {
                        ?>
                                    <div class="col-12">
                                        <div class="">
                                            <div class="row x-gap-20 y-gap-30">
                                                <div class="col-md-auto">
    
                                                    <div class="cardImage ratio ratio-1:1 w-200 md:w-1/1 rounded-4">
                                                        <div class="cardImage__content">
    
                                                            <img class="rounded-4 col-12" src="../../../public/img/tours/<?php echo $e['tour_image_url'] ?>"
                                                                alt="image">
    
    
                                                        </div>
    
                                                        
                                                        
    
    
                                                    </div>
    
                                                </div>
    
                                                <div class="col-md">
                                                    <h3 class="text-18 lh-14 fw-500"><?php echo $e['tour_name'] ?></h3>
    
                                                    <!-- <div class="d-flex x-gap-5 items-center pt-10">
    
                                                        <i class="icon-star text-10 text-yellow-1"></i>
    
                                                        <i class="icon-star text-10 text-yellow-1"></i>
    
                                                        <i class="icon-star text-10 text-yellow-1"></i>
    
                                                        <i class="icon-star text-10 text-yellow-1"></i>
    
                                                        <i class="icon-star text-10 text-yellow-1"></i>
    
                                                    </div> -->
    
                                                    
                                                <div class="row x-gap-10 y-gap-10 items-center pt-20">
                                                        <div class="col-auto">
                                                            <?php if ($b['status_id'] == 5) { ?>
                                                    <span
                                                        class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-red-3 text-red-2">
                                                        <?php echo $b['booktour_status']; ?>
                                                    </span>
                                                <?php }
                                                else if ($b['status_id'] == 1) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-light-1 text-light-2">
                                                        <?php echo $b['booktour_status']; ?>
                                                        </span>
                                                <?php }
                                                else if ($b['status_id'] == 4) { ?>
                                                            <span
                                                                class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-yellow-4 text-yellow-3">
                                                        <?php echo $b['booktour_status']; ?>
                                                            </span>
                                                <?php }else if ($b['status_id'] == 2) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-blue-1-05 text-blue-1">
                                                        <?php echo $b['booktour_status']; ?>
                                                        </span><?php }
                                                else if ($b['status_id'] == 3) { ?>
                                                        <span
                                                            class="rounded-100 py-4 px-10 text-center text-14 fw-500 bg-success-2 text-light-2   ">
                                                        <?php echo $b['booktour_status']; ?>
                                                        </span> <?php }?>
                                                            </div>
                                                
                                                
                                                        </div>  
                                                    
                                                        </div>
    
                                                        <div class="col-md-auto text-right md:text-left">
                                                            <div class="d-flex flex-column justify-between h-full">
                                                                <!-- <div
                                                            class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                                                            <div class="col-auto">
                                                                <div class="text-14 lh-14 fw-500">Exceptional</div>
                                                                <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div
                                                                    class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">
                                                                    4.8</div>
                                                            </div>
                                                        </div> -->
    
                                                                <div class="pt-24">
                                                                    
                                                                    <b>Tổng giá:</b>
                                                        <span class=" text-center text-14 fw-500 text-red-2">
                                                    <?php echo number_format($b['total'], 0, ',', '.') . 'VND'; ?>
                                                                            </span>
                                                                    <a
                            href="../../../index.php?controller=info&action=bookinginfo&idb=<?php echo $b['id'] ?>"
                                                                        class="button -md -dark-1 bg-blue-1 text-white mt-24">
                                                                        Xem chi tiết
                                                                        <div class="icon-arrow-top-right ml-15"></div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    <?php }
                } ?>
                                    
    
                                </div>
                            </div>
    
                            
    
                        
    
                            
    
                        
    
                        </div>
                    </div>
    
                    <!-- <div class="pt-30">
                        <div class="row justify-between">
                            <div class="col-auto">
                                <button class="button -blue-1 size-40 rounded-full border-light">
                                    <i class="icon-chevron-left text-12"></i>
                                </button>
                            </div>
    
                            <div class="col-auto">
                                <div class="row x-gap-20 y-gap-20 items-center">
    
                                    <div class="col-auto">
    
                                        <div class="size-40 flex-center rounded-full">1</div>
    
                                    </div>
    
                                    <div class="col-auto">
    
                                        <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>
    
                                    </div>
    
                                    <div class="col-auto">
    
                                        <div class="size-40 flex-center rounded-full">3</div>
    
                                    </div>
    
                                    <div class="col-auto">
    
                                        <div class="size-40 flex-center rounded-full bg-light-2">4</div>
    
                                    </div>
    
                                    <div class="col-auto">
    
                                        <div class="size-40 flex-center rounded-full">5</div>
    
                                    </div>
    
                                    <div class="col-auto">
    
                                        <div class="size-40 flex-center rounded-full">...</div>
    
                                    </div>
    
                                    <div class="col-auto">
    
                                        <div class="size-40 flex-center rounded-full">20</div>
    
                                    </div>
    
                                </div>
                            </div>
    
                            <div class="col-auto">
                                <button class="button -blue-1 size-40 rounded-full border-light">
                                    <i class="icon-chevron-right text-12"></i>
                                </button>
                            </div>
                        </div>
                    </div> -->
                </div>
    
    
                <footer class="footer -dashboard mt-60">
                    <div class="footer__row row y-gap-10 items-center justify-between">
                        <div class="col-auto">
                            <div class="row y-gap-20 items-center">
                                <div class="col-auto">
                                    <div class="text-14 lh-14 mr-30">© 2022 GoTrip LLC All rights reserved.</div>
                                </div>
    
                                <div class="col-auto">
                                    <div class="row x-gap-20 y-gap-10 items-center text-14">
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Privacy</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Terms</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-13 lh-1">Site Map</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-auto">
                            <div class="d-flex x-gap-5 y-gap-5 items-center">
                                <button class="text-14 fw-500 underline">English (US)</button>
                                <button class="text-14 fw-500 underline">USD</button>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
        <!-- <script>
$(document).ready(function(){
          

            // Hàm để tải thêm comment
            

            // Xử lý sự kiện khi nhấp vào nút "Hiển thị thêm"
            $('#add').on('click', function() {
                
    
          $(this).hide();
          $('#remove').show();
          
            });

            $('#remove').on('click', function() {
                
        
            $(this).hide();
              $('#add').show();
            });
        });
</script> -->

<?php
include("/DA/content/views/shared/footer.php");
?>