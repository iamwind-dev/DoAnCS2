<?php
require_once('content/models/user.php');
require_once('lib/models.php');
require_once('lib/functions.php');
if (!empty($_POST)) {
    $folder = 'avatars/';
    upload($folder);
    userUpdate1();
}
include('index/views/info/index.php');