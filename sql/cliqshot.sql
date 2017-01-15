-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2017 at 01:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cliqshot`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photographer_id` int(11) NOT NULL,
  `date_ordered` date NOT NULL,
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_desc` text NOT NULL,
  `package_img` varchar(255) NOT NULL,
  `package_price` float NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_desc`, `package_img`, `package_price`, `date_created`) VALUES
(1, 'PORTRAITS, COUPLE + FAMILY', 'One-hour photoshoot (maximum 6 people) 25 processed high-resolution and 25 photos for web sharing photos in a CD ,Choice of one 8" x 10" or three 5" x 7" prints. ADDITIONAL PERSON IN GROUP: $ 9.99 per person includes 3 more photos in CD\r\n', '', 8000, '2017-01-12'),
(2, 'PROFESSIONAL HEADSHOTS', '1-hour photoshoot 10 processed high-resolution, 10 web-versions for website, and 10 watermarked for web sharing photos in a CD\r\n', '', 6000, '2017-01-03'),
(3, 'FRIENDS & FAMILY PARTIES', '4-hour Photo Coverage 100 Event Photos includes 75 processed high-resolution and web posting photos in a CD Additional $ 50 / hour\r\n', '', 5000, '2017-01-04'),
(4, 'MATERNITY PACKAGE', '1 and a half hour Mommy and Daddy Photo Session 25 processed high-resolution and 25 photos for web sharing photos in a CD Choice of three 8" x 10"\r\n', '', 6999, '2017-01-10'),
(5, 'NEWBORN PHOTOS ', '3-hour Photo Session 25 processed high-resolution and 25 photos for web sharing photos in a CD Choice of three 8" x 10"\r\n', '', 499, '2017-01-24'),
(6, 'Graduation Package C', 'Panel content', '', 0, '2017-01-08'),
(7, '\r\nMATERNITY + NEWBORN PACKAGE - ', '1.5-hour Mommy and Daddy Photo Session 3-hour Newborn and Family Photo Session 50 processed high-resolution and 50 photos for web sharing photos in a CD Choice of six 8" x 10" or one 24" x 36" Collage Print, Photobook\r\n', '', 749, '2017-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(25255) NOT NULL,
  `Dateregistered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
