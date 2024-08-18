<?php
    function insert_sanpham($tensp,$giamoi,$hinh,$mota,$MaLoai){
        $sql="insert into sanpham(tensp,giamoi,hinh,mota,loaisp) values('$tensp','$giamoi','$hinh','$mota',$MaLoai)";
        pdo_execute($sql);
    }

    function delete_sanpham($idsp){
        $sql="delete from sanpham where idsp=".$idsp;
        $listsp=pdo_query($sql);
    }

    function loatall_sanpham(){
        $sql="select* from sanpham order by idsp desc";
        $listsp=pdo_query($sql);
        return $listsp;
    }

    function loatone_sanpham($idsp){
        $sql="select* from sanpham where idsp=".$idsp;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function updatesp($id, $tensp) {
        $sql="update sanpham set tensp='$tensp' where idsp=".$id;
        pdo_execute($sql);
    }
?>