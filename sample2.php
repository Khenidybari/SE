<!DOCTYPE html>
<html>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.csss" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/tablescript.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<head>
  <title>test</title> 
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
      <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
					$query=mysqli_query($conn,"select a.id,a.first_name,a.last_name, e.schoolname AS elementary_school,e.dategraduated AS elementary_date FROM alumin a LEFT JOIN elementary e ON a.elementary_id = e.elementary_id");
          if ($query->num_rows > 0) {
            echo '<div class="table-responsive">';
                  echo '<table id="example" class="table table-bordered table-hover">';
                  echo '<thead>';
                  echo '<tr>';
                  echo '<thID</th>';
                  echo '<th>First Name</th>';
                  echo '<th>Last Name</th>';
                  echo '<th>school name</th>';
                  echo '<th>date</th>';
                  echo '<th>action</th>';
                  echo '</tr>';         
                  echo '</thead>';
                  echo '<tbody>';
                  while($row=mysqli_fetch_array($query)){
                    echo '<tr>';
                      echo '<td>' . $row['id'] . '</td>';
                      echo '<td>' . $row['first_name'] . '</td>';
                      echo '<td>' . $row['last_name'] . '</td>';
                      echo '<td>' . $row['elementary_school'] . '</td>';
                      echo '<td>' . $row['elementary_date'] . '</td>';
                      echo '<td>' ;
                      echo '<div> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-id="<?=  $row ['id'] ?>" data-first_name="<?= $row['first_name'] ?>"
                      data-last_name="<?= $row['last_name'] ?>" data-elementary_school="<?= $row['elementary_school'] ?> data-elementary_date="<?= $row['elementary_date'] ?>"> EDIT </button>';
                      echo '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                      echo '<div class="modal-dialog modal-dialog-centered" role="document">';
                      echo  '<div class="modal-content">';
                      echo  '<div class="modal-header">';
                      echo  '<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>';
                      echo  '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                      echo  '<span aria-hidden="true">&times;</span>';
                      echo  '</button>';
                      echo  '</div>';
                      echo  '<div class="modal-body">';
                      echo  '<form method = "POST" action = "">';
                      echo  '<table class = "table">';
                      echo  '<td><input type = "hidden" name = "id" value = "' . $row['id'] .'"></td>';
                      echo  '<tr><td>First Name</td><td><input type= "text" name = "first_name" style = "width: 80%;"value="';
                      echo  '<tr><td>Last Name</td><td><input type= "text" name = "last_name" style = "width: 80%;"value="';
                      echo  '<tr><td>School Name</td><td><input type= "text" name = "first_name" style = "width: 80%;"value="';
                      echo  '<tr><td>Date Graduated</td><td><input type= "text" name = "first_name" style = "width: 80%;"value="';
                      echo  '</div>';
                      echo  '<div class="modal-footer">';
                      echo  '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
                      echo  '<button type="button" class="btn btn-primary">Save changes</button>';
                      echo  '</div>';
                      echo  '</div>';
                      echo  '</div>';
                      echo  '</div>';
                      echo  '<td>' . "<a href =class btn btn-sm btn info>edit</a>"; 
                      echo  '</tr>';
                  }
                }
    ?>
</body>

    
    
</html >

//query sa database

SELECT a.id, a.first_name,a.last_name,e.dategraduated AS elementary_date,h.dategraduated AS highschool_date, s.strand AS strand,
          s.dategraduated AS seniorhighschool_date, c.course AS course, c.dategraduated AS college_date
           FROM alumin a LEFT JOIN elementary e ON a.elementary_id = e.elementary_id LEFT JOIN highschool h ON a.highschool_id = h.highschool_id
           LEFT JOIN seniorhighschool s ON a.seniorhighschool_id = s.seniorhighschool_id LEFT JOIN college c ON a.college_id = c.college_id WHERE a.id = id



           // to edit including school name query
           select id, first_name, last_name,elementary_id,school_name,date_graduated from alumin left join elementary where elementary_id = id






 <?php
 //$results_images = array();
 //$image_urls = array();
 //$image_path = "upload/";
 
 //$sql = "SELECT image FROM gallery";
 //$sql_run = mysqli_query($conn, $sql);
 
 
 //if (mysqli_num_rows($sql_run) > 0) {
   //  while ($row = mysqli_fetch_array($sql_run, MYSQLI_ASSOC)) {
   //      $results_images[] = $row;
   //  }
 //}
 
 //foreach ($results_images as $row) {
 //    $image_urls[] = $image_path . $row['image'];
 //}
 
 
 

//foreach ($image_urls as $image_url) {

    //echo '<div class="thumb">
    //<img src="' . $image_url . '" alt="" width=381px height=215px">
    //<div class="hover-content">
        //<div class="inner-content">
           // <a href="#">
             //   <h4>Alumni Office</h4>
            //<span>Receiving Area</span>
            
       // </div>
    //</div>
//</div>';
        
}


?>