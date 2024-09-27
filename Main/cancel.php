<?php

include "footer.html";
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "ofbsphp");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the booking ID
$ticket_id = $_POST['ticket_id'];

//




$sql = "DELETE FROM ticket WHERE ticket_id='$ticket_id'";

if (mysqli_query($conn, $sql)) {
    
} else {
echo "Error deleting booking: " . mysqli_error($conn);
}
header("Location: cancel-confirmation.php");
// Close the connection
mysqli_close($conn);
?>

