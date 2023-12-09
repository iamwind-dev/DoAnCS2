<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">


<!-- Mirrored from creativelayers.net/themes/gotrip-html/booking-pages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 12:12:40 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../public/css/vendors.css">
    <link rel="stylesheet" href="../../../public/css/main.css">
    <style>
        .hidden {
            display: none;
        }
    </style>

    <title>GoTrip</title>
</head>

<body>

    <main>
        <?php //include('/DA/content/views/shared/headerhome2.php') ?>
        <?php
        // session_start();
        
        // if (isset($_SESSION['idkh'])) {
        //     include("headerhome2.php");
        // } else {
        //     header("location: login.php");
        // }
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
                                <h2 class="text-22 fw-500 mt-40 md:mt-24">Let us know who you are</h2>
                                <div class="col-12">
                                    <form id="myform" action="../../../index.php?controller=booking&amp;action=final&idt=<?php echo $_GET['idt'] ?>&idks=<?php echo $_GET['idks'] ?>" method="post"
                                enctype="multipart/form-data">
                                    <div class="form-input ">
                                        
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
                                                By proceeding with this booking, I agree to GoTrip Terms of Use and
                                                Privacy Policy.

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
                                        <div class="d-flex x-gap-5 pb-10">

                                            <i class="icon-star text-yellow-1 text-10"></i>

                                            <i class="icon-star text-yellow-1 text-10"></i>

                                            <i class="icon-star text-yellow-1 text-10"></i>

                                            <i class="icon-star text-yellow-1 text-10"></i>

                                            <i class="icon-star text-yellow-1 text-10"></i>

                                        </div>
                            
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

                                            <div class="col-auto">
                                                <div class="text-14">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top-light mt-30 mb-20"></div>

                                <div class="row y-gap-20 justify-between">
                                    <div class="col-auto">
                                        <div class="text-15">Check-in</div>
                                        <div class="fw-500"><?php echo $e['tour_start_date']; ?></div>
                                        
                                    </div>

                                    <div class="col-auto md:d-none">
                                        <div class="h-full w-1 bg-border"></div>
                                    </div>

                                    <div class="col-auto text-right md:text-left">
                                        <div class="text-15">Check-out</div>
                                        <div class="fw-500"><?php echo $e['tour_end_date']; ?></div>
                                        
                                    </div>
                                </div>

                                <div class="border-top-light mt-30 mb-20"></div>

                                <div class="">
                                    <div class="text-15">Total length of stay:</div>
                                    <div class="fw-500"><?php echo $e['tour_schedule']; ?></div>
                                    
                                </div>

                                <div class="border-top-light mt-30 mb-20"></div>

                                <div class="row y-gap-20 justify-between items-center">
                                    <div class="col-auto">
                                        <div class="text-15">You selected:</div>
                                        <?php foreach ($data1 as $e1) { ?>
                                        <div class="fw-500"><?php echo $e1['hotel_name'] ?></div>
                                        <?php } ?>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15">1 room, 4 adult</div>
                                    </div>
                                </div>
                            </div>

                            <div class="px-30 py-30 border-light rounded-4 mt-30">
                                <div class="text-20 fw-500 mb-20">Your price summary</div>

                                

                                <div class="px-20 py-20 bg-blue-2 rounded-4 mt-20">
                                    <div class="row y-gap-5 justify-between">
                                        <div class="col-auto">
                                            <div class="text-18 lh-13 fw-500">Price</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-18 lh-13 fw-500"><?php echo $e['tour_price']; ?></div>
                                            
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

        <section class="layout-pt-md layout-pb-lg">
            <div class="container">
                <div class="row justify-center text-center">
                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title">Why Choose Us</h2>
                            <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row y-gap-40 justify-between pt-50">

                    <div class="col-lg-3 col-sm-6">

                        <div class="featureIcon -type-1 ">
                            <div class="d-flex justify-center">
                                <img src="#" data-src="img/featureIcons/1/1.svg" alt="image" class="js-lazy">
                            </div>

                            <div class="text-center mt-30">
                                <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <div class="featureIcon -type-1 ">
                            <div class="d-flex justify-center">
                                <img src="#" data-src="img/featureIcons/1/2.svg" alt="image" class="js-lazy">
                            </div>

                            <div class="text-center mt-30">
                                <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <div class="featureIcon -type-1 ">
                            <div class="d-flex justify-center">
                                <img src="#" data-src="img/featureIcons/1/3.svg" alt="image" class="js-lazy">
                            </div>

                            <div class="text-center mt-30">
                                <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
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