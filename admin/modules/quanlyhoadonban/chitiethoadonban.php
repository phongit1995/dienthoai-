<?php 
	if(isset($_GET['id_hdb'])){
		$id_hdb=$_GET['id_hdb'];
	}
	else{
		$id_hdb="";
	}
	$sql="select c.id_hdb, a.hinhanh, a.tensp, c.soluong, c.thanhtien from sp as a,hoadonban as b, chitiethoadonban as c where c.id_hdb='$id_hdb' and a.id_sp=c.id_sp and b.id_hdb=c.id_hdb";
	$chitiethoadonban=mysqli_query($conn,$sql);
 ?>
<div class="website-traffic-ctn" style="width: 100%">
    <h2>Chi tiết đơn đặt hàng</h2>
    <div>
        <table id="danh-sach-loai-san-pham" class="table table-striped dataTable" role="grid" aria-describedby="data-table-basic_info">
            <thead>
            <tr>
                <td class="tt">STT</td>
                <td class="tt">Mã hóa đơn</td>
                <td class="tt">Hình ảnh</td>
                <td class="tt" style="width: 159px;">Tên sp</td>
                <td class="tt">Số lượng</td>
                <td class="tt">Thành tiền</td>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
            while ($dong_chitiethoadonban=mysqli_fetch_array($chitiethoadonban,MYSQLI_ASSOC)) {
                $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $dong_chitiethoadonban['id_hdb'] ?></td>
                    <td>
                        <img src="../<?php echo $dong_chitiethoadonban['hinhanh']; ?>" alt="" style="width: 50px;height: 50px;">
                    </td>
                    <td><?php echo $dong_chitiethoadonban['tensp'] ?></td>
                    <td><?php echo $dong_chitiethoadonban['soluong']; ?></td>
                    <td><?php echo $dong_chitiethoadonban['thanhtien'] ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>