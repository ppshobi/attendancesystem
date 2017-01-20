<?php 
	/**
	* 
	*/
	require_once('DB.php');
	require_once('Department.php');
	class WorkingDay
	{
		function date_range($first, $last, $step = '+1 day', $output_format = 'd/m/Y' ) {

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
					}
					
				}
			}
		}
	}
?>