<?php
require_once('/DA/connection.php');
$sql = "SELECT * FROM location";
$query = mysqli_query($conn, $sql);
