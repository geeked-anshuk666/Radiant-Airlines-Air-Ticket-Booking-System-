<?php

include "footer.html";
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "ofbsphp");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$source = $_POST['source'];
$Destination = $_POST['Destination'];
//$departure = $_POST['departure'];
//$arrival = $_POST['arrival'];
//$number_of_passengers = $_POST['number_of_passengers'];

// Search for flights
$sql = "SELECT * FROM flight WHERE source='$source' AND Destination='$Destination' ";
$result = mysqli_query($conn, $sql);
//to display ticket id 
$ticket_id = mysqli_query($conn);

// Display the flights
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Flight ID: " . $row["flight_id"]. " - source: " . $row["source"]. " - Destination: " . $row["Destination"]. " - Departure : " . $row["departure"]. " - Arrival: " . $row["arrival"]. " - Price: " . $row["Price"] . "<br>";

    }
} else {
    echo "No flights found.";
}
echo "NOTE DOWN THIS TICKET ID TO GENERATE A TICKET LATER:".$ticket_id;
// Close the connection
mysqli_close($conn);
?>
