CREATE database zen_har;


CREATE TABLE sluzby(
    ID INT NOT NULL auto_increment,
    sluzba VARCHAR (64) NOT NULL,
    obrazok VARCHAR (128) NOT NULL,
    popis text NOT NULL,
    razitko TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    primary key (ID)
)

INSERT INTO sluzby
values (1 , opravy , sluzby-opravy.png ,Všeobecné opravy<br>Špecializované opravy<br>Dobové náhradné diely)


CREATE TABLE rezervacky (
id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
typ_sluzby SET('oprava','čalúnenie','farbenie','konzultácia') NOT NULL,
datum_rezervacie DATE NOT NULL, 
meno VARCHAR(64) NOT NULL,
kontakt VARCHAR(128) NOT NULL,
stav SET('prijatá','schválená','zamietnutá') NOT NULL,
razitko TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO rezervacky(id, typ_sluzby, datum_rezervacie, meno, kontakt, stav, cas) VALUES 
('1','oprava','2018-11-19','Tamara Melicharová','tamara.melicharova@zenit.sk','prijatá'),
INSERT INTO rezervacky(id, typ_sluzby, datum_rezervacie, meno, kontakt, stav, cas) VALUES 
('1','oprava','2018-11-19','Tamara Melicharová','tamara.melicharova@zenit.sk','prijatá'),
('2','čalúnenie','2018-11-20','Roman Vild','roman.v@zenit.sk','schválená'),
('3','farbenie','2018-11-21','David Seifert','d.seifert@zenit.sk','zamietnutá'),
('4','konzultácia','2018-11-22','Adriana Skriváňová','drianas@zenit.sk','prijatá'),
('5','oprava','2018-11-23','Linda Hegrová','hegrova@zenit.sk','schválená'),
('6','čalúnenie','2018-11-24','Ladislav Synek','synek@zenit.sk','prijatá'),
('7','farbenie','2018-11-25','Tibor Nohejl','tino@zenit.sk','prijatá'),
('8','konzultácia','2018-11-19','Alexandra Stenová','sten@zenit.sk','schválená'),
('9','oprava','2018-11-20','Roman Zvolan','zvolan@zenit.sk','zamietnutá'),
('10','čalúnenie','2018-11-21','Markéta Vozeníková','marketa.vozenikova@zenit.sk','prijatá'),
('11','farbenie','2018-11-22','Robin Vlk','robin@zenit.sk','schválená'),
('12','konzultácia','2018-11-23','Dalibor Konarík','konarik@zenit.sk','zamietnutá'),
('13','oprava','2018-11-24','Vincent Kalina','kalina@zenit.sk','prijatá'),
('14','čalúnenie','2018-11-25','Zita Volfová','volfova@zenit.sk','schválená'),
('15','farbenie','2018-11-19','Marián Švehla','marian.svehla@zenit.sk','prijatá'),
('16','konzultácia','2018-01-03','Július Adamík','juliusss@zenit.sk','prijatá');