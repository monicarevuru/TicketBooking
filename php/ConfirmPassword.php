
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>BookTickZ</title>
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
          	<center> <h4 class="modal-title"> Password Confirmation </h4> <center>
         </div>
         <div class="modal-body">

 		<div>
      <?php
      session_start();
      include("config.php");
      if(isset($_POST['BookSeats'])){
         $seats = $_POST['seats'];
           $_SESSION['seats'] = $seats;}
      ?>
   			<form action = "confirm.php" name = "signin" method = "post">
     				<label for="password">Confirm pass</label>
     				<input type="password" id="confirm_password" name="confirm_password" placeholder="Enter Password" required="required" data-error="Please enter this field.">

 			        <br>


     				<input type="submit" name = "signin" value="Submit">
   			</form>
 		</div>
         </div>
         <div class="modal-footer">
           <a href="index.php">Close</a>
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
