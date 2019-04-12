<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">GIỎ HÀNG</p>
<?php
// echo "<pre>";
// print_r($_SESSION);
// echo "<pre>";
$_SESSION['gh'] = "giohang";
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
//them
if (isset($_GET['id_sp']) && !empty($_GET['id_sp'])) {
    $id_sp = $_GET['id_sp'];
//    @$_SESSION['giohang' . $id_sp] += 1;
//   
    if(isset($_SESSION['cart'][$id_sp])) {
        $_SESSION['cart'][$id_sp] = $_SESSION['cart'][$id_sp] + 1;
    } else {
        $_SESSION['cart'][$id_sp] = 1;
    }
    header("location:index.php?xem=giohang");
}

//cong
if (isset($_GET['cong'])) {
    $id_sp = $_GET['cong'];
    if(isset($_SESSION['cart'][$id_sp])) {
        $_SESSION['cart'][$id_sp] = $_SESSION['cart'][$id_sp] + 1;
    }
    header("location:index.php?xem=giohang");
}

//tru
if (isset($_GET['tru'])) {
    $id_sp = $_GET['tru'];
    if(isset($_SESSION['cart'][$id_sp])) {
        $_SESSION['cart'][$id_sp] = $_SESSION['cart'][$id_sp] - 1;
        
        if(empty($_SESSION['cart'][$id_sp])) {
            unset($_SESSION['cart'][$id_sp]);
        }
        header("location:index.php?xem=giohang");
    }
}

//xoa
if (isset($_GET['xoa'])) {
    // $_SESSION['giohang' . $_GET['xoa']] = 0;
    unset($_SESSION['cart'][$_GET['xoa']]);
    header("location:index.php?xem=giohang");
}
$thanhtien = 0;
foreach ($_SESSION['cart'] as $id_sp => $count) {
    $sql = "select * from sp where id_sp='$id_sp'";
    $sp = mysqli_query($conn, $sql);
    while ($dong_sp = mysqli_fetch_array($sp, MYSQLI_ASSOC)) {
        $tongtien = $dong_sp['gia'] * $count;
        ?>
        <div class="giohang content" style="display: grid; grid-template-columns: 2fr 7fr 2fr; grid-gap: 10px;">
            <div class="left">
                <img src="<?php echo $dong_sp['hinhanh'] ?>" class="img-responsive" alt=""
                     style="width: 200px;padding-bottom: 10px;"><br>
                <span style="display: block; text-align: center;">
                    <a href="index.php?xem=giohang&xoa=<?php echo $id_sp ?>">Xóa</a>
                </span>
            </div>
            <div class="right" style="display: grid; grid-template-columns: 5fr 2fr; grid-gap: 10px;">
                <div class="right-left">
                    <p><?php echo $dong_sp['tensp'] ?></p>
                </div>
                <div class="right-right">

                    <div class="chonsoluong" style="display: flex;">
                        <a class="button" style="margin: 0" href="index.php?xem=giohang&tru=<?php echo $id_sp ?>">
                            -
                        </a>
                        <div class="soluong" style="border-right: none;border-left: none;padding: 10px 20px;">
                            <?php echo $count ?>
                        </div>
                        <a class="button" style="margin: 0;background: forestgreen" href="index.php?xem=giohang&cong=<?php echo $id_sp ?>">
                            +
                        </a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="price-count" style="padding: 10px 20px;">
                <p style="text-align: center;"><?php echo number_format($tongtien, 0, ',', '.') ?> đ</p>
            </div>
        </div>
        <?php
        if (isset($tongtien)) {
            $thanhtien += $tongtien;
        }
    }
}
if ($thanhtien == 0) {
    echo "<div style='text-align:center;'><h2>Không có hàng nào trong giỏ hàng.</h2></div>";
} else {

    ?>
    <div class="tongtien" style="text-align: right">
        Tổng tiền:<span><?php echo number_format($thanhtien, 0, ',', '.') ?> đ</span>
    </div>
    <div class="thanhtoan" style="float: right;padding: 50px 5px 0px 0px;">
        <a class="button button-success" href="index.php?xem=thanhtoan">Thanh toán</a>
    </div>;
    <?php
}
?>
<?php ob_end_flush(); ?>