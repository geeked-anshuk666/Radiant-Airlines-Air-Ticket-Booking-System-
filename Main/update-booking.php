<?php

include "footer.html";

// Connect to the database
$db = new mysqli("localhost", "root", "", "ofbsphp");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get the updated ticket details from the form
$ticket_id=$_POST['ticket_id'];
$flight_id = $_POST['flight_id'];
$seat_no = $_POST['seat_no'];
$class = $_POST['class'];

// Update the ticket in the database
$query = "UPDATE ticket SET seat_no='$seat_no', class='$class' WHERE flight_id='$flight_id' and ticket_id='$ticket_id'";

if ($db->query($query) === TRUE) {
    header("Location: update-confirmation.html");
} else {
    echo "Error updating ticket: " . $db->error;
}
//sleep(5);
$db->close();


//header("Location: home.php");
?>
