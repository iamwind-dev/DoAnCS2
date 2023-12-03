<?php
function hotel_update()
{
    $trangthai = $_POST['trangthai'];
    $mang = explode('-', $trangthai);
    $idtrangthai = $mang[0];
    $tentrangthai = $mang[1];
    $diadiem = $_POST['diadiem'];
    $mang1 = explode('-', $diadiem);
    $iddiadiem = $mang1[0];
    $tendiadiem = $mang1[1];
    $tentour = $_POST['tentour'];

    $id = $_POST['id'];
    if (!empty($_FILES['file']['tmp_name'])) {
        $image = $_FILES['file']['name'];
    }
    else {
        $image = $_POST['image'];
    }

    $tenks = $_POST['tenks'];
    $hotel = array(
        'hotel_name' => $tenks,
        'hotel_description' => ($_POST['mota']),
        'hotel_introduction' => ($_POST['gioithieu']),
        'hotel_price' => intval($_POST['gia']),
        'hotel_location' => ($tendiadiem),
        'hotel_location_id' => ($iddiadiem),
        'hotel_status' => ($tentrangthai),
        'hotel_status_id' => ($idtrangthai),
        'hotel_image_url' => ($image),
        'hotel_address' => ($_POST['diachi']),
        'hotel_phone' => ($_POST['sdt'])
    );
    update('hotel', $id, $hotel);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=hotel');
}

function hotel_add()
{
    $trangthai = $_POST['trangthai'];
    $mang = explode('-', $trangthai);
    $idtrangthai = $mang[0];
    $tentrangthai = $mang[1];
    $diadiem = $_POST['diadiem'];
    $mang1 = explode('-', $diadiem);
    $iddiadiem = $mang1[0];
    $tendiadiem = $mang1[1];
    $tentour = $_POST['tentour'];
    $tenks = $_POST['tenks'];
    $hotel = array(
        'hotel_name' => $tenks,
        'hotel_description' => ($_POST['mota']),
        'hotel_introduction' => ($_POST['gioithieu']),
        'hotel_price' => intval($_POST['gia']),
        'hotel_location' => ($tendiadiem),
        'hotel_location_id' => ($iddiadiem),
        'hotel_status' => ($tentrangthai),
        'hotel_status_id' => ($idtrangthai),
        'hotel_image_url' => ($_FILES['file']['name']),
        'hotel_address' => ($_POST['diachi']),
        'hotel_phone' => ($_POST['sdt'])
    );
    insert('hotel', $hotel);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=hotel');
}