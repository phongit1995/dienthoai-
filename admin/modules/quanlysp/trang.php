<?php
$sql = "select * from sp";
$sp = mysqli_query($conn, $sql);
$sosp = mysqli_num_rows($sp);

$sotrang = ceil($sosp / $num);
?>
<div class="pull-right">
    <ul class="pagination">
    <?php
    $i = 1;
    if ($sotrang > 1) {
        while ($i <= $sotrang) {
            ?>
            <li>
                <a href="/webdienthoai-master/admin/index.php?quanly=quanlysp&ac=them&page=<?php echo $i; ?>">
                    <?php
                    if (isset($_GET['page'])) {
                        $trang = $_GET['page'];
                    } else {
                        $trang = "";
                    }
                    if ($i == $trang) {
                        ?>
                        <div class="box-trangdoimau">
                            <?php echo $i++; ?>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="box-trang">
                            <?php echo $i++; ?>
                        </div>
                        <?php
                    }
                    ?>
                </a>
            </li>
            <?php
        }
    }
    ?>
    </ul>
    <div class="clearboth"></div>
</div>