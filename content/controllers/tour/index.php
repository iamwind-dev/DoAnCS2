<?php
require_once('/DA/lib/models.php');
$data=get_a_record('tour',$_GET['id']);
include('/DA/content/views/tour/index.php');