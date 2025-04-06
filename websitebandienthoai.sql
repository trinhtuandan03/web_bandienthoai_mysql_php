-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2025 at 12:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.28
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitebandienthoai`
--
-- --------------------------------------------------------
--
-- Table structure for table `account`
--
CREATE TABLE
  `account` (
    `id` int NOT NULL,
    `username` varchar(255) NOT NULL,
    `fullname` varchar(100) NOT NULL,
    `password` varchar(255) NOT NULL,
    `role` varchar(50) DEFAULT 'user',
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--
INSERT INTO
  `account` (
    `id`,
    `username`,
    `fullname`,
    `password`,
    `role`,
    `created_at`
  )
VALUES
  (
    1,
    'tuandan',
    'Trịnh Viết Mỹ',
    '$2y$12$oyXrKYIsFjsjkNPxUE1CxO.W6Nlzv0G0QMW2vqICy35dQZWOP8ChG',
    'user',
    '2025-04-05 03:28:05'
  ),
  (
    2,
    'tuandan1',
    'Trịnh Tuấn Đan',
    '$2y$12$sJMYCNa2qDDhEwi8jDVZPet9RejRIoWc.yJg3x7acjSVrPKb0jVGe',
    'user',
    '2025-04-05 21:22:05'
  );

-- --------------------------------------------------------
--
-- Table structure for table `blog`
--
CREATE TABLE
  `blog` (
    `id` int NOT NULL,
    `title` varchar(255) NOT NULL,
    `content` text NOT NULL,
    `thumbnail` varchar(255) DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `account_id` int NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

-- --------------------------------------------------------
--
-- Table structure for table `category`
--
CREATE TABLE
  `category` (
    `id` int NOT NULL,
    `name` varchar(100) NOT NULL,
    `description` text
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--
INSERT INTO
  `category` (`id`, `name`, `description`)
VALUES
  (1, 'Điện thoại', 'Danh mục các loại điện thoại'),
  (2, 'SamSung', 'Danh mục các loại điện thoại');

-- --------------------------------------------------------
--
-- Table structure for table `orders`
--
CREATE TABLE
  `cart` (
    `id` int NOT NULL AUTO_INCREMENT,
    `user_id` int NOT NULL, -- ID người dùng (liên kết với bảng `account`)
    `product_id` int NOT NULL, -- ID sản phẩm
    `quantity` int NOT NULL DEFAULT 1, -- Số lượng sản phẩm
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP, -- Thời gian thêm vào giỏ hàng
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE
  `orders` (
    `id` int NOT NULL AUTO_INCREMENT,
    `user_id` int NOT NULL, -- ID người dùng (liên kết với bảng `account`)
    `name` varchar(255) NOT NULL, -- Tên người nhận
    `phone` varchar(20) NOT NULL, -- Số điện thoại người nhận
    `address` text NOT NULL, -- Địa chỉ người nhận
    `total_price` decimal(10, 2) NOT NULL, -- Tổng giá trị đơn hàng
    `status` varchar(50) DEFAULT 'pending', -- Trạng thái đơn hàng (pending, completed, canceled, etc.)
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP, -- Thời gian tạo đơn hàng
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

-- --------------------------------------------------------
--
-- Table structure for table `order_details`
--
CREATE TABLE
  `order_details` (
    `id` int NOT NULL AUTO_INCREMENT,
    `order_id` int NOT NULL, -- ID đơn hàng (liên kết với bảng `orders`)
    `product_id` int NOT NULL, -- ID sản phẩm
    `quantity` int NOT NULL, -- Số lượng sản phẩm
    `price` decimal(10, 2) NOT NULL, -- Giá sản phẩm tại thời điểm đặt hàng
    PRIMARY KEY (`id`),
    FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

-- --------------------------------------------------------
--
-- Table structure for table `product`
--
CREATE TABLE
  `product` (
    `id` int NOT NULL,
    `name` varchar(100) NOT NULL,
    `description` text,
    `price` decimal(10, 2) NOT NULL,
    `image1` varchar(255) DEFAULT NULL,
    `image2` varchar(255) DEFAULT NULL,
    `image3` varchar(255) DEFAULT NULL,
    `category_id` int DEFAULT NULL,
    `account_id` int DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--
INSERT INTO
  `product` (
    `id`,
    `name`,
    `description`,
    `price`,
    `image1`,
    `image2`,
    `image3`,
    `category_id`,
    `account_id`
  )
VALUES
  (
    4,
    'Tên sản phẩm 4 dan',
    'Mô tả sản phẩm ',
    '100000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  ),
  (
    5,
    'Tên sản phẩm 4',
    'Mô tả sản phẩm ',
    '100000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  ),
  (
    6,
    'Tên sản phẩm 4',
    'Mô tả sản phẩm ',
    '100000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  ),
  (
    7,
    'Tên sản phẩm 4',
    'Mô tả sản phẩm ',
    '100000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  ),
  (
    8,
    'Tên sản phẩm dan',
    'Mô tả sản phẩm ',
    '10000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  ),
  (
    9,
    'Tên sản phẩm dan',
    'Mô tả sản phẩm ',
    '10000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  ),
  (
    10,
    'Tên sản phẩm dan',
    'Mô tả sản phẩm ',
    '10000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  ),
  (
    11,
    'Tên sản phẩm dan',
    'Mô tả sản phẩm ',
    '10000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  ),
  (
    12,
    'Tên sản phẩm dan',
    'Mô tả sản phẩm ',
    '10000.00',
    'image1.jpg',
    'image2.jpg',
    'image3.jpg',
    1,
    NULL
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `account`
--
ALTER TABLE `account` ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog` ADD PRIMARY KEY (`id`),
ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details` ADD PRIMARY KEY (`id`),
ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product` ADD PRIMARY KEY (`id`),
ADD KEY `category_id` (`category_id`),
ADD KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account` MODIFY `id` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog` MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category` MODIFY `id` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders` MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details` MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product` MODIFY `id` int NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 13;

--
-- Constraints for dumped tables
--
--
-- Constraints for table `blog`
--
ALTER TABLE `blog` ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details` ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product` ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;