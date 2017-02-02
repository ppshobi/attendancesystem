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

		public function set_a_peried($teacher_id, $day, $period, $dept, $batch){
			$db=new Db();
			if ($dept == '' OR $batch == '') {
				$dept=NULL;
				$batch=NULL;
			}
			$sql="INSERT INTO timetable(teacher_id, day, period, dept, batch) VALUES ('$teacher_id', '$day', '$period', '$dept', '$batch')";
			$result=$db->query($sql);
			if($result){				
				return true;
			}
			return false;
		}
		public static function getTimeTableForTeacher($teacher_id,$day){
			$db=new Db();
			$sql="SELECT * FROM timetable WHERE teacher_id = '$teacher_id' AND day = '$day'";
			$result=$db->query($sql);
			if ($result) {
				$rows=array();
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows;
			}

			return false;
		}
	}
?>