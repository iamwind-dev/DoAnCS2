<?php
function get_a_record($table, $id)
{
require_once('/DA/connection.php');
$id = intval($id);
$sql = "SELECT * FROM `$table` WHERE id=$id";
$query = mysqli_query($conn, $sql) ;
$data = NULL;
if (mysqli_num_rows($query) > 0) {
$data = mysqli_fetch_assoc($query);
mysqli_free_result($query);
}
return $data;
}

function insert($table, $data = array())
{
    $values = array();
    $conn = mysqli_connect('localhost', 'root', '060304', 'doanqldulich');
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
        $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    mysqli_query($conn, $sql);
}


function update($table,$idtype,$id, $data = array())
{
    $values = array();
    $conn = mysqli_connect('localhost', 'root', '060304', 'doanqldulich');
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
    $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE `$idtype`=$id";
    mysqli_query($conn, $sql);
}


function get_all($table)
{
    $sql = "SELECT * FROM `$table` ";
    $conn = mysqli_connect('localhost', 'root', '060304', 'doanqldulich');
    $query = mysqli_query($conn, $sql);
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}