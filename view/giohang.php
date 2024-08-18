<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->

<body>
    <!-- đây là header --> <!-- đây là header --> <!-- đây là header --> <!-- đây là header --> <!-- đây là header -->
    <!-- đây là header --> <!-- đây là header -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./layout da1/giohang/giohang.css">
    <!-- <div class="header">
        <a href="#">
        <div class="logo">
            <img src="../layout da1/img/logomf.png" alt="">
        </div>
        </a>
        <div class="timkim">

            <a href="#">
                <div class="icongiohang">
                    <i class="bi bi-cart"></i>
                </div>
            </a>

            <div class="boxseach">
            <input type="search" value="Gõ từ khóa cần tìm../layout da1." style="color: rgb(188, 188, 188);">
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

                

                
                

                <li><a href=""><b>TƯ VẤN</b></a></li>

                <li class="dropdown">
                    <a href="dropbtn"><b>TÀI KHOẢN</b></a>
                    <div class="dropdown-content">
                        <a href="#">ĐĂNG KÝ</a>
                        <a href="#">ĐĂNG NHẬP</a>
                    </div>
                </li>

            </ul>
        </div>

    </div> -->

    <div class="giohang">
        <?php
        // Kiểm tra xem $_SESSION['giohang'] có tồn tại hay không
        if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
            echo '<div class="hinhgh">
        <h3>
            Hình Sản Phẩm
        </h3>
        </div>
        <div class="tenspgh">
        <h3>Tên Sản Phẩm</h3>
        </div>
    <div class="giaspgh">
    <h3>Giá Sản Phẩm</h3>
    </div>
    <div class="themgh">
    <h3>Số lượng</h3>
    </div>
    <div class="xoagh">
    <h3>Xóa</h3>
    </div>';    
        } else {
            echo '
    <div  style="width: 30px; margin-top: 25px; margin-left: 460px; height: 70px; margin-bottom: 150px;">
    <img src="./layout da1/img/giohangtrong2.png" alt=""  width: 30%; height: 30%;>
    
    </div>
    <div  style="width: 320px; margin-top: 65px; margin-left: 420px; height: 20px; margin-bottom: 20px;">
    <p style="font-family: Arial, Helvetica, sans-serif;" >Chưa có sản phẩm trong giỏ hàng của bạn.</p>
    
    </div>

    <a href="index.php?pg=bosuutap" style="text-decoration: none;">
    <div  style="width: 220px; margin-top: 30px; margin-left: 460px; height: 40px; margin-bottom: 60px; background-color: black; border-radius: 10px; padding-top: 1px; ">
    <p style="font-family: Arial, Helvetica, sans-serif; color: white; margin-left: 48px; margin-top: 10px; " >MUA SẮM NGAY</p>
    
    </div>
    </a>

    ';
        }
        ?>



        <?php
        $tt = '';
        if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            foreach ($_SESSION['giohang'] as $i => $item) {
                extract($item);
                $giamoi = floatval($giamoi);
                $tt = floatval($tt);
                $soluong = isset($item['soluong']) ? intval($item['soluong']) : 1;
                $linkdel = "index.php?pg=delcart&ind=" . $i;
                echo '
                <div class="ndgh">
                    <div class="hinhspghbt">
                        <img src="./layout da1/img/' . $hinh . '" alt="">
                    </div>
                <div class="tenspghbt">
                    <p>' . $tensp . '</p> 
                </div>
                <div class="giaspghbt">
                    <p>' . number_format($giamoi, 0, ',', '.') . 'đ</p> 
                </div>  
                <div class="themspbt">              
                <input type="number" id="quantity' . $i . '" name="quantity" min="1" value="' . $soluong . '" style="width: 60px; margin-top: 65px; margin-left: 23px;">
                  
                </div> 
                <div style="margin-top: 55px;" class="xoaspbt">
                    <a href=' . $linkdel . '><i style="font-size: 25px;" class="bi bi-trash"></i></a>
                </div>
            </div>         
            ';
                $tt += $giamoi * $soluong;
            }
        }
        ?>
        <script>
            // Lắng nghe sự kiện thay đổi trên mỗi input số lượng
            for (var i = 0; i < <?php echo count($_SESSION['giohang']); ?>; i++) {
                document.getElementById('quantity' + i).addEventListener('input', function() {
                    // Lấy giá trị số lượng
                    var quantity = parseInt(this.value) || 0;
                    // Lấy chỉ mục của sản phẩm tương ứng
                    var productIndex = parseInt(this.id.replace('quantity', ''));
                    // Gửi yêu cầu AJAX đến server để cập nhật số lượng của sản phẩm
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'view/calculate_price.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            // Cập nhật giá mới trên giao diện
                            document.getElementById('totalPrice').innerText = 'TỔNG TIỀN: ' + xhr.responseText + ' đ';
                        }
                    };
                    xhr.send('quantity=' + quantity + '&productIndex=' + productIndex);
                });
            }
        </script>
        <!-- <div class="ndgh">
            <div class="hinhspghbt">
                <img src="./layout da1/img/hinhvaycuoi1.jpg" alt="">

            </div>
            <div class="tenspghbt">
                <p>Luxury | Váy cưới xòe Sylvia</p>

            </div>
            <div class="giaspghbt">
                <p>26.000.000đ</p>

            </div>

            <div class="themspbt">
                <input type="submit" style="width: 19%; margin-top: 62px; margin-left: 14px; float: left; height: 25px;" value="+">
                <input type="text" value="1" style="width: 30%; margin: 62px 0;  margin-left: 5px; text-align: center; float: left; height: 22px;">
                <input type="submit" style="width: 19%;  margin-left: 5px; float: left; margin-top: 62px; height: 25px;" value="-">

            </div>

            <div style="margin-top: 55px;" class="xoaspbt">
                <a href="#"><i style="font-size: 25px;" class="bi bi-trash"></i></a>
            </div>
        </div>

        <div class="ndgh">
            <div class="hinhspghbt">
                <img src="./layout da1/img/hinhvaycuoi1.jpg" alt="">

            </div>
            <div class="tenspghbt">
                <p>Luxury | Váy cưới xòe Sylvia</p>

            </div>
            <div class="giaspghbt">
                <p>26.000.000đ</p>

            </div>

            <div class="themspbt">
                <input type="submit" style="width: 19%; margin-top: 62px; margin-left: 14px; float: left; height: 25px;" value="+">
                <input type="text" value="1" style="width: 30%; margin: 62px 0;  margin-left: 5px; text-align: center; float: left; height: 22px;">
                <input type="submit" style="width: 19%;  margin-left: 5px; float: left; margin-top: 62px; height: 25px;" value="-">

            </div>

            <div style="margin-top: 55px;" class="xoaspbt">
                <a href="#"><i style="font-size: 25px;" class="bi bi-trash"></i></a>
            </div>
        </div>

        <div class="ndgh">
            <div class="hinhspghbt">
                <img src="./layout da1/img/hinhvaycuoi1.jpg" alt="">

            </div>
            <div class="tenspghbt">
                <p>Luxury | Váy cưới xòe Sylvia</p>

            </div>
            <div class="giaspghbt">
                <p>26.000.000đ</p>

            </div>

            <div class="themspbt">
                <input type="submit" style="width: 19%; margin-top: 62px; margin-left: 14px; float: left; height: 25px;" value="+">
                <input type="text" value="1" style="width: 30%; margin: 62px 0;  margin-left: 5px; text-align: center; float: left; height: 22px;">
                <input type="submit" style="width: 19%;  margin-left: 5px; float: left; margin-top: 62px; height: 25px;" value="-">

            </div>

            <div style="margin-top: 55px;" class="xoaspbt">
                <a href="#"><i style="font-size: 25px;" class="bi bi-trash"></i></a>
            </div>
        </div>

        <div class="ndgh">
            <div class="hinhspghbt">
                <img src="./layout da1/img/hinhvaycuoi1.jpg" alt="">

            </div>
            <div class="tenspghbt">
                <p>Luxury | Váy cưới xòe Sylvia</p>

            </div>
            <div class="giaspghbt">
                <p>26.000.000đ</p>

            </div>

            <div class="themspbt">
                <input type="submit" style="width: 19%; margin-top: 62px; margin-left: 14px; float: left; height: 25px;" value="+">
                <input type="text" value="1" style="width: 30%; margin: 62px 0;  margin-left: 5px; text-align: center; float: left; height: 22px;">
                <input type="submit" style="width: 19%;  margin-left: 5px; float: left; margin-top: 62px; height: 25px;" value="-">

            </div>

            <div style="margin-top: 55px;" class="xoaspbt">
                <a href="#"><i style="font-size: 25px;" class="bi bi-trash"></i></a>
            </div>
        </div> -->
    </div>
    <?php
    // Kiểm tra xem $_SESSION['giohang'] có tồn tại hay không
    if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
        echo '<a href="index.php?pg=donhang2">
        <div class="thanhtoan">
            <h3>THANH TOÁN</h3>
        </div>
    </a>
    <div class="tongtien">
        <h3 id="totalPrice">
            TỔNG TIỀN:';

        // Kiểm tra nếu $tt là một chuỗi số hợp lệ
        if (is_numeric($tt)) {
            // Gọi hàm number_format chỉ khi $tt là một số
            echo number_format($tt, 0, ',', '.');
        } else {
            // Xử lý khi $tt không phải là một số hợp lệ
            echo "0";
        }

        echo ' đ
        </h3>
    </div>';
    } else {
        // Nếu không tồn tại, không hiển thị gì cả hoặc có thể thêm phần hiển thị thông báo
        // Ví dụ: echo "Giỏ hàng trống";
    }
    ?>

    <!-- <div class="footer">
        <div class="boxtrongfooter">
            <div class="boxnoidungfooter">
                <div class="boxtieudefooter">
                    <h6>VỀ CHÚNG TÔI</h6>

                </div>

                <div class="logoft">
                    <img src="../layout da1/img/logofooter tách nền.png" alt="">

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
                    <img src="../layout da1/img/iconfbytis.png" alt="">
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