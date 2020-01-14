-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2020 at 11:03 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` varchar(9) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `jurusan`, `email`, `alamat`) VALUES
(54, '245234523', 'ahmad', 'Teknik Industri', 'ahmadbadeg@gmail.com', 'padang'),
(56, '452361431', 'dores', 'Teknik Mesin', 'safadfa@gmail.com', 'bali'),
(59, '352345212', 'glorius', 'Teknik Informatika', 'lorios@yahoo.com', 'papua'),
(61, '32431234', 'ahmda', 'Teknik Informatika', 'ahmad@g.com', 'kutai'),
(63, '324413412', 'aan', 'Teknik Informatika', 'aan@gmail.com', 'banten'),
(64, '34213241', 'jancok', 'Teknik Industri', 'jancok@mobil.com', 'jakarta'),
(65, '67871634', 'manda', 'Teknik Industri', 'manda@gmail.com', 'papua'),
(66, '44432541', 'mendi', 'Teknik Informatika', 'mendi@yahoo.com', 'jakarta'),
(67, '42545241', 'insan', 'Teknik Mesin', 'insan@yahoo.com', 'jakartaq'),
(68, '44545245', 'ikhsan', 'Teknik Mesin', 'ikhsan@yahoo.com', 'bali');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(15, 'rochman', '$argon2i$v=19$m=65536,t=4,p=1$NjhOV1R5Ry5CWEZiU0JqNw$mleuITl5ghxdyHt6StsGPhoz1UKT3ooZ73iyNeIbPp4', 0),
(18, 'admin', '$argon2i$v=19$m=65536,t=4,p=1$Qm9QQm1lanRQbFhTVzhUdw$f4vumwXZBeNFTmkncd5TA1seIvUrDUrChnfEv8FaqSw', 1),
(19, 'alkhamil', '$argon2i$v=19$m=65536,t=4,p=1$YkpydVlzLnl5M05aWUJLaA$Xl3cyCBh/qQ9zWjRI8wB+zDQ2qKZ2szD4g31BGtj/oE', 0),
(20, 'helpdesk', '$argon2i$v=19$m=65536,t=4,p=1$dzZTZUMwOVBMS2I2WmRSTQ$9/t2HxHCEfphr/+O978FoQWKwgEPpqx40rkHviCvxXM', 0),
(22, 'abdul', '$argon2i$v=19$m=65536,t=4,p=1$TmxHd2JHd3F4WXN0TkFxRQ$YTjoBayG54UrPH7zZtvSZl7IcBl9a5G12V07eso1DKc', 0),
(23, 'aan', '$argon2i$v=19$m=65536,t=4,p=1$cFBnd0JubDU0M0hKaVBQbw$9ZiIbeJ8zptD3/9nJL6f8WzdhfiZMqL7IXEj8IqKsVs', 0),
(24, 'chandra', '$argon2i$v=19$m=65536,t=4,p=1$dUZ0OWNCT1BkeFI5VzB0VQ$jC9UnE8A827U6RhMm8US0/lyJ3/e9CvPVO8f/2nip2I', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
