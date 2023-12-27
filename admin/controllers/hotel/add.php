<?php
require_once('lib/models.php');
include('admin/models/hotel.php');
require_once('lib/functions.php');
if (!empty($_POST)) {
    $folder = 'hotels/';
    upload($folder);
    hotel_add();
}
$table = 'location';
$data = get_all($table);
$data1 = get_all('hotel_status');
include('admin/views/hotel/add.php');