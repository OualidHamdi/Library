-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 14 fév. 2021 à 15:12
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Oualid', 'Hamdi', 'oualidhamdi12@gmail.com', 'watachiwa');

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `auteur` varchar(200) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `publishedat` date DEFAULT NULL,
  `Prix` float NOT NULL,
  `QStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`ID`, `title`, `auteur`, `image`, `publishedat`, `Prix`, `QStock`) VALUES
(1, 'Wow, No Thank You.', 'Samantha Irby', '49960031.jpg', '2020-12-31', 12.1, 300),
(2, 'Solutions and Other Problems', 'Allie Brosh', '51323365.jpg', '2020-12-14', 15, 30),
(3, 'A Very Punchable Face', 'Colin Jost', '48989372.jpg', '2020-07-14', 11.91, 124),
(4, 'The New One', 'Mike Birbiglia', '52894214._SX318_SY475_.jpg', '2020-07-14', 20.97, 14),
(5, 'Rich Dad, Poor Dad', 'Robert T. Kiyosaki', '27917357._SY475_.jpg', '2017-03-14', 7.19, 300),
(6, 'If It Bleeds', 'Stephen King', '48838041._SY475_.jpg', '2020-04-21', 41.09, 294),
(7, 'Eat a Peach', 'David Chang', '51700803.jpg', '2020-09-08', 14, 23),
(8, 'The Hand on the Wall', 'Maureen Johnson ', '45240918.jpg', '2020-01-21', 12.79, 563),
(9, 'The Henna Wars', 'Adiba Jaigirdar ', '51175739._SX318_SY475_.jpg', '2020-05-12', 17.49, 424),
(10, 'My Dark Vanessa', 'Kate Elizabeth Russell', '44890081._SY475_.jpg', '2020-03-10', 11.49, 48),
(11, 'The Tower of Nero', 'Rick Riordan', '48717744.jpg', '2020-10-06', 13.11, 536);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
