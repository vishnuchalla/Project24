<?php
require "init.php";
$name=$_POST["name"];
$user_name=$_POST["user_name"];
$user_pass=$_POST["user_pass"];
$user_email=$_POST["user_email"];
$user_phone=$_POST["user_phone"];
//$name="vishnu";
//$user_name="coolv47";
//$user_email="coolv47@gmail.com";
//$user_phone="9908001359";
//$user_pass="12345qwertyuiop";

$sql_query="insert into user_info values('$name','$user_name','$user_email','$user_phone','$user_pass');";

if(mysqli_query($con,$sql_query))
{
 //echo "<h2><center>Data Insertion Success...</center></h2>";
}
else
{
 //echo "Data insertion error...".mysqli_error($con);
}
?>
