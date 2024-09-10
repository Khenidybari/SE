<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    if (!isset($_GET["a.id"])){
        header("location: index.php");
        exit; 
    }

    $id = $_GET["a.id"];

    $sql = "SELECT a.id, a.first_name,a.last_name, e.schoolname AS elementary_school,e.dategraduated AS elementary_date,
    h.schoolname  AS highschool_school, h.dategraduated AS highschool_date, s.schoolname AS seniorhighschool_school,
    s.dategraduated AS seniorhighschool_date, c.schoolname AS college_school,c.dategraduated AS college_date
     FROM alumin a LEFT JOIN elementary e ON a.elementary_id = e.elementary_id LEFT JOIN highschool h ON a.highschool_id = h.highschool_id
     LEFT JOIN seniorhighschool s ON a.seniorhighschool_id = s.seniorhighschool_id LEFT JOIN college c ON a.college_id = c.college_id WHERE a.id = id";
    $result = $conn ->query($sql);
    $row = $result -> fetch_assoc();

    if(!$row){
        header("location: sample.php");
        exit;
    }

    $id= $row["a.id"];
    $firstname=$row["first_name"];
    $lastname= $row ["last_name"];
    $schoolname= $row ["schoolname"];
    $dategraduated= $row ["dategraduated"];
}
else{

    $id= $row["a.id"];
    $firstname=$row["first_name"];
    $lastname= $row ["last_name"];
    $schoolname= $row ["schoolname"];
    $dategraduated= $row ["dategraduated"];

    do{
        if (empty($id) ||empty($firstname)|| empty($lastname)|| empty($schoolname)||empty($dategraduated)){
            $errorMessage = "All the fields are required";
            break;
        }
        $sql = "UPDATE a.id, a.first_name,a.last_name, e.schoolname AS elementary_school,e.dategraduated AS elementary_date FROM alumin a LEFT JOIN elementary e ON a.elementary_id = e.elementary_id".
        "SET a.if = '$id', first_name = '$firstname', last_name = '$lastname', schoolname = 'schoolname',$dategraduated = 'dategraduated'".
        "WHERE a.id = $id";

        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalid Query" . $conn->error;
            break;
        }

        $successMessage = "Client updated correctly!";
        header("location: sample.php");
        exit;

    } while (true);



}

?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<h1>Add sample</h1>
	
	<form action="database.php" method="post">
		<label for="first_name">First Name:</label>
		<input type="text" name="first_name" required><br>

		<label for="last_name">Last Name:</label>
		<input type="text" name="last_name" required><br>

		<label for="school_name">Elementary School:</label>
		<input type="text" name="eschoolname" required><br>

		<label for="elementary_dategraduated">Elementary School Date Graduated:</label>
		<input type="text" name="elementary_dategraduated" required><br>

		<label for="school_name">High School:</label>
		<input type="text" name="hschoolname" required><br>

		<label for="highschool_dategraduated">High School Date Graduated:</label>
		<input type="text" name="highschool_dategraduated" required><br>

		<label for="school_name">Senior High School:</label>
		<input type="text" name="shschoolname" required><br>

		<label for="seniorhighschool_dategraduated">Senior High School Date Graduated:</label>
		<input type="text" name="seniorhighschool_dategraduated" required><br>

		<label for="school_name">College:</label>
		<input type="text" name="cschoolname" required><br>

		<label for="college_dategraduated">College Date Graduated:</label>
		<input type="text" name="college_dategraduated" required><br>

		<input type="submit" value="Submit" name="Submit">
	</form>
</body>
</html>