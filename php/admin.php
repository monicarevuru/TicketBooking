<?php
include("config.php");
if ( $conn ) {
	/*echo "connection succesfull";*/
	//echo conne;
}
$email = $_GET['email'];
$password = $_GET['password'];
$sql = "SELECT * FROM `BookTickz`.`admin` WHERE `admin_email` = '$email' and `admin_password` = '$password'";
$result = mysql_query( $sql);
//$row = mysql_fetch_assoc($result);
//echo $row;
if ( mysql_num_rows( $result ) > 0 ) {
  header("Location:/TicketBooking/addmovie.html");
//  header("Location:addmovie.html");
}
else{
  echo "Invalid admin login";
}
?>
