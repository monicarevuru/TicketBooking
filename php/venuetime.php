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
<?php
include("config.php");
echo $conn;

?>
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
  			<form action="layout.html" name = "layout" method = "post">
      				<label for="theatre">THEATRE - BookTickZ</label>
            <br>
            <br>

  <label for="theatre">DESCRIPTION</label>
  <br>

            <?php
            include("php/config.php");
            $sql = "SELECT * from image where name = 'Premam'";
              //$result = mysqli_query($conn, $sql);
              //echo "<pre>Debug: $sql</pre>\m";
              $result = mysqli_query($conn, $sql);
              if ( 'false'===$result ) {
                  printf("error: %s\n", mysqli_error($conn));
                }
            $row = mysqli_fetch_assoc($result);

          //  echo '<input type="desc" id="desc" name="desc" value = "$result" >;
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

            $sqls = "SELECT `Timeslot` FROM `image` WHERE `name` = 'hello' ";
              //$result = mysqli_query($conn, $sql);
              //echo "<pre>Debug: $sql</pre>\m";
              $result = mysqli_query($conn, $sqls);
            //  echo mysqli_num_rows($result);
              if ( 'false'===$result ) {
                  printf("error: %s\n", mysqli_error($conn));
                }
            $row = mysqli_fetch_assoc($result);


          //  echo '<input type="desc" id="desc" name="desc" value = "$result" >;
          while ($row = mysqli_fetch_assoc($result)) {

            while(list($var, $val) = each($row)) {

                if($val == "timeslot2")
                {
                  $c1 = "13:00 - 15:00";
                  echo "<input type = radio name= $c1 >";
                  echo $c1;
                }
                if($val == "timeslot1")
                {
                  $c1 = "11:00 - 13:45";
                  echo "<input type = radio name= $c1 >";
                  echo $c1;
                }
            }

            print "<br />";
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
