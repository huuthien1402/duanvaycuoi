<div class="row">
            <div class="row header">
                <H1>THÊM MỚI LOẠI HÀNG HÓA</H1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addlh" method="post">
                    <div class="row mb10">
                        Mã loại <br>
                        <input type="text" name="maloai">
                    </div>
                    <div class="row mb10">
                        Tên loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb20">
                        <input type="submit" name="themmoi" value="Thêm mới">
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