<?php
session_start();
include("config.php");
$username = $_SESSION['login_user'];
$seats = $_SESSION['seats'];
$amount = sizeof($seats)*100;
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
echo '</script>';
//echo $row;
foreach($seats as $name){
  $sql = "UPDATE `BookTickz`.`seat_layout` set `seat_status`=1 where `seat_name`='$name'";
  $result = mysqli_query($conn,$sql);
}
header("Location:/TicketBooking/movies.php");
}
else
echo 'Connection failed';
?>
