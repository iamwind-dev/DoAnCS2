<?php
require_once('/DA/lib/config/database.php');
function get_total_tour_location($idl){
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM tour WHERE tour_location_id = $idl";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    return $row['total'];
}