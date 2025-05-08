-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2025 at 08:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsstand`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `total_reads` int(11) DEFAULT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `total_reads`, `author_id`) VALUES
(1, 80, 1),
(2, 0, 1),
(3, 34, 1),
(4, 1, 1),
(5, 2, 1),
(6, 3, 1),
(7, 4, 1),
(8, 4, 1),
(9, 5, 1),
(10, 10, 1),
(11, 126, 1),
(12, 111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(75) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `_img` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `first_name`, `last_name`, `email`, `bio`, `_img`) VALUES
(1, 'Ahmad', 'Mohamed', 'ahmedoueiss@gmail.com', 'One of the developers of the website', 'assets/img/oueiss.jpg'),
(2, 'omar', 'bilal', 'omar@gmail.com', 'rhrgeyrg djhere ehrugey', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bodies`
--

CREATE TABLE `bodies` (
  `body_id` int(11) NOT NULL,
  `audio_path` varchar(75) DEFAULT NULL,
  `body` longtext NOT NULL,
  `language` varchar(45) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bodies`
--

INSERT INTO `bodies` (`body_id`, `audio_path`, `body`, `language`, `article_id`) VALUES
(2, NULL, 'The Rise of Artificial Intelligence\r\nArtificial Intelligence (AI) is transforming industries, economies, and daily life. From voice assistants like Siri and Alexa to advanced machine learning models like ChatGPT, AI is becoming an integral part of modern society.\r\n\r\nKey Benefits:\r\n✔ Automation: AI streamlines repetitive tasks in manufacturing, healthcare, and finance.\r\n✔ Personalization: Recommender systems (e.g., Netflix, Amazon) enhance user experience.\r\n✔ Healthcare Advancements: AI assists in disease detection and drug development.\r\n\r\nChallenges:\r\n❌ Job Displacement: Automation may replace certain jobs.\r\n❌ Ethical Concerns: Bias in AI algorithms raises fairness issues.\r\n❌ Data Privacy: AI relies on vast data, increasing cybersecurity risks.\r\n\r\nFuture Outlook:\r\nAI will continue evolving, requiring regulations and ethical frameworks to ensure responsible use.', 'english', 11),
(6, NULL, 'El Impacto de la Inteligencia Artificial en la Sociedad Moderna\r\nLa Inteligencia Artificial (IA) está transformando industrias, economías y la vida cotidiana. Desde asistentes virtuales como Siri y Alexa hasta modelos avanzados como ChatGPT, la IA se ha convertido en una parte esencial del mundo moderno.\r\n\r\nBeneficios Clave:\r\n✔ Automatización: La IA optimiza tareas repetitivas en manufactura, salud y finanzas.\r\n✔ Personalización: Sistemas de recomendación (Netflix, Amazon) mejoran la experiencia del usuario.\r\n✔ Avances Médicos: La IA ayuda en detección de enfermedades y desarrollo de medicamentos.\r\n\r\nDesafíos:\r\n❌ Pérdida de Empleos: La automatización podría reemplazar ciertos trabajos.\r\n❌ Problemas Éticos: Los sesgos en algoritmos generan preocupaciones sobre equidad.\r\n❌ Privacidad de Datos: La IA requiere grandes cantidades de datos, aumentando riesgos de ciberseguridad.\r\n\r\nPerspectiva Futura:\r\nLa IA seguirá evolucionando, necesitando regulaciones y marcos éticos para un uso responsable.', 'spanish', 11),
(7, NULL, 'L\'Impact de l\'Intelligence Artificielle sur la Société Moderne\r\nL\'Intelligence Artificielle (IA) transforme les industries, les économies et la vie quotidienne. Des assistants vocaux comme Siri et Alexa aux modèles avancés comme ChatGPT, l\'IA devient un élément clé de la société moderne.\r\n\r\nAvantages Clés :\r\n✔ Automatisation : L\'IA optimise les tâches répétitives dans la fabrication, la santé et la finance.\r\n✔ Personnalisation : Les systèmes de recommandation (Netflix, Amazon) améliorent l\'expérience utilisateur.\r\n✔ Progrès Médicaux : L\'IA aide à détecter des maladies et à développer des médicaments.\r\n\r\nDéfis :\r\n❌ Remplacement d\'Emplois : L\'automatisation pourrait supprimer certains emplois.\r\n❌ Problèmes Éthiques : Les biais algorithmiques soulèvent des questions d\'équité.\r\n❌ Protection des Données : L\'IA utilise de grandes quantités de données, augmentant les risques cybernétiques.\r\n\r\nPerspective Future :\r\nL\'IA continuera d\'évoluer, nécessitant des régulations et des cadres éthiques pour une utilisation responsable.', 'french', 11),
(8, NULL, 'test test test test', 'english', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `type`) VALUES
(1, 'morning'),
(2, 'sport'),
(3, 'technology'),
(4, 'health'),
(5, 'gaming'),
(6, 'politics'),
(7, 'economy'),
(8, 'science'),
(9, 'fashion'),
(10, 'mental health');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `creation_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `content`, `creation_time`, `user_id`, `content_id`) VALUES
(6, 'jhgkg', '2025-05-05 22:44:58', 1, 11),
(7, 'hh', '2025-05-05 22:45:17', 1, 11),
(8, 'gg', '2025-05-05 22:48:13', 1, 11),
(9, 'bgh', '2025-05-06 01:38:38', 1, 11),
(10, 'ghf', '2025-05-06 06:30:51', 1, 11),
(11, 'hg', '2025-05-06 07:48:52', 1, 1),
(12, 'yt', '2025-05-06 07:56:56', 1, 3),
(17, 'wek[lcol', '2025-05-07 22:18:11', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `content_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `title` varchar(100) NOT NULL,
  `publish_date` date NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cover_img` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`content_id`, `type`, `title`, `publish_date`, `description`, `cover_img`) VALUES
(1, 'article', 'Morning 1', '2025-05-04', 'blah blah blah blah blah blah blah blah vbla hblah blahb lahblahbl ahblahblahb lahblahblahbla hvblahb lahblahblah blahbla hblahblahb lahblahbl ahblahblah', 'assets/img/blog/content_id1.webp'),
(2, 'article', 'Sports 1', '0000-00-00', 'blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah ', ''),
(3, 'article', 'technology', '2025-05-04', 'blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah ', ''),
(4, 'article', 'health\r\n', '2025-05-04', 'health\r\nhealth\r\nhealth\r\nhealth\r\nhealth\r\nhealth\r\nhealth\r\nhealth\r\n', ''),
(5, 'article', 'gaming', '2025-05-04', 'gaminggaminggaminggaminggaminggaminggaminggaminggaminggaminggaminggaminggaming ', ''),
(6, 'article', 'politics', '2025-05-04', 'politicspoliticspoliticspoliticspoliticspoliticspoliticspoliticspolitics', ''),
(7, 'article', 'economy', '2025-05-04', 'economyeconomyeconomyeconomyveconomyeconomyeconomy', ''),
(8, 'article', 'science\r\n', '2025-05-04', 'vscience\r\nscience\r\nscience\r\nscience\r\nscience\r\nscience\r\nscience\r\nscience\r\nscience\r\n', ''),
(9, 'article', 'fashion', '2025-05-04', 'fashionfashionfashionfashionfashionfashion', ''),
(10, 'article', 'mental health', '2025-05-04', '	\r\nmental health	\r\nmental health	\r\nmental health	\r\nmental health', ''),
(11, 'article', 'The Rise of Artificial Intelligence\r\n', '2022-11-28', 'AI is a powerful tool that can improve efficiency and innovation, but it must be developed responsibly. Governments, businesses, and individuals must collaborate to maximize benefits while minimizing risks.', 'assets/img/blog/content_id11.webp'),
(12, 'article', 'test - tech', '2022-11-17', 'blah blah blah', 'assets/img/blog/content_id12.webp');

-- --------------------------------------------------------

--
-- Table structure for table `content_categories`
--

CREATE TABLE `content_categories` (
  `category_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `content_categories`
--

INSERT INTO `content_categories` (`category_id`, `content_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(3, 11),
(3, 12),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `header_id` int(11) NOT NULL,
  `header_name` varchar(50) DEFAULT NULL,
  `subscription_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `magazine_id` int(11) NOT NULL,
  `num_of_download` int(11) NOT NULL,
  `normal_path` varchar(75) NOT NULL,
  `optimized_path` varchar(75) DEFAULT NULL,
  `header_id` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `amount` double DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_date` date NOT NULL,
  `opinion` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `rating`, `rating_date`, `opinion`, `user_id`) VALUES
(9, 3, '2025-05-07', 'fuck', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reacts`
--

CREATE TABLE `reacts` (
  `react_type` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reacts`
--

INSERT INTO `reacts` (`react_type`, `content_id`, `user_id`) VALUES
(1, 1, 1),
(1, 1, 2),
(2, 3, 2),
(2, 11, 1),
(2, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `report_date` date NOT NULL,
  `report_reason` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `type`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `saved_contents`
--

CREATE TABLE `saved_contents` (
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `place` varchar(45) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `saved_contents`
--

INSERT INTO `saved_contents` (`user_id`, `content_id`, `place`, `date`) VALUES
(1, 1, 'readLater', '2025-05-06 07:48:41'),
(2, 3, 'readLater', '2025-05-06 18:25:06'),
(2, 11, 'favorite', '2025-05-07 22:17:31'),
(2, 11, 'readLater', '2025-05-07 22:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `special_editions`
--

CREATE TABLE `special_editions` (
  `special_id` int(11) NOT NULL,
  `header_id` int(11) NOT NULL,
  `highest_price` double DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `sub_id` int(11) NOT NULL,
  `auto_renewal` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `type` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `header_id` int(11) DEFAULT NULL,
  `magazine_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `profile_photo` varchar(75) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `join_date` date DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `profile_photo`, `role_id`, `join_date`, `last_login`) VALUES
(1, 'lol', '     Oueiss', 'ahmedoueiss@gmail.com', '11111', '../../uploads/1420590-hacker-background-1920x1080-for-ipad.jpg', 2, '2025-05-08', NULL),
(2, 'Omar', 'Hacker', 'omar@gmail.com', 'asdwasdwasdw', NULL, 2, '2025-05-06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `fk_article_author1_idx` (`author_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`),
  ADD UNIQUE KEY `author_id_UNIQUE` (`author_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `bodies`
--
ALTER TABLE `bodies`
  ADD PRIMARY KEY (`body_id`,`article_id`),
  ADD KEY `fk_body_article1_idx` (`article_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_comment_users1_idx` (`user_id`),
  ADD KEY `fk_comment_article1_idx` (`content_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `content_categories`
--
ALTER TABLE `content_categories`
  ADD PRIMARY KEY (`category_id`,`content_id`),
  ADD KEY `fk_ctegory_has_article_ctegory1_idx` (`category_id`),
  ADD KEY `fk_ctegory_has_article_article1_idx` (`content_id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`header_id`),
  ADD UNIQUE KEY `header_name_UNIQUE` (`header_name`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`magazine_id`),
  ADD KEY `Fk_header_idx` (`header_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk1_idx` (`sub_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `fl_idx` (`user_id`);

--
-- Indexes for table `reacts`
--
ALTER TABLE `reacts`
  ADD PRIMARY KEY (`content_id`,`user_id`),
  ADD KEY `fk_idx` (`user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `fk_idx` (`content_id`),
  ADD KEY `ffl_idx` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `saved_contents`
--
ALTER TABLE `saved_contents`
  ADD PRIMARY KEY (`content_id`,`place`,`user_id`),
  ADD KEY `ffk2` (`user_id`);

--
-- Indexes for table `special_editions`
--
ALTER TABLE `special_editions`
  ADD PRIMARY KEY (`special_id`),
  ADD KEY `fk_idx` (`user_id`),
  ADD KEY `fk3_fhu_idx` (`header_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `fk_subscribtion_users1_idx` (`user_id`),
  ADD KEY `fk2_idx` (`header_id`),
  ADD KEY `fk_singlemag_idx` (`magazine_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD UNIQUE KEY `profile_photo_UNIQUE` (`profile_photo`),
  ADD KEY `fk_users_roles1_idx` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bodies`
--
ALTER TABLE `bodies`
  MODIFY `body_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `header_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_article_author1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_khh` FOREIGN KEY (`article_id`) REFERENCES `contents` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bodies`
--
ALTER TABLE `bodies`
  ADD CONSTRAINT `fk_body_article1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comment_article1` FOREIGN KEY (`content_id`) REFERENCES `contents` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comment_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `content_categories`
--
ALTER TABLE `content_categories`
  ADD CONSTRAINT `fk_ctegory_has_article_article1` FOREIGN KEY (`content_id`) REFERENCES `contents` (`content_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ctegory_has_article_ctegory1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `magazines`
--
ALTER TABLE `magazines`
  ADD CONSTRAINT `Fk_header` FOREIGN KEY (`header_id`) REFERENCES `headers` (`header_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kk` FOREIGN KEY (`magazine_id`) REFERENCES `contents` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk1_utd` FOREIGN KEY (`sub_id`) REFERENCES `subscriptions` (`sub_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `fl` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reacts`
--
ALTER TABLE `reacts`
  ADD CONSTRAINT `fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_react_article1` FOREIGN KEY (`content_id`) REFERENCES `contents` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `ffl_fjhjh` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_uu` FOREIGN KEY (`content_id`) REFERENCES `contents` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saved_contents`
--
ALTER TABLE `saved_contents`
  ADD CONSTRAINT `ffk1` FOREIGN KEY (`content_id`) REFERENCES `contents` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ffk2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `special_editions`
--
ALTER TABLE `special_editions`
  ADD CONSTRAINT `fk2_gf` FOREIGN KEY (`special_id`) REFERENCES `contents` (`content_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3_fhuu` FOREIGN KEY (`header_id`) REFERENCES `headers` (`header_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_gg` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`header_id`) REFERENCES `headers` (`header_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_singlemag` FOREIGN KEY (`magazine_id`) REFERENCES `magazines` (`magazine_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_subscribtion_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
