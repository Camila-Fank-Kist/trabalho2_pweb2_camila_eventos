-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_trabalho2_pweb2_camila_eventos
CREATE DATABASE IF NOT EXISTS `db_trabalho2_pweb2_camila_eventos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_trabalho2_pweb2_camila_eventos`;

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.apresentacao
CREATE TABLE IF NOT EXISTS `apresentacao` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apresentador_id` bigint unsigned NOT NULL,
  `categoria_apresentacao_id` bigint unsigned NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `apresentacao_apresentador_id_foreign` (`apresentador_id`),
  KEY `apresentacao_categoria_apresentacao_id_foreign` (`categoria_apresentacao_id`),
  CONSTRAINT `apresentacao_apresentador_id_foreign` FOREIGN KEY (`apresentador_id`) REFERENCES `apresentador` (`id`) ON DELETE CASCADE,
  CONSTRAINT `apresentacao_categoria_apresentacao_id_foreign` FOREIGN KEY (`categoria_apresentacao_id`) REFERENCES `categoria_apresentacao` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.apresentacao: ~7 rows (aproximadamente)
INSERT INTO `apresentacao` (`id`, `titulo`, `apresentador_id`, `categoria_apresentacao_id`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(2, 'Show Humberto Gessinger', 5, 4, 'Sequi delectus rerum consectetur.', 'imagem/apresentacao\\eeec6b9d44e8b48984706351b3b155f3.png', NULL, NULL),
	(3, 'Show Harry Styles', 6, 4, 'Voluptas quo dolores consequatur.', 'imagem/apresentacao\\eeec6b9d44e8b48984706351b3b155f3.png', NULL, '2023-10-25 15:35:58'),
	(4, 'Show Dua Lipa', 7, 4, 'Ipsa dignissimos saepe a.', 'imagem/apresentacao\\44747f07bc6bb858dae04665d89f7f45.png', NULL, '2023-11-15 15:46:26'),
	(8, 'Show Elton John', 8, 4, 'Sequi delectus rerum consectetur.', 'imagem/apresentacao\\44747f07bc6bb858dae04665d89f7f45.png', '2023-10-25 15:56:03', '2023-10-25 15:56:03'),
	(9, 'Palestra A', 4, 2, 'Voluptas quo dolores consequatur.', 'imagem/apresentacao\\44747f07bc6bb858dae04665d89f7f45.png', NULL, NULL),
	(10, 'Stand up X', 1, 1, 'Sequi delectus rerum consectetur.', 'imagem/apresentacao\\eeec6b9d44e8b48984706351b3b155f3.png', NULL, NULL),
	(11, 'Seminário Y', 3, 3, 'Ipsa dignissimos saepe a.', 'imagem/apresentacao\\eeec6b9d44e8b48984706351b3b155f3.png', NULL, NULL);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.apresentador
CREATE TABLE IF NOT EXISTS `apresentador` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `biografia` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.apresentador: ~7 rows (aproximadamente)
INSERT INTO `apresentador` (`id`, `nome`, `telefone`, `data_nascimento`, `biografia`, `website`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 'Dr. Sebastião Rios', '(22) 96119-9241', '1991-12-29', 'Consequatur harum alias dolores et fugiat corrupti dolorem. Enim sequi ut asperiores nihil. Esse repellendus totam sit ipsam nemo odit atque.', 'leal.com.br', 'imagem/apresentador\\0a1153f6e44f38cf7b22d30d50569aec.png', NULL, NULL),
	(3, 'Sr. João Galindo Sobrinho', '(55) 3322-7255', '2004-04-21', 'Suscipit est ea repudiandae. Iusto dolores distinctio vel ipsa reprehenderit commodi in suscipit. Doloribus quisquam laudantium vitae.', 'teles.br', 'imagem/apresentador\\05fde404d2177c76513237fb3d01bc77.png', NULL, NULL),
	(4, 'Otávio Matias Barros Jr.', '(37) 2636-2549', '2023-12-02', 'Nihil labore debitis qui sapiente cum laboriosam ratione. Animi eos corporis facilis unde harum vero. Deserunt dolores accusamus dolores omnis veniam omnis ex. Commodi ipsa sit nulla.', 'fidalgo.org', 'imagem/apresentador/20231108112352.jpg', NULL, '2023-11-15 15:47:09'),
	(5, 'Humberto Gessinger', '(32) 3112-0536', '1983-04-11', 'Labore nobis neque ut tempore sint expedita. Temporibus cumque recusandae dolor in ut.', 'mares.br', 'imagem/apresentador\\cd54f0c21cbcbc23824e4398be47ae9a.png', NULL, NULL),
	(6, 'Harry Styles', '(32) 3112-0136', '2023-10-30', 'Suscipit est ea repudiandae. Iusto dolores distinctio vel ipsa reprehenderit commodi in suscipit. Doloribus quisquam laudantium vitae.', 'oooo.com', 'imagem/apresentador/20231108112352.jpg', '2023-10-25 16:16:33', '2023-10-25 16:16:33'),
	(7, 'Dua Lipa', '(55) 3313-7255', '2023-11-21', 'Consequatur harum alias dolores et fugiat corrupti dolorem. Enim sequi ut asperiores nihil. Esse repellendus totam sit ipsam nemo odit atque.', 'fvghbjnkm', 'imagem/apresentador\\0a1153f6e44f38cf7b22d30d50569aec.png', '2023-11-17 21:26:42', '2023-11-17 21:26:42'),
	(8, 'Elton John', '(37) 2637-2549', '2023-11-18', 'Suscipit est ea repudiandae. Iusto dolores distinctio vel ipsa reprehenderit commodi in suscipit. Doloribus quisquam laudantium vitae.', 'telesb.br', 'imagem/apresentador/20231108112352.jpg', NULL, NULL);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.avaliacao
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `evento_id` bigint unsigned NOT NULL,
  `nota` int NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `avaliacao_user_id_foreign` (`user_id`),
  KEY `avaliacao_evento_id_foreign` (`evento_id`),
  CONSTRAINT `avaliacao_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `evento` (`id`) ON DELETE CASCADE,
  CONSTRAINT `avaliacao_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.avaliacao: ~4 rows (aproximadamente)
INSERT INTO `avaliacao` (`id`, `user_id`, `evento_id`, `nota`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 3, 3, 4, 'Rerum distinctio voluptatibus laudantium voluptatibus aut.', 'imagem/avaliacao\\9226e3d0bb59dba1188122e9132c3ca6.png', NULL, NULL),
	(2, 3, 3, 8, 'Nostrum necessitatibus molestiae praesentium omnis in quo ut.', 'imagem/avaliacao\\c72dae7e32034b11b0d27d4056f7c927.png', NULL, NULL),
	(4, 7, 8, 7, 'Aliquid maiores cumque eaque et impedhhhhhhhhhhhhhhhhhit facere.', 'imagem/avaliacao\\4b430d75c2a8c4ca56a3da621f749e26.png', NULL, '2023-11-15 15:45:27'),
	(8, 7, 2, 10, 'Nostrum necessitatibus molestiae praesentium omnis in quo ut.', 'imagem/avaliacao\\9226e3d0bb59dba1188122e9132c3ca6.png', '2023-11-15 15:36:00', '2023-11-15 15:36:00');

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.categoria_apresentacao
CREATE TABLE IF NOT EXISTS `categoria_apresentacao` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.categoria_apresentacao: ~4 rows (aproximadamente)
INSERT INTO `categoria_apresentacao` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Stand up', NULL, NULL),
	(2, 'Palestra', NULL, NULL),
	(3, 'Seminário', NULL, NULL),
	(4, 'Show', NULL, NULL);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.categoria_evento
CREATE TABLE IF NOT EXISTS `categoria_evento` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.categoria_evento: ~5 rows (aproximadamente)
INSERT INTO `categoria_evento` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Sarau', NULL, NULL),
	(3, 'Conferência', NULL, NULL),
	(4, 'Festival Musical', NULL, NULL),
	(5, 'Feira', NULL, NULL),
	(6, 'Mostra científica', NULL, NULL);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_evento_id` bigint unsigned NOT NULL,
  `local_id` bigint unsigned NOT NULL,
  `data` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time DEFAULT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precoBRL` decimal(10,2) NOT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evento_categoria_evento_id_foreign` (`categoria_evento_id`),
  KEY `evento_local_id_foreign` (`local_id`),
  CONSTRAINT `evento_categoria_evento_id_foreign` FOREIGN KEY (`categoria_evento_id`) REFERENCES `categoria_evento` (`id`) ON DELETE CASCADE,
  CONSTRAINT `evento_local_id_foreign` FOREIGN KEY (`local_id`) REFERENCES `local` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.evento: ~5 rows (aproximadamente)
INSERT INTO `evento` (`id`, `nome`, `categoria_evento_id`, `local_id`, `data`, `hora_inicio`, `hora_fim`, `descricao`, `precoBRL`, `imagem`, `created_at`, `updated_at`) VALUES
	(2, 'Efapi', 5, 5, '1998-06-24', '01:11:00', '11:11:00', 'Vero aut et quia et velit fugit.', 1124.75, 'imagem/evento/20231114112849.jpg', NULL, '2023-11-14 14:28:56'),
	(3, 'Rock in Rio', 4, 3, '2023-11-08', '06:31:00', '09:57:00', 'Tempore aut illum aperiam.', 1022.46, 'imagem/evento/20231114112528.jpg', NULL, '2023-11-15 15:45:48'),
	(6, 'Lollapalooza', 4, 10, '2023-10-07', '01:37:00', '01:38:00', 'Tempore aut illum aperiam.', 359.00, 'imagem/evento/20231114112528.jpg', '2023-10-26 02:18:01', '2023-11-15 16:13:48'),
	(8, 'Mostra de iniciação científica X', 6, 10, '2023-11-29', '08:21:00', '08:25:00', 'Vero aut et quia et velit fugit.', 35.00, 'imagem/evento/20231118170409.jpg', '2023-11-08 14:21:14', '2023-11-18 20:04:10'),
	(9, 'Sarau X', 1, 5, '2023-11-18', '16:56:00', '20:13:00', 'Tempore aut illum aperiam.', 99.00, NULL, NULL, '2023-11-18 20:04:37');

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.evento_apresentacao
CREATE TABLE IF NOT EXISTS `evento_apresentacao` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `apresentacao_id` bigint unsigned NOT NULL,
  `evento_id` bigint unsigned NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `evento_apresentacao_apresentacao_id_foreign` (`apresentacao_id`),
  KEY `evento_apresentacao_evento_id_foreign` (`evento_id`),
  CONSTRAINT `evento_apresentacao_apresentacao_id_foreign` FOREIGN KEY (`apresentacao_id`) REFERENCES `apresentacao` (`id`) ON DELETE CASCADE,
  CONSTRAINT `evento_apresentacao_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `evento` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.evento_apresentacao: ~13 rows (aproximadamente)
INSERT INTO `evento_apresentacao` (`id`, `apresentacao_id`, `evento_id`, `hora_inicio`, `hora_fim`, `created_at`, `updated_at`) VALUES
	(2, 2, 2, '18:01:32', '04:45:37', '2023-11-18 19:58:51', '2023-11-18 19:58:53'),
	(3, 8, 3, '09:48:00', '13:18:00', '2023-11-18 19:58:52', '2023-11-15 16:13:09'),
	(6, 3, 6, '03:13:00', '22:16:00', '2023-10-26 03:11:44', '2023-10-26 03:12:05'),
	(7, 8, 6, '13:42:00', '13:44:00', '2023-10-26 15:32:56', '2023-10-26 15:32:56'),
	(8, 2, 3, '09:35:00', '09:38:00', '2023-10-26 15:33:15', '2023-10-26 15:33:15'),
	(9, 4, 6, '09:36:00', '09:39:00', '2023-10-26 15:33:31', '2023-10-26 15:33:31'),
	(10, 4, 3, '10:12:00', '13:17:00', '2023-11-18 19:58:50', '2023-11-15 16:12:54'),
	(11, 10, 2, '12:58:00', '14:00:00', '2023-11-15 15:56:51', '2023-11-15 15:56:51'),
	(12, 9, 2, '13:03:00', '15:05:00', '2023-11-15 16:00:58', '2023-11-15 16:00:58'),
	(13, 9, 8, '13:04:00', '16:07:00', '2023-11-15 16:01:27', '2023-11-15 16:12:40'),
	(14, 9, 9, '13:09:00', '18:11:00', '2023-11-15 16:06:06', '2023-11-15 16:06:06'),
	(15, 11, 2, '16:58:25', '16:58:26', '2023-11-18 19:58:27', '2023-11-18 19:58:28'),
	(16, 11, 2, '16:58:47', '16:58:48', '2023-11-18 19:58:48', '2023-11-18 19:58:55');

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.local
CREATE TABLE IF NOT EXISTS `local` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_local_id` bigint unsigned DEFAULT NULL,
  `capacidade` int NOT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `local_tipo_local_id_foreign` (`tipo_local_id`),
  CONSTRAINT `local_tipo_local_id_foreign` FOREIGN KEY (`tipo_local_id`) REFERENCES `tipo_local` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.local: ~3 rows (aproximadamente)
INSERT INTO `local` (`id`, `nome`, `tipo_local_id`, `capacidade`, `website`, `telefone`, `endereco`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(3, 'Rio de Janeiro', 2, 67189, 'pereira.org', '(89) 91105-3824', '47728-370, Travessa Aranda, 20. 186º Andar\nSanta Kauan - PI', 'Aut ut aut sint.', 'imagem/local\\8261940928bdd3e6be9e7989529bbb0d.png', NULL, NULL),
	(5, 'Chapecó', 1, 29701, 'aranda.com', '(77) 94519-2755', '99887-953, R. Lúcia Santana, 4149. FPorto Andressa do Norte - SE', 'Iusto culpa consequuntur sed facilis nisi.', 'imagem/local\\efa17ed53792d295975c06c8f99ead20.png', NULL, '2023-11-15 15:46:44'),
	(10, 'São Paulo', 1, 10, 'oooo.com', '(77) 94519-2755', '99887-953, R. Lúcia Santana, 4149. FPorto Andressa do Norte - SE', 'Iusto culpa consequuntur sed facilis nisi.', 'imagem/local/20231108112706.jpg', '2023-11-08 14:27:06', '2023-11-08 14:27:06');

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_10_05_133301_create_categorias__apresentacaostable', 1),
	(6, '2023_10_05_133302_create_categoria__eventos_table', 1),
	(7, '2023_10_05_133331_create_pagamentos_table', 1),
	(8, '2023_10_05_133500_create_tipo__locals_table', 1),
	(9, '2023_10_05_133510_create_locals_table', 1),
	(10, '2023_10_05_133745_create_apresentadors_table', 1),
	(11, '2023_10_05_133900_create_apresentacaos_table', 1),
	(12, '2023_10_05_133905_create_eventos_table', 1),
	(13, '2023_10_05_133910_create_evento__apresentacaos_table', 1),
	(14, '2023_10_05_133946_create_pedidos_table', 1),
	(15, '2023_10_05_133957_create_avaliacaos_table', 1);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.pagamento
CREATE TABLE IF NOT EXISTS `pagamento` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.pagamento: ~5 rows (aproximadamente)
INSERT INTO `pagamento` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'MasterCard', NULL, NULL),
	(2, 'Visa', NULL, NULL),
	(3, 'Hipercard', NULL, NULL),
	(4, 'Pix', NULL, NULL),
	(5, 'Débito', NULL, NULL);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `evento_id` bigint unsigned NOT NULL,
  `quantidade` int NOT NULL,
  `pagamento_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pedido_user_id_foreign` (`user_id`),
  KEY `pedido_evento_id_foreign` (`evento_id`),
  KEY `pedido_pagamento_id_foreign` (`pagamento_id`),
  CONSTRAINT `pedido_evento_id_foreign` FOREIGN KEY (`evento_id`) REFERENCES `evento` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pedido_pagamento_id_foreign` FOREIGN KEY (`pagamento_id`) REFERENCES `pagamento` (`id`) ON DELETE SET NULL,
  CONSTRAINT `pedido_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.pedido: ~8 rows (aproximadamente)
INSERT INTO `pedido` (`id`, `user_id`, `evento_id`, `quantidade`, `pagamento_id`, `created_at`, `updated_at`) VALUES
	(2, 3, 2, 3, 3, NULL, NULL),
	(4, 6, 3, 5, 2, NULL, NULL),
	(5, 4, 2, 8, 1, NULL, NULL),
	(13, 6, 8, 49, 3, '2023-11-15 14:51:39', '2023-11-15 14:51:39'),
	(14, 6, 3, 9, 3, '2023-11-15 15:21:29', '2023-11-15 15:21:29'),
	(17, 7, 2, 9, 1, '2023-11-15 20:47:36', '2023-11-15 20:47:36'),
	(18, 7, 6, 34, 1, '2023-11-15 21:12:27', '2023-11-15 21:12:27'),
	(19, 6, 2, 4, 4, '2023-11-17 19:29:11', '2023-11-17 19:29:11');

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.tipo_local
CREATE TABLE IF NOT EXISTS `tipo_local` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.tipo_local: ~4 rows (aproximadamente)
INSERT INTO `tipo_local` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Auditório', NULL, NULL),
	(2, 'Galpão', NULL, NULL),
	(4, 'Ginásio', NULL, NULL),
	(5, 'Casa de Eventos', NULL, NULL);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.users: ~6 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Dr. Júlia Mascarenhas Valentin', 'neves.julio@hotmail.com', NULL, '3SoRExmZF=<Hh5', NULL, NULL, NULL),
	(3, 'Thalia Constância Ávila Jr.', 'roque.alonso@rosa.net.br', NULL, '@^i:p,#6?b', NULL, NULL, NULL),
	(4, 'Isabel Helena Perez', 'marin.christian@assuncao.net', NULL, '+Y;3XS,N', NULL, NULL, NULL),
	(5, 'Edson Escobar Sobrinho', 'roberto44@campos.com.br', NULL, 'FF]MIRR4*', NULL, NULL, NULL),
	(6, 'Camila123', 'camila123@gmail.com', NULL, '$2y$10$1FFHMgINS./.rDl0zPiQWOHMPyyd3sRnVgZFsqs0tfx4DTpoizquS', 'rfKv7VhGHCkvopKB5XrL8q0LfxrLgojCIc0hUOw34FjY5GoLk3kWIGkmdCqx', '2023-11-13 17:40:07', '2023-11-15 13:54:13'),
	(7, 'Dora', 'dora@gmail.com', NULL, '$2y$10$KOfbSFZYbQdjVUpBtvMfL.097U/R/dbGLgQTvR00Hndopo6Qkv2uO', NULL, '2023-11-15 15:22:04', '2023-11-15 15:22:04');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
