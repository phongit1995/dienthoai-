<script>
	(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=448415815535353";
            fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
</script>
<?php 
	if(isset($_GET['id'])){
		$id_sp=$_GET['id'];
	}
	else{
		$id_sp="";
	}
	$sql="select * from sp where id_sp=$id_sp";
	$sp=mysqli_query($conn,$sql);
	$dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC);
 ?>
<p style ="text-align: center;padding:10px;  background-color: #eaeaea;color: white">THÔNG TIN SẢN PHẨM</p>
<div class="chitietsp">
	<table>
		<tr>
			<td colspan="2" style="height: 32px;text-align: center;"><h2>Thông tin sản phẩm</h2></td>
		</tr>
		<tr>
			<td rowspan ="2" style="height: 400px; text-align: center;">
				<img src ="<?php echo $dong_sp['hinhanh'] ?>" alt="" style="width: 300px;height: 300px;">
				<a href="index.php?xem=giohang&id_sp=<?php echo $dong_sp['id_sp'] ?>">
					<p><img src ="images/shop-cart-down-icon-1.png" alt="" style="width: 70px;height: 70px;float: right;margin-top: -335px;margin-right: 52px;"></p>
				</a>
			</td>
			<td style="width: 178px;height: 196px;">Tên sp:<span style="color: #ffffff;font-weight: bold;"><?php echo $dong_sp['tensp'] ?></span></td>
		</tr>
		<tr>
			<td>
				Giá sp:<span style="color: #ffffff;font-weight: bold;"><?php echo number_format($dong_sp['gia'],0,',','.') ?>₫</span><br><br>
				Bảo hành:<span style="color: #ffffff;font-weight: bold;"><?php echo $dong_sp['baohanh'] ?></span>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="height: 32px;text-align: center;">Thông số kỹ thuật</td>
		</tr>
		<tr>
			<td colspan="2" style="padding-left: 20px;"><?php echo $dong_sp['mota'] ?></td>
		</tr>
	</table>
	<div class="fb-like" data-href="http://localhost:3030/doan/index.php?xem=chitietsanpham&id=<?php echo $_GET['id']  ?>&id_loaisp=<?php echo $_GET['id_loaisp'] ?>" data-send="true" data-layout="button_count" data-show-faces="true" data-action="recommend" data-mobile="true" style="padding: 10px 0px 10px 20px">
	</div>
	<div class="fb-comments" data-href="http://localhost:3030/doan/index.php?xem=chitietsanpham&id=<?php echo $_GET['id']  ?>&id_loaisp=<?php echo $_GET['id_loaisp'] ?>" data-width="773" data-numposts="5" style="padding-left: 10px;">
	</div>
</div>

<p style="text-align: center;margin-top:10px; padding: 10px; background-color: #eaeaea;color: white">GỢI Ý SẢN PHẨM</p>
<?php 
	$gialon=$dong_sp['gia']+1500000;
	$gianho=$dong_sp['gia']-1500000;
	if(isset($_GET['id_loaisp'])){
		$id_loaisp=$_GET['id_loaisp'];
	}
	else{
		$id_loaisp="";
	}
	$sql="select * from sp where id_sp not in ($_GET[id]) and gia>='$gianho' and gia<='$gialon' order by id_sp limit 4";
	$sp=mysqli_query($conn,$sql);
 ?>
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