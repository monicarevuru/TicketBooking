<?php
session_start();
include("config.php");
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
  	if ( !mysqli_select_db( $conn, $mysqldb) ) 
	{
		return false;
	}

	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `BookTickz`.`user` WHERE `user_email`= '$email' and `user_password` = '$password'";
	$result = mysqli_query( $conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if( mysqli_num_rows( $result ) > 0) 
	{
     		$_SESSION['login_user'] = $row["user_name"];
     		header("Location:/TicketBooking/signin.php");
		//echo "login successful";
		//echo json_encode(array("password"=> $row[`user_password`]));
	} 
	else 
	{
		//echo "email and password didn't match";
		//echo json_encode(array("success"=> "false"));
    
    		echo '<script type="text/javascript">';
    		echo 'alert("Username and/or Password incorrect");';
    		echo 'location.href="/TicketBooking/signin.html"';
    		echo '</script>';
  //echo "hi";
  //header("Location:/monicarevuru-TicketBooking/signin.html");


	}
}
