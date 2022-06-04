-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 09:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

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
-- Table structure for table `captain`
--

CREATE TABLE `captain` (
  `captainusername` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `dob` date NOT NULL,
  `major` varchar(25) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `attach` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `captain`
--

INSERT INTO `captain` (`captainusername`, `firstname`, `lastname`, `password`, `email`, `phonenumber`, `dob`, `major`, `bio`, `attach`, `image`) VALUES
('ali0Ziadeh', 'Ali', 'ziadeh', 'Aa123000', 'a@gmail.com', '+971507570200', '2016-06-01', 'SW', 'Mary Jones is an Administrative Assistant with eight years of experience working alongside the executive team of a Fortune 500 company. Mary specializes in administrative technology and is responsible for educating other employees on using progressive systems and applications, including accounting software, mass communication procedures and organizational apps. Mary is a powerful force in the workplace and uses her positive attitude and tireless', 'Full_Stack_Developer.JPG', 'img_avatar.png'),
('jamesbond', 'jams', 'bond', 'Aa123456', 'james@gmail.com', '+962779271166', '1992-08-20', 'Full-Stack Developer', 'My name is Alex Drysdale and I am a Junior Web Developer for Oswald Technologies. I am an accomplished coder and programmer, and I enjoy using my skills to contribute to the exciting technological advances that happen every day at Oswald Tech. I graduated from the California Institute of Technology in 2016 with a Bachelor\'s Degree in Software Development. While in school, I earned the 2015 Edmund Gains Award for my exemplary academic performance and leadership skills.', 'icons8-facebook-240.webp', 'car-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer-username` varchar(20) NOT NULL,
  `service-id` int(11) NOT NULL,
  `service-name` varchar(20) NOT NULL,
  `service-price` int(11) NOT NULL,
  `captain-username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint-user`
--

CREATE TABLE `complaint-user` (
  `complaint-id` int(11) NOT NULL,
  `customer-username` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `captin-username` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `complaint-details` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint-user`
--

INSERT INTO `complaint-user` (`complaint-id`, `customer-username`, `captin-username`, `complaint-details`, `image`) VALUES
(2, 'mohammed', 'ford', 'no receving of the work', 0x69636f6e73382d696e7374616772616d2d3234302e706e67),
(3, 'heba', 'jafeer', '.......', ''),
(4, 'Moahmmed', 'Ali', '', ''),
(5, 'Moahmmed', 'Ali', 'Ali', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerusername` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerusername`, `firstname`, `lastname`, `password`, `email`, `phonenumber`, `dob`, `image`) VALUES
('Anas_asha', 'Anas', 'Asha', 'anas123', 'Anas@gmail.com', '+962', '0000-00-00', ''),
('mohammed_ahmed', 'Moh', 'Ahmed', '3333', 'moh@yahoo.com', '+962777570111', '2002-11-15', 'good.png');

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
-- Table structure for table `purchase_list`
--

CREATE TABLE `purchase_list` (
  `Purchase ID` int(11) NOT NULL,
  `Customer Username` varchar(20) NOT NULL,
  `Service ID` int(11) NOT NULL,
  `Service Name` varchar(20) NOT NULL,
  `Captin Username` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Report` tinyint(1) NOT NULL,
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_list`
--

INSERT INTO `purchase_list` (`Purchase ID`, `Customer Username`, `Service ID`, `Service Name`, `Captin Username`, `Price`, `Date`, `Report`, `Status`) VALUES
(1, 'heba-malo', 1001, ' Design ', 'ford', 20, '2022-05-03', 0, 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `service-provider`
--

CREATE TABLE `service-provider` (
  `sno` int(4) NOT NULL,
  `service_id` int(11) NOT NULL,
  `captainusername` varchar(25) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `job_desc` varchar(200) NOT NULL,
  `tag1` varchar(14) DEFAULT NULL,
  `tag2` varchar(14) DEFAULT NULL,
  `tag3` varchar(14) DEFAULT NULL,
  `tag4` varchar(14) DEFAULT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `price1` int(11) NOT NULL,
  `price1_desc` varchar(250) NOT NULL,
  `price2` int(11) DEFAULT NULL,
  `price2_desc` varchar(250) DEFAULT NULL,
  `price3` int(11) DEFAULT NULL,
  `price3_desc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service-provider`
--

INSERT INTO `service-provider` (`sno`, `service_id`, `captainusername`, `job_title`, `job_desc`, `tag1`, `tag2`, `tag3`, `tag4`, `image1`, `image2`, `image3`, `price1`, `price1_desc`, `price2`, `price2_desc`, `price3`, `price3_desc`) VALUES
(1006, 1, 'ali0Ziadeh', 'Professional Video Editing', 'video editing using Adobe Premiere for adding and modifying all required effects to get a professional video as a result', 'video', 'creative', '', 'creation', '', '', '', 0, '', 0, '', 0, ''),
(8001, 2, 'jamesbond', 'Advanced game animator', 'game animation is a special skill to make animation game for any purpose', NULL, NULL, NULL, NULL, '', '', '', 50, '', 100, '', 150, 'Delivery in 1 Day - High resoluation game animation - professional work - any changes on demand');

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
-- Indexes for table `captain`
--
ALTER TABLE `captain`
  ADD PRIMARY KEY (`captainusername`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk-cust-name` (`customer-username`),
  ADD KEY `fk-sno` (`service-id`),
  ADD KEY `fk-cap-name` (`captain-username`);

--
-- Indexes for table `complaint-user`
--
ALTER TABLE `complaint-user`
  ADD PRIMARY KEY (`complaint-id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerusername`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `detailed-service`
--
ALTER TABLE `detailed-service`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `sec-id-fk` (`sec-id`);

--
-- Indexes for table `purchase_list`
--
ALTER TABLE `purchase_list`
  ADD PRIMARY KEY (`Purchase ID`);

--
-- Indexes for table `service-provider`
--
ALTER TABLE `service-provider`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `sno-fk` (`sno`),
  ADD KEY `cap-fk` (`captainusername`);

--
-- Indexes for table `service-section`
--
ALTER TABLE `service-section`
  ADD PRIMARY KEY (`sec-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint-user`
--
ALTER TABLE `complaint-user`
  MODIFY `complaint-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detailed-service`
--
ALTER TABLE `detailed-service`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8002;

--
-- AUTO_INCREMENT for table `service-provider`
--
ALTER TABLE `service-provider`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service-section`
--
ALTER TABLE `service-section`
  MODIFY `sec-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk-cap-name` FOREIGN KEY (`captain-username`) REFERENCES `captain` (`captainusername`),
  ADD CONSTRAINT `fk-cust-name` FOREIGN KEY (`customer-username`) REFERENCES `customer` (`customerusername`),
  ADD CONSTRAINT `fk-sno` FOREIGN KEY (`service-id`) REFERENCES `detailed-service` (`sno`);

--
-- Constraints for table `detailed-service`
--
ALTER TABLE `detailed-service`
  ADD CONSTRAINT `sec-id-fk` FOREIGN KEY (`sec-id`) REFERENCES `service-section` (`sec-id`);

--
-- Constraints for table `service-provider`
--
ALTER TABLE `service-provider`
  ADD CONSTRAINT `cap-fk` FOREIGN KEY (`captainusername`) REFERENCES `captain` (`captainusername`),
  ADD CONSTRAINT `sno-fk` FOREIGN KEY (`sno`) REFERENCES `detailed-service` (`sno`);
COMMIT;




CREATE TABLE `codly`.`cart2` ( `id` INT NOT NULL AUTO_INCREMENT , `count` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `purchase_list` CHANGE `Purchase ID` `Purchase ID` INT(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `purchase_list` CHANGE `Report` `Report` TINYINT(1) NOT NULL DEFAULT '0';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
<<<<<<< HEAD


=======
>>>>>>> 983aedb20a20a707e427bf3cdc30cc3b417ea207
