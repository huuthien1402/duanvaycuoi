<?php
    function insert_taikhoan($makh,$khachhang,$diachi,$dienthoai,$email,$username,$password){
        $sql="insert into khachhang(makh) values('$makh','$khachhang','$diachi','$dienthoai','$email','$username','$password')";
        pdo_execute($sql);
    }

    function checkuser($user,$password){
        $sql="delete from khachhang where user='".$user."'AND pass='".$password."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function checkemail($email){
        $sql="delete from khachhang where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function loatall_taikhoan(){
        $sql="select* from khachhang order by makh desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }

    function updatetk($makh, $user,$password, $email, $diachi, $dienthoai) {
        $sql="update taikhoan set user='".$user."','".$password."','".$email."','".$diachi."','".$dienthoai."' where makh=".$makh;
        pdo_execute($sql);
    }

    function delete_taikhoan($makh){
        $sql="delete from khachhang where makh=".$makh;
        $listtk=pdo_query($sql);
    }
?>