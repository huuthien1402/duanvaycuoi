<?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }
?>
<div class="row">
            <div class="row header">
                <H1>CẬP NHẬT SẢN PHẨM </H1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" value="<?=$tensp?>">
                    </div>
                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="gia" value="<?=$giamoi?>">
                    </div>
                    <div class="row mb10">
                        Hình <br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                        Mô tả <br>
                        <textarea name="mota" cols="30" rows="10" value="<?=$mota?>"></textarea>
                    </div>
                    <div class="row mb20">
                        <input type="submit" name="themmoi" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if (isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
        </div>