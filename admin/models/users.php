<?php


require_once('lib/functions.php');
function userLogin($input, $password)
{
    global $conn;

    $sql = "SELECT * FROM `users` WHERE (LOWER(`user_username`)='" . strtolower($input) . "' OR
    LOWER(`user_email`)='" . strtolower($input) . "') AND `user_password`='" . $password . "' AND role_id = 1";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['usera'] = mysqli_fetch_assoc($query);
        global $userid;
        $userid = $_SESSION['usera']['id'];
        return true;
    }
    return false;
}

function userDestroy($id)
{
    $user = get_a_record('users', $id);
    $image = 'public/upload/images/' . $user['user_avatar'];
    if (is_file($image)) {
        unlink($image);
    }
    global $conn;
    $id = intval($id);
    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function user_update()
{
    global $userNav;
    $user_login = get_a_record('users', $userNav);


    if (isset($_POST['roleid']) && $user_login['role_id'] == 1)
        $roleid = $_POST['roleid'];
    else
        $roleid = $user_login['role_id'];

    $user_edit = array(
        'id' => intval($_POST['user_id']),
        'user_email' => escape($_POST['email']),
        'user_username' => escape($_POST['username']),
        'user_name' => escape($_POST['name']),
        'user_address' => escape($_POST['address']),
        'user_phone' => escape($_POST['phone']),
        'role_id' => $roleid,
    );
    
}

function showRole($id)
{
    $sql = "SELECT * FROM roles WHERE id <> $id;  ";
    global $conn;
    $query = mysqli_query($conn, $sql);
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}

function showstatuss($id)
{
    $sql = "SELECT * FROM user_status WHERE id <> $id;  ";
    global $conn;
    $query = mysqli_query($conn, $sql);
    $data = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}

function userUpdate()
{
    $trangthai = $_POST['trangthai'];
    $mang = explode('-', $trangthai);
    $idtrangthai = $mang[0];
    $tentrangthai = $mang[1];
    $vaitro = $_POST['vaitro'];
    $mang1 = explode('-', $vaitro);
    $idvaitro = $mang1[0];
    $tenvaitro = $mang1[1];

    $id = $_POST['id'];


    $user_update = array(
        'user_name' => escape($_POST['ten']),
        'user_email' => escape($_POST['email']),
        'user_phone' => escape($_POST['sdt']),
        'role_id' => $idvaitro,
        'user_role' => $tenvaitro,
        'user_status_id' => $idtrangthai,
        'user_status' => $tentrangthai,

    );
    global $conn;
    $email = addslashes($_POST['email']);
    if (!preg_match("/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i", $email)) {
        echo "<script>alert('Email này không hợp lệ. Vui long nhập email khác.');window.history.back();</script>";
    }
    elseif (mysqli_num_rows(mysqli_query($conn, "SELECT user_email FROM users WHERE user_email='$email' AND id<> $id")) > 0) {
        echo "<script>alert('Email này đã có người dùng. Vui lòng chọn Email khác.');window.history.back();</script>";
    }
    else {
        update('users', $id, $user_update);
        header('Location:admin.php?controller=user&action=index');
    }
}