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
    .accordion-style .card {
      background: transparent;
      box-shadow: none;
      margin-bottom: 15px;
      margin-top: 0 !important;
      border: none;
    }

    .accordion-style .card:last-child {
      margin-bottom: 0;
    }

    .accordion-style .card-header {
      border: 0;
      background: none;
      padding: 0;
      border-bottom: none;
    }

    .accordion-style .btn-link {
      color: #f99218;
      position: relative;
      display: block;
      width: 100%;
      text-align: left;
      white-space: normal;
      box-shadow: none;
      padding: 15px 55px;
      text-decoration: none;
    }

    .mx-auto {
      margin-right: auto !important;
      margin-left: auto !important;
    }

    .rounded {
      border-radius: 0.25rem !important;
    }

    img {
      max-width: 100%;
      height: auto;
      vertical-align: top;
    }

    .accordion-style .btn-link:hover {
      text-decoration: none;
    }

    .accordion-style .btn-link.collapsed {
      color: #575a7b;
    }

    .accordion-style .btn-link.collapsed:after {
      content: "+";
      position: absolute;
      top: 50%;
      left: 0;
      font-size: 1rem;
      color: #f99218;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      transform: translateY(-50%);
      box-shadow: 8px 8px 30px 0 rgba(0, 0, 0, 0.12);
    }

    .accordion-style .btn-link:after {
      content: "-";
      position: absolute;
      top: 50%;
      left: 0;
      font-size: 1rem;
      color: #fff;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #f99218;
      display: flex;
      align-items: center;
      justify-content: center;
      transform: translateY(-50%);
      box-shadow: 8px 8px 30px 0 rgba(0, 0, 0, 0.12);
    }

    .accordion-style .card-body {
      padding-top: 0px;
      padding-left: 3.5rem;
      padding-bottom: 0;
    }

    .accordion-style .card-body:before {
      position: absolute;
      content: "";
      border-style: dashed;
      border-width: 0 0 0 1.2px;
      border-color: #f99218;
      left: 20px;
      top: 0;
      z-index: 1;
      bottom: 0;
    }

    @media screen and (max-width: 767px) {
      .accordion-style .btn-link {
        padding: 15px 40px 15px 55px;
      }
    }

    @media screen and (max-width: 575px) {
      .accordion-style .btn-link {
        padding: 15px 30px 15px 55px;
      }
    }












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
        <img src="c5.png" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="c4.png" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="c6.png" class="d-block w-100" alt="...">

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









  <!-------------------------Html Table-------------------------------->

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



















  <div class="container mt-5 mb-5">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="mx-auto text-center">
          <img src="a1.png" class="rounded" alt="...">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-6 ps-xl-10 w-lg-90">
          <div class="mb-4">
            <div class="main-title title-left">
              <h2>About Us</h2><span class="line-left"></span>
            </div>
            <p class="w-90">The greater part of the people trust on us</p>
          </div>




          <div id="accordion" class="accordion-style">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">How quick will my credit be subsidized?</button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                <div class="card-body position-relative">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations
                  of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is outsourced financial support?</button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                <div class="card-body position-relative">
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                  content here', making it look like readable English.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How long is an affirmed financing cost and credit offer substantial?</button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                <div class="card-body position-relative">
                  Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident,
                  sometimes on purpose (injected humour and the like).
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What sorts of commercial enterprise financing do you offer?</button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                <div class="card-body position-relative">
                  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">How might I roll out an improvement to my application?</button>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
                <div class="card-body position-relative">
                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, Making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                  generate Lorem Ipsum which looks reasonable.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>
  </div>
  </div>
  </div>


























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