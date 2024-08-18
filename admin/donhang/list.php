<div class="row">
        <div class="row header">
            <H1>QUẢN LÝ ĐƠN HÀNG</H1>
        </div>
        <div class="row mb20">
                    <a href="index.php?act=adddh"><input type="button" value="Thêm đơn hàng"></a>
                </div>
        <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>ID User</th>
                            <th>Tên người đặt</th>
                            <th>Email người đặt</th>
                            <th>ĐC người đặt</th>
                            <th>SĐT người đặt</th>
                            <th>PTTT</th>
                            <th>Tổng tiền</th>
                            <th>Mã ĐH</th>
                        </tr>
                        <?php 
                            foreach($listdh as $donhang){
                                extract($donhang);
                                $suadh="index.php?act=suadh&id=".$id;
                                $xoadh="index.php?act=xoadh&id=".$id;

                                echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$iduser.'</td>
                                <td>'.$nguoidat_ten.'</td>
                                <td>'.$nguoidat_email.'</td>
                                <td>'.$nguoidat_diachi.'</td>
                                <td>'.$nguoidat_dienthoai.'</td>
                                <td>'.$pttt.'</td>
                                <td>'.$tongthanhtoan.'</td>
                                <td>'.$madh.'</td>
                                <td><a href="'.$suadh.'"><input type="button" value="Sửa"></a> <a href="'.$xoadh.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                
        </div>
    </div>