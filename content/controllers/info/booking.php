<?php
require_once('lib/models.php');
require_once('content/models/booking.php');
$a = showBooking($_SESSION['user']['id']);
// foreach ($a as $b) {
//     //echo $b['tour_id'];
// }

require("content/views/info/booking.php");