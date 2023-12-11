<?php
function userUpdate1()
{
    

    $id = $_POST['id'];
    if (!empty($_FILES['file']['tmp_name'])) {
        $image = $_FILES['file']['name'];
    }
    else {
        $image = $_POST['image'];
    }

    $user_update = array(
        'user_name' => escape($_POST['ten']),
        'user_email' => escape($_POST['email']),
        'user_phone' => escape($_POST['sdt']),
        'user_avatar' => $image,
    );
    
        update('users', $id, $user_update);
        header('Location:index.php?controller=info&action=index');
    
}