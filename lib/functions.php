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

function timeAgo($timestamp)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $current_time = date('Y-m-d H:i:s'); // Thay đổi từ time() sang date('Y-m-d H:i:s')
    $time_difference = strtotime($current_time) - $timestamp; // Chuyển đổi $current_time sang timestamp và tính khoảng cách thời gian

    $seconds = $time_difference;
    $minutes = round($seconds / 60);
    $hours = round($seconds / 3600);
    $days = round($seconds / 86400);
    $weeks = round($seconds / 604800);
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);

    if ($seconds <= 60)
        return "Gần đây";
    else if ($minutes <= 60) {
        if ($minutes == 1)
            return "1 phút trước";
        else
            return "$minutes phút trước";
    }
    else if ($hours <= 24) {
        if ($hours == 1)
            return "1 giờ trước";
        else
            return "$hours giờ trước";
    }
    else if ($days <= 7) {
        if ($days == 1)
            return "Hôm qua";
        else
            return "$days ngày trước";
    }
    else if ($weeks <= 4.3) //4.3 == 52/12
    {
        if ($weeks == 1)
            return "1 tuần trước";
        else
            return "$weeks tuần trước";
    }
    else if ($months <= 12) {
        if ($months == 1)
            return "1 tháng trước";
        else
            return "$months tháng trước";
    }
    else if ($years <= 1) {
        if ($years == 1)
            return "1 năm trước";
        else
            return "$years năm trước";
    }
}