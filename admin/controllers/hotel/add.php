<?php
require_once('/DA/lib/models.php');
include('admin/models/hotel.php');
require_once('/DA/lib/functions.php');
if (!empty($_POST)) {
    $folder = 'hotels/';
    upload($folder);
    hotel_add();
}
$table = 'location';
$data = get_all($table);
$data1 = get_all('status');
include('admin/views/hotel/add.php');