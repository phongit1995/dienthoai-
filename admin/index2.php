<?php 
	session_start();
	if($_SESSION['taikhoan']=="") {
		header("location:dangnhap.php");
		exit();
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="style/css.css">
</head>
<body>
	<div class="wrapper">
		<?php include("modules/config.php") ?>
		<?php include("modules/header.php") ?>
		<?php include("modules/menu.php") ?>
		<?php include("modules/content2.php") ?>
		<?php include("modules/footer.php") ?>
	</div>
</body>
</html>