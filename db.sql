CREATE DATABASE digantara;

use digantara;

CREATE TABLE `contact`(
`id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`fname` varchar(20)  NOT NULL ,
`email` varchar(30) NOT NULL ,
`subject` varchar(50) NOT NULL ,
`message` varchar (50) NOT NULL 
) engine=InnoDB default charset=utf8 collate=utf8_unicode_ci AUTO_INCREMENT=1;