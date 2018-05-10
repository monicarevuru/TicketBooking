<?php
session_start();
include("config.php");
$username = $_SESSION['login_user'];
$amount = '1000';
mysqli_select_db( $conn, $mysqldb);
if ( $conn ) {
  $sql = "UPDATE `BookTickz`.`user` set `wallet_amount`=`wallet_amount` - $amount where `user_name`= $username";
  $result = mysqli_query( $conn, $sql);
echo mysqli_num_rows( $result );

  $s ="SELECT * from `BookTickz`.`user` where `user_name`= $username";

$row = mysqli_fetch_assoc($result);
echo "rdsuccess";


echo $row;
}
else
echo 'Connection failed';
?>
