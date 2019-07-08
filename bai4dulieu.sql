-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2019 lúc 03:42 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai4dulieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangslide`
--

CREATE TABLE `bangslide` (
  `id` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `bangslide`
--

INSERT INTO `bangslide` (`id`, `anh`) VALUES
(1, 'http://localhost:8080/trung/img/h3.jpg'),
(2, 'http://localhost:8080/trung/img/h3.jpg'),
(3, 'http://localhost:8080/trung/img/h3.jpg'),
(4, 'http://localhost:8080/trung/img/h3.jpg'),
(5, 'http://localhost:8080/trung/img/h3.jpg'),
(6, 'http://localhost:8080/trung/img/h3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `buoian`
--

CREATE TABLE `buoian` (
  `id` int(11) NOT NULL,
  `tenbuoian` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `buoian`
--

INSERT INTO `buoian` (`id`, `tenbuoian`) VALUES
(1, 'Sáng'),
(2, 'Trưa'),
(4, 'Chiều'),
(5, 'Tối');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuctin`
--

CREATE TABLE `danhmuctin` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuctin`
--

INSERT INTO `danhmuctin` (`id`, `tendanhmuc`) VALUES
(4, 'Tin nội bộ'),
(13, 'Tin nhà hàng'),
(15, 'Tin tuyển dụng'),
(19, 'Tin chưa phân loại');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datban`
--

CREATE TABLE `datban` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `ngaydatban` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `giodatban` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `songuoi` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `datban`
--

INSERT INTO `datban` (`id`, `tenkh`, `email`, `sdt`, `ngaydatban`, `giodatban`, `songuoi`, `trangthai`) VALUES
(1, 'Nguyễn Thanh Quang', 'lgold141@gmail.com', '0396490264', '2019-05-28 18:29:09', '2019-05-23 22:19:17', 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `homepageattr`
--

CREATE TABLE `homepageattr` (
  `id` int(11) NOT NULL,
  `tenthuoctinh` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `giatrithuoctinh` text COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `homepageattr`
--

INSERT INTO `homepageattr` (`id`, `tenthuoctinh`, `giatrithuoctinh`) VALUES
(1, 'slide_topbanner', '[{\"title\":\"The Fresh And Tasty Burgers\",\"description\":\"Sntium doloremque\",\"button_text\":\"Mua ngay\",\"button_link\":\"facebook.com\",\"slide_image\":\"http:\\/\\/localhost:8080\\/bai7arica\\/uploads\\/image-3.jpg\"},{\"title\":\"The Fresh And Tasty Burgers\",\"description\":\"Sntium doloremque\",\"button_text\":\"Mua ngay\",\"button_link\":\"facebook.com\",\"slide_image\":\"http:\\/\\/localhost:8080\\/bai7arica\\/uploads\\/2.jpg\"},{\"title\":\"The Fresh And Tasty Burgers\",\"description\":\"Sntium doloremque\",\"button_text\":\"Mua ngay\",\"button_link\":\"facebook.com\",\"slide_image\":\"http:\\/\\/localhost:8080\\/bai7arica\\/uploads\\/3.jpg\"}]'),
(2, 'slide_fixed1', '[{\"title\":\"Our Delicious Menu Items\",\"description\":\"Fresh And Healthy Food Available\"},{\"title\":\"Enjoy Pleasant Pastime With Friends and Partners\",\"description\":\"Relaxing Atmosphere\"},{\"title\":\"We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.\",\"description\":\" Stevan Smith,\"},{\"title\":\"We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.\",\"description\":\" Stevan Smith,\"},{\"title\":\"We enjoy sharing the projects and posts we make just as much as we enjoy creating them. consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.\",\"description\":\" Stevan Smith,\"}]'),
(3, 'quanlyheader', '{\"mangxh\":{\"linkfb\":\"http\",\"linktwiter\":\"http\",\"linkpinterest\":\"http\",\"linkgoogleplus\":\"http\"},\"dienthoai\":{\"textdt\":\"G\\u1ecdi \\u0111\\u1ec3 \\u0111\\u1eb7t b\\u00e0n\",\"sodatban\":\"0396490264\"},\"giomocua\":{\"textgio\":\"Gi\\u1edd m\\u1edf c\\u01b0a\",\"thongtingio\":\"9h - 8h\"},\"logo\":\"images\\/logo.png\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `ngaytao` double NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `name`, `gmail`, `password`, `ngaytao`, `note`) VALUES
(1, 'quang', 'lgold141@gmail.com', 'admin', 1557384307, 'Hay lắm');

--
-- Bẫy `login`
--
DELIMITER $$
CREATE TRIGGER `AUTO INCREATE ID IN LOGIN` BEFORE INSERT ON `login` FOR EACH ROW BEGIN
	SET NEW.ngaytao=UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `id` int(11) NOT NULL,
  `tieudemonan` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `gia` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `new` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `ngaydang` double NOT NULL,
  `anhmon` text COLLATE utf8_unicode_520_ci NOT NULL,
  `idbuoian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id`, `tieudemonan`, `gia`, `mota`, `new`, `ngaydang`, `anhmon`, `idbuoian`) VALUES
(1, 'Món ngon', '1000', 'Hết lỗi', '', 1557336681, 'http://localhost:8080/bai7arica/uploads/1-43.jpg', 1),
(3, 'Gosh Egg-White Omelet', '35000', 'Mussel with tomato sauce, wine', 'New', 1557343924, 'http://localhost:8080/bai7arica/uploads/1389257686-linh-napie-15.jpg', 1),
(4, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', 'New', 1557343938, 'http://localhost:8080/bai7arica/uploads/anh-bia-zalo-dep-chat-nhat-31.jpg', 1),
(5, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343942, 'http://localhost:8080/bai7arica/uploads/49077027_2201585976772817_6082154718883217408_n.jpg', 1),
(6, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343944, 'http://localhost:8080/bai7arica/uploads/nhung-hinh-buon-anh-buon-chan-tam-trang-dep-nhat-6.png', 1),
(7, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343947, 'http://localhost:8080/bai7arica/uploads/hinh-anh-tuyet-mua-dong-dep-3.jpg', 1),
(8, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343950, 'http://localhost:8080/bai7arica/uploads/maxresdefault.jpg', 1),
(9, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343962, 'http://localhost:8080/bai7arica/uploads/nhung-hinh-buon-anh-buon-chan-tam-trang-dep-nhat-6.png', 2),
(10, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343968, 'http://localhost:8080/bai7arica/uploads/RE1LLyO_1920x1080.jpg', 2),
(11, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343971, 'http://localhost:8080/bai7arica/uploads/RE1LyAD_1920x1080.jpg', 2),
(12, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343974, 'http://localhost:8080/bai7arica/uploads/RE1MBNa_1920x1080.jpg', 2),
(13, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343982, 'http://localhost:8080/bai7arica/uploads/RE1YbuV_1920x1080.jpg', 5),
(14, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343986, 'http://localhost:8080/bai7arica/uploads/RE1YgGS_1920x1080.jpg', 5),
(15, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343988, 'http://localhost:8080/bai7arica/uploads/RE1YovD_1920x1080.jpg', 5),
(16, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343991, 'http://localhost:8080/bai7arica/uploads/RE1YowI_1920x1080.jpg', 5),
(17, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343995, 'http://localhost:8080/bai7arica/uploads/RE2GA5R_1920x1080.jpg', 5),
(18, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557343998, 'http://localhost:8080/bai7arica/uploads/RE2GncN_1920x1080.jpg', 5),
(19, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557344006, 'http://localhost:8080/bai7arica/uploads/RE2K4EE_1920x1080.jpg', 2),
(20, 'Gosh Egg-White Omelet', '35000', '<p>Mussel with tomato sauce, wine</p>\r\n', '', 1557344009, 'http://localhost:8080/bai7arica/uploads/RE2K7bn_1920x1080.jpg', 2);

--
-- Bẫy `monan`
--
DELIMITER $$
CREATE TRIGGER `AUTO NGAYDANG IN MONAN` BEFORE INSERT ON `monan` FOR EACH ROW BEGIN
	SET NEW.ngaydang=UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `noidungtin` text COLLATE utf8_unicode_520_ci NOT NULL,
  `ngaytao` double NOT NULL,
  `anhtin` text COLLATE utf8_unicode_520_ci NOT NULL,
  `trichdan` text COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `iddanhmuc`, `noidungtin`, `ngaytao`, `anhtin`, `trichdan`) VALUES
(11, 'Ingredients For Cooking Pasta With Creamy Mushroom', 4, '<p>Don&#39;t worry</p>\r\n', 1557041696, 'http://localhost:8080/bai7arica/uploads/anh-bia-zalo-dep-chat-nhat-31.jpg', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci vel sed quia suthagara lukuthea satham[...]'),
(13, 'Lâm văn nhân', 13, '<h4>Ingredients For Cooking Pasta With Creamy Mushroom</h4>\r\n\r\n<p>configuration, it is more focused on the interface. Below you will find some most commonly used configuration settings:</p>\r\n', 1557238515, 'http://localhost:8080/bai7arica/uploads/160515starminhhang-1.jpg', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci vel sed quia suthagara lukuthea satham[...]'),
(14, 'Trần Hoàn Mão', 13, '<h4>Ingredients For Cooking Pasta With Creamy Mushroom</h4>\r\n\r\n<p>configuration, it is more focused on the interface. Below you will find some most commonly used configuration settings</p>\r\n', 1557239666, 'http://localhost:8080/bai7arica/uploads/nhung-hinh-buon-anh-buon-chan-tam-trang-dep-nhat-6.png', 'configuration, it is more focused on the interface. Below you will find some most commonly used configuration settings:'),
(15, 'Nguyễn Thanh Quang', 13, '<h4>gredients For Cooking Pasta With Creamy Mushroom</h4>\r\n\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipi</p>\r\n', 1557242296, 'http://localhost:8080/bai7arica/uploads/11206039033_0f2a318ce5_b.jpg', 'Thông báo Điều chỉnh cách tính giá cước mới, áp dụng từ 24/02/2019 --------------------------------------------------------------------------- - Chỉ áp dụng cho dịch vụ GrabBike tại HCM & các tỉnh thành Miền Nam (từ Huế, Đà Nẵng trở vào) - Cước phí tính theo thời gian di chuyển (sau 2km đầu tiên)'),
(16, 'Lê văn khùng', 13, '<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci vel sed quia suthagara lukuthea satha</p>\r\n', 1557383715, 'http://localhost:8080/bai7arica/uploads/a868dc64f170dbf0996ef66cc77d4331.jpg', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magniol res eos qui rate voluptatem sequi nesciunt Neque porro quisquam est qui dolorem ipsum quia dolore sit amet con sectetur adipisci vel sed quia suthagara lukuthea satham[...]');

--
-- Bẫy `tintuc`
--
DELIMITER $$
CREATE TRIGGER `AUTO INSER NGAYTAO TO TINTUC` BEFORE INSERT ON `tintuc` FOR EACH ROW BEGIN
	SET NEW.ngaytao=UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `dulieu` text COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `warehouse`
--

INSERT INTO `warehouse` (`id`, `ten`, `dulieu`) VALUES
(25, 'contact', '{\"0\":{\"ten\":\"B\",\"sdt\":\"01696490265\"},\"3\":{\"ten\":\"C\",\"sdt\":\"016964902637\"},\"4\":{\"ten\":\"\",\"sdt\":\"\"}}');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangslide`
--
ALTER TABLE `bangslide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `buoian`
--
ALTER TABLE `buoian`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuctin`
--
ALTER TABLE `danhmuctin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `datban`
--
ALTER TABLE `datban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `homepageattr`
--
ALTER TABLE `homepageattr`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangslide`
--
ALTER TABLE `bangslide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `buoian`
--
ALTER TABLE `buoian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmuctin`
--
ALTER TABLE `danhmuctin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `datban`
--
ALTER TABLE `datban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `homepageattr`
--
ALTER TABLE `homepageattr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
