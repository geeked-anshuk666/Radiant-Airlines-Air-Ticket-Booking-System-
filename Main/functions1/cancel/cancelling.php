<?php

//connect to the database
$conn = mysqli_connect("localhost", "root", "", "ofbsphp");

//check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//retrieve the ticket_id from the form
$ticket_id = $_POST['ticket_id'];

//delete the ticket from the table
$cancel_query = "DELETE FROM ticket WHERE ticket_id='$ticket_id'";
$cancel_result = mysqli_query($conn, $cancel_query);

//check if the cancellation was successful
if ($cancel_result) {
    //redirect to the cancellation confirmation page
    header("Location: cancellation-confirmation.html");
    exit();
} else {
    echo "Cancellation failed. Please try again.";
}

//close the database connection
mysqli_close($conn);

?>





