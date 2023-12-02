<?php
include('admin/models/tour.php');
$id=$_GET['id'];
$data = tour_delete($id);
