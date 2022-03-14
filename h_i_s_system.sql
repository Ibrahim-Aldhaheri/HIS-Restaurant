-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 07:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h.i.s_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(12, 'saad', 'hsdjfh@sjdgf.com', '0516511163', 'anywhere', 'cod', 'Grilled salmon(1), Calamari(1), Brazilian Fish stew(1), Shrimp pasta(1)', '428'),
(13, 'saad alshrideh', 'ssd@ssd.cojdv', '0578888888', 'ahsa', 'cod', 'Shrimp pasta(1), Calamari(1), Spicy shrimp(1), Grilled salmon(1)', '468');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES
(1, 'Grilled salmon', '108', 1, 'image/Grilled_salmon.jpg', 'p1001'),
(2, 'Spicy shrimp', '150', 1, 'image/Spicy_shrimp.jpg', 'p1002'),
(3, 'Calamari', '90', 1, 'image/Calamari.jpg', 'p1003'),
(4, 'Shrimp pasta', '120', 1, 'image/Shrimp_pasta.jpg', 'p1004'),
(5, 'Oven-baked Oysters', '183', 1, 'image/Oven_oysters.jpg', 'p1005'),
(6, 'Butter seared Lobster', '250', 1, 'image/Butter_lobster.jpg', 'p1006'),
(7, 'Garlic butter clams', '168', 1, 'image/Garlic_clams.jpg', 'p1007'),
(8, 'Brazilian Fish stew', '110', 1, 'image/Brazilian_stew.jpg', 'p1008');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_type` varchar(1) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone_number`, `address`, `user_type`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin@kfupm.edu.sa', '0541414141', 'aefseseaawdawdasdefsf', 'A', '2020-12-10 21:37:27'),
(3, 'saad', 'PP112233', 's65046540650@65046540.com', '0599633212', '56048', 'U', '2020-12-11 20:51:04'),
(5, 'master', 'aassdd', 'hgdf@lkjdsbf.kols', '0588855510', 'whatever', 'U', '2020-12-11 20:55:41'),
(6, 'ibra', 'lksjdbjkdbfs', 'dknf@sdflkn.dslfh', '87566587765', 'sdjkfhsdfjb', 'U', '2020-12-11 20:58:32'),
(7, 'hhkkjj', 'jjojbdfsjb', 'ss@jjww.ww', '55656456498', 'oksbd;lfjkb', 'U', '2020-12-11 21:00:45'),
(8, 'sdlkna', 'sudhfg', 'wlsdhf@hdvgfh.sdjfg', '65465431', 'sdfbsdfsf', 'U', '2020-12-11 21:01:30'),
(9, 'adminsd', 'adminsesef', 'sdfsdfsd@hhhhh.hhhh', '6865456', 'sefsef', 'U', '2020-12-11 21:07:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
