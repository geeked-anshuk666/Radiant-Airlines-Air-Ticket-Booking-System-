<!DOCTYPE html>
<html>
<head>
  <title>Ticket Information</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="ticket-container">
    <h1>Ticket Information</h1>
    <div class="ticket-info">
      <div class="ticket-details">
        <h2>Ticket Details</h2>
        <p>Ticket ID: <?php echo $ticket['ticket_id']; ?></p>
        <p>Flight ID: <?php echo $ticket['flight_id']; ?></p>
        <p>User ID: <?php echo $ticket['user_id']; ?></p>
        <p>Seat Number: <?php echo $ticket['seat_no']; ?></p>
        <p>Class: <?php echo $ticket['class']; ?></p>
        <p>Price: <?php echo $ticket['price']; ?></p>
      </div>
      <div class="flight-details">
        <h2>Flight Details</h2>
        <p>Source: <?php echo $flight['Source']; ?></p>
        <p>Destination: <?php echo $flight['destination']; ?></p>
        <p>Departure: <?php echo $flight['departure']; ?></p>
        <p>Arrival: <?php echo $flight['arrival']; ?></p>
        <p>Aeroplane Type: <?php echo $flight['aeroplane_type']; ?></p>
      </div>
      <div class="airline-details">
        <h2>Airline Details</h2>
        <p>Airline ID: <?php echo $airline['airline_id']; ?></p>
        <p>Airline Name: <?php echo $airline['airline_name']; ?></p>
      </div>
    </div>
  </div>
</body>
</html>