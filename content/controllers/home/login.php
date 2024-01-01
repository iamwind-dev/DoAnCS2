<?php

require_once ('content/models/users.php');

$log = true;
//Kiểm tra xem co du lieu gui len hay khong, neu co thi kiem tra xem co dung du lieu hay khong, neu dung thi dang nhap, neu khong dung thi thong bao loi 
if(!empty($_POST)) {
    $email = escape($_POST['email']);
    $password = md5($_POST['password']);
    $log = userLogin($email, $password);
}
//Kiểm tra role người dùng
if(isset($_SESSION['user'])) {
    global $user;
    $user = $_SESSION['user'];
    
        header('location:index.php');
    
}

require('content/views/home/login.php');  