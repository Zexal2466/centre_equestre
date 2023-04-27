-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 27 avr. 2023 à 07:23
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `equestreproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `cheval`
--

DROP TABLE IF EXISTS `cheval`;
CREATE TABLE IF NOT EXISTS `cheval` (
  `ID_Cheval` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Cheval` varchar(255) DEFAULT NULL,
  `DateNaissance_Cheval` date DEFAULT NULL,
  `SIR` int(11) DEFAULT NULL,
  `ID_Robe` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Cheval`),
  KEY `ID_Robe` (`ID_Robe`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cheval`
--

INSERT INTO `cheval` (`ID_Cheval`, `nom_Cheval`, `DateNaissance_Cheval`, `SIR`, `ID_Robe`, `actif`) VALUES
(1, 'Petit Tonnere', '2018-01-18', 5885, 6, 1),
(2, 'Henrik', '2022-11-03', 9947, 5, 1),
(3, 'Samiro', '2022-10-31', 9941, 6, 1),
(8, 'Tuli', '2022-11-25', 1285, 2, 1),
(9, 'Marsh', '2016-06-23', 2058, 3, 0),
(10, 'Fanz', '2011-02-06', 3686, 4, 1),
(11, 'Soleil d\'Orient', '2023-04-16', 1231597, 1, 1),
(12, 'Test', '2023-04-07', 1231597, 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `color` varchar(191) DEFAULT NULL,
  `text_color` varchar(191) DEFAULT NULL,
  `idRecurrence` varchar(10) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `title`, `start_event`, `end_event`, `color`, `text_color`, `idRecurrence`, `actif`) VALUES
(1, 'cours5', '2022-12-12 10:00:00', '2022-12-12 14:00:00', '#6453e9', '#6453e9', NULL, 1),
(2, 'cours5', '2022-12-19 10:00:00', '2022-12-19 14:00:00', '#6453e9', '#6453e9', '1', 1),
(3, 'cours5', '2022-12-12 10:00:00', '2022-12-12 14:00:00', '#6453e9', '#000000', NULL, 1),
(4, 'cours5', '2022-12-19 10:00:00', '2022-12-19 14:00:00', '#6453e9', '#000000', '3', 1),
(5, 'cours66', '2022-12-14 11:00:00', '2022-12-14 14:00:00', '#000000', '#ffffff', NULL, 1),
(6, 'cours4', '2022-12-20 11:00:00', '2022-12-20 14:00:00', '#000000', '#ffffff', '5', 1),
(7, 'cours4', '2022-12-27 11:00:00', '2022-12-27 14:00:00', '#000000', '#ffffff', '5', 1),
(8, 'cours4', '2023-01-03 11:00:00', '2023-01-03 14:00:00', '#000000', '#ffffff', '5', 1),
(9, 'cours4', '2023-01-10 11:00:00', '2023-01-10 14:00:00', '#000000', '#ffffff', '5', 1),
(10, 'cours4', '2023-01-17 11:00:00', '2023-01-17 14:00:00', '#000000', '#ffffff', '5', 1),
(11, 'cours4', '2023-01-24 11:00:00', '2023-01-24 14:00:00', '#000000', '#ffffff', '5', 1),
(12, 'cours4', '2023-01-31 11:00:00', '2023-01-31 14:00:00', '#000000', '#ffffff', '5', 1),
(13, 'cours4', '2023-02-07 11:00:00', '2023-02-07 14:00:00', '#000000', '#ffffff', '5', 1),
(14, 'cours4', '2023-02-14 11:00:00', '2023-02-14 14:00:00', '#000000', '#ffffff', '5', 1),
(15, 'cours4', '2023-02-21 11:00:00', '2023-02-21 14:00:00', '#000000', '#ffffff', '5', 1),
(16, 'cours4', '2023-02-28 11:00:00', '2023-02-28 14:00:00', '#000000', '#ffffff', '5', 1),
(17, 'cours6', '2022-12-20 13:00:00', '2022-12-20 15:00:00', '#ffffff', '#000000', NULL, 1),
(18, 'cours recurrent', '2022-12-28 13:00:00', '2022-12-28 15:00:00', '#ff00dd', '#000000', '17', 1),
(19, 'cours56444', '2023-01-03 13:00:00', '2023-01-03 15:00:00', '#ff0000', '#000000', '17', 1),
(20, 'cours5', '2023-01-10 13:00:00', '2023-01-10 15:00:00', '#ff00dd', '#000000', '17', 1),
(21, 'cours5', '2023-01-17 13:00:00', '2023-01-17 15:00:00', '#ff00dd', '#000000', '17', 1),
(22, 'cours5', '2023-01-24 13:00:00', '2023-01-24 15:00:00', '#ff00dd', '#000000', '17', 1),
(23, 'cours5', '2023-01-31 13:00:00', '2023-01-31 15:00:00', '#ff00dd', '#000000', '17', 1),
(24, 'cours5', '2023-02-07 13:00:00', '2023-02-07 15:00:00', '#ff00dd', '#000000', '17', 1),
(25, 'cours5', '2023-02-14 13:00:00', '2023-02-14 15:00:00', '#ff00dd', '#000000', '17', 1),
(26, 'cours5', '2023-02-21 13:00:00', '2023-02-21 15:00:00', '#ff00dd', '#000000', '17', 1),
(27, 'cours5', '2023-02-28 13:00:00', '2023-02-28 15:00:00', '#ff00dd', '#000000', '17', 1),
(28, 'cours5', '2023-03-07 13:00:00', '2023-03-07 15:00:00', '#ff00dd', '#000000', '17', 1),
(29, 'cours5', '2023-03-14 13:00:00', '2023-03-14 15:00:00', '#ff00dd', '#000000', '17', 1),
(30, 'cours5', '2023-03-21 13:00:00', '2023-03-21 15:00:00', '#ff00dd', '#000000', '17', 1),
(31, 'cours5', '2023-03-28 13:00:00', '2023-03-28 15:00:00', '#ff00dd', '#000000', '17', 1),
(32, 'cours5', '2023-04-04 13:00:00', '2023-04-04 15:00:00', '#ff00dd', '#000000', '17', 1),
(33, 'cours5', '2023-04-11 13:00:00', '2023-04-11 15:00:00', '#ff00dd', '#000000', '17', 1),
(34, 'cours5', '2023-04-18 13:00:00', '2023-04-18 15:00:00', '#ff00dd', '#000000', '17', 1),
(35, 'cours5', '2023-04-25 13:00:00', '2023-04-25 15:00:00', '#ff00dd', '#000000', '17', 1),
(36, 'cours5', '2023-05-02 13:00:00', '2023-05-02 15:00:00', '#ff00dd', '#000000', '17', 1),
(37, 'cours5', '2023-05-09 13:00:00', '2023-05-09 15:00:00', '#ff00dd', '#000000', '17', 1),
(38, 'cours5', '2023-05-16 13:00:00', '2023-05-16 15:00:00', '#ff00dd', '#000000', '17', 1),
(39, 'cours5', '2023-05-23 13:00:00', '2023-05-23 15:00:00', '#ff00dd', '#000000', '17', 1),
(40, 'cours5', '2023-05-30 13:00:00', '2023-05-30 15:00:00', '#ff00dd', '#000000', '17', 1),
(41, 'cours5', '2023-06-06 13:00:00', '2023-06-06 15:00:00', '#ff00dd', '#000000', '17', 1),
(42, 'cours5', '2023-06-13 13:00:00', '2023-06-13 15:00:00', '#ff00dd', '#000000', '17', 1),
(43, 'cours5', '2023-06-20 13:00:00', '2023-06-20 15:00:00', '#ff00dd', '#000000', '17', 1),
(44, 'cours5', '2023-06-27 13:00:00', '2023-06-27 15:00:00', '#ff00dd', '#000000', '17', 1),
(45, 'cours5', '2023-07-04 13:00:00', '2023-07-04 15:00:00', '#ff00dd', '#000000', '17', 1),
(46, 'cours5', '2023-07-11 13:00:00', '2023-07-11 15:00:00', '#ff00dd', '#000000', '17', 1),
(47, 'cours5', '2023-07-18 13:00:00', '2023-07-18 15:00:00', '#ff00dd', '#000000', '17', 1),
(48, 'cours5', '2023-07-25 13:00:00', '2023-07-25 15:00:00', '#ff00dd', '#000000', '17', 1),
(49, 'cours5', '2023-08-01 13:00:00', '2023-08-01 15:00:00', '#ff00dd', '#000000', '17', 1),
(50, 'cours5', '2023-08-08 13:00:00', '2023-08-08 15:00:00', '#ff00dd', '#000000', '17', 1),
(51, 'cours5', '2023-08-15 13:00:00', '2023-08-15 15:00:00', '#ff00dd', '#000000', '17', 1),
(52, 'cours5', '2023-08-22 13:00:00', '2023-08-22 15:00:00', '#ff00dd', '#000000', '17', 1),
(53, 'cours5', '2023-08-29 13:00:00', '2023-08-29 15:00:00', '#ff00dd', '#000000', '17', 1),
(54, 'cours5', '2023-09-05 13:00:00', '2023-09-05 15:00:00', '#ff00dd', '#000000', '17', 1),
(55, 'cours5', '2023-09-12 13:00:00', '2023-09-12 15:00:00', '#ff00dd', '#000000', '17', 1),
(56, 'cours5', '2023-09-19 13:00:00', '2023-09-19 15:00:00', '#ff00dd', '#000000', '17', 1),
(57, 'cours5', '2023-09-26 13:00:00', '2023-09-26 15:00:00', '#ff00dd', '#000000', '17', 1),
(58, 'cours5', '2023-10-03 13:00:00', '2023-10-03 15:00:00', '#ff00dd', '#000000', '17', 1),
(59, 'cours5', '2023-10-10 13:00:00', '2023-10-10 15:00:00', '#ff00dd', '#000000', '17', 1),
(60, 'cours5', '2023-10-17 13:00:00', '2023-10-17 15:00:00', '#ff00dd', '#000000', '17', 1),
(61, 'cours5', '2023-10-24 13:00:00', '2023-10-24 15:00:00', '#ff00dd', '#000000', '17', 1),
(62, 'cours5', '2023-10-31 13:00:00', '2023-10-31 15:00:00', '#ff00dd', '#000000', '17', 1),
(63, 'cours5', '2023-11-07 13:00:00', '2023-11-07 15:00:00', '#ff00dd', '#000000', '17', 1),
(64, 'cours5', '2023-11-14 13:00:00', '2023-11-14 15:00:00', '#ff00dd', '#000000', '17', 1),
(65, 'cours5', '2023-11-21 13:00:00', '2023-11-21 15:00:00', '#ff00dd', '#000000', '17', 1),
(66, 'cours5', '2023-11-28 13:00:00', '2023-11-28 15:00:00', '#ff00dd', '#000000', '17', 1),
(67, 'cours5', '2023-12-05 13:00:00', '2023-12-05 15:00:00', '#ff00dd', '#000000', '17', 1),
(68, 'cours5', '2023-12-12 13:00:00', '2023-12-12 15:00:00', '#ff00dd', '#000000', '17', 1),
(69, 'cours du mardi ', '2022-12-27 18:00:00', '2022-12-27 20:00:00', '#ffffff', '#000000', NULL, 1),
(70, 'cours du mardi ', '2023-01-03 18:00:00', '2023-01-03 20:00:00', '#ffffff', '#000000', '69', 1),
(71, 'cours du mardi ', '2023-01-10 18:00:00', '2023-01-10 20:00:00', '#ffffff', '#000000', '69', 1),
(72, 'cours du mardi ', '2023-01-17 18:00:00', '2023-01-17 20:00:00', '#ffffff', '#000000', '69', 1),
(73, 'cours du mardi ', '2023-01-24 18:00:00', '2023-01-24 20:00:00', '#ffffff', '#000000', '69', 1),
(74, 'cours du mardi ', '2023-01-31 18:00:00', '2023-01-31 20:00:00', '#ffffff', '#000000', '69', 1),
(75, 'cours du mardi ', '2023-02-07 18:00:00', '2023-02-07 20:00:00', '#ffffff', '#000000', '69', 1),
(76, 'cours du mardi ', '2023-02-14 18:00:00', '2023-02-14 20:00:00', '#ffffff', '#000000', '69', 1),
(77, 'cours du mardi ', '2023-02-21 18:00:00', '2023-02-21 20:00:00', '#ffffff', '#000000', '69', 1),
(78, 'cours du mardi ', '2023-02-28 18:00:00', '2023-02-28 20:00:00', '#ffffff', '#000000', '69', 1),
(79, 'cours du mardi ', '2023-03-07 18:00:00', '2023-03-07 20:00:00', '#ffffff', '#000000', '69', 1),
(80, 'cours du mardi ', '2023-03-14 18:00:00', '2023-03-14 20:00:00', '#ffffff', '#000000', '69', 1),
(81, 'cours du mardi ', '2023-03-21 18:00:00', '2023-03-21 20:00:00', '#ffffff', '#000000', '69', 1),
(82, 'cours du mardi ', '2023-03-28 18:00:00', '2023-03-28 20:00:00', '#ffffff', '#000000', '69', 1),
(83, 'cours du mardi ', '2023-04-04 18:00:00', '2023-04-04 20:00:00', '#ffffff', '#000000', '69', 1),
(84, 'cours du mardi ', '2023-04-11 18:00:00', '2023-04-11 20:00:00', '#ffffff', '#000000', '69', 1),
(85, 'cours du mardi ', '2023-04-18 18:00:00', '2023-04-18 20:00:00', '#ffffff', '#000000', '69', 1),
(86, 'cours du mardi ', '2023-04-25 18:00:00', '2023-04-25 20:00:00', '#ffffff', '#000000', '69', 1),
(87, 'cours du mardi ', '2023-05-02 18:00:00', '2023-05-02 20:00:00', '#ffffff', '#000000', '69', 1),
(88, 'cours du mardi ', '2023-05-09 18:00:00', '2023-05-09 20:00:00', '#ffffff', '#000000', '69', 1),
(89, 'cours du mardi ', '2023-05-16 18:00:00', '2023-05-16 20:00:00', '#ffffff', '#000000', '69', 1),
(90, 'cours du mardi ', '2023-05-23 18:00:00', '2023-05-23 20:00:00', '#ffffff', '#000000', '69', 1),
(91, 'cours du mardi ', '2023-05-30 18:00:00', '2023-05-30 20:00:00', '#ffffff', '#000000', '69', 1),
(92, 'cours du mardi ', '2023-06-06 18:00:00', '2023-06-06 20:00:00', '#ffffff', '#000000', '69', 1),
(93, 'cours du mardi ', '2023-06-13 18:00:00', '2023-06-13 20:00:00', '#ffffff', '#000000', '69', 1),
(94, 'cours du mardi ', '2023-06-20 18:00:00', '2023-06-20 20:00:00', '#ffffff', '#000000', '69', 1),
(95, 'cours du mardi ', '2023-06-27 18:00:00', '2023-06-27 20:00:00', '#ffffff', '#000000', '69', 1),
(96, 'cours du mardi ', '2023-07-04 18:00:00', '2023-07-04 20:00:00', '#ffffff', '#000000', '69', 1),
(97, 'cours du mardi ', '2023-07-11 18:00:00', '2023-07-11 20:00:00', '#ffffff', '#000000', '69', 1),
(98, 'cours du mardi ', '2023-07-18 18:00:00', '2023-07-18 20:00:00', '#ffffff', '#000000', '69', 1),
(99, 'cours du mardi ', '2023-07-25 18:00:00', '2023-07-25 20:00:00', '#ffffff', '#000000', '69', 1),
(100, 'cours du mardi ', '2023-08-01 18:00:00', '2023-08-01 20:00:00', '#ffffff', '#000000', '69', 1),
(101, 'cours du mardi ', '2023-08-08 18:00:00', '2023-08-08 20:00:00', '#ffffff', '#000000', '69', 1),
(102, 'cours du mardi ', '2023-08-15 18:00:00', '2023-08-15 20:00:00', '#ffffff', '#000000', '69', 1),
(103, 'cours du mardi ', '2023-08-22 18:00:00', '2023-08-22 20:00:00', '#ffffff', '#000000', '69', 1),
(104, 'cours du mardi ', '2023-08-29 18:00:00', '2023-08-29 20:00:00', '#ffffff', '#000000', '69', 1),
(105, 'cours du mardi ', '2023-09-05 18:00:00', '2023-09-05 20:00:00', '#ffffff', '#000000', '69', 1),
(106, 'cours du mardi ', '2023-09-12 18:00:00', '2023-09-12 20:00:00', '#ffffff', '#000000', '69', 1),
(107, 'cours du mardi ', '2023-09-19 18:00:00', '2023-09-19 20:00:00', '#ffffff', '#000000', '69', 1),
(108, 'cours du mardi ', '2023-09-26 18:00:00', '2023-09-26 20:00:00', '#ffffff', '#000000', '69', 1),
(109, 'cours du mardi ', '2023-10-03 18:00:00', '2023-10-03 20:00:00', '#ffffff', '#000000', '69', 1),
(110, 'cours du mardi ', '2023-10-10 18:00:00', '2023-10-10 20:00:00', '#ffffff', '#000000', '69', 1),
(111, 'cours du mardi ', '2023-10-17 18:00:00', '2023-10-17 20:00:00', '#ffffff', '#000000', '69', 1),
(112, 'cours du mardi ', '2023-10-24 18:00:00', '2023-10-24 20:00:00', '#ffffff', '#000000', '69', 1),
(113, 'cours du mardi ', '2023-10-31 18:00:00', '2023-10-31 20:00:00', '#ffffff', '#000000', '69', 1),
(114, 'cours du mardi ', '2023-11-07 18:00:00', '2023-11-07 20:00:00', '#ffffff', '#000000', '69', 1),
(115, 'cours du mardi ', '2023-11-14 18:00:00', '2023-11-14 20:00:00', '#ffffff', '#000000', '69', 1),
(116, 'cours du mardi ', '2023-11-21 18:00:00', '2023-11-21 20:00:00', '#ffffff', '#000000', '69', 1),
(117, 'cours du mardi ', '2023-11-28 18:00:00', '2023-11-28 20:00:00', '#ffffff', '#000000', '69', 1),
(118, 'cours du mardi ', '2023-12-05 18:00:00', '2023-12-05 20:00:00', '#ffffff', '#000000', '69', 1),
(119, 'cours du mardi ', '2023-12-12 18:00:00', '2023-12-12 20:00:00', '#ffffff', '#000000', '69', 1),
(120, 'cours du mardi ', '2023-12-19 18:00:00', '2023-12-19 20:00:00', '#ffffff', '#000000', '69', 1),
(121, 'test', '2022-12-08 00:00:00', '2022-12-07 03:00:00', '#1a705a', '#6453e9', NULL, 1),
(122, 'test', '2022-12-09 00:00:00', '2022-12-08 03:00:00', '#1a705a', '#6453e9', '121', 1),
(123, 'test', '2022-12-12 00:00:00', '2022-12-11 03:00:00', '#1a705a', '#6453e9', '121', 1),
(124, 'test', '2022-12-13 00:00:00', '2022-12-12 03:00:00', '#1a705a', '#6453e9', '121', 1),
(125, 'test', '2022-12-14 00:00:00', '2022-12-13 03:00:00', '#1a705a', '#6453e9', '121', 1),
(126, 'test', '2022-12-14 17:00:00', '1970-01-01 00:00:00', '#543c08', '#6453e9', NULL, 1),
(127, 'test', '2022-12-21 17:00:00', '1970-01-08 00:00:00', '#543c08', '#6453e9', '126', 1),
(128, 'test', '2022-12-14 17:00:00', '1970-01-01 00:00:00', '#543c08', '#6453e9', NULL, 1),
(129, 'test', '2022-12-21 17:00:00', '1970-01-08 00:00:00', '#543c08', '#6453e9', '128', 1),
(130, 'test', '2022-12-14 17:00:00', '1970-01-01 00:00:00', '#543c08', '#6453e9', NULL, 1),
(131, 'test', '2022-12-21 17:00:00', '1970-01-08 00:00:00', '#543c08', '#6453e9', '130', 1),
(132, 'test', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '#97e953', '#6453e9', NULL, 1),
(159, 'Karting', '2022-12-07 14:00:00', '2022-12-07 18:00:00', '#e953b9', '#6453e9', NULL, 1),
(160, 'fête', '2022-12-13 10:00:00', '2022-12-14 16:00:00', '#e95353', '#6453e9', NULL, 1),
(161, 'Mariage', '2023-03-24 12:00:00', '2023-03-24 21:00:00', '#eb4034', '#fcfafa\r\n', '1', 1),
(162, NULL, '2023-03-23 14:24:36', '2023-03-23 14:24:36', NULL, NULL, NULL, 1),
(163, 'Mariage', '2023-03-23 12:00:00', '2023-03-23 21:00:00', '#fa1302', '#fcfafa\r\n', NULL, 1),
(164, NULL, '2023-03-23 14:27:44', '2023-03-23 14:27:44', NULL, NULL, NULL, 1),
(165, 'Mariage', '2023-03-23 12:00:00', '2023-03-23 21:00:00', '#fa1302', '#fcfafa\r\n', NULL, 1),
(166, NULL, '2023-03-23 14:27:44', '2023-03-23 14:27:44', NULL, NULL, NULL, 1),
(167, 'Test pour Flutter', '2023-03-30 11:00:00', '2023-03-30 14:00:00', '#1b5bc2', '#000000', NULL, 1),
(169, 'Test_Flutter', '2023-04-06 13:00:00', '2023-04-06 15:00:00', '#8f1f17', '#fafafa', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `ID_Inscription` int(11) NOT NULL AUTO_INCREMENT,
  `annee` date DEFAULT NULL,
  `CotisationFFE` int(11) DEFAULT NULL,
  `CotisationCentre` int(11) DEFAULT NULL,
  `ID_Personne` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Inscription`),
  KEY `ID_Personne` (`ID_Personne`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`ID_Inscription`, `annee`, `CotisationFFE`, `CotisationCentre`, `ID_Personne`, `actif`) VALUES
(1, '2022-11-22', 50, 50, 994, 0),
(2, '1987-10-01', 666, 54, 996, 1),
(3, '2022-11-11', 25, 85, 993, 0),
(4, '2022-11-11', 25, 85, 993, 0),
(5, '1979-02-01', 15, 14, 996, 1),
(6, '2022-02-26', 1, 1, 996, 0),
(7, '2022-11-27', 50, 789, 996, 1),
(8, '2022-11-01', 999, 12, 994, 0),
(9, '2022-11-17', 189, 120, 994, 0),
(10, '2015-07-15', 378, 1235, 994, 1),
(11, '2019-02-15', 555, 559, 994, 1),
(12, '1999-02-14', 875, 359, 994, 0),
(13, '2022-11-04', 203, 7897546, 995, 1),
(14, '2022-11-18', 50, 566, 994, 0),
(15, '2028-10-15', 25, 15, 994, 0),
(16, '1995-08-15', 899, 55, 996, 1),
(17, '2022-10-31', 25, 89, 994, 0),
(18, '2022-12-09', 78, 87, 994, 0),
(19, '2022-12-02', 25, 45, 996, 1),
(20, '2022-12-17', 1, 85, 997, 1),
(21, '2023-01-08', 45, 48, 997, 1),
(22, '2030-10-16', 150, 99, 994, 1);

-- --------------------------------------------------------

--
-- Structure de la table `participe`
--

DROP TABLE IF EXISTS `participe`;
CREATE TABLE IF NOT EXISTS `participe` (
  `ID_Personne` int(11) NOT NULL,
  `ID_Cours` int(11) NOT NULL,
  PRIMARY KEY (`ID_Personne`,`ID_Cours`),
  KEY `ID_Cours` (`ID_Cours`),
  KEY `ID_Personne` (`ID_Personne`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participe`
--

INSERT INTO `participe` (`ID_Personne`, `ID_Cours`) VALUES
(994, 69),
(993, 73),
(997, 73),
(998, 73),
(994, 75),
(996, 159),
(994, 167),
(994, 169);

-- --------------------------------------------------------

--
-- Structure de la table `pension`
--

DROP TABLE IF EXISTS `pension`;
CREATE TABLE IF NOT EXISTS `pension` (
  `ID_Pension` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Cheval` int(11) NOT NULL,
  `libellePension` varchar(255) DEFAULT NULL,
  `ID_Tarif` int(11) DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Pension`),
  KEY `ID_Cheval` (`ID_Cheval`),
  KEY `ID_Tarif` (`ID_Tarif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `ID_Personne` int(11) NOT NULL AUTO_INCREMENT,
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
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Personne`)
) ENGINE=InnoDB AUTO_INCREMENT=999 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`ID_Personne`, `nom`, `prenom`, `dateNaissance`, `mail`, `telephone`, `photo`, `niveauGalop`, `numeroLicence`, `rue`, `complementAdresse`, `codePostal`, `ville`, `ID_Responsable`, `actif`) VALUES
(993, 'Captain', 'Marvel', '2002-04-26', 'cptain@gmx.fr', '0662171775', '636426fb496542.35806610.png', 6, 'AXS404', NULL, NULL, NULL, NULL, NULL, 1),
(994, 'Boa', 'Hancock', '2015-03-08', 'boa.hancock@kuja.al', '0635462520', '6388d672c35db0.62455701.jpg', 5, 'axs666', NULL, NULL, NULL, NULL, NULL, 1),
(995, 'Jean', 'Bob', '2022-11-03', 'jb@jb.fr', '0635462520', '6369299e077268.07643631.png', 6, 'azt123', NULL, NULL, NULL, NULL, NULL, 1),
(996, 'Dracule', 'Mihawk', '2008-07-12', 'fraudes@yonko.op', '06897856', '636d02b6997872.54947280.png', 1, 'ade999', NULL, NULL, NULL, NULL, NULL, 1),
(997, 'Roronoa', 'Zoro', '2022-12-31', 'zoro@mugiwara.fr', '03566984', '6388d58a2c1520.55802136.png', 2, 'xdf546', NULL, NULL, NULL, NULL, NULL, 1),
(998, 'Jabami', 'Yumeko', '1995-07-07', 'uykuyu@kjhgfohkfjg.nh', '0635462520', 'Array', 6, 'axs456', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `robe`
--

DROP TABLE IF EXISTS `robe`;
CREATE TABLE IF NOT EXISTS `robe` (
  `ID_Robe` int(11) NOT NULL AUTO_INCREMENT,
  `libelleRobe` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Robe`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `robe`
--

INSERT INTO `robe` (`ID_Robe`, `libelleRobe`, `actif`) VALUES
(1, 'Bleu', 1),
(2, 'Rouge', 1),
(3, 'Blanc', 1),
(4, 'Vert', 1),
(5, 'Violet', 1),
(6, 'Marron', 1),
(7, 'Noir', 1),
(8, 'Rousse', 1),
(9, 'Rose', 1),
(10, 'Brique', 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `ID_Role` int(20) NOT NULL AUTO_INCREMENT,
  `libRole` varchar(25) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`ID_Role`, `libRole`, `actif`) VALUES
(1, 'Administrateur', 1),
(2, 'Utilisateur', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

DROP TABLE IF EXISTS `tarif`;
CREATE TABLE IF NOT EXISTS `tarif` (
  `ID_Tarif` int(11) NOT NULL AUTO_INCREMENT,
  `libelleTarif` varchar(255) DEFAULT NULL,
  `prixMois` float DEFAULT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Tarif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typepension`
--

DROP TABLE IF EXISTS `typepension`;
CREATE TABLE IF NOT EXISTS `typepension` (
  `ID_TypePension` int(11) NOT NULL,
  `libelle_TypePension` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_TypePension`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID_Conn` int(50) NOT NULL AUTO_INCREMENT,
  `mail_utilisateur` varchar(50) DEFAULT NULL,
  `mot_de_passe` varchar(30) DEFAULT NULL,
  `ID_Role` int(11) NOT NULL,
  `ID_Personne` int(10) NOT NULL,
  `actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_Conn`),
  KEY `ID_Personne` (`ID_Personne`),
  KEY `ID_Role` (`ID_Role`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_Conn`, `mail_utilisateur`, `mot_de_passe`, `ID_Role`, `ID_Personne`, `actif`) VALUES
(1, 'cptain@gmx.fr', '', 1, 993, 1),
(2, 'cptain@gmx.fr', '', 1, 993, 1),
(3, 'boa.hancock@kuja.al', '', 2, 994, 1),
(4, 'zoro@mugiwara.fr', NULL, 2, 997, 1),
(5, 'cptain@gmx.fr', 'HXPf?TpS5bdR', 1, 993, 0),
(6, 'boa.hancock@kuja.al', 'rSaeLeW1I*p8', 1, 994, 1),
(7, 'fraudes@yonko.op', 'g@kQS*mRmjOq', 2, 996, 1),
(8, 'cptain@gmx.fr', 'Vk0dÂ£WÃ‚9c17n', 1, 993, 1),
(9, 'boa.hancock@kuja.al', '&EZzncUSN5D7', 1, 994, 1),
(10, 'cptain@gmx.fr', 'IwB&A&6lwd9V', 1, 993, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cheval`
--
ALTER TABLE `cheval`
  ADD CONSTRAINT `cheval_ibfk_1` FOREIGN KEY (`ID_Robe`) REFERENCES `robe` (`ID_Robe`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`);

--
-- Contraintes pour la table `participe`
--
ALTER TABLE `participe`
  ADD CONSTRAINT `participe_ibfk_1` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`),
  ADD CONSTRAINT `participe_ibfk_2` FOREIGN KEY (`ID_Cours`) REFERENCES `cours` (`id`);

--
-- Contraintes pour la table `pension`
--
ALTER TABLE `pension`
  ADD CONSTRAINT `pension_ibfk_1` FOREIGN KEY (`ID_Cheval`) REFERENCES `cheval` (`ID_Cheval`),
  ADD CONSTRAINT `pension_ibfk_2` FOREIGN KEY (`ID_Tarif`) REFERENCES `tarif` (`ID_Tarif`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_Personne`) REFERENCES `personne` (`ID_Personne`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`ID_Role`) REFERENCES `role` (`ID_Role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
