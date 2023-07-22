-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 05:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_palace`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE `food_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`category_id`, `category_name`) VALUES
(1, 'Pizza'),
(2, 'Sandwich'),
(3, 'Shakes'),
(4, 'Icecream'),
(5, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `food_name` varchar(500) NOT NULL,
  `food_pic` varchar(500) NOT NULL,
  `menu_price` bigint(20) NOT NULL,
  `cat_foreign_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `food_name`, `food_pic`, `menu_price`, `cat_foreign_id`) VALUES
(1, 'Fajita Pizza', 'pizza-receipe-1.png', 20, 1),
(2, 'peproni pizza', 'pizza-receipe-3.png', 21, 1),
(3, 'afghani tikka ', 'pizza-receipe-6.png', 14, 1),
(4, 'Club Sandwich', 'sandwitch-receipe-6.png', 12, 2),
(5, 'ice cream shake', 'shake-receipe-8.png', 7, 3),
(6, 'lava cake', 'dessert-receipe-2.png', 4, 5),
(7, 'chocolate ice cream', 'icecream-receipe-5.png', 3, 4),
(8, 'chicken snadwich', 'sandwitch-receipe-4.png', 13, 2),
(9, 'mango shake', 'shake-slider-3.png', 5, 3),
(10, 'blue berry', 'icecream-receipe-1.png', 4, 4),
(11, 'browie', 'dessert-receipe-5.png', 4, 5),
(12, 'malai boti', 'pizza-receipe-1.png', 14, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `cat_foreign_id` (`cat_foreign_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `tbl_menu_ibfk_1` FOREIGN KEY (`cat_foreign_id`) REFERENCES `food_categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
