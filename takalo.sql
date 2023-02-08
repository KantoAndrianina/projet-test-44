CREATE DATABASE projet_takalo;
Use projet_takalo;

CREATE TABLE Utilisateur(
    idUtilisateur INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(30),
    email VARCHAR(30),
    mdp VARCHAR(30),
    administrateur int
);

CREATE TABLE Objects(
    idObjet INT(10)  PRIMARY KEY NOT NULL AUTO_INCREMENT,
    idUtilisateur INT(10),
    NomObjet VARCHAR(30),
    Descriptions VARCHAR(30),
    imgMain VARCHAR(30),
    img1 VARCHAR(30),
    img2 VARCHAR(30),
    img3 VARCHAR(30),
    Prix FLOAT(30) not null,
    Categorie VARCHAR(30),
    FOREIGN KEY(idUtilisateur) REFERENCES Utilisateur(idUtilisateur)

);

CREATE TABLE Echange(
    idEchange INT(10)  PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Obj1 INT(10),
    Obj2 INT(10),
    etat INT(5),
    FOREIGN KEY(Obj1) REFERENCES Objet(idObjet),
    FOREIGN KEY(Obj2) REFERENCES Objet(idObjet)

);

INSERT INTO Utilisateur (idUtilisateur,nom,Email,mdp,administrateur) VALUES (1,"Karikine","karine@gmail.com","12345",0);
INSERT INTO Utilisateur (nom,Email,mdp,administrateur) VALUES ("Kanto","kanto@gmail.com","56789",1);
INSERT INTO Utilisateur (nom,Email,mdp,administrateur) VALUES ("FRancko","francko@gmail.com","34567",0);

INSERT INTO Objects (idObjet,idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (1,1,"Nike","Lorem ipsum","img_1.jpg",null,null,null,50,"Kiraro");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (2,"Adidas","Lorem ipsum","img_2.jpg",null,null,null,150,"Kiraro");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (3,"Puma","Lorem ipsum","img_3.jpg",null,null,null,50,"Kiraro");

INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (1,"Macbook","Lorem ipsum","img_4.jpg",null,null,null,50,"Ordi");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (2,"HP","Lorem ipsum","img_5.jpg",null,null,null,50,"Ordi");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (3,"Toshiba","Lorem ipsum","img_6.jpg",null,null,null,50,"Ordi");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (1,"iphone11","Lorem ipsum","img_7.jpg",null,null,null,50,"telephone");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (2,"iphone12","Lorem ipsum","img_3.jpg",null,null,null,50,"telephone");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (3,"iphone13","Lorem ipsum","img_4.jpg",null,null,null,50,"telephone");


INSERT INTO Echange (idEchange,Obj1,Obj2,etat) VALUES (1,1,3,2);
