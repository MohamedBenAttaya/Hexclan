-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 26 nov. 2019 à 16:56
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `mdp`) VALUES
(11, 'mahdi ksemtini', 'Mahdiksemtini@gmail.com', 'mahdi123');

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `referance` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `code_barre` int(11) NOT NULL,
  `categorie` varchar(5000) NOT NULL,
  `quantite` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`referance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`referance`, `nom`, `prix`, `code_barre`, `categorie`, `quantite`, `img`, `cat`) VALUES
(16584, 'Tacos2', 200, 2135, '../Front_office/images/', 12, '../Front_office/images/tacos2.jpg', 1),
(14578965, 'taco', 6, 14785471, '../Front_office/images/french-tacos.jpg', 4, '../Front_office/images/french-tacos.jpg', 1),
(12548987, 'damdoum', 20, 45968975, '../Front_office/images/14681602_1356209254470991_7551277749793853708_n.jpg', 15, '../Front_office/images/14681602_1356209254470991_7551277749793853708_n.jpg', 1),
(12596259, 'sousissi', 15, 45968975, '../Front_office/images/11167843_970073326407853_6996539004778558990_o.jpg', 56, '../Front_office/images/11167843_970073326407853_6996539004778558990_o.jpg', 2);

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `email`, `mdp`, `adresse`) VALUES
(8, 'mahdi ksemtini', 'Mahdiksemtini@gmail.com', 'mahdi123', 'sfax'),
(9, 'mmm', 'mahdi@gmail.com', '123456', 'lllll'),
(11, 'mmmma', 'aaaaa@gmail.com', '123456', 'aaaaa'),
(18, 'lmlm', 'mmmm@gmail.com', '123456789', 'mmmm'),
(17, 'alaa', 'alaa@gmail.com', '123456789', 'alaaaaa');


--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `IDC` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`, `IDC`, `Quantity`) VALUES
(6, 'Traditionnelle', 'Traditionnelle.png', 6.9, 1, 6),
(8, 'Ranchero', 'Ranchero.png', 6.4, 1, 1),
(3, 'Western', 'Western.png', 6.4, 1, 6);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
