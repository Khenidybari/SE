<?php
session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;  

require 'vendor/autoload.php';
function sendemail_verify($name,$email,$verify_token)
{
    $mail = new PHPMailer(true);

     //$mail->SMTPDebug = 2;                      
     $mail->isSMTP();                                          
     $mail->SMTPAuth = true;
 
     $mail->Host = "smtp.gmail.com";                                                   
     $mail->Username = "wmsualumni2023@gmail.com";                     
     $mail->Password = "msvbxkjwvgbnbigf";  

      $mail->SMTPSecure = "tls";  
      $mail->Port = 587;  
 
     $mail->setFrom("wmsualumni2023@gmail.com");
     $mail->addAddress($email);   
 
     //Content
     $mail->isHTML(true);                                  
     $mail->Subject = "Email Verification";
 
     $email_template = "
     <h2>You have Registered with the office of Alumni</h2>
     <h5> Your email is now verified. You can now login to the website. </h5>
     <br/><br/>

     ";  
     header('Location: login.php');
 
     $mail-> Body = $email_template;

     $mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
    
     $mail->send();
 }

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
$fname = mysqli_real_escape_string($conn,$_POST['name']);
$mname = mysqli_real_escape_string($conn,$_POST['middle']);
$lname = mysqli_real_escape_string($conn,$_POST['last']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST ['email']);
$role = mysqli_real_escape_string($conn, $_POST ['role']);
$password = mysqli_real_escape_string($conn,$_POST ['password']);
$repeat_password = mysqli_real_escape_string($conn,$_POST ['repeat_password']);
$verify_token = md5(rand());

sendemail_verify("$username","$email","$verify_token");
echo"send or not?";


    if($password == $repeat_password)
    {

       $checkemail = "SELECT email FROM users WHERE email = '$email' LIMIT 1 ";
        $checkemail_run = mysqli_query($conn,$checkemail);

       if(mysqli_num_rows($checkemail_run)> 0)
       {
           $_SESSION['message'] = "Email already existing!!";
       header("Location: register.php");
       exit(0);
       }
        else
       {
           $user_query = "INSERT INTO users (name,middle,last,username,email,role,password,verify_token) VALUES('$fname','$mname', '$lname', '$username','$email','$role','$password','$verify_token')";
           $user_query_run = mysqli_query($conn,$user_query);

           if($user_query_run)
           {
               sendemail_verify("$username","$email","$verify_token");
               $_SESSION['message'] = "Registered Succesfully!!";
               //header("Location: login.php");
               exit(0); 
           }
            else
           {
               $_SESSION['message'] = "Something went wrong!!";
               header("Location: register.php");
                exit(0);   
           }
        }
    }

   else
   {
       $_SESSION['message'] = "Password does not match!!";
       header("Location: register.php");
       exit(0);
   }
}




if(isset($_POST['passwordchange']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $new_password = mysqli_real_escape_string($conn,$_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conn,$_POST['confirm_password']);
    $token = mysqli_real_escape_string($conn,$_POST['password_token']);

    if(!empty($token))
    {
        if(!empty($email) && !empty($new_password) && !empty($confirm_password))
        {
            //cheking token
            $check_token = "SELECT verify_token FROM users WHERE verify_token = '$token' LIMIT 1";
            $check_token_run = mysqli_query($conn, $check_token);
            
            if(mysqli_num_rows($check_token_run)> 0)
            {
                if($new_password == $confirm_password)
                {
                    $update_password = "UPDATE users SET password='$new_password' WHERE verify_token = '$token' LIMIT 1";
                    $update_password_run = mysqli_query($conn,$update_password);

                    if($update_password_run)
                    {
                        $new_token = md5(rand())."ADMIN";
                        $update_token = "UPDATE users SET verify_token='$new_token' WHERE verify_token = '$token' LIMIT 1";
                        $update_token_run = mysqli_query($conn,$update_token);

                        $_SESSION['message'] = "New password Updated Successfully!!";
                        header("Location: login.php");
                        exit(0); 
                    }
                    else
                    {
                        $_SESSION['message'] = "Something went wrong!!";
                        header("Location: password-reset.php?token=$token&email=$email");
                        exit(0); 
                    }
                }
                else
                {
                    $_SESSION['message'] = "New password and Confirm password does not match!!";
                    header("Location: password-reset.php?token=$token&email=$email");
                    exit(0); 
                }
            }
            else
            {
                $_SESSION['message'] = "Invalid token!!";
                header("Location: password-reset.php?token=$token&email=$email");
                exit(0); 
            }
        }
        else
        {
            $_SESSION['message'] = "All fields are required!!";
            header("Location: password-reset.php?token=$token&email=$email");
            exit(0);   
        }
    }
    else
    {
        $_SESSION['message'] = "No Token Available!!";
        header("Location: password-reset.php");
        exit(0); 
    }

}





?>