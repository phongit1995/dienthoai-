<div class="content-left">
	<?php 
		if(isset($_GET['ac']))
			$ac=$_GET['ac'];
		else{
			$ac="";
		}
		if($ac=="them"){
			include("them.php");
		}
		elseif ($ac=="sua") {
			include("sua.php");
		}
	 ?>
</div>
<div class="content-right">
	<div style="margin-top: 10px;margin-left: 17px;">
		<form action="" method="POST">
			<input type="text" name="txttensp" value="<?php if(isset($_POST['txttensp'])) echo $_POST['txttensp'] ?>" placeholder="nhập tên sản phẩm" style="width: 250px;height: 30px;">
			<input type="submit" name="subtensp" value="Tìm kiếm" style="width: 85px;height: 35px;">
		</form>
	</div>
	<?php 
		if(isset($_POST['subtensp'])){
			include("timkiemsp.php");
		}
		else{
			include("lietke.php");
		}
	?>
</div>
<div class="clear"></div>