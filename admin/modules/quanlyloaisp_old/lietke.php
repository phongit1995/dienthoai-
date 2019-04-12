<?php
$sql = "select * from loaisp";
$loaisp = mysqli_query($conn, $sql);
?>
<table width="90%" style="margin: auto;margin-top: 10px;text-align: center;border-collapse: collapse;">
    <tr>
        <td class="tt">STT</td>
        <td class="tt">ID</td>
        <td class="tt">Tên loại sp</td>
        <td class="tt">Thứ tự</td>
        <td class="tt" colspan="2">Quản lý</td>
    </tr>
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
                        <img src="images2/edit1.png" alt="">
                    </a>
                </td>
                <td>
                    <a onclick="return confirm('Bạn có thực sự muốn xóa không?');"
                       href="modules/quanlyloaisp/xuly.php?id_loaisp=<?php echo $dong['id_loaisp'] ?>"><img
                                src="images2/delete1.png" alt="">
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
                        <img src="images2/edit1.png" alt="">
                    </a>
                </td>
                <td>
                    <a onclick="return confirm('Bạn có thực sự muốn xóa không?');"
                       href="modules/quanlyloaisp/xuly.php?xoaloaisp=loaisp&id_loaisp=<?php echo $dong['id_loaisp'] ?>"><img
                                src="images2/delete1.png" alt="">
                    </a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>