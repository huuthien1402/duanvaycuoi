<div class="row">
        <div class="row header">
            <H1>QUẢN LÝ SẢN PHẨM</H1>
        </div>
        <div class="row mb20">
                    <a href="index.php?act=addsp"><input type="button" value="Thêm sản phẩm"></a>
                </div>
        <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                            <th>Mã loại</th>
                        </tr>
                        <?php 
                            foreach($listsp as $sanpham){
                                extract($sanpham);
                                $suasp="index.php?act=suasp&idsp=".$idsp;
                                $xoasp="index.php?act=xoasp&idsp=".$idsp;

                                echo '<tr>
                                <td>'.$idsp.'</td>
                                <td>'.$tensp.'</td>
                                <td>'.$giamoi.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$mota.'</td>
                                <td>'.$loaisp.'</td>
                                <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                
        </div>
    </div>