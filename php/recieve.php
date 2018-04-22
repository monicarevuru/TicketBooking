<?php
/*echo "Yay! The request is here in recieve.php";*/
include("config.php");
$email = $_GET['email'];
$password = $_GET['password'];
$name = $_GET['name'];

$emaillen = strlen( $email );
$i=$emaillen;
$char = substr( $email, $emaillen-10, 10 );
//echo $char;
if(strcmp($char,'@gmail.com')!=0||strcmp($char,'@yahoo.com')!=0||strcmp($char,'@outlook.com')!=0){
  echo "Invalid mail";
}
else{
if ( $conn ) {
	//echo "connection succesfull";
}
/*if ( mysql_select_db($mysqldb) ) {
	echo "Selected db succesfully";
}*/
$sql = "INSERT INTO user(user_name, user_email , user_password) VALUES ('$name','$email','$password')";
//echo $sql;

if ( mysqli_query( $conn, $sql ) ) {
  echo "success";
  /*echo "Yay! Inserted";*/
}
else {

  echo "invalid";
}
}
?>
