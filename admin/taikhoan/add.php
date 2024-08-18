<div class="row">
            <div class="row header">
                <H1>THÊM MỚI TÀI KHOẢN</H1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addtk" method="post">
                    <div class="row mb10">
                        Mã tài khoản <br>
                        <input type="text" name="makh">
                    </div>
                    <div class="row mb10">
                        Tên <br>
                        <input type="text" name="khachhang">
                    </div>
                    <div class="row mb10">
                        Địa chỉ <br>
                        <input type="text" name="diachi">
                    </div>
                    <div class="row mb10">
                        Điện thoại <br>
                        <input type="text" name="dienthoai">
                    </div>
                    <div class="row mb10">
                        Email <br>
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        Username <br>
                        <input type="text" name="username">
                    </div>
                    <div class="row mb10">
                        Password <br>
                        <input type="password" name="password">
                    </div>
                    <div class="row mb20">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=dstk"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if (isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
        </div>