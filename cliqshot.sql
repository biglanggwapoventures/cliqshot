-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2017 at 11:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_user` char(30) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `photographer_id` int(11) NOT NULL,
  `album_title` varchar(255) NOT NULL,
  `album_desc` text NOT NULL,
  `date_uploaded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clerk`
--

CREATE TABLE `clerk` (
  `clerk_id` int(10) NOT NULL,
  `clerk_user` char(20) NOT NULL,
  `clerk_pass` varchar(255) NOT NULL,
  `clerk_nama` varchar(255) NOT NULL,
  `clerk_alamat` text NOT NULL,
  `clerk_ttl` date NOT NULL,
  `clerk_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clerk`
--

INSERT INTO `clerk` (`clerk_id`, `clerk_user`, `clerk_pass`, `clerk_nama`, `clerk_alamat`, `clerk_ttl`, `clerk_email`) VALUES
(1, 'jenner', '24b94470a68d4a72fa4a77f53f435e17', 'Jennifer Sotto', 'Talamban, Cebu City', '1996-09-14', 'jenner@gmail.com'),
(2, 'jobob', 'a1abb9c5a8cdc9d3d3cd5a9d48359154', 'Justin Cabahug', 'Samar', '1996-06-26', 'jobob@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(10) NOT NULL,
  `member_user` char(20) NOT NULL,
  `member_pass` varchar(255) NOT NULL,
  `member_nama` varchar(255) NOT NULL,
  `member_alamat` text NOT NULL,
  `member_ttl` date NOT NULL,
  `member_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_user`, `member_pass`, `member_nama`, `member_alamat`, `member_ttl`, `member_email`) VALUES
(4, 'macmac', '47ce138310dbdf748d76087b537e4b48', 'Marc Anthony Ruba', 'Buanoy Balamban, Cebu', '2001-11-21', 'marcanthonyruba@yahoo.com'),
(5, 'jamesgalops', 'a6fb23dabdda8d9ac5849b2933154f53', 'James Galope', 'Zamboanga', '1998-04-01', 'jamesgalops@gmail.com'),
(6, 'sandrajaen', 'f80436703683be68ec27f2227439f412', 'Kassandra Jaen Pepito', 'Liloan', '1997-11-28', 'sandrajaen@gmail.com'),
(7, 'candybravo', '69c63fcbf524915c3bc61d6069e7679f', 'Candy Bravo', 'Escario', '1998-01-02', 'candybravo@gmail.com'),
(8, 'jillbitua', '94ce66c640e9f201ae1314d2c557603b', 'Jill Bitua', 'Argao', '1997-02-01', 'jillbitua@gmail.com'),
(9, 'kevinseblos', 'b4a7be31aaf05098b51e955fa0bc0058', 'Kevin Seblos', 'Buanoy Balamban, Cebu', '1997-11-14', 'kevinseblos@gmail.com'),
(10, 'davedalimocon', '587a56c91123a44fe2099d7f5f415919', 'Dave Dalimcon', 'Cebu City', '1995-01-01', 'dave@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photographer_id` int(11) NOT NULL,
  `date_ordered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_ordered` time DEFAULT NULL,
  `event_date` date NOT NULL,
  `order_status` enum('pending','approve','upcoming','cancelled') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `package_id`, `user_id`, `photographer_id`, `date_ordered`, `time_ordered`, `event_date`, `order_status`) VALUES
(5, 1, 1, 0, '2017-01-18 17:16:25', '12:59:00', '2017-01-19', 'approve'),
(6, 1, 1, 0, '2017-01-18 17:16:28', '12:02:00', '2017-01-11', 'approve'),
(7, 1, 1, 0, '2017-01-17 16:00:00', '12:59:00', '2016-12-31', 'pending'),
(8, 1, 1, 0, '2017-01-17 16:00:00', '23:59:00', '0000-00-00', 'pending'),
(9, 1, 1, 0, '2017-01-18 16:00:00', '09:00:00', '0000-00-00', 'pending'),
(10, 1, 1, 0, '2017-01-18 16:00:00', '17:00:00', '0000-00-00', 'pending'),
(11, 3, 1, 0, '2017-01-19 16:00:00', '09:00:00', '0000-00-00', 'pending');

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
(1, 'PORTRAITS, COUPLE + FAMILY', 'One-hour photoshoot (maximum 6 people) 25 processed high-resolution and 25 photos for web sharing photos in a CD ,Choice of one 8" x 10" or three 5" x 7" prints. ADDITIONAL PERSON IN GROUP: $ 9.99 per person includes 3 more photos in CD\r\n', 'Chrysanthemum.jpg', 8000, '2017-01-12'),
(2, 'PROFESSIONAL HEADSHOTS', '1-hour photoshoot 10 processed high-resolution, 10 web-versions for website, and 10 watermarked for web sharing photos in a CD\r\n', 'Desert.jpg', 6000, '2017-01-03'),
(3, 'FRIENDS & FAMILY PARTIES', '4-hour Photo Coverage 100 Event Photos includes 75 processed high-resolution and web posting photos in a CD Additional $ 50 / hour\r\n', 'Hydrangeas.jpg', 5000, '2017-01-04'),
(4, 'MATERNITY PACKAGE', '1 and a half hour Mommy and Daddy Photo Session 25 processed high-resolution and 25 photos for web sharing photos in a CD Choice of three 8" x 10"\r\n', 'Jellyfish.jpg', 6999, '2017-01-10'),
(5, 'NEWBORN PHOTOS ', '3-hour Photo Session 25 processed high-resolution and 25 photos for web sharing photos in a CD Choice of three 8" x 10"\r\n', 'Koala.jpg', 499, '2017-01-24'),
(6, 'Graduation Package C', 'Panel content', 'Lighthouse.jpg', 0, '2017-01-08'),
(7, '\r\nMATERNITY + NEWBORN PACKAGE - ', '1.5-hour Mommy and Daddy Photo Session 3-hour Newborn and Family Photo Session 50 processed high-resolution and 50 photos for web sharing photos in a CD Choice of six 8" x 10" or one 24" x 36" Collage Print, Photobook\r\n', 'Tulips.jpg', 749, '2017-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `photo_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_user` (`admin_user`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `clerk`
--
ALTER TABLE `clerk`
  ADD PRIMARY KEY (`clerk_id`),
  ADD UNIQUE KEY `clerk_user` (`clerk_user`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `member_user` (`member_user`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clerk`
--
ALTER TABLE `clerk`
  MODIFY `clerk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
