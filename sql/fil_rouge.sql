-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 nov. 2020 à 09:59
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fil_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `attaques`
--

DROP TABLE IF EXISTS `attaques`;
CREATE TABLE IF NOT EXISTS `attaques` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_attaque` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `physique` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `special` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inoffensif` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `attaques`
--

INSERT INTO `attaques` (`id`, `nom_attaque`, `id_type`, `physique`, `special`, `inoffensif`) VALUES
(1, 'Balayage', 1, 'oui', 'non', 'non'),
(2, 'Cogne', 1, 'oui', 'non', 'non'),
(3, 'Surpuissance', 1, 'oui', 'non', 'non'),
(4, 'Feuillage', 2, 'oui', 'non', 'non'),
(5, 'Colère', 3, 'oui', 'non', 'non'),
(6, 'Dracocharge', 3, 'oui', 'non', 'non'),
(7, 'Dracochoc', 3, 'non', 'oui', 'non'),
(8, 'Ouragan', 3, 'non', 'oui', 'non'),
(9, 'Plongée', 4, 'oui', 'non', 'non'),
(10, 'Surf', 4, 'non', 'oui', 'non'),
(11, 'Vibraqua', 4, 'non', 'oui', 'non'),
(12, 'Megacorne', 5, 'oui', 'non', 'non'),
(13, 'Piqûre', 5, 'oui', 'non', 'non'),
(14, 'Taillade', 5, 'oui', 'non', 'non'),
(15, 'Permuforce', 6, 'non', 'non', 'oui'),
(16, 'Gravité', 6, 'non', 'non', 'oui'),
(17, 'Hâte', 6, 'non', 'non', 'oui'),
(18, 'Canon Floral', 7, 'non', 'oui', 'non'),
(19, 'Câlinerie', 7, 'oui', 'non', 'non'),
(20, 'Vent Féerique', 7, 'non', 'oui', 'non'),
(21, 'Plaquage', 8, 'oui', 'non', 'non'),
(22, 'Ultralaser', 8, 'non', 'oui', 'non'),
(23, 'Jugement', 8, 'non', 'oui', 'non'),
(24, 'Poing Météor', 9, 'oui', 'non', 'non'),
(25, 'Griffe Acier', 9, 'oui', 'non', 'non'),
(26, 'Carnareket', 9, 'non', 'oui', 'non'),
(27, 'Bomb-Beurk', 10, 'non', 'oui', 'non'),
(28, 'Direct Toxic', 10, 'oui', 'non', 'non'),
(29, 'Acidarmure', 10, 'non', 'non', 'oui'),
(30, 'Vent Arrière', 11, 'non', 'non', 'oui'),
(31, 'Atterrissage', 11, 'non', 'non', 'oui'),
(32, 'Acrobatie', 11, 'oui', 'non', 'non'),
(33, 'Canicule', 12, 'non', 'oui', 'non'),
(34, 'Pied Brûleur', 12, 'oui', 'non', 'non'),
(35, 'Feu Follet', 12, 'non', 'non', 'oui'),
(36, 'Griffe Ombre', 13, 'oui', 'non', 'non'),
(37, 'Vent Mauvais', 13, 'non', 'oui', 'non'),
(38, 'Halloween', 13, 'non', 'non', 'oui'),
(39, 'Glaciation', 14, 'non', 'oui', 'non'),
(40, 'Ball\'Glace', 14, 'oui', 'non', 'non'),
(41, 'Buée Noire', 14, 'non', 'non', 'oui'),
(42, 'Onde de Choc', 15, 'non', 'oui', 'non'),
(43, 'Tonnerre', 15, 'non', 'oui', 'non'),
(44, 'Poing-Éclair', 15, 'oui', 'non', 'non'),
(45, 'Vol Magnétik', 15, 'non', 'non', 'oui'),
(46, 'Séisme', 16, 'oui', 'non', 'non'),
(47, 'Telluriforce', 16, 'non', 'oui', 'non'),
(48, 'Osmerang', 16, 'oui', 'non', 'non'),
(49, 'Picots', 16, 'non', 'non', 'oui'),
(50, 'Tomberoche', 17, 'oui', 'non', 'non'),
(51, 'Poliroche', 17, 'non', 'non', 'oui'),
(52, 'Fracass\'Tête', 17, 'oui', 'non', 'non'),
(53, 'Vibrobscur', 18, 'non', 'oui', 'non'),
(54, 'Tranche-Nuit', 18, 'oui', 'non', 'non'),
(55, 'Tricherie', 18, 'oui', 'non', 'non'),
(56, 'Machination', 18, 'non', 'non', 'oui'),
(77, 'Aurasphère', 1, 'non', 'oui', 'non'),
(78, 'Exploforce', 1, 'non', 'oui', 'non'),
(79, 'Lame Ointe', 1, 'non', 'oui', 'non'),
(80, 'Gonflette', 1, 'non', 'non', 'oui'),
(81, 'Prévention', 1, 'non', 'non', 'oui'),
(82, 'Détection', 1, 'non', 'non', 'oui'),
(83, 'Lame-Feuille', 2, 'oui', 'non', 'non'),
(84, 'Poing Dard', 2, 'oui', 'non', 'non'),
(85, 'Éco-Sphère', 2, 'non', 'oui', 'non'),
(86, 'Nœud Herbe', 2, 'non', 'oui', 'non'),
(87, 'Tempêteverte', 2, 'non', 'oui', 'non'),
(88, 'Aromathérapi', 2, 'non', 'non', 'oui'),
(89, 'Vampigraine', 2, 'non', 'non', 'oui'),
(90, 'Para-Spore', 2, 'non', 'non', 'oui'),
(91, 'Cascade', 4, 'oui', 'non', 'non'),
(92, 'Aqua-Jet', 4, 'oui', 'non', 'non'),
(93, 'Danse Pluie', 4, 'non', 'non', 'oui'),
(94, 'Détrempage', 4, 'non', 'non', 'oui'),
(95, 'Tourniquet', 4, 'non', 'non', 'oui'),
(96, 'Ébullition', 4, 'non', 'oui', 'non');

-- --------------------------------------------------------

--
-- Structure de la table `pokemons`
--

DROP TABLE IF EXISTS `pokemons`;
CREATE TABLE IF NOT EXISTS `pokemons` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_pokemon` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `secondary_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `pokemons`
--

INSERT INTO `pokemons` (`id`, `nom_pokemon`, `numero`, `type`, `image`, `secondary_type`) VALUES
(1, 'Draïeul', 780, 8, 'http://www.pokepedia.fr/images/c/c7/Draïeul-SL.png', 3),
(2, 'Minidraco', 147, 3, 'http://www.pokepedia.fr/images/1/11/Minidraco-RFVF.png', 3),
(3, 'Colimucus', 705, 3, 'http://www.pokepedia.fr/images/6/68/Colimucus-XY.png', 3),
(4, 'Hyporoi', 230, 4, 'http://www.pokepedia.fr/images/9/90/Hyporoi-HGSS.png', 3),
(5, 'Kicklee', 106, 1, 'http://www.pokepedia.fr/images/e/e7/Kicklee-RFVF.png', 1),
(6, 'Machoc', 66, 1, 'http://www.pokepedia.fr/images/7/75/Machoc-RFVF.png', 1),
(7, 'Debugant', 236, 1, 'http://www.pokepedia.fr/images/3/38/Debugant-HGSS.png', 1),
(8, 'Bulbizarre', 1, 2, 'http://www.pokepedia.fr/images/e/ef/Bulbizarre-RFVF.png', 10),
(9, 'Otaria', 86, 4, 'http://www.pokepedia.fr/images/3/31/Otaria-RFVF.png', 4),
(10, 'Leveinard', 113, 8, 'http://www.pokepedia.fr/images/9/96/Leveinard-RFVF.png', 8),
(11, 'Insécateur', 123, 5, 'http://www.pokepedia.fr/images/a/a4/Insécateur-RFVF.png', 11),
(12, 'Mystherbe', 43, 2, 'http://www.pokepedia.fr/images/3/39/Mystherbe-RFVF.png', 10),
(13, 'Boustiflor', 70, 2, 'http://www.pokepedia.fr/images/f/f5/Boustiflor-RFVF.png', 10),
(14, 'Kokiyas', 90, 4, 'http://www.pokepedia.fr/images/e/eb/Kokiyas-RFVF.png', 4),
(15, 'Aéromite', 49, 5, 'http://www.pokepedia.fr/images/0/0f/Aéromite-RFVF.png', 10),
(16, 'Gardevoir', 282, 6, 'https://cdn.bulbagarden.net/upload/9/99/282Gardevoir.png', 7),
(17, 'Ronflex', 143, 8, 'https://cdn.bulbagarden.net/upload/f/fb/143Snorlax.png', 8),
(18, 'Terhal', 374, 9, 'https://cdn.bulbagarden.net/upload/d/d4/374Beldum.png', 6),
(20, 'Pyrax', 637, 5, 'https://www.pokepedia.fr/images/4/47/Pyrax-NB.png', 12),
(21, 'Togepi', 175, 7, 'https://www.pokepedia.fr/images/8/8f/Togepi-RFVF.png', 7),
(22, 'Nymphali', 700, 7, 'https://cdn.bulbagarden.net/upload/e/e8/700Sylveon.png', 7),
(24, 'Airmure', 227, 9, 'https://www.pokepedia.fr/images/4/48/Airmure-HGSS.png', 11),
(25, 'Dimoclès', 680, 9, 'https://cdn.bulbagarden.net/upload/e/ef/680Doublade.png', 13),
(26, 'Hypnomade', 97, 6, 'https://www.pokepedia.fr/images/3/3a/Hypnomade-RFVF.png', 6),
(27, 'Lewsor', 605, 6, 'https://www.pokepedia.fr/images/e/e4/Lewsor-NB.png', 6),
(28, 'Floette', 670, 7, 'https://cdn.bulbagarden.net/upload/thumb/1/17/670Floette.png/250px-670Floette.png', 7),
(36, 'Chartor', 324, 12, 'https://cdn.bulbagarden.net/upload/3/3b/324Torkoal.png', 12),
(29, 'Tranchodon', 612, 3, 'https://cdn.bulbagarden.net/upload/8/8f/612Haxorus.png', 3),
(30, 'Arbok', 24, 10, 'https://cdn.bulbagarden.net/upload/c/cd/024Arbok.png', 10),
(31, 'Drascore', 452, 10, 'https://cdn.bulbagarden.net/upload/1/13/452Drapion.png', 18),
(32, 'Tritox', 757, 10, 'https://cdn.bulbagarden.net/upload/2/27/757Salandit.png', 12),
(33, 'Boréas', 641, 11, 'https://cdn.bulbagarden.net/upload/0/08/641Tornadus.png', 11),
(34, 'Sonistrelle', 714, 11, 'https://cdn.bulbagarden.net/upload/0/07/714Noibat.png', 3),
(35, 'Bruyverne', 715, 11, 'https://cdn.bulbagarden.net/upload/1/15/715Noivern.png', 3),
(37, 'Goupix', 37, 12, 'https://cdn.bulbagarden.net/upload/6/60/037Vulpix.png', 12),
(38, 'Flambusard', 663, 12, 'https://cdn.bulbagarden.net/upload/a/ae/663Talonflame.png', 11),
(39, 'Feuforêve', 200, 13, 'https://cdn.bulbagarden.net/upload/b/be/200Misdreavus.png', 13),
(40, 'Spiritomb', 442, 13, 'https://cdn.bulbagarden.net/upload/8/8e/442Spiritomb.png', 18),
(41, 'Mimiqui', 778, 13, 'https://cdn.bulbagarden.net/upload/9/9b/778Mimikyu.png', 7),
(42, 'Stalgamin', 361, 14, 'https://cdn.bulbagarden.net/upload/6/6b/361Snorunt.png', 14),
(43, 'Lippoutou', 124, 14, 'https://cdn.bulbagarden.net/upload/7/7c/124Jynx.png', 6),
(44, 'Hexagel', 615, 14, 'https://cdn.bulbagarden.net/upload/1/11/615Cryogonal.png', 14),
(45, 'Fulguris', 642, 15, 'https://cdn.bulbagarden.net/upload/b/b8/642Thundurus.png', 11),
(46, 'Motisma', 479, 15, 'https://cdn.bulbagarden.net/upload/c/c5/479Rotom.png', 13),
(47, 'Électrode', 101, 15, 'https://cdn.bulbagarden.net/upload/8/84/101Electrode.png', 15),
(48, 'Ossatueur', 105, 16, 'https://cdn.bulbagarden.net/upload/9/98/105Marowak.png', 16),
(49, 'Minotaupe', 530, 16, 'https://cdn.bulbagarden.net/upload/6/63/530Excadrill.png', 9),
(50, 'Vibraninf', 329, 16, 'https://cdn.bulbagarden.net/upload/a/af/329Vibrava.png', 3),
(51, 'Simularbre', 185, 17, 'https://cdn.bulbagarden.net/upload/1/1e/185Sudowoodo.png', 17),
(52, 'Onix', 95, 17, 'https://cdn.bulbagarden.net/upload/9/9a/095Onix.png', 16),
(53, 'Ptéra', 142, 17, 'https://cdn.bulbagarden.net/upload/e/e8/142Aerodactyl.png', 11),
(54, 'Ténéfix', 302, 18, 'https://cdn.bulbagarden.net/upload/d/d3/302Sableye.png', 13),
(55, 'Trioxhydre', 635, 18, 'https://cdn.bulbagarden.net/upload/3/3e/635Hydreigon.png', 3),
(56, 'Baggiguane', 559, 18, 'https://cdn.bulbagarden.net/upload/d/dc/559Scraggy.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_type` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `caracteristiques` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `nom_type`, `id_type`, `caracteristiques`) VALUES
(1, 'Combat', 1, 'En défense, le type Combat est faible face aux types Psy, Fée et Vol. Cependant, il résiste particulièrement bien face aux types Insecte, Roche et Ténèbres. Composé d\'énormément de Pokémon puissants en attaque, le type Combat ne brille pas pour ses capacités défensives mais joue un rôle primordial de sweeper. Le type Combat a la particularité d\'être très efficace face aux types Glace, Normal, Roche, Ténèbres et Acier, particulièrement représentés en stratégie Pokémon. Même s\'il est inefficace face au type Spectre, et peu efficace contre les types Fée, Insecte, Poison, Psy et Vol, il est très utile en arène pour venir à bout de puissants adversaires en toutes circonstances.'),
(2, 'Plante', 2, 'Le type Plante est connu pour être très mauvais en défense. En effet, même s\'il est résistant aux types Eau, Electrik, Plante et Sol qui peuvent avoir un rôle dévastateur en combat, les Pokémon Plante sont faibles face aux types Feu, Glace, Insecte, Poison et Vol, dont la plupart sont connus pour leur puissance dévastatrice en attaque ou attaque spéciale. En attaque, le type Plante est très efficace contre les types Eau, Roche et Sol, qui sont fréquent en stratégie. Cependant, il est peu efficace face aux types Acier, Dragon, Feu, Insecte, Plante, Poison et Vol. La combinaison de son trop grand nombre de faiblesse et sa faible couverture offensive en font un type peu exploité et difficile à utiliser en arène.'),
(3, 'Dragon', 3, 'Pokemon très rares et puissants avec des résistances à des types très courants.'),
(4, 'Eau', 4, 'Bien qu\'il soit faible face aux types Plante et Electrik, le type Eau est l\'un des meilleurs en défense grâce à ses résistances aux types Acier, Eau, Feu et Glace. Il permet ainsi de contrer les attaques de nombreux types offensifs très répandus en stratégie tout en profitant de la faible part de Pokémon capables de lui nuire. En attaque, le type Eau est peu efficace contre les types Dragon, Eau et Plante. En revanche, il est très efficace contre les types Feu, Roche et Sol, que l\'on retrouve dans toutes les équipes stratégiques. Cet élément est donc très intéressant puisqu\'il peut vous offrir des opportunités offensives et défensives selon vos besoins.'),
(5, 'Insecte', 5, 'Pour tous les fans d\'entomologie.'),
(6, 'Psy', 6, 'C\'est sûrement un complexe en rapport à l\'enfance.'),
(7, 'Fée', 7, 'Tous des amis de Peter Pan.'),
(8, 'Normal', 8, 'De quoi remettre en question le sens du mot \'normalité\'.'),
(9, 'Acier', 9, 'Il faut les battre tant qu\'ils sont chauds.'),
(10, 'Poison', 10, 'N\'affrontez jamais un Pokémon Poison sans remède sur vous. Niveau de toxicité maximal !'),
(11, 'Vol', 11, 'Vers l\'infini et au-delà !'),
(12, 'Feu', 12, 'Le choix à faire pour tout ceux qui n\'ont pas froid aux yeux.'),
(13, 'Spectre', 13, 'Si vous croyez à une seconde vie après la mort, cela pourrait bien être une vie de Pokémon Spectre.'),
(14, 'Glace', 14, 'Puissants et pourtant très fragiles, les Pokémon Glace sont extrêmement rares. C\'est le type le moins représenté.'),
(15, 'Électrik', 15, 'Véloce et éblouissants, ces Pokémon sont aussi rapides que l\'éclair, et frappent tout aussi fort.'),
(16, 'Sol', 16, 'Pokémon Sol, ambiance de la brousse, Pokémon Sol, attention les secousses ♪ ♫ ♪ ♫'),
(17, 'Roche', 17, 'Des Pokémon tenaces et à la tête dure. Ils sont généralement munis d\'une bonne défense.'),
(18, 'Ténèbres', 18, 'La noirceur est leur élément, et leur malveillance fait leur force.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
