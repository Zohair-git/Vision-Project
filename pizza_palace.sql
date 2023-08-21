-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 11:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `p_name` varchar(200) NOT NULL,
  `p_price` int(200) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`p_name`, `p_price`, `order_id`) VALUES
('Fajita Pizza', 20, 2),
('peproni pizza', 21, 2),
('afghani tikka ', 14, 2),
('Club Sandwich', 12, 2),
('Fajita Pizza', 20, 3),
('peproni pizza', 21, 3),
('afghani tikka ', 14, 3),
('Club Sandwich', 12, 3),
('Fajita Pizza', 20, 4),
('peproni pizza', 21, 4),
('afghani tikka ', 14, 4),
('Club Sandwich', 12, 4),
('Fajita Pizza', 20, 5),
('peproni pizza', 21, 5),
('afghani tikka ', 14, 5),
('Club Sandwich', 12, 5),
('Fajita Pizza', 20, 6),
('peproni pizza', 21, 6),
('afghani tikka ', 14, 6),
('Club Sandwich', 12, 6),
('Fajita Pizza', 20, 7),
('peproni pizza', 21, 7),
('afghani tikka ', 14, 7),
('Club Sandwich', 12, 7),
('Fajita Pizza', 20, 2),
('peproni pizza', 21, 2),
('afghani tikka ', 14, 2),
('Club Sandwich', 12, 2),
('Fajita Pizza', 20, 3),
('peproni pizza', 21, 3),
('afghani tikka ', 14, 3),
('Club Sandwich', 12, 3),
('Fajita Pizza', 20, 4),
('peproni pizza', 21, 4),
('afghani tikka ', 14, 4),
('Club Sandwich', 12, 4),
('Fajita Pizza', 20, 5),
('peproni pizza', 21, 5),
('afghani tikka ', 14, 5),
('Club Sandwich', 12, 5),
('Fajita Pizza', 20, 6),
('peproni pizza', 21, 6),
('afghani tikka ', 14, 6),
('Club Sandwich', 12, 6),
('Fajita Pizza', 20, 7),
('peproni pizza', 21, 7),
('afghani tikka ', 14, 7),
('Club Sandwich', 12, 7),
('Fajita Pizza', 20, 8),
('malai boti', 14, 9),
('peproni pizza', 21, 9),
('Fajita Pizza', 20, 10),
('Fajita Pizza', 20, 11),
('Fajita Pizza', 20, 12);

-- --------------------------------------------------------

--
-- Table structure for table `checkout_components`
--

CREATE TABLE `checkout_components` (
  `c_name` varchar(200) NOT NULL,
  `c_price` int(200) NOT NULL,
  `order_id_comp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_components`
--

INSERT INTO `checkout_components` (`c_name`, `c_price`, `order_id_comp`) VALUES
('olives', 200, 2),
('Original crust', 0, 2),
('Large', 1299, 2),
('Mild & Spicy', 200, 2),
('Chicken', 200, 2),
('cheesy sauce', 220, 2);

-- --------------------------------------------------------

--
-- Table structure for table `components_category`
--

CREATE TABLE `components_category` (
  `cc_id` int(11) NOT NULL,
  `cc_cat` int(11) NOT NULL,
  `cc_name` varchar(100) NOT NULL,
  `cc_pic` varchar(100) NOT NULL,
  `cc_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `components_category`
--

INSERT INTO `components_category` (`cc_id`, `cc_cat`, `cc_name`, `cc_pic`, `cc_price`) VALUES
(1, 5, 'corn', 'corn.png', 300),
(2, 5, 'olives', 'olives.webp', 200),
(3, 3, 'Chicken', 'chicken (2).png', 200),
(4, 6, 'Small', 'pizza-hut-crust.png', 499),
(5, 6, 'Medium', 'pizza-hut-crust.png', 899),
(6, 6, 'Large', 'pizza-hut-crust.png', 1299),
(8, 3, 'peproni', 'epperoni-transparent-single-pepperoni-11562915199mfbla9n7e4-removebg-preview.png', 260),
(9, 4, 'Ketchup', 'ketchup.png', 120),
(10, 4, 'Mayo Sauce', 'mayo.png', 130),
(11, 4, 'cheesy sauce', 'cheese sauce.png', 220),
(12, 1, 'Stuffed crust', 'stuffed.png', 100),
(13, 1, 'Thin crust', 'thin.png', 50),
(14, 1, 'Original crust', 'origna.png', 0),
(15, 2, 'Mild & Spicy', 'mildandspice.png', 200),
(16, 2, 'Tomato sauce', 'tomato.png', 180),
(17, 2, 'Mayo Sauce', 'cheesesauce.png', 0);

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
-- Table structure for table `pizza_components`
--

CREATE TABLE `pizza_components` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza_components`
--

INSERT INTO `pizza_components` (`c_id`, `c_name`) VALUES
(1, 'crust'),
(2, 'dough sauce'),
(3, 'topping'),
(4, 'top sauce'),
(5, 'Extra'),
(6, 'Dough');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_time` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `town` varchar(200) NOT NULL,
  `street` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_time`, `f_name`, `l_name`, `country`, `town`, `street`, `phone`, `email`, `order_note`) VALUES
(2, '2023-08-18-20-10', 'sasas', 'asasasas', '2', '3', 'street no 1234 ', 123456, 'sarimsaleem515@gmail.com', 'qwbcbycbwcwcvwcvwucbiwbcuwbcwu'),
(3, '2023-08-18-21-12', 'sasas', 'Huzaifa ', '3', '3', 'street no 1234 ', 123456, 'masumbinshaukat@gmail.com', 'ercdfvgbhnjrtfvgbjhnmkltyjkdcrtfvygbuhnjmkctygbuhnjmkrtfvgybjm'),
(4, '2023-08-18-21-44', 'sasas', 'Mesum', '4', '2', 'street no 1234 ', 123456, 'masumbinshaukat@gmail.com', 'wzaesxcrdtfvgybuhnjimko,waxescrdtfvygbuhnijmko,'),
(5, '2023-08-18-21-58', 'sasas', 'sarim khan', '3', '2', 'street no 1234 ', 123456, 'sarimsaleem515@gmail.com', 'gavcqvcwbcbwbcw8cbw8cbw8cbwbcbwcbwycbw8yvrcbw8rybcwbv8ybwcn9wvb8yebvw9v3b'),
(6, '2023-08-18-21-42', 'sasas', 'Huzaifa ', '4', '1', 'street no 1234 ', 123456, 'sarimsaleem515@gmail.com', 'bbhhdhhbbvwbqvvbruvqbyvbq8evbqbvebvry8eqvbervbqevqbev9eru0qnv'),
(7, '2023-08-18-21-48', 'sasas', 'sarim khan', '2', '1', 'street no 1234 ', 123456, 'sarimsaleem515@gmail.com', 'zwxertyhnujmik'),
(8, '2023-08-21-10-56', 'sarim', 'khan', '2', '3', 'heloo 123', 2147483647, 'sarimsaleem515@gmail.com', 'fuck you'),
(9, '2023-08-21-10-08', 'sarim', 'khan', '3', '3', 'rff', 454356345, 'sarimsaleem515@gmail.com', 'fff'),
(10, '2023-08-21-11-11', 'sarim', 'khan', '3', '2', 'xvxv 123', 123456, 'sarimsaleem515@gmail.com', 'cvcvwvcuscshcbscbshcuscbscubsubcuscsucsucs'),
(11, '2023-08-21-11-08', 'sarim', 'khna', '2', '2', '23fffg', 234567, 'sarimsaleem515@gmail.com', 'sdfvhhjdjhjhjfdjjfjgjghjhjjhjjhjjhjjhjjhjjhjjh'),
(12, '2023-08-21-11-07', 'sarim', 'khan', '2', '3', 'fyuyi5155', 123455, 'sarimsaleem515@gmail.com', 'vagyygdaygdgydgyhyuduyhauyauyauyauyaygygyuyauyua');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_components`
--

CREATE TABLE `tbl_order_components` (
  `order_id_comp` int(11) NOT NULL,
  `order_time` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `town` varchar(200) NOT NULL,
  `street` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order_components`
--

INSERT INTO `tbl_order_components` (`order_id_comp`, `order_time`, `f_name`, `l_name`, `country`, `town`, `street`, `phone`, `email`, `order_note`) VALUES
(1, '2023-08-21-10-24', 'sarim', 'khan', '2', '2', '123 no street', 567234567, 'sarimsaleem515@gmail.com', 'zawwwwwwwwwwwwwwwwwwwwwwwwwwwwexsdrctfvgybunhjim'),
(2, '2023-08-21-10-18', 'sarim', 'khan', '2', '2', '123 no street', 567234567, 'sarimsaleem515@gmail.com', 'zawwwwwwwwwwwwwwwwwwwwwwwwwwwwexsdrctfvgybunhjim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `checkout_components`
--
ALTER TABLE `checkout_components`
  ADD KEY `order_id_comp` (`order_id_comp`);

--
-- Indexes for table `components_category`
--
ALTER TABLE `components_category`
  ADD PRIMARY KEY (`cc_id`),
  ADD KEY `cc_cat` (`cc_cat`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `pizza_components`
--
ALTER TABLE `pizza_components`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `cat_foreign_id` (`cat_foreign_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_components`
--
ALTER TABLE `tbl_order_components`
  ADD PRIMARY KEY (`order_id_comp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `components_category`
--
ALTER TABLE `components_category`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pizza_components`
--
ALTER TABLE `pizza_components`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_order_components`
--
ALTER TABLE `tbl_order_components`
  MODIFY `order_id_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_order` (`order_id`);

--
-- Constraints for table `checkout_components`
--
ALTER TABLE `checkout_components`
  ADD CONSTRAINT `checkout_components_ibfk_1` FOREIGN KEY (`order_id_comp`) REFERENCES `tbl_order_components` (`order_id_comp`);

--
-- Constraints for table `components_category`
--
ALTER TABLE `components_category`
  ADD CONSTRAINT `components_category_ibfk_1` FOREIGN KEY (`cc_cat`) REFERENCES `pizza_components` (`c_id`);

--
-- Constraints for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `tbl_menu_ibfk_1` FOREIGN KEY (`cat_foreign_id`) REFERENCES `food_categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
