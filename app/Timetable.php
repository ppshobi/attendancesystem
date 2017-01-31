<?php 
	/**
	* 
	*/
	require_once('DB.php');
	class Timetable
	{
		public function delete_current_timetable($teacher_id){
			$db=new Db();
			$sql="DELETE FROM timetable WHERE teacher_id = '$teacher_id'";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;		
		}
	}
?>