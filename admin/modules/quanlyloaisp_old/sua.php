<?php 
	if(isset($_GET['id_loaisp'])){
		$id_loaisp=$_GET['id_loaisp'];
		$sql="select * from loaisp where id_loaisp='$id_loaisp'";
		$loaisp=mysqli_query($conn,$sql);
		$dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC);
	}
 ?>
 <form action="modules/quanlyloaisp/xuly.php?id_loaisp=<?php echo $id_loaisp ?>" method="POST" enctype="multipart/form-data">
	<table width="90%" style="margin: auto;margin-top: 10px">
		<tr>
			<td colspan="2">
				<div align="center"><h2 style="font-weight: bold;">Cập nhật loại sản phẩm</h2></div>
			</td>
		</tr>
		<tr>
			<td>Tên loại sp</td>
			<td><input type="text" name="tenloaisp" value="<?php if(isset($dong_loaisp['tenloaisp'])) echo $dong_loaisp['tenloaisp'] ?>" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td><input type="text" name="thutu" value="<?php if(isset($dong_loaisp['thutu'])) echo $dong_loaisp['thutu'] ?>" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="sualoaisp" value="Cập nhật" style="width: 85px;height: 35px">
					<input type="submit" name="boqua" value="Bỏ qua" style="width: 85px;height: 35px">
				</div>
			</td>
		</tr>
	</table>
</form>