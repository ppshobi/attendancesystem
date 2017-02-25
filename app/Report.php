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
			}
		}

		public static function generate_batch_wise_report($start,$end,$dept_id,$batch){

			$WD=new WorkingDay();
			$working_day_ids=array_column($WD->get_dept_working_days_between_date($dept_id,$start,$end), 'id');
			$students=Student::get_all_by_dept_batch($dept_id,$batch);
			$att_report=array();
			foreach ($students as $student) {
				$student_attendance=Attendance::get_attendance_for_student($working_day_ids,$student['id']);
				$present=0;
				$absent=0;
				$halfday=0;
				foreach ($student_attendance as $attendance) {
					$afternoon=0;
					$fornoon=0;
					if ($attendance['p5']==1 && $attendance['p4']==1) {
						$afternoon=.5;
					}
					if ($attendance['p1']==1 && $attendance['p2']==1 && $attendance['p3']==1 ) {
						$fornoon=.5;
					}
					
					if ($fornoon+$afternoon==1) {
						$present++;
					}elseif ($fornoon+$afternoon==.5) {
						$halfday++;
					}else{
						$absent++;
					}
				}
				
				$att_report[$student['id']]=array('present_count'=>$present, 'halfday_count'=>$halfday, 'absent_count'=>$absent);
			}

			return $att_report;
		}




		public static function generate_report_student($start_date,$end_date,$student_id,$dept_id){
			$WD=new WorkingDay();

			$working_day_ids=array_column($WD->get_dept_working_days_between_date($dept_id,$start_date,$end_date), 'id');
			$report=Attendance::get_attendance_for_student($working_day_ids,$student_id);
			return $report;
		}
	}
?>