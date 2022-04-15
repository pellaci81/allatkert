-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 15. 18:24
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `allatkert`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `email` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `text` text NOT NULL,
  `user` varchar(12) NOT NULL,
  `targy` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `email`
--

INSERT INTO `email` (`id`, `date`, `email`, `name`, `text`, `user`, `targy`) VALUES
(1, '2022-04-15 18:15:36', 'pelsoczilaci@gmail.com', 'lacika', 'A macska, ha egyszer ráült a forró kályhalapra, soha többé nem fog forró kályhalapra ülni. De hideg kályhalapra sem.', 'pellaci', 'teszt'),
(2, '2022-04-15 18:16:58', 'pityuka@freemail.hu', 'Pityu', 'Az ember nem érezheti jól magát, csak a saját jóváhagyásával.', 'Vendég', 'okosság'),
(3, '2022-04-15 18:19:49', 'szajanos@gmail.com', 'Jancsi', 'A legjobb módszer önmagunk felvidítására, ha felvidítunk valaki mást.', 'Vendég', 'Üdv!'),
(4, '2022-04-15 18:20:52', 'jani@citromail.hu', 'Jancsi', 'A legjobb módszer önmagunk felvidítására, ha felvidítunk valaki mást.', 'szajanos', 'Halló');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL,
  `csaladi_nev` varchar(45) NOT NULL DEFAULT '',
  `uto_nev` varchar(45) NOT NULL DEFAULT '',
  `bejelentkezes` varchar(12) NOT NULL DEFAULT '',
  `jelszo` varchar(40) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `csaladi_nev`, `uto_nev`, `bejelentkezes`, `jelszo`) VALUES
(1, 'Pelsőczi', 'László', 'pellaci', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(2, 'Szabo', 'János', 'szajanos', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
