
<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
       $message=$_SESSION['message'];
       echo"<script type='text/javascript'>
       
       alert('$message');
       </script>";
}

$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql1="SELECT * FROM teacher";
$result1=mysqli_query($data,$sql1);
$sql2="SELECT * FROM courses";
$result2=mysqli_query($data,$sql2);








?>















<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Student Management System</title>
          <link rel="stylesheet"href="style.css">
          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

         <!-- Optional theme -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

         <!-- Latest compiled and minified JavaScript -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
         <nav>
                   <label class="logo">Seven-Tech Coching</label>
                   <ul>
                             <li><a href="">Home</a></li>
                             <li><a href="contact.php" target=_blank>Contact</a></li>
                             <li><a href="">Admission</a></li>
                             <li><a href="login.php" class="btn btn-success">Login</a></li>
                   </ul>
         </nav>

        
         <div class="section1">
                   <label class="imgtext">We Teach Student With Care</label>     
          <img class="main_img" src="no.jpg">

         </div>
       
         
       <div class="container">
                 <div class="row">
                           <div class="col-md-4">
                             <img class="img2"  src="img2.jpeg" alt=""> 

                           </div>
                           <div class="col-md-8">
                                     <h1>Welcome To w-School</h1>
                                     <p>locale_get_primary_languagelo
                                     locale_get_primary_languagelo
                                     locale_get_primary_languagelo
                                     locale_get_primary_languagelov
                                     locale_get_primary_languagelo
                                     locale_get_primary_languagelo
                                     locale_get_primary_languagelov
                                     locale_get_primary_languagelo
                                     locale_get_primary_languagelo
                                     locale_get_primary_languagelov
                                     locale_get_primary_languagelo
                                     locale_get_primary_languagelo
                                     locale_get_primary_languagelov

                                     </p>

                           </div>
                 </div>
      
       </div>          
 
  
       




 <center>
           <h1>Our Teachers</h1>
 </center>

<div class="container">
          <div class="row">
          <?php
          while($info=$result1->fetch_assoc())
          {

          


          ?>



              <div class="col-md-4">
                      <img class="teacher" src="<?php echo "{$info['image']}"?>">
                     <h3><?php echo "{$info['name']}"?></h3>
                     <h5><?php echo "{$info['description']}"?></h5>

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
          while($info=$result2->fetch_assoc())
          {

          


          ?>



              <div class="col-md-4">
                      <img class="courses" src="<?php echo "{$info['image']}"?>">
                     <h3><?php echo "{$info['name']}"?></h3>
                     <h5><?php echo "{$info['description']}"?></h5>

              </div>
              <?php
          }
              ?>

             

             


          </div>

</div>







<center>
          <h1 class="adm">Admission Form</h1>
</center>
 <div align="center" class="admission_Form">
           <form action="data_check.php" method="POST">
                    <div class="adm_int">
                              <label class="label_text" for="">Name:</label>
                              <input class="input_deg" type="text" name="name" required>
                    </div>

                    <div class="adm_int">
                              <label class="label_text" for="">Email:</label>
                              <input  class="input_deg" type="email" name="email" required>
                    </div>

                    <div class="adm_int">
                              <label class="label_text" for="">Phone:</label>
                              <input  class="input_deg" type="text" name="phone" required>
                    </div>

                    <div class="adm_int">
                              <label class="label_text" for="">Message:</label>
                              <textarea class="text_1" name="message" cols="30" rows="10" required></textarea>
                    </div>

                    <div class="adm_int">
                              <input class="btn btn-primary" type="submit" value="Apply" id="submit"name="apply">
                    </div>

           </form>
 </div>





<footer>
 <h3 class="footer_text"><b>ALL@Copyright reserved By Web Tech Knowlwdge</b></h3>
</footer>


</body>
</html>