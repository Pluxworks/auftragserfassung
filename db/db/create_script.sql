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

create Table if not exists bereich (
	id int auto_increment,
	name varchar(180),
	PRIMARY KEY(id)
)ENGINE=INNODB;

create Table if not exists aufwand_liste (
	id int auto_increment,
	datum date,
	taetigkeit varchar(500),
	bereich_id int,
	kunde_id int,
	vertrag varchar(40),
	aufwand varchar(20),
	mitarbeiter_id int,
	bemerkung varchar(500),
	PRIMARY KEY(id),
	FOREIGN KEY(bereich_id) REFERENCES bereich(id),
	FOREIGN KEY(kunde_id) REFERENCES kunden(id),
	FOREIGN KEY(mitarbeiter_id) REFERENCES mitarbeiter(id)
)ENGINE=INNODB;