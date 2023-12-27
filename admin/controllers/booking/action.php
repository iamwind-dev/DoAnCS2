<?php
require_once('lib/config/database.php');
$id = $_POST['id'];
$idt = $_POST['idt'];
$ac = $_POST['ac'];
$sql = "UPDATE book_tour SET status_id = $id, booktour_status ='$ac' WHERE id=$idt";
$kq = mysqli_query($conn, $sql);