<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy số lượng từ request POST
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;
    // Lấy chỉ mục của sản phẩm tương ứng
    $productIndex = isset($_POST['productIndex']) ? intval($_POST['productIndex']) : 0;
    // Cập nhật số lượng của sản phẩm trong giỏ hàng
    if (isset($_SESSION['giohang'][$productIndex])) {
        $_SESSION['giohang'][$productIndex]['soluong'] = $quantity;
    }
    // Tính toán và trả về giá mới
    $totalPrice = 0;
    foreach ($_SESSION['giohang'] as $item) {
        extract($item);
        $giamoi = floatval($giamoi);
        $soluong = isset($item['soluong']) ? intval($item['soluong']) : 1;
        $totalPrice += $giamoi * $soluong;
    }
    echo number_format($totalPrice,0,',','.');
}
?>