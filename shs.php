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
                            <h4> <img src="assets/images/wmsu.png" alt=""> SENIOR HIGH SCHOOL ALUMNI LIST </h4>
                           
                        </a>

  <div class="container-fluid px-4">
     <div class="row">
        <div class="col-6">

				</div>
				<div class="col-6 text-end">
					<a href="addshs.php">
						<button class="btn-white" style="margin-top: 35px; ">ADD ALUMNI</button>
					</a>

                </div>
     </div>
                           
<br>
<br>
<table>
<div class="container">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>DEFAULT ID</th>
        <th>NAME</th>
        <th>STRAND</th>
        <th>YEAR GRADUATED</th>
        <th>ACTIONS</th>
      </tr>
      <tbody>
				<?php
					include('database.php');
					$query=mysqli_query($conn,"select * from `shs`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['str']; ?></td>
                            <td><?php echo $row['yeargraduated']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>

</table>
</body>