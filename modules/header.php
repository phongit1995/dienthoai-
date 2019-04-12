<?php
$sql="select * from loaisp";
$loaisp=mysqli_query($conn,$sql);
?>
<div class="header">
    <div class="headertop_desc">
        <div class="call">
            <p><span>Need help?</span> call us <span class="number">123123123</span></span></p>
        </div>
        <div class="account_desc">
            <ul>
                <?php
                if(!isset($_SESSION['tenkhach'])) {
                    include("modules/chuadangnhap.php");
                }
                else{
                    include("modules/taikhoan.php");
                }
                ?>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_top">
        <div class="logo">
            <a href="index.html"><img src="public/images/logo.png" alt="" /></a>
        </div>
        <div class="cart">
            <p>Welcome to our Online Store! <span>Cart:</span>
            <div id="dd" class="wrapper-dropdown-2"> 0 item(s)
            </div>
            </p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_bottom">
        <div class="menu">
            <ul>
                <li class="active"><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?xem=giohang">Giỏ hàng</a></li>
                <li><a href="index.php?xem=huongdanmuahang">Hướng dẫn</a></li>
                <li><a href="index.php?xem=lienhe">Liên hệ</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="search_box">
            <form action="" method="post">
                <input type="text" name="timkiemt" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" name="timkiems" value="">
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_slide">
        <div class="header_bottom_left">
            <div class="categories">
                <ul>
                    <h3>Danh mục</h3>
                    <?php
                    while ($dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC)) {

                        ?>
                        <li><a href="index.php?xem=chitietloaisanpham&id_loaisp=<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="header_bottom_right">
            <div class="slider">
                <div id="slider">
                    <div id="mover">
                        <div id="slide-1" class="slide">
                            <div class="slider-img">
                                <a href="preview.html"><img src="public/images/slide-1-image.png" alt="learn more" /></a>
                            </div>
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 20% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="slide">
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 40% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services</h4>
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>
                            <div class="slider-img">
                                <a href="preview.html"><img src="public/images/slide-3-image.jpg" alt="learn more" /></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="slide">
                            <div class="slider-img">
                                <a href="preview.html"><img src="public/images/slide-2-image.jpg" alt="learn more" /></a>
                            </div>
                            <div class="slider-text">
                                <h1>Clearance<br><span>SALE</span></h1>
                                <h2>UPTo 10% OFF</h2>
                                <div class="features_list">
                                    <h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>
                                </div>
                                <a href="preview.html" class="button">Shop Now</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>