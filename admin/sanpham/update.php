<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100' >";
} else {
    $hinh = "không có hình";
}
?>
<div class="row ">
    <div class="row frmtm">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row fromconten">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if($iddm==$id){
                            echo ' <option value="' . $id . '"selected' . $name . '</option>';
                        }else{
                            echo ' <option value="' . $id . '">' . $name . '</option>';
                            
                        }
                       
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">
                Hình<br>
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="cập nhật">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=lissp"><input type="button" value="danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))  echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>