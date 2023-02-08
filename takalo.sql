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
    Descriptions VARCHAR(200),
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

INSERT INTO Utilisateur (idUtilisateur,nom,Email,mdp,administrateur) VALUES (1,"Karine","karine@gmail.com","12345",0);
INSERT INTO Utilisateur (nom,Email,mdp,administrateur) VALUES ("Kanto","kanto@gmail.com","56789",1);
INSERT INTO Utilisateur (nom,Email,mdp,administrateur) VALUES ("FRancko","francko@gmail.com","34567",0);

INSERT INTO Objects (idObjet,idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (1,1,"Nike","Lorem ipsum",null,null,null,null,50,"Kiraro");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (2,"Adidas","Lorem ipsum",null,null,null,null,50,"Kiraro");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (3,"Puma","Lorem ipsum",null,null,null,null,50,"Kiraro");

INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (1,"Converse Chuck Taylor","Lorem ipsum","kiraroMain.jpg","kiraro1","kiraro2","kiraro3",50,"Kiraro");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (2,"Its end with us","It Ends With Us c'est l'histoire d'amour de Lily et Ryle. Une histoire idyllique qui ferait presque rêvée.","bokyMain.jpg","boky1.jpg","boky2.jpg","boky3.jpg",50,"Boky");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (3,"T-shirt Actual","Lorem ipsum","akanjoMain.jpg","akanjo1.jpg","akanjo2.jpg","akanjo3.jpg",50,"Akanjo");
INSERT INTO Objects (idUtilisateur,NomObjet,Descriptions,imgMain,img1,img2,img3,Prix,Categorie) VALUES (1,"iPhone 11","Lorem ipsum","phoneMain","phone1","phone2","phone3",50,"Telephone");

INSERT INTO Echange (idEchange,Obj1,Obj2,etat) VALUES (1,1,3,2);

create or REPLACE view userObject as(
select o.idutilisateur, o.idObjet, o.nomobjet, o.descriptions, o.imgMain, o.img1, o.img2, o.img3, o.prix, o.categorie, u.nom, u.email, u.mdp
from Objects o 
join Utilisateur u on o.idUtilisateur=u.idUtilisateur
)
select * from userObject where idUtilisateur=1
