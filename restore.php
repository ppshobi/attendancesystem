<?php
//login check
require_once('app/Auth.php');
require_once('app/DB.php');

if(!Auth::isloggedin()){
	Auth::redirect('login.php');
}
if (isset($_FILES['sqlfile'])){
	$db=new Db();
	$file = file_get_contents($_FILES['sqlfile']['tmp_name']);
	$result=false;

	if($db->restore_mysql_database($file)){
		$result=true;
	}else{
		$result=false;
	}
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
				<form id="upload" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="File" class="col-sm-2 form-control-label">Select File</label>
						<div class="col-sm-10">
							<input type="file" name="sqlfile">
						</div>
					</div>
					<button name="restore" class="swal-btn-success btn btn-success" type="submit">Import Database</button>
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
	<script src="js/lib/printthis/printThis.js"></script>
<script type="text/javascript">
	$('.swal-btn-success').click(function(e){
		e.preventDefault();
		swal({
				title: "Are you sure?",
				text: "Import Database? This can't be undone",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Yes, Import it!",
				cancelButtonText: "No, cancel!",
				closeOnConfirm: false,
				closeOnCancel: false
			},
			function(isConfirm) {
				if (isConfirm) {
					form = $('form')[0];
					$.ajax({
		                type: "POST",
		                url: "restore.php",
		                data: new FormData(form), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,     
		            	}).success(function(data){
		            		if (data.status) {
		            			swal({
									title: "Good job!",
									text: "The Database Imported successfully",
									type: "success",
									confirmButtonClass: "btn-success",
									confirmButtonText: "OK"
								});
		            	} else {
		            		console.log('error');
		            	}
		                /**/
		        		});
					
				} else {
					swal({
						title: "Cancelled",
						text: "The Importing Cancelled :)",
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