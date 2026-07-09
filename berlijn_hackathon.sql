-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql_db
-- Gegenereerd op: 09 jul 2026 om 20:59
-- Serverversie: 9.6.0
-- PHP-versie: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berlijn_hackathon`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `activities`
--

CREATE TABLE `activities` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `image`, `location`, `date`) VALUES
(1, 'Fietstour langs de Muur', 'Ontdek de verborgen verhalen van de Koude Oorlog op de fiets met een ervaren gids.', 'https://images.unsplash.com/photo-1601614761001-f5b12850cda8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Bernauer Str.', 'Dagelijks'),
(2, 'Museumsinsel Bezoek', 'Bezoek de vijf wereldberoemde musea op het eiland in de Spree. Een droom voor kunstliefhebbers.', 'https://images.unsplash.com/photo-1543886733-f5c71d9d9bb7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Mitte', 'Di - Zo'),
(3, 'Clubben in Berghain', 'Ervaar de beruchte technoscene van Berlijn in de meest exclusieve club ter wereld.', 'https://images.unsplash.com/photo-1493606371202-6275828f90f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Friedrichshain', 'Vrij - Zo'),
(4, 'Street Art Wandeling', 'Verken de kleurrijke muren en alternatieve kunstscene van Kreuzberg met een lokale kunstenaar.', 'https://images.unsplash.com/photo-1563539130097-f56f8f10b503?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Kreuzberg', 'Zaterdag'),
(5, 'Currywurst Proeverij', 'Proef de beste Currywurst van de stad en leer over de geschiedenis van deze Berlijnse klassieker.', 'https://images.unsplash.com/photo-1627907228175-2bf846a303b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Prenzlauer Berg', 'Dagelijks');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sights`
--

CREATE TABLE `sights` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `sights`
--

INSERT INTO `sights` (`id`, `title`, `description`, `image`, `category`) VALUES
(1, 'Brandenburger Tor', 'De iconische stadspoort en het symbool van de Duitse hereniging. Een absolute must-see in Berlijn.', 'https://images.unsplash.com/photo-1560969184-10fe8719e047?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Historie'),
(2, 'Reichstag', 'Het Duitse parlementsgebouw met de beroemde glazen koepel. Biedt een prachtig uitzicht over de stad.', 'https://images.unsplash.com/photo-1574676550785-0557cc6f91cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Architectuur'),
(3, 'East Side Gallery', 'Het langste nog bestaande stuk van de Berlijnse Muur, bedekt met indrukwekkende street art.', 'https://images.unsplash.com/photo-1618142750398-333e3af7fbde?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Monument'),
(4, 'Fernsehturm', 'De hoogste toren van Duitsland (368m) gelegen op Alexanderplatz. Geniet van een 360-graden panorama.', 'https://images.unsplash.com/photo-1599946347371-68eb71b16afc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Uitzichtpunt'),
(5, 'Checkpoint Charlie', 'De bekendste grensovergang tussen Oost- en West-Berlijn tijdens de Koude Oorlog.', 'https://images.unsplash.com/photo-1582236932789-9a7c366ff407?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', 'Historie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$12$Fwm6hNmh2ryYON8mdXc9XOPa77zIPc9UhWzdNS1JNockNxM2XrTHm');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `sights`
--
ALTER TABLE `sights`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `sights`
--
ALTER TABLE `sights`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
