CREATE TABLE `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

INSERT INTO `meeting` (`id`, `title`,`description`,`startDate`,`endDate`) VALUES (``,`Oh my god of bed bugs !`, `Sciences of World`, `2025/03/12`, `2025/02/12`),
  (``,`Mattresses on the moon`, `Geography of the space`, `2018/01/25`, `03/11/2018`),
  (``,`Why we code ?`, `Question existential`, `2017/12/15`, `2017/12/16`),
