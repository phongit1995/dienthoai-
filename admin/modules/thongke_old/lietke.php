<div class="thongke" style="padding-top: 10px">
	<div class="top5sp" style="">
		<!-- <a href="../admin/index.php?quanly=thongke&ac=top5sp">
			<h3>+Top 5 sản phẩm bán chạy nhất</h4>
		</a> -->
		<h3 style="margin-bottom: 10px;">+ Top 5 sản phẩm bán chạy nhất</h3>
		<form action="../admin/index.php?quanly=thongke&ac=top5sp" method="POST" enctype="multipart/form-data">
			Tháng <select name="thang" id="thang" class="inputt" value="<?php if(isset($_POST['thang'])) echo $_POST['thang'] ?>">
				<script>
					for (var i = 1; i <= 12 ; i++) {
						var month = document.createElement("option");
						var month1 = document.createTextNode(i);
						month.appendChild(month1);
						document.getElementById("thang").appendChild(month);
					}
				</script>
			</select>
			Năm <input type="text" id="txtNam" class="inputt" name="nam" value="<?php if(isset($_POST['nam'])) echo $_POST['nam'] ?>">
			<input type="submit" name="subtop5" value="Xem" class="butt"><br><br>
		</form>
	</div>
	<div class="top5sptheoquy">
		<form action="../admin/index.php?quanly=thongke&ac=top5sp" method="POST" enctype="multipart/form-data">
			Quý&nbsp;&nbsp;&nbsp;&nbsp;<select name="quy" id="quy" class="inputt" value="<?php if(isset($_POST['quy'])) echo $_POST['quy'] ?>">
					<option value="I">I</option>
					<option value="II">II</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>
				Năm <input type="text" id="txtNam" class="inputt" name="nam" value="<?php if(isset($_POST['nam'])) echo $_POST['nam'] ?>">
				<input type="submit" name="subtop5theoquy" value="Xem" class="butt"><br><br>
		</form>
		</div>
	<div class="top5sptheonam">
		<form action="../admin/index.php?quanly=thongke&ac=top5sp" method="POST" enctype="multipart/form-data">
			Năm <input type="text" id="txtNam" class="inputt" name="nam" value="<?php if(isset($_POST['nam'])) echo $_POST['nam'] ?>">
			<input type="submit" name="subtop5theonam" value="Xem" class="butt"><br><br>
		</form>
	</div>
	<div class="doanhthu">
		<h3 style="margin-bottom: 10px;">+ Doanh thu bán hàng</h3>
		<form action="../admin/index.php?quanly=thongke&ac=doanhthu" method="POST" enctype="multipart/form-data">
			Tháng <select name="thang" id="thang2" class="inputt" value="<?php if(isset($_POST['thang'])) echo $_POST['thang'] ?>">
				<script>
					for (var i = 1; i <= 12 ; i++) {
						var month = document.createElement("option");
						var month1 = document.createTextNode(i);
						month.appendChild(month1);
						document.getElementById("thang2").appendChild(month);
					}
				</script>
			</select>
			Năm <input type="text" id="txtNam" class="inputt" name="nam" value="<?php if(isset($_POST['nam'])) echo $_POST['nam'] ?>">
			<input type="submit" name="subdoanhthu" value="Xem" class="butt"><br><br>
		</form>
	</div>
</div>