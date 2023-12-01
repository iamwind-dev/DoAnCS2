<?php

//thoát các ký tự đặc biệt trong chuỗi trước khi chèn nó vào câu lệnh SQL


function upload()
{
    $target_dir = "/DA/public/img/tours/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
}

