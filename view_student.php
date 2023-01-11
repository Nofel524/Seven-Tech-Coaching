
<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['username']))
{
          header("location.php");
}
elseif($_SESSION['usertype']=='student')
{
        header("location:login.php"); 
}


$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * FROM user WHERE usertype='student'";
$result=mysqli_query($data,$sql);


?>












<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Admin Dashboard</title>
          <?php
          include'admin_css.php';
          ?>
<style>
          .table_th
          {
                    padding:20px;
                    font-size:20px;
          }
          .table_padding
          {
                    padding:20px;
                    background-color:skyblue;
          }
</style>



</head>
<body>
<?php
include'admin_sidebar.php';
?>
<div class="content">
          <center>
        <h1>Student Data</h1>
        
        <?php
        if($_SESSION['message'])
        {
                  echo $_SESSION['message'];
        }
        unset($_SESSION['message']);

        ?>
        
        
        <br><br>

        <table border="2px">
                  <tr>
                            <th class="table_th">Username</th>
                            <th class="table_th">Email</th>
                            <th class="table_th">Phone</th>
                            <th class="table_th">Password</th>
                            <th class="table_th">Delete</th>
                            <th class="table_th">Update</th>
                  </tr>

                  <?php
                  while($info=$result->fetch_assoc())
                   {

                   


                  ?>
                  
                  
                  <tr>
                  <td class="table_padding">
                            <?php echo "{$info['username']}";?>
                  </td>
                  <td class="table_padding">
                           <?php echo "{$info['email']}";?>
                  </td>
                  <td class="table_padding">
                            <?php echo "{$info['phone']}";?>
                  </td>


                  <td class="table_padding">
                            <?php echo "{$info['password']}";?>
                  </td>

                  <td class="table_padding">
                            <?php echo "<a class='btn btn-danger' onCLICK=\"javascript:return confirm('Are Your Sure To Delete This');\" href='delete.php?student_id={$info['id']}'>Delete</a>";?>
                  </td>
                    

                  <td class="table_padding">
                            <?php echo "<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Update</a>";?>
                  </td>





                  </tr>
                  <?php
                   }
                   ?>

        </table>
        </center>
        
</div>


</body>
</html>