<?php
//include "footer.html";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Ticket</title>
    <link rel="stylesheet" type="text/css" href="book.css">
</head>
<body>
<style>
    
  .logo{
        
    position: absolute;
    top: -30px;
    left: -60px;
    
    height: 250px;
    width: 400px;
    /*mix-blend-mode: multiply;*/
    
  
  }

  
  </style>
  
  
  <a href="home.php"><image class="logo" src="logo.png"/></a>
    <div class="back">
    <div class="container">
        <h1>Book Ticket</h1>
        <form action="book-ticket.php" method="post">
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" required>
            <label for="flight_id">Flight from and to:</label>
                <select id="flight_id" name="flight_id">
                    <option value="1">Mumbai to Banglore</option>
                    <option value="2">Banglore to Mumbai</option>
                    <option value="3">Belgaum to Banglore </option>
                    <option value="4">Banglore to Chennai</option>
                    <option value="5">Hyderabad to Mumbai</option>
                    <option value="6">Kolkata to Hyderabad</option>
                    <option value="7">Pune to Kolkata</option>
                    <option value="8">Surat to Jaipur</option>
                    <option value="9">Goa to Belgaum</option>
                    <option value="10">Banglore to Goa</option>
                    <option value="11">Kolkata to Goa</option>
                    <option value="12">Jaipur to Belgaum</option>
                    <option value="13">Mumbai to Surat</option>
                    <option value="14">Hyderabad to Pune</option>
                    <option value="15">Belgaum  to Mumbai</option>
                    
                </select>
            <label for="seat_no">Seat Number:</label>
            <select id="seat_no" name="seat_no">
                <option value="10A">10A</option>
                <option value="10B">10B</option>
                <option value="10C">10C</option>
                <option value="10D">10D</option>
                <option value="10E">10E</option>
                <option value="10F">10F</option>
                <option value="11A">11A</option>
                <option value="11B">11B</option>
                <option value="11C">11C</option>
                <option value="11D">11D</option>
                <option value="11E">11E</option>
                <option value="11F">11F</option>
                <option value="12A">12A</option>
                <option value="12B">12B</option>
                <option value="12C">12C</option>
                <option value="12D">12D</option>
                <option value="12E">12E</option>
                <option value="12F">12F</option>
                <option value="13A">13A</option>
                <option value="13B">13B</option>
                <option value="13C">13C</option>
                <option value="13D">13D</option>
                <option value="13E">13E</option>
                <option value="13F">13F</option>
                <option value="14A">14A</option>

                <option value="14B">14B</option>
                <option value="14C">14C</option>
                <option value="14D">14D</option>
                <option value="14E">14E</option>
                <option value="14F">14F</option>
                <option value="15A">15A</option>
                <option value="15B">15B</option>
                <option value="15C">15C</option>
                <option value="15D">15D</option>
                <option value="15E">15E</option>

                <option value="15F">15F</option>
                <option value="16A">16A</option>
                <option value="16B">16B</option>
                <option value="16C">16C</option>
                <option value="16D">16D</option>
                <option value="16E">16E</option>
                <option value="16F">16F</option>
                <option value="17A">17A</option>
                <option value="17B">17B</option>
                <option value="17C">17C</option>
                <option value="17D">17D</option>
                <option value="17E">17E</option>
                <option value="17F">17F</option>
                <option value="18A">18A</option>
                <option value="18B">18B</option>
                <option value="18C">18C</option>
                <option value="18D">18D</option>
                <option value="18E">18E</option>
                <option value="18F">18F</option>
                <option value="19A">19A</option>
                <option value="19B">19B</option>
                <option value="19C">19C</option>
                <option value="19D">19D</option>
                <option value="19E">19E</option>
                <option value="19F">19F</option>
                <option value="20A">20A</option>
                <option value="20B">20B</option>
                <option value="20C">20C</option>
                <option value="20D">20D</option>
                <option value="20E">20E</option>
                <option value="20F">20F</option>
                <option value="21A">21A</option>
                <option value="21B">21B</option>
                <option value="21C">21C</option>
                <option value="21D">21D</option>
                <option value="21E">21E</option>
                <option value="21F">21F</option>
                <option value="22A">22A</option>
                <option value="22B">22B</option>
                <option value="22C">22C</option>
                <option value="22D">22D</option>
                <option value="22E">22E</option>
                <option value="22F">22F</option>
                <option value="23A">23A</option>
                <option value="23B">23B</option>
                <option value="23C">23C</option>
                <option value="23D">23D</option>
                <option value="23E">23E</option>
                <option value="23F">23F</option>
                
            </select>
            
           



            <label for="class">Class:</label>
            <select id="class" name="class">
                <option value="E">Economy Class</option>
                <option value="B">Business Class</option>
                
            </select>
            
            <input type="submit" value="Book Ticket">
            
        </form>
    </div>
    </div>
</body>
</html>



