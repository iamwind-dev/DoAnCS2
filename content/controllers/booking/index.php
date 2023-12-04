<?php
require_once('/DA/lib/models.php');
$idt =$_GET['idt'];
$idks =$_GET['idks'];
$data=get_a_record('tour',$idt);
$data1=get_a_record('hotel',$idks);

require("content/views/booking/index.php");