CREATE DATABASE `web` ;
CREATE TABLE `client` (
    `id` INT( 11 ) NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR( 255 ) NOT NULL ,
    `date` DATE NOT NULL ,
    `entered` DATETIME NOT NULL ,
    PRIMARY KEY ( `id` )
)