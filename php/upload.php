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
                 $timeslot = $_POST['timeslot'];
                 if(!empty($_POST['timeslot'])) {
		    if( in_array(timeslot1, $timeslot) ){
                    $insert = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', 'timeslot1')");
		     $insert1A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '1A', 0 )");
		     $insert1B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '1B', 0 )");
		     $insert1C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '1C', 0 )");
		     $insert1D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '1D', 0 )");
		     $insert1E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '1E', 0 )");
         $insert1F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '1F', 0 )");
		     $insert2A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '2A', 0 )");
		     $insert2B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '2B', 0 )");
		     $insert2C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '2C', 0 )");
		     $insert2D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '2D', 0 )");
		     $insert2E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '2E', 0 )");
         $insert2F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '2F', 0 )");
         $insert3A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '3A', 0 )");
         $insert3B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '3B', 0 )");
         $insert3C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '3C', 0 )");
         $insert3D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '3D', 0 )");
         $insert3E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '3E', 0 )");
         $insert3F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '3F', 0 )");
         $insert4A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '4A', 0 )");
         $insert4B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '4B', 0 )");
         $insert4C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '4C', 0 )");
         $insert4D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '4D', 0 )");
         $insert4E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '4E', 0 )");
         $insert4F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '4F', 0 )");
         $insert5A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '5A', 0 )");
         $insert5B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '5B', 0 )");
         $insert5C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '5C', 0 )");
         $insert5D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '5D', 0 )");
         $insert5E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '5E', 0 )");
         $insert5F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '5F', 0 )");
         $insert6A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '6A', 0 )");
         $insert6B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '6B', 0 )");
         $insert6C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '6C', 0 )");
         $insert6D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '6D', 0 )");
         $insert6E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '6E', 0 )");
         $insert6F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '6F', 0 )");
         $insert7A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '7A', 0 )");
         $insert7B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '7B', 0 )");
         $insert7C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '7C', 0 )");
         $insert7D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '7D', 0 )");
         $insert7E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '7E', 0 )");
         $insert7F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '7F', 0 )");
         $insert8A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '8A', 0 )");
         $insert8B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '8B', 0 )");
         $insert8C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '8C', 0 )");
         $insert8D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '8D', 0 )");
         $insert8E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '8E', 0 )");
         $insert8F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '8F', 0 )");
         $insert9A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '9A', 0 )");
         $insert9B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '9B', 0 )");
         $insert9C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '9C', 0 )");
         $insert9D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '9D', 0 )");
         $insert9E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '9E', 0 )");
         $insert9F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '9F', 0 )");
         $insert10A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '10A', 0 )");
         $insert10B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '10B', 0 )");
         $insert10C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '10C', 0 )");
         $insert10D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '10D', 0 )");
         $insert10E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '10E', 0 )");
         $insert10F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot1', '10F', 0 )");
		    }
                    if(in_array("timeslot2", $timeslot) ){
                    $insert2 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', 'timeslot2')");
                    $insert21A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '1A', 0 )");
                    $insert21B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '1B', 0 )");
                    $insert21C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '1C', 0 )");
                    $insert21D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '1D', 0 )");
                    $insert21E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '1E', 0 )");
                    $insert21F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '1F', 0 )");
                    $insert22A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '2A', 0 )");
                    $insert22B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '2B', 0 )");
                    $insert22C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '2C', 0 )");
                    $insert22D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '2D', 0 )");
                    $insert22E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '2E', 0 )");
                    $insert22F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '2F', 0 )");
                    $insert23A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '3A', 0 )");
                    $insert23B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '3B', 0 )");
                    $insert23C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '3C', 0 )");
                    $insert23D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '3D', 0 )");
                    $insert23E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '3E', 0 )");
                    $insert23F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '3F', 0 )");
                    $insert24A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '4A', 0 )");
                    $insert24B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '4B', 0 )");
                    $insert24C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '4C', 0 )");
                    $insert24D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '4D', 0 )");
                    $insert24E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '4E', 0 )");
                    $insert24F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '4F', 0 )");
                    $insert25A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '5A', 0 )");
                    $insert25B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '5B', 0 )");
                    $insert25C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '5C', 0 )");
                    $insert25D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '5D', 0 )");
                    $insert25E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '5E', 0 )");
                    $insert25F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '5F', 0 )");
                    $insert26A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '6A', 0 )");
                    $insert26B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '6B', 0 )");
                    $insert26C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '6C', 0 )");
                    $insert26D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '6D', 0 )");
                    $insert26E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '6E', 0 )");
                    $insert26F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '6F', 0 )");
                    $insert27A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '7A', 0 )");
                    $insert27B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '7B', 0 )");
                    $insert27C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '7C', 0 )");
                    $insert27D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '7D', 0 )");
                    $insert27E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '7E', 0 )");
                    $insert27F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '7F', 0 )");
                    $insert28A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '8A', 0 )");
                    $insert28B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '8B', 0 )");
                    $insert28C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '8C', 0 )");
                    $insert28D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '8D', 0 )");
                    $insert28E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '8E', 0 )");
                    $insert28F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '8F', 0 )");
                    $insert29A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '9A', 0 )");
                    $insert29B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '9B', 0 )");
                    $insert29C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '9C', 0 )");
                    $insert29D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '9D', 0 )");
                    $insert29E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '9E', 0 )");
                    $insert29F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '9F', 0 )");
                    $insert210A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '10A', 0 )");
                    $insert210B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '10B', 0 )");
                    $insert210C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '10C', 0 )");
                    $insert210D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '10D', 0 )");
                    $insert210E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '10E', 0 )");
                    $insert210F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot2', '10F', 0 )");
        }
                    //$insert3 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', '$checkbox3')");
                    if(in_array("timeslot3", $timeslot) ){
                    $insert3 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', 'timeslot3')");
                    $insert31A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '1A', 0 )");
                    $insert31B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '1B', 0 )");
                    $insert31C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '1C', 0 )");
                    $insert31D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '1D', 0 )");
                    $insert31E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '1E', 0 )");
                    $insert31F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '1F', 0 )");
                    $insert32A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '2A', 0 )");
                    $insert32B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '2B', 0 )");
                    $insert32C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '2C', 0 )");
                    $insert32D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '2D', 0 )");
                    $insert32E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '2E', 0 )");
                    $insert32F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '2F', 0 )");
                    $insert33A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '3A', 0 )");
                    $insert33B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '3B', 0 )");
                    $insert33C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '3C', 0 )");
                    $insert33D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '3D', 0 )");
                    $insert33E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '3E', 0 )");
                    $insert33F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '3F', 0 )");
                    $insert34A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '4A', 0 )");
                    $insert34B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '4B', 0 )");
                    $insert34C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '4C', 0 )");
                    $insert34D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '4D', 0 )");
                    $insert34E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '4E', 0 )");
                    $insert34F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '4F', 0 )");
                    $insert35A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '5A', 0 )");
                    $insert35B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '5B', 0 )");
                    $insert35C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '5C', 0 )");
                    $insert35D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '5D', 0 )");
                    $insert35E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '5E', 0 )");
                    $insert35F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '5F', 0 )");
                    $insert36A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '6A', 0 )");
                    $insert36B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '6B', 0 )");
                    $insert36C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '6C', 0 )");
                    $insert36D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '6D', 0 )");
                    $insert36E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '6E', 0 )");
                    $insert36F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '6F', 0 )");
                    $insert37A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '7A', 0 )");
                    $insert37B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '7B', 0 )");
                    $insert37C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '7C', 0 )");
                    $insert37D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '7D', 0 )");
                    $insert37E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '7E', 0 )");
                    $insert37F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '7F', 0 )");
                    $insert38A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '8A', 0 )");
                    $insert38B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '8B', 0 )");
                    $insert38C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '8C', 0 )");
                    $insert38D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '8D', 0 )");
                    $insert38E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '8E', 0 )");
                    $insert38F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '8F', 0 )");
                    $insert39A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '9A', 0 )");
                    $insert39B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '9B', 0 )");
                    $insert39C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '9C', 0 )");
                    $insert39D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '9D', 0 )");
                    $insert39E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '9E', 0 )");
                    $insert39F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '9F', 0 )");
                    $insert310A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '10A', 0 )");
                    $insert310B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '10B', 0 )");
                    $insert310C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '10C', 0 )");
                    $insert310D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '10D', 0 )");
                    $insert310E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '10E', 0 )");
                    $insert310F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot3', '10F', 0 )");
        }
                    if( in_array("timeslot4", $timeslot) ){
                    $insert4 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', 'timeslot4')");
                    $insert41A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '1A', 0 )");
                    $insert41B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '1B', 0 )");
                    $insert41C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '1C', 0 )");
                    $insert41D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '1D', 0 )");
                    $insert41E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '1E', 0 )");
                    $insert41F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '1F', 0 )");
                    $insert42A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '2A', 0 )");
                    $insert42B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '2B', 0 )");
                    $insert42C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '2C', 0 )");
                    $insert42D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '2D', 0 )");
                    $insert42E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '2E', 0 )");
                    $insert42F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '2F', 0 )");
                    $insert43A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '3A', 0 )");
                    $insert43B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '3B', 0 )");
                    $insert43C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '3C', 0 )");
                    $insert43D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '3D', 0 )");
                    $insert43E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '3E', 0 )");
                    $insert43F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '3F', 0 )");
                    $insert44A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '4A', 0 )");
                    $insert44B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '4B', 0 )");
                    $insert44C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '4C', 0 )");
                    $insert44D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '4D', 0 )");
                    $insert44E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '4E', 0 )");
                    $insert44F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '4F', 0 )");
                    $insert45A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '5A', 0 )");
                    $insert45B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '5B', 0 )");
                    $insert45C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '5C', 0 )");
                    $insert45D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '5D', 0 )");
                    $insert45E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '5E', 0 )");
                    $insert45F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '5F', 0 )");
                    $insert46A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '6A', 0 )");
                    $insert46B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '6B', 0 )");
                    $insert46C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '6C', 0 )");
                    $insert46D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '6D', 0 )");
                    $insert46E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '6E', 0 )");
                    $insert46F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '6F', 0 )");
                    $insert47A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '7A', 0 )");
                    $insert47B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '7B', 0 )");
                    $insert47C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '7C', 0 )");
                    $insert47D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '7D', 0 )");
                    $insert47E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '7E', 0 )");
                    $insert47F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '7F', 0 )");
                    $insert48A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '8A', 0 )");
                    $insert48B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '8B', 0 )");
                    $insert48C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '8C', 0 )");
                    $insert48D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '8D', 0 )");
                    $insert48E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '8E', 0 )");
                    $insert48F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '8F', 0 )");
                    $insert49A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '9A', 0 )");
                    $insert49B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '9B', 0 )");
                    $insert49C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '9C', 0 )");
                    $insert49D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '9D', 0 )");
                    $insert49E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '9E', 0 )");
                    $insert49F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '9F', 0 )");
                    $insert410A = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '10A', 0 )");
                    $insert410B = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '10B', 0 )");
                    $insert410C = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '10C', 0 )");
                    $insert410D = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '10D', 0 )");
                    $insert410E = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '10E', 0 )");
                    $insert410F = mysqli_query($db,"INSERT into `BookTickz`.`seat_layout`(`name`, `Timeslot`, `seat_name`, `seat_status`) VALUES ('$moviename', 'timeslot4', '10F', 0 )");
        }
}
                else{
                  echo '<script type="text/javascript">';
                    echo 'alert("Please select atleast one timeslot.");';
                    echo 'location.href="/TicketBooking/upload.html"';
                    echo '</script>';
                  }
                  //  $insert4 = mysqli_query($db,"INSERT into `BookTickz`.`image`(`name`, `image`, `created`, `Description`, `Timeslot`) VALUES ('$moviename', '$imgContent', '$dataTime', '$description', '$checkbox4')");
       //Insert image content into database
       if($insert |$insert2 |$insert3 |$insert4 ){
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
else {
  echo '<script type="text/javascript">';
    echo 'alert("Movie upload failed, Please select image file.");';
  echo 'location.href="/TicketBooking/upload.html"';
  echo '</script>';

}
?>
