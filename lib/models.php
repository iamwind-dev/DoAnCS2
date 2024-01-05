<?php
require_once('config/database.php');
//Lấy dữ liệu của 1 trường trong bảng theo id
function get_a_record($table, $id)
{
    global $conn;
    $id = intval($id);
    $sql = "SELECT * FROM `$table` WHERE id =$id";
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



//thêm dữ liệu vào bảng
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
//thêm dữ liệu vào bảng và trả về id
function insert_get_id($table, $data = array())
{
    $values = array();
    global $conn;
    foreach ($data as $key => $value) {
        $value = mysqli_real_escape_string($conn, $value);
        $values[] = "`$key`='$value'";
    }
    $sql = "INSERT INTO `$table` SET " . implode(',', $values);
    mysqli_query($conn, $sql);
    $sql2 = "SELECT last_insert_id()";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result);
    return $row;
}


//Cập nhật dữ liệu
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

//Lấy tất cả dữ liệu của 1 bảng
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
//Xoá 1 bản ghi theo id
function delete_record($id, $table)
{
    global $conn;
    $sql = "DELETE  from `$table` where id=$id";
    $query = mysqli_query($conn, $sql);
    header("location:admin.php?controller=$table");
    return $query;
}

function delete_tourfv($id1, $id2)
{
    global $conn;
    $sql = "DELETE  from tourfav where user_id=$id1 AND tour_id=$id2";
    $query = mysqli_query($conn, $sql);
    return $query;
}
//Hiển thị danh sách location và status khác id của location hiện tại
function showLocation($id)
{
    $sql = "SELECT * FROM location WHERE id <> $id;  ";
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

function showStatus($id)
{
    $sql = "SELECT * FROM status WHERE id <> $id;  ";
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

function showStatusHT($id)
{
    $sql = "SELECT * FROM hotel_status WHERE id <> $id;  ";
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

function get_total($table)
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM $table";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    return $row['total'];
}

function get_total_id($table, $id, $type)
{
    global $conn;
    $sql = "SELECT COUNT(*) as total FROM $table WHERE $type=$id";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    return $row['total'];
}

function get_all_pag($table, $start, $limit)
{
    $sql = "SELECT * FROM `$table` ORDER BY id DESC LIMIT $start,$limit";
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

function get_all_pags($table, $start, $limit, $type)
{
    $sql = "SELECT * FROM `$table` WHERE `$type` <> 2 ORDER BY id DESC LIMIT $start,$limit";
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

function get_all_tour_location($start, $limit, $idl)
{
    $sql = "SELECT * FROM tour WHERE tour_status_id <> 2 AND tour_location_id = $idl LIMIT $start,$limit";
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


function increaseValue($table, $field, $id)
{
    global $conn;

    
    $sql = "UPDATE `$table` SET `$field` = `$field` + 1 WHERE id = $id";

    mysqli_query($conn, $sql);

}



