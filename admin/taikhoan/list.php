<div class="row">
        <div class="row header">
            <H1>DANH SÁCH TÀI KHOẢN</H1>
        </div>
        <div class="row mb20">
                    <a href="index.php?act=addtk"><input type="button" value="Thêm tài khoản"></a>
                </div>
        <div class="row formcontent">
        <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th>Mã KH</th>
                            <th>Khách Hàng</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Phân quyền</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach($listtk as $taikhoan){
                                extract($taikhoan);
                                $suatk="index.php?act=updatetk&makh=".$makh;
                                $xoatk="index.php?act=xoatk&makh=".$makh;

                                echo '<tr>
                                <td>'.$makh.'</td>
                                <td>'.$khachhang.'</td>
                                <td>'.$diachi.'</td>
                                <td>'.$dienthoai.'</td>
                                <td>'.$email.'</td>
                                <td>'.$username.'</td>
                                <td>'.$password.'</td>
                                <td>'.$phanquyen.'</td>
                                <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                        ?>
                    </table>
                    
                </div>
        </div>
    </div>