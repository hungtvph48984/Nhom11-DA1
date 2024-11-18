<div class="row ">
            <div class="row frmtm">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <div class="row fromconten">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                       Danh mục <br>
                       <select name="iddm" id="">
                        <?php
                    foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo' <option value="'.$id.'">"'.$name.'"</option>';
                    }
                        ?>
                       
                       </select>
                    </div>

                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        giá <br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                       hình<br>
                       <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                        mô tả <br>
                       <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="thêm mới">
                        <input type="reset" value="nhập lại">
                        <a href="index.php?act=lissp"><input type="button" value="danh sách"></a>
                    </div>
                    <?php 
                    if (isset($thongbao)&&($thongbao!=""))  echo $thongbao; 
                    ?>
                </form>
            </div>
        </div>
    </div>