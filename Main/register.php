<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  //validating the inputs
  $username = filter_var($username, FILTER_SANITIZE_STRING);
  $password = filter_var($password, FILTER_SANITIZE_STRING);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
  }

  // Insert the new user into the database
  // Connect to the database
  $conn = new mysqli("localhost", "root", "", "ofbsphp");
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  //$password = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO users (username, password, email)
  VALUES ('$username', '$password', '$email')";
  if ($conn->query($sql) === TRUE) {
   // header("Location: registration-success.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $user_id = mysqli_insert_id($conn);
  

  echo "YOUR  USER ID IS ------------------------------------> $user_id";
  $conn->close();
  // Redirect to the success page
  


 // header("Location: index.php");
  //exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <a class="btn btn-primary" href="index.php" role="button">Login Now</a>
</body>
</html>

