/*
SQLyog Ultimate v8.61 
MySQL - 5.5.16 : Database - practicamvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`practicamvc` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `practicamvc`;

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` text,
  `valor` varchar(1) DEFAULT NULL,
  `respuesta` int(11) DEFAULT NULL,
  `calificaion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

insert  into `preguntas`(`id_pregunta`,`pregunta`,`valor`,`respuesta`,`calificaion`) values (1,'2 + 2 = 4?','',4,NULL),(2,'2 - 1 = 1?','',1,NULL),(3,'2 * 2 = 4?','',4,NULL),(4,'3 + 1 = 4? ','',1,NULL),(5,'3 + 3 = 6?','',6,NULL),(6,'100 + 100 = 200?','',200,NULL),(7,'1+10= 11?','',11,NULL),(8,'8 + 2 = 10?','',1,NULL),(9,'20+50=70?',NULL,NULL,NULL),(10,'200+200=400?',NULL,NULL,NULL),(11,'100+10=110?',NULL,NULL,NULL),(12,'0+0=0?',NULL,NULL,NULL);

/*Table structure for table `user_calificacion` */

DROP TABLE IF EXISTS `user_calificacion`;

CREATE TABLE `user_calificacion` (
  `id_user_calificacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_pregunta` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user_calificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_calificacion` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `rango` int(11) DEFAULT NULL,
  `psw` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id_usuario`,`nombre`,`estatus`,`rango`,`psw`) values (1,'administrador',1,1,'desa'),(2,'jhonatan',1,2,'123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
