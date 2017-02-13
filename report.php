<?php
//login check
require_once('app/Auth.php');

if(!Auth::isloggedin()){
	Auth::redirect('login.php');
}


require_once('app/Student.php');
require_once('app/Department.php');
require_once('app/Report.php');
$message;
$departments=Department::getAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['11'])) {
	
	$result=Student::add($_POST['name'], $_POST['regno'], $_POST['dept'],$_POST['batch']);
	if ($result) {
		$message=true;
	}else{
		$message=false;
	}
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Generate Report</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/separate/vendor/select2.min.css">
<link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
<link rel="stylesheet" href="css/separate/vendor/bootstrap-touchspin.min.css">
<link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
<link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/lib/bootstrap-sweetalert/sweetalert.css">
<link rel="stylesheet" href="css/separate/vendor/sweet-alert-animations.min.css">
<link rel="stylesheet" href="css/separate/vendor/bootstrap-daterangepicker.min.css">

</head>
<body class="with-side-menu">

	<?php include_once('header.php');?>

	<div class="mobile-menu-left-overlay"></div>
	<?php include_once('nav.php');?>
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Add Student</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">StartUI</a></li>
								<li><a href="#">Forms</a></li>
								<li class="active">Basic Inputs</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt</code>; elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.control-label</code> class.
				</p>

				<h5 class="m-t-lg with-border">Enter Details</h5>

				<form method="post" id="student" action="view-report.php">
					<div class="form-group row">
						<label for="Department" class="col-sm-2 form-control-label">Select Department</label>
						<div class="col-sm-10">
							<select name="dept" id="dept" class="select2">
							 	<?php
							 		foreach ($departments as $dept) {
							 			echo "<option value=\"".$dept['id']."\">".$dept['name']."</option>";
							 		}
							 	?>	
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="date" class="col-sm-2 form-control-label">Pick Start Date</label>
						<div class="col-sm-4">
							
							<div class="form-group">
								<div class='input-group date'>
									<input id="daterange2" type="text" name="start_date" value="10/24/2016" class="form-control">
									<span class="input-group-addon">
										<i class="font-icon font-icon-calend"></i>
									</span>
								</div>
							</div>
						
						</div>
					</div>		
					<div class="form-group row">
						<label for="date" class="col-sm-2 form-control-label">Pick End Date</label>
						<div class="col-sm-4">
							
							<div class="form-group">
								<div class='input-group date'>
									<input id="daterange3" type="text" name="end_date" value="10/24/2016" class="form-control">
									<span class="input-group-addon">
										<i class="font-icon font-icon-calend"></i>
									</span>
								</div>
							</div>
						
						</div>
					</div>		
					<div class="form-group row">
						<label for="Batch" class="col-sm-2 form-control-label">Select Batch</label>
						<div class="col-sm-10">
								<input type="radio" name="batch" value="1"/>1 Year				
								<input type="radio" name="batch" value="2"/>2 Year	
 								<input type="radio" name="batch" value="3" checked/>3 Year
						</div>
					</div>
					<div class="form-group row">
						<label for="button" class="col-sm-2 form-control-label"></label>
						<div class="col-sm-10">
							<button type="submit" name="add-stud" class="btn btn-inline btn-success-outline swal-btn-success">Generate Report</button>
						</div>
					</div>
					
				</form>


			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/lib/select2/select2.full.min.js"></script>
	<script src="js/lib/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>

	<script src="js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/lib/moment/moment-with-locales.min.js"></script>
		<script src="js/lib/daterangepicker/daterangepicker.js"></script>

	<script type="text/javascript">
	
	
	$('#daterange2').daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
	});
	$('#daterange3').daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
	});

	//setting start and end date as today
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
} 

today = mm+'/'+dd+'/'+yyyy;

$('#daterange3').val(today);//seting todays value in datepicker
$('#daterange2').val(today);//seting todays value in datepicker
	

</script>
<script src="js/app.js"></script>
</body>
</html>