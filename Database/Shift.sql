CREATE DATABASE IF NOT EXISTS knightwatchtest;
USE knightwatchtest;
CREATE TABLE IF NOT EXISTS `shift`(
	`Driver` varchar(255) NOT NULL,
	`Username` varchar(255) NOT NULL,
	`Start_Time` varchar(255) NOT NULL,
	`Destination` varchar(255) NOT NULL,
	`Arrival_Time` varchar(255) NOT NULL,
	`Issues` varchar(255) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
