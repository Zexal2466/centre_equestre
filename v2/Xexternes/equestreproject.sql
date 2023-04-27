-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 01:46 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equestreproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cheval`
--

CREATE TABLE `cheval` (
  `ID_Cheval` int(11) NOT NULL,
  `nom_Cheval` varchar(255) DEFAULT NULL,
  `DateNaissance_Cheval` date DEFAULT NULL,
  `SIR` int(11) DEFAULT NULL,
  `ID_Robe` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cheval`
--

INSERT INTO `cheval` (`ID_Cheval`, `nom_Cheval`, `DateNaissance_Cheval`, `SIR`, `ID_Robe`, `actif`) VALUES
(1, 'Armaga', '2018-01-18', 5885, 6, 1),
(2, 'Henrik', '2022-11-03', 9947, 1, 1),
(3, 'Samiro', '2022-10-31', 9941, 6, 1),
(8, 'Tuli', '2022-11-25', 1285, 2, 1),
(9, 'Marsh', '2016-06-23', 2058, 1, 1),
(10, 'Fanz', '2011-02-06', 3686, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `title` text,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `color` varchar(191) DEFAULT NULL,
  `text_color` varchar(191) DEFAULT NULL,
  `idRecurrence` varchar(10) DEFAULT NULL,
  `ID_Tarif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `color` varchar(191) DEFAULT NULL,
  `text_color` varchar(191) DEFAULT NULL,
  `idRecurrence` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`, `color`, `text_color`, `idRecurrence`) VALUES
(1, 'Cours Apprenti', '2022-11-23 14:00:00', '2022-11-23 15:15:00', '#6453e9', NULL, NULL),
(2, 'Cours Apprenti', '2022-11-30 14:00:00', '2022-11-30 15:15:00', '#6453e9', NULL, NULL),
(3, 'Cours Apprenti', '2022-12-07 14:00:00', '2022-12-07 15:15:00', '#6453e9', NULL, NULL),
(4, 'Cours Apprenti', '2022-12-14 14:00:00', '2022-12-14 15:15:00', '#6453e9', NULL, NULL),
(5, 'Cours Apprenti', '2022-12-21 14:00:00', '2022-12-21 15:15:00', '#6453e9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `ID_Inscription` int(11) NOT NULL,
  `annee` date DEFAULT NULL,
  `CotisationFFE` int(11) DEFAULT NULL,
  `CotisationCentre` int(11) DEFAULT NULL,
  `ID_Personne` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inscription`
--

INSERT INTO `inscription` (`ID_Inscription`, `annee`, `CotisationFFE`, `CotisationCentre`, `ID_Personne`, `actif`) VALUES
(1, '2022-12-10', 23, 21, 1072, 1),
(2, '2022-12-17', 43, 11, 1074, 1);

-- --------------------------------------------------------

--
-- Table structure for table `participe`
--

CREATE TABLE `participe` (
  `ID_Personne` int(11) NOT NULL,
  `ID_Cours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pension`
--

CREATE TABLE `pension` (
  `ID_Pension` int(11) NOT NULL,
  `libellePension` varchar(255) DEFAULT NULL,
  `tarifPension` float DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `actif` tinyint(1) NOT NULL,
  `ID_TP` int(11) NOT NULL,
  `ID_Cheval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pension`
--

INSERT INTO `pension` (`ID_Pension`, `libellePension`, `tarifPension`, `dateDebut`, `dateFin`, `actif`, `ID_TP`, `ID_Cheval`) VALUES
(1, 'TestPension', 200, '2022-12-07', '2022-12-02', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `ID_Personne` int(11) NOT NULL,
  `nom` varchar(222) DEFAULT NULL,
  `prenom` varchar(222) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `mail` varchar(222) DEFAULT NULL,
  `telephone` varchar(222) DEFAULT NULL,
  `photo` varchar(222) DEFAULT NULL,
  `niveauGalop` int(11) DEFAULT NULL,
  `numeroLicence` varchar(222) DEFAULT NULL,
  `rue` varchar(222) DEFAULT NULL,
  `complementAdresse` varchar(222) DEFAULT NULL,
  `codePostal` varchar(222) DEFAULT NULL,
  `ville` varchar(222) DEFAULT NULL,
  `ID_Responsable` int(11) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personne`
--

INSERT INTO `personne` (`ID_Personne`, `nom`, `prenom`, `dateNaissance`, `mail`, `telephone`, `photo`, `niveauGalop`, `numeroLicence`, `rue`, `complementAdresse`, `codePostal`, `ville`, `ID_Responsable`, `actif`) VALUES
(1072, 'Cage', 'Luke', '2005-06-16', 'luke@gmail.com', '06473282882', '638cf3308a21c9.72568254.png', 4, 'AAADE333', NULL, NULL, NULL, NULL, NULL, 1),
(1073, 'Hasgard', 'Odin', '1983-07-04', 'odin@gmail.com', NULL, NULL, NULL, NULL, '79, avenue de l\'Amandier', '', '33000', 'Bordeaux', NULL, 1),
(1074, 'Hasgard', 'Thor', '2010-03-04', 'hasgard@gmail.com', '0673121204', '638cf3b5c93d23.27386521.png', 6, 'AXS404', NULL, NULL, NULL, NULL, 1073, 1),
(1075, 'Pool', 'Dead', '2022-11-30', 'dead@pool.com', '0658343412', '638cf4013e0356.31635694.png', 2, 'AEX549', NULL, NULL, NULL, NULL, NULL, 1),
(1076, 'Namy', 'Bob', '2022-12-01', 'nam@gm.fr', '0637272771', '638ef3c412d910.59617766.png', 4, 'ADJEI332', NULL, NULL, NULL, NULL, NULL, 1),
(1077, 'Muniz', 'Reese', '1987-06-13', 'reese@gmx.com', NULL, NULL, NULL, NULL, '1 rue franco', '', '19200', 'Olympe', NULL, 1),
(1078, 'Muni', 'Dewey', '1998-06-03', 'dewey@mun.com', '0639929219', '638ef501c7b882.74107018.png', 3, 'AEFZS3442', NULL, NULL, NULL, NULL, 1077, 1),
(1079, 'Vador', 'Dark', '2018-10-10', 'dark@gmail.com', '0662171773', '6394f631429ff9.57743954.png', 3, 'AED3432', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `robe`
--

CREATE TABLE `robe` (
  `ID_Robe` int(11) NOT NULL,
  `libelleRobe` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `robe`
--

INSERT INTO `robe` (`ID_Robe`, `libelleRobe`, `actif`) VALUES
(1, 'Marron', 0),
(2, 'Rouge', 1),
(3, 'Blanc', 1),
(4, 'Vert', 1),
(5, 'Violet', 1),
(6, 'Marron', 1),
(7, 'Noir', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signe`
--

CREATE TABLE `signe` (
  `ID_Pension` int(11) NOT NULL,
  `ID_Personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signe`
--

INSERT INTO `signe` (`ID_Pension`, `ID_Personne`) VALUES
(1, 1074);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `ID_Tarif` int(11) NOT NULL,
  `libelleTarif` varchar(255) DEFAULT NULL,
  `prixMois` float DEFAULT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`ID_Tarif`, `libelleTarif`, `prixMois`, `actif`) VALUES
(2, 'Classique', 20, 1),
(5, 'Classique Plus', 49, 1),
(6, 'VIP +', 70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `typepension`
--

CREATE TABLE `typepension` (
  `ID_TP` int(11) NOT NULL,
  `libelle_TP` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typepension`
--

INSERT INTO `typepension` (`ID_TP`, `libelle_TP`, `actif`) VALUES
(1, 'Cabane en pierre ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cheval`
--
ALTER TABLE `cheval`
  ADD PRIMARY KEY (`ID_Cheval`),
  ADD KEY `ID_Robe` (`ID_Robe`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Tarif` (`ID_Tarif`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`ID_Inscription`),
  ADD KEY `ID_Personne` (`ID_Personne`);

--
-- Indexes for table `participe`
--
ALTER TABLE `participe`
  ADD PRIMARY KEY (`ID_Personne`,`ID_Cours`),
  ADD KEY `ID_Cours` (`ID_Cours`),
  ADD KEY `ID_Personne` (`ID_Personne`);

--
-- Indexes for table `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`ID_Pension`),
  ADD KEY `ID_Cheval` (`ID_Cheval`),
  ADD KEY `ID_TP` (`ID_TP`);

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`ID_Personne`);

--
-- Indexes for table `robe`
--
ALTER TABLE `robe`
  ADD PRIMARY KEY (`ID_Robe`);

--
-- Indexes for table `signe`
--
ALTER TABLE `signe`
  ADD PRIMARY KEY (`ID_Pension`,`ID_Personne`),
  ADD KEY `ID_Pension` (`ID_Pension`),
  ADD KEY `ID_Personne` (`ID_Personne`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`ID_Tarif`);

--
-- Indexes for table `typepension`
--
ALTER TABLE `typepension`
  ADD PRIMARY KEY (`ID_TP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cheval`
--
ALTER TABLE `cheval`
  MODIFY `ID_Cheval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `ID_Inscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pension`
--
ALTER TABLE `pension`
  MODIFY `ID_Pension` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personne`
--
ALTER TABLE `personne`
  MODIFY `ID_Personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1080;

--
-- AUTO_INCREMENT for table `robe`
--
ALTER TABLE `robe`
  MODIFY `ID_Robe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `ID_Tarif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `typepension`
--
ALTER TABLE `typepension`
  MODIFY `ID_TP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cheval`
--
ALTER TABLE `cheval`
  ADD CONSTRAINT `cheval_ibfk_1` FOREIGN KEY (`ID_Robe`) REFERENCES `robe` (`ID_Robe`);

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`ID_Tarif`) REFERENCES `tarif` (`ID_Tarif`);

--
-- Constraints for table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);

--
-- Constraints for table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `participe_ibfk_1` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);

--
-- Constraints for table `pension`
--
ALTER TABLE `pension`
  ADD CONSTRAINT `pension_ibfk_2` FOREIGN KEY (`ID_Cheval`) REFERENCES `cheval` (`ID_Cheval`),
  ADD CONSTRAINT `pension_ibfk_3` FOREIGN KEY (`ID_TP`) REFERENCES `typepension` (`ID_TP`);

--
-- Constraints for table `signe`
--
ALTER TABLE `signe`
  ADD CONSTRAINT `signe_ibfk_1` FOREIGN KEY (`ID_Pension`) REFERENCES `pension` (`ID_Pension`),
  ADD CONSTRAINT `signe_ibfk_2` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
