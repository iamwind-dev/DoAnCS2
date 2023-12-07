<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="../../../public/css/main.css">
    <link rel="stylesheet" href="../../../public/css/vendors.css">
</head>

<body>
    <div class="preloader js-preloader">
    <div class="preloader__wrap">
      <div class="preloader__icon">
        <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1_41)">
            <path d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z" fill="#3554D1" />
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
<?php if($log === false){
    echo "<script>alert('Sai thông tin đăng nhập')</script>";
} ?>
    <section class="layout-pt-lg layout-pb-lg bg-blue-2">
        <div class="container">
            <div class="row justify-center">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                        <form action='admin.php?controller=home&action=login' method='POST'>
                            <div class="row y-gap-20">
                                <div class="col-12">
                                    <h1 class="text-22 fw-500">Chào mừng trở lại</h1>
                                    <p class="mt-10">Bạn chưa có tài khoản? <a href="register.php"
                                            class="text-blue-1">Đăng kí ngay</a></p>
                                </div>

                                <div class="col-12">

                                    <div class="form-input ">
                                        <input type="text" name='email' required>
                                        <label class="lh-1 text-14 text-light-1">E-mail Or Username...</label>
                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="form-input ">
                                        <input type="password" name='password' required>
                                        <label class="lh-1 text-14 text-light-1">Password</label>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <a href="quenmatkhau.php" class="text-14 fw-500 text-blue-1 underline">Quên mật
                                        khẩu?</a>
                                </div>

                                <div class="col-12">
                                    <input type='submit' class="button py-20 -dark-1 bg-blue-1 text-white"
                                        name="dangnhap" value='Đăng nhập' />


                                </div>
                            </div>
                        </form>
                        <div class="row y-gap-20 pt-30">
                            

                            <div class="col-12">
                                <div class="text-center px-30">Bằng cách tạo tài khoản, bạn đồng ý với Điều khoản dịch
                                    vụ và Tuyên bố về quyền riêng tư của chúng tôi.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"
    integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
<script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.1/dist/index.min.js"></script>

<script src="/public/js/vendors.js"></script>
<script src="/public/js/main.js"></script>
<script src="/public/js/main2.js"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/gotrip-html/db-vendor-hotels.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 12:13:28 GMT -->

</html>