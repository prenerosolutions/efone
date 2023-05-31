-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 09:25 PM
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
-- Database: `efone`
--

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_ctg_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_ctg_name` varchar(255) NOT NULL,
  `sub_ctg_img` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_ctg_id`, `category_id`, `sub_ctg_name`, `sub_ctg_img`, `date_added`) VALUES
(12, 1, 'Laptop / Tv  Cables', '1669933555cabletypes.jpeg', '2022-12-02'),
(14, 2, 'Bicycle Holder For Mobiles', '', '2022-11-01'),
(15, 2, 'Hand Held', '', '2022-11-01'),
(16, 2, 'Mobile Car Supports', '', '2022-11-01'),
(17, 2, 'Mobile Table Supports', '16701007168 (1).jpg', '2022-12-04'),
(20, 4, 'Home Adaptors With Out Cable', '', '2022-11-01'),
(21, 4, 'IPhone Car Chargers', '', '2022-11-01'),
(24, 11, 'iWatch Charger', '1667746494watch charger.jpeg', '2022-11-06'),
(26, 2, 'Dashboard Car Holder', '1667747954images.jpeg', '2022-11-06'),
(28, 3, 'Universal OTG', '1667748325otg-2.png', '2022-11-06'),
(29, 1, '3in 1 Cables', '16677485853in one cable.jpeg', '2022-11-06'),
(30, 1, 'Audio Cables', '16677489166 (2).jpg', '2022-11-06'),
(31, 2, 'Window Car Holder', '1667749439C87 CMYK.jpg', '2022-11-06'),
(33, 2, 'Air Vent Mount', '1667749809air vent.jpeg', '2022-11-06'),
(36, 13, 'Multi Card Reader', '1667751328card reader 2.jpeg', '2022-11-06'),
(37, 1, 'HDMI / Visual', '16677536142 (2).jpg', '2022-11-06'),
(40, 8, 'Universal Travel Adapter', '1667767279yesido travel.jpeg', '2023-06-01'),
(41, 9, 'TWS', '1667768656TWS05.jpg', '2023-06-01'),
(43, 9, 'Lightning & Type C', '1667770730yh-35.jpg', '2023-06-01'),
(44, 2, 'Magnet Car Holder', '1667771141Universal Yesido Mini Magnetic Car Holder.jpg', '2022-11-07'),
(45, 1, 'Connectors & Adapters', '1667771963YAU21_11.jpg', '2022-11-07'),
(46, 4, 'Wall Adapters', '1667774449WhatsApp Image 2022-10-08 at 18.58.17 (2).jpeg', '2022-11-07'),
(47, 1, 'iPhone Cables', '1670070310iphone cable.jpeg', '2022-12-03'),
(48, 1, 'Micro USB Cables', '1667777759micro.jpg', '2022-11-07'),
(49, 1, 'Type-C Cables', '1667778069type c.png', '2022-11-07'),
(50, 10, 'FM Transmitter', '16699283881 (6).jpg', '2023-06-01'),
(51, 9, 'Wired Earphones', '16699293271 (8).jpg', '2023-06-01'),
(52, 9, 'Bluetooth Headphones', '16699303751 (11).jpg', '2023-06-01'),
(53, 4, 'Car Adaptors', '16699315052 (7).jpg', '2022-12-02'),
(54, 11, 'Motorcycle Holder', '1669932216hoco-z45-single-port-motorcycle-charger-bike.jpeg', '2023-06-01'),
(55, 4, 'Other Charger', '1669932335other charger.jpeg', '2022-12-02'),
(56, 14, '5000', '16699378217.jpg', '2023-06-01'),
(57, 14, '10000', '16699381037 (1).jpg', '2023-06-01'),
(58, 14, '20000', '', '2023-06-01'),
(59, 14, 'Mobile Games', '1670015877mobile game.jpeg', '2023-06-01'),
(60, 14, 'Wired Mouse', '1670017194mouse.jpeg', '2023-06-01'),
(61, 14, 'Gaming Pad', '1670017307gaming pad.jpeg', '2023-06-01'),
(62, 14, 'Wireless Mouse', '16700217438.jpg', '2023-06-01'),
(63, 14, 'Keyboard', '16700220682 (6).jpg', '2023-05-30'),
(64, 2, 'Wireless Car Holder', '16700224268 (2).jpg', '2022-12-03'),
(65, 14, 'Laptop Stand', '16701013728 (4).jpg', '2023-05-30'),
(66, 12, 'Wireless Power Bank', '16701108418 (5).jpg', '2023-05-30'),
(67, 14, '30000', '16701113258 (6).jpg', '2023-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_ctg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
