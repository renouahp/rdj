-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 01 déc. 2020 à 15:26
-- Version du serveur :  5.7.29
-- Version de PHP : 7.4.4
drop database if exists shop;
create database if not exists shop;
use shop;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `shopy`
--

CREATE TABLE `shopy` (
  `idItem` int(11) NOT NULL,
  `nom` varchar(32) DEFAULT NULL,
  `categorie` varchar(32) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `image` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `shopy`
--

INSERT INTO `shopy` (`idItem`, `nom`, `categorie`, `description`, `prix`, `image`) VALUES
(1, 'Chemise Design', 'Chemises', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(2, 'Pull Design', 'Pulls', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(3, 'Robe Design', 'Robes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(4, 'Jupe Design', 'Jupes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(5, 'Livre Design', 'Scientifique', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(6, 'Livre Design', 'Science-Fiction', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(7, 'Livre Design', 'Horreur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(8, 'Livre Design', 'Aventure', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(9, 'Item Design', 'Carte mère', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(10, 'Item Design', 'Processeur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(11, 'Item Design', 'Mémoire', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg'),
(12, 'Item Design', 'Disque Dur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt repellendus non, praesentium, eveniet, quaerat accusamus nostrum facilis cupiditate sapiente numquam inventore doloribus! Eius, sint atque. Repellat incidunt explicabo asperiores! Sed.', 120, 'img.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idpers` int(11) NOT NULL,
  `pseudo` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `adresse` varchar(32) DEFAULT NULL,
  `zipCode` int(11) DEFAULT NULL,
  `ville` varchar(32) DEFAULT NULL,
  `phoneNb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idpers`, `pseudo`, `email`, `password`, `adresse`, `zipCode`, `ville`, `phoneNb`) VALUES
(1, 'renouahp', 'rn.rn@gmail.com', '1234567', NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `shopy`
--
ALTER TABLE `shopy`
  ADD PRIMARY KEY (`idItem`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idpers`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `shopy`
--
ALTER TABLE `shopy`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idpers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
