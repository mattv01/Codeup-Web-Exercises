<?php
require __DIR__ . '/db_connect.php' ;
require __DIR__ . "/../Input.php";

$page = Input::get('page', 1);
$limit = 4;

$totalParks = $dbc->query("SELECT count (*) FROM national_parks")->fetchColumn();
$maxPage = ceil($totalParks/$limit);

if ($page < 1 || !is_numeric($page) || $page > $maxPage) {
	header("location: national_parks.php?page=1");
}

$offset = ($page - 1) * $limit;
$select = "SELECT * FROM national_parks LIMIT {$limit} OFFSET {$offset}";
$statement = $dbc->query($select);
$parks = $statement->fetchAll(PDO::FETCH_ASSOC);

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
	<style type="text/css">body{ padding: 2%;}</style>
</head>
<body>
<h1>National Parks</h1>
<table class="table table-hover">
	<tr>
		<th>Name</th>
		<th>Location</th>
		<th>Date Established</th>
		<th>Area in Acres</th>
	</tr>
	<?php foreach($parks as $park): ?>
		<tr>
			<td><?= $park['name']?></td>
			<td><?= $park['location']?></td>
			<td><?= $park['date_established']?></td>
			<td><?= $park['area_in_acres']?></td>
		</tr>
	<?php endforeach; ?>
</table>
<form method="GET">	
	<ul class="pagination">
		<li><?php if ($page > 1): ?><a href="/national_parks.php?page=<?=$page-1?>">Previous</a><?php endif; ?></li>
		<li><?php if ($page < $maxPage): ?><a href="/national_parks.php?page=<?=$page+1?>">Next</a><?php endif; ?></li>
	</ul>
</form>


<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8yU5lRs-GOxQhZ7boYDTdveBQds32R0c"></script>

<script type="text/javascript">

	$("td").click(function(){
		switch(this.innerText) {
			case "Acadia":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/b/b1/Bass_harbor_head_light_20041002_123635_1.1504x1000.jpg')");
				break;
			case "American Samoa":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/1/13/Ofu_Beach_NPS.jpg')");
				break;
			case "Arches":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/0/06/Delicatearch1.jpg')");
				break;
			case "Badlands":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/6/6d/BadlandsView3.jpg')");
				break;
			case "Big Bend":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/3/35/Santa_Elena_Canyon.jpg')");
				break;
			case "Biscayne":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/d/df/Biscayne_NP_snorkeling.jpg')");
				break;
			case "Black Canyon of the Gunnison":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/9/9e/Black_canyon_gunnison_Colorado.jpg')");
				break;
			case "Bryce Canyon":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/5/58/Bryce_Canyon_Hoodoos_Amphitheater.jpg')	");
				break;
			case "Canyonlands":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/6/6d/Canyonlands_Needles.jpg')");
				break;
			case "Capitol Reef":
				$("body").css("background-image", "url('https://upload.wikimedia.org/wikipedia/commons/4/40/Cassidy_Arch%2C_Capitol_Reef_National_Park.JPG')");
				break;     
		}	
	});

	$("td").dblclick(function(){
		$("body").css("background-image", "none");
	});

</script>
</body>
</html>