-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 10:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sw2_sprint2`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sprint2_cart`
--

CREATE TABLE `sprint2_cart` (
  `id` int(11) NOT NULL,
  `c_username` varchar(200) NOT NULL,
  `c_pid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sprint2_feadback`
--

CREATE TABLE `sprint2_feadback` (
  `id` int(11) NOT NULL,
  `sp2_username` varchar(200) NOT NULL,
  `sp2_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sprint2_cart`
--
ALTER TABLE `sprint2_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_username` (`c_username`),
  ADD KEY `c_pid` (`c_pid`);

--
-- Indexes for table `sprint2_feadback`
--
ALTER TABLE `sprint2_feadback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sp2_username` (`sp2_username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sprint2_cart`
--
ALTER TABLE `sprint2_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sprint2_feadback`
--
ALTER TABLE `sprint2_feadback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sprint2_cart`
--
ALTER TABLE `sprint2_cart`
  ADD CONSTRAINT `sprint2_cart_ibfk_1` FOREIGN KEY (`c_username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `sprint2_cart_ibfk_2` FOREIGN KEY (`c_pid`) REFERENCES `product` (`id`);

--
-- Constraints for table `sprint2_feadback`
--
ALTER TABLE `sprint2_feadback`
  ADD CONSTRAINT `sprint2_feadback_ibfk_1` FOREIGN KEY (`sp2_username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
