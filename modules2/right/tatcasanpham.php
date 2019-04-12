<?php
$num = 15;
if (isset($_GET['page'])) {
    $trang = $_GET['page'];
} else {
    $trang = 1;
}
$batdau = ($trang - 1) * $num;

// $sql="select * from sp limit $batdau, $num";
// $sp=mysqli_query($conn,$sql);

if (isset($_POST['sapxep'])) {
    $gia = $_POST['giatanggiam'];

    if ($gia == "giamdan") {
        $sql = "select * from sp order by gia desc limit $batdau, $num";
    } else if ($gia == "tangdan") {
        $sql = "select * from sp order by gia asc limit $batdau, $num";
    }
} else {
    $sql = "select * from sp order by gia asc limit $batdau, $num";
}
$sp = mysqli_query($conn, $sql);
?>
<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">TẤT CẢ SẢN PHẨM</p>
<div class="tatcasanpham">
    <ul>
        <?php
        while ($dong_sp = mysqli_fetch_array($sp, MYSQLI_ASSOC)) {

            ?>
            <li>
                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">
                    <img src="<?php echo $dong_sp['hinhanh'] ?>" style="width: 125px;height: 125px;" alt="">
                    <p class="tensp"><?php echo $dong_sp['tensp'] ?></p>
                    Giá: <span
                            style="color: #F00;font-weight: bold;"><?php echo number_format($dong_sp['gia'], 0, ',', '.') ?>
                        ₫</span>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
    <div class="clear"></div>
</div>
<?php
include("trang.php");
?>

<?php
$sql = "select * from sp order by gia desc limit 8";
$sp = mysqli_query($conn, $sql);
?>
<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">SẢN PHẨM HOT</p>
<div class="tatcasanpham">
    <ul>
        <?php
        while ($dong_sp = mysqli_fetch_array($sp, MYSQLI_ASSOC)) {

            ?>
            <li>
                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">
                    <img src="<?php echo $dong_sp['hinhanh'] ?>" style="width: 125px;height: 125px;" alt="">
                    <p class="tensp"><?php echo $dong_sp['tensp'] ?></p>
                    Giá: <span
                            style="color: #F00;font-weight: bold;"><?php echo number_format($dong_sp['gia'], 0, ',', '.') ?>
                        ₫</span>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
    <div class="clear"></div>
</div>

<?php
$sql = "select a.tensp, sum(b.soluong), a.id_sp, a.hinhanh, a.gia from sp as a, chitiethoadonban as b where a.id_sp=b.id_sp group by b.id_sp order by sum(b.soluong) desc limit 4";
//SELECT a.tensp,SUM(b.soluong) FROM sp as a, chitiethoadonban as b where a.id_sp=b.id_sp GROUP BY b.id_sp ORDER BY SUM(b.soluong) DESC LIMIT 5
$sp = mysqli_query($conn, $sql);
?>
<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">SẢN PHẨM BÁN CHẠY</p>
<div class="tatcasanpham">
    <ul>
        <?php
        while ($dong_sp = mysqli_fetch_array($sp, MYSQLI_ASSOC)) {

            ?>
            <li>
                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">
                    <img src="<?php echo $dong_sp['hinhanh'] ?>" style="width: 125px;height: 125px;" alt="">
                    <p class="tensp"><?php echo $dong_sp['tensp'] ?></p>
                    Giá: <span
                            style="color: #F00;font-weight: bold;"><?php echo number_format($dong_sp['gia'], 0, ',', '.') ?>
                        ₫</span>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
    <div class="clear"></div>
</div>