<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Project 24 Password Recovery</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<center><img src="img.png" alt="Password Reset View" style="width:300dp;height:300dp;"></center>
<?php
require "init.php";
$user_pass=$_POST["pass"];
$user_name=$_POST["email"];
$user_cpass=$_POST["cpass"];
if($user_pass!=$user_cpass||strlen($user_pass)==0||strlen($user_name)==0||strlen($user_cpass)==0)
{
 die("<center><h2>Oops Something Went Wrong...</h2></center>");
}
$sql_query="update user_info set user_pass='$user_pass' where user_name='$user_name';";

if(mysqli_query($con,$sql_query))
{
 echo "<h2><center>Password Reset Done Successfully...</center></h2>";
}
else
{
 echo "Data insertion error...".mysqli_error($con);
}
?>
</body>
</html>


