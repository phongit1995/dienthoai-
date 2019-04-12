<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>didongthaibinh.com</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style/css.css">
</head>
<body>
	<?php 
		session_start();
		ob_start();
	 ?>
	<div class="wrapper">
		<?php include("admin/modules/config.php"); ?>
		<?php include("modules2/header.php"); ?>
		<?php include("modules2/menu.php"); ?>
		<?php include("modules2/content.php"); ?>
		<?php include("modules2/footer.php"); ?>
	</div>
</body>
</html>