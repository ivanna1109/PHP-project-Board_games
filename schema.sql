CREATE DATABASE gamesdb;
USE gamesdb;

create table korisnik
(
    id        int auto_increment
        primary key,
    username  varchar(20) not null,
    password  varchar(20) not null,
    ime       varchar(15) not null,
    prezime   varchar(15) not null,
    datrodj   date        not null,
    slika varchar(300) null
);

create table igra
(
    id         int auto_increment
        primary key,
    vrstaIgre varchar(50)    not null,
    naziv      varchar(50)   not null,
    izdavac 	varchar (30) not null,
    cena       double    not null,
    brojIgraca   int   not null,
    uzrast  int  not null,
	ocena double not null,
	opis   varchar(1200) null,
    slika varchar(300) null
);


create table narudzbina
(
    id        int auto_increment
        primary key,
    igraId int  not null,
    korisnikId int not null,
	datum date not null,
    constraint narudbina_igraId_id_fk
        foreign key (igraId) references igra (id),
	constraint narudzbina_korisnikId_id_fk
        foreign key (korisnikId) references korisnik (id)
);
