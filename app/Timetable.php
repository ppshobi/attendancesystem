<?php 
	/**
	* 
	*/
	require_once('DB.php');
	require_once('WorkingDay.php');
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

		public static function get_total_period_count_of_teacher_between_dates($teacher_id,$dept_id,$batch,$start_date,$end_date){
			$WD=new WorkingDay();
			$working_days=$WD->get_dept_working_days_between_date($dept_id,$start_date,$end_date);
			$period_count=0;
			foreach ($working_days as $working_day) {
				$date=$working_day['date'];
				$day_time_table=self::getTimeTableForTeacher($teacher_id,date("D",strtotime($date)));
				foreach ($day_time_table as $period) {
					if ($period['dept']==$dept_id && $period['batch']==$batch) {
						$period_count++;
					}
				}
			}
			return $period_count;

		} 
	}
?>