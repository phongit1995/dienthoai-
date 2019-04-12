<div class="notika-status-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <?php
                    if(isset($_GET['ac'])){
                        $ac=$_GET['ac'];
                    }
                    else{
                        $ac="";
                    }
                    if($ac=="sua"){
                        include("sua.php");
                    }
                    else if($ac=="chitiethoadonban"){
                        include("chitiethoadonban.php");
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="wb-traffic-inner notika-shadow" style="width: 100%">
                    <form action="" method="POST" style="display: block">
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="txtmahdb" value="<?php if(isset($_POST['txtmahdb'])) echo $_POST['txtmahdb'] ?>" placeholder="nhập mã hóa đơn bán">
                        </div>
                        <div class="col-sm-3">
                            <input type="submit" class="form-control btn-success" name="submahdb" value="Tìm kiếm">
                        </div>
                    </form>
                </div>
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <?php
                    if(isset($_POST['submahdb'])){
                        include("timkiemhdb.php");
                    }
                    else{
                        include("lietke.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>