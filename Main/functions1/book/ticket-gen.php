<?php
//Retrieve Airline name
include 'connect.php';
$flight = mysqli_insert_id($conn);
$query = "SELECT airline_name FROM airline WHERE airline_id = '$flight[airline_id]'";
$result = mysqli_query($dbname, $query);
$airline = mysqli_fetch_assoc($result);

//Retrieve passenger details
$query = "SELECT aadhar_no,mobile,f_name,l_name,sex FROM passenger_profile WHERE user_id = '$user_id'";
$result = mysqli_query($db, $query);
$passenger = mysqli_fetch_assoc($result);

?>
<div class="ticket">
    <div class="header">
        <h2>Ticket</h2>
        <h3>Airline: <?php echo $airline["name"] ?></h3>
    </div>
    <div class="passenger-info">
        <h4>Passenger Information</h4>
        <p>Name: <?php echo $passenger["f_name"] . " " . $passenger["l_name"] ?></p>
        <p>Aadhar Number: <?php echo $passenger["aadhar"] ?></p>
        <p>Mobile Number: <?php echo $passenger["mobile"] ?></p>
        <p>Sex: <?php echo $passenger["sex"] ?></p>
    </div>
    <div class="flight-info">
        <h4>Flight Information</h4>
        <p>Flight ID: <?php echo $flight["id"] ?></p>
        <p>Source: <?php echo $flight["source"] ?></p>
        <p>Destination: <?php echo $flight["destination"] ?></p>
        <p>Departure: <?php echo $flight["departure"] ?></p>
        <p>Arrival: <?php echo $flight["arrival"] ?></p>
        <p>Duration: <?php echo $flight["duration"] ?></p>
        <p>Price: <?php echo $flight["price"] ?></p>
        <p>Aeroplane Type: <?php echo $flight["aeroplane_type"] ?></p>
    </div>
</div>