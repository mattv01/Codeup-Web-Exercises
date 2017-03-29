<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Template</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/font-awesome.min.css"> 
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>

<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

<?php  
require "navbar.php";
require "header.php";
?>

	<section class="success" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>About Me</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2 page-scroll" id="codeup">
					<p>My name is <strong>Matt Valdez</strong>. I am a Full-Stack Web Developer out of San Antonio, Texas. Most of my programming education has been through <a href="http://codeup.com/" target="_blank"><strong>Codeup</strong></a>, where I became proficient in PHP. Please take a look at some examples of my work on my <a href="#portfolio"><strong>Portfolio</strong></a> page.</p>
				</div>
				<div class="col-lg-4">
					<p><strong>Some cool facts about myself:</strong><br> I was born and raised in San Antonio. I'm also going to school at the University of Texas at San Antonio to finish my degree in actuarial science. I am a devoted fan of the Anaheim Ducks and the sport of hockey in general <em>(weird, I know)</em>. I love to play a round of golf when the Texas weather allows me to. Also, I'm a huge concert goer because I believe that's the way artists intended their music to be heard.</p>
				</div>
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<a href="#" class="btn btn-lg btn-outline" id="resume">
						<i class="fa fa-download"></i> Download Resume
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>My Portfolio</h2>
					<hr class="star-light">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 portfolio-item">
					<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
						<div class="caption">
							<div class="caption-content">
								<i class="fa fa-search-plus fa-3x"></i>
								<p>View Project Description</p>
							</div>
						</div>
						<img src="/img/simplesimon.png" class="img-responsive" alt="Circus tent">
					</a>
				</div>
				<div class="col-sm-4 portfolio-item">
					<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
						<div class="caption">
							<div class="caption-content">
								<i class="fa fa-search-plus fa-3x"></i>
								<p>View Project Description</p>
							</div>
						</div>
						<img src="/img/calculator.png" class="img-responsive" alt="Safe">
					</a>
				</div>
				<div class="col-sm-4 portfolio-item">
					<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
						<div class="caption">
							<div class="caption-content">
								<i class="fa fa-search-plus fa-3x"></i>
								<p>View Project Description</p>
							</div>
						</div>
						<img src="/img/konami.png" class="img-responsive" alt="Cabin">
					</a>
				</div>
				<div class="col-sm-4 portfolio-item">
					<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
						<div class="caption">
							<div class="caption-content">
								<i class="fa fa-search-plus fa-3x"></i>
								<p>View Project Description</p>
							</div>
						</div>
						<img src="/img/weather_map.png" class="img-responsive" alt="Game controller">
					</a>
				</div>
				<div class="col-sm-4 portfolio-item">
					<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
						<div class="caption">
							<div class="caption-content">
								<i class="fa fa-search-plus fa-3x"></i>
								<p>View Project Description</p>
							</div>
						</div>
						<img src="/img/unplugged.png" class="img-responsive" alt="Slice of cake">
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>Contact Me</h2>
					<hr class="star-primary">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
					<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form name="sentMessage" id="contactForm" novalidate="">
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label for="name">Name</label>
								<input type="text" class="form-control" placeholder="Name" name="name" id="name" required="" data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label for="email">Email Address</label>
								<input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required="" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label for="phone">Phone Number</label>
								<input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required="" data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group controls">
								<label for="message">Message</label>
								<textarea rows="4" class="form-control" placeholder="Message" name="message" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<br>
						<div id="success"></div>
						<div class="row">
							<div class="form-group col-xs-12">
								<button type="submit" class="btn btn-success btn-lg">Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>



<?php require "footer.php";?>



<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>