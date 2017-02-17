<?php
//login check
require_once('app/Auth.php');

if(!Auth::isloggedin()){
	Auth::redirect('login.php');
}

require_once('app/Department.php');
require_once('app/Student.php');
require_once('app/Report.php');
$att_report;
$student;
$start_date;
$end_date;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['gen-stud-report'])) {
	$start_date=date("Y-m-d",strtotime($_POST['start_date']));
	$end_date=date("Y-m-d",strtotime($_POST['end_date']));
	$reg_no=$_POST['reg_no'];
	$student=Student::get_one_by_regno($reg_no);
	$att_report=Report::generate_report_student($start_date,$end_date,$student['id'],$student['dept']);
}


?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>View Report</title>

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
</head>
<style type="text/css">
	.green{
		color:green;
		text-align: center;
		padding-left: 45%;
	}
	.red{
		color:red;
		padding-left: 45%;
	}
	.orange{
		color:orange;
		padding-left: 45%;
	}
	.remark{
		text-align: center;
		padding: 0;
		font-weight: bold;
	}
	.count{
		font-weight: bolder;
	}
</style>
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
							<h3>Attendance Report</h3>
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

				<h5 class="m-t-lg with-border" id="report-header">
				Date : <?php 
				if($start_date==$end_date){
					echo date("d-M-Y",strtotime($start_date));
				}else{
					echo date("d-M-Y",strtotime($start_date)). " To " . date("d-M-Y",strtotime($end_date));
				}
				$dept=Department::getOne($student['dept']);
				echo ", Name: ".$student['name'] . ", ";
				echo ", Register No: ".$student['regno'] . ", ";
				echo ", Department: ".$dept['name'] . ", ";
				echo "Batch: ".$student['batch']. " ";
				?>
					
				</h5>

				<div class="card-block">
					<table id="report" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Sl.No</th>
							<th>Date</th>
							<th>Period 1</th>
							<th>Period 2</th>
							<th>Period 3</th>
							<th>Period 4</th>
							<th>Period 5</th>
							<th>Remark</th>
						</tr>
						</thead>
						
						<tbody>
						<?php
						$present_count=0;
						$abscent_count=0;
						$half_day_count=0;
						if($att_report){
							$count=1;
							
							foreach ($att_report as $r) {
								$date=WorkingDay::get_date_by_id($r['date_id']);
								if (!$date) {
									$date="Attendance Was Not Marked";
								}
								echo "<tr>";
									echo "<td>" . $count ."</td>";
									echo "<td>" . $date ."</td>";
									echo "<td>";
									 if ($r['p1']==1) {
										echo "<span class=\"fa font-icon font-icon-ok green\"></span>";
									} else{
										echo "<span class=\"fa font-icon font-icon-del red\"></span>";
									}
									echo "</td>";
									echo "<td>";
									 if ($r['p2']==1) {
										echo "<span class=\"fa font-icon font-icon-ok green\"></span>";
									} else{
										echo "<span class=\"fa font-icon font-icon-del red\"></span>";
									}
									echo "</td>";
									echo "<td>";
									 if ($r['p3']==1) {
										echo "<span class=\"fa font-icon font-icon-ok green\"></span>";
									} else{
										echo "<span class=\"fa font-icon font-icon-del red\"></span>";
									}
									echo "</td>";
									echo "<td>";
									 if ($r['p4']==1) {
										echo "<span class=\"fa font-icon font-icon-ok green\"></span>";
									} else{
										echo "<span class=\"fa font-icon font-icon-del red\"></span>";
									}
									echo "</td>";
									echo "<td>";
									 if ($r['p5']==1) {
										echo "<span class=\"fa font-icon font-icon-ok green\"></span>";
									} else{
										echo "<span class=\"fa font-icon font-icon-del red\"></span>";
									}
									echo "</td>";
									echo "<td>";
									$afternoon=0;
									$fornoon=0;
									if ($r['p5']==1 && $r['p4']==1) {
										$afternoon=.5;
									}
									if ($r['p1']==1 && $r['p2']==1 && $r['p3']==1 ) {
										$fornoon=.5;
									}
									if ($afternoon+$fornoon==1) {
 										echo "<span class=\"remark green\">Present</span>";
 										$present_count++;
									} elseif($afternoon+$fornoon==.5){
										echo "<span class=\"remark orange\">Half Day</span>";
										$half_day_count++;
									}else{
										echo "<span class=\"remark red\">Abscent</span>";
										$abscent_count++;
									}
									echo "</td>";
															
		 						echo "</tr>";
		 						$count++;
	 						}
						}
						?>
						
						</tbody>
						<tfoot>
						<tr>
							<th>Sl.No</th>
							<th>Date</th>
							<th>Period 1</th>
							<th>Period 2</th>
							<th>Period 3</th>
							<th>Period 4</th>
							<th>Period 5</th>
							<th>Remark</th>
						</tr>
						<tr>
							<td class="count" colspan="2">Total Days: <?php echo sizeof($att_report); ?></td>
							<td class="count" colspan="2">Present Count :<?php echo $present_count; ?></td>
							<td class="count" colspan="3">Half Day Count :<?php echo $half_day_count; ?></td>
							<td class="count" colspan="2">Abscent Count : <?php echo $abscent_count; ?></td>
						</tr>
						<tr>
							<td class="count" colspan="8">Attendance Percentage: <?php 

								$total_days = sizeof($att_report);
								$present=$present_count+(.5*$half_day_count);
								$percentage=($present/$total_days)*100;
								echo $percentage . "%";
							?></td>
						</tr>
						</tfoot>
					</table>
					<div class="col-sm-10">
							<button type="submit" name="print" class="btn btn-inline btn-success-outline swal-btn-success">Print Report</button>
					</div>
				</div>

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
	<script src="js/lib/printthis/printThis.js"></script>
<script type="text/javascript">
	$('.swal-btn-success').click(function(e){
			swal({
					title: "Are you sure?",
					text: "Print Report?",
					type: "warning",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Yes, Print it!",
					cancelButtonText: "No, cancel!",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm) {
					if (isConfirm) {
						var report_header=$("#report-header").html();
						$("#report").printThis({
						    debug: false,               
						    importCSS: true,            
						    importStyle: true,        
						    printContainer: true,        
						    pageTitle: report_header,             
						    removeInline: false,       
						    printDelay: 333,            
						    header: report_header,               
						    footer: null,               
						    base: false,                 
						    formValues: true ,           
						    canvas: false               
						        
						});
						
					} else {
						swal({
							title: "Cancelled",
							text: "The Report Printing Cancelled :)",
							type: "error",
							confirmButtonClass: "btn-danger"
						});
					}
				});
	});
</script>

<script src="js/app.js"></script>
</body>
</html>