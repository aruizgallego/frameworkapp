CREATE DATABASE IF NOT EXISTS `frameworkdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `frameworkdb`;

CREATE USER 'mpwaruser'@'%' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON * . * TO 'mpwaruser'@'%';
FLUSH PRIVILEGES;

DROP TABLE IF EXISTS `clasification`;
CREATE TABLE `clasification` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `team` varchar(50) NOT NULL,
  `points` int(3) NOT NULL, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


INSERT INTO `clasification` ( `team`, `points`) VALUES
( 'ESPANYOL', 19),
( 'BILBAO', 15),
( 'SEVILLA', 32),
( 'REAL MADRID', 27),
( 'VALENCIA', 33),
( 'GETAFE', 64);