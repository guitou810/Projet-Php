-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 23 oct. 2019 à 11:53
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bug`
--

-- --------------------------------------------------------

--
-- Structure de la table `bug`
--

CREATE TABLE `bug` (
  `id` int(11) NOT NULL,
  `titre` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` date NOT NULL,
  `closed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `bug`
--

INSERT INTO `bug` (`id`, `titre`, `description`, `createdAt`, `closed`) VALUES
(1, 'Problème connexion', 'je n\'arrive pas à me connecter à mon compte google chrome', '0000-00-00', 0),
(2, 'Ecran noir', 'dés que je lance lol sur mon pC ,j\'ai un écran noir et je peux plus rien faire à part redémarrer l\'ordinateur.', '0000-00-00', 0),
(3, 'Lag !!!!', 'j\'ai des gros lags quand je lance excel', '0000-00-00', 0),
(4, 'BFFF!!!', 'rien ne marche je vais me lever', '0000-00-00', 0),
(5, 'salut', 'ddddd', '0000-00-00', 0),
(6, 'fffff', 'ddddd', '2018-07-22', 0),
(7, 'ça va ?', 'salut', '2018-07-22', 0),
(8, 'ddddd', 'fffff', '2018-07-22', 0),
(9, 'non pas coucou', 'COUCOU', '2018-07-22', 0),
(10, 'pas content', 'LOL', '2018-05-22', 0),
(11, 'nono', 'Ca va pas du tout ', '2019-10-23', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bug`
--
ALTER TABLE `bug`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bug`
--
ALTER TABLE `bug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
