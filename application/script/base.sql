
    create database takalo;

    use takalo;

    drop table user;
    drop table photos;
    drop table categorie;
    drop table objet;
    drop table details_objet;
    drop table proposition;

    CREATE TABLE user (
        id int primary key auto_increment,
        email varchar(255) not null,
        password varchar(255) not null,
        isAdmin boolean
    );

    CREATE TABLE objet (
        id int primary key auto_increment,
        idUser int not null,
        nom varchar(255),
        prix float,
        foreign key(idUser) references user(id)
    );

    CREATE TABLE photos(
        id int primary key auto_increment,
        idObjet int not null,
        link varchar(255),
        foreign key(idObjet) references objet(id)
    );

    CREATE TABLE categorie (
        id int primary key auto_increment,
        nom varchar(255) not null
    );


    CREATE TABLE details_objet  (
        id int primary key auto_increment ,
        idObjet int not null,
        idCategorie int default 6,
        foreign key (idObjet) references objet(id),
        foreign key (idCategorie) references categorie(id)
    );

    CREATE TABLE proposition(
        id int primary key auto_increment,
        idUser int not null,
        idObjetMain int not null,
        idObjetProposition int not null,
        status varchar(255),
        foreign key (idUser) references user(id),
        foreign key (idObjetMain) references objet(id), 
        foreign key (idObjetProposition) references objet(id)
    );
