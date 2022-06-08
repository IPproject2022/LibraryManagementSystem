-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 01:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `employedDate` date NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `email`, `password`, `employedDate`, `firstname`, `middlename`, `lastname`) VALUES
(1, 'test@gmail.com', 'test', '2022-06-06', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` int(11) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Edition` int(10) NOT NULL,
  `Publication Year` year(4) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Shelf_num` int(255) NOT NULL,
  `Status` enum('A','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `ISBN`, `Title`, `Language`, `Category`, `Edition`, `Publication Year`, `Author`, `Shelf_num`, `Status`) VALUES
(1, '1', 'fikir eskemekabr', 'amharics', 'fictions', 5, 1990, 'daniel amdemichaels', 104, 'A'),
(2, '1', 'fikir ', 'amharic', 'fiction', 3, 1990, 'daniel amdemichael', 103, 'N'),
(3, '364748', 'oromay', 'amharic', 'fiction', 2, 2000, 'Bealu girma', 70, 'A'),
(4, '23456', 'yetekolefebt', 'amharic', 'fiction', 2, 2005, 'mhret debebe', 90, 'N'),
(5, '839349', 'biology grade 12', 'english', 'science', 5, 2001, 'MOSHE', 4, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(255) NOT NULL,
  `ISBN` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` enum('O','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donated books`
--

CREATE TABLE `donated books` (
  `DonationId` int(255) NOT NULL,
  `UsersId` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Edition` varchar(255) NOT NULL,
  `ISBN` varchar(255) NOT NULL,
  `Languge` varchar(255) NOT NULL,
  `PublicationYear` year(4) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Quantitiy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donated books`
--

INSERT INTO `donated books` (`DonationId`, `UsersId`, `Title`, `Author`, `Edition`, `ISBN`, `Languge`, `PublicationYear`, `Category`, `Quantitiy`) VALUES
(1, 1, 'alemenor', 'mehret debebe', '5th', '[value-6]', 'amharic', 1987, 'fiction', 0),
(26, 9, 'leave', 'tauren', '1', '', 'english', 2022, 'song', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eventattendees`
--

CREATE TABLE `eventattendees` (
  `username` varchar(255) NOT NULL,
  `eventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(255) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('u','p') NOT NULL,
  `schedule` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `issuedbooks`
--

CREATE TABLE `issuedbooks` (
  `ISBN` varchar(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `dateOfIssue` date NOT NULL,
  `dateOfReturn` date NOT NULL,
  `issueID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuedbooks`
--

INSERT INTO `issuedbooks` (`ISBN`, `userID`, `dateOfIssue`, `dateOfReturn`, `issueID`, `adminID`, `fine`) VALUES
('123456', 1, '2022-05-03', '2022-05-04', 1, 1, 0),
('987652', 2, '2022-05-10', '2022-05-11', 2, 1, 0),
('123456', 1, '2022-05-03', '2022-05-04', 3, 1, 0),
('987652', 2, '2022-05-10', '2022-05-11', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `requestedbooks`
--

CREATE TABLE `requestedbooks` (
  `requestID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `edition` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestedbooks`
--

INSERT INTO `requestedbooks` (`requestID`, `username`, `title`, `author`, `edition`) VALUES
(1, 'yordanos', 'oromay', 'bealu girma', 2),
(2, 'yohana', 'fikir', 'daniel amdemichael', 3);

-- --------------------------------------------------------

--
-- Table structure for table `returnedbooks`
--

CREATE TABLE `returnedbooks` (
  `ISBN` int(11) NOT NULL,
  `dateOfIssue` date NOT NULL,
  `dateOfReturn` date NOT NULL,
  `issueID` int(11) NOT NULL,
  `returnID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returnedbooks`
--

INSERT INTO `returnedbooks` (`ISBN`, `dateOfIssue`, `dateOfReturn`, `issueID`, `returnID`, `userID`, `adminID`) VALUES
(987654, '2022-05-18', '2022-05-19', 1, 1, 1, 1),
(243536, '2022-05-25', '2022-05-26', 2, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `middle name` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` int(25) NOT NULL,
  `DOB` date NOT NULL,
  `age` int(2) NOT NULL,
  `sex` enum('F','M') NOT NULL,
  `vkey` varchar(20) NOT NULL,
  `verified` enum('y','n') NOT NULL,
  `createDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `image_url` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `middle name`, `lastName`, `email`, `password`, `DOB`, `age`, `sex`, `vkey`, `verified`, `createDate`, `image_url`) VALUES
(1, 'yordanos', 'yadessa', 'benjie', 'yordi@gmail.com', 0, '2022-05-17', 21, 'F', '', 'y', '2022-06-06 14:27:23.921211', ''),
(2, 'yohana ', 'endale', 'begashaw', 'yo@endalebegashaw', 0, '0000-00-00', 21, 'F', '', 'y', '2022-06-06 14:27:23.921211', ''),
(3, '[nardos]', '[tatek]', '[kfetew]', '[nardosr@gmail.com]', 0, '0000-00-00', 0, '', '', 'y', '2022-06-06 14:27:23.921211', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donated books`
--
ALTER TABLE `donated books`
  ADD PRIMARY KEY (`DonationId`);

--
-- Indexes for table `eventattendees`
--
ALTER TABLE `eventattendees`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `issuedbooks`
--
ALTER TABLE `issuedbooks`
  ADD PRIMARY KEY (`issueID`);

--
-- Indexes for table `requestedbooks`
--
ALTER TABLE `requestedbooks`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `returnedbooks`
--
ALTER TABLE `returnedbooks`
  ADD PRIMARY KEY (`returnID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donated books`
--
ALTER TABLE `donated books`
  MODIFY `DonationId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issuedbooks`
--
ALTER TABLE `issuedbooks`
  MODIFY `issueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requestedbooks`
--
ALTER TABLE `requestedbooks`
  MODIFY `requestID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `returnedbooks`
--
ALTER TABLE `returnedbooks`
  MODIFY `returnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
