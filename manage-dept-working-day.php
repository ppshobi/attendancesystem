<?php
//login check
require_once('app/Auth.php');

if(!Auth::isloggedin()){
	Auth::redirect('login.php');
}

require_once('app/Department.php');
require_once('app/HOD.php');
require_once('app/User.php');
require_once('app/WorkingDay.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['markday'])) {
	
	$result=WorkingDay::mark_non_workingday($_POST['date_id'],$_POST['reason']);

	header('Content-Type: application/json');
	echo json_encode(['status' => $result]);
	exit();
}
$user=User::getOne(Auth::getuserid());
$hod=HOD::getOne($user['teacher_id']);
$dept=$hod['dept'];
$workingdays=WorkingDay::getDeptWorkingDays($dept);

?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Manage Departmetn Working Days</title>

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
							<h3>Mark Off Non workingdays in this semester</h3>
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

				<h5 class="m-t-lg with-border">Select Working Day</h5>

				<div class="card-block">
					<form method="post" action="">
				
					
					<div class="form-group row">
						<label for="WorkingDay" class="col-sm-2 form-control-label">Select Non WorkingDay</label>
						<div class="col-sm-10">
							<select name="date" id="date" class="select2">
							 	<?php
							 		foreach ($workingdays as $date) {
							 			echo "<option value=\"".$date['id']."\">".date("d-M-Y",strtotime($date['date']))."</option>";
							 		}
							 	?>
								
								
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="Reason" class="col-sm-2 form-control-label">Reason</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input id="reason" type="text" name="reason" class="form-control" placeholder="Enter Reason For Non working Day"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="button" class="col-sm-2 form-control-label"></label>
						<div class="col-sm-10">
							<button type="submit" name="add-hod" class="btn btn-inline btn-success-outline swal-btn-cancel">Mark it as non working day</button>
						</div>
					</div>
					
				</form>
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
	<script type="text/javascript">
		$('.swal-btn-cancel').click(function(e){
			var date_id=$("#date").val();
			var reason=$("#reason").val();
			e.preventDefault();
				swal({
						title: "Are you sure?",
						text: "You will not be able to undo this Opration!",
						type: "warning",
						showCancelButton: true,
						confirmButtonClass: "btn-danger",
						confirmButtonText: "Yes, delete it!",
						cancelButtonText: "No, cancel!",
						closeOnConfirm: false,
						closeOnCancel: false
					},
					function(isConfirm) {
						if (isConfirm) {
							$.ajax({
					                type: "POST",
					                url: "manage-dept-working-day.php",
					                data: { 
					                	date_id : date_id,
					                	reason : reason,
					                	
					                    markday:true,
					                    dataType: "json"
					                }
					            }).success(function(data){
					               if (data.status) {
						               	swal({
											title: "Deleted!",
											text: "The Date Marked as a Non working day.",
											type: "success",
											confirmButtonClass: "btn-success"
										});
						               location.reload();
					           		}else{
					           			console.log("Error");
					           		}
					        	});
							
						}else {
							swal({
								title: "Cancelled",
								text: "The Date is still a working day :)",
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