<?php 

require_once "functions.php";
require_once "../Auth.php";
require_once "../Input.php";
require_once "../Log.php";

session_start();

function pageController() {
	$data = [];
	$data['message'] = "";

	if (Auth::check()) {
		header("Location: http://codeup.dev/authorized.php");
		die();
	}

	if(!empty($_POST)) {
		$username = Input::get("username");
		$password = Input::get("password");
		$log = new Log();
		if(Auth::attempt($username, $password)) {
			$log->logInfo("$username logged in successfully. ");
			header("Location: http://codeup.dev/authorized.php");
			die();
		} else {
			$log->logError("$username failed to log in.");
			$data['message'] = "Oops, incorrect username or password given";
		}
	} 
	return $data;
}
extract(pageController());

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
	<h4><?=$message?></h4>



<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>