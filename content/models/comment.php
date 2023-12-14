<?php

function comment_add()
{
    global $conn;
    $idtour = $_POST["idt"];
    $iduser = $_POST["idu"];
    $noidung = $_POST["noidung"];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    $conn = mysqli_connect('localhost', 'root', '060304', 'doanqldulich');
    $sql = "INSERT INTO comment(tour_id,user_id,comment,time) VALUES ($idtour,$iduser,'$noidung','$date')";
    $kq = mysqli_query($conn, $sql);

}

function showCommentt($id,$limit,$offset){
    
    
}

function get_total_comment($table,$id)
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM $table WHERE tour_id = 2";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    return $row['total'];
}