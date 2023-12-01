<?php
require_once('/DA/connection.php');
$sql = "SELECT Tour.*, Location.location_name, Location.location_description
FROM Tour
JOIN Location ON Tour.tour_location_id = Location.location_id;";
$query = mysqli_query($conn, $sql);



