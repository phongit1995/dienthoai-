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
	<?php include("lietke.php"); ?>
</div>
<div class="clear"></div>