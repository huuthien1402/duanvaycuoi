<?php
if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
    extract($_SESSION['s_user']);
    $html_account='<div class="dropdown-content">                       
    <a href="index.php?pg=myaccount">'.$username.'</a>
    <a href="index.php?pg=logout">ĐĂNG XUẤT</a>
</div>';
}else{
    $html_account='<div class="dropdown-content">                       
    <a href="index.php?pg=dangky">ĐĂNG KÝ</a>
    <a href="index.php?pg=dangnhap">ĐĂNG NHẬP</a>
</div>';
}
// Kiểm tra xem 'giohang' đã tồn tại và là mảng hay không
if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
    // Đếm số phần tử trong mảng
    $soLuongSanPham = count($_SESSION['giohang']);
} else {
    // Mảng 'giohang' không tồn tại hoặc không phải là mảng
    $soLuongSanPham = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- đây là header --> <!-- đây là header --> <!-- đây là header --> <!-- đây là header --> <!-- đây là header -->
    <div class="header">
        
        <div class="logo" >
        <a href="index.php?pg=trangchu">
            <img src="./layout da1/img/logomf.png" alt="" >
            </a>
        </div>
        
        <div class="timkim" style="width: 330px;">

            <a href="index.php?pg=giohang">
                <div class="icongiohang">
                    <i class="bi bi-cart"></i><?php
                    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                        if ($soLuongSanPham > 0) {
                            // Hiển thị số lượng sản phẩm với một span có kiểu chữ đặc biệt
                            echo "<span style='font-size: 60%; color: red; font-family: Arial, Helvetica, sans-serif;'>$soLuongSanPham</span>";
                        }else {
                            echo "<span style='font-size: 60%; color: red; font-family: Arial, Helvetica, sans-serif;'></span>";
                        }

                    }else {
                        echo "<span style='font-size: 70%; color: red;'></span>";
                    }
                ?>
                </div>
            </a>

            <div class="boxseach">
                <form action="index.php?pg=bosuutap" method="post">
                    <input type="text" name="kyw" placeholder="Nhập từ khóa cần tìm" style="color: black; height: 40px; width: 145px; float: left; display: block; border-right: none; border: 1px silver solid; padding-left: 20px;">
                    <input type="submit" value="Tìm Kiếm" name="timkiem" style="width: 30px; background-color: white; height: 40px; border-left: none; border: 1px silver solid; float:left; padding-left: 2px">
                </form>
            </div>
        </div>
        <!-- menu -->   
        <div class="menu">
            <ul>
                <li><a href="index.php?pg=bosuutap"><b>BỘ SƯU TẬP</b></a></li>
                <li class="dropdown">
                    <a href="index.php?pg=vaycuoi"><b>VÁY CƯỚI</b></a>
                    <div class="dropdown-content">
                        <a href="#">VÁY CƯỚI ĐUÔI CÁ</a>
                        <a href="#">VÁY CƯỚI CHỨ A</a>
                        <a href="#">VÁY CƯỚI XÒE</a>
                        <a href="#">THIẾT KẾ VÁY CƯỚI</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="index.php?pg=aodai"><b>ÁO DÀI</b></a>
                    <div class="dropdown-content">
                        <a href="#">ÁO DÀI CƯỚI</a>
                        <a href="#">ÁO DÀI TRUNG NIÊN</a>
                        <a href="#">ÁO DÀI BƯNG QUẢ</a>
                    </div>
                </li>
                <li><a href="index.php?pg=tuvan"><b>TƯ VẤN</b></a></li>
                <li class="dropdown">
                    <a href=""><b>TÀI KHOẢN</b></a>
                    <?=$html_account;?>
                    <!-- <div class="dropdown-content">                      
                        <a href="index.php?pg=dangky">ĐĂNG KÝ</a>
                        <a href="index.php?pg=dangnhap">ĐĂNG NHẬP</a>
                    </div> -->
                </li>
            </ul>
        </div>
    </div>
</head>


    