<?php
	$id=$_GET['id'];
	include('database.php');
	mysqli_query($conn,"delete from `jhs` where id='$id'");
	header('location:jh.php');
?>