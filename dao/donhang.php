<?php
// require_once 'pdo.php';



function donhang_insert_id( $iduser ,$nguoidat_ten,$nguoidat_email,$nguoidat_diachi, $nguoidat_dienthoai,$nguoinhan_ten,$nguoinhan_dienthoai,$nguoinhan_diachi
,$pttt,$tongthanhtoan,$madh ){
    $sql = "INSERT INTO donhang(  iduser , nguoidat_ten , nguoidat_email, nguoidat_diachi, nguoidat_dienthoai ,nguoinhan_ten,nguoinhan_dienthoai
    ,nguoinhan_diachi,pttt,tongthanhtoan, madh) VALUES (? , ? , ? , ? , ? , ?, ? , ? , ? , ? , ? )";
    return pdo_execute_id($sql, $iduser ,$nguoidat_ten,$nguoidat_email,$nguoidat_diachi, $nguoidat_dienthoai,$nguoinhan_ten,$nguoinhan_dienthoai,$nguoinhan_diachi
    ,$pttt,$tongthanhtoan, $madh);
}

?>