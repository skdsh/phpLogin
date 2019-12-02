-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 28. Nov 2019 um 12:35
-- Server-Version: 5.7.24
-- PHP-Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kundenkartei`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunde`
--

CREATE TABLE `kunde` (
  `id` varchar(12) NOT NULL,
  `knachname` varchar(100) NOT NULL,
  `vorname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telNr` varchar(20) NOT NULL,
  `Bem` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `kunde`
--

INSERT INTO `kunde` (`id`, `knachname`, `vorname`, `email`, `telNr`, `Bem`) VALUES
('eber11111111', 'ebert', 'jack', 'ja@g.de', '1232312', 'AAAAAA');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitarbeiter`
--

CREATE TABLE `mitarbeiter` (
  `mitarbeiterID` varchar(50) NOT NULL,
  `mNachname` varchar(50) NOT NULL,
  `mVorname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telNr` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zaehler`
--

CREATE TABLE `zaehler` (
  `zaehlerNr` int(12) NOT NULL,
  `ort` varchar(50) NOT NULL,
  `plz` varchar(15) NOT NULL,
  `str` varchar(50) NOT NULL,
  `hNr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zaelerstände`
--

CREATE TABLE `zaelerstände` (
  `zaehlerstand` int(255) DEFAULT NULL,
  `aeDatum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kunde`
--
ALTER TABLE `kunde`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indizes für die Tabelle `mitarbeiter`
--
ALTER TABLE `mitarbeiter`
  ADD PRIMARY KEY (`mitarbeiterID`),
  ADD UNIQUE KEY `mitarbeiterID` (`mitarbeiterID`);

--
-- Indizes für die Tabelle `zaehler`
--
ALTER TABLE `zaehler`
  ADD UNIQUE KEY `zaehlerNr` (`zaehlerNr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
