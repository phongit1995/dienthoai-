<!-- <?php 
	session_start();
	if(!isset($_SESSION['user'])) {
		include("modules/notlogin.php");
	}
	else{
		include("taikhoan.php");
	}
 ?> -->
<div class="menu">
	<ul>
		<li><a href="index.php">Trang chủ</a></li>
		<li><a href="index.php?xem=giohang">Giỏ hàng</a></li>
		<!-- <li><a href="#">Sản phẩm</a></li> -->
		<li><a href="index.php?xem=huongdanmuahang">Hướng dẫn</a></li>
		
		<li><a href="index.php?xem=lienhe">Liên hệ</a></li>

		<?php 
			if(!isset($_SESSION['tenkhach'])) {
				include("modules/chuadangnhap.php");
			}
			else{
				include("modules/taikhoan.php");
			}
 		?>
	</ul>
	
</div>