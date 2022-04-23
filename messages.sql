CREATE DATABASE `polonia_users`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `polonia_users`;

CREATE TABLE `polonia_users`.`msgs` ( 
    `msg_id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(40) NOT NULL DEFAULT 'Vendég' , 
    `real_name` VARCHAR(50) NOT NULL , 
    `email` VARCHAR(40) NOT NULL , 
    `msg_text` VARCHAR(200) NOT NULL , 
    PRIMARY KEY (`msg_id`)
) ENGINE = MyISAM;
CHARACTER SET utf8 COLLATE utf8_general_ci;
