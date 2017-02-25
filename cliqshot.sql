-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2017 at 04:14 PM
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

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `order_id`, `photographer_id`, `album_title`, `album_desc`, `date_uploaded`) VALUES
(1, 0, 1, 'ASDSADA', '		DASDASDAD		\r\n										', '2017-02-01'),
(2, 0, 1, 'ASDSADA', '		DASDASDAD		\r\n										', '2017-02-01'),
(3, 0, 1, 'ASDSADA', '		DASDASDAD		\r\n										', '2017-02-01'),
(4, 0, 1, 'ASDSADA', '		DASDASDAD		\r\n										', '2017-02-01'),
(5, 0, 1, 'ASDSADA', '		DASDASDAD		\r\n										', '2017-02-01'),
(6, 0, 1, 'ASDSADA', '			ASDASDASDAasda\r\n										', '2017-02-01'),
(7, 0, 1, 'Intensity', '				\r\n	asdasd', '2017-02-01'),
(8, 0, 1, 'Intensity', '				\r\n	asdasd', '2017-02-01'),
(9, 0, 1, 'Intensity', '				\r\n	asdasd', '2017-02-01'),
(10, 0, 1, 'ASdasdas', '				\r\n	dasdasda									', '2017-02-01'),
(11, 0, 1, 'ASdasdas', '				\r\n	dasdasda									', '2017-02-01'),
(12, 20, 1, 'ASdas', '		asdasdasda\r\n										', '2017-02-01'),
(13, 20, 1, 'ASdas', '		asdasdasda\r\n										', '2017-02-01');

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
(20, 1, 1, 1, '2017-02-01 14:25:21', '09:00:00', '2017-03-02', 'approve', 'assigned', 'uploaded');

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
  `photos_img_url` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL,
  `photo_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `photos_img_url`, `album_id`, `photo_description`) VALUES
(1, 'uploadFiles/5891ebbb34755', 4, ''),
(2, 'uploadFiles/5891ebbb35ec7', 4, ''),
(3, 'uploadFiles/5891ebbb37638', 4, ''),
(4, 'uploadFiles/5891ebbb385d9', 4, ''),
(5, 'uploadFiles/5891ebbb39d4a', 4, ''),
(6, 'uploadFiles/5891ebbb3aceb', 4, ''),
(7, 'uploadFiles/5891ebbb3d7e5', 4, ''),
(8, 'uploadFiles/5891ebbb3e786', 4, ''),
(9, 'uploadFiles/5891ebbb3f726', 4, ''),
(10, 'uploadFiles/5891ebbb40aaf', 4, ''),
(11, 'uploadFiles/5891ecfa40dc3', 5, ''),
(12, 'uploadFiles/5891ecfa4214c', 5, ''),
(13, 'uploadFiles/5891ecfa430ed', 5, ''),
(14, 'uploadFiles/5891ecfa438bd', 5, ''),
(15, 'uploadFiles/5891ecfa4502e', 5, ''),
(16, 'uploadFiles/5891ecfa45be7', 5, ''),
(17, 'uploadFiles/5891ecfa4679f', 5, ''),
(18, 'uploadFiles/5891ecfa46f70', 5, ''),
(19, 'uploadFiles/5891ecfa47740', 5, ''),
(20, 'uploadFiles/5891ecfa486e1', 5, ''),
(21, 'uploadFiles/5891eeaa0b04a', 6, ''),
(22, 'uploadFiles/5891eeaa0e314', 6, ''),
(23, 'uploadFiles/5891eeaa0fe6e', 6, ''),
(24, 'uploadFiles/5891eeaa10e0f', 6, ''),
(25, 'uploadFiles/5891eeaa12198', 6, ''),
(26, 'uploadFiles/5891eeaa13138', 6, ''),
(27, 'uploadFiles/5891eeaa144c1', 6, ''),
(28, 'uploadFiles/5891eeaa15462', 6, ''),
(29, 'uploadFiles/5891eeaa16403', 6, ''),
(30, 'uploadFiles/5891eeaa1778c', 6, ''),
(31, 'uploadFiles/5891ef44683f8', 7, ''),
(32, 'uploadFiles/5891ef4469781', 7, ''),
(33, 'uploadFiles/5891ef4469f51', 7, ''),
(34, 'uploadFiles/5891ef446b2da', 7, ''),
(35, 'uploadFiles/5891ef446c27b', 7, ''),
(36, 'uploadFiles/5891ef446e1bd', 7, ''),
(37, 'uploadFiles/5891ef44700fe', 7, ''),
(38, 'uploadFiles/5891ef4470cb7', 7, ''),
(39, 'uploadFiles/5891ef4471487', 7, ''),
(40, 'uploadFiles/5891ef4472428', 7, ''),
(41, 'uploadFiles/5891ef50dd8e8', 8, ''),
(42, 'uploadFiles/5891ef50df059', 8, ''),
(43, 'uploadFiles/5891ef50e03e2', 8, ''),
(44, 'uploadFiles/5891ef50e1b53', 8, ''),
(45, 'uploadFiles/5891ef50e2323', 8, ''),
(46, 'uploadFiles/5891ef50e2edc', 8, ''),
(47, 'uploadFiles/5891ef50e3e7d', 8, ''),
(48, 'uploadFiles/5891ef50e464d', 8, ''),
(49, 'uploadFiles/5891ef50e4e1e', 8, ''),
(50, 'uploadFiles/5891ef50e59d6', 8, ''),
(51, 'uploadFiles/5891ef59eb6d3', 9, ''),
(52, 'uploadFiles/5891ef59ec673', 9, ''),
(53, 'uploadFiles/5891ef59ed614', 9, ''),
(54, 'uploadFiles/5891ef59ee5b5', 9, ''),
(55, 'uploadFiles/5891ef59eed85', 9, ''),
(56, 'uploadFiles/5891ef59efd26', 9, ''),
(57, 'uploadFiles/5891ef59f1497', 9, ''),
(58, 'uploadFiles/5891ef59f2820', 9, ''),
(59, 'uploadFiles/5891ef59f37c1', 9, ''),
(60, 'uploadFiles/5891ef5a00522', 9, ''),
(61, 'uploadFiles/5891ef6735365', 10, ''),
(62, 'uploadFiles/5891ef6736306', 10, ''),
(63, 'uploadFiles/5891ef673768f', 10, ''),
(64, 'uploadFiles/5891ef673862f', 10, ''),
(65, 'uploadFiles/5891ef67399b8', 10, ''),
(66, 'uploadFiles/5891ef673a959', 10, ''),
(67, 'uploadFiles/5891ef673b8fa', 10, ''),
(68, 'uploadFiles/5891ef673cc83', 10, ''),
(69, 'uploadFiles/5891ef673e7dc', 10, ''),
(70, 'uploadFiles/5891ef674071e', 10, ''),
(71, 'uploadFiles/5891ef9156c37', 11, ''),
(72, 'uploadFiles/5891ef9158f60', 11, ''),
(73, 'uploadFiles/5891ef915a2e9', 11, ''),
(74, 'uploadFiles/5891ef915b28a', 11, ''),
(75, 'uploadFiles/5891ef915c22b', 11, ''),
(76, 'uploadFiles/5891ef915d1cc', 11, ''),
(77, 'uploadFiles/5891ef915e16d', 11, ''),
(78, 'uploadFiles/5891ef915fcc6', 11, ''),
(79, 'uploadFiles/5891ef9161437', 11, ''),
(80, 'uploadFiles/5891ef9162ba8', 11, ''),
(81, 'uploadFiles/5891efb96b84e', 12, ''),
(82, 'uploadFiles/5891efb96cfbf', 12, ''),
(83, 'uploadFiles/5891efb96df60', 12, ''),
(84, 'uploadFiles/5891efb96ef01', 12, ''),
(85, 'uploadFiles/5891efb96fea2', 12, ''),
(86, 'uploadFiles/5891efb97122b', 12, ''),
(87, 'uploadFiles/5891efb9721cb', 12, ''),
(88, 'uploadFiles/5891efb9773d8', 12, ''),
(89, 'uploadFiles/5891efb978761', 12, ''),
(90, 'uploadFiles/5891efb979701', 12, ''),
(91, 'uploadFiles/5891efd0eb21e', 13, ''),
(92, 'uploadFiles/5891efd0ec1be', 13, ''),
(93, 'uploadFiles/5891efd0ed15f', 13, ''),
(94, 'uploadFiles/5891efd0ee100', 13, ''),
(95, 'uploadFiles/5891efd0ef0a1', 13, ''),
(96, 'uploadFiles/5891efd0f0042', 13, ''),
(97, 'uploadFiles/5891efd0f0bfa', 13, ''),
(98, 'uploadFiles/5891efd0f17b3', 13, ''),
(99, 'uploadFiles/5891efd0f2754', 13, ''),
(100, 'uploadFiles/5891efd101bc6', 13, '');

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

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
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
