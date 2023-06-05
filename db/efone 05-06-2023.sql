-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 09:28 AM
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
-- Database: `efone`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(55) NOT NULL,
  `brand_desc` varchar(255) NOT NULL,
  `brand_img` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_desc`, `brand_img`, `date_added`) VALUES
(1, 'Iphone', 'Iphone', 'apple.png', '2022-10-03'),
(2, 'Sumsung', 'SUMSUNG', 'Samsung.png', '2022-10-03'),
(4, 'Yesido', 'Yesido', 'yeshido.png', '2022-10-06'),
(7, 'Efone', 'Efone', 'efone.png', '2022-11-07'),
(8, 'Hoco', 'Hoco', 'hoco.png', '2022-11-08'),
(9, 'Borofone', '', 'borofone.png', '2022-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(55) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`, `category_image`, `date_added`) VALUES
(1, 'Cables', 'Data Cables', 'cables.jpg', '2022-10-03'),
(2, 'Car Holder', 'Car Holder', 'Car Holder.jpg', '2022-11-02'),
(3, 'OTG', 'OTG', 'otg.jpg', '2022-10-03'),
(4, 'Chargers ', 'Chargers ', 'Charger.jpg', '2022-10-03'),
(5, 'Phone Covers', 'Phone Covers', 'backcovers.jpeg', '2022-10-03'),
(6, 'Apple Watch', 'Apple Watch Charger, Case, Cable And Accessories', 'apple-watch.jpg', '2022-10-17'),
(7, 'Card Reader ', 'Card Reader ', '1667750593card-reader.jpeg', '2022-11-06'),
(8, 'Travel Adapters', 'Travel Adapters', '1667767128travel adapters.jpg', '2022-11-07'),
(9, 'Headphones & Earphones', 'Headphones & Earphones', '1667768381headphone.jpeg', '2022-11-07'),
(10, 'Mp3 Car', '', '1669928114Picture1.png', '2022-12-02'),
(11, 'Holder', '', '16699320956.jpg', '2022-12-02'),
(12, 'Power Banks', '', '16699374702 (8).jpg', '2022-12-02'),
(13, 'Gaming', 'Gaming Accesorries', '1670015760gaming.jpeg', '2023-05-30'),
(14, 'Peripharel Accessories', 'Peripharel Accessories', '1670016971LAPTOP MOUSE.jpeg', '2022-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `category_banner`
--

CREATE TABLE `category_banner` (
  `banner_id` int(55) NOT NULL,
  `category_id` int(55) NOT NULL,
  `banner1` varchar(255) NOT NULL,
  `banner2` varchar(255) NOT NULL,
  `banner3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_banner`
--

INSERT INTO `category_banner` (`banner_id`, `category_id`, `banner1`, `banner2`, `banner3`) VALUES
(1, 5, 'brand new.png', 'brand new.png', 'brand new.png');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `company` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `customer_pic` varchar(255) NOT NULL,
  `user_role` varchar(55) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `company`, `street_address`, `town`, `postal_code`, `country`, `customer_pic`, `user_role`, `date_added`) VALUES
(1, 'Atiq', 'Ramzan', 'atiqurramzan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '03157524000', 'Prenero Solutions', 'Shop # 24', 'Faisalabad', '38000', 'Pakistan', 'atiq.jpg', 'Customer', '2022-10-01 10:25:05'),
(2, 'Saqib', 'Jutt', 'prenero@outlook.com', '', '03157524000', 'Prenero', 'Islam Nager', 'Faisalabad', '38000', 'Pakistan', '', 'Customer', '2022-10-04 01:15:47'),
(8, 'Saqib', 'jutt', 'saqib7t2@gmail.com', '', '03027750114', 'Prenero', 'Chak 114 JBChak 114', 'Faislabad', '38000', 'Pakistan', '', 'Customer', '2022-10-21 01:14:25'),
(15, 'Atiq ', 'Ramzan', 'admin@prenero.com', '25d55ad283aa400af464c76d713c07ad', '03346452312', 'Prenero', 'Shop # 24', '', '', '', 'atiq.jpg', 'Shop Keeper', '2022-10-26 06:10:30'),
(16, 'waqas', 'razzaq', 'waqasrazzaq092@gmail.com', '6df457bdbeab7307c5ef21652daf1b65', '07453853789', 'i Tech mobile', '', '', '', '', '', 'Shop Keeper', '2022-12-01 11:04:57'),
(18, 'Atiq', 'Ramzan', 'hello@prenero.com', 'b743c33627755c255938a992d3480cab', '+923346452312', 'A>S', 'Shop # 24', 'Faisalabad', '38000', 'Pakistan', 'atiq.jpg', 'Shop Keeper', '2023-01-12 06:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `down_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `download_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`down_id`, `cus_id`, `product_id`, `download_date`) VALUES
(1, 15, 5, '2022-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_note` text NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `order_note`, `order_date`) VALUES
(7, 1, 15, 360, 'Completed', 'Testing note', '0000-00-00 00:00:00'),
(8, 1, 15, 360, 'pending', '', '2022-10-21 00:00:00'),
(9, 1, 15, 160, 'completed', '', '2022-10-21 00:00:00'),
(14, 8, 16, 360, 'cancelled', '', '2022-10-21 00:00:00'),
(16, 1, 15, 360, 'pending', '', '2022-10-21 00:00:00'),
(17, 1, 15, 360, 'cancelled', '', '2022-10-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`, `price`, `total`) VALUES
(1, 7, 2, 3, '19.99', '59.97'),
(2, 7, 3, 2, '24.99', '49.98');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `sku_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(25) NOT NULL,
  `sub_category` varchar(55) NOT NULL,
  `product_brand` varchar(25) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_img1` varchar(255) NOT NULL,
  `product_img2` varchar(255) NOT NULL,
  `product_img3` varchar(255) NOT NULL,
  `product_img4` varchar(255) NOT NULL,
  `product_img5` varchar(255) NOT NULL,
  `shopkeeper_price` varchar(10) NOT NULL,
  `product_condition` varchar(255) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `long_desc` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `sku_code`, `product_name`, `product_category`, `sub_category`, `product_brand`, `short_desc`, `product_qty`, `product_image`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `shopkeeper_price`, `product_condition`, `product_price`, `long_desc`, `date_added`) VALUES
(2, '1234567Q', 'Yesido CA-112- Type C Apple Watch Charger Wireless Charging Dock', '11', '24', '4', 'The Apple Watch Magnetic Fast Charging Cable makes it easy to charge your Apple Watch using inductive charging.', 10, '1665133553Apple  Magnetic  Type C Iwatch Charger.jpg', '', '', '', '', '', '4.99', 'New', '19.99', 'This is long description', '2022-12-13'),
(3, '1234567Q', 'Yesido CA-70 -2in One Apple Watch and iPhone and iPad  charger With Usb', '11', '24', '4', '2in One Apple Watch and iPhone and iPad  charger With Usb. fast charging your Watch,ipad and iphone.', 10, '1665133584Apple Watch and iPhone and iPad  charger With Usb.jpg', '', '', '', '', '', '5.99', 'New', '24.99', '', '2022-12-13'),
(4, '1234567Q', 'Yesido Ca-69 -Apple watch  Wireless Charger Series 12345 All Os Supported', '11', '24', '4', '', 10, '1665133615Apple watch Charger Series 12345 All Os Supported.jpg', '', '', '', '', '', '4.99', 'New', '19.99', '', '2022-12-13'),
(5, '1234567Q', 'Yesido C139  -Universal Dashboard Car Holder', '2', '26', '4', 'Universal Yesido C139 Dashboard Car Holder Telescopic Clamp Arm Auto Extending Clip By Button.Dashboard/Windshield Use ABS+Aluminum Ally.', 10, '1665133711Universal Yesido dashboard Car Holder.png', '', '', '', '', '', '3.99', 'New', '14.99', '', '2022-12-13'),
(7, '1234567Q', 'Yesido GS-02  Type C-Micro To USb A OTG Adapter Black  ', '3', '28', '4', '', 30, '1665133912Yesido 2in One OTG Adpter With Micro Usb And Type C Fast Data Transfer.jpg', '', '', '', '', '', '2.50', 'New', '5.99', '', '2022-12-13'),
(8, '1234567Q', 'Yesido CA-73 Aluminum 3in 1  Charging Cable For Micro,Usb ', '1', '29', '4', '3in One Cable Aluminum Ally+Nylon Max 5A Current Type C  Support Fast Charge And Data Transfer . Lighting And Micro Support 2.4A Charging Max 66W Also Fast Charging.', 10, '1665133971Yesido 3 in One Usb Data Cable For Type C Micro and Lighting Faster Charging support.jpg', '', '', '', '', '', '4.50', 'New', '19.99', '', '2022-12-13'),
(9, '1234567Q', 'Yesido YAU-14-Male To Male Aux Cable 3.5mm Connector Cable', '1', '30', '4', '', 50, '1665134114Yesido Male To Male Aux Cable 3.5mm Connector Cable.jpg', '', '', '', '', '', '2.50', 'New', '5.99', '', '2022-12-13'),
(10, '1234567Q', 'Yesido Gs-07  Micro To USB A Otg Adapter For Usb Mouse,Keyboard Etc', '3', '28', '4', 'Yesido Gs-07  Micro To USB A Otg Adapter For Usb Mouse /Keyboard / Camera/ U -disk And Mobile Phones.', 30, '1665134200Yesido Micro OTG Apdter For Multiple Devices Such As Phone Tablet And Keyboard.jpg', '', '', '', '', '', '2.50', 'New', '5.99', '', '2022-12-13'),
(11, '1234567Q', 'Yesido Gs-05  Micro Female To Lighting Otg Adapter', '3', '28', '4', '', 30, '1665134309Yesido Micro To Lighting Mini Otg Adpter For Charging & Trasnmission.jpg', '', '', '', '', '', '1.99', 'New', '4.99', '', '2022-12-13'),
(12, '1234567Q', 'Yesido GS-04 Micro To Type-C Connector Adpter Super Fast Charging', '3', '28', '4', '', 30, '1665134413Yesido Micro To Type-C Connector Adpter Super Fast Charing And Data Trasnfer.jpg', '', '', '', '', '', '1.99', 'New', '4.99', '', '2022-12-13'),
(13, '1234567Q', 'Yesido GS-06 Type C oTG Adpter Fast Data Transfer', '3', '28', '4', '', 30, '1665134542Yesido Type C oTG Adpter Fast Data Transfer.jpg', '', '', '', '', '', '1.99', 'New', '5.99', '', '2022-12-13'),
(14, '1234567Q', 'Yesido GS-01 Type C OTG Apdter For Multiple Devices Usage', '3', '28', '4', '', 30, '1665134614Yesido Type C OTG Apdter For Multiple Devices Such As Phone Tablet And Keyboard.jpg', '', '', '', '', '', '2.50', 'New', '5.99', '', '2022-12-13'),
(15, '1234567Q', 'Yesido GS-03 Type C To Lighting Connector Adpter Super Fast C', '3', '28', '4', '', 30, '1665134959Yesido Type C To Lighting Connector Adpter Super Fast Charging And Data Transfer.jpg', '', '', '', '', '', '1.99', 'New', '5.99', '', '2022-12-13'),
(17, '1234567Q', 'Yesido C87 Universal Glass Holder For Car', '2', '33', '4', '', 10, '1665135158Yesido Universal Glass Holder For Car.png', '', '', '', '', '', '4.50', 'New', '14.99', '', '2022-12-13'),
(22, '1234567Q', 'Yesido GS-09  Type C Female To USB A Otg Adapter ', '3', '28', '4', 'Yesido GS-09  Type C Female To USB A Otg Adapter  Covert Your Type C cable into usb A Charger.', 30, '1667750382gs-0903.png', '', '', '', '', '', '', 'New', '4.99', '', '2022-11-06'),
(23, '1234567Q', 'Yesido GS21- OTG Card Reader Type C to Usb & TFT Card Slot', '13', '36', '4', 'Yesido GS21- OTG Card Reader Type C to Usb & TFT Card Slot', 10, '1667750963GS21.jpg', '', '', '', '', '', '3.99', 'New', '12.99', '', '2022-12-13'),
(24, '1234567Q', 'Yesido Mc09- Universal Charger Plug Adapter- Au/UK/US/EU', '16', '40', '4', 'Yesido Mc09- Universal Charger Plug Adapter- Au/UK/US/EU', 20, '1667754323MC09.jpg', '', '', '', '', '', '7.99', 'New', '16.99', '', '2022-12-13'),
(25, '1234567Q', 'Yesido Mc10- 4usb  And Type c Universal Charger Plug Adapter- Au/UK/US/EU', '16', '40', '4', '', 20, '1667760781yesido travel.jpeg', '', '', '', '', '', '11.99', '', '24.99', '', '2022-12-13'),
(27, '1234567Q', 'Yesido HB11-6in 1 HB Hub With Type C to Extand 2 Usb Port & TFT & Sd Card', '1', '37', '4', '', 10, '1667761584hb11.jpg', '', '', '', '', '', '14.99', 'New', '24.99', '', '2022-12-13'),
(28, '1234567Q', 'Yesido HB13- High Speed Type C Splitter To 4 USB 2.0', '1', '37', '4', '', 10, '1667762034hb13.jpg', '', '', '', '', '', '6.99', 'New', '14.99', '', '2022-12-13'),
(29, '1234567Q', 'Yesido HB12- High Speed USB Splitter To 4 USB 2.0', '1', '37', '4', '', 10, '1667762498HB12.png', '', '', '', '', '', '5.99', 'New', '14.99', '', '2022-12-13'),
(30, '1234567Q', 'Yesido HB17-Mini Type C HUB With 1 Usb 3.0 And 3 2.0', '1', '37', '4', '', 10, '1667766549Yesido-HB17-USB-C-To-4-Port-USB-A-HUB-1.jpeg', '', '', '', '', '', '5.99', 'New', '14.99', '', '2022-12-13'),
(31, '1234567Q', 'Yesido TWS-05 -Bluetooth Wirless Earbuds With Lighting Charger', '17', '41', '4', '', 20, '1667769107TWS05_01.jpg', '', '', '', '', '', '23', 'New', '39.99', '', '2022-12-13'),
(32, '1234567Q', 'Yesido TWS-06-Bluetooth Wirless Earbuds With Lighting Charger', '17', '41', '4', '', 20, '16677695701.jpg', '', '', '', '', '', '25', 'New', '49.99', '', '2022-12-13'),
(33, '1234567Q', 'Yesido YH-09-3.5MM Plug  Noise Cancelation EARPHONE', '17', '43', '4', '', 30, '1667770575YH0917.jpg', '', '', '', '', '', '2.50', 'New', '14.99', '', '2022-12-13'),
(34, '1234567Q', 'Yesido YH-36- Lighting Headphone For IPhone 7/8/X/XR/12/13/14', '17', '43', '4', '', 20, '1667770968YH36_10.jpg', '', '', '', '', '', '14.99', 'New', '19.99', '', '2022-12-13'),
(35, '1234567Q', 'Yesido C81 Mini Magnet Car Holder For Phones', '2', '44', '4', '', 10, '1667771209Universal Yesido Mini Magnetic Car Holder.jpg', '', '', '', '', '', '2.5', 'New', '6.99', '', '2022-11-07'),
(36, '1234567Q', 'Yesido YAU-21 Lighting To 3.5mm Audio Adpter For IPhone', '1', '45', '4', '', 20, '1667772086YAU21_12.jpg', '', '', '', '', '', '3.5', 'New', '9.99', '', '2022-11-07'),
(37, '1234567Q', 'Yesido YAU-19 Typec To 3.5mm Port Headphone Adapter', '1', '45', '4', '', 20, '1667772250YAU19_14.jpg', '', '', '', '', '', '3', 'New', '9.99', '', '2022-11-07'),
(38, '1234567Q', 'Yesido YAU-25 Bluetooth 5.0 Fm Receiver 3.5MM Plug Connector', '1', '45', '4', '', 10, '16677724404 (2).jpg', '', '', '', '', '', '7', 'New', '19.99', '', '2022-11-07'),
(39, '1234567Q', 'Yesido YAU-34 -Usb Bluetooth Transmitter For Window Xp/7/8.1/10/11', '1', '45', '4', '', 10, '1667773059bluetooth.jpg', '', '', '', '', '', '2.5', 'New', '5.99', '', '2022-11-07'),
(40, '1234567Q', 'Dual Usb C PD40W QC3.0 Fast Dual Port Usb Plug For iPhone And Samsung', '4', '46', '4', '', 100, '1667774182WhatsApp Image 2022-10-08 at 18.58.16 (1).jpeg', '', '', '', '', '', '5.5', 'New', '14.99', '', '2022-11-07'),
(41, '1234567Q', 'USB C Fast Charger Plug 20W For iPhone 14/14 Plus/14 Pro/14 Pro Max 13/13 Pro Max/12 Pro /11 Pro/XR/XS/X/8/7/Pad Air 2020/Galaxy S22 S21 S20', '4', '46', '1', '', 50, '1667774637usb c plug.jpg', '', '', '', '', '', '5.50', 'New', '19.99', '', '2022-12-13'),
(42, '1234567Q', 'Lighting To Usb Cable 2.4 Fast Charging For iPhone 6/7/8/xr/11/12/13/14', '1', '47', '7', '', 10, '1667777333efone lighting.jpeg', '', '', '', '', '', '1.5', 'New', '9.99', '', '2022-11-07'),
(43, '1234567Q', 'Micro Usb Cable 2.4 Fast Charging For Samsung And Huawei ', '1', '48', '7', '', 30, '1667777954efone micro.jpeg', '', '', '', '', '', '2.5', 'New', '9.99', '', '2022-11-07'),
(44, '1234567Q', 'Type C Usb Cable 3.0 Fast Charging For Samsung, Huawei, Google Pixel', '1', '49', '7', '', 10, '1667778224Efone Type C.jpeg', '', '', '', '', '', '1.75', 'New', '9.99', '', '2022-11-07'),
(45, '1234567Q', 'Hoco UA21 -Origin Type-C to VGA converter', '1', '45', '8', '', 5, '16679097381 (1).jpg', '', '', '', '', '', '5', 'New', '14.99', '', '2022-11-08'),
(46, '1234567Q', 'Hoco UA20 - Presage Type-C to HDMI converter', '1', '45', '8', '', 5, '16679102211 (2).jpg', '', '', '', '', '', '6', 'New', '14.99', '', '2022-11-08'),
(47, '1234567Q', 'Hoco UA22- Acquire USB ethernet adapter(100 Mbps)', '1', '45', '8', '', 5, '16679104931 (3).jpg', '', '', '', '', '', '', '', '14.99', '', '2022-11-08'),
(48, '1234567Q', 'HOCO UA22 Acquire Type-C ethernet adapter(100 Mbps)', '1', '45', '8', '', 5, '16679107611 (4).jpg', '', '', '', '', '', '6', 'New', '14.99', '', '2022-11-08'),
(49, '1234567Q', 'Hoco E64 mini BT headset White For Android And iPhone, Huawei  ,Htc', '17', '41', '8', '', 5, '16699270193.jpg', '', '', '', '', '', '', 'New', '29.99', '', '2022-12-02'),
(50, '1234567Q', 'Hoco E64 mini BT headset Black For Android And iPhone, Huawei  ,Htc', '17', '41', '8', '', 5, '16699272052 (1).jpg', '', '', '', '', '', '', 'New', '29.99', '\"1, Material: ABS\r\n\r\n2. Size: L26*W17*H24mm; Weight: 4.5g\r\n\r\n3, Bluetooth 5.3; chip: JL AC6983D\r\n\r\n4. Battery capacity: 50mAh; charging time is about 50 minutes\r\n\r\n5. Talk/music time: 10 hours; standby time 100 hours\r\n\r\n6. 10 hours long battery life unila', '2022-12-02'),
(51, '1234567Q', 'Hoco E65 Unity Car BT FM Transmitter', '19', '50', '8', '', 5, '16699285501 (7).jpg', '', '', '', '', '', '', 'New', '14.99', '', '2022-12-02'),
(52, '1234567Q', 'Hoco M101 White Crystal joy wire-controlled Earphones With Microphone', '17', '51', '8', '', 10, '16699294353 (1).jpg', '', '', '', '', '', '', 'New', '9.99', '', '2022-12-02'),
(53, '1234567Q', 'M101 Crystal joy Black wire-controlled earphones with microphone', '17', '51', '8', '', 10, '16699295382 (2).jpg', '', '', '', '', '', '', 'New', '9.99', '', '2022-12-02'),
(54, '1234567Q', 'Hoco M78 El Placer universal earphones with microphone', '17', '51', '8', '', 20, '16699297993 (2).jpg', '', '', '', '', '', '', 'New', '9.99', '', '2022-12-02'),
(55, '1234567Q', 'Hoco M93 Type-C Joy White  wire-controlled digital earphones with microphone', '17', '51', '8', '', 20, '16699300994 (3).jpg', '', '', '', '', '', '', 'New', '9.99', '', '2022-12-02'),
(56, '1234567Q', 'Hoco W30 Fun Move  Blue BT Headphones Comfortable For Gym ', '17', '52', '8', '', 5, '16699304884 (4).jpg', '', '', '', '', '', '', 'New', '29.99', '', '2022-12-02'),
(57, '1234567Q', 'Hoco W30 Fun Move  Red BT Headphones Comfortable For Gym ', '17', '52', '8', '', 5, '16699305973 (4).jpg', '', '', '', '', '', '', 'New', '29.99', '', '2022-12-02'),
(58, '1234567Q', 'Hoco W30 Fun Move  Black BT Headphones Comfortable For Gym ', '17', '52', '8', '', 5, '16699306352 (5).jpg', '', '', '', '', '', '', 'New', '29.99', '', '2022-12-02'),
(59, '1234567Q', 'Hoco W35  Black Wireless Headphones Support Bluetooth, AUX, TF card mode', '17', '52', '8', '', 5, '16699310382 (6).jpg', '', '', '', '', '', '', 'New', '34.99', '', '2022-12-02'),
(60, '1234567Q', 'Hoco W35  Silver Wireless Headphones Support Bluetooth, AUX, TF card mode', '17', '52', '8', '', 5, '16699311113 (5).jpg', '', '', '', '', '', '', 'New', '34.99', '', '2022-12-02'),
(61, '1234567Q', 'Hoco Z44 Leading PD20W+QC3.0 Car Charger Quick Charging ', '4', '53', '8', '', 5, '16699316132 (7).jpg', '', '', '', '', '', '', 'New', '14.99', '', '2022-12-02'),
(62, '1234567Q', 'Hoco Z45 Single Port Motorcycle Charger waterproof, comes with a detachable motorcycle handlebar fixing Strap', '20', '54', '8', '', 5, '16699325103 (6).jpg', '', '', '', '', '', '', 'New', '14.99', '', '2022-12-02'),
(64, '1234567Q', 'Hoco US07 RJ45 Network LAN Cable,Flat Network Black Cable 1M', '1', '12', '8', '', 20, '1669934109lan cable 1m.jpg', '', '', '', '', '', '2.5', 'New', '9.99', '', '2022-12-02'),
(65, '1234567Q', 'Hoco US07 RJ45 Network LAN Cable,Flat Network Black Cable 3m', '1', '12', '8', '', 20, '16699342663M lan .jpg', '', '', '', '', '', '3.50', 'New', '12.99', '', '2022-12-02'),
(66, '1234567Q', 'Hoco US07 RJ45 Network LAN Cable, Flat Network  Black Cable 5m', '1', '12', '8', '', 20, '16699343845M Lan Cable.jpg', '', '', '', '', '', '4.50', 'New', '16.99', '', '2022-12-02'),
(67, '1234567Q', 'Hoco US07 RJ45 Network LAN Cable, Flat Network Black Cable 10M', '1', '12', '8', '', 20, '166993453810M Lan Cable.jpg', '', '', '', '', '', '5.50', 'New', '19.99', '', '2022-12-02'),
(68, '1234567Q', 'Hoco US07 RJ45 Network LAN Cable, Flat Network  Black Cable 20M', '1', '12', '8', '', 20, '166993492020M Lan cable.jpg', '', '', '', '', '', '6.50', 'New', '24.99', '', '2022-12-02'),
(69, '1234567Q', 'Hoco US02 Pure copper CAT6 gigabit Ethernet cable (L=1M)', '1', '12', '8', '', 20, '1669935445lan cable 1m.jpg', '', '', '', '', '', '2.50', 'New', '8.99', '', '2022-12-02'),
(70, '1234567Q', 'Hoco US02 Pure copper CAT6 gigabit Ethernet cable (L=3M)', '1', '12', '8', '', 20, '16699355633M lan .jpg', '', '', '', '', '', '3.50', 'New', '12.99', '', '2022-12-02'),
(71, '1234567Q', 'Hoco US02 Pure copper CAT6 gigabit Ethernet cable (L=5M)', '1', '12', '8', '', 20, '16699356755M Lan Cable.jpg', '', '', '', '', '', '4.99', 'New', '16.99', '', '2022-12-02'),
(72, '1234567Q', 'Hoco J96 Strider power bank(5000mAh)Input: Type-C: 5V/2A 3. Output: USB-A: 5V/2A', '21', '56', '8', '', 10, '16699377363 (8).jpg', '', '', '', '', '', '9.99', 'New', '19.99', '', '2022-12-02'),
(73, '1234567Q', 'Hoco Q3 Pro 22.5W+PD20W fully compatible power bank(10000mAh)', '21', '57', '8', '', 10, '16699380734 (6).jpg', '', '', '', '', '', '14.99', 'New', '29.99', '', '2022-12-02'),
(74, '1234567Q', 'Hoco HB30 Eco Type-C multi-function converter(HDTV+VGA+USB3.0+PD)', '1', '37', '8', '', 10, '16699384341 (15).jpg', '', '', '', '', '', '9.99', 'New', '19.99', '', '2022-12-02'),
(75, '1234567Q', 'Hoco US03 HDTV 2.0 Male to Male 4K HD data cable(L=1M)', '1', '37', '8', '', 20, '16699389421 (16).jpg', '', '', '', '', '', '2.50', 'New', '9.99', '', '2022-12-02'),
(76, '1234567Q', 'Hoco US03 HDTV 2.0 Male to Male 4K HD data cable(L=2M)', '1', '37', '8', '', 20, '16699390503M.jpg', '', '', '', '', '', '3.50', 'New', '12.99', '', '2022-12-02'),
(77, '1234567Q', 'Hoco US03 HDTV 2.1 Male to Male 8K ultra HD data cable(L=3M)', '1', '37', '8', '', 20, '16699392052M.jpg', '', '', '', '', '', '4.50', 'New', '14.99', '', '2022-12-02'),
(78, '1234567Q', 'Borofone BC35 Wideway car AUX BT Receiver', '19', '50', '9', '', 10, '16699911201.jpg', '', '', '', '', '', '4.99', 'New', '14.99', '', '2022-12-03'),
(79, '1234567Q', 'Borofone BC42 Car AUX BT Receiver Support Bluetooth, TF card playback, ', '19', '50', '9', '', 5, '16699914485 (1).jpg', '', '', '', '', '', '9.50', 'New', '19.99', '', '2022-12-03'),
(80, '1234567Q', 'BG1 Superconducting fiber mobile game finger cots(Carbon Fiber)', '22', '59', '9', '', 20, '16700162253 (1).jpg', '', '', '', '', '', '1.99', 'New', '4.99', '', '2022-12-03'),
(81, '1234567Q', 'BOROFONE BG2 Spartan mobile game button', '22', '59', '9', '', 5, '16700165233 (2).jpg', '', '', '', '', '', '2.99', 'New', '6.99', '', '2022-12-03'),
(82, '1234567Q', 'BOROFONE BG3 Warrior cooling gamepad', '22', '61', '9', '', 5, '16700175572 (4).jpg', '', '', '', '', '', '4.99', 'New', '9.99', '', '2022-12-03'),
(83, '1234567Q', 'BOROFONE BG5 2.4G business wireless mouse Black Color', '23', '62', '9', '', 5, '16700216752 (5).jpg', '', '', '', '', '', '4.50', 'New', '14.99', '', '2022-12-03'),
(84, '1234567Q', 'BOROFONE BG5 2.4G business wireless mouse White Color', '23', '62', '9', '', 5, '167002189510.jpg', '', '', '', '', '', '4.50', 'New', '14.99', '', '2022-12-03'),
(85, '1234567Q', 'BOROFONE BG6 Business keyboard and mouse set(English Version)', '23', '63', '9', '', 5, '16700221929 (2).jpg', '', '', '', '', '', '6.99', 'New', '19.99', '', '2022-12-03'),
(86, '1234567Q', 'BOROFONE BH201 magnetic wireless fast charging car holder', '2', '64', '9', '', 5, '167002253010 (1).jpg', '', '', '', '', '', '8.50', 'New', '14.99', '', '2022-12-03'),
(87, '1234567Q', 'BOROFONE BH43 Xperience magnetic wireless charging car holder', '2', '64', '9', '', 5, '16700228289 (4).jpg', '', '', '', '', '', '14.99', 'New', '24.99', '', '2022-12-03'),
(88, '1234567Q', 'BOROFONE BH45 Mobile magnetic wireless charging car holder', '2', '64', '9', '', 5, '16700230751 (8).jpg', '', '', '', '', '', '12.99', 'New', '19.99', '', '2022-12-03'),
(89, '1234567Q', 'BOROFONE BH53 Windy center console car holder', '2', '26', '9', '', 5, '16700233419 (5).jpg', '', '', '', '', '', '3.99', 'New', '14.99', '', '2022-12-03'),
(90, '1234567Q', 'BOROFONE BH54 Racer windshield car holder', '2', '31', '9', '', 5, '16700236798 (5).jpg', '', '', '', '', '', '3.50', 'New', '14.99', '', '2022-12-03'),
(91, '1234567Q', 'BOROFONE BH60 Dainty center console car holder', '2', '26', '9', '', 5, '16700240239 (6).jpg', '', '', '', '', '', '3.50', 'New', '14.99', '', '2022-12-03'),
(92, '1234567Q', 'BOROFONE BH61 Bora air outlet car holder', '2', '33', '9', '', 5, '16700242769 (7).jpg', '', '', '', '', '', '3.50', 'New', '14.99', '', '2022-12-03'),
(93, '1234567Q', 'BOROFONE BH69 air outlet car holder For Air Vent', '2', '33', '9', '', 5, '16700297429 (8).jpg', '', '', '', '', '', '3.50', 'New', '14.99', '', '2022-12-04'),
(95, '1234567Q', 'BOROFONE BH73 Charm press type center console car holder', '2', '26', '9', '', 5, '16700305799 (9).jpg', '', '', '', '', '', '4.50', 'New', '14.99', '', '2022-12-03'),
(96, '1234567Q', 'BOROFONE BH23 Bright shell mobile phone stand', '2', '17', '9', '', 10, '16701006779 (1).jpg', '', '', '', '', '', '3.99', 'New', '14.99', '', '2022-12-04'),
(97, '1234567Q', 'BOROFONE BH24 Bright shell tablet PC stand', '2', '17', '9', '', 5, '167010096110.jpg', '', '', '', '', '', '4.99', 'New', '14.99', '', '2022-12-04'),
(98, '1234567Q', 'BOROFONE BH70 Eagle laptop folding holder', '23', '65', '9', '', 5, '16701014679 (4).jpg', '', '', '', '', '', '4.50', 'New', '19.99', '', '2022-12-04'),
(100, '1234567Q', 'BOROFONE BH8 Air outlet magnetic in-car holder', '2', '33', '9', '', 10, '1670102021BOROFONE BH8.jpeg', '', '', '', '', '', '2.50', 'New', '7.99', '', '2022-12-04'),
(101, '1234567Q', 'BOROFONE BJ19 Incredible PD20W+QC3.0 power bank(10000mAh)', '21', '57', '9', '', 5, '16701102619 (5).jpg', '', '', '', '', '', '13.99', 'New', '24.99', '', '2022-12-04'),
(102, '1234567Q', 'BOROFONE BJ19 Incredible PD20W+QC3.0 power bank(10000mAh)White', '21', '57', '9', '', 5, '167011041310 (1).jpg', '', '', '', '', '', '13.99', 'New', '24.99', '', '2022-12-04'),
(103, '1234567Q', 'Borofone BJ24 power bank(10000mAh)Output: USB-A 1/2: 5V/2.1A; total output: 5V/2.1A', '21', '57', '9', '', 5, '167011063912.jpg', '', '', '', '', '', '12.99', 'New', '19.99', '', '2022-12-04'),
(104, '1234567Q', 'BOROFONE BJ29 Discovery Edition PD20W magnetic wireless fast charging power bank(10000mAh)', '21', '66', '9', '', 5, '16701109019 (6).jpg', '', '', '', '', '', '24.99', 'New', '39.99', '', '2022-12-04'),
(105, '1234567Q', 'BOROFONE BJ8 Extreme power bank(30000mAh) Quick Charging ', '21', '67', '9', '', 5, '1670111290bj9.jpg', '', '', '', '', '', '24.99', 'New', '29.99', '', '2022-12-04'),
(106, '1234567Q', 'BOROFONE BL11 3.5mm to double RCA Audio cable Male To Male', '1', '12', '9', '', 15, '16701116678 (7).jpg', '', '', '', '', '', '2.50', 'New', '7.99', '', '2022-12-04'),
(107, '1234567Q', 'Borofone BL12 3.5 audio extension cable male to female(L=1M)', '1', '30', '9', '', 10, '167011207309.jpg', '', '', '', '', '', '2.25', 'New', '9.99', '', '2022-12-04'),
(108, '1234567Q', 'BOROFONE BL13 2RCA red and white double lotus audio cable', '1', '30', '9', '', 10, '16701122909 (8).jpg', '', '', '', '', '', '2.50', 'New', '8.99', '', '2022-12-04'),
(109, '1234567Q', 'BOROFONE BL4 AUX audio cable Male To Male (L=2M)', '1', '30', '9', '', 20, '1670112531BL4 AUX audio cable(L=2M).jpeg', '', '', '', '', '', '1.75', 'New', '5.99', '', '2022-12-04'),
(110, '1234567Q', 'BOROFONE BM30 Pro Original series earphones Microphone with microphone controller', '17', '51', '9', '', 10, '1670113136BM30 Pro Original series earphones.jpeg', '', '', '', '', '', '2.50', 'New', '7.99', '', '2022-12-04'),
(111, '1234567Q', 'BOROFONE BM30 Original series wire control earphones with mic HD Sound quality', '17', '51', '9', '', 30, '1670113656BM30 Original series wire control earphones with mic.jpeg', '', '', '', '', '', '2.50', 'New', '9.99', '', '2022-12-04'),
(112, '1234567Q', 'BOROFONE BM40 Sage universal earphones with mic', '1', '30', '9', '', 10, '1670114111BM40.jpg', 'Completely Used.png', '', '', '', '', '2.50', 'New', '9.99', 'fdgdgd', '2023-05-30'),
(113, '1234567Q', 'BOROFONE BM65 Sole wire-controlled earphones with mic', '17', '51', '9', '', 10, '167011437510 (2).jpg', '', '', '', '', '', '2.50', 'New', '7.99', '', '2022-12-04'),
(114, 'gdfgd', 'testing', '3', '', '2', 'dfgdgdgd', 34, 'mts logo.png', 'Slightly Used.png', 'brand new.png', 'Completely Used.png', 'mts logo.png', 'brand new.png', '56', 'New', '23', 'dfsfsfsfsfs', '2023-05-25'),
(115, 'gdfgd', 'testing', '1', '', '2', 'zfsfsfgsd', 24, 'mts logo.png', '', '', '', '', '', '23', 'New', '22', 'defgdgf', '2023-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `product_seo`
--

CREATE TABLE `product_seo` (
  `seo_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `meta-description` varchar(255) NOT NULL,
  `focus-keywords` varchar(255) NOT NULL,
  `additional-keywords` varchar(255) NOT NULL,
  `date_added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_seo`
--

INSERT INTO `product_seo` (`seo_id`, `product_id`, `product_title`, `meta-description`, `focus-keywords`, `additional-keywords`, `date_added`) VALUES
(1, 2, 'Yesido CA-112- Type C Apple Watch Charger Wireless Charging Dock', 'Yesido CA-112- Type C Apple Watch Charger Wireless Charging Dock,Smart Watch Charging Dock. High safety performance, not easy to get hot when charging', 'Type C Apple Watch Charger ', '', '2022-12-04 01:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `return_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `prod_status` varchar(255) DEFAULT NULL,
  `fault` varchar(255) DEFAULT NULL,
  `rtn_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`return_id`, `cus_id`, `first_name`, `last_name`, `email`, `tel`, `order_id`, `order_date`, `product_name`, `product_code`, `quantity`, `reason`, `prod_status`, `fault`, `rtn_date`) VALUES
(1, 15, '3', '6', '2022-10-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_review` varchar(255) NOT NULL,
  `review_time` time NOT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reward_points`
--

CREATE TABLE `reward_points` (
  `reward_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `reward_desc` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reward_points`
--

INSERT INTO `reward_points` (`reward_id`, `cus_id`, `reward_desc`, `points`, `date_added`) VALUES
(1, 15, 'Product Sale Discount', '100', '2022-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `shipping_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `shipping_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`shipping_id`, `customer_id`, `street_address`, `city`, `state`, `country`, `postal_code`, `shipping_date`) VALUES
(1, 15, 'Shop # 24', 'Faisalabad', 'Punjab', 'Pakistan', '38000', '2022-10-04 00:00:00'),
(10, 15, 'testing', 'fsd', 'pb', 'pk', '38000', '0000-00-00 00:00:00'),
(11, 15, 'testing', 'fsd', 'pb', 'pk', '38000', '0000-00-00 00:00:00'),
(12, 16, '60 Queen St, St Davids Centre, Cardiff', 'Cardiff ', 'wales', 'london', 'CF10 2GQ', '0000-00-00 00:00:00'),
(13, 16, '60 Queen St, St Davids Centre,', 'Cardiff ', 'wales', 'united kingdom', 'CF10 2GQ', '0000-00-00 00:00:00'),
(14, 16, '60 Queen St, St Davids Centre,', ' Cardiff ', 'wales', 'united kingdom', 'CF10 2GQ', '0000-00-00 00:00:00'),
(15, 16, '36 broughton road', 'london', '', 'unitedkingdom', 'cr7 6al', '2022-12-15 00:00:00');

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
(40, 16, 'Universal Travel Adapter', '1667767279yesido travel.jpeg', '2022-11-07'),
(41, 17, 'TWS', '1667768656TWS05.jpg', '2022-11-07'),
(43, 17, 'Lightning & Type C', '1667770730yh-35.jpg', '2022-11-07'),
(44, 2, 'Magnet Car Holder', '1667771141Universal Yesido Mini Magnetic Car Holder.jpg', '2022-11-07'),
(45, 1, 'Connectors & Adapters', '1667771963YAU21_11.jpg', '2022-11-07'),
(46, 4, 'Wall Adapters', '1667774449WhatsApp Image 2022-10-08 at 18.58.17 (2).jpeg', '2022-11-07'),
(47, 1, 'iPhone Cables', '1670070310iphone cable.jpeg', '2022-12-03'),
(48, 1, 'Micro USB Cables', '1667777759micro.jpg', '2022-11-07'),
(49, 1, 'Type-C Cables', '1667778069type c.png', '2022-11-07'),
(50, 19, 'FM Transmitter', '16699283881 (6).jpg', '2022-12-02'),
(51, 17, 'Wired Earphones', '16699293271 (8).jpg', '2022-12-02'),
(52, 17, 'Bluetooth Headphones', '16699303751 (11).jpg', '2022-12-02'),
(53, 4, 'Car Adaptors', '16699315052 (7).jpg', '2022-12-02'),
(54, 20, 'Motorcycle Holder', '1669932216hoco-z45-single-port-motorcycle-charger-bike.jpeg', '2022-12-02'),
(55, 4, 'Other Charger', '1669932335other charger.jpeg', '2022-12-02'),
(56, 21, '5000', '16699378217.jpg', '2022-12-02'),
(57, 21, '10000', '16699381037 (1).jpg', '2022-12-02'),
(58, 21, '20000', '', '2022-12-02'),
(59, 22, 'Mobile Games', '1670015877mobile game.jpeg', '2022-12-03'),
(60, 23, 'Wired Mouse', '1670017194mouse.jpeg', '2022-12-03'),
(61, 22, 'Gaming Pad', '1670017307gaming pad.jpeg', '2022-12-03'),
(62, 23, 'Wireless Mouse', '16700217438.jpg', '2022-12-03'),
(63, 14, 'Keyboard', '16700220682 (6).jpg', '2023-05-30'),
(64, 2, 'Wireless Car Holder', '16700224268 (2).jpg', '2022-12-03'),
(65, 14, 'Laptop Stand', '16701013728 (4).jpg', '2023-05-30'),
(66, 12, 'Wireless Power Bank', '16701108418 (5).jpg', '2023-05-30'),
(67, 21, '30000', '16701113258 (6).jpg', '2022-12-04'),
(68, 5, 'Iphone Covers', 'mts logo.png', '2023-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `user_pic` varchar(55) NOT NULL,
  `user_mobile` varchar(55) NOT NULL,
  `user_role` varchar(55) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `user_email`, `user_pic`, `user_mobile`, `user_role`, `date_added`) VALUES
(2, 'admin_prenero', 'b743c33627755c255938a992d3480cab', 'Atiq', 'Ramzan', 'prenerosolutions@gmail.com', 'atiq.jpg', '+923157524000', 'administrator', '2023-05-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `category_banner`
--
ALTER TABLE `category_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`down_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_seo`
--
ALTER TABLE `product_seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `reward_points`
--
ALTER TABLE `reward_points`
  ADD PRIMARY KEY (`reward_id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_ctg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `category_banner`
--
ALTER TABLE `category_banner`
  MODIFY `banner_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `down_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `product_seo`
--
ALTER TABLE `product_seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `return_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reward_points`
--
ALTER TABLE `reward_points`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
