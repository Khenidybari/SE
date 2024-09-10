<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




// if(isset($_POST['delete']))
// {
//   $id = mysqli_real_escape_string($conn, $_POST['delete']);
//   $sql = "DELETE FROM users WHERE id = '$id'";
//   $query_run = mysqli_query($conn,$sql);
//   mysqli_close($conn);

//     header("Location: elem.php?success");
//     exit();
 
// }

// if(isset($_POST['Update']))
// {
//   $id = mysqli_real_escape_string($conn, $_POST['id']);
//   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
//     $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);

//     $sql ="UPDATE alumin SET first_name = '$first_name', last_name = '$last_name'  WHERE id = '$id'";

//     mysqli_query($conn,$sql);

//     mysqli_close($conn);

//     header("Location: elem.php?success");
//     exit();
    

// }

if(isset($_POST['Submit'])){
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $elementary_dategraduated = mysqli_real_escape_string($conn, $_POST['elementary_dategraduated']);
    $highschool_dategraduated = mysqli_real_escape_string($conn, $_POST['highschool_dategraduated']);
    $seniorhighschool_strand= mysqli_real_escape_string($conn, $_POST['strand']);
    $seniorhighschool_dategraduated = mysqli_real_escape_string($conn, $_POST['seniorhighschool_dategraduated']);
    $college_course = mysqli_real_escape_string($conn, $_POST['course']);
    $college_dategraduated = mysqli_real_escape_string($conn, $_POST['college_dategraduated']);


     $sql_elementary = "INSERT INTO elementary ( dategraduated) VALUES ('$elementary_dategraduated')";
      mysqli_query($conn, $sql_elementary);
      $elementary_id = mysqli_insert_id($conn);

     $sql_highschool = "INSERT INTO highschool (dategraduated) VALUES ('$highschool_dategraduated')";
      mysqli_query($conn, $sql_highschool);
      $highschool_id = mysqli_insert_id($conn);

      $sql_seniorhighschool = "INSERT INTO seniorhighschool (strand, dategraduated) VALUES ('$seniorhighschool_strand', '$seniorhighschool_dategraduated')";
      mysqli_query($conn, $sql_seniorhighschool);
      $seniorhighschool_id = mysqli_insert_id($conn);

    $sql_college = "INSERT INTO college (course, dategraduated) VALUES ('$college_course', '$college_dategraduated')";
        mysqli_query($conn, $sql_college);
      $college_id = mysqli_insert_id($conn);

    $sql_alumn = "INSERT INTO alumin (first_name, last_name, elementary_id, highschool_id, seniorhighschool_id, college_id) VALUES ('$first_name', '$last_name' ,'$elementary_id','$highschool_id','$seniorhighschool_id','$college_id')";
    mysqli_query($conn, $sql_alumn);

    mysqli_close($conn);

    header("Location: elem.php?success");
    exit();
}
?>

