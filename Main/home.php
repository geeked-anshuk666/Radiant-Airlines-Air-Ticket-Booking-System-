<?php
include "footer.html";
include "logout.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="home.css">
  </head>

  <body>
    <style>
      body {
        background-image: url('assets/background.png');
        background-attachment: fixed;
        background-size: cover;
        background-position:center,top;
        z-index: -2;
      }
      .logo{
        
        position: absolute;
        top: -24px;
        left: -40px;
        
        height: 200px;
        width: 400px;
        /*mix-blend-mode: multiply;*/
        
      
      }

      
      </style>
      
      
      <a href="home.php"><image class="logo" src="logo.png"/></a>
    <div class="nav">
      <div class="comp_name">
        

      </div>

    </div>
    

    
    <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
    
    
    
    
    
    <div class="wrapper">
      <ul>
        <li><a href="home.php">Home.</a></li>
        <!--<li><a href="what_userid.html">What is my User ID????</a></li>-->
        <li><a href="flights.php">List of all flights.</a></li>
        <li><a href="book.php">Book a flight.</a></li>
        <li><a href="ticket-generation.html">Generate a ticket. </a></li>
        <li><a href="update-booking.html">Change your booking.</a></li>
        <li><a href="cancel.html">Cancel a flight.</a></li>
        

        
        


      </ul>
    </div>
    <div class="content_background"></div>

      <div class="content">
      
  
        <div class="title">
        </div>
        <p>
        </p>
      </div>
</body>
</html>

