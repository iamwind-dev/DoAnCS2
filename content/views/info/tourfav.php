<?php
include("content/views/shared/headerhome.php");
?>
    <div class="dashboard -is-sidebar-open" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    
    
        <div class="dashboard__main">
            <div class="dashboard__content bg-light-2">
                <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
                    <div class="col-auto">
    
                        <h1 class="text-30 lh-14 fw-600">Danh sách yêu thích</h1>
                        
    
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
    
                                                        <div class="cardImage__wishlist">
                                                            <a href="index.php?controller=info&action=removetourfav&idt=<?php echo $e['id'] ?>"
                                                                class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                                <i class="icon-trash text-12"></i>
                                                            </a>
                                                            
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
                                                            <p class="text-14">
                                                                <?php echo $e['tour_location_name'] ?>
                                                                
                                                            </p>
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
                                                            <div class="fw-500">Từ </div>
                                                            <span class="fw-500 text-blue-1"><?php echo number_format($e['tour_price'], 0, ',', '.') . 'VND'; ?></span> 
                                                            <a
                    href="../../../index.php?controller=tour&action=index&id=<?php echo $e['id'] ?>"
                                                                        class="button -md -dark-1 bg-blue-1 text-white mt-24">
                                                                        Xem chi tiết
                                                                        
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
include("content/views/shared/footer.php");
?>