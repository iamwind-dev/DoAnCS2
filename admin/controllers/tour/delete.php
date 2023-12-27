<?php
include('admin/models/tour.php');
require_once('lib/models.php');
$id = $_GET['id'];
$data = delete_record($id, 'tour');
