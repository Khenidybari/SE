<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="assets/css/main.css">
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
                        <nav class="logo">
                        <h4> NEW INFORMATION </h4>
                        </nav>
                        
				</div>
                </div>
            </div>
        </div>
    </header>
	
  <div class="container py-50 h-70" style="padding-top:10%;">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
         
    
      
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

		<label for = "str">Choose a strand </label>
                        <select name="strand">
                            <option selected disabled >--Select--</option>
                            <option value = "STEM">STEM</option>
                            <option value = "ABM">ABM</option>
                            <option value = "HUMMS">HUMMS</option>
                            <option value = "GAS">GAS</option>
                        </select><br>

		<label for="seniorhighschool_dategraduated">Senior High School Date Graduated:</label>
		<input type="text" name="seniorhighschool_dategraduated" required><br>

		<label for="school_name">College:</label>
		<input type="text" name="cschoolname" required><br>

		<label for = "str">Choose a course </label>
                        <select name="course">
                            <option selected disabled >--Select--</option>
                            <option value = "NURSING">NURSING</option>
                            <option value = "IT">IT</option>
                            <option value = "ENGINEERING">ENGINEERING</option>
                            <option value = "EDUCATION">EDUCATION</option>
                        </select> <br>

		<label for="college_dategraduated">College Date Graduated:</label>
		<input type="text" name="college_dategraduated" required><br>
        
		<input type="submit" value="Submit" name="Submit">
        <a href="admin.php">
                        <button type="button" class="btn btn-outline-light" style="margin-top: 35px; float: right"> BACK</button>
                      </a>
	</form>
</body>
</html>
