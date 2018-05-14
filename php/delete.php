<?php
include("config.php");
        // Check connection
                $dmovie = $_POST['mname'];
       //Insert image content into database
       //mysqli_select_db($mysqldb);
       $sqls = "SELECT * FROM `BookTickz`.`image` WHERE `name`= '$dmovie'";
       $result = mysqli_query( $conn, $sqls);
     	$row = mysqli_fetch_assoc($result);
     	if( mysqli_num_rows( $result ) > 0)
	{
          $sql1 = "DELETE FROM seat_layout WHERE name='$dmovie'";
          $res = mysqli_query($conn, $sql1);
        	$sql = "DELETE FROM image WHERE name='$dmovie'";

        	if (mysqli_query($conn, $sql)) {
			echo '<script type="text/javascript">';
    			echo 'alert("deleted!");';
    			echo 'location.href="/TicketBooking/delete.html"';
    			echo '</script>';
       		}
      		else{
			echo '<script type="text/javascript">';
    			echo 'alert("File delete failed, please try again.");';
    			echo 'location.href="/TicketBooking/delete.html"';
    			echo '</script>';
      		}
    	}
    	else{
		echo '<script type="text/javascript">';
    		echo 'alert("Record not in database");';
    		echo 'location.href="/TicketBooking/delete.html"';
    		echo '</script>';
    	}

?>
