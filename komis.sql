-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Lis 2017, 14:11
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `komis`
--
CREATE DATABASE IF NOT EXISTS `komis` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `komis`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auta`
--

DROP TABLE IF EXISTS `auta`;
CREATE TABLE IF NOT EXISTS `auta` (
  `id_auta` int(10) NOT NULL AUTO_INCREMENT,
  `id_marki` int(10) NOT NULL,
  `model` varchar(20) NOT NULL,
  `rok_produkcji` year(4) NOT NULL,
  `kolor` varchar(20) NOT NULL,
  `przebieg` int(7) NOT NULL,
  `kraj_pochodzenia` varchar(30) NOT NULL,
  `rodzaj_paliwa` varchar(20) NOT NULL,
  `nadwozie` varchar(15) NOT NULL,
  `silnik` int(4) NOT NULL,
  `skrzynia_biegow` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cena` decimal(8,2) NOT NULL,
  `id_dodatkowego_wyposazenia` int(10) NOT NULL,
  `data_dodania` date NOT NULL,
  PRIMARY KEY (`id_auta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `auta`
--

INSERT INTO `auta` (`id_auta`, `id_marki`, `model`, `rok_produkcji`, `kolor`, `przebieg`, `kraj_pochodzenia`, `rodzaj_paliwa`, `nadwozie`, `silnik`, `skrzynia_biegow`, `status`, `cena`, `id_dodatkowego_wyposazenia`, `data_dodania`) VALUES
(1, 4, 'Suberb', 2015, 'czarny', 50000, 'Polska', 'benzyna', 'limuzyna', 1998, 'manualna', 0, '80000.00', 1, '2017-11-29');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dodatkowe_wyposazenia`
--

DROP TABLE IF EXISTS `dodatkowe_wyposazenia`;
CREATE TABLE IF NOT EXISTS `dodatkowe_wyposazenia` (
  `id_wyposazenia` int(10) NOT NULL AUTO_INCREMENT,
  `abs` tinyint(1) NOT NULL,
  `klimatyzacja` tinyint(1) NOT NULL,
  `esp` tinyint(1) NOT NULL,
  `wspomaganie_kierownicy` tinyint(1) NOT NULL,
  `elektryczne_szyby` tinyint(1) NOT NULL,
  `centralny_zamek` tinyint(1) NOT NULL,
  `radio` tinyint(1) NOT NULL,
  `szyberdach` tinyint(1) NOT NULL,
  `czujnik_parkowania` tinyint(1) NOT NULL,
  `czujnik_deszczu` tinyint(1) NOT NULL,
  `czujnik_zmierzchu` tinyint(1) NOT NULL,
  `podgrzewane_fotele` tinyint(1) NOT NULL,
  `elektryczne_lusterka` tinyint(1) NOT NULL,
  `gps` tinyint(1) NOT NULL,
  `tempomat` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_wyposazenia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `dodatkowe_wyposazenia`
--

INSERT INTO `dodatkowe_wyposazenia` (`id_wyposazenia`, `abs`, `klimatyzacja`, `esp`, `wspomaganie_kierownicy`, `elektryczne_szyby`, `centralny_zamek`, `radio`, `szyberdach`, `czujnik_parkowania`, `czujnik_deszczu`, `czujnik_zmierzchu`, `podgrzewane_fotele`, `elektryczne_lusterka`, `gps`, `tempomat`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

DROP TABLE IF EXISTS `klienci`;
CREATE TABLE IF NOT EXISTS `klienci` (
  `id_klienta` int(10) NOT NULL AUTO_INCREMENT,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `dowod_osobisty` varchar(9) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `miasto` varchar(40) NOT NULL,
  `kod_pocztowy` int(5) NOT NULL,
  `login` varchar(32) NOT NULL,
  `haslo` varchar(32) NOT NULL,
  `nr_telefonu` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_klienta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki`
--

DROP TABLE IF EXISTS `marki`;
CREATE TABLE IF NOT EXISTS `marki` (
  `id_marki` int(10) NOT NULL AUTO_INCREMENT,
  `nazwa_marki` varchar(20) NOT NULL,
  PRIMARY KEY (`id_marki`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `marki`
--

INSERT INTO `marki` (`id_marki`, `nazwa_marki`) VALUES
(1, 'Opel'),
(2, 'Mercedes'),
(3, 'Seat'),
(4, 'Skoda');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
CREATE TABLE IF NOT EXISTS `pracownicy` (
  `id_pracownika` int(10) NOT NULL AUTO_INCREMENT,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `login` varchar(32) NOT NULL,
  `haslo` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uprawnienia` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_pracownika`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprzedaz`
--

DROP TABLE IF EXISTS `sprzedaz`;
CREATE TABLE IF NOT EXISTS `sprzedaz` (
  `id_sprzedazy` int(10) NOT NULL AUTO_INCREMENT,
  `data_sprzedazy` date NOT NULL,
  `id_auta` int(10) NOT NULL,
  `id_klienta` int(10) NOT NULL,
  `id_pracownika` int(10) NOT NULL,
  PRIMARY KEY (`id_sprzedazy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
