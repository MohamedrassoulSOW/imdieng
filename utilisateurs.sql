-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 05 déc. 2024 à 15:46
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `imdieng`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(256) NOT NULL,
    `prenom` VARCHAR(256) NOT NULL,
    `email` TEXT NOT NULL,
    `mdp` TEXT NOT NULL,
    `role` VARCHAR(256) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 9 DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mdp`, `role`) VALUES
(1, 'Dieng', 'Amadou', 'contact@imdiengconsulting.com', 'dieng1004', 'administrateur'),
(3, 'Sow', 'Mohamed', 'mohamedsow@gmail.com', 'sow2709', 'administrateur'),
(4, 'Sow', 'Oumou', 'juliennezalla@gmail.com', 'zalla1602', 'visiteur'),
(8, '', '', 'sowousmane@gmail.com', 'oussow', 'visiteur'),
(7, 'Sow', 'ousmane', 'sowousmane@gmail.com', 'oussow', 'visiteur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
