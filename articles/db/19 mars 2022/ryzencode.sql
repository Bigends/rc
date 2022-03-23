-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 20 mars 2022 à 02:48
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
-- Base de données : `ryzencode`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `plus` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `images_name`, `plus`) VALUES
(3, 'Mission Locale', 'Nous accompagnons les jeunes.', '1647723762.jpg', '19 mars 2022'),
(5, 'Chris BALKUMAR', '131231231121hjjjjjjjjj', '1647730226.jpg', '1231231'),
(6, 'Mission Locale', 'bjhbhbn', '1647730365.jpg', '1231231'),
(7, 'Mission Locale', 'bjhbhbn', '1647730368.jpg', '1231231'),
(8, 'Mission Locale', 'bjhbhbn', '1647730370.jpg', '1231231');

-- --------------------------------------------------------

--
-- Structure de la table `design`
--

DROP TABLE IF EXISTS `design`;
CREATE TABLE IF NOT EXISTS `design` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `plus` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `design`
--

INSERT INTO `design` (`id`, `titre`, `contenu`, `images_name`, `plus`) VALUES
(2, 'testtttt', 'dsfsdfsdfsdfsdfsdf', '1647739035.jpg', '12 mars 2022'),
(3, 'testtttt', 'dsfsdfsdfsdfsdfsdf', '1647739037.jpg', '12 mars 2022'),
(4, 'testtttt', 'dsfsdfsdfsdfsdfsdf', '1647739040.jpg', '12 mars 2022'),
(5, 'testtttt', 'dsfsdfsdfsdfsdfsdf', '1647739043.jpg', '12 mars 2022');

-- --------------------------------------------------------

--
-- Structure de la table `gestion`
--

DROP TABLE IF EXISTS `gestion`;
CREATE TABLE IF NOT EXISTS `gestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `plus` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gestion`
--

INSERT INTO `gestion` (`id`, `titre`, `contenu`, `images_name`, `plus`) VALUES
(1, 'Chris BALKUMAR 22', 'dfssdfsdfdqfsdfsdfsdfsfsdfsdfsdf', '1647735689.jpg', '12 mars 2022'),
(2, 'Chris BALKUMAR', 'dfssdfsdfdqfsdfsdfsdfsfsdfsdfsdf', '1647735693.jpg', '12 mars 2022'),
(3, 'Chris BALKUMAR', 'dfssdfsdfdqfsdfsdfsdfsfsdfsdfsdf', '1647735696.jpg', '12 mars 2022'),
(4, 'Chris BALKUMAR', 'dfssdfsdfdqfsdfsdfsdfsfsdfsdfsdf', '1647735699.jpg', '12 mars 2022'),
(5, 'Chris BALKUMAR', 'dfssdfsdfdqfsdfsdfsdfsfsdfsdfsdf', '1647735701.jpg', '12 mars 2022');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `plus` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `contenu`, `images_name`, `plus`) VALUES
(3, 'Ingenico test2', 'marssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '1647732138.jpg', '12 mars 2022'),
(4, 'Ingenico test2', 'marssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '1647732383.jpg', '12 mars 2022'),
(5, 'Ingenico test2', 'marssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '1647732393.jpg', '12 mars 2022'),
(6, 'Ingenico test2', 'marssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '1647732395.jpg', '12 mars 2022');

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id`, `titre`, `contenu`, `images_name`) VALUES
(1, 'Chris BALKUMAR', 'Très bonne entreprise et aide la jeunesse de Guyane. Formidable !', '1647303713.jpg'),
(6, 'Chris BALKUMAR', 'Très bonne entreprise et aide la jeunesse de Guyane. Formidable !', '1647311336.jpg'),
(4, 'BABY', 'Très bonne entreprise et aide la jeunesse de Guyane. Formidable !', '1647310224.jpg'),
(7, 'Chris BALKUMAR', 'Très bonne entreprise et aide la jeunesse de Guyane. Formidable !', '1647311365.jpg'),
(8, 'Société Alpha Monétique', 'Un jeune très sérieux et professionnel dans son métier! Bravo!', '1647353295.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 0, 'admin', '1234', '2022-03-11 21:57:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
