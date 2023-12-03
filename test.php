<!DOCTYPE html>
<html>

<head>
    <title>Truyền 2 giá trị từ select qua POST</title>
</head>

<body>

    <form id="myForm" action="process.php" method="post">
        <label for="options1">Chọn một trong hai tùy chọn:</label>
        <select id="options1" name="selectedOptions1">
            <option value="value1-valueA">Tùy chọn 1 - Giá trị A</option>
            <option value="value2-valueB">Tùy chọn 2 - Giá trị B</option>
        </select>

        <label for="options2">Chọn một trong hai tùy chọn khác:</label>
        <select id="options2" name="selectedOptions2">
            <option value="value3-valueC">Tùy chọn 3 - Giá trị C</option>
            <option value="value4-valueD">Tùy chọn 4 - Giá trị D</option>
        </select>

        <input type="text" id="hiddenField1" name="value1">
        <input type="text" id="hiddenField2" name="value2">
        <input type="text" id="hiddenField3" name="value3">
        <input type="text" id="hiddenField4" name="value4">

        <button type="submit">Gửi</button>
    </form>

    <script>
        function updateHiddenFields() {
            var selectElement1 = document.getElementById('options1');
            var selectElement2 = document.getElementById('options2');

            var hiddenField1 = document.getElementById('hiddenField1');
            var hiddenField2 = document.getElementById('hiddenField2');
            var hiddenField3 = document.getElementById('hiddenField3');
            var hiddenField4 = document.getElementById('hiddenField4');

            // Lấy giá trị của tùy chọn 1 và cập nhật trường ẩn tương ứng
            var selectedValue1 = selectElement1.options[selectElement1.selectedIndex].value;
            var parts1 = selectedValue1.split('-');
            hiddenField1.value = parts1[0];
            hiddenField2.value = parts1[1];

            // Lấy giá trị của tùy chọn 2 và cập nhật trường ẩn tương ứng
            var selectedValue2 = selectElement2.options[selectElement2.selectedIndex].value;
            var parts2 = selectedValue2.split('-');
            hiddenField3.value = parts2[0];
            hiddenField4.value = parts2[1];
        }

        // Gọi hàm khi trang được tải lần đầu
        updateHiddenFields();

        // Thêm sự kiện để lắng nghe sự thay đổi trong select
        var selectElements = document.querySelectorAll('select');
        selectElements.forEach(function (selectElement) {
            selectElement.addEventListener('change', function () {
                updateHiddenFields();
            });
        });
    </script>

</body>

</html>