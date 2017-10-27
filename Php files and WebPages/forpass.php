<?php
require "init.php";
$user_name=$_POST["user"];
$sql_query="select * from user_info where user_name like '$user_name';";

$result=mysqli_query($con,$sql_query);
if(mysqli_num_rows($result)>0)
{
 $row=mysqli_fetch_assoc($result);
 $user_email=$row["user_email"];
 echo $user_email;
}
else
{
 echo "The Details you provided are not associated with an active Project account.";
}
?>
