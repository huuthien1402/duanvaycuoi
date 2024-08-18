<?php
session_start();
//nhúng kết nối cơ sở dữ liệu
include("dao/pdo.php");
include("dao/user.php");
include("dao/danhmuc.php");
include("dao/sanpham.php");
include("dao/giohang.php");
include("dao/donhang.php");
include("view/header.php");

if (!isset($_GET['pg'])) {
    include("view/home.php");
} else {
    switch ($_GET['pg']) {
        case 'bosuutap':
            $dsdm = danhmuc_all();
            if (!isset($_GET['loaisp'])) {
                $loaisp = 0;
            } else {
                $loaisp = $_GET['loaisp'];
            }
            //kiểm tra có ph
            if (isset($_POST["timkiem"]) && ($_POST["timkiem"])) {
                $kyw = $_POST["kyw"];
            } else {
                $kyw = "";
            }
            $dssp = get_dssp($kyw, $loaisp, 4);
            $dssp2 = get_dssp2($kyw, $loaisp, 4);
            $dssp3 = get_dssp3($kyw, $loaisp, 4);
            $dssp4 = get_dssp4($kyw, $loaisp, 4);
            $dssp5 = get_dssp5($kyw, $loaisp, 4);
            $dssp6 = get_dssp6($kyw, $loaisp, 4);
            $dssp7 = get_dssp7($kyw, $loaisp, 4);
            $dssp8 = get_dssp8($kyw, $loaisp, 4);
            include("view/bosuutap.php");
            break;
        
        case 'vaycuoi':
            $dssp9 = get_dssp9(4);
            $dssp10 = get_dssp10(4);
            $dssp11 = get_dssp11(4);
            $dssp12 = get_dssp12(4);
            include("view/vaycuoi.php");
            break;
        case 'aodai':
            $dssp13 = get_dssp13(4);
            $dssp14 = get_dssp14(4);
            $dssp15 = get_dssp15(4);
            $dssp16 = get_dssp16(4);
            include("view/aodai.php");
            break;
        


        case 'chitietsp':
            if (isset($_GET['idpro'])) {
                $idsp = $_GET['idpro'];
                $chitietsp = get_sp_by_id($idsp);
                include("view/chitietsp.php");
            } else {
                include("view/home.php");
            }
            break;
        case 'tuvan':
            include("view/tuvan.php");
            break;
        case 'giohang':
            include("view/giohang.php");
            break;
        case 'delcart':
            if (isset($_GET['ind']) && ($_GET['ind'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['ind'], 1);
                header('location: index.php?pg=giohang');
            }
            break;
        case 'dangky':
            include("view/dangky.php");
            break;       
        case 'adduser':
            if (isset($_POST["dangky"]) && ($_POST["dangky"])) {
                // Lấy dữ liệu từ form
                $username = $_POST["username"];
                $password = $_POST["password"];
                $repassword = $_POST["repassword"];
                $email = $_POST["email"];
                $_SESSION["username_value"] = $_POST["username"];
                $_SESSION["email_value"] = $_POST["email"];
                $_SESSION["password_value"] = $_POST["password"];
                $_SESSION["repassword_value"] = $_POST["repassword"];
                // Tạo một mảng để lưu trữ thông báo lỗi
                $errors = [];
                $dktc = [];
                // Username Length Check
                if (empty($username)) {
                    $errors["username"] = "Vui lòng nhập tên đăng nhập.";
                } elseif (strlen($username) < 8) {
                    $errors["username"] = "Tên đăng nhập phải có ít nhất 8 kí tự.";
                }
                // Email Check
                if (empty($email)) {
                    $errors["email"] = "Vui lòng nhập địa chỉ email.";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors["email"] = "Địa chỉ email không hợp lệ.";
                }
                // Password Length Check
                if (empty($password)) {
                    $errors["password"] = "Vui lòng nhập mật khẩu.";
                } elseif (strlen($password) < 8) {
                    $errors["password"] = "Mật khẩu phải có ít nhất 8 kí tự.";
                } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[0-9])/", $password)) {
                    $errors["password"] = "Mật khẩu phải có ít nhất 1 chữ viết hoa và 1 số.";
                }
                // Re-entered Password Check
                if (empty($repassword)) {
                    $errors["repassword"] = "Vui lòng nhập lại mật khẩu.";
                } elseif ($password != $repassword) {
                    $errors["repassword"] = "Mật khẩu nhập lại không khớp.";
                }
                $_SESSION['errors'] = $errors;               
                header('location: index.php?pg=dangky');
                // Nếu không có lỗi, thực hiện thêm dữ liệu vào cơ sở dữ liệu
                if (empty($errors)) {
                    // Thực hiện thêm người dùng vào cơ sở dữ liệu
                    khachhang_insert($username, $password, $email);
                    $_SESSION['dktc'] = "Đăng ký thành công ";                  
                }
            }
            break;
        case 'uppdateuser':
            // xác định giá trị input
            if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $khachhang = $_POST["hoten"];

                $diachi = $_POST["diachi"];
                $dienthoai = $_POST["dienthoai"];
                $makh = $_POST["makh"];
                $phanquyen = 0;
                // xử lý
                user_update($khachhang,$username, $password, $email, $diachi, $dienthoai, $phanquyen, $makh);
                include("view/myaccount_confirm.php");
            }
            break;
        case 'login':
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                //xử lý: kiểm tra
                $kq = checkuser($username, $password);
                $kq2 = checkuser($username, $password);
                if (is_array($kq2)) {
                    extract($kq2);
                }
                if ($phanquyen == 1) {
                    $_SESSION['s_user2'] = $kq;
                    header('Location: admin/index.php');
                }
                if ($phanquyen == 0) {
                    if (is_array($kq) && (count($kq))) {
                        $_SESSION['s_user'] = $kq;
                        header('location: index.php');
                    }
                }
                if ($phanquyen == '') {
                    $tb = "Tài khoản không tồn tại";
                    $_SESSION['tb_dangnhap'] = $tb;
                    header('location: index.php?pg=dangnhap');
                }
                if (isset($diachi, $khachhang, $dienthoai, $email)){
                    $_SESSION['s_user'] = $kq;
                    header('location: index.php?pg=donhang2');
                }
            }
            break;
        case 'logout':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                unset($_SESSION['s_user']);
            }
            header('location: index.php');
            break;
        case 'myaccount':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                include("view/myaccount.php");
            }
            break;
        case 'dangnhap':
            include("view/dangnhap.php");
            break;
        case 'trangchu':
            include("view/home.php");
            break;
         case 'addcart':
                 //lấy dữ liệu về
                if (isset($_POST['btnaddcart']) && ($_POST['btnaddcart'])) {
                    $idsp = $_POST['idsp'];
                    $tensp = $_POST['tensp'];
                    $hinh = $_POST['hinh'];
                    $soluong = $_POST['soluong'];
                    $giamoi = $_POST['giamoi'];
                    $thanhtien = (int) $giamoi * (int) $soluong;          
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $product_exists = false;
                    foreach ($_SESSION['giohang'] as &$product) {
                        if ($product['idsp'] == $idsp) {
                            // Sản phẩm đã tồn tại, tăng số lượng
                            $product['soluong'] += $soluong;
                            $product['thanhtien'] += $thanhtien;
                            $product_exists = true;
                            break;
                        }
                    }           
                    // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
                    if (!$product_exists) {
                        $spaddcart = [
                            "idsp" => $idsp,
                            "tensp" => $tensp,
                            "hinh" => $hinh,
                            "soluong" => $soluong,
                            "giamoi" => $giamoi,
                            "thanhtien" => $thanhtien
                        ];
                        $_SESSION['giohang'][] = $spaddcart;
                    }           
                    header('location: index.php?pg=giohang');
                }
                include("view/home.php");
                break;
        case 'donhang':
            //lấy dữ liệu về
            if (isset($_POST['donhang'])) {
                $nguoidat_ten = $_POST['hoten'];
                $nguoidat_diachi = $_POST['diachi'];
                $nguoidat_email = $_POST['email'];
                $nguoidat_dienthoai = $_POST['dienthoai'];
                $nguoinhan_ten = $_POST['hoten_nguoinhan'];
                $nguoinhan_diachi = $_POST['diachi_nguoinhan'];
                $nguoinhan_dienthoai = $_POST['dienthoai_nguoinhan'];
                $pttt = $_POST['pttt'];
                // insert user mới 
                $username = "guest" . rand(1, 999);
                $password = "123456";
                if (empty($_SESSION['s_user'])){
                    $iduser = khachhang_insert_id($username, $password, $nguoidat_ten, $nguoidat_diachi, $nguoidat_dienthoai, $nguoidat_email);
                }
                if (isset($_SESSION['s_user'])){
                    $iduser=$makh;
                }              
                //tạo đơn hàng
                $madh = "mfashion" . $iduser . "-" . date("His-dmY");
                $tongthanhtoan = get_tongdonhang();
                $idbill = donhang_insert_id(
                    $iduser,
                    $nguoidat_ten,
                    $nguoidat_email,
                    $nguoidat_diachi,
                    $nguoidat_dienthoai,
                    $nguoinhan_ten,
                    $nguoinhan_dienthoai,
                    $nguoinhan_diachi,
                    $pttt,
                    $tongthanhtoan,
                    $madh
                );
                //insert giỏ hàng từ session vào table cart 
                if (is_array($_SESSION['giohang'])) {
                    foreach ($_SESSION['giohang'] as $spaddcart) {
                        extract($spaddcart);
                        giohang_insert($idsp, $giamoi, $tensp, $hinh, $soluong, $thanhtien, $idbill);
                    }
                }
                $_SESSION['giohang'] = null;
            }
            include("view/donhang_confirm.php");
            break;
        case 'donhang2':
            include("view/donhang.php");
            break;
        default:
            include("view/home.php");
            break;
    }
}
include("view/footer.php");
