<?php
include('/DA/lib/models.php');
$id = $_GET['id'];
$data = delete_record($id,'location');
