<?php
	$id=$_GET['id'];
	include('database.php');
	mysqli_query($conn,"delete from `elem` where id='$id'");
	header('location:elem.php');
?>