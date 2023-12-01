<?php
session_start();
require_once('/DA/connection.php');

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

$file = 'admin/controllers/' . $controller . '/' . $action . '.php';
if (file_exists($file)) {
    require($file);
}
else {
    header('HTTP/1.1 404 Not Found', true, 404);
    require('404.php');
    exit();
}

