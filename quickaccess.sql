-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 02:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickaccess`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(6, 'hind', 0, 'hind@gmail.com'),
(7, 'walaa', 123456, 'walaa.algora@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `url_download` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `semester`, `year`, `image`, `url_download`) VALUES
(1, 'Assembly Language for x86 Processors', 'This book is 7th Edition by Kip Irvine for Assembly', 1, 4, 'asmbook.jpg', 'https://1lib.us/book/5156452/246cac'),
(2, 'Operating System: Three Easy Pieces', 'This book is 1.00 Edition by Remiz H Arpaci-Dusseau', 1, 4, 'osbook.jpg', 'https://1lib.us/book/2523323/131fbf'),
(3, 'Data Communications and Networking', 'This book is 6th Edition by Behrouz Forouzan', 1, 4, 'datacombook.jpg', 'https://1lib.us/book/614700/528249?dsource=recommend');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `user_name`, `user_email`, `content`) VALUES
(2, 'walaa', 'walaa.algora@gmail.com', 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `lab_name` varchar(200) NOT NULL,
  `program_name` varchar(200) NOT NULL,
  `url_program` varchar(200) NOT NULL,
  `install_program` varchar(256) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `lab_name`, `program_name`, `url_program`, `install_program`, `year`) VALUES
(1, 'Java LAB', 'NETBeans', 'https://netbeans.apache.org/download/index.html', 'https://www.youtube.com/watch?v=vt7_6HwCFOU', 2),
(2, 'Logic LAB', 'Logisim', 'https://sourceforge.net/projects/circuit/', '', 2),
(3, 'Circuits LAB', 'circuit wizard', 'https://circuit-wizard.software.informer.com/3.5/', 'https://www.youtube.com/watch?v=GxlafLlj2Qo', 2),
(4, 'Electronics1 LAB', 'LTspice', 'https://www.analog.com/en/design-center/design-tools-and-calculators/ltspice-simulator.html#', 'https://www.youtube.com/watch?v=UWrZsHtDfd0', 2),
(5, 'Signals LAB', 'MatLab', 'https://www.mathworks.com/downloads/', 'https://www.youtube.com/watch?v=f1UoHTf_Kgk', 3),
(6, 'LinearControlSystem LAB', 'LabView', 'https://www.ni.com/en-us/support/downloads/software-products/download.labview.html#346254', 'https://www.youtube.com/watch?v=XDj68RPnvKs', 3),
(7, 'DataBase LAB', 'postgreSQL', 'https://www.postgresql.org/download/', 'https://www.youtube.com/watch?v=RAFZleZYxsc', 3),
(8, 'Assembly LAB', 'Visual Studio', 'https://visualstudio.microsoft.com/vs/', 'https://www.youtube.com/watch?v=FBo5Cso-ufE', 4),
(9, 'OS LAB', 'virtual box', 'https://www.virtualbox.org/wiki/Downloads', 'https://www.youtube.com/watch?v=8mns5yqMfZk', 4),
(10, 'DataCom LAB', 'WireShark', 'https://www.wireshark.org/download.html', '', 4),
(11, 'WEB LAB', 'visual studio code', 'https://code.visualstudio.com/download', 'https://www.youtube.com/watch?v=8tkuu0Rugg4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sol_books`
--

CREATE TABLE `sol_books` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `url_download` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sol_books`
--

INSERT INTO `sol_books` (`id`, `name`, `description`, `semester`, `year`, `image`, `url_download`) VALUES
(1, 'Assembly Language for x86 Processors', 'This solution of 7th Edition by Kip Irvine', 1, 4, 'asmbook.jpg', 'https://www.scribd.com/document/376336801/Download-Full-Solution-Manual-Assembly-Language-for-x86-Processors-7th-Edition-by-Kip-R-Irvine-SLP1044'),
(2, 'Operating System: Three Easy Pieces', 'The Solution of 1.00 Edition by Remiz H Arpaci-Dusseau', 1, 4, 'osbook.jpg', 'https://www.pdfdrive.com/operating-systems-three-easy-pieces-d157868341.html'),
(3, 'Data Communications and Networking', 'The solution of 4th Edition by Behrouz Forouzan', 1, 4, 'datacombook.jpg', 'https://www.academia.edu/33884249/Solution_Manual_for_Data_Communications_and_Networking_by_Behrouz_Forouzan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sol_books`
--
ALTER TABLE `sol_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sol_books`
--
ALTER TABLE `sol_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
