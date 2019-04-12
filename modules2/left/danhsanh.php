<?php 
	$sql="select * from loaisp";
	$loaisp=mysqli_query($conn,$sql);
 ?>
 <div>
 	<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">TÌM KIẾM</p>
	<form action ="index.php" method="POST" enctype="multipart/form-data">
		<div class ="timkiem" style="margin-top: 5px;">
			<input type ="text" name="timkiemt" value="<?php if(isset($_POST['timkiemt'])) echo $_POST['timkiemt'] ?>" placeholder="nhập tên sản phẩm" style="width: 98%;height: 35px;border-radius: 5px;box-shadow: 0px 0px 5px #5F5D56;margin-top: 5px;border:none;"><br>
			<input type ="submit" name="timkiems" value="Tìm kiếm" style="border: none;width: 90px;height: 35px;border-radius: 5px;background-color: #337ab7;color: #ffffff;margin: 20px 0px 0px 49px">
		</div>
	</form>

	<p style="text-align: center;padding:10px; margin-top: 10px; background-color: #eaeaea;color: red">DANH MỤC SẢN PHẨM</p>
	<div class="loaisanpham">
		<?php 
			while ($dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC)) {
				
		 ?>
		<ul>
			<li><a href="index.php?xem=chitietloaisanpham&id_loaisp=<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></a></li>
		</ul>
		<?php 
			}
		 ?>
	</div>
	
	<p style="text-align: center;padding:10px; margin-top: 10px; background-color: #eaeaea;color: red">GIÁ</p>
	<div class="mucgia" style="text-align: center;">
		<a href="index.php?xem=timkiemsptheogia&gia=duoi5trieu"><p>Dưới <b>5</b> triệu</p></a>
		<a href="index.php?xem=timkiemsptheogia&gia=tu5den7trieu"><p>Từ <b>5</b> - <b>7</b> triệu</p></a>
		<a href="index.php?xem=timkiemsptheogia&gia=tu7den10trieu"><p>Từ <b>7</b> - <b>10</b> triệu</p></a>
		<a href="index.php?xem=timkiemsptheogia&gia=tren10trieu"><p>Trên <b>10</b> triệu</p></a>
	</div>

	<p style ="text-align: center;padding:10px; margin-top: 10px; background-color: #eaeaea;color: red">SẮP XẾP</p>
	<div class="sapxepgiasp">
		<form action ="" method="POST" style="padding-left: 24px;padding-top: 5px;" enctype="multipart/form-data">
			<table>
				<tr>
					<td>
						<?php 
							if(isset($_POST['giatanggiam'])){
								$giatanggiam=$_POST['giatanggiam'];
							}
							else{
								$giatanggiam="";
							}
							if($giatanggiam=="giamdan"){
						 ?>
						<select name="giatanggiam" id="">
							<option value="giamdan" selected="selected">Giá:Từ cao đến thấp</option>
							<option value="tangdan">Giá:Từ thấp đến cao</option>
						</select>
						<?php 
							}
							else{
						 ?>
						 <select name="giatanggiam" id="">
							<option value="giamdan">Giá:Từ cao đến thấp</option>
							<option value="tangdan" selected="selected">Giá:Từ thấp đến cao</option>
						</select>
						 <?php 
						 	}
						  ?>
					</td>
				</tr>
				<tr>
					<td>
						<input type ="submit" name="sapxep" value="Sắp xếp" style="border: none;width: 90px;height: 35px;border-radius: 5px;background-color: #337ab7;color: #ffffff;margin: 20px 0px 0px 30px">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>