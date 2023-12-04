<?php

function upload($folder)
{
    $target_dir = "/DA/public/img/";
    $target_file = $target_dir . $folder . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
}

