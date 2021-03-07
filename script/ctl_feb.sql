
CREATE DATABASE IF NOT EXISTS `ctldb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `ctldb`;

-- Volcando estructura para tabla ctldb.configurate
CREATE TABLE IF NOT EXISTS `configurate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomcorto` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nomlargo` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ruta` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Se almacenan datos de configuración inicial de la aplicación, tales como numero de telefono, direcciones de redes sociales';


INSERT INTO `configurate` (`id`, `nomcorto`, `nomlargo`, `ruta`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'fb', 'Facebook', 'https://www.facebook.com/welk28/', 1, '2021-02-17 18:18:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'tw', 'Twitter', 'http://www.twitter.com/welk28', 1, '2021-02-17 18:20:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'tel', 'Teléfono de contacto', '5512668874', 1, '2021-02-17 18:21:37', NULL, NULL),
	(4, 'mail', 'Correo electrónico:', 'tiempolibre@gmail.com', 1, '2021-02-17 18:22:17', NULL, NULL),
	(5, 'cel', 'Teléfono celular:', '5568885339', 1, '2021-02-17 18:22:46', NULL, NULL),
	(6, 'ig', 'Instagram', NULL, 0, '2021-02-17 18:23:10', NULL, NULL),
	(7, 'title', 'Titulo de la Página', 'Tiempo libre', 1, NULL, NULL, NULL);

CREATE TABLE IF NOT EXISTS `menu` (
  `idm` int(11) NOT NULL AUTO_INCREMENT,
  `descm` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idm`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='opciones principales de menú cabecera';

-- Volcando datos para la tabla ctldb.menu: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`idm`, `descm`, `status`) VALUES
	(1, 'Cultura', 1),
	(2, 'Viajes', 1),
	(3, 'Eventos', 1),
	(4, 'Videos', 1),
	(5, 'Diversidad', 1),
	(6, 'Gastronomía', 1),
	(7, 'Recomendaciones', 1),
	(8, 'Redes Sociales', 1),
	(9, 'Críticas', 1);

