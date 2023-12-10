<?php

require_once('/DA/lib/models.php');
if (isset($_SESSION['user'])) {
    $idt = $_POST['idt'];
    $giatour = 0;
    $giaks = 0;
    $_SESSION['sophong'] = 0;
    $_SESSION['songuoi'] = $_POST['songuoi'];

    if (isset($_POST['idks'])) {
        $_SESSION['sophong'] = intval($_POST['sophong']);
        $sophong = $_SESSION['sophong'];
        $idks = $_POST['idks'];
        $data1 = get_a_record('hotel', $idks);
        foreach ($data1 as $b) {
            $giaks = intval($b['hotel_price']);
        }
    }

    $data = get_a_record('tour', $idt);


    foreach ($data as $a) {
        $giatour = intval($a['tour_price']);

    }

    $_SESSION['total'] = $giatour * $_SESSION['songuoi'] + $giaks * $_SESSION['sophong'];
    $total = $_SESSION['total'];

    require("content/views/booking/index.php");
} else {
    
    
    echo "<script>alert('Vui lòng đăng nhập để đặt tour!');window.history.back();</script>";
}