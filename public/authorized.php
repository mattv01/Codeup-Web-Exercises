<?php

session_start();

require "functions.php";
require_once "Auth.php";
require_once "Input.php";

$username = $_SESSION['logged_in_user'];

//if user is not logged in, take user to login page
if (!isset($username)) {
	header("Location: http://codeup.dev/login.php");
}
//if logout button is clicked, take user to logout page
if (inputHas('logout')) {
	if (inputGet('logout') == 'session') {
		header("Location: http://codeup.dev/logout.php");
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Authorized Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">--> 
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<?php require "navbar.php";?>
<h1>Authorized</h1>
<h2>Welcome, <?=$username?></h2>
<?php 
require "header.php";
require "footer.php";
?>


 <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>