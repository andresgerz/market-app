CREATE DATABASE IF NOT EXISTS `lemp` ;
USE `lemp`;

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `product` VARCHAR(100) NOT NULL,
  `price` FLOAT(10, 2) NOT NULL,
  `date_product` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_product`)
);

DELETE FROM `products`;
INSERT INTO `products` (`id_product`,`product`,`price`,`date_product`) VALUES (1,'Guitarra electrica',400,'2021-01-01 00:00:00');

CREATE TABLE IF NOT EXISTS `customers` (
  `id_customer` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `surname` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `country` VARCHAR(100) NOT NULL,
  `state` VARCHAR(100) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `floor` INT(4) NOT NULL,
  `dept` VARCHAR(50) NOT NULL,
  `cart` VARCHAR(100) NOT NULL,
  `nro_card` VARCHAR(16) NOT NULL,
  `date_customer` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customer`)
);

DELETE FROM `customers`;
INSERT INTO `customers` (`id_customer`,`name`,`surname`,`email`,`country`,`state`,`city`,`address`,`floor`,`dept`,`cart`,`nro_card`,`date_customer`) VALUES (1,'Andy','Stein','a_s@mail.com','Argentina','Chaco','Charata','San Lorenzo 220',1,'A','Mastercard','1111222233334444','2021-01-01 00:00:01');

ALTER TABLE `products` ADD FOREIGN KEY (`id_product`) REFERENCES `customers` (`id_customer`); 