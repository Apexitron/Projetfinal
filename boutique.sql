DROP DATABASE IF EXISTS boutique;
CREATE DATABASE boutique;
USE boutique;

CREATE TABLE type_prod
(
id_type_prod INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
libelle_type_prod VARCHAR(50) NOT NULL
);

INSERT INTO type_prod VALUES
(1, "Produit bon marché"),
(2, "Solide sur les appuis"),
(3, "On est sur du luxe là");

CREATE TABLE client
(
id_client INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nom_client VARCHAR(50) NOT NULL,
prenom_client VARCHAR(50) NOT NULL,
adresse_client VARCHAR(50) NOT NULL,
cp_client INT NOT NULL,
ville_client VARCHAR(20) NOT NULL
);

INSERT INTO client VALUES
(1,"René", "André", "7 rue Montcuq",08500 ,"Poulet"),
(2,"Virzan", "Jacqueline", "3 rue de la Soif",02600 ,"Falzar"),
(3,"Bac", "Nikla", "5 rue du Fuss",03450 ,"Nuoge"),
(4,"Ficassion", "Falsi", "6 rue du Stress",09450 ,"Burdo");

CREATE TABLE commande
(
id_commande INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
date_commande DATE NOT NULL,
adresse_commande VARCHAR(50) NOT NULL,
cp_commande INT NOT NULL,
ville_commande VARCHAR(50) NOT NULL,
id_client INT(5) NOT NULL,
FOREIGN KEY(id_client) REFERENCES client(id_client)
);

INSERT INTO commande VALUES
(1,"2020-03-14", "7 rue Montcuq",08500 , "Poulet",1 ),
(2,"2020-05-13", "3 rue de la Soif",02600 , "Falzar",2 ),
(3,"2020-03-12", "5 rue du Fuss",03450 , "Nuoge",3 ),
(4,"2020-05-11", "6 rue du Stress",09450 , "Burdo",4 ),
(5,"2020-03-12", "3 rue de la Soif",02600 , "Falzar",2 ),
(6,"2020-06-12", "3 rue de la Soif",02600 , "Falzar",2 );

CREATE TABLE produit
(
id_produit INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
libelle_produit VARCHAR(100) NOT NULL,
prixht_produit INT NOT NULL,
id_type_prod INT(5) NOT NULL,
FOREIGN KEY(id_type_prod) REFERENCES type_prod(id_type_prod)
);

INSERT INTO produit VALUES
(1,"Aspirateur du futur", 200, 2),
(2,"Guillotine3000", 2500, 3),
(3,"Caisse à savon", 30, 1),
(4,"Statue de Godzilla", 550000, 3),
(5, "Peluche d'ours", 475, 1);

CREATE TABLE contenir
(
PRIMARY KEY(id_commande, id_produit),
id_commande INT(5) NOT NULL,
id_produit INT(5) NOT NULL,
quantite_produit INT NOT NULL,
FOREIGN KEY(id_commande) REFERENCES commande(id_commande),
FOREIGN KEY(id_produit) REFERENCES produit(id_produit)
);

INSERT INTO contenir VALUES
(1,1,3),
(1,2,4),
(2,1,5),
(2,2,6),
(3,2,1),
(3,1,8),
(4,3,50),
(4,5,24),
(5,2,3),
(5,3,6),
(6,4,2),
(6,5,6);

