-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : dim. 21 nov. 2021 à 19:51
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `medias`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `MEDIA_TABLE`
--

CREATE TABLE `MEDIA_TABLE` (
  `ID` int UNSIGNED NOT NULL,
  `TITRE` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DESCRIPTION` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DATE_DE_SORTIE` date NOT NULL,
  `DUREE` int NOT NULL DEFAULT '0',
  `ACTEURS` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `REALISATEUR` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PAYS` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AFFICHE` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOTE` int NOT NULL DEFAULT '0',
  `NOMBRE_EPISODE` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `MEDIA_TABLE`
--

INSERT INTO `MEDIA_TABLE` (`ID`, `TITRE`, `DESCRIPTION`, `DATE_DE_SORTIE`, `DUREE`, `ACTEURS`, `REALISATEUR`, `PAYS`, `AFFICHE`, `NOTE`, `NOMBRE_EPISODE`, `created_at`, `updated_at`) VALUES
(1, 'corrupti', 'Nihil ut rem et maxime. Velit reprehenderit aliquid eum aut. Nesciunt aperiam quam sint voluptas porro.', '2021-10-22', 20, 'modi', 'incidunt', 'repellendus', 'aspernatur', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(2, 'provident', 'Exercitationem deleniti vel esse dolores tenetur repellendus dignissimos. Repellat itaque dolorem eum molestias accusantium voluptas et quos. Nemo minima sint optio facere placeat culpa architecto.', '2021-11-09', 20, 'est', 'autem', 'ullam', 'odio', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(3, 'non', 'Facilis odit ut qui. Explicabo voluptas porro dignissimos fugit voluptatem minus dicta aut. Ipsa et soluta corporis.', '2021-11-05', 20, 'possimus', 'corporis', 'neque', 'molestiae', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(4, 'officiis', 'Est odio rem rerum ipsa nisi et consequatur ex. Aliquid accusamus ea impedit laborum. Ea nihil odio aut quis.', '2021-10-21', 20, 'eum', 'explicabo', 'eligendi', 'saepe', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(6, 'aliquid', 'Quia vero similique temporibus voluptas error expedita dolores. Sit error sequi occaecati eum officia suscipit. Et placeat nostrum ut quia quasi consectetur sequi.', '2021-10-21', 20, 'aperiam', 'natus', 'sint', 'dicta', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(7, 'quo', 'Ut possimus fuga placeat aut. Dolores aliquam eos temporibus autem ut. Cupiditate cumque aut tempora consectetur.', '2021-10-26', 20, 'in', 'alias', 'nihil', 'ab', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(8, 'et', 'Voluptas eligendi repudiandae consequatur illo consequuntur quo et. Fuga ipsum ut eum eveniet cum possimus facilis. Delectus eum et laudantium voluptas velit distinctio consequatur.', '2021-11-17', 20, 'amet', 'quod', 'necessitatibus', 'reiciendis', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(9, 'deleniti', 'Provident voluptas ex ipsam minima. Voluptas aut nemo quia nobis libero autem dicta est. Est adipisci aliquam itaque ea.', '2021-10-31', 20, 'omnis', 'fugit', 'id', 'ipsum', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(10, 'odit', 'Aut laborum qui et. Est enim minima et accusamus in. Provident eum illo sit debitis.', '2021-10-25', 20, 'harum', 'iusto', 'similique', 'error', 20, 10, '2021-11-19 12:49:16', '2021-11-19 12:49:16'),
(11, 'Avatar', 'C\'est un film', '2010-10-12', 120, 'Nco', 'SS', 'france', 'de', 12, 14, '2021-11-19 14:57:08', '2021-11-19 14:57:08'),
(12, 'sgfbr', 'dfsv', '2010-10-12', 120, 'Nco', 'SS', 'france', 'de', 12, 14, '2021-11-19 15:08:47', '2021-11-19 15:08:47');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_27_073728_create_categories_table', 1),
(6, '2021_11_18_110419_films_table', 2),
(7, '2021_11_19_103154_m_e_d_i_a_s__t_a_b_l_e', 3),
(8, '2021_11_18_110421_medias_table', 4),
(9, '2021_11_18_110422_medias_table', 5);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `MEDIA_TABLE`
--
ALTER TABLE `MEDIA_TABLE`
  ADD PRIMARY KEY (`ID`);

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
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `MEDIA_TABLE`
--
ALTER TABLE `MEDIA_TABLE`
  MODIFY `ID` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
