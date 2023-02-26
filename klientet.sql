-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Pritësi (host): 127.0.0.1
-- Koha e gjenerimit: Shk 26, 2023 në 08:08 MD
-- Versioni i serverit: 10.4.27-MariaDB
-- PHP Versioni: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databaza: `klientet`
--

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `klienti`
--

CREATE TABLE `klienti` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(100) NOT NULL,
  `Nr_tel` varchar(100) NOT NULL,
  `Destinacioni` varchar(100) NOT NULL,
  `Persona` int(255) NOT NULL,
  `Nisja` date NOT NULL,
  `Arritja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zbraz të dhënat për tabelën `klienti`
--

INSERT INTO `klienti` (`ID`, `Emri`, `Nr_tel`, `Destinacioni`, `Persona`, `Nisja`, `Arritja`) VALUES
(1, 'festim', '04859658912', 'Prishtine', 51, '2023-02-14', '2023-02-13'),
(10, 'Jeton', '045252458', 'ANgli', 23, '2023-02-15', '2023-02-23'),
(11, 'puhiza', '044585696', 'london new new new', 10, '2023-02-03', '2023-02-25'),
(13, 'Blerina', '045858747', 'Holande', 20, '2023-02-17', '2023-02-25'),
(14, 'Elton', '048595685', 'Gjermani,Belgjike', 12, '2023-03-03', '2023-03-11'),
(15, 'Lavdim', '045858969', 'Amerike', 30, '2023-02-23', '2023-02-28'),
(17, 'SHAQIR', '044558474', 'Amerike,Angli', 10, '2023-02-01', '2023-02-08'),
(27, 'jeton', '044115441', 'london new york', 11, '2023-02-18', '2023-02-25'),
(28, 'Jetmir', '045858747', 'itali', 10, '2023-02-25', '2023-02-28'),
(29, 'Altin Murseli', '045606351', 'London', 13, '2023-03-04', '2023-03-08'),
(30, 'Valon', '044550456', 'Dubai', 22, '2023-02-18', '2023-02-28');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tabelë `klienti`
--
ALTER TABLE `klienti`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT për tabelat e hedhura
--

--
-- AUTO_INCREMENT për tabelë `klienti`
--
ALTER TABLE `klienti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
