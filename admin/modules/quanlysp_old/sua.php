<?php 
	include("modules/editor/editor1.php");
	if(isset($_GET['page'])) {
		$trang = $_GET['page'];
	}
	else {
		$trang=1;
	}
	if(isset($_GET['id_sp'])){
		$id_sp=$_GET['id_sp'];
	}
	else{
		$id_sp="";
	}
	$sql="select * from sp where id_sp='$id_sp'";
	$sp=mysqli_query($conn,$sql);
	$dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC);
?>
<form action="modules/quanlysp/xuly.php?id_sp=<?php echo $id_sp ?>&page=<?php echo $trang ?>" method="POST" enctype="multipart/form-data">
	<table width="95%" style="margin: auto;margin-top: 10px;">
		<tr>
			<td colspan="2">
				<div align="center"><h2 style="font-weight: bold;">Cập nhật sản phẩm</h2></div>
			</td>
		</tr>
		<tr>
			<td>Tên sp</td>
			<td><input type="text" name="tensp" value="<?php if(isset($dong_sp['tensp'])) echo $dong_sp['tensp'] ?>" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Giá</td>
			<td><input type="text" name="gia" value="<?php if(isset($dong_sp['gia'])) echo $dong_sp['gia'] ?>" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Bảo hành</td>
			<td><input type="text" name="baohanh" value="<?php if(isset($dong_sp['baohanh'])) echo $dong_sp['baohanh'] ?>" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Số lượng</td>
			<td><input type="text" name="soluong" value="<?php if(isset($dong_sp['soluong'])) echo $dong_sp['soluong'] ?>" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Hình ảnh</td>
			<td>
				<input type="file" name="hinhanh" value="" placeholder="" style="width: 250px; height: 30px">
				<img src="../<?php if(isset($dong_sp['hinhanh'])) echo $dong_sp['hinhanh'] ?>" alt="" width="80px" height="80px">
			</td>
		</tr>
		<tr>
			<td>Mô tả sp</td>
			<td>
				<textarea name="mota" cols="50" rows="40">
					<?php if(isset($dong_sp['mota'])) echo $dong_sp['mota'] ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>Loại sp</td>
			<td>
				<?php 
					$sql1="select * from loaisp";
					$loaisp=mysqli_query($conn,$sql1);
				 ?>
				<select name="id_loaisp" id="">
					<?php 
						while($dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC)){
							if($dong_sp['id_loaisp']==$dong_loaisp['id_loaisp']){
					?>
								<option value="<?php echo $dong_loaisp['id_loaisp'] ?>" selected="selected">
									<?php echo $dong_loaisp['tenloaisp'] ?>
								</option>
							<?php 

							}
							else{
					 		?>
								<option value="<?php echo $dong_loaisp['id_loaisp'] ?>">
									<?php echo $dong_loaisp['tenloaisp'] ?>
								</option>
					<?php 
							}
						}
					 ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td><input type="text" name="thutu" value="<?php if(isset($dong_sp['thutu'])) echo $dong_sp['thutu'] ?>" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="suasp" value="Cập nhật" style="width: 85px;height: 35px">
					<input type="submit" name="boqua" value="Bỏ qua" style="width: 85px;height: 35px">
				</div>
			</td>
		</tr>
	</table>
</form>