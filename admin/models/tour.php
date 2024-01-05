<?php
require_once('lib/config/database.php');




// function showTourID($id)
// {
//     include('connection.php');
//     $sql = "SELECT Tour.*, Location.location_name, Location.location_description
// FROM Tour
// JOIN Location ON Tour.tour_location_id = Location.location_id
// WHERE Tour.tour_id = $id;";
//     $query = mysqli_query($conn, $sql);
//     $data = array();
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $data[] = $row;
//         }
//         mysqli_free_result($query);
//     }
//     return $data;
// }

// function showTour()
// {
//     include('connection.php');
//     $sql = "SELECT Tour.*, Location.location_name, Location.location_description
// FROM Tour
// JOIN Location ON Tour.tour_location_id = Location.location_id";
//     $query = mysqli_query($conn, $sql);
//     $data = array();
//     if (mysqli_num_rows($query) > 0) {
//         while ($row = mysqli_fetch_assoc($query)) {
//             $data[] = $row;
//         }
//         mysqli_free_result($query);
//     }
//     return $data;
// }



function tour_update()
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $currentDateTime = date("Y-m-d H:i:s");
    $trangthai = $_POST['trangthai'];
    $mang = explode('-', $trangthai);
    $idtrangthai = $mang[0];
    $tentrangthai = $mang[1];
    $diadiem = $_POST['diadiem'];
    $mang1 = explode('-', $diadiem);
    $iddiadiem = $mang1[0];
    $tendiadiem = $mang1[1];
    $start = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['batdau'])));
    $end = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['ketthuc'])));

    $id = $_POST['id'];
    //kiểm tra người dùng có thay đổi hình ảnh không
    if (!empty($_FILES['file']['tmp_name'])) {
        $image = $_FILES['file']['name'];
    }
    else {
        $image = $_POST['image'];
    }

    $tentour = $_POST['tentour'];
    $tour = array(
        'tour_name' => $tentour,
        'tour_description' => ($_POST['mota']),
        'tour_introduction' => ($_POST['gioithieu']),
        'tour_journey' => ($_POST['hanhtrinh']),
        'tour_schedule' => ($_POST['lichtrinh']),
        'tour_price' => intval($_POST['gia']),
        
        'tour_vehicle' => $_POST['phuongtien'],
        'tour_starting_point' => ($_POST['diemxp']),
        'tour_location_name' => ($tendiadiem),
        'tour_location_id' => ($iddiadiem),
        'tour_status_id' => ($idtrangthai),
        'tour_status' => ($tentrangthai),
        'tour_image_url' => ($image),
        'tour_start_date' => ($start),
        'tour_end_date' => ($end),
        'tour_duration' => intval($_POST['thoiluong']),
        'tour_edit_date' => $currentDateTime,
    );
    update('tour', $id, $tour);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=tour');
}

function tour_add()
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $currentDateTime = date("Y-m-d H:i:s");
    $trangthai = $_POST['trangthai'];
    $mang = explode('-', $trangthai);
    $idtrangthai = $mang[0];
    $tentrangthai = $mang[1];
    $diadiem = $_POST['diadiem'];
    $mang1 = explode('-', $diadiem);
    $iddiadiem = $mang1[0];
    $tendiadiem = $mang1[1];
    //Format thời gian
    $start = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['batdau'])));
    $end = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['ketthuc'])));
    $tentour = $_POST['tentour'];
    $tour = array(
        'tour_name' => $tentour,
        'tour_description' => ($_POST['mota']),
        'tour_introduction' => ($_POST['gioithieu']),
        'tour_journey' => ($_POST['hanhtrinh']),
        'tour_schedule' => ($_POST['lichtrinh']),
        'tour_price' => intval($_POST['gia']),
        
        'tour_vehicle' => $_POST['phuongtien'],
        'tour_starting_point' => ($_POST['diemxp']),
        'tour_location_id' => ($iddiadiem),
        'tour_location_name' => ($tendiadiem),
        'tour_status_id' => ($idtrangthai),
        'tour_status' => ($tentrangthai),
        'tour_image_url' => ($_FILES['file']['name']),
        'tour_start_date' => ($start),
        'tour_end_date' => ($end),
        'tour_duration' => intval($_POST['thoiluong']),
        'tour_create_date' => $currentDateTime,
    );
    insert('tour', $tour);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=tour');
}

//Delete the tour
function tour_delete($id)
{
    include('connection.php');
    $sql = "DELETE  from tour where id=$id";
    $query = mysqli_query($conn, $sql);
    header('location:admin.php?controller=tour');
    return $query;
}