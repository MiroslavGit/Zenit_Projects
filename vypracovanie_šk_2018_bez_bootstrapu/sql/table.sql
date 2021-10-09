CREATE database knihy;

CREATE TABLE Knihy(
    ID INT NOT NULL auto_increment,
    Názov VARCHAR (64) NOT NULL,
    Text text NOT NULL,
    Obrázok CHAR (128) NOT NULL,
    Cena DECIMAL (6, 2) NOT NULL,
    Dátum_vytvorenia_knihy Date NOT NULL,
    Časové_razítko timestamp Not NULL,
    primary key (ID)
)

