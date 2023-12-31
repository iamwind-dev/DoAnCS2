<?php
function booking_add()
{
    date_default_timezone_set('Asia/Ho_Chi_Minh'); // Thiết lập múi giờ Việt Nam

    $currentDateTime = date('Y-m-d H:i:s');
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
        'user_id' => intval($_SESSION['user']['id']),
        'date_start' => $_POST['ngaydi'],
        'date_end' => $_POST['ngayve'],
        'date' => $currentDateTime);
    $idb=insert_get_id('book_tour', $book);
    return $idb;
}

function showBooking($id)
{
    $sql = "SELECT * FROM book_tour WHERE user_id = $id;  ";
    global $conn;
    $query = mysqli_query($conn, $sql);
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}