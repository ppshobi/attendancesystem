<?php 
	/**
	* 
	*/
	require_once('DB.php');
	class User	{
		public static function add($teacher_id,$email,$pass){
			$db = new Db();
			$teacher_id=$db -> quote($teacher_id);
			$pass=$db -> quote($pass);
			$email=$db -> quote($email);

			$sql=" INSERT INTO users(teacher_id,email,password) VALUES('$teacher_id','$email','$pass')";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}

		public static function edit($id,$email,$pass){
			$db = new Db();
			
			$email=$db -> quote($email);
			
			$pass=$db -> quote($pass);
			$level=$db -> quote($level);

			$sql=" UPDATE users SET email='$email',password='$pass', WHERE id= '$id' ";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}
		public static function getAllEmployees(){
			$db=new Db();
			$sql="SELECT * FROM teachers ORDER BY dept";
			$rows=[];
			$result=$db->query($sql);
			if($result){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows;
			}
			return false;
			
		}
		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM users";
			$rows=[];
			$result=$db->query($sql);
			if($result){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows;
			}
			return false;
			
		}
		public static function getCount(){
			$db=new Db();
			$sql="SELECT * FROM users";
			$result=$db->query($sql);
			if($result){
				return mysqli_num_rows($result);
			}
			return false;
			
		}
		public static function getOne($id){
			$db=new Db();
			$sql="SELECT * FROM users WHERE id= '$id' LIMIT 1";
			$rows=[];
			$result=$db->query($sql);
			if($result && mysqli_num_rows($result)>0){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows[0];
			}
			return false;
			
		}

		public static function getUserLevel($id){
			$db= new Db();
			$sql="SELECT * FROM users WHERE id= '$id' LIMIT 1";
			$rows=[];
			$result=$db->query($sql);
			if($result && mysqli_num_rows($result)>0){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows[0]['level'];
			}
			return false;
			
		}
		public static function getUserByEmail($email){
			$db=new Db();
			$sql="SELECT * FROM users WHERE email= '$email' LIMIT 1";
			$rows=[];
			$result=$db->query($sql);
			if($result){
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows[0];
			}
			return false;
			
		}
		public static function delete($id){
			$db=new Db();
			$sql="DELETE FROM users WHERE id='$id'";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>