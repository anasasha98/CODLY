SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";






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