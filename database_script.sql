-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : ven. 03 juin 2022 à 11:54
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_web_ensa`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `influencer`
--

CREATE TABLE `influencer` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comptes_facebook` varchar(255) NOT NULL,
  `comptes_instagram` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `influencer`
--

INSERT INTO `influencer` (`id`, `nom`, `prenom`, `age`, `email`, `comptes_facebook`, `comptes_instagram`, `password`) VALUES
(1, 'user1', 'test', 20, 'user1@test.com', 'user1 test', 'user1 test', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'user2', 'test', 22, 'user2@test.com', 'user2', 'test', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `chiffre_affaire` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comptes_facebook` varchar(255) NOT NULL,
  `comptes_instagram` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `nom`, `logo`, `chiffre_affaire`, `email`, `comptes_facebook`, `comptes_instagram`, `password`) VALUES
(2, 'nike', 'nike.jpg', 555555, 'nike@nike.com', 'nike', 'nike', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'adidas', 'adidas.png', 78988, 'adidas@adidas.com', 'adidas', 'adidas', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Structure de la table `message_de_influencer`
--

CREATE TABLE `message_de_influencer` (
  `id` int(11) NOT NULL,
  `contene` mediumtext NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `influencer_id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message_de_influencer`
--

INSERT INTO `message_de_influencer` (`id`, `contene`, `date`, `influencer_id`, `marque_id`) VALUES
(4, 'hi', '2022-06-03', 1, 2),
(5, 'hi', '2022-06-03', 1, 2),
(6, 'salut', '2022-06-03', 7, 2);

-- --------------------------------------------------------

--
-- Structure de la table `message_de_marque`
--

CREATE TABLE `message_de_marque` (
  `id` int(11) NOT NULL,
  `contene` mediumtext NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `marque_id` int(11) NOT NULL,
  `influencer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `message_de_marque`
--

INSERT INTO `message_de_marque` (`id`, `contene`, `date`, `marque_id`, `influencer_id`) VALUES
(1, 'hi', '2022-06-02', 2, 1),
(2, 'hi', '2022-06-02', 2, 3),
(4, 'hi', '2022-06-03', 2, 2),
(5, 'bonjoure', '2022-06-03', 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `message_suppression_compte_from_influencer`
--

CREATE TABLE `message_suppression_compte_from_influencer` (
  `id` int(11) NOT NULL,
  `contene` varchar(1000) NOT NULL,
  `influencer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `message_suppression_compte_from_marque`
--

CREATE TABLE `message_suppression_compte_from_marque` (
  `id` int(11) NOT NULL,
  `contene` varchar(1000) NOT NULL,
  `marque_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `partenariant_entre_influencer_et_marque`
--

CREATE TABLE `partenariant_entre_influencer_et_marque` (
  `id` int(11) NOT NULL,
  `id_influenceur` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `date_experation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `partenariant_entre_influencer_et_marque`
--

INSERT INTO `partenariant_entre_influencer_et_marque` (`id`, `id_influenceur`, `id_marque`, `montant`, `duree`, `date_experation`) VALUES
(2, 1, 2, 900000, 10, '2022-06-10'),
(7, 7, 2, 20000, 30, '2022-06-30'),
(8, 3, 4, 9090, 10, '2022-06-13');

-- --------------------------------------------------------

--
-- Structure de la table `partenariant_from_influencer`
--

CREATE TABLE `partenariant_from_influencer` (
  `id` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL,
  `id_influenceur` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `date_experation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `partenariant_from_marque`
--

CREATE TABLE `partenariant_from_marque` (
  `id` int(11) NOT NULL,
  `id_influenceur` int(11) NOT NULL,
  `id_marque` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `date_experation` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `influencer`
--
ALTER TABLE `influencer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message_de_influencer`
--
ALTER TABLE `message_de_influencer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message_de_marque`
--
ALTER TABLE `message_de_marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message_suppression_compte_from_influencer`
--
ALTER TABLE `message_suppression_compte_from_influencer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message_suppression_compte_from_marque`
--
ALTER TABLE `message_suppression_compte_from_marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenariant_entre_influencer_et_marque`
--
ALTER TABLE `partenariant_entre_influencer_et_marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenariant_from_influencer`
--
ALTER TABLE `partenariant_from_influencer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenariant_from_marque`
--
ALTER TABLE `partenariant_from_marque`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `influencer`
--
ALTER TABLE `influencer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `message_de_influencer`
--
ALTER TABLE `message_de_influencer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `message_de_marque`
--
ALTER TABLE `message_de_marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `message_suppression_compte_from_influencer`
--
ALTER TABLE `message_suppression_compte_from_influencer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `message_suppression_compte_from_marque`
--
ALTER TABLE `message_suppression_compte_from_marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `partenariant_entre_influencer_et_marque`
--
ALTER TABLE `partenariant_entre_influencer_et_marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `partenariant_from_influencer`
--
ALTER TABLE `partenariant_from_influencer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `partenariant_from_marque`
--
ALTER TABLE `partenariant_from_marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
