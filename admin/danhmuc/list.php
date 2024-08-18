<div class="row">
        <div class="row header">
            <H1>THÊM MỚI LOẠI HÀNG HÓA</H1>
        </div>
        <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên Loại</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach($listlh as $loaihang){
                                extract($loaihang);
                                $sualh="index.php?act=sualh&MaLoai=".$MaLoai;
                                $xoalh="index.php?act=xoalh&MaLoai=".$MaLoai;

                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$MaLoai.'</td>
                                <td>'.$tenloai.'</td>
                                <td><a href="'.$sualh.'"><input type="button" value="Sửa"></a> <a href="'.$xoalh.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb20">
                    <a href="index.php?act=addlh"><input type="button" value="Thêm danh mục"></a>
                </div>
        </div>
    </div>