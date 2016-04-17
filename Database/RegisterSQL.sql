CREATE DATABASE IF NOT EXISTS knightwatchtest;
USE knightwatchtest;
CREATE TABLE IF NOT EXISTS `login`(
	`Username` varchar(255) DEFAULT NULL,
	`Password` varchar(255) DEFAULT NULL,
	`First_Name` varchar(255) DEFAULT NULL,
	`Last_Name` varchar(255) DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `login` (`Username`, `Password`, `First_Name`, `Last_Name`) 
	VALUES
	('test001', 'test', 'Hello', 'World');
	