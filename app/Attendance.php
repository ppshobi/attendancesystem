<?php 
	/**
	* 
	*/
	require_once('DB.php');
	require_once('Student.php');
	require_once('WorkingDay.php');
	require_once('Timetable.php');
	class Attendance
	{
		public static function mark_attendance($absentees, $date, $period, $dept, $batch){
			$db=new Db();
			$students=Student::get_all_by_dept_batch($dept,$batch);
			$working_day_id=WorkingDay::get_working_day_id($date,$dept);
			$absentees_stud_id=[];
			foreach ($absentees as $ab) {
				$id=explode('-',$ab['name']);
				array_push($absentees_stud_id, $id[1]);
			}

			foreach ($students as $student) {
				$student_id=$student['id'];		
				$sql="";
				if (in_array($student_id, $absentees_stud_id)) {
 					$sql="INSERT INTO attendance (date_id,student_id,p". $period. ") VALUES('$working_day_id','$student_id',0)ON DUPLICATE KEY UPDATE p".$period ."=0";
				}else{
					$sql="INSERT INTO attendance (date_id,student_id,p".$period.") VALUES('$working_day_id','$student_id',1)ON DUPLICATE KEY UPDATE p". $period ."=1";
				}
				$result=$db->query($sql);
				if (!$result) {
					die("error in marking attendance");
					return false;
				}
			}

			return true;
		}

		public static function get_attendance_for_date($date_id,$students){
			$db=new Db();
			$attendance=array();
			foreach ($students as $student) {
				$sql="SELECT * FROM attendance WHERE date_id='$date_id' AND student_id= '$student'";
				$result=$db->query($sql);
				if ($result) {
					array_push($attendance, mysqli_fetch_assoc($result));
				}else{
					return false;
				}
				
			}
			return $attendance;
			
		}

		public static function get_attendance_for_student($working_day_ids,$student_id){
			$db=new Db();
			$attendance=array();
			foreach ($working_day_ids as $date_id) {
				$sql="SELECT * FROM attendance WHERE date_id='$date_id' AND student_id= '$student_id'";
				$result=$db->query($sql);
				if ($result && mysqli_num_rows($result)>0) {
					array_push($attendance, mysqli_fetch_assoc($result));
				}
			}

			return $attendance;
		}

		public static function get_students_attendance_between_dates_for_a_teacher($students,$dept_id,$batch,$start_date,$end_date,$teacher_id){
			$WD=new WorkingDay();
			$working_days = $WD->get_dept_working_days_between_date($dept_id,$start_date,$end_date);
			$att_report=array();
			foreach ($working_days as $working_day) {
				$day_time_table=Timetable::getTimeTableForTeacher($teacher_id,date("D",strtotime($working_day['date'])));
				$student_attendance=self::get_attendance_for_date($working_day['id'],array_column($students, 'id'));

				foreach ($day_time_table as $period) {
					if ($period['dept']==$dept_id && $period['batch']==$batch) {
						$period_variable="p".$period['period'];
						if (!empty(array_filter($student_attendance))) {
							foreach ($student_attendance as $attend) {
								$attendance=array(
									'student_id' => $attend['student_id'],
									'date_id' => $attend['date_id'] , 
									'period' => $period_variable, 
									'attedance' => $attend[$period_variable]
								);
								array_push($att_report, $attendance);
							}	
						}
											
						
					}
				}
			}
			
			var_dump($att_report);
			die();
			return $att_report;
		}
		
	}
?>