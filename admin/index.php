<?PHP   
	// $page = $_REQUEST['content'];
	
		session_start();
	if(!isset($_SESSION['administrator_user'])){
		require_once("modules/login/views/index.inc.php"); 
	}else{
		$login_user = $_SESSION['administrator_user'];
		if(!isset($_REQUEST['content'])){
			$_REQUEST['content'] = "home";
		}
		$content = $_REQUEST['content'];
	}
	if(!isset($login_user)){
		require_once("modules/login/views/index.inc.php"); 
	}else{

	?>


	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Real Estate</title>
		<script src="../template/js/jquery-2.2.0.min.js" type="text/javascript"></script>
		<!-- Simple-Sidebar CSS -->
		<link href="../template/css/simple-sidebar.css" rel="stylesheet">
		<link href="../template/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" type="text/css" media="screen" 
		href="../template/bootstrap/css/bootstrap.min.css" />
		<script src="../template/bootstrap/js/bootstrap.min.js"></script>
		<!-- Custom Fonts & CSS -->
		<link rel="stylesheet" type="text/css" media="screen" 
		href="../template/css/style_back.css" />	
	</head>

		<body>
			<div id="wrapper" class="toggled">
				<?php require_once('views/header.inc.php') ?>
				
				<!-- Sidebar -->
				<?php require_once('views/menu.inc.php') ?>
				<!-- /#sidebar-wrapper -->

				<!-- Page Content -->
				<div id="page-content-wrapper" class="toggled">
					<?php require_once("views/body.inc.php"); ?>
				</div>
				<!-- /#page-content-wrapper -->
			</div>
			<!-- /#wrapper --> 
		</body>
	</html> 

	<? } ?>