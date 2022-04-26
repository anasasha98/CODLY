-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 01:27 AM
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
-- Database: `demo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailed-service`
--

CREATE TABLE `detailed-service` (
  `sno` int(4) NOT NULL,
  `name` varchar(25) NOT NULL,
  `img` varchar(25) NOT NULL,
  `sec-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailed-service`
--

INSERT INTO `detailed-service` (`sno`, `name`, `img`, `sec-id`) VALUES
(1001, 'UX/UI Designers', 'ui-ux-design.jpg', 1),
(1002, 'Graphic Designers', 'graphic-design.jpg', 1),
(1003, 'Illustration', 'illustrator.png', 1),
(1004, 'Photoshop', 'photoshop.jpg', 1),
(1005, 'Interior Design', 'interior-design.jpg', 1),
(1006, 'Video Editing', 'video-editing.jpg', 1),
(1007, 'Art Designers', 'art-designers.jpg', 1),
(1008, 'Motion Design', 'motion-design.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service-section`
--

CREATE TABLE `service-section` (
  `sec-id` int(11) NOT NULL,
  `sec-name` varchar(25) NOT NULL,
  `sec-img` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service-section`
--

INSERT INTO `service-section` (`sec-id`, `sec-name`, `sec-img`) VALUES
(1, 'Design', 'services-01.jpg'),
(2, 'Design Logo', 'services-02.jpg'),
(3, 'Data', 'services-03.jpg'),
(4, 'Graphic', 'services-04.jpg'),
(5, 'WordPress', 'services-05.jpg'),
(6, 'Development', 'services-06.jpg'),
(7, 'Business', 'services-07.jpg'),
(8, 'Game Art', 'services-08.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailed-service`
--
ALTER TABLE `detailed-service`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `sec-id-fk` (`sec-id`);

--
-- Indexes for table `service-section`
--
ALTER TABLE `service-section`
  ADD PRIMARY KEY (`sec-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailed-service`
--
ALTER TABLE `detailed-service`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `service-section`
--
ALTER TABLE `service-section`
  MODIFY `sec-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailed-service`
--
ALTER TABLE `detailed-service`
  ADD CONSTRAINT `sec-id-fk` FOREIGN KEY (`sec-id`) REFERENCES `service-section` (`sec-id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
