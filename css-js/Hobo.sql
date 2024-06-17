DROP DATABASE IF EXISTS hobo;
CREATE DATABASE hobo;
USE hobo; 

CREATE TABLE users (
    id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    fname VARCHAR(26) NOT NULL,
    tname VARCHAR(26),
    lname VARCHAR(26) NOT NULL,
    email VARCHAR(128) NOT NULL,
    password VARCHAR(512) NOT NULL,
    authority VARCHAR(26) NOT NULL,
    lang VARCHAR(4) NOT NULL
);

INSERT INTO `users` (`id`, `fname`, `tname`, `lname`, `email`, `password`, `authority`, `lang`) VALUES (NULL, 'rami@rami', 'rami@rami', 'rami@rami', 'rami@rami', '$2y$10$9ethZO9ApUI.phtDQaNrzOMF5BSnZlsTzejV7F3GdUshkLy5Q5ccy', 'customer', 'en');



CREATE TABLE films (
id INT(200) PRIMARY KEY AUTO_INCREMENT NOT NULL,
titel VARCHAR(128) NOT NULL,
description VARCHAR(2000) NOT NULL,
year INT(4),
filename VARCHAR(512) NOT NULL,
picname VARCHAR(128)
);

CREATE TABLE serie (
id INT(200) PRIMARY KEY AUTO_INCREMENT NOT NULL,
titel VARCHAR(128) NOT NULL,
description VARCHAR(2000) NOT NULL,
uploadd INT(4),
run INT(10) DEFAULT 0,
picname VARCHAR(128)
);

CREATE TABLE episodes (
id INT(200) PRIMARY KEY AUTO_INCREMENT NOT NULL,
titel VARCHAR(128) NOT NULL,
description VARCHAR(2000) NOT NULL,
season VARCHAR(8) NOT NULL,
seriename VARCHAR(128) NOT NULL,
serieid INT(128),
filename VARCHAR(512) NOT NULL,
edate VARCHAR(26),
picname VARCHAR(128),
FOREIGN KEY (serieid) REFERENCES serie(id)
);

CREATE TABLE genre (
id INT(200) PRIMARY KEY AUTO_INCREMENT NOT NULL,
genname VARCHAR(128) NOT NULL
);

CREATE TABLE profile(
    id INT(200) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    uid INT,
    pic VARCHAR(28),
    fgenre VARCHAR(20)
);

CREATE TABLE history(
    id INT(200) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    uid INT(200),
    sid INT(200),
    sname INT(200),
    event VARCHAR(256) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE ehistory(
    id INT(200) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    uid INT(200),
    bevent VARCHAR(256) NOT NULL,
    aevent VARCHAR(256) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO genre (`id`, `genname`) VALUES
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

CREATE TABLE genserie (
type VARCHAR(28) NOT NULL,
serieid INT(28) NOT NULL,
genreid INT(28) NOT NULL
);

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
('film', 1, 23);
--COMMIT;

INSERT INTO `serie` (`id`, `titel`, `description`, `run`, `picname`) VALUES (NULL, 'The last of us', 'The Last of Us is a 2013 action-adventure game developed by Naughty Dog and published by Sony Computer Entertainment. Players control Joel, a smuggler tasked with escorting a teenage girl, Ellie, across a post-apocalyptic United States. The Last of Us is played from a third-person perspective.', '0', 'thelastofus.jpg'), (NULL, 'Loki', 'Who is Loki? In Norse mythology Loki is a cunning trickster who has the ability to change his shape and sex. Although his father is the giant Fárbauti, he is included among the Aesir (a tribe of gods). Loki is represented as the companion of the great gods Odin and Thor.', '0', 'loki.jpg'), (NULL, 'Lost', 'Lost was a fast-paced, suspenseful, and surreal series about a group of people who survive when their commercial passenger jet, Oceanic Airlines Flight 815, crashes on a remote island in the tropical Pacific. As the survivors work together in an attempt to stay alive, they discover many mysteries about the island.', '0', 'lost.jpg'), (NULL, 'The Witcher', 'The series revolves around the eponymous &quot;witcher&quot;, Geralt of Rivia. In Sapkowski\'s works, &quot;witchers&quot; are beast hunters who are given supernatural abilities at a young age to battle wild beasts and monsters.', '0', 'thewitcher.jpg'), (NULL, 'Wednesday', 'Follows Wednesday Addams\' years as a student, when she attempts to master her emerging psychic ability, thwart a killing spree, and solve the mystery that embroiled her parents.', '0', 'wednesday.jpg'), (NULL, 'Peaky Blinders', 'Peaky Blinders is a crime drama centred on a family of mixed Irish Traveller and Romani origins based in Birmingham, England, starting in 1919, several months after the end of the First World War. It centres on the Peaky Blinders street gang and their ambitious, cunning crime boss Tommy Shelby.', '0', 'peakyblinders.jpg')