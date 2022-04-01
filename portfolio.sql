-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 31 mars 2022 à 22:30
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `nom`, `couleur`, `niveau`, `type`, `created_at`, `updated_at`) VALUES
(2, 'Communication', 'red', 80, 'sociale', '2022-03-21 09:48:28', '2022-03-21 10:10:00'),
(3, 'Adaptation', 'yellow', 95, 'sociale', '2022-03-21 09:48:56', '2022-03-21 10:09:35'),
(4, 'Sens Critique', 'blue', 90, 'sociale', '2022-03-21 09:49:19', '2022-03-21 10:10:18'),
(5, 'Assiduité', 'green', 95, 'sociale', '2022-03-21 09:49:38', '2022-03-21 09:49:38'),
(7, 'Html CSS JS', 'green', 96, 'tech', '2022-03-21 10:04:06', '2022-03-21 10:04:06'),
(8, 'Dart', 'blue', 94, 'tech', '2022-03-21 10:04:27', '2022-03-21 10:04:27'),
(9, 'JQuery', 'yellow', 85, 'tech', '2022-03-21 10:04:46', '2022-03-21 10:08:28'),
(10, 'Réact Js', 'blue', 87, 'tech', '2022-03-21 10:05:11', '2022-03-21 10:05:40'),
(11, 'Vue Js', 'green', 83, 'tech', '2022-03-21 10:05:31', '2022-03-21 10:05:31'),
(12, 'Flutter', 'blue', 96, 'tech', '2022-03-21 10:06:00', '2022-03-21 10:02:41'),
(13, 'Laravel', 'red', 95, 'tech', '2022-03-21 10:06:15', '2022-03-21 10:06:15');

-- --------------------------------------------------------

--
-- Structure de la table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ecole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `couleur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `educations`
--

INSERT INTO `educations` (`id`, `ecole`, `annee`, `formation`, `couleur`, `created_at`, `updated_at`) VALUES
(1, 'Ecole National d\'Economie Appliquée et de Management ( ENEAM | UAC )', '2018 - 2022', 'Informatique de Gestion - Analyse Informatique et Programmation ( Licence )', 'blue', '2022-03-21 10:27:57', '2022-03-21 10:27:57'),
(2, 'Cs Bakhita', '2017', 'Bac D', 'green', '2022-03-21 10:28:38', '2022-03-21 10:28:38'),
(3, 'Cs Vigninou', '2014', 'BEPC', 'yellow', '2022-03-21 10:29:14', '2022-03-21 10:34:18'),
(4, 'Cs La Fontaine', '2008', 'CEP', 'red', '2022-03-21 10:29:49', '2022-03-21 10:29:49');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `annee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `structure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `couleur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `poste`, `annee`, `structure`, `icon`, `couleur`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Développeur web fullstack', '04/01/2021 - 31/12/2021', 'Ma-Info SARL', 'city-alt', 'blue', 'En tant que responsable de la cellule des développeurs, j\'avais pour fonction de faire l\'étude, la conception théorique puis la réalisation des différents projets confiés à la cellule.', '2022-03-21 10:12:44', '2022-03-21 10:12:44'),
(2, 'Développeur web fullstack ( Stage )', '07/08/2020 - 27/11/2020', 'Ma-Info SARL', 'case', 'green', 'Stage en développement web et mobile', '2022-03-21 10:13:24', '2022-03-21 10:13:24'),
(3, 'Développement informatique ( Stage )', '07/08/2020 - 27/11/2020', 'ROMAS SARL', 'case', 'red', 'Stage en développement web et desktop', '2022-03-21 10:25:47', '2022-03-21 10:26:03');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `path`, `projet_id`, `created_at`, `updated_at`) VALUES
(13, 'projets/Mesures Covid finances/tU9hW8J5LfuDLx4qtM5OPQsax8Y1TaqqjwtiWhc6.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:11'),
(14, 'projets/Mesures Covid finances/jqu5Qi92bPIyshu1EAjpHzZpK7GugLfiVenqbM9K.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:11'),
(15, 'projets/Mesures Covid finances/hukeSsBCvZAe8Y6iF7KDo5ElaiCJ3f75nsKZevlE.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:11'),
(16, 'projets/Mesures Covid finances/RtF8Vpll8tcotUKvkVR4NHbOjv3jzyFk01nVYdNC.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:11'),
(17, 'projets/Mesures Covid finances/iz0kDekEc2ICFmkMv6kEg8wT5JY5wNnWcxPTVBoL.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:11'),
(18, 'projets/Mesures Covid finances/fk1rko9MjlW65Bob90j7m4urcRJuWzR6iGKWMelC.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:12'),
(19, 'projets/Mesures Covid finances/aMGCtBmMVfWGGQxE7n6xbxhq9cNZJwj6jVXTDXTf.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:12'),
(20, 'projets/Mesures Covid finances/FxjZrdHL6uMc4rhKqJkoI9DB2sYYnfs54npeHzLp.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:12'),
(21, 'projets/Mesures Covid finances/RU7qWpcQUSYebAfBuL36GehvAuLdmKYa3GW3xsF4.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:12'),
(22, 'projets/Mesures Covid finances/RAAkvXG5DJoyQ20lpPZ35aArAubEzLyGi3y1FrCD.png', 11, '2022-03-22 12:16:37', '2022-03-31 17:52:12'),
(33, 'projets/Site vitrine pour | Dyjesck SARL - BTP/VVB6uiszKkazNNp8YMLSzTLDwRpD0IDn897EsQse.png', 12, '2022-03-22 13:23:11', '2022-03-31 17:52:12'),
(34, 'projets/Site vitrine pour | Dyjesck SARL - BTP/tzqlb0lqF1jXyCZcIfwqzSnZZ2QTYwG4mDZMITV6.png', 12, '2022-03-22 13:23:11', '2022-03-31 17:52:12'),
(35, 'projets/Site vitrine pour | Dyjesck SARL - BTP/Vc42K2z1VrJUbrJ6kjSFSG6AC5ZAMjTeEUfWMktd.png', 12, '2022-03-22 13:23:11', '2022-03-31 17:52:12'),
(36, 'projets/Site vitrine pour | Dyjesck SARL - BTP/m4ptVRfB06ATA3FU2qhu747t07YNNtAwbxrMhjWU.png', 12, '2022-03-22 13:23:11', '2022-03-31 17:52:12'),
(37, 'projets/Site vitrine pour | Dyjesck SARL - BTP/AE9Su9wVOmCCtvzQfVPjcArGOdFchHxqo30Bz9gS.png', 12, '2022-03-22 13:23:11', '2022-03-31 17:52:12'),
(38, 'projets/Site vitrine pour | Dyjesck SARL - BTP/i3K6eTQ7UBKjp7phFy8prWCbopP9XLLV4vt40DJc.png', 12, '2022-03-22 13:23:11', '2022-03-31 17:52:12'),
(39, 'projets/Site vitrine pour | Dyjesck SARL - BTP/WvWKc3jMGzlP1PKLvqV9OOUjG8R2VUscvGV6pzE9.png', 12, '2022-03-22 13:23:11', '2022-03-31 17:52:12'),
(40, 'projets/Site vitrine pour | Dyjesck SARL - BTP/uaZML5YL6pbyTg1fsBPUkWANa79NsHqwpMFCTdeW.png', 12, '2022-03-22 13:23:12', '2022-03-31 17:52:13'),
(41, 'projets/Site vitrine pour | Dyjesck SARL - BTP/WEjDr0JaoDurlSwKj0j376RMYEnPgkEquHpnIAAp.png', 12, '2022-03-22 13:23:12', '2022-03-31 17:52:13'),
(42, 'projets/Site vitrine pour | Dyjesck SARL - BTP/ne6xAbJoQdXzMI5WtnkXkOS5qNAX7mCpvA5zwdlM.png', 12, '2022-03-22 13:23:12', '2022-03-31 17:52:13'),
(43, 'projets/Cogiciel | Application de gestion de ventes/vXHAbjOOo20JXlDLxcfzgpAA3LaNBxuT5XWPw2HT.png', 13, '2022-03-22 13:43:39', '2022-03-31 17:52:13'),
(44, 'projets/Cogiciel | Application de gestion de ventes/9h3Ggg7CNWOvF1o0Sokv4ZHlA8FWFvN8CoYWtEK6.png', 13, '2022-03-22 13:43:39', '2022-03-31 17:52:13'),
(45, 'projets/Cogiciel | Application de gestion de ventes/k96k9mOBnTVKNN74nDxHmPUum92mjfS6i0JvdZhj.png', 13, '2022-03-22 13:43:39', '2022-03-31 17:52:13'),
(46, 'projets/Cogiciel | Application de gestion de ventes/A3YeEFSAZFt5Yp8W3Oi2pXYjgQ3oc0G0RjhqjZE3.png', 13, '2022-03-22 13:43:39', '2022-03-31 17:52:13'),
(47, 'projets/Cogiciel | Application de gestion de ventes/7GJTgDgn6pon17qh17ZXNvu19OEKpQ6ORK0HXRJc.png', 13, '2022-03-22 13:43:39', '2022-03-31 17:52:13'),
(48, 'projets/Cogiciel | Application de gestion de ventes/DRd13ASx2MA0yRimxbITkQJrmtIvgjncumZFyCVs.png', 13, '2022-03-22 13:43:39', '2022-03-31 17:52:13'),
(49, 'projets/Manga Quiz/5yMxhx4cNQBvxA4utVQrCkNPYFUbMWwsNYRbhLtt.png', 14, '2022-03-24 15:02:29', '2022-03-31 17:52:13'),
(50, 'projets/Manga Quiz/nxSWn4HIMg4VDQj2ko8OQdNQFlPT3GWboAlqnRK2.png', 14, '2022-03-24 15:02:29', '2022-03-31 17:52:13'),
(51, 'projets/Manga Quiz/QN3VXE6jUDcZvnVGlzOOyPsO1z9g4VcGTGtEIyo0.png', 14, '2022-03-24 15:02:29', '2022-03-31 17:52:13'),
(52, 'projets/Manga Quiz/tezJDouEc2knpWuW9464FSxpgFjtilXH3SslkJVv.png', 14, '2022-03-24 15:02:29', '2022-03-31 17:52:13'),
(53, 'projets/Manga Quiz/ohqrIgxjrYteRLyLG1TaexRE0A6BCZbWvjX845VF.png', 14, '2022-03-24 15:02:29', '2022-03-31 17:52:13'),
(54, 'projets/Manga Quiz/xiB9YhcDYtZlDig0kH7oGocHEul6qcWyOhIdcQUU.png', 14, '2022-03-24 15:02:29', '2022-03-31 17:52:13'),
(55, 'projets/SGIME - Mobile/z5onZm0lrfREVzXOsXC74tktl7mBbZ0wmwk6dkuR.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:13'),
(56, 'projets/SGIME - Mobile/YW5eqxxYNccVYo1wiGFRtxD1OfJ1lFgST5hC4AOQ.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:13'),
(57, 'projets/SGIME - Mobile/9Un64I0nMe3nMMTAsUdwiny4pd8NESWarO046tX8.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:13'),
(58, 'projets/SGIME - Mobile/0gMLbzCqUQA1IlJY3PW3yZZmtHgcwKxfpt26xbCP.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:14'),
(59, 'projets/SGIME - Mobile/jE77PhvQsA8bYVemq25ayKUtWeqA29lCgH4ptG1m.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:14'),
(60, 'projets/SGIME - Mobile/koKlCHvW21gIoJKhDyMQOMvjEmgJguWHUko65Y9E.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:14'),
(61, 'projets/SGIME - Mobile/nMwGALJY1g9Px3Ypj0rqCO7cSkxMMIwIc7YQ9OKa.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:14'),
(62, 'projets/SGIME - Mobile/Tbf0dJVWgtCogcj4tgfz4TIwgtXjDX9tdD1qPxXI.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:14'),
(63, 'projets/SGIME - Mobile/2KiX7YnXIdk9oyZdAVPGxhFSgzufku9kqkFQfFJ5.png', 15, '2022-03-24 15:19:23', '2022-03-31 17:52:14'),
(64, 'projets/Pp_1xbet/61Om7cc3cHBIbGnjMnAKfKmgnlZRwPCT1guBO0HC.png', 16, '2022-03-24 15:22:11', '2022-03-31 17:52:14'),
(65, 'projets/Pp_1xbet/MaOPZRBn7PgVIBR24zvgPFudq0BZBAheCt5qW0y8.png', 16, '2022-03-24 15:22:11', '2022-03-31 17:52:14'),
(66, 'projets/Pp_1xbet/2dn8PBbuIsNYHxOhBKmk11QRqfFhxZmruOdYhyWr.png', 16, '2022-03-24 15:22:11', '2022-03-31 17:52:14'),
(67, 'projets/Pp_1xbet/hQMt9dlGaVXJXxJD2NHGDaSGkNabVKETA2qwZlvj.png', 16, '2022-03-24 15:22:11', '2022-03-31 17:52:14'),
(68, 'projets/Pp_1xbet/Eh6OopBDeLNEcxY2khKAXg9NaJFKDUn33mlGMsms.png', 16, '2022-03-24 15:22:11', '2022-03-31 17:52:14'),
(69, 'projets/SGIME - Web/uNh5pUK3915Ww35nzBgoh6y2JHE5vzhd99hAnWbO.png', 17, '2022-03-25 07:20:41', '2022-03-31 17:52:14'),
(70, 'projets/SGIME - Web/uNhx4YDXpxCyHXkRLjJVGDUYOsE5cRxE0jO05Ks9.png', 17, '2022-03-25 07:20:42', '2022-03-31 17:52:14'),
(71, 'projets/SGIME - Web/owJamMTgObWuwIaqbgsjAADr6TR4qJaqyqx1FWBG.png', 17, '2022-03-25 07:20:42', '2022-03-31 17:52:14'),
(72, 'projets/SGIME - Web/nfTjMgc27ehL1QbJDzPZXmYaX50X8WRc84gHs0Iz.png', 17, '2022-03-25 07:20:42', '2022-03-31 17:52:14'),
(73, 'projets/SGIME - Web/pBkWEFlRIJes1Q9d0ub26XzyRfVu6kBOi3xSUUqD.png', 17, '2022-03-25 07:20:42', '2022-03-31 17:52:14'),
(74, 'projets/SGIME - Web/vmkYpRzbgOThI9M7bBMi18ITXKe0zMlEzhCnSI2h.png', 17, '2022-03-25 07:20:42', '2022-03-31 17:52:14'),
(75, 'projets/SGIME - Web/xXGHavoG5wvVWYyEyhoPNGjyJBnvq7BEAy5F54jV.png', 17, '2022-03-25 07:20:42', '2022-03-31 17:52:14'),
(76, 'projets/aaaaaa/mysql.jpeg', 18, '2022-03-31 18:03:49', '2022-03-31 18:03:49'),
(77, 'projets/aaaaaa/laravel.png', 18, '2022-03-31 18:03:49', '2022-03-31 18:03:49'),
(78, 'projets/aaaaaa/html.jpeg', 18, '2022-03-31 18:03:49', '2022-03-31 18:03:49'),
(79, 'projets/aaaaaa/flutter.png', 18, '2022-03-31 18:03:49', '2022-03-31 18:03:49'),
(80, 'projets/aaaaaa/firebase.png', 18, '2022-03-31 18:03:49', '2022-03-31 18:03:49'),
(81, 'projets/aaaaaa/laravel.jpeg', 18, '2022-03-31 18:03:49', '2022-03-31 18:03:49'),
(82, 'projets/aaaaaa/api.jpeg', 18, '2022-03-31 18:03:50', '2022-03-31 18:03:50'),
(83, 'projets/aaaaaa/php.jpeg', 18, '2022-03-31 18:03:50', '2022-03-31 18:03:50'),
(84, 'projets/aaaaaa/jquery.png', 18, '2022-03-31 18:03:50', '2022-03-31 18:03:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_18_115116_create_projets_table', 1),
(6, '2022_03_18_115435_create_images_table', 1),
(7, '2022_03_18_115657_create_competences_table', 1),
(8, '2022_03_18_121103_create_experiences_table', 1),
(9, '2022_03_18_200914_create_educations_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `platforme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `nom`, `platforme`, `client`, `type`, `description`, `date`, `created_at`, `updated_at`, `cover`, `lien`) VALUES
(11, 'Mesures Covid finances', 'Laravel', 'Gouvernement  béninois | Soutraté avec Deloitte Bénin\'', 'web', '<p><samp>&nbsp;&nbsp; Dans la perspective d&#39;aider la population dans cette &eacute;poque o&ugrave; le Covid fait des ravages, le gouvernemnt b&eacute;ninois &agrave; mis en place un plan nomm&eacute;<strong> Plan National de riposte socio-&eacute;conomique &agrave; la COVID-19 </strong>avec<strong> <a href=\"https://mesurescovid.finances.bj\">Mesures Covid finances</a></strong>, la plateforme pour accompagner ce projet.</samp></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; En effet, <a href=\"https://mesurescovid.finances.bj\">Mesures Covid finances</a> est une plateforme permettant aux chefs d&#39;entreprise ou aux repr&eacute;sentats d&#39;entreprise de s&#39;inscrir dans un premier temps, puis d&#39;enregistrer leurs diff&eacute;rents entreprises directement depuis leur interface utilisateur pour une demande de subvention. C&#39;est aussi depuis cette interface qu&#39;il peuvent faire des actions comme suivre l&#39;&eacute;volution de leur demandes ou m&ecirc;me consult&eacute;s les informations sur projet.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Au dela de l&#39;interface utilisateur, la plateforme poss&egrave;de plusieurs autres interfaces comme c&#39;elle d&#39;administration o&ugrave; plisieurs actions peuvent &ecirc;tres effectu&eacute;es afin mener le projet avec le plus d&#39;aisance possible.</p>', '2022-10-20', '2022-03-22 12:16:36', '2022-03-31 17:57:20', 'projets/Mesures Covid finances/cover/wJQGCGwvTmWeuAAEJqe9vABs4gkAKY1ukWbtolih.png', 'mesurescovid.finances.bj/'),
(12, 'Site vitrine pour | Dyjesck SARL - BTP', 'Laravel', 'Dyjesck SARL', 'web', '<p>Il s&#39;agit d&#39;un site pour pr&eacute;senter et mettre en avant les activit&eacute;s de <a href=\"http://dyjesck.com/\">Dyjesck SARL</a>, une grande entreprise de btp de la place. Au dela de l&#39;aspect de site de pr&eacute;sentation de services, cette plateforme poss&egrave;de un interface d&#39;administraion o&ugrave; il est possible de manager les diff&eacute;rentes donn&eacute;es de la plateforme.</p>', '2021-11-23', '2022-03-22 13:04:32', '2022-03-31 17:57:20', 'projets/Site vitrine pour | Dyjesck SARL - BTP/cover/SQVxC6TQZIevLd4zts17cz1lJcigvX6wEipq5tjO.png', 'dyjesck.com/'),
(13, 'Cogiciel | Gestion de ventes', 'Laravel', 'null', 'web', '<p>d</p>', NULL, '2022-03-22 13:43:39', '2022-03-31 17:57:20', 'projets/Cogiciel | Application de gestion de ventes/cover/zUzwTx6PKyLPciSrlGNhV8FSMZ4fTZK3c3jGz0l8.png', NULL),
(14, 'Manga Quiz', 'Flutter', 'Perso', 'mobile', '<p>Il s&#39;agit d&#39;une application (un jeux) de quiz sur des personnages de manga.</p>\r\n\r\n<p>Il faut choisir la bonne r&eacute;ponse &agrave; la question pos&eacute;e parmi les r&eacute;ponses propos&eacute;es. A la fin de chaque niveau, un r&eacute;capitulatif vous est pr&eacute;sent&eacute; avec une description des mangas pour lesqueles une r&eacute;ponse au moin est erron&eacute;e.</p>', NULL, '2022-03-24 15:02:29', '2022-03-31 17:57:20', 'projets/Manga Quiz/cover/KZwC0FDcN8oEtwLcFjnzVPhjONAhpHu9uocRZAEt.png', NULL),
(15, 'SGIME - Mobile', 'Flutter', 'Perso', 'mobile', '<p>SGIME (Syst&egrave;me de Gestion d&#39;Information en Milieu Estudiantin) est une application consue pour faciliter la gestion de l&#39;informaio dans cardre universitaire. Multiplateforme, la version Web permet l&#39;administration conplete de l&#39;information gr&acirc;ce &agrave; ces interfaces enseignant, chef de d&eacute;partement, service programmatio, ...</p>\r\n\r\n<p>La version mobile ici pr&eacute;sente, exclusif aux &eacute;tudiants, leur facilite l&#39;acc&egrave;s au diff&eacute;rente information dont-ils pourraient avoir besoin &agrave; travers les fonctionnalit&eacute; ci-apr&egrave;s :</p>\r\n\r\n<ul>\r\n	<li>Consult&eacute; les communiqu&eacute;s (de l&#39;administration, du responssale de classe, des ensegnants, ...)</li>\r\n	<li>Consulter une FAQ pour les &eacute;ventuelles pr&eacute;ocupations sur les proc&eacute;dures administratives</li>\r\n	<li>Consult&eacute; soncalendrier scolaire (des cours et des &eacute;valuations)</li>\r\n	<li>Consult&eacute; la biblioth&egrave;que des &eacute;preuves de sessions pass&eacute;e rang&eacute;s e fonction des mati&egrave;res</li>\r\n	<li>etc ...</li>\r\n</ul>\r\n\r\n<hr />\r\n<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\"><strong>NB : Cette aplication est disponible sous forme d&#39;abonnement annuel pour tous ceux voulant un syst&egrave;me de gestion r&eacute;volutionnaire pour la gestion de leur complexe universsitaire</strong></div>', NULL, '2022-03-24 15:19:23', '2022-03-31 17:57:20', 'projets/SGIME - Mobile/cover/zWRLoKguQUAEFslHh6BDQHR6gb6mPpdOKRbGGYZC.png', NULL),
(16, 'Pp_1xbet', 'Flutter', 'Perso', 'mobile', '<p>Il s&#39;agit ici d&#39;une application pour la gestion des recharges et retraits de compte 1xbet pour les paris sportifs.</p>', NULL, '2022-03-24 15:22:11', '2022-03-31 17:57:20', 'projets/Pp_1xbet/cover/zqeKqUdAk1lbGNXeb6uCKbbV1iXunFTKZnPCxzj9.png', NULL),
(17, 'SGIME - Web', 'Laravel', 'Perso', 'web', '<p>SGIME (Syst&egrave;me de Gestion d&#39;Information en Milieu Estudiantin) est une application consue pour faciliter la gestion de l&#39;information dans un cardre universitaire. Multiplateforme, la version mobile exclusif aux &eacute;tudiants, leur facilite l&#39;acc&egrave;s au diff&eacute;rente information dont-ils pourraient avoir besoin telles que re&ccedil;evoir des notifications de commmuniqu&eacute;, consult&eacute; leur programme de cour et de composition en temps r&eacute;el, consult&eacute; les &eacute;preuves d&#39;&eacute;valuation pass&eacute;, et bien d&#39;autre ...</p>\r\n\r\n<p>La version web ici pr&eacute;senteest beaucoup plus orient&eacute; &quot;Gestion des activit&eacute;s p&eacute;dagogique&quot;. Avec une gestion simplifi&eacute; et propre aux diff&eacute;rents acteurs du syst&egrave;me. Nous avons donc :</p>\r\n\r\n<ul>\r\n	<li>la gestion des cours pour les enseigants avec la possibilit&eacute; de suivre son emploi du temps dans l&#39;&eacute;tablissement toutes ses fili&egrave;res confondu, de partager des fichiers de cours, de donner des exercices &agrave; ses sales de classe, et bien d&#39;autre</li>\r\n	<li>la possiilit&eacute; au chef de d&eacute;partement d&#39;administrer en toute aisance les diff&eacute;rentes promotions de sa fili&egrave;re</li>\r\n	<li>l&#39;administration qui fait une gestion plus ou moin globbale de l&#39;&eacute;tablissement avec la possibilit&eacute; de g&eacute;rer les &eacute;tudiants des dif&eacute;rentes promotions des dif&eacute;rentes fili&egrave;res, de g&eacute;rer les enseignants, de g&eacute;rer les fili&egrave;res, de g&eacute;rer les mati&egrave;res, de g&eacute;rer les programmations de salle et de cours, et j&#39;en passe ...</li>\r\n	<li>etc ...</li>\r\n</ul>\r\n\r\n<hr />\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>NB : Cette aplication est disponible sous forme d&#39;abonnement annuel pour tous ceux voulant un syst&egrave;me de gestion r&eacute;volutionnaire pour la gestion de leur complexe universsitaire</strong></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Veuillez consulter la version mobile dans les r&eacute;alisations mobiles</strong></div>', NULL, '2022-03-25 07:20:41', '2022-03-31 17:57:20', 'projets/SGIME - Web/cover/lJepxLo2jePMeQ0DMXqGOFvU6rQa7VLCYieJPkws.png', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maite Duffy', 'a@a.aa', NULL, '$2y$10$e1/ooSOmiwmrLcgZ5XKO8e.4wDYxkJseW81f315M..yxIV.VFiJUW', NULL, '2022-03-21 09:45:36', '2022-03-21 09:45:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
