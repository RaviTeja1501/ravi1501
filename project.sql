-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 10:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msc finalyear project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Admin` varchar(255) CHARACTER SET latin2 COLLATE latin2_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin2 COLLATE latin2_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Admin`, `password`) VALUES
('Admin1', 'Test@ravi');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `selc3` varchar(255) NOT NULL,
  `Adhno` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `name`, `Fname`, `selc3`, `Adhno`, `mobile`, `email`) VALUES
(1, 'Ravi', 'teja', 'male', 2147483647, 2147483647, 'Ravi@123.com'),
(2, 'Raju', 'Narendra', 'male', 753159468, 2147483647, 'raju@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_name` int(255) NOT NULL,
  `selc4` varchar(255) NOT NULL,
  `Mandal` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `addre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `image`, `image_name`, `selc4`, `Mandal`, `village`, `addre`) VALUES
(1, 'LOGO.png', 0, 'CHITTOOR', 'Hindupur', 'muddireedy palli', '85-7-9,hindupur'),
(2, 'LOGO8.png', 0, 'KHAMMAM', 'h', 'kumdur', '85/7/69do/udayagiri');

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

CREATE TABLE `form3` (
  `id` int(11) NOT NULL,
  `selc5` varchar(255) NOT NULL,
  `place1` varchar(255) NOT NULL,
  `place2` varchar(255) NOT NULL,
  `dob1` varchar(255) NOT NULL,
  `dob2` varchar(255) NOT NULL,
  `amount` bigint(255) NOT NULL,
  `chalannumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form3`
--

INSERT INTO `form3` (`id`, `selc5`, `place1`, `place2`, `dob1`, `dob2`, `amount`, `chalannumber`) VALUES
(1, 'Quatarly', 'Dhramavaram', 'Sku', '2023-09-17', '2023-10-17', 675, '789456'),
(2, 'Quatarly', 'khaman', 'hup', '2023-09-17', '2023-11-17', 986, '');

-- --------------------------------------------------------

--
-- Table structure for table `form4`
--

CREATE TABLE `form4` (
  `id` int(11) NOT NULL,
  `iname` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `Adhno` int(255) NOT NULL,
  `distric` varchar(255) NOT NULL,
  `imandal` varchar(255) NOT NULL,
  `iaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form4`
--

INSERT INTO `form4` (`id`, `iname`, `cname`, `Adhno`, `distric`, `imandal`, `iaddress`) VALUES
(1, 'Sri krishna devaraya suniversity', 'Msc computer science', 213101026, 'Annathapur', 'ananathapur', '5-9-175,op'),
(2, 'sri sai baba degrre collge', 'Mpc', 2016895, 'khaman', 'h', '857/9/d/o');

-- --------------------------------------------------------

--
-- Table structure for table `form6`
--

CREATE TABLE `form6` (
  `id` int(11) NOT NULL,
  `secl1` varchar(255) NOT NULL,
  `secl2` varchar(255) NOT NULL,
  `sscyear` varchar(255) NOT NULL,
  `sschall` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form6`
--

INSERT INTO `form6` (`id`, `secl1`, `secl2`, `sscyear`, `sschall`, `date`) VALUES
(1, 'AP SSC', 'Regular', '2016', '16455114', '2023-10-07'),
(2, 'AP SSC', 'Regular', '2018', '147852963', '2005-02-02'),
(3, 'CBSC', 'Regular', '2015', '789456123', '2004-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sform1`
--

CREATE TABLE `sform1` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `selc4` varchar(255) NOT NULL,
  `Mandal` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `addre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sform1`
--

INSERT INTO `sform1` (`id`, `image`, `selc4`, `Mandal`, `village`, `addre`) VALUES
(1, 'java scripit.html', 'GUNTUR', 'Mandal', 'Nandala', '78-96,l nagar'),
(2, 'LOGO8.png', 'CHITTOOR', 'Mandal', 'tirupati', 'tirup[ati');

-- --------------------------------------------------------

--
-- Table structure for table `sform2`
--

CREATE TABLE `sform2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `selc3` varchar(255) NOT NULL,
  `Adhno` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sform2`
--

INSERT INTO `sform2` (`id`, `name`, `Fname`, `selc3`, `Adhno`, `mobile`, `email`) VALUES
(1, 'Rahul', 'rama', 'male', 147852369, 2147483647, 'Rahul@gmail.com'),
(2, 'Ravi', 'Sreeram', 'male', 2147483647, 2147483647, 'Sree@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sform3`
--

CREATE TABLE `sform3` (
  `id` int(255) NOT NULL,
  `secl5` text NOT NULL,
  `place1` varchar(255) NOT NULL,
  `place2` varchar(255) NOT NULL,
  `dob1` varchar(255) NOT NULL,
  `dob2` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `chalannumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sform3`
--

INSERT INTO `sform3` (`id`, `secl5`, `place1`, `place2`, `dob1`, `dob2`, `amount`, `chalannumber`) VALUES
(1, 'Quatarly', 'H', 'Anathapur', '2023-09-17', '2023-11-17', 1550, ''),
(2, 'Yearly', 'tirupati', 'pakala', '2023-09-17', '2024-09-17', 5200, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form3`
--
ALTER TABLE `form3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form4`
--
ALTER TABLE `form4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form6`
--
ALTER TABLE `form6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sform1`
--
ALTER TABLE `sform1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sform2`
--
ALTER TABLE `sform2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sform3`
--
ALTER TABLE `sform3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form3`
--
ALTER TABLE `form3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form4`
--
ALTER TABLE `form4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form6`
--
ALTER TABLE `form6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sform1`
--
ALTER TABLE `sform1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sform2`
--
ALTER TABLE `sform2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sform3`
--
ALTER TABLE `sform3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
