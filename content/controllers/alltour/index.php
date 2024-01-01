<?php
require_once('lib/models.php');
require_once('content/models/home.php');
require_once('content/models/alltour.php');
require_once('content/models/search.php');
if (isset($_GET['idl'])) {
    
    $result = get_total_tour_location($_GET['idl']);
    
    if ($result > 0) {
        $total_records = $result;
        $current_page = isset($_GET['p']) ? $_GET['p'] : 1;
        $limit = 3;
        $total_page = ceil($total_records / $limit);
        if ($current_page > $total_page) {
            $current_page = $total_page;
        }
        else if ($current_page < 1) {
            $current_page = 1;
        }

        $start = ($current_page - 1) * $limit;
        $a = get_all_tour_location($start, $limit, $_GET['idl']);
    }
}
else if ((isset($_POST['diadiem'])) || (isset($_POST['ngay'])) || (isset($_POST['gia']))) {
    $result = searchtotal();
    if ($result > 0) {
        $total_records = $result;
        $current_page = isset($_GET['p']) ? $_GET['p'] : 1;
        $limit = 3;
        $total_page = ceil($total_records / $limit);
        if ($current_page > $total_page) {
            $current_page = $total_page;
        }
        else if ($current_page < 1) {
            $current_page = 1;
            echo $current_page;
        }


        $start = ($current_page - 1) * $limit;
        $a = search($start, $limit);
    }
}
else {

    $result = get_total('tour');
    $total_records = $result;
    $current_page = isset($_GET['p']) ? $_GET['p'] : 1;
    $limit = 3;
    $total_page = ceil($total_records / $limit);
    if ($current_page > $total_page) {
        $current_page = $total_page;
    }
    else if ($current_page < 1) {
        $current_page = 1;
    }

    $start = ($current_page - 1) * $limit;
    $status = 'tour_status_id';
    $a = get_all_pags('tour', $start, $limit, $status);

}



require("content/views/alltour/index.php");