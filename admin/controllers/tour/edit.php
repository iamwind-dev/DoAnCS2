<?php
require_once('lib/models.php');
require_once('lib/functions.php');
require_once('admin/models/tour.php');
if (!empty($_POST)) {
    $folder = 'tours/';
    upload($folder);
    tour_update();
}
$id = $_GET['id'];
$data = get_a_record('tour', $id);
foreach ($data as $e) {
    $location_id = $e['tour_location_id'];
    $status_id = $e['tour_status_id'];
}
$data1 = showLocation($location_id);
$data2 = showStatus($status_id);
include('admin/views/tour/edit.php');
