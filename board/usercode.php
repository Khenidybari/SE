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


if(isset($_POST['Update'])) {
  $id = $_POST['userid'];
  $name = $_POST['name'];  
  $role = $_POST['role'];

  $query = "UPDATE users SET name='$name', role='$role' WHERE userid='$id'";
  $query_run = mysqli_query($conn, $query);

  if($query_run) {
    $_SESSION['message'] = "Image and Caption Updated Successfully!!";
    header('Location: user.php');
  } else {
    $_SESSION['message'] = "Update didn't go through!!";
    header('Location: user.php');
  }
}

if(isset($_POST['delete'])) 
{
  $id = mysqli_real_escape_string($conn, $_POST['delete']);

  $query = "DELETE FROM users WHERE userid = '$id'";
  $query_run = mysqli_query($conn,$query);

if($query_run) 
{
  
  $_SESSION['message'] = "Data successfully deleted!!";
  header('Location: user.php');
}
else
{
  $_SESSION['message'] = "Data is not deleted!!";
  header('Location: user.php');
}
}