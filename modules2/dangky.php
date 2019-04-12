<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang đăng ký</title>
	<link rel="stylesheet" href="">
	<style>
		table {
			width: 400px;
			margin: auto;
			margin-top: 200px;
			border-collapse: collapse;
			background-color: #B3ABAB;
			border-radius: 10px 10px 10px 10px;
			box-shadow: 0px 0px 5px #5F5D56;
		}
		td {
			padding: 10px;
		}
		table input[type="submit"] {
			width: 85px;
    		height: 35px;
    		border-radius: 5px;
			border: none;
			font-weight: bold;
		}
		.ipu {
			width: 170px;
    		height: 25px;
		}
		.tit {
			width: 100px;
			text-align: center;
		}
		.ip {
			width: 30px;
		}
		b {
			color: white;
		}
		.td {
			background-color: black;
			border-radius: 10px 10px 0px 0px;
		}
	</style>
</head>
<body>
	<?php include("../admin/modules/config.php"); ?>
	<?php
		$email=$hoten=$matkhau=$diachi=$dienthoai="";
		$emailErr=$hotenErr=$matkhauErr=$diachiErr=$dienthoaiErr="";
		if (isset($_POST["btnDangki"])) {
			if (empty($_POST["email"])) {
				$emailErr="Bạn chưa nhập email!";
			}
			else {
				$email=$_POST["email"];
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      			$emailErr = "email sai"; 
	    		}
	    		else {
	    			$sql="select email from khachhang where email='$email'";
					$email=mysqli_query($conn,$sql);
					if (mysqli_num_rows($email)>0) {
						$emailErr="email này đã được đăng ký";
						$email="";
					}
	    		}
			}


			if (empty($_POST["hoten"])) {
				$hotenErr="Bạn chưa nhập tên!";
			}
			else{
				$hoten=$_POST["hoten"];
			}


			if (empty($_POST["matkhau"])) {
				$matkhauErr="Bạn chưa nhập mật khẩu!";
			}
			else{
				$matkhau=$_POST["matkhau"];
			}


			if (empty($_POST["diachi"])) {
				$diachiErr="Bạn chưa địa chỉ!";
			}
			else{
				$diachi=$_POST["diachi"];
			}


			if (empty($_POST["dienthoai"])) {
				$dienthoaiErr="Bạn chưa nhập số điện thoại!";
			}
			else{
				$dienthoai=$_POST["dienthoai"];
			}


			if (empty($emailErr)&&empty($hotenErr)&&empty($matkhauErr)&&empty($diachiErr)&&empty($dienthoaiErr)) {
				$sql="insert into khachhang(email,tenkhach,matkhau,diachi,dienthoai) values('$_POST[email]','$_POST[hoten]','$_POST[matkhau]','$_POST[diachi]','$_POST[dienthoai]')";
				mysqli_query($conn,$sql);
				echo "<script>alert('Đăng ký thành công.Vui lòng đăng nhập!')</script>";
				//header("location: ../dangnhap.php");
			}
		}
		else if(isset($_POST["boqua"])){
			header("location:../index.php");
		}
  	?>
  	<form method="POST">
		<div id="dk">
			<table id="tbl-Dangki">
				<tr>
					<td colspan="3" align="center" class="td"><b>Đăng ký</b></td>
				</tr>
				<tr>
					<td class="tit">Email:</td>
					<td>
						<input type="text" name="email" class="ipu" value="<?php echo $email; ?>">
					</td>
					<td>
						<span class="error"><?php echo $emailErr; ?></span>
					</td>
				</tr>
				<tr>
					<td class="tit">Mật khẩu:</td>
					<td><input type="password" class="ipu" name="matkhau"></td>
					<td>
						<span class="error"><?php echo $matkhauErr;  ?></span>
					</td>
				</tr>
				<tr>
					<td class="tit">Họ tên:</td>
					<td>
						<input type="text" name="hoten" class="ipu" value="<?php echo $hoten; ?>">
					</td>
					<td>
						<span class="error"><?php echo $hotenErr; ?></span>
					</td>
				</tr>
				<tr>
					<td class="tit">Địa chỉ</td>
					<td>
						<input type="text" name="diachi" class="ipu" value="<?php echo $diachi; ?>">
					</td>
					<td>
						<span class="error"><?php echo $diachiErr; ?></span>
					</td>
				</tr>
				<tr>
					<td class="tit">Số điện thoại:</td>
					<td>
						<input type="text" name="dienthoai" class="ipu" value="<?php echo $dienthoai; ?>">
					</td>
					<td>
						<span class="error"><?php echo $dienthoaiErr; ?></span>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="btnDangki" value="Đăng ký">
						<input type="submit" name="boqua" value="Bỏ qua">
					</td>
				</tr>
			</table> 
		</div>
	</form>
</body>
</html>