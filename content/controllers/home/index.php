<?php
require_once('/DA/lib/models.php');
require_once('/DA/content/models/home.php');


$a = get_all('tour');

$noibat = showTournoibat();
$noibat2 = showLocationn();
require("content/views/home/index.php");