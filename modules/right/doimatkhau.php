<?php 
	$sql="select * from khachhang where id_khachhang='$_GET[id_khachhang]'";
	$khachhang=mysqli_query($conn,$sql);
	$dong_khachhang=mysqli_fetch_array($khachhang,MYSQLI_ASSOC);
	$matkhau=$dong_khachhang['matkhau'];
	$mkcu=$mkmoi1=$mkmoi2="";
	$errmk1=$errmk2=$errmkcu=$errmkmoi1=$errmkmoi2=$doimatkhau="";
	if(isset($_POST['doimatkhau'])){
		if(empty($_POST['mkcu'])){
			$errmkcu="bạn chưa nhập mật khẩu cũ";
		}
		else{
			$mkcu=$_POST['mkcu'];
		}
		if(empty($_POST['mkmoi1'])){
			$errmkmoi1="bạn chưa nhập mật khẩu mới";
		}
		else{
			$mkmoi1=$_POST['mkmoi1'];
		}
		if(empty($_POST['mkmoi2'])){
			$errmkmoi2="bạn chưa nhập lại mật khẩu mới";
		}
		else{
			$mkmoi2=$_POST['mkmoi2'];
		}
		if($matkhau!=$mkcu){
			$errmk1="Bạn nhập sai mật khẩu cũ.Hãy nhập lại!";
		}
		if($mkmoi1!=$mkmoi2){
			$errmk2="Nhập lại mật khẩu mới chưa đúng.Hãy nhập lai!";
		}
		if(empty($errmk1)&&empty($errmk2)&&empty($errmkcu)&&empty($errmkmoi1)&&empty($errmkmoi2)){
			$sql="update khachhang set matkhau='$mkmoi1' where id_khachhang='$_GET[id_khachhang]'";
			mysqli_query($conn,$sql);
			$doimatkhau="Bạn đã đổi mật khẩu thành công!";
		}
	}
 ?>
<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">ĐỔI MẬT KHẢU</p>
<div class="doimatkhau">
	<form action="" method="POST">
		<table>
			<tr>
				<td width="150px">Nhập mật khẩu cũ</td>
				<td>
					<input type="password" name="mkcu" value="<?php echo $mkcu ?>" placeholder="" class="inp">
					<span style="color: red"><?php echo $errmkcu ?></span>
				</td>
			</tr>
			<tr>
				<td>Nhập mật khẩu mới</td>
				<td>
					<input type="password" name="mkmoi1" value="<?php echo $mkmoi1 ?>" placeholder="" class="inp">
					<span style="color: red"><?php echo $errmkmoi1 ?></span>
				</td>
			</tr>
			<tr>
				<td>Nhập lại mật khẩu mới</td>
				<td>
					<input type="password" name="mkmoi2" value="<?php echo $mkmoi2 ?>" placeholder="" class="inp">
					<span style="color: red"><?php echo $errmkmoi2 ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div>
						<input type="submit" name="doimatkhau" value="Đổi mật khẩu" class="butt">
						<span style="color: red"><?php echo $errmk1 ?></span>
						<span style="color: red"><?php echo $errmk2 ?></span>
						<br><span style="color: red"><?php echo $doimatkhau ?></span>
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>