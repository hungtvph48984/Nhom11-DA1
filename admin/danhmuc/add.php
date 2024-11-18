<div class="row ">
            <div class="row frmtm">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row fromconten">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled >
                    </div>

                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="thêm mới">
                        <input type="reset" value="nhập lại">
                        <a href="index.php?act=lisdm"><input type="button" value="danh sách"></a>
                    </div>
                    <?php 
                    if (isset($thongbao)&&($thongbao!=""))  echo $thongbao; 
                    ?>
                </form>
            </div>
        </div>
    </div>