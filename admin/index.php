<?php
include "../admin/view/header.php";
include "../admin/model/pdo.php";
include "../admin/model/danhmuc.php";
include "../admin/model/sanpham.php";
include "../admin/model/taikhoan.php";
include "../admin/model/donhang.php";
//control panel 

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addlh':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_loaihang($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listlh':
            $listlh = loatall_loaihang();
            include "danhmuc/list.php";
            break;
        case 'xoalh':
            if (isset($_GET['MaLoai']) && ($_GET['MaLoai'] > 0)) {
                delete_loaihang($_GET['MaLoai']);
            }
            $listlh = loatall_loaihang();
            include "danhmuc/list.php";
            break;
        case 'sualh':
            if (isset($_GET['MaLoai']) && ($_GET['MaLoai'] > 0)) {
                $danhmuc = loatone_loaihang($_GET['MaLoai']);
            }

            include "danhmuc/update.php";
            break;
        case 'updatelh':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $idlh = $_POST['MaLoai'];
                updatelh($idlh, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listlh = loatall_loaihang();
            include "danhmuc/update.php";
            break;

            // controller sanpham
        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $MaLoai = $_POST['MaLoai'];
                $tensp = $_POST['tensp'];
                $giamoi = $_POST['giamoi'];
                $hinh = $_FILES['hinh']['name'];
                $mota = $_POST['mota'];
                $target_dir = "../layout da1/img/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);

                insert_sanpham($tensp,$giamoi,$hinh,$mota,$MaLoai);
                $thongbao = "Thêm thành công";
            }
            $listlh = loatall_loaihang();
            include "sanpham/add.php";
            break;

        case 'listsp':
            $listsp = loatall_sanpham();
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                delete_sanpham($_GET['idsp']);
            }
            $listsp = loatall_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $sanpham = loatone_sanpham($_GET['idsp']);
            }

            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tensp = $_POST['tensp'];
                $id = $_POST['idsp'];
                updatelh($id, $tensp);
                $thongbao = "Cập nhật thành công";
            }
            $listsp = loatall_sanpham();
            include "sanpham/update.php";
            break;
            // tai khoan
        case 'dskh':
            $listtk = loatall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'xoatk':
            if (isset($_GET['makh']) && ($_GET['makh'] > 0)) {
                delete_taikhoan($_GET['makh']);
            }
            $listsp = loatall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'addtk':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $makh = $_POST['makh'];
                $khachhang = $_POST['khachhang'];
                $diachi = $_POST['diachi'];
                $dienthoai = $_POST['dienthoai'];
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                insert_taikhoan($makh,$khachhang,$diachi,$dienthoai,$email,$username,$password);
                $thongbao = "Thêm thành công";
            }
            $listlh = loatall_taikhoan();
            include "taikhoan/add.php";
            break;
        case 'updatetk':
            if (isset($_POST['makh']) && ($_POST['makh'] > 0)) {
                $makh = $_POST['makh'];
                $user = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                updatetk($makh, $user, $password, $email, $diachi, $dienthoai);
                $thongbao = "Cập nhật thành công";
            }
            include "taikhoan/update.php";
            break;
            //đơn hàng
        case 'dsdh':
            $listdh = loatall_donhang();
            include "donhang/list.php";
            break;
        case 'xoadh':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_donhang($_GET['id']);
            }
            $listdh = loatall_donhang();
            include "donhang/list.php";
            break;
        default:
            include "../admin/view/home.php";
            break;
    }
} else {
    include "../admin/view/home.php";
}

include '../admin/view/footer.php';
