<?php
header ( "Access-Control-Allow-Origin: *" );
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="{{ csrf_token() }}" name="csrf-token">
<!--  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->

<title>Aplikasi Uji Fisika | Dashboard</title>
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet"
	href="themes/default/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet"
	href="themes/default/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet"
	href="themes/default/bower_components/Ionicons/css/ionicons.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet"
	href="themes/default/bower_components/select2/dist/css/select2.min.css">

<!-- Theme style -->
<link rel="stylesheet" href="themes/default/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet"
	href="themes/default/dist/css/skins/_all-skins.min.css">
<!-- Morris chart -->
<!-- <link rel="stylesheet"
	href="themes/default/bower_components/morris.js/morris.css"> -->
<!-- jvectormap -->
<link rel="stylesheet"
	href="themes/default/bower_components/jvectormap/jquery-jvectormap.css">
<!-- Date Picker -->
<link rel="stylesheet"
	href="themes/default/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet"
	href="themes/default/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet"
	href="themes/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- DataTables -->
<link rel="stylesheet"
	href="themes/default/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<!-- Google Font -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
<link rel="stylesheet" href="themes/default/dist/js/load.min.css">
<script type="text/javascript" src="themes/default/dist/js/load.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.css"
	rel="stylesheet">



<!-- jQuery 3 -->
<!-- <script src="themes/default/bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="themes/default/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script
	src="themes/default/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script
	src="themes/default/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="themes/default/plugins/input-mask/jquery.inputmask.js"></script>
<script
	src="themes/default/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script
	src="themes/default/plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- SlimScroll -->
<script
	src="themes/default/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- Morris.js charts -->
<script src="themes/default/bower_components/raphael/raphael.min.js"></script>
<script src="themes/default/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script
	src="themes/default/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script
	src="themes/default/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script
	src="themes/default/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script
	src="themes/default/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="themes/default/bower_components/moment/min/moment.min.js"></script>
<script
	src="themes/default/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script
	src="themes/default/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script
	src="themes/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script
	src="themes/default/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="themes/default/bower_components/fastclick/lib/fastclick.js"></script>
<!-- DataTables -->
<script
	src="themes/default/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script
	src="themes/default/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="themes/default/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="themes/default/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="themes/default/dist/js/demo.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>U</b>FISIKA</span> <!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Aplikasi Uji </b>FISIKA</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu"
					role="button"> <span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu"><a href="#"
							class="dropdown-toggle" data-toggle="dropdown"> <i
								class="fa fa-envelope-o"></i> <span class="label label-success">4</span>
						</a>
							<ul class="dropdown-menu">
								<li class="header">You have 4 messages</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<!-- start message --> <a href="#">
												<div class="pull-left">
													<img src="themes/default/dist/img/user2-160x160.jpg"
														class="img-circle" alt="User Image">
												</div>
												<h4>
													Support Team <small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
										</a>
										</li>
										<!-- end message -->
										<li><a href="#">
												<div class="pull-left">
													<img src="themes/default/dist/img/user3-128x128.jpg"
														class="img-circle" alt="User Image">
												</div>
												<h4>
													AdminLTE Design Team <small><i class="fa fa-clock-o"></i> 2
														hours</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
										</a></li>
										<li><a href="#">
												<div class="pull-left">
													<img src="themes/default/dist/img/user4-128x128.jpg"
														class="img-circle" alt="User Image">
												</div>
												<h4>
													Developers <small><i class="fa fa-clock-o"></i> Today</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
										</a></li>
										<li><a href="#">
												<div class="pull-left">
													<img src="themes/default/dist/img/user3-128x128.jpg"
														class="img-circle" alt="User Image">
												</div>
												<h4>
													Sales Department <small><i class="fa fa-clock-o"></i>
														Yesterday</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
										</a></li>
										<li><a href="#">
												<div class="pull-left">
													<img src="themes/default/dist/img/user4-128x128.jpg"
														class="img-circle" alt="User Image">
												</div>
												<h4>
													Reviewers <small><i class="fa fa-clock-o"></i> 2 days</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
										</a></li>
									</ul>
								</li>
								<li class="footer"><a href="#">See All Messages</a></li>
							</ul></li>
						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu"><a href="#"
							class="dropdown-toggle" data-toggle="dropdown"> <i
								class="fa fa-bell-o"></i> <span class="label label-warning">10</span>
						</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li><a href="#"> <i class="fa fa-users text-aqua"></i> 5 new
												members joined today
										</a></li>
										<li><a href="#"> <i class="fa fa-warning text-yellow"></i>
												Very long description here that may not fit into the page
												and may cause design problems
										</a></li>
										<li><a href="#"> <i class="fa fa-users text-red"></i> 5 new
												members joined
										</a></li>
										<li><a href="#"> <i class="fa fa-shopping-cart text-green"></i>
												25 sales made
										</a></li>
										<li><a href="#"> <i class="fa fa-user text-red"></i> You
												changed your username
										</a></li>
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul></li>
						<!-- Tasks: style can be found in dropdown.less -->
						<li class="dropdown tasks-menu"><a href="#"
							class="dropdown-toggle" data-toggle="dropdown"> <i
								class="fa fa-flag-o"></i> <span class="label label-danger">9</span>
						</a>
							<ul class="dropdown-menu">
								<li class="header">You have 9 tasks</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<!-- Task item --> <a href="#">
												<h3>
													Design some buttons <small class="pull-right">20%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-aqua"
														style="width: 20%" role="progressbar" aria-valuenow="20"
														aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">20% Complete</span>
													</div>
												</div>
										</a>
										</li>
										<!-- end task item -->
										<li>
											<!-- Task item --> <a href="#">
												<h3>
													Create a nice theme <small class="pull-right">40%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-green"
														style="width: 40%" role="progressbar" aria-valuenow="20"
														aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">40% Complete</span>
													</div>
												</div>
										</a>
										</li>
										<!-- end task item -->
										<li>
											<!-- Task item --> <a href="#">
												<h3>
													Some task I need to do <small class="pull-right">60%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-red"
														style="width: 60%" role="progressbar" aria-valuenow="20"
														aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">60% Complete</span>
													</div>
												</div>
										</a>
										</li>
										<!-- end task item -->
										<li>
											<!-- Task item --> <a href="#">
												<h3>
													Make beautiful transitions <small class="pull-right">80%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-yellow"
														style="width: 80%" role="progressbar" aria-valuenow="20"
														aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">80% Complete</span>
													</div>
												</div>
										</a>
										</li>
										<!-- end task item -->
									</ul>
								</li>
								<li class="footer"><a href="#">View all tasks</a></li>
							</ul></li>
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu"><a href="#"
							class="dropdown-toggle" data-toggle="dropdown"> <img
								src="themes/default/dist/img/user2-160x160.jpg"
								class="user-image" alt="User Image"> <span class="hidden-xs">P.
									Citra Prameswari</span>
						</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header"><img
									src="themes/default/dist/img/user2-160x160.jpg"
									class="img-circle" alt="User Image">

									<p>
										P. Citra Prameswari - Web Developer <small>Member since Nov.
											2012</small>
									</p></li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="row">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</div> <!-- /.row -->
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="#" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="#" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul></li>
						<!-- Control Sidebar Toggle Button -->
						<li><a href="#" data-toggle="control-sidebar"><i
								class="fa fa-gears"></i></a></li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="themes/default/dist/img/user2-160x160.jpg"
							class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>P. Citra Prameswari</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- search form -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control"
							placeholder="Search..."> <span class="input-group-btn">
							<button type="submit" name="search" id="search-btn"
								class="btn btn-flat">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>

					<li><a href="?page=reservation"><i class="fa fa-book"></i> <span>Reservation</span></a></li>

					<li class="active treeview"><a href="#"> <i class="fa fa-edit"></i>
							<span>Form Pengujian</span> <span class="pull-right-container"> <i
								class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
						<ul class="treeview-menu">
							<li><a href="?page=dimensi"><i class="fa fa-circle-o"></i>Pengujian
									Dimensi & Sudut</a></li>
							<li><a href="?page=tetal"><i class="fa fa-circle-o"></i>Pengujian
									Tetal & Anyaman</a></li>
							<li><a href="?page=benang"><i class="fa fa-circle-o"></i>Pengujian
									Nomor Benang</a></li>
							<li><a href="?page=tarik"><i class="fa fa-circle-o"></i>Pengujian
									Kekuatan Tarik</a></li>
							<li><a href="?page=sobek"><i class="fa fa-circle-o"></i>Pengujian
									Kekuatan Sobek</a></li>
							<li><a href="?page=udara"><i class="fa fa-circle-o"></i>Pengujian
									Daya Tembus Udara</a></li>
							<li><a href="?page=twist"><i class="fa fa-circle-o"></i>Pengujian
									Twist</a></li>
						</ul></li>

					<li class="treeview"><a href="#"> <i class="fa fa-table"></i> <span>Reports</span>
							<span class="pull-right-container"> <i
								class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
						<ul class="treeview-menu">
							<li><a href="?page=rpt_dimensi"><i class="fa fa-circle-o"></i>Dimensi</a></li>
							<li><a href="?page=rpt_tetal"><i class="fa fa-circle-o"></i>Tetal</a></li>
						</ul></li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
    <?php
				if (! isset ( $_GET ['page'] )) {
					$this->load->view ( 'pages/dashboard/dashboard.php' );
				} else if (isset ( $_GET ['page'] ) && $_GET ['page'] != '') {
					if ($_GET ['page'] == 'form') {
						$this->load->view ( 'pages/forms/form1.php' );
					} else if ($_GET ['page'] == 'reservation') {
						$this->load->view ( 'pages/reservations/reservations.php' );
					} else if ($_GET ['page'] == 'dimensi') {
						if (isset ( $_GET ['action'] )) {
							$this->load->view ( 'pages/forms/dimensi_follow_up.php' );
						} else {
							$this->load->view ( 'pages/forms/dimensi.php' );
						}
					} else if ($_GET ['page'] == 'tetal') {
						if (isset ( $_GET ['action'] )) {
							$this->load->view ( 'pages/forms/tetal_follow_up.php' );
						} else {
							$this->load->view ( 'pages/forms/tetal.php' );
						}
					} else if ($_GET ['page'] == 'benang') {
						$this->load->view ( 'pages/forms/benang.php' );
					} else if ($_GET ['page'] == 'tarik') {
						$this->load->view ( 'pages/forms/tarik.php' );
					}else if($_GET ['page'] == 'rpt_dimensi'){
						$this->load->view ( 'pages/reports/dimensi.php' );
					}else if($_GET ['page'] == 'rpt_tetal'){
						$this->load->view ( 'pages/reports/tetal.php' );
					}
				}
				?>
  </div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.4.0
			</div>
			<strong>Copyright &copy; 2018-2019 <a href="#">Shines Development</a>.
			</strong> All rights reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Create the tabs -->
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i
						class="fa fa-home"></i></a></li>
				<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i
						class="fa fa-gears"></i></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane" id="control-sidebar-home-tab">
					<h3 class="control-sidebar-heading">Recent Activity</h3>
					<ul class="control-sidebar-menu">
						<li><a href="javascript:void(0)"> <i
								class="menu-icon fa fa-birthday-cake bg-red"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

									<p>Will be 23 on April 24th</p>
								</div>
						</a></li>
						<li><a href="javascript:void(0)"> <i
								class="menu-icon fa fa-user bg-yellow"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Frodo Updated His
										Profile</h4>

									<p>New phone +1(800)555-1234</p>
								</div>
						</a></li>
						<li><a href="javascript:void(0)"> <i
								class="menu-icon fa fa-envelope-o bg-light-blue"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

									<p>nora@example.com</p>
								</div>
						</a></li>
						<li><a href="javascript:void(0)"> <i
								class="menu-icon fa fa-file-code-o bg-green"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

									<p>Execution time 5 seconds</p>
								</div>
						</a></li>
					</ul>
					<!-- /.control-sidebar-menu -->

					<h3 class="control-sidebar-heading">Tasks Progress</h3>
					<ul class="control-sidebar-menu">
						<li><a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Custom Template Design <span
										class="label label-danger pull-right">70%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-danger"
										style="width: 70%"></div>
								</div>
						</a></li>
						<li><a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Update Resume <span class="label label-success pull-right">95%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-success"
										style="width: 95%"></div>
								</div>
						</a></li>
						<li><a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Laravel Integration <span
										class="label label-warning pull-right">50%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-warning"
										style="width: 50%"></div>
								</div>
						</a></li>
						<li><a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Back End Framework <span class="label label-primary pull-right">68%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-primary"
										style="width: 68%"></div>
								</div>
						</a></li>
					</ul>
					<!-- /.control-sidebar-menu -->

				</div>
				<!-- /.tab-pane -->
				<!-- Stats tab content -->
				<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab
					Content</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<form method="post">
						<h3 class="control-sidebar-heading">General Settings</h3>

						<div class="form-group">
							<label class="control-sidebar-subheading"> Report panel usage <input
								type="checkbox" class="pull-right" checked>
							</label>

							<p>Some information about this general settings option</p>
						</div>
						<!-- /.form-group -->

						<div class="form-group">
							<label class="control-sidebar-subheading"> Allow mail redirect <input
								type="checkbox" class="pull-right" checked>
							</label>

							<p>Other sets of options are available</p>
						</div>
						<!-- /.form-group -->

						<div class="form-group">
							<label class="control-sidebar-subheading"> Expose author name in
								posts <input type="checkbox" class="pull-right" checked>
							</label>

							<p>Allow the user to show his name in blog posts</p>
						</div>
						<!-- /.form-group -->

						<h3 class="control-sidebar-heading">Chat Settings</h3>

						<div class="form-group">
							<label class="control-sidebar-subheading"> Show me as online <input
								type="checkbox" class="pull-right" checked>
							</label>
						</div>
						<!-- /.form-group -->

						<div class="form-group">
							<label class="control-sidebar-subheading"> Turn off notifications
								<input type="checkbox" class="pull-right">
							</label>
						</div>
						<!-- /.form-group -->

						<div class="form-group">
							<label class="control-sidebar-subheading"> Delete chat history <a
								href="javascript:void(0)" class="text-red pull-right"><i
									class="fa fa-trash-o"></i></a>
							</label>
						</div>
						<!-- /.form-group -->
					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
		</aside>
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->
	<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    /* //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    }) */
    
    /* //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker() */

    //Timepicker
   /*  $('.timepicker').timepicker({
      showInputs: false
    }) */
    
  })
</script>

	<script>
/*   $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  }) */
</script>
</body>
</html>
