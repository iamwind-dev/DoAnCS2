<?php
require_once('/DA/lib/models.php');
require_once('/DA/content/models/home.php');


$a = get_all('tour');

$noibat = showTournoibat();
require("/DA/content/views/alltour/index.php");