<?php

if (empty($flights)) {
    echo "No flights found.";
} else {
?>
    <table>
        <tr>
            <th>Airline</th>
            <th>Departure City</th>
            <th>Arrival City</th>
            <th>Departure Date</th>
            <th>Price</th>
        </tr>
        <?php
        foreach ($flights as $flight) {
            echo "<tr>";
            echo "<td>" . $flight["airline"] . "</td>";
            echo "<td>" . $flight["departure_city"] . "</td>";
            echo "<td>" . $flight["arrival_city"] . "</td>";
            echo "<td>" . $flight["departure_date"] . "</td>";
            echo "<td>" . $flight["price"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
<?php
}