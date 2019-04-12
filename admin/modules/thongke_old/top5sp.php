<?php 
	if(isset($_POST['subtop5'])){
		if(isset($_POST['thang'])){
			$thang=$_POST['thang'];
		}
		if(empty($_POST['nam'])){
			$errnam="Hãy nhập năm!";
		}
		else{
			$nam=$_POST['nam'];
		}
		if(empty($errnam)){
			$sql="select a.tensp, sum(b.soluong) as soluong, a.id_sp, a.hinhanh, a.gia from sp as a, chitiethoadonban as b,hoadonban as c where a.id_sp=b.id_sp and b.id_hdb=c.id_hdb and month(c.ngayban)='$thang' and year(c.ngayban)='$nam' group by b.id_sp order by sum(b.soluong) desc limit 5";
			$sp=mysqli_query($conn,$sql);
		}
		else{
			echo "<script>alert('Bạn phải nhập đủ thông tin');</script>";
			echo "<script>window.history.back()</script>";
		}
	}
	if(isset($_POST['subtop5theoquy'])){
		if(isset($_POST['quy'])){
			$quy=$_POST['quy'];
		}

		if(empty($_POST['nam'])){
			$errnam="Hãy nhập năm!";
		}
		else{
			$nam=$_POST['nam'];
		}
		if($quy=="I"){
			$sql="select a.tensp, sum(b.soluong) as soluong, a.id_sp, a.hinhanh, a.gia from sp as a, chitiethoadonban as b,hoadonban as c where a.id_sp=b.id_sp and b.id_hdb=c.id_hdb and (month(c.ngayban)='1' or month(c.ngayban)='2' or month(c.ngayban)='3') and year(c.ngayban)='$nam' group by b.id_sp order by sum(b.soluong) desc limit 5";
		}
		elseif ($quy=="III") {
			$sql="select a.tensp, sum(b.soluong) as soluong, a.id_sp, a.hinhanh, a.gia from sp as a, chitiethoadonban as b,hoadonban as c where a.id_sp=b.id_sp and b.id_hdb=c.id_hdb and (month(c.ngayban)='7' or month(c.ngayban)='8' or month(c.ngayban)='9') and year(c.ngayban)='$nam' group by b.id_sp order by sum(b.soluong) desc limit 5";
		}
		elseif ($quy=="IV") {
			$sql="select a.tensp, sum(b.soluong) as soluong, a.id_sp, a.hinhanh, a.gia from sp as a, chitiethoadonban as b,hoadonban as c where a.id_sp=b.id_sp and b.id_hdb=c.id_hdb and (month(c.ngayban)='10' or month(c.ngayban)='11' or month(c.ngayban)='12') and year(c.ngayban)='$nam' group by b.id_sp order by sum(b.soluong) desc limit 5";
		}
		elseif ($quy="II") {
			$sql="select a.tensp, sum(b.soluong) as soluong, a.id_sp, a.hinhanh, a.gia from sp as a, chitiethoadonban as b,hoadonban as c where a.id_sp=b.id_sp and b.id_hdb=c.id_hdb and (month(c.ngayban)='4' or month(c.ngayban)='5' or month(c.ngayban)='6') and year(c.ngayban)='$nam' group by b.id_sp order by sum(b.soluong) desc limit 5";
		}
		if(empty($errnam)){
			$sp=mysqli_query($conn,$sql);
		}
		else{
			echo "<script>alert('Bạn phải nhập đủ thông tin');</script>";
			echo "<script>window.history.back()</script>";
		}
	}


	if(isset($_POST['subtop5theonam'])){
		if(empty($_POST['nam'])){
			$errnam="Hãy nhập năm!";
		}
		else{
			$nam=$_POST['nam'];
		}
		if(empty($errnam)){
			$sql="select a.tensp, sum(b.soluong) as soluong, a.id_sp, a.hinhanh, a.gia from sp as a, chitiethoadonban as b,hoadonban as c where a.id_sp=b.id_sp and b.id_hdb=c.id_hdb and year(c.ngayban)='$nam' group by b.id_sp order by sum(b.soluong) desc limit 5";
			$sp=mysqli_query($conn,$sql);
		}
		else{
			echo "<script>alert('Bạn phải nhập đủ thông tin');</script>";
			echo "<script>window.history.back()</script>";
		}
	}
 ?>
<h2 style="text-align: center;padding-top: 10px;">TOP 5 SẢN PHẨM BÁN CHẠY</h2>
<table style="width: 99%;text-align: center;">
	<tr>
		<td class="tt">STT</td>
		<td class="tt">Tên sản phẩm</td>
		<td class="tt">Hình ảnh</td>
		<td class="tt" style="width: 159px;">Giá</td>
		<td class="tt">Số lượng</td>
	</tr>
	<?php 
		$i=0;
		while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {
			$i++;
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong_sp['tensp'] ?></td>
		<td>
			<img src="../<?php echo $dong_sp['hinhanh']; ?>" alt="" style="width: 50px;height: 50px;">
		</td>
		<td><?php echo $dong_sp['gia'] ?></td>
		<td><?php echo $dong_sp['soluong']; ?></td>
	</tr>
	<?php
		}
	 ?>
</table>