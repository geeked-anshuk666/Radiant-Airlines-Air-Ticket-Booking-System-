
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="book-ticket.css">k
    <title>Document</title>
    <style>
  .logo{
        
    position: absolute;
    top: -40px;
    left: 800px;
    z-index:1 ;
    height: 250px;
    width: 400px;
    /*mix-blend-mode: multiply;*/
    
  
  }

  
  </style>
  
  
  <a href="home.php"><image class="logo" src="logo.png"/></a>
</head>
<body>

<?php
include "footer.html";
//connect to the database
$conn = mysqli_connect("localhost", "root", "", "ofbsphp");

//check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//retrieve the form data
$user_id = $_POST['user_id'];
$flight_id = $_POST['flight_id'];
$class = $_POST['class'];

//retrieve the seat_no from the displayed seat matrix
$seat_no = $_POST['seat_no'];

//retrieve the Price from the flight table
$Price_query = "SELECT Price FROM flight WHERE flight_id = '$flight_id'";
$Price_result = mysqli_query($conn, $Price_query);
$Price = mysqli_fetch_assoc($Price_result)['Price'];

//insert the booking data into the ticket table
$booking_query = "INSERT INTO ticket (user_id, flight_id, seat_no, class, Price) VALUES ('$user_id', '$flight_id', '$seat_no', '$class', '$Price')";
$booking_result = mysqli_query($conn, $booking_query);

//check if the booking was successful
$ticket_id = mysqli_insert_id($conn);
if ($booking_result) {
  //  generate the ticket
  //<div class="info"></div>
    echo "Ticket booked successfully!  Your ticket details are:<br>";
    
    
    
    
    
    //if (mysqli_query($conn, $query)) 
        
    
        
    
} 
//else {
    //echo "Booking failed. Please try again.";
//s}

//close the database connection
mysqli_close($conn);
//header("Location: booking_confirmation.html");
//exit();

?>
<h1>Ticket Details</h1>
    <table style="width:100%">
      <tr>
        <th>Ticket ID</th>
        <td><?php echo " $ticket_id   <--------------------------THIS IS VERY IMPORTANT . NOTE THIS DOWN SOMEWHERE TO GENERATE A TICKET LATER." ; ?></td>
      </tr>
      <tr>
        <th>User ID</th>
        <td><?php   echo "$user_id";
        ?></td>
      </tr>
      <tr>
        <th>Flight ID</th>
        <td><?php   echo "$flight_id";
        ?></td>
      </tr>
      <tr>
        <th>Seat Number</th>
        <td><?php   echo " $seat_no";
        ?></td>
      </tr>
      <tr>
        <th>Class</th>
        <td><?php echo "$class"; ?></td>
      </tr>
      <tr>
        <th>Price</th>
        <td><?php echo "$Price"; ?></td>
      </tr>
      <tr>
      </table>
<a href="booking_confirmation.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Confirm</a>
</body>
</html>
