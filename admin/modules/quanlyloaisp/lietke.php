<?php
$sql="select * from loaisp";
$loaisp=mysqli_query($conn,$sql);
?>
<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
        <div class="website-traffic-ctn" style="width: 100%">
            <h2>Danh sách loại sản phẩm</h2>
            <div>
                <table id="danh-sach-loai-san-pham" class="table table-striped dataTable" role="grid" aria-describedby="data-table-basic_info">
                    <thead>
                    <tr>
                        <td class="tt">STT</td>
                        <td class="tt">ID</td>
                        <td class="tt">Tên loại sp</td>
                        <td class="tt">Thứ tự</td>
                        <td class="tt" colspan="2">Quản lý</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    while ($dong = mysqli_fetch_array($loaisp, MYSQLI_ASSOC)) {
                        $i++;
                        if (isset($_GET['id_loaisp'])) {
                            $id_loaisp = $_GET['id_loaisp'];
                        } else {
                            $id_loaisp = "";
                        }
                        if ($dong['id_loaisp'] == $id_loaisp) {
                            ?>
                            <tr class="doimaudong">
                                <td><?php echo $i ?></td>
                                <td><?php echo $dong['id_loaisp'] ?></td>
                                <td><?php echo $dong['tenloaisp'] ?></td>
                                <td><?php echo $dong['thutu'] ?></td>
                                <td>
                                    <a href="../admin/index.php?quanly=quanlyloaisp&ac=sua&id_loaisp=<?php echo $dong['id_loaisp'] ?>">
                                        <i class="fa fa-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Bạn có thực sự muốn xóa không?');"
                                       href="modules/quanlyloaisp/xuly.php?id_loaisp=<?php echo $dong['id_loaisp'] ?>">
                                        <i class="fa fa-eraser"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        } else {
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $dong['id_loaisp'] ?></td>
                                <td><?php echo $dong['tenloaisp'] ?></td>
                                <td><?php echo $dong['thutu'] ?></td>
                                <td>
                                    <a href="../admin/index.php?quanly=quanlyloaisp&ac=sua&id_loaisp=<?php echo $dong['id_loaisp'] ?>">
                                        <i class="fa fa-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Bạn có thực sự muốn xóa không?');"
                                       href="modules/quanlyloaisp/xuly.php?xoaloaisp=loaisp&id_loaisp=<?php echo $dong['id_loaisp'] ?>">
                                        <i class="fa fa-eraser"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>