-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2025 at 08:33 PM
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
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_phone` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_image` varchar(100) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_phone`, `admin_email`, `admin_image`, `admin_username`, `admin_password`) VALUES
(1, 'ADMIN', '03498276', 'admin@gmail.com', 'person1.jpeg', 'admin', 'Mr.w1ck@2025_06'),
(2, 'Coder_Crystal', '0620559996', 'codercrystal06@gmail.com', 'person2.jpeg', 'Coder', 'Coder_Crystal@2025_Coder');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` int(11) NOT NULL,
  `from_currency` varchar(5) NOT NULL,
  `to_currency` varchar(5) NOT NULL,
  `convert_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `delivery_cost`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `extra_toppings`
--

CREATE TABLE `extra_toppings` (
  `extra_toppings_id` int(11) NOT NULL,
  `order_item_id` int(11) NOT NULL,
  `topping_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(11) NOT NULL,
  `manager_name` varchar(30) NOT NULL,
  `manager_phone` varchar(30) NOT NULL,
  `manager_email` varchar(30) NOT NULL,
  `manager_image` varchar(100) NOT NULL,
  `manager_username` varchar(30) NOT NULL,
  `manager_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `manager_name`, `manager_phone`, `manager_email`, `manager_image`, `manager_username`, `manager_password`) VALUES
(1, 'MANAGER', '71123456', 'manager@gmail.com', 'person4.jpeg', 'manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `menu_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_logo`) VALUES
(1, 'Pullover', 'hoodie.png'),
(2, 'Mugs', 'mugs.png'),
(3, 'Bags', 'bags.png'),
(5, 'Socks', 'socks.png'),
(6, 'Towel', 'towel.png'),
(8, 'Vest', 'vest.png'),
(9, 'Mat', 'carpet.png');

-- --------------------------------------------------------

--
-- Table structure for table `menuitem`
--

CREATE TABLE `menuitem` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_price` float NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_description` varchar(1000) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menuitem`
--

INSERT INTO `menuitem` (`item_id`, `item_name`, `item_price`, `item_image`, `item_description`, `menu_id`) VALUES
(50, 'Pullover', 15, 'images/Pullover/pullover.png', 'Stay Cozy with Our Stylish Pullover! This comfortable pullover is perfect for any occasion. Made from high-quality fabric, it’s soft, warm, and durable. Choose from a variety of colors and sizes to find your perfect fit', 1),
(54, 'Mugs', 15, 'images/Mugs/mugs.png', 'Enjoy Every Sip with Our Stylish Mugs! This elegant mug is perfect for your favorite hot beverages. Made from high-quality ceramic, it’s both microwave and dishwasher safe. Choose from a variety of beautiful designs to match your style.', 2),
(56, 'Mugs', 15, 'images/Mugs/mugs.png', 'Enjoy Every Sip with Our Stylish Mugs! This elegant mug is perfect for your favorite hot beverages. Made from high-quality ceramic, it’s both microwave and dishwasher safe. Choose from a variety of beautiful designs to match your style.', 2),
(58, 'Bags', 15, 'images/Bags/bags.png', 'Carry in Style with Our Versatile Bags! This stylish bag is perfect for any occasion. Made from high-quality materials, it’s durable and spacious. Choose from a variety of designs to match your style.', 3),
(62, 'Black Socks', 2, 'images/Socks/BLACK_SOCKS_GORILLA_ONLY.png', 'For better experience during workout and feel comfortable', 5),
(63, 'Sokwe Socks', 2, 'images/Socks/BLACK_SOCKS_LOGO_FULL.png', 'For better experience during workout and feel comfortable', 5),
(64, 'Socks Gorilla', 2, 'images/Socks/BLACK_SOCKS_GORILLA_ONLY.png', 'For better experience during workout and feel comfortable', 5),
(66, 'Work out Vest', 8, 'images/Vest/vest_black_and_hand_on_chest.png', 'For comfortable workout during gym activities', 8),
(68, 'Vest', 8, 'images/Vest/vest_black_and_hand_on_chest_2.png', 'For comfortable workout during gym activities', 8),
(69, 'Croptop', 8, 'images/Vest/vest_black_and_white_full_logo_on_chest_3.png', 'For comfortable workout during gym activities', 8),
(70, 'Vest', 8, 'images/Vest/vest_black_and_white_text_on_chest.png', 'For comfortable workout during gym activities', 8),
(71, 'Blue Towel', 14, 'images/Towel/BLUE_HUSTLE_FOR_THE_MUSCLE.png', 'For comfortable workout during gym activities', 6),
(72, 'White Towel', 11, 'images/Towel/WHITE_EAT_SLEEP_TRAIN.png', 'For comfortable workout during gym activities', 6),
(74, 'White Towel', 11, 'images/Towel/WHITE_THIN_PATIENCE_THICK_THIGHS.png', 'For comfortable workout during gym activities', 6),
(75, 'Yellow Towel', 11, 'images/Towel/YELLOW_HAND_TOWEL_GET_FIT_OR_DIE_TRYING.png', 'For comfortable workout during gym activities', 6),
(80, 'White Mat', 10, 'images/Mat/white_yoga_mat_sf_text_only.png', 'For comfortable workout during gym activities', 9),
(81, 'White Mat', 10, 'images/Mat/white_yoga_mat_gorilla_only.png', 'For comfortable workout during gym activities', 9),
(82, 'Black Pullovetr', 13, 'images/Pullover/b3.jpg', 'Have a gym pullover for comfort during work out and cold weather conditions', 1),
(83, 'Black Bags', 10, 'images/Bags/b2.jpg', 'Have your own gym bag, for keeping your gym staff safes', 3),
(84, 'Yoga Mat', 7, 'images/Mat/white_yoga_mat_sf_full_logo.png', 'For better gym activities you need to have this for better work out', 9);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `new_price` float NOT NULL,
  `pourcentage` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_phone` varchar(30) NOT NULL,
  `customer_address` varchar(1000) NOT NULL,
  `customer_city` varchar(30) NOT NULL,
  `customer_zip` varchar(30) NOT NULL,
  `customer_state` varchar(30) NOT NULL,
  `customer_country` varchar(30) NOT NULL,
  `order_total` float NOT NULL,
  `order_currency` varchar(5) NOT NULL,
  `order_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`order_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_city`, `customer_zip`, `customer_state`, `customer_country`, `order_total`, `order_currency`, `order_date`) VALUES
(20, 'Mudathir Abdallah', 'mudathirrajab69@gmail.com', '0621107728', 'Magomeni mapipa', 'Zanzibar', '2222', 'Tanzania', 'Zanzibar', 11, ' $ ', '27-1-2025');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `toppings_price` float NOT NULL,
  `item_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `item_name`, `item_quantity`, `toppings_price`, `item_total`) VALUES
(28, 20, 'Work out Vest', 1, 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` varchar(30) NOT NULL,
  `approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`, `approved`) VALUES
(76, 'Mudathir', 5, 'wakuu', '2025-01-26', 1),
(77, 'Farsy', 5, 'Happy to work with you', '2025-01-26', 1),
(78, 'Abdul', 5, 'Nice work', '2025-03-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `member_image` varchar(100) NOT NULL,
  `member_role` varchar(100) NOT NULL,
  `member_phone` varchar(30) NOT NULL,
  `member_email` varchar(30) NOT NULL,
  `member_salary` float NOT NULL,
  `member_username` varchar(30) NOT NULL,
  `member_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `todayoffer`
-- (See below for the actual view)
--
CREATE TABLE `todayoffer` (
`offer_id` int(11)
,`item_id` int(11)
,`new_price` float
,`pourcentage` int(11)
,`start_date` date
,`end_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `toppings`
--

CREATE TABLE `toppings` (
  `topping_id` int(11) NOT NULL,
  `topping_name` varchar(30) NOT NULL,
  `topping_image` varchar(30) NOT NULL,
  `topping_price` float NOT NULL,
  `topping_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `toppingscategory`
--

CREATE TABLE `toppingscategory` (
  `topping_category_id` int(11) NOT NULL,
  `topping_category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure for view `todayoffer`
--
DROP TABLE IF EXISTS `todayoffer`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `todayoffer`  AS SELECT `offer`.`offer_id` AS `offer_id`, `offer`.`item_id` AS `item_id`, `offer`.`new_price` AS `new_price`, `offer`.`pourcentage` AS `pourcentage`, `offer`.`start_date` AS `start_date`, `offer`.`end_date` AS `end_date` FROM `offer` WHERE (select curdate() between `offer`.`start_date` and `offer`.`end_date`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `extra_toppings`
--
ALTER TABLE `extra_toppings`
  ADD PRIMARY KEY (`extra_toppings_id`),
  ADD KEY `order_item_id` (`order_item_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `menuitem`
--
ALTER TABLE `menuitem`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `toppings`
--
ALTER TABLE `toppings`
  ADD PRIMARY KEY (`topping_id`),
  ADD KEY `topping_category_id` (`topping_category_id`);

--
-- Indexes for table `toppingscategory`
--
ALTER TABLE `toppingscategory`
  ADD PRIMARY KEY (`topping_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `extra_toppings`
--
ALTER TABLE `extra_toppings`
  MODIFY `extra_toppings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menuitem`
--
ALTER TABLE `menuitem`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `toppings`
--
ALTER TABLE `toppings`
  MODIFY `topping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `toppingscategory`
--
ALTER TABLE `toppingscategory`
  MODIFY `topping_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `extra_toppings`
--
ALTER TABLE `extra_toppings`
  ADD CONSTRAINT `extra_toppings_ibfk_1` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`order_item_id`);

--
-- Constraints for table `menuitem`
--
ALTER TABLE `menuitem`
  ADD CONSTRAINT `menuitem_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`);

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `menuitem` (`item_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orderinfo` (`order_id`);

--
-- Constraints for table `toppings`
--
ALTER TABLE `toppings`
  ADD CONSTRAINT `toppings_ibfk_1` FOREIGN KEY (`topping_category_id`) REFERENCES `toppingscategory` (`topping_category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
