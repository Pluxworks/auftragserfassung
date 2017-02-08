create database if not exists aufwand;

use aufwand;

create Table if not exists mitarbeiter (
	id int auto_increment,
	name varchar(180),
	PRIMARY KEY(id)
)ENGINE=INNODB;

create Table if not exists kunden (
	id int auto_increment,
	name varchar(180),
	kuerzel varchar(20),
	PRIMARY KEY(id)
)ENGINE=INNODB;

create Table if not exists aufwand_liste (
	id int auto_increment,
	datum date,
	taetigkeit varchar(500),
	bereich varchar(40),
	kunde varchar(180),
	vertrag varchar(40),
	aufwand varchar(20),
	mitarbeiter varchar(180),
	bemerkung varchar(500),
	PRIMARY KEY(id)
)ENGINE=INNODB;