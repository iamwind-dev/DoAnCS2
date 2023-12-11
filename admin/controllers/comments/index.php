<?php
require_once('/DA/lib/models.php');


$data = get_all('comment');    
foreach ($data as $a) {
    $idtour = $a['tour_id'];
}
include('admin/views/comment/index.php');