<?php
include('/DA/lib/config/database.php');
include('/DA/lib/models.php');
include('/DA/content/models/comment.php');
comment_add();
$currentstar=$_POST['rate'];
$currentnum = $_POST['num'];
$newrating = $_POST['rating'];

$result = (($currentstar * $currentnum) + $newrating) / ($currentnum + 1); 
$data = array(
    'tour_star' => $result,
    'tour_number_of_rating' => $currentnum + 1,
);
update('tour', $_POST['idt'], $data);

