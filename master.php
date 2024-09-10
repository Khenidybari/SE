<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <title>WMSU ALUMNI SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">


    </head>
    
<body>
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a class="logo">
                            <h4> <img src="assets/images/wmsu.png" alt=""> MASTER ALUMNI LIST </h4>
                           
<br>
<table>
<div class="container">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>DEFAULT ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
      </tr>
<?php
$conn = mysqli_connect("localhost","root","","login_register");
$sql =  "SELECT * FROM 	users";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result -> fetch_assoc()){
        echo"<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td></tr>";
         
    }
}else{
    echo "NO results";
}
$conn->close();
?>

</table>
</body>