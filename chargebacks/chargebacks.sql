-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 12, 2021 at 07:37 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chargebacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Charges`
--

CREATE TABLE `tbl_Charges` (
  `ChargeID` varchar(10) NOT NULL,
  `ChargeType` varchar(80) NOT NULL,
  `ChargeName` varchar(50) NOT NULL,
  `ChargeAmount` int(11) NOT NULL,
  `ChargeCase` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_Charges`
--

INSERT INTO `tbl_Charges` (`ChargeID`, `ChargeType`, `ChargeName`, `ChargeAmount`, `ChargeCase`) VALUES
('AA', 'Advances', '(NSC) ADVANCE COMMISSIONS', 412, 1),
('AV', 'Expense', '(NSC) MONTH ADVENT', 112, 1),
('BC', 'Expense', '(NSC) (NSC) PRINTING - BUSINES', 6, 0),
('BO', 'Expense', '(NSC) BACK OFFICE', 7, 0),
('CG', 'Expense', '(NSC) CORPORATE TRAINING', 2, 0),
('CR', 'Expense', '(NSC) CORPORATE TRANSPORT', 265, 1),
('CV', 'Advances', '(NIC) ADVANCE COMMISSIONS', 56, 1),
('CW', 'Expense', '(COR) NFS WRITE-OFFS', 375, 1),
('EM', 'Expense', '(NSC) EMAIL', 8, 0),
('EQ', 'Expense', '(NSC) MEMBER FEES - EQUINOX', 8, 0),
('FD', 'Expense', '(NSC) FEDEX', 3, 0),
('FX', 'Expense', '(NSC) FAX', 78, 1),
('GV', 'Advances', '(GTAX) ADVANCE COMMISSIONS', 478, 1),
('NV', 'Advances', '(NAM) ADVANCE COMMISSIONS', 281, 1),
('VV', 'Advances', '(VFIN) ADVANCE COMMISSIONS', 211, 1),
('ZG', 'Branch journals (in & out)', '(NSC) BPC DENTAL', 6, 0),
('ZH', 'Branch journals (in & out)', '(NSC) BPC HEALTH', 78, 1),
('ZI', 'Branch journals (in & out)', '(NSC) BPC E&O INSURANCE', 1, 0),
('ZJ', 'Branch journals (in & out)', '(NSC) BPC MONTHLY EXPENSES', 375, 1),
('ZK', 'Branch journals (in & out)', '(NSC) BPC DESK FEE /  RENT', 87, 1),
('ZL', 'Branch journals (in & out)', '(NSC) BPC LEGAL', 5, 0),
('ZM', 'Branch journals (in & out)', '(NSC) BPC MARKETING', 56, 1),
('ZN', 'Branch journals (in & out)', '(NSC) BPC TECHNOLOGY FEES', 392, 1),
('ZO', 'Branch journals (in & out)', '(NSC) BPC OVERNIGHT SVCS', 482, 1),
('ZP', 'Branch journals (in & out)', '(NSC) BPC PARTNERS', 410, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_EOFees`
--

CREATE TABLE `tbl_EOFees` (
  `FeeDisclosure` tinyint(1) NOT NULL,
  `FeeAmount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_EOFees`
--

INSERT INTO `tbl_EOFees` (`FeeDisclosure`, `FeeAmount`) VALUES
(0, 299),
(1, 399),
(2, 499),
(3, 623),
(4, 723),
(5, 823),
(6, 923),
(7, 1023);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Offices`
--

CREATE TABLE `tbl_Offices` (
  `OfficeID` varchar(10) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Office` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_Offices`
--

INSERT INTO `tbl_Offices` (`OfficeID`, `Region`, `Branch`, `Office`) VALUES
('15', 'Forte Capital', 'FCG Financial', 'T45'),
('21', 'Dadlani', 'Daldani', 'AET'),
('34', 'Corporate', 'Corporate - Boca Raton', 'BBC'),
('64', 'Liquid', 'Liquid', 'LL5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_RepExp`
--

CREATE TABLE `tbl_RepExp` (
  `RepID` varchar(10) NOT NULL,
  `ChargeID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Reps`
--

CREATE TABLE `tbl_Reps` (
  `RepID` varchar(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `RegisteredNRF` varchar(20) NOT NULL,
  `OfficeID` varchar(10) NOT NULL,
  `W2` varchar(3) NOT NULL,
  `1099` varchar(3) NOT NULL,
  `GrossComm` int(11) NOT NULL,
  `Disclosure` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_Reps`
--

INSERT INTO `tbl_Reps` (`RepID`, `FirstName`, `LastName`, `RegisteredNRF`, `OfficeID`, `W2`, `1099`, `GrossComm`, `Disclosure`, `RoleID`) VALUES
('DTH', 'David', 'Hooban', 'NRF', '34', 'No', 'Yes', 100000, 1, 1),
('GJP', 'Gerardo', 'Palermo', 'NRF', '64', 'Yes', 'Yes', 150000, 8, 5),
('MDD', 'Mike', 'DelDuca', 'Registered', '15', 'No', 'Yes', 200000, 2, 6),
('RF3', 'Roger', 'Federer', 'Registered', '21', 'Yes', 'No', 50000, 0, 10),
('SMH', 'Simona', 'Halep', 'NRF', '64', 'No', 'Yes', 0, 3, 5),
('SW4', 'Serena', 'Williams', 'Registered', '34', 'Yes', 'No', 40000, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Roles`
--

CREATE TABLE `tbl_Roles` (
  `RoleID` int(11) NOT NULL,
  `RoleDept` varchar(50) NOT NULL,
  `RoleName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_Roles`
--

INSERT INTO `tbl_Roles` (`RoleID`, `RoleDept`, `RoleName`) VALUES
(1, 'Retail', 'Registered Representative'),
(4, 'Insurance', 'Advisory Operations Specialist'),
(5, 'Trading', 'Trading Supervision Consultant'),
(6, 'Accounting', 'Financial Reporting Accountant'),
(10, 'Business Development', 'Registered Sales Assistant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_Charges`
--
ALTER TABLE `tbl_Charges`
  ADD PRIMARY KEY (`ChargeID`);

--
-- Indexes for table `tbl_EOFees`
--
ALTER TABLE `tbl_EOFees`
  ADD PRIMARY KEY (`FeeDisclosure`);

--
-- Indexes for table `tbl_Offices`
--
ALTER TABLE `tbl_Offices`
  ADD PRIMARY KEY (`OfficeID`);

--
-- Indexes for table `tbl_RepExp`
--
ALTER TABLE `tbl_RepExp`
  ADD PRIMARY KEY (`RepID`,`ChargeID`),
  ADD KEY `ChargeID` (`ChargeID`);

--
-- Indexes for table `tbl_Reps`
--
ALTER TABLE `tbl_Reps`
  ADD PRIMARY KEY (`RepID`),
  ADD KEY `OfficeIDFK` (`OfficeID`),
  ADD KEY `Role` (`RoleID`);

--
-- Indexes for table `tbl_Roles`
--
ALTER TABLE `tbl_Roles`
  ADD PRIMARY KEY (`RoleID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_RepExp`
--
ALTER TABLE `tbl_RepExp`
  ADD CONSTRAINT `tbl_repexp_ibfk_1` FOREIGN KEY (`RepID`) REFERENCES `tbl_Reps` (`RepID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_repexp_ibfk_2` FOREIGN KEY (`ChargeID`) REFERENCES `tbl_Charges` (`ChargeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Reps`
--
ALTER TABLE `tbl_Reps`
  ADD CONSTRAINT `tbl_reps_ibfk_1` FOREIGN KEY (`OfficeID`) REFERENCES `tbl_Offices` (`OfficeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reps_ibfk_2` FOREIGN KEY (`RoleID`) REFERENCES `tbl_Roles` (`RoleID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
