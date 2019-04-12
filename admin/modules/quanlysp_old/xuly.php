<?php 
	include("../config.php");
	$error=array();
	if(empty($_POST['tensp'])){
		$error[]="tensp";
	}
	else{
		$tensp=$_POST['tensp'];
	}
	if(empty($_POST['gia'])){
		$error[]="gia";
	}
	else{
		$gia=$_POST['gia'];
	}
	if(empty($_POST['baohanh'])){
		$error[]="banhanh";
	}
	else{
		$baohanh=$_POST['baohanh'];
	}
	if(empty($_POST['soluong'])){
		$error[]="soluong";
	}
	else{
		$soluong=$_POST['soluong'];
	}
	/*if(empty($_POST['hinhanh'])){
		$error[]="hinhanh";
	}
	else{
		$gia=$_POST['hinhanh'];
	}*/
	if(empty($_POST['mota'])){
		$error[]="mota";
	}
	else{
		$mota=$_POST['mota'];
	}
	if(empty($_POST['id_loaisp'])){
		$error[]="id_loaisp";
	}
	else{
		$id_loaisp=$_POST['id_loaisp'];
	}
	if(empty($_POST['thutu'])){
		$error[]="thutu";
	}
	else{
		$thutu=$_POST['thutu'];
	}
	if(isset($_GET['id_sp'])){
		$id_sp=$_GET['id_sp'];
	}
	else{
		$id_sp="";
	}
	if(isset($_GET['xoasp'])){
		$xoasp=$_GET['xoasp'];
	}
	else{
		$xoasp="";
	}
	if(isset($_GET['page'])) {
		$trang = $_GET['page'];
	}
	else {
		$trang=1;
	}
	if(isset($_POST['themsp'])){
		if(empty($error)){
			$tenanh=$_FILES['hinhanh']['name'];
			if($tenanh!=""){
				$time=date("Ymdhis");
				$tenanh=$time.$tenanh;
				$dich="../../../uploads/" . $tenanh;
				copy($_FILES['hinhanh']['tmp_name'],$dich);
				$dich=substr($dich,9);

				$sql="insert into sp(tensp,hinhanh,gia,baohanh,soluong,mota,id_loaisp,thutu) values('$tensp','$dich','$gia','$baohanh','$soluong','$mota','$id_loaisp','$thutu')";
				mysqli_query($conn,$sql);
				header("location:../../index.php?quanly=quanlysp&ac=them");
			}
		}
		else{
			echo "<script>alert('Bạn phải nhập đầy đủ thông tin')</script>";
			echo "<script>window.history.back();</script>";
		}
	}
	else if(isset($_POST['suasp'])){
		if(empty($error)){
			$tenanh=$_FILES['hinhanh']['name'];
			if($tenanh!=""){
				$time=date("Ymdhis");
				$tenanh=$time.$tenanh;
				$dich="../../../uploads/".$tenanh;
				copy($_FILES['hinhanh']['tmp_name'],$dich);
				$dich=substr($dich, 9);

				$sql="select hinhanh from sp where id_sp='$id_sp'";
				$sp=mysqli_query($conn,$sql);
				$dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC);

				if($dong_sp['hinhanh']!=""){
					unlink("../../../".$dong_sp['hinhanh']);
				}

				$sql1="update sp set tensp='$tensp',hinhanh='$dich',gia='$gia',baohanh='$baohanh',soluong='$soluong',mota='$mota',id_loaisp='$id_loaisp',thutu='$thutu' where id_sp='$id_sp'";
			}
			else{
				$sql1="update sp set tensp='$tensp',gia='$gia',baohanh='$baohanh',soluong='$soluong',mota='$mota',id_loaisp='$id_loaisp',thutu='$thutu' where id_sp='$id_sp'";
			}
			mysqli_query($conn,$sql1);
			header("location:../../index.php?quanly=quanlysp&ac=sua&id_sp=$id_sp&page=$trang");
		}
		else{
			echo "<script>alert('Bạn hãy nhập đầy đủ thông tin!')</script>";
			header("location:../../index.php?quanly=quanlysp&ac=sua&id_sp=$id_sp&page=$trang");
		}
	}
	else if(isset($_POST['boqua'])){
		header("location:../../index.php?quanly=quanlysp&ac=them");
	}
	if($xoasp=="sp"){
		$sql="select hinhanh from sp where id_sp='$id_sp'";
		$hinhanh=mysqli_query($conn,$sql);
		$dong_sp=mysqli_fetch_array($hinhanh,MYSQLI_ASSOC);

		unlink("../../../".$dong_sp['hinhanh']);

		$sql="delete from sp where id_sp='$id_sp'";
		mysqli_query($conn,$sql);
		header("location:../../index.php?quanly=quanlysp&ac=them");
	}
?>
