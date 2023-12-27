<?php
require_once('lib/models.php');
require_once('lib/functions.php');
require_once('content/models/home.php');


$a = get_all('tour');

$noibat = showTournoibat();
$noibat2 = showLocationn();
$noibat3 = showCommentHL();
$noibat4 = showCommentf();
require("content/views/home/index.php");