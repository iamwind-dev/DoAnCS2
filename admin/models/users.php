<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once('/DA/lib/functions.php');
function userLogin($input,$password){
    global $conn;

    $sql = "SELECT * FROM `users` WHERE (LOWER(`user_username`)='".strtolower($input)."' OR
    LOWER(`user_email`)='".strtolower($input)."') AND `user_password`='".$password."'";

    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($query) > 0) {
        $_SESSION['user'] = mysqli_fetch_assoc($query);
        global $userid;
        $userid = $_SESSION['user']['id'];
        return true;
    }
    return false;
}

function userDestroy($id) {
    $user = get_a_record('users', $id);
    $image = 'public/upload/images/'.$user['user_avatar'];
    if(is_file($image)) {
        unlink($image);
    }
    global $conn;
    $id = intval($id);
    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function user_update() {
    global $userNav;
    $user_login = get_a_record('users', $userNav);


    if(isset($_POST['roleid']) && $user_login['role_id'] == 1)
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
    // global $conn;
    // $email_check = addslashes($_POST['email']);
    // $id_check = intval($_POST['user_id']);
    // if(mysqli_num_rows(mysqli_query($conn, "SELECT user_email FROM users WHERE user_email='$email_check'")) != 0 && mysqli_num_rows(mysqli_query($conn, "SELECT user_email FROM users WHERE id='$id_check' AND user_email='$email_check'")) <> 1) {
    //     echo "<div style='padding-top: 200px' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a></div></div>";
    //     require('admin/views/user/result.php');
    //     exit;
    // }
    // else {
    //     $get_currentEmail_user = get_a_record('users', $_POST['user_id']);
    //     $currentEmail = $get_currentEmail_user['user_email'];
    //     $userId = save('users', $user_edit);
    //     $avatar_name = 'avatar-user'.$userId.'-'.slug($_POST['username']);
    //     $config = array(
    //         'name' => $avatar_name,
    //         'upload_path' => 'public/upload/images/',
    //         'allowed_exts' => 'jpg|jpeg|png|gif',
    //     );
    //     $avatar = upload('imagee', $config);
    //     //cập nhật ảnh mới
    //     if($avatar) {
    //         $user_edit = array(
    //             'id' => $userId,
    //             'user_avatar' => $avatar,
    //         );
    //         save('users', $user_edit);
    //     }
    //     $user_edited = get_a_record('users', $userId);
    //     if($user_edited['user_email'] != $currentEmail) {
    //         //send mail
    //         require 'vendor/autoload.php';
    //         include 'lib/config/sendmail.php';
    //         $email = $user_edited['user_email'];
    //         $mail = new PHPMailer(true);
    //         try {
    //             $verificationCode = md5(uniqid("Email của bạn vừa mới đổi đó và chưa active đâu. Nhấn vào đây để active nhé! Yêu bạn 3 nghìn", true)); //https://www.php.net/manual/en/function.uniqid
    //             $verificationLink = PATH_URL."index.php?controller=register&action=reactivate&code=".$verificationCode;
    //             //content
    //             $htmlStr = "";
    //             $htmlStr .= "Xin chào ".$user_edited['user_name']." (".$user_edited['user_username']."),<br /><br />";
    //             $htmlStr .= "Bạn vừa đổi email mới cho tài khoản của bạn? Vui lòng nhấp vào nút bên dưới để xác minh đổi email của bạn và có quyền truy cập vào trang quản trị của Chị Kòi Quán.<br /><br /><br />";
    //             $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
    //             $htmlStr .= "Cảm ơn bạn đã tham gia cùng website bán hàng của quán Chị Kòi.<br><br>";
    //             $htmlStr .= "Trân trọng,<br />";
    //             $htmlStr .= "<a href='https://tanhongit.com/' target='_blank'>By Tân Hồng IT</a><br />";
    //             //Server settings
    //             $mail->CharSet = "UTF-8";
    //             $mail->SMTPDebug = 0; // Enable verbose debug output (0 : ko hiện debug, 1 hiện)
    //             $mail->isSMTP(); // Set mailer to use SMTP
    //             $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
    //             $mail->SMTPAuth = true; // Enable SMTP authentication
    //             $mail->Username = SMTP_UNAME; // SMTP username
    //             $mail->Password = SMTP_PWORD; // SMTP password
    //             $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    //             $mail->Port = SMTP_PORT; // TCP port to connect to
    //             //Recipients
    //             $mail->setFrom(SMTP_UNAME, "Chị Kòi Quán");
    //             $mail->addAddress($email, $email);     // Add a recipient | name is option tên người nhận
    //             $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
    //             //$mail->addCC('CCemail@gmail.com');
    //             //$mail->addBCC('BCCemail@gmail.com');
    //             $mail->isHTML(true); // Set email format to HTML
    //             $mail->Subject = 'Verification New Email | Quán Chị Kòi | Change Email | By Tân Hồng IT';
    //             $mail->Body = $htmlStr;
    //             $mail->AltBody = $htmlStr; //None HTML
    //             $result = $mail->send();
    //             if(!$result) {
    //                 $error = "Có lỗi xảy ra trong quá trình gửi mail";
    //             }
    //         }
    //         catch (Exception $e) {
    //             echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    //         }
    //         $verificationCode_add = array(
    //             'id' => $userId,
    //             'verificationCode' => $verificationCode,
    //             'verified' => 0,
    //         );
    //         save('users', $verificationCode_add);
    //     }
    //     header('location:admin.php?controller=user&action=info&user_id='.intval($_POST['user_id']));
    // }
}

function showRole($id){
    $sql = "SELECT * FROM roles WHERE id <> $id;  ";
    global $conn;
    $query = mysqli_query($conn, $sql);
    $data = array();
    if(mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}

function showstatuss($id) {
    $sql = "SELECT * FROM user_status WHERE id <> $id;  ";
    global $conn;
    $query = mysqli_query($conn, $sql);
    $data = array();
    if(mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }
        mysqli_free_result($query);
    }
    return $data;
}

function userUpdate(){
    $trangthai = $_POST['trangthai'];
    $mang = explode('-', $trangthai);
    $idtrangthai = $mang[0];
    $tentrangthai = $mang[1];
    $vaitro = $_POST['vaitro'];
    $mang1 = explode('-', $vaitro);
    $idvaitro = $mang1[0];
    $tenvaitro = $mang1[1];

    $id = $_POST['id'];
    if(!empty($_FILES['file']['tmp_name'])) {
        $image = $_FILES['file']['name'];
    }
    else {
        $image = $_POST['avatar'];
    }

    $user_update = array(
        'user_name' => escape($_POST['ten']),
        'user_email' => escape($_POST['email']),
        'user_phone' => escape($_POST['sdt']),
        'role_id' => $idvaitro,
        'user_role' => $tenvaitro,
        'user_status_id' => $idtrangthai,
        'user_status' => $tentrangthai,
        'user_avatar' => $image,
    );
    global $conn;
    $email = addslashes($_POST['email']);
    if(!preg_match("/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i", $email)) {
        echo "<script>alert('Email này không hợp lệ. Vui long nhập email khác.');window.history.back();</script>";
    }
    elseif(mysqli_num_rows(mysqli_query($conn, "SELECT user_email FROM users WHERE user_email='$email' AND id<> $id")) > 0) {
        echo "<script>alert('Email này đã có người dùng. Vui lòng chọn Email khác.');window.history.back();</script>";
    }
    else {
        update('users',$id, $user_update);
        header('Location:admin.php?controller=user&action=index');
    }
}