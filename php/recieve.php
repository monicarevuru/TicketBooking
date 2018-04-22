<?php
/*echo "Yay! The request is here in recieve.php";*/
include("config.php");
$email = $_GET['email'];
$password = $_GET['password'];
$name = $_GET['name'];
$username = $_GET['username'];

if ( $conn ) {
	/*echo "connection succesfull";*/
}
if ( mysql_select_db($mysqldb) ) {
	/*echo "Selected db succesfully";*/
}
$sql = "INSERT INTO `BookTickz`.`user`(`user_email` , `user_password`,`user_name`,`user_username`) VALUES ('$email','$password','$name','$username')";
/*echo $sql;*/
if ( mysql_query( $sql ) ) {
  echo "success";
  /*echo "Yay! Inserted";*/
}
else {

  echo "invalid";
}
