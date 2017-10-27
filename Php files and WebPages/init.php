<?php
$db_name="project24";
$mysql_user="root";
$mysql_pass="vishnu1234";
$server_name="localhost";

$con=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);

if(!$con)
{
// echo "Connection Error...".mysqli_connect_error();
}
else
{
 //echo "<h1><center>Database Connection Success...</center></h1>";
}
?>
