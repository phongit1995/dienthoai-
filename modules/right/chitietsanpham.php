<?php
if(isset($_GET['id'])){
    $id_sp=$_GET['id'];
}
else{
    $id_sp="";
}
$sql="select * from sp where id_sp=$id_sp";
$sp=mysqli_query($conn,$sql);
$dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC);
?>
<div class="content">
    <div class="content_top">
        <div class="back-links">
            <p><a href="/index3.php">Home</a> > <a href="#"><?php echo $dong_sp['tensp'] ?></a></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="section group" style="border: 1px solid #EBE8E8">
        <div class="cont-desc span_1_of_2">
            <div class="product-details">
                <div class="grid images_3_of_2">
                    <div id="container">
                        <div id="products_example">
                            <div id="products">
                                <div class="slides_container">
                                    <a href="#" target="_blank"><img src="<?php echo $dong_sp['hinhanh'] ?>"
                                                                     alt=" "/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc span_3_of_2">
                    <h2><?php echo $dong_sp['tensp'] ?></h2>
                    <div class="price">
                        <p>Giá sản phẩm: <span><?php echo number_format($dong_sp['gia'],0,',','.') ?> đ</span></p>
                    </div>
                    <div class="available">
                        <p>Bảo hành :</p>
                        <div>
                            <?php echo $dong_sp['baohanh'] ?>
                        </div>
                    </div>
                    <div class="share-desc">
                        <div class="button" style="background: initial !important;"><span><a href="index.php?xem=giohang&id_sp=<?php echo $dong_sp['id_sp'] ?>">Add to Cart</a></span></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="product_desc">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>Thông số kỹ thuật</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="product-desc">
                            <?php echo $dong_sp['mota'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $gialon=$dong_sp['gia']+1500000;
    $gianho=$dong_sp['gia']-1500000;
    if(isset($_GET['id_loaisp'])){
        $id_loaisp=$_GET['id_loaisp'];
    }
    else{
        $id_loaisp="";
    }
    $sql="select * from sp where id_sp not in ($_GET[id]) and gia>='$gianho' and gia<='$gialon' order by id_sp limit 4";
    $sp=mysqli_query($conn,$sql);
    ?>
    <div class="content_bottom" style="margin-top: 20px;">
        <div class="heading">
            <h3>Gợi ý sản phẩm</h3>
        </div>
        <div class="clear"></div>
    </div>
    <div class="section group">
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