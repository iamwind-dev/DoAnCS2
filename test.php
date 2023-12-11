<!DOCTYPE html>
<html>

<head>
    <title>Lấy dữ liệu từ thẻ a</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/vendor.css">
</head>

<body>
    <div class="dropdown js-dropdown js-actions-1-active">
        <div class="dropdown__button d-flex items-center rounded-4 text-blue-1 bg-blue-1-05 text-14 px-15 py-5"
            data-el-toggle=".js-actions-1-toggle"
            data-el-toggle-active=".js-actions-1-active">
            <span class="js-dropdown-title">Actions</span>
            <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
        </div>
    
        <div class="toggle-element -dropdown-2 js-click-dropdown js-actions-1-toggle">
            <div class="text-14 fw-500 js-dropdown-list">
    
                <div><a href="#" class="d-block js-dropdown-link">Tiếp nhận</a></div>
    
                <div><a href="#" class="d-block js-dropdown-link">Đã xác nhận</a></div>
    
                <div><a href="#" class="d-block js-dropdown-link">Đã thanh toán</a></div>
    
                <div><a href="#" class="d-block js-dropdown-link">Đã kết thúc</a></div>
                <div><a href="#" class="d-block js-dropdown-link">Đã Huỷ</a></div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function () {
            $(".js-dropdown-link").click(function (event) {
                event.preventDefault(); // Prevent the default action of the link

                var linkText = $(this).text().trim(); // Extract text content from the clicked link
                var dataToSend = 0; // Default value

                switch (linkText) {
                    case 'Tiếp nhận':
                        dataToSend = 1;
                        break;
                    case 'Đã xác nhận':
                        dataToSend = 2;
                        break;
                    case 'Đã thanh toán':
                        dataToSend = 3;
                        break;
                    case 'Đã kết thúc':
                        dataToSend = 4;
                        break;
                    case 'Đã Huỷ':
                        dataToSend = 5;
                        break;
                    default:
                        dataToSend = 0;
                }

                $.ajax({
                    method: "POST",
                    url: '/content/controllers/comment/postcomment.php',
                    data: {
                        value: dataToSend // Send the determined value
                        // Add more data if needed
                    },
                })
                    .done(function (data) {
                        // Handle the AJAX response if needed
                        console.log("Data sent: ", dataToSend);
                    });
            });
        });
    </script>
    <script src='public/js/main.js'></script>
    <script src='public/js/vendors.js'></script>
</body>

</html>