<?php
	include('database.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['name'];
	$yeargraduated=$_POST['yeargraduated'];
 
	mysqli_query($conn,"update `jhs` set name='$firstname', yeargraduated='$yeargraduated' where id='$id'");
	header('location:jh.php');
?>