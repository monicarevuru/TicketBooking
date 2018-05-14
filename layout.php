<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS seat booking</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <div class="super_container">

    	<!-- Header -->
      <header class="header">
        <div class="top_bar">
    			<div class="container">
    				<div class="row">
    					<div class="col d-flex flex-row">
    						<div class="top_bar_content ml-auto">
    							<div class="top_bar_user">
    								<div class="user_icon"></div>
                    <ul class="standard_dropdown main_nav_dropdown">
                      <ul><img src="images/available.png" alt=""> Available<i class=""></i></a></ul>
                      <ul><img src="images/selected.png" alt=""> Selected<i class=""></i></a></ul>
                      <ul><img src="images/occupied.png" alt=""> Occupied<i class=""></i></a></ul>

                    </ul>
                              <!--  <li><img src="images/available.png" alt=""></li>
                                <li><img src="images/available.png" alt=""></li>
    								           <div><a href="#">Available</a></div>


                   <div class="user_icon"><img src="images/selected.png" alt=""></div>

    								            <div><a href="#">Selected </a></div>

                    <div class="user_icon"><img src="images/occupied.png" alt=""></div>

    								            <div><a href="#">Occupied</a></div>-->

    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>

  </header>
  </div>
  <!-- <div class="plane">
  <!-- <div class="cockpit">
    <h1>Please select a seat</h1>
  </div> -->
  <!--<div class="exit exit--front fuselage">

  </div> -->
  <form action="ConfirmPassword.html" name = "BookSeats" method = "post">
  <ol class="cabin fuselage">
    <?php
      session_start();
      include ('php/config.php');
      //  echo $_SESSION['Timeslot'];
        //echo $_SESSION['Timeslot'];
        //echo 'hi';
        //header("Location:/TicketBooking/layout.php");

      $mname = $_SESSION['movie_name'];
      //echo $mname;
      $timeslot = $_SESSION['Timeslot'];
      //echo $timeslot;
      $query = "SELECT * FROM `seat_layout` WHERE `name`= '$mname'  and `Timeslot`='$timeslot'";
      $result = mysqli_query($conn,$query);

      for($i=1;$i<11;$i++){
        echo '<li class="row row--'.$i.'">';
          echo '<ol class="seats" type="A">';


              for($j=0;$j<6;$j++){
                echo '<li class="seat">';
                  //echo mysqli_num_rows($result);
                  $row = mysqli_fetch_assoc($result);
                $display = $row['seat_status'];
                //echo $display;
                $disable = $display?'disabled':"";
            //echo $row['seat_name'];
          echo '<input type="checkbox" '.$disable.' id="'.$row['seat_name'].'" value="'.$row['seat_name'].'" name = "seats[]"/>';
        echo '<label for="'.$row['seat_name'].'">'.$row['seat_name'].'</label>';
      echo '</li>';
      }
      echo '</ol>';
      echo '</li>';
}

$_SESSION['seats'] = $seats;

     ?>
  </ol>
  <!--<div class="exit exit--back fuselage">-->

  </div>
</div>
<div>

    <!--<br>-->
          <br>


        <center><input type="submit" value="Make Payment" name ="makePayment"></center>
    </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



</body>
<style>


input[type=submit] {
    width: 20%;
    background-color: #0e8ce4;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #02b6f7;
}

given{font-size:30px;}


</style>
</html>
