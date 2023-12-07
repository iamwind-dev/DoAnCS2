<?php
include('/DA/lib/models.php');
include('/DA/lib/functions.php');

if(!empty($_POST)) {
    $user_add = array(
        'id' => 0,
        'user_username' => escape($_POST['username']),
        'user_name' => 'user'.rand(1, 1000),
        'user_password' => md5($_POST['password']),
        'user_email' => escape($_POST['email']),
        'role_id' => 0,
    );
    global $conn;
    $username = addslashes($_POST['username']);
    $email = addslashes($_POST['email']);
    $title = 'Kết quả đăng ký thành viên';
    if (mysqli_num_rows(mysqli_query($conn, "SELECT user_username FROM users WHERE user_username='$username'")) > 0) {
        echo "<script>alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.');window.history.back();</script>";
    } elseif ($_POST['confirmPassword'] != $_POST['password']) {
        echo "<script>alert('Việc đăng ký thành viên có vấn đề. Bạn đã không xác thực đúng mật khẩu đã nhập !!');window.history.back();</script>";
    } elseif (!preg_match("/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i", $email)) {
        echo "<script>alert('Email này không hợp lệ. Vui long nhập email khác.');window.history.back();</script>";
    } elseif (mysqli_num_rows(mysqli_query($conn, "SELECT user_email FROM users WHERE user_email='$email'")) > 0) {
        echo "<script>alert('Email này đã có người dùng. Vui lòng chọn Email khác.');window.history.back();</script>";
    } elseif (strlen($_POST['password']) < 8) {
        echo "<script>alert('Việc đăng ký thành viên có vấn đề. Mật khẩu của bạn phải dài từ 8 ký tự trở lên !!');window.history.back();</script>";
    }
    else {
        insert('users', $user_add);
        header('Location:admin.php?controller=home&action=login');
    }
}
