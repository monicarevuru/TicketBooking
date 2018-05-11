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

echo "rdsuccess";


echo $row;
}
else
echo 'Connection failed';
?>
