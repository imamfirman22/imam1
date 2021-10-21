-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 04:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugascv`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `idbio` int(11) NOT NULL,
  `nama_depan` text NOT NULL,
  `nama_bel` text NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`idbio`, `nama_depan`, `nama_bel`, `alamat`, `email`, `isi`) VALUES
(1, 'MUHAMAD', 'IMAM FIRMANSYAH', 'Jl Karakatau · PERUM BIP, PURWAKARTA', 'imam.firmansyah.muhamad@gmail.com', 'I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.');

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `idedu` int(11) NOT NULL,
  `sk1` text NOT NULL,
  `sk2` text NOT NULL,
  `jur1` text NOT NULL,
  `jur2` text NOT NULL,
  `isi1` text NOT NULL,
  `isi2` text NOT NULL,
  `lulus1` text NOT NULL,
  `lulus2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`idedu`, `sk1`, `sk2`, `jur1`, `jur2`, `isi1`, `isi2`, `lulus1`, `lulus2`) VALUES
(1, 'SMK TELKOM SANDHY PUTRA JAKARTA', 'UNIVERSITAS PEMBANGUNAN JAYA', 'NETWORK ACCESS', 'INFORMATION TECHNOLOGY', '-', 'GPA: 4.00 AAMIIN', '2007 - 2010', '2019 - PRESENT');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `idexp` int(11) NOT NULL,
  `jb1` text NOT NULL,
  `jb2` text NOT NULL,
  `isi1` text NOT NULL,
  `isi2` text NOT NULL,
  `mk1` text NOT NULL,
  `mk2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`idexp`, `jb1`, `jb2`, `isi1`, `isi2`, `mk1`, `mk2`) VALUES
(1, 'PT DIAN KARYA TELECOMM - Engineer', 'PT INDOMARCO PRISMATAMA - NOC VSAT', 'Instalasi, Commisioning, Testing  Perangkat OSN Project Huawei Metrolink ISAT-XL Banjarmasin dan Instalasi, Commisioning, Testing Perangkat MSAN Huawei Area Jakarta.', 'Monitoring operational HUB VSAT Indomarco', 'Jan 2012 - 1 Feb 2016', '1 Mar 2016 - Present');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `idints` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`idints`, `isi`) VALUES
(1, 'Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.\r\n\r\nWhen forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `idskil` int(11) NOT NULL,
  `judskil` text NOT NULL,
  `isi1` text NOT NULL,
  `isi2` text NOT NULL,
  `isi3` text NOT NULL,
  `isi4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`idskil`, `judskil`, `isi1`, `isi2`, `isi3`, `isi4`) VALUES
(1, 'MY SKILLS', 'Networking', 'VSAT Network', 'MAKAN', 'TIDUR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`idbio`);

--
-- Indexes for table `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`idedu`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`idexp`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`idints`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`idskil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `idbio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edu`
--
ALTER TABLE `edu`
  MODIFY `idedu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `idexp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `idints` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `idskil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
