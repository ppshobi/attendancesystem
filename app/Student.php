<?php 
	/**
	* 
	*/
	require_once('DB.php');
	class Student
	{
		public static function add($name,$regno,$dept,$batch){
			$db = new Db();
			$name=$db -> quote($name);
			$regno=$db -> quote($regno);
			$dept=$db -> quote($dept);
			$batch=$db -> quote($batch);

			$sql="INSERT INTO student(name,regno,dept,batch) VALUES('$name', '$regno', '$dept', '$batch')";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{	
				return false;
			}
		}

		public static function edit($id,$name,$regno,$dept,$batch){
			$db = new Db();
			$name=$db -> quote($name);
			$regno=$db -> quote($regno);
			$dept=$db -> quote($dept);
			$batch=$db -> quote($batch);

			$sql=" UPDATE student SET name = '$name', regno = '$regno',dept = '$dept',batch = '$batch' WHERE id= '$id' ";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}

		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM student ORDER BY dept ASC";
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
		public static function getAllByDept($deptid){
			$db=new Db();
			$sql="SELECT * FROM student WHERE dept = $deptid";
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

		public static function get_all_by_dept_batch($deptid,$batch){
			$db=new Db();
			$sql="SELECT * FROM student WHERE dept = '$deptid' AND batch = '$batch'";
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
			$sql="SELECT * FROM student WHERE id= $id LIMIT 1";
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
			$sql="DELETE FROM student WHERE id='$id' LIMIT 1";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

	}
?>