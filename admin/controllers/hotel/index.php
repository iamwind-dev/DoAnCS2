<?php
include_once('/DA/lib/models.php');
$result = get_total('hotel');
$total_records = $result;
$current_page = isset($_GET['p']) ? $_GET['p'] : 1;
$limit = 10;
$total_page = ceil($total_records / $limit);
if ($current_page > $total_page) {
    $current_page = $total_page;
}
else if ($current_page < 1) {
    $current_page = 1;
}

$start = ($current_page - 1) * $limit;

$data = get_all_pag('hotel', $start, $limit);
include_once('/DA/admin/views/hotel/index.php');

