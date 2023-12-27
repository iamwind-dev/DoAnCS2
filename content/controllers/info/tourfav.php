<?php
require_once('lib/models.php');
require_once('content/models/tourfav.php');
$a = showTourfav($_SESSION['user']['id']);
// foreach ($a as $b) {
//     //echo $b['tour_id'];
// }

require("content/views/info/tourfav.php");