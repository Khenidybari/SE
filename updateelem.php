<?php

  if(isset($_POST['submit-update'])) {
  $id = $_POST['id'];
  $name = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $query = "UPDATE users SET first_name = '$name', last_name = '$lastname', ' WHERE id = $id";

  if (mysqli_query($conn, $query)) {
    // success
	header('Location:../sample.php');
	$_SESSION['message'] = "account updated successfuly";
  } else {
    // failure
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}