-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 09.Okt 2021, 18:22
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `knihy`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `knihy`
--

CREATE TABLE `knihy` (
  `ID` int(11) NOT NULL,
  `Názov` varchar(64) NOT NULL,
  `Text` text NOT NULL,
  `Obrázok` char(128) NOT NULL,
  `Cena` decimal(6,2) NOT NULL,
  `Dátum_vytvorenia_knihy` date NOT NULL,
  `Časové_razítko` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `knihy`
--

INSERT INTO `knihy` (`ID`, `Názov`, `Text`, `Obrázok`, `Cena`, `Dátum_vytvorenia_knihy`, `Časové_razítko`) VALUES
(1, 'Upír v Sussexu', 'Dva slávne prípady geniálneho detektíva Sherlocka Holmese z pera Arthura Conana Doyla.', 'upir-sassex.jpg', '6.00', '2017-04-05', '2017-04-02 12:22:05'),
(2, 'Diabolská izba', 'V jeho tajuplných poviedkach väčšinou skeptický racionalistický hrdina, najčastejšie rozprávač (ktorý akoby z oka vypadol Dr. Watsonovi), býva konfrontovaný s tajuplnými úkazmi, ktoré ich nedovoľujú racionálne, prirodzene vysvetliť. Doylove prózy zručne dávkujú napätie a otvárajú šerosvit dohadov, až kým príde záverečný šok. No neurčitosť zostáva. „Loď, plaviacu sa polárnymi pláňami, čosi prenasleduje a kapitán Polárky upiera zrak do diaľky, kde niečo vidí len on... Tajuplné prastaré egyptské receptúry na oživovanie mŕtvych, jednoruká mátoha v lekárskom laboratóriu, médiá na špiritistických seansách, špiritistické materializácie, čosi hrôzostrašné číhajúce v temnej jaskyni, vývojové mutácie, vyžarovanie duchovnej energie z predmetu, diabolská pomsta – to všetko sú témy, sľubujúce správny zážitok pre labužníkov hororovej fantastiky. Doyle však nikdy nevyužíva lacné nadprirodzené efekty – naopak, všetky mysteriózne javy sa usiluje preskúmať s priam vedeckou metodickosťou.', 'diabolska-izba.jpg', '9.00', '2013-10-06', '2013-10-15 06:12:06'),
(3, 'Dobrodružstvá Sherlocka Holmesa', 'Zápisník doktora Watsona je plný prípadov, ktoré vzbudili väčší či menší záujem verejnosti. Časť z nich zverejnila londýnska tlač, niektoré sa ukázali priveľmi zamotané aj pre Sherlockove analytické schopnosti, iné dokončil len spolovice a ich riešenie sa zakladá skôr na dohadoch a domnienkach. Sú medzi nimi i také, ktoré sa vyznačujú zaujímavými črtami a mimoriadne pozoruhodnými detailmi a ktorých vyústenie je také šokujúce, že si doktor nemôže pomôcť a musí nám ich vyrozprávať. Dobrodružstvá Sherlocka Holmesa, to je dvanásť vybraných prípadov, ktoré Watson s Holmesom riešili v rozpätí rokov 1882 – 1890. Prostredníctvom nich nám Watson predstavuje svojho priateľa, jeho výnimočné metódy a počiny na poli boja so zločinom viktoriánskeho Anglicka. V druhom zväzku edície Sherlock Holmes prinášame detektívne poviedky v novom preklade Jána Kamenistého a ilustráciami Jula Nagya.', 'sh2-dobrodruzstva.jpg', '15.00', '2017-03-05', '2017-03-06 09:27:02');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `knihy`
--
ALTER TABLE `knihy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `knihy`
--
ALTER TABLE `knihy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
