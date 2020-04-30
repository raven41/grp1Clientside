-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 30. 04 2020 kl. 10:31:43
-- Serverversion: 10.4.11-MariaDB
-- PHP-version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firmdb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(512) NOT NULL,
  `access_level` varchar(16) NOT NULL,
  `access_code` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=confirmed',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `school` varchar(255) NOT NULL,
  `edu` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `start` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='admin and customer users';

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `address`, `password`, `access_level`, `access_code`, `status`, `created`, `modified`, `school`, `edu`, `sem`, `start`) VALUES
(1, 'Mike', 'Dalisay', 'mike@example.com', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', '$2y$10$AUBptrm9sQF696zr8Hv31On3x4wqnTihdCLocZmGLbiDvyLpyokL.', 'Admin', '', 1, '0000-00-00 00:00:00', '2016-06-13 16:17:47', 'Zealand', 'Web Development', '1', '2020-04-16'),
(2, 'Lauro', 'Abogne', 'lauro@eacomm.com', 'Pasig City', '$2y$10$it4i11kRKrB19FfpPRWsRO5qtgrgajL7NnxOq180MsIhCKhAmSdDa', 'Student', '', 1, '0000-00-00 00:00:00', '2020-04-30 07:12:25', 'Zealand', 'Web Development', '1', '2020-04-16'),
(4, 'Darwin', 'Dalisay', 'darwin@example.com', 'Blk 24 A Lot 6 Ph 3\r\nPeace Village, San Luis', '$2y$10$tLq9lTKDUt7EyTFhxL0QHuen/BgO9YQzFYTUyH50kJXLJ.ISO3HAO', 'Student', 'ILXFBdMAbHVrJswNDnm231cziO8FZomn', 1, '2014-10-29 17:31:09', '2020-04-30 07:12:25', 'Zealand', 'Web Development', '1', '2020-04-16'),
(7, 'Marisol Jane', 'Dalisay', 'mariz@gmail.com', 'Blk. 24 A, Lot 6, Ph. 3, Peace Village', 'mariz', 'Student', '', 1, '2015-02-25 09:35:52', '2020-04-30 07:12:25', 'Zealand', 'Web Development', '1', '2020-04-16'),
(9, 'Marykris', 'De Leon', 'marykrisdarell.deleon@gmail.com', 'Project 4, QC', '$2y$10$uUy7D5qmvaRYttLCx9wnU.WOD3/8URgOX7OBXHPpWyTDjU4ZteSEm', 'Student', '', 1, '2015-02-27 14:28:46', '2020-04-30 07:12:25', 'Zealand', 'Web Development', '1', '2020-04-16'),
(10, 'Merlin', 'Duckerberg', 'merlin@gmail.com', 'Project 2, Quezon City', '$2y$10$VHY58eALB1QyYsP71RHD1ewmVxZZp.wLuhejyQrufvdy041arx1Kq', 'Admin', '', 1, '2015-03-18 06:45:28', '2015-03-24 06:00:21', 'Zealand', 'Web Development', '1', '2020-04-16'),
(14, 'Charlon', 'Ignacio', 'charlon@gmail.com', 'Tandang Sora, QC', '$2y$10$Fj6O1tPYI6UZRzJ9BNfFJuhURN9DnK5fQGHEsfol5LXRu.tCYYggu', 'Student', '', 1, '2015-03-24 08:06:57', '2020-04-30 07:12:25', 'Zealand', 'Web Development', '1', '2020-04-16'),
(15, 'Kobe Bro', 'Bryant', 'kobe@gmail.com', 'Los Angeles, California', '$2y$10$fmanyjJxNfJ8O3p9jjUixu6EOHkGZrThtcd..TeNz2g.XZyCIuVpm', 'Student', '', 1, '2015-03-26 11:28:01', '2020-04-30 07:12:25', 'Zealand', 'Web Development', '1', '2020-04-16'),
(20, 'Tim', 'Duncan', 'tim@example.com', 'San Antonio, Texas, USA', '$2y$10$9OSKHLhiDdBkJTmd3VLnQeNPCtyH1IvZmcHrz4khBMHdxc8PLX5G6', 'Student', '0X4JwsRmdif8UyyIHSOUjhZz9tva3Czj', 1, '2016-05-26 01:25:59', '2020-04-30 07:12:25', 'Zealand', 'Web Development', '1', '2020-04-16'),
(21, 'Tony', 'Parker', 'tony@example.com', 'Blk 24 A Lot 6 Ph 3\r\nPeace Village, San Luis', '$2y$10$lBJfvLyl/X5PieaztTYADOxOQeZJCqETayF.O9ld17z3hcKSJwZae', 'Student', 'THM3xkZzXeza5ISoTyPKl6oLpVa88tYl', 1, '2016-05-26 01:29:01', '2020-04-30 07:12:25', 'Zealand', 'Web Development', '1', '2020-04-16'),
(22, 'Martinus', 'Mortensen', 'martinus.mortensen@gmail.com', 'Slagelsevej 21B 1 TH', '$2y$10$BPgvQiit5oGR9mvm5EGTs.XUULyrWk/eYuktU2fVvQA0b/7MEOrP.', 'Student', '', 1, '2020-04-30 08:46:58', '2020-04-30 07:09:01', 'Zealand', 'Web Development', '1', '0000-00-00');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
