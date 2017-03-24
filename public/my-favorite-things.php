<?php

$myFavoriteThings = ["hockey", "golfing", "music", "movies", "margot robbie"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Favorite Things</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="css/font-awesome.min.css">--> 
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">table{margin:5%;font-size: 3em;}td{padding: 5%;}th{padding: 14px;}</style>
</head>
<body>

<table border="1px" class="table-striped">
	<thead>
		<th>#</th>
		<th>My Favorite Things</th>
	</thead>
	<tbody>
		<?php foreach ($myFavoriteThings as $number => $favoriteThing) { ?>
			<tr>
				<th><?php echo ($number+1); ?></th> 
				<td><?php echo $favoriteThing; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>