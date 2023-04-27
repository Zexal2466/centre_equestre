-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2022 at 07:00 AM
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
  `ID_Robe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `ID_Cours` int(11) NOT NULL,
  `libelle_Cours` varchar(255) DEFAULT NULL,
  `date_Cours` date DEFAULT NULL,
  `duree_cours` int(11) DEFAULT NULL,
  `ID_Tarifs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

CREATE TABLE `inscription` (
  `ID_Inscription` int(11) NOT NULL,
  `annee` date DEFAULT NULL,
  `CotisationFFE` int(11) DEFAULT NULL,
  `CotisationCentre` int(11) DEFAULT NULL,
  `ID_Personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `libelle_Pension` varchar(255) DEFAULT NULL,
  `tarifPension` int(11) DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `duree_Pension` int(11) DEFAULT NULL,
  `ID_TypePension` int(11) NOT NULL,
  `ID_Cheval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `ID_Personne` int(11) NOT NULL,
  `nom` varchar(222) NOT NULL,
  `prenom` varchar(222) NOT NULL,
  `dateNaissance` varchar(222) NOT NULL,
  `mail` varchar(222) NOT NULL,
  `telephone` varchar(222) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `niveauGalop` int(11) NOT NULL,
  `numeroLicence` varchar(222) NOT NULL,
  `rue` varchar(222) NOT NULL,
  `complementAdresse` varchar(222) NOT NULL,
  `codePostal` varchar(222) NOT NULL,
  `ville` varchar(222) NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `robe`
--

CREATE TABLE `robe` (
  `ID_Robe` int(11) NOT NULL,
  `libelle_Robe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tarifs`
--

CREATE TABLE `tarifs` (
  `ID_Tarifs` int(11) NOT NULL,
  `libelle_Tarifs` varchar(255) DEFAULT NULL,
  `prixMois` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typepension`
--

CREATE TABLE `typepension` (
  `ID_TypePension` int(11) NOT NULL,
  `libelle_TypePension` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`ID_Cours`),
  ADD KEY `ID_Tarifs` (`ID_Tarifs`);

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
  ADD KEY `ID_TypePension` (`ID_TypePension`),
  ADD KEY `ID_Cheval` (`ID_Cheval`);

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
-- Indexes for table `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`ID_Tarifs`);

--
-- Indexes for table `typepension`
--
ALTER TABLE `typepension`
  ADD PRIMARY KEY (`ID_TypePension`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personne`
--
ALTER TABLE `personne`
  MODIFY `ID_Personne` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`ID_Tarifs`) REFERENCES `tarifs` (`ID_Tarifs`);

--
-- Constraints for table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);

--
-- Constraints for table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `participe_ibfk_1` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`),
  ADD CONSTRAINT `participe_ibfk_2` FOREIGN KEY (`ID_Cours`) REFERENCES `cours` (`ID_Cours`);

--
-- Constraints for table `pension`
--
ALTER TABLE `pension`
  ADD CONSTRAINT `pension_ibfk_1` FOREIGN KEY (`ID_TypePension`) REFERENCES `typepension` (`ID_TypePension`),
  ADD CONSTRAINT `pension_ibfk_2` FOREIGN KEY (`ID_Cheval`) REFERENCES `cheval` (`ID_Cheval`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


Création de la BDD : 
DROP TABLE IF EXISTS 'SensorsParser'
CREATE TABLE SensorsParser (
    kSensor int(11) NOT NULL AUTO_INCREMENT,
    nomcapteur varchar(50) NOT NULL,
    DEVEUI varchar(50)NOT NULL, -- adress MAC du capteur
    GWID varchar(50) NOT NULL, --
    RSSI float NOT NULL, --
    typecapteur varchar(50) NOT NULL,
    value float NOT NULL,
    time timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY(ksensor)
)   ENGINE = MyISAM AUTO_INCREMENT = 19142 DEFAULT CHARSET = utf8


