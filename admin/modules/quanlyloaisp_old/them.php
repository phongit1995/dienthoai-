<form action="modules/quanlyloaisp/xuly.php" method="POST" enctype="multipart/form-data">
	<table width="90%" style="margin: auto;margin-top: 10px">
		<tr>
			<td colspan="2">
				<div align="center"><h2 style="font-weight: bold;">Thêm loại sản phẩm</h2></div>
			</td>
		</tr>
		<tr>
			<td>Tên loại sp</td>
			<td><input type="text" name="tenloaisp" id="tenloaisp" value="" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td>Thứ tự</td>
			<td><input type="text" name="thutu" id="thutu" value="" placeholder="" style="width: 250px; height: 30px"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="themloaisp" value="Thêm" onclick="check();" style="width: 85px;height: 35px">
					<input type="submit" name="boqua" value="Bỏ qua" style="width: 85px;height: 35px">
				</div>
			</td>
		</tr>
	</table>
</form>
<!-- <script type="text/javascript">
	function check(){
		var tenloaisp=document.getElementById("tenloaisp").value;
		var thutu=document.getElementById("thutu").value;
		if(tenloaisp==""){
			return confirm("Hãy nhập tên loại sản phẩm");
		}
		if(thutu==""){
			alert("Hãy nhập thứ tự");
			return;
		}
	}
</script> -->