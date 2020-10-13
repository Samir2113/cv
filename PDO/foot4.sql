-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 06 oct. 2020 à 12:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `foot4`
--

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `IDCLUB` varchar(6) NOT NULL,
  `NOMCLUB` char(30) DEFAULT NULL,
  PRIMARY KEY (`IDCLUB`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`IDCLUB`, `NOMCLUB`) VALUES
('BO2627', 'BORDEAUX'),
('JU2527', 'JUVENTUS'),
('OM1313', 'OLYMPIQUE DE MARSEILLE'),
('PS7575', 'PARIS');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

DROP TABLE IF EXISTS `contrat`;
CREATE TABLE IF NOT EXISTS `contrat` (
  `NUMCONTRAT` varchar(6) NOT NULL,
  `IDCLUB` varchar(6) NOT NULL,
  `MATRICULE` varchar(6) NOT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DATEFIN` date DEFAULT NULL,
  PRIMARY KEY (`NUMCONTRAT`),
  KEY `IDCLUB` (`IDCLUB`),
  KEY `MATRICULE` (`MATRICULE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contrat`
--

INSERT INTO `contrat` (`NUMCONTRAT`, `IDCLUB`, `MATRICULE`, `DATEDEBUT`, `DATEFIN`) VALUES
('BEN212', 'OM1313', 'BE6258', '2019-06-15', '2021-04-04'),
('GER264', 'OM1313', 'GE8949', '2018-06-02', '2022-12-05'),
('KAM321', 'OM1313', 'KA1312', '2018-08-02', '2021-10-10'),
('LOP654', 'OM1313', 'LO2589', '2019-08-06', '2021-09-07'),
('MAN103', 'OM1313', 'MA2589', '2019-08-12', '2022-10-10'),
('SAN987', 'OM1313', 'SA5859', '2017-08-04', '2023-09-04'),
('WEA135', 'PS7575', 'WE1375', '1995-10-06', '1997-09-06'),
('ZID006', 'BO2627', 'ZI1375', '1992-09-05', '1996-10-10'),
('ZID010', 'JU2527', 'ZI1375', '1996-10-11', '2001-12-06');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `MATRICULE` varchar(6) NOT NULL,
  `CODEPAYS` char(3) DEFAULT NULL,
  `NOM` char(20) DEFAULT NULL,
  `PRENOM` char(20) DEFAULT NULL,
  `DATENAISSANCE` date DEFAULT NULL,
  PRIMARY KEY (`MATRICULE`),
  KEY `CODEPAYS` (`CODEPAYS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`MATRICULE`, `CODEPAYS`, `NOM`, `PRENOM`, `DATENAISSANCE`) VALUES
('BE6258', 'ARG', 'BENEDETTO', 'Dario', '1997-11-11'),
('DR1578', 'CIV', 'DROGBA', 'DIDIER', '1981-04-05'),
('GE8949', 'FRA', 'GERMAIN', 'Valère', '2000-04-04'),
('KA1312', 'FRA', 'KAMARA', 'Boubacar', '1995-06-04'),
('LO2589', 'FRA', 'LOPEZ', 'Maxime', '1984-08-04'),
('MA2589', 'FRA', 'MANDANDA', 'Steve', '1989-03-02'),
('ME0605', 'ARG', 'MESSI', 'Lionel', '2000-09-17'),
('RO1213', 'POR', 'RONALDO', 'Christiano', '1998-10-12'),
('SA5859', 'FRA', 'SANSON', 'Morgane', '1999-05-05'),
('WE1375', 'LIB', 'WEAH', 'Georges', '1978-06-05'),
('ZI1375', 'FRA', 'ZIDANE', 'Zinedine', '1981-03-02');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `CODEPAYS` char(3) NOT NULL,
  `NOMPAYS` char(20) DEFAULT NULL,
  PRIMARY KEY (`CODEPAYS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`CODEPAYS`, `NOMPAYS`) VALUES
('ARG', 'ARGENTINE'),
('CIV', 'COTE D\'IVOIRE'),
('FRA', 'FRANCE'),
('LIB', 'LIBERIA'),
('POR', 'PORTUGAL');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`IDCLUB`) REFERENCES `club` (`IDCLUB`),
  ADD CONSTRAINT `contrat_ibfk_2` FOREIGN KEY (`MATRICULE`) REFERENCES `joueur` (`MATRICULE`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`CODEPAYS`) REFERENCES `pays` (`CODEPAYS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
