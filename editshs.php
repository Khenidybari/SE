<?php
	include('database.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `shs` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>EDIT PROTOTYPE</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updateshs.php?id=<?php echo $id; ?>">
		<label>Name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name">
		<label>Year Graduated:</label><input type="text" value="<?php echo $row['yeargraduated']; ?>" name="yeargraduated">
        <label>STRAND:</label><select name="str" value="<?php echo $row['str']; ?>" name="str">
                            <option selected disabled >--Select--</option>
                            <option value = "STEM">STEM</option>
                            <option value = "ABM">ABM</option>
                            <option value = "HUMMS">HUMMS</option>
                            <option value = "GAS">GAS</option>
                        </select>
		<input type="submit" name="submit">
		<a href="shs.php">Back</a>
	</form>
</body>
</html>