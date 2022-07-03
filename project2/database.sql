create database hospital;

use hospital;

CREATE TABLE `info` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(15) NOT NULL,
  `taddress` varchar(100) NOT NULL,
  `paddress` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `blood` varchar(30) NOT NULL,
  `ward` varchar(30) NOT NULL,
  `msg` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
);