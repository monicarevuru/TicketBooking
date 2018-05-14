<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
  	//$message = "wrong answer";
	echo '<script type="text/javascript">';
        echo 'location.href="/TicketBooking/index.php"';
        echo '</script>';
}
?>
