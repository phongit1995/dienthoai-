<?php 
	if(isset($_GET['gia'])){
		$gia=$_GET['gia'];	
	}
	else {
		$gia="";
	}
	if($gia=="duoi5trieu"){
		$sql="select * from sp where gia<'5000000'";
	}
	elseif ($gia=="tu5den7trieu") {
		$sql= "select * from sp where gia>='5000000' and gia<'7000000'";
	}
	elseif($gia=="tu7den10trieu"){
		$sql= "select * from sp where gia>='7000000' and gia<='10000000'";
	}
	elseif ($gia=="tren10trieu") {
		$sql= "select * from sp where gia>'10000000'";
	}
	$sp=mysqli_query($conn,$sql);
 ?>
 <p style="text-align: center;margin-top:10px; padding: 10px; background-color: #eaeaea;color: red">SẢN PHẨM TÌM THẤY</p>
<div class="tatcasanpham">
	<ul>
		<?php 
			while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {
			
	 	?>
		<li>
			<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">
				<img src="<?php echo $dong_sp['hinhanh'] ?>" style="width: 125px;height: 125px;" alt="">
				<p class="tensp"><?php echo $dong_sp['tensp'] ?></p>
				Giá: <span style="color: #F00;font-weight: bold;"><?php echo $dong_sp['gia'] ?>₫</span>
			</a>
		</li>
		<?php 
			}
	 	?>
	</ul>
</div>