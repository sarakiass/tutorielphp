-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 28 Août 2017 à 16:42
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`ID`, `Pseudo`, `Message`, `date`) VALUES
(1, 'sara', 'Il fait beau aujourd''hui, vous ne trouvez pas ?', '2017-08-28 05:19:12'),
(2, 'ali', 'Ouais, ça faisait un moment qu''on n''avait pas vu la lumière du soleil !', '2017-08-28 06:17:04'),
(3, 'mehdi', 'Ça vous tente d''aller à la plage aujourd''hui ? Y''a de super vagues !', '2017-08-28 07:04:06'),
(4, 'sara', 'Cool, bonne idée ! J''amène ma planche !', '2017-08-28 10:18:09'),
(5, 'ali', 'Comptez sur moi !', '2017-08-28 10:39:31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
