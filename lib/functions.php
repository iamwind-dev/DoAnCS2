<?php
//upload ảnh
function upload($folder)
{
    $target_dir = "/DA/public/img/";
    $target_file = $target_dir . $folder . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
}

//Hàm mysqli_real_escape_string($conn, $str) trong PHP được sử dụng để bảo vệ dữ liệu trước khi chèn vào cơ sở dữ liệu MySQL để ngăn chặn các cuộc tấn công SQL injection.
function escape($str) {
    global $conn;
    return mysqli_real_escape_string($conn, $str);
}

