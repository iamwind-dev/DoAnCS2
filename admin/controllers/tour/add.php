<?php
require_once('lib/models.php');
include('admin/models/tour.php');
require_once('lib/functions.php');
if (!empty($_POST)) {
    $folder = 'tours/';
    upload($folder);
    tour_add();
}
$table = 'location';
$data = get_all($table);
$data1 = get_all('status');
include('admin/views/tour/add.php');