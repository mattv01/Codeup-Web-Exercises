<?php  

require_once "Log.php";

class Auth {

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	
	public function attempt($username, $password) {		
		if ($username == "guest" && $password == password_verify("password", $password)) {
			$_SESSION['logged_in_user'] = $username;
			header("Location: http://codeup.dev/authorized.php");
		}
	}

	public function check(){
	
	}

	public function user() {
	
	}

	public function logout(){
	
	}


}

// Auth::attempt() will take in a $username and $password. If the $username is guest and the $password matches the hashed password above then set the LOGGED_IN_USER session variable as before. Use the Log class to log an info message: "User $username logged in.". If either the username or password are incorrect then log an error: "User $username failed to log in!". You will need to use the PHP method password_verify() to check the password hash.

// Auth::check() will return a boolean whether or not a user is logged in.

// Auth::user() will return the username of the currently logged in user.

// Auth::logout() will end the session, just like we did in the sessions exercise.