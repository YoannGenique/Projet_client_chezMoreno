-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 nov. 2020 à 12:24
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chezmoreno`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `u_mail` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_name` text NOT NULL,
  `u_lastname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `u_mail`, `u_password`, `u_name`, `u_lastname`) VALUES
(1, 'genique.yoann@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Yoann', 'Génique'),
(2, 'rameau.celia@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Célia', 'Rameau'),
(3, 'abdel.aouini@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Abdel', 'Aouini'),
(4, 'pascal.moreno@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Pascal', 'Moreno'),
(5, 'jc.mairot@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Jean-Christophe', 'Mairot'),
(6, 'aimad.leban@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Aimad', 'Leban'),
(7, 'anthony.marcellin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Anthony', 'Marcellin'),
(8, 'jeremy.ibert@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Jeremy', 'Ibert'),
(9, 'miguel.urcia@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Miguel', 'Urcia'),
(10, 'ossama.louridi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Ossama', 'Louridi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
