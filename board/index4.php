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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <?php
    include('message.php');
    ?>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-2"> Alumni Admin</div>
            </a>
            

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                    
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Grade Levels</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Choose a Grade level :</h6>
                        <a class="collapse-item" href="elem.php">Elementary</a>
                        <a class="collapse-item" href="junior.php">Junior High School</a>
                        <a class="collapse-item" href="senior.php">Senior High School</a>
                        <a class="collapse-item" href="college.php">College</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Certificate</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">PDF certificate:</h6>
                        <a class="collapse-item" href="Certificate.php">CERTIFICATION</a>

                    </div>
                </div>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Display Settings
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <?php if($_SESSION['auth_role'] == 'superadmin') : ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"> Screens:</h6>
                        <a class="collapse-item" href="gallery.php">Gallery</a>
                        <a class="collapse-item" href="user.php">Users</a>
                        <a class="collapse-item" href="officers.php">Officers</a>
                        <div class="collapse-divider"></div>

                    </div>
                </div>
            </li>
            <?php endif; ?>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsechart"
                    aria-expanded="true" aria-controls="collapsechart">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span>
                </a>
                <div id="collapsechart" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"> Choose Grade Level:</h6>
                        <a class="collapse-item" href="index1.php">Elementary</a>
                        <a class="collapse-item" href="index2.php">High School</a>
                        <a class="collapse-item" href="index3.php">Senior High School</a>
                        <a class="collapse-item" href="index4.php">College</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            <!-- Nav Item - Tables -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                      <!-- Page Heading -->
                      <div class="d-sm-flex align-items-center justify-content-between mb-4" style = "padding-top: 30px;">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <?php if(isset($_SESSION['auth_user'])) : ?>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['auth_user']['user_name']?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="SE-ALUMNI1/login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                        </li>
                        <?php endif; ?>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                        <?php
 $hostName = "localhost";
 $dbUser = "root";
 $dbPassword = "";
 $dbName = "alumni";
 $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
 
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Getting Started with Chart JS with www.chartjs3.com</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(54, 162, 235, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(54, 162, 235, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 203%;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        background: white;
      }
    </style>
  </head>
  <body>




<!-- CHART 1 -->
  <div class="chartBox">
    <canvas id="myChart1"></canvas>
    <canvas id="myChart2"></canvas>
    <canvas id="myChart3"></canvas>
    <canvas id="myChart4"></canvas>
  </div>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php


  // eto ung number of rows sa elementary table
  $col_count = "SELECT id FROM college";
  $col_count_run = mysqli_query($conn, $col_count);
  $col_rowcount = mysqli_num_rows($col_count_run);

  // eto naman kinukuha nia ung value ng dategraduated - ung distinct is ginagawa nia as 1 ang mga may duplicates
  $date_graduated_val = "SELECT DISTINCT dategraduated FROM college";
  $date_graduated_val_run = mysqli_query($conn, $date_graduated_val);
  $date_grad_rows = mysqli_num_rows($date_graduated_val_run);

  if($date_grad_rows > 0){
    $date_graduated = [];
    $select_year_count = [];

    while($date_graduated_row = mysqli_fetch_assoc($date_graduated_val_run)){
      // eto ang array destructuring, meaning nilalagay nia jan sa array lahat ng value na nakukuha from database
      $date_graduated[] = $date_graduated_row['dategraduated'];

      $year = $date_graduated_row['dategraduated'];
      $select_year = "SELECT dategraduated FROM college WHERE dategraduated = $year";
      $select_year_run = mysqli_query($conn, $select_year);
      $select_year_count[] = mysqli_num_rows($select_year_run);

    }
  }


?>


<script>
  // setup 
  // then eto na ung json conversion format
const date_graduated = <?php echo json_encode($date_graduated); ?>;
const year_count = <?php echo json_encode($select_year_count); ?>;


 var yearchart = document.getElementById('myChart1');
 var collegechart = document.getElementById('myChart2');
 var departmentchart = document.getElementById('myChart3');
 var genderchart = document.getElementById('myChart4');

 let yearchartinstance;
 let collegechartinstance;
 let departmentchartinstance;
 let genderchartinstance;

  const data1 = {
    labels: date_graduated,
    datasets: [{
      label: 'College Graduate Per Year',
      data: year_count,
      backgroundColor: [
        'rgba(255, 26, 104, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(0, 0, 0, 0.2)'
      ],
      borderColor: [
        'rgba(255, 26, 104, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(0, 0, 0, 1)'
      ],
      borderWidth: 1
    }]
  };

  // config 
  const config1 = {
    type: 'bar',
    data: data1,
    options: {
      scales: {
        y: {
          beginAtZero: true,
          max: <?php echo $col_rowcount; ?>,
        }
      }
    },
        plugins: [ChartDataLabels] 
  };

  // render init block
  const myChart1 = new Chart(
    yearchart,
    config1
  );



//    ****************** CLICK HANDLER ***********************
function clickhandler(click){
    const points = myChart1.getElementsAtEventForMode(click, 'nearest', { intersect: true }, true );

    if (points.length) {
      if (collegechartinstance) {
          // If a chart instance already exists, destroy it before creating a new one
          collegechartinstance.destroy();
        }
      
      const firstPoint = points[0];

      const value = myChart1.data.labels[firstPoint.index];


      
        fetch('collegequery2.php?value=' + encodeURIComponent(value))
            .then(response => response.json())
            .then(data => {


                var data_array = [];
                // number of grads per college
                var data_array_for_college = [];

                var data_array_for_dept = [];

        
                data.forEach(item => {

                data_array_for_college.push({ college: item.college });
                
                data_array_for_dept.push(item);

                const existingItem = data_array.some(obj => obj.college === item.college);
    

                    if (!existingItem) {

                    data_array.push({
                    college: item.college,
                    dategraduated: item.dategraduated,
                    department: item.dept
                    });

                }

            

    
                });

            
                    for (let index = 0; index < data_array.length; index++) {
                    data_array[index]['numofgrads'] = data_array_for_college.filter(item => {return item.college == data_array[index]['college']}).length
  
                }

                // console.log(data_array);

          

  

    // Chart instance
            const data2 = {
        labels: data_array.map(item => {return item.college}),
        datasets: [{
        label: 'Graduated this year',
        data:data_array.map(item => {return item.numofgrads}),
        backgroundColor: [
            'rgba(255, 26, 104, 0.2)', 
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(0, 0, 0, 0.2)'
        ],
        }]
    };

    // config 
    const config2 = {
        type: 'bar',
        data: data2,
        options: {
        scales: {
            y: {
            beginAtZero: true,
            }
        }
        },
        plugins: [ChartDataLabels] 
    };
    // Handle the response data here
        

 collegechartinstance = new Chart(
          collegechart,
          config2
        );


        // **************************** DEPARTMENT CLICK HANDLER *********************************

        function clickhandlerForCollege(click){
    const points = collegechartinstance.getElementsAtEventForMode(click, 'nearest', { intersect: true }, true );

    if (points.length) {
      if (departmentchartinstance) {
          // If a chart instance already exists, destroy it before creating a new one
          departmentchartinstance.destroy();
        }
      
      const firstPoint = points[0];

      const value = collegechartinstance.data.labels[firstPoint.index];
      
      fetch('coldepquery.php?value=' + encodeURIComponent(value))
      .then(response => response.json())
      .then(data => {


        var deptholder = [];
        var data_array3 = [];

        data.forEach(item => {
            data_array3.push({
                dept: item.dept
            })
        });

        for (let index = 0; index < data_array3.length; index++) {

            data_array3[index]['numberofgrads'] = data_array_for_dept.filter(item => {return item.dept == data_array3[index]['dept']}).length
            
            
        }
        console.log(data_array_for_dept);
       

// Chart instance
         const data3 = {
    labels: data_array3.map(item => {return item.dept}),
    datasets: [{
      label: 'Graduated this year',
      data:data_array3.map(item => {return item.numberofgrads}),
      backgroundColor: [
        'rgba(255, 26, 104, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(0, 0, 0, 0.2)'
      ],
    }]
  };

  // config 
  const config3 = {
    type: 'bar',
    data: data3,
    options: {
      scales: {
        y: {
          beginAtZero: true,
        }
      }
    },
    plugins: [ChartDataLabels]
  };
 // Handle the response data here
       

 departmentchartinstance = new Chart(
          departmentchart,
          config3
        );


      })
      .catch(error => {
        // Handle any errors here
        console.error(error);
      });



    }
  }

    collegechart.onclick = clickhandlerForCollege;


        // **************************** END OF DEPARTMENT CLICK HANDLER *********************************



        // *************************** GENDER CLICK HANDLER *******************************************
        function genderclickhandler(click){
    const points = departmentchartinstance.getElementsAtEventForMode(click, 'nearest', { intersect: true }, true );

    if (points.length) {
      if (genderchartinstance) {
          // If a chart instance already exists, destroy it before creating a new one
          genderchartinstance.destroy();
        }
      
      const firstPoint = points[0];

      const value = departmentchartinstance.data.labels[firstPoint.index];
      console.log(value);


        var genderholder = {
          male_count: 0,
          female_count: 0,
        };

        data_array_for_dept.forEach(item => {
            if(item.dept === value){
                if (item.gender === 'Male') {
                    genderholder.male_count++;
                }
                if (item.gender === 'Female') {
                    genderholder.female_count++;
                }
            }
        });


        
// Chart instance
const data4 = {
    labels: ['Male','Female'],
    datasets: [{
      label: 'Graduated this year',
      data:[genderholder.male_count, genderholder.female_count],
      backgroundColor: [
        'rgba(255, 26, 104, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(0, 0, 0, 0.2)'
      ],
    }]
  };

  // config 
  const config4 = {
    type: 'bar',
    data: data4,
    options: {
      scales: {
        y: {
          beginAtZero: true,
  
        }
      }
    },
    plugins: [ChartDataLabels]
  };
 // Handle the response data here
       

 genderchartinstance = new Chart(
          genderchart,
          config4
        );

      } 
    }
    
    departmentchart.onclick = genderclickhandler;

        // *************************** END OF GENDER CLICK HANDLER *******************************************
      })
      .catch(error => {
        // Handle any errors here
        console.error(error);
      });

      // console.log(value);

     
    }
  }

  yearchart.onclick = clickhandler;


// ************************ END OF CLICK HANDLER *************************
</script>
  </body>
</html>

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020  </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <form action="logincode.php" method="post">
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="logout">Logout</button>
                </div>
            </div>
        </div>
    </div>
    </form >

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    

</body>

</html>