<?php
require_once('/DA/lib/models.php');
require_once('/DA/lib/functions.php');
require_once('/DA/admin/models/hotel.php');

if (!empty($_POST)) {
    $folder = 'hotels/';
    upload($folder);
    hotel_update();
}
$id = $_GET['id'];
$data = get_a_record('hotel',$id);
foreach ($data as $e) {
    $location_id  = $e['hotel_location_id'];
    $status_id = $e['hotel_status_id'];
}  
$data1= showLocation($location_id);
$data2 = showStatusHT($status_id);
include('admin/views/hotel/edit.php');