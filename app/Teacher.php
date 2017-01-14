<?php 
	/**
	* 
	*/
	require_once('DB.php');
	class Teacher
	{
		public static function add($name,$dept){
			$db = new Db();
			$name=$db -> quote($name);
			$dept=$db -> quote($dept);

			$sql="INSERT INTO teachers(name,dept) VALUES('$name','$dept')";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{	
				return false;
			}
		}

		public static function edit($id,$name,$dept){
			$db = new Db();
			$name=$db -> quote($name);
			$dept=$db -> quote($dept);

			$sql=" UPDATE teachers SET name = '$name',dept = '$dept' WHERE id= '$id' ";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}

		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM teachers";
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
		public static function getOne($id){
			$db=new Db();
			$sql="SELECT * FROM teachers WHERE id= $id LIMIT 1";
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
		public static function delete($teacherid){
			$db=new Db();
			$sql="DELETE FROM teachers WHERE id='$teacherid' LIMIT 1";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>