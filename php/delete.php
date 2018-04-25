<?php
include("config.php");
        // Check connection
                $dmovie = $_POST['mname'];
       //Insert image content into database
       //mysqli_select_db($mysqldb);
       $sqls = "SELECT * FROM `BookTickz`.`image` WHERE `name`= '$dmovie'";
       $result = mysqli_query( $conn, $sqls);
     	$row = mysqli_fetch_assoc($result);
     	if( mysqli_num_rows( $result ) > 0) {
        $sql = "DELETE FROM image WHERE name='$dmovie'";

        if (mysqli_query($conn, $sql)) {
         echo "deleted!!";
       }
      else{
        echo "File delete failed, please try again.";
      }
    }
    else{
      echo "Record not in database";
    }

?>
