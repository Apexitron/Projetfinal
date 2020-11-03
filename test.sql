DROP DATABASE IF EXISTS website;
CREATE DATABASE website;
USE website;
CREATE TABLE user
(
id_user INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
pseudo_user VARCHAR(50) NOT NULL,
name_user VARCHAR(50) NOT NULL,
first_name_user VARCHAR(50) NOT NULL
);

INSERT INTO user VALUES
(1, "darkfufunaruto", "Gérard", "Jacques"),
(2, "palmito59", "Polik", "JacPierreques"),
(3, "lightsoupier", "Ponss", "Soupière");

CREATE TABLE videogame
(
id_videogame INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_videogame VARCHAR(50) NOT NULL
);

INSERT INTO videogame VALUES
(1,"League of Legends"),
(2, "CoD"),
(3, "Destiny 2"),
(4, "Super Smash Bros Ultimate");

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
(3, 3);

CREATE TABLE platform
(
id_platform INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_platform VARCHAR(50) NOT NULL
);

INSERT INTO platform VALUES
(1, "PS4"),
(2, "Xbox One"),
(3, "PC"),
(4, "Nintendo Switch");

CREATE TABLE belong
(
PRIMARY KEY(id_videogame, id_platform),
id_videogame INT(5) NOT NULL,
id_platform INT(5) NOT NULL,
FOREIGN KEY(id_videogame) REFERENCES videogame(id_videogame),
FOREIGN KEY(id_platform) REFERENCES platform(id_platform)
);

INSERT INTO belong VALUES
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 4);



