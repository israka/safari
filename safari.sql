-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 11:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safari`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about`) VALUES
('Go girls\r\nSafari can be a solution book to you it can answer your all questions\r\nregarding travel in bangladesh.\r\nThis webpage is made by three \r\nfriends and its kind of our dream project.\r\nAs we are female, traveling is not easy for us in this society. \r\nWe dream of a page where we can find all information\r\nabout any places in bangladesh and can\r\nmake our own travel plan\r\nand can have a safe travel. \r\nSo this is our initial to make travel less confusing for women\r\nby giving information. we care about \r\nsafety and bring you the information for unknown places, to plan a \r\nsafe travel and to gather a thousands of memories.  \r\n So are you ready to go?');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `pass`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `barisal`
--

CREATE TABLE `barisal` (
  `division_id` int(11) DEFAULT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_id` varchar(20) NOT NULL,
  `about_the_place` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `transport` longtext DEFAULT NULL,
  `nearest_hotel` longtext DEFAULT NULL,
  `nearest_police_station` longtext DEFAULT NULL,
  `vlogs` longtext DEFAULT NULL,
  `pictures` varchar(300) DEFAULT NULL,
  `suitable_time_to_visit` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chittagong`
--

CREATE TABLE `chittagong` (
  `division_id` int(11) DEFAULT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_id` varchar(20) NOT NULL,
  `about_the_place` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `transport` longtext DEFAULT NULL,
  `nearest_hotel` longtext DEFAULT NULL,
  `nearest_police_station` longtext DEFAULT NULL,
  `vlogs` longtext DEFAULT NULL,
  `pictures` varchar(300) DEFAULT NULL,
  `suitable_time_to_visit` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dhaka`
--

CREATE TABLE `dhaka` (
  `division_id` int(11) DEFAULT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_id` varchar(20) NOT NULL,
  `about_the_place` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `transport` longtext DEFAULT NULL,
  `nearest_hotel` longtext DEFAULT NULL,
  `nearest_police_station` longtext DEFAULT NULL,
  `vlogs` longtext DEFAULT NULL,
  `pictures` varchar(300) DEFAULT NULL,
  `suitable_time_to_visit` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`division_id`, `division_name`) VALUES
(1, 'Dhaka'),
(2, 'Barisal'),
(3, 'Chittagong'),
(4, 'Khulna'),
(5, 'Mymensingh'),
(6, 'Rajshahi'),
(7, 'Sylhet'),
(8, 'Rangpur');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `image` varchar(200) NOT NULL,
  `text` varchar(500) NOT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`image`, `text`, `e_id`) VALUES
('img3.jpg', '12', 1),
('img3.jpg', '12', 2),
('img3.jpg', '12', 3),
('ab.jpg', 'dd', 4),
('ab.jpg', 'dd', 5),
('ab.jpg', 'kjghu', 6),
('ab.jpg', 'kjghu', 7),
('2.jpg', 'eeeeeee', 8),
('2.jpg', 'eeeeeee', 9),
('2.jpg', 'eeeeeee', 10);

-- --------------------------------------------------------

--
-- Table structure for table `khulna`
--

CREATE TABLE `khulna` (
  `division_id` int(11) DEFAULT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_id` varchar(20) NOT NULL,
  `about_the_place` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `transport` longtext DEFAULT NULL,
  `nearest_hotel` longtext DEFAULT NULL,
  `nearest_police_station` longtext DEFAULT NULL,
  `vlogs` longtext DEFAULT NULL,
  `pictures` varchar(300) DEFAULT NULL,
  `suitable_time_to_visit` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mymensingh`
--

CREATE TABLE `mymensingh` (
  `division_id` int(11) DEFAULT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_id` varchar(20) NOT NULL,
  `about_the_place` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `transport` longtext DEFAULT NULL,
  `nearest_hotel` longtext DEFAULT NULL,
  `nearest_police_station` longtext DEFAULT NULL,
  `vlogs` longtext DEFAULT NULL,
  `pictures` varchar(300) DEFAULT NULL,
  `suitable_time_to_visit` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pi`
--

CREATE TABLE `pi` (
  `place_id` text NOT NULL,
  `division_id` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `division_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `place_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`division_id`, `image`, `place_id`, `e_id`) VALUES
(7, 'images/jaflong.jpg', 0, 1),
(7, 'images/jaflong2.jpg', 1, 2),
(7, 'images/jaflong3.jpg', 2, 3),
(8, 'images/muktagacha mymen.jpg', 0, 4),
(8, 'images/muktagacha mymen1.jpg', 1, 5),
(8, 'images/muktagacha mymen2.jpg', 2, 6),
(8, 'images/moyna mymen.jpg', 0, 7),
(8, 'images/moyna mymen1.jpg', 1, 8),
(8, 'images/moyna mymen2.jpg', 2, 9),
(8, 'images/botani mymen.jpg', 0, 10),
(8, 'images/botani mymen1.jpg', 1, 11),
(8, 'images/botani mymen2.jpg', 2, 12),
(8, 'images/bau mymen.jpg', 0, 13),
(8, 'images/bau mymen1.jpg', 1, 14),
(8, 'images/bau mymen2.jpg', 2, 15),
(5, 'images/barendra rajshahi.jpg', 0, 16),
(5, 'images/barendra rajshahi1.jpg', 1, 17),
(5, 'images/barendra rajshahi2.jpg', 2, 18),
(5, 'images/mahasthangarh.php.jpg', 0, 19),
(5, 'images/mahasthangarh1.jpg', 1, 20),
(5, 'images/mahasthangarh2.jpg', 2, 21),
(5, 'images/puthia rajshahi.jpg', 0, 22),
(5, 'images/puthia rajshahi1.jpg', 1, 23),
(5, 'images/puthia rajshahi2.jpg', 2, 24),
(5, 'images/puthia rajshahi3.jpg', 3, 25),
(4, 'images/sundarbans.jpg', 1, 26),
(4, 'images/sundarbans1.jpg', 1, 27),
(4, 'images/sundarbans2.jpg', 1, 28),
(4, 'images/shait gumbad khulna.jpg', 2, 29),
(4, 'images/shait gumbad khulna1.jpg', 2, 30),
(4, 'images/shait gumbad khulna2.jpg', 2, 31),
(4, 'images/shait gumbad khulna3.jpg', 2, 32),
(4, 'images/lalon khulna.jpg', 3, 33),
(4, 'images/lalon khulna1.jpg', 3, 34),
(4, 'images/lalon khulna2.jpg', 3, 35),
(4, 'images/lalon khulna3.jpg', 3, 36),
(3, 'images/guli chitta.jpg', 0, 37),
(3, 'images/guli chitta1.jpg', 1, 38),
(3, 'images/guli chitta2.jpg', 2, 39),
(3, 'images/cox.jpg', 0, 40),
(3, 'images/cox1.jpg', 1, 41),
(3, 'images/cox2,jpg', 2, 42),
(3, 'images/sajek chitta.jpg', 0, 43),
(3, 'images/sajek chitta1.jpg', 1, 44),
(3, 'images/sajek chitta1.jpg', 2, 45),
(3, 'images/nafa chitta.jpg', 0, 46),
(3, 'images/nafa chitta1.jpg', 1, 47),
(3, 'images/nafa chitta2.jpg', 2, 48),
(2, 'images/guava barishal,jpg', 0, 49),
(2, 'images/guava barishal1.jpg', 1, 50),
(2, 'images/guava barishal2.jpg', 2, 51),
(2, 'images/miabari barishal.jpg', 0, 52),
(2, 'images/miabari barishal1.jpg', 1, 53),
(2, 'images/miabari barishal2.jpg', 2, 54),
(2, 'images/oxford barishal.jpg', 0, 55),
(2, 'images/oxford barishal1.jpg', 1, 56),
(2, 'images/oxford barishal2.jpg', 2, 57),
(1, 'images/lalbag.jpg', 0, 58),
(1, 'images/lalbag1.jpg', 2, 59),
(1, 'images/lalbag2.jpg', 2, 60),
(1, 'images/ahsan.jpg', 1, 61),
(1, 'images/ahsan1.jpg', 1, 62),
(1, 'images/ahsan2.jpg', 1, 63),
(1, 'images/panam.jpg', 2, 64),
(1, 'images/panam1.jpg', 2, 65),
(1, 'images/panam2.jpg', 2, 66),
(6, 'images/tajhat rangpur.jpg', 0, 67),
(6, 'images/tajhat rangpur1.jpg', 1, 68),
(6, 'images/tajhat rangpur2.jpg', 2, 69),
(6, 'images/raja rangpur.jpg', 0, 70),
(6, 'images/raja rangpu1.jpg', 1, 71),
(6, 'images/raja rangpu2.jpg', 2, 72),
(6, 'images/raja rangpu3.jpg', 3, 73),
(6, 'images/kantojir.jpg', 0, 74),
(6, 'images/kantojir1.jpg', 1, 75),
(6, 'images/kantojir2.jpg', 2, 76),
(7, 'images/sreemangal sylhet.jpg', 0, 77),
(7, 'images/sreemangal sylhet1.jpg', 1, 78),
(7, 'images/sreemangal sylhet2.jpg', 2, 79),
(7, 'images/sreemangal sylhet3.jpg', 3, 80),
(7, 'images/Tanguar.jpg', 0, 81),
(7, 'images/Tanguar1.jpg', 1, 82),
(7, 'images/Tanguar2.jpg', 2, 83);

-- --------------------------------------------------------

--
-- Table structure for table `rajshahi`
--

CREATE TABLE `rajshahi` (
  `division_id` int(11) DEFAULT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_id` varchar(20) NOT NULL,
  `about_the_place` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `transport` longtext DEFAULT NULL,
  `nearest_hotel` longtext DEFAULT NULL,
  `nearest_police_station` longtext DEFAULT NULL,
  `vlogs` longtext DEFAULT NULL,
  `pictures` varchar(300) DEFAULT NULL,
  `suitable_time_to_visit` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rangpur`
--

CREATE TABLE `rangpur` (
  `division_id` int(11) DEFAULT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_id` varchar(20) NOT NULL,
  `about_the_place` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `transport` longtext DEFAULT NULL,
  `nearest_hotel` longtext DEFAULT NULL,
  `nearest_police_station` longtext DEFAULT NULL,
  `vlogs` longtext DEFAULT NULL,
  `pictures` varchar(300) DEFAULT NULL,
  `suitable_time_to_visit` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sylhet`
--

CREATE TABLE `sylhet` (
  `division_id` int(11) DEFAULT NULL,
  `place_name` varchar(50) DEFAULT NULL,
  `place_id` varchar(20) NOT NULL,
  `about_the_place` longtext DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `transport` longtext DEFAULT NULL,
  `nearest_hotel` longtext DEFAULT NULL,
  `nearest_police_station` longtext DEFAULT NULL,
  `vlogs` longtext DEFAULT NULL,
  `pictures` varchar(200) DEFAULT NULL,
  `suitable_time_to_visit` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sylhet`
--

INSERT INTO `sylhet` (`division_id`, `place_name`, `place_id`, `about_the_place`, `address`, `transport`, `nearest_hotel`, `nearest_police_station`, `vlogs`, `pictures`, `suitable_time_to_visit`) VALUES
(NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 'img.png', NULL),
(7, 'jaflong', '01', 'Jaflong is famous for its stone collections and is home of the Khasia tribe. Jaflong is also a scenic spot nearby amidst tea gardens and rare beauty of rolling stones from hills. You can watch Dauki Bazar on hills of Meghalaya & Hanging bridge connected between two hills of Meghalaya, it looks beautiful', 'Jaflong, Goainghat, Sylhet. Located in Gowainghat upazila of Sylhet district. The distance by road from Sylhet district headquarters is only 56 km', 'From Dhaka to Sylhet one can use train and bus. Dhaka to Sylhet trains: Parabat Express, Jayantika Express, Upaban Express, Kalni Express, Surma mail. Buy train ticket online:  https://amartrain.com/dhaka-sylhet-train-schedule-ticket-price/ and https://www.esheba.cnsbd.com/ Dhaka to Sylhet Bus : Ena Transport (Pvt) Ltd, Hanif Enterprise. Buy bus ticket online : https://www.shohoz.com/bus-tickets/dhaka-to-sylhet. To reach Sylhet to Jaflong one can take a bus / microbus / CNG /powered autorickshaw. It will take 1 hour to 1.30 hours. Bus Rent bdt. 55 per person and Microbus rent bdt. 1800-2000 and CNG powered auto rickshaw rent bdt. 800', '1) Parjatan Motel, which is located outside the town.It has only 7 rooms and price from 1800 BDT to 2000 BDT. One can contact to this number +88-2-9893710. 2) Jainta Hill Resort which is located 5km away from town. In this resort room price starts from 2300 BDT please contact to +88-01755-045051. 3)Hotel Jaflong Inn, which is located on Mamar Bazar(Town center) and room price starts from 1200 BDT. Please contact to: +88-01755045051 for booking. 4) Shah Amin Hotel, which is the closest location from the river  and room price starts from 1000 BDT. Please contact to +88-01795935679 for booking. There are some cheap hotels in Mamar Bazar( Town center), the price starts from 300 BDT. ', 'If you guys face any kind of problem contact with nearest police station Contact number (ASP, Gowainghat Circle: Gowainghat , Companygonj PS) – 01320117766. Contact number-(OC) 01320117969, Contact number  (Inspector,Investigation) – 01320117970 and Contact number (duty Officer)) – 01320117974 / 0822856003”,', '“http://www.youtube.com/watch?v=_6lkIiavW_g “,', 'jaflong zero point .jpg ', 'If you are interested in the natural beauty of Jaflong, the best time to visit will be during monsoon(July-September) If you are interested in photography the stone collecting activities, you need to visit during winter season(October to May). There will be no stone collecting activities here during the monsoon.'),
(7, 'jaflong', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'jaflong_pic/1.jpg', NULL),
(7, 'jaflong', '2', NULL, NULL, NULL, NULL, NULL, NULL, 'khulna/shat.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barisal`
--
ALTER TABLE `barisal`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `chittagong`
--
ALTER TABLE `chittagong`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `dhaka`
--
ALTER TABLE `dhaka`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `khulna`
--
ALTER TABLE `khulna`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `mymensingh`
--
ALTER TABLE `mymensingh`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `rajshahi`
--
ALTER TABLE `rajshahi`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `rangpur`
--
ALTER TABLE `rangpur`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `sylhet`
--
ALTER TABLE `sylhet`
  ADD PRIMARY KEY (`place_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
