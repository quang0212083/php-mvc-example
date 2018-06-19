DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `first_name`, `last_name`, `author`, `content`, `created`, `modified`)
VALUES
	(1,'Quang desu','ok dsu','Fr-Vi','0','2018-04-25 04:03:13','2018-04-25 04:06:09'),
	(2,'Quang desu','ok dsu','Fr-Vi','Fr-Vi','2018-04-25 04:03:13','2018-04-25 04:06:09'),
	(3,'Quang desu','ok dsu','Fr-Vi','Fr-Vi','2018-04-25 04:03:13','2018-04-25 04:06:09'),
	(4,'Quang desu','ok dsu','Fr-Vi','Fr-Vi','2018-04-25 04:03:13','2018-04-25 04:06:09');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
/*UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
