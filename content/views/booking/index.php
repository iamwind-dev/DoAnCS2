<?php
include("/DA/content/views/shared/headerhome.php");
?>



        <section class="pt-40">
            <div class="container">
                <div class="row x-gap-40 y-gap-30 items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div id="step1" class="size-40 rounded-full flex-center bg-blue-1">
                                <i class="icon-check text-16 text-white"></i>
                            </div>
                            <div class="text-18 fw-500 ml-10">Thông tin</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="w-full h-1 bg-border"></div>
                    </div>

                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div id="step2" class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">2
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
                        <div id="nhap-thong-tin">
                            <div class="row x-gap-20 y-gap-20 pt-20">
                                <h2 class="text-22 fw-500 mt-40 md:mt-24">Hãy cho WinKTravel biết bạn là ai</h2>
                                <div class="col-12">
                                    <form id="myform" action="../../../index.php?controller=booking&amp;action=final" method="post"
                                enctype="multipart/form-data">
                                    <div class="form-input ">
                                        <input type="text" name="idt" value="<?php echo $idt ?>" hidden>
                                        <?php if (!empty($_POST['idks'])) { ?>
                                        <input type="text" name="idks" value="<?php echo $idks ?>" 
                                        hidden>
                                        <?php }else{ ?>
                                            <input type="text" name="idks" value="" 
                                        hidden>
                                        <?php } ?>
                                        <input type="text" name="hoten" required>
                                        <label class="lh-1 text-16 text-light-1">Họ và Tên</label>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-input ">
                                        <input type="text" name="email" required>
                                        <label class="lh-1 text-16 text-light-1">Email</label>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-input ">
                                        <input type="text" name="sdt" required>
                                        <label class="lh-1 text-16 text-light-1">SĐT</label>
                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-input ">
                                        <input type="text" name="diachi" required>
                                        <label class="lh-1 text-16 text-light-1">Địa Chỉ</label>
                                    </div>

                                </div>


                                <div class="col-12">

                                    <div class="form-input ">
                                        <textarea required name="ghichu" rows="3"></textarea>
                                        <label class="lh-1 text-16 text-light-1">Ghi chú</label>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="row y-gap-20 items-center justify-between">
                                        <div class="col-auto">
                                            <div class="text-14 text-light-1">
                                                Bằng việc tiếp tục, tôi đồng ý với các điều khoản và chính sách quyền riêng tư của WinKTravel.

                                            </div>
                                        </div>

                                        <div class="col-auto">

                                            <!-- <a href="#" class="button h-60 px-24 -dark-1 bg-blue-1 text-white">
                                                Next: Final details <div class="icon-arrow-top-right ml-15"></div>
                                            </a> -->
                                            <button type="submit" class="button h-60 px-24 -dark-1 bg-blue-1 text-white">Tiếp Tục</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                            
                                        <div class="lh-17 fw-500"><?php echo $e['tour_name']; ?></div>
                                        <div class="text-14 lh-15 mt-5"><?php echo $e['tour_location_name']; ?></div>

                                        <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                            <div class="col-auto">
                                                <div class="d-flex items-center">
                                                    <div class="size-30 flex-center bg-blue-1 rounded-4">
                                                        <div class="text-12 fw-600 text-white">4.8</div>
                                                    </div>

                                                    <div class="text-14 fw-500 ml-10">Exceptional</div> 
                                                </div>
                                            </div>

                                            <!-- <div class="col-auto">
                                                <div class="text-14">3,014 reviews</div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top-light mt-30 mb-20"></div>

                                <div class="row y-gap-20 justify-between">
                                    <div class="col-auto">
                                        <div class="text-15">Ngày đi</div>
                                        <div class="fw-500"><?php echo $e['tour_start_date']; ?></div>
                                        
                                    </div>

                                    <div class="col-auto md:d-none">
                                        <div class="h-full w-1 bg-border"></div>
                                    </div>

                                    <div class="col-auto text-right md:text-left">
                                        <div class="text-15">Ngày về</div>
                                        <div class="fw-500"><?php echo $e['tour_end_date']; ?></div>
                                        
                                    </div>
                                </div>

                                <div class="border-top-light mt-30 mb-20"></div>

                                <div class="">
                                    <div class="text-15">Lịch Trình:</div>
                                    <div class="fw-500"><?php echo $e['tour_schedule']; ?></div>
                                    
                                </div>
                            <?php if (!empty($_POST['idks'])) { ?>
                                <div class="border-top-light mt-30 mb-20"></div>
                                
                                <div class="row y-gap-20 justify-between items-center">
                                    <div class="col-auto">
                                        <div class="text-15">Bạn đã chọn:</div>
                                        <?php foreach ($data1 as $e1) { ?>
                                        <div class="fw-500"><?php echo $e1['hotel_name'] ?></div>
                                        <?php } ?>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15"><?php echo $_POST['sophong'] ?> phòng, <?php echo $_POST['songuoi'] ?> người</div>
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
                                            <div class="text-18 lh-13 fw-500"><?php echo number_format($total, 0, ',', '.') . ' VND'; ?></div>
                                            
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