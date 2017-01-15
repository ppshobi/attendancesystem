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

		    while( $current <= $last ) {
		    	if (date("D", $current) !== 'Sun' || date("D", $current) !== 'Sat')
		    		echo date("D",$current);
		        	//$dates[] = date($output_format, $current);
		        $current = strtotime($step, $current);
		    }
		    die();
		    return $dates;
		}
	}
?>