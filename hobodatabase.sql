-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.4.20-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versie:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Databasestructuur van hobonew wordt geschreven
CREATE DATABASE IF NOT EXISTS `hobonew` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `hobonew`;

-- Structuur van  tabel hobonew.ehistory wordt geschreven
CREATE TABLE IF NOT EXISTS `ehistory` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `uid` int(200) DEFAULT NULL,
  `bevent` varchar(256) NOT NULL,
  `aevent` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.ehistory: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `ehistory` DISABLE KEYS */;
/*!40000 ALTER TABLE `ehistory` ENABLE KEYS */;

-- Structuur van  tabel hobonew.episodes wordt geschreven
CREATE TABLE IF NOT EXISTS `episodes` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `titel` varchar(128) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `season` varchar(8) NOT NULL,
  `seriename` varchar(128) NOT NULL,
  `serieid` int(128) DEFAULT NULL,
  `filename` varchar(512) NOT NULL,
  `edate` varchar(26) DEFAULT NULL,
  `picname` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `serieid` (`serieid`),
  CONSTRAINT `episodes_ibfk_1` FOREIGN KEY (`serieid`) REFERENCES `serie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.episodes: ~12 rows (ongeveer)
/*!40000 ALTER TABLE `episodes` DISABLE KEYS */;
INSERT INTO `episodes` (`id`, `titel`, `description`, `season`, `seriename`, `serieid`, `filename`, `edate`, `picname`) VALUES
	(1, 'There\'s still hope!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(2, 'There\'s still hope 2!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(3, 'There\'s still hope 3!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(4, 'There\'s still hope 4!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(5, 'There\'s still hope 5!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(6, 'There\'s still hope 6!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(7, 'There\'s still hope 7!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(8, 'There\'s still hope 8!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(9, 'There\'s still hope 9!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(10, 'There\'s still hope 10!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(11, 'There\'s still hope 11!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg'),
	(12, 'There\'s still hope 12!', 's diabdh gweyuhid bawhiu dgiuywe giuydwaui dwa hiuwy bduhw bduhas bd ygwy bwauh dgbweuya dbuw duyiab dwia bdniuohwa bdhjaw vd yuwa hujoaewdgh awuh gwead awhouiys duoyaw buh', '1', 'Peaky Blinders', 6, 'peakyblinders.mp4', NULL, 'Epic.jpg');
/*!40000 ALTER TABLE `episodes` ENABLE KEYS */;

-- Structuur van  tabel hobonew.films wordt geschreven
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `titel` varchar(128) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `year` int(4) DEFAULT NULL,
  `filename` varchar(512) NOT NULL,
  `picname` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.films: ~7 rows (ongeveer)
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` (`id`, `titel`, `description`, `year`, `filename`, `picname`) VALUES
	(1, 'Fast &amp; furious(2001)', 'Los Angeles police officer Brian O\'Conner must decide where his loyalty really lies when he becomes enamored with the street racing world he has been sent undercover to destroy.', 2001, 'peakyblinders.mp4', 'fast&amp;furious1.jpg'),
	(2, 'Hotel Transylvania 4', 'After one experiment, Johnny turns into a monster and everyone else becomes human. Now it has to be seen whether they will be able to reverse this experiment.', 2022, 'peakyblinders.mp4', 'Hoteltrans4.jpg'),
	(3, '356 Days', 'Massimo is a member of the Sicilian Mafia family and Laura is a sales director. She does not expect that on a trip to Sicily trying to save her relationship, Massimo will kidnap her and give her 365 days to fall in love with him.', 2020, 'peakyblinders.mp4', '365days.jpg'),
	(4, 'Fifty Shades of Grey', 'Literature student Anastasia Steele\'s life changes forever when she meets handsome, yet tormented, billionaire Christian Grey.', 2015, 'peakyblinders.mp4', '50shadesofgray.jpg'),
	(5, 'Monsters, Inc.', 'In order to power the city, monsters have to scare children so that they scream. However, the children are toxic to the monsters, and after a child gets through, two monsters realize things may not be what they think.', 2001, 'peakyblinders.mp4', 'monstersink.jpg'),
	(6, 'Shrek', 'A mean lord exiles fairytale creatures to the swamp of a grumpy ogre, who must go on a quest and rescue a princess for the lord in order to get his land back.', 2001, 'peakyblinders.mp4', 'shrek.jpg'),
	(7, 'Oppenheimer', 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.', 2023, 'peakyblinders.mp4', 'openheimer.png');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;

-- Structuur van  tabel hobonew.genre wordt geschreven
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `genname` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.genre: ~29 rows (ongeveer)
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` (`id`, `genname`) VALUES
	(2, 'Science Ficton'),
	(3, 'Horror'),
	(4, 'Historical'),
	(5, 'Crime'),
	(6, 'Drama'),
	(7, 'Fantasy'),
	(8, 'Romance'),
	(9, 'Detective'),
	(10, 'Teen'),
	(11, 'Comedy'),
	(12, 'Satire'),
	(13, 'Coming of Age'),
	(14, 'Biopic'),
	(15, 'Suspense'),
	(16, 'Children'),
	(17, 'Adventure'),
	(18, 'Supernatural'),
	(19, 'Thriller'),
	(20, 'Docu'),
	(21, 'Art'),
	(22, 'Culinary'),
	(23, 'True Crime'),
	(24, 'Superhero'),
	(25, 'Political'),
	(26, 'Travel'),
	(27, 'Cooking'),
	(28, 'Drug'),
	(29, 'Lifestyle'),
	(30, 'Sports');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;

-- Structuur van  tabel hobonew.genserie wordt geschreven
CREATE TABLE IF NOT EXISTS `genserie` (
  `type` varchar(28) NOT NULL,
  `serieid` int(28) NOT NULL,
  `genreid` int(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.genserie: ~65 rows (ongeveer)
/*!40000 ALTER TABLE `genserie` DISABLE KEYS */;
INSERT INTO `genserie` (`type`, `serieid`, `genreid`) VALUES
	('serie', 6, 5),
	('serie', 6, 6),
	('serie', 6, 8),
	('serie', 6, 9),
	('serie', 6, 3),
	('film', 1, 2),
	('film', 1, 5),
	('film', 1, 8),
	('film', 1, 19),
	('film', 1, 28),
	('film', 1, 23),
	('film', 2, 2),
	('film', 2, 8),
	('film', 2, 10),
	('film', 2, 12),
	('film', 2, 16),
	('film', 2, 18),
	('film', 2, 24),
	('film', 2, 29),
	('film', 3, 2),
	('film', 3, 6),
	('film', 3, 7),
	('film', 3, 8),
	('film', 3, 13),
	('film', 3, 21),
	('film', 3, 28),
	('film', 4, 8),
	('film', 4, 13),
	('film', 4, 21),
	('film', 4, 25),
	('film', 4, 28),
	('film', 4, 29),
	('film', 5, 7),
	('film', 5, 10),
	('film', 5, 17),
	('film', 5, 16),
	('film', 5, 15),
	('film', 5, 24),
	('film', 5, 29),
	('film', 5, 11),
	('film', 5, 13),
	('film', 6, 2),
	('film', 6, 7),
	('film', 6, 4),
	('film', 6, 11),
	('film', 6, 16),
	('film', 6, 17),
	('film', 6, 26),
	('film', 6, 29),
	('film', 6, 10),
	('film', 7, 6),
	('film', 7, 8),
	('film', 7, 15),
	('film', 7, 23),
	('film', 7, 26),
	('film', 7, 25),
	('film', 7, 5),
	('film', 7, 9),
	('serie', 7, 2),
	('serie', 7, 10),
	('serie', 7, 13),
	('serie', 7, 17),
	('serie', 7, 18),
	('serie', 7, 29),
	('serie', 7, 24),
	('', 0, 16);
/*!40000 ALTER TABLE `genserie` ENABLE KEYS */;

-- Structuur van  tabel hobonew.history wordt geschreven
CREATE TABLE IF NOT EXISTS `history` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `uid` int(200) DEFAULT NULL,
  `sid` int(200) DEFAULT NULL,
  `sname` int(200) DEFAULT NULL,
  `event` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.history: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
/*!40000 ALTER TABLE `history` ENABLE KEYS */;

-- Structuur van  tabel hobonew.profile wordt geschreven
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `pic` varchar(28) DEFAULT NULL,
  `fgenre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.profile: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;

-- Structuur van  tabel hobonew.serie wordt geschreven
CREATE TABLE IF NOT EXISTS `serie` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `titel` varchar(128) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `uploadd` int(4) DEFAULT NULL,
  `run` int(10) DEFAULT 0,
  `picname` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.serie: ~7 rows (ongeveer)
/*!40000 ALTER TABLE `serie` DISABLE KEYS */;
INSERT INTO `serie` (`id`, `titel`, `description`, `uploadd`, `run`, `picname`) VALUES
	(1, 'The last of us', 'The Last of Us is a 2013 action-adventure game developed by Naughty Dog and published by Sony Computer Entertainment. Players control Joel, a smuggler tasked with escorting a teenage girl, Ellie, across a post-apocalyptic United States. The Last of Us is played from a third-person perspective.', 2010, 0, 'thelastofus.jpg'),
	(2, 'Loki', 'Who is Loki? In Norse mythology Loki is a cunning trickster who has the ability to change his shape and sex. Although his father is the giant Fárbauti, he is included among the Aesir (a tribe of gods). Loki is represented as the companion of the great gods Odin and Thor.', 2011, 0, 'loki.jpg'),
	(3, 'Lost', 'Lost was a fast-paced, suspenseful, and surreal series about a group of people who survive when their commercial passenger jet, Oceanic Airlines Flight 815, crashes on a remote island in the tropical Pacific. As the survivors work together in an attempt to stay alive, they discover many mysteries about the island.', 2012, 0, 'lost.jpg'),
	(4, 'The Witcher', 'The series revolves around the eponymous &quot;witcher&quot;, Geralt of Rivia. In Sapkowski\'s works, &quot;witchers&quot; are beast hunters who are given supernatural abilities at a young age to battle wild beasts and monsters.', 2013, 0, 'thewitcher.jpg'),
	(5, 'Wednesday', 'Follows Wednesday Addams\' years as a student, when she attempts to master her emerging psychic ability, thwart a killing spree, and solve the mystery that embroiled her parents.', 2014, 0, 'wednesday.jpg'),
	(6, 'Peaky Blinders', 'Peaky Blinders is a crime drama centred on a family of mixed Irish Traveller and Romani origins based in Birmingham, England, starting in 1919, several months after the end of the First World War. It centres on the Peaky Blinders street gang and their ambitious, cunning crime boss Tommy Shelby.', 2015, 0, 'peakyblinders.jpg'),
	(7, 'Teen Wolf', 'A single wolf bite changes everything for awkward high school sophomore Scott McCall (Tyler Posey). Now Scott has super-human abilities, but he also soon finds himself being pulled into the middle of a war between werewolves and werewolf hunters!', 2011, 0, 'teenwolf.jpg');
/*!40000 ALTER TABLE `serie` ENABLE KEYS */;

-- Structuur van  tabel hobonew.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(26) NOT NULL,
  `tname` varchar(26) DEFAULT NULL,
  `lname` varchar(26) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(512) NOT NULL,
  `authority` varchar(26) NOT NULL,
  `lang` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dumpen data van tabel hobonew.users: ~4 rows (ongeveer)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `fname`, `tname`, `lname`, `email`, `password`, `authority`, `lang`) VALUES
	(7, 'test', 'test', 'test', 'test@gmail.com', '$2y$10$3V4D9Fm8cZH5iB6kIvHSnOa9UEhHS3BCHS.YpaWfLJbLBW7EIZr6.', 'admin', 'en'),
	(8, 'test2', 'test2', 'test2', 'test@gmail.com', '$2y$10$O7ycxhJonLfaWUlrxPye.uoU8d3LsylbU8gjO2v8OnYx4MGV3fwJ6', 'customer', 'en'),
	(9, 'sem2', '', 'verlinden', 'sem@gmail.com', '$2y$10$Nim7GvvMHkADfoRbRYruyuYGKgFxqoWLwt4Tbqhr/XrSYevqpXygq', 'customer', 'en'),
	(10, 'test34', 'test3', 'test3', 'test3@gmail.com', '$2y$10$Lmd9xN3oPuXymMGQ3Exs..lsEsM0.yjza4NYxiqkU8Bmj.ZeDqZ5S', 'customer', 'en');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
