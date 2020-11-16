-- --------------------------------------------------------
--
-- Contenu de la table `article`
--
-- --------------------------------------------------------
INSERT INTO `Plats` (`id`, `id_categorie`, `designation`, `prix`, `tva`, `description`, `img_article`) VALUES
(22, 2, 'Mochi', 4.95, 19.6, 'Les Mochi : une pâtisserie japonaise à base de riz gluant et fourrée généralement avec du anko, la pâte de haricot azuki sucré.', 'images/boutique/AdobeStock_mochi.jpeg'),
(20, 2, 'Dorayaki', 39.95, 19.6, 'Les dorayaki: deux pâtes en forme de pancake, faites en kasutera, enveloppant une garniture de pâte de haricot rouge ', 'images/boutique/AS_dorayaki.jpeg'),
(21, 3, 'Neko café', 49.95, 19.6, 'Un café entierement travaillé à la main vous permettant d obtenir un design hors du commun', 'images/boutique/AdobeStock_330926373.jpeg/');

-- --------------------------------------------------------
--
-- Contenu de la table `categorie`
--
-- --------------------------------------------------------
INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Plats'),
(2, 'Desserts'),
(3, 'Café');
