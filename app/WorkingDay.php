<?php 
	/**
	* 
	*/
	require_once('DB.php');
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
	}
?>