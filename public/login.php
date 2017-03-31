<?php 
session_start();

require "functions.php";
require_once "../Auth.php";
require_once "../Input.php";
require_once "../Log.php";

if (Auth::check()) {
	header("Location: http://codeup.dev/authorized.php");
}


$username = Input::get('username');
$password = Input::get('password'); 

// if (Auth::attempt($username, $password)){
// 	header("Location: http://codeup.dev/authorized.php");
// }

// Auth::attempt($username, $password);



// if ($username == "guest" && $password == password_verify($password, static::$password)) {
// 			$_SESSION['logged_in_user'] = $username;
// 			header("Location: http://codeup.dev/authorized.php");
// 		} elseif ($username == "mattv01" && $password == "ducks0101") {
// 			$_SESSION['logged_in_user'] = $username;
// 			header("Location: http://codeup.dev/authorized.php");
// 		} elseif (!empty($_POST)) {
// 			$log = new Log();
// 			// $message = "$username failed to login";
// 			$log->logError("$username failed to login");
// 			$message = "Oops, incorrect username or password given";
// 			return $message;
// 		}





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">--> 
	<link rel="stylesheet" type="text/css" href="">
	<style>form{margin-top: 20%;margin-left: 30%;width: 50%;}</style>
</head>
<body>


<form action="login.php" method="post">
	<label for="username">Username:</label>
	<input type="text" name="username">
	<label for="password">Password:</label>
	<input type="password" name="password">
	<button type="submit">Login</button>
</form>
<!-- shows message if user submits incorrect credentials -->
<h4><?=Auth::attempt($username, $password)?></h4>

 <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>