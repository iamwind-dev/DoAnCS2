<?php
//Thêm danh mục
function location_add()
{
    $tendiadiem = $_POST['tendiadiem'];
    $location = array(
        'location_name' => $tendiadiem,

    );
    insert('location', $location);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=location');
}

function location_update()
{

    $id = $_POST['id'];

    $tendiadiem = $_POST['tendiadiem'];
    $location = array(
        'location_name' => $tendiadiem
    );
    update('location', $id, $location);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=location');
}