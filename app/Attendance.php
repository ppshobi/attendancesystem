<?php 
	/**
	* 
	*/
	require_once('DB.php');
	require_once('Student.php');
	require_once('WorkingDay.php');
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
		
	}
?>