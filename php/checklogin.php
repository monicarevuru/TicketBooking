<?php
include("config.php");
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  if ( !mysql_select_db( $mysqldb) ) {
		return false;
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `BookTickz`.`user` WHERE `user_username`= '$username' and `user_password` = '$password'";
	$result = mysql_query( $sql);
	$row = mysql_fetch_assoc($result);
	if( mysql_num_rows( $result ) > 0) {
		echo "login successful";
		//echo json_encode(array("password"=> $row[`user_password`]));
	} else {
		echo "Username and password didn't match";
		//echo json_encode(array("success"=> "false"));
	}
}
