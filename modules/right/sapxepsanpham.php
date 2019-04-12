<?php
$num = 10;
if (isset($_GET['page'])) {
    $trang = $_GET['page'];
} else {
    $trang = 1;
}
$batdau = ($trang - 1) * $num;

//if(isset($_POST['sapxep'])){
$gia = $_POST['giatanggiam'];

if ($gia == "giamdan") {
    $sql = "select * from sp order by gia desc limit $batdau, $num";
} else if ($gia == "tangdan") {
    $sql = "select * from sp order by gia asc limit $batdau, $num";
}
// //$sql="select * from sp order by gia asc limit $batdau, $num";
$sp = mysqli_query($conn, $sql);
//echo $gia;
//}

//echo $giatanggiam;
// if(isset($_POST['sapxep'])){
// 	$giatangiam=$_POST['giatanggiam'];
// 	echo "<script>alert('$giatanggiam')</script>";
// 	//if($giatanggiam=="giamdan"){
// 		$sql="select * from sp order by gia desc limit $batdau, $num";
// 	//}
// 	//else if($giatanggiam=="tangdan"){
// 		//$sql="select * from sp order by gia asc limit $batdau, $num";
// 	//}
// 	// else{
// 	// 	$sql="select * from sp order by id_sp desc limit $batdau, $num";
// 	// }
// 	$sp=mysqli_query($conn,$sql);
// }

?>

<p style="text-align: center;padding:10px;  background-color: #eaeaea;color: red">TẤT CẢ SẢN</p>
<div class="tatcasanpham content">
    <div class="grid-sp">
        <?php
        while ($dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC)) {

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
    <div class="clear"></div>
</div>
<?php
include("trang.php");
?>
