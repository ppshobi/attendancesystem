<?php
//login check

require_once('app/Teacher.php');
require_once('app/Department.php');
$message;
$departments=Department::getAll();
$teacher;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editteacher'])) {
	
	$result=Teacher::edit($_POST['teacherid'],$_POST['name'],$_POST['dept']);
	if ($result) {
		$message=true;
	}else{
		$message=false;
	}
}else{
	$teacher=Teacher::getOne($_GET['id']);

}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Edit Teacher</title>

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
							<h3>Add Teacher</h3>
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

				<form method="post" action="">
					<div class="form-group row">
						<label for="TeacherName" class="col-sm-2 form-control-label">Teacher Name</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input id="name" type="text" name="name" class="form-control" value="<?php echo $teacher['name']; ?>" placeholder="Teacher Name"></p>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="Department" class="col-sm-2 form-control-label">Select Department</label>
						<div class="col-sm-10">
							<select name="dept" id="dept" class="select2">
							<option value="<?php echo $teacher['dept'];?>" selected>Select Department</option>
							 	<?php
							 		foreach ($departments as $dept) {
							 			echo "<option value=\"".$dept['id']."\">".$dept['name']."</option>";
							 		}
							 	?>
								
								
							</select>
						</div>
					</div>
					<input type="hidden" id="teacherid" name="teacherid" value="<?php echo $teacher['id']; ?>">
					<div class="form-group row">
						<label for="button" class="col-sm-2 form-control-label"></label>
						<div class="col-sm-10">
							<button type="submit" name="editteacher" class="btn btn-inline btn-success-outline swal-btn-success">Update Teacher</button>
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
<script type="text/javascript">
	$('.swal-btn-success').click(function(e){
		e.preventDefault();
		var teacherid=$("#teacherid").val();
		var name=$("#name").val();
		var dept=$("#dept").val();
		$.ajax({
                type: "POST",
                url: "edit-teacher.php",
                data: { 
                    teacherid: teacherid,
                    name: name,
                    dept: dept,
                    editteacher: true
                }
            }).success(function(msg){
                swal({
					title: "Good job!",
					text: "Updated Teacher!",
					type: "success",
					confirmButtonClass: "btn-success",
					confirmButtonText: "OK"
				});
        });
		
	});
</script>
<script src="js/app.js"></script>
</body>
</html>