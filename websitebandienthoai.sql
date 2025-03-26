CREATE DATABASE IF NOT EXISTS `websitebandienthoai` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `websitebandienthoai`;

-- --------------------------------------------------------
-- Tạo bảng category
CREATE TABLE
  IF NOT EXISTS `category` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `description` TEXT
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- Tạo bảng product
CREATE TABLE
  IF NOT EXISTS `product` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `description` TEXT,
    `price` DECIMAL(10, 2) NOT NULL,
    `image` VARCHAR(255) DEFAULT NULL,
    `category_id` INT,
    FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

CREATE TABLE
  users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  );

CREATE TABLE
  orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  );

CREATE TABLE
  order_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders (id)
  );

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;

/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

productcategory