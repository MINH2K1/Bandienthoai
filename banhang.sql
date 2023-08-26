-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 07:11 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `fullname` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `fullname`, `date`, `address`) VALUES
(2, 'thao@gmail.com', '2015-03-06 02:09:24', 'quận 1'),
(3, 'thao@gmail.com', '2015-03-06 04:39:25', 'quận 9'),
(4, 'thao@gmail.com', '2015-03-08 12:18:20', 'quận 5'),
(6, 'long@gmail.com', '2015-03-10 07:53:04', 'quận 9'),
(7, 'long@gmail.com', '2015-03-10 08:02:22', 'quận Bình Thạnh'),
(8, 'long@gmail.com', '2015-03-10 08:37:39', 'Quận Thủ Đức'),
(3852, 'hoang@gmail.com', '2021-06-26 18:21:55', 'Quận 5'),
(9078, 'hoang@gmail.com', '2021-06-26 18:06:47', 'Quận 5');

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `sta` int(11) NOT NULL,
  `pricetoltal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `cart_id`, `product_id`, `quantity`, `sta`, `pricetoltal`) VALUES
(2, 2, 8, 1, 0, 1000),
(3, 3, 9, 1, 0, 1400),
(4, 4, 6, 1, 0, 1000),
(6, 6, 10, 1, 0, 1400),
(7, 7, 10, 1, 0, 1600),
(8, 8, 2, 1, 0, 1000),
(9, 9078, 13, 1, 3, 500),
(10, 3852, 13, 1, 3, 500);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `comment` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_email` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_pass` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_country` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_city` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_contact` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `customer_address` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `stat`) VALUES
(1, 'thao', 'thao@gmail.com', '123', 'Viet Nam', 'TPHCM', '42', '543', 0),
(2, 'long', 'long@gmail.com', '123456', 'Viet Nam', 'TPHCM', '06262629', '543', 0),
(5, 'hoang', 'hoang@gmail.com', '123', 'Việt Nam', 'tphcm', '0325793505', 'lge33', 0),
(6, 'huy', 'Huy@gmail.com', '123', 'Việt Nam', 'TPHCM', '03251556', 'Quận 5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hieu`
--

CREATE TABLE `hieu` (
  `hieu_id` int(11) NOT NULL,
  `tenhieu` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hieu`
--

INSERT INTO `hieu` (`hieu_id`, `tenhieu`, `status`) VALUES
(1, 'Asuz', 0),
(2, 'Redmi', 0),
(3, 'Dell', 0),
(4, 'Samsung', 0),
(5, 'iphone', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `loai_id` int(11) NOT NULL,
  `tenloai` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;


-- Dumping data for table `loai`
--

INSERT INTO `loai` (`loai_id`, `tenloai`, `status`) VALUES
(1, 'Ipad', 0),
(2, 'Laptop', 0),
(3, 'Mobiles', 0),
(4, 'Camera', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_keywords` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `product_provi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `number`, `status`, `product_provi`) VALUES
(1, 4, 4, '                Camera 5', 500, '                Camera 5', 'a.jpg', 'camera', 20, 0, 1),
(2, 4, 2, '    Camera 6', 600, '    Camera 6', 'a4.jpg', 'camera', 1, 0, 2),
(3, 4, 2, '   Camera1', 600, '   Camera1', 'mm3.jpg', 'camera', 20, 0, 3),
(6, 3, 1, 'Smartphone Galaxy', 1000, 'SMartphone 2 7ich, 300g', 'si2.jpg', 'mobiles,Samsung', 20, 0, 1),
(7, 3, 2, 'Smartphone Asuz A', 1600, 'Smartphone Au A 3GB', 'mk3.jpg', 'Samsung,asus', 0, 0, 2),
(8, 3, 4, 'Smartphone 1', 1000, 'Smart phone 1 4GB', '9.png', 'mobiles,Samsung', 4, 0, 5),
(9, 1, 1, 'Ipad Z100', 1400, 'Ipad', 'mk9.jpg', 'Ipad', 5, 0, 4),
(10, 1, 1, 'ipad 145', 1400, 'Ipad', 'b4.jpg', 'Ipad air', 25, 0, 4),
(11, 1, 1, 'ipad AIM', 500, 'ipad AIM 2018 ver4', 'mk5.jpg', 'asus', 10, 0, 2),
(12, 1, 1, 'ipad A', 1000, 'ipad A 2019 ', 'ab.jpg', 'Ipad', 10, 0, 2),
(13, 1, 1, 'Ipad AZ', 500, 'CPU strongger, 1KG', '8.jpg', 'Ipad,apple', 10, 0, 1),
(14, 2, 1, 'MAcbook', 1500, 'Macbook J', '3.jpg', 'MacBook,laptop', 10, 0, 1),
(15, 4, 4, '         laptop MX s145', 1400, '        MX s145 Ram 8GB', 'm7.jpg', 'Laptop,MX', 10, 0, 3),
(16, 3, 5, 'Iphone', 200, 'abc', 'off2.png', 'iphone', 200, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `provider_id` int(11) NOT NULL,
  `providername` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gmail` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`provider_id`, `providername`, `phone`, `address`, `gmail`, `status`) VALUES
(1, 'Hồng Hoa', 987545310, 'quận 7 thHCM', 'AB@gmail.com', 0),
(2, 'CellPhone', 967548311, 'quận 6 thHCM', 'AC@gmail.com', 0),
(3, 'Ánh Kim', 339646365, 'quận Tân Phú thHCM', 'AD@gmail.com', 0),
(4, 'Hải Cường1', 98282262, 'HcmCity', 'AEoi@gmail.com', 0),
(5, 'Long Biên', 958584845, 'Cầu Giấy Hà Nội', 'AF@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_baiviet` int(11) NOT NULL,
  `tenbaiviet` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anhminhhoa` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tomtat` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created_date`) VALUES
(1, 'admin', 'admin!123', '2015-03-05 16:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `tenvideo` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anhvideo` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkvideo` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `hieu`
--
ALTER TABLE `hieu`
  ADD PRIMARY KEY (`hieu_id`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`loai_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`provider_id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9079;
--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hieu`
--
ALTER TABLE `hieu`
  MODIFY `hieu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `loai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_detail_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
