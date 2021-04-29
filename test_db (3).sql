-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 mars 2021 à 14:13
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `Iname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `id_implantation` int(11) NOT NULL,
  `id_structure` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `adresse_ip` text NOT NULL,
  `num_inventaire_fixe` int(50) NOT NULL,
  `num_inventaire_affecte` int(50) NOT NULL,
  `origine_poste_affecte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `fname`, `Iname`, `age`, `id_implantation`, `id_structure`, `mail`, `adresse_ip`, `num_inventaire_fixe`, `num_inventaire_affecte`, `origine_poste_affecte`) VALUES
(5, 'DBB', 'BDD', 14, 7, 3, 'hugo@gmail.com', '2.134.213.2', 0, 8754983, 'PA'),
(6, 'hgjk', 'sdfr', 25, 1, 1, '0', '0', 0, 0, '0'),
(7, 'some', 'thing', 32, 1, 1, '0', '0', 0, 0, '0'),
(8, 'White', 'black', 42, 1, 1, '0', '0', 0, 0, '0'),
(10, 'WOR', 'HOME', 54, 1, 1, '0', '0', 0, 0, '0'),
(13, 'java', 'csharp', 66, 1, 1, '0', '0', 0, 0, '0'),
(14, 'ASP NET', 'JAVAEE', 11, 1, 1, '0', '0', 0, 0, '0'),
(15, 'FN', 'LN', 40, 1, 1, '0', '0', 0, 0, '0'),
(16, 'TSF', 'TSL', 9900, 1, 1, '0', '0', 0, 0, '0'),
(19, 'AAA', 'BBB', 10, 1, 1, '0', '0', 0, 0, '0'),
(20, 'CCC', 'DDD', 41, 1, 1, '0', '0', 0, 0, '0'),
(21, 'EEE', 'FFF', 18, 1, 1, '0', '0', 0, 0, '0'),
(22, 'Strap', 'Frame', 45, 1, 1, '0', '0', 0, 0, '0'),
(25, 'REER', 'ERRE', 25, 1, 1, '0', '0', 0, 0, '0'),
(26, 'TUIC', 'COIT', 84, 1, 1, '0', '0', 0, 0, '0'),
(27, 'TUIC', 'COIT', 46, 1, 1, '0', '0', 0, 0, '0'),
(28, 'vcc', 'cvv', 4, 1, 1, '0', '0', 0, 0, '0'),
(29, 'NewLLLNAME', 'NewLLLNAME', 399, 1, 1, '0', '0', 0, 0, '0'),
(50, 'z', 'Kheira', 20, 1, 1, '0', '0', 0, 0, '0'),
(51, 'r', 'dvd', 23, 1, 1, '0', '0', 0, 0, '0'),
(52, 'r', 'dvd', 23, 1, 1, '0', '0', 0, 0, '0'),
(53, 'z', 'Kheira', 13, 1, 1, '0', '0', 0, 0, '0'),
(54, 'z', 'del', 12, 1, 1, '0', '0', 0, 0, '0'),
(55, 'abdel', 'k', 23, 1, 1, '0', '0', 0, 0, '0'),
(58, 'hugo', 'deldique', 21, 2, 5, 'hugo@gmail.com', '152.615.31.1', 3132, 2134, 'sfzs'),
(59, 'hugo', 'deldique', 21, 2, 5, 'hugo@gmail.com', '152.615.31.1', 3132, 2134, 'sfzs'),
(60, 'Gueddoura', 'Kheira', 13, 3, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(61, 'Gueddoura', 'Kheira', 13, 3, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(62, 'Gueddoura', 'Kheira', 13, 3, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(63, 'Gueddoura', 'Kheira', 13, 3, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(64, 'Gueddoura', 'Kheira', 13, 3, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(65, 'Gueddoura', 'Kheira', 13, 3, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(66, 'deldique', 'hugo', 21, 3, 2, 'hugo@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(67, 'deldique', 'hugo', 21, 9, 2, 'hugo@gmail.com', '12354', 13, 564, 'sdhcb'),
(68, 'Gueddoura', 'Kheira', 20, 3, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(69, 'Gueddoura', 'Kheira', 20, 6, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(70, 'Gueddoura', 'Kheira', 20, 6, 2, 'kheira@gmail.com', '02 rue esther poggio', 156, 1154, '125'),
(71, 'garcia', 'thibeau', 30, 4, 3, 'thibeau@gmail.com', '215.156.23.1', 654, 8646, '845'),
(72, 'smith', 'lucas', 21, 8, 2, 'lucas@hotmail.com', '255.255.255.255', 9871, 861, '6511'),
(73, 'mehdi', 'zz', 0, 0, 4, 'mehdi@gmail.com', '255.255.255.255', 156, 6415, '65174'),
(74, 'zzz', 'medhi', 0, 0, 4, 'medhi@hotmail.com', '255.255.255.255', 13, 861, 'sdhcb'),
(75, 'Gueddoura', 'Kheira', 0, 0, 4, 'kheira200@hotmail.com', '255.255.255.255', 13, 861, 'sdhcb'),
(76, 'Gueddoura', 'Kheira', 0, 0, 4, 'kheira200@hotmail.com', '255.255.255.255', 13, 8646, 'sdhcb'),
(77, 'Gueddoura', 'Kheira', 0, 0, 4, 'kheira200@hotmail.com', '255.255.255.255', 13, 861, '65174'),
(78, 'Gueddoura', 'Kheira', 0, 11, 1, 'kheira200@hotmail.com', '255.255.255.255', 13, 1154, 'sdhcb'),
(79, 'zzz', 'mehdi', 0, 7, 3, 'mehdi', '255.255.255.255', 9871, 315, '65174'),
(80, 'jjj', 'jiji', 0, 12, 2, 'jiji@yehoo.com', '255.255.255.255', 9871, 564, 'qdsf');

-- --------------------------------------------------------

--
-- Structure de la table `implantation`
--

CREATE TABLE `implantation` (
  `im_id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `implantation`
--

INSERT INTO `implantation` (`im_id`, `libelle`) VALUES
(1, 'AUTRE'),
(2, 'CDIF'),
(3, 'DIRECTION'),
(4, 'PCE'),
(5, 'PCRP'),
(6, 'PRC'),
(7, 'SDE'),
(8, 'SGC'),
(9, 'SIE'),
(10, 'SIP'),
(11, 'SPF'),
(12, 'TRESORERIE'),
(13, 'S/O');

-- --------------------------------------------------------

--
-- Structure de la table `jour`
--

CREATE TABLE `jour` (
  `j_id` int(11) NOT NULL,
  `j_u_id` int(11) NOT NULL,
  `j_jt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jour`
--

INSERT INTO `jour` (`j_id`, `j_u_id`, `j_jt_id`) VALUES
(1, 5, 1),
(2, 5, 2),
(3, 64, 1),
(4, 64, 2),
(5, 65, 1),
(6, 65, 2),
(7, 66, 2),
(8, 66, 3),
(9, 66, 4),
(10, 67, 2),
(11, 68, 1),
(12, 69, 5),
(13, 70, 5),
(14, 71, 5),
(15, 72, 4),
(16, 73, 3),
(17, 73, 4),
(18, 73, 5),
(19, 74, 3),
(20, 74, 4),
(21, 74, 5),
(22, 75, 2),
(23, 75, 5),
(24, 76, 2),
(25, 76, 4),
(26, 76, 5),
(27, 77, 2),
(28, 77, 4),
(29, 77, 5),
(30, 78, 3),
(31, 78, 4),
(32, 78, 5),
(33, 79, 1),
(34, 79, 3),
(35, 79, 5),
(36, 80, 2),
(37, 80, 4),
(38, 81, 1),
(39, 81, 2),
(40, 81, 3),
(41, 81, 4),
(42, 81, 5),
(43, 82, 2),
(44, 82, 4),
(45, 83, 1),
(46, 83, 2);

-- --------------------------------------------------------

--
-- Structure de la table `jour_teletravail`
--

CREATE TABLE `jour_teletravail` (
  `jt_id` int(11) NOT NULL,
  `jt_libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jour_teletravail`
--

INSERT INTO `jour_teletravail` (`jt_id`, `jt_libelle`) VALUES
(1, 'lundi'),
(2, 'mardi'),
(3, 'mercredi'),
(4, 'jeudi'),
(5, 'vendredi');

-- --------------------------------------------------------

--
-- Structure de la table `structure`
--

CREATE TABLE `structure` (
  `id_stru` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `structure`
--

INSERT INTO `structure` (`id_stru`, `libelle`) VALUES
(1, 'CDIF Nice'),
(2, 'CDIF GRASSE'),
(3, 'CDIF ANTIBES'),
(4, 'EDR');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `implantation`
--
ALTER TABLE `implantation`
  ADD PRIMARY KEY (`im_id`);

--
-- Index pour la table `jour`
--
ALTER TABLE `jour`
  ADD PRIMARY KEY (`j_id`);

--
-- Index pour la table `jour_teletravail`
--
ALTER TABLE `jour_teletravail`
  ADD PRIMARY KEY (`jt_id`);

--
-- Index pour la table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id_stru`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `implantation`
--
ALTER TABLE `implantation`
  MODIFY `im_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `jour`
--
ALTER TABLE `jour`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `jour_teletravail`
--
ALTER TABLE `jour_teletravail`
  MODIFY `jt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `structure`
--
ALTER TABLE `structure`
  MODIFY `id_stru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
