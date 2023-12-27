<?php
require_once('lib/models.php');
require_once('lib/functions.php');
require_once('admin/models/location.php');
if (!empty($_POST)) {
    $folder = 'location/';
    upload($folder);
    location_add();
}

include('admin/views/location/add.php');
