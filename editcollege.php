<?php
	include('database.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `college` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>EDIT PROTOTYPE</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updatecollege.php?id=<?php echo $id; ?>">
		<label>Name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name">
		<label>Year Graduated:</label><input type="text" value="<?php echo $row['yeargraduated']; ?>" name="yeargraduated">
        <label>COURSE:</label><select name="course" value="<?php echo $row['course']; ?>" name="course">
                            <option selected disabled >--Select--</option>
                            <option value = "IT">IT</option>
                            <option value = "CS">CS</option>
                            <option value = "NURSING">NURSING</option>
                            <option value = "ENGINEERING">ENGINEERING</option>
                        </select>
		<input type="submit" name="submit">
		<a href="college.php">Back</a>
	</form>
</body>
</html>