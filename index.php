<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "alumni";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$results_images = array();
$image_urls = array();
$image_path = "upload/";

$sql = "SELECT image FROM gallery";
$sql_run = mysqli_query($conn, $sql);


if (mysqli_num_rows($sql_run) > 0) {
    while ($row = mysqli_fetch_array($sql_run, MYSQLI_ASSOC)) {
        $results_images[] = $row;
    }
}

foreach ($results_images as $row) {
    $image_urls[] = $image_path . str_replace(" ","",$row['image']);
    
}
$img = array();
$img_urls = array();
$img_path = "officers/";

$sql = "SELECT img FROM officers";
$sql_run = mysqli_query($conn, $sql);


if (mysqli_num_rows($sql_run) > 0) {
    while ($row = mysqli_fetch_array($sql_run, MYSQLI_ASSOC)) {
        $img[] = $row;
    }
}

foreach ($img as $row) {
    $img_urls[] = $img_path . str_replace(" ","",$row['img']);
    
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
    <link rel="stylesheet" href="assets/css/Main.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--



</head>

<body>

    <-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <h4> <img src="assets/images/ICON1.png" alt=""> </h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#Gallery">Gallery</a></li>
                            <li class="scroll-to-section"><a href="#Goals">Vision & Mission</a></li>
                            <li class="scroll-to-section"><a href="#About">Officers</a></li>
                            <li class="scroll-to-section"><a href="#Map">Map</a></li>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="vh-100" style="background-image: url('assets/images/MAINN.png');background-position: center;">
        <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-24">
                        <div class="row">
                            <div class="col-24" style="text-align: center;">
                                <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                    data-wow-delay="1s">

                                    <div class="col-lg-24">
                                        <h2 style="font-size: 550%;">ALUMNI OFFICE MANAGEMENT SYSTEM</h2>
                                    </div>
                                </div>
                                <br>
                                <div class="col-lg-45">
                                    <div class="main-blue-button scroll-to-section">
                                        <a href="list.php">List Of Alumni </a>
                                        <ul>
                                            <br>
                                            <div class="main-blue-button scroll-to-section">
                                                <a href="newadmin/about.php"> About Us </a>
                                            </div>
                                    </div>
                                </div>
                                <div class="row-cols-lg-4">
                                    <div class="right-image wow fadeInRight" data-wow-duration="1s"
                                        data-wow-delay="0.5s">
                                        <img src="#" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div id="Gallery" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>ALUMNI OFFICE</h6>
                        <h2>A glimpse of the <em>ALUMNI OFFICE</em> of <span>Western Mindanao State University</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>


         <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                    <?php

                        foreach ($image_urls as $image_url) {

                            echo '
                            <div class="item">
                            <div class="portfolio-item">
                                <div class="thumb">
                                <img src="' . $image_url . '" alt="" width=381px height=215px">
                                </div>
                            </div>
                            </div>
                                ';
                        }
                    ?>
            </div>
    </div>
    </div>
    </div>
    

        <div id="Goals" class="about-us section" style="justify-content: center; padding-top: 10%;">

            <style>
                .card-group {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    gap: 20px;
                    /* Adjust the gap value to control the separation between cards */
                    flex-wrap: wrap;
                    /* Allow cards to wrap to a new line if there isn't enough horizontal space */
                }

                .card {
                    max-width: 600px;
                    /* Adjust the maximum width as desired */
                }

                .card-img-top {
                    width: 100%;
                    /* Ensures the image width fills the card */
                    height: auto;
                    /* Automatically adjusts the image height */
                }
            </style>
            <div class="card-group">
                <div class="card" style="background-color: #F1F1F1;">
                    <img class="card-img-top" src="assets/images/wmsu12.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">VISION</h3>
                        <p class="card-text">The Alumni Relations Office is the center of excellence for the convergence
                            of all alumni undertakings locally and globally.</p>
                    </div>
                </div>


                <div class="card-group">
                    <div class="card" style="background-color: #F1F1F1;">
                        <img class="card-img-top" src="assets/images/wmsu13.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">MISSION</h3>
                            <p class="card-text">To serve as the conduit of all alumni activities of the university
                                locally
                                and worldwide</p>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div id="About" class="about-us section">
            <div class="container" style="justify-content: center; padding-top: 10%;">
                <h2 style="text-align: center; font-weight: bold;">OFFICERS OF THE ALUMNI ASSOCIATION</h2>
                <br>
                <div class="row">
                <?php
                            foreach ($img_urls as $img_url) {
                                echo '
                                    <div class="col-3">
                                        <div class="card">
                                        <img src="' . $img_url . '" class="card-img-top" alt="" width=400px height=150px">
                                            <div class="card-body">
                                                <h5 class="card-title" style="margin-bottom: 0.2rem; font-weight: bold;">RONALD F. ABA-A</h5>
                                                <p style="margin-bottom: 0;">Alumni President</p>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }
                        ?>
                </div>
            <br>
            <br>


            <div id="Map" class="contact-us section" style="color: red;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.s">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="section-heading">
                                            <h2>DIRECTIONS TO THE ALUMNI OFFICE</h2>


                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="assets/images/maps.png" alt="">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright © 2023 TRIA-CCS Co., Ltd. All Rights Reserved.

                                <br>Web Designed by CCS GROUP 3 (BSIT3A) STUDENTS</a>
                                <a href="SE-ALUMNI1.php">
                                    <button type="button" class="btn btn-outline-light"
                                        style="margin-top: 35px; float: right">ABOUT US</button></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Scripts -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/js/owl-carousel.js"></script>
            <script src="assets/js/animation.js"></script>
            <script src="assets/js/imagesloaded.js"></script>
            <script src="assets/js/custom.js"></script>

            </body>

</html>