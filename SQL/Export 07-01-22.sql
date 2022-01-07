-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para testkeplersi
CREATE DATABASE IF NOT EXISTS `testkeplersi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `testkeplersi`;

-- Volcando estructura para tabla testkeplersi.answers
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(10) unsigned NOT NULL,
  `entry_id` int(10) unsigned DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=701 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando estructura para tabla testkeplersi.entries
CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `survey_id` int(10) unsigned NOT NULL,
  `participant_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.entries: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `entries` DISABLE KEYS */;
INSERT INTO `entries` (`id`, `survey_id`, `participant_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2021-11-16 20:15:35', '2021-11-16 20:15:35'),
	(2, 1, 2, '2021-11-19 01:37:30', '2021-11-19 01:37:30'),
	(3, 1, 3, '2021-11-23 17:40:20', '2021-11-23 17:40:20'),
	(4, 1, 6, '2021-11-29 15:11:18', '2021-11-29 15:11:18'),
	(5, 1, 7, '2021-11-29 15:25:23', '2021-11-29 15:25:23');
/*!40000 ALTER TABLE `entries` ENABLE KEYS */;

-- Volcando estructura para tabla testkeplersi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla testkeplersi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.migrations: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2021_10_20_174302_create_answers_table', 1),
	(6, '2021_10_20_174302_create_entries_table', 1),
	(7, '2021_10_20_174302_create_questions_table', 1),
	(8, '2021_10_20_174302_create_sections_table', 1),
	(9, '2021_10_20_174302_create_surveys_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla testkeplersi.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla testkeplersi.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla testkeplersi.questions
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `survey_id` int(10) unsigned DEFAULT NULL,
  `real_section` int(10) unsigned DEFAULT NULL,
  `section_id` int(10) unsigned DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `options` json DEFAULT NULL,
  `rules` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.questions: ~138 rows (aproximadamente)
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`, `survey_id`, `real_section`, `section_id`, `content`, `type`, `options`, `rules`, `created_at`, `updated_at`) VALUES
	(2, 1, 1, 1, '¿Cuentan con un inventario de todo el hardware?', 'radio', '["SI", "NO", "EN PROCESO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(3, 1, 1, 1, '¿Está automatizado este inventario?', 'radio', '["SI", "NO", "EN PARTE"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(4, 1, 1, 1, '¿Con qué frecuencia se actualiza?', 'radio', '["CONTINUAMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(5, 1, 1, 1, '¿Existe un procedimiento que establezca el responsable del inventario, a quién reporta, qué se registra y cada cuánto se revisa?', 'radio', '["SI", "NO", "EN PROCESO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(6, 1, 1, 2, '¿Existe un procedimiento que indica qué hacer ante la conexión de un activo no autorizado?', 'radio', '["SI", "NO", "EN PROCESO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(7, 1, 1, 2, '¿Qué se hace ante la conexión de un equipo que no pertenece al inventario de hardware?', 'radio', '["Deniega la conexión", "Se mantiene en cuarentena", "Otro"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(8, 1, 1, 2, '¿El inventario de hardware ha sido aprobado por la gerencia general?', 'radio', '["SI", "NO", "EN PROCESO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(9, 1, 2, 3, '¿Cuentan con un inventario del software instalado en las máquinas de su red?', 'radio', '["SI", "NO", "EN PROCESO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(10, 1, 2, 3, '¿Este inventario está automatizado?', 'radio', '["SI", "NO", "EN PROCESO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(11, 1, 2, 3, '¿Con qué frecuencia se actualiza?', 'radio', '["CONTINUAMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(12, 1, 2, 3, '¿Existe un procedimiento que establezca el responsable del inventario, a quién reporta, qué se registra y cada cuánto se revisa?', 'radio', '["SI", "NO", "EN PROCESO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(13, 1, 2, 3, '¿Tiene incluido en su inventario de software los firmware de routers, switch y firewall de su red?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(14, 1, 2, 4, '¿Todo el software tiene soporte?', 'radio', '["SI", "NO", "PARCIALMENTE"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(15, 1, 2, 4, 'En caso de contar con software sin soporte ¿Se cuenta con un plan de mitigación de riesgos?', 'radio', '["SI", "NO", "PARCIALMENTE"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(16, 1, 2, 4, '¿Están actualizados los firmware de los routers, switchs y firewalls de su red?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(17, 1, 2, 5, '¿Existe un procedimiento que indica qué hacer ante la presencia de un software no autorizado?', 'radio', '["SI", "NO", "EN PROCESO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(18, 1, 2, 5, '¿Qué se realiza ante un activo no autorizado?', 'radio', '["DENIEGA INSTALACION", "SE MANTIENE EN CUARENTENA", "SE VALIDA EXCEPCIÓN"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(19, 1, 3, 6, '¿Cuentan con un proceso de gestión de información sensible?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(20, 1, 3, 6, '¿Este proceso está escrito?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(21, 1, 3, 6, '¿Con qué frecuencia se actualiza?', 'radio', '["CONTINUAMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(22, 1, 3, 7, '¿Cuentan con un inventario de información sensible?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(23, 1, 3, 7, '¿Con qué frecuencia se actualiza?', 'radio', '["CONTINUAMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(24, 1, 3, 8, '¿Existe un proceso donde se describan los tiempos de retención de la información corporativa?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(25, 1, 3, 8, '¿Cuéntan con listas de control de acceso a la informacion?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(26, 1, 3, 8, '¿Los usuarios cuentan con cuentas de acceso personal para acceder al sistema?', 'radio', '["SI", "NO", "PARCIALMENTE"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(27, 1, 3, 8, '¿Los administradores de la red cuentan con un perfil propio en todos los equipos?', 'radio', '["SI", "NO", "PARCIALMENTE"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(28, 1, 3, 9, '¿Este proceso está escrito?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(30, 1, 3, 9, '¿Está definido el tiempo de mantencion mínima/máxima de los archivos corporativos?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(31, 1, 3, 10, '¿Este proceso está escrito?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(32, 1, 3, 10, '¿Se incluye en el proceso de gestión de información sensible este punto sobre la eliminación de información sensible?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(33, 1, 3, 10, '¿Existe un procedimiento para manejar el equipo de un empleado que ha dejado la compañía?', 'radio', '["SI", "NO", "NO ESCRITO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(34, 1, 3, 11, '¿Este proceso esta escrito?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(35, 1, 3, 11, '¿Cuentan con listas de control de acceso a la informacion?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(36, 1, 3, 11, '¿Cuentan los equipos con sistema de encriptacion activado?', 'radio', '["SI", "NO", "ALGUNOS"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(37, 1, 4, 12, '¿Los equipos de la compañía cuenta con configuraciones seguras habilitadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(38, 1, 4, 12, '¿Estas configuraciones están documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(39, 1, 4, 12, '¿Con qué frecuencia se actualiza?', 'radio', '["CONTINUAMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(40, 1, 4, 13, '¿Los equipos de la compañía cuenta con configuraciones seguras habilitadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(41, 1, 4, 13, '¿Estas configuraciones están documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(42, 1, 4, 13, 'Indicar marca o modelo del firewall utilizado', 'radio', '["CONTINUAMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(43, 1, 4, 14, '¿Estas configuraciones están documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(44, 1, 4, 14, '¿Los equipos de la compañía cuenta con el bloqueo de sesión automático ante inactividad?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(45, 1, 4, 14, '¿Después de qué periodo de inactividad se bloquea? (Minutos)', 'radio', '["1", "5", "10", "15", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(46, 1, 4, 15, '¿Estas configuraciones están documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(47, 1, 4, 15, '¿Cuentan con firewall configurado? ', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(48, 1, 4, 15, 'Indicar marca o modelo del firewall utilizado', 'text', NULL, NULL, '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(49, 1, 4, 15, '¿Existe una regla "default-deny" que impide el tráfico excepto el de los servicios o puertos permitidos?', 'radio', '["SI", "NO", "NO CUENTO CON ESA INFORMACIÓN"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(50, 1, 4, 16, '¿Estas configuraciones están documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(51, 1, 4, 16, '¿Utiliza la empresa configuraciones seguras como protocolos SSH y VPN para las conexiones?', 'radio', '["SI", "NO", "NO CUENTO CON ESA INFORMACIÓN"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(52, 1, 4, 17, '¿Estas configuraciones están documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(53, 1, 4, 17, '¿Su página institucional utiliza certificado seguro (ssl o https)?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(54, 1, 4, 18, '¿Estas configuraciones están documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(56, 1, 5, 19, '¿Se cuenta con un inventario de todas las cuentas de acceso a la compañía?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(57, 1, 5, 19, '¿Están estas restricciones documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(58, 1, 5, 19, '¿Con qué frecuencia se actualiza?', 'radio', '["CONTINUAMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(59, 1, 5, 20, '¿Está establecido el uso de contraseñas únicas por usuario?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(60, 1, 5, 20, '¿Cuentan con segundo factor de autentificacion en las cuentas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(61, 1, 5, 20, '¿Las contraseñas utilizadas en la compañía tienen un minimo de 8 caracteres con+L39 2FA o 14 sin 2FA?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(62, 1, 5, 21, '¿Estas configuraciones están documentadas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(63, 1, 5, 21, '¿Las cuentas sin uso o "durmientes" son desactivadas despues de 45 días sin actividad?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(64, 1, 5, 22, '¿Se ha denegado el privilegio de administrador, y además el acceso a la cuenta de administrador', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(65, 1, 5, 22, '¿Tienen todos los dispositivos de usuario configurada la cuenta administrador?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(66, 1, 5, 22, 'El uso diario de los equipos ¿es realizado desde la cuenta de usuario solamente?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(67, 1, 5, 22, '¿Tienen los administradores de red una cuenta en todos los equipos?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(68, 1, 6, 23, '¿Existe un proceso escrito de generación de cuenta ante una nueva contratación?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(69, 1, 6, 23, '¿Este proceso es automatizado?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(70, 1, 6, 23, '¿Se sigue este proceso también para cambios de rol de un usuario?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(71, 1, 6, 24, '¿Existe un proceso escrito de revocación de cuenta ante la salida de un usuario?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(72, 1, 6, 24, '¿Este proceso es automatizado?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(73, 1, 6, 24, '¿Se sigue este proceso también para cambios de rol de un usuario?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(74, 1, 6, 25, '¿Existe esta configuración?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(75, 1, 6, 25, '¿Está documentada?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(76, 1, 6, 26, '¿Existe esta configuración?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(77, 1, 6, 26, '¿Está documentada?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(78, 1, 6, 27, '¿Existe esta configuración?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(79, 1, 6, 27, '¿Está documentada?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(80, 1, 7, 28, '¿Existe un proceso escrito de gestión de vulnerabilidades de los dispositivos de la empresa?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(81, 1, 7, 28, '¿Este proceso es automatizado?', 'radio', '["SI", "NO", "ALGUNOS"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(82, 1, 7, 28, '¿Cada cuanto se revisa el proceso?', 'radio', '["CONTINUAMENTE", "MENSUALMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(83, 1, 7, 29, '¿Existe un proceso escrito de remediación de vulnerabilidades de la empresa?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(84, 1, 7, 29, '¿Este proceso es automatizado?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(85, 1, 7, 29, '¿Se ha realizado esta implementación?', 'radio', '["CONTINUAMENTE", "MENSUALMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(86, 1, 7, 30, '¿Este proceso es automatizado?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(87, 1, 7, 30, '¿Se ha realizado esta implementación?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(88, 1, 7, 31, '¿Este proceso es automatizado?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(89, 1, 7, 31, '¿Se ha realizado esta implementación?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(90, 1, 8, 32, '¿Se ha realizado esta configuración?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(91, 1, 8, 32, '¿Existe un proceso escrito de gestión de logs de auditoria?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(92, 1, 8, 32, '¿Cada cuánto se revisa el proceso?', 'radio', '["CONTINUAMENTE", "MENSUALMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(93, 1, 8, 33, '¿Se ha realizado esta configuración?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(94, 1, 8, 34, '¿Se cumple este punto? ¿Cómo?', 'text', NULL, '["required", "min:1", "max:255"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(95, 1, 8, 34, '¿Se hacen backups de los logs?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(96, 1, 9, 35, '¿Es una política o directiva que se cumpla en un 100%?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(97, 1, 9, 35, '¿Está escrita esta política?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(98, 1, 9, 35, '¿Cada cuánto se revisa el proceso?', 'radio', '["CONTINUAMENTE", "MENSUALMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(99, 1, 9, 36, '¿Se ha realizado esta configuración?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(100, 1, 9, 36, '¿Existe un proceso escrito?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(101, 1, 9, 36, '¿Cada cuánto se revisa el proceso?', 'radio', '["CONTINUAMENTE", "MENSUALMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(102, 1, 9, 36, '¿Usa algun servicio de filtrado de DNS?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(103, 1, 10, 37, '¿Se ha realizado esta configuración?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(104, 1, 10, 37, '¿Qué Software Anti-Malware, y su versión asociada ocupa la empresa?', 'text', NULL, '["required", "min:1", "max:255"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(105, 1, 10, 37, '¿Existe un proceso escrito que detalle la configuracion?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(106, 1, 10, 37, '¿Cada cuánto se revisa el proceso?', 'radio', '["CONTINUAMENTE", "MENSUALMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(107, 1, 10, 37, '¿Tiene su software anti-malware un sistema centralizado de administración?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(108, 1, 10, 38, '¿Se ha realizado esta configuración?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(109, 1, 10, 38, '¿Existe un proceso escrito que detalle la configuración?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(110, 1, 10, 38, '¿Cada cuánto se revisa el proceso?', 'radio', '["CONTINUAMENTE", "MENSUALMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(111, 1, 10, 39, '¿Se ha realizado esta configuración?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(112, 1, 10, 39, '¿Existe un proceso escrito que detalle la configuración?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(113, 1, 10, 39, '¿Cada cuánto se revisa el proceso?', 'radio', '["CONTINUAMENTE", "MENSUALMENTE", "AL MENOS UNA VEZ AL SEMESTRE", "ANUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(114, 1, 11, 40, '¿Cuentan con un proceso de recuperación ante desastres escrito?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(115, 1, 11, 40, '¿Todos los respaldos de las máquinas son automatizados?', 'radio', '["SOLO ESTACIONES DE TRABAJO", "SOLO SERVIDORES", "AMBOS", "NINGUNO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(116, 1, 11, 40, '¿Cada cuánto se realizan respaldos?', 'radio', '["CONTINUAMENTE", "DIARIAMENTE", "SEMANALMENTE", "MENSUALMENTE", "NO SE ACTUALIZA"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(117, 1, 11, 41, '¿Cuentan con respaldo en todas las máquinas?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(118, 1, 11, 41, '¿Que software ocupa la empresa?', 'text', NULL, '["required", "min:1", "max:255"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(119, 1, 11, 42, '¿Los respaldos están protegidos en su proceso y en destino? ¿cómo?', 'text', NULL, '["required", "min:1", "max:255"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(121, 1, 11, 43, '¿Existe una destinación del respaldo que no esté conectada a la red / esté en la nube / o se encuentre en una ubicación distinta a la de la empresa? (esto es, que se encuentre en una red o ubicación distinta y no conectada a la del servidor en producción)', 'text', NULL, '["required", "min:1", "max:255"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(122, 1, 12, 44, '¿Cuentan con este punto?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(123, 1, 12, 44, '¿Está documentado?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(124, 1, 14, 45, '¿Se cuenta con un programa de concientización o capacitación en ciberseguridad?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(125, 1, 14, 45, '¿Está documentado?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(126, 1, 14, 45, '¿Se rigen por un programa/plan externo o es realizado internamente?', 'radio', '["Externo", "Interno"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(127, 1, 14, 45, 'En caso de ser un programa o proveedor externo ¿Cuál?', 'text', NULL, '["required", "min:1", "max:255"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(128, 1, 14, 46, '¿El programa incluye este punto?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(129, 1, 14, 47, '¿El programa incluye este punto?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(130, 1, 14, 48, '¿El programa incluye este punto?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(131, 1, 14, 49, '¿El programa incluye este punto?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(132, 1, 14, 50, '¿El programa incluye este punto?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(133, 1, 14, 51, '¿El programa incluye este punto?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(134, 1, 15, 52, '¿El programa incluye este punto?', 'radio', '["SI", "NO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(135, 1, 15, 53, '¿Cuentan con un inventario de proveedores de servicio?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(136, 1, 15, 53, '¿Está documentado?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(137, 1, 17, 54, '¿Cuentan con personal designado?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(138, 1, 17, 54, '¿Es conocido por toda la organización?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(139, 1, 17, 55, '¿Cuenta toda la organización con esta información?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(140, 1, 17, 56, '¿Se cuenta con un procedimiento escrito que relate este punto?', 'radio', '["SI", "NO", "OTRO"]', '["required"]', '2021-11-16 15:55:03', '2021-11-16 15:55:03');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;

-- Volcando estructura para tabla testkeplersi.scores
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `question_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` int(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.scores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `scores` DISABLE KEYS */;
/*!40000 ALTER TABLE `scores` ENABLE KEYS */;

-- Volcando estructura para tabla testkeplersi.sections
CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `survey_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.sections: ~56 rows (aproximadamente)
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` (`id`, `survey_id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 1, '1.1 - Establecer y mantener inventario detallado de Hardware', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(2, 1, '1.2 .- Actuar frente activos no autorizados', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(3, 1, '2.1 .- Establecer y mantener inventario de software', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(4, 1, '2.2 .- Asegurar que el software autorizado cuenta con soporte', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(5, 1, '2.3 .- Actuar frente al software no autorizado', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(6, 1, '3.1 - Establecer y mantener un proceso de gestión de la información corporativa. Esto incluye: "información sensible, propietarios de la información, gestión de información, retención de la información y eliminación', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(7, 1, '3.2 - Establecer y mantener un inventario de información sensible', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(8, 1, '3.3 - Configurar listas de control de acceso a la información (control de acceso a los sistemas, documentos, bases de datos y aplicaciones)', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(9, 1, '3.4 - Reforzar la mantención de la información corporativa', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(10, 1, '3.5 - Asegurar la correcta eliminación de la información', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(11, 1, '3.6 - Encriptar información en los dispositivos de los usuarios', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(12, 1, '4.1 - Establecer y mantener una configuración segura de los dispositivos', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(13, 1, '4.2 - Establecer y mantener una configuración segura para los dispositivos de red', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(14, 1, '4.3 - Configurar el bloqueo automático de sesión ante inactividad', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(15, 1, '4.4 - Implementar y gestionar firewalls en los servidores, cuando sea posible', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(16, 1, '4.5 - Implementar y gestionar firewalls en los equipos de usuario', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(17, 1, '4.6 - Gestionar de manera segura los activos y el software de la compañía', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(18, 1, '4.7 - Gestionar las cuentas por defecto (root, admin, etc), de todo el hardware donde aplique dejándolas inhabilitadas', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(19, 1, '5.1 - Establecer y mantener un inventario de cuentas, tanto de usuario como de administrador', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(20, 1, '5.2 - Utilización de contraseñas únicas', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(21, 1, '5.3 - Deshabilitar cuentas "durmientes" (cuentas deshabilitadas o no usadas con frecuencia)', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(22, 1, '5.4 - Restringir el acceso a privilegios de administrador', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(23, 1, '6.1 - Establecer proceso de generación de usuario', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(24, 1, '6.2 - Establecer proceso de revocación de acceso', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(25, 1, '6.3 - Requerir MFA (autenticación multifactor) para las aplicaciones externas o expuestas', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(26, 1, '6.4 - Requerir MFA para el acceso remoto a la red', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(27, 1, '6.5 - Requerir MFA para cuentas de administración', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(28, 1, '7.1 - Establecer y mantener proceso de gestión de vulnerabilidades', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(29, 1, '7.2 - Establecer y mantener un proceso que incluya la estrategia de remediación de riesgos', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(30, 1, '7.3 - Implemementar la gestión de parches de sistemas operativos de la organización', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(31, 1, '7.4 - Implemementar la gestión de parches de la aplicaciones', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(32, 1, '8.1 - Establecer y mantener un proceso de gestión de logs de auditoría', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(33, 1, '8.2 - Recopilar logs de auditoría', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(34, 1, '8.3 - Asegurar un alojamiento adecuado para los logs', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(35, 1, '9.1 - Asegurar el uso de navegadores y correos con soporte', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(36, 1, '9.2 - Uso de servicios de filtro DNS', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(37, 1, '10.1 - Implementar y mantener un software Anti-Malware (Software que protege la información de código malicioso)', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(38, 1, '10.2 - Configurar las actualizaciones automáticas del software Anti-Malware', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(39, 1, '10.3 - Deshabilitar el auto-run o auto play para dispositivos usb ', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(40, 1, '11.1 - Establecer y mantener un proceso de recuperación de información ante desastres', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(41, 1, '11.2 - Realizar Backups automatizados', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(42, 1, '11.3 - Proteger los backups', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(43, 1, '11.4 - Establecer y mantener una instancia "aislada" donde depositar el respaldo', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(44, 1, '12.1 - Asegurar que la insfraestrucutura de red está actualizada', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(45, 1, '14.1 - Establecer y mantener un programa de concientización que abarque toda la organización', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(46, 1, '14.2 - Entrenar a los empleados para reconocer los ataques de ingenieria social ', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(47, 1, '14.3 - Entrenar a los empleados en las mejores prácticas en autentificación', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(48, 1, '14.4 - Entrenar a los empleados en mejores prácticas en manejo de información sensible', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(49, 1, '14.5 - Entrenar a los empleados en causas de exposición involuntaria de información', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(50, 1, '14.6 - Entrenar a los empleados para reconocer y reportar los incidentes que afectan a la seguridad', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(51, 1, '14.7 - Entrenar a los empleados para identificar si sus activos requieren actualizaciones de seguridad, y cómo reportarlo', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(52, 1, '14.8 - Entrenar a los empleados en los riesgos de conectarse o transmitir información en redes no seguras', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(53, 1, '15.1 - Establecer y mantener un inventario de los proveedores', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(54, 1, '17.1 - Designar personal para gestionar los incidentes de seguridad', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(55, 1, '17.2 - Establecer y mantener la información de contacto para poder reportar incidentes de seguridad', '2021-11-16 15:55:03', '2021-11-16 15:55:03'),
	(56, 1, '17.3 - Establecer y mantener el proceso para el reporte de incidentes', '2021-11-16 15:55:03', '2021-11-16 15:55:03');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;

-- Volcando estructura para vista testkeplersi.selectanswersbyuser
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `selectanswersbyuser` (
	`ID` INT(10) UNSIGNED NULL,
	`Seccion` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Nro_Pregunta` INT(10) UNSIGNED NOT NULL,
	`Pregunta` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Respuesta` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Encuestado` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`Puntaje` INT(5) UNSIGNED NULL,
	`SumaScores` DECIMAL(32,0) NULL
) ENGINE=MyISAM;

-- Volcando estructura para tabla testkeplersi.surveys
CREATE TABLE IF NOT EXISTS `surveys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla testkeplersi.surveys: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `surveys` DISABLE KEYS */;
INSERT INTO `surveys` (`id`, `name`, `settings`, `created_at`, `updated_at`) VALUES
	(1, 'Auto Evaluación de Seguridad', NULL, '2021-11-16 15:55:03', '2021-11-16 15:55:03');
/*!40000 ALTER TABLE `surveys` ENABLE KEYS */;

-- Volcando estructura para tabla testkeplersi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workers_num` int(10) unsigned DEFAULT NULL,
  `pcs_num` int(10) unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando estructura para vista testkeplersi.selectanswersbyuser
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `selectanswersbyuser`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `selectanswersbyuser` AS select qu.real_section as ID,
se.name as Seccion,
qu.id as Nro_Pregunta,
qu.content as Pregunta,
an.value as Respuesta,
us.name as Encuestado,
sc.value as Puntaje,
(select DISTINCT sum(scs.value)
from answers ans 
inner join questions qus
on qus.id = ans.question_id
inner join entries ens
on ans.entry_id = ens.id
inner join users uss
on uss.id = ens.participant_id
inner join scores scs
on qus.id = scs.question_id
where ans.value = scs.options) as SumaScores
from answers an 
inner join entries en 
on an.entry_id = en.id 
inner join questions qu
on qu.id = an.question_id
inner join scores sc
on qu.id = sc.question_id
inner join users us 
on en.participant_id = us.id
inner join sections se
on se.id = qu.section_id
WHERE AN.value = SC.options ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
