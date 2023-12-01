<?php
function tour_update()
{
    $tentour = $_POST['tentour'];
    $tour = array(
        'tour_name' => $tentour,
        'tour_description' => ($_POST['mota']),
        'tour_introduction' => ($_POST['gioithieu']),
        'tour_journey' => ($_POST['hanhtrinh']),
        'tour_schedule' => ($_POST['lichtrinh']),
        'tour_price' => intval($_POST['gia']),
        'tour_max_capacity' => intval($_POST['sltg']),
        'tour_vehicle' => $_POST['phuongtien'],
        'tour_starting_point' => ($_POST['diemxp']),
        'tour_location_id' => ($_POST['diadiem']),
        'tour_image_url' => ($_FILES['file']['name'])
    );
    insert('tour', $tour);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=tour');
}

