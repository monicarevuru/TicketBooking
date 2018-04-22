<?php
include("config.php");

        $image = $_FILES['insertimage']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        // Check connection
                $dataTime = date("Y-m-d H:i:s");
                $moviename=$_GET['moviename'];

       //Insert image content into database
       mysql_select_db($mysqldb);
       //$insert = $conn->query("INSERT INTO BookTickz.image(name, image, created) VALUES ('$moviename', '$imgContent', '$dataTime')");
       $insert = "INSERT INTO `BookTickz`.`image`(`name` , `image` , `created`) VALUES ('$moviename', '$imgContent', '$dataTime')";


       if($insert){
           echo "File uploaded successfully.";
       }else{
           echo "File upload failed, please try again.";

}
?>
