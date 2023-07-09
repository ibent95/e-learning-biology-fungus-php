<?php
// error_reporting(0);
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>E-Learning Bialogy - Fungus</title>

	<!-- BOOTSTRAP STYLES-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />

	<!-- FONTAWESOME STYLES-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />

	<!-- QUILL EDITOR STYLES-->
	<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />

	<!-- QUILL EDITOR STYLES-->
	<link href="assets/quill/quill.snow.css" rel="stylesheet" />

	<!-- CUSTOM STYLES-->
	<link href="assets/css/custom.css" rel="stylesheet" />

	<!-- GOOGLE FONTS-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

	<!-- TABLE STYLES-->
	<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Administrator</a>
			</div>
			<div style="color: black; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
				<div style='color: white'>
					<script language="Javascript" type="text/javascript">
						var d = new Date();
						var h = d.getHours();

						if (h < 11) {
							document.write('Selamat pagi, Administrator...&nbsp;');
						} else {
							if (h < 15) {
								document.write('Selamat siang, pengunjung...');
							} else {
								if (h < 19) {
									document.write('Selamat sore, pengunjung...');
								} else {
									if (h <= 23) {
										document.write('Selamat malam, pengunjung...');
									}
								}
							}
						}
					</script>

					<a class='btn btn-danger square-btn-adjust' href='?page=Logout'>Logout</a>
				</div>

			</div>
		</nav>
		<!-- /. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					<li class="text-center">
						<img src="assets/img/find_user.png" class="user-image img-responsive" alt="" />
					</li>

					<?php include "menu.php"; ?>
				</ul>
			</div>
		</nav>

		<!-- /. NAV SIDE  -->
		<div id="page-wrapper">
			<div id="page-inner">


				<div class="row">
					<div class="col-md-12">
						<!-- Advanced Tables -->
						<div class="panel panel-default">
							<!--<div class="panel-heading">Advanced Tables</div>-->

							<div class="panel-body">
								<!--<?php // if (isset($_SESSION['id_user'])) {}
									?>-->
								<?php
								if (isset($_GET['page'])) {
									$page = htmlentities($_GET['page']);
								} else {
									$page = "welcome";
								}

								$file = "$page.php";
								$cek = strlen($page);

								if ($cek > 10 || !file_exists($file) || empty($page)) {
									include("welcome.php");
								} else {
									include($file);
								}
								?>
							</div>
						</div>
						<!--End Advanced Tables -->
					</div>
				</div>
				<!-- /. ROW  -->

			</div>

		</div>
		<!-- /. PAGE INNER  -->
	</div>
	<!-- /. PAGE WRAPPER  -->
	<!-- /. WRAPPER  -->

	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->

	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>

	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js" type="text/javascript"></script>

	<!-- DATA TABLE SCRIPTS -->
	<script src="assets/js/dataTables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="assets/js/dataTables/dataTables.bootstrap.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#dataTables-example').dataTable();
		});
	</script>

	<script src="assets/js/morris/morris.js" type="text/javascript"></script>

	<!-- QUILL EDITOR SCRIPTS -->
	<!--<script src="assets/quill/quill.js" type="text/javascript"></script>-->
	<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
	<script type="text/javascript">
		//var container = document.getElementById('editor');
		//var options = {
		//	debug: 'info',
		//	modules: {
		//		toolbar: '#editor-toolbar'
		//	},
		//	placeholder: 'Deskripsi...',
		//	//readOnly: false,
		//	theme: 'snow'
		//};
		var editor = new Quill('#editor', {
			//debug: 'info',
			modules: {
				toolbar: '#editor-toolbar'
			},
			placeholder: 'Deskripsi...',
			//readOnly: false,
			theme: 'snow'
		});
	</script>

	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js" type="text/javascript"></script>


</body>

</html>