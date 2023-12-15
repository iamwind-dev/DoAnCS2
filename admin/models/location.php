<?php
//Thêm danh mục
function location_add()
{
    $tendiadiem = $_POST['tendiadiem'];
    $location = array(
        'location_name' => $tendiadiem,
        'location_image_url' => ($_FILES['file']['name']),

    );
    insert('location', $location);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=location');
}

function location_update()
{

    $id = $_POST['id'];
    $id = $_POST['id'];
    //kiểm tra người dùng có thay đổi hình ảnh không
    if (!empty($_FILES['file']['tmp_name'])) {
        $image = $_FILES['file']['name'];
    }
    else {
        $image = $_POST['image'];
    }

    $tendiadiem = $_POST['tendiadiem'];
    $location = array(
        'location_name' => $tendiadiem,
        'location_image_url' => $image
    );
    update('location', $id, $location);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=location');
}