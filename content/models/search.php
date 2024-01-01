<?php
include('lib/functions.php');
function search($start, $limit)
{
    global $conn;

    $dia_diem = isset($_POST['diadiem']) ? $_POST['diadiem'] : '';
    $thoi_gian_tour = isset($_POST['ngay']) ? $_POST['ngay'] : '';
    $muc_gia = isset($_POST['gia']) ? $_POST['gia'] : '';

    $sql = "SELECT * FROM tour WHERE tour_status_id <> 2";

    if (!empty($dia_diem)) {
        $dia_diemm = $dia_diem; // Chuẩn hóa từ khóa tìm kiếm
         //$sql .= " AND tour_location_name COLLATE utf8mb4_unicode_ci LIKE '%$dia_diem%'";
        $sql .= " AND tour_name COLLATE utf8mb4_unicode_ci LIKE '%$dia_diem%'";
    }

    if (!empty($muc_gia)) {
        $gia = explode(" - ", $muc_gia);
        $gia1 = intval($gia[0]);
        $gia2 = intval($gia[1]);
        $sql .= " AND (tour_price BETWEEN $gia1 AND $gia2)";
    }

    if (!empty($thoi_gian_tour)) {
        $sql .= " AND ('$thoi_gian_tour' BETWEEN tour_start_date AND tour_end_date)";
    }

    $sql .= " LIMIT $start, $limit";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}

function searchtotal()
{
    global $conn;

    $dia_diem = isset($_POST['diadiem']) ? $_POST['diadiem'] : '';
    $thoi_gian_tour = isset($_POST['ngay']) ? $_POST['ngay'] : '';
    $muc_gia = isset($_POST['gia']) ? $_POST['gia'] : '';

    $sql = "SELECT COUNT(*) as total FROM tour WHERE tour_status_id <> 2 ";

    if (!empty($dia_diem)) {
        //$sql .= " AND tour_location_name LIKE '%$dia_diem%'";
        $sql .= " AND tour_name LIKE '%$dia_diem%'";
    }

    if (!empty($muc_gia)) {
        $gia = explode(" - ", $muc_gia);
        $gia1 = intval($gia[0]);
        $gia2 = intval($gia[1]);
        $sql .= " AND (tour_price BETWEEN $gia1 AND $gia2)";
    }

    if (!empty($thoi_gian_tour)) {
        $sql .= " AND ('$thoi_gian_tour' BETWEEN tour_start_date AND tour_end_date)";
    }

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    return $row['total'];
}
