create database takalo;

use takalo;

CREATE TABLE user (
    id int primary key auto_increment,
    email varchar(255),
    password varchar(255),
    isAdmin boolean
);

CREATE TABLE categorie (
    id int primary key auto_increment,
    nom varchar(255)
);

CREATE TABLE objet (
    id int primary key auto_increment,
    idUser int,
    idCategorie int,
    nom varchar(255),
    prix float,
    foreign key(idUser) references user(id),
    foreign key(idCategorie) references categorie(id)
);