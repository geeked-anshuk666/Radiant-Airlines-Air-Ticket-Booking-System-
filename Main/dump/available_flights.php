<?php
include 'connect.php';
 if (isset($flights)) {
     echo "<table id='flight-results'>";
     echo "<tr>";
     echo "<th>Airline</th>";
     echo "<th>Departure Time</th>";
     echo "<th>Arrival Time</th>";
     echo "<th>Duration</th>";
     echo "<th>Price</th>";
     echo "<th>Select</th>";
     echo "</tr>";
     foreach ($flights as $flight) {
         echo "<tr>";
         echo "<td>" . $flight["airline"] . "</td>";
         echo "<td>" . $flight["departure_time"] . "</td>";
         echo "<td>" . $flight["arrival_time"] . "</td>";
         echo "<td>" . $flight["duration"] . "</td>";
         echo "<td>" . $flight["price"]."</td>";
 
 
 //Continue 
 //Sure, here's the rest of the sample PHP code for the functionalities 2, 3, 4, and 5 that I listed earlier:
 
 //Display available flights (continued):
  
         echo "<td><input type='radio' name='flight-choice' value='" . $flight["id"] . "'></td>";
         echo "</tr>";
     }
     echo "</table>";
 }
 else if (isset($message)) {
     echo "<p>$message</p>";
 }
 ?>





<!--Display available flights:-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="available_flights.css">
  <title>Document</title>
</head>
<body>
  <table id="flight-results">
    <tr>
      <th>Airline</th>
      <th>Departure Time</th>
      <th>Arrival Time</th>
      <th>Duration</th>
      <th>Price</th>
      <th>Select</th>
    </tr>
    <!--<tr>
      <td></td>
      <td>8:00 AM</td>
      <td>11:00 AM</td>
      <td>3 hours</td>
      <td>$200</td>
      <td><input type="radio" name="flight-choice" value="flight-1"></td>
    </tr>
    <tr>
      <td>American</td>
      <td>9:00 AM</td>
      <td>12:00 PM</td>
      <td>3 hours</td>
      <td>$250</td>
      <td><input type="radio" name="flight-choice" value="flight-2"></td>
    </tr>-->
  </table>
  
</body>
</html> 







