<?php 
  require_once('logincode.php');

  if(!isset($_SESSION["auth_role"])) {
    header("Location: index.php");
    session_destroy();
    exit();
  }else{
    header("http://localhost/SE-Alumni/login.php");
  }

?>

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
              <h4> <img src="assets/images/wmsu.png" alt=""> ADMIN DASHBOARD  | WELCOME <?php echo $_SESSION["auth_role"]; ?></h4>
            </nav>
            <form method="POST" action="logout.php">
              <button type="submit" name="logout" id="myButton" class="btn btn-outline-light" style="margin-top: 35px; float: right">LOGOUT</button>
            </form>
            <a href="board/index.php">
              <button type="button" class="btn btn-outline-light" style="margin-top: 35px; float: right">SUPER</button>
            </a>
        </div>
      </div>
      </nav>
    </div>
    </div>
    </div>
  </header>


  <div class="container" style="justify-content: center; padding-top: 15%;">
    <div class="row">
      <div class="col-3 order-1">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/WMSU.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ELEMENTARY ALUMNI</h5>
            <a href="elemadmin.php" class="btn btn-danger">View List</a>
          </div>
        </div>
      </div>
      <div class="col-3 order-2">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/WMSU.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">JUNIOR HIGH ALUMNI</h5>
            <a href="jhadmin.php" class="btn btn-danger">View List</a>
          </div>
        </div>
      </div>
      <div class="col-3 order-3">
        <div class="card" style="width: 18rem; ">
          <img src="assets/images/WMSU.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SHS ALUMNI</h5>
            <a href="shsadmin.php" class="btn btn-danger">View List</a>
          </div>
        </div>
      </div>
      <div class="col-3 order-4">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/WMSU.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">COLLEGE ALUMNI</h5>
            <a href="collegeadmin.php" class="btn btn-danger">View List</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script>
    destroySession() {
          fetch('../../settings/logout.php')
            .then(response => {
              if (response.ok) {
                // Session has been destroyed
                console.log('Session destroyed');
                window.location.href = "/";
              } else {
                // Session destruction failed
                console.error('Failed to destroy session');
              }
            })
            .catch(error => {
              // Error occurred while destroying session
              console.error('Error destroying session:', error);
            });
      },

      const button = document.getElementById("myButton");
      button.addEventListener("click", myFunction);

      function myFunction() {
        // Code to be executed when the button is clicked
        console.log("Button clicked!");
      }
</script>