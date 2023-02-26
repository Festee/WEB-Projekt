-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Pritësi (host): 127.0.0.1
-- Koha e gjenerimit: Shk 26, 2023 në 08:05 MD
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
-- Databaza: `about`
--

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `review_description` varchar(100) NOT NULL,
  `review_client` varchar(50) NOT NULL,
  `review_image` text NOT NULL,
  `created_by` varchar(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zbraz të dhënat për tabelën `reviews`
--

INSERT INTO `reviews` (`ID`, `review_description`, `review_client`, `review_image`, `created_by`, `time`) VALUES
(2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio si', 'john deo', 'Fotot/pic-1.png', 'Admin', '2023-02-24 03:35:45'),
(3, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste ', 'john deo', 'Fotot/pic-2.png', 'User', '2023-02-24 03:37:26'),
(4, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dig', 'john deo', 'Fotot/pic-3.png', 'Admin', '2023-02-24 03:41:02'),
(5, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magn', 'john deo', 'Fotot/pic-4.png', 'Admin', '2023-02-24 03:41:43'),
(6, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magn', 'john deo', 'Fotot/pic-5.png', 'User', '2023-02-24 03:42:08'),
(7, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magn', 'john deo', 'Fotot/pic-6.png', 'User', '2023-02-24 03:42:35');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tabelë `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT për tabelat e hedhura
--

--
-- AUTO_INCREMENT për tabelë `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
