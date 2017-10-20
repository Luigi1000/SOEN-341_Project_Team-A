-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 07:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soen341`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_level3`
--

CREATE TABLE `category_level3` (
  `Id` int(11) NOT NULL,
  `category_level2_id` int(11) NOT NULL,
  `Third_Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_level3`
--

INSERT INTO `category_level3` (`Id`, `category_level2_id`, `Third_Category`) VALUES
(1, 1, 'ElectricDrum'),
(2, 1, 'ClassicDrum'),
(3, 1, 'JazzDrum'),
(4, 2, 'ElectricGuitar'),
(5, 2, 'AcousticGuitar'),
(6, 2, 'BaseGuitar'),
(7, 3, 'pug'),
(8, 3, 'chihuahua'),
(9, 3, 'yorkshire'),
(10, 4, 'perroquet'),
(11, 4, 'canari'),
(12, 4, 'cockatiel'),
(13, 5, 'bengal'),
(14, 5, 'persian');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
