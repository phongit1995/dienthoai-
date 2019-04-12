<?php
$sql = "select * from sp";
$sp = mysqli_query($conn, $sql);
$sosp = mysqli_num_rows($sp);

$sotrang = ceil($sosp / $num);
?>
<div class="">
    <ul class="pagination">
    <?php
    $i = 1;
    if ($sotrang > 1) {

        while ($i <= $sotrang) {
            ?>
            <?php
                if (isset($_GET['page'])) {
                    $trang = $_GET['page'];
                } else {
                    $trang = "";
                }
            ?>
            <li class="<?php if ($i == $trang) {echo "active";} ?>"><a href="../doan/index.php?page=<?php echo $i; ?>"><?php echo $i++; ?>
            </a></li>
            <?php
        }
    }
    ?>
    </ul>
</div>
<div class="clear"></div>