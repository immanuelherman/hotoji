-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 05:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotoji`
--

-- --------------------------------------------------------

--
-- Table structure for table `htj_category`
--

CREATE TABLE IF NOT EXISTS `htj_category` (
`id` int(15) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `parent` int(15) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `htj_supplier`
--

CREATE TABLE IF NOT EXISTS `htj_supplier` (
`id` int(15) NOT NULL,
  `fullname` varchar(128) COLLATE utf8_bin NOT NULL,
  `address` varchar(128) COLLATE utf8_bin NOT NULL,
  `phone` varchar(32) COLLATE utf8_bin NOT NULL,
  `zip_code` varchar(16) COLLATE utf8_bin NOT NULL,
  `type` int(1) NOT NULL COMMENT 'primary type of business/services',
  `status` int(1) NOT NULL COMMENT 'current availability',
  `rating` int(1) NOT NULL COMMENT 'user rating',
  `personnel` int(8) NOT NULL COMMENT 'number of personnel within our system',
  `total_project` int(8) NOT NULL,
  `date_last_project` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `registration_number` varchar(32) COLLATE utf8_bin NOT NULL,
  `asset_value` int(32) NOT NULL COMMENT 'range of the value of the company asset as indication of how big this supplier is'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `htj_supplier_category`
--

CREATE TABLE IF NOT EXISTS `htj_supplier_category` (
  `id_supplier` int(15) NOT NULL,
  `id_category` int(15) NOT NULL,
  `date_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `htj_supplier_user`
--

CREATE TABLE IF NOT EXISTS `htj_supplier_user` (
  `id_supplier` int(15) NOT NULL,
  `id_user` int(15) NOT NULL,
  `role` int(1) NOT NULL,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `htj_user`
--

CREATE TABLE IF NOT EXISTS `htj_user` (
`id` int(15) NOT NULL,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `role` int(1) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `htj_user`
--

INSERT INTO `htj_user` (`id`, `username`, `password`, `role`, `date_created`, `date_modified`) VALUES
(1, 'user1@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2017-02-04 19:18:29', '2017-02-04 19:18:29'),
(2, 'user2@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '2017-02-04 19:18:29', '2017-02-04 19:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `htj_userdetail`
--

CREATE TABLE IF NOT EXISTS `htj_userdetail` (
  `id_user` int(15) NOT NULL,
  `fullname` varchar(128) COLLATE utf8_bin NOT NULL,
  `adress` varchar(256) COLLATE utf8_bin NOT NULL,
  `phone` varchar(64) COLLATE utf8_bin NOT NULL,
  `email` varchar(128) COLLATE utf8_bin NOT NULL,
  `date_modified` datetime NOT NULL,
  `zip` varchar(24) COLLATE utf8_bin NOT NULL,
  `birthdate` datetime NOT NULL,
  `gender` int(2) NOT NULL,
  `marital_status` varchar(1) COLLATE utf8_bin NOT NULL,
  `country` varchar(64) COLLATE utf8_bin NOT NULL,
  `income_range` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `htj_category`
--
ALTER TABLE `htj_category`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`), ADD KEY `parent` (`parent`);

--
-- Indexes for table `htj_supplier`
--
ALTER TABLE `htj_supplier`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htj_supplier_category`
--
ALTER TABLE `htj_supplier_category`
 ADD KEY `id_supplier` (`id_supplier`), ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `htj_supplier_user`
--
ALTER TABLE `htj_supplier_user`
 ADD KEY `role` (`role`), ADD KEY `id_supplier` (`id_supplier`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `htj_user`
--
ALTER TABLE `htj_user`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`);

--
-- Indexes for table `htj_userdetail`
--
ALTER TABLE `htj_userdetail`
 ADD UNIQUE KEY `email` (`email`), ADD KEY `id_user` (`id_user`), ADD KEY `fullname` (`fullname`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `htj_category`
--
ALTER TABLE `htj_category`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `htj_supplier`
--
ALTER TABLE `htj_supplier`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `htj_user`
--
ALTER TABLE `htj_user`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `htj_supplier_category`
--
ALTER TABLE `htj_supplier_category`
ADD CONSTRAINT `htj_supplier_category_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `htj_supplier` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `htj_supplier_category_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `htj_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `htj_supplier_user`
--
ALTER TABLE `htj_supplier_user`
ADD CONSTRAINT `htj_supplier_user_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `htj_supplier` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `htj_supplier_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `htj_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `htj_userdetail`
--
ALTER TABLE `htj_userdetail`
ADD CONSTRAINT `htj_userdetail_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `htj_user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
