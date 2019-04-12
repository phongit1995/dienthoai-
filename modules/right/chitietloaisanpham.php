<?php 
	if(isset($_GET['id_loaisp'])){
		$id_loaisp=$_GET['id_loaisp'];
	}
	else{
		$id_loaisp="";
	}
	$sql="select * from sp where id_loaisp='$id_loaisp'";
	$sp=mysqli_query($conn,$sql);
 ?>
 <?php 
 	$sql1="select * from loaisp where id_loaisp='$id_loaisp'";
 	$loaisp=mysqli_query($conn,$sql1);
 	$dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC);
  ?>
 <p style="text-align: center;padding:10px;  background-color: #eaeaea;color: white;text-transform: uppercase;"><?php echo $dong_loaisp['tenloaisp'] ?></p>
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
</div>