<?php
	include('database.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['name'];
	$yeargraduated=$_POST['yeargraduated'];
    $strand=$_POST['str'];
 
	mysqli_query($conn,"update `shs` set name='$firstname', yeargraduated='$yeargraduated', str='$strand' where id='$id'");
	header('location:shs.php');
?>