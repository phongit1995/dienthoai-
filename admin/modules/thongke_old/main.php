<div class="content-left">
	<?php 
		if(isset($_GET['ac']))
			$ac=$_GET['ac'];
		else{
			$ac="";
		}
		if($ac=="top5sp"){
			include("top5sp.php");
		}
		elseif ($ac=="doanhthu") {
			include("doanhthu.php");
		}
	 ?>
</div>
<div class="content-right">
	<?php include("lietke.php"); ?>
</div>
<div class="clear"></div>