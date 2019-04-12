<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">GIỎ HÀNG</p>
<?php 
	$_SESSION['gh']="giohang";
	//them
	if(isset($_GET['id_sp'])&&!empty($_GET['id_sp'])){
		$id_sp=$_GET['id_sp'];
		@$_SESSION['giohang'.$id_sp]+=1;
		header("location:index.php?xem=giohang");
	}

	//cong
	if(isset($_GET['cong'])){
		$_SESSION['giohang'.$_GET['cong']]+=1;
		header("location:index.php?xem=giohang");
	}

	//tru
	if(isset($_GET['tru'])){
		$_SESSION['giohang'.$_GET['tru']]--;
		header("location:index.php?xem=giohang");
	}

	//xoa
	if(isset($_GET['xoa'])){
		$_SESSION['giohang'.$_GET['xoa']]=0;
		header("location:index.php?xem=giohang");
	}
	$thanhtien=0;
	foreach ($_SESSION as $name => $value){
		if($value>0){
			if(substr($name, 0, 7)=='giohang'){
				$id_sp=substr($name, 7);
				$sql="select * from sp where id_sp='$id_sp'";
				$sp=mysqli_query($conn,$sql);
				while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {
					$tongtien=$dong_sp['gia']*$value;
?>
<div class="giohang">
	<div class="left">
		<img src="<?php echo $dong_sp['hinhanh'] ?>" alt="" style="width: 75px;height: 75px;padding-bottom: 10px;"><br>
		<span><a href="index.php?xem=giohang&xoa=<?php echo $id_sp ?>">Xóa</a></span>
	</div>
	<div class="right">
		<div class="right-left">
			<p><?php echo $dong_sp['tensp'] ?></p>
		</div>
		<div class="right-right">
			<p><?php echo number_format($dong_sp['gia'],0,',','.') ?>₫</p>
			<div class="chonsoluong" >
				<a href="index.php?xem=giohang&tru=<?php echo $id_sp ?>">
					<div class="soluong">
						-
					</div>
				</a>
					<div class="soluong" style="border-right: none;border-left: none;">
						<?php echo $value ?>
					</div>
				<a href="index.php?xem=giohang&cong=<?php echo $id_sp ?>">
					<div class="soluong">
						+
					</div>
				</a>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
<?php 
						if(isset($tongtien)){
							$thanhtien+=$tongtien;
						}
					}

				}
				
			}

		}
		if($thanhtien==0){
		echo "<div style='text-align:center;'><h2>Không có hàng nào trong giỏ hàng.</h2></div>";
		}
		else {
		
?>
			<div class="tongtien">
					Tổng tiền:<span><?php echo number_format($thanhtien,0,',','.') ?>₫</span>
			</div>
			<div class="thanhtoan" style="float: right;padding: 50px 5px 0px 0px;">
 					<a href="index.php?xem=thanhtoan">Thanh toán</a>
			</div>;
<?php
		}
 ?>
 <?php ob_end_flush(); ?>