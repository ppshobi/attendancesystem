n<?php
//login check
require_once('app/Auth.php');

if(!Auth::isloggedin()){
	Auth::redirect('login.php');
}
require_once('app/Department.php');
require_once('app/Teacher.php');

if(Auth::ishod() && isset($_GET['tid'])){
	$teacher=Teacher::getOne($_GET['tid']);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	header('Content-Type: text/html');
	var_dump($_POST['timetable']);
	//echo json_encode(['status' => $result]);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Timetable</title>

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
							<h3>Set Time Table for Teachers</h3>
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

				<h5 class="m-t-lg with-border">Timetable for <?php echo $teacher['name'] ?></h5>

				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Day</th>
							<th colspan="2">Peried 1</th>
							<th colspan="2">Peried 2</th>
							<th colspan="2">Peried 3</th>
							<th colspan="2">Peried 4</th>
							<th colspan="2">Peried 5</th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th>Day</th>
							<th colspan="2">Peried 1</th>
							<th colspan="2">Peried 2</th>
							<th colspan="2">Peried 3</th>
							<th colspan="2">Peried 4</th>
							<th colspan="2">Peried 5</th>
						</tr>
						</tfoot>
						<tbody>
						<form id="timetable" method="POST">
						<?php
						$depts=Department::getAll();
						$days=['Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
						$batches=['1', '2', '3'];
						foreach ($days as $day) {
							echo "<tr id=\"".$day."\">";
								echo "<td>" . $day ."</td>";
								for($i=0;$i<5;$i++){
									echo "<td> <select name=\"timetable[$day][$i][dept]\" class=\"select2\" id=\"dept\">" ;
										echo "<option selected value=\"\">Select Department</option>";
										foreach ($depts as $dept) {
											echo "<option value=\"".$dept['id']."\">". $dept['name'] ."</option>";
										}
									echo "</select></td>";
									echo "<td> <select id=\"batch\" name=\"timetable[$day][$i][batch]\">" ;
									echo "<option selected value=\"\">Batch</option>";
										foreach ($batches as $batch) {
											echo "<option value=\"".$batch."\">". $batch ."</option>";
										}
									echo "</select></td>";
								}
								
 							echo "</tr>";
	 						
 						}
					
						?>
						
						</tbody>
					</table>
					<button value="<?php echo $teacher['id'] ?>" type="button" id= "set" class="btn btn-inline btn-success swal-btn-cancel">Set Time Table</button>
					</form>
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
		var teacherid = $("#set").val();
		var timetable = $('#timetable').serialize();
		e.preventDefault();
			swal({
					title: "Are you sure?",
					text: "You will not be able to undo this Opration!",
					type: "warning",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Yes, Set Timetable!",
					cancelButtonText: "No, cancel!",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm) {
					if (isConfirm) {
						$("#timetable").submit();
						swal({
							title: "Deleted!",
							text: "The Timetable is set.",
							type: "success",
							confirmButtonClass: "btn-success"
						});
					} else {
						swal({
							title: "Cancelled",
							text: "The Teacher is not Deleted :)",
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