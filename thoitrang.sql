-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 01:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thoitrang`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `stt` int(11) UNSIGNED ZEROFILL NOT NULL,
  `idkh` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaLoai` int(2) UNSIGNED ZEROFILL NOT NULL,
  `tenloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaLoai`, `tenloai`) VALUES
(01, 'VÁY CƯỚI'),
(02, 'ÁO DÀI');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_diachi` varchar(100) NOT NULL,
  `nguoidat_dienthoai` varchar(20) NOT NULL,
  `nguoinhan_ten` varchar(50) DEFAULT '0',
  `nguoinhan_dienthoai` varchar(20) DEFAULT '0',
  `nguoinhan_diachi` varchar(50) DEFAULT '0',
  `pttt` tinyint(1) NOT NULL DEFAULT 0,
  `tongthanhtoan` int(11) NOT NULL DEFAULT 0,
  `madh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `iduser`, `nguoidat_ten`, `nguoidat_email`, `nguoidat_diachi`, `nguoidat_dienthoai`, `nguoinhan_ten`, `nguoinhan_dienthoai`, `nguoinhan_diachi`, `pttt`, `tongthanhtoan`, `madh`) VALUES
(73, 112, 'hohuuthien12345', 'huuthien14022004@gmail.com', 'Quận 12', '0916770619', 'huuthien', '12345678', 'Quận 12 TP HCM', 3, 126000000, 'mfashion112-213749-30112023'),
(75, 117, 'Hồ Hữu Thiên', 'huuthien14022004@gmail.com', 'Tân Châu Tây Ninh', '0916770619', '', '', '', 3, 52000000, 'mfashion117-012408-01122023'),
(76, 117, 'Hồ Hữu Thiên', 'huuthien14022004@gmail.com', 'TPHCM', '0916770619', '', '', '', 2, 78000000, 'mfashion117-102111-02122023');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `iddh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id`, `idsp`, `gia`, `ten`, `img`, `soluong`, `thanhtien`, `iddh`) VALUES
(53, 2, 26000000, 'Luxury | Váy cưới xòe Cadie', 'hinhvaycuoi2.jpg', 3, 26000000, 73),
(54, 3, 24000000, 'Luxury | Váy cưới xòe Amelia', 'hinhvaycuoi3.jpg', 2, 24000000, 73),
(56, 2, 26000000, 'Luxury | Váy cưới xòe Cadie', 'hinhvaycuoi2.jpg', 2, 26000000, 75),
(57, 2, 26000000, 'Luxury | Váy cưới xòe Cadie', 'hinhvaycuoi2.jpg', 3, 26000000, 76);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `khachhang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phanquyen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `khachhang`, `diachi`, `dienthoai`, `email`, `username`, `password`, `phanquyen`) VALUES
(111, NULL, NULL, NULL, 'huuthien14022004@gmail.com', 'hohuuthien', 'A1234567', 1),
(112, 'hohuuthien12345', 'Quận 12', '0916770619', 'huuthien14022004@gmail.com', 'guest710', '123456', 0),
(117, 'Hồ Hữu Thiên', 'tan chau tay ninh', '0916770619', 'huuthien14022004@gmail.com', 'hohuuthien4', 'A1234567', 0),
(118, NULL, NULL, NULL, 'huuthien14022004@gmail.com', 'hohuuthien5', 'A1234567', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `giamoi` int(11) NOT NULL,
  `giacu` varchar(20) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `loaisp` int(11) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `giamoi`, `giacu`, `hinh`, `mota`, `loaisp`) VALUES
(1, 'Luxury | Váy cưới xòe Sylvia', 26000000, '', 'hinhvaycuoi1.jpg', 'Nếu đã sở hữu bờ vai thon quyến rũ cùng khung xương quai xanh đắt giá, đừng giấu kín mà hãy phô diễn những đường cong đẹp nhất của mình nàng nhé! Sẽ có một chút gợi cảm nhưng vẫn thanh lịch, nhẹ nhàng, có quá nhiều lý do để cho chiếc váy cưới off – shoulder mới nhất từ MARYMY vào danh sách váy cưới phải thử cho lễ cưới theo phong cách lãng mạn của nàng sắp tới.', 00000000001),
(2, 'Luxury | Váy cưới xòe Cadie', 26000000, '', 'hinhvaycuoi2.jpg', 'Điểm nhấn nổi bật của chiếc váy lần này nằm ở chất liệu vải lưới kim tuyến lấp lánh như hàng triệu vì sao tỏa sáng trên chiếc váy nàng dâu, mang đến nét quý phái và sang trọng, đủ sức thu hút mọi ánh mắt hướng về nàng khi bước lên sân khấu.', 00000000001),
(3, 'Luxury | Váy cưới xòe Amelia', 24000000, '', 'hinhvaycuoi3.jpg', 'Để có thể làm bật lên sức hút của nàng dâu ở thời khắc thanh xuân tươi đẹp nhất, chẳng gì có thể thay thế dáng váy đuôi cá “thần thánh”. Với MARYMY, những thiết kế khoét lưng sâu cùng tay ren dài luôn được yêu thích bởi sự quyến rũ, gợi cảm theo một cách “rất Tây”.', 00000000001),
(4, 'Luxury | Váy cưới xòe Daniella', 36000000, '', 'hinhvaycuoi4.jpg', 'Đủ thời thượng để chạm đến chuẩn mực của thời trang đẳng cấp Mà vẫn đủ nổi bật để biến nàng trở thành tâm điểm của lễ cưới Một chiếc váy xòe cúp ngực với tùng lưới xếp ly tạo hình ảnh sóng nước bồng bềnh – kỳ ảo và lộng lẫy đúng như những gì nàng mong đợi!', 00000000001),
(5, 'Luxury | Váy cưới xòe Elysha', 28000000, '', 'hinhvaycuoi5.jpg', 'Đủ kiêu sa, lộng lẫy, với sức hút khiến chàng trai ấy chẳng thể rời mắt khỏi nàng. Còn gì bằng một chiếc váy cưới lấp lánh đúng chất hoàng gia sang trọng?', 00000000001),
(6, 'Luxury | Váy cưới xòe Jaena', 28000000, '', 'hinhvaycuoi6.jpg', 'Thiết kế váy xòe tay phồng cổ tim từ lâu đã là “hot item” và nàng dâu càng không thể bỏ qua trong mùa cưới năm nay. Kiểu dáng thanh lịch, phom corset siết eo “thần thánh” ở chiếc váy cưới xòe luôn là vũ khí tối thượng giúp nàng biến hóa thành công chúa trong truyện cổ tích.', 00000000001),
(7, 'Luxury | Váy cưới xòe Phoebe', 45000000, '', 'hinhvaycuoi7.jpg', 'Bạn có biết lúc nào những vì sao tỏa sáng lấp lánh nhất không? Đó chính là vào bầu trời đêm tối và đen nhất.', 00000000001),
(8, 'Luxury | Váy cưới xòe Sadie', 36000000, '', 'hinhvaycuoi8.jpg', 'Không chỉ được ca tụng bởi dáng vẻ thanh thoát, uyển chuyển, loài chim Thiên nga còn được ví là biểu tượng của tình yêu son sắt, thủy chung trọn đời. Hình ảnh chim Thiên nga vỗ cánh đôi cánh nhẹ nhàng, thanh tao giữa trời tuyết trắng xóa tuyệt đẹp đã tạo nguồn cảm hứng cho thiết kế lần này, với trễ vai đính lông vũ cao cấp cùng 8000 viên pha lê Swarovski – điểm nhấn nổi bật giúp nàng bỗng chốc trở thành quý cô đài các, quyến rũ và sang trọng bậc nhất.', 00000000001),
(9, ' Luxury | Váy cưới xòe Eliza', 46000000, '', 'hinhvaycuoi9.jpg', 'Tình yêu luôn là món quà nhiệm màu, và mỗi chúng ta đều có quyền đón nhận. Người ta nói rằng khi yêu, 2 trái tim như hòa cùng nhịp đập, để cùng cảm nhận, cùng nếm trải những hỉ nộ ái ố của cuộc đời. ', 00000000001),
(10, 'Diamond | Váy cưới suông A Fauna', 20000000, '', 'hinhvaycuoi10.jpg', 'Váy cưới A line – dáng váy “quốc dân” luôn được nàng dâu săn đón khi tìm kiếm một chiếc váy đi bàn nhẹ nhàng, hay một mảnh ghép hoàn hảo cho lễ cưới ngoài trời phong cách Tây lãng mạn của nàng.', 00000000001),
(11, 'Diamond | Váy cưới đuôi cá Pamela', 14000000, '', 'hinhvaycuoi11.jpg', 'Váy cưới A line – dáng váy “quốc dân” luôn được nàng dâu săn đón khi tìm kiếm một chiếc váy đi bàn nhẹ nhàng, hay một mảnh ghép hoàn hảo cho lễ cưới ngoài trời phong cách Tây lãng mạn của nàng.', 00000000001),
(12, 'Diamond | Váy cưới xòe Natalie', 26000000, '', 'hinhvaycuoi12.jpg', 'Váy cưới A line – dáng váy “quốc dân” luôn được nàng dâu săn đón khi tìm kiếm một chiếc váy đi bàn nhẹ nhàng, hay một mảnh ghép hoàn hảo cho lễ cưới ngoài trời phong cách Tây lãng mạn của nàng.', 00000000001),
(13, 'Diamond | Váy cưới xòe Gracie', 26000000, '', 'hinhvaycuoi13.jpg', 'Váy cưới A line – dáng váy “quốc dân” luôn được nàng dâu săn đón khi tìm kiếm một chiếc váy đi bàn nhẹ nhàng, hay một mảnh ghép hoàn hảo cho lễ cưới ngoài trời phong cách Tây lãng mạn của nàng.', 00000000001),
(14, 'Diamond | Váy cưới đuôi cá Madeline', 40000000, '', 'hinhvaycuoi14.jpg', 'Váy cưới Madeline – dáng váy “quốc dân” luôn được nàng dâu săn đón khi tìm kiếm một chiếc váy đi bàn nhẹ nhàng, hay một mảnh ghép hoàn hảo cho lễ cưới ngoài trời phong cách Tây lãng mạn của nàng.', 00000000001),
(15, 'Diamond | Váy cưới xòe Valerie', 42000000, '', 'hinhvaycuoi15.jpg', 'Váy cưới Valerie – dáng váy “quốc dân” luôn được nàng dâu săn đón khi tìm kiếm một chiếc váy đi bàn nhẹ nhàng, hay một mảnh ghép hoàn hảo cho lễ cưới ngoài trời phong cách Tây lãng mạn của nàng.', 00000000001),
(16, 'Diamond | Váy cưới đuôi cá Ivy', 18000000, '', 'hinhvaycuoi16.jpg', 'Váy cưới Ivy – dáng váy “quốc dân” luôn được nàng dâu săn đón khi tìm kiếm một chiếc váy đi bàn nhẹ nhàng, hay một mảnh ghép hoàn hảo cho lễ cưới ngoài trời phong cách Tây lãng mạn của nàng.', 00000000001),
(17, 'Áo Dài Cưới Màu Hồng Marine', 5000000, '', 'hinhaodai1.jpg', 'Màu sắc: Màu hồng nude nhẹ nhàng, nữ tính, ngọt ngào.\r\nChất liệu: Ren dệt cao cấp kết hợp với lụa chifon tạo cảm giác mềm mại, quyến rũ cho người mặc\r\nĐiểm nhấn: Các họa tiết kỷ hà chạy khắp váy được đính kết cầu kỳ, tỉ mỉ, tạo điểm nhấn độc đáo cho chiếc áo dài cưới\r\nĐính kết: với hơn 30 loại sequin và phale khác nhau, với hàng trăm giờ đính kết tỉ mỉ', 00000000002),
(18, 'Áo Dài Cưới Đỏ Mélanie', 6000000, '', 'hinhaodai2.jpg', 'Màu sắc: màu đỏ đầy sắc hỷ của những đám cưới hỏi truyền thống ở Việt Nam\r\nChất liệu: vải lụa cao cấp kết hợp tule\r\nĐiểm nhấn: Những đường đá uốn từ phần ngực, trải dài xuống eo và tà theo đường cong cơ thể tạo điểm nhấn cho cơ thể người mặc\r\nĐính kết: kỹ thuật đính bung và chuyển sắc đỏ với hơn 20 loại đá quý và sequin khác nhau.', 00000000002),
(19, 'Áo Dài Cưới Màu Trắng Marwa', 5000000, '', 'hinhaodai3.jpg', 'Màu sắc: màu trắng thanh khiết, nhẹ nhàng, trong trẻo cho một tình yêu trong sáng\r\nChất liệu: ren thêu kết hợp ren Pháp và lụa chifon\r\nĐiểm nhấn: phần cutout giữa ngực tạo nên nét hiện đại, gợi cảm nhưng cũng không kém phần duyên dáng cho người mặc\r\nĐính kết: ngọc trai và các loại pha le cao cấp', 00000000002),
(20, 'Áo Dài Cưới Đính Đá Laura', 5000000, '', 'hinhaodai4.jpg', 'Màu sắc: ren trắng phối nền da , tạo nên sự trong trẻo nhưng cũng không kém phần trẻ trung , gợi cảm\r\nChất liệu: vải tule kết hợp lụa cao cấp\r\nĐiểm nhấn: họa tiết ren được đắp phần raflan xuống dưới tà, tạo điểm nhấn nhẹ nhàng cho chiếc áo dài', 00000000002),
(21, 'Áo Dài Cưới Cổ Truyền Thống Chloé ', 5000000, '', 'hinhaodai5.jpg', 'Màu sắc: Màu trắng, tượng trưng cho vẻ đẹp của tình yêu trong sáng, tinh khôi\r\nChất liệu: Ren dệt cao cấp kết hợp với vải sequin đính kết cao cấp.', 00000000002),
(22, 'Áo Dài Cưới Màu Da Dufour ', 5000000, '', 'hinhaodai6.jpg', 'Màu sắc: màu nude tạo cảm giác trẻ trung gợi cảm\r\nChất liệu: ren thêu kết hợp với ren dệt cao cấp\r\nĐiểm nhấn: Những đường họa tiết ren chạy dọc xuống tà, tạo vẻ thon gọn, mảnh mai hơn cho các nàng dâu, phần cổ áo được thêu đăng ten, nổi bật lên sự nữ tính nhưng vẫn đậm chất truyền thống', 00000000002),
(23, 'Áo Dài Cưới Cổ Truyền Thống Lucie', 5000000, '', 'hinhaodai7.jpg', 'Màu sắc: Trắng – màu truyền thống của cô dâu trong ngày cưới\r\nChất liệu: ren dệt kết hợp với ren pháp cao cấp\r\nĐiểm nhấn: Những đường sọc chạy dọc xuống tà áo. Ngoài ra phần cổ áo được cách điệu tạo điểm nhấn độc đáo cho trang phục', 00000000002),
(24, 'Áo Dài Cưới Màu Trắng Léa', 5000000, '', 'hinhaodai8.jpg', 'Màu sắc: màu trắng là màu của niềm vui và hạnh phúc, thể hiện sự trong trắng\r\nĐiểm nhấn: ren thêu kết hợp với ren pháp cao cấp. Áo dài cúp ngực với họa tiết ren cong trên ngực tạo vẻ đẹp hiện đại và gợi cảm', 00000000002),
(25, 'Áo Dài Trung Niên Màu Hồng Phấn', 6000000, '', 'hinhaodai9.jpg', 'Màu sắc: màu trắng, với mong muốn một tình yêu trong sáng, tinh khôi và bền vững\r\nChất liệu: lụa trắng cao cấp phối tay ren pháp\r\nĐiểm nhấn: điểm đặc sắc trong form dáng là hai tay phồng, tạo cảm giác vừa hiện đại vừa truyền thống cho chiếc áo dài', 00000000002),
(26, 'Áo Dài Trung Niên Cao Cấp Sequin', 4000000, '', 'hinhaodai10.jpg', 'Màu sắc: màu trắng, màu của sự trong trắng, của hạnh phúc vẫn luôn được xem là màu của các nàng dâu trong ngày cưới hỏi\r\nChất liệu: Ren pháp cao cấp\r\nĐiểm nhấn: Vẫn trung thành với những thiết kế áo dài truyền thống, bộ áo dài với điểm nhấn là họa tiết ren được đắp phần ngực và eo xuống tà áo tạo điểm nhấn nổi bật cho bộ trang phục', 00000000002),
(28, 'Áo Dài Trung Niên Cách Tân Hiện Đại', 5000000, '', 'hinhaodai11.jpg', 'Khám phá BST Áo Dài Trung Niên 2019 – Dành Cho Mẹ Cô Dâu Chú Rể Sang Trọng', 00000000002),
(29, 'Áo Dài Trung Niên Cổ Truyền Thống', 4000000, '', 'hinhaodai12.jpg', 'Chất liệu: Tằm Thái mềm mại, có độ co giãn nhẹ tạo cảm giác thoải mái khi mặt\r\nMàu sắc: Đỏ đô sang trọng tôn da\r\nĐiểm nhấn: phần ren cổ họa tiết cổ điển kết hợp với những đường nét pha lê được đính', 00000000002),
(30, 'Áo Dài Trung Niên Nhung Đen', 6000000, '', 'hinhaodai13.jpg', 'Chất liệu: Nhung đen, thanh lịch và quý phái\r\nĐiểm nhấn: Hoa lan được vẽ và đính cách điệu bằng những loại pha lê cao cấp và cầu kỳ\r\nChiếc áo dài tôn lên vóc dáng và thể hiện đẳng cấp của người mặc', 00000000002),
(31, 'Áo Dài Trung Niên Màu Vàng Cam', 6000000, '', 'hinhaodai14.jpg', 'Chất liệu: Tằm Thái mềm mại, độ co giãn nhẹ tạo cảm giác thoải mái, dễ di chuyển\r\nMàu sắc: Vàng cam cực tôn da\r\nĐiểm nhấn: Phần ren họa tiết baroque được đính kết tinh xảo ở phần cổ và ngực', 00000000002),
(32, 'Áo Dài Cưới Màu Da Sandy', 6000000, '', 'hinhaodai15.jpg', 'Chất liệu: Tằm Thái mềm mại, độ co giãn nhẹ tạo cảm giác thoải mái, dễ di chuyển\r\nMàu sắc: Vàng cam cực tôn da\r\nĐiểm nhấn: Phần ren họa tiết baroque được đính kết tinh xảo ở phần cổ và ngực', 00000000002),
(33, 'Áo Dài Cưới Màu Da Beige', 6000000, '', 'hinhaodai16.jpg', 'Chất liệu: Tằm Thái mềm mại, độ co giãn nhẹ tạo cảm giác thoải mái, dễ di chuyển\r\nMàu sắc: Vàng cam cực tôn da\r\nĐiểm nhấn: Phần ren họa tiết baroque được đính kết tinh xảo ở phần cổ và ngực', 00000000002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`stt`),
  ADD KEY `fk_id_sp` (`idsp`),
  ADD KEY `fk_idkh` (`idkh`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kh` (`iduser`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iddh` (`iddh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `fk_idloai` (`loaisp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `stt` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaLoai` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_id_sp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idkh` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`makh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `id_kh` FOREIGN KEY (`iduser`) REFERENCES `khachhang` (`makh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `iddh` FOREIGN KEY (`iddh`) REFERENCES `donhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idsp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_idloai` FOREIGN KEY (`loaisp`) REFERENCES `danhmuc` (`MaLoai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
