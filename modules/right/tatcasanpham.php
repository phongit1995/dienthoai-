<?php
$num=15;
if(isset($_GET['page'])) {
    $trang = $_GET['page'];
}
else {
    $trang=1;
}
$batdau=($trang-1)*$num;

// $sql="select * from sp limit $batdau, $num";
// $sp=mysqli_query($conn,$sql);

if(isset($_POST['sapxep'])){
    $gia=$_POST['giatanggiam'];

    if($gia=="giamdan"){
        $sql="select * from sp order by gia desc limit $batdau, $num";
    }
    else if($gia=="tangdan"){
        $sql="select * from sp order by gia asc limit $batdau, $num";
    }
}
else {
    $sql="select * from sp order by gia asc limit $batdau, $num";
}
$sp=mysqli_query($conn,$sql);
?>

<div class="content">
    <div class="content_top">
        <div class="heading">
            <h3>Tất cả sản phẩm</h3>
        </div>
        <div class="clear"></div>
    </div>
    <div class="section">
        <div class="grid-sp">
            <?php
            while ($dong_sp = mysqli_fetch_array($sp, MYSQLI_ASSOC)) {
                ?>
                <div class="item">
                    <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">
                        <img src="<?php echo $dong_sp['hinhanh'] ?>" alt="" style="width: 200px;height:200px;" /></a>
                    <h3><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tensp'] ?></a></h3>
                    <div class="price-details">
                        <div class="price-number">
                            <p><span class="rupees"><?php echo number_format($dong_sp['gia'], 0, ',', '.') ?> đ</span></p>
                        </div>
                        <div class="add-cart">
                            <h4><a href="index.php?xem=giohang&id_sp=<?php echo $dong_sp['id_sp'] ?>">Add to Cart</a></h4>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
                <?php
            }
            ?>
        </div>
        <div style="text-align: right">
            <?php
            include("trang.php");
            ?>
        </div>
    </div>

    <?php
    $sql = "select * from sp order by gia desc limit 8";
    $sp = mysqli_query($conn, $sql);
    ?>
    <div class="content_top">
        <div class="heading">
            <h3>Sản phẩm hot</h3>
        </div>
        <div class="clear"></div>
    </div>
    <div class="section group">
        <div class="grid-sp">
        <?php
        while ($dong_sp = mysqli_fetch_array($sp, MYSQLI_ASSOC)) {
            ?>
            <div class="item">
                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">
                    <img src="<?php echo $dong_sp['hinhanh'] ?>" alt="" style="width: 200px;height:200px;" /></a>
                <h3><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tensp'] ?></a></h3>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees"><?php echo number_format($dong_sp['gia'], 0, ',', '.') ?> đ</span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>
            <?php
        }
        ?>
        </div>
    </div>

    <?php
    $sql = "select a.tensp, sum(b.soluong), a.id_sp, a.hinhanh, a.gia from sp as a, chitiethoadonban as b where a.id_sp=b.id_sp group by b.id_sp order by sum(b.soluong) desc limit 4";
    //SELECT a.tensp,SUM(b.soluong) FROM sp as a, chitiethoadonban as b where a.id_sp=b.id_sp GROUP BY b.id_sp ORDER BY SUM(b.soluong) DESC LIMIT 5
    $sp = mysqli_query($conn, $sql);
    ?>
    <div class="content_bottom" style="margin-top: 20px;">
        <div class="heading">
            <h3>Sản phẩm bán chạy</h3>
        </div>
        <div class="clear"></div>
    </div>
    <div class="section group">
        <div class="grid-sp">
        <?php
        while ($dong_sp = mysqli_fetch_array($sp, MYSQLI_ASSOC)) {

            ?>
            <div class="item">
                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">
                    <img src="<?php echo $dong_sp['hinhanh'] ?>" alt="" style="width: 200px;height:200px;" /></a>
                <h3><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sp['id_sp'] ?>&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tensp'] ?></a></h3>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees"><?php echo number_format($dong_sp['gia'], 0, ',', '.') ?> đ</span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>
            <?php
        }
        ?>
        </div>
    </div>
</div>