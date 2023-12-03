<?php
require_once('/DA/connection.php');




// function showTourID($id)
// {
//     include('/DA/connection.php');
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
//     include('/DA/connection.php');
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

function showLocation($id)
{
    $sql = "SELECT * FROM location WHERE id <> $id;  ";
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

function tour_update()
{

    $id = $_POST['id'];
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
        'tour_max_capacity' => intval($_POST['sltg']),
        'tour_vehicle' => $_POST['phuongtien'],
        'tour_starting_point' => ($_POST['diemxp']),
        'tour_location_name' => ($_POST['diadiem']),
        'tour_location_id' => ($_POST['iddiadiem']),
        'tour_image_url' => ($image),
    );
    update('tour', $id, $tour);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=tour');
}

function tour_add()
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
        'tour_location_id' => ($_POST['iddiadiem']),
        'tour_location_name' => ($_POST['diadiem']),
        'tour_image_url' => ($_FILES['file']['name']),
    );
    insert('tour', $tour);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=tour');
}

//Delete the tour
function tour_delete($id)
{
    include('/DA/connection.php');
    $sql = "DELETE  from tour where id=$id";
    $query = mysqli_query($conn, $sql);
    header('location:admin.php?controller=tour');
    return $query;
}