<?php
require_once('lib/models.php');
$result = get_total('comment');
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

$data = get_all_pag('comment', $start, $limit);
foreach ($data as $a) {
    $idtour = $a['tour_id'];
}
include('admin/views/comment/index.php');