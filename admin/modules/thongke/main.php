<div class="notika-status-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <?php
                    if(isset($_GET['ac']))
                        $ac=$_GET['ac'];
                    else{
                        $ac="";
                    }
                    if($ac=="top5sp"){
                        include("top5sp.php");
                    }
                    elseif ($ac=="doanhthu") {
                        include("doanhthu.php");
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <?php include("lietke.php"); ?>
                </div>
            </div>
        </div>
    </div>
</div>