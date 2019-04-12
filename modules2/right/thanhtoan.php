<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">THANH TOÁN GIỎ HÀNG</p>

<?php 
	if(!isset($_SESSION['tenkhach'])){
		echo "<script>alert('Bạn vui lòng đăng nhập!')</script>";
		header("location:dangnhap.php");
	}
	if(isset($_POST['dathang'])){
		$thanhtien=0;
		foreach ($_SESSION as $name => $value){
			if($value>0){
				if(substr($name, 0, 7)=='giohang'){
					$id_sp=substr($name, 7, strlen($name-7));
					$sql="select * from sp where id_sp='$id_sp'";
					$sp=mysqli_query($conn,$sql);
					while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {

						$soluongspcu=$dong_sp['soluong'];
						$soluongspmoi=$soluongspcu-$value;

						$tongtien=$dong_sp['gia']*$value;
						
						// echo $dong_sp['tensp'].'@'.$dong_sp['gia'].'x'.$value.'='.$tongtien.'<a href="index.php?xem=giohang&cong='.$id_sp.'" title="">[+]</a><a href="index.php?xem=giohang&tru='.$id_sp.'" title="">[-]</a><a href="index.php?xem=giohang&xoa='.$id_sp.'" title="">[delete]</a><br><br><br>';
					}

				}
				if(isset($tongtien)){
					$thanhtien+=$tongtien;
				}
			}
		}
		$sql="insert into hoadonban(ngayban,id_khachhang,tongtien,trangthai) values(now(),$_SESSION[id_khachhang],$thanhtien,'Chưa thanh toán')";
		mysqli_query($conn,$sql);

		$sql1="select * from hoadonban order by id_hdb desc limit 1";
		$hdb=mysqli_query($conn,$sql1);
		$dong_hdb=mysqli_fetch_array($hdb,MYSQLI_ASSOC);
		$id_hdb=$dong_hdb['id_hdb'];
		foreach ($_SESSION as $name => $value){
			if($value>0){
				if(substr($name, 0, 7)=='giohang'){
					$id_sp=substr($name, 7, strlen($name-7));
					$sql="select * from sp where id_sp='$id_sp'";
					$sp=mysqli_query($conn,$sql);
					while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {
						$soluongspcu2=$dong_sp['soluong'];
						$soluongspmoi2=$soluongspcu2-$value;

						$tongtien=$dong_sp['gia']*$value;
						$sql2="insert into chitiethoadonban(id_hdb,id_sp,soluong,thanhtien) value($id_hdb,$id_sp,$value,$tongtien)";
						
						$sql3="update sp set soluong='$soluongspmoi2' where id_sp='$id_sp'";

						$sql4="delete from hoadonban where id_hdb='$id_hdb'";

						if($soluongspmoi2>0){
							
							mysqli_query($conn,$sql3);
							mysqli_query($conn,$sql2);
							header("location:index.php?xem=dathangthanhcong");
						}
						else{
							mysqli_query($conn,$sql4);
							echo "<script>alert('Số lượng sản phẩm $dong_sp[tensp] chỉ còn: $soluongspcu2')</script>";
							echo "<script>window.history.back()</script>";
						}
					}
				}
			}
		}
	}
 ?>
 <div class="dathang">
	 <form action="" method="POST">
	 	<table >
	 		<tr>
	 			<td class="title">Tên sp</td>
	 			<td class="title">Ảnh</td>
	 			<td class="title">Số lượng</td>
	 			<td class="title">Giá</td>
	 			<td class="title">Thành tiền</td>
	 		</tr>
	 		<?php 
	 			if(isset($_SESSION['tenkhach'])){
					$thanhtien2=0;
					foreach ($_SESSION as $name => $value){
						if($value>0){
							if(substr($name, 0, 7)=='giohang'){
								$id_sp=substr($name, 7);
								$sql="select * from sp where id_sp='$id_sp'";
								$sp=mysqli_query($conn,$sql);
								while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {
									$tongtien2=$dong_sp['gia']*$value;
										$thanhtien2+=$tongtien2;
	 		 ?>
	 		<tr>
	 			<td><?php echo $dong_sp['tensp'] ?></td>
	 			<td><img src="<?php echo $dong_sp['hinhanh'] ?>" alt="" style="width: 75px;height: 75px;"></td>
	 			<td><?php echo $value ?></td>
	 			<td><?php echo number_format($dong_sp['gia'],0,',','.') ?>₫</td>
	 			<td><?php echo number_format($tongtien2,0,',','.') ?>₫</td>
	 		</tr>
	 		<?php 
				 				}
							}
						}
					}
				}
				// else{
				// 	header("location:dangnhap.php");
				// }
	 		 ?>
	 		<tr>
	 			<td style="font-weight: bold;">Tổng tiền</td>
	 			<td style="padding-right: 0px" colspan="4"><span><?php echo number_format($thanhtien2,0,',','.') ?>₫</span></td>
	 		</tr>
	 		<tr>
	 			<td colspan="5">
	 				<input style="margin-left: 315px;width: 120px;height: 45px;border: none;color: #fff;background-color: #337ab7;border-color: #2e6da4;border-radius: 10px;" type="submit" name="dathang" value="ĐẶT HÀNG">
	 			</td>
	 		</tr>
	 	</table>
	 </form>
 </div>