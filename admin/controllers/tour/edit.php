<?php
require_once('/DA/lib/models.php');
require_once('/DA/lib/functions.php');
require_once('/DA/admin/models/tour.php');
if (!empty($_POST)) {
    upload();
    tour_update();
}
$id = $_GET['id'];
$data = get_a_record('tour',$id);
foreach ($data as $e) {
    $location_id  = $e['tour_location_id'];
}  
$data1=showLocation($location_id);
include('admin/views/tour/edit.php');