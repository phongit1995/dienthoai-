<div class="content">
	<?php
        if(isset($_GET['ac']) && $_GET['ac'] == "logout") {
            echo "<script>location.href='/admin/dangnhap.php'</script>";
        }

		if(isset($_GET['quanly'])){
			$values=$_GET['quanly'];
		}
		else{
			$values="";
		}
		if($values=="quanlyloaisp"){
			include("modules/quanlyloaisp/main.php");
		}
		elseif ($values=="quanlysp") {
			include("modules/quanlysp/main.php");
		}
		elseif ($values=="quanlyhoadonban") {
			include("modules/quanlyhoadonban/main.php");
		}
		elseif ($values=="thongke") {
			include("modules/thongke/main.php");
		} else {
		    include("modules/dashboard.php");
        }
	 ?>
</div>
<div class="clear"></div>