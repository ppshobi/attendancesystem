<?php
/**
* 
*/
class Db
{
	private static $connection;
	function __construct()
	{
		 if(!isset(self::$connection)) {
		 	self::$connection=mysqli_connect("localhost","root","","attendance");
		 	if (!self::$connection) {
		 		die("connection Error");
		 	}else{
		 		return self::$connection;
		 	}
		 }
	}

	function query($sql){
		$result=mysqli_query(self::$connection,$sql);
		if (!$result) {
			echo mysqli_error(self::$connection);
			die();
		}
		return $result;
	}
	function quote($var){
		return htmlspecialchars($var);
	}

	function lastid(){
		return self::$connection->insert_id;
	}
}
?>