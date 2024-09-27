
<?php

//connect to database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ofbsphp";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//get user input for booking a ticket
/*$flight_id = $_POST['flight_id'];
$user_id = $_POST['user_id'];
$seat_no = $_POST['seat_no'];
$class = $_POST['class'];
$price = $_POST['Price'];

//query to insert ticket information into the ticket table
$query = "INSERT INTO ticket (flight_id, user_id, seat_no, class, price) VALUES ('$flight_id', '$user_id', '$seat_no', '$class', '$price')";
*/
if (mysqli_query($conn, $query)) {
    //get the generated ticket_id
    $ticket_id = mysqli_insert_id($conn);
    echo "Ticket booked successfully. Ticket ID: " . $ticket_id;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>