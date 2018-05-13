<?php
$moviename=$_POST['mname'];
$description=$_POST['desc'];

//if(isset($_POST['upload'])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));


        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '123456';
        $dbName     = 'BookTickz';


            $db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check connection
       if($db->connect_error){
            die("Connection failed: " . $db->connect_error);

        }






                $dataTime = date("Y-m-d H:i:s");
                // $checkbox1 = $_POST['timeslot'];
                // $checkbox2 = $_POST['timeslot2'];
                // $checkbox3 = $_POST['timeslot3'];
                // $checkbox4 = $_POST['timeslot4'];
                 $timeslot = $_POST['timeslot'];
                 if(!empty($_POST['timeslot'])) {

                    $insert = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', '".$timeslot[0]."')");
                    if($timeslot[1]=='timeslot2')
                    $insert2 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', '".$timeslot[1]."')");
                    //$insert3 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', '$checkbox3')");
                    if($timeslot[2]=='timeslot3')
                    $insert3 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', '".$timeslot[2]."')");
                    if($timeslot[3]=='timeslot4')
                    $insert4 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', '".$timeslot[3]."')");
}

                else{
                  echo '<script type="text/javascript">';
                    echo 'alert("Please select atleast one timeslot.");';
                    echo 'location.href="/TicketBooking/upload.html"';
                    echo '</script>';
                  }

                  //  $insert4 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', '$checkbox4')");

       //Insert image content into database

       if($insert1 |$insert2 |$insert3 |$insert4 ){
	   	echo '<script type="text/javascript">';
    		echo 'alert("Movie uploaded successfully.");';
    		echo 'location.href="/TicketBooking/upload.html"';
    		echo '</script>';
       }else{
		echo '<script type="text/javascript">';
    	echo 'alert("Movie upload failed, please try again.");';
    echo 'location.href="/TicketBooking/upload.html"';
    echo '</script>';
     }
   //}//else{
    //   echo "Please select an image file to upload.";
   //}
}
?>
