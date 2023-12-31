<?php $user = get_a_record('users', $_SESSION['usera']['id']); ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/gotrip-html/db-vendor-hotels.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 12:13:28 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <link rel="stylesheet" href="/public/css/vendors.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="icon" href="../../../public/img/general/logo.ico" type="image/ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Administrator - WinK Travel</title>
</head>

<body data-barba="wrapper">


    <div class="preloader js-preloader">
        <div class="preloader__wrap">
            <div class="preloader__icon">
                <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_41)">
                        <path
                            d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z"
                            fill="#3554D1" />
                    </g>

                    <defs>
                        <clipPath id="clip0_1_41">
                            <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="preloader__title">WinK Travel</div>
    </div>


    <div class="header-margin"></div>
    <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
        <div data-anim="fade" class="header__container px-30 sm:px-20">
            <div class="-left-side">
                <a href="#" class="header-logo" data-x="header-logo" data-x-toggle="is-logo-dark">
                    <img src="/public/img/general/logo1.png" alt="logo icon">
                    <img src="/public/img/general/logo-dark.svg" alt="logo icon">
                </a>
            </div>

            <div class="row justify-between items-center pl-60 lg:pl-20">
                <div class="col-auto">
                    <div class="d-flex items-center">
                        <button data-x-click="dashboard">
                            <i class="icon-menu-2 text-20"></i>
                        </button>


                    </div>
                </div>

                <div class="col-auto">
                    <div class="d-flex items-center">

                        <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                            <div class="mobile-overlay"></div>

                            <div class="header-menu__content">
                                <div class="mobile-bg js-mobile-bg"></div>

                                <div class="menu js-navList">
                                    <ul class="menu__nav text-dark-1 fw-500 -is-active">

                                    </ul>
                                </div>

                                <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                                </div>
                            </div>
                        </div>


                        <div class="row items-center x-gap-5 y-gap-20 pl-20 lg:d-none">
                            
                            <?php foreach ($user as $u) { ?>
                                <div class="col-auto">
                                    <?php echo $u['user_name'] ?>
                                    <span style="margin-left:20px"><b>(
                                            <?php echo $u['user_role'] ?>)
                                        </b></span>

                                </div>
                            </div>
                            <div class="pl-15"> <a href="">
                                    <img src="/public/img/avatars/<?php echo $u['user_avatar'] ?>" alt="image"
                                        class="size-50 rounded-22 object-cover">

                                </a>
                            </div>
                        <?php } ?>
                        <div class="d-none xl:d-flex x-gap-20 items-center pl-20" data-x="header-mobile-icons"
                            data-x-toggle="text-white">
                            <div><button class="d-flex items-center icon-menu text-20"
                                    data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="dashboard -is-sidebar-open" data-x="dashboard" data-x-toggle="-is-sidebar-open">
        <div class="dashboard__sidebar bg-white scroll-bar-1">

            <div class="sidebar -dashboard">

                <div class="sidebar__item ">


                    <a href="/admin.php?controller=dashboard" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="/public/img/dashboard/sidebar/compass.svg" alt="image" class="mr-15">
                        Tổng quan
                    </a>


                </div>

                <div class="sidebar__item ">


                    <a href="/admin.php?controller=booking"
                        class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="/public/img/dashboard/sidebar/booking.svg" alt="image" class="mr-15">
                        Quản lí Booking
                    </a>


                </div>
                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="/public/img/dashboard/sidebar/map.svg" alt="image" class="mr-10">
                                        Quản lí Địa điểm
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="/admin.php?controller=location" class="text-15">Tất cả Địa điểm</a>
                                    </li>

                                    <li>
                                        <a href="/admin.php?controller=location&action=add" class="text-15">Thêm Địa
                                            điểm</a>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
                

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="/public/img/dashboard/sidebar/tour.png" alt="image" class="mr-10">
                                        Quản lí Tour
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="/admin.php?controller=tour" class="text-15">Tất cả Tour</a>
                                    </li>

                                    <li>
                                        <a href="/admin.php?controller=tour&action=add" class="text-15">Thêm Tour</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="/public/img/dashboard/sidebar/hotel.svg" alt="image" class="mr-10">
                                        Quản lí Khách Sạn
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="/admin.php?controller=hotel" class="text-15">Tất cả Khách Sạn</a>
                                    </li>

                                    <li>
                                        <a href="/admin.php?controller=hotel&action=add" class="text-15">Thêm Khách
                                            Sạn</a>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </div>


                </div>





                <div class="sidebar__item ">


                    <a href="/admin.php?controller=comments"
                        class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="/public/img/dashboard/sidebar/comment.png" alt="image" class="mr-15">
                        Quản lí bình luận
                    </a>


                </div>

                <div class="sidebar__item ">


                    <a href="admin.php?controller=user&action=index"
                        class="sidebar__button d-flex items-center text-15 lh-1 fw-500">

                        <img src="/public/img/dashboard/sidebar/user.png" alt="image" class="mr-15">
                        Quản lí Người dùng
                    </a>


                </div>

                <div class="sidebar__item ">


                    <a href="/admin.php?controller=home&action=logout"
                        class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="/public/img/dashboard/sidebar/log-out.svg" alt="image" class="mr-15">
                        Đăng Xuất
                    </a>


                </div>

            </div>

        </div>