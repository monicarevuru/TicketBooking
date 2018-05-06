<?php
$moviename=$_POST['mname'];

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));


        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '123456';
        $dbName     = 'BookTickz';


        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check connection
       if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
                $dataTime = date("Y-m-d H:i:s");

       //Insert image content into database
       $insert = $db->query("INSERT into BookTickz.image(name, image, created) VALUES ('$moviename', '$imgContent', '$dataTime')");
       if($insert){
	   	echo '<script type="text/javascript">';
    		echo 'alert("File uploaded successfully.");';
    		echo 'location.href="/TicketBooking/upload.html"';
    		echo '</script>';	
       }else{
		echo '<script type="text/javascript">';
    		echo 'alert("File upload failed, please try again.");';
    		echo 'location.href="/TicketBooking/upload.html"';
    		echo '</script>';
       }
   }else{
       echo "Please select an image file to upload.";
   }
}
?>
