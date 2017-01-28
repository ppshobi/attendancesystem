n<?php
//login check
require_once('app/Auth.php');

if(!Auth::isloggedin()){
	Auth::redirect('login.php');
}

require_once('app/Department.php');
require_once('app/Student.php');
$message;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deletestudent'])) {
	
	$result=Student::delete($_POST['studentid']);
	if ($result) {
		$message=true;
	}else{
		$message=false;
	}
}
$depts=Department::getAll();
if(Auth::ishod()){
	$students=Student::getAllByDept(User::getDepartment(Auth::getuserid()));
}else{
	$students=Student::getAll();
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Manage Student</title>

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
							<h3>Manage Students</h3>
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

				<div class="card-block">
					<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th>Sl.No</th>
							<th>Student Name</th>
							<th>Register No</th>
							<th>Department</th>
							<th>Batch</th>
							<th colspan="2">Options</th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th>Sl.No</th>
							<th>Student Name</th>
							<th>Register No</th>
							<th>Department</th>
							<th>Batch</th>
							<th colspan="2">Options</th>
						</tr>
						</tfoot>
						<tbody>
						<?php
						if($students){
							$count=1;
							foreach ($students as $student) {
								$dept=Department::getOne($student['dept']);
								echo "<tr>";
									echo "<td>" . $count ."</td>";
									echo "<td>" . $student['name'] ."</td>";
									echo "<td>" . $student['regno'] ."</td>";
									echo "<td>" . $dept['name'] ."</td>";
									echo "<td>" . $student['batch'] ."</td>";
									echo "<td>" . "<a href=\"edit-student.php?id=".$student['id']."\" class=\"btn btn-rounded btn-inline btn-warning\" >"."Edit</a></td>";
									echo "<td>" . "<button value=".$student['id']." class=\"btn btn-rounded btn-inline btn-danger swal-btn-cancel\" >"."Delete</button></td>";
									
		 						echo "</tr>";
		 						$count++;
	 						}
						}
						?>
						
						</tbody>
					</table>
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
		var studentid=$(this).val();
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
				                url: "manage-student.php",
				                data: { 
				                	studentid : studentid,
				                    deletestudent:true
				                }
				            }).success(function(msg){
				               swal({
									title: "Deleted!",
									text: "The Student is Deleted.",
									type: "success",
									confirmButtonClass: "btn-success"
								});
				               location.reload();
				        });
						
					} else {
						swal({
							title: "Cancelled",
							text: "The Student is not Deleted :)",
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