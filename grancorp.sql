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

/*Table structure for table `areas` */

DROP TABLE IF EXISTS `areas`;

CREATE TABLE `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `areas` */

insert  into `areas`(`id`,`nome`) values (1,'Engenharia');
insert  into `areas`(`id`,`nome`) values (2,'Administrativo');

/*Table structure for table `bairros` */

DROP TABLE IF EXISTS `bairros`;

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `bairros` */

insert  into `bairros`(`id`,`nome`,`slug`) values (1,'Centro','centro');
insert  into `bairros`(`id`,`nome`,`slug`) values (2,'Savassi','savassi');
insert  into `bairros`(`id`,`nome`,`slug`) values (3,'Gutierrez','gutierrez');

/*Table structure for table `contatos` */

DROP TABLE IF EXISTS `contatos`;

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `contatos` */

/*Table structure for table `curriculos` */

DROP TABLE IF EXISTS `curriculos`;

CREATE TABLE `curriculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `arquivo` varchar(200) DEFAULT NULL,
  `vaga_id` int(11) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `visualizado` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `curriculos` */

insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (1,'','','',NULL,NULL,NULL,0,'2013-04-02 23:59:10');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (2,'','','','grancorp.txt',NULL,NULL,0,'2013-04-03 00:00:47');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (3,'tsadas','asdasdasd@gmail.com',NULL,'grancorp.txt',1,NULL,0,'2013-04-03 20:54:27');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (4,'tsadas','asdasdasd@gmail.com',NULL,'grancorp.txt',1,NULL,0,'2013-04-03 23:54:47');

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
  `slug` varchar(200) DEFAULT NULL,
  `descricao` text,
  `atributos` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empreendimentos_bairros` (`bairro_id`),
  KEY `fk_empreendimentos_quartos1` (`quarto_id`),
  KEY `fk_empreendimentos_etapas1` (`etapa_id`),
  CONSTRAINT `fk_empreendimentos_bairros` FOREIGN KEY (`bairro_id`) REFERENCES `bairros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empreendimentos_etapas1` FOREIGN KEY (`etapa_id`) REFERENCES `etapas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empreendimentos_quartos1` FOREIGN KEY (`quarto_id`) REFERENCES `quartos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `empreendimentos` */

insert  into `empreendimentos`(`id`,`bairro_id`,`quarto_id`,`etapa_id`,`nome`,`slug`,`descricao`,`atributos`,`created`,`modified`,`latitude`,`longitude`) values (1,1,1,2,'Empredimento noÃ§o','empredimento-noco','Curabitur sed blandit massa. Donec pretium dignissim justo faucibus ultricies. Mauris risus dolor, faucibus vitae ullamcorper quis, malesuada et risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse tincidunt ornare sem, eget consequat augue iaculis nec. Pellentesque ac sapien nunc, a aliquet justo. Quisque tristique pulvinar mauris interdum volutpat.','Curabitur sed blandit\r\n Donec pretium dignissim \r\nMauris risus dolor','2013-03-25 00:50:54','2013-04-02 01:17:04','','');
insert  into `empreendimentos`(`id`,`bairro_id`,`quarto_id`,`etapa_id`,`nome`,`slug`,`descricao`,`atributos`,`created`,`modified`,`latitude`,`longitude`) values (2,2,2,3,'Savassi','savassi','emprendimento savassi','asdasdasdsdsd\r\nasdasdasdasdasd\r\nasdasdadasd\r\nasdasdasdasd\r\n','2013-04-01 01:50:23','2013-04-02 01:16:05','-19.925056','-43.946455');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `imagens` */

insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (2,1,'asdasd','empreendimento.jpg',1,'2013-03-31 20:30:47','2013-04-01 01:48:55');
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (3,1,'piscinaaaaaaaaaa','PIS CINA.jpg',0,'2013-03-31 20:51:16','2013-04-01 01:48:56');
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (4,2,'Titulo','empreendimento.jpg',1,'2013-04-01 02:27:26','2013-04-01 02:27:38');
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (5,2,'Bla bla','empreendimento.jpg',NULL,'2013-04-02 22:04:41','2013-04-02 22:04:41');
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (6,2,'Bla bla','destaque.jpg',NULL,'2013-04-04 03:19:35','2013-04-04 03:19:35');
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (7,2,'Bla bla','empreendimento.jpg',NULL,'2013-04-04 03:19:36','2013-04-04 03:19:36');
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`) values (8,2,'Bla bla','PIS CINA.jpg',NULL,'2013-04-04 03:19:38','2013-04-04 03:19:38');

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `conteudo` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`titulo`,`conteudo`,`created`,`modified`) values (1,'noticia teste 1','                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2013-04-07 23:54:45','2013-04-07 23:54:45');
insert  into `noticias`(`id`,`titulo`,`conteudo`,`created`,`modified`) values (2,'noticia teste 2','Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2013-04-07 23:55:01','2013-04-07 23:55:01');
insert  into `noticias`(`id`,`titulo`,`conteudo`,`created`,`modified`) values (3,'noticia teste 3','Se eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2013-04-07 23:55:14','2013-04-07 23:55:14');

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

/*Table structure for table `vagas` */

DROP TABLE IF EXISTS `vagas`;

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text,
  `ativo` int(11) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `vagas` */

insert  into `vagas`(`id`,`nome`,`descricao`,`ativo`,`created`) values (1,'Auxiliar administrativo','vaga muito boa envie seu curriculo',1,'2013-04-02 23:48:40');
insert  into `vagas`(`id`,`nome`,`descricao`,`ativo`,`created`) values (2,'Engenheiro','alsdj asldka jsdlja sdlaksjd alskdj alskdj alsdkjasldkajslkdjaslkdjaljgalkshlk1wheiasldajslkc asldk asldhalksdh aslkhd alksdh alkshdlasd asdasdasdasdasd.',1,'2013-04-03 22:52:58');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
