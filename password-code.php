<?php
session_start();

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($get_email,$token)
{
    
    $mail = new PHPMailer(true);

    //$mail->SMTPDebug = 2;                      
    $mail->isSMTP();                                          
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";

    $mail->Host = "smtp.gmail.com"; 
    $mail->Port = 587;                                                    
    $mail->Username = "xt202003611@wmsu.edu.ph";                     
    $mail->Password = "Amiruddin23";

    $mail->setFrom("xt202003611@wmsu.edu.ph");

    $mail->setFrom("xt202003611@wmsu.edu.ph",);
    $mail->addAddress($get_email);   

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = "Reset password";

    $email_template = "
    <h2>You have Registered with the office of Alumni</h2>
    <h5> Verify your email because we received a password reset request for your account </h5>
    <br/><br/>
    <a href = 'http://localhost/SE-ALUMNI1/password-reset.php?token=$token&email=$get_email'>Click me</a>
    ";  

    $mail-> Body = $email_template;
    $mail->send();
}

if(isset($_POST['password_reset']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
    $check_email_run = mysqli_query($conn,$check_email);

    if(mysqli_num_rows($check_email_run)>0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_email = $row['email'];

        $update_token = "UPDATE users SET verify_token = '$token' WHERE email = '$get_email' LIMIT 1";
        $update_token_run = mysqli_query($conn, $update_token);

        if($update_token_run)
        {
            send_password_reset($get_email,$token);
            $_SESSION['message'] = "We've emailed you a password reset link";
            header("Location: forgot-password.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Something went wrong!";
            header("Location: forgot-password.php");
            exit(0);  
        }
    }

    else
    {
        $_SESSION['message'] = "There is no such email found!";
        header("Location: forgot-password.php");
        exit(0);
    }
}
?>