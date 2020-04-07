-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 25 mars 2020 à 22:30
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `createdAt`) VALUES
(1, 'Article 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate sed augue in ornare. Etiam et magna euismod, vestibulum sapien sit amet, elementum odio. Nulla a quam augue. Curabitur egestas nunc leo, quis dictum nisl ultricies varius. Nunc in est in velit consequat viverra non sit amet urna. Cras auctor, erat a commodo dictum, diam leo efficitur sapien, viverra ornare ante dui eget leo. Mauris eu urna quis nibh euismod ultricies. Quisque ultrices lacus et metus eleifend tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc posuere suscipit dui, sed facilisis lacus ullamcorper ac. Sed pulvinar eget purus non pellentesque. Nulla auctor a ex vitae dictum.', '2020-03-25 00:00:00'),
(2, 'Article 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate sed augue in ornare. Etiam et magna euismod, vestibulum sapien sit amet, elementum odio. Nulla a quam augue. Curabitur egestas nunc leo, quis dictum nisl ultricies varius. Nunc in est in velit consequat viverra non sit amet urna. Cras auctor, erat a commodo dictum, diam leo efficitur sapien, viverra ornare ante dui eget leo. Mauris eu urna quis nibh euismod ultricies. Quisque ultrices lacus et metus eleifend tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc posuere suscipit dui, sed facilisis lacus ullamcorper ac. Sed pulvinar eget purus non pellentesque. Nulla auctor a ex vitae dictum.', '2020-03-25 00:00:00'),
(3, 'Article test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate sed augue in ornare. Etiam et magna euismod, vestibulum sapien sit amet, elementum odio. Nulla a quam augue. Curabitur egestas nunc leo, quis dictum nisl ultricies varius. Nunc in est in velit consequat viverra non sit amet urna. Cras auctor, erat a commodo dictum, diam leo efficitur sapien, viverra ornare ante dui eget leo. Mauris eu urna quis nibh euismod ultricies. Quisque ultrices lacus et metus eleifend tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc posuere suscipit dui, sed facilisis lacus ullamcorper ac. Sed pulvinar eget purus non pellentesque. Nulla auctor a ex vitae dictum.', '2020-03-25 22:25:57'),
(4, 'ddd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate sed augue in ornare. Etiam et magna euismod, vestibulum sapien sit amet, elementum odio. Nulla a quam augue. Curabitur egestas nunc leo, quis dictum nisl ultricies varius. Nunc in est in velit consequat viverra non sit amet urna. Cras auctor, erat a commodo dictum, diam leo efficitur sapien, viverra ornare ante dui eget leo. Mauris eu urna quis nibh euismod ultricies. Quisque ultrices lacus et metus eleifend tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc posuere suscipit dui, sed facilisis lacus ullamcorper ac. Sed pulvinar eget purus non pellentesque. Nulla auctor a ex vitae dictum.', '2020-03-25 22:38:06'),
(5, 'dd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate sed augue in ornare. Etiam et magna euismod, vestibulum sapien sit amet, elementum odio. Nulla a quam augue. Curabitur egestas nunc leo, quis dictum nisl ultricies varius. Nunc in est in velit consequat viverra non sit amet urna. Cras auctor, erat a commodo dictum, diam leo efficitur sapien, viverra ornare ante dui eget leo. Mauris eu urna quis nibh euismod ultricies. Quisque ultrices lacus et metus eleifend tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc posuere suscipit dui, sed facilisis lacus ullamcorper ac. Sed pulvinar eget purus non pellentesque. Nulla auctor a ex vitae dictum.consectetur adipiscing elit. Integer vulputate sed augue in ornare. Etiam et magna euismod, vestibulum sapien sit amet, elementum odio. Nulla a quam augue. Curabitur egestas nunc leo, quis dictum nisl ultricies varius. Nunc in est in velit consequat viverra non sit amet urna. Cras auctor, erat a commodo dictum, diam leo efficitur sapien, viverra ornare ante dui eget leo. Mauris eu urna quis nibh euismod ultricies. Quisque ultrices lacus et metus eleifend tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc posuere suscipit dui, sed facilisis lacus ullamcorper ac. Sed pulvinar eget purus non pellentesque. Nulla auctor a ex vitae dictum.consectetur adipiscing elit. Integer vulputate sed augue in ornare. Etiam et magna euismod, vestibulum sapien sit amet, elementum odio. Nulla a quam augue. Curabitur egestas nunc leo, quis dictum nisl ultricies varius. Nunc in est in velit consequat viverra non sit amet urna. Cras auctor, erat a commodo dictum, diam leo efficitur sapien, viverra ornare ante dui eget leo. Mauris eu urna quis nibh euismod ultricies. Quisque ultrices lacus et metus eleifend tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc posuere suscipit dui, sed facilisis lacus ullamcorper ac. Sed pulvinar eget purus non pellentesque. Nulla auctor a ex vitae dictum.', '2020-03-25 22:54:33'),
(6, 'Premier article ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vulputate sed augue in ornare. Etiam et magna euismod, vestibulum sapien sit amet, elementum odio. Nulla a quam augue. Curabitur egestas nunc leo, quis dictum nisl ultricies varius. Nunc in est in velit consequat viverra non sit amet urna. Cras auctor, erat a commodo dictum, diam leo efficitur sapien, viverra ornare ante dui eget leo. Mauris eu urna quis nibh euismod ultricies. Quisque ultrices lacus et metus eleifend tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc posuere suscipit dui, sed facilisis lacus ullamcorper ac. Sed pulvinar eget purus non pellentesque. Nulla auctor a ex vitae dictum.', '2020-03-25 23:00:15');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_article_id` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `pseudo`, `content`, `createdAt`, `article_id`) VALUES
(1, 'Jean', 'Génial, hâte de voir ce que ça donne !', '2019-03-16 21:02:24', 1),
(2, 'Nina', 'Trop cool ! depuis le temps', '2019-03-17 17:34:35', 1),
(3, 'Rodrigo', 'Great ! ', '2019-03-17 17:42:04', 1),
(4, 'Hélène', 'je suis heureuse de découvrir un super site ! Continuez comme ça ', '2019-03-18 12:08:37', 2),
(5, 'Moussa', 'Un peu déçu par le contenu pour le moment...', '2019-03-18 03:09:02', 2),
(6, 'Barbara', 'pressée de voir la suite', '2019-03-18 10:05:58', 2),
(7, 'Guillaume', 'Je viens ici pour troller !', '2019-03-19 21:08:44', 2),
(8, 'Aurore', 'Enfin un blog tranquille, où on ne nous casse pas les pieds !', '2019-03-19 21:09:27', 2),
(9, 'Jordane', 'Je suis vendéen ! Amateur de mojettes !', '2019-03-20 10:10:11', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
