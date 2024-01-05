<?php

function get_total_earning(){
    global $conn;
    $sql = "SELECT SUM(total) FROM book_tour WHERE status_id=3 OR status_id=4";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    return $row['SUM(total)'];
}
function select_recent_book_tour(){
    $sql = "SELECT * FROM book_tour ORDER BY date DESC LIMIT 5";
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

function select_total($tour)
{
    global $conn;
    $sql = "SELECT COUNT(*) FROM book_tour WHERE tour_id =$tour";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    return $row['COUNT(*)'];
}

function select_tour()
{
    $sql = "SELECT * FROM tour ORDER BY tour_star DESC LIMIT 5";
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