<?php 

require "functions.php";

function pageController(){
	$data = [];
	$data['hitcount'] = inputGet('hitcount');
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
	<title>PONG</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">--> 
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<!-- 0 doesn't show when first loading the page because hitcount is set to null from functions.php (inputGet) -->
<h1><?=$hitcount?></h1>

<form method="GET">
	<a href="/ping.php?HIT&hitcount=<?=$hitcount+1?>"><button type="button" class="btn-success">HIT</button></a>
	<a href="/ping.php?MISS&hitcount=0"><button type="button" class="btn-danger">MISS</button></a>
</form>

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>