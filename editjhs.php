<?php
	include('database.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `jhs` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>EDIT PROTOTYPE</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updatejhs.php?id=<?php echo $id; ?>">
		<label>Name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name">
		<label>Year Graduated:</label><input type="text" value="<?php echo $row['yeargraduated']; ?>" name="yeargraduated">
		<input type="submit" name="submit">
		<a href="jh.php">Back</a>
	</form>
</body>
</html>