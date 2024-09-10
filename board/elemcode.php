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
if(isset($_POST['Submit'])){
    $first_name = mysqli_real_escape_string($conn, $_POST['name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $elementary_dategraduated = mysqli_real_escape_string($conn, $_POST['dategraduated']);


    $sql = "INSERT INTO elementary (name,middle,last,gender,dategraduated) VALUES ('$first_name','$middle_name','$last_name','$gender','$elementary_dategraduated')";
    $slq_run = mysqli_query($conn, $sql);

    if($slq_run)
      {  
        $_SESSION['message'] = "Succesfully added a Student!!";
        header('Location: elem.php');
      }
      else
      {
        $_SESSION['message'] = " Something just went wrong!!";
        header('Location: elem.php');
      }
}
 
if(isset($_POST['delete']))
{
  $id = mysqli_real_escape_string($conn, $_POST['delete']);
  $sql = "DELETE FROM elementary WHERE id = '$id'";
  $query_run = mysqli_query($conn,$sql);
  
  if($query_run)
{
  
  $_SESSION['message'] = "Data successfully deleted!!";
  header('Location: elem.php');
}
else
{
  $_SESSION['message'] = "Data is not deleted!!";
  header('Location: elem.php');
}
}

if(isset($_POST['Update']))
{
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $first_name = mysqli_real_escape_string($conn, $_POST['name']);
  $middle_name = mysqli_real_escape_string($conn, $_POST['middle']);
  $last_name = mysqli_real_escape_string($conn, $_POST['last']);
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $sql ="UPDATE elementary SET name = '$first_name', middle = '$middle_name', last = '$last_name', gender = '$gender'  WHERE id = '$id'";
    $query_run = mysqli_query($conn,$sql);

 if($query_run)
{
  
  $_SESSION['message'] = "Data successfully Updated!!";
  header('Location: elem.php');
}
else
{
  $_SESSION['message'] = "Data is not Updated!!";
  header('Location: elem.php');
}
    
}
?>