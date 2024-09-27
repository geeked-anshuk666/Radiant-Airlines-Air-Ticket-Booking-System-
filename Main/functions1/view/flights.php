<!DOCTYPE html>
<html>
<head>
    <title>Available Flights</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Available Flights</h1>
    <table>
        <tr>
            <th>Flight Number</th>
            <th>Departure</th>
            <th>Arrival</th>
            <th>Destination</th>
            <th>Source</th>
            <th>Aeroplane type</th>
            <th>Total number of seats</th> 
               
            <th>Duration</th>
                    
            <th>Price</th>

            <th>Book</th>
        </tr>
        <?php
            // Connect to database
            $conn = mysqli_connect("localhost", "root", "", "ofbsphp");

            // Query to retrieve all flights
            $query = "SELECT * FROM flight";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['flight_id'] . "</td>";
                //echo "<td>" . $row['airline_id'] . "</td>";
                echo "<td>" . $row['departure'] . "</td>";
                echo "<td>" . $row['arrival'] . "</td>";
                echo "<td>" . $row['Destination'] . "</td>";
                echo "<td>" . $row['source'] . "</td>";
                echo "<td>" . $row['aeroplane_type'] . "</td>";
                echo "<td>" . $row['seats_available'] . "</td>";
                
                echo "<td>" . $row['duration'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td><a href='book.html?flight_id=" . $row['flight_id'] . "'>Book</a></td>";//redirects to booking page after entering deatils
                echo "</tr>";
            }

            // Close database connection
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>