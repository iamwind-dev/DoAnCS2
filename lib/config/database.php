<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '060304');
define('DB_NAME', 'doanqldulich');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    or die("Can not connect database");
mysqli_set_charset($conn, 'UTF8');
