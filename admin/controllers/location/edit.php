<?php
require_once('/DA/lib/models.php');
require_once('/DA/admin/models/location.php');
if (!empty($_POST)) {
    location_update();
}
$id = $_GET['id'];

$data = get_a_record('location',$id);

include('admin/views/location/edit.php');
