<?php 
	$num=10;
	if(isset($_GET['page'])) {
		$trang = $_GET['page'];
	}
	else {
		$trang=1;
	}
	$batdau=($trang-1)*$num;
	
	//if(isset($_POST['sapxep'])){
		$gia=$_POST['giatanggiam'];

		if($gia=="giamdan"){
			$sql="select * from sp order by gia desc limit $batdau, $num";
		}
		else if($gia=="tangdan"){
			$sql="select * from sp order by gia asc limit $batdau, $num";
		}
		// //$sql="select * from sp order by gia asc limit $batdau, $num";
		$sp=mysqli_query($conn,$sql);
		//echo $gia;
	//}

	//echo $giatanggiam;
	// if(isset($_POST['sapxep'])){
	// 	$giatangiam=$_POST['giatanggiam'];
	// 	echo "<script>alert('$giatanggiam')</script>";
	// 	//if($giatanggiam=="giamdan"){
	// 		$sql="select * from sp order by gia desc limit $batdau, $num";
	// 	//}
	// 	//else if($giatanggiam=="tangdan"){
	// 		//$sql="select * from sp order by gia asc limit $batdau, $num";
	// 	//}
	// 	// else{
	// 	// 	$sql="select * from sp order by id_sp desc limit $batdau, $num";
	// 	// }
	// 	$sp=mysqli_query($conn,$sql);
	// }
	
 ?>

<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">TẤT CẢ SẢN</p>
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
	<div class="clear"></div>
</div>
<?php 
	include("trang.php");
?>
