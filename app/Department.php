<?php 
	/**
	* 
	*/
	require_once('DB.php');
	class Department 
	{
		public static function add($name,$descr){
			$db = new Db();
			$name=$db -> quote($name);
			$descr=$db -> quote($descr);

			$sql="INSERT INTO dept(name,descr) VALUES('$name','$descr')";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{	
				return false;
			}
		}

		public static function edit($id,$name,$descr){
			$db = new Db();
			$name=$db -> quote($name);
			$descr=$db -> quote($descr);

			$sql=" UPDATE dept SET name = '$name',descr = '$descr' WHERE id= '$id' ";
			$result=$db -> query($sql);
			if($result){
				return true;
			}else{		

				return false;
			}
		}

		public static function getAll(){
			$db=new Db();
			$sql="SELECT * FROM dept";
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
			$sql="SELECT * FROM dept WHERE id= $id LIMIT 1";
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
		public static function delete($deptid){
			$db=new Db();
			$sql="DELETE FROM dept WHERE id='$deptid'";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}

		public static function get_count(){
			$db=new Db();
			$sql="SELECT * FROM dept";
			$rows=[];
			$result=$db->query($sql);
			if($result){
				return mysqli_num_rows($result);
			}
			return 0;
		}


	}
?>