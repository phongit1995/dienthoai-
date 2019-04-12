<?php 
	session_start();
	//session_destroy();
	unset($_SESSION['tenkhach']);
	header("location:../index.php");
 ?>