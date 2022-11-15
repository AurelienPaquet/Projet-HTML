-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 14 Novembre 2022 à 10:34
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `serveur-cantine`
--

-- --------------------------------------------------------

--
-- Structure de la table `date_menu`
--

CREATE TABLE IF NOT EXISTS `date_menu` (
`date_id` int(2) NOT NULL,
  `date` date NOT NULL,
  `menu_entree` int(2) NOT NULL,
  `menu_plat` int(2) NOT NULL,
  `menu_dessert` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `date_menu`
--

INSERT INTO `date_menu` (`date_id`, `date`, `menu_entree`, `menu_plat`, `menu_dessert`) VALUES
(1, '2022-11-14', 8, 1, 19);

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(2) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` int(2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `nom`, `type`, `image`, `description`) VALUES
(1, 'Hamburger', 2, 'Image/plat/hamburger.jpg', 'Boeuf pain tomate salade'),
(2, 'pate carbo', 2, 'Image/plat/pates_carbonara.jpg', 'plat de pate'),
(3, 'Salade', 1, 'Image/entree/salade.jpg', 'Salade de lÃ©gume dont tomates, carottes, poivrons et bien d''autres...'),
(4, 'Oeuf Mimosa', 1, 'Image/entree/oeuf-mimosa.jpeg', 'Un assortiment d''oeuf Ã  la mayonnaise'),
(5, 'Carotte RapÃ©e', 1, 'Image/entree/carotte.jpeg', 'Carotte rapÃ©e, citron, Ã©chalote'),
(6, 'Betterave Rouge', 1, 'Image/entree/betterave.jpeg', 'Betterave rouge avec leur sauce'),
(7, 'Concombre', 1, 'Image/entree/concombre.jpeg', 'Concombre Ã  l''huile d''Olive'),
(8, 'Tomate', 1, 'Image/entree/tomate.jpg', 'Tomates avec mozzarella et oeuf dur'),
(9, 'Lasagne', 2, 'Image/plat/lasagne.png', 'Plat de lasagne au boeuf'),
(10, 'Pizza 4 Fromages', 2, 'Image/plat/pizza.jpeg', 'Pizza quatre fromages : mozza, chÃ¨vre, gruyÃ¨re, bleu'),
(11, 'Enchiladas', 2, 'Image/plat/enchiladas.jpeg', 'Plat MEXICAIN au boeuf et au riz'),
(12, 'Tacos', 2, 'Image/plat/tacos.png', 'Le French Tacos 3 viandes : merguez, cordon bleu, poulet marinÃ©'),
(13, 'Kebab', 2, 'Image/plat/kebab.jpg', 'Un kebab classique complet sauce algÃ¨rienne'),
(14, 'glace', 3, 'Image/dessert/glace.jpg', 'Une glace3 boules'),
(15, 'Gateau au Chocolat', 3, 'Image/dessert/gateau_chocolat.jpg', 'Un gateau fondant au chocolat'),
(16, 'Tiramisu', 3, 'Image/dessert/Tiramisu.jpg', 'Tiramisu au cafÃ© et chocolat'),
(17, 'Panna Cotta', 3, 'Image/dessert/panna-cotta.jpeg', 'Panna Cotta aux fruits rouges'),
(18, 'Ile Flottante', 3, 'Image/dessert/iles-flottantes.jpg', 'Ile flottante avec la crÃ¨me anglaise'),
(19, 'Tarte aux Pommes', 3, 'Image/dessert/tarte-pomme.jpg', 'Tarte aux pommes typiquement de la Normandie ');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(5) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 3),
(19, 'Jules', 'KHOLER', 'Jules@gmail.com', '$2y$10$mrNaqI6cgnbkdTmGZWB65eBsVHNxqiHnSECT1I61sk/aAll0rA1Um', 1),
(20, 'PAQUET', 'Aurelien', 'aurelienpaquet@gmail.com', '$2y$10$bjC.mP1UosGikKXt6goXhe9SNfmkGz7lMXdME4hxRQYVXz3KK31gu', 1),
(21, 'Claire', 'Lecoutre', 'Claire@gmail.com', '$2y$10$1CmvAGlgpVBTRK4x7C2Cje2Paf7g5Z/bI9Bp5.dqUMbTv40U82Xeu', 1),
(23, 'andrÃ©', 'andrÃ©', 'andre@gmail.com', '$2y$10$QmLKKQpQOOdUumBI938nretaciOjR1nF.4wJhEHnWKHR0CD49iaTq', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `date_menu`
--
ALTER TABLE `date_menu`
 ADD PRIMARY KEY (`date_id`), ADD KEY `menu_dessert` (`menu_dessert`), ADD KEY `menu_plat` (`menu_plat`), ADD KEY `menu_entree` (`menu_entree`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `date_menu`
--
ALTER TABLE `date_menu`
MODIFY `date_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `date_menu`
--
ALTER TABLE `date_menu`
ADD CONSTRAINT `menu` FOREIGN KEY (`date_id`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `menu_d` FOREIGN KEY (`menu_dessert`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `menu_entree` FOREIGN KEY (`menu_entree`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `menu_plat` FOREIGN KEY (`menu_plat`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
