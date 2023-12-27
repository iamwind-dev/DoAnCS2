<?php
require_once('lib/models.php');
require_once('content/models/home.php');


$a = get_a_record('users', $_SESSION['user']['id']);


require("content/views/info/index.php");