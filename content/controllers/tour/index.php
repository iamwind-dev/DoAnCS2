<?php
require_once('/DA/lib/functions.php');
require_once('/DA/lib/models.php');
require_once('/DA/content/models/tour.php');
require_once('/DA/content/models/comment.php');
require_once('/DA/content/models/user.php');


$result = get_total_comment('comment', $_GET['id']);
$total_records = $result;

$data=get_a_record('tour',$_GET['id']);
foreach ($data as $a) {
	$id=$a['tour_location_id'];
    $description=$a['tour_description'];
}
$data1=showHotel($id);
$data2=showComment($_GET['id']);



    include('/DA/content/views/tour/index.php');