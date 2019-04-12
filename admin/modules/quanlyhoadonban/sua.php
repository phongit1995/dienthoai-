<?php
if (isset($_GET['id_hdb'])) {
    $id_hdb = $_GET['id_hdb'];
} else {
    $id_hdb = "";
}
$sql = "select * from hoadonban where id_hdb='$id_hdb'";
$hoadonban = mysqli_query($conn, $sql);
$dong_hoadonban = mysqli_fetch_array($hoadonban, MYSQLI_ASSOC);
?>
<div class="website-traffic-ctn" style="width: 100%">
    <h2>CẬP NHẬT HÓA ĐƠN</h2>
    <div>
        <form action="modules/quanlyhoadonban/xuly.php?id_hdb=<?php echo $dong_hoadonban['id_hdb'] ?>" method="POST"
              enctype="multipart/form-data">
            <div class="form-group">
                <label>Trạng thái</label>
                <div class="nk-int-st">
                    <?php
                    if ($dong_hoadonban['trangthai'] == "Chưa thanh toán") {
                        ?>
                        <select name="trangthai" class="form-control" id="">
                            <option value="Chưa thanh toán" selected="selected">Chưa thanh toán</option>
                            <option value="Đã thanh toán">Đã thanh toán</option>
                        </select>
                        <?php
                    } else {
                        ?>
                        <select name="trangthai" class="form-control" id="" style="height: 30px;">
                            <option value="Chưa thanh toán">Chưa thanh toán</option>
                            <option value="Đã thanh toán" selected="selected">Đã thanh toán</option>
                        </select>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <a href="/admin/index.php" class="btn btn-default notika-btn-default waves-effect pull-right"
                   style="margin-left: 10px">Hủy</a>
                <button type="submit" name="suahoadonban"
                        class="btn btn-success notika-btn-success waves-effect pull-right">Sửa
                </button>
            </div>
        </form>
    </div>
</div>
