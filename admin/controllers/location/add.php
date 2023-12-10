<?php
require_once('/DA/lib/models.php');
require_once('/DA/admin/models/location.php');
if (!empty($_POST)) {
    
    location_add();
}

include('admin/views/location/add.php');
