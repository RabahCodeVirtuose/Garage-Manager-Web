-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 16 avr. 2024 à 12:33
-- Version du serveur :  10.5.19-MariaDB-0+deb11u2-log
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e22208277_db1`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_actualite_act`
--

CREATE TABLE `t_actualite_act` (
  `act_id` int(11) NOT NULL,
  `act_numero` int(11) DEFAULT NULL,
  `act_titre` varchar(100) DEFAULT NULL,
  `act_texte` varchar(300) DEFAULT NULL,
  `act_date_publication` date DEFAULT NULL,
  `act_etat` char(1) DEFAULT NULL,
  `cpt_pseudo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_actualite_act`
--

INSERT INTO `t_actualite_act` (`act_id`, `act_numero`, `act_titre`, `act_texte`, `act_date_publication`, `act_etat`, `cpt_pseudo`) VALUES
(2, 6353, 'Avancée Majeure dans la Recherche Médicale', 'Des chercheurs annoncent une percée prometteuse dans la lutte contre une maladie courante, ouvrant la voie à de nouveaux traitements et à l\'espoir pour les patients.', '2024-01-21', 'L', 'hakim-mohamed-arab.aithamou@etudiant.univ-brest.fr'),
(3, 6548, 'Nouvelle Technologie Écologique pour la Gestion des Déchets', 'Une startup lance une technologie révolutionnaire de gestion des déchets qui promet de réduire considérablement l\'impact environnemental tout en favorisant le recyclage.', '2023-12-04', 'C', 'lynda.kacemi@etudiant.univ-brest.fr'),
(4, 3456, 'Exploration Spatiale : Découverte d\'une Exoplanète Potentiellement Habitable', 'Les astronomes font une découverte excitante en identifiant une exoplanète dans la \"zone habitable\", suscitant des spéculations sur la possibilité de vie extraterrestre.', '2023-12-31', 'C', 'saad.elouliky@etudiant.univ-brest.fr'),
(5, 1209, 'Artisanat Local à l\'Honneur : Exposition d\'Artisanat Traditionnel :', 'Une exposition met en vedette des artisans locaux et leur savoir-faire traditionnel, offrant une vitrine pour la préservation des métiers artisanaux et la promotion du patrimoine culturel.', '2023-09-25', 'C', 'yahya.moufid@etudiant.univ-brest.fr'),
(7, 9876, 'Lancement d\'une Nouvelle Initiative de Reboisement', 'Une organisation environnementale lance une campagne de reboisement massive pour lutter contre la déforestation et restaurer les écosystèmes fragiles.', '2024-02-01', 'C', 'rabah.toubal@etudiant.univ-brest.fr'),
(8, 7890, 'Inauguration d\'un Nouveau Centre de Recherche en Intelligence Artificielle', 'Un nouveau centre de recherche de pointe ouvre ses portes, avec pour mission de repousser les frontières de l\'intelligence artificielle et de développer des solutions innovantes pour les défis technologiques actuels.', '2024-02-10', 'L', 'yahya.moufid@etudiant.univ-brest.fr'),
(9, 1122, 'Nouveau Projet de Reboisement Urbain', 'Une municipalité lance un projet ambitieux de reboisement urbain visant à accroître les espaces verts en ville et à lutter contre la pollution atmosphérique.', '2024-02-01', 'C', 'aldjia.benouarab@etudiant.univ-brest.fr'),
(10, 2233, 'Annonce de Nouvelles Mesures pour la Protection de l\'Environnement', 'Le gouvernement annonce un ensemble de mesures visant à renforcer la protection de l\'environnement, y compris des réglementations plus strictes sur les émissions industrielles et la promotion des énergies renouvelables.', '2024-01-15', 'L', 'rabah.toubal@etudiant.univ-brest.fr'),
(15, 5566, 'Annonce d\'une Nouvelle Politique de Mobilité Urbaine', 'La municipalité annonce une nouvelle politique visant à promouvoir des modes de transport alternatifs et durables pour réduire la congestion et l\'émission de gaz à effet de serre dans la ville.', '2024-02-10', 'C', 'lynda.kacemi@etudiant.univ-brest.fr'),
(18, 6677, 'Découverte Archéologique Majeure dans la Région', 'Des archéologues mettent au jour un site antique majeur dans la région, révélant des artefacts et des structures qui pourraient fournir de nouvelles informations sur l\'histoire de la civilisation locale.', '2024-02-15', 'L', 'saad.elouliky@etudiant.univ-brest.fr'),
(19, 7788, 'Lancement d\'une Nouvelle Série de Livres pour Enfants', 'Une maison d\'édition célèbre lance une série de livres pour enfants visant à promouvoir la lecture et l\'imagination chez les jeunes lecteurs.', '2024-02-20', 'C', 'hakim-mohamed-arab.aithamou@etudiant.univ-brest.fr'),
(20, 8899, 'Dévoilement d\'une Œuvre d\'Art Monumentale dans le Centre-Ville', 'Un artiste renommé dévoile une nouvelle œuvre d\'art monumentale dans le centre-ville, suscitant l\'admiration et le débat parmi les habitants.', '2024-02-25', 'L', 'yahya.moufid@etudiant.univ-brest.fr');

-- --------------------------------------------------------

--
-- Structure de la table `t_association_asc`
--

CREATE TABLE `t_association_asc` (
  `fch_numero` int(11) NOT NULL,
  `hln_numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_association_asc`
--

INSERT INTO `t_association_asc` (`fch_numero`, `hln_numero`) VALUES
(113, 38),
(113, 39),
(114, 40),
(114, 41),
(115, 42),
(115, 43),
(116, 44),
(116, 45),
(117, 46),
(117, 47),
(118, 48),
(118, 49),
(119, 50),
(119, 51),
(120, 52),
(120, 53),
(121, 54),
(121, 55),
(122, 56),
(122, 57),
(123, 58),
(123, 59),
(124, 60),
(124, 61),
(125, 62),
(125, 63),
(126, 64),
(126, 65),
(127, 66),
(127, 67);

-- --------------------------------------------------------

--
-- Structure de la table `t_compte_utilisateur_cpt`
--

CREATE TABLE `t_compte_utilisateur_cpt` (
  `cpt_pseudo` varchar(300) NOT NULL,
  `cpt_mot_de_passe` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_compte_utilisateur_cpt`
--

INSERT INTO `t_compte_utilisateur_cpt` (`cpt_pseudo`, `cpt_mot_de_passe`) VALUES
('aldjia.benouarab@etudiant.univ-brest.fr', '31d01d04d931670af29f94eeaa0a40ec'),
('belkamel133@gmail.com', '25f9e794323b453885f5181f1b624d0b'),
('demmouchebessaou510@gmail.com', 'fb1325f0cc184d17e81ebb197f8c889d'),
('hakim-mohamed-arab.aithamou@etudiant.univ-brest.fr', '8712264ee9b1eb98a56cb6de5c3bdb17'),
('lynda.kacemi@etudiant.univ-brest.fr', '46cf559aa607c10f86e8268059069c32'),
('rabah.toubal@etudiant.univ-brest.fr', '5dafbdf9e28a05c883fd8d191b03ffde'),
('raz@gmail.com', '818f9c45cfa30eeff277ef38bcbe9910'),
('saad.elouliky@etudiant.univ-brest.fr', 'f1feb43647994f63f4f4eb25468c9468'),
('valerie.marc@univ-brest.fr', 'd1c7dd460b0ab4887399c1ae45f6c6b1'),
('yahya.moufid@etudiant.univ-brest.fr', 'cd1f4633c64f4fe42420659a2c84135e');

-- --------------------------------------------------------

--
-- Structure de la table `t_fiche_fch`
--

CREATE TABLE `t_fiche_fch` (
  `fch_numero` int(11) NOT NULL,
  `fch_label` varchar(100) DEFAULT NULL,
  `fch_contenu` varchar(300) DEFAULT NULL,
  `fch_fichier_image` varchar(500) DEFAULT NULL,
  `fch_code` char(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `fch_etat` char(1) DEFAULT NULL,
  `suj_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_fiche_fch`
--

INSERT INTO `t_fiche_fch` (`fch_numero`, `fch_label`, `fch_contenu`, `fch_fichier_image`, `fch_code`, `fch_etat`, `suj_id`) VALUES
(113, 'Tuning moteur', 'Explorez les différentes techniques de tuning de moteur pour augmenter la puissance et les performances de votre voiture.', 'tuning moteur.png', 'THUKG83LFO0P', 'L', 24),
(114, 'Réglage des suspensions', 'Apprenez l\'importance du réglage des suspensions dans la performance et le confort de conduite.', 'Réglage des suspensions.png', 'FCH006000002', 'L', 24),
(115, 'performance de freinage', 'Apprenez l\'importance des systèmes de freinage performance pour améliorer la sécurité et les performances de votre voiture.', 'Systèmes de freinage performance.png', 'FCH015000011', 'C', 24),
(116, 'Réglage de la transmission', 'Apprenez comment un réglage de la transmission peut améliorer les performances de votre voiture.', 'Réglage de la transmission.png', 'FCH021000015', 'L', 24),
(117, 'Refroidissement améliorés', 'Découvrez l\'importance des systèmes de refroidissement améliorés pour maintenir les performances de votre voiture.', 'Systèmes de refroidissement améliorés.png', 'FCH022000016', 'L', 24),
(118, 'Covering de voitures', 'Apprenez tout sur le covering de voitures, des tendances de design aux matériaux utilisés.', 'Covering de voitures.png', 'FCH003DFGHJ9', 'L', 25),
(119, 'Customisation extérieure', 'Explorez les possibilités de customisation extérieure pour donner à votre voiture un look unique.', 'Customisation extérieure.png', 'FCH008000002', 'C', 25),
(120, 'Accessoires extérieurs', 'Découvrez une sélection d\'accessoires extérieurs pour personnaliser l\'apparence de votre voiture.', 'Accessoires extérieurs.png', 'FCH016000012', 'C', 25),
(121, 'Design de jantes', 'Explorez les différents styles et matériaux de jantes pour personnaliser l\'apparence de votre voiture.', 'Design de jantes.png', 'FCH013000009', 'L', 25),
(122, 'Customisation intérieure', 'Découvrez comment la customisation intérieure peut transformer l\'habitacle de votre voiture.', 'Customisation intérieure.png', 'FCH009000003', 'L', 25),
(123, 'Personnalisation audio', 'Découvrez comment personnaliser le système audio de votre voiture pour une expérience sonore ultime.', 'Personnalisation audio.png', '4RHJKFSZ2467', 'C', 26),
(124, 'Sonorisation 3D', 'Découvrez une expérience sonore immersive avec la sonorisation 3D pour votre voiture.', 'Sonorisation 3D.png', 'FCH023000017', 'C', 26),
(125, 'Baffles JBL', 'Optez pour des baffles JBL pour une qualité audio exceptionnelle dans votre voiture.', 'Baffles JBL.png', 'FCH024000018', 'L', 26),
(126, 'Kaisson de basses', 'Ajoutez des kaisson de basses pour des basses profondes et percutantes dans votre système audio.', 'Kaisson de basses.png', 'FCH025000019', 'L', 26),
(127, 'Câblage de qualité', 'Assurez-vous d\'un câblage de qualité pour une transmission audio sans perturbations.', 'Câblage de qualité.png', 'FCH026000020', 'C', 26);

-- --------------------------------------------------------

--
-- Structure de la table `t_hyperlien_hln`
--

CREATE TABLE `t_hyperlien_hln` (
  `hln_numero` int(11) NOT NULL,
  `hln_nom` varchar(100) DEFAULT NULL,
  `hln_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_hyperlien_hln`
--

INSERT INTO `t_hyperlien_hln` (`hln_numero`, `hln_nom`, `hln_url`) VALUES
(38, 'Br performance', 'https://www.br-performance.fr/brp-paris/reprogrammation/1-voitures/'),
(39, 'Magazine auto', 'https://www.piecesauto-pro.fr/magazine/tuning-de-moteur-1864'),
(40, 'Speedway', 'https://www.speedway.fr/pages/10-blog/33-conseil-tuto/497-regler-suspension-moto.html'),
(41, 'Acide Moto', 'https://acidmoto.ch/site/comment-bien-regler-ses-suspensions-guide-pour-comprendre-avant-de-toucher/'),
(42, 'Ultra perfromance', 'https://www.ultraperformance.fr/comment-ameliorer-le-freinage-de-sa-voiture#:~:text=Les%20disques%20de%20frein%20performance,meilleure%20dissipation%20de%20la%20chaleur.'),
(43, 'Swap land', 'https://www.swapland.fr/11-freinage'),
(44, 'Stellantis', 'https://www.stellantisandyou.com/fr/blog/entretenir-sa-voiture/transmission-de-voiture-tous-les-types-leur-fonctionnement-et-leur-entretien-342'),
(45, 'JMJ auto', 'https://www.jmj-automobiles.com/apres-vente/nos-conseils-dexperts/fonctionnement-du-systeme-de-transmission'),
(46, 'Green power', 'https://greenpower.equipment/fr/articles/presentation-du-systeme-de-refroidissement-ameliore-pour-le-charbon-de-bois-ameliorer-lefficacite-grace-a-la-solution-innovante-a-base-deau-de-greenpower/#:~:text=Le%20syst%C3%A8me%20de%20refroidissement%20am%C3%A9lior%C3%A9,le%20syst%C3%A8me%20doit%20%C3%AAtre%20d%C3%A9tartr%C3%A9e%20!'),
(47, 'Meta cooling technologies', 'https://www.mitacoolingtechnologies.com/fr/conception/amelioration-du-systeme/'),
(48, 'Variance auto', 'https://www.variance-auto.com/pack/film-covering'),
(49, 'Fleasting', 'https://fleasting.com/12-film-covering'),
(50, 'Houzz', 'https://www.houzz.fr/ideabooks/personnaliser-l-exterieur'),
(51, 'Av car', 'https://avcar.eu/fr/98-personnalisation-exterieure'),
(52, 'Accessoires cupa', 'https://www.accessoires-seat.fr/379-personnalisation-exterieure'),
(53, 'Accessoires skoda', 'https://www.accessoires-skoda.fr/85-personnalisation-exterieure'),
(54, 'Jantes design', 'https://www.jantes-design.fr/fr/'),
(55, 'Luxury wheels', 'https://www.vog-art.com/fr/33-luxury-wheels'),
(56, 'Comptoir de Tuning', 'https://www.comptoirdutuning.fr/categorie_interieur.php'),
(57, 'MTK', 'https://www.mtk-tuning.com/interieur-951/'),
(58, 'Car audio racing', 'https://www.caraudioracing.com/personnalisation/'),
(59, 'Car audio 83', 'https://caraudio83.com/'),
(60, 'La tribune auto', 'https://www.latribuneauto.com/reportages/technologie/11054-un-systeme-audio-3d-immersif-sans-enceintes-visibles'),
(61, 'Les numériques', 'https://www.lesnumeriques.com/voiture/apple-ouvre-l-acces-a-son-audio-spatial-sur-certains-vehicules-mercedes-n194057.html'),
(62, 'Enceintes JBL', 'https://ca.jbl.com/fr/car-speakers/'),
(63, 'Amazon JBL', 'https://www.amazon.fr/parleur-voiture/s?k=haut+parleur+voiture&rh=p_89%3AJBL'),
(64, 'Kaisson basse amazon', 'https://www.amazon.fr/Caisson-Voiture-aliment%C3%A9-Haut-Parleur-amplifi%C3%A9/dp/B0CP9LBD4G'),
(65, 'Kaisson de basse C discount', 'https://www.cdiscount.com/auto/r-caisson+de+basse+focal.html#_his_'),
(66, 'Thoman cablage', 'https://www.thomann.de/blog/fr/quest-ce-qui-fait-dun-cable-un-bon-cable/'),
(67, 'Musique Matos', 'https://www.musicmatos.com/167-cables-sono'),
(3632, 'meddous', 'meddou.com'),
(47473, 'rabah essai ', 'rabah.com'),
(737378, 'zing zang essai', 'rabah.com');

-- --------------------------------------------------------

--
-- Structure de la table `t_profil_utilisateur_prf`
--

CREATE TABLE `t_profil_utilisateur_prf` (
  `prf_nom` varchar(80) DEFAULT NULL,
  `prf_prenom` varchar(80) DEFAULT NULL,
  `prf_validite` char(1) DEFAULT NULL,
  `prf_statut` char(1) DEFAULT NULL,
  `prf_date_creation` date DEFAULT NULL,
  `cpt_pseudo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_profil_utilisateur_prf`
--

INSERT INTO `t_profil_utilisateur_prf` (`prf_nom`, `prf_prenom`, `prf_validite`, `prf_statut`, `prf_date_creation`, `cpt_pseudo`) VALUES
('BENOUARAB', 'Aldjia', 'A', 'M', '2024-02-03', 'aldjia.benouarab@etudiant.univ-brest.fr'),
('BELKHIR', 'KAMEL', 'A', 'M', '2024-04-15', 'belkamel133@gmail.com'),
('demmouche', 'bessaou', 'D', 'M', '2024-04-15', 'demmouchebessaou510@gmail.com'),
('AITHAMOU', 'Hakim', 'D', 'M', '2024-02-03', 'hakim-mohamed-arab.aithamou@etudiant.univ-brest.fr'),
('KACEMI', 'Lynda', 'A', 'M', '2024-02-03', 'lynda.kacemi@etudiant.univ-brest.fr'),
('TOUBAL', 'Rabah', 'A', 'G', '2024-03-25', 'rabah.toubal@etudiant.univ-brest.fr'),
('Rabah', 'Le Boss', 'A', 'G', '2024-04-08', 'raz@gmail.com'),
('ELOULIKY', 'Saad', 'A', 'M', '2024-02-03', 'saad.elouliky@etudiant.univ-brest.fr'),
('MARC', 'Valéire', 'A', 'G', '2024-02-03', 'valerie.marc@univ-brest.fr'),
('MOUFID', 'Yahya', 'X', 'M', '2024-02-03', 'yahya.moufid@etudiant.univ-brest.fr');

-- --------------------------------------------------------

--
-- Structure de la table `t_sujet_suj`
--

CREATE TABLE `t_sujet_suj` (
  `suj_id` int(11) NOT NULL,
  `suj_numero` int(11) DEFAULT NULL,
  `suj_intitule` varchar(100) DEFAULT NULL,
  `suj_date_ajout` date DEFAULT NULL,
  `cpt_pseudo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_sujet_suj`
--

INSERT INTO `t_sujet_suj` (`suj_id`, `suj_numero`, `suj_intitule`, `suj_date_ajout`, `cpt_pseudo`) VALUES
(24, 8098, 'Tuning automobile', '2024-02-01', 'rabah.toubal@etudiant.univ-brest.fr'),
(25, 9834, 'Customisation de véhicules', '2024-02-02', 'saad.elouliky@etudiant.univ-brest.fr'),
(26, 2322, 'Personnalisation audio', '2024-02-03', 'hakim-mohamed-arab.aithamou@etudiant.univ-brest.fr'),
(28, 58575, 'Préparation faite par Notre chère fondateur Rabah', '2024-03-28', 'saad.elouliky@etudiant.univ-brest.fr'),
(34, 9392, 'Camille Ould Ali', '2024-04-23', 'rabah.toubal@etudiant.univ-brest.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_actualite_act`
--
ALTER TABLE `t_actualite_act`
  ADD PRIMARY KEY (`act_id`),
  ADD KEY `cpt_pseudo` (`cpt_pseudo`);

--
-- Index pour la table `t_association_asc`
--
ALTER TABLE `t_association_asc`
  ADD PRIMARY KEY (`fch_numero`,`hln_numero`),
  ADD KEY `hln_numero` (`hln_numero`);

--
-- Index pour la table `t_compte_utilisateur_cpt`
--
ALTER TABLE `t_compte_utilisateur_cpt`
  ADD PRIMARY KEY (`cpt_pseudo`);

--
-- Index pour la table `t_fiche_fch`
--
ALTER TABLE `t_fiche_fch`
  ADD PRIMARY KEY (`fch_numero`),
  ADD KEY `suj_id` (`suj_id`);

--
-- Index pour la table `t_hyperlien_hln`
--
ALTER TABLE `t_hyperlien_hln`
  ADD PRIMARY KEY (`hln_numero`);

--
-- Index pour la table `t_profil_utilisateur_prf`
--
ALTER TABLE `t_profil_utilisateur_prf`
  ADD PRIMARY KEY (`cpt_pseudo`);

--
-- Index pour la table `t_sujet_suj`
--
ALTER TABLE `t_sujet_suj`
  ADD PRIMARY KEY (`suj_id`),
  ADD KEY `fk_t_sujet_suj_t_compte_cpt` (`cpt_pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_actualite_act`
--
ALTER TABLE `t_actualite_act`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `t_fiche_fch`
--
ALTER TABLE `t_fiche_fch`
  MODIFY `fch_numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47475;

--
-- AUTO_INCREMENT pour la table `t_hyperlien_hln`
--
ALTER TABLE `t_hyperlien_hln`
  MODIFY `hln_numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=737380;

--
-- AUTO_INCREMENT pour la table `t_sujet_suj`
--
ALTER TABLE `t_sujet_suj`
  MODIFY `suj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_actualite_act`
--
ALTER TABLE `t_actualite_act`
  ADD CONSTRAINT `t_actualite_act_ibfk_1` FOREIGN KEY (`cpt_pseudo`) REFERENCES `t_compte_utilisateur_cpt` (`cpt_pseudo`);

--
-- Contraintes pour la table `t_association_asc`
--
ALTER TABLE `t_association_asc`
  ADD CONSTRAINT `t_association_asc_ibfk_1` FOREIGN KEY (`fch_numero`) REFERENCES `t_fiche_fch` (`fch_numero`),
  ADD CONSTRAINT `t_association_asc_ibfk_2` FOREIGN KEY (`hln_numero`) REFERENCES `t_hyperlien_hln` (`hln_numero`);

--
-- Contraintes pour la table `t_fiche_fch`
--
ALTER TABLE `t_fiche_fch`
  ADD CONSTRAINT `t_fiche_fch_ibfk_1` FOREIGN KEY (`suj_id`) REFERENCES `t_sujet_suj` (`suj_id`);

--
-- Contraintes pour la table `t_profil_utilisateur_prf`
--
ALTER TABLE `t_profil_utilisateur_prf`
  ADD CONSTRAINT `fk_t_profil_cpt` FOREIGN KEY (`cpt_pseudo`) REFERENCES `t_compte_utilisateur_cpt` (`cpt_pseudo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `t_profil_utilisateur_prf_ibfk_1` FOREIGN KEY (`cpt_pseudo`) REFERENCES `t_compte_utilisateur_cpt` (`cpt_pseudo`);

--
-- Contraintes pour la table `t_sujet_suj`
--
ALTER TABLE `t_sujet_suj`
  ADD CONSTRAINT `fk_t_sujet_suj_t_compte_cpt` FOREIGN KEY (`cpt_pseudo`) REFERENCES `t_compte_utilisateur_cpt` (`cpt_pseudo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
