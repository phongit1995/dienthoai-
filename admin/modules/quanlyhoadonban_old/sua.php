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
<h1 style="text-align: center;padding-top: 10px">CẬP NHẬT HÓA ĐƠN</h1>
<form action="modules/quanlyhoadonban/xuly.php?id_hdb=<?php echo $dong_hoadonban['id_hdb'] ?>" method="POST"
      enctype="multipart/form-data">
    <table width="90%" style="margin: auto;margin-top: 10px">
        <tr>
            <td>Trạng thái</td>
            <td>
                <?php
                if ($dong_hoadonban['trangthai'] == "Chưa thanh toán") {
                    ?>
                    <select name="trangthai" id="" style="height: 30px;">
                        <option value="Chưa thanh toán" selected="selected">Chưa thanh toán</option>
                        <option value="Đã thanh toán">Đã thanh toán</option>
                    </select>
                    <?php
                } else {
                    ?>
                    <select name="trangthai" id="" style="height: 30px;">
                        <option value="Chưa thanh toán">Chưa thanh toán</option>
                        <option value="Đã thanh toán" selected="selected">Đã thanh toán</option>
                    </select>
                    <?php
                }
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div align="center">
                    <input type="submit" name="suahoadonban" value="Cập nhật" style="width: 85px;height: 35px">
                    <input type="submit" name="boqua" value="Bỏ qua" style="width: 85px;height: 35px">
                </div>
            </td>
        </tr>
    </table>
</form>