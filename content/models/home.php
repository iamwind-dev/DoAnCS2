<?php
function showTournoibat()
{
    global $conn;
    $sql = "SELECT * FROM tour WHERE tour_status_id =3";
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

function showLocationn()
{
    $sql = "SELECT * FROM location ";
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

function showCommentHL()
{
    global $conn;
    $sql = "SELECT * FROM comment WHERE status_id =2 LIMIT 18446744073709551615 OFFSET 1";
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

function showCommentf()
{
    global $conn;
    $sql = "SELECT * FROM comment WHERE status_id =2 LIMIT 1";
    $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
    mysqli_free_result($query);
            return $row;
    }
    
