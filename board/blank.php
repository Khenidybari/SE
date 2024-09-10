<!DOCTYPE html>
<html lang="en">
    
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.csss" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/tablescript.js"></script>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <div class="container">
                <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
                  <table id="example" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th>ID</th>
                   <th>FIRST NAME</th>
                  <th>LAST NAME</th>
                  <th>SCHOOL NAME</th>
                  <th>DATE GRADUATE</th>
                   <th>ACTIONS</th>
                   </tr>
                   </thead>
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
					$sql = "select a.id,a.first_name,a.last_name, e.schoolname AS elementary_school,e.dategraduated AS elementary_date FROM alumin a LEFT JOIN elementary e ON a.elementary_id = e.elementary_id";
          $result = $conn->query($sql);

          if (!$result) {
            die("Invalid query: " . $conn->error);
          }
          while($row= $result->fetch_assoc()){
            echo "
                    <tr>
                    <td>  $row[id] </td>
                     <td>  $row[first_name]  </td>
                      <td>  $row[last_name]  </td>
                      <td>  $row[elementary_school]  </td>
                      <td>  $row[elementary_date]  </td>
                       <td><div>
                       <button type='button' class='btn btn-primary btn-sm editbtn' data-toggle='modal'
                         data-target='#exampleModalCenter' data-id=' $row[id]' data-first_name=' $row[first_name] '
                         data-last_name=' $row[last_name] '>
                         EDIT
                       </button>
                       <form action='database.php' method='POST' class = 'd-inline'>
                      <button type='submit' name='delete' value='$row[id]' class='btn btn-danger btn-sm'>Delete</button>
                      </form>
                          </div>
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
        <h5 class="modal-title" id="exampleModalLongTitle">EDIT INFORMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method="POST" action="database.php" method="post">
		<input type="hidden" name = "id"  id="edit-id">
		<label>Fist name:</label><input type="text" name = "first_name" id="edit-first_name"><br>
		<label>Last name:</label><input type ="text" name="last_name" id="edit-last_name" ><br>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
        <button type="submit" class="btn btn-outline-danger" value="Update" name="Update">UPDATE</button>
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