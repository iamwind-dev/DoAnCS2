<?php
require_once('/DA/lib/functions.php');
require_once('/DA/lib/models.php');
require_once('/DA/content/models/tour.php');
$data=get_a_record('tour',$_GET['id']);
foreach ($data as $a) {
	$id=$a['tour_location_id'];
    $description=$a['tour_description'];
}
$data1=showHotel($id);
$data2=showComment($_GET['id']);



include('/DA/content/views/tour/index.php');