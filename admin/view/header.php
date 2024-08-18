
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<style>
    body{
        font-size: 100%;
    }
    .row{
    float: left;
    width: 100%;
    margin: 12px 12px;
}
.row .header {
    width: 90%;
}
.mb11 select[name="MaLoai"]{
    width: 15%;
}
.mb20{
    margin-top: 5px;
}
.mb20 input[type="button"]{
    border-radius: 5px;
    padding: 5px 10px;
    background-color: white;
    border: 1px #CCC solid;
}
.mb20 input[type="button"]:hover{
    background-color: #1870e3;
}
/* .row{
    margin: 12px 12px;
} */
.formdsloai table th{
    width: 5%;
    /* padding: 20px 20px; */
    color: #050101;
    background-color: cornflowerblue;
    border: 1px #212121 solid;
}
.formdsloai table th:nth-child(2){
    width: 15%;
    color: #050101;
    background-color: cornflowerblue;
}

.formdsloai table th:nth-child(3){
    width: 10%;
    color: #050101;
    background-color: cornflowerblue;
}

.formdsloai table th:nth-child(4){
    width: 10%;
    color: #050101;
    background-color: cornflowerblue;
}
.formdsloai table th:nth-child(5){
    width: 25%;
    color: #050101;
    background-color: cornflowerblue;
}
.formdsloai table th:nth-child(6){
    width: 15%;
    color: #050101;
    background-color: cornflowerblue;
}
</style>
<body>
    <header class="header">
        <div class="container-fluid px-lg-5">
            <nav class="py-4">
                <div id="logo">
                    <h1> <a href="../index.php">
                            <img src="logomf.png" alt="">
                        </a></h1>
                </div>

                <label for="drop" class="toggle">Menu</label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-2">
                    <li><a href="index.php?act=listlh">Loại Hàng</a></li>
                    <li><a href="index.php?act=listsp">Sản Phẩm</a></li>
                    <li>
                        <a href="index.php?act=dskh">Tài Khoản</a>
                    </li>
                    <li><a href="index.php?act=dsdh">Đơn Hàng</a></li>
                    <li><a href="index.php?act=thongke">Thống Kê</a></li>
                </ul>
            </nav>
        </div>
    </header>