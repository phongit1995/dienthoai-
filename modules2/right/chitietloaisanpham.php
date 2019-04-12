<?php 
	if(isset($_GET['id_loaisp'])){
		$id_loaisp=$_GET['id_loaisp'];
	}
	else{
		$id_loaisp="";
	}
	$sql="select * from sp where id_loaisp='$id_loaisp'";
	$sp=mysqli_query($conn,$sql);
 ?>
 <?php 
 	$sql1="select * from loaisp where id_loaisp='$id_loaisp'";
 	$loaisp=mysqli_query($conn,$sql1);
 	$dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC);
  ?>
 <p style="text-align: center;padding:10px;  background-color: #eaeaea;color: white;text-transform: uppercase;"><?php echo $dong_loaisp['tenloaisp'] ?></p>
<div class="tatcasanpham">
	<ul>
		<?php 
			while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {
			
	 	?>
		<li>
			<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">
				<img src="<?php echo $dong_sp['hinhanh'] ?>" style="width: 125px;height: 125px;" alt="">
				<p class="tensp"><?php echo $dong_sp['tensp'] ?></p>
				Giá: <span style="color: #F00;font-weight: bold;"><?php echo number_format($dong_sp['gia'],0,',','.') ?>₫</span>
			</a>
		</li>
		<?php 
			}
	 	?>
	</ul>
</div>