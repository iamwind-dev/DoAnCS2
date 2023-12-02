<?php
require_once('/DA/lib/models.php');
require_once('/DA/lib/functions.php');
require_once('/DA/admin/models/tour.php');
if (!empty($_POST)) {
    upload();
    tour_update();
}
$id = $_GET['id'];
$data = showTourID($id);
    foreach ($data as $element) {
     $locationID = $element['tour_location_id'];
}   
$data1=showLocation($locationID);
include('admin/views/tour/edit.php');