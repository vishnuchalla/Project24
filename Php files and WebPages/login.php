<?php
require "init.php";
//$user_name="coolv47";
//$user_pass="12345qwertyuiop";
$user_name=$_POST["login_name"];
$user_pass=$_POST["login_pass"];
$sql_query="select * from user_info where user_name like '$user_name' and user_pass like '$user_pass';";

$result=mysqli_query($con,$sql_query);
if(mysqli_num_rows($result)>0)
{
 $row=mysqli_fetch_assoc($result);
 $name=$row["name"];
 $user_email=$row["user_email"];
 $user_phone=$row["user_phone"];
 echo $name." ".$user_name." ".$user_email." ".$user_phone." ".$user_pass;
}
else
{
 echo "Login Failed....Try Again..";
}
?>
