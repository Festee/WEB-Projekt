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
-- Databaza: `services`
--

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `sherbimet`
--

CREATE TABLE `sherbimet` (
  `sherbimi_id` int(11) NOT NULL,
  `sherbimi_image` text NOT NULL,
  `sherbimi_emri` varchar(50) NOT NULL,
  `created_by` varchar(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zbraz të dhënat për tabelën `sherbimet`
--

INSERT INTO `sherbimet` (`sherbimi_id`, `sherbimi_image`, `sherbimi_emri`, `created_by`, `time`) VALUES
(1, 'Fotot/icon-2.png', 'Adventure', 'Admin', '2023-02-24 03:04:58'),
(2, 'Fotot/icon-2.png', 'Tour guide', 'Admin', '2023-02-24 03:04:58'),
(3, 'Fotot/icon-3.png', 'Trekking', 'Admin', '2023-02-24 03:04:58'),
(4, 'Fotot/icon-4.png', 'Camp fire', 'Admin', '2023-02-24 03:04:58'),
(5, 'Fotot/icon-5.png', 'Off Road', 'User', '2023-02-24 03:04:58'),
(6, 'Fotot/icon-6.png', 'Camping', 'User', '2023-02-24 03:04:58');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tabelë `sherbimet`
--
ALTER TABLE `sherbimet`
  ADD PRIMARY KEY (`sherbimi_id`);

--
-- AUTO_INCREMENT për tabelat e hedhura
--

--
-- AUTO_INCREMENT për tabelë `sherbimet`
--
ALTER TABLE `sherbimet`
  MODIFY `sherbimi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
