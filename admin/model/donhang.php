<?php
    function insert_donhang($tensp,$gia,$hinh,$mota,$MaLoai){
        $sql="insert into donhang(tensp,giamoi,hinh,mota,loaisp) values('$tensp','$gia','$hinh','$mota','$MaLoai')";
        pdo_execute($sql);
    }

    function delete_donhang($iddh){
        $sql="delete from donhang where id=".$iddh;
        $listsp=pdo_query($sql);
    }

    function loatall_donhang(){
        $sql="select* from donhang order by id desc";
        $listdh= pdo_query($sql);
        return $listdh;
    }

    function loatone_donhang($iddh){
        $sql="select* from donhang where id=".$iddh;
        $dh= pdo_query_one($sql);
        return $dh;
    }

    function updatedh($id, $tensp) {
        $sql="update donhang set tensp='$tensp' where id=".$id;
        pdo_execute($sql);
    }
?>