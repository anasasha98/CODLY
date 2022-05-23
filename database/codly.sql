-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 08:07 PM
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
-- Database: `codly`
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
(1008, 'Motion Design', 'motion-design.jpg', 1),
(7001, 'Marketing', 'interior-design.jpg', 7),
(8001, 'Game Animation', 'motion-design.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `service-provider`
--

CREATE TABLE `service-provider` (
  `sno` int(4) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `job_desc` varchar(200) NOT NULL,
  `tag1` varchar(14) DEFAULT NULL,
  `tag2` varchar(14) DEFAULT NULL,
  `tag3` varchar(14) DEFAULT NULL,
  `tag4` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service-provider`
--

INSERT INTO `service-provider` (`sno`, `emp_id`, `ename`, `job_title`, `job_desc`, `tag1`, `tag2`, `tag3`, `tag4`) VALUES
(1006, 1234, 'James Bond', 'Professional Video Editing', 'video editing using Adobe Premiere for adding and modifying all required effects to get a professional video as a result', 'video', 'creative', '', 'creation'),
(8001, 1235, 'Jack Black', 'Advanced game animator', 'game animation is a special skill to make animation game for any purpose', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service-section`
--

CREATE TABLE `service-section` (
  `sec-id` int(11) NOT NULL,
  `sec-name` varchar(25) NOT NULL,
  `sec-img` varchar(25) NOT NULL,
  `sec-desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service-section`
--

INSERT INTO `service-section` (`sec-id`, `sec-name`, `sec-img`, `sec-desc`) VALUES
(1, 'Design', 'services-01.jpg', 'Planning and projection of visual communication through the use of imagery, words, space, typography or fonts, and color palettes.'),
(2, 'Design Logo', 'services-02.jpg', 'Design Logo Description'),
(3, 'Data', 'services-03.jpg', 'Data Description'),
(4, 'Graphic', 'services-04.jpg', 'Graphic Description'),
(5, 'WordPress', 'services-05.jpg', 'WordPress Description'),
(6, 'Development', 'services-06.jpg', 'Development Description'),
(7, 'Business', 'services-07.jpg', 'Business Description'),
(8, 'Game Art', 'services-08.jpg', 'Game Art Description');

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
-- Indexes for table `service-provider`
--
ALTER TABLE `service-provider`
  ADD KEY `sno-fk` (`sno`);

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
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8002;

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

--
-- Constraints for table `service-provider`
--
ALTER TABLE `service-provider`
  ADD CONSTRAINT `sno-fk` FOREIGN KEY (`sno`) REFERENCES `detailed-service` (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `codly`.`purchase_list` ( `Purchase ID` INT NOT NULL ,
 `Customer Username` VARCHAR(20) NOT NULL ,
  `Service ID` INT NOT NULL , 
  `Service Name` VARCHAR(20) NOT NULL , 
  `Captin Username` VARCHAR(20) NOT NULL ,
   `Price` INT NOT NULL , 
   `Date` DATE NOT NULL , 
   `Report` BOOLEAN NOT NULL ,
   `Status` VARCHAR(20) ,
   
    PRIMARY KEY (`Purchase ID`)) ENGINE = InnoDB;



INSERT INTO `purchase_list` 
(`Purchase ID`,
 `Customer Username`,
  `Service ID`, 
  `Service Name`, 
  `Captin Username`,
   `Price`,
    `Date`,
     `Report`,`Status`) 
VALUES ('1', 'heba-malo', '1001', ' Design ', 'ford', '20', '2022-05-03', '0','Un complete')



CREATE TABLE `codly`.`complaint-user` ( `complaint-id` INT NOT NULL AUTO_INCREMENT , `customer-username` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `captin-username` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `complaint-details` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `image` VARCHAR(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL , PRIMARY KEY (`complaint-id`)) ENGINE = InnoDB;
