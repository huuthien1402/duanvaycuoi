<?php
    function insert_loaihang($tenloai){
        $sql="insert into danhmuc(tenloai) values('$tenloai')";
        pdo_execute($sql);
    }

    function delete_loaihang($idlh){
        $sql="delete from danhmuc where MaLoai=".$idlh;
        $listlh =pdo_query($sql);
    }

    function loatall_loaihang(){
        $sql="select* from danhmuc order by MaLoai desc";
        $listlh=pdo_query($sql);
        return $listlh;
    }

    function loatone_loaihang($idlh){
        $sql="select* from danhmuc where MaLoai=".$idlh;
        $danhmuc=pdo_query_one($sql);
        return $danhmuc;
    }

    function updatelh($idlh, $tenloai) {
        $sql="update danhmuc set tenloai='$tenloai' where MaLoai=".$idlh;
        pdo_execute($sql);
    }
?>