<?php
/*echo "Yay! The request is here in recieve.php";*/
include("config.php");
$email = $_GET['email'];
$password = $_GET['password'];
$name = $_GET['name'];
$cnfrm = $_GET['cnfrmpass'];

$emaillen = strlen( $email );
$i=$emaillen;
$char = substr( $email, $emaillen-10, 10 );
//echo $char;
if(strcmp($char,'@gmail.com')!=0&&strcmp($char,'@yahoo.com')!=0&&strcmp($char,'@outlook.com')!=0)
{
  echo "Invalid mail";
}
else
{
	if(strcmp($password,$cnfrm)!=0)
  	{
      echo '<script type="text/javascript">';
      echo 'alert("Passwords did not match");';
      echo 'location.href="/TicketBooking/register.html"';
      echo '</script>';
    	
  	}
  	else
	{
    		if ( $conn )
    		{
      			$sql = "INSERT INTO `BookTickz`.`user`(`user_name`, `user_email` , `user_password`) VALUES ('$name','$email','$password')";
      			//echo $sql;
        		if ( mysqli_query( $conn, $sql ) )
			{
          			echo '<script type="text/javascript">';
                		echo 'alert("Registered Successfully\nPlease Login to continue");';
                		echo 'location.href="/TicketBooking/index.php"';
                		echo '</script>';
        		}
        		else
			{
          			echo '<script type="text/javascript">';
                		echo 'alert("EmailId already exists");';
                		echo 'location.href="/TicketBooking/register.html"';
                		echo '</script>';
                //echo 'window.location.href = "localhost/Ticketbooking/register.html";';
                //header("location: localhost/TicketBooking/register.html");

        		}
    		}
  	}
}
?>
