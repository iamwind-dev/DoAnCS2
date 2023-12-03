<?php
require_once('/DA/lib/models.php');


$data = get_all('tour');


include('admin/views/tour/index.php');