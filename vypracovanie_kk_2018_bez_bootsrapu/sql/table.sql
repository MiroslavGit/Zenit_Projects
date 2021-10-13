CREATE database zen_har;


CREATE TABLE sluzby(
    ID INT NOT NULL auto_increment,
    sluzba VARCHAR (30) NOT NULL,
    obrazok VARCHAR (30) NOT NULL,
    popis CHAR (128) NOT NULL,
    razitko timestamp NOT NULL,
    primary key (ID)
)

CREATE TABLE rezevacie(
    ID INT NOT NULL auto_increment,
    sluzba VARCHAR (30) NOT NULL,
    datum Date NOT NULL,
    meno CHAR (50) NOT NULL,
    kontakt varchar(50) NOT NULL,
    stav varchar(30) NOT NULL,
    razitko timestamp NOT NULL,
    primary key (ID)
)