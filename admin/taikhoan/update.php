<div class="row">
    <div class="row header">
        <H1>CẬP NHẬT TÀI KHOẢN </H1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="1"> <!-- Thay đổi giá trị của id tùy theo tài khoản cần sửa -->
            <div class="row mb10">
                <label for="username">Tên người dùng:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="row mb10">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="row mb10">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="row mb10">
                <input type="submit" value="Lưu">
                <a href="index.php?act=dstk"><input type="button" value="Danh sách"></a>
            </div>

            
    </div>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
    </form>
</div>
</div>