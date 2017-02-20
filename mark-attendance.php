<?php
//login check
require_once('app/Auth.php');

if(!Auth::isloggedin()){
	Auth::redirect('login.php');
}
require_once('app/Department.php');
require_once('app/Teacher.php');
require_once('app/Timetable.php');
require_once('app/User.php');
require_once('app/WorkingDay.php');
require_once('app/Student.php');
require_once('app/Attendance.php');

if(Auth::isteacher()){
	$today;
	if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['att_date'])) {
		$date = str_replace('/', '-', $_GET['att_date']);
		$today = date("Y-m-d",strtotime($_GET['att_date']));
	}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$today=$_POST['att_date'];
	}else{
		$today=date('Y-m-d');
	}	

	$dept=User::getDepartment(Auth::getuserid());
	if (WorkingDay::isWorkingDay($today,$dept)){
		$user = User::getOne(Auth::getuserid());
		$teacher = Teacher::getOne($user['teacher_id']);
		$day = date("D",strtotime($today));
		$timetable = Timetable::getTimeTableForTeacher($teacher['id'],$day);

	}else{
		echo "Not a WorkingDay";
		die();
	}
	
}else{

	//not a teacher error
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mark'])) {
	$result=Attendance::mark_attendance($_POST['absentees'],$today,$_POST['period'],$_POST['dept'],$_POST['batch']);
	header('Content-Type: application/json');
	echo json_encode(['status' => $result]);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Mark Attendance</title>

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
<link rel="stylesheet" href="css/separate/vendor/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" href="css/separate/vendor/select2.min.css">
<link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/lib/bootstrap-sweetalert/sweetalert.css">
<link rel="stylesheet" href="css/separate/vendor/sweet-alert-animations.min.css">
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
							<h3>Mark Attendance</h3>
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

				<h5 class="m-t-lg with-border">Timetable for <?php echo $teacher['name'] . " On " . date('d-M-Y',strtotime($today)). " - " . date('D',strtotime($today)); ?></h5>

				<div class="card-block">
						<section class="tabs-section">
				<div class="tabs-section-nav">
					<div class="tbl">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#tabs-2-tab-1" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Period
										<span class="label label-pill label-danger">1</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-2" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Period
										<span class="label label-pill label-success">2</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-3" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Period
										<span class="label label-pill label-info">3</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-4" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Period
										<span class="label label-pill label-warning">4</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-5" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Period
										<span class="label label-pill label-default">5</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div><!--.tabs-section-nav-->

				<div class="tab-content">
					<?php
					echo "<!--.tab-pane-->";
						$count=1;
						foreach ($timetable as $period) {
							echo "<div role=\"tabpanel\" class=\"tab-pane fade in ";
								if($count==1){
									echo "active";
								}
								echo "\" id=\"tabs-2-tab-".$count++."\">";
								$dept=$period['dept'];
								$batch=$period['batch'];
								if($dept==0 OR $batch==0){
									echo "There is no class for you";
								}else{
									$students=Student::get_all_by_dept_batch($dept,$batch);
									echo "<form id=\"attendance".$period['period']."\" method=\"POST\">";
									echo "<table class=\"display table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">";
									echo "<thead>";
									echo "<th>Register No.</th>";
									echo "<th>Student Name</th>";
									echo "<th>Abscent</th>";
									echo "</thead>";
									echo "<tbody>";
									foreach ($students as $student) {
										echo "<tr>";
											echo "<td>" . $student['regno'] . "</td>";
											echo "<td>" . $student['name'] . "</td>";
											echo "<td>" . "<div class=\"checkbox\">";
								echo "<input name=\"stud-".$student['id']."-".$period['period']."\" type=\"checkbox\" id=\"stud-".$student['id']."-".$period['period']."\">
								<label for=\"stud-".$student['id']."-".$period['period']."\">Check if Student is abscent</label>
							</div>" . "</td>";
										echo "</tr>";
									}
									echo "</tbody>";
									echo "</table>";
									echo "<input type=\"hidden\" class=\"dept\" value=\"".$dept."\">";
									echo "<input type=\"hidden\" class=\"batch\" value=\"".$batch."\">";
									echo "<input type=\"hidden\" class=\"att_date\" value=\"".$today."\">";
									echo "<input type=\"hidden\" class=\"period\" value=\"".$period['period']."\">";
									echo "<button type=\"submit\" class=\"btn btn-inline btn-success swal-btn-cancel\">Mark Attendance</button>";
									echo "</form>";
								}
								
								

							echo "</div>";
						}
					echo "<!--.tab-pane-->";
					?>
				</div><!--.tab-content-->
			</section><!--.tabs-section-->
					<input type="hidden" name="teacherid" value="<?php echo $teacher['id'] ?>">
					
					
				</div>

			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

		<script src="js/lib/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="js/lib/select2/select2.full.min.js"></script>
	<script src="js/lib/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script src="js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
	$('.swal-btn-cancel').click(function(e){
		var form=$(this).closest('form').attr('id');
		e.preventDefault();
			swal({
					title: "Are you sure?",
					text: "This will mark abcentees for today",
					type: "warning",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Yes, Mark Attendance!",
					cancelButtonText: "No, cancel!",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm) {
					if (isConfirm) {
						
						var absentees = $("#"+form).serializeArray();
						var dept=$("#"+form+" .dept").val();
						var batch=$("#"+form+" .batch").val();
						var att_date=$("#"+form+" .att_date").val();
						var period=$("#"+form+" .period").val();
						$.ajax({
				                type: "POST",
				                url: "mark-attendance.php",
				                data: { 
				                    absentees: absentees,
				                    dept: dept,
				                    batch: batch,
				                    att_date: att_date,
				                    period:period,
				                    mark: true,
				                    dataType: "json"
				                }
				            }).success(function(data){
				            	if (data.status) {
				            		swal({
										title: "Good job!",
										text: "Marked The attendance",
										type: "success",
										confirmButtonClass: "btn-success",
										confirmButtonText: "OK"
									});
									location.reload();
				            	} else {
				            		console.log('error in attendance marking');
				            	}
				                /**/
				        	});
					} else {
						swal({
							title: "Cancelled",
							text: "The Attendance was not Marked :)",
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