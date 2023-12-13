<?php
require_once('/DA/lib/models.php');
$result = get_total('book_tour');
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

$data = get_all_pag('book_tour', $start, $limit);
foreach ($data as $a){
    $idtour=$a['tour_id'];
}
include('admin/views/booking/index.php');