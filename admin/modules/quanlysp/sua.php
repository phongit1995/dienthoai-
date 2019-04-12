<?php
include("modules/editor/editor1.php");
if(isset($_GET['page'])) {
    $trang = $_GET['page'];
}
else {
    $trang=1;
}
if(isset($_GET['id_sp'])){
    $id_sp=$_GET['id_sp'];
}
else{
    $id_sp="";
}
$sql="select * from sp where id_sp='$id_sp'";
$sp=mysqli_query($conn,$sql);
$dong_sp=mysqli_fetch_array($sp,MYSQLI_ASSOC);
?>
<form action="modules/quanlysp/xuly.php?id_sp=<?php echo $id_sp ?>&page=<?php echo $trang ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="nk-int-st">
            <input type="text" name="tensp" value="<?php if(isset($dong_sp['tensp'])) echo $dong_sp['tensp'] ?>" class="form-control input-lg" placeholder="Tên sản phẩm">
        </div>
    </div>
    <div class="form-group">
        <div class="nk-int-st">
            <input type="number" value="<?php if(isset($dong_sp['gia'])) echo $dong_sp['gia'] ?>" name="gia" class="form-control input-lg" placeholder="Giá">
        </div>
    </div>
    <div class="form-group">
        <div class="nk-int-st">
            <input type="text" name="baohanh" value="<?php if(isset($dong_sp['baohanh'])) echo $dong_sp['baohanh'] ?>" class="form-control input-lg" placeholder="Bảo hành">
        </div>
    </div>
    <div class="form-group">
        <div class="nk-int-st">
            <input type="text" name="soluong" value="<?php if(isset($dong_sp['soluong'])) echo $dong_sp['soluong'] ?>" class="form-control input-lg" placeholder="Số lượng">
        </div>
    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label><br>
        <div>
            <img src="../<?php if(isset($dong_sp['hinhanh'])) echo $dong_sp['hinhanh'] ?>" class="img-responsive">
        </div>
        <div class="nk-int-st">
            <input type="file" name="hinhanh" class="form-control input-lg" placeholder="Hình ảnh">
        </div>
    </div>
    <div class="form-group">
        <label for="">Mô tả</label><br>
        <div class="nk-int-st">
            <textarea name="mota" class="form-control" style="width: 100%" cols="40" rows="30"><?php if(isset($dong_sp['mota'])) echo $dong_sp['mota'] ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="">̉Loại sản phẩm</label><br>
        <div class="nk-int-st">
            <?php
            $sql="select * from loaisp";
            $loaisp=mysqli_query($conn,$sql);
            ?>
            <select name="id_loaisp" class="form-control" id="">
                <?php
                while($dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC)){
                    if($dong_sp['id_loaisp']==$dong_loaisp['id_loaisp']){
                        ?>
                        <option value="<?php echo $dong_loaisp['id_loaisp'] ?>" selected="selected">
                            <?php echo $dong_loaisp['tenloaisp'] ?>
                        </option>
                        <?php

                    }
                    else{
                        ?>
                        <option value="<?php echo $dong_loaisp['id_loaisp'] ?>">
                            <?php echo $dong_loaisp['tenloaisp'] ?>
                        </option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="nk-int-st">
            <input type="number" name="thutu" value="<?php if(isset($dong_sp['thutu'])) echo $dong_sp['thutu'] ?>" class="form-control input-lg" placeholder="Thứ tụ">
        </div>
    </div>

    <div class="form-group">
        <a href="/admin/index.php" class="btn btn-default notika-btn-default waves-effect pull-right" style="margin-left: 10px">Hủy</a>
        <button type="submit" name="suasp" class="btn btn-success notika-btn-success waves-effect pull-right">Sửa</button>
    </div>
</form>