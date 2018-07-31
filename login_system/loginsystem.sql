CREATE DATABASE loginsystem;
USE loginsystem;

CREATE TABLE `loginsystem`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `usuario` (`usuario_id`,`usuario`,`password`) VALUES (1,'Ze','123');
