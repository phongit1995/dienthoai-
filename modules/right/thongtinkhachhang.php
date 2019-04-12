<?php 
	if(isset($_GET['id_khachhang'])){
		$id_khachhang=$_GET['id_khachhang'];
	}
	else{
		$id_khachhang="";
	}
	$sql="select * from khachhang where id_khachhang='$id_khachhang'";
	$khachhang=mysqli_query($conn,$sql);
	$dong_khachhang=mysqli_fetch_array($khachhang,MYSQLI_ASSOC);
 ?>
<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">THÔNG TIN TÀI KHOẢN</p>
<div class="thongtinkhachhang">
	<table>
		<tr>
			<td width="150px">Email</td>
			<td><?php echo $dong_khachhang['email'] ?></td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td><?php echo $dong_khachhang['matkhau'] ?></td>
		</tr>
		<tr>
			<td>Họ tên</td>
			<td><?php echo $dong_khachhang['tenkhach'] ?></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td><?php echo $dong_khachhang['diachi'] ?></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td><?php echo $dong_khachhang['dienthoai'] ?></td>
		</tr>
	</table>
	<div style="float: right;"><a href="index.php?xem=doimatkhau&id_khachhang=<?php echo $dong_khachhang['id_khachhang'] ?>">Đổi mật khẩu</a></div>
	<div class="clear"></div>
</div>