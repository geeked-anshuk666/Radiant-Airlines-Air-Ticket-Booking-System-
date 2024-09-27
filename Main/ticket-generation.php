<?php

include "footer.html";
// Connect to the database
$db = new mysqli('localhost', 'root', '', 'ofbsphp');

// Get the ticket ID
$ticket_id = $_POST['ticket_id'];

// Retrieve information from the ticket table
$ticket_query = "SELECT ticket_id, flight_id, user_id, seat_no, class, Price FROM ticket WHERE ticket_id = $ticket_id";
$ticket_result = $db->query($ticket_query);
$ticket = $ticket_result->fetch_assoc();

// Retrieve information from the flight table
$flight_query = "SELECT source, Destination, departure, arrival, aeroplane_type FROM flight WHERE flight_id = {$ticket['flight_id']}";
$flight_result = $db->query($flight_query);
$flight = $flight_result->fetch_assoc();

// Retrieve information from the airline table
$airline_query = "SELECT airline_id, airline_name FROM airline WHERE airline_id = (SELECT airline_id FROM flight WHERE flight_id = {$ticket['flight_id']})";
$airline_result = $db->query($airline_query);
$airline = $airline_result->fetch_assoc();

if(isset($_POST["downloadpdf"])){
    require_once 'dompdf/autoload.inc.php';
    //use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $html= '<html>
             <head>
              <style>
                table, th, td {
                  border: 1px solid black;
                  border-collapse: collapse;
                }
                th, td {
                  padding: 5px;
                  text-align: left;
                }
              </style>
             </head>
             <body>
              <h1>Ticket</h1>
              <table style="width:100%">
                <tr>
                  <th>Ticket ID</th>
                  <td>'.$ticket["ticket_id"].'</td>
                </tr>
                <tr>
                  <th>Flight ID</th>
                  <td>'.$ticket["flight_id"].'</td>
                </tr>
                <tr>
                  <th>User ID</th>
                  <td>'.$ticket["user_id"].'</td>
                </tr>
                <tr>
                  <th>Seat Number</th>
                  <td>'.$ticket["seat_no"].'</td>
                </tr>
                <tr>
                  <th>Class</th>
                  <td>'.$ticket["class"].'</td>
                </tr>
                <tr>
                  <th>Price</th>
                  <td>'.$ticket["Price"].'</td>
                </tr>
                <tr>
                  <th>Source</th>
                  <td>'.$flight["source"].'</td>
                </tr>
               <tr>
                  <th>Destination</th>
                  <td>'.$flight["Destination"].'</td>
                </tr>
                <tr>
                  <th>Departure</th>
                  <td>'.$flight["departure"].'</td>
                </tr>
                <tr>
                  <th>Arrival</th>
                  <td>'.$flight["arrival"].'</td>
                </tr>
                <tr>
                  <th>Aeroplane Type</th>
                  <td>'.$flight["aeroplane_type"].'</td>
                </tr>
                <tr>
                  <th>Airline ID</th>
                  <td>'.$airline["airline_id"].'</td>
                </tr>
                <tr>
                  <th>Airline Name</th>
                  <td>'.$airline["airline_name"].'</td>
                </tr>
              </table>
             </body>
            </html>';
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("ticket.pdf", array("Attachment" => false));
    exit(0);
}
?>

<html>
 <head>
  <title>Ticket</title>
  <link rel="stylesheet" href="ticket-generation.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
 </head>
 <body>
  <h1>Ticket</h1>
  <table style="width:100%">
    <tr>
      <th>Ticket ID</th>
      <td><?php echo $ticket["ticket_id"]; ?></td>
    </tr>
    <tr>
      <th>Flight ID</th>
      <td><?php echo $ticket["flight_id"]; ?></td>
    </tr>
    <tr>
      <th>User ID</th>
      <td><?php echo $ticket["user_id"]; ?></td>
    </tr>
    <tr>
      <th>Seat Number</th>
      <td><?php echo $ticket["seat_no"]; ?></td>
    </tr>
    <tr>
      <th>Class</th>
      <td><?php echo $ticket["class"]; ?></td>
    </tr>
    <tr>
      <th>Price</th>
      <td><?php echo $ticket["Price"]; ?></td>
    </tr>
    <tr>
      <th>Source</th>
      <td><?php echo $flight["source"]; ?></td>
    </tr>
    <tr>
      <th>Destination</th>
      <td><?php echo $flight["Destination"]; ?></td>
    </tr>
    <tr>
      <th>Departure</th>
      <td><?php echo $flight["departure"]; ?></td>
    </tr>
    <tr>
      <th>Arrival</th>
      <td><?php echo $flight["arrival"]; ?></td>
    </tr>
    <tr>
        <th>Aeroplane Type</th>

      <td><?php echo $flight["aeroplane_type"]; ?></td>
    </tr>
    <tr>
    <th>Airline ID</th>
    <td><?php echo $airline["airline_id"]; ?></td>
    </tr>
    <tr>    
    <th>Airline Name</th>
    <td><?php echo $airline["airline_name"]; ?></td>
    </tr>
</table>
  <form method="post">
    <input type="submit" name="downloadpdf" value="Download as PDF">
    
  </form>
  <a href="home.php">
  <button class="button is-large is-fullwidth">Go HOME!!!!!</button>  

  </a>
</body>
</html>
