
<?php
								session_start();
								$username=$_SESSION['login_user'];
								include("config.php");
								mysqli_select_db($conn, $mysqldb);
								if($conn)
								{
									$sql= "SELECT * from `BookTickz`.`user` where `user_name`= '$username'";
									$result = mysqli_query( $conn, $sql);
									$row = mysqli_fetch_assoc($result);
									echo '<script type="text/javascript">';
									echo 'alert("Current Wallet Balance: '.$row["wallet_amount"].'");';
									echo 'location.href="/TicketBooking/index.php"';
									echo '</script>';
								}
?>
