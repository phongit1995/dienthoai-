<div class="categories">
    <ul>
        <h3>Giá</h3>
        <li><a href="index.php?xem=timkiemsptheogia&gia=duoi5trieu"><p>Dưới <b>5</b> triệu</p></a></li>
        <li><a href="index.php?xem=timkiemsptheogia&gia=tu5den7trieu"><p>Từ <b>5</b> - <b>7</b> triệu</p></a></li>
        <li><a href="index.php?xem=timkiemsptheogia&gia=tu7den10trieu"><p>Từ <b>7</b> - <b>10</b> triệu</p></a></li>
        <li><a href="index.php?xem=timkiemsptheogia&gia=tren10trieu"><p>Trên <b>10</b> triệu</p></a></li>
    </ul>
</div>
<br>
<div class="categories">
    <ul>
        <h3>Sắp xếp</h3>
        <div>
            <form action ="" method="POST" style="padding: 20px 10px" enctype="multipart/form-data">
                <?php
                if(isset($_POST['giatanggiam'])){
                    $giatanggiam=$_POST['giatanggiam'];
                }
                else{
                    $giatanggiam="";
                }
                if($giatanggiam=="giamdan"){
                    ?>
                    <select name="giatanggiam" id="">
                        <option value="giamdan" selected="selected">Giá:Từ cao đến thấp</option>
                        <option value="tangdan">Giá:Từ thấp đến cao</option>
                    </select>
                    <?php
                }
                else{
                    ?>
                    <select name="giatanggiam" id="">
                        <option value="giamdan">Giá:Từ cao đến thấp</option>
                        <option value="tangdan" selected="selected">Giá:Từ thấp đến cao</option>
                    </select>
                    <?php
                }
                ?>
                <input type="submit" name="sapxep" value="Sắp xếp" style="">
            </form>
        </div>
    </ul>
</div>
