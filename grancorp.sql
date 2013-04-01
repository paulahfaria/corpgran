/*
SQLyog Community Edition- MySQL GUI v7.02 
MySQL - 5.5.24-log : Database - grancorp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`grancorp` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `grancorp`;

/*Table structure for table `bairros` */

DROP TABLE IF EXISTS `bairros`;

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `bairros` */

insert  into `bairros`(`id`,`nome`) values (1,'Centro');
insert  into `bairros`(`id`,`nome`) values (2,'Savassi');
insert  into `bairros`(`id`,`nome`) values (3,'Gutierrez');

/*Table structure for table `destaques` */

DROP TABLE IF EXISTS `destaques`;

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `arquivo` varchar(200) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `target` int(11) DEFAULT '0',
  `prioridade` int(11) DEFAULT '0',
  `ativo` int(11) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `destaques` */

insert  into `destaques`(`id`,`nome`,`arquivo`,`link`,`target`,`prioridade`,`ativo`,`created`,`modified`) values (1,'Destaque 1','destaque.jpg','http://google.com',0,0,1,'2013-04-01 02:13:48','2013-04-01 02:13:48');

/*Table structure for table `empreendimentos` */

DROP TABLE IF EXISTS `empreendimentos`;

CREATE TABLE `empreendimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bairro_id` int(11) NOT NULL,
  `quarto_id` int(11) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `descricao` text,
  `atributos` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empreendimentos_bairros` (`bairro_id`),
  KEY `fk_empreendimentos_quartos1` (`quarto_id`),
  KEY `fk_empreendimentos_etapas1` (`etapa_id`),
  CONSTRAINT `fk_empreendimentos_quartos1` FOREIGN KEY (`quarto_id`) REFERENCES `quartos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empreendimentos_bairros` FOREIGN KEY (`bairro_id`) REFERENCES `bairros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empreendimentos_etapas1` FOREIGN KEY (`etapa_id`) REFERENCES `etapas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `empreendimentos` */

insert  into `empreendimentos`(`id`,`bairro_id`,`quarto_id`,`etapa_id`,`nome`,`descricao`,`atributos`,`created`,`modified`) values (1,1,1,2,'Empredimento','Curabitur sed blandit massa. Donec pretium dignissim justo faucibus ultricies. Mauris risus dolor, faucibus vitae ullamcorper quis, malesuada et risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse tincidunt ornare sem, eget consequat augue iaculis nec. Pellentesque ac sapien nunc, a aliquet justo. Quisque tristique pulvinar mauris interdum volutpat.','Curabitur sed blandit\r\n Donec pretium dignissim \r\nMauris risus dolor','2013-03-25 00:50:54','2013-03-31 20:46:07');
insert  into `empreendimentos`(`id`,`bairro_id`,`quarto_id`,`etapa_id`,`nome`,`descricao`,`atributos`,`created`,`modified`) values (2,2,2,3,'Savassi','emprendimento savassi','asdasdasdsdsd\r\nasdasdasdasdasd\r\nasdasdadasd\r\nasdasdasdasd\r\n','2013-04-01 01:50:23','2013-04-01 02:28:01');

/*Table structure for table `etapas` */

DROP TABLE IF EXISTS `etapas`;

CREATE TABLE `etapas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `etapas` */

insert  into `etapas`(`id`,`nome`,`slug`) values (1,'Em obras','em-obras');
insert  into `etapas`(`id`,`nome`,`slug`) values (2,'LanÃ§amento','lancamento');
insert  into `etapas`(`id`,`nome`,`slug`) values (3,'Pronto para morar','pronto-morar');

/*Table structure for table `favoritos` */

DROP TABLE IF EXISTS `favoritos`;

CREATE TABLE `favoritos` (
  `empreendimento_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`empreendimento_id`,`usuario_id`),
  KEY `fk_empreendimentos_has_usuarios_usuarios1` (`usuario_id`),
  KEY `fk_empreendimentos_has_usuarios_empreendimentos1` (`empreendimento_id`),
  CONSTRAINT `fk_empreendimentos_has_usuarios_empreendimentos1` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empreendimentos_has_usuarios_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `favoritos` */

/*Table structure for table `imagens` */

DROP TABLE IF EXISTS `imagens`;

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empreendimento_id` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `arquivo` varchar(250) NOT NULL,
  `destaque` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagens_empreendimentos1` (`empreendimento_id`),
  CONSTRAINT `fk_imagens_empreendimentos1` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `imagens` */

insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (2,1,'asdasd','empreendimento.jpg',1,'2013-03-31 20:30:47','2013-04-01 01:48:55');
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (3,1,'piscinaaaaaaaaaa','PIS CINA.jpg',0,'2013-03-31 20:51:16','2013-04-01 01:48:56');
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (4,2,'Titulo','empreendimento.jpg',1,'2013-04-01 02:27:26','2013-04-01 02:27:38');

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `conteudo` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `noticias` */

/*Table structure for table `quartos` */

DROP TABLE IF EXISTS `quartos`;

CREATE TABLE `quartos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `quartos` */

insert  into `quartos`(`id`,`nome`) values (1,'1 Quarto');
insert  into `quartos`(`id`,`nome`) values (2,'2 Quartos');
insert  into `quartos`(`id`,`nome`) values (3,'2 e 3 Quartos');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `hash_change_password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`name`,`role`,`created`,`modified`,`hash_change_password`) values (1,'admin','8ca677dd0ad207603b5ae1c5ea65cfdbbbb69b93','thiago.magsoares@gmail.com','','admin','2013-03-24 19:33:53','2013-03-24 19:33:53','');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

/* Function  structure for function  `slug` */

/*!50003 DROP FUNCTION IF EXISTS `slug` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `slug`(dirty_string varchar(200)) RETURNS varchar(200) CHARSET utf8
    DETERMINISTIC
BEGIN
 DECLARE Resultado VARCHAR(200);
 SET Resultado   = UPPER(dirty_string); 
 
 
 SET Resultado = REPLACE(Resultado,' ','-');
 SET Resultado = REPLACE(Resultado,'\'','');
 SET Resultado = REPLACE(Resultado,'`','');
 SET Resultado = REPLACE(Resultado,'.','');
 
 SET Resultado = REPLACE(Resultado,'À','A');
 SET Resultado = REPLACE(Resultado,'Á','A');
 SET Resultado = REPLACE(Resultado,'Â','A');
 SET Resultado = REPLACE(Resultado,'Ã','A');
 SET Resultado = REPLACE(Resultado,'Ä','A');
 SET Resultado = REPLACE(Resultado,'Å','A');
 
 SET Resultado = REPLACE(Resultado,'È','E');
 SET Resultado = REPLACE(Resultado,'É','E');
 SET Resultado = REPLACE(Resultado,'Ê','E');
 SET Resultado = REPLACE(Resultado,'Ë','E');
 
 SET Resultado = REPLACE(Resultado,'Ì','I');
 SET Resultado = REPLACE(Resultado,'Í','I');
 SET Resultado = REPLACE(Resultado,'Î','I');
 SET Resultado = REPLACE(Resultado,'Ï','I');
 
 SET Resultado = REPLACE(Resultado,'Ò','O');
 SET Resultado = REPLACE(Resultado,'Ó','O');
 SET Resultado = REPLACE(Resultado,'Ô','O');
 SET Resultado = REPLACE(Resultado,'Õ','O');
 SET Resultado = REPLACE(Resultado,'Ö','O');
 
 SET Resultado = REPLACE(Resultado,'Ù','U');
 SET Resultado = REPLACE(Resultado,'Ú','U');
 SET Resultado = REPLACE(Resultado,'Û','U');
 SET Resultado = REPLACE(Resultado,'Ü','U');
 
 SET Resultado = REPLACE(Resultado,'Ø','O');
 
 SET Resultado = REPLACE(Resultado,'Æ','A');
 SET Resultado = REPLACE(Resultado,'Ð','D');
 SET Resultado = REPLACE(Resultado,'Ñ','N');
 SET Resultado = REPLACE(Resultado,'Ý','Y');
 SET Resultado = REPLACE(Resultado,'Þ','B');
 SET Resultado = REPLACE(Resultado,'ß','S');
 
 SET Resultado = REPLACE(Resultado,'Ç','C');
 
 RETURN LOWER(Resultado);
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
