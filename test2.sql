DROP DATABASE IF EXISTS website;
CREATE DATABASE website;
USE website;
CREATE TABLE user
(
id_user INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
pseudo_user VARCHAR(50) NOT NULL,
name_user VARCHAR(50) NOT NULL,
first_name_user VARCHAR(50) NOT NULL,
mail_user VARCHAR(50) NOT NULL,
password_user varchar(255)
);

INSERT INTO user VALUES
(1, "darkfufunaruto", "Gérard", "Jacques","oui@gmail.com","jako"),
(2, "palmito59", "Polik", "JacPierreques","non@gmail.com" ,"jako"),
(3, "lightsoupier", "Ponss", "Soupière","raf@gmail.com" ,"jako");

CREATE TABLE videogame
(
id_videogame INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_videogame VARCHAR(50) NOT NULL,
platform_videogame VARCHAR(50) NOT NULL
);

INSERT INTO videogame VALUES
(1,"League of Legends", "PC"),
(2, "CoD", "PS4"),
(3, "CoD", "Xbox"),
(4, "CoD", "PC"),
(5, "Destiny 2", "PS4"),
(6, "Destiny 2", "Xbox"),
(7, "Destiny 2", "PC"),
(8, "Super Smash Bros Ultimate", "Switch"),
(9, "Rocket League", "PS4"),
(10, "Rocket League", "Xbox"),
(11, "Rocket League", "PC"),
(12, "Rocket League", "Switch"),
(13, "Fifa 05", "PC"),
(14, "Crash Team Racing", "PS4"),
(15, "Crash Team Racing", "Xbox"),
(16, "Crash Team Racing", "PC"),
(17, "Crash Team Racing", "Switch"),
(18, "Dead by Daylight", "PS4"),
(19, "Dead by Daylight", "Xbox"),
(20, "Dead by Daylight", "PC"),
(21, "Dead by Daylight", "Switch"),
(22, "Fortnite", "PS4"),
(23, "Fortnite", "Xbox"),
(24, "Fortnite", "PC"),
(25, "Fortnite", "Switch");


CREATE TABLE play
(
PRIMARY KEY(id_user, id_videogame),
id_user INT(5) NOT NULL,
id_videogame INT(5) NOT NULL,
FOREIGN KEY(id_user) REFERENCES user(id_user),
FOREIGN KEY(id_videogame) REFERENCES videogame(id_videogame)
);

INSERT INTO play VALUES
(1,2),
(1, 3),
(2, 1),
(3, 1),
(3, 3),
(1, 24),
(1, 22),
(1, 23),
(1, 25),
(2, 24),
(3, 24);




