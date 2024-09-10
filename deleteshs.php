<?php
	$id=$_GET['id'];
	include('database.php');
	mysqli_query($conn,"delete from `shs` where id='$id'");
	header('location:shs.php');
?>