<?php
session_start();
include("config.php");
$username = $_SESSION['login_user'];
$amount = '1000';
mysqli_select_db( $conn, $mysqldb);
if ( $conn ) {
  $sql = "UPDATE `BookTickz`.`user` set `wallet_amount`=`wallet_amount` - $amount where `user_name`= '$username'";
  $result = mysqli_query( $conn, $sql);
  if($result == false){
    printf("error: %s\n", mysqli_error($conn));
  }

$s ="SELECT * from `BookTickz`.`user` where `user_name`= '$username'";
$result = mysqli_query( $conn, $s);
$row = mysqli_fetch_assoc($result);

echo '<script type="text/javascript">';
echo 'alert("The amount debited from Wallet is: '.$amount.'\n ");';
echo 'alert("Current Wallet Balance: '.$row["wallet_amount"].'");';
echo 'location.href="/TicketBooking/index.php"';
echo '</script>';


echo $row;
}
else
echo 'Connection failed';
?>
