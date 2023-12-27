<?php
session_start();


//kiểm tra có phiên đăng đăng nhập có phải admin không
if (isset($_SESSION['user']) && $_SESSION['user']['role_id'] != 1) {
    header('Location: index.php');
    exit();
}
//Lấy controller và action từ url
if (isset($_GET['controller']) && '' != $_GET['controller']) {
    $controller = $_GET['controller'];
}
else {
    $controller = 'tour';
}

if (isset($_GET['action']) && '' != $_GET['action']) {
    $action = $_GET['action'];
}
else {
    $action = 'index';
}

if (!isset($_SESSION['user'])) {
    $controller = 'home';
    $action = 'login';
}

$file = 'admin/controllers/' . $controller . '/' . $action . '.php';

if (file_exists($file)) {
    require($file);
}
else {
    header('HTTP/1.1 404 Not Found', true, 404);
    require('404.php');
    exit();
}

