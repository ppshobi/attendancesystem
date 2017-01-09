<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

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
</head>
<body class="with-side-menu">

	<header class="site-header">
	    <div class="container-fluid">
	
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="img/logo-2.png" alt="">
	            <img class="hidden-lg-up" src="img/logo-2-mob.png" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                    <div class="dropdown dropdown-notification notif">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-notification"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-alarm"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
	                            <div class="dropdown-menu-notif-header">
	                                Notifications
	                                <span class="label label-pill label-danger">4</span>
	                            </div>
	                            <div class="dropdown-menu-notif-list">
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-1.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Morgan</a> was bothering about something
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-2.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-3.jpg" alt="">
	                                    </div>
	                                    <div class="dot"></div>
	                                    <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                                <div class="dropdown-menu-notif-item">
	                                    <div class="photo">
	                                        <img src="img/photo-64-4.jpg" alt="">
	                                    </div>
	                                    <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
	                                    <div class="color-blue-grey-lighter">7 hours ago</div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown dropdown-notification messages">
	                        <a href="#"
	                           class="header-alarm dropdown-toggle active"
	                           id="dd-messages"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-mail"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
	                            <div class="dropdown-menu-messages-header">
	                                <ul class="nav" role="tablist">
	                                    <li class="nav-item">
	                                        <a class="nav-link active"
	                                           data-toggle="tab"
	                                           href="#tab-incoming"
	                                           role="tab">
	                                            Inbox
	                                            <span class="label label-pill label-danger">8</span>
	                                        </a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link"
	                                           data-toggle="tab"
	                                           href="#tab-outgoing"
	                                           role="tab">Outbox</a>
	                                    </li>
	                                </ul>
	                                <!--<button type="button" class="create">
	                                    <i class="font-icon font-icon-pen-square"></i>
	                                </button>-->
	                            </div>
	                            <div class="tab-content">
	                                <div class="tab-pane active" id="tab-incoming" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something...</span>
	                                        </a>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="tab-outgoing" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burton</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
	                                            <span class="mess-item-name">Christian Burtons</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">Tim Collins</span>
	                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="#">See more</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown dropdown-lang">
	                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <span class="flag-icon flag-icon-us"></span>
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right">
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ru"></span>Русский</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de"></span>Deutsch</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-it"></span>Italiano</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es"></span>Español</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-pl"></span>Polski</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-li"></span>Lietuviu</a>
	                            </div>
	                            <div class="dropdown-menu-col">
	                                <a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span>Français</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-by"></span>Беларускi</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ua"></span>Українська</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-cz"></span>Česky</a>
	                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ch"></span>中國</a>
	                            </div>
	                        </div>
	                    </div>
	
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	
	                    <button type="button" class="burger-right">
	                        <i class="font-icon-menu-addl"></i>
	                    </button>
	                </div><!--.site-header-shown-->
	
	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        <div class="dropdown dropdown-typical">
	                            <div class="dropdown-menu" aria-labelledby="dd-header-sales">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-cogwheel"></span>
	                                <span class="lbl">Marketing automation</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
	                                <a class="dropdown-item" href="#">Current Search</a>
	                                <a class="dropdown-item" href="#">Search for Issues</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Recent issues</div>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                                <div class="dropdown-more">
	                                    <div class="dropdown-more-caption padding">more...</div>
	                                    <div class="dropdown-more-sub">
	                                        <div class="dropdown-more-sub-in">
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Import Issues from CSV</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Filters</div>
	                                <a class="dropdown-item" href="#">My Open Issues</a>
	                                <a class="dropdown-item" href="#">Reported by Me</a>
	                                <div class="dropdown-divider"></div>
	                                <a class="dropdown-item" href="#">Manage filters</a>
	                                <div class="dropdown-divider"></div>
	                                <div class="dropdown-header">Timesheet</div>
	                                <a class="dropdown-item" href="#">Subscribtions</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-social" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-share"></span>
	                                <span class="lbl">Social media</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-social">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown dropdown-typical">
	                            <a href="#" class="dropdown-toggle no-arr">
	                                <span class="font-icon font-icon-page"></span>
	                                <span class="lbl">Projects</span>
	                                <span class="label label-pill label-danger">35</span>
	                            </a>
	                        </div>
	
	                        <div class="dropdown dropdown-typical">
	                            <a class="dropdown-toggle" id="dd-header-form-builder" data-target="#" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                <span class="font-icon font-icon-pencil"></span>
	                                <span class="lbl">Form builder</span>
	                            </a>
	
	                            <div class="dropdown-menu" aria-labelledby="dd-header-form-builder">
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
	                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="dropdown">
	                            <button class="btn btn-rounded dropdown-toggle" id="dd-header-add" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                Add
	                            </button>
	                            <div class="dropdown-menu" aria-labelledby="dd-header-add">
	                                <a class="dropdown-item" href="#">Quant and Verbal</a>
	                                <a class="dropdown-item" href="#">Real Gmat Test</a>
	                                <a class="dropdown-item" href="#">Prep Official App</a>
	                                <a class="dropdown-item" href="#">CATprer Test</a>
	                                <a class="dropdown-item" href="#">Third Party Test</a>
	                            </div>
	                        </div>
	                        <div class="help-dropdown">
	                            <button type="button">
	                                <i class="font-icon font-icon-help"></i>
	                            </button>
	                            <div class="help-dropdown-popup">
	                                <div class="help-dropdown-popup-side">
	                                    <ul>
	                                        <li><a href="#">Getting Started</a></li>
	                                        <li><a href="#" class="active">Creating a new project</a></li>
	                                        <li><a href="#">Adding customers</a></li>
	                                        <li><a href="#">Settings</a></li>
	                                        <li><a href="#">Importing data</a></li>
	                                        <li><a href="#">Exporting data</a></li>
	                                    </ul>
	                                </div>
	                                <div class="help-dropdown-popup-cont">
	                                    <div class="help-dropdown-popup-cont-in">
	                                        <div class="jscroll">
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum is simply
	                                                <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Contrary to popular belief
	                                                <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                The point of using Lorem Ipsum
	                                                <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
	                                            </a>
	                                            <a href="#" class="help-dropdown-popup-item">
	                                                Lorem Ipsum
	                                                <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
	                                            </a>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div><!--.help-dropdown-->
	                        <a class="btn btn-nav btn-rounded btn-inline btn-danger-outline" href="http://themeforest.net/item/startui-premium-bootstrap-4-admin-dashboard-template/15228250">
	                            Buy Theme
	                        </a>
	                        <div class="site-header-search-container">
	                            <form class="site-header-search closed">
	                                <input type="text" placeholder="Search"/>
	                                <button type="submit">
	                                    <span class="font-icon-search"></span>
	                                </button>
	                                <div class="overlay"></div>
	                            </form>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	<?php include_once('nav.php');?>
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Basic Inputs</h3>
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

				<h5 class="m-t-lg with-border">Horizontal Inputs</h5>

				<form>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Text</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Text Disabled</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" disabled class="form-control" id="inputPassword" placeholder="Text Disabled"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Text Readonly</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" readonly class="form-control" id="inputPassword" placeholder="Text Readonly"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 form-control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword" placeholder="Password">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Select</label>
						<div class="col-sm-10">
							<select id="exampleSelect" class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect2" class="col-sm-2 form-control-label">Multiple select</label>
						<div class="col-sm-10">
							<select multiple class="form-control" id="exampleSelect2">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleSelect" class="col-sm-2 form-control-label">Textarea</label>
						<div class="col-sm-10">
							<textarea rows="4" class="form-control" placeholder="Textarea"></textarea>
						</div>
					</div>
				</form>

				<h5 class="m-t-lg with-border">Vertical Inputs</h5>

				<div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">First Name</label>
							<input type="text" class="form-control" id="exampleInput" placeholder="First Name">
							<small class="text-muted">We'll never share your email with anyone else.</small>
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="mail@mail.com">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</fieldset>
					</div>
				</div><!--.row-->


				<div class="row">
					<div class="col-md-4 col-sm-6">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputDisabled">Disabled</label>
							<input type="email" class="form-control" id="exampleInputDisabled" placeholder="First Name" disabled>
						</fieldset>
					</div>
					<div class="col-md-4 col-sm-6">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputDisabled2">Readonly</label>
							<input type="password" readonly class="form-control" id="exampleInputDisabled2">
						</fieldset>
					</div>
					<div class="col-md-4 col-sm-6">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputError">Error</label>
							<input type="text" class="form-control form-control-error" id="exampleInputError" placeholder="First Name" value="First Name">
						</fieldset>
					</div>
				</div><!--.row-->

				<h5 class="m-t-lg with-border">Dropdown &amp; Icons</h5>

				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group input-group">
							<input type="text" class="form-control" aria-label="Text input with dropdown button">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Action
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
									<div role="separator" class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Separated link</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button">
								<div class="input-group-btn">
									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Action
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div role="separator" class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--.row-->

				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">$</div>
								<input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
								<div class="input-group-addon">.00</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">http://example.com/users/</div>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
				</div><!--.row-->

				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
								</div>
								<input type="text" class="form-control" placeholder="Amount">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-text-color" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-earphone"></span>
								</div>
								<input type="text" class="form-control" placeholder="Amount">
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-send"></span>
								</div>
							</div>
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-xs-12">
						<textarea rows="4" class="form-control" placeholder="Textarea"></textarea>
					</div>
				</div><!--.row-->

				<h5 class="m-t-lg with-border">Custom Validation Styles</h5>

				<div class="row">
					<div class="col-md-4 col-sm-6">
						<fieldset class="form-group form-group-error">
							<label class="form-label" for="exampleError">Username</label>
							<input type="text" class="form-control" id="exampleError">
							<small class="text-muted">Username must not be empty</small>
						</fieldset>
					</div>
					<div class="col-md-4 col-sm-6">
						<fieldset class="form-group form-group-error">
							<label class="form-label" for="exampleError2">Username</label>
							<div class="form-control-wrapper">
								<input type="text" class="form-control" id="exampleError2">
								<div class="form-tooltip-error">Username must be between 6 and 18 characters. No special characters allowed.</div>
							</div>
							<small class="text-muted">Username must not be empty</small>
						</fieldset>
					</div>
					<div class="col-md-4 col-sm-6">
						<fieldset class="form-group form-group-error">
							<label class="form-label" for="exampleError3">Password</label>
							<div class="form-control-wrapper">
								<input type="text" class="form-control" id="exampleError3">
								<div class="form-tooltip-error sm">Password must be at least 6 characters</div>
							</div>
							<small class="text-muted">Password must not be empty</small>
						</fieldset>
					</div>
				</div><!--.row-->

				<h5 class="m-t-lg with-border">TouchSpin</h5>

				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<input id="demo1" type="text" value="55" name="demo1">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<input id="demo2" type="text" value="0" name="demo2" class="col-md-8 form-control">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<input id="demo_vertical" type="text" value="" name="demo_vertical">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<input id="demo_vertical2" type="text" value="" name="demo_vertical2">
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<input id="demo3" type="text" value="" name="demo3">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<input id="demo4" type="text" value="" name="demo4" class="input-sm">
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<div class="input-group input-group-lg">
								<input id="demo4_2" type="text" value="" name="demo4_2" class="form-control input-lg">
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<input id="demo6" type="text" value="" name="demo6">
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<div class="input-group">
								<input id="demo5" type="text" class="form-control" name="demo5" value="50">
								<div class="input-group-btn">
									<button type="button" class="btn btn-default">Action</button>
									<button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!--.row-->

				<h5 class="m-t-lg with-border">Icons</h5>

				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Left Icon:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="font-icon font-icon-pin"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Right Icon:</label>
							<div class="form-control-wrapper form-control-icon-right">
								<input type="text" class="form-control" placeholder="Right"/>
								<i class="font-icon font-icon-github"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Left Glyphicon:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="glyphicon glyphicon-heart"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Right Glyphicon:</label>
							<div class="form-control-wrapper form-control-icon-right">
								<input type="text" class="form-control" placeholder="Right"/>
								<i class="glyphicon glyphicon-magnet"></i>
							</div>
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Left Font Awesome:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="fa fa-youtube-play"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Right Font Awesome:</label>
							<div class="form-control-wrapper form-control-icon-right">
								<input type="text" class="form-control" placeholder="Right"/>
								<i class="fa fa-mail-forward"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Blue Icon:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="font-icon font-icon-comments color-blue"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Green Icon:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="font-icon font-icon-check-bird color-green"></i>
							</div>
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Red Icon:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="font-icon font-icon-close-2 color-red"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Green Icon:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="font-icon font-icon-clock color-orange"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Purple Icon:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="font-icon font-icon-earth color-purple"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Dark Icon:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control" placeholder="Left"/>
								<i class="font-icon font-icon-i-circle color-black-blue"></i>
							</div>
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Left Large:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control form-control-lg" placeholder="Left"/>
								<i class="font-icon font-icon-page"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Right Large:</label>
							<div class="form-control-wrapper form-control-icon-right">
								<input type="text" class="form-control form-control-lg" placeholder="Right"/>
								<i class="font-icon font-icon-cam-video"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Left Small:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control form-control-sm" placeholder="Left"/>
								<i class="font-icon font-icon-picture"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Right Small:</label>
							<div class="form-control-wrapper form-control-icon-right">
								<input type="text" class="form-control form-control-sm" placeholder="Right"/>
								<i class="font-icon font-icon-pencil"></i>
							</div>
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Left Rounded:</label>
							<div class="form-control-wrapper form-control-icon-left">
								<input type="text" class="form-control form-control-rounded" placeholder="Left"/>
								<i class="font-icon font-icon-dropbox"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<label class="form-label semibold">Right Rounded:</label>
							<div class="form-control-wrapper form-control-icon-right">
								<input type="text" class="form-control form-control-rounded" placeholder="Right"/>
								<i class="font-icon font-icon-cam-photo"></i>
							</div>
						</div>
					</div>
				</div><!--.row-->

				<h5 class="m-t-lg with-border">Validation</h5>

				<div class="row">
					<div class="col-lg-4">
						<div class="form-group has-success">
							<label class="form-label" for="inputSuccess1">Input with success</label>
							<input type="text" class="form-control form-control-success" id="inputSuccess1">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group has-warning">
							<label class="form-label" for="inputWarning1">Input with warning</label>
							<input type="text" class="form-control form-control-warning" id="inputWarning1">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group has-danger">
							<label class="form-label" for="inputDanger1">Input with danger</label>
							<input type="text" class="form-control form-control-danger" id="inputDanger1">
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
							<input type="text" class="form-control form-control-blue-fill">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<input type="text" class="form-control form-control-red-fill">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<input type="text" class="form-control form-control-orange-fill">
						</div>
					</div>
				</div><!--.row-->
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
							<input type="text" class="form-control form-control-green-fill">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<input type="text" class="form-control form-control-purple-fill">
						</div>
					</div>
				</div><!--.row-->

			</div><!--.box-typical-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/select2/select2.full.min.js"></script>
	<script src="js/lib/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script>
		$(document).ready(function() {
			$("input[name='demo1']").TouchSpin({
				min: 0,
				max: 100,
				step: 0.1,
				decimals: 2,
				boostat: 5,
				maxboostedstep: 10,
				postfix: '%'
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo2']").TouchSpin({
				min: -1000000000,
				max: 1000000000,
				stepinterval: 50,
				maxboostedstep: 10000000,
				prefix: '$'
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo_vertical']").TouchSpin({
				verticalbuttons: true
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo_vertical2']").TouchSpin({
				verticalbuttons: true,
				verticalupclass: 'glyphicon glyphicon-plus',
				verticaldownclass: 'glyphicon glyphicon-minus'
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo3']").TouchSpin();
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo4']").TouchSpin({
				postfix: "a button",
				postfix_extraclass: "btn btn-default"
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo4_2']").TouchSpin({
				postfix: "a button",
				postfix_extraclass: "btn btn-default"
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo6']").TouchSpin({
				buttondown_class: "btn btn-default-outline",
				buttonup_class: "btn btn-default-outline"
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo5']").TouchSpin({
				prefix: "pre",
				postfix: "post"
			});
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>