CREATE DATABASE IF NOT EXISTS knightwatchtest;
USE knightwatchtest;
CREATE TABLE IF NOT EXISTS `escort`(
	`ID` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`Username` varchar(255) NOT NULL,
	`Escort_First_Name` varchar(255) NOT NULL,
	`Escort_Last_Name` varchar(255) NOT NULL,
	`Pickup_Time` varchar(255) NOT NULL,
	`Service_Type` varchar(255) NOT NULL,
	`Accept_Status` int(1) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

	