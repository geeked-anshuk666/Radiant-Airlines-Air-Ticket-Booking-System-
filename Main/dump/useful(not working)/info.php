<?php
include 'connect.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $user_id = $_POST["user_id"];
     $adhar_no = $_POST["aadhar_no"];
     $mobile = $_POST["mobile"];
     $f_name = $_POST["f_name"];
     $l_name = $_POST["l_name"];
     $sex = $_POST["sex"];
     //$flightId = $_POST["flight-choice"];
 
     // Connect to the database
     $db = mysqli_connect("host", "username", "password", "dbname");
 
     // Insert the booking into the database
     $query = "INSERT INTO passenger_profile (user_id, aadhar_no, mobile, f_name, l_name, sex,) VALUES ('$user_id', '$aadhar_no', '$mobile', '$f_name', '$l_name', '$sex',)";
     mysqli_query($db, $query);
 
     // Get the booking ID
     $bookingId = mysqli_insert_id($db);
 
     // Update the seats_available in the flight table
     $query = "UPDATE flights SET seats_available = seats_available - 1 WHERE id = '$flight_Id'";
     mysqli_query($db, $query);
 
     // Close the database connection
     mysqli_close($db);
 
     // Send the confirmation email and SMS
     sendConfirmationEmail($email, $bookingId);
     sendConfirmationSMS($phone, $bookingId);
 }
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="info.css">
    <title>Document</title>
</head>
<body>
                <!--Allow users to enter their personal and payment information:-->
 
<form id="booking-form" action="booking-confirmation.php" method="post">
    <label for="user_id">User id:</label>
    <input type="number" id="user_id" name="User id" required>
    <label for="aadhar_no">Aadhar no:</label>
    <input type="nunber" id="aadhar_no" name="Aadhar no" required>
    <label for="mobile">Mobile no:</label>
    <input type="tel" id="mobile_no" name="Mobile no" required>
    <label for="f_name">First name:</label>
    <input type="text" id="f_name" name="First name" required>
    <label for="l_name">Last name</label>
    <input type="text" id="l_name" name="Last name" required>
    <label for="sex">Sex:</label>
    <input type="gender" id="sex" name="Sex" required>
    <input type="submit" value="Book">
  </form>
  
  
</body>
</html>
