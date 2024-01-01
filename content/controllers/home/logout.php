<?php

require_once('lib/models.php');

$userid = $_SESSION['user']['id'];

$user_login = get_a_record('users', $userid);
foreach ($user_login as $e) {
    $ul = $e['role_id'];
}

unset($_SESSION['user']);


    header('location:index.php');

