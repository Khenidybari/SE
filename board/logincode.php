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
if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $login_query = "SELECT * FROM users WHERE email = '$email' and password = '$password' LIMIT 1";
    $loginquer_run = mysqli_query($conn,$login_query);


    if(mysqli_num_rows($loginquer_run) > 0)
    {
        foreach($loginquer_run as $data)
        {
          $user_id = $data['userid'];
          $user_name = $data['username'];
          $role = $data['role'];
        }
        $_SESSION['auth']= true;
        $_SESSION['auth_role'] = "$role"; //1 = admin , 2 = superadmin 
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name
        ];

        if($_SESSION['auth_role'] == '') // none = nothing
        {
            $_SESSION['message'] = "You dont have a role yet!";
            header("Location: login.php");
            exit(0);
        }

        elseif($_SESSION['auth_role'] == 'admin') // 1 = admin
        {
            $_SESSION['message'] = "Welcome to the dashboard";
            header("Location: index.php");
            exit(0);
        }
        elseif($_SESSION['auth_role'] == 'superadmin') // 2 = superadmin
        {
            $_SESSION['message'] = "Welcome Super Admin";
            header("Location: index.php");
            exit(0);
        }        
    }
    else
    {
     $_SESSION['message']  = "Invalid email or password"; 
     header("Location: login.php");
     exit(0);
    }
}



if(isset($_POST['logout']))
{
    session_destroy();
    header("Location: login.php");
}

?>