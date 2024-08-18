<?php
    if (is_array($danhmuc)) {
        extract($danhmuc);
    }
?>
<div class="row">
            <div class="row header">
                <H1>CẬP NHẬT LOẠI HÀNG</H1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatelh" method="post">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="MaLoai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                    </div>
                    <div class="row mb20">
                        <input type="hidden" name="MaLoai" value="<?php if(isset($idlh)&&($idlh>0)) echo $idlh; ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listlh"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if (isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
        </div>