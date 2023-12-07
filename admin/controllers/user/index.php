<?php


require_once('/DA/lib/models.php');


$data = get_all('users');

require_once('/DA/admin/views/user/index.php');