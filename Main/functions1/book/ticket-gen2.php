<!DOCTYPE html>
<html>
<head>
    <title>Ticket Information</title>
    <style>
        /* CSS for styling the table */
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <h1>Ticket Information</h1>
    <table>
        <tr>
            <th>Ticket ID</th>
            <th>Flight ID</th>
            <th>User ID</th>
            <th>Seat Number</th>
            <th>Class</th>
            <th>Price</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Aeroplane Type</th>
            <th>Airline ID</th>
            <th>Airline Name</th>
        </tr>
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

//get ticket_id from user input
$ticket_id = mysqli_insert_id($conn);

//query to get ticket information
$query = "SELECT ticket.ticket_id, ticket.flight_id, ticket.user_id, ticket.seat_no, 'ticket.class', ticket.Price, 'flight.source', 'flight.Destination', flight.departure, flight.arrival, 'flight.aeroplane_type', airline.airline_id, 'airline.airline_name'
FROM ticket
INNER JOIN flight ON ticket.flight_id = flight.flight_id
INNER JOIN airline ON flight.airline_id = airline.airline_id
WHERE ticket.ticket_id = $ticket_id";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        //display ticket information
        echo "<tr>";
        echo "<td>" . $row["ticket_id"] . "</td>";
        echo "<td>" . $row["flight_id"] . "</td>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["seat_no"] . "</td>";
        echo "<td>" . $row["class"] . "</td>";
        echo "<td>" . $row["Price"] . "</td>";
        echo "<td>" . $row["source"] . "</td>";
        echo "<td>" . $row["Destination"] . "</td>";
        echo "<td>" . $row["departure"] . "</td>";
        echo "<td>" . $row["arrival"] . "</td>";
        echo "<td>" . $row["aeroplane_type"] . "</td>";
        echo "<td>" . $row["airline_id"] . "</td>";
        echo "<td>" . $row["airline_name"] . "</td>";
        echo "</tr>";
    }
    }
 else {
    echo "No ticket found with ID: $ticket_id";
}

mysqli_close($conn);
?>
        
    </table>
</body>
</html>