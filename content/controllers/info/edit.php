<?php
require_once('/DA/content/models/user.php');
require_once('/DA/lib/models.php');
require_once('/DA/lib/functions.php');
if (!empty($_POST)) {
    $folder = 'avatars/';
    upload($folder);
    userUpdate1();
}
include('index/views/info/index.php');