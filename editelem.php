<!DOCTYPE html>
<html>
  <link rel= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel= "https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script scr = "https://code.jquery.com/jquery-3.5.1.js">
  <script scr = "https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js">
  <script scr = "https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js">
  <script src="assets/js/tablescript.js"></script>
  

<head>
  <title>test</title> 
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <a class = "btn btn-primary" href="add.php" role="button">Add new</a>
      <div class="table-responsive">
                  <table id="#example" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th>ID</th>
                   <th>First Name</th>
                  <th>Last Name</th>
                   <th>actions</th>
                   </tr>
                   </thead>
                <tbody>

      
      <?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//edit school name
$sql ="select id, first_name, last_name from alumin where id = id";
$result = mysqli_query($conn, $sql);
?>
              <?php while ($row = mysqli_fetch_assoc($result)) { 
                echo "
                    <tr>
                    <td>  $row[id] </td>
                     <td>  $row[first_name]  </td>
                      <td>  $row[last_name]  </td>
                       <td>
                       
                       <button type='button' class='btn btn-primary btn-sm editbtn' data-toggle='modal'
                        data-target='#exampleModalCenter' data-id=' $row[id]' data-first_name='$row[first_name]'
                        data-last_name='$row[last_name]'>
                        EDIT
                      </button>
         </td>
                       </tr>
                    
                    ";
              }
                    ?>

				  
			  </tbody>
			  </table>
			  <form action="database.php" method="post">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method="POST" action="database.php" method="post">
		<input type="hidden" name = "id"  id="edit-id">
		<label>Fist name:</label><input type="text" name = "first_name" id="edit-first_name"><br>
		<label>Last name:</label><input type ="text" name="last_name" id="edit-last_name" >
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" value="Update" name="Update">Update</button>
      </div>
    </div>
  </div>
</div>
			  </body>
			  <script>
$(document).ready(function() {
  $('.editbtn').on('click', function() {
    $('#edit-id').val($(this).data('id'));
    $('#edit-first_name').val($(this).data('first_name'));
    $('#edit-last_name').val($(this).data('last_name'));

  });
});
</script>
			