<?php
include('lib/models.php');
$id = $_GET['id'];
$data = delete_record($id, 'location');
