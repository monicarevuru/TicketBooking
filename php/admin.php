<?php
include("config.php");
if ( $conn ) {
	/*echo "connection succesfull";*/
	//echo conne;
}
$email = $_GET['email'];
$password = $_GET['password'];
$sql = "SELECT * FROM `BookTickz`.`admin` WHERE `admin_email` = '$email' and `admin_password` = '$password'";
//echo $sql;
if ( mysql_query($sql) ) {
  echo "Admin logged in";
}
?>
