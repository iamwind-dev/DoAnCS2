<?php
require_once('/DA/lib/models.php');
include('admin/models/tour.php');
require_once('/DA/lib/functions.php');
if (!empty($_POST)) {
    upload();
    tour_add();
}
$table = 'location';
$data = get_all($table);
include('admin/views/tour/add.php');