<div class="content-left">
	<?php 
		if(isset($_GET['ac'])){
			$ac=$_GET['ac'];
		}
		else{
			$ac="";
		}
		if($ac=="sua"){
			include("sua.php");
		}
		else if($ac=="chitiethoadonban"){
			include("chitiethoadonban.php");
		}
	 ?>
</div>
<div class="content-right">
	<div style="margin-top: 10px;margin-left: 2px;">
		<form action="" method="POST">
			<input type="text" name="txtmahdb" value="<?php if(isset($_POST['txtmahdb'])) echo $_POST['txtmahdb'] ?>" placeholder="nhập mã hóa đơn bán" style="width: 250px;height: 30px;">
			<input type="submit" name="submahdb" value="Tìm kiếm" style="width: 85px;height: 35px;">
		</form>
	</div>
	<?php 
		if(isset($_POST['submahdb'])){
			include("timkiemhdb.php");
		}
		else{
			include("lietke.php");
		}
	?>
</div>
<div class="clear"></div>