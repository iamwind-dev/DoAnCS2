<?php
function comment_add()
{
    $idtour = $_POST["idt"];
    $iduser = $_POST["idu"];
    $noidung = $_POST["noidung"];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    $conn = mysqli_connect('localhost', 'root', '060304', 'doanqldulich');
    $sql = "INSERT INTO comment(tour_id,user_id,comment,time) VALUES ($idtour,$iduser,'$noidung','$date')";
    $kq = mysqli_query($conn, $sql);

}