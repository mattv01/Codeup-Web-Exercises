<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
</head>
<body>
	<h2>User Login</h2>
	<form method="POST" action="/my_first_form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="type in your username">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password" placeholder="type in your password">
	    </p>
	    <p>
	        <button type="submit">Login</button>
	    </p>
	</form>

	<h2>Compose an Email</h2>
	<form action="/my_first_form.php" method="POST">
		<label for="to">To:</label>
		<input id="to" type="text" name="to" placeholder="To"><br>
		<label for="from">From:</label>
		<input id="from" type="text" name="from" placeholder="From"><br>
		<label for="subject">Subject:</label>
		<input id="subject" type="text" name="subject" placeholder="subject"><br>
		<textarea id="email_body" name="email_body" placeholder="Compose Email" rows="5" cols="40"></textarea><br>
		<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
		<label for="mailing_list">Save a copy in the Sent folder?</label><br>
		<button type="submit">Send Email</button>			
	</form>


	<h2>Search Videos from YouTube</h2>
	<form action="https://www.youtube.com/results?" method="GET">
		<label for="search_query">Search on YouTube</label>
		<input type="text" id="search_query" name="search_query" placeholder="(ex: tool aenima)">
		<button type="submit">Search</button>
	</form>

	<h2>Multiple Choice Test</h2>
	<form action="/my_first_form.php" method="POST">
		<p>What is the capital of Texas?</p>
			<label><input type="radio" name="q1" value="houston">Houston</label>
			<label><input type="radio" name="q1" value="dallas" checked>Dallas</label>
			<label><input type="radio" name="q1" value="austin">Austin</label>
			<label><input type="radio" name="q1" value="san antonio">San Antonio</label>
		<p>Which city is Times Square located in?</p>
			<label><input type="radio" name="q2" value="nyc">New York City</label>
			<label><input type="radio" name="q2" value="la">Los Angeles</label>
			<label><input type="radio" name="q2" value="boston" checked>Boston</label>
			<label><input type="radio" name="q2" value="chicago">Chicago</label>
		<p>Which hockey teams do you like?</p>
			<label><input type="checkbox" id="team1" name="team[]" value="ducks">Anaheim Ducks</label>
			<label><input type="checkbox" id="team2" name="team[]" value="kings">Los Angeles Kings</label>
			<label><input type="checkbox" id="team3" name="team[]" value="stars">Dallas Stars</label>
			<label><input type="checkbox" id="team4" name="team[]" value="wings">Detroit Red Wings</label>
			<label><input type="checkbox" id="team5" name="team[]" value="hawks">Chicago Blackhawks</label>
			<br>
			<label for="os">What operating systems have you used?</label>
			<select id="os" name="os[]" multiple>
			    <option value="linux">Linux</option>
			    <option value="osx">OS X</option>
			    <option value="windows">Windows</option>
			</select>	
		<br>
		<button type="submit">Submit Test</button>
	</form>

	<h2>Select Testing</h2>
	<form action="/my_first_form.php" method="GET">
		<label for="likes_coffee">Do you like coffee?</label>
		<select id="likes_coffee" name="likes_coffee">
    		<option value="1">Yes</option>
    		<option value="0" selected>No</option>
		</select>
		<button type="submit">Submit</button>
	</form>
	
</body>
</html>