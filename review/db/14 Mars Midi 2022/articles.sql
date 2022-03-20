-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 mars 2022 à 16:04
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `camera`
--

CREATE TABLE `camera` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` date NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `camera`
--

INSERT INTO `camera` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(1, 'CAMERA TEST', '0000-00-00', '1647270030.jpg', '5000€');

-- --------------------------------------------------------

--
-- Structure de la table `encaissement`
--

CREATE TABLE `encaissement` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `encaissement`
--

INSERT INTO `encaissement` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(1, 'TEST ENCAISSEMENT', 'SXCVFXCVDGFGDFGDGDFG', '1647268621.jpg', '5000€');

-- --------------------------------------------------------

--
-- Structure de la table `monnayeur`
--

CREATE TABLE `monnayeur` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `monnayeur`
--

INSERT INTO `monnayeur` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(1, 'MONNYEUR TEST33', 'DSFSDFSDF', '1647265972.jpg', '5000€');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(1, 'PAIEMENT TEST', 'fdsf4sd65f4sd65f4s6dfsdf', '1647269443.jpg', '5000€');

-- --------------------------------------------------------

--
-- Structure de la table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tpe`
--

CREATE TABLE `tpe` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `images_name` varchar(255) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tpe`
--

INSERT INTO `tpe` (`id`, `titre`, `contenu`, `images_name`, `price`) VALUES
(48, 'TEST 555', 'AMEN555', '1646940546.jpg', '555€'),
(58, 'test5', 'dfssssssssssssssssssssssssssfffffffffjjjjjjjjjjjjjjjjjjjeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '1646941349.jpg', '5000€'),
(59, 'test5', 'dfssssssssssssssssssssssssssfffffffffjjjjjjjjjjjjjjjjjjjeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '1646941364.jpg', '5000€'),
(60, 'test5', 'dfssssssssssssssssssssssssssfffffffffjjjjjjjjjjjjjjjjjjjeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', '1646941366.jpg', '5000€'),
(70, 'jhlhjkhjk', 'hjkhjkhjk', '1647258996.jpg', 'hkhjkhjk'),
(71, 'fdgdfgdfg', 'fdgdfgdfgdf', '1647259278.jpg', 'dfgdfgdfgdfg'),
(72, 'fdgdfgdfg', 'fdgdfgdfgdf', '1647259318.jpg', 'dfgdfgdfgdfg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 0, 'admin', '12345', '2022-03-11 17:57:48');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `camera`
--
ALTER TABLE `camera`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `encaissement`
--
ALTER TABLE `encaissement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `monnayeur`
--
ALTER TABLE `monnayeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tpe`
--
ALTER TABLE `tpe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `camera`
--
ALTER TABLE `camera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `encaissement`
--
ALTER TABLE `encaissement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `monnayeur`
--
ALTER TABLE `monnayeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tpe`
--
ALTER TABLE `tpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
