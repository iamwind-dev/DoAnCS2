<?php
include("/DA/content/views/shared/headerhome.php");
?>

<script>
    window.addEventListener('beforeunload', function (e) {
    // Ngăn chặn trình duyệt tải lại trang
    e.preventDefault();
    // Thông báo cho người dùng trước khi họ rời khỏi trang
    e.returnValue = '';
});

</script>
        <section class="pt-40">
            <div class="container">
                <div class="row x-gap-40 y-gap-30 items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div id="step1" class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">
                                1
                            </div>
                            <div class="text-18 fw-500 ml-10">Thông tin</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="w-full h-1 bg-border"></div>
                    </div>

                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div id="step2" class="size-40 rounded-full flex-center bg-blue-1"><i class="icon-check text-16 text-white"></i>
                            </div>
                            <div class="text-18 fw-500 ml-10">Hoàn Thành</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-40 layout-pb-md">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div id="hoa-don">
                            <div class="d-flex flex-column items-center mt-60 lg:md-40 sm:mt-24">
                                <div class="size-80 flex-center rounded-full bg-dark-3">
                                    <i class="icon-check text-30 text-white"></i>
                                </div>

                                <div class="text-25 lh-1 fw-600 mt-20">Đặt tour thành công!
                                </div>
                                <div class="text-15 text-light-1 mt-10"></div>
                            </div>

                            <div class="border-type-1 rounded-8 px-50 py-35 mt-40">
                                <div class="row">

                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-15 lh-12">Mã đơn</div>
                                        <div class="text-15 lh-12 fw-500 text-blue-1 mt-10"><?php echo $idb['last_insert_id()'] ?></div>
                                    </div>
                        <?php foreach ($data2 as $a) { ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-15 lh-12">Ngày</div>
                                        <div class="text-15 lh-12 fw-500 text-blue-1 mt-10"><?php echo date("d-m-Y") ?></div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-15 lh-12">Tổng cộng</div>
                                        <div class="text-15 lh-12 fw-500 text-blue-1 mt-10"><?php echo number_format($_SESSION['total'], 0, ',', '.') . ' VND'; ?></div>
                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-15 lh-12">Phương thức thanh toán</div>
                                        <div class="text-15 lh-12 fw-500 text-blue-1 mt-10">Thanh toán trực tiếp</div>
                                    </div>

                                </div>
                            </div>

                            <div class="border-light rounded-8 px-50 py-40 mt-40">
                                <h4 class="text-20 fw-500 mb-30">Thông tin Khách hàng</h4>

                                <div class="row y-gap-10">

                                    <div class="col-12">
                                        <div class="d-flex justify-between ">
                                            <div class="text-15 lh-16">Tên Khách Hàng:</div>
                                            <div id="hotenn" class="text-15 lh-16 fw-500 text-blue-1"><?php echo $_POST['hoten'] ?></div>
                                        </div>
                                    </div>

                                    

                                    <div class="col-12">
                                        <div class="d-flex justify-between border-top-light pt-10">
                                            <div class="text-15 lh-16">Email</div>
                                            <div class="text-15 lh-16 fw-500 text-blue-1"><?php echo $_POST['email'] ?></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex justify-between border-top-light pt-10">
                                            <div class="text-15 lh-16">SĐT</div>
                                            <div class="text-15 lh-16 fw-500 text-blue-1"><?php echo $_POST['sdt'] ?></div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex justify-between border-top-light pt-10">
                                            <div class="text-15 lh-16">Địa chỉ</div>
                                            <div class="text-15 lh-16 fw-500 text-blue-1"><?php echo $_POST['diachi'] ?></div>
                                        </div>
                                    </div>

                                    

                                    

                                    <div class="col-12">
                                        <div class="d-flex justify-between border-top-light pt-10">
                                            <div class="text-15 lh-16">Nước</div>
                                            <div class="text-15 lh-16 fw-500 text-blue-1">Việt Nam</div>
                                        </div>
                                    </div>

                                    
                
                                </div>
                            </div>
                        </div>



                    </div>


                    <div class="col-xl-5 col-lg-4">
                        <div class="ml-80 lg:ml-40 md:ml-0">
                            <div class="px-30 py-30 border-light rounded-4">
                                <div class="text-20 fw-500 mb-30">Thông tin booking của bạn</div>
                        <?php foreach ($data as $e) { ?>
                                        <div class="row x-gap-15 y-gap-20">
                                            <div class="col-auto">
                                                <img src="../../../public/img/tours/<?php echo $e['tour_image_url'] ?>" alt="image"
                                                    class="size-140 rounded-4 object-cover">
                                            </div>
                    
                                            <div class="col">
                                                            <!-- <div class="d-flex x-gap-5 pb-10">
                    
                                                                <i class="icon-star text-yellow-1 text-10"></i>
                    
                                                                <i class="icon-star text-yellow-1 text-10"></i>
                    
                                                                <i class="icon-star text-yellow-1 text-10"></i>
                    
                                                                <i class="icon-star text-yellow-1 text-10"></i>
                    
                                                                <i class="icon-star text-yellow-1 text-10"></i>
                    
                                                            </div> -->
                    
                                            <div class="lh-17 fw-500">
                                                <?php echo $e['tour_name']; ?>
                                            </div>
                                            <div class="text-14 lh-15 mt-5">
                                                <?php echo $e['tour_location_name']; ?>
                                            </div>
                    
                                            <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                                <div class="col-auto">
                                                    <div class="d-flex items-center">
                                                        <div class="size-30 flex-center bg-blue-1 rounded-4">
                                                            <div class="text-12 fw-600 text-white">4.8</div>
                                                        </div>
                    
                                                        <div class="text-14 fw-500 ml-10">Exceptional</div>
                                                    </div>
                                                </div>
                    
                                                <div class="col-auto">
                                                                    <div class="text-14">3,014 reviews</div>
                                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="border-top-light mt-30 mb-20"></div>
                    
                                    <div class="row y-gap-20 justify-between">
                                        <div class="col-auto">
                                            <div class="text-15">Ngày đi</div>
                                            <div class="fw-500">
                                                <?php echo $e['tour_start_date']; ?>
                                            </div>
                    
                                        </div>
                    
                                        <div class="col-auto md:d-none">
                                            <div class="h-full w-1 bg-border"></div>
                                        </div>
                    
                                        <div class="col-auto text-right md:text-left">
                                            <div class="text-15">Ngày về</div>
                                            <div class="fw-500">
                                                <?php echo $e['tour_end_date']; ?>
                                            </div>
                    
                                        </div>
                                    </div>
                    
                                    <div class="border-top-light mt-30 mb-20"></div>
                    
                                    <div class="">
                                        <div class="text-15">Lịch Trình:</div>
                                        <div class="fw-500">
                                            <?php echo $e['tour_schedule']; ?>
                                        </div>
                    
                                    </div>
                                    <?php if ($idks!=NULL) { ?>
                                        <div class="border-top-light mt-30 mb-20"></div>
                    
                                        <div class="row y-gap-20 justify-between items-center">
                                            <div class="col-auto">
                                                <div class="text-15">Bạn đã chọn:</div>
                                                <?php foreach ($data1 as $e1) { ?>
                                                    <div class="fw-500">
                                                        <?php echo $e1['hotel_name'] ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                    
                                            <div class="col-auto">
                                                <div class="text-15">
                                                    <?php echo $_SESSION['sophong'] ?> phòng,
                                                    <?php echo $_SESSION['songuoi'] ?> người
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                    
                                <div class="px-30 py-30 border-light rounded-4 mt-30">
                                    <div class="text-20 fw-500 mb-20">Tổng tiền</div>
                    
                    
                    
                                    <div class="px-20 py-20 bg-blue-2 rounded-4 mt-20">
                                        <div class="row y-gap-5 justify-between">
                                            <div class="col-auto">
                                                <div class="text-18 lh-13 fw-500">Giá</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-18 lh-13 fw-500">
                                                    <?php echo number_format($_SESSION  ['total'], 0, ',', '.') . ' VND'; ?>
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
            </section>

        <?php } ?>


        <?php include('/DA/content/views/shared/footer.php') ?>

    </main>



    </div>

    <!-- JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.1/dist/index.min.js"></script>

    <script src="../../../public/js/vendors.js"></script>
    <script src="../../../public/js/main.js"></script>
    <script src="../../../public/js/main2.js"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/gotrip-html/booking-pages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 12:12:40 GMT -->

</html>