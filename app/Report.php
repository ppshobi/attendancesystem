<?php 
	/**
	* 
	*/
	require_once('DB.php');
	require_once('Student.php');
	require_once('WorkingDay.php');
	require_once('Attendance.php');
	class Report
	{
		public static function generate_single_day($date,$dept_id,$batch){
			$WD=new WorkingDay();
			if ($WD->isWorkingDay($date,$dept_id)) {
				$date_id=$WD->get_working_day_id($date,$dept_id);
				$students=array_column(Student::get_all_by_dept_batch($dept_id,$batch), 'id');
				$attendance=Attendance::get_attendance_for_date($date_id,$students);
				return $attendance;
			}else{
				echo "Its not a working day";
			}
		}
	}
?>