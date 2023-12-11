<?php
require_once('/DA/lib/models.php');
require_once('/DA/content/models/home.php');


$a = get_a_record('users',$_SESSION['user']['id']);


require("content/views/info/index.php");