<?php
require_once('/DA/lib/config/database.php');
function get_a_record($table, $id)
{
    global $conn;
    $id = intval($id);
    $sql = "SELECT * FROM `$table` WHERE id =$id";
    $query = mysqli_query($conn, $sql);
    $data = NULL;
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}



function insert($table, $data = array())
{
    $values = array();
    global $conn;
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
    $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    mysqli_query($conn, $sql);
}


function update($table, $id, $data = array())
{
    $values = array();
    global $conn;
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
    $sql = "UPDATE `$table` SET " . implode(',', $values) . " WHERE id =$id";
    mysqli_query($conn, $sql);
}


function get_all($table)
{
    $sql = "SELECT * FROM `$table` ";
    global $conn;
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

function delete_record($id, $table)
{
    include('/DA/connection.php');
    $sql = "DELETE  from `$table` where id=$id";
    $query = mysqli_query($conn, $sql);
    header("location:admin.php?controller=$table");
    return $query;
}