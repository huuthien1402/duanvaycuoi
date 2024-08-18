<?php
//insert vao table giohang
function giohang_insert($idsp,$gia,$ten,$hinh,$soluong,$thanhtien,$idbill){
    $sql = "INSERT INTO giohang(idsp, gia, ten,img,soluong,thanhtien,iddh) VALUES (?, ?, ?,?,?,?,?)";
    pdo_execute($sql, $idsp,$gia,$ten,$hinh,$soluong,$thanhtien ,$idbill);
}
function get_tongdonhang(){
    $tong=0;
    
    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
        foreach ($_SESSION['giohang'] as $spaddcart) {
            extract($spaddcart);
            $ttien = (int)$giamoi * (int)$soluong;
            $tong += $ttien;
        }
    }
    return $tong;
}
?>