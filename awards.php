<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.csss" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
    rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/tablescript.js"></script>
  <title>WMSU ALUMNI SYSTEM</title>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <a href="index.php">
            <button type="button" class="btn btn-outline-light" style="margin-top: 35px; float: right">BACK</button></a>
</head>
  
  <div class="container"style="justify-content: center; padding-top: 10%;">
    <div class="row">
      <section class="vh-100" style="background-image: url('assets/images/MAINN.png');background-position: center;">
        <div class="col-md-12">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-boardered table-hover" style="width:100%">
            <div class="btn-group">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
</tr>
</thead>

  <?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT elem.name, elem.middle, elem.last
FROM elementary AS elem
INNER JOIN highschool AS hs ON elem.name = hs.name AND elem.middle = hs.middle AND elem.last = hs.last
INNER JOIN seniorhighschool AS shs ON hs.name = shs.name AND hs.middle = shs.middle AND hs.last = shs.last
INNER JOIN college AS col ON shs.name = col.name AND shs.middle = col.middle AND shs.last = col.last";

$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
                           <td>  $row[name]  </td>
                           <td>  $row[middle]  </td>
                            <td>  $row[last]  </td>
                            
                    
                    ";
    }
} 

    ?>