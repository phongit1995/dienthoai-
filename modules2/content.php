<div class="content">
	<div class="content-left">
		<?php include("modules/left/danhsanh.php") ?>
	</div>
	<div class="content-right">
		<?php
			if(isset($_GET['xem'])){
				$values=$_GET['xem'];
			}
			else $values="";
			if($values=="chitietloaisanpham")
				include("modules/right/chitietloaisanpham.php");
			elseif ($values=="chitietsanpham") {
				include("modules/right/chitietsanpham.php");
			}
			elseif ($values=="giohang") {
				include("modules/right/giohang.php");
			}
			// elseif ($values=="demogiohang") {
			// 	include("modules/right/demogiohang.php");
			// }
			elseif ($values=="thanhtoan") {
				include("modules/right/thanhtoan.php");
			}
			elseif ($values=="dathangthanhcong") {
				include("modules/right/dathangthanhcong.php");
			}
			elseif (isset($_POST['timkiems'])) {
				include("modules/right/timkiem.php");
			}
			elseif (isset($_POST['sapxep'])) {
				include("modules/right/tatcasanpham.php");
			}
			elseif ($values=="timkiemsptheogia") {
				include("modules/right/timkiemsptheogia.php");
			}
			elseif ($values=="huongdanmuahang") {
				include("modules/right/huongdanmuahang.php");
			}
			elseif ($values=="lienhe") {
				include("modules/right/lienhe.php");
			}
			elseif ($values=="thongtinkhachhang") {
				include("modules/right/thongtinkhachhang.php");
			}
			elseif ($values=="doimatkhau") {
				include("modules/right/doimatkhau.php");
			}
			else include("modules/right/tatcasanpham.php");
		 ?>
	</div>
</div>
<div class="clear"></div>