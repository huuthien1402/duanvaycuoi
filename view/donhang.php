<?php
$tongthanhtoan = get_tongdonhang();
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);
    $userinfo = get_user($makh);
    extract($userinfo);
}
?>
<body>
    <link rel="stylesheet" href="./layout da1/donhang/styledonhang.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <section class="containerfull">
        <div class="container">

            <form action="index.php?pg=donhang" method="post">
                <div class="col9 viewcart">

                    <div class="ttdathang">
                        <h2 style="border: none;">Thông tin người đặt hàng</h2>

                        <label for="hoten"><b>Họ và tên</b></label>
                        <input type="text" placeholder="Nhập họ tên đầy đủ" name="hoten" id="hoten" value="<?= isset($userinfo) ? $khachhang : ''; ?>" required>

                        <label for="diachi"><b>Địa chỉ</b></label>
                        <input type="text" placeholder="Nhập địa chỉ" name="diachi" id="diachi" value="<?= isset($userinfo) ? $diachi : ''; ?>" required>

                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Nhập email" name="email" id="email" value="<?= isset($userinfo) ? $email : ''; ?>" required>

                        <label for="dienthoai"><b>Điện thoại</b></label>
                        <input type="text" placeholder="Nhập điện thoại" name="dienthoai" id="dienthoai" value="<?= isset($userinfo) ? $dienthoai : ''; ?>" required>
                    </div>

                    <div class="ttdathang">
                        <input onclick="showttnhanhang()" type="radio" id="radio1">
                        Địa chỉ nhận ở nơi khác
                        <?php
                        if (!isset($_SESSION['s_user'])) {
                            // Nếu $_SESSION['s_user'] không tồn tại, hiển thị liên kết
                            echo '<a href="index.php?pg=dangnhap" style="margin-left: 380px;">Bạn đã có tài khoản?</a>';
                        }
                        ?>
                    </div>

                    <div class="ttdathang" id="ttnhanhang">
                        <h2 style="border: none;">Thông tin người nhận hàng</h2>

                        <label for="hoten"><b>Họ và tên</b></label>
                        <input type="text" placeholder="Nhập họ tên đầy đủ" name="hoten_nguoinhan" id="hoten_nguoinhan">

                        <label for="diachi"><b>Địa chỉ</b></label>
                        <input type="text" placeholder="Nhập địa chỉ" name="diachi_nguoinhan" id="diachi_nguoinhan">

                        <label for="dienthoai"><b>Điện thoại</b></label>
                        <input type="text" placeholder="Nhập điện thoại" name="dienthoai_nguoinhan" id="dienthoai_nguoinhan">
                    </div>

                </div>

                <div class="col3">
                    <h2 style="border: none;">Tổng thanh toán: <?= number_format($tongthanhtoan, 0, ',', '.') ?>đ</h2>
                    <div class="pttt">
                        <div class="boxcart">
                            <h3>Phương thức thanh toán: </h3>
                            <input type="radio" name="pttt" value="1" id="" checked> Tiền mặt<br>
                            <input type="radio" name="pttt" value="2" id=""> Ví điện tử<br><input type="radio" name="pttt" value="3" id=""> Chuyển khoản<br>
                            <input type="radio" name="pttt" value="4" id=""> Thanh toán online<br>
                        </div>
                    </div>
                    <button type="submit" name="donhang">Thanh toán</button>
                </div>
            </form>

        </div>
    </section>
    <script>
        let clickCount = 0;
        var ttnhanhang = document.getElementById("ttnhanhang");
        ttnhanhang.style.display = "none";
        function showttnhanhang() {
            if (ttnhanhang.style.display == "none") {
                ttnhanhang.style.display = "block";
            } else {
                ttnhanhang.style.display = "none";
            }
            const radio1 = document.getElementById('radio1');
            // Tăng biến đếm mỗi khi radio được nhấn
            clickCount++;
            if (clickCount % 2 === 0) {
                // Nếu là lần nhấn chẵn, bỏ chọn radio
                radio1.checked = false;
            } else {
                // Nếu là lần nhấn lẻ, chọn lại radio
                radio1.checked = true;
            }
        }
    </script>
    <!-- </body> -->