<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST['btn'])){
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['lastname'] = $_POST['lname'];
        $_SESSION['firstname'] = $_POST['fname'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['code'] = mt_rand(10000, 70000); 
        $code = $_SESSION['code'];
        $email = $_SESSION['email'];
        $subject = " MÃ XÁC NHẬN ĐĂNG KÍ";
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "dinhkhakl01@gmail.com"; //enter you email address
        $mail->Password = 'Luly041101'; //enter you email password
       
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email,"OVERTRAVEL");
        $mail->addAddress("$email"); //enter you email address
        $mail->Subject = ("$subject");
        $mail->Body = " Mã xác nhận trong tài khoản của bạn : $code";

        if ($mail->send()) {
            header("location: xacnhan.php"); // chuyển tới một trang để nhập code
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>