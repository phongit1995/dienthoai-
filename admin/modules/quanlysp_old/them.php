<?php include("modules/editor/editor1.php") ?>
<form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
	<table width="95%" style="margin: auto;margin-top: 10px;">
		<tr>
			<td colspan="2">
				<div align="center"><h2 style="font-weight: bold;">Thêm sản phẩm</h2></div>
			</td>
		</tr>
		<tr>
			<td>Tên sp</td>
			<td><input type="text" name="tensp" value="" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Giá</td>
			<td><input type="text" name="gia" value="" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Bảo hành</td>
			<td><input type="text" name="baohanh" value="" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Số lượng</td>
			<td><input type="text" name="soluong" value="" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Hình ảnh</td>
			<td><input type="file" name="hinhanh" value="" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Mô tả sp</td>
			<td>
				<textarea name="mota" cols="40" rows="40">
					
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Loại sp</td>
			<?php 
				$sql="select * from loaisp";
				$loaisp=mysqli_query($conn,$sql);
		 	?>
			<td>
				<select name="id_loaisp" id="">
					<?php 
						while($dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC)){
					 ?>
					<option value="<?php echo $dong_loaisp['id_loaisp'] ?>">
						<?php echo $dong_loaisp['tenloaisp'] ?>
					</option>
					<?php 
						}
		 			?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td><input type="text" name="thutu" value="" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="themsp" value="Thêm" style="width: 85px;height: 35px">
					<input type="submit" name="boqua" value="Bỏ qua" style="width: 85px;height: 35px">
				</div>
			</td>
		</tr>
	</table>
</form>