-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Pritësi (host): 127.0.0.1
-- Koha e gjenerimit: Shk 26, 2023 në 08:07 MD
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
-- Databaza: `destinacionet`
--

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `lokacioni`
--

CREATE TABLE `lokacioni` (
  `location_id` int(11) NOT NULL,
  `location_image` text NOT NULL,
  `location_title` varchar(100) NOT NULL,
  `location_description` varchar(255) NOT NULL,
  `created_by` varchar(5) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zbraz të dhënat për tabelën `lokacioni`
--

INSERT INTO `lokacioni` (`location_id`, `location_image`, `location_title`, `location_description`, `created_by`, `time`) VALUES
(8, 'Fotot/img-1.jpg', 'Adventure & tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:00:31'),
(9, 'Fotot/img-2.jpg', 'Adventure & tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:00:59'),
(10, 'Fotot/img-3.jpg', 'Adventure & tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:01:48'),
(11, 'Fotot/img-4.jpg', 'Adventure & tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:33:56'),
(12, 'Fotot/img-5.jpg', 'Adventure&tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:35:40'),
(13, 'Fotot/img-6.jpg', 'Adventure&tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:34:37'),
(14, 'Fotot/img-7.jpg', 'Adventure&tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:35:10'),
(15, 'Fotot/img-8.jpg', 'Adventure&tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'User', '2023-02-24 02:37:42'),
(16, 'Fotot/img-9.jpg', 'Adventure&tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'User', '2023-02-24 02:37:50'),
(17, 'Fotot/img-10.jpg', 'Adventure&tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'User', '2023-02-24 02:38:32'),
(18, 'Fotot/img-11.jpg', 'Adventure&tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:38:47'),
(19, 'Fotot/img-12.jpg', 'Adventure&tour', 'lorem ipsum sit dolor amet connnectior elit,perfernedis', 'Admin', '2023-02-24 02:39:03');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tabelë `lokacioni`
--
ALTER TABLE `lokacioni`
  ADD PRIMARY KEY (`location_id`);

--
-- AUTO_INCREMENT për tabelat e hedhura
--

--
-- AUTO_INCREMENT për tabelë `lokacioni`
--
ALTER TABLE `lokacioni`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
