-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 02, 2023 lúc 07:01 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopdongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `idDanhmuc` int(2) NOT NULL,
  `tenDanhMuc` varchar(50) NOT NULL,
  `UuTien` int(11) NOT NULL DEFAULT 0,
  `hienThi` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`idDanhmuc`, `tenDanhMuc`, `UuTien`, `hienThi`) VALUES
(11, 'Đồng Hồ nam', 0, 1),
(12, 'Đồng Hồ Nữ', 0, 1),
(14, 'Đồng Hồ Đôi', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSanPham` int(6) NOT NULL,
  `tenSp` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `giacu` double(10,0) NOT NULL DEFAULT 0,
  `gia` double(10,0) NOT NULL DEFAULT 0,
  `idDanhmuc` int(2) NOT NULL,
  `view` int(6) NOT NULL DEFAULT 0,
  `specical` tinyint(1) NOT NULL DEFAULT 0,
  `mota` varchar(400) DEFAULT NULL,
  `chitiet` text DEFAULT NULL,
  `mauday` varchar(10) NOT NULL,
  `dangmatso` varchar(10) NOT NULL,
  `gioitinh` varchar(4) NOT NULL,
  `han` varchar(10) NOT NULL,
  `thuonghieu` varchar(10) NOT NULL,
  `showProduct` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSanPham`, `tenSp`, `img`, `giacu`, `gia`, `idDanhmuc`, `view`, `specical`, `mota`, `chitiet`, `mauday`, `dangmatso`, `gioitinh`, `han`, `thuonghieu`, `showProduct`) VALUES
(12, 'Rhythm S1413S01-MSB-T Nam ', '../upload/dong_ho_nu_8.jpg', 0, 2099000, 12, 0, 0, 'Tại Việt Nam, thương hiệu đồng hồ Casio rất phổ biến và được yêu thích bởi tất cả các đối tượng khách hàng, chính vì thế Casio luôn là thương hiệu đồng hồ có doanh thu cao. Những chiếc đồng hồ Casio được tạo ra không chỉ đẹp về mẫu mã, tốt về chất lượng mà còn tinh hoa của sự sáng tạo và lao động hết mình. Chính vì thế mà dòng sản phẩm đồng hồ Casio EFR-526L-7AVUDF cũng không phải là ngoại lệ. ', 'Casio được biết đến là thương hiệu đồng hồ lâu đời trong ngành công nghiệp đồng hồ tại Nhật Bản. Những mẫu đồng hồ Casio nam và nữ được yêu thích bởi thiết kế đơn giản, dễ dàng để xem giờ và được trang bị đầy đủ các công nghệ mới nhất. Ngoài ra, đồng hồ Casio chính hãng còn nổi bật với chức năng đa dạng giúp ích cho người dùng vào những hoạt động đời sống thường ngày. Và chiếc đồng hồ Casio EFR-526L-7AVUDF thực sự đã đáp ứng đầy đủ nhu cầu xem ngày giờ cũng như thời trang của người dùng.', 'nâu', 'tròn', 'nam', 'casio', 'Nhật bản', 1),
(41, 'Casio MTP-1374D-1AVDF Nam Quartz  Được xếp hạng 4.', '../upload/donghocassio1.jpg', 0, 2177000, 11, 0, 0, 'Đồng hồ Casio MTP-1374D-1AVDF là chiếc đồng hồ nam giới hiện đại trẻ trung đầy mạnh mẽ. Sản phẩm này có thiết kế hiện đại, với những tính năng đa dạng tiện lợi khiến người tiêu dùng yêu thích. Với bề ngoài ấn tượng sản phẩm này đã nhanh chóng thu hút người tiêu dùng lựa chọn sử dụng.', NULL, 'đen', 'tròn', 'nam', 'casio', 'Nhật bản', 4),
(42, 'Casio MTP-1374L-1AVDF Nam Quartz', '../upload/donghocassio1.jpg', 0, 2099000, 11, 0, 0, 'Tất cả đồng hồ Casio có số hiệu MTP đều dành cho nam, ký tự MTP chính là viết tắt của “Men’s Timepiece” (nghĩa là đồng hồ dành cho nam giới). Nằm trong dòng Casio Dress, đồng hồ Casio MTP được thiết kế để nhấn mạnh tính thanh lịch cho nam giới. Đại đa số đồng hồ đeo tay Casio MTP nam đều rất thời trang, nhẹ nhàng vừa vặn cho tay, phù hợp với văn phòng.', 'MTP-1374L-1AVDF mang hơi hướng thể thao như những chiếc Casio Edifice nhưng lại có nét hài hoà, thanh lịch và đơn giản hơn. Tuy có mức giá rẻ nhưng các tính năng như đồng hồ 6 kim, vòng benzel lớn, chịu nước tốt v.v…bạn đều có thể tìm thấy ở chiếc đồng hồ Best Seller này.', 'đen', 'tròn', 'nam', 'casio', 'Nhật bản', 4),
(48, 'Casio MTP-1375L-7AVDF Nam Quartz', '../upload/donghocasio6.jpg', 0, 2099000, 11, 0, 0, 'Tất cả đồng hồ Casio có số hiệu MTP đều dành cho nam, ký tự MTP chính là viết tắt của “Men’s Timepiece” (nghĩa là đồng hồ dành cho nam giới). Nằm trong dòng Casio Dress, đồng hồ Casio MTP được thiết kế để nhấn mạnh tính thanh lịch cho nam giới. Đại đa số đồng hồ đeo tay Casio MTP nam đều rất thời trang, nhẹ nhàng vừa vặn cho tay, phù hợp với văn phòng.', 'Tuy nhiên, thấu hiểu được việc rất nhiều anh em có niềm đam mê với các môn thể thao, muốn tìm kiếm cho mình một chiếc đồng hồ mang phong cách thể thao nhưng ngại các tính năng phức tạp và giá thành cao; thương hiệu Casio đã cho ra mắt nhiều thiết kế được lấy cảm hứng từ các dòng Sport Watch. Ví dụ điển hình nhất là đồng hồ mặt tròn Casio MTP-1375L-1AVDF.', 'đen', 'tròn', 'nam', 'casio', 'Nhật bản', 4),
(49, 'Casio MTP-1375L-7AVDF Nam Quartz', '../upload/donghocasio6.jpg', 0, 2099000, 11, 0, 0, NULL, NULL, '', '', '', '', '', 4),
(50, 'Casio MTP-V300L-7AUDF Nam Quartz', '../upload/donghonam1.jpg', 0, 1607000, 11, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(51, 'Casio MTP-1374D-2AVDF Nam Quartz', '../upload/donghonam2.png', 0, 2177000, 11, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(52, 'Casio MTP-1374L-7AVDF Nam Quartz', '../upload/donghocasio10.jpg', 0, 2099000, 11, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(53, 'Pierre Lannier 023L928 Nữ Quartz', '../upload/donghonu1.jpg', 0, 4653000, 12, 0, 0, 'Khám phá bộ sưu tập Nova của Pierre Lannier: những chiếc đồng hồ đẹp và nữ tính dành cho phụ nữ, mang đến tất cả sự tinh tế mà cổ tay của bạn xứng đáng có được. Đồng Hồ Pierre Lannier 023L928 là một trong những mẫu đồng hồ mỏng nhất đến từ thương hiệu này.', 'Nó được trang bị một vỏ máy bằng thép không gỉ, màu vàng hồng. Mặt số nhỏ có đường kính 26mm tạo nên một chiếc đồng hồ rất nữ tính và nhỏ gọn. Mặt số trắng điểm xuyết hài hòa với kim và chỉ số màu vàng hồng, tạo nên sự tinh tế và trang nhã. Ngoài ra, vòng bezel của mẫu đồng hồ này được trang trí bằng những viên đá bao quanh, mang lại sự quyến rũ và nữ tính.\r\n\r\nĐồng hồ Pierre Lannier 023L928 Nữ Quart có dây đeo giúp bạn có thể tự điều chỉnh dễ dàng. Ngoài ra, nhờ hệ thống dây đeo có thể hoán đổi cho nhau của chúng tôi, hãy thay đổi phong cách đồng hồ của bạn bất cứ khi nào bạn muốn!', 'cam', 'tròn', 'nam', 'Pierre Lan', 'Pháp', 2),
(54, 'Pierre Lannier 013N628 Nữ Quartz', '../upload/donghonu2.jpg', 0, 3006000, 12, 0, 0, 'Bộ sưu tập đồng hồ mới nhất cho phụ nữ đã ra mắt: Nova -biẻu tượng của tương lai. Với sự mỏng manh và tinh tế của mình, chiếc đồng hồ dành cho nữ Pierre Lannier 013N628 với dây đeo thép Milanese màu bạc có sức hút không thể cưỡng lại được. Khám phá toàn bộ bộ sưu tập đồng hồ nữ NOVA của Pierre Lannier, hãng đồng hồ đến từ Pháp.', 'Mẫu này có một vỏ đồng hồ tròn bằng thép không gỉ, màu bạc với đường kính chỉ 26 mm, cực kỳ tinh tế. Nền mặt số màu bạc cũng có hiệu ứng sunburst khiến nó trở nên hoàn toàn độc đáo và quyến rũ. Các cọc số và kim của chiếc đồng hồ Pierre Lannier 013N628 này có màu vàng hồng, do đó mang lại một chút màu sắc cho chiếc đồng hồ này. Với dây đeo tay bằng thép Milanese màu bạc, nó có sức quyến rũ lạ thường và có thể mang lại sự sang trọng kiểu Pháp rất đặc trưng cho các mẫu đồng hồ Pierre Lannier.', 'xám', 'tròn', 'nữ', 'Pierre Lan', 'Pháp', 2),
(55, 'Pierre Lannier 010P958 Nữ Quartz', '../upload/donghonu3.jpg', 0, 3753000, 12, 0, 0, 'Đồng hồ nữ Multilpes 010P958 với dây đeo bằng thép milan mạ vàng hồng đầy sáng tạo và rực rỡ. Chi tiết độc đáo của mẫu đồng hồ này là mặt kính với những chiếc mặt cắt phản chiếu ánh sáng rực rỡ. ', 'Đồng hồ này có vỏ tròn bằng thép không gỉ đường kính 30 mm, tông màu vàng hồng với hiệu ứng tia nắng mặt trời. Các kim và chỉ số của nó cũng có màu vàng hồng, mang lại cho nó sức hấp dẫn đặc biệt. Tất cả các chi tiết cùng nhau tạo thành một mẫu đồng hồ nữ rất nữ tính.\r\n\r\nĐồng hồ nữ 010P958 có mặt kính khoáng và chống nước lên đến độ sâu 50 mét! Sự chống nước này được đảm bảo bởi thương hiệu Pierre Lannier. Mẫu đồng hồ nữ 010P958 với dây đeo bằng thép milan mạ vàng hồng của Pierre Lannier sẽ được gửi đến bạn trong một hộp đựng của thương hiệu kèm theo bảo hành quốc tế 2 năm.', 'cam', 'tròn', 'nữ', 'Pierre Lan', 'Pháp', 2),
(56, 'Pierre Lannier 022G628 Nữ Quartz', '../upload/donghonu4.jpg', 0, 4356000, 12, 0, 0, 'Khám phá bộ sưu tập đồng hồ nữ của Pierre Lannier: bộ sưu tập NOVA. Cực kỳ nữ tính và hiện đại, mẫu Nova 022G628 Steel Milanese Silver là một món đồ thanh lịch vượt thời gian. Nó sẽ hoàn hảo để đeo hàng ngày, trên một bộ trang phục thanh lịch.', 'Nó có vỏ tròn nhỏ bằng thép không gỉ màu bạc sáng bóng: đường kính 26 mm, đây là những chiếc đồng hồ nữ nhỏ nhất của Pierre Lannier! Mặt số cũng có màu bạc, với hiệu ứng sunburst. Các cọc số và kim nổi bật trên mặt số nhờ màu vàng hồng. Hai màu làm cho nó trở thành một chiếc đồng hồ nữ rất độc đáo.Viền của Đồng hồ Pierre Lannier 022G628 Nữ Quartz được trang trí bằng những viên đá lấp lánh, chúng mang lại nhiều nét quyến rũ và cá tính. Nó còn được trang bị một dây đeo vỏ thép milanais màu bạc rất mỏng: 10mm. Nhờ vào hệ thống dây đeo có thể thay thế dễ dàng của chúng tôi, bạn có thể dễ dàng thay đổi phong cách và chọn lựa một chiếc dây da chẳng hạn!', 'Xám', 'tròn', 'nữ', 'Pierre Lan', 'Pháp', 2),
(57, 'Citizen NH8390-71L Nam Cơ Tự Động', '../upload/donghocitizennam1.jpg', 0, 8177000, 11, 0, 0, 'Dòng Citizen C7 lần đầu được giới thiệu vào năm 1965 và được biết như là chiếc đồng hồ tự động mỏng nhất thới giới mà có cả ô lịch ngày, lịch giờ. Một điểm đáng chú nữa đó là chất liệu kính được làm đó là Mineral Crystal ( kính khoáng ), chất liệu mà thời đó chưa được sử dụng phổ biến như bây giờ.', NULL, 'Xám', 'tròn', 'nam', 'Citizen', 'Nhật bản', 3),
(58, 'Citizen BI5000-10A Nam Quartz', '../upload/donghocitizennam2.jpg', 0, 3185000, 11, 0, 0, NULL, NULL, 'đen', 'tròn', 'nam', 'Citizen', 'Nhật bản', 3),
(59, 'Citizen BE9180-52E Nam Quartz', '../upload/donghocitizennam3.jpg', 0, 3780000, 11, 0, 0, NULL, NULL, 'đen', 'tròn', 'nữ', 'Citizen', 'Nhật bản', 3),
(60, 'Citizen NH8394-70H Nam Cơ Tự Động', '../upload/donhhocitizen4.jpg', 0, 9177000, 11, 0, 0, 'Dòng Citizen C7 lần đầu được giới thiệu vào năm 1965 và được biết như là chiếc đồng hồ tự động mỏng nhất thới giới mà có cả ô lịch ngày, lịch giờ. Một điểm đáng chú nữa đó là chất liệu kính được làm đó là Mineral Crystal ( kính khoáng ), chất liệu mà thời đó chưa được sử dụng phổ biến như bây giờ.', NULL, 'Xám', 'tròn', 'nam', 'Citizen', 'Nhật bản', 3),
(61, 'Citizen NH8354-58A Nam Cơ Tự Động', '../upload/donghocitizennam5.jpg', 0, 6585000, 11, 0, 0, 'Là nhà sản xuất đồng hồ lớn nhất thế giới, mỗi sản phẩm của thương hiệu Citizen trước khi ra mắt trên thị trường đều đỏi hỏi những quy trình sản xuất và kiểm định khắt khe. Mục đích là để đảm bảo mang lại giá trị tốt nhất cho khách hàng và giữ vững uy tín lâu năm của thương hiệu. Cho những anh em cần biết về cấu tạo đồng hồ cơ Citizen:', 'Khi nhắc đến Citizen, người dùng Việt Nam đều nhớ đến những chiếc đồng hồ thanh lịch, sang trọng với chất lượng cực kỳ cao. Tuy giá thành Citizen không được liệt kê vào phân khúc đồng hồ giá thấp như một số dòng Casio nhưng khách hàng đều rất sẵn lòng bỏ một số tiền tương đối để sở hữu. Đồng hồ đeo tay Citizen NH8354-58A cũng là một trong số đó.', 'Xám', 'tròn', 'nam', 'Citizen', 'Nhật bản', NULL),
(62, 'Citizen BI5000-87L Nam Quartz', '../upload/donghocitizennam6.jpg', 0, 3285000, 11, 0, 0, NULL, NULL, 'Xám', 'tròn', 'nam', 'Citizen', 'Nhật bản', NULL),
(63, 'Citizen BI5070-57H Nam Quartz', '../upload/donghocitizennam7.jpg', 0, 3585000, 11, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(64, 'Citizen BI5006-81L Nam Quartz', '../upload/donhhonamcitizennam8.jpg', 0, 3985000, 11, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(65, 'Olym Pianus OP68322S-T Nữ Quartz', '../upload/donghoplympianusnu1.jpg', 0, 2693000, 12, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(66, 'Olym Pianus OP130-06LS-GL-T Nữ Quartz', '../upload/donghoplympianusnu2.jpg', 0, 1814000, 12, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(67, 'Olym Pianus OP130-10LS-GL-T Nữ Quartz', '../upload/donghopolypianusnu3.jpg', 0, 1814000, 12, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(68, 'Olym Pianus OP130-07LS-GL-T Nữ Quartz', '../upload/donghoplympianusnu2.jpg', 0, 1814000, 12, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(69, 'Olym Pianus OP130-03LK-GL-T Nữ Quartz', '../upload/donghopolypianusnu6.jpg', 0, 2930000, 12, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(70, 'Olym Pianus OP130-07LK-GL-T Nữ Quartz', '../upload/donghoolymoianusnu7.jpg', 0, 1950000, 12, 0, 0, NULL, NULL, '', '', '', '', '', NULL),
(71, 'Olym Pianus OP130-06LK-GL-T Nữ Quartz', '../upload/donghoolympianusnu8.jpg', 0, 1950000, 12, 0, 0, NULL, NULL, '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(2) NOT NULL,
  `ten` varchar(30) DEFAULT NULL,
  `hinh` varchar(50) NOT NULL,
  `conten` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `ten`, `hinh`, `conten`) VALUES
(22, 'Lựa chọn đồng hồ treo tường ch', '../upload_tt/donghotintuc.jpg', 'Hãy cùng khám phá phụ kiện không thể thiếu đó chính là đồng hồ Michael [...]'),
(23, 'Đồng hồ pierre lannier là của ', '../upload_tt/shoptintuc2.png', 'Nội dung chínhLịch sử hình thành và phát triển của thương hiệu đồng hồ Pierre [...]'),
(24, 'Cách thay thế và bảo dưỡng dây', '../upload_tt/shoptintuc1.jpg', 'Nội dung chínhCách thay dây kim loại đồng hồ DWThay dây nato bằng dây kim [...]'),
(25, 'TẠI SAO ĐỒNG HỒ ROLEX ĐẮT? 10 ', '../upload_tt/shoptintuc4.png', 'Nội dung chính1. Chất liệu thép độc quyền và đẳng cấp2. Rolex sở hữu phòng nghiên [...]'),
(26, 'Cách phân biệt đồng hồ G-SHOCK', '../upload_tt/shoptintuc10.jpg', 'Cách phân biệt đồng hồ G-SHOCK fake đơn giản tránh mất tiền oan'),
(27, 'Dòng chữ altimeter trên đồng h', '../upload_tt/shoptintuc11.png', 'Nội dung chínhÝ NGHĨA DÒNG CHỮ ALTIMETER LÀ GÌ TRÊN MẶT ĐỒNG HỒTHẾ NÀO LÀ [...]'),
(28, 'Đồng hồ Casio WR50m chính hãng', '../upload_tt/shoptintuc3.jpg', 'Nội dung chínhI. ĐÁNH GIÁ ĐỒNG HỒ CASIO BESIDE WR50M1. Đánh giá tính năng vượt [...]'),
(31, 'Đồng hồ cơ là gì? đồng hồ auto', '../upload_tt/shoptintuc7.jpg', 'Nội dung chínhI. ĐỒNG HỒ CƠ LÀ GÌ?Lịch sử đồng hồ cơII. PHÂN LOẠI ĐỒNG [...]'),
(32, 'Đồng hồ orient sun and moon là', '../upload_tt/shoptintuc6.png', 'Nội dung chínhVỀ THƯƠNG HIỆU ĐỒNG HỒ ORIENTTHÔNG TIN CHUNG VỀ ĐỒNG HỒ ORIENT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`iduser`, `sdt`, `address`, `email`, `user`, `pass`, `role`) VALUES
(2, NULL, NULL, '', 'admin', '123', 1),
(15, '0708223608', NULL, 'phatvo3122002@gmail.com', 'vodangphat2002', 'abc@123', 0),
(16, '0708223608', NULL, 'hoangviet@gmail.com', 'hoangviet2002', 'abc@123', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`idDanhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSanPham`),
  ADD KEY `fk_sanPham_danhMuc` (`idDanhmuc`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `idDanhmuc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSanPham` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanPham_danhMuc` FOREIGN KEY (`idDanhmuc`) REFERENCES `danhmuc` (`idDanhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
