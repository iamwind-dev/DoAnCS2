<?php
require_once('/DA/lib/models.php');
require_once('/DA/content/models/booking.php');
if (!empty($_POST)) {
    $idb=booking_add();
    $idt = $_GET['idt'];
    $idks = $_GET['idks'];
    $data = get_a_record('tour', $idt);
    $data1 = get_a_record('hotel', $idks);
    $data2 = get_a_record('book_tour', $idb);
    require("content/views/booking/final.php");
}
