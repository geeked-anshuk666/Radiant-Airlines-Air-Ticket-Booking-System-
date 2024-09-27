
    <?php
    /*
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ofbsphp";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_id FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "user_id: " . $row["user_id"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration-success.css">
    <title>Document</title>
</head>
<body>
<style>
  .logo{
        
    position: absolute;
    top: -40px;
    left: -40px;
    
    height: 250px;
    width: 400px;
    /*mix-blend-mode: multiply;*/
    
  
  }

  
  </style>
  
  
  <image class="logo" src="logo.png"/>
    <div class="confirmation">
        <p>

            <h1>
                Your account has been created !!!!.
                Thank you for Choosing Radiant Voyages 
                .#BONVOYAGE</h1>
            
        </p>
        <a class="btn btn-primary" href="index.php" role="button">Login</a>
    </div>
</body>
</html>