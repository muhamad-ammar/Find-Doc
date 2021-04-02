-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 06:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `main` varchar(500) NOT NULL,
  `service1` varchar(100) NOT NULL,
  `service2` varchar(100) NOT NULL,
  `service3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`main`, `service1`, `service2`, `service3`) VALUES
('Wo got motivation of our idea from an incident; you could say. A friend of mine just migrated to other city and he could not find a suitable healthcare for himself. So, we though, why not design a website where you will have top notch doctors from each department in each and every region possible. You just need internet to visit our website and book an appointment for a doctor and rest is good.', '•	Books an <b>appointment</b> for doctor online easily in any known OR unknown area.', '• Keeping records of patients to store your <b>medical record</b> for you', '• Finding the <b>Best Doctor</b> in your area for you');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Id` varchar(255) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` time(6) NOT NULL,
  `status` binary(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `userid`, `date`, `day`, `time`, `status`) VALUES
('C-1', 'waleed122', '2001-11-22', 'Tuesday', '15:30:00.000000', 0x30),
('D-2', 'ammar12', '2001-11-22', 'Tuesday', '15:30:00.000000', 0x30),
('D-2', 'ammar12', '2004-11-22', 'Friday', '17:30:00.000000', 0x30),
('c-1', 'waleed122', '2005-11-22', 'Wednesday', '17:30:00.000000', 0x30),
('D-2', 'waleed122', '2001-11-22', 'Tuesday', '15:30:00.000000', 0x30),
('C-1', 'waleed122', '2020-05-16', 'Monday', '03:00:00.000000', 0x30),
('C-1', 'waleed122', '2020-05-31', 'Thursday', '05:00:00.000000', 0x30),
('C-1', 'waleed122', '2020-05-22', 'Monday', '03:00:00.000000', 0x30),
('C-1', 'waleed122', '2020-05-30', 'Wednesday', '04:00:00.000000', 0x30),
('C-1', 'waleed122', '2020-05-13', 'Thursday', '03:00:00.000000', 0x30),
('C-1', 'waleed122', '2021-02-20', 'Monday', '09:48:00.000000', 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `userid` varchar(255) NOT NULL,
  `faced_in` varchar(255) NOT NULL,
  `complain` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`userid`, `faced_in`, `complain`) VALUES
('ammar12', 'Exploring', '$mysqli = new mysqli(\"localhost\",\"my_user\",\"my_password\",\"my_db\");\r\n\r\n// Check connection\r\nif ($mysqli -> connect_errno) {\r\n  echo \"Failed to connect to MySQL: \" . $mysqli -> connect_error;\r\n  exit();\r\n'),
('ammar12', 'Exploring', 'PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of a HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside of the web context, such as standalone graphical applications[9] and robotic drone control.[10'),
('', '', ''),
('', '', ''),
('', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Contact` int(25) DEFAULT NULL,
  `Education` varchar(255) DEFAULT NULL,
  `Available times` timestamp NULL DEFAULT NULL,
  `Available` binary(1) NOT NULL DEFAULT '\0',
  `city` varchar(255) DEFAULT NULL,
  `specializaton` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Name`, `Email`, `Address`, `Contact`, `Education`, `Available times`, `Available`, `city`, `specializaton`, `PASSWORD`, `img`) VALUES
('askd', 'moin', 'dkas', '', 122, 'asd', '2020-05-07 20:32:21', 0x31, 'ads', '', 'dasd', 'images/nep.jpg'),
('C-1', 'Muhammad Ammar', 'ammarmuhammad992@gmail.com', 'Johar Town, Lahore, Pakistan', 223442135, 'MBBS', '2020-05-07 20:32:21', 0x01, 'Lahore', 'Cardiologist', '123', 'images/neu.jpg'),
('D-2', 'Ali', 'ali@gmailcom', 'Walton road,Lahore, Pakistan', 12341231, 'MBBS', '2020-05-14 07:06:16', 0x01, 'Lahore', 'Dermatologist', NULL, 'images/neu.jpg'),
('dasjd', 'asdsd', 'dasd', 'dasjd', 23432, 'jdsa', '2020-05-07 20:32:21', 0x31, 'dsad', 'Dermatologist', 'dsada', 'images/neu.jpg'),
('kashi', 'Kashif', 'kashif@gmail.com', '', 89078, 'BA', '0000-00-00 00:00:00', 0x31, 'Multan', '', '1234', 'images/psy.jpg'),
('mali', 'ali', 'mali@gmail.com', 'Walton', 12345, 'MMMA', '2020-05-07 20:32:21', 0x31, 'Lahore', 'Psychiatrist', '123', 'images/psy.jpg'),
('mb', 'Mubeen', 'mubeen@gmail.com', '', 89078, 'Matric', '0000-00-00 00:00:00', 0x31, 'Rawalpindi', 'Opthamalogist', '1234', 'images/gyna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Full_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Userid` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Full_Name`, `Email`, `Userid`, `Password`) VALUES
('abd', 'Abdullah', 'abd@gmail.com', '123'),
('Ammar', 'ammarmuhammad992@gmail.com', 'ammar12', '3421'),
('dasd', 'dsa', 'dasd', 'das'),
('Waleed', 'ammar.bscs18seecs@seecs.edu.pk', 'waleed122', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD KEY `DocID` (`Id`),
  ADD KEY `PatID` (`userid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `DocID` FOREIGN KEY (`Id`) REFERENCES `doctor` (`Id`),
  ADD CONSTRAINT `PatID` FOREIGN KEY (`userid`) REFERENCES `user` (`Userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
