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
        <form action="seniorcode.php" method="post"> 
            <h3>Senior High Info</h3>
            <input type="text" name="name" placeholder="First Name" required>
            <input type="text" name="middle" placeholder="Middle Name" required>
            <input type="text" name="last" placeholder="Last Name" required>
            <input type="text" name="dategraduated" placeholder="Senior High Date Graduated"> <br><br>

            <label for = "str">Choose a strand </label>
                        <select name="strand">
                            <option selected disabled >--Select--</option>
                            <option value = "STEM">STEM</option>
                            <option value = "ABM">ABM</option>
                            <option value = "HUMMS">HUMSS</option>
                            <option value = "GAS">GAS</option>
                        </select><br><br>

            <label for = "gender">Choose a gender </label>
                        <select name="gender">
                            <option selected disabled >--Select--</option>
                            <option value = "Male">Male</option>
                            <option value = "Female">Female</option>
                        </select>

            <div class="btn-box" style = "padding-top: 15%;">
            <button type="button"> Back </button>
                <button type="Submit" value="Submit" name="Submit"> Submit </button>
            </div>
        </form>
           


   
</body>
</html>