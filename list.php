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


  <style>
  .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
  </style>
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <a href="index.php">
            <button type="button" class="btn btn-outline-light" style="margin-top: 35px; float: right">BACK</button></a>
</head>
<body>

  <div class="container"style="justify-content: center; padding-top: 10%;">
    <div class="row">
      <section class="vh-100" style="background-image: url('assets/images/MAINN.png');background-position: center;">
        <div class="col-md-12">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-boardered table-hover" style="width:100%">
            <div class="btn-group">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Date Graduated</th>
                </tr>
              </thead>


<div class="dropdown">
  <button class="btn btn-info dropdown-toggle">Year levels & Awards</button>
  <div style="padding-top: 10px;">
  <div class="dropdown-content">
  <a href="list.php">Elementary</a>
  <a href="listjhs.php">Junior High</a>
  <a href="listshs.php">Senior High</a>
  <a href="listcollege.php">College</a>
  <a href="awards.php">Loyalty Award</a>
  <a href="silverjubilarian.php">Silver Jubilarian</a>
  </div>
  </div>
</div>
              <tbody>


                        <?php

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "alumni";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        if (!$conn) {
                          die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "SELECT * FROM elementary WHERE id=id";
                        $result = $conn->query($sql);

                        if (!$result) {
                          die("Invalid query: " . $conn->error);
                        }
                        while ($row = $result->fetch_assoc()) {
                          echo "
                          <tr>
                          <td>  $row[id] </td>
                           <td>  $row[name]  </td>
                           <td>  $row[middle]  </td>
                            <td>  $row[last]  </td>
                            <td>  $row[gender]  </td>
                            <td>  $row[dategraduated]  </td>
                             </tr>
                    
                    ";
                        }
                        ?>

                      </tbody>
                    </table>

          </body>

</html>