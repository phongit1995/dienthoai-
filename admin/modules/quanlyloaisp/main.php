<div class="notika-status-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                    <?php
                    if(isset($_GET['ac']))
                        $ac=$_GET['ac'];
                    else{
                        $ac="";
                    }
                    if($ac=="them"){
                        include("them.php");
                    }
                    elseif ($ac=="sua") {
                        include("sua.php");
                    }
                    ?>
                </div>
            </div>

            <?php include("lietke.php"); ?>
        </div>
    </div>
</div>