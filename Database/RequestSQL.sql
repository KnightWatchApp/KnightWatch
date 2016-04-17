CREATE DATABASE IF NOT EXISTS knightwatchtest;
USE knightwatchtest;
CREATE TABLE IF NOT EXISTS `request`(
	`Username` varchar(255) NOT NULL,
	`Service_Type` varchar(255) NOT NULL,
	`Time_of_Pickup` varchar(255) NOT NULL,
	`Pickup_Location` varchar(255) NOT NULL,
	`Other_Pickup_Location` varchar(255) DEFAULT NULL,
	`Drop_Off_Location` varchar(255) NOT NULL,
	`Other_Drop_Off_Location` varchar(255) DEFAULT NULL,
	`Number_of_People` int(2) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `request` (`Username`, `Service_Type`, `Time_of_Pickup`, `Pickup_Location`,
	`Other_Pickup_Location`, `Drop_Off_Location`, `Other_Drop_Off_Location`, `Number_of_People`) 
	VALUES
	('test001', 'walk', '1230', 'Zurn', '', 'Zurn', '', '3');
	