<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li>
                                <a data-toggle="collapse" href="/webdienthoai-master/admin/index.php">Trang chủ</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="/webdienthoai-master/admin/index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sản phẩm</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="/webdienthoai-master/admin/index.php?quanly=quanlysp&ac=them">Quản lý sản phẩm</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="/webdienthoai-master/admin/index.php?quanly=quanlyhoadonban">Quản lý đơn đặt hàng</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="/webdienthoai-master/admin/index.php?quanly=thongke">Thống kê</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="<?php echo !isset($_GET['quanly']) ? 'active' : '' ?>"><a href="/webdienthoai-master/admin/index.php"><i class="notika-icon notika-house"></i> Trang chủ</a>
                    </li>
                    <li class="<?php echo isset($_GET['quanly']) && $_GET['quanly'] == 'quanlyloaisp' ? 'active' : '' ?>"><a href="/webdienthoai-master/admin/index.php?quanly=quanlyloaisp&ac=them"><i class="notika-icon notika-mail"></i> Quản lý loại sản phẩm</a>
                    </li>
                    <li class="<?php echo isset($_GET['quanly']) && $_GET['quanly'] == 'quanlysp' ? 'active' : '' ?>"><a href="/webdienthoai-master/admin/index.php?quanly=quanlysp&ac=them"><i class="notika-icon notika-edit"></i> Quản lý sản phẩm</a>
                    </li>
                    <li class="<?php echo isset($_GET['quanly']) && $_GET['quanly'] == 'quanlyhoadonban' ? 'active' : '' ?>"><a href="/webdienthoai-master/admin/index.php?quanly=quanlyhoadonban"><i class="notika-icon notika-bar-chart"></i> Quản lý đơn hàng</a>
                    </li>
                    <li class="<?php echo isset($_GET['quanly']) && $_GET['quanly'] == 'thongke' ? 'active' : '' ?>"><a href="/webdienthoai-master/admin/index.php?quanly=thongke"><i class="notika-icon notika-windows"></i> Thống kê</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->