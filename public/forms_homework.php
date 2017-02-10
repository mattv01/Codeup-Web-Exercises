<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Forms Homework</title>
		<link rel="stylesheet" type="text/css" href="css/forms_homework.css">
	</head>

	<body>
		<main>
			<article class="make_pizza">
				<h2>Make Your Own Pizza</h2>
				<form action="/forms_homework.php" method="POST">
					<label for="size">What size pizza would you like?</label>
					<select id="size" name="size">
						<option value="small">Personal (10")</option>
						<option value="medium" selected>Medium (12")</option>
						<option value="large">Large (14")</option>
					</select> <br>
						
					<label for="crust">What kind of crust?</label>
					<select id="crust" name="crust">
						<option value="hand_toss">Hand Tossed</option>
						<option value="thin">Thin</option>
						<option value="stuffed">Stuffed</option>
						<option value="deep_dish">Deep Dish</option>
						<option value="pan">Pan</option>
					</select> 
				
					<p>Which toppings would you like?</p>
					<h4>Meats:</h4>
						<label><input type="checkbox" id="topping1" name="topping[]" value="pepperoni">Pepperoni</label>
						<label><input type="checkbox" id="topping2" name="topping[]" value="sausage">Sausage</label>
						<label><input type="checkbox" id="topping11" name="topping[]" value="ham">Ham</label>
						<label><input type="checkbox" id="topping12" name="topping[]" value="chicken">Chicken</label>
						<label><input type="checkbox" id="topping13" name="topping[]" value="canadian_bacon">Canadian Bacon</label>
					
					<h4>Veggies:</h4>
						<label><input type="checkbox" id="topping3" name="topping[]" value="olives">Black Olives</label>
						<label><input type="checkbox" id="topping4" name="topping[]" value="banana_peppers">Banana Peppers</label>
						<label><input type="checkbox" id="topping5" name="topping[]" value="mushrooms">Mushrooms</label>
						<label><input type="checkbox" id="topping6" name="topping[]" value="pineapple">Pineapple</label>
						<label><input type="checkbox" id="topping7" name="topping[]" value="tomatoes">Tomatoes</label>
						<label><input type="checkbox" id="topping8" name="topping[]" value="spinach">Spinach</label>
						<label><input type="checkbox" id="topping9" name="topping[]" value="artichokes">Artichokes</label>
						<label><input type="checkbox" id="topping10" name="topping[]" value="jalapenos">Jalapenos</label> <br>
							
					<button type="submit">Make Pizza!</button>
				</form>
			</article>

			<article class="new_user">
				<h2>New User Registration</h2>
				<form action="/forms_homework.php" method="POST">
					<label for="first_name">First Name</label>
					<input type="text" id="first_name" name="first_name" placeholder="First Name" required>
					<label for="last_name">Last Name</label>
					<input type="text" id="last_name" name="last_name" placeholder="Last Name" required>		
					<br>
					<label for="username">Username</label>
					<input type="text" id="username" name="username" placeholder="Username" required>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="Password" required>	
					<br>
					<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
					<label for="mailing_list">Sign me up for the mailing list!</label>
					<br>
					<button type="submit">Create New Account</button>
				</form>
			</article>

			<article class="search_home">
				<h2>Find Your New Home Today!</h2>
				<form action="/forms_homework.php" method="GET">
					<label for="zipcode">Location</label>
					<input type="text" id="zipcode" name="zipcode" placeholder="zipcode">
		
		
					<label for="max_price">Max Price</label>
					<input type="text" id="max_price" name="max_price" placeholder="$">
		
					<label for="home_type">Home Type</label>
					<select id="home_type" name="home_type">
						<option value="house">House</option>
						<option value="apartment" selected>Apartment</option>
						<option value="condo">Condo</option>
					</select>
		
					<br>
		
					<label for="number_of_bedrooms">Number of Bedrooms</label>
					<select id="number_of_bedrooms" name="number_of_bedrooms">
						<option value="1">1 bed</option>
						<option value="2" selected>2 bed</option>
						<option value="3">3 bed</option>
						<option value="4">4 bed</option>
					</select>
		
					<label for="number_of_bathrooms">Number of Bathrooms</label>
					<select id="number_of_bathrooms" name="number_of_bathrooms">
						<option value="1">1 bath</option>
						<option value="1.5">1.5 bath</option>				
						<option value="2" selected>2 bath</option>
						<option value="3">3 bath</option>
					</select>
					<br>
					<button type="submit">Find My Home!</button>
				</form>
			</article>
		</main>
	</body>
</html>




<!-- 		<form action="upload.php" method="post" enctype="multipart/form-data">
    	<input type="file" name="fileToUpload" id="fileToUpload">
    	<input type="submit" value="Upload Image" name="submit">
		</form> -->




