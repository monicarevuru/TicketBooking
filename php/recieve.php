<?php
/*echo "Yay! The request is here in recieve.php";*/
$email = $_GET['email'];
$password = $_GET['pass'];
/*echo "I got the username as $email and password as $password";*/
$mysqlhost = 'localhost';
$mysqlusername = 'root';
$mysqlpassword = 'varshini98';
if ( mysql_connect($mysqlhost,$mysqlusername, $mysqlpassword) ) {
	/*echo "connection succesfull";*/
}
if ( mysql_select_db("register") ) {
	/*echo "Selected db succesfully";*/
}
$sql = "INSERT INTO `BookTickz`.`user`(`user_email` , `user_password`) VALUES ('$email','$password')";
echo $sql;
if ( mysql_query( $sql ) ) {
	/*echo "Yay! Inserted";*/
}
