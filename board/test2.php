<?php 
  require_once('logincode.php');

  if(!isset($_SESSION["auth_role"])) {
    header("Location: ../index.php");
    session_destroy();
    exit();
  }
  else{
    header("http://localhost/SE-Alumni/board/index.php");
  }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/test1.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
     <div class="container">
        <form action="juniorcode.php" method="post"> 
            <h3>Junior High Info</h3>
            <input type="text" name="name" placeholder="First Name" required>
            <input type="text" name="middle" placeholder="Middle Name" required>
            <input type="text" name="last" placeholder="Last Name" required>

            <input type="text" name="dategraduated" placeholder="Junior High Date Graduated"><br><br>
            <label for = "gender">Choose a gender </label>
                        <select name="gender">
                            <option selected disabled >--Select--</option>
                            <option value = "Male">Male</option>
                            <option value = "Female">Female</option>
                        </select>
          
            <div class="btn-box" style = "padding-top: 10%;">
            <button type="button"> Back </button>
                <button type="Submit" value="Submit" name="Submit"> Submit </button>
            </div>
        </form>
           


   
</body>
</html>