<?php
error_reporting(0);
session_start();
session_destroy();
if ($_SESSION['message']) {
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
       
       alert('$message');
       </script>";
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);
$sql1 = "SELECT * FROM teacher";
$result1 = mysqli_query($data, $sql1);
$sql2 = "SELECT * FROM courses";
$result2 = mysqli_query($data, $sql2);

?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coching  Center Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="jstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />



</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <h3>Seven-Tech Coaching</h3>
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="course.php">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admission.php">Admission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="login.php" type="button" class="btn btn-primary mx-5">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>













    <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="c2.png" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="c3.png" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="c1.png" class="d-block w-100" alt="...">

            </div>
        </div>
        <button class="carousel-control-prev text-light" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next text-light" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>






    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">
        <div class="row">

            <?php
            while ($info = $result1->fetch_assoc()) {
            ?>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog">
                        <div class="blog-card-image">
                            <a href="#"> <img class="teacher" src="<?php echo "{$info['image']}" ?>"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h3 class="blog-card-caption">
                                <a href="#"><?php echo "{$info['name']}" ?></a>
                            </h3>
                            <p class="blog-card-description"><?php echo "{$info['description']}" ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>







    <center>
        <h1>Our Courses</h1>
    </center>

    <div class="container">
        <div class="row">

            <?php
            while ($info = $result2->fetch_assoc()) {
            ?>
                <div class="col-md-4">
                    <div class="blog-card blog-card-blog">
                        <div class="blog-card-image">
                            <a href="#"> <img class="teacher" src="<?php echo "{$info['image']}" ?>"> </a>
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="blog-table">
                            <h3 class="blog-card-caption">
                                <a href="#"><?php echo "{$info['name']}" ?></a>
                            </h3>
                            <p class="blog-card-description"><?php echo "{$info['description']}" ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>





    <center>
        <h1>Our Student's Say</h1>
    </center>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css" integrity="sha512-W3ZfgmZ5g1rCPFiCbOb+tn7g7sQWOQCB1AkDqrBG1Yp3iDjY9KYFh/k1AWxrt85LX5BRazEAuv+5DV2YZwghag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="team-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 ">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="Tausi.png" alt="">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Miftahul Jannat Tausi</h5>
                                <div class="mb-3 text-center"><b>CEO</b></div>
                                <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ea adipisci dolorem recusandae, facilis culpa dolores eos natus, quis, explicabo temporibus corrupti provident delectus debitis! Nobis dicta possimus perspiciatis ad? </div>
                            </div>
                        </div>
                        <!--//card-body-->
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto">
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                        </svg><!-- <i class="fab fa-linkedin-in fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg><!-- <i class="fab fa-twitter fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-medium fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>
                                        </svg><!-- <i class="fab fa-medium fa-fw"></i> Font Awesome fontawesome.com --></a></li>

                            </ul>
                            <!--//social-list-->
                        </div>
                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->




                <div class="col-12 col-md-6 ">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="Nofel.png" alt="">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Nofel Hossen</h5>
                                <div class="mb-3 text-center"><b>Managing Director</b></div>
                                <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ea adipisci dolorem recusandae, facilis culpa dolores eos natus, quis, explicabo temporibus corrupti provident delectus debitis! Nobis dicta possimus perspiciatis ad? </div>
                            </div>
                        </div>
                        <!--//card-body-->
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto">
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                        </svg><!-- <i class="fab fa-linkedin-in fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg><!-- <i class="fab fa-twitter fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-medium fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>
                                        </svg><!-- <i class="fab fa-medium fa-fw"></i> Font Awesome fontawesome.com --></a></li>

                            </ul>
                            <!--//social-list-->
                        </div>
                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->







                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="prashanta.png" alt="">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Prashanta Das</h5>
                                <div class="mb-3 text-center"><b>Software Engineer</b></div>
                                <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ea adipisci dolorem recusandae, facilis culpa dolores eos natus, quis, explicabo temporibus corrupti provident delectus debitis! Nobis dicta possimus perspiciatis ad? </div>
                            </div>
                        </div>
                        <!--//card-body-->
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto">
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                        </svg><!-- <i class="fab fa-linkedin-in fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg><!-- <i class="fab fa-twitter fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-medium fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>
                                        </svg><!-- <i class="fab fa-medium fa-fw"></i> Font Awesome fontawesome.com --></a></li>

                            </ul>
                            <!--//social-list-->
                        </div>
                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->








                
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="Fahim.png" alt="">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Yeasin Uddin Fahim</h5>
                                <div class="mb-3 text-center"><b>CEO</b></div>
                                <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ea adipisci dolorem recusandae, facilis culpa dolores eos natus, quis, explicabo temporibus corrupti provident delectus debitis! Nobis dicta possimus perspiciatis ad? </div>
                            </div>
                        </div>
                        <!--//card-body-->
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto">
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                        </svg><!-- <i class="fab fa-linkedin-in fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg><!-- <i class="fab fa-twitter fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-medium fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>
                                        </svg><!-- <i class="fab fa-medium fa-fw"></i> Font Awesome fontawesome.com --></a></li>

                            </ul>
                            <!--//social-list-->
                        </div>
                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->






                
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="Rifat.png" alt="">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Md.Rifat Hasan</h5>
                                <div class="mb-3 text-center"><b>CEO</b></div>
                                <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ea adipisci dolorem recusandae, facilis culpa dolores eos natus, quis, explicabo temporibus corrupti provident delectus debitis! Nobis dicta possimus perspiciatis ad? </div>
                            </div>
                        </div>
                        <!--//card-body-->
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto">
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                        </svg><!-- <i class="fab fa-linkedin-in fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg><!-- <i class="fab fa-twitter fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-medium fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>
                                        </svg><!-- <i class="fab fa-medium fa-fw"></i> Font Awesome fontawesome.com --></a></li>

                            </ul>
                            <!--//social-list-->
                        </div>
                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->



                
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="Tommy.png" alt="">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Tommy Chowdhury</h5>
                                <div class="mb-3 text-center"><b>CEO</b></div>
                                <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ea adipisci dolorem recusandae, facilis culpa dolores eos natus, quis, explicabo temporibus corrupti provident delectus debitis! Nobis dicta possimus perspiciatis ad? </div>
                            </div>
                        </div>
                        <!--//card-body-->
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto">
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                        </svg><!-- <i class="fab fa-linkedin-in fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg><!-- <i class="fab fa-twitter fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-medium fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>
                                        </svg><!-- <i class="fab fa-medium fa-fw"></i> Font Awesome fontawesome.com --></a></li>

                            </ul>
                            <!--//social-list-->
                        </div>
                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->



                
                
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm" src="Jeshan.png" alt="">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Md.Jahidul Alam</h5>
                                <div class="mb-3 text-center"><b>CEO</b></div>
                                <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ea adipisci dolorem recusandae, facilis culpa dolores eos natus, quis, explicabo temporibus corrupti provident delectus debitis! Nobis dicta possimus perspiciatis ad? </div>
                            </div>
                        </div>
                        <!--//card-body-->
                        <div class="card-footer theme-bg-primary border-0 text-center">
                            <ul class="social-list list-inline mb-0 mx-auto">
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                        </svg><!-- <i class="fab fa-linkedin-in fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg><!-- <i class="fab fa-twitter fa-fw"></i> Font Awesome fontawesome.com --></a></li>
                                <li class="list-inline-item"><a class="text-dark" href="#"><svg class="svg-inline--fa fa-medium fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="medium" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>
                                        </svg><!-- <i class="fab fa-medium fa-fw"></i> Font Awesome fontawesome.com --></a></li>

                            </ul>
                            <!--//social-list-->
                        </div>
                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->
























               

              

        </div>

    </section>





















    <section>
        <div class="container">
            <div class="section-heading wow fadeIn">
                <h1>Seven-Tech Coching History</h1>
                <div class="heading-separator"></div>
            </div>
            <div class="row">
                <div class="history-wrapper">
                    <div class="title-wrap text-center one-of-two">
                    </div>
                    <div class="timeline-box one-of-two">
                        <img class="mb-1-6 rounded" src="1995.png" alt="...">
                        <div class="content">
                            <h3 class="h4 mb-2 mb-md-3">Seven tech coaching center history in 1995</h3>
                            <p class="mb-0">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
                        </div>
                        <div class="year">1995</div>
                    </div>
                    <div class="timeline-box one-of-two">
                        <img class="mb-1-6 rounded" src="2003.png" alt="...">
                        <div class="content">
                            <h3 class="h4 mb-2 mb-md-3">Seven tech coaching center history in 2003</h3>
                            <p class="mb-0">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
                        </div>
                        <div class="year">2003</div>
                    </div>
                    <div class="timeline-box one-of-two">
                        <img class="mb-1-6 rounded" src="2018.png" alt="...">
                        <div class="content">
                            <h3 class="h4 mb-2 mb-md-3">Seven tech coaching center history in 2018</h3>
                            <p class="mb-0">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
                        </div>
                        <div class="year">2018</div>
                    </div>
                    <div class="timeline-box one-of-two">
                        <img class="mb-1-6 rounded" src="2021.png" alt="...">
                        <div class="content">
                            <h3 class="h4 mb-2 mb-md-3">Seven tech coaching center history in 2021</h3>
                            <p class="mb-0">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
                        </div>
                        <div class="year">2021</div>
                    </div>
                </div>
            </div>
        </div>
    </section>










































    <section class="section gray-bg mt-5" id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Admission Form</h2>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-md-7 col-lg-8 m-15px-tb">
                    <div class="contact-form">
                        <form action="data_check.php" method="POST" class="contactform contact_form" id="contact_form">
                            <div class="returnmessage valid-feedback p-15px-b" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice invalid-feedback p-15px-b"><span>Please Fill Required Fields</span></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required id="name" name="name" type="text" placeholder="Full Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input required id="email" name="email" type="email" placeholder="Email Address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input required id="subject" name="phone" type="text" placeholder="Phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea required id="message" name="message" placeholder="Message" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <input class="btn btn-primary" type="submit" value="Submit" id="submit" name="apply">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 m-15px-tb">
                    <div class="contact-name">
                        <h5>Mail</h5>
                        <p>info@domainname.com</p>
                    </div>
                    <div class="contact-name">
                        <h5>Visit My Studio</h5>
                        <p>Warnwe Park Streetperrine, <br>FL 33157 New York City</p>
                    </div>
                    <div class="contact-name">
                        <h5>Phone</h5>
                        <p>+01 123 654 8096</p>
                    </div>
                    <div class="social-share nav">
                        <a class="dribbble" href="#">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a class="behance" href="#">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a class="linkedin" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>













































































    <section>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!-- Contact Info-->
                        <section class="widget widget-light-skin">
                            <h3 class="widget-title">Get In Touch With Us</h3>
                            <p class="text-white">Phone: 00 33 169 7720</p>
                            <ul class="list-unstyled text-sm text-white">
                                <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                                <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
                            </ul>
                            <p><a class="navi-link-light" href="#">support@Seven-TechCoching.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Mobile App Buttons-->
                        <section class="widget widget-light-skin">
                            <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- About Us-->
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title">About Us</h3>
                            <ul>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">About Unishop</a></li>
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Our Blog</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!-- Account / Shipping Info-->
                        <section class="widget widget-links widget-light-skin">
                            <h3 class="widget-title">Account &amp; Shipping Info</h3>
                            <ul>
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Shipping Rates &amp; Policies</a></li>
                                <li><a href="#">Refunds &amp; Replacements</a></li>
                                <li><a href="#">Taxes</a></li>
                                <li><a href="#">Delivery Info</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
                <hr class="hr-light mt-2 margin-bottom-2x">
                <div class="row">
                    <div class="col-md-7 padding-bottom-1x"></div>
                    <div class="col-md-5 padding-bottom-1x">
                        <div class="margin-top-1x hidden-md-up"></div>
                        <!--Subscription-->
                        <form class="subscribe-form" action="#" method="post" target="_blank" novalidate="">
                            <div class="clearfix">
                                <div class="input-group input-light">
                                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                                </div>
                                <button class="btn btn-primary mt-2" type="submit">Suscbribe</button>
                            </div><span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
                        </form>
                    </div>
                </div>
                <!-- Copyright-->
                <p class="footer-copyright">&copy; All rights reserved.</a></p>
            </div>
        </footer>
    </section>





















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>