-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2020 at 10:01 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `space_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Aegis Dynamic', NULL),
(2, 'MISC', NULL),
(3, 'Anvil Aerospace', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `sub_title`, `description`, `image`) VALUES
(1, 'SpaceTech', 'Allez au delà des étoiles', 'SpaceTech est une entreprise française du domaine de l’astronautique et du vol spatial. La société SpaceTech conçoit et commercialise des vaisseaux spatiaux. \r\n<br>\r\n<br>\r\nSpaceTech participe également à des programmes scientifiques et d’exploration spatiale.\r\n<br>\r\n<br>\r\nL’objectif de SpaceTech est d’améliorer la fiabilité de l’accès à l’espace\r\n<br>\r\n<br>\r\nLa société continue d’envoyer des navettes dans l’espace afin de découvrir de nouvelle planète ou galaxie.', 'image 1.png');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`) VALUES
(1, '890JumpCrewquarters.jpg', 6),
(2, '890JumpCockpit.jpg', 6),
(3, '890JumpBedroom.jpg', 6),
(4, '07_890_Office.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `feature` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `feature`, `price`, `image`, `category_id`) VALUES
(1, '600i', 'Le 600i est un navire de luxe polyvalent qui présente une conception de coque extrêmement détaillée qui équilibre les performances et la polyvalence dans une forme élégante et intemporelle. Le 600i est conçu avec une technologie modulaire de pointe, vous permettant de personnaliser votre navire selon vos besoins.', 'Taille : 17 m\r\nLongueur : 91.5 m\r\nVitesse : 950 m/s\r\nRôle : Tourisme de Luxe\r\nÉquipage : 3 - 5', 240000, '600i.jpg', 1),
(2, '85X', 'Le 85X est un chasseur snob qui vient avec le 890 Jump . Élégamment stylé et méticuleusement construit, le 85X est un navire extérieur polyvalent et complet pour le 890 Jump. Que ce soit en descendant à la surface de la planète ou en admirant les vues de votre système, le 85x continuera la fière tradition du 890 de faire tourner les têtes. C\'est la puissance d\'un coureur avec la fiabilité d\'un bateau de tourisme.', 'Taille : 2 m\r\nLongueur : 13 m\r\nVitesse : 1 183 m/s\r\nRôle : Tourisme de Luxe\r\nÉquipage : 1 - 2', 135000, '85X.jpg', 1),
(3, 'Carrack', 'Le Carrack est un explorateur à équipages multiples qui a plus que mérité son statut de longue date en tant que pionnier incontournable pour les services militaires et civils. Le Carrack est livré avec deux embarcations supplémentaires', 'Taille : 30 m\r\nLongueur : 126.5 m\r\nVitesse : 1 236 m/s\r\nRôle : Exploration\r\nÉquipage : 4 - 6', 660000, 'Carrack.jpg', 1),
(4, 'Constellation Phoenix', 'Le Constellation Phoenix est la variante de luxe du Constellation . Il peut être utilisé comme navire de commandement d\'organisation et dispose d\'un intérieur luxueux redessiné. Comprend une zone cachée par capteur pour votre cargaison la plus précieuse.', 'Taille : 14 m\r\nLongueur : 61 m\r\nVitesse : 910 m/s\r\nRôle : Tourisme de luxe\r\nÉquipage : 3 - 4', 500000, 'Constellation-phoenix.jpg', 1),
(5, 'Apollo Medivac', 'L\'Apollo Medivac est un hôpital ou navire «médical» construit pour Medivac (évacuation médicale) et une intervention d\'urgence rapide, ayant fourni une aide critique à l\'univers connu depuis plus de deux siècles. [1] Le navire est une variante de l\' Apollo avec des porte-missiles doubles et une meilleure armure.', 'Taille : 10 m /\r\nLongueur : 43 m /\r\nVitesse :195 m/s /\r\nRôle :Sauvetage /\r\nÉquipage :1 - 2 /', 250000, 'Apollos_medivac.jpg', 1),
(6, '890 Jump', '890 Jump est un super-yacht interstellaire conçu pour emmener les passagers en croisière spatiale luxueuse sur différentes planètes et systèmes. Indépendamment du transport, le saut 890 est également employé pour le commerce de haute sécurité au leadership d\'organisation pour commander et contrôler. Sa présence même signifie puissance: utilisé comme un transport de personnel, le 890 Jump est la possession prisée des PDG, des politiciens, des holo stars et autres.', 'Taille : 40 m\r\nLongueur : 210 m\r\nVitesse : 900 m/s\r\nRôle : Tourisme de luxe\r\nÉquipage : 3 - 18', 1000000, '890_Jump.jpg', 1),
(7, 'Prowler', 'Prowler est une version modernisée du tristement célèbre véhicule blindé de transport de troupes Tevarin . Il porte le nom de la désignation militaire UPE . Les astro-ingénieurs d\'Esperia ont eu un accès sans restriction pour étudier les versions originales du navire récemment découvert dans le système Kabal afin d\'aider à reconstruire méticuleusement le véhicule. Maintenant, le Prowler est la fusion parfaite de deux cultures:', 'Taille : 15 m\r\nLongueur : 34 m\r\nVitesse : 1 116 m/s\r\nRôle : Cannonière\r\nÉquipage : 1 - 5', 350000, 'Prowler.jpg', 1),
(8, 'Corsaire', 'Corsair est un explorateur multi-équipage qui abandonne les défenses pour se concentrer sur la polyvalence et les armes défensives. Avec des ailes asymétriques et convertibles et une grande soute, le Corsair s\'adapte avec élégance à une atmosphère inconnue, à des situations de combat et à des zones d\'atterrissage chaudes. Jusqu\'à quatre membres d\'équipage peuvent être logés dans les quartiers fonctionnels.', 'Taille : 31 m\r\nLongueur : 55 m\r\nVitesse : 1 100 m/s\r\nRôle : Exploration\r\nÉquipage : 1 - 4', 800000, 'Drake_corsair.jpg', 1),
(9, 'A2 Hercule', 'Le A2 Hercules ou Hercules Starlifter est un canon lourd militaire et un bombardier. Le hélicoptère de combat A2 a été utilisé avec un effet dévastateur dans les assauts aéroportés, les opérations de recherche et de sauvetage et les initiatives d\'atterrissage. Avec plus du double de la puissance de feu du M2 et une soute à bombes personnalisée capable de fournir une charge utile stupéfiante, l\'A2 s\'adresse à tous ceux qui transportent d\'énormes quantités de marchandises dans un ciel potentiellement hostile.', 'Taille : 23 m\r\nLongueur : 94 m\r\nVitesse : 1 100 m/s\r\nRôle : Bombardier\r\nÉquipage : 1 - 8', 300000, 'A2_Hercule.jpg', 1),
(10, 'Vanhuard Harbinger', 'Le Vanguard Harbringer est le chasseur-bombardier standard de l\'UEE , convertissant la nacelle d\'évacuation du modèle Warden standard en une puissante soute à bombes. La portée étendue de l\'Avant-garde et le profil relativement petit signifient qu\'il peut aller là où les avions basés sur des porte-avions ou des bombardiers stratégiques plus grands ne le font pas.', 'Taille : 9.5 m\r\nLongueur : 38 m\r\nVitesse : 200 m/s\r\nRôle : Bombardier\r\nÉquipage : 1 - 2', 150000, 'Vanguard_Harbinger.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `address`, `password`, `is_admin`) VALUES
(8, 'Clément', 'Chaillou', 'admin@gmail.com', NULL, '63a9f0ea7bb98050796b649e85481845', 1),
(9, 'alaric', 'dede', 'clemidf.91@gmail.com', NULL, '63a9f0ea7bb98050796b649e85481845', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id` (`product_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id` (`category_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `product_images_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
