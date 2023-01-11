
<?php
session_start();
if(!isset($_SESSION['username']))
{
          header("location.php");
}
elseif($_SESSION['usertype']=='student')
{
        header("location:login.php"); 
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);
$sql= "SELECT * FROM contact";
$result= mysqli_query($data, $sql);

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
    .table_td{
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
        <h2><b>Contact Us</b></h2><br>
        <table border="1px">
            <tr>
                <th style="padding:20px;font-size:20px; text-align:center; background-color:pink;"><b>Name</b></th>
                <th style="padding:20px;font-size:20px;text-align:center;  background-color:pink;"><b>Email</b></th>
                <th style="padding:20px;font-size:20px;text-align:center;  background-color:pink;"><b>phone</b></th>
                <th style="padding:20px;font-size:20px;text-align:center; background-color:pink;"><b>
                    Message
                </b></th>

                          
            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {

            ?>

            <tr>
                <td class="table_td">
                <?php echo"{$info['name']}";?>
            </td>
                <td class="table_td">
                <?php echo"{$info['email']}";?>
            
            </td>
                <td class="table_td">
                <?php echo"{$info['phone']}";?>
            </td>

                <td class="table_td">
                <?php echo"{$info['message']}";?>
            
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