<?php
function booking_add()
{
    if (!empty($_POST['idks'])) {
        $idks=intval($_POST['idks']);
    } else{
        $idks='';
    }
    $book = array(
        'customer_name' => $_POST['hoten'],
        'customer_email' => ($_POST['email']),
        'customer_phone' => ($_POST['sdt']),
        'tour_id' => ($_POST['idt']),
        'customer_address' => ($_POST['diachi']),
        'hotel_id' => intval($idks),
        'note' => $_POST['ghichu'],
        'total' => intval($_SESSION['total']),
        'capacity' => intval($_SESSION['songuoi']),
        'room' => intval($_SESSION['sophong']),
        
    );
    $idb=insert_get_id('book_tour', $book);
    return $idb;
}