<?php  
$host = "localhost";  
$user = "root";  
$password = "";  
$db_name ="dbtable";
$con = mysqli_connect($host, $user, $password,$db_name);  
if(! $con )  
{  
  die("Failed  : " . mysqli_connect_error());  
}
echo "<br><u>Your Database Connected Successfully</u>";  

?>  
