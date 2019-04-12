<?php 
	include("../config.php");
	if(isset($_GET['id_hdb'])){
		$id_hdb=$_GET['id_hdb'];
	}
	else{
		$id_hdb="";
	}
	if(isset($_POST['trangthai'])){
		$trangthai=$_POST['trangthai'];
	}
	else{
		$trangthai="";
	}
	if(isset($_GET['xoahoadonban'])){
		$hoadonban=$_GET['xoahoadonban'];
	}
	else{
		$hoadonban="abc";
	}
	echo $hoadonban;
	if(isset($_POST['suahoadonban'])){
		$sql="update hoadonban set trangthai='$trangthai' where id_hdb='$id_hdb'";
		mysqli_query($conn,$sql);
		header("location:../../index.php?quanly=quanlyhoadonban&ac=sua&id_hdb=$id_hdb");
	}
	if($hoadonban=="hoadonban"){
		$sql="delete from hoadonban where id_hdb=$id_hdb";
		mysqli_query($conn,$sql);

		$sql2="delete from chitiethoadonban where id_hdb=$id_hdb";
		mysqli_query($conn,$sql2);

		header("location:../../index.php?quanly=quanlyhoadonban");
	}
 ?>