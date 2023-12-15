<?php
include('/DA/lib/config/database.php');
include('/DA/lib/functions.php');
include('/DA/lib/models.php');
$id= $_POST['idu'];
echo $id;
echo $_POST['idt'];
$tourfv = array(
     'user_favourite_tour_id' => $_POST['idt']
 );
 update('users', $id, $tourfv);
