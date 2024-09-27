<!--Offer various payment options:-->
<?php
include 'connect.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $paymentMethod = $_POST["payment-method"];
     $bookingId = $_POST["booking-id"];
 
     // Connect to the database
     $db = mysqli_connect("host", "username", "password", "dbname");
 
     // Query the database for the booking
     $query = "SELECT * FROM bookings WHERE id='$bookingId'";
     $result = mysqli_query($db, $query);
     $booking = mysqli_fetch_assoc($result);
 
     if ($paymentMethod == "credit-card") {
         // Process credit card payment
         processCreditCardPayment($booking["credit_card"], $booking["total_price"]);
     }
     else if ($paymentMethod == "paypal") {
         // Redirect to PayPal payment page
         header("Location: https://www.paypal.com/payment?bookingId=$bookingId");
     }
     else if($paymentMethod == "apple-pay") {
         // Process Apple Pay payment
         processApplePayPayment($booking["total_price"]);
     }
     else {
         // Handle invalid payment method
         $errorMessage = "Invalid payment method selected";
     }
 
     // Close the database connection
     mysqli_close($db);
?>





 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="payment_options.css">
  <title>Document</title>
 </head>
 <body>
  
 
<form id="payment-form" action="process-payment.php" method="post">
    <label for="payment-method">Payment Method:</label>
    <select id="payment-method" name="payment-method" required>
      <option value="credit-card">Credit Card</option>
      <option value="paypal">PayPal</option>
      <option value="apple-pay">Apple Pay</option>
    </select>
    <input type="submit" value="Pay">
  </form>
</body>
</html>