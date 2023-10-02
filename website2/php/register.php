
<?php
// Check if request comes from a form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $wachtwoord = $_POST["wachtwoord"];
  $message = $_POST["message"];

  if (!isset($name)){
	die("Please enter your password");
}
  if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
	die("Please enter your email address");
  }
  if (!isset($wachtwoord)){
	die("Please enter your password");
}
if (!isset($message)){
	die("Please enter your message");
}
 // Check if request comes from a form
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Mysql credentials
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "users";

$name = $_POST["name"];
  $email = $_POST["email"];
  $wachtwoord = $_POST["wachtwoord"];
  $message = $_POST["message"];

  if (!isset($name)){
	die("Please enter your password");
}
  if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
	die("Please enter your email address");
  }
  if (!isset($wachtwoord)){
	  die("Please enter your password");
  }
  if (!isset($message)){
	  die("Please enter your message");
  }

  // Open a new connection to MySQL server
  $mysqli = new mysqli($host, $username, $password, $database);

  // Show any connection errors
  if ($mysqli->connect_error) {
	die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }

  // Prepare the statement
  $statement = $mysqli->prepare("INSERT INTO users (name, email, wachtwoord, message) VALUES(?, ?, ?, ?)"); 

  $statement->bind_param('ssss',$name, $email, $wachtwoord, $message); 
}
if($statement->execute()){
	print "" ;
  }else{
	print $mysqli->error; 
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="name"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="wachtwoord" required>
            </div>
            <div  class="input-group-massage">
				<input type="text" placeholder="message" name="message"required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>