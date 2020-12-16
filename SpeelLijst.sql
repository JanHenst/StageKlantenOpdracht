-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 16 dec 2020 om 12:53
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SpeelLijst`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `speel lijst`
--

CREATE TABLE `speel lijst` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT '2002-01-23',
  `title` text NOT NULL,
  `location` text NOT NULL,
  `price` decimal(10,0) NOT NULL DEFAULT '0',
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `speel lijst`
--

INSERT INTO `speel lijst` (`id`, `date`, `title`, `location`, `price`, `url`) VALUES
(103, '2020-12-16', 'boom', 'spanje', '50', 'www.google.nl'),
(104, '2020-12-11', 'boom', 'twin towers', '50', 'www.google.nl'),
(105, '2019-12-16', 'test', 'test', '12', 'www.google.nl'),
(106, '2020-12-28', 'ey', 'o', '16', 'www.google.nl');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `speel lijst`
--
ALTER TABLE `speel lijst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `speel lijst`
--
ALTER TABLE `speel lijst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
