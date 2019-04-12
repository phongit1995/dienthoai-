<?php 
	if(isset($_POST['timkiems'])){
		$timkiemt=$_POST['timkiemt'];
		$sql="select * from sp where tensp like '%$timkiemt%'";
		$sp=mysqli_query($conn,$sql);
	}
 ?>
 <p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">SẢN PHẨM TÌM THẤY</p>
<div class="tatcasanpham">
	<?php 
		if($count=mysqli_num_rows($sp)==0){
	?>
		<p>Không tìm thấy sản phẩm nào</p>
	<?php  
		}
		else {
	 ?>
	<ul>
		<?php 
			while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {
			
	 	?>
		<li>
			<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>">
				<img src="<?php echo $dong_sp['hinhanh'] ?>" style="width: 125px;height: 125px;" alt="">
				<p class="tensp"><?php echo $dong_sp['tensp'] ?></p>
				Giá: <span style="color: #F00;font-weight: bold;"><?php echo number_format($dong_sp['gia'],0,',','.') ?>₫</span>
			</a>
		</li>
		<?php 
			}
	 	?>
	</ul>
	<?php 
		}
	 ?>
</div>