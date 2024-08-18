<?php
// require_once 'pdo.php';

function khachhang_insert($username, $password, $email ){
    $sql = "INSERT INTO khachhang(username, password, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
}

function khachhang_insert_id($username, $password ,$hoten, $diachi , $dienthoai , $email ){
    $sql = "INSERT INTO khachhang(username, password , khachhang , diachi, dienthoai, email) VALUES (? , ? , ? , ? , ? , ?)";
    return pdo_execute_id($sql, $username,$password,$hoten , $diachi, $dienthoai, $email);
}

function user_update($khachhang,$username, $password, $email, $diachi, $dienthoai, $phanquyen, $makh)
{
    $sql = "UPDATE khachhang SET khachhang=?,username=?, password=?, email=?, diachi=?, dienthoai=?, phanquyen=? WHERE makh=?";
    pdo_execute($sql,$khachhang, $username, $password, $email, $diachi, $dienthoai, $phanquyen, $makh);
}
function checkuser($username,$password){
    $sql = "Select * from khachhang where username=? and password=?";
    return  pdo_query_one($sql, $username,$password);
    // if(is_array($kq)&&(count($kq))){
    //     return $kq["makh"];
    // }else{
    //     return 0;
    // }
}

function get_user($makh)
{
    $sql = "SELECT * FROM khachhang WHERE makh=?";
    return pdo_query_one($sql, $makh);
}

// function khachhang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE khachhang SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function khachhang_delete($ma_kh){
//     $sql = "DELETE FROM khachhang  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function khachhang_select_all(){
//     $sql = "SELECT * FROM khachhang";
//     return pdo_query($sql);
// }

// function khachhang_select_by_id($ma_kh){
//     $sql = "SELECT * FROM khachhang WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function khachhang_exist($ma_kh){
//     $sql = "SELECT count(*) FROM khachhang WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function khachhang_select_by_role($vai_tro){
//     $sql = "SELECT * FROM khachhang WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function khachhang_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE khachhang SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }