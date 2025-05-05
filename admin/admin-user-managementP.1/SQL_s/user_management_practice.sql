-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2025 at 03:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_management_practice`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `add_to_cart`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_to_cart` (IN `user_id` INT, IN `product_id` INT, IN `quantity` INT)   BEGIN
    -- Check if the product is in stock
    DECLARE stock INT;
    SELECT stock INTO stock FROM products WHERE id = product_id;
    
    IF stock >= quantity THEN
        -- Add to cart if stock is sufficient
        INSERT INTO cart (user_id, product_id, quantity) VALUES (user_id, product_id, quantity);
        -- Update product stock
        UPDATE products SET stock = stock - quantity WHERE id = product_id;
    ELSE
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Insufficient stock';
    END IF;
END$$

DROP PROCEDURE IF EXISTS `add_user`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_user` (IN `uname` VARCHAR(50), IN `uemail` VARCHAR(100))   BEGIN
  INSERT INTO users(name, email) VALUES(uname, uemail);
END$$

DROP PROCEDURE IF EXISTS `delete_user`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user` (IN `uid` INT)   BEGIN
  DELETE FROM users WHERE id = uid;
END$$

DROP PROCEDURE IF EXISTS `get_users`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_users` ()   BEGIN
  SELECT * FROM users;
END$$

DROP PROCEDURE IF EXISTS `remove_from_cart`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `remove_from_cart` (IN `user_id` INT, IN `cart_item_id` INT)   BEGIN
    DECLARE product_id INT;
    DECLARE quantity INT;
    
    -- Get product_id and quantity from cart
    SELECT product_id, quantity INTO product_id, quantity FROM cart WHERE id = cart_item_id AND user_id = user_id;
    
    -- Remove from cart
    DELETE FROM cart WHERE id = cart_item_id AND user_id = user_id;
    
    -- Update the stock in the products table
    UPDATE products SET stock = stock + quantity WHERE id = product_id;
END$$

DROP PROCEDURE IF EXISTS `update_user`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_user` (IN `uid` INT, IN `uname` VARCHAR(50), IN `uemail` VARCHAR(100))   BEGIN
  UPDATE users SET name = uname, email = uemail WHERE id = uid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `cart`
--

TRUNCATE TABLE `cart`;
-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `categories`
--

TRUNCATE TABLE `categories`;
--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(5, 'GPU'),
(4, 'SSD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `products`
--

TRUNCATE TABLE `products`;
--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `category_id`) VALUES
(1, 'Samsung', 'NVME 1TB ', 6999.00, 10, 4),
(2, 'RTX', '6069 69gb 2070hz', 6969699.00, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`) VALUES
(1, 'Kenneth', 'lico.kenneth@dnsc.edu.ph', '2025-04-30 11:53:59'),
(2, 'Joseph Claire Lopez Paquinol', 'devicore4574@gmail.com', '2025-04-30 11:58:54');

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `log_delete`;
DELIMITER $$
CREATE TRIGGER `log_delete` AFTER DELETE ON `users` FOR EACH ROW BEGIN
  INSERT INTO user_logs(action_type, user_id) VALUES('DELETE', OLD.id);
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `log_insert`;
DELIMITER $$
CREATE TRIGGER `log_insert` AFTER INSERT ON `users` FOR EACH ROW BEGIN
  INSERT INTO user_logs(action_type, user_id) VALUES('INSERT', NEW.id);
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `log_update`;
DELIMITER $$
CREATE TRIGGER `log_update` AFTER UPDATE ON `users` FOR EACH ROW BEGIN
  INSERT INTO user_logs(action_type, user_id) VALUES('UPDATE', NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

DROP TABLE IF EXISTS `user_logs`;
CREATE TABLE `user_logs` (
  `id` int(11) NOT NULL,
  `action_type` enum('INSERT','UPDATE','DELETE') DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `user_logs`
--

TRUNCATE TABLE `user_logs`;
--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `action_type`, `user_id`, `action_time`) VALUES
(1, 'INSERT', 1, '2025-04-30 11:53:59'),
(2, 'INSERT', 2, '2025-04-30 11:58:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
