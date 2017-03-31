<?php 

require "functions.php";
require_once "../Auth.php";
require_once "../Input.php";

session_start();

$username = Auth::user();

//if user navigates to this page without signing in first, take user to login page
if (!Auth::check()) {
	header("Location: http://codeup.dev/login.php");
}

//clear session if user has been navigated to this page
Auth::logout();

//if user clicks login button, take them to the login page
if (Input::has('login')) {
	header("Location: http://codeup.dev/login.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">--> 
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<h1 class="btn-success"><?=$username?> has successfully logged out</h1>

<form method="POST">
	<button type="submit" name="login">Login</button>
</form>

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>