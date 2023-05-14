-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 10:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `make skill`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Phone_number` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Username`, `Email`, `Gender`, `Phone_number`, `Address`, `DOB`, `Password`) VALUES
(3, 'Haider', 'Haider123', 'haider@gmail.com', 'male', '01745143638', 'Demra', '2000-10-11', 'fahim');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `applications` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`ID`, `Email`, `applications`) VALUES
(2, 'kfahim228@gmail.com', '../Media/Document/Luminant Software Farm Limited.docx');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_ID` int(100) NOT NULL,
  `Course_Name` varchar(100) NOT NULL,
  `Course_Category` varchar(100) NOT NULL,
  `Course_Duration` varchar(100) NOT NULL,
  `Course_Price` varchar(100) NOT NULL,
  `Course_Details` varchar(100) NOT NULL,
  `Course_Instructor` varchar(100) NOT NULL,
  `Course_Images` varchar(1000) NOT NULL,
  `Course_Video` varchar(1000) NOT NULL,
  `Course_Rating` varchar(100) NOT NULL,
  `Course_Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_ID`, `Course_Name`, `Course_Category`, `Course_Duration`, `Course_Price`, `Course_Details`, `Course_Instructor`, `Course_Images`, `Course_Video`, `Course_Rating`, `Course_Status`) VALUES
(2, 'C++', 'CSE', '2h', '100tk', 'OOP', 'Fahim', '../Media/Image/IMG_1038.HEIC', '../Media/Video/Snapchat-1704068853.mp4', '5/5', 'open'),
(3, 'C', 'CSE', '2h', '100tk', 'OOP', 'Fahim', '../Media/Image/IMG_20230502_140250.jpg', '../Media/Video/IMG_5223.HEIC', '5/5', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `enrollcourse`
--

CREATE TABLE `enrollcourse` (
  `Id` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Course_Title` varchar(100) NOT NULL,
  `Instructor_Name` varchar(100) NOT NULL,
  `Enrollment_Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollcourse`
--

INSERT INTO `enrollcourse` (`Id`, `Username`, `Course_Title`, `Instructor_Name`, `Enrollment_Date`) VALUES
(10, ' kfahim228@gmail.com', 'C', 'Fahim', '2023-05-13 20:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Phone_number` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`Id`, `Name`, `Username`, `Email`, `Gender`, `Phone_number`, `Address`, `DOB`, `Password`) VALUES
(1, 'Md', 'Fahim2280', 'kfahim228@gmail.com', '0', '01745143638', 'Demra', '2000-10-11', 'ddddd'),
(7, 'Md', 'Fahim2281', 'kfahim228@gmail.com', '0', '01745143630', 'Demra', '2000-10-11', 'ddddd');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Phone_number` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `Username`, `Email`, `Gender`, `Phone_number`, `Address`, `DOB`, `Password`) VALUES
(11, 'Md', 'Fahim2280', 'kfahim2280@gmail.com', '0', '01745143638', 'Demra,Dhaka-1361', '2000-10-11', 'fahim'),
(14, 'Md Fahim Alam', 'Fahim2284', 'kfahim228@gmail.com', 'male', '01745143638', 'ff', '2000-10-11', 'sdddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_ID`);

--
-- Indexes for table `enrollcourse`
--
ALTER TABLE `enrollcourse`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Course_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrollcourse`
--
ALTER TABLE `enrollcourse`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
