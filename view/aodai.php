<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./layout da1/aodai/styleaodai.css">
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


        menu
        <div class="menu">
            <ul>
                <li><a href="../bosuutap/bosuutap.html"><b>BỘ SƯU TẬP</b></a></li>

                <li class="dropdown">
                    <a href="../vaycuoi/vaycuoi.html"><b>VÁY CƯỚI</b></a>
                    <div class="dropdown-content">
                        <a href="#">VÁY CƯỚI ĐUÔI CÁ</a>
                        <a href="#">VÁY CƯỚI CHỨ A</a>
                        <a href="#">VÁY CƯỚI XÒE</a>
                        <a href="#">THIẾT KẾ VÁY CƯỚI</a>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#"><b>ÁO DÀI</b></a>
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
        <div class="bodyvaycuoi">
            <div class="bannervaycuoi">
                <img src="./layout da1/img/banneraodai.jpg" alt="">
            </div >
            <div class="gioithieuvaycuoi">
            <p>Áo dài lễ phục truyền thống luôn là lựa chọn hàng đầu trong lễ cưới hỏi của người Việt Nam. Các nhà thiết kế của Marymy luôn chú trọng việc lựa chọn chất liệu, tỉ mỉ trong từng đường kim mũi chỉ, chỉn chu trong việc thiết kế tạo nên form dáng chuẩn. Giúp “tôn dáng” tối ưu cho cô dâu và mẹ của cô dâu trong ngày trọng đại.</p>
            
            <p>Với đội ngũ thiết kế và thợ may lành nghề có kinh nghiệm hơn 20 năm trong ngành cưới. Chúng tôi tạo ra các thiết kế mới cập nhật liên tục mỗi tuần. Giúp bạn có đa dạng lựa chọn từ mẫu mã, thiết kế, chất liệu, màu sắc. Đảm bảo hài lòng bất kì cô dâu khó tính nào.</p>
            
            <p>Hãy để Marrie Fashion là người đồng hành cùng bạn “đánh dấu” khoảnh khắc đáng nhớ trong ngày cưới của mình.</p>
            </div>
            <?php
        $html_dssp13 ='';
        foreach ($dssp13 as $sp13) {
            extract($sp13);
            $link = "index.php?pg=chitietsp&idpro=".$idsp;
            $html_dssp13.= '<div class="boxtrongspmoi">
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

        $html_dssp14 = '';
        foreach ($dssp14 as $sp14) {
            extract($sp14);
            $link = "index.php?pg=chitietsp&idpro=".$idsp;
            $html_dssp14 .= '<div class="boxtrongspmoi">
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

        $html_dssp15 = '';
        foreach ($dssp15 as $sp15) {
            extract($sp15);
            $link = "index.php?pg=chitietsp&idpro=".$idsp;
            $html_dssp15 .= '<div class="boxtrongspmoi">
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

        $html_dssp16 = '';
        foreach ($dssp16 as $sp16) {
            extract($sp16);
            $link = "index.php?pg=chitietsp&idpro=".$idsp;
            $html_dssp16 .= '<div class="boxtrongspmoi">
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
            <?= $html_dssp13; ?> 

                <!-- <div class="boxtrongspmoi">
                    <div class="boxshadow">
                        <a href="#">
                            <div class="boximgspmoi">
                                <img src="./layout da1/img/hinhaodai1.jpg" alt="">
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
                                Áo Dài Cưới Màu Hồng Marine </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>5.000.000đ</p>

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
                                <img src="./layout da1/img/hinhaodai2.jpg" alt="">
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
                                Áo Dài Cưới Đỏ Mélanie </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>6.000.000đ</p>

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
                                <img src="./layout da1/img/hinhaodai3.jpg" alt="">
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
                                Áo Dài Cưới Màu Trắng Marwa </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>5.000.000đ</p>

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
                                <img src="./layout da1/img/hinhaodai4.jpg" alt="">
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
                                Áo Dài Cưới Đính Đá Laura </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>5.000.000đ</p>

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
            <?= $html_dssp14; ?> 

                <!-- <div class="boxtrongspmoi">
                    <div class="boxshadow">
                        <a href="#">
                            <div class="boximgspmoi">
                                <img src="./layout da1/img/hinhaodai5.jpg" alt="">
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
                                Áo Dài Cưới Cổ Truyền Thống Chloé </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>5.000.000đ</p>
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
                                <img src="./layout da1/img/hinhaodai6.jpg" alt="">
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
                                Áo Dài Cưới Màu Da Dufour </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>5.000.000đ</p>
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
                                <img src="./layout da1/img/hinhaodai7.jpg" alt="">
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
                                Áo Dài Cưới Cổ Truyền Thống Lucie </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>5.000.000đ</p>

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
                                <img src="./layout da1/img/hinhaodai8.jpg" alt="">
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
                                Áo Dài Cưới Màu Trắng Léa </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>5.000.000đ</p>
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
            <?= $html_dssp15; ?> 

                <!-- <div class="boxtrongspmoi">
                    <div class="boxshadow">
                        <a href="#">
                            <div class="boximgspmoi">
                                <img src="./layout da1/img/hinhaodai9.jpg" alt="">
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
                                Áo Dài Trung Niên Màu Hồng Phấn</p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>6.000.000đ</p>

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
                                <img src="./layout da1/img/hinhaodai10.jpg" alt="">
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
                                Áo Dài Trung Niên Cao Cấp Sequin </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>4.000.000đ</p>
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
                                <img src="./layout da1/img/hinhaodai11.jpg" alt="">
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
                                Áo Dài Trung Niên Cách Tân Hiện Đại </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>5.000.000đ</p>
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
                                <img src="./layout da1/img/hinhaodai12.jpg" alt="">
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
                                Áo Dài Trung Niên Cổ Truyền Thống</p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>4.000.000đ</p>
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
            <?= $html_dssp16; ?> 

                <!-- <div class="boxtrongspmoi">
                    <div class="boxshadow">
                        <a href="#">
                            <div class="boximgspmoi">
                                <img src="./layout da1/img/hinhaodai13.jpg" alt="">
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
                                Áo Dài Trung Niên Nhung Đen </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>6.000.000đ</p>
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
                                <img src="./layout da1/img/hinhaodai14.jpg" alt="">
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
                                Áo Dài Trung Niên Màu Vàng Cam </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>6.000.000đ</p>
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
                                <img src="./layout da1/img/hinhaodai15.jpg" alt="">
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
                                Áo Dài Cưới Màu Da Sandy </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>6.000.000đ</p>
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
                                <img src="./layout da1/img/hinhaodai16.jpg" alt="">
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
                                Áo Dài Cưới Màu Da Beige </p>
                        </div>
                        </a>
                        <div class="giasp">
                            <p>6.000.000đ</p>
                        </div>
                        <a href="">
                        <div class="butondoctiep">
                            <p>ĐẶT HÀNG</p>
                        </div>
                        </a>
                    </div>    
                </div>    -->
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
    
        </div> -->

    
<!-- </body>
</html> -->