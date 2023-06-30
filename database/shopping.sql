-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 06:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `Id` int(10) NOT NULL,
  `ArtistName` varchar(50) NOT NULL,
  `ArtistImage` varchar(300) NOT NULL,
  `Occupation` varchar(150) NOT NULL,
  `Aboutartist` varchar(200) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`Id`, `ArtistName`, `ArtistImage`, `Occupation`, `Aboutartist`, `Status`, `CreatedDate`) VALUES
(1, 'Harsh gujral', 'list_image-23-05-12-6751.jpg', 'Occupation', 'live show events', 1, '2023-05-12 00:00:00'),
(2, 'Anubhav bassi', 'list_image-23-05-13-3004.jpg   ', 'Stand up show', 'comedyen ', 1, '2023-05-13 00:00:00'),
(3, 'Jasspret singh', 'list_image-23-05-13-4863.jpg', 'stand up show', 'comedyen', 1, '2023-05-13 00:00:00'),
(4, 'Nazmi bandhu', 'list_image-23-05-13-1735.jpg   ', 'Kabali show live', 'the best kabali singer', 1, '2023-05-13 00:00:00'),
(5, 'Sunny tunne', 'list_image-23-05-25-7167.jpg   ', 'Occupation', 'singer ', 1, '2023-05-25 00:00:00'),
(6, 'MC Stane', 'list_image-23-05-25-1959.jpg   ', 'Occupation', 'singer Rapper', 1, '2023-05-25 00:00:00'),
(7, 'Dastaan', 'list_image-23-05-25-7844.jpg   ', 'Occupation', 'singer and Actor', 1, '2023-05-25 00:00:00'),
(8, 'Rihanna', 'list_image-23-05-25-1170.jpg   ', 'Occupation', 'Singer and writer', 1, '2023-05-25 00:00:00'),
(9, 'DLF Team', 'list_image-23-05-25-1578.jpg   ', 'Occupation', 'Punjabi dancer', 1, '2023-05-25 00:00:00'),
(10, 'Panther', 'list_image-23-05-25-4774.jpg   ', 'Occupation', 'Singer and Rapper', 1, '2023-05-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `I` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `boys student`
--

CREATE TABLE `boys student` (
  `Id` int(11) NOT NULL,
  `Name` int(10) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Roll no` mediumint(10) NOT NULL,
  `Phone` bigint(50) NOT NULL,
  `Gmail` varchar(100) NOT NULL,
  `Status` smallint(10) NOT NULL,
  `School Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Subject` varchar(150) NOT NULL,
  `Query` varchar(500) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Phone`, `Email`, `Subject`, `Query`, `Status`, `CreatedDate`) VALUES
(1, 'Mohit', 8239238239, 'mohit@gmail.com', 'India is good country', 'aksvdkas assdv asdv asdv asdv asdv asvd asvd', 1, '2023-02-15 00:00:00'),
(2, 'Kapil chauhan', 9127389218, 'kapil@gmail.com', 'India is good country', 'asdasd asdv asdv ', 1, '2023-02-15 00:00:00'),
(3, 'monu', 3498729834, 'monu@gmail.com', 'aksdcjsasdc', 'asdas asdc asdc asc', 1, '2023-02-15 00:00:00'),
(4, 'rahul', 9990988979, 'rahul@gmail.com', 'I am a student', ' the country is good', 1, '2023-02-16 00:00:00'),
(5, 'sumit', 8082901001, 'sumit@gmil.com', 'india is devlope country', 'yes this  is query', 1, '2023-02-16 00:00:00'),
(6, 'sourabh', 9820988979, 'sourabh@gmail.com', 'I am a  BCA student', 'jlj ahhh asdh hkjl asdf hjkl asdf hjkl', 1, '2023-02-16 00:00:00'),
(7, 'kunal', 7081909980, 'kunal@gamil.com', 'i am indain', 'jkjka jkjka akkkka', 1, '2023-02-16 00:00:00'),
(8, 'khushi', 8082909978, 'khushi@gmail.com', 'today weather is good', 'sllakk akask kakslk sklak', 1, '2023-02-16 00:00:00'),
(9, 'kapil', 0, '', '', '', 1, '2023-02-22 00:00:00'),
(10, 'kapil', 0, 'kapil@gmail.com', '', '', 1, '2023-02-22 00:00:00'),
(11, '', 0, '', '', '', 1, '2023-02-22 00:00:00'),
(12, 'rohit', 8919019080, 'rohit@gamil.com', 'iam iti student', 'ajk ahahl asdf hjlkl asdf hjl asdf hjkl asdfahjkl', 1, '2023-02-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Education` varchar(20) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `Date` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`Id`, `Name`, `Education`, `phone`, `Status`, `gmail`, `Date`) VALUES
(1, 'priya', 'BA', 8678790656, '1', 'nisha@gmail.com', 2021),
(2, 'Ananya', 'BCA', 7584908764, '1', 'nisha@gmail.com', 2020),
(3, 'shivam', 'MA', 9084908764, '1', 'nisha@gmail.com', 2019),
(4, 'Anshi', 'BA', 6784908764, '1', 'nisha@gmail.com', 2018),
(5, 'Lata', 'BED', 9864908764, '1', 'nisha@gmail.com', 2017),
(6, 'Annu', 'BCA', 7584907894, '1', 'nisha@gmail.com', 2016),
(7, 'Amit', 'phd', 9990889011, '1', 'nisha@gmail.com', 2015),
(8, 'Sumit', 'Btech', 9990887070, '1', 'nisha@gmail.com', 2014),
(9, 'Rohit', 'bca', 9990886078, '1', 'nisha@gmail.com', 2013),
(10, 'Sourabh', '12th', 8890889011, '1', 'nisha@gmail.com', 2012),
(11, 'Nitin', 'mca', 9990999012, '1', 'nisha@gmail.com', 2011),
(12, 'Partham', '11th', 8890889011, '1', 'nisha@gmail.com', 2010),
(14, 'Mohan', 'b.tech', 9090980980, '1', 'nisha@gmail.com', 2023),
(15, 'vishal', 'LLB', 9990999099, '1', 'nisha@gmail.com', 2000),
(16, 'yash', 'bba', 9990991123, '1', 'nisha@gmail.com', 2001),
(17, 'badal', '12th', 9990222099, '1', 'nisha@gmail.com', 2002),
(18, 'khushi', '12th', 8750999099, '1', 'nisha@gmail.com', 2003),
(19, 'ankit', 'BA', 7290999099, '1', 'nisha@gmail.com', 1990),
(20, 'aman', 'bca', 9990999777, '1', 'nisha@gmail.com', 1999),
(21, 'nishant', 'phd', 9990999787, '1', 'nisha@gmail.com', 2001),
(22, 'deepak', 'ma', 9990991122, '1', 'nisha@gmail.com', 1992),
(23, 'sonu', '10th', 8890999099, '1', 'nisha@gmail.com', 2006),
(24, 'kajal', 'bca', 9710999099, '1', 'nisha@gmail.com', 2000),
(25, 'mohit', '10th', 7878098702, '1', 'nisha@gmail.com', 2021),
(26, 'nisha', '10th', 9719027190, '1', 'nisha@gmail.com', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Number` bigint(20) NOT NULL,
  `Gmail` varchar(50) NOT NULL,
  `Addresh` varchar(100) NOT NULL,
  `Education` varchar(10) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `Date` bigint(10) NOT NULL,
  `Year` bigint(10) NOT NULL,
  `Status` int(10) NOT NULL,
  `Createddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `Name`, `Number`, `Gmail`, `Addresh`, `Education`, `Month`, `Date`, `Year`, `Status`, `Createddate`) VALUES
(1, 'kavita', 7022809756, 'kavita@gmail.com', 'gulab vatika loni', 'on', 'January', 23, 1980, 1, '2023-02-23'),
(2, 'sourabh', 9821328097, 'sourabh@gmail.com', 'h-189 jawar nagar loni', 'on', 'January', 23, 1980, 1, '2023-02-24'),
(3, 'amit', 9990888088, 'amit@gmail.com', 'shanti nagar loni', 'on', 'March', 23, 1980, 1, '2023-02-24'),
(4, 'nitin', 9229019287, 'nitin@gmail.com', 'shiv vihar', '', 'July', 23, 2003, 1, '2023-02-24'),
(5, 'kapil', 96509987098, 'kapil@gmail.com', 'jawar nagar loni', '', 'Jun', 23, 1992, 1, '2023-02-24'),
(6, 'shanvi', 9822328097, 'shanvi@gmail.com', 'karawal nagar delhi', '', 'November', 23, 2004, 1, '2023-02-24'),
(7, 'nikhil', 9911036050, 'sk@gmail.com', 'new york america', '', 'May', 23, 1994, 1, '2023-02-24'),
(8, 'Anshi', 9922104090, 'anshi@gmail.com', 'e-190 jawhar nagar loni', '', 'Jun', 23, 2004, 1, '2023-02-25'),
(9, 'Ashu', 8232709910, 'ashu@gmail.com', 'shanti nagar loni', '', 'September', 23, 2005, 1, '2023-02-25'),
(10, 'mohit', 9911099301, 'mohit@gmail.com', 'jawhar nagar loni gzb', '', 'Jun', 23, 2004, 1, '2023-02-25'),
(11, 'Aradhya', 9821328080, 'aradhya@gmail.com', 'prem vihar karwal  nagar delhi ', '', 'August', 23, 2006, 1, '2023-02-26'),
(12, 'vishal', 8809918092, 'vishal@gmail.com', 'mojpur delhi', '', 'May', 23, 2003, 1, '2023-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Id` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `CustomerId` mediumint(20) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Id`, `Address`, `CustomerId`, `state`, `city`, `pincode`) VALUES
(1, 'h-189 jawhar nagar loni', 1, 'uttar prdesh', 'Gaziyabad', 201102),
(2, 'g-109 Sarojni nagar delhi', 2, 'uttar prdesh', 'Gaziyabad', 101301),
(3, 's-229 julab vatika loni', 3, 'uttar prdesh', 'Gaziyabad', 411105),
(4, 'i-189 shiv vihar loni', 4, 'uttar prdesh', 'Gaziyabad', 800900),
(5, 'H-180 jawar nagar loni', 5, 'uttar prdesh', 'Gaziyabad', 200112),
(6, 'vikas kung loni', 6, 'uttar prdesh', 'Gaziyabad', 200110),
(7, 'indra puri loni', 7, 'uttar prdesh', 'Gaziyabad', 1101),
(8, 'balram nagar', 8, 'uttar prdesh', 'Gaziyabad', 81011),
(9, 'shanti nagar loni', 9, 'uttar prdesh', 'Gaziyabad', 111010),
(10, 'bulab vatika loni', 10, 'uttar prdesh', 'Gaziyabad', 221001),
(11, 'shiv vihar loni', 11, 'uttar prdesh', 'Gaziyabad', 100001),
(12, 'gokal puri ', 12, 'uttar prdesh', 'Gaziyabad', 420110),
(13, 'ashok nagar', 13, 'uttar prdesh', 'Gaziyabad', 81011),
(14, 'meet nagar ', 14, 'uttar prdesh', 'Gaziyabad', 111010),
(15, 'shadhra delhi', 15, 'uttar prdesh', 'Gaziyabad', 221001),
(16, 'yamuna vihar', 16, 'uttar prdesh', 'Gaziyabad', 100001),
(17, 'nand nagari delhi', 17, 'uttar prdesh', 'Gaziyabad', 222111);

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `Id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Gmail` varchar(50) NOT NULL,
  `Exprience` varchar(80) NOT NULL,
  `Skil` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Discription` varchar(100) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`Id`, `Name`, `Phone`, `Gmail`, `Exprience`, `Skil`, `Title`, `Discription`, `Company`, `Status`, `CreatedDate`) VALUES
(1, 'Sourabh kashyap', 9821328097, 'sourabhkashyap@gmail.com', 'I have 2 year exprience', 'HTML CSS Desgining and java script', 'your comapny is very good', 'My postion in the company is that of employe', 'SK group (noida)', 1, '2023-03-02 00:00:00'),
(2, 'sumit', 8090081190, 'sumit@gmail.com', 'i have 2 year exprience', 'Html css Desgin', 'your comapny exellent', 'i am employe', 'sk group', 1, '0000-00-00 00:00:00'),
(3, 'Nitin Rajput', 9990081190, 'nitin@gmail.com', 'i have 2 year exprience', 'Html css Desgin', 'your comapny exellent', 'i am employe', 'Facbook (noida)', 1, '0000-00-00 00:00:00'),
(4, 'Shivam', 890991090, 'shivam@gmail.com', 'i have 3 year exprience', 'Html css Desgin and Jawa script', 'your comapny exellent', 'i am employe', 'Facbook (noida)', 1, '0000-00-00 00:00:00'),
(5, 'kajal', 9009129291, 'kajal@gmail.com', 'I have 1 year exprience', 'Desgin and Jawa script', 'your compnay is nice', 'i am  employe', 'wsv desgin', 1, '2023-03-03 00:00:00'),
(6, 'Vishal', 8991909091, 'vishal@gmail.com', 'i have 2 year exprience', 'html css and java script', 'your company is good', 'i am employe', 'Goggle', 1, '2023-03-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE `front` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Gmail` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Pincode` bigint(20) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `SchoolId` bigint(20) NOT NULL,
  `Number` bigint(20) NOT NULL,
  `Gmail` varchar(50) NOT NULL,
  `SchoolName` varchar(100) NOT NULL,
  `Status` mediumint(10) NOT NULL,
  `Createddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Id`, `Name`, `SchoolId`, `Number`, `Gmail`, `SchoolName`, `Status`, `Createddate`) VALUES
(1, 'amit kumar', 20192211, 9099808182, 'amit@gmail.com', 'ved mamorial school', 1, '0000-00-00 00:00:00'),
(2, 'sudesh yadav', 23232322, 90190992011, 'sudesh@gmail.com', 'ved school', 1, '2023-02-22 00:00:00'),
(3, 'sourabh kashyap', 2019820920, 9990999887, 'sourabh@gmail.com', 'Divya bharti school', 1, '2023-02-22 00:00:00'),
(4, 'kiran rani', 2019820920, 9990999887, 'kiran@gmail.com', 'Divya bharti school', 1, '2023-02-22 00:00:00'),
(5, 'mohit', 2019820920, 9990999887, 'mohit@gmail.com', 'Divya bharti school', 1, '2023-02-22 00:00:00'),
(6, 'khushi', 2120920292, 8750991661, 'khushi@gmail.com', 'govt girls school', 1, '2023-02-22 00:00:00'),
(7, 'kumkum', 2120920292, 8750991661, 'kumkum@gmail.com', 'govt girls school', 1, '2023-02-22 00:00:00'),
(8, 'nitin', 21221221, 9650511230, 'nitin@gmial.com', 'gokalpuri school', 1, '2023-02-22 00:00:00'),
(9, 'shagun', 138008100, 89190909821, 'shagun@gmail.com', 'govt girls', 1, '2023-02-27 00:00:00'),
(10, 'Nikhil', 8779779111, 9099281911, 'nikhil@gmail.com', 'govt boys school', 1, '2023-02-27 00:00:00'),
(11, 'harsh', 12797719, 9019918111, 'harsh@gmail.com', 'shanti nikatan school', 1, '2023-02-27 00:00:00'),
(12, 'harsh', 12797719, 9019918111, 'harsh@gmail.com', 'shanti nikatan school', 1, '2023-02-27 00:00:00'),
(13, 'partham', 20109192, 88109920901, 'partham@gmail.com', 'shant devra school', 1, '2023-02-28 00:00:00'),
(14, 'Anjali', 12019091, 892019892, 'anjali@gmail.com', 'bovt girls senior school', 1, '2023-02-28 00:00:00'),
(15, 'priya', 323797297, 9982842033, 'priya@gmail.com', 'M.S.D public school', 1, '2023-02-28 00:00:00'),
(16, 'sunny', 7989990122, 9099100192, 'sunny@gmail.com', 'govt boys school', 1, '2023-03-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lis`
--

CREATE TABLE `lis` (
  `Id` int(10) NOT NULL,
  `CategoryName` varchar(50) NOT NULL,
  `CategoryFile` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lis`
--

INSERT INTO `lis` (`Id`, `CategoryName`, `CategoryFile`, `Status`, `CreatedDate`) VALUES
(1, 'Movies', 'category-23-03-25-7228.jpg', 1, '2023-03-25 00:00:00'),
(2, 'Music', 'category-23-03-25-8628.jpg', 1, '2023-03-25 00:00:00'),
(3, 'Kids', 'category-23-03-25-8530.jpg', 1, '2023-03-25 00:00:00'),
(4, 'Comedy', 'category-23-03-25-1624.jpg', 1, '2023-03-25 00:00:00'),
(5, 'Sports', 'category-23-03-25-4505.jpg', 1, '2023-03-25 00:00:00'),
(6, 'Fun show', 'category-23-03-25-9422.jpg', 1, '2023-03-25 00:00:00'),
(7, 'Buzz', 'category-23-03-25-3373.jpg', 1, '2023-03-25 00:00:00'),
(8, 'Raping shows', 'category-23-03-25-5567.jpg', 1, '2023-03-25 00:00:00'),
(9, 'Children', 'category-23-03-25-5343.jpg', 1, '2023-03-25 00:00:00'),
(10, 'Stand-up comedy', 'category-23-03-29-1914.jpg', 1, '2023-03-29 00:00:00'),
(11, 'singing show', 'category-23-03-29-6202.jpg', 1, '2023-03-29 00:00:00'),
(12, 'child show', 'category-23-03-29-7156.jpg', 1, '2023-03-29 00:00:00'),
(13, 'movie show', 'category-23-03-29-5073.jpg', 1, '2023-03-29 00:00:00'),
(14, 'carton show', 'category-23-03-29-6245.jpg', 1, '2023-03-29 00:00:00'),
(15, 'Film show', 'category-23-03-29-6497.jpg', 1, '2023-03-29 00:00:00'),
(16, 'Crime show', 'category-23-03-29-6120.jpg', 1, '2023-03-29 00:00:00'),
(17, 'family show', 'category-23-03-29-8545.jpg', 1, '2023-03-29 00:00:00'),
(18, 'cricket show', 'category-23-03-29-4678.jpg', 1, '2023-03-29 00:00:00'),
(19, 'Jai hind', 'category-23-03-29-7666.jpg', 1, '2023-03-29 00:00:00'),
(20, 'Animation show', 'category-23-03-29-9208.jpg', 1, '2023-03-29 00:00:00'),
(21, 'slider', 'category-23-04-12-8229.jpg', 1, '2023-04-12 00:00:00'),
(22, 'two', 'category-23-04-12-5224.jpg', 1, '2023-04-12 00:00:00'),
(23, 'three', 'category-23-04-12-6243.jpg', 1, '2023-04-12 00:00:00'),
(24, 'four', 'category-23-04-15-8531.jpg', 1, '2023-04-15 00:00:00'),
(25, 'five', 'category-23-04-15-4207.jpg', 1, '2023-04-15 00:00:00'),
(26, 'six', 'category-23-04-15-3022.jpg', 1, '2023-04-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `Id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Gmail` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Pincode` bigint(20) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Id`, `Name`, `Phone`, `Gmail`, `Password`, `City`, `State`, `Pincode`, `Status`, `CreatedDate`) VALUES
(1, 'aman', 8032109980, 'aman@gmail.com', '', 'Merut', 'uttar pardesh', 901801, 1, '2023-03-17 00:00:00'),
(2, 'sudesh', 7290116701, 'sudesh@gmail.com', '', 'loni', 'uttar pardesh', 201102, 1, '2023-03-17 00:00:00'),
(3, 'nikhil', 9012708092, 'nikhil@gmail.com', '', 'loni ', 'uttar pardesh', 201901, 1, '2023-03-17 00:00:00'),
(4, 'shivam', 8023012500, 'shivam@gmail.com', '', 'noida', 'uttar pardesh', 510900, 1, '2023-03-17 00:00:00'),
(5, 'himanshu', 9080706050, 'himanshu@gmail.com', '', 'loni', 'uttar pardesh', 400200, 1, '2023-03-17 00:00:00'),
(6, 'kuldeep', 8740801819, 'aman@gmail.com', '', 'loni', 'uttar pardesh', 801811, 1, '2023-03-17 00:00:00'),
(7, 'sonu', 7010998032, 'sonu@gmail.com', '', 'loni', 'uttar pardesh ', 201102, 1, '2023-03-17 00:00:00'),
(8, 'nitin', 9650991280, 'nitin@gmail.com', '', 'Loni', 'Uttar Pardesh', 201102, 1, '2023-03-17 00:00:00'),
(9, 'sumit', 880901278, 'sumit@gmail.com', '', 'loni', 'uttar parders', 201102, 1, '2023-03-17 00:00:00'),
(10, 'khushi', 7108091909, 'khushi@gmail.com', '', 'loni', 'uttar pardes', 301102, 1, '2023-03-22 00:00:00'),
(11, 'Ayush', 8130200789, 'ayush@gmail.com', '', 'Gaziyabad', 'Uttar pardesh', 701802, 1, '2023-04-19 00:00:00'),
(12, 'neha', 9089237890, 'neha@gmail.com', 'neha@123', 'delhi', 'Delhi', 110094, 1, '2023-04-19 00:00:00'),
(13, 'soni', 9990999012, 'soni@gmail.com', 'soni123', 'loni', 'uttar pardesh', 201102, 1, '2023-04-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Id` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `DOB` datetime NOT NULL,
  `UserId` bigint(20) NOT NULL,
  `PinCode` bigint(20) NOT NULL,
  `Photo` varchar(150) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Id`, `Address`, `City`, `State`, `DOB`, `UserId`, `PinCode`, `Photo`, `Status`, `CreatedDate`) VALUES
(1, 'G-90 East Jawahar Nagar', 'Ghaziabad', 'Uttar Pradesh', '1992-01-25 00:00:00', 1, 201102, '', 1, '2023-02-12 00:00:00'),
(2, 'E-156 East Jawahar Nagar', 'Ghaziabad', 'Uttar Pradesh', '1990-05-12 00:00:00', 2, 201102, '', 1, '2023-02-12 00:00:00'),
(3, 'I-190 East Jawahar Nagar', 'Ghaziabad', 'Uttar Pradesh', '1991-03-15 00:00:00', 5, 201102, '', 1, '2023-02-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `Addresh` int(11) NOT NULL,
  `State` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `pincode` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Id` int(10) NOT NULL,
  `CategoryId` varchar(50) NOT NULL,
  `EventsName` varchar(50) NOT NULL,
  `EventsDate` datetime NOT NULL,
  `EventsPrice` bigint(50) NOT NULL,
  `ListImage` varchar(100) NOT NULL,
  `DetailsImage` varchar(100) NOT NULL,
  `Discription` varchar(100) NOT NULL,
  `Aboutus` varchar(100) NOT NULL,
  `Artistid` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Id`, `CategoryId`, `EventsName`, `EventsDate`, `EventsPrice`, `ListImage`, `DetailsImage`, `Discription`, `Aboutus`, `Artistid`, `Status`, `CreatedDate`) VALUES
(1, '1', 'Astitva - The Youth Festival', '0000-00-00 00:00:00', 1200, 'list_image-23-04-04-8717.jpg   ', 'list_image-23-04-04-8030.jpg', 'Welcome to Astitva, the biggest youth festival in the country! This event is all about empowering in', 'Welcome to Astitva, the biggest youth festival in the country! This event is all about empowering in', '3,6,9', 1, '2023-04-04 00:00:00'),
(2, '1', 'Sagar Wali Qawwali- Biggest Open Air Sufi Concert', '2023-05-10 00:00:00', 1200, 'list_image-23-04-04-3444.jpg   ', 'list_image-23-04-04-3444.jpg', 'Inspired by the actual files of Father Gabriele Amorth, Chief Exorcist of the Vatican (Academy Award', 'The Pope`s Exorcist follows Amorth as he investigates a young boys terrifying possession and ends up', '', 1, '2023-04-04 00:00:00'),
(3, '1', 'Tribute to Linkin Park ft. Anthracite', '0000-00-00 00:00:00', 1499, 'list_image-23-04-10-4233.jpg   ', 'list_image-23-04-10-4233.jpg', 'The murder investigation of a young man , takes an unexpected turn when the cops discover that the p', 'The murder investigation of a young man , takes an unexpected turn when the cops discover that the p', '', 1, '2023-04-10 00:00:00'),
(4, '1', 'Sunny Tunes Ft. Soham Mallick', '2023-05-10 00:00:00', 1100, 'list_image-23-04-12-4600.jpg   ', 'list_image-23-04-12-4600.jpg', 'Madness ensues when a `player` in the world of romantic relationships finds a girl who`s a worthy op', 'Madness ensues when a `player` in the world of romantic relationships finds a girl who`s a worthy op', '', 1, '2023-04-12 00:00:00'),
(5, '1', 'The super mario\'s Bros Movies', '0000-00-00 00:00:00', 1500, 'list_image-23-04-12-9806.jpg', 'list_image-23-04-12-9806.jpg', 'Adventure/Animation', 'Adventure/Animation', '', 1, '2023-04-12 00:00:00'),
(6, '1', 'Basti Ka Hasti - MC- Stan India Tour 23 - Delhi', '0000-00-00 00:00:00', 1800, 'Screenshot 2023-03-25 190414.jpg   ', 'list_image-23-04-12-6833.jpg', 'Basti Ka Hasti fame, After winning the Big Boss 2023, MC Stan is coming to your city! He will be per', 'Basti Ka Hasti fame, After winning the Big Boss 2023, MC Stan is coming to your city! He will be per', '', 1, '2023-04-12 00:00:00'),
(7, '1', 'Dastaan-e-Ghazal - Delhi', '2023-05-11 00:00:00', 1100, 'list_image-23-04-12-8338.jpg   ', 'list_image-23-04-12-8338.jpg', 'Dastaan -E-Ghazal, an event conceptualized by Deewan-E-Khaas is coming to four major cities in India', 'Dastaan -E-Ghazal, an event conceptualized by Deewan-E-Khaas is coming to four major cities in India', '', 1, '2023-04-12 00:00:00'),
(8, '1', 'Tribute to Rihanna, Dua Lipa & The Weeknd', '0000-00-00 00:00:00', 1200, 'list_image-23-04-12-2396.jpg   ', 'list_image-23-04-12-2396.jpg', 'Catch supremely talented SEJAL MORRIS COLLECTIVE performing live and paying homage to our favourite ', 'Catch supremely talented SEJAL MORRIS COLLECTIVE performing live and paying homage to our favourite ', '', 1, '2023-04-12 00:00:00'),
(9, '1', 'DLF Folk Festival\' 2023', '2023-05-05 00:00:00', 1400, 'list_image-23-04-12-2040.jpg   ', 'list_image-23-04-12-2040.jpg', 'Owing to the recent conditions surrounding the COVID – 19 pandemic, as a pre-condition to gaining ac', 'Owing to the recent conditions surrounding the COVID – 19 pandemic, as a pre-condition to gaining ac', '', 1, '2023-04-12 00:00:00'),
(10, '1', 'Desi Hip Hop Night FT PANTHER', '0000-00-00 00:00:00', 1200, 'list_image-23-04-12-9863.jpg      ', 'list_image-23-04-12-9863.jpg', 'An abandoned girl was found by Sage Kanva in the forest. He names her Shakuntala and raises her as h', 'An abandoned girl was found by Sage Kanva in the forest. He names her Shakuntala and raises her as h', '', 1, '2023-04-12 00:00:00'),
(11, '3', 'Kantara(Tulu)', '0000-00-00 00:00:00', 800, 'list_image-23-04-13-6046.jpg\n', 'list_image-23-04-13-2039.jpg', 'After a 500-pound black bear consumes a significant amount of cocaine and embarks on a drug-fueled r', 'After a 500-pound black bear consumes a significant amount of cocaine and embarks on a drug-fueled r', '', 1, '2023-04-13 00:00:00'),
(12, '3', 'Cocania Bear', '0000-00-00 00:00:00', 399, 'list_image-23-04-13-5342.jpg\n', 'list_image-23-04-13-6442.jpg', 'After a 500-pound black bear consumes a significant amount of cocaine and embarks on a drug-fueled r', 'After a 500-pound black bear consumes a significant amount of cocaine and embarks on a drug-fueled r', '', 1, '2023-04-13 00:00:00'),
(13, '3', 'A Man Called OTTO', '0000-00-00 00:00:00', 799, 'list_image-23-04-13-3196.jpg\n', 'list_image-23-04-13-3281.jpg', 'DSU Steve Wilkins reopens two unsolved murder cases. Forensic link the crimes to a string of burglar', 'DSU Steve Wilkins reopens two unsolved murder cases. Forensic link the crimes to a string of burglar', '', 1, '2023-04-13 00:00:00'),
(14, '3', 'Babylon', '0000-00-00 00:00:00', 788, 'list_image-23-04-13-6776.jpg\n', 'list_image-23-04-13-5570.jpg', 'Decadence, depravity and outrageous excess lead to the rise and fall of several ambitious dreamers i', 'Decadence, depravity and outrageous excess lead to the rise and fall of several ambitious dreamers i', '', 1, '2023-04-13 00:00:00'),
(15, '3', 'Batman: The Doom That Came To Gotham', '0000-00-00 00:00:00', 1000, 'list_image-23-04-13-1318.jpg\n', 'list_image-23-04-13-5554.jpg', 'Decadence, depravity and outrageous excess lead to the rise and fall of several ambitious dreamers i', 'Decadence, depravity and outrageous excess lead to the rise and fall of several ambitious dreamers i', '', 1, '2023-04-13 00:00:00'),
(16, '3', 'Cosmos', '0000-00-00 00:00:00', 1200, 'list_image-23-04-13-2819.jpg\n', 'list_image-23-04-13-4512.jpg', 'Decadence, depravity and outrageous excess lead to the rise and fall of several ambitious dreamers i', 'Decadence, depravity and outrageous excess lead to the rise and fall of several ambitious dreamers i', '', 1, '2023-04-13 00:00:00'),
(17, '3', 'Missing', '0000-00-00 00:00:00', 1100, 'list_image-23-04-13-4067.jpg\n', 'list_image-23-04-13-1114.jpg', 'When her mother disappears while on vacation in Colombia with her new boyfriend, June creatively use', 'When her mother disappears while on vacation in Colombia with her new boyfriend, June creatively use', '', 1, '2023-04-13 00:00:00'),
(18, '3', 'The Pembrokeshire Murders', '0000-00-00 00:00:00', 799, 'list_image-23-04-13-2538.jpg\n', 'list_image-23-04-13-8680.jpg', 'DSU Steve Wilkins reopens two unsolved murder cases. Forensic link the crimes to a string of burglar', 'DSU Steve Wilkins reopens two unsolved murder cases. Forensic link the crimes to a string of burglar', '', 1, '2023-04-13 00:00:00'),
(19, '3', 'I Say The Devel', '0000-00-00 00:00:00', 1400, 'list_image-23-04-13-8251.jpg\n', 'list_image-23-04-13-1476.jpg', 'DSU Steve Wilkins reopens two unsolved murder cases. Forensic link the crimes to a string of burglar', 'DSU Steve Wilkins reopens two unsolved murder cases. Forensic link the crimes to a string of burglar', '', 1, '2023-04-13 00:00:00'),
(20, '4', 'Jo Bolta Hai Wohi Hota Hai Ft. Harsh Gujral', '2023-04-30 00:00:00', 799, 'list_image-23-04-13-7780.jpg\n', 'list_image-23-04-13-3159.jpg', 'The Laugh store:Vegas Mall Delhi', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get', '', 1, '2023-04-13 00:00:00'),
(21, '4', 'Oh Hello! By Rahul Dua - The Final Show', '0000-00-00 00:00:00', 800, 'list_image-23-04-13-5790.jpg\n', 'list_image-23-04-13-6142.jpg', 'Rahul Dua, one of India’s topmost stand-comedians, carries a lot of weight on his head. That’s becau', 'Rahul Dua, one of India’s topmost stand-comedians, carries a lot of weight on his head. That’s becau', '', 1, '2023-04-13 00:00:00'),
(22, '4', 'With Love, Jaspreet. A standup comedy show', '0000-00-00 00:00:00', 1000, 'list_image-23-04-13-9928.jpg\n', 'list_image-23-04-13-8032.jpg', 'The Laugh store:Vegas mall Delhi', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get', '', 1, '2023-04-13 00:00:00'),
(23, '4', 'CLARITY feat. Anshu Mor - India Tour', '0000-00-00 00:00:00', 999, 'list_image-23-04-13-9891.jpg   ', 'list_image-23-04-13-4047.jpg', 'CLARITY is a hilarious new standup comedy special from Anshu Mor, where in his inimitable style of o', 'CLARITY is a hilarious new standup comedy special from Anshu Mor, where in his inimitable style of o', '', 1, '2023-04-13 00:00:00'),
(24, '4', 'Gourav Kapoor Live', '0000-00-00 00:00:00', 1100, 'list_image-23-04-13-6808.jpg\n', 'list_image-23-04-13-4127.jpg', 'Come and enjoy the super relatable and super funny, Gaurav Kapoor in his live show. One of the funni', 'Come and enjoy the super relatable and super funny, Gaurav Kapoor in his live show. One of the funni', '', 1, '2023-04-13 00:00:00'),
(25, '4', 'Manik`s Day Out', '0000-00-00 00:00:00', 1499, 'list_image-23-04-14-3203.jpg\n', 'list_image-23-04-14-3357.jpg', 'Come and enjoy the super relatable and super funny, Gaurav Kapoor in his live show. One of the funni', 'Come and enjoy the super relatable and super funny, Gaurav Kapoor in his live show. One of the funni', '', 1, '2023-04-14 00:00:00'),
(26, '4', 'Abhishek Walla', '0000-00-00 00:00:00', 899, 'list_image-23-04-14-6481.jpg\n', 'list_image-23-04-14-4190.jpg', 'nirman vihar Dekhi V3s mall', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get', '', 1, '2023-04-14 00:00:00'),
(27, '4', 'S-Blue sky', '0000-00-00 00:00:00', 1100, 'list_image-23-04-14-9615.jpg\n', 'list_image-23-04-14-1503.jpg', 'CP Delhi: Mall', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get', '', 1, '2023-04-14 00:00:00'),
(28, '4', 'Pratyush Chaubey comedyen', '0000-00-00 00:00:00', 899, 'list_image-23-04-14-3571.jpg\n', 'list_image-23-04-14-5920.jpg', '	Zoro The Luxuri Night Club: Gurugaon', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get', '', 1, '2023-04-14 00:00:00'),
(29, '4', 'Nishant Tanwar', '0000-00-00 00:00:00', 799, 'list_image-23-04-14-1801.jpg\n', 'list_image-23-04-14-3935.jpg', 'Tilak nagar Delhi', 'It takes exemplary courage to sit in the first two rows of a Harsh Gujral`s show because he will get', '', 1, '2023-04-14 00:00:00'),
(30, '2', 'Music show', '0000-00-00 00:00:00', 899, 'list_image-23-04-15-8778.jpg\n', 'list_image-23-04-15-8105.jpg', 'Sunny Tunes Ft. Sai & Vinod', 'Atma Ram Mansion, Connaught Circus, Showroom No 1 GF FF SF with Respective Mezzanines, Delhi, NCR 11', '', 1, '2023-04-15 00:00:00'),
(31, '2', 'music events', '0000-00-00 00:00:00', 1100, 'list_image-23-04-15-2507.jpg\n', 'list_image-23-04-15-6353.jpg', 'The Boys song', 'CP Delhi', '', 1, '2023-04-15 00:00:00'),
(32, '2', 'Music events', '0000-00-00 00:00:00', 999, 'list_image-23-04-17-4066.jpg\n', 'list_image-23-04-17-9194.jpg', 'Noida sector 61', 'etc', '', 1, '2023-04-17 00:00:00'),
(33, '2', 'Raping song events', '0000-00-00 00:00:00', 1100, 'list_image-23-04-17-8704.jpg\n', 'list_image-23-04-17-4587.jpg', 'singer: Raftar & Krishna', '', '', 1, '2023-04-17 00:00:00'),
(34, '2', 'Old music show', '0000-00-00 00:00:00', 1499, 'list_image-23-04-17-2769.jpg\n', 'list_image-23-04-17-6570.jpg', 'Sagar waha singer', 'etc', '', 1, '2023-04-17 00:00:00'),
(35, '5', 'Rajasthan Royal and Gujrat Titans', '0000-00-00 00:00:00', 1900, 'list_image-23-04-18-2677.jpg   ', 'list_image-23-04-18-4315.jpg', 'Swami Mansingh Stadum : Jaipur', 'Don\'t miss out on the action as the Rajasthan Royals take on the Lucknow Super Giants in a match tha', '', 1, '2023-04-18 00:00:00'),
(36, '5', 'Rajasthan Royal and king eleven punjab', '0000-00-00 00:00:00', 3999, 'list_image-23-04-18-5540.jpg   ', 'list_image-23-04-18-4774.jpg', 'Swami mansingh stadum :jaipur', 'Book tickets for Kolkata Knight Riders vs Punjab Kings IPL 2023 cricket for 8 May 2023 at Eden Garde', '', 1, '2023-04-18 00:00:00'),
(37, '5', 'Rajasthan Royal and mumbai indian', '0000-00-00 00:00:00', 2999, 'list_image-23-04-18-4139.jpg   ', 'list_image-23-04-18-8652.jpg', 'Swami mansingh stadium : jaipur', 'Book tickets for Kolkata Knight Riders vs Punjab Kings IPL 2023 cricket for 8 May 2023 at Eden Garde', '', 1, '2023-04-18 00:00:00'),
(38, '5', 'kolkata knightt rider and punjab kings', '0000-00-00 00:00:00', 4999, 'list_image-23-04-18-5713.jpg   ', 'list_image-23-04-18-9319.jpg', 'swami mansingh stadium jaipur', 'Book tickets for Kolkata Knight Riders vs Punjab Kings IPL 2023 cricket for 8 May 2023 at Eden Garde', '', 1, '2023-04-18 00:00:00'),
(39, '5', 'kolkata knight rider and rajasthan royal', '0000-00-00 00:00:00', 10000, 'list_image-23-04-18-9315.jpg   ', 'list_image-23-04-18-9221.jpg', 'swami mansingh stadium jaipur', 'Book tickets for Kolkata Knight Riders vs Punjab Kings IPL 2023 cricket for 8 May 2023 at Eden Garde', '', 1, '2023-04-18 00:00:00'),
(40, '5', 'kolkata knight rider and punjab kings', '0000-00-00 00:00:00', 9999, 'list_image-23-04-18-4038.jpg   ', 'list_image-23-04-18-9531.jpg', 'swami mansingh stadium jaipur', 'Book tickets for Kolkata Knight Riders vs Punjab Kings IPL 2023 cricket for 8 May 2023 at Eden Garde', '', 1, '2023-04-18 00:00:00'),
(41, '5', 'Rajasthan royal and mumbai indian', '0000-00-00 00:00:00', 7999, 'list_image-23-04-18-3095.jpg   ', 'list_image-23-04-18-7277.jpg', 'swami mansingh stadium jaipur', 'Book tickets for Kolkata Knight Riders vs Punjab Kings IPL 2023 cricket for 8 May 2023 at Eden Garde', '', 1, '2023-04-18 00:00:00'),
(42, '5', 'Kolkata Knight rider', '0000-00-00 00:00:00', 4999, 'list_image-23-04-19-9508.jpg   ', 'list_image-23-04-19-6409.jpg', 'Swami mansingh stadium : jaipur', 'Brace yourselves for a thrilling encounter as the Rajasthan Royals take on the Royal Challengers Ban', '', 1, '2023-04-19 00:00:00'),
(43, '5', 'Rajasthan royal and Chenai super kings', '0000-00-00 00:00:00', 1500, 'list_image-23-04-19-8918.jpg   ', 'list_image-23-04-19-1826.jpg', 'swami mansingh stadium : jaipur', 'Brace yourselves for a thrilling encounter as the Rajasthan Royals take on the Royal Challengers Ban', '', 1, '2023-04-19 00:00:00'),
(44, '5', 'Rajasthan royal and Chenai super kings', '2023-04-20 00:00:00', 1200, 'list_image-23-04-19-8918.jpg   ', 'list_image-23-04-19-1826.jpg', 'swami mansingh stadium : jaipur', 'Brace yourselves for a thrilling encounter as the Rajasthan Royals take on the Royal Challengers Ban', '1,2', 1, '2023-04-19 00:00:00'),
(45, '', '', '0000-00-00 00:00:00', 0, '', '', '', '', '', 1, '2023-05-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Gmail` varchar(50) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Pincode` bigint(20) NOT NULL,
  `Addresh` varchar(100) NOT NULL,
  `Coments` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `Phone`, `Gmail`, `School`, `Pincode`, `Addresh`, `Coments`, `Status`, `CreatedDate`) VALUES
(1, 'Rohit verma', 9910022809, 'rohit@gmail.com', 'Jai Bharti school', 202103, 'Jawhar nagar loni', 'I am a ITI student', 1, '2023-02-27 00:00:00'),
(2, 'Amit Chodhary', 99019092090, 'amit@gmail.com', 'Govt Boys College', 201102, 'shiv vihar loni', ' i am s student', 1, '2023-02-27 00:00:00'),
(3, 'Sourabh Kashyap', 9821328097, 'sourabh@gmail.com', 'divya bharti school', 201102, 'H-189 jawhar nagar loni', 'i am BCA student', 1, '2023-02-28 00:00:00'),
(4, 'Nitni kumar', 9891029093, 'nitin@gmail.com', 'Gokal pur school', 910044, 'shiv vihar karawal nagar delhi', 'i am student of 12th', 1, '2023-02-28 00:00:00'),
(5, 'Priya Kashyap', 9989108011, 'priya@gmail.com', 'M.S.D public school', 910094, 'yamuna vihar Delhi', 'i am a student 12th', 1, '2023-03-01 00:00:00'),
(6, 'Nikhil', 8909019121, 'nikhil@gmail.com', 'Govt Boys sarkari school', 201102, 'jawhar nagar loni', 'I am am a student', 1, '2023-03-01 00:00:00'),
(7, 'kajal', 9711093707, 'kajal@gmail.com', 'Govt girl school', 102909, 'Meet nagar delhi', 'I am a good student', 1, '2023-03-01 00:00:00'),
(8, 'Aman khan', 9801909201, 'aman@gmail.com', 'ved memorial school', 201103, 'H-180 Jawhar nagar loni ', 'i am amployis', 1, '2023-03-01 00:00:00'),
(9, 'Neha', 8019091110, 'neha@gmail.com', 'S.D.M inter college', 0, 'Bhajan pura delhi', 'I am a student', 1, '2023-03-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Id` int(10) NOT NULL,
  `Eventsid` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Seat` int(20) NOT NULL,
  `Totalprice` int(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Phone`, `Email`, `Password`, `Status`, `CreatedDate`) VALUES
(1, 'kapil chauhan', 9650138386, 'nikichauhan@gmail.com', 'kapil@1234', 1, '2023-02-06 21:27:01'),
(2, 'Monu Tyagi', 9650137777, 'nikichauhan@gmail.com', 'monu@1234', 1, '2023-02-02 00:00:00'),
(3, 'Niki', 9650219839, 'nikichauhan321@gmail.com', 'niki@1234', 1, '2023-10-17 21:27:21'),
(4, 'karan', 9650132222, 'nikichauhan@gmail.com', 'karan@1234', 1, '2023-10-20 00:00:00'),
(5, 'Nancy', 9650131111, 'nikichauhan@gmail.com', 'nancy@1234', 1, '2023-12-04 21:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Query` varchar(100) NOT NULL,
  `Status` mediumint(10) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`Id`, `Name`, `Phone`, `Email`, `Subject`, `Query`, `Status`, `CreatedDate`) VALUES
(1, 'sourabh', 9090988890, 'sourabh@gmail.com', 'ajljajlalj', 'najjajajakalj', 1, '2023-02-17 00:00:00'),
(2, 'sourabh', 9090988890, 'sourabh@gmail.com', 'ajljajlalj', 'najjajajakalj', 1, '2023-02-17 00:00:00'),
(3, 'nitin', 8082456090, 'nitin@gmail.com', 'i am iti student', 'the annd  sdjjke  jakjskd asf hjkl asdf hjkl asdfhjkl ', 1, '2023-02-20 00:00:00'),
(4, 'amit', 9811244901, 'amit@gmail.com', 'i am bca student', 'asdf hjkl asdf hjkl asdf hjkl asdf hjkl asdf hjkl', 1, '2023-02-25 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `boys student`
--
ALTER TABLE `boys student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `front`
--
ALTER TABLE `front`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lis`
--
ALTER TABLE `lis`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `boys student`
--
ALTER TABLE `boys student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `front`
--
ALTER TABLE `front`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lis`
--
ALTER TABLE `lis`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
