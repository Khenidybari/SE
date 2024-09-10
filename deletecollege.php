<?php
	$id=$_GET['id'];
	include('database.php');
	mysqli_query($conn,"delete from `college` where id='$id'");
	header('location:college.php');
?>	