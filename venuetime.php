<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHOW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <!-- Trigger the modal with a button -->
 <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> id="myModal"-->
  <!-- Modal -->
  <!--<div class="modal fade" role="dialog">-->
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         	<center> <h4 class="modal-title"> Movie Details </h4> <center>
        </div>
        <div class="modal-body">

		<div>
  			<form action="layout.php" name = "layout" method = "post">
      				<label for="theatre">THEATRE </label>
				<p>Book TickZ </p><br>
  				<label for="theatre">DESCRIPTION</label>
  				<br>
            			<?php
            				include("php/config.php");
					          session_start();
           				$_SESSION['movie_name'] = $_GET['bookbtn'];
           				$val = $_SESSION['movie_name'];
            				$sql = "SELECT * from image where name = '$val' ";
             	 			$result = mysqli_query($conn, $sql);
              				if ( 'false'===$result ) {
                  				printf("error: %s\n", mysqli_error($conn));
                			}
            				$row = mysqli_fetch_assoc($result);

        				if( mysqli_num_rows( $result ) > 0)
        				{
            					echo $row['Description'];

          				}
          			?>
          			<br>
             			<br>

    				<label for="timeslot">SHOW TIME</label>
            			<br>
            			<?php
            				include("php/config.php");
					          session_start();
           				  $_SESSION['movie_name'] = $_GET['bookbtn'];
           				  $var = $_SESSION['movie_name'];
            				$sqls = "SELECT `Timeslot` FROM `image` WHERE `name` like '$var%' ";
              				$result = mysqli_query($conn, $sqls);
            				//  echo mysqli_num_rows($result);
              				if ( 'false'===$result ) {
                  				printf("error: %s\n", mysqli_error($conn));
                			}

          				//  echo '<input type="desc" id="desc" name="desc" value = "$result" >;
          				while ($row = mysqli_fetch_assoc($result)) {

						if($row['Timeslot'] == "timeslot1")
						{
							$t1 = "11:00 - 13:45";
							echo "<input type = 'radio' name= 'timeslot' value='timeslot1' >";
							echo $t1;
						}
						if($row['Timeslot'] == "timeslot2")
						{
							$t2 = "15:00 - 17:30";
							echo "<input type = 'radio' name= 'timeslot' value='timeslot2' >";
							echo $t2;
						}
						if($row['Timeslot'] == "timeslot3")
						{
							$t3 = "18:00 - 20:30";
							echo "<input type = 'radio' name= 'timeslot' value='timeslot3' >";
							echo $t3;
						}
						if($row['Timeslot'] == "timeslot4")
						{
							$t4 = "21:00 - 00:00";
							echo "<input type = 'radio' name= 'timeslot' value='timeslot4' >";
							echo $t4;
						}

            				print "</br>";
            				++$rowcount;

        				}
          			?>


				<br>
			        <br>


    				<input type="submit" value="Proceed">
  			</form>
		</div>
        </div>
        <div class="modal-footer">
          <a href="movies.php">Close</a>
        </div>
      </div>

    </div>
  <!--</div>-->
</div>

</body>

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #0e8ce4;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color: #02b6f7;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</html>
