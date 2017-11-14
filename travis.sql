# Create Testuser
CREATE USER 'dev'@'localhost' IDENTIFIED BY 'dev';
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP ON *.* TO 'dev'@'localhost';

# Create DB
CREATE DATABASE IF NOT EXISTS `soen341` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `soen341`;

# Create Table
CREATE TABLE IF NOT EXISTS `user` (UserId int(11) NOT NULL AUTO_INCREMENT, UserName varchar(45) NOT NULL, Email varchar(45) NOT NULL, Password varchar(45) NOT NULL, Address varchar(45) DEFAULT NULL, CityName varchar(45) DEFAULT NULL, Province varchar(45) DEFAULT NULL, Country varchar(45) DEFAULT NULL, PRIMARY KEY (UserId), UNIQUE KEY Email_UNIQUE (Email), UNIQUE KEY UserName_UNIQUE (UserName));


# Add Data
INSERT IGNORE INTO `user`(`UserId`, `UserName`, `Email`, `Password`, `Address`, `CityName`, `Province`, `Country`, `image`, `PhoneNumber`) VALUES (Null,'yougtang','wilsonluyongtang@gmail.com','49ba742a6151092935053e64da7deb3e',Null,Null,Null,Null,Null,Null);