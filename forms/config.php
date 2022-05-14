<?php
$username = "root";
$password = "";
$server = "localhost";
$db = "codly";


$connection = new PDO($server, $username, $password, $db);?>

<?php  $sql=  "CREATE TABLE if not exist `codly`.`purchase_list`
( `ID For Service` INT(4) NOT NULL ,
 `Service Name` VARCHAR(20) NOT NULL ,
  `Service Provider` VARCHAR(20) NOT NULL ,
   `Price` INT NOT NULL ,
    `Date` DATE NOT NULL ,
     `Status` VARCHAR(20) NOT NULL ,
      `Report` BOOLEAN NOT NULL ,
       `Delete` BOOLEAN NOT NULL ) ENGINE = InnoDB; " ;?>


