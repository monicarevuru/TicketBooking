<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
  $message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
header("Location: /TicketBooking/index.html"); // Redirecting To Home Page
}
?>
