-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 03:56 AM
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
(2, 'jobob', 'a1abb9c5a8cdc9d3d3cd5a9d48359154', 'Justin Cabahug', 'Samar', '1996-06-26', 'jobob@gmail.com'),
(3, 'gelzeah', '89599abb8f989de9856da2f01cff7710', 'Gelzeah Serato', 'Pit-os Cebu City', '1996-08-01', 'gelzeah@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `client_id` int(10) NOT NULL,
  `client_username` char(20) NOT NULL,
  `client_password` varchar(255) NOT NULL,
  `client_fullname` varchar(255) NOT NULL,
  `client_address` text NOT NULL,
  `client_birthdate` date NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`client_id`, `client_username`, `client_password`, `client_fullname`, `client_address`, `client_birthdate`, `client_email`, `client_contact`) VALUES
(1, 'macmac123', '47ce138310dbdf748d76087b537e4b48', 'Marc Anthony Ruba', 'Buanoy Balamban, Cebu', '2001-11-21', 'marcanthonyruba@yahoo.com', ''),
(5, 'jamesgalops', 'a6fb23dabdda8d9ac5849b2933154f53', 'James Galope', 'Zamboanga', '1998-04-01', 'jamesgalops@gmail.com', ''),
(6, 'sandrajaen', 'f80436703683be68ec27f2227439f412', 'Kassandra Jaen Pepito', 'Liloan', '1997-11-28', 'sandrajaen@gmail.com', ''),
(8, 'jillbitua', '94ce66c640e9f201ae1314d2c557603b', 'Jill Bitua', 'Argao', '1997-02-01', 'jillbitua@gmail.com', ''),
(9, 'kevinseblos', '3efa31eb5cea30e08bbc2ffcca216c71', 'Kevin Seblos', 'Buanoy Balamban, Cebu', '1997-11-14', 'kevinseblos@gmail.com', ''),
(10, 'davedalimocon', '587a56c91123a44fe2099d7f5f415919', 'Dave Dalimcon', 'Cebu City', '1995-01-01', 'dave@gmail.com', ''),
(11, 'justinbob', 'cf7eab9d51dc5f0362f34fd54b790e2c', 'Justin Bobby', 'Samar', '1996-06-06', 'justinbob@gmail.com', ''),
(12, 'Kelly', '90ff14b6291375639077a194a684f55d', 'Quin', 'USA', '1990-01-01', 'kellyquinn@gmail.com', ''),
(13, 'alexgaskarth', 'd7e135f7aa9a065a94385176da79d853', 'Alex Gaskarth', 'Baltimore, USA', '1987-02-01', 'alexgaskarth@gmail.com', '09324345432'),
(14, 'lizasoberano', '13430dd07773a07a8af64a45d0b95521', 'Hope Elizabeth Soberano', 'Manila, Philippines', '1998-01-17', 'lizasoberano@gmail.com', '09271234567'),
(15, 'janinev', '697229921f6aa5b263f067e0e6c628e0', 'Janine', 'Liloan', '1995-01-16', 'janinev@gmail.com', '09234567890'),
(16, 'angelolim', 'f625ab125cf3828df31058cdcd32c1ef', 'Angelo Lim', 'Mandaue', '1997-06-02', 'angelolim@gmail.com', '');

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
  `order_status` enum('pending','approve','upcoming','cancelled') NOT NULL DEFAULT 'pending',
  `assign_status` enum('not_assigned','pending_assignment','assigned','declined') NOT NULL,
  `uploaded_status` enum('not_uploaded','uploaded') NOT NULL DEFAULT 'not_uploaded'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `package_id`, `user_id`, `photographer_id`, `date_ordered`, `time_ordered`, `event_date`, `order_status`, `assign_status`, `uploaded_status`) VALUES
(5, 1, 1, 1, '2017-01-24 15:19:05', '12:59:00', '2017-01-31', 'approve', 'assigned', 'not_uploaded'),
(6, 1, 1, 1, '2017-01-24 15:30:47', '12:02:00', '2017-01-11', 'approve', 'assigned', 'not_uploaded'),
(7, 1, 1, 1, '2017-01-24 15:20:24', '12:59:00', '2016-12-31', 'approve', 'assigned', 'not_uploaded'),
(8, 1, 1, 1, '2017-01-24 15:33:35', '23:59:00', '0000-00-00', 'approve', 'assigned', 'not_uploaded'),
(9, 1, 1, 1, '2017-01-25 03:58:54', '09:00:00', '2017-01-16', 'approve', 'assigned', 'not_uploaded'),
(10, 1, 1, 1, '2017-01-25 05:50:28', '17:00:00', '2017-01-31', 'approve', 'assigned', 'not_uploaded'),
(11, 3, 1, 1, '2017-01-25 05:49:59', '09:00:00', '2017-01-31', 'approve', 'pending_assignment', 'not_uploaded'),
(12, 2, 1, 1, '2017-01-25 03:58:07', '12:59:00', '2017-01-31', 'approve', 'pending_assignment', 'not_uploaded'),
(13, 1, 1, 1, '2017-01-25 14:23:17', '09:00:00', '2017-01-31', 'approve', 'assigned', 'not_uploaded'),
(14, 2, 1, 1, '2017-01-25 14:56:15', '09:00:00', '2017-01-31', 'approve', 'assigned', 'not_uploaded'),
(15, 5, 1, 1, '2017-01-25 10:52:43', '13:00:00', '2017-01-31', 'approve', 'assigned', 'not_uploaded'),
(16, 5, 1, 3, '2017-01-25 04:00:33', '13:01:00', '2017-01-31', 'approve', 'pending_assignment', 'not_uploaded'),
(17, 1, 1, 1, '2017-01-24 15:34:35', '09:00:00', '2017-01-22', 'approve', 'assigned', 'uploaded'),
(18, 1, 1, 1, '2017-01-25 06:13:58', '08:00:00', '0000-00-00', 'approve', 'assigned', 'not_uploaded'),
(19, 1, 1, 2, '2017-01-25 10:51:57', '09:00:00', '0000-00-00', 'approve', 'pending_assignment', 'not_uploaded'),
(20, 1, 1, 1, '2017-01-26 03:44:15', '09:00:00', '2017-03-02', 'approve', 'assigned', 'not_uploaded');

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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_desc`, `package_img`, `package_price`, `date_created`) VALUES
(1, 'PORTRAITS, COUPLE + FAMILY', 'One-hour photoshoot (maximum 6 people) 25 processed high-resolution and 25 photos for web sharing photos in a CD ,Choice of one 8" x 10" or three 5" x 7" prints. ADDITIONAL PERSON IN GROUP: $ 9.99 per person includes 3 more photos in CD\r\n', 'Chrysanthemum.jpg', 8000, '2017-01-11 16:00:00'),
(2, 'PROFESSIONAL HEADSHOTS', '1-hour photoshoot 10 processed high-resolution, 10 web-versions for website, and 10 watermarked for web sharing photos in a CD\r\n', 'Desert.jpg', 6000, '2017-01-02 16:00:00'),
(3, 'FRIENDS & FAMILY PARTIES', '4-hour Photo Coverage 100 Event Photos includes 75 processed high-resolution and web posting photos in a CD Additional $ 50 / hour\r\n', 'Hydrangeas.jpg', 5000, '2017-01-03 16:00:00'),
(4, 'MATERNITY PACKAGE', '1 and a half hour Mommy and Daddy Photo Session 25 processed high-resolution and 25 photos for web sharing photos in a CD Choice of three 8" x 10"\r\n', 'Jellyfish.jpg', 6999, '2017-01-09 16:00:00'),
(5, 'NEWBORN PHOTOS ', '3-hour Photo Session 25 processed high-resolution and 25 photos for web sharing photos in a CD Choice of three 8" x 10"\r\n', 'Koala.jpg', 499, '2017-01-23 16:00:00'),
(6, 'Graduation Package C', 'Kung makapasar ka sa thesis, libre ni sya :D pero joke ra!', '2-1600.jpg', 100, '2017-01-07 16:00:00'),
(7, 'MATERNITY + NEWBORN PACKAGE - ', '1.5-hour Mommy and Daddy Photo Session 3-hour Newborn and Family Photo Session 50 processed high-resolution and 50 photos for web sharing photos in a CD Choice of six 8', '4-1600.jpg', 3000, '2017-01-03 16:00:00'),
(8, 'CLIQSHOT 101', 'All packages are free for this, sort of', '2-1600.jpg', 500, '0000-00-00 00:00:00'),
(9, 'CLIQSHOT 102', 'Sadada', '1-1600.jpg', 50000, '2017-01-21 16:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `photographer_id` int(10) NOT NULL,
  `photographer_user` char(20) NOT NULL,
  `photographer_pass` varchar(255) NOT NULL,
  `photographer_nama` varchar(255) NOT NULL,
  `photographer_alamat` text NOT NULL,
  `photographer_ttl` date NOT NULL,
  `photographer_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`photographer_id`, `photographer_user`, `photographer_pass`, `photographer_nama`, `photographer_alamat`, `photographer_ttl`, `photographer_email`) VALUES
(1, 'janslodge', '554008edca780b1806c25c41280db451', 'Jan Beltran', 'Cebu City', '1996-09-01', 'janslodge@gmail.com'),
(2, 'itsjanny', 'ced04f905bd5c1c03d603e3c00ed393c', 'Janine Marrione Samson', 'Capitol Site, Cebu City', '1995-11-21', 'itsjanny@gmail.com'),
(3, 'bongbongmarcos', '5b9c6d8c9e8901971fd4ca19c8364c5d', 'Bongbong Marcos', 'Paoay Ilocos', '1959-01-02', 'bongbong@gmail.com');

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `member_user` (`client_username`);

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
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`photographer_id`),
  ADD UNIQUE KEY `photographer_user` (`photographer_user`);

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
  MODIFY `clerk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `photographer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
