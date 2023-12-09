<?php
require_once('/DA/lib/models.php');
require_once('/DA/content/models/home.php');


$a = get_all('tour');

$noibat = showTournoibat();
require("content/views/home/index.php");