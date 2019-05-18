-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 17 Mai 2019 à 17:47
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `spawn`
--

CREATE TABLE `spawn` (
  `idSpawn` int(11) NOT NULL,
  `nomSpawn` varchar(255) NOT NULL,
  `imgSpawn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `spawn`
--

INSERT INTO `spawn` (`idSpawn`, `nomSpawn`, `imgSpawn`) VALUES
(1, 'L\'usine', 'usine.png'),
(2, 'La montagne à l\'Ouest de l\'île', 'montagne.png'),
(3, 'Le circuit de moto-cross (à l\'Est de la carte en dessous de Lonely Lodge)', 'circuit.png'),
(4, 'Les maisons du Nord', 'maisonsnord.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `spawn`
--
ALTER TABLE `spawn`
  ADD PRIMARY KEY (`idSpawn`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `spawn`
--
ALTER TABLE `spawn`
  MODIFY `idSpawn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
