

<?php
session_start();
include("config.php");
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
  if ( !mysqli_select_db( $conn, $mysqldb) )
{
  return false;
}
$username = $_SESSION['login_user'];
$password =  $_POST['confirm_password'];
$sql = "SELECT * FROM `BookTickz`.`user` WHERE `user_name`= '$username' and `user_password` = '$password'";
$result = mysqli_query( $conn, $sql);
$row = mysqli_fetch_assoc($result);
if( mysqli_num_rows( $result ) > 0)
{
  header("Location:/TicketBooking/php/wallet.php");
}
else{
  echo '<script type="text/javascript">';
  echo 'alert("Password is incorrect");';
  echo 'location.href="/TicketBooking/php/ConfirmPassword.php"';
  echo '</script>';
}
}
 ?>
