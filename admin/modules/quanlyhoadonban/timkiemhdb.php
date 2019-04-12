<?php
$txtmahdb = $_POST['txtmahdb'];
$sql = "select a.id_hdb, b.tenkhach, b.diachi, b.dienthoai, a.ngayban, a.tongtien, a.trangthai from hoadonban as a, khachhang as b where a.id_khachhang=b.id_khachhang and id_hdb like '%$txtmahdb%' order by a.id_hdb desc";
$hoadonban = mysqli_query($conn, $sql);
?>
<div class="website-traffic-ctn" style="width: 100%">
    <h2>ĐƠN ĐẶT HÀNG</h2>
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
            $i = 0;
            while ($dong_hoadonban = mysqli_fetch_array($hoadonban, MYSQLI_ASSOC)) {
                $i++;
                if (isset($_GET['id_hdb'])) {
                    $id_hdb = $_GET['id_hdb'];
                } else {
                    $id_hdb = "";
                }
                if ($id_hdb == $dong_hoadonban['id_hdb']) {

                    ?>
                    <tr class="doimaudong">
                        <td><?php echo $i; ?></td>
                        <td><?php echo $dong_hoadonban['id_hdb'] ?></td>
                        <td><?php echo $dong_hoadonban['ngayban'] ?></td>
                        <td><?php echo $dong_hoadonban['tenkhach'] ?></td>
                        <td><?php echo $dong_hoadonban['diachi'] ?></td>
                        <td><?php echo $dong_hoadonban['dienthoai'] ?></td>
                        <td><?php echo $dong_hoadonban['tongtien'] ?></td>
                        <td><?php echo $dong_hoadonban['trangthai'] ?></td>
                        <td>
                            <a href="../admin/index.php?quanly=quanlyhoadonban&ac=sua&id_hdb=<?php echo $dong_hoadonban['id_hdb'] ?>">
                                <i class="fa fa-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a onclick="return confirm('Bạn có thực sự muốn xóa không?');"
                               href="modules/quanlyhoadonban/xuly.php?xoahoadonban=hoadonban&id_hdb=<?php echo $dong_hoadonban['id_hdb'] ?>">
                                <i class="fa fa-eraser"></i>
                            </a>
                        </td>
                        <td>
                            <a href="../admin/index.php?quanly=quanlyhoadonban&ac=chitiethoadonban&id_hdb=<?php echo $dong_hoadonban['id_hdb'] ?>">Chi
                                tiết
                            </a>
                        </td>
                    </tr>
                    <?php
                } else {
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $dong_hoadonban['id_hdb'] ?></td>
                        <td><?php echo $dong_hoadonban['ngayban'] ?></td>
                        <td><?php echo $dong_hoadonban['tenkhach'] ?></td>
                        <td><?php echo $dong_hoadonban['diachi'] ?></td>
                        <td><?php echo $dong_hoadonban['dienthoai'] ?></td>
                        <td><?php echo $dong_hoadonban['tongtien'] ?></td>
                        <td><?php echo $dong_hoadonban['trangthai'] ?></td>
                        <td>
                            <a href="../admin/index.php?quanly=quanlyhoadonban&ac=sua&id_hdb=<?php echo $dong_hoadonban['id_hdb'] ?>">
                                <i class="fa fa-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a onclick="return confirm('Bạn có thực sự muốn xóa không?');"
                               href="modules/quanlyhoadonban/xuly.php?xoahoadonban=hoadonban&id_hdb=<?php echo $dong_hoadonban['id_hdb'] ?>">
                                <i class="fa fa-eraser"></i>
                            </a>
                        </td>
                        <td>
                            <a href="../admin/index.php?quanly=quanlyhoadonban&ac=chitiethoadonban&id_hdb=<?php echo $dong_hoadonban['id_hdb'] ?>">Chi
                                tiết</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>