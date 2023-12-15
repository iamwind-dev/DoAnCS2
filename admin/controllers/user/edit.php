<?php
require_once('/DA/admin/models/users.php');
require_once('/DA/lib/models.php');
require_once('/DA/lib/functions.php');
if(!empty($_POST)) {
    
    userUpdate();
}
$id = $_GET['id'];
$data = get_a_record('users', $id);
foreach($data as $e) {
    $role_id = $e['role_id'];
    $status_id = $e['user_status_id'];
}
$data1 = showRole($role_id);
$data2 = showstatuss($status_id);
include('admin/views/user/edit.php');