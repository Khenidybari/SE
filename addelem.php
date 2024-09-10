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
              <h2 class="text-uppercase text-center mb-5">ADD ELEMENTARY</h2>

                <?php
                 if(isset($_POST["submit"])){

                    $name = $_POST["name"];
                    $yeargraduated = $_POST["yeargraduated"];
                    $errors = array();
                    if (empty($name) OR empty($yeargraduated)) {
                      array_push($errors,"All fields are required");
                    }
                      require_once "database.php";
                      $sql = "SELECT * FROM elem WHERE name = '$name'";
                      $result = mysqli_query($conn, $sql);
                      $rowcount = mysqli_num_rows($result);
                      
                      if(count($errors)>0){
                        foreach($errors as $error){
                          echo "<div class= 'alert alert-danger'>$error</div>";
                        }
                      }else{
                        $sql = "INSERT INTO elem (name, yeargraduated) Values ( ?, ? )";
                        $stmt = mysqli_stmt_init($conn);
                        $preparestmt = mysqli_stmt_prepare($stmt,$sql);
                        if ($preparestmt){
                          mysqli_stmt_bind_param($stmt,"ss",$name,$yeargraduated);
                          mysqli_stmt_execute($stmt);
                          echo"<div class= 'alert alert-success'>You are regsitered successfully.</div>";
                        }else{
                          die("Something went wrong");  
                        }
                      }
                   }
                 
                  ?>

              <form action="addelem.php" method="post">

                <div class="form-outline mb-4">
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Name" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                <input type="yeargraduated" class="form-control form-control-lg" name="yeargraduated" placeholder="year graduated"/>
                  <label class="form-label" for="form3Example4cg">Year Graduated</label>
                </div>

                <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                </div>
                

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
