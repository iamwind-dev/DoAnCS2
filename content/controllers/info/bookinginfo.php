<?php
require_once('lib/models.php');
require_once('content/models/booking.php');
$data = get_a_record('book_tour', $_GET['idb']);
require("content/views/info/bookinginfo.php");