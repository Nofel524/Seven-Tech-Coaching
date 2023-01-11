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
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    
    
    <link rel="stylesheet" href="jstyle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />



    <style>
        




    * {
      font-family: Arial;
      box-sizing: border-box;
    }


    table {
      width: 100px;
      box-shadow: -1px 12px 12px -6px rgba(0, 0, 0, 0.5);

    }

    table,
    td,
    th {
      padding: 20px;
      border: 1px solid lightgray;
      border-collapse: collapse;
      text-align: center;
      cursor: pointer;

    }

    td {
      font-size: 18px;

    }

    th {
      background-color: blue;
      color: white;
    }

    tr:nth-child(odd) {
      background-color: lightblue;

    }

    tr:nth-child(odd):hover {
      background-color: dodgerblue;
      color: white;
      transform: scale(1);


    }



    tr:nth-child(even) {
      background-color: #ededed;

    }

    tr:nth-child(even):hover {
      background-color: skyblue;
      color: rgb(151, 37, 37);
      transform: scale(1);


    }
    </style>

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
    <section class="container mt-5 mb-5">
      <table>

        <tr>

          <th>Course Name</th>
          <th>Teacher Name</th>
          <th>Teacher Details</th>
          <th>Month</th>
          <th>Course Fee</th>
          <th colspan="3">Class</th>

        </tr>

        <tr>
          <td>HTML</td>
          <td>Miftahul Jannat</td>
          <td>B.sc In Computer Engineer
            <br>(Port City International University)
          </td>
          <td>6</td>
          <td>6,000</td>
          <td>Sataurday <br>(9 PM-10 PM)</td>
          <td>Tuesday <br>(10 AM - 11 AM)</td>
          <td>Wednesday<br>(7 AM- 10 AM)</td>
        </tr>

        <tr>
          <td>CSS</td>
          <td>Md.Rifat</td>
          <td>B.sc In Computer Engineer
            <br>(Post City International University)
          </td>
          <td>6</td>
          <td>3,000</td>
          <td>Sataurday <br>(8 PM-9 PM)</td>
          <td>Sunday <br>(8 AM - 9 AM)</td>
          <td></td>

        </tr>

        <tr>
          <td>Java Script</td>
          <td>Md.Shaown Miyazi</td>
          <td>B.sc In Computer Engineer
            <br>(Primiyer University)
          </td>
          <td>6</td>
          <td>4,000</td>
          <td>Friday <br>(3 PM-5 PM)</td>
          <td>Sunday <br>(11 AM - 1 PM)</td>
          <td></td>
        </tr>

        <tr>
          <td>PHP</td>
          <td>Yeasin Uddin Fahim</td>
          <td>B.sc In Computer Engineer
            <br>(East Delta University)
          </td>
          <td>6</td>
          <td>6,500</td>
          <td>Wednesday <br>(4 PM- 7 PM)</td>
          <td>Thursday <br>(6 AM - 8 AM)</td>
          <td>Friday<br>(7 AM- 10 AM)</td>
        </tr>

        <tr>
          <td>MYSQL</td>
          <td>Tommy Chodhury</td>
          <td>M.sc In Computer Engineer
            <br>(Primiyer University)
          </td>
          <td>4</td>
          <td>3,000</td>
          <td>Tuesday<br>(10 PM-12 PM)</td>
          <td>Wednesday <br>(7 AM - 10 AM)</td>
          <td></td>
        </tr>

        <tr>
          <td>C#</td>
          <td>Prashanta das</td>
          <td>M.sc In Computer Engineer
            <br>(Dhaka University)
          </td>
          <td>6</td>
          <td>12,300</td>
          <td>Sunday <br>(4 PM- 7 PM)</td>
          <td>Monday<br>(1 PM - 3 PM)</td>
          <td>Wednesday<br>(6 AM- 7 AM)</td>
        </tr>

        <tr>
          <td>C</td>
          <td>Md.Nofel Hossen</td>
          <td>M.sc In Computer Engineer
            <br>(Islam University)
          </td>
          <td>6</td>
          <td>15,000</td>
          <td>Friday <br>(9 AM - 11 AM)</td>
          <td>Sunday <br>(6 PM - 9 PM)</td>
          <td>Wednesday<br>(7 AM- 10 AM)</td>

        </tr>


        <tr>
          <td>Laravel</td>
          <td>Md.Jahidul Alam</td>
          <td>M.sc In Computer Engineer
            <br>(Islam University)
          </td>
          <td>6</td>
          <td>11,200</td>
          <td>Friday <br>(9 AM - 11 AM)</td>
          <td>Sunday <br>(6 PM - 9 PM)</td>
          <td>Wednesday<br>(7 AM- 10 AM)</td>

        </tr>


        <tr>
          <td>Java Script</td>
          <td>Punam Das</td>
          <td>B.sc In Computer Engineer
            <br>(Primiyer University)
          </td>
          <td>5</td>
          <td>3,000</td>
          <td>Friday <br>(9 AM - 11 AM)</td>
          <td>Sunday <br>(6 PM - 9 PM)</td>
          <td>Wednesday<br>(7 AM- 10 AM)</td>

        </tr>





      </table>


    </section>







  </center>


























































































































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