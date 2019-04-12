<div class="website-traffic-ctn" style="width: 100%">
    <h2>Thêm loại sản phẩm</h2>
    <div>
        <form action="modules/quanlyloaisp/xuly.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="nk-int-st">
                    <input type="text" name="tenloaisp" class="form-control input-lg" placeholder="Tên loại sản phẩm">
                </div>
            </div>
            <div class="form-group">
                <div class="nk-int-st">
                    <input type="number" name="thutu" class="form-control input-lg" placeholder="Thứ tự">
                </div>
            </div>
            <div class="form-group">
                <a href="/admin/index.php" class="btn btn-default notika-btn-default waves-effect pull-right" style="margin-left: 10px">Hủy</a>
                <button type="submit" name="themloaisp" class="btn btn-success notika-btn-success waves-effect pull-right">Thêm</button>
            </div>
        </form>
    </div>
</div>