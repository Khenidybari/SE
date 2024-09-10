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
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                <?php
                 if(isset($_POST["submit"])){

                  $name = $_POST["name"];
                  $email = $_POST["email"];
                  $password = $_POST["password"];
                  $passwordRepeat = $_POST["repeat_password"];
                  $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                  $errors = array();
                  if (empty($name) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                    array_push($errors,"All fields are required");
                  }
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                      array_push($errors,"Email is not valid");
                    }
                    if($password!==$passwordRepeat){
                      array_push($errors,"Password does not match"); 
                    }
                    require_once "database.php";
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $rowcount = mysqli_num_rows($result);
                    if($rowcount>0) {
                      array_push($errors,"Email already existing!");
                    }
                    if(count($errors)>0){
                      foreach($errors as $error){
                        echo "<div class= 'alert alert-danger'>$error</div>";
                      }
                    }else{
                      $sql = "INSERT INTO users (name, email, password) Values ( ?, ?, ? )";
                      $stmt = mysqli_stmt_init($conn);
                      $preparestmt = mysqli_stmt_prepare($stmt,$sql);
                      if ($preparestmt){
                        mysqli_stmt_bind_param($stmt,"sss",$name,$email,$passwordHash );
                        mysqli_stmt_execute($stmt);
                        echo"<div class= 'alert alert-success'>You are regsitered successfully.</div>";
                      }else{
                        die("Something went wrong");  
                      }
                    }
                 }
               
                ?>

              <form action="signup.php" method="post">

                <div class="form-outline mb-4">
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Name" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                <input type="email"  class="form-control form-control-lg" name="email" placeholder = "Email"/>
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password"/>
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                <input type="password" class="form-control form-control-lg" name="repeat_password" placeholder="Repeat Password"/>
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>


                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary" value="Register" name="submit">
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
