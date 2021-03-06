<?php 
	/**
	* 
	*/
	if (!isset($_SESSION)) {
		session_start();
	}
	require_once('User.php');
	class Auth
	{
		public static function login($username,$pass){
			$user=User::getUserByEmail($username);
			if($user){
				if($pass==$user['password']){
					$_SESSION['current_user']=$user['id'];
					return true;
				}else{
					//password is wrong
					return false;
				}
			}else{
				//user does not exist
				return false;
			}
			
		}
		public static function logout(){
			if (isset($_SESSION['current_user'])) {
				unset($_SESSION['current_user']);
				return true;
			}
			
		}

		public static function isloggedin(){
			if(isset($_SESSION['current_user'])){
				return true;
			}else{
				return false;
			}
		}

		public static function getuserid(){
			if(self::isloggedin()){
				return($_SESSION['current_user']);
			}
			
		}
		
		
		public static function isteacher(){
			$userlevel= User::getUserLevel(self::getuserid());
			if ($userlevel==0) {
				return true;
			}else{
				return false;
			}
			
		}
		public static function ishod(){
			$userlevel= User::getUserLevel(self::getuserid());
			if ($userlevel==1) {
				return true;
			}else{
				return false;
			}
			
		}
		
		public static function isadmin(){
			$userlevel= User::getUserLevel(self::getuserid());
			if ($userlevel==2) {
				return true;
			}else{
				return false;
			}
			
		}

		

		public static function redirect($url){
			header('location:'.$url);
		}

	}
?>