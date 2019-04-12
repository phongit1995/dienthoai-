<?php
if(isset($_GET['id_loaisp'])){
    $id_loaisp=$_GET['id_loaisp'];
    $sql="select * from loaisp where id_loaisp='$id_loaisp'";
    $loaisp=mysqli_query($conn,$sql);
    $dong_loaisp=mysqli_fetch_array($loaisp,MYSQLI_ASSOC);
}
?>
<div class="website-traffic-ctn" style="width: 100%">
    <h2>Sửa loại sản phẩm</h2>
    <div>
        <form action="modules/quanlyloaisp/xuly.php?id_loaisp=<?php echo $id_loaisp ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="nk-int-st">
                    <input type="text" name="tenloaisp" class="form-control input-lg" value="<?php if(isset($dong_loaisp['tenloaisp'])) echo $dong_loaisp['tenloaisp'] ?>" placeholder="Tên loại sản phẩm">
                </div>
            </div>
            <div class="form-group">
                <div class="nk-int-st">
                    <input type="number" name="thutu" class="form-control input-lg" value="<?php if(isset($dong_loaisp['thutu'])) echo $dong_loaisp['thutu'] ?>" placeholder="Thứ tự">
                </div>
            </div>
            <div class="form-group">
                <a href="/admin/index.php" class="btn btn-default notika-btn-default waves-effect pull-right" style="margin-left: 10px">Hủy</a>
                <button type="submit" name="sualoaisp" class="btn btn-success notika-btn-success waves-effect pull-right">Sửa</button>
            </div>
        </form>
    </div>
</div>