<?php

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
    echo "Ticket booked successfully! Your ticket details are:<br>";
    
    echo "Ticket ID: $ticket_id<br>" ;
    
    echo "User ID: $user_id<br>";
    echo "Flight ID: $flight_id<br>";
    echo "Seat Number: $seat_no<br>";
    echo "Class: $class<br>";
    echo "Price: $Price<br>";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<a href="booking_confirmation.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Confirm</a>
</body>
</html>
