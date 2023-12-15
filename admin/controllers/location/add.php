<?php
require_once('/DA/lib/models.php');
require_once('/DA/lib/functions.php');
require_once('/DA/admin/models/location.php');
if (!empty($_POST)) {
    $folder = 'location/';
    upload($folder);
    location_add();
}

include('admin/views/location/add.php');
