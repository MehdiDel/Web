-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Client: 127.6.174.130:3306
-- Généré le: Lun 16 Mai 2016 à 01:23
-- Version du serveur: 5.5.45
-- Version de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `nicedriver`
--

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE IF NOT EXISTS `chauffeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `chauffeur`
--

INSERT INTO `chauffeur` (`id`, `nom`, `prenom`, `adresse`, `mail`) VALUES
(1, 'Monti', 'Jo', '123 rue de l''arbousier', 'Jo.Monti@gmail.com'),
(2, 'Dupont', 'Jacques', '45 Avenue des Paquerettes 20220 Monticello', 'Jacquo@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `inscrits`
--

CREATE TABLE IF NOT EXISTS `inscrits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `inscrits`
--

INSERT INTO `inscrits` (`id`, `nom`, `prenom`, `email`, `mdp`, `admin`) VALUES
(31, 'Delvaux', 'Mehdi', 'mehdi.delvaux@gmail.com', '4d9c8df44b4a244137e9db0da299c0c46440b8f8', 1),
(34, 'Gagli', 'Mateo', 'Mateo.Gagli@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0),
(35, 'Zed', 'Ju', 'JuJu@gmail.com', '4d9c8df44b4a244137e9db0da299c0c46440b8f8', 0),
(36, 'Del', 'zak', 'zak@gmail.com', 'd52987198ea2730fd22a38e7976344d843a7ffa0', 0),
(37, 'Vico', 'Luc', 'Luc@gmail.com', '5dc35fa9b5181cf374d77ada02f42716f255ae42', 0),
(38, 'Diallo', 'Marc', 'marc@gmail.com', 'd33c80bc45d65303e33ca83108a9952b745af9ef', 0);

--
-- Déclencheurs `inscrits`
--
DROP TRIGGER IF EXISTS `before_delete_inscrit`;
DELIMITER //
CREATE TRIGGER `before_delete_inscrit` BEFORE DELETE ON `inscrits`
 FOR EACH ROW BEGIN
	DELETE FROM reservationjour
	WHERE email = OLD.email;

	DELETE FROM reservationevenement
	WHERE email = OLD.email;

	DELETE FROM reservationvoyage
	WHERE email = OLD.email;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `reservationevenement`
--

CREATE TABLE IF NOT EXISTS `reservationevenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateE` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `evenement` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `reservationevenement`
--

INSERT INTO `reservationevenement` (`id`, `nom`, `email`, `dateE`, `adresse`, `evenement`, `etat`) VALUES
(1, 'Del', 'zak@gmail.com', '03/07/2016', '26 Olivadia Suprano 20220 Monticello', 'Mariage', 'en attente'),
(2, 'Vico', 'Luc@gmail.com', '18/08/2016', '11 Palais des allée', 'Anniversaire', 'en attente'),
(3, 'Diallo', 'marc@gmail.com', '12/12/2016', '10 rue des oliviers', 'Mariage', 'en attente');

-- --------------------------------------------------------

--
-- Structure de la table `reservationjour`
--

CREATE TABLE IF NOT EXISTS `reservationjour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateD` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `nbpassager` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `reservationjour`
--

INSERT INTO `reservationjour` (`id`, `nom`, `email`, `dateD`, `adresse`, `nbpassager`, `tel`, `ville`, `etat`) VALUES
(21, 'Del', 'zak@gmail.com', '21/05/2016', '123 rue de la chenaie', 2, '0642350789', 'Montpellier', 'accepter'),
(22, 'Vico', 'Luc@gmail.com', '25/06/2016', '19 rue Saint Honoré', 4, '0645215498', 'Nice', 'en attente'),
(23, 'Diallo', 'marc@gmail.com', '26/06/2016', '12 rue des ananas', 1, '0632785496', 'Monaco', 'en attente');

--
-- Déclencheurs `reservationjour`
--
DROP TRIGGER IF EXISTS `before_insert_RJ`;
DELIMITER //
CREATE TRIGGER `before_insert_RJ` BEFORE INSERT ON `reservationjour`
 FOR EACH ROW BEGIN
    IF NEW.nbpassager <= 0 OR NEW.nbpassager >= 10 
      THEN
        SET NEW.etat = "refuser (trop de passager) ";
    END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `reservationvoyage`
--

CREATE TABLE IF NOT EXISTS `reservationvoyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateD` varchar(255) NOT NULL,
  `villeD` varchar(255) NOT NULL,
  `adresseD` varchar(255) NOT NULL,
  `villeA` varchar(255) NOT NULL,
  `adresseA` varchar(255) NOT NULL,
  `nbpassager` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `reservationvoyage`
--

INSERT INTO `reservationvoyage` (`id`, `nom`, `email`, `dateD`, `villeD`, `adresseD`, `villeA`, `adresseA`, `nbpassager`, `tel`, `etat`) VALUES
(8, 'Del', 'zak@gmail.com', '15/06/2016', 'Montpellier', '123 rue de la Chenaie 20220 ', 'Paris', '45 Avenue Gustave Deloré', 3, '0644789524', 'en attente'),
(9, 'Vico', 'Luc@gmail.com', '18/06/2016', 'Nice', '45 Avenue Jean Medecin', 'Lyon', '96 rue des arbres', 3, '0688754525', 'en attente'),
(10, 'Diallo', 'marc@gmail.com', '02/08/2016', 'Nice', '96 rue des tambour', 'Lille', '12 allée de Perolle', 3, '0678549632', 'en attente');

--
-- Déclencheurs `reservationvoyage`
--
DROP TRIGGER IF EXISTS `before_insert_RV`;
DELIMITER //
CREATE TRIGGER `before_insert_RV` BEFORE INSERT ON `reservationvoyage`
 FOR EACH ROW BEGIN
    IF NEW.nbpassager <= 0 OR NEW.nbpassager >= 10 
      THEN
        SET NEW.etat = "refuser (trop de passager) ";
    END IF;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `marque`, `matricule`, `prix`) VALUES
(1, 'RANGE ROVER', 'XVMZ89P', 400),
(2, 'MERCEDES', 'PLID78C', 400),
(3, 'LIMOUSINE', 'LIGR65Q', 400),
(4, 'MINI-VAN', 'MLKI45T', 200),
(5, 'LAMBORGHINI', 'XTFR98Z', 700);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
