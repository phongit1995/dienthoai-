<?php include("modules/editor/editor1.php") ?>
<form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="nk-int-st">
            <input type="text" name="tensp" class="form-control input-lg" placeholder="Tên sản phẩm">
        </div>
    </div>
    <div class="form-group">
        <div class="nk-int-st">
            <input type="number" name="gia" class="form-control input-lg" placeholder="Giá">
        </div>
    </div>
    <div class="form-group">
        <div class="nk-int-st">
            <input type="text" name="baohanh" class="form-control input-lg" placeholder="Bảo hành">
        </div>
    </div>
    <div class="form-group">
        <div class="nk-int-st">
            <input type="text" name="soluong" class="form-control input-lg" placeholder="Số lượng">
        </div>
    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label><br>
        <div class="nk-int-st">
            <input type="file" name="hinhanh" class="form-control input-lg" placeholder="Hình ảnh">
        </div>
    </div>
    <div class="form-group">
        <label for="">Mô tả</label><br>
        <div class="nk-int-st">
            <textarea name="mota" class="form-control" style="width: 100%" cols="40" rows="30"></textarea>
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
                    ?>
                    <option value="<?php echo $dong_loaisp['id_loaisp'] ?>">
                    <?php echo $dong_loaisp['tenloaisp'] ?>
                </option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="nk-int-st">
            <input type="number" name="thutu" class="form-control input-lg" placeholder="Thứ tụ">
        </div>
    </div>

    <div class="form-group">
        <a href="/admin/index.php" class="btn btn-default notika-btn-default waves-effect pull-right" style="margin-left: 10px">Hủy</a>
        <button type="submit" name="themsp" class="btn btn-success notika-btn-success waves-effect pull-right">Thêm</button>
    </div>
</form>