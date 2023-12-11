<?php
require_once ('/DA/lib/config/database.php');
$id=$_POST['id'];
$idt=$_POST['idt'];
$ac=$_POST['ac'];
$sql = "UPDATE comment
SET status_id = $id, comment_status ='$ac' 
WHERE id=$idt";
$kq = mysqli_query($conn, $sql);