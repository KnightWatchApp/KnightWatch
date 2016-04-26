CREATE DATABASE IF NOT EXISTS knightwatchtest;
USE knightwatchtest;
CREATE TABLE IF NOT EXISTS `request`(
	`Username` varchar(255) NOT NULL,
	`Service_Type` varchar(255) NOT NULL,
	`Time_of_Pickup` varchar(255) NOT NULL,
	`Pickup_Location` varchar(255) NOT NULL,
	`Drop_Off_Location` varchar(255) NOT NULL,
	`Number_of_People` int(2) NOT NULL,
	`Status` int(2) NOT NULL,
	`Time_of_Request` timestamp NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

	