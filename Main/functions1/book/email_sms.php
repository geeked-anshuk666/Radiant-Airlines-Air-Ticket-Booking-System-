<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="email_sms.css">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connect.php';
    function sendConfirmationEmail($email, $bookingId) {
        // Query the database for the booking details
        $db = mysqli_connect("host", "username", "password", "dbname");
        $query = "SELECT * FROM bookings WHERE id='$bookingId'";
        $result = mysqli_query($db, $query);
        $booking = mysqli_fetch_assoc($result);
        $flightId = $booking["flight_id"];
    
        // Query the database for the flight details
        $query = "SELECT * FROM flights WHERE id='$flightId'";
        $result = mysqli_query($db, $query);
        $flight = mysqli_fetch_assoc($result);
    
        // Compose the email
        $to = $email;
        $subject = "Booking Confirmation";
        $message = "Thank you for booking with us!\n\n" .
                   "Your itinerary:\n" .
                   "Airline: " . $flight["airline"] . "\n" .
                   "Departure City: " . $flight["departure_city"] . "\n" .
                   "Arrival City: " . $flight["arrival_city"] . "\n" .
                   "Departure Time: " . $flight["departure_time"] . "\n" .
                   "Arrival Time: " . $flight["arrival_time"] . "\n\n" .
                   "You can view your booking details by logging into your account on our website.\n\n" .
                   "Thank you for choosing us!";
        $headers = "From: noreply@airline.com\r\n";
        mail($to, $subject, $message, $headers);
    
        // Close the database connection
        mysqli_close($db);
    }
    
    function sendConfirmationSMS($phone, $bookingId) {
        // Query the database for the booking details
        $db = mysqli_connect("host", "username", "password", "dbname");
        $query = "SELECT * FROM bookings WHERE id='$bookingId'";
        $result = mysqli_query($db, $query);
        $booking = mysqli_fetch_assoc($result);
        $flightId = $booking["flight_id"];
    
        // Query the database for the flight details
        $query = "SELECT * FROM flights WHERE id='$flightId'";
        $result = mysqli_query($db, $query);
        $flight = mysqli_fetch_assoc($result);
    
        // Compose the SMS
        $to = $phone;
        $message = "Thank you for booking with us! Your itinerary: Airline: " . $flight["airline"] . ", Departure: " . $flight["departure_city"] . ", Arrival: " . $flight["arrival_city"] . ", Departure Time: " . $flight["departure_time"] . ", Arrival Time: " . $flight["arrival_time"] . ". View your booking details in your account on our website. Thank you for choosing us!";
    
        // Use a SMS gateway API to send the SMS
        sendSMS($to, $message);
    
        // Close the database connection
        mysqli_close($db);
    }
?>
        
    
    
    <!--Send email or SMS confirmation of the booking and itinerary:-->
 
<p id="confirmation-message">Thank you for booking with us! A confirmation email has been sent to <span id="email"></span> and an SMS has been sent to <span id="phone"></span> with your itinerary.</p>

</body>
</html>