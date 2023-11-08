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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.apresentacao: ~4 rows (aproximadamente)
INSERT INTO `apresentacao` (`id`, `titulo`, `apresentador_id`, `categoria_apresentacao_id`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(2, 'qui', 1, 2, 'Sequi delectus rerum consectetur.', 'imagem/apresentacao\\eeec6b9d44e8b48984706351b3b155f3.png', NULL, NULL),
	(3, 'harum', 3, 1, 'Voluptas quo dolores consequatur.', NULL, NULL, '2023-10-25 15:35:58'),
	(4, 'quia', 1, 4, 'Ipsa dignissimos saepe a.', 'imagem/apresentacao\\44747f07bc6bb858dae04665d89f7f45.png', NULL, NULL),
	(8, 'dshkbdkujhbkhj', 5, 1, 'kgjvkgjvb', NULL, '2023-10-25 15:56:03', '2023-10-25 15:56:03');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.apresentador: ~5 rows (aproximadamente)
INSERT INTO `apresentador` (`id`, `nome`, `telefone`, `data_nascimento`, `biografia`, `website`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 'Dr. Sebastião Rios', '(22) 96119-9241', '1991-12-29', 'Consequatur harum alias dolores et fugiat corrupti dolorem. Enim sequi ut asperiores nihil. Esse repellendus totam sit ipsam nemo odit atque.', 'leal.com.br', 'imagem/apresentador\\0a1153f6e44f38cf7b22d30d50569aec.png', NULL, NULL),
	(3, 'Sr. João Galindo Sobrinho', '(55) 3322-7255', '2004-04-21', 'Suscipit est ea repudiandae. Iusto dolores distinctio vel ipsa reprehenderit commodi in suscipit. Doloribus quisquam laudantium vitae.', 'teles.br', 'imagem/apresentador\\05fde404d2177c76513237fb3d01bc77.png', NULL, NULL),
	(4, 'Otávio Matias Barros Jr.', '(37) 2636-2549', '1998-01-15', 'Nihil labore debitis qui sapiente cum laboriosam ratione. Animi eos corporis facilis unde harum vero. Deserunt dolores accusamus dolores omnis veniam omnis ex. Commodi ipsa sit nulla.', 'fidalgo.org', 'imagem/apresentador\\b39dc5687dfd68ad5c037b334010568f.png', NULL, NULL),
	(5, 'Léia Cortês', '(32) 3112-0536', '1983-04-11', 'Labore nobis neque ut tempore sint expedita. Temporibus cumque recusandae dolor in ut.', 'mares.br', 'imagem/apresentador\\cd54f0c21cbcbc23824e4398be47ae9a.png', NULL, NULL),
	(6, 'teste', '999999999', '2023-10-30', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'oooo.com', NULL, '2023-10-25 16:16:33', '2023-10-25 16:16:33');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.avaliacao: ~5 rows (aproximadamente)
INSERT INTO `avaliacao` (`id`, `user_id`, `evento_id`, `nota`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 3, 3, 4, 'Rerum distinctio voluptatibus laudantium voluptatibus aut.', 'imagem/avaliacao\\9226e3d0bb59dba1188122e9132c3ca6.png', NULL, NULL),
	(2, 3, 3, 8, 'Nostrum necessitatibus molestiae praesentium omnis in quo ut.', 'imagem/avaliacao\\c72dae7e32034b11b0d27d4056f7c927.png', NULL, NULL),
	(4, 2, 2, 4, 'Aliquid maiores cumque eaque et impedit facere.', 'imagem/avaliacao\\4b430d75c2a8c4ca56a3da621f749e26.png', NULL, NULL),
	(6, 5, 6, 7, NULL, NULL, NULL, NULL),
	(7, 2, 2, 9, 'jjjjj kkkkkk jjj', NULL, '2023-10-26 03:39:02', '2023-10-26 15:07:55');

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.categoria_apresentacao
CREATE TABLE IF NOT EXISTS `categoria_apresentacao` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.categoria_apresentacao: ~5 rows (aproximadamente)
INSERT INTO `categoria_apresentacao` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Stand up', NULL, NULL),
	(2, 'Palestra', NULL, NULL),
	(3, 'Seminário', NULL, NULL),
	(4, 'Palestra', NULL, NULL),
	(5, 'Stand up', NULL, NULL);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.categoria_evento
CREATE TABLE IF NOT EXISTS `categoria_evento` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.categoria_evento: ~5 rows (aproximadamente)
INSERT INTO `categoria_evento` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Sarau', NULL, NULL),
	(2, 'Sarau', NULL, NULL),
	(3, 'Conferência', NULL, NULL),
	(4, 'Festival Musical', NULL, NULL),
	(5, 'Feira', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.evento: ~3 rows (aproximadamente)
INSERT INTO `evento` (`id`, `nome`, `categoria_evento_id`, `local_id`, `data`, `hora_inicio`, `hora_fim`, `descricao`, `precoBRL`, `imagem`, `created_at`, `updated_at`) VALUES
	(2, 'tempore', 2, 5, '1972-12-27', '04:43:12', '02:45:38', 'Vero aut et quia et velit fugit.', 1124.75, 'imagem/evento\\d6fb24732b1395b100e25172c628e2e4.png', NULL, NULL),
	(3, 'asperiores', 3, 3, '1980-06-22', '20:33:16', '08:48:39', 'Tempore aut illum aperiam.', 1022.46, 'imagem/evento\\19989a1ecf3437bd5e4d8286b78d38ea.png', NULL, NULL),
	(6, 'teste 2', 4, 3, '2023-10-07', '01:37:00', '01:38:00', 'bbbbbbbb h', 359.00, NULL, '2023-10-26 02:18:01', '2023-10-26 02:33:06');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.evento_apresentacao: ~7 rows (aproximadamente)
INSERT INTO `evento_apresentacao` (`id`, `apresentacao_id`, `evento_id`, `hora_inicio`, `hora_fim`, `created_at`, `updated_at`) VALUES
	(2, 2, 2, '18:01:32', '04:45:37', NULL, NULL),
	(3, 8, 6, '09:48:39', NULL, NULL, NULL),
	(6, 3, 6, '03:13:00', '22:16:00', '2023-10-26 03:11:44', '2023-10-26 03:12:05'),
	(7, 8, 3, '13:42:00', '13:44:00', '2023-10-26 15:32:56', '2023-10-26 15:32:56'),
	(8, 2, 3, '09:35:00', '09:38:00', '2023-10-26 15:33:15', '2023-10-26 15:33:15'),
	(9, 2, 6, '09:36:00', '09:39:00', '2023-10-26 15:33:31', '2023-10-26 15:33:31'),
	(10, 3, 2, '10:12:06', NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.local: ~2 rows (aproximadamente)
INSERT INTO `local` (`id`, `nome`, `tipo_local_id`, `capacidade`, `website`, `telefone`, `endereco`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(3, 'doloremque', 2, 67189, 'pereira.org', '(89) 91105-3824', '47728-370, Travessa Aranda, 20. 186º Andar\nSanta Kauan - PI', 'Aut ut aut sint.', 'imagem/local\\8261940928bdd3e6be9e7989529bbb0d.png', NULL, NULL),
	(5, 'vel', 1, 29701, 'aranda.com', '(77) 94519-2755', '99887-953, R. Lúcia Santana, 4149. F\nPorto Andressa do Norte - SE', 'Iusto culpa consequuntur sed facilis nisi.', 'imagem/local\\efa17ed53792d295975c06c8f99ead20.png', NULL, NULL);

-- Copiando estrutura para tabela db_trabalho2_pweb2_camila_eventos.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.migrations: ~15 rows (aproximadamente)
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
	(4, 'Visa', NULL, NULL),
	(5, 'Visa', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.pedido: ~3 rows (aproximadamente)
INSERT INTO `pedido` (`id`, `user_id`, `evento_id`, `quantidade`, `pagamento_id`, `created_at`, `updated_at`) VALUES
	(4, 2, 2, 5, 2, NULL, NULL),
	(5, 4, 2, 8, 1, NULL, NULL),
	(7, 2, 2, 7, 2, '2023-10-26 15:26:56', '2023-10-26 15:26:56');

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

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.tipo_local: ~5 rows (aproximadamente)
INSERT INTO `tipo_local` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Auditório', NULL, NULL),
	(2, 'Galpão', NULL, NULL),
	(3, 'Auditório', NULL, NULL),
	(4, 'Casa de Eventos', NULL, NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trabalho2_pweb2_camila_eventos.users: ~5 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Dr. Júlia Mascarenhas Valentin', 'neves.julio@hotmail.com', NULL, '3SoRExmZF=<Hh5', NULL, NULL, NULL),
	(2, 'Ziraldo Horácio Carrara Neto', 'trezende@quintana.com', NULL, ')~jGk(u', NULL, NULL, NULL),
	(3, 'Thalia Constância Ávila Jr.', 'roque.alonso@rosa.net.br', NULL, '@^i:p,#6?b', NULL, NULL, NULL),
	(4, 'Isabel Helena Perez', 'marin.christian@assuncao.net', NULL, '+Y;3XS,N', NULL, NULL, NULL),
	(5, 'Edson Escobar Sobrinho', 'roberto44@campos.com.br', NULL, 'FF]MIRR4*', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
