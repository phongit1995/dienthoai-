<div class="thongke" style="padding-top: 10px; width: 100%">
    <div class="top5sp row" style="margin-bottom: 10px;">
        <!-- <a href="../admin/index.php?quanly=thongke&ac=top5sp">
            <h3>+Top 5 sản phẩm bán chạy nhất</h4>
        </a> -->
        <h3 style="margin-bottom: 10px;">+ Top 5 sản phẩm bán chạy nhất</h3>
        <form action="../admin/index.php?quanly=thongke&ac=top5sp" method="POST" enctype="multipart/form-data" style="width: 100%">
            <div class="col-sm-5">
                <label for="">Tháng</label>
                <select name="thang" id="thang" class="form-control"
                              value="<?php if (isset($_POST['thang'])) echo $_POST['thang'] ?>">
                    <script>
                        for (var i = 1; i <= 12; i++) {
                            var month = document.createElement("option");
                            var month1 = document.createTextNode(i);
                            month.appendChild(month1);
                            document.getElementById("thang").appendChild(month);
                        }
                    </script>
                </select>
            </div>
            <div class="col-sm-5">
                <label for="">Năm</label>
                <input type="text" id="txtNam" class="form-control" name="nam"
                           value="<?php if (isset($_POST['nam'])) echo $_POST['nam'] ?>">
            </div>
            <div class="col-sm-2">
                <label for=""></label>
                <input type="submit" name="subtop5" class="form-control btn-success" value="Xem">
            </div>
        </form>
    </div>
    <div class="top5sptheoquy row">
        <form action="../admin/index.php?quanly=thongke&ac=top5sp" method="POST" enctype="multipart/form-data">
            <div class="col-sm-5">
                <label for="">Quý</label>
                <select name="quy" id="quy" class="form-control"
                        value="<?php if (isset($_POST['quy'])) echo $_POST['quy'] ?>">
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                </select>
            </div>
            <div class="col-sm-5">
                <label for="">Năm</label>
                <input type="text" id="txtNam" class="form-control" name="nam"
                       value="<?php if (isset($_POST['nam'])) echo $_POST['nam'] ?>">
            </div>
            <div class="col-sm-2">
                <label for=""></label>
                <input type="submit" name="subtop5theoquy" value="Xem" class="form-control btn-success">
            </div>
        </form>
    </div>
    <div class="top5sptheonam row">
        <form action="../admin/index.php?quanly=thongke&ac=top5sp" method="POST" enctype="multipart/form-data">
            <div class="col-sm-5">
                <label for="">Năm</label>
                <input type="text" id="txtNam" class="form-control" name="nam"
                       value="<?php if (isset($_POST['nam'])) echo $_POST['nam'] ?>">
            </div>
            <div class="col-sm-2">
                <label for=""></label>
                <input type="submit" name="subtop5theonam" value="Xem" class="form-control btn-success">
            </div>

        </form>
    </div>
    <hr>
    <div class="doanhthu row">
        <h3 style="margin-bottom: 10px;">+ Doanh thu bán hàng</h3>
        <form action="../admin/index.php?quanly=thongke&ac=doanhthu" method="POST" enctype="multipart/form-data">
            <div class="col-sm-5">
                <label for="">Tháng</label>
                <select name="thang" id="thang2" class="form-control"
                        value="<?php if (isset($_POST['thang'])) echo $_POST['thang'] ?>">
                    <script>
                        for (var i = 1; i <= 12; i++) {
                            var month = document.createElement("option");
                            var month1 = document.createTextNode(i);
                            month.appendChild(month1);
                            document.getElementById("thang2").appendChild(month);
                        }
                    </script>
                </select>
            </div>
            <div class="col-sm-5">
                <label for="">Năm</label>
                <input type="text" id="txtNam" class="form-control" name="nam"
                       value="<?php if (isset($_POST['nam'])) echo $_POST['nam'] ?>">
            </div>
            <div class="col-sm-2">
                <label for=""></label>
                <input type="submit" name="subdoanhthu" value="Xem" class="form-control btn-success">
            </div>
        </form>
    </div>
</div>