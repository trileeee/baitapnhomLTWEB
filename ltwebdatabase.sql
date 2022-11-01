-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2022 at 10:15 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltwebdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(20) NOT NULL,
  `product_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uses` varchar(200) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `component` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `technology` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `origin` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `expiry_date` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `uses`, `component`, `technology`, `origin`, `expiry_date`, `img`) VALUES
(1, 'Bột Bơ hữu cơ', '36.200 đ', 'Chống lão hoá da, da khoẻ, mềm mịn, dưỡng ẩm', 'Phần thịt của quả bơ', 'Sấy thăng hoa', 'Tây Nguyên', '(Ghi trên bao bì)', 'bo.png'),
(2, 'Bột Cà Phê Hữu Cơ', '165.000 đ', 'Se khít lỗ chân lông, giảm sưng', 'Hạt cà phê ( để nguyên hạt hoặc xay thành dạng bột tuỳ theo yêu cầu khách hàng)', 'Phơi sấy thủ công', 'Việt Nam', '(Ghi trên bao bì)', 'ca-phe.png'),
(3, 'Bột Cám Gạo Hữu Cơ', '150.000 đ', 'Sạch da, sáng da dịu nhẹ, dùng được cho da body.', 'Bột cám gạo hữu cơ', 'Xay mịn nhiệt độ thấp', 'Úc', '(Ghi trên bao bì)', 'cam-gao.png'),
(4, 'Bột Cơm Dừa Hữu Cơ', '165.000 đ', 'Se khít lỗ chân lông, giảm sưng', 'Hạt cơm dừa ( để nguyên hạt hoặc xay thành dạng bột tuỳ theo yêu cầu khách hàng)', 'Phơi sấy thủ công', 'Việt Nam', '(Ghi trên bao bì)', 'dua.png'),
(5, 'Bột Diếp Cá Hữu Cơ', '165.000 đ', 'Đưa mụn ẩn nhanh chóng di chuyển lên bề mặt da.', 'Bột diếp cá sấy lạnh', 'Sấy lạnh', 'Việt Nam', '(Ghi trên bao bì)', 'diep-ca.png'),
(6, 'Bột Khổ Qua Hữu Cơ', '169.000 đ', 'Chống lão hoá da, da khoẻ, mềm mịn, dưỡng ẩm', 'Phần thịt của quả khổ qua', 'Sấy thăng hoa', 'Tây nguyên', '(Ghi trên bao bì)', 'kho-qua.png'),
(7, 'Bột Nghệ Hữu Cơ', '135.000 đ', 'Trị thâm, ngăn ngừa mụn, dùng uống được', 'Tinh bột nghệ nguyên chất', 'Thủ công', 'Việt Nam', '(Ghi trên bao bì)', 'nghe.png'),
(8, 'Bột Trà Xanh', '155.000 đ', 'Chống Oxy hoá, ngăn ngừa mụn, có tính kháng viêm.', 'Bột Lá trà xanh xấy lạnh', 'Sấy thăng hoa', 'Việt Nam', '(Ghi trên bao bì)', 'tra-xanh.png'),
(9, 'Bột Rau Má Hữu Cơ', '155.000 đ', 'Giúp phục hồi vết thương vật lý sau quá trình trị mụn tại spa', 'Bột rau má sấy lạnh', 'Sấy lạnh', 'Việt Nam', '(Ghi trên bao bì)', 'rau-ma.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Username` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Password` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
