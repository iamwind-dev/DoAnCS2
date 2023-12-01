<!DOCTYPE html>
<html>
<head>
    <title>Xác nhận xoá dữ liệu</title>
    <!-- CSS cho modal -->
    <style>
        /* CSS cho modal */
        .modal {
            display: none; /* Ẩn modal mặc định */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .modal-content button {
            padding: 10px 15px;
            margin: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
// Kiểm tra xem người dùng đã nhấn nút xóa chưa
if (isset($_POST['delete_data'])) {
    // Thực hiện xóa dữ liệu từ cơ sở dữ liệu ở đây
    // Đây là ví dụ giả sử xóa thành công
    $deleted = true;
}
?>

<h2>Xác nhận xoá dữ liệu</h2>

<!-- Form để xác nhận xóa dữ liệu -->
<form method="post">
    <input type="submit" name="delete_data" value="Xoá dữ liệu" onclick="return confirmDelete()">
</form>

<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <p id="successMessage" style="display:none;">
        <?php
        // Kiểm tra nếu đã xóa thành công, hiển thị thông báo
        if (isset($deleted) && $deleted) {
            echo "Dữ liệu đã được xoá thành công!";
        }
        ?>
        </p>
        <button onclick="closeModal()">Đóng</button>
    </div>
</div>

<script>
    // Lấy modal và thông báo thành công
    var modal = document.getElementById('myModal');
    var successMessage = document.getElementById('successMessage');

    // Hàm mở modal và hiển thị thông báo thành công
    function openModal() {
        modal.style.display = 'block';
        successMessage.style.display = 'block';
        // Tự động đóng modal sau 5 giây
        setTimeout(function() {
            closeModal();
        }, 5000);
    }

    // Hàm đóng modal
    function closeModal() {
        modal.style.display = 'none';
        successMessage.style.display = 'none';
    }

    // Hàm xác nhận xoá dữ liệu
    function confirmDelete() {
        var result = confirm("Bạn có chắc chắn muốn xóa dữ liệu không?");
        if (result) {
            // Nếu người dùng đồng ý xóa, mở modal sau khi submit form
            openModal();
            return true; // Cho phép submit form
        } else {
            return false; // Ngăn không cho submit form
        }
    }
</script>

</body>
</html>
