-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 22 Novembre 2022 à 17:43
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
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
`id_commande` int(2) NOT NULL,
  `id_user` int(2) NOT NULL,
  `date` date NOT NULL,
  `entree` int(11) NOT NULL,
  `plat` int(11) NOT NULL,
  `dessert` int(11) NOT NULL,
  `prix` float NOT NULL,
  `etat` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_user`, `date`, `entree`, `plat`, `dessert`, `prix`, `etat`) VALUES
(1, 19, '2022-11-03', 4, 10, 19, 8.5, 1),
(2, 19, '2022-11-03', 8, 10, 19, 8.5, 1),
(3, 25, '2022-11-03', 3, 14, 19, 8.5, 1),
(4, 25, '2022-11-03', 9, 10, 19, 8.5, 2),
(5, 25, '2022-11-03', 4, 10, 19, 8.5, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `date_menu`
--

INSERT INTO `date_menu` (`date_id`, `date`, `menu_entree`, `menu_plat`, `menu_dessert`) VALUES
(1, '2022-11-14', 8, 4, 19),
(2, '2022-11-17', 7, 13, 16),
(3, '2022-11-01', 3, 9, 17),
(4, '2022-11-07', 6, 11, 15),
(5, '2022-11-03', 4, 10, 19),
(6, '2022-11-02', 6, 9, 18),
(7, '2022-11-15', 5, 2, 14),
(8, '2022-11-04', 4, 11, 15),
(9, '2022-11-08', 3, 9, 17),
(10, '2022-11-09', 6, 9, 18),
(11, '2022-11-30', 6, 9, 18),
(12, '2022-11-29', 6, 9, 18),
(13, '2022-11-28', 6, 9, 18),
(14, '2022-11-27', 6, 9, 18),
(15, '2022-11-10', 6, 9, 18),
(16, '2022-11-11', 6, 9, 18),
(17, '2022-11-16', 7, 13, 16);

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(2) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `nom`, `type`, `image`, `description`, `prix`) VALUES
(1, 'Hamburger', 'Plat', 'Image/plat/hamburger.jpg', 'Boeuf pain tomate salade', 3.9),
(2, 'pate carbo', 'Plat', 'Image/plat/pates_carbonara.jpg', 'plat de pate', 3.9),
(3, 'Salade', 'Entrée', 'Image/entree/salade.jpg', 'Salade de lÃ©gume dont tomates, carottes, poivrons et bien d''autres...', 0.9),
(4, 'Oeuf Mimosa', 'Entrée', 'Image/entree/oeuf-mimosa.jpeg', 'Un assortiment d''oeuf Ã  la mayonnaise', 0.9),
(5, 'Carotte RapÃ©e', 'Entrée', 'Image/entree/carotte.jpeg', 'Carotte rapÃ©e, citron, Ã©chalote', 0.9),
(6, 'Betterave Rouge', 'Entrée', 'Image/entree/betterave.jpeg', 'Betterave rouge avec leur sauce', 0.9),
(7, 'Concombre', 'Entrée', 'Image/entree/concombre.jpeg', 'Concombre Ã  l''huile d''Olive', 0.9),
(8, 'Tomate', 'Entrée', 'Image/entree/tomate.jpg', 'Tomates avec mozzarella et oeuf dur', 0.9),
(9, 'Lasagne', 'Plat', 'Image/plat/lasagne.png', 'Plat de lasagne au boeuf', 3.9),
(10, 'Pizza 4 Fromages', 'Plat', 'Image/plat/pizza.jpeg', 'Pizza quatre fromages : mozza, chÃ¨vre, gruyÃ¨re, bleu', 5.8),
(11, 'Enchiladas', 'Plat', 'Image/plat/enchiladas.jpeg', 'Plat MEXICAIN au boeuf et au riz', 3.9),
(12, 'Tacos', 'Plat', 'Image/plat/tacos.png', 'Le French Tacos 3 viandes : merguez, cordon bleu, poulet marinÃ©', 3.9),
(13, 'Kebab', 'Plat', 'Image/plat/kebab.jpg', 'Un kebab classique complet sauce algÃ¨rienne', 3.9),
(14, 'glace', 'Dessert', 'Image/dessert/glace.jpg', 'Une glace3 boules', 1.8),
(15, 'Gateau au Chocolat', 'Dessert', 'Image/dessert/gateau_chocolat.jpg', 'Un gateau fondant au chocolat', 1.8),
(16, 'Tiramisu', 'Dessert', 'Image/dessert/Tiramisu.jpg', 'Tiramisu au cafÃ© et chocolat', 1.8),
(17, 'Panna Cotta', 'Dessert', 'Image/dessert/panna-cotta.jpeg', 'Panna Cotta aux fruits rouges', 1.8),
(18, 'Ile Flottante', 'Dessert', 'Image/dessert/iles-flottantes.jpg', 'Ile flottante avec la crÃ¨me anglaise', 1.8),
(19, 'Tarte aux Pommes', 'Dessert', 'Image/dessert/tarte-pomme.jpg', 'Tarte aux pommes typiquement de la Normandie ', 1.8);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 3),
(19, 'Jules', 'KHOLER', 'Jules@gmail.com', '$2y$10$mrNaqI6cgnbkdTmGZWB65eBsVHNxqiHnSECT1I61sk/aAll0rA1Um', 1),
(21, 'Claire', 'Lecoutre', 'Claire@gmail.com', '$2y$10$1CmvAGlgpVBTRK4x7C2Cje2Paf7g5Z/bI9Bp5.dqUMbTv40U82Xeu', 1),
(23, 'andrÃ©', 'andrÃ©', 'andre@gmail.com', '$2y$10$QmLKKQpQOOdUumBI938nretaciOjR1nF.4wJhEHnWKHR0CD49iaTq', 2),
(25, 'Paquet', 'Aurelien', 'aurelienpaquet@gmail.com', '$2y$10$DkCEHm9nKIP8qBca9Yc6D.qdf9bE4KxbLX2Nr.AWTtftYhB47wblu', 2),
(26, 'aze', 'aze', 'aze@gmail.com', '$2y$10$rGGhttENcUyosje/xqMIaeyHAIBUVIgPUWUN4DbpN9DuI7Gb5ij9C', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`id_commande`), ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `date_menu`
--
ALTER TABLE `date_menu`
 ADD PRIMARY KEY (`date_id`), ADD UNIQUE KEY `date` (`date`), ADD KEY `menu_dessert` (`menu_dessert`), ADD KEY `menu_plat` (`menu_plat`), ADD KEY `menu_entree` (`menu_entree`);

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
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
MODIFY `id_commande` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `date_menu`
--
ALTER TABLE `date_menu`
MODIFY `date_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
