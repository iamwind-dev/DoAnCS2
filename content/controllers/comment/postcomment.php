<?php

require_once('../../../lib/models.php');
require_once('../../../content/models/comment.php');
comment_add($_POST['idt'], $_POST['idu'], $_POST['noidung']);
if(isset($_POST['rating'])){
$currentstar = $_POST['rate'];
$currentnum = $_POST['num'];
$newrating = $_POST['rating'];

$result = (($currentstar * $currentnum) + $newrating) / ($currentnum + 1);
$data = array(
    'tour_star' => $result,
    'tour_number_of_rating' => $currentnum + 1,
);
update('tour', $_POST['idt'], $data);
} 
