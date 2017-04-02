<?php  

require_once "Log.php";

class Auth {

	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($username, $password) {		
		if ($username == "guest" && $password == password_verify($password, self::$password)) {
			$_SESSION['logged_in_user'] = $username;
			return true;
		} elseif ($username == "mattv01" && $password == "ducks0101") {
			$_SESSION['logged_in_user'] = $username;
			return true;
		} else {
			return false;
		}	
	}

	public static function check(){
		return isset($_SESSION['logged_in_user']);
	}

	public static function user() {
		if (self::check()) {
			return $_SESSION['logged_in_user'];
		}
	}

	public static function logout(){
		session_unset();
		session_regenerate_id(true);
		session_destroy();
		session_start();
	}

}