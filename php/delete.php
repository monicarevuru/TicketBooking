<?php
include("config.php");
        // Check connection
                $dmovie = $_GET['moviename'];

       //Insert image content into database
       mysql_select_db($mysqldb);

       //$insert = $conn->query("INSERT INTO BookTickz.image(name, image, created) VALUES ('$moviename', '$imgContent', '$dataTime')");
       $delete = "DELETE FROM `BookTickz`.`image` WHERE `image`.`name` = '$dmovie'";
       $result = mysql_query( $delete);

       if($result){
           echo "File deleted successfully.";
       }
       //if ( mysql_num_rows( $result ) > 0 ) {
       //  header("Location:addmovie.html");
       //echo "Deleted";
       //}
       else{
           echo "File delete failed, please try again.";
       }

?>
