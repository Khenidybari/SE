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
  $caption = $_POST['caption'];
  $image = $_FILES["image"]['name'];

  if(file_exists("../upload/" . $_FILES["image"]["name"]))
  {
    $store = $_FILES["image"]["name"];
    $_SESSION['message'] = "Image already exist! '.$store.'";
    header('Location: gallery.php');
  }
  else
  {

    $sql = "INSERT INTO gallery (caption,image) VALUES ('$caption','$image')";
    $slq_run = mysqli_query($conn, $sql);

      if($slq_run)
      {
        move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" .$_FILES["image"]["name"]);  
        $_SESSION['message'] = "Image and Caption succesfully added!!";
        header('Location: gallery.php');
      }
      else
      {
        $_SESSION['message'] = "Image and Caption is not added!!";
        header('Location: gallery.php');
      }
}

}



if(isset($_POST['Update_gallery']))
{
  $id_image = $_POST['id'];
  $edit_caption = $_POST['caption'];
  $image_update = str_replace(" ","",$_FILES["image"]["name"]);
  $img_tmp = str_replace(" ","",$_FILES["image"]["tmp_name"]);

  $query = "UPDATE gallery SET caption = '$edit_caption', image=' $image_update' WHERE id = '$id_image'";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
  
    move_uploaded_file($img_tmp, "../upload/". $image_update);  
    $_SESSION['message'] = "Image and Caption Updated Succesfully!!";
    header('Location: gallery.php');
  }
  else
  {
    $_SESSION['message'] = "Update didnt went through!!";
        header('Location: gallery.php');
  }

}


if(isset($_POST['delete_btn'])) 
{
  $id = mysqli_real_escape_string($conn, $_POST['delete_btn']);

  $query = "DELETE FROM gallery WHERE id = '$id'";
  $query_run = mysqli_query($conn,$query);

if($query_run)
{
  
  $_SESSION['message'] = "Data successfully deleted!!";
  header('Location: gallery.php');
}
else
{
  $_SESSION['message'] = "Data is not deleted!!";
  header('Location: gallery.php');
}

}


 