<?php
require_once('lib/models.php');
require_once('lib/functions.php');
require_once('admin/models/location.php');
if (!empty($_POST)) {
    $folder = 'location/';
    upload($folder);
    location_update();
}
$id = $_GET['id'];

$data = get_a_record('location', $id);

include('admin/views/location/edit.php');
