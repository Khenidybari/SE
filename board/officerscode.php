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

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $img = $_FILES["img"]['name'];

  if(file_exists("../officers/" . $_FILES["img"]["name"]))
  {
    $store = $_FILES["img"]["name"];
    $_SESSION['message'] = "Image already exist! '.$store.'";
    header('Location: officers.php');
  }
  else
  {

    $sql = "INSERT INTO officers (name,img) VALUES ('$name','$img')";
    $slq_run = mysqli_query($conn, $sql);

      if($slq_run)
      {
        move_uploaded_file($_FILES["img"]["tmp_name"], "../officers/" .$_FILES["img"]["name"]);  
        $_SESSION['message'] = "Image and Name succesfully added!!";
        header('Location: officers.php');
      }
      else
      {
        $_SESSION['message'] = "Image and Name is not added!!";
        header('Location: officers.php');
      }
}

}



if(isset($_POST['Update_officers']))
{
  $id_image = $_POST['id'];
  $edit_name = $_POST['name'];
  $img_update = str_replace(" ","",$_FILES["img"]["name"]);
  $img_tmp = str_replace(" ","",$_FILES["img"]["tmp_name"]);

  $query = "UPDATE officers SET name = '$edit_name', img=' $img_update' WHERE id = '$id_image'";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
  
    move_uploaded_file($img_tmp, "../officers/". $img_update);  
    $_SESSION['message'] = "Image and Caption Updated Succesfully!!";
    header('Location: officers.php');
  }
  else
  {
    $_SESSION['message'] = "Update didnt went through!!";
        header('Location: officers.php');
  }

}



if(isset($_POST['delete_btn'])) 
{
  $id = mysqli_real_escape_string($conn, $_POST['delete_btn']);

  $query = "DELETE FROM officers WHERE id = '$id'";
  $query_run = mysqli_query($conn,$query);

if($query_run)
{
  
  $_SESSION['message'] = "Data successfully deleted!!";
  header('Location: officers.php');
}
else
{
  $_SESSION['message'] = "Data is not deleted!!";
  header('Location: officers.php');
}

}


 