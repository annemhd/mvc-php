-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : dim. 27 nov. 2022 à 21:37
-- Version du serveur : 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- Version de PHP : 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_post` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id_post`, `username`, `content`, `created_at`) VALUES
(1, 'Eric Carman', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '2022-11-27 21:06:52.983364'),
(1, 'Honey Boo Boo', 'Proin vehicula ante nec erat elementum commodo', '2022-11-27 21:07:05.457741'),
(1, 'Jack Peralta', 'Praesent luctus elit a malesuada egestas', '2022-11-27 21:07:09.545829'),
(1, 'Mr Hankey', 'Aenean id urna vitae magna tempus malesuada', '2022-11-27 21:07:25.873636'),
(1, 'Mr Truman', 'Nam lacinia odio a neque pretium tempor', '2022-11-27 21:07:34.688451'),
(1, 'Qui suis-je', 'Praesent semper nunc non vestibulum euismod', '2022-11-27 21:07:43.791884'),
(1, 'Sailor Moon', 'Sed ut augue sit amet elit eleifend volutpat nec et erat', '2022-11-27 21:07:55.730411'),
(2, 'Sangoku', 'Praesent porttitor ex et urna euismod convallis', '2022-11-27 21:08:05.721646'),
(2, 'Sophie', 'Vivamus lacinia lacus vitae pulvinar ullamcorper', '2022-11-27 21:08:15.024280');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `id_author` int(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `id_author`, `title`, `content`, `created_at`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget massa ac mauris porttitor efficitur. Integer orci lacus, eleifend ut ipsum eget, lobortis tincidunt ante. Duis vitae ex non lorem pellentesque tincidunt vel et neque. In blandit pharetra gravida. Aliquam lectus arcu, pretium sit amet hendrerit eget, porta id lorem. Suspendisse viverra tellus id enim volutpat, at gravida dolor euismod. Aenean ullamcorper dui in metus pretium rutrum. Aliquam rutrum sodales dolor ac viverra. Sed quis pulvinar ante, porta pulvinar massa. In vehicula tristique sagittis.', '2022-11-27 09:45:34.000000'),
(2, 1, 'Proin dapibus justo eget', 'Mauris congue elit in erat finibus aliquam. Ut eros erat, vehicula ut suscipit vel, posuere et massa. Maecenas vitae pellentesque diam. Vestibulum euismod arcu felis, vel elementum metus sodales eu. Vestibulum tincidunt fringilla augue, id aliquet lacus finibus eget. Pellentesque tincidunt magna sed nulla euismod dignissim at sit amet felis. Aliquam sit amet eleifend mauris, ac ullamcorper tortor. Fusce dignissim risus dolor, et suscipit eros sodales non. Duis mattis porttitor est, vitae gravida dolor laoreet nec. Morbi turpis dolor, pellentesque et dictum eget, feugiat ultricies risus. Nam scelerisque erat sit amet sagittis hendrerit. Aliquam porttitor pulvinar nunc ut eleifend. Nullam ut nulla libero.', '2022-11-27 10:25:26.000000'),
(3, 2, 'Vivamus sit amet ex ut risus', 'Donec aliquet, sapien vulputate porttitor laoreet, nisi ligula maximus lorem, ac iaculis velit ex et metus. Donec sit amet gravida urna. Praesent non pellentesque augue. Sed ut metus pellentesque, pharetra eros quis, aliquam velit. Aliquam viverra ante aliquet, auctor nibh non, vehicula quam. Aliquam ut quam sed eros facilisis facilisis. Fusce maximus, risus ut malesuada iaculis, est tellus laoreet dui, nec porttitor sapien nulla quis tellus. Nullam viverra cursus lorem, sit amet convallis mauris dignissim id. Donec porta neque ut metus consectetur, id viverra neque gravida. Donec eu fringilla ante. Mauris congue porttitor accumsan. Pellentesque ultrices lacus non pulvinar facilisis. In faucibus aliquam neque, eu maximus massa porttitor id.', '2022-11-27 10:12:28.261711'),
(4, 2, 'Mauris aliquet nibh consequat', 'Sed ornare rhoncus cursus. Ut vitae tincidunt risus, at placerat leo. Proin nec tellus leo. Praesent mattis ex non odio porta condimentum. Nullam sit amet orci sed massa luctus varius vitae sed magna. Cras nisi purus, dignissim et magna vitae, ullamcorper euismod erat. Maecenas turpis mi, condimentum quis libero vitae, viverra efficitur nibh. Morbi feugiat, mi id malesuada imperdiet, risus augue cursus dolor, in feugiat quam sem faucibus neque. Suspendisse efficitur, metus ac placerat gravida, felis ipsum mattis mi, nec condimentum nisl erat et orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer sollicitudin erat est, eget viverra lectus vestibulum eget. Fusce congue diam quis hendrerit ornare. Sed tortor massa, interdum eu pretium quis, ullamcorper vel orci. Etiam porttitor tortor sit amet elementum porttitor.', '2022-11-24 00:00:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `role`, `created_at`) VALUES
(1, 'janedoe@gmail.com', 'azerty', 'Jane', 'Doe', 'author', '2022-11-27 12:10:02.975213'),
(2, 'johndoe@gmail.com', 'azerty', 'John', 'Doe', 'admin', '2022-11-27 17:52:40.000000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id_post` (`id_post`,`username`,`content`,`created_at`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;