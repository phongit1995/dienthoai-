<?php 
	include("../config.php");
	$error=array();
	if(empty($_POST['tenloaisp'])){
		$error[]="tenloaisp";
	}
	else{
		$tenloaisp=$_POST['tenloaisp'];
	}
	if(empty($_POST['thutu'])){
		$error[]="thutu";
	}
	else{
		$thutu=$_POST['thutu'];
	}
	if(isset($_GET['id_loaisp'])){
		$id_loaisp=$_GET['id_loaisp'];
	}
	else{
		$id_loaisp="";
	}
	if(isset($_GET['xoaloaisp'])){
		$xoaloaisp=$_GET['xoaloaisp'];
	}
	else{
		$xoaloaisp="";
	}
	if(isset($_POST['themloaisp'])){
		if(empty($error)){
			$sql="insert into loaisp(tenloaisp,thutu) values('$tenloaisp','$thutu')";
			mysqli_query($conn,$sql);
			header("location:../../index.php?quanly=quanlyloaisp&ac=them");
		}
		else{
			echo "<script>alert('Bạn phải nhập đủ thông tin');</script>";
			echo "<script>window.history.back()</script>";
		}
	}
	else if(isset($_POST['sualoaisp'])){
		if(empty($error)){
			$sql="update loaisp set tenloaisp='$tenloaisp', thutu='$thutu' where id_loaisp=$id_loaisp";
			mysqli_query($conn,$sql);
			header("location:../../index.php?quanly=quanlyloaisp&ac=sua&id_loaisp=".$id_loaisp);
		}
		else{
			echo "<script>alert('Bạn phải nhập đủ thông tin');</script>";
			header("location:../../index.php?quanly=quanlyloaisp&ac=sua&id_loaisp=".$id_loaisp);
		}
	}
	else if (isset($_POST['boqua'])) {
		header("location:../../index.php?quanly=quanlyloaisp&ac=them");
	}
	if($xoaloaisp=="loaisp"){
		$sql="delete from loaisp where id_loaisp=$id_loaisp";
		mysqli_query($conn,$sql);
		header("location:../../index.php?quanly=quanlyloaisp&ac=them");
	}
 ?>