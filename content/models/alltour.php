<?php
require_once('lib/config/database.php');
function get_total_tour_location($idl)
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM tour WHERE tour_location_id = $idl AND tour_status_id <> 2";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    return $row['total'];
}