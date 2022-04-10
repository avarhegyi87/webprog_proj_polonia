CREATE DATABASE `polonia_users`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `polonia_users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `lastname` varchar(45) NOT NULL default '',
  `firstname` varchar(45) NOT NULL default '',
  `username` varchar(12) NOT NULL default '',
  `password` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;
