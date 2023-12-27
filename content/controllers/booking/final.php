<?php
require_once('lib/models.php');
require_once('content/models/booking.php');
if (!empty($_POST)) {
    increaseValue('tour', 'tour_registration', $_POST['idt']);
    $idb = booking_add();

    $idt = $_POST['idt'];
    $idks = $_POST['idks'];
    $data = get_a_record('tour', $idt);
    $data2 = get_a_record('book_tour', $idb['last_insert_id()']);
    if ($idks != '') {
        $data1 = get_a_record('hotel', $idks);
    }
    require("content/views/booking/final.php");
}
else {
    $idb = $_GET['idb'];
    $idt = $_GET['idt'];
    $idks = $_GET['idks'];
    $data = get_a_record('tour', $idt);
    $data2 = get_a_record('book_tour', $idb);
    if ($idks != '') {
        $data1 = get_a_record('hotel', $idks);
    }
    require("content/views/booking/final.php");
}
