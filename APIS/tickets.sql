/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.4.11-MariaDB : Database - doublevparthers
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`doublevparthers` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `doublevparthers`;

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `estatus` varchar(1) NOT NULL DEFAULT '1',
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `tickets` */

insert  into `tickets`(`id`,`usuario`,`descripcion`,`estatus`,`fecha_creacion`,`fecha_actualizacion`) values (1,'jordan','Ticket Test #1','1','2022-11-01 01:12:26','2022-11-13 13:10:24'),(2,'angie','Ticket Test #2','1','2022-11-01 01:12:26','2022-11-14 13:11:20'),(3,'jaider','Ticket Test #3','1','2022-11-01 01:12:26','2022-11-14 13:11:52'),(4,'masha','Este es un ticket en estado abierto','1','2022-11-14 19:50:04','2022-11-14 13:57:46'),(8,'gorila','Este es un ticket en estado cerrado','1','2022-11-14 19:59:48','2022-11-14 14:19:59'),(9,'doublevparthers','Este es un ticket de prueba actualizado, somos doublevparthers','0','2022-11-14 20:30:22','2022-11-14 14:30:22');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
