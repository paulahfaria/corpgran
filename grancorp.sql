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
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `contatos` */

insert  into `contatos`(`id`,`email`) values (1,'asdasd@gmail.com');
insert  into `contatos`(`id`,`email`) values (4,'joao@gmail.com');
insert  into `contatos`(`id`,`email`) values (5,'asdasd');
insert  into `contatos`(`id`,`email`) values (6,'asdas');
insert  into `contatos`(`id`,`email`) values (7,'asdasd@gmail.com');
insert  into `contatos`(`id`,`email`) values (8,'aaaaaa@gmail.com');
insert  into `contatos`(`id`,`email`) values (9,'asdasd@gmail.com');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `curriculos` */

insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (1,'vagaaa','asdasdasd@gmail.com','',NULL,NULL,1,0,'2013-04-02 23:59:10');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (2,'vagaaaa','asdasdasd@gmail.com','','grancorp.txt',NULL,1,0,'2013-04-03 00:00:47');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (3,'tsadas','asdasdasd@gmail.com',NULL,'grancorp.txt',1,NULL,0,'2013-04-03 20:54:27');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (4,'tsadas','asdasdasd@gmail.com',NULL,'grancorp.txt',1,NULL,0,'2013-04-03 23:54:47');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (5,'thiago','thiago@gmail.com',NULL,'grancorp.txt',2,NULL,0,'2013-04-09 02:00:04');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (6,NULL,NULL,NULL,NULL,NULL,NULL,0,'2013-04-26 00:02:19');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (7,'joao','lalal@gmail.com',NULL,NULL,1,NULL,0,'2013-04-26 00:03:51');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (8,'thiago','thiago@gmail.com','23123123',NULL,NULL,1,0,'2013-04-26 00:18:14');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (9,'','',NULL,NULL,1,NULL,0,'2013-05-02 00:11:21');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (10,'thiago','thiago@gmail.com',NULL,'destaque.jpg',1,NULL,0,'2013-05-02 00:11:54');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (11,'thiago','thiago@gmail.com',NULL,'empreendimento.jpg',1,NULL,0,'2013-05-02 00:13:02');
insert  into `curriculos`(`id`,`nome`,`email`,`telefone`,`arquivo`,`vaga_id`,`area_id`,`visualizado`,`created`) values (12,'thiagp','thiago@gmail.com','3123123','agradecimento.doc',NULL,1,0,'2013-05-15 23:15:36');

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
  `titulo` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `destaques` */

insert  into `destaques`(`id`,`nome`,`arquivo`,`link`,`target`,`prioridade`,`ativo`,`created`,`modified`,`titulo`) values (1,'Destaque 1','destaque.jpg','http://google.com',1,0,1,'2013-04-01 02:13:48','2013-05-07 00:21:28','<span>Residencial</span>\r\n<span>Empreendimento</span>');

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
  `status` int(11) DEFAULT NULL,
  `muro` int(11) DEFAULT '0',
  `fundacao` int(11) DEFAULT '0',
  `alvenaria` int(11) DEFAULT '0',
  `estrutura` int(11) DEFAULT '0',
  `cobertura` int(11) DEFAULT '0',
  `esquadrias` int(11) DEFAULT '0',
  `instalacoes` int(11) DEFAULT '0',
  `revestimento` int(11) DEFAULT '0',
  `pavimentacao` int(11) DEFAULT '0',
  `pintura` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_empreendimentos_bairros` (`bairro_id`),
  KEY `fk_empreendimentos_quartos1` (`quarto_id`),
  KEY `fk_empreendimentos_etapas1` (`etapa_id`),
  CONSTRAINT `fk_empreendimentos_bairros` FOREIGN KEY (`bairro_id`) REFERENCES `bairros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empreendimentos_etapas1` FOREIGN KEY (`etapa_id`) REFERENCES `etapas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empreendimentos_quartos1` FOREIGN KEY (`quarto_id`) REFERENCES `quartos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `empreendimentos` */

insert  into `empreendimentos`(`id`,`bairro_id`,`quarto_id`,`etapa_id`,`nome`,`slug`,`descricao`,`atributos`,`created`,`modified`,`latitude`,`longitude`,`status`,`muro`,`fundacao`,`alvenaria`,`estrutura`,`cobertura`,`esquadrias`,`instalacoes`,`revestimento`,`pavimentacao`,`pintura`) values (1,1,1,2,'Empredimento noÃ§o','empredimento-noco','Curabitur sed blandit massa. Donec pretium dignissim justo faucibus ultricies. Mauris risus dolor, faucibus vitae ullamcorper quis, malesuada et risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse tincidunt ornare sem, eget consequat augue iaculis nec. Pellentesque ac sapien nunc, a aliquet justo. Quisque tristique pulvinar mauris interdum volutpat.','Curabitur sed blandit\r\n Donec pretium dignissim \r\nMauris risus dolor','2013-03-25 00:50:54','2013-05-09 23:47:09','-19.918339','-43.940102',69,20,55,11,22,33,44,55,65,75,43);
insert  into `empreendimentos`(`id`,`bairro_id`,`quarto_id`,`etapa_id`,`nome`,`slug`,`descricao`,`atributos`,`created`,`modified`,`latitude`,`longitude`,`status`,`muro`,`fundacao`,`alvenaria`,`estrutura`,`cobertura`,`esquadrias`,`instalacoes`,`revestimento`,`pavimentacao`,`pintura`) values (2,2,2,3,'Savassi','savassi','emprendimento savassi','asdasdasdsdsd\r\nasdasdasdasdasd\r\nasdasdadasd\r\nasdasdasdasd\r\n','2013-04-01 01:50:23','2013-04-02 01:16:05','-19.925056','-43.946455',NULL,0,0,0,0,0,0,0,0,0,0);

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
  PRIMARY KEY (`empreendimento_id`,`usuario_id`),
  KEY `fk_empreendimentos_has_usuarios_usuarios1` (`usuario_id`),
  KEY `fk_empreendimentos_has_usuarios_empreendimentos1` (`empreendimento_id`),
  CONSTRAINT `fk_empreendimentos_has_usuarios_empreendimentos1` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_empreendimentos_has_usuarios_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `favoritos` */

insert  into `favoritos`(`empreendimento_id`,`usuario_id`) values (1,2);
insert  into `favoritos`(`empreendimento_id`,`usuario_id`) values (1,3);

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
  `privado` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_imagens_empreendimentos1` (`empreendimento_id`),
  CONSTRAINT `fk_imagens_empreendimentos1` FOREIGN KEY (`empreendimento_id`) REFERENCES `empreendimentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `imagens` */

insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`,`privado`) values (2,1,'asdasd','empreendimento.jpg',1,'2013-03-31 20:30:47','2013-04-01 01:48:55',0);
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`,`privado`) values (3,1,'piscinaaaaaaaaaa','PIS CINA.jpg',0,'2013-03-31 20:51:16','2013-04-01 01:48:56',0);
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`,`privado`) values (4,2,'Titulo','empreendimento.jpg',1,'2013-04-01 02:27:26','2013-04-26 00:58:52',0);
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`,`privado`) values (5,2,'Bla bla','empreendimento.jpg',0,'2013-04-02 22:04:41','2013-04-26 00:58:52',0);
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`,`privado`) values (6,2,'Bla bla','destaque.jpg',0,'2013-04-04 03:19:35','2013-04-26 00:58:52',0);
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`,`privado`) values (7,2,'Bla bla','empreendimento.jpg',0,'2013-04-04 03:19:36','2013-04-26 00:58:52',0);
insert  into `imagens`(`id`,`empreendimento_id`,`titulo`,`arquivo`,`destaque`,`created`,`modified`,`privado`) values (8,2,'Bla bla','PIS CINA.jpg',0,'2013-04-04 03:19:38','2013-04-26 00:58:52',0);

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) NOT NULL,
  `conteudo` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`titulo`,`conteudo`,`created`,`modified`,`imagem`) values (1,'noticia teste 1','                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2013-04-07 23:54:45','2013-04-29 02:12:02','PIS CINA.jpg');
insert  into `noticias`(`id`,`titulo`,`conteudo`,`created`,`modified`,`imagem`) values (2,'noticia teste 2','Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2013-04-07 23:55:01','2013-04-07 23:55:01',NULL);
insert  into `noticias`(`id`,`titulo`,`conteudo`,`created`,`modified`,`imagem`) values (3,'noticia teste 3','Se eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2013-04-07 23:55:14','2013-04-07 23:55:14',NULL);
insert  into `noticias`(`id`,`titulo`,`conteudo`,`created`,`modified`,`imagem`) values (4,'nova noticia','<p>Nova noticia aslkdja sld askdj alskdj alsdkaj sldkajs dalskdj asldkj asd</p>\r\n\r\n<p>asdjkha skdjh askdjah skdjahsdkasjdh askdhasdkjahdas</p>\r\n\r\n<p>kasjdh aksdhaksdjha skdahsdkjasdha skdah ds</p>\r\n\r\n<p>Fonte <a href=\"http://google.com\">google</a></p>\r\n','2013-04-30 02:11:58','2013-04-30 02:14:38',NULL);

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

/*Table structure for table `terrenos` */

DROP TABLE IF EXISTS `terrenos`;

CREATE TABLE `terrenos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `terreno_endereco` varchar(250) NOT NULL,
  `terreno_bairro` varchar(250) NOT NULL,
  `terreno_cidade` varchar(45) NOT NULL,
  `terreno_estado` varchar(45) NOT NULL,
  `area` varchar(250) NOT NULL,
  `zoneamento` varchar(250) DEFAULT NULL,
  `topografia` varchar(250) DEFAULT NULL,
  `valor` varchar(250) DEFAULT NULL,
  `imagem` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `terrenos` */

insert  into `terrenos`(`id`,`nome`,`email`,`telefone`,`profissao`,`cidade`,`estado`,`terreno_endereco`,`terreno_bairro`,`terreno_cidade`,`terreno_estado`,`area`,`zoneamento`,`topografia`,`valor`,`imagem`) values (1,'asdasd','asdas@gmail.com','1231231231','empresario','belo horizonte','mg','rua dos otonis','centro','belo horizonte','mg','1000','allala','terra','500000','empreendimento.jpg');
insert  into `terrenos`(`id`,`nome`,`email`,`telefone`,`profissao`,`cidade`,`estado`,`terreno_endereco`,`terreno_bairro`,`terreno_cidade`,`terreno_estado`,`area`,`zoneamento`,`topografia`,`valor`,`imagem`) values (2,'thiago','thiago@gmail.com','123123','asdasda','bh','mg','aasdasd','asdasdas','bh','mg','20000','sadasd','terra','500000','');
insert  into `terrenos`(`id`,`nome`,`email`,`telefone`,`profissao`,`cidade`,`estado`,`terreno_endereco`,`terreno_bairro`,`terreno_cidade`,`terreno_estado`,`area`,`zoneamento`,`topografia`,`valor`,`imagem`) values (3,'thiago','thiago@gmail.com','123123','asdasda','bh','mg','aasdasd','asdasdas','bh','mg','20000','sadasd','terra','500000','empreendimento.jpg');
insert  into `terrenos`(`id`,`nome`,`email`,`telefone`,`profissao`,`cidade`,`estado`,`terreno_endereco`,`terreno_bairro`,`terreno_cidade`,`terreno_estado`,`area`,`zoneamento`,`topografia`,`valor`,`imagem`) values (4,'asdas','asdas@gmail.com','213123','asdas','dasda','sdasd','asdas','adas','dasd','asda','12313','asdasd','asdads','123123','empreendimento.jpg');

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
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nome`,`email`,`password`) values (1,'jose','jose@gmail.com','43e1b7b9ea0e05451b8fc3bd68859c6934e638bb');
insert  into `usuarios`(`id`,`nome`,`email`,`password`) values (2,'JoÃ£o','joao@gmail.com','43e1b7b9ea0e05451b8fc3bd68859c6934e638bb');
insert  into `usuarios`(`id`,`nome`,`email`,`password`) values (3,'Maria','maria@gmail.com','43e1b7b9ea0e05451b8fc3bd68859c6934e638bb');

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
insert  into `vagas`(`id`,`nome`,`descricao`,`ativo`,`created`) values (2,'Engenheiro','alsdj asldka jsdlja sdlaksjd alskdj alskdj\r\nalsdkjasldkajslkdjaslkdjaljgalkshlk1wheiasldajslkc \r\nasldk asldhalksdh aslkhd alksdh \r\nalkshdlasd asdasdasdasdasd.',1,'2013-04-03 22:52:58');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
