<?php 

function pageController(){
	$data=[];

	$username = isset($_POST['username']) ? $_POST['username'] : 'Guest';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	
	if ($username == "mattv01" && $password == "ducks0101") {
		header("Location: http://codeup.dev/authorized.php");
	} 
	if (!empty($_POST)) {
		echo "[ERROR] Wrong Username or Password";
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
</head>
<body>

<!-- <h1>Hello, <?=$username?></h1> -->
<form action="login.php" method="post">
	<label for="username">Username:</label>
	<input type="text" name="username">
	<label for="password">Password:</label>
	<input type="password" name="password">
	<button type="submit">Login</button>
</form>





<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>