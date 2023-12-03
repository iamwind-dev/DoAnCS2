<?php
function category_add()
{
    $tendm = $_POST['tendm'];
    $category = array(
        'category_name' => $tendm,
        'category_status' => ($_POST['trangthai']),
        'category_description' => ($_POST['mota']),
        
    );
    insert('category', $category);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=category');
}

function category_update()
{
    
    $id = $_POST['id'];

    $tendm = $_POST['tendm'];
    $category = array(
        'category_name' => $tendm,
        'category_status' => ($_POST['trangthai']),
        'category_description' => ($_POST['mota']),
    );
    update('category', $id, $category);
    //chuyển hướng nếu them dc
    header('location:admin.php?controller=category');
}