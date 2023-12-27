<?php
require_once('lib/functions.php');
require_once('lib/models.php');
require_once('content/models/tour.php');
require_once('content/models/comment.php');
require_once('content/models/user.php');

increaseValue('tour', 'tour_total_view', $_GET['id']);
$result = get_total_comment('comment', $_GET['id']);
$total_records = $result;

$data = get_a_record('tour', $_GET['id']);
foreach ($data as $a) {
    $id = $a['tour_location_id'];
    $description = $a['tour_description'];
}
$data1 = showHotel($id);
$data2 = showComment($_GET['id']);



include('content/views/tour/index.php');