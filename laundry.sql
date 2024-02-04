-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2023 at 03:45 PM
-- Server version: 8.0.35
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `MobileNumber` double NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `regDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`,`MobileNumber`,`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `regDate`) VALUES
(1, 'Sumit', 'admin', 1234567890, 'admin@gmail.com', 'admin123', '2023-11-20 22:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `laundryrequest`
--

DROP TABLE IF EXISTS `laundryrequest`;
CREATE TABLE IF NOT EXISTS `laundryrequest` (
  `Sl_No` int NOT NULL AUTO_INCREMENT,
  `ID` int NOT NULL,
  `DateOfLaundry` date NOT NULL,
  `TopWare` int NOT NULL,
  `BottomWear` int NOT NULL,
  `WoolenCloth` int NOT NULL,
  `Suit` int NOT NULL,
  `Duvet` int NOT NULL,
  `Curtains` int NOT NULL,
  `Carpets` int NOT NULL,
  `Other` int NOT NULL,
  `Service` varchar(21) NOT NULL,
  `PickupAddress` varchar(50) NOT NULL,
  `ContactPerson` double NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`Sl_No`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `laundryrequest`
--

INSERT INTO `laundryrequest` (`Sl_No`, `ID`, `DateOfLaundry`, `TopWare`, `BottomWear`, `WoolenCloth`, `Suit`, `Duvet`, `Curtains`, `Carpets`, `Other`, `Service`, `PickupAddress`, `ContactPerson`, `Description`, `Status`) VALUES
(1, 1, '2023-11-22', 2, 3, 2, 0, 0, 0, 0, 5, 'drop', 'namkum', 9876543210, 'na', 'accept'),
(19, 32, '2023-12-06', 1, 2, 3, 2, 2, 2, 1, 2, 'drop', 'Ranchi jh', 9876543210, 'clean well', 'pending'),
(20, 32, '2023-12-02', 11, 21, 31, 21, 21, 21, 11, 21, 'Pick Up Service', 'Ranchi jh', 9876543211, 'na', 'accept'),
(25, 32, '2023-12-02', 11, 21, 31, 21, 21, 21, 11, 21, 'Pick Up Service', 'Ranchi jh', 9876543211, 'na', 'finished');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

DROP TABLE IF EXISTS `pricelist`;
CREATE TABLE IF NOT EXISTS `pricelist` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `TopWear` int NOT NULL,
  `BottomWear` int NOT NULL,
  `Woolen` int NOT NULL,
  `Suit` int NOT NULL,
  `Duvet` int NOT NULL,
  `Curtains` int NOT NULL,
  `Carpets` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`Id`, `TopWear`, `BottomWear`, `Woolen`, `Suit`, `Duvet`, `Curtains`, `Carpets`) VALUES
(1, 25, 30, 50, 100, 80, 20, 100);

-- --------------------------------------------------------

--
-- Table structure for table `reguser`
--

DROP TABLE IF EXISTS `reguser`;
CREATE TABLE IF NOT EXISTS `reguser` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Mobile` double NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`,`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reguser`
--

INSERT INTO `reguser` (`ID`, `Name`, `Mobile`, `Gender`, `Email`, `Address`, `Password`, `RegDate`) VALUES
(20, 'amit kumar', 9876543210, 'male', 'amit@gmail.com', 'namkum ranchi', '123', '2023-11-21 16:14:37'),
(23, 'sumit', 9876543210, 'male', 'sumit@gmail.com', 'Ranchi', '12345', '2023-11-24 08:50:11'),
(24, 'aman', 9876543210, 'male', 'aman@gmail.com', 'Ranchi', '123', '2023-11-24 08:52:35'),
(29, 'prem', 9876543210, 'male', 'prem1@gmail.com', 'Ranchi', '123', '2023-11-24 13:17:42'),
(30, 'prem', 9876543210, 'male', 'prem2@gmail.com', 'Ranchi', '123', '2023-11-24 13:37:11'),
(31, 'prem', 9876543210, 'male', 'prem12@gmail.com', 'Ranchi', '123', '2023-11-24 13:46:29'),
(32, 'Prem kumar', 1234567890, 'male', 'prem123@gmail.com', 'Ranchi jh', '1234', '2023-11-24 14:07:57'),
(33, 'prem', 9876543210, 'male', 'prem1234@gmail.com', 'Ranchi', '1234', '2023-11-26 13:49:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
