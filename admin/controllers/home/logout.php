<?php

require_once('lib/models.php');
require_once('admin/models/users.php');

$userid = $_SESSION['usera']['id'];

$user_login = get_a_record('users', $userid);
foreach ($user_login as $e) {
    $ul = $e['role_id'];
}
echo $ul;
unset($_SESSION['usera']);

if ($ul == 0) {
    header('location:index.php');
}
else {
    header('location:admin.php');
}
