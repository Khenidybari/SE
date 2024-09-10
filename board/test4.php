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
        <form action="collegecode.php" method="post"> 
            <h3>College Info</h3>
            <input type="text" name="name" placeholder="First Name" required>
            <input type="text" name="middle" placeholder="Middle Name" required>
            <input type="text" name="last" placeholder="Last Name" required>

            <input type="text" name="dategraduated" placeholder="College Date Graduated"><br><br>
            <label for = "college">Choose a college </label>
                        <select id = "col" name="college">
                            <option selected disabled >--Select--</option>
                            <option value = "CCS">CCS</option>
                            <option value = "CSM">CSM</option>
                            <option value = "ENGINEERING">ENGINEERING</option>
                        </select><br><br>

            <label for = "dept">Choose a course </label>
                        <select id = "dept" name="dept">
                            <option selected disabled >--Select--</option>
                            <!-- <option value = "IT">IT</option>
                            <option value = "CS">CS</option>
                            <option value = "BIOLOGY">BIOLOGY</option>
                            <option value = "CHEMISTRY">CHEMISTRY</option>
                            <option value = "PHYSICS">PHYSICS</option>
                            <option value = "CIVIL ENGINEERING">CIVIL ENGINEERING</option>
                            <option value = "CHEMICAL ENGINEERING">CHEMICAL ENGINEERING</option>
                            <option value = "ELECTRICAL ENGINEERING">ELECTRICAL ENGINEERING</option>
                            <option value = "SECONDARY EDUCATION ENGLISH MAJOR">SECONDARY EDUCATION ENGLISH MAJOR</option>
                            <option value = "ELEMENTARY EDUCATION">ELEMENTARY EDUCATION</option> -->
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
           
<script>
  var college =document.getElementById ('col');
  college.addEventListener('change',function(){
    var value = this.value;
    // console.log(value);
    fetch('collegequery.php?value=' + encodeURIComponent(value))
      .then(response => response.json())
      .then(data => {
        var courses = document.getElementById('dept');
        courses.innerHTML = '';
        console.log(data);
        data.map(item => {
        console.log(item);
        var option = document.createElement('option');
        option.text = item;
        option.value = item;
        courses.appendChild(option);
        });


      })
      .catch(error => {
        // Handle any errors here
        console.error(error);
        console.log(xhr.responseText);
      });
  });
       
</script>

   
</body>
</html>