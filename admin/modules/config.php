<?php 
	$tenmaychu = "db4free.net:3306";
	$taikhoan = "phongnguyen123";
	$matkhau = "phongvip";
	$csdl = "dienthoai";
	$conn = mysqli_connect($tenmaychu,$taikhoan,$matkhau,$csdl) or die('khong ket loi duoc!');
	mysqli_set_charset($conn,'utf8')
 ?>
