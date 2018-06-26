-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2018 lúc 12:34 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `date_order` date NOT NULL,
  `total` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `id_customer`, `date_order`, `total`, `created_at`, `updated_at`) VALUES
(1, 21, '2018-05-19', 60000, '2018-05-19 01:39:14', '2018-05-19 01:39:14'),
(2, 22, '2018-05-19', 300, '2018-05-19 01:41:33', '2018-05-19 01:41:33'),
(3, 23, '2018-05-19', 4, '2018-05-19 01:46:00', '2018-05-19 01:46:00'),
(4, 24, '2018-05-19', 2, '2018-05-19 01:47:07', '2018-05-19 01:47:07'),
(5, 25, '2018-05-21', 2, '2018-05-21 01:41:23', '2018-05-21 01:41:23'),
(6, 26, '2018-05-26', 2, '2018-05-25 23:31:11', '2018-05-25 23:31:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_products` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_products`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 1, 23, 3, 666666.6666666666, '2018-05-19 01:39:14', '2018-05-19 01:39:14'),
(2, 2, 24, 2, 75000, '2018-05-19 01:41:33', '2018-05-19 01:41:33'),
(3, 3, 23, 2, 1000000, '2018-05-19 01:46:00', '2018-05-19 01:46:00'),
(4, 4, 23, 1, 2000000, '2018-05-19 01:47:08', '2018-05-19 01:47:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `numberphone`, `created_at`, `updated_at`) VALUES
(1, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:10:06', '2018-05-19 01:10:06'),
(2, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:10:28', '2018-05-19 01:10:28'),
(3, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:12:05', '2018-05-19 01:12:05'),
(4, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:12:51', '2018-05-19 01:12:51'),
(5, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:12:58', '2018-05-19 01:12:58'),
(6, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:17:11', '2018-05-19 01:17:11'),
(7, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:19:43', '2018-05-19 01:19:43'),
(8, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:20:05', '2018-05-19 01:20:05'),
(9, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:23:54', '2018-05-19 01:23:54'),
(10, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:24:20', '2018-05-19 01:24:20'),
(11, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:25:50', '2018-05-19 01:25:50'),
(12, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:27:20', '2018-05-19 01:27:20'),
(13, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:27:50', '2018-05-19 01:27:50'),
(14, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:28:23', '2018-05-19 01:28:23'),
(15, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:29:23', '2018-05-19 01:29:23'),
(16, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:29:41', '2018-05-19 01:29:41'),
(17, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:34:24', '2018-05-19 01:34:24'),
(18, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:37:02', '2018-05-19 01:37:02'),
(19, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:37:39', '2018-05-19 01:37:39'),
(20, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:39:00', '2018-05-19 01:39:00'),
(21, 'nguyễn công chí', 'teont97@gmail.com', 'Nha trang', '01222424097', '2018-05-19 01:39:14', '2018-05-19 01:39:14'),
(22, 'nguyễn công chí', 'teont98@gmail.cm', 'nha trang', '01222424097', '2018-05-19 01:41:33', '2018-05-19 01:41:33'),
(23, 'nguyễn công chí', 'teont98@gmail.cm', 'khánh hòa', '01222424097', '2018-05-19 01:46:00', '2018-05-19 01:46:00'),
(24, 'dsadsa', 'teont97@gmail.com', 'dsadas', 'dsadsa', '2018-05-19 01:47:07', '2018-05-19 01:47:07'),
(25, 'Kien nguyen', 'kien.nt@devnet.vn', 'nha trang', '01222222222', '2018-05-21 01:41:23', '2018-05-21 01:41:23'),
(26, 'lê anh tuấn', 'ncchi1997@gmail.com', '57/2 Đoàn trần nghiệp- Nha trang', '01685800203', '2018-05-25 23:31:11', '2018-05-25 23:31:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'hahahaha', 'hahahaha', '2018-05-22 02:09:35', '2018-05-22 02:09:35'),
(2, 'buồn của anh', 'buòn-của-anh', '2018-05-22 02:50:35', '2018-05-22 02:50:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_05_140539_create_products_table', 1),
(4, '2018_05_05_140927_create_type_products_table', 1),
(5, '2018_05_05_141235_create_bill_detail_table', 1),
(6, '2018_05_05_141321_create_bill_table', 1),
(7, '2018_05_05_141359_create_customer_table', 1),
(9, '2018_05_05_141554_create_slide_table', 1),
(10, '2018_05_05_141626_create_videos_table', 1),
(11, '2018_05_05_151417_create_type_products_table', 2),
(13, '2018_05_05_152004_create_products_table', 4),
(14, '2018_05_05_153213_create_customer_table', 5),
(18, '2018_05_05_161127_create_slide_table', 9),
(19, '2018_05_05_154716_create_bill_table', 10),
(20, '2018_05_05_155111_create_bill_detail_table', 11),
(22, '2018_05_05_151647_create_users_table', 12),
(24, '2018_05_13_125544_products_img', 13),
(27, '2018_05_18_064802_create_loaitin_table', 15),
(28, '2018_05_18_064855_create_tin_tuc_table', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` float NOT NULL,
  `promotion_price` float NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `images`, `unit`, `created_at`, `updated_at`) VALUES
(23, 'Áo Sơ Mi  Zara 1', 13, 'Áo Sơ Mi Fashion 2018', 2000000, 1500000, 'ao som i.jpg', 'VNĐ', '2018-05-15 05:11:44', '2018-05-15 05:11:44'),
(24, 'Áo Sơ Mi HM 1', 13, 'Áo Sơ Mi Fashion 2018', 150000, 120000, 'ao so mi den.jpg', 'VNĐ', '2018-05-15 05:12:48', '2018-05-15 05:12:48'),
(25, 'Mũ Adidas', 17, 'Mũ Adidas Hot 2018 2019', 100000, 120000, 'mu.jpg', 'Vnđ', '2018-05-20 22:31:12', '2018-05-20 22:31:12'),
(26, 'Mũ Sơn Green', 17, 'Nón Sơn Đc Bán Tại Nha Trang', 350000, 300000, 'nón sơn đẹp.jpg', 'VNĐ', '2018-05-20 22:32:23', '2018-05-20 22:32:23'),
(27, 'Nón Lưỡi Trai', 17, 'Nón Fashion 2018', 120000, 90000, 'hat.jpg', 'VNĐ', '2018-05-20 22:33:54', '2018-05-20 22:33:54'),
(28, 'Quần Jean ZARA', 13, 'Quần Jean Fashion', 350000, 300000, 'quan jean.jpg', 'VNĐ', '2018-05-20 22:35:53', '2018-05-20 22:35:53'),
(29, 'Váy Xèo', 14, 'Váy Xèo Giành Cho Nữ 45kg->55kg', 250000, 200000, 'vay-xoe-2.jpg', 'VNĐ', '2018-05-20 22:38:10', '2018-05-20 22:38:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_img`
--

CREATE TABLE `products_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_products` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_img`
--

INSERT INTO `products_img` (`id`, `images`, `id_products`, `created_at`, `updated_at`) VALUES
(1, 'mu.jpg', 25, '2018-05-20 22:31:12', '2018-05-20 22:31:12'),
(2, 'nón sơn đẹp.jpg', 26, '2018-05-20 22:32:24', '2018-05-20 22:32:24'),
(3, 'hat.jpg', 27, '2018-05-20 22:33:55', '2018-05-20 22:33:55'),
(4, 'quan jean.jpg', 28, '2018-05-20 22:35:53', '2018-05-20 22:35:53'),
(5, 'vay-xoe-2.jpg', 29, '2018-05-20 22:38:10', '2018-05-20 22:38:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviate` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` float NOT NULL,
  `id_cate` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`id`, `title`, `alias`, `abbreviate`, `content`, `images`, `Keywords`, `view`, `id_cate`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'Cách Phối đồ đúng cách', 'Cách-Phói-dò-dúng-cách', 'Mùa hè đã chạm ngõ và đang đợi bạn trước cửa rồi, đây là thời điểm tuyệt vời để bạn diện những chiếc áo phông năng động và thoái mái nhất. Cùng với dòng chảy của thời gian, những chiếc áo phông vô cùng thời trang đã ra đời để bạn tha hồ lựa chọn theo cá tính.', '<p>&ugrave;a h&egrave; đ&atilde; chạm ng&otilde; v&agrave; đang đợi bạn trước cửa rồi, đ&acirc;y l&agrave; thời điểm tuyệt vời để bạn diện những chiếc &aacute;o ph&ocirc;ng năng động v&agrave; tho&aacute;i m&aacute;i nhất. C&ugrave;ng với d&ograve;ng chảy của thời gian, những chiếc &aacute;o ph&ocirc;ng v&ocirc; c&ugrave;ng thời trang đ&atilde; ra đời để bạn tha hồ lựa chọn theo c&aacute; t&iacute;nh.</p>\r\n\r\n<p>Bạn tới cửa h&agrave;ng v&agrave; chọn cho m&igrave;nh bất kỳ m&agrave;u sắc n&agrave;o m&agrave; bạn ưa th&iacute;ch, &ldquo;rinh&rdquo; về v&agrave; để trong tủ quần &aacute;o của m&igrave;nh. Đến đ&acirc;y bạn bắt đầu đặt tay l&ecirc;n tr&aacute;n v&agrave; suy nghĩ xem: Kết hợp với g&igrave; đ&acirc;y nhỉ?</p>\r\n\r\n<p>Lấy ra, cất v&agrave;o, giơ l&ecirc;n, đặt xuống một hồi v&agrave; quyết định v&agrave;o đọc b&agrave;i viết n&agrave;y của Phan Nguyễn để biết được<strong>&nbsp;&ldquo;Một ng&agrave;n lẻ một c&aacute;ch phối đồ với &aacute;o ph&ocirc;ng&rdquo;.&nbsp;</strong>C&ugrave;ng t&igrave;m hiểu ngay n&agrave;o</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1. &Aacute;O PH&Ocirc;NG POLO C&Ugrave;NG QUẦN D&Agrave;I</strong></p>\r\n\r\n<p>Lu&ocirc;n được mệnh danh l&agrave; sự kết hợp ăn &yacute; nhất cho h&igrave;nh ảnh vừa thanh lịch lại thoải m&aacute;i, &aacute;o ph&ocirc;ng polo v&agrave; quần d&agrave;i lu&ocirc;n được ưa chuộng cho cuối tuần dạo phố, cuộc hẹn h&ograve; cafe hay ng&agrave;y thứ 7 của d&acirc;n c&ocirc;ng sở<img alt=\"\" src=\"/resources/views/admin/UploadImages/blog/images/polo-e1522815013626.jpg\" style=\"height:500px; width:333px\" /></p>\r\n\r\n<p><strong>2. NĂNG ĐỘNG VỚI QUẦN SOOC</strong></p>\r\n\r\n<p>Những chiếc &aacute;o ph&ocirc;ng cotton mềm nhẹ, thấm h&uacute;t mồ h&ocirc;i m&agrave; kết hợp với quần sooc nữa th&igrave; khỏe khoắn v&agrave; trẻ trung kh&ocirc;ng để đ&acirc;u cho hết. Phong c&aacute;ch n&agrave;y gi&uacute;p người mặc thoải m&aacute;i v&agrave; tự tin vận động trong thời tiết n&oacute;ng nực của m&ugrave;a h&egrave;</p>\r\n\r\n<p><strong>3. NHỮNG CHIẾC &Aacute;O PH&Ocirc;NG CỔ TR&Ograve;N DỄ T&Iacute;NH</strong></p>\r\n\r\n<p>&Aacute;o ph&ocirc;ng cổ tr&ograve;n mang đến sự khỏe khoắn v&agrave; năng động nhất trong tất cả những sự lựa chọn của bạn. Cũng như t&iacute;nh tiện dụng của m&igrave;nh, &aacute;o ph&ocirc;ng cổ tr&ograve;n rất &ldquo;dễ d&atilde;i&rdquo; trong việc kết hợp trang phục.</p>\r\n\r\n<p><strong>4. TH&Ecirc;M &ldquo;NGẦU&rdquo; VỚI &Aacute;O KHO&Aacute;C&nbsp;</strong></p>\r\n\r\n<p>Kh&ocirc;ng thể phủ nhận độ &ldquo;ngầu&rdquo; của bạn khi mix match &aacute;o ph&ocirc;ng c&ugrave;ng với một chiếc sơ mi kho&aacute;c ngo&agrave;i, th&ecirc;m phụ kiện v&agrave; cặp mắt k&iacute;nh nữa l&agrave; chất ngất lu&ocirc;n rồi</p>', 'ao som i.jpg', 'Haha', 0, 2, 1, '2018-05-24 05:54:05', '2018-05-24 05:54:05'),
(3, 'Nghệ Thuật Mix Đồ Đẹp', 'Nghẹ-Thuạt-Mix-Dò-Dẹp', 'Áo phông dài tay cũng thuộc top những món đồ đơn giản, nhưng lại có độ phủ sóng mạnh mẽ đối với phong cách của phái đẹp.\r\nGiống như sơmi trắng, giày cao gót màu nude hay quần âu đen... áo phông dài tay cũng thuộc top những món đồ đơn giản nhưng lại có độ phủ sóng mạnh mẽ với phong cách của phái đẹp. Chưa nói đến những thiết kế áo ngắn tay đặc trưng của mùa hè, thời điểm này áo phông dài tay mới là món được các nàng lựa chọn nhiều nhất', '<p>&Aacute;o ph&ocirc;ng d&agrave;i tay cũng thuộc top những m&oacute;n đồ đơn giản, nhưng lại c&oacute; độ phủ s&oacute;ng mạnh mẽ đối với phong c&aacute;ch của ph&aacute;i đẹp.<br />\r\nGiống như sơmi trắng, gi&agrave;y cao g&oacute;t m&agrave;u nude hay quần &acirc;u đen... &aacute;o ph&ocirc;ng d&agrave;i tay cũng thuộc top những m&oacute;n đồ đơn giản nhưng lại c&oacute; độ phủ s&oacute;ng mạnh mẽ với phong c&aacute;ch của ph&aacute;i đẹp. Chưa n&oacute;i đến những thiết kế &aacute;o ngắn tay đặc trưng của m&ugrave;a h&egrave;, thời điểm n&agrave;y &aacute;o ph&ocirc;ng d&agrave;i tay mới l&agrave; m&oacute;n được c&aacute;c n&agrave;ng lựa chọn nhiều nhất&nbsp;</p>\r\n\r\n<p>Kh&ocirc;ng c&aacute; t&iacute;nh hay nổi bật như những thiết kế c&aacute;ch điệu hay in hoạ tiết nổi bật, ch&iacute;nh sự tiết chế v&agrave; kiểu d&aacute;ng đơn giản đ&atilde; l&agrave;m n&ecirc;n điểm mạnh rất đặc biệt gi&uacute;p &aacute;o ph&ocirc;ng d&agrave;i tay c&oacute; thể dễ d&agrave;ng kết hợp c&ugrave;ng những m&oacute;n đồ kh&aacute;c, sẵn s&agrave;ng tạo dựng phong c&aacute;ch cho người mặc trong bất kỳ ho&agrave;n cảnh n&agrave;o. &Aacute;o ph&ocirc;ng v&agrave; quần jeans Cặp đ&ocirc;i n&agrave;y được xếp v&agrave;o loại cơ bản nhất nhưng lại c&oacute; thể biến h&oacute;a đa dạng đủ kiểu phong c&aacute;ch hay c&aacute; t&iacute;nh cho người mặc. Bạn c&oacute; thể diện &aacute;o ph&ocirc;ng với quần jeans theo nhiều phong c&aacute;ch kh&aacute;c nhau t&ugrave;y theo m&ocirc;i trường, v&iacute; dụ như đi chơi c&oacute; thể diện quần jeans r&aacute;ch, quần jeans cạp trễ, quần short jeans với &aacute;o ph&ocirc;ng trơn hoặc kẻ đơn giản,&hellip; c&ograve;n tới c&ocirc;ng sở th&igrave; kết hợp c&ugrave;ng quần jean xanh hoặc đen đơn giản l&agrave; ph&ugrave; hợp rồi.&nbsp;<br />\r\n&Aacute;o ph&ocirc;ng v&agrave; quần jeans Cặp đ&ocirc;i n&agrave;y được xếp v&agrave;o loại cơ bản nhất nhưng lại c&oacute; thể biến h&oacute;a đa dạng đủ kiểu phong c&aacute;ch hay c&aacute; t&iacute;nh cho người mặc. Bạn c&oacute; thể diện &aacute;o ph&ocirc;ng với quần jeans theo nhiều phong c&aacute;ch kh&aacute;c nhau t&ugrave;y theo m&ocirc;i trường, v&iacute; dụ như đi chơi c&oacute; thể diện quần jeans r&aacute;ch, quần jeans cạp trễ, quần short jeans với &aacute;o ph&ocirc;ng trơn hoặc kẻ đơn giản,&hellip; c&ograve;n tới c&ocirc;ng sở th&igrave; kết hợp c&ugrave;ng quần jean xanh hoặc đen đơn giản l&agrave; ph&ugrave; hợp rồi.<br />\r\n----------</p>', 'polo-e1522815013626.jpg', 'áo phong tay dài', 0, 2, 1, '2018-05-24 06:09:38', '2018-05-24 06:09:38'),
(4, 'Diện đồ layer đẹp và ấm áp cho ngày lạnh', 'Dien-dồ-layer-dep-và-am-ap-cho-ngày-lanh', 'Những cách phối đồ layer đơn giản nhưng ấm áp và tạo hiệu ứng nổi bật được nhiều fashionista ứng dụng trong tuần qua.', '<p>Những c&aacute;ch phối đồ layer đơn giản nhưng ấm &aacute;p v&agrave; tạo hiệu ứng nổi bật được nhiều fashionista ứng dụng trong tuần qua.<br />\r\n------------<br />\r\nXem th&ecirc;m:&nbsp;<a href=\"http://vietbao.vn/Dep/Instagram-tuan-qua-Dien-do-layer-dep-va-am-ap-cho-ngay-lanh/2147736656/108/\">Instagram tuần qua: Diện đồ layer đẹp v&agrave; ấm &aacute;p cho ng&agrave;y lạnh</a>, http://vietbao.vn/Dep/Instagram-tuan-qua-Dien-do-layer-dep-va-am-ap-cho-ngay-lanh/2147736656/108/<br />\r\nTin nhanh Việt Nam ra thế giới&nbsp;<a href=\"http://vietbao.vn/\">vietbao.vn</a></p>', 'ao-so-mi-nam-body-co-tru-tay-dai-1492348656-1-2283330-1492348656.jpg', 'hahah', 0, 2, 1, '2018-05-24 06:13:47', '2018-05-24 06:13:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(13, 'Men\'s', 'Category Men\'s', '2018-05-15 05:06:54', '2018-05-15 05:06:54'),
(14, 'Wonmen\'s', 'Category Wonmen\'s', '2018-05-15 05:07:21', '2018-05-15 05:07:21'),
(15, 'Watch\'s', 'Category Watch', '2018-05-15 05:08:08', '2018-05-15 05:08:08'),
(16, 'Bag\'s', 'Category Bag', '2018-05-15 05:08:55', '2018-05-15 05:08:55'),
(17, 'Hat', 'Hat Fashion', '2018-05-20 22:27:35', '2018-05-20 22:27:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `post_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'teont97@gmail.com', '$2y$10$Yp8kkqCtIHan5gk1eQbcOOKGoLPfE8SNkcAj2NDoAS8xBSg8fh6.i', 1, 0, 'UE7DSGAwSwo7jbuodvW5CKXdwIMyI8euk3aXjRlOSdWPd6sy64MKP5dNvUEk', '2018-05-09 07:24:06', '2018-05-09 07:24:06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_id_customer_foreign` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_id_bill_foreign` (`id_bill`),
  ADD KEY `bill_detail_id_products_foreign` (`id_products`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Chỉ mục cho bảng `products_img`
--
ALTER TABLE `products_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_img_id_products_foreign` (`id_products`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tin_tuc_id_cate_foreign` (`id_cate`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_products_name_unique` (`name`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT cho bảng `products_img`
--
ALTER TABLE `products_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_detail_id_products_foreign` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products_img`
--
ALTER TABLE `products_img`
  ADD CONSTRAINT `products_img_id_products_foreign` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD CONSTRAINT `tin_tuc_id_cate_foreign` FOREIGN KEY (`id_cate`) REFERENCES `loaitin` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
