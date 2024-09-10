<?php
	include('database.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['name'];
	$yeargraduated=$_POST['yeargraduated'];
    $course=$_POST['course'];
 
	mysqli_query($conn,"update `college` set name='$firstname', yeargraduated='$yeargraduated', course='$course' where id='$id'");
	header('location:college.php');
?>