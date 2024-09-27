<?php
  // Check if the form was submitted
  include 'connect.php';
  //include 'header.php';
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the form data
    if (empty($username) || empty($email) || empty($password)) {
      $error = 'All fields are required';
    } else {
      // Connect to the database
      //$host = 'localhost';
      //$dbname = 'mydatabase';
      //$usernameDB = 'root';
      //$passwordDB = 'rootpassword';
      //$conn = new mysqli($host, $usernameDB, $passwordDB, $dbname);
      if ($conn->connect_error) {
        $error = 'Error connecting to the database: ' . $conn->connect_error;
      } else {
        // Prepare and execute the SQL statement
        $stmt = $conn->prepare('SELECT * FROM users WHERE username = ? AND email = ? AND password = ?');
        $stmt->bind_param('sss', $username, $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        // If a user was found, log them in
        if ($user) {
          session_start();
          $_SESSION['user'] = $user;
          header('Location: home.php');
          exit;
        } else {
          $error = 'Invalid username, email, or password';
        }
      }
    }
  }
  
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Login Page</title>
  
</head>
<body>
<style>
      body {
        background-image: url('assets/login.png');
        background-attachment: fixed;
        background-size: cover;
        background-position:center,top;
        
      }
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
  
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" value="Login">
    <a class="btn btn-primary" href="register.html" role="button">Register now</a>
    <!--<input type="submit" value="Create an account now"> <a href=register.php?></a>-->
    
  </form>
  <?php if (isset($error)) : ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>
</body>
</html>