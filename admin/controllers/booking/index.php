<?php
require_once('/DA/lib/models.php');


$data = get_all('book_tour');
foreach ($data as $a){
    $idtour=$a['tour_id'];
}
include('admin/views/booking/index.php');