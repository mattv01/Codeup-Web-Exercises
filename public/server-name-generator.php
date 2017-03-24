<?php 

$adjectives = ["devilish", "amused", "rough", "sleepy", "curved", "hungry", "fluffy", "sore", "unarmed", "hellish"];
$nouns = ["computer", "wood", "sofa", "man", "carpenter", "cup", "bottle", "cellar", "ducks", "birthday"];


function randomServerName($adjectives, $nouns){
	$randomAdjectiveIndex = (array_rand($adjectives, 1));
	$randomAdjective = $adjectives[$randomAdjectiveIndex];
	$randomNounIndex = (array_rand($nouns, 1));
	$randomNoun = $nouns[$randomNounIndex];
	$randomServerName = "$randomAdjective $randomNoun" . PHP_EOL;
	return $randomServerName;
}


// function randomWord($word){
// 	echo array_rand($adjectives, 1);
// }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Server Name Generator</title>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">--> 
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

<h1><?php echo randomServerName($adjectives, $nouns);?></h1>











<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
</body>
</html>