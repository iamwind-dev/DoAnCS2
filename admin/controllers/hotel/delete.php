<?php
include('admin/models/hotel.php');
require_once('/DA/lib/models.php');
$id=$_GET['id'];
$data = delete_record($id,'hotel');
