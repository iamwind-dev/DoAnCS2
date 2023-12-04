<?php
function booking_add()
{
    $book = array(
        'customer_name' => $_POST['hoten'],
        'customer_email' => ($_POST['email']),
        'customer_phone' => ($_POST['sdt']),
        'tour_id' => ($_GET['idt']),
        'customer_address' => ($_POST['diachi']),
        'hotel_id' => intval($_GET['idks']),
        'note' => $_POST['ghichu'],
    );
    $idb=insert_get_id('book_tour', $book);
    return $idb;
}