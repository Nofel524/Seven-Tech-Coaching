<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Contact Form</title>
          <link rel="stylesheet" href="contact.css">
</head>
<body>
<?php
session_start();

$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{
          die("Connection Error");
}

if(isset($_POST['send']))
{
          $data_name=$_POST['username'];
          $data_email=$_POST['useremail'];
          $data_phone=$_POST['userphone'];
          $data_message=$_POST['usermessage'];
         
         
          $sql="INSERT INTO contact(name,email,phone,message)
          VALUES(' $data_name','$data_email',' $data_phone','$data_message')";
          
          $result=mysqli_query($data,$sql);
   
          if($result)
          {
             $_SESSION['message']="Your Information Is Received Successfully";
             header("location:contact.php");
          }
          else 
          {
           echo"ApplyFailed";                                                  
          }
}

?>










      
<div class="form-container">
          <div class="contact-title">
          <h2><b>Say Hello</b></h2>
          <h3>We Are Always Ready To Serve You!</h3>
          </div>
          
          <form action="#" method="post" name="">
                    <div class="input-row">
                     <label for="">Name:<em>*</em></label>
                     <input type="text" name="username" required>
                    </div>


                    <div class="input-row">
                     <label for="">Email:<em>*</em></label>
                     <input type="email" name="useremail" required>
                    </div>


                    <div class="input-row">
                     <label for="">Phone:<em>*</em></label>
                     <input type="tel" name="userphone" required>
                    </div>


                    <div class="input-row">
                     <label for="">Message:<em>*</em></label>
                     <textarea name="usermessage" required></textarea>
                    </div>


                    <div class="input-row">
                    
                    
                     <input type="submit" name="send" value="Submit">
                     
                     <?php  if(!empty($message)){
                     ?>
                     <div class="success">
                               <strong><?php echo $message; ?></strong>

                     </div>
                     <?php } ?>
                    </div>
                    
          </form>
</div>


</body>
</html>