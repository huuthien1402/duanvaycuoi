<?php
require_once 'pdo.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }

function get_dssp_new($limi){
    $sql = "SELECT * FROM sanpham ORDER BY idsp DESC limit ".$limi;
    return pdo_query($sql);
}
// function get_dssp_best($limi){
//     $sql = "SELECT * FROM sanpham WHERE bestseller=1 ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
// function get_dssp_view($limi){
//     $sql = "SELECT * FROM sanpham ORDER BY view DESC limit ".$limi;
//     return pdo_query($sql);
// }

function get_dssp($kyw,$loaisp,$limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >=1";
    if($loaisp>0){
        $sql .=" AND loaisp=".$loaisp;
    }
    if ($kyw!="") {
        $sql .=" AND tensp like '%".$kyw."%'";
    }
    $sql .= " ORDER BY idsp ASC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp2($kyw,$loaisp,$limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >=5";
    if($loaisp>0){
        $sql .=" AND loaisp=".$loaisp;
    }
    if ($kyw!="") {
        $sql .=" AND tensp like '%".$kyw."%'";
    }
    $sql .= " ORDER BY idsp ASC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp3($kyw,$loaisp,$limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >=9";
    if($loaisp>0){
        $sql .=" AND loaisp=".$loaisp;
    }
    if ($kyw!="") {
        $sql .=" AND tensp like '%".$kyw."%'";
    }
    $sql .= " ORDER BY idsp ASC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp4($kyw,$loaisp,$limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >=13";
    if($loaisp>0){
        $sql .=" AND loaisp=".$loaisp;
    }
    if ($kyw!="") {
        $sql .=" AND tensp like '%".$kyw."%'";
    }
    $sql .= " ORDER BY idsp ASC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp5($kyw,$loaisp,$limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >=17";
    if($loaisp>0){
        $sql .=" AND loaisp=".$loaisp;
    }
    if ($kyw!="") {
        $sql .=" AND tensp like '%".$kyw."%'";
    }
    $sql .= " ORDER BY idsp ASC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp6($kyw,$loaisp,$limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >=21";
    if($loaisp>0){
        $sql .=" AND loaisp=".$loaisp;
    }
    if ($kyw!="") {
        $sql .=" AND tensp like '%".$kyw."%'";
    }
    $sql .= " ORDER BY idsp ASC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp7($kyw,$loaisp,$limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >=25";
    if($loaisp>0){
        
        $sql .=" AND loaisp=".$loaisp;
    }
    if ($kyw!="") {
        $sql .=" AND tensp like '%".$kyw."%'";
    }
    $sql .= " ORDER BY idsp ASC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp8($kyw,$loaisp,$limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >=30";
    if($loaisp>0){
        $sql .=" AND loaisp=".$loaisp;
    }
    if ($kyw!="") {
        $sql .=" AND tensp like '%".$kyw."%'";
    }
    $sql .= " ORDER BY idsp ASC limit ".$limi;
    return pdo_query($sql);
}

function get_dssp9($limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >= 1 ORDER BY idsp ASC LIMIT ".$limi;
    return pdo_query($sql);
}

function get_dssp10($limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >= 5 ORDER BY idsp ASC LIMIT ".$limi;
    return pdo_query($sql);
}

function get_dssp11($limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >= 9 ORDER BY idsp ASC LIMIT ".$limi;
    return pdo_query($sql);
}

function get_dssp12($limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >= 13 ORDER BY idsp ASC LIMIT ".$limi;
    return pdo_query($sql);
}

function get_dssp13($limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >= 17 ORDER BY idsp ASC LIMIT ".$limi;
    return pdo_query($sql);
}

function get_dssp14($limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >= 21 ORDER BY idsp ASC LIMIT ".$limi;
    return pdo_query($sql);
}

function get_dssp15($limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >= 25 ORDER BY idsp ASC LIMIT ".$limi;
    return pdo_query($sql);
}

function get_dssp16($limi){
    $sql = "SELECT * FROM sanpham WHERE idsp >= 30 ORDER BY idsp ASC LIMIT ".$limi;
    return pdo_query($sql);
}




function get_sp_by_id($idsp){
    $sql = "SELECT * FROM sanpham WHERE idsp=?";
    return pdo_query_one($sql, $idsp);
}

// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }