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
				$report=Attendance::get_attendance_for_date($date_id,$students);
				return $report;
			}else{
				echo "Its not a working day";
			}
		}

		public static function generate_report_student($start_date,$end_date,$student_id,$dept_id){
			$WD=new WorkingDay();
			$working_day_ids=array_column($WD->getDeptWorkingDays($dept_id), 'id');
			$report=Attendance::get_attendance_for_student($working_day_ids,$student_id);
			return $report;
		}
	}
?>