<?php 
	/**
	* 
	*/
	require_once('DB.php');
	require_once('Department.php');
	class WorkingDay
	{
		function date_range($first, $last, $step = '+1 day', $output_format = 'Y-m-d' ) {

		    $dates = array();
		    $current = strtotime($first);
		    $last = strtotime($last);
		    echo gettype(date("D",$current)) . "<br/>";
		    while( $current <= $last ) {
		    	$day=date("D", $current);
		    	if (!(strcmp($day,"Sun") == 0 || strcmp($day,"Sat") == 0)){
		    		array_push($dates,date($output_format, $current));
		    	}		        	
		        $current = strtotime($step, $current);
		    }
		    
		    return $dates;
		}

		function reset_semester_working_days($dates){
			$db = new Db();
			$sql="TRUNCATE TABLE workingdays";
			$result=$db -> query($sql);
			if ($result) {
				$depts=Department::getAll();
				foreach ($depts as $dept) {
					$dptid=$dept['id'];
					foreach ($dates as $date) {
						$sql="INSERT INTO workingdays(`date`,dept) VALUES('$date','$dptid')";
						$result=$db->query($sql);
						if(!$result){
							die("Some Error inserting to db");
						}
					}
					
				}
			}
		}
		function getDeptWorkingDays($dept_id){
			//return all working days
			$db=new Db();
			$sql="SELECT * FROM workingdays WHERE dept = '$dept_id' AND remark IS NULL ";
			$result=$db->query($sql);
			$rows=[];
			if ($result) {
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows;
			}
		}
		
		function isWorkingDay($date,$dept_id){
			$workingdays=array_column(self::getDeptWorkingDays($dept_id),'date');
			if (in_array($date, $workingdays)) {
				return true;
			}else{
				return false;
			}
		}
		public static function get_working_day_id($date,$dept_id){
			if(self::isWorkingDay($date,$dept_id)){
				$workingdays=self::getDeptWorkingDays($dept_id);
				foreach ($workingdays as $working_day) {
					if ($working_day['date']==$date) {
						return $working_day['id'];
					}
				}
			}
			return false;

		}
		
		public static function get_date_by_id($date_id){
			$db=new Db();
			$sql="SELECT * FROM workingdays WHERE id = '$date_id'";
			$result=$db->query($sql);
			$rows=[];
			if ($result) {
				while ($r=mysqli_fetch_assoc($result)) {
					array_push($rows, $r);
				}
				return $rows[0]['date'];
			}

		}

		public static function mark_non_workingday($date_id, $reason){
			$db=new Db();
			$date_id=$db->quote($date_id);
			$reason=$db->quote($reason);
			$sql="UPDATE workingdays SET remark = '$reason' WHERE id = '$date_id'";
			$result = $db->query($sql);
			if ($result) {
				return true;
			}
			return false;
		}
	}
?>