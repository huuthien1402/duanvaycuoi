<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head> -->
<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./layout da1/styledangnhap.css">
    <!-- đây là header --> <!-- đây là header --> <!-- đây là header --> <!-- đây là header --> <!-- đây là header -->  
    <!-- <div class="header">
        <a href="#">
        <div class="logo">
            <img src="img/logomf.png" alt="">
        </div>
        </a>
        <div class="timkim">

            <a href="#">
                <div class="icongiohang">
                    <i class="bi bi-cart"></i>
                </div>
            </a>

            <div class="boxseach">
            <input type="search" value="Gõ từ khóa cần tìm..." style="color: rgb(188, 188, 188);">
            </div>
        </div>


        menu
        <div class="menu">
            <ul>
                <li><a href="bosuutap/bosuutap.html"><b>BỘ SƯU TẬP</b></a></li>

                <li class="dropdown">
                    <a href="vaycuoi/vaycuoi.html"><b>VÁY CƯỚI</b></a>
                    <div class="dropdown-content">
                        <a href="#">VÁY CƯỚI ĐUÔI CÁ</a>
                        <a href="#">VÁY CƯỚI CHỨ A</a>
                        <a href="#">VÁY CƯỚI XÒE</a>
                        <a href="#">THIẾT KẾ VÁY CƯỚI</a>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="aodai/aodai.html"><b>ÁO DÀI</b></a>
                    <div class="dropdown-content">
                        <a href="#">ÁO DÀI CƯỚI</a>
                        <a href="#">ÁO DÀI TRUNG NIÊN</a>
                        <a href="#">ÁO DÀI BƯNG QUẢ</a>
                    </div>
                </li>

                <li><a href="#"><b>TƯ VẤN</b></a></li>

                
                <li class="dropdown">
                    <a href="#"><b>TÀI KHOẢN</b></a>
                    <div class="dropdown-content">
                        <a href="#">ĐĂNG KÝ</a>
                        <a href="#">ĐĂNG NHẬP</a>
                    </div>
                </li>

                

            </ul>
        </div>

    </div> -->
    <!-- đây là code html phần body --> <!-- đây là code html phần body --> <!-- đây là code html phần body -->
    <div class="bodyy" style="margin-top: 50px;">
        <div class="form-dangky">
            <h2 style="color: red;">
            <?php
            if (isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap'] != "")){
                echo  $_SESSION['tb_dangnhap'];
                unset($_SESSION['tb_dangnhap']);
            }              
            ?>
            </h2>
            <form action="index.php?pg=login" style="border:1px solid #d7d7d7" method="post">
                <div class="container" style="font-family: Arial, Helvetica, sans-serif;">
                    <h1>ĐĂNG NHẬP</h1>
                    <p style="margin-top: 15px;">Vui lòng điền vào mẫu này để đăng nhập vào tài khoản.</p>
                    <hr>

                    <label for="email"><b>Tên Đăng Nhập</b></label>
                    <input type="text" placeholder="Nhập Tên Đăng Nhập" id="username" name="username" required>

                    <label for="psw"><b>Mật Khẩu</b></label>
                    <input type="password" placeholder="Nhập Mật Khẩu" id="password" name="password" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Tôi
                    </label>

                    <div class="clearfix">
                        <button type="button" class="cancelbtn">Hủy Bỏ</button>
                        <button type="submit" name="dangnhap" value="Đăng Nhập" class="signupbtn">Đăng Nhập</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- đây là code html phần footer --> <!-- đây là code html phần footer --> <!-- đây là code html phần footer -->
    <!-- <div class="footer">
        <div class="boxtrongfooter">
            <div class="boxnoidungfooter">
                <div class="boxtieudefooter">
                    <h6>VỀ CHÚNG TÔI</h6>

                </div>

                <div class="logoft">
                    <img src="img/logofooter tách nền.png" alt="">

                </div>
                <div class="tenlogoft">
                    <h6>MARRIE FASHION</h6>

                </div>
                <div class="noidunglogo">
                    <p>
                        Tự hào là thương hiệu được chương trình Miss Universe 2019 tin tưởng là nhà tài trợ trang phục.
                        Với kinh nghiệm hơn 20 năm trong ngành áo cưới và đồ dạ hội.
                    </p>

                </div>

                <div class="iconft">
                    <img src="img/iconfbytis.png" alt="">
                </div>

            </div>

            <div class="boxnoidungfooter">
                <div class="boxtieudefooter">
                    <h6>THÔNG TIN LIÊN HỆ</h6>
                </div>
                <div class="tenctytrongft">
                    <h6>CTY TNHH SẢN XUẤT THƯƠNG MẠI VÀ DỊCH VỤ MARRIE FASHION</h6>
                </div>
                <div class="noidungthongtinlienhe">
                    <p>Cơ sở 1: 47-47A Nguyễn Thông, P9, Q3, TPHCM</p>
                    <p>Hotline: 096.935.1386 - 0866.888.879</p>
                    <p>Cơ sở 2: 836 Trương Định, Phường Giáp Bát, Q. Hoàng Mai, Hà Nội</p>
                    <p>Hotline: 086.9999.836</p>
                    <p>Email: info@marriefashion.vn</p>
                </div>
            </div>


            <div class="boxnoidungfooter">
                <div class="boxtieudefooter">
                    <h6>BẢN ĐỒ</h6>

                    <div class="bando">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.664432107302!2d106.68193200000002!3d10.779408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fe1e439e019%3A0xcf90225d1df1de1c!2sMARYMY!5e0!3m2!1sen!2sus!4v1699555061265!5m2!1sen!2sus"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                    <div class="boxtieudefooter">
                        <h6>VỀ KHÁCH HÀNG</h6>
                    </div>

                    <div class="noidungvekhachhang">
                        <p>
                            Chính sách vận chuyển
                        </p>

                    </div>
                    <div class="noidungvekhachhang">
                        <p>
                            Chính sách thanh toán
                        </p>

                    </div>
                    <div class="noidungvekhachhang">
                        <p>
                            Chính sách bảo mật
                        </p>

                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
</html> -->