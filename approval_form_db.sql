-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 09:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `approval_form_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `building_permit_applications`
--

CREATE TABLE `building_permit_applications` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `plotNo` varchar(20) NOT NULL,
  `buildingCategory` varchar(20) NOT NULL,
  `buildingDetails` text NOT NULL,
  `numFloors` int(11) NOT NULL,
  `electionWardNo` varchar(20) NOT NULL,
  `layout` varchar(50) NOT NULL,
  `circleDivisionName` varchar(50) NOT NULL,
  `blockNo` varchar(20) NOT NULL,
  `zoneNo` varchar(20) NOT NULL,
  `leadArchitectName` varchar(100) NOT NULL,
  `membershipNumber` varchar(50) NOT NULL,
  `expiryDate` date NOT NULL,
  `buildingDimensions` varchar(100) NOT NULL,
  `parkingArea` decimal(10,2) NOT NULL,
  `buildingHeight` decimal(10,2) NOT NULL,
  `floorArea` decimal(10,2) NOT NULL,
  `constructionType` varchar(50) NOT NULL,
  `buildingPlan` varchar(200) NOT NULL,
  `structuralDesign` varchar(200) NOT NULL,
  `electricLayout` varchar(200) NOT NULL,
  `agreementCheckbox` tinyint(1) NOT NULL,
  `status` enum('process','Eligible','NotEligible') DEFAULT 'process',
  `submissionDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building_permit_applications`
--

INSERT INTO `building_permit_applications` (`id`, `fullName`, `phoneNumber`, `uid`, `gender`, `dateOfBirth`, `address`, `pincode`, `email`, `plotNo`, `buildingCategory`, `buildingDetails`, `numFloors`, `electionWardNo`, `layout`, `circleDivisionName`, `blockNo`, `zoneNo`, `leadArchitectName`, `membershipNumber`, `expiryDate`, `buildingDimensions`, `parkingArea`, `buildingHeight`, `floorArea`, `constructionType`, `buildingPlan`, `structuralDesign`, `electricLayout`, `agreementCheckbox`, `status`, `submissionDate`) VALUES
(1, 'Samantha Johnson', '9876543210', 'XYZ98765', 'Female', '1985-08-10', '456 Park Avenue', '500001', 'samantha.johnson@example.com', 'B-456', 'Residential', 'A cozy home', 1, 'Ward-3', 'Traditional', 'South Circle', 'Block-C', 'Zone-2', 'John Smith', 'M98765', '2030-12-31', '8m x 15m', '75.25', '10.50', '120.75', 'Concrete', 'path/to/building_plan.pdf', 'path/to/structural_design.pdf', 'path/to/electric_layout.pdf', 1, 'Eligible', '2023-07-18 17:56:02'),
(2, 'Janaki Ram', '9876543210', 'XYZ67890', 'Male', '1995-08-20', '456 Park Avenue', '500001', 'janakiram@example.com', 'B-456', 'Commercial', 'A modern office building', 5, 'Ward-7', 'Contemporary', 'South Circle', 'Block-B', 'Zone-3', 'John Doe', 'M78901', '2024-11-30', '15m x 30m', '250.75', '30.25', '600.50', 'Steel', 'path/to/building_plan.pdf', 'path/to/structural_design.pdf', 'path/to/electric_layout.pdf', 1, 'process', '2023-07-18 18:57:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `building_permit_applications`
--
ALTER TABLE `building_permit_applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `building_permit_applications`
--
ALTER TABLE `building_permit_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
