<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head> -->

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./layout da1/vaycuoi/stylevaycuoi.css">
    <style>
        .boxspmoi .boxtrongspmoi .boxshadow input{
            border: none;
            background-color: white;
            color: black;
            transition: 0.95s;
            margin-top: 17px;
            height: 25px;
            font-size: 11px;
            width: 70px;
            font-weight: 700;
            cursor: pointer;
        }
        .boxspmoi .boxtrongspmoi .boxshadow input:hover{
            background-color: black;
            color: white;           
        }
    </style>
    <!-- <div class="header">

        <a href="../index.html">
            <div class="logo">
                <img src="./layout da1/img/logomf.png" alt="">
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


        
        <div class="menu">
            <ul>
                <li><a href="../bosuutap/bosuutap.html"><b>BỘ SƯU TẬP</b></a></li>

                <li class="dropdown">
                    <a href="#"><b>VÁY CƯỚI</b></a>
                    <div class="dropdown-content">
                        <a href="#">VÁY CƯỚI ĐUÔI CÁ</a>
                        <a href="#">VÁY CƯỚI CHỨ A</a>
                        <a href="#">VÁY CƯỚI XÒE</a>
                        <a href="#">THIẾT KẾ VÁY CƯỚI</a>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="../aodai/aodai.html"><b>ÁO DÀI</b></a>
                    <div class="dropdown-content">
                        <a href="#">ÁO DÀI CƯỚI</a>
                        <a href="#">ÁO DÀI TRUNG NIÊN</a>
                        <a href="#">ÁO DÀI BƯNG QUẢ</a>
                    </div>
                </li>




                <li class="dropdown">
                    <a href="dropbtn"><b>TƯ VẤN</b></a>
                    <div class="dropdown-content">
                        <a href="#">VÁY CƯỚI</a>
                        <a href="#">CÔ DÂU MARYMY</a>
                    </div>
                </li>

                <li><a href="../taikhoan/taikhoan.html"><b>TÀI KHOẢN</b></a></li>

            </ul>
        </div>

    </div> -->
    <div class="bodyvaycuoi">
        <div class="bannervaycuoi">
            <img src="./layout da1/img/bannervaycuoi.jpg" alt="">
        </div>
        <div class="gioithieuvaycuoi">
            <p>MARRIE FASHION – Với kinh nghiệm hơn 20 năm trong ngành thiết kế váy cưới, các nhà thiết kế của chúng tôi luôn chú trọng sự tỉ mỉ tinh tế trong việc lựa chọn chất liệu và đính kết.</p>

            <p>Sự am hiểu về chất liệu tạo nên sự khác biệt giữa một chiếc váy bình thường và một chiếc váy cao cấp giúp tôn vinh vẻ đẹp của cô dâu trong ngày trọng đại.</p>

            <p>Dù bạn lựa chọn một bộ áo cưới được đặt may theo thiết kế riêng hay may thuê áo cưới. MARRIE FASHION đảm bảo mang đến chất lượng và sự hài lòng cho BẠN, với đa dạng mẫu mã từ màu sắc đến kiểu dáng, cập nhật liên tục các xu hướng trên thế giới, đáp ứng được những cô dâu kén dáng nhất.</p>
        </div>

        <?php
        $html_dssp9 ='';
        foreach ($dssp9 as $sp9) {
            extract($sp9);
            $link = "index.php?pg=chitietsp&idpro=".$idsp;
            $html_dssp9.= '<div class="boxtrongspmoi">
            <div class="boxshadow">
                <a href="'.$link.'">
                    <div class="boximgspmoi">
                        <img src="./layout da1/img/' .$hinh. '" alt="">
                    </div>
                </a>
                <p class="sao">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </p>
                <a href="'.$link.'">
                    <div class="tensp">
                        <p>
                            ' .$tensp. ' </p>
                    </div>
                </a>
                <div class="giasp">
                    <p>' .number_format($giamoi, 0, ',', '.'). 'đ</p>

                </div>
                <form action="index.php?pg=addcart" method="post">
                    <input type="hidden" name="idsp" value="'.$idsp.'">
                    <input type="hidden" name="tensp" value="'.$tensp.'">
                    <input type="hidden" name="hinh" value="'.$hinh.'">
                    <input type="hidden" name="giamoi" value="'.$giamoi.'">
                    <input type="hidden" name="soluong" value="1">
                    <input type="submit" name="btnaddcart" value="ĐẶT HÀNG" >           
                </form>
            </div>
        </div>';
        }

        $html_dssp10 = '';
        foreach ($dssp10 as $sp10) {
            extract($sp10);
            $link = "index.php?pg=chitietsp&idpro=".$idsp;
            $html_dssp10 .= '<div class="boxtrongspmoi">
            <div class="boxshadow">
                <a href="'.$link.'">
                    <div class="boximgspmoi">
                        <img src="./layout da1/img/' .$hinh. '" alt="">
                    </div>
                </a>
                <p class="sao">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </p>
                <a href="'.$link.'">
                    <div class="tensp">
                        <p>
                            ' .$tensp. ' </p>
                    </div>
                </a>
                <div class="giasp">
                    <p>' .number_format($giamoi, 0, ',', '.'). 'đ</p>

                </div>
                <form action="index.php?pg=addcart" method="post">
                    <input type="hidden" name="idsp" value="'.$idsp.'">
                    <input type="hidden" name="tensp" value="'.$tensp.'">
                    <input type="hidden" name="hinh" value="'.$hinh.'">
                    <input type="hidden" name="giamoi" value="'.$giamoi.'">
                    <input type="hidden" name="soluong" value="1">
                    <input type="submit" name="btnaddcart" value="ĐẶT HÀNG" >           
                </form>
            </div>
        </div>';
        }

        $html_dssp11 = '';
        foreach ($dssp11 as $sp11) {
            extract($sp11);
            $link = "index.php?pg=chitietsp&idpro=".$idsp;
            $html_dssp11 .= '<div class="boxtrongspmoi">
            <div class="boxshadow">
                <a href="'.$link.'">
                    <div class="boximgspmoi">
                        <img src="./layout da1/img/' .$hinh. '" alt="">
                    </div>
                </a>
                <p class="sao">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </p>
                <a href="'.$link.'">
                    <div class="tensp">
                        <p>
                            ' .$tensp. ' </p>
                    </div>
                </a>
                <div class="giasp">
                    <p>' .number_format($giamoi, 0, ',', '.'). 'đ</p>

                </div>
                <form action="index.php?pg=addcart" method="post">
                    <input type="hidden" name="idsp" value="'.$idsp.'">
                    <input type="hidden" name="tensp" value="'.$tensp.'">
                    <input type="hidden" name="hinh" value="'.$hinh.'">
                    <input type="hidden" name="giamoi" value="'.$giamoi.'">
                    <input type="hidden" name="soluong" value="1">
                    <input type="submit" name="btnaddcart" value="ĐẶT HÀNG" >               
                </form>
            </div>
        </div>';
        }

        $html_dssp12 = '';
        foreach ($dssp12 as $sp12) {
            extract($sp12);
            $link = "index.php?pg=chitietsp&idpro=".$idsp;
            $html_dssp12 .= '<div class="boxtrongspmoi">
            <div class="boxshadow">
                <a href="'.$link.'">
                    <div class="boximgspmoi">
                        <img src="./layout da1/img/' .$hinh. '" alt="">
                    </div>
                </a>
                <p class="sao">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </p>
                <a href="'.$link.'">
                    <div class="tensp">
                        <p>
                            ' .$tensp. ' </p>
                    </div>
                </a>
                <div class="giasp">
                    <p>' .number_format($giamoi, 0, ',', '.'). 'đ</p>
                </div>
                <form action="index.php?pg=addcart" method="post">
                    <input type="hidden" name="idsp" value="'.$idsp.'">
                    <input type="hidden" name="tensp" value="'.$tensp.'">
                    <input type="hidden" name="hinh" value="'.$hinh.'">
                    <input type="hidden" name="giamoi" value="'.$giamoi.'">
                    <input type="hidden" name="soluong" value="1">
                    <input type="submit" name="btnaddcart" value="ĐẶT HÀNG" >               
                </form>
            </div>
        </div>';
        }
        ?>
        <div class="boxspmoi">
        <?= $html_dssp9; ?> 
            <!-- <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi1.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Sylvia </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>26.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi2.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Cadie </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>26.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi3.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Amelia </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>24.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi4.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Daniella </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>36.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>

        <div class="boxspmoi">
        <?= $html_dssp10; ?>
            <!-- <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi5.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Elysha </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>28.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi6.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Jaena </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>28.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi7.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Phoebe </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>45.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi8.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Sadie </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>36.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div> -->

        </div>

        <div class="boxspmoi">
        <?= $html_dssp11; ?>
            <!-- <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi9.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Luxury | Váy cưới xòe Eliza </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>46.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi10.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Diamond | Váy cưới suông A Fauna </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>20.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi11.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Diamond | Váy cưới đuôi cá Pamela </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>14.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi12.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Diamond | Váy cưới xòe Natalie </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>26.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>

        <div class="boxspmoi">
        <?= $html_dssp12; ?>
            <!-- <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi13.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Diamond | Váy cưới xòe Gracie </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>26.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi14.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Diamond | Váy cưới đuôi cá Madeline </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>40.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi15.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Diamond | Váy cưới xòe Valerie </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>42.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="boxtrongspmoi">
                <div class="boxshadow">
                    <a href="#">
                        <div class="boximgspmoi">
                            <img src="./layout da1/img/hinhvaycuoi16.jpg" alt="">
                        </div>
                    </a>
                    <p class="sao">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </p>
                    <a href="">
                        <div class="tensp">
                            <p>
                                Diamond | Váy cưới đuôi cá Ivy </p>
                        </div>
                    </a>
                    <div class="giasp">
                        <p>18.000.000đ</p>

                    </div>
                    <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                    </a>
                </div>
            </div> -->

        </div>
    </div>

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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.664432107302!2d106.68193200000002!3d10.779408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fe1e439e019%3A0xcf90225d1df1de1c!2sMARYMY!5e0!3m2!1sen!2sus!4v1699555061265!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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

    </div> -->


<!-- </body>

</html> -->