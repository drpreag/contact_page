CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senderemail` varchar(128) NOT NULL,
  `sendername` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `filename` varchar(256) DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin2;
