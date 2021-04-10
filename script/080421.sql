-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para ctldb
CREATE DATABASE IF NOT EXISTS `ctldb` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `ctldb`;

-- Volcando estructura para tabla ctldb.basemenu
CREATE TABLE IF NOT EXISTS `basemenu` (
  `idb` int(11) NOT NULL AUTO_INCREMENT,
  `descb` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `ids` int(11) NOT NULL,
  `edita` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`idb`),
  KEY `FK__submenu` (`ids`),
  KEY `FK2_edita` (`edita`),
  CONSTRAINT `FK2_edita` FOREIGN KEY (`edita`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE,
  CONSTRAINT `FK__submenu` FOREIGN KEY (`ids`) REFERENCES `submenu` (`ids`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='contenido de los submenus';

-- Volcando datos para la tabla ctldb.basemenu: ~90 rows (aproximadamente)
/*!40000 ALTER TABLE `basemenu` DISABLE KEYS */;
INSERT INTO `basemenu` (`idb`, `descb`, `status`, `ids`, `edita`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, 'Embajadas', 1, 1, 5, NULL, NULL, NULL, 0),
	(2, 'Organizaciones', 1, 1, 5, NULL, NULL, NULL, 0),
	(3, 'Secretarias', 1, 1, 5, NULL, NULL, NULL, 0),
	(4, 'Museos', 1, 2, 5, NULL, NULL, NULL, 0),
	(5, 'Galerias de Arte', 1, 2, 5, NULL, NULL, NULL, 0),
	(6, 'Centro Culturales', 1, 2, 5, NULL, NULL, NULL, 0),
	(7, 'Casas de cultura', 1, 2, 5, NULL, NULL, NULL, 0),
	(8, 'Infantil', 1, 3, 5, NULL, NULL, NULL, 0),
	(9, 'Inbal', 1, 3, 5, NULL, NULL, NULL, 0),
	(10, 'Cenart', 1, 3, 5, NULL, NULL, NULL, 0),
	(11, 'Unam', 1, 3, 5, NULL, NULL, NULL, 0),
	(12, 'Cartelera de teatro', 1, 3, 5, NULL, NULL, NULL, 0),
	(13, 'Teatro musical', 1, 3, 5, NULL, NULL, NULL, 0),
	(14, 'Otros', 1, 3, 5, NULL, NULL, NULL, 0),
	(15, 'Conciertos', 1, 4, 5, NULL, NULL, NULL, 0),
	(16, 'Orquestas', 1, 4, 5, NULL, NULL, NULL, 0),
	(17, 'Pop', 1, 4, 5, NULL, NULL, NULL, 0),
	(18, 'Festivales', 1, 4, 5, NULL, NULL, NULL, 0),
	(19, 'Recitales', 1, 4, 5, NULL, NULL, NULL, 0),
	(20, 'Clasica', 1, 4, 5, NULL, NULL, NULL, 0),
	(21, 'Sinfonicas', 1, 4, 5, NULL, NULL, NULL, 0),
	(22, 'Operas', 1, 4, 5, NULL, NULL, NULL, 0),
	(23, 'Pinturas', 1, 5, 5, NULL, NULL, NULL, 0),
	(24, 'Artistas Plasticos', 1, 5, 5, NULL, NULL, NULL, 0),
	(25, 'Arte', 1, 5, 5, NULL, NULL, NULL, 0),
	(26, 'Danza', 1, 5, 5, NULL, NULL, NULL, 0),
	(27, 'Presentaciones libro', 1, 6, 5, NULL, NULL, NULL, 0),
	(28, 'lecturas', 1, 6, 5, NULL, NULL, NULL, 0),
	(29, 'Recitales', 1, 6, 5, NULL, NULL, NULL, 0),
	(30, 'Club de lectura', 1, 6, 5, NULL, NULL, NULL, 0),
	(31, 'Narraciones', 1, 6, 2, NULL, NULL, NULL, 0),
	(32, 'Festivales', 1, 6, 2, NULL, NULL, NULL, 0),
	(33, 'Ferias de libros', 1, 6, 2, NULL, NULL, NULL, 0),
	(34, 'Clasico', 1, 7, 2, NULL, NULL, NULL, 0),
	(35, 'Niños', 1, 7, 2, NULL, NULL, NULL, 0),
	(36, 'Festivales', 1, 7, 2, NULL, NULL, NULL, 0),
	(37, 'Cineteca Nacional', 1, 7, 2, NULL, NULL, NULL, 0),
	(38, 'Cine comercial', 1, 7, 2, NULL, NULL, NULL, 0),
	(39, 'La casa del cine', 1, 7, 2, NULL, NULL, NULL, 0),
	(40, 'Filmoteca Unam', 1, 7, 2, NULL, NULL, NULL, 0),
	(41, 'Historia', 1, 8, 2, NULL, NULL, NULL, 0),
	(42, 'Galerias de Arte', 1, 8, 2, NULL, NULL, NULL, 0),
	(43, 'Centro Culturales', 1, 8, 2, NULL, NULL, NULL, 0),
	(44, 'Casas de cultura', 1, 8, 2, NULL, NULL, NULL, 0),
	(45, 'Otros', 1, 8, 2, NULL, NULL, NULL, 0),
	(46, 'Zonas culturales', 1, 9, 2, NULL, NULL, NULL, 0),
	(47, 'Zonas Arqueologicas', 1, 9, 2, NULL, NULL, NULL, 0),
	(48, 'Zonas Recreativas', 1, 9, 2, NULL, NULL, NULL, 0),
	(49, 'Zonas ecologicas', 1, 9, 2, NULL, NULL, NULL, 0),
	(50, 'Zonas Escolares', 1, 9, 2, NULL, NULL, NULL, 0),
	(51, 'Zonas senderismo', 1, 9, 2, NULL, NULL, NULL, 0),
	(52, 'regionales', 1, 10, 2, NULL, NULL, NULL, 0),
	(53, 'ferias del libro', 1, 10, 2, NULL, NULL, NULL, 0),
	(54, 'Feria de turismo', 1, 10, 2, NULL, NULL, NULL, 0),
	(55, 'otros', 1, 10, 2, NULL, NULL, NULL, 0),
	(56, 'Rutas', 1, 11, 2, NULL, NULL, NULL, 0),
	(57, 'Rcomendaciones', 1, 11, 2, NULL, NULL, NULL, 0),
	(58, 'Descubrimientos', 1, 11, 2, NULL, NULL, NULL, 0),
	(59, 'Destinos', 1, 11, 2, NULL, NULL, NULL, 0),
	(60, 'Reportajes', 1, 11, 2, NULL, NULL, NULL, 0),
	(61, 'Zonas Arqueologicas (Inah)', 1, 12, 2, NULL, NULL, NULL, 0),
	(62, 'Rutas (varias)', 1, 12, 2, NULL, NULL, NULL, 0),
	(63, 'Visitas Guiadas Museos', 1, 12, 2, NULL, NULL, NULL, 0),
	(64, 'Recomendaciones', 1, 13, 2, NULL, NULL, NULL, 0),
	(65, 'Rutas del queso y vino', 1, 14, 2, NULL, NULL, NULL, 0),
	(66, 'Ruta Zapata', 1, 14, 2, NULL, NULL, NULL, 0),
	(67, 'Ruta Centro Historico', 1, 14, 2, NULL, NULL, NULL, 0),
	(68, 'Ruta Conventos', 1, 14, 2, NULL, NULL, NULL, 0),
	(69, 'Ruta Museos', 1, 14, 2, NULL, NULL, NULL, 0),
	(70, 'Ruta Galerias', 1, 14, 2, NULL, NULL, NULL, 0),
	(71, 'Ruta Xochimilco', 1, 14, 2, NULL, NULL, NULL, 0),
	(72, 'Visitas Guiadas', 1, 14, 2, NULL, NULL, NULL, 0),
	(73, 'reportajes', 1, 15, 2, NULL, NULL, NULL, 0),
	(74, 'invitaciones', 1, 15, 2, NULL, NULL, NULL, 0),
	(75, 'videos', 1, 15, 2, NULL, NULL, NULL, 0),
	(76, 'Cursos y talleres', 1, 15, 2, NULL, NULL, NULL, 0),
	(77, 'Lugares', 1, 17, 2, NULL, NULL, NULL, 0),
	(78, 'Recomendaciones', 1, 17, 2, NULL, NULL, NULL, 0),
	(79, 'Gamer', 1, 17, 2, NULL, NULL, NULL, 0),
	(80, 'Turismo', 1, 17, 2, NULL, NULL, NULL, 0),
	(81, 'cultura empresarial', 1, 19, 2, NULL, NULL, NULL, 0),
	(82, 'avances tecnologicos', 1, 20, 2, NULL, NULL, NULL, 0),
	(83, 'manga', 1, 21, 2, NULL, NULL, NULL, 0),
	(84, 'comic', 1, 21, 2, NULL, NULL, NULL, 0),
	(85, 'Recomendaciones', 1, 22, 2, NULL, NULL, NULL, 0),
	(86, 'La madriguera del Doc', 1, 22, 2, NULL, NULL, NULL, 0),
	(87, 'Recomendaciones', 1, 23, 2, NULL, NULL, NULL, 0),
	(88, 'Mejores restaurantes', 1, 23, 2, NULL, NULL, NULL, 0),
	(89, 'Chef ', 1, 23, 2, NULL, NULL, NULL, 0),
	(90, 'Recetas', 1, 23, 2, NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `basemenu` ENABLE KEYS */;

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

-- Volcando datos para la tabla ctldb.configurate: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `configurate` DISABLE KEYS */;
INSERT INTO `configurate` (`id`, `nomcorto`, `nomlargo`, `ruta`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'fb', 'Facebook', 'https://www.facebook.com/welk28/', 1, '2021-02-17 18:18:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'tw', 'Twitter', 'http://www.twitter.com/welk28', 1, '2021-02-17 18:20:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'tel', 'Teléfono de contacto', '5512668874', 1, '2021-02-17 18:21:37', NULL, NULL),
	(4, 'mail', 'Correo electrónico:', 'tiempolibre@gmail.com', 1, '2021-02-17 18:22:17', NULL, NULL),
	(5, 'cel', 'Teléfono celular:', '5568885339', 1, '2021-02-17 18:22:46', NULL, NULL),
	(6, 'ig', 'Instagram', NULL, 0, '2021-02-17 18:23:10', NULL, NULL),
	(7, 'title', 'Titulo de la Página', 'Tiempo libre', 1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `configurate` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.datesite
CREATE TABLE IF NOT EXISTS `datesite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icono` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fb` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tw` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ig` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telof` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telc` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `edita` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_modifica_idp` (`edita`) USING BTREE,
  CONSTRAINT `FK_datesite_personal` FOREIGN KEY (`edita`) REFERENCES `personal` (`idp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='datos generales del sitio';

-- Volcando datos para la tabla ctldb.datesite: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `datesite` DISABLE KEYS */;
INSERT INTO `datesite` (`id`, `icono`, `titulo`, `mail`, `fb`, `tw`, `ig`, `telof`, `telc`, `created_at`, `updated_at`, `edita`) VALUES
	(1, 'logoCTL_ico.png', 'Tiempo libre actualizado', 'tiempolibreactual@gmail.com', 'https://www.facebook.com/welk28actual/', 'http://www.twitter.com/welk28actual', NULL, '5512668888', '5568885888', NULL, '2021-04-08 17:40:47', 2);
/*!40000 ALTER TABLE `datesite` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `idepto` int(11) NOT NULL AUTO_INCREMENT,
  `nomdepto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `edita` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`idepto`),
  KEY `FK1_edita` (`edita`),
  CONSTRAINT `FK1_edita` FOREIGN KEY (`edita`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.departamento: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` (`idepto`, `nomdepto`, `status`, `edita`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, 'Diseño otro', 1, 2, '2021-04-08 18:07:25', '2021-04-08 18:41:33', NULL, 0),
	(2, 'Recursos Humanos', 1, 5, '2021-04-08 18:07:26', NULL, NULL, 0),
	(3, 'Recursos Financieros', 1, 2, '2021-04-08 18:17:53', '2021-04-08 18:17:53', NULL, 0);
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `idedo` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idedo`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.estado: ~31 rows (aproximadamente)
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` (`idedo`, `estado`) VALUES
	(1, 'Aguascalientes'),
	(2, 'Baja California'),
	(3, 'Baja California Sur'),
	(4, 'Campeche'),
	(5, 'Chiapas'),
	(6, 'Chihuahua'),
	(7, 'Ciudad de Mexico'),
	(8, 'Cohahuila'),
	(9, 'Colima'),
	(10, 'Durango'),
	(11, 'Estado de México'),
	(12, 'Guanajuato'),
	(13, 'Guerrero'),
	(14, 'Hidalgo'),
	(15, 'Jalisco'),
	(16, 'Michoacán'),
	(17, 'Morelos'),
	(18, 'Nayarit'),
	(19, 'Nuevo León'),
	(20, 'Oaxaca'),
	(21, 'Puebla'),
	(22, 'Querétaro'),
	(23, 'Quintana Roo'),
	(24, 'San luis Potosi'),
	(25, 'Sinaloa'),
	(26, 'Sonora'),
	(27, 'Tabasco'),
	(28, 'Tamaulipas'),
	(29, 'Tlaxcala'),
	(30, 'Veracruz'),
	(31, 'Zacatecas');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.giroemp
CREATE TABLE IF NOT EXISTS `giroemp` (
  `idgi` int(11) NOT NULL AUTO_INCREMENT,
  `descg` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `edita` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`idgi`),
  KEY `FK1giro_edita` (`edita`),
  CONSTRAINT `FK1giro_edita` FOREIGN KEY (`edita`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.giroemp: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `giroemp` DISABLE KEYS */;
INSERT INTO `giroemp` (`idgi`, `descg`, `status`, `edita`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, 'industrial', 1, NULL, NULL, NULL, NULL, 0),
	(2, 'servicios', 1, NULL, NULL, NULL, NULL, 0),
	(3, 'comercial', 1, NULL, NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `giroemp` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `idm` int(11) NOT NULL AUTO_INCREMENT,
  `descm` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(11) NOT NULL,
  `edita` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idm`),
  KEY `edita` (`edita`),
  CONSTRAINT `edita` FOREIGN KEY (`edita`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='opciones principales de menú cabecera';

-- Volcando datos para la tabla ctldb.menu: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`idm`, `descm`, `status`, `edita`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, 'Cultura', 1, 2, '2021-04-05 11:21:40', '2021-04-08 17:38:35', NULL, 0),
	(2, 'Viajes', 1, 2, '2021-04-05 11:21:41', NULL, NULL, 0),
	(3, 'Eventos', 1, 3, '2021-04-05 11:21:44', NULL, NULL, 0),
	(4, 'Videos', 1, 4, '2021-04-05 11:21:45', NULL, NULL, 0),
	(5, 'Diversidad', 1, 3, '2021-04-05 11:21:46', NULL, NULL, 0),
	(6, 'Gastronomía', 1, 4, '2021-04-05 11:21:47', NULL, NULL, 0),
	(7, 'Recomendaciones', 1, 5, '2021-04-05 11:21:48', NULL, NULL, 0),
	(8, 'Redes Sociales', 1, 2, '2021-04-05 11:21:49', NULL, NULL, 0),
	(9, 'Críticas', 1, 2, '2021-04-05 11:21:50', NULL, NULL, 0),
	(10, 'welk', 0, 2, '2021-04-05 11:21:51', NULL, NULL, 0),
	(11, 'welk', 0, 2, '2021-04-05 11:21:52', NULL, NULL, 0),
	(12, 'welk', 0, 2, '2021-03-20 00:00:00', NULL, NULL, 0),
	(13, 'welk', 0, 2, '2021-03-20 14:22:09', NULL, NULL, 0),
	(14, 'welk', 0, 2, NULL, NULL, NULL, 0),
	(15, 'welk', 0, 2, '2021-03-20 20:18:16', '2021-03-20 20:18:16', NULL, 0);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.personal
CREATE TABLE IF NOT EXISTS `personal` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contra` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nomp` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `app` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idpuesto` int(11) DEFAULT NULL,
  `idedo` int(11) DEFAULT NULL,
  `idgi` int(11) DEFAULT NULL,
  `idrc` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `edita` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`idp`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `idpuesto` (`idpuesto`),
  KEY `idedo` (`idedo`),
  KEY `idgi` (`idgi`),
  KEY `idrc` (`idrc`),
  KEY `FK6_edita` (`edita`),
  CONSTRAINT `FK6_edita` FOREIGN KEY (`edita`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE,
  CONSTRAINT `idedo` FOREIGN KEY (`idedo`) REFERENCES `estado` (`idedo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `idgi` FOREIGN KEY (`idgi`) REFERENCES `giroemp` (`idgi`) ON UPDATE CASCADE,
  CONSTRAINT `idpuesto` FOREIGN KEY (`idpuesto`) REFERENCES `puesto` (`idpuesto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `idrc` FOREIGN KEY (`idrc`) REFERENCES `rolcargo` (`idrc`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.personal: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` (`idp`, `usuario`, `contra`, `nomp`, `app`, `email`, `idpuesto`, `idedo`, `idgi`, `idrc`, `status`, `edita`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(2, 'wendy28', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Wendy', 'Vicente Gutierez', 'wendy28@gmail.com', 1, 7, 1, 1, 1, 3, NULL, NULL, NULL, 0),
	(3, 'Naomi28', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Naomi', 'Vicente Gutierrez', 'naomi28@gmail.com', 1, 20, 1, 13, 1, 3, NULL, NULL, NULL, 0),
	(4, 'Martin28', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Martin Eduardo', 'Vicente Jiménez', 'martin28@gmail.com', 1, 10, 1, 10, 1, 3, NULL, NULL, NULL, 0),
	(5, 'Edwin28', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Edwin Ricardo', 'Reyes Martinez', 'edwin28@gmail.com', 1, 7, 3, 15, 1, 3, NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.post
CREATE TABLE IF NOT EXISTS `post` (
  `idpost` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imgp` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idm` int(11) NOT NULL,
  `ids` int(11) DEFAULT NULL,
  `idb` int(11) DEFAULT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `idp` int(11) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `main` tinyint(3) unsigned NOT NULL DEFAULT 1,
  `edita` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`idpost`) USING BTREE,
  KEY `idp` (`idp`),
  KEY `FK_post_menu` (`idm`),
  KEY `FK_post_submenu` (`ids`),
  KEY `FK_post_basemenu` (`idb`),
  KEY `FK_post_personal` (`edita`) USING BTREE,
  KEY `FK6_postatus` (`status`),
  CONSTRAINT `FK6_postatus` FOREIGN KEY (`status`) REFERENCES `poststatus` (`idst`) ON UPDATE CASCADE,
  CONSTRAINT `FK_edita` FOREIGN KEY (`edita`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE,
  CONSTRAINT `FK_post_basemenu` FOREIGN KEY (`idb`) REFERENCES `basemenu` (`idb`) ON UPDATE CASCADE,
  CONSTRAINT `FK_post_menu` FOREIGN KEY (`idm`) REFERENCES `menu` (`idm`) ON UPDATE CASCADE,
  CONSTRAINT `FK_post_submenu` FOREIGN KEY (`ids`) REFERENCES `submenu` (`ids`) ON UPDATE CASCADE,
  CONSTRAINT `idp` FOREIGN KEY (`idp`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.post: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`idpost`, `imgp`, `idm`, `ids`, `idb`, `titulo`, `descripcion`, `idp`, `status`, `main`, `edita`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, '1', 1, 4, 17, 'Assumenda repud eum veniam', 'Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis. Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.', 2, 1, 1, 5, '2021-03-10 05:52:00', '2021-03-13 11:10:00', NULL, 0),
	(2, '2', 2, 12, 63, 'Explicabo magnam quibusdam.', 'Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.', 4, 1, 1, 3, '2021-03-12 11:03:02', '2021-03-13 09:27:04', NULL, 0),
	(8, '3', 6, 24, NULL, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.', 5, 1, 1, 3, '2021-03-19 14:29:18', '2021-03-19 18:29:20', NULL, 0),
	(10, '4', 1, 8, 43, ' repud eum veniam Assumenda', 'Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.', 5, 1, 1, NULL, '2021-03-19 17:27:50', '2021-03-19 17:27:56', NULL, 0);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.poststatus
CREATE TABLE IF NOT EXISTS `poststatus` (
  `idst` int(11) NOT NULL AUTO_INCREMENT,
  `descst` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idst`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.poststatus: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `poststatus` DISABLE KEYS */;
INSERT INTO `poststatus` (`idst`, `descst`) VALUES
	(1, 'Borrador'),
	(2, 'Publicado'),
	(3, 'Revision');
/*!40000 ALTER TABLE `poststatus` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.puesto
CREATE TABLE IF NOT EXISTS `puesto` (
  `idpuesto` int(11) NOT NULL AUTO_INCREMENT,
  `descpuesto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `idepto` int(11) NOT NULL,
  `modifica` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idpuesto`),
  KEY `idepto` (`idepto`),
  KEY `FK2_puesto_modifica` (`modifica`),
  CONSTRAINT `FK2_puesto_modifica` FOREIGN KEY (`modifica`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE,
  CONSTRAINT `idepto` FOREIGN KEY (`idepto`) REFERENCES `departamento` (`idepto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='puesto referente al departamento, esto se asigna al personal';

-- Volcando datos para la tabla ctldb.puesto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `puesto` DISABLE KEYS */;
INSERT INTO `puesto` (`idpuesto`, `descpuesto`, `status`, `idepto`, `modifica`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, 'publicista', 1, 1, 3, NULL, NULL, NULL, 0),
	(2, 'otro puesto', 1, 2, 3, NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `puesto` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.rolcargo
CREATE TABLE IF NOT EXISTS `rolcargo` (
  `idrc` int(11) NOT NULL AUTO_INCREMENT,
  `descc` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `idrg` int(11) NOT NULL DEFAULT 0,
  `modifica` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`idrc`),
  KEY `idrg` (`idrg`),
  KEY `FK2_rolcargo_modifica` (`modifica`),
  CONSTRAINT `FK2_rolcargo_modifica` FOREIGN KEY (`modifica`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE,
  CONSTRAINT `idrg` FOREIGN KEY (`idrg`) REFERENCES `rolgral` (`idrg`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='contiene los cargos asignados a los usuarios en el rol general';

-- Volcando datos para la tabla ctldb.rolcargo: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `rolcargo` DISABLE KEYS */;
INSERT INTO `rolcargo` (`idrc`, `descc`, `status`, `idrg`, `modifica`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, 'Super Administrador', 1, 1, 3, NULL, NULL, NULL, 0),
	(2, 'Administardor programador', 1, 1, 3, NULL, NULL, NULL, 0),
	(3, 'Administrador gestion', 1, 1, 3, NULL, NULL, NULL, 0),
	(4, 'Contenidos o redactor ', 1, 2, 3, NULL, NULL, NULL, 0),
	(5, 'Autor activo', 1, 2, 3, NULL, NULL, NULL, 0),
	(6, 'Autor privilegios', 1, 2, 3, NULL, NULL, NULL, 0),
	(7, 'Creador', 1, 2, 3, NULL, NULL, NULL, 0),
	(8, 'Corrector', 1, 2, 3, NULL, NULL, NULL, 0),
	(9, 'SEO/SEM Manager', 1, 3, 3, NULL, NULL, NULL, 0),
	(10, 'Contenidos/Copywriter', 1, 3, 3, NULL, NULL, NULL, 0),
	(11, 'Diseñador/a gráfico/a: ', 1, 3, 3, NULL, NULL, NULL, 0),
	(12, 'Supervisor', 1, 4, 3, NULL, NULL, NULL, 0),
	(13, 'Aliados', 1, 4, 3, NULL, NULL, NULL, 0),
	(14, 'Colaborador', 1, 4, 3, NULL, NULL, NULL, 0),
	(15, 'Analista', 1, 4, 3, NULL, NULL, NULL, 0),
	(16, 'Agencias', 1, 4, 3, NULL, NULL, NULL, 0),
	(17, 'Anunciante', 1, 4, 3, NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `rolcargo` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.rolgral
CREATE TABLE IF NOT EXISTS `rolgral` (
  `idrg` int(11) NOT NULL,
  `descrg` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `modifica` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`idrg`),
  KEY `FK1_rolgral_modifica` (`modifica`),
  CONSTRAINT `FK1_rolgral_modifica` FOREIGN KEY (`modifica`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='contiene los principales roles asignados a los usuarios';

-- Volcando datos para la tabla ctldb.rolgral: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `rolgral` DISABLE KEYS */;
INSERT INTO `rolgral` (`idrg`, `descrg`, `status`, `modifica`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, 'Grupo control', 1, 5, NULL, NULL, NULL, 0),
	(2, 'Grupo editores', 1, 3, NULL, NULL, NULL, 0),
	(3, 'Contenido', 1, 5, NULL, NULL, NULL, 0),
	(4, 'Grupo publicidad', 1, 3, NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `rolgral` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.submenu
CREATE TABLE IF NOT EXISTS `submenu` (
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `descs` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `idm` int(11) NOT NULL,
  `modifica` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`ids`),
  KEY `FK_submenu_menu` (`idm`),
  KEY `FK1_submenu_edita` (`modifica`) USING BTREE,
  CONSTRAINT `FK1_submenu_modifica` FOREIGN KEY (`modifica`) REFERENCES `personal` (`idp`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='contenido de menu principal';

-- Volcando datos para la tabla ctldb.submenu: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `submenu` DISABLE KEYS */;
INSERT INTO `submenu` (`ids`, `descs`, `status`, `idm`, `modifica`, `created_at`, `updated_at`, `deleted_at`, `deleted`) VALUES
	(1, 'Internacional', 1, 1, 5, NULL, NULL, NULL, 0),
	(2, 'Exposiciones', 1, 1, 5, NULL, NULL, NULL, 0),
	(3, 'Teatro', 1, 1, 5, NULL, NULL, NULL, 0),
	(4, 'Musica', 1, 1, 5, NULL, NULL, NULL, 0),
	(5, 'Arte', 1, 1, 5, NULL, NULL, NULL, 0),
	(6, 'Literatura', 1, 1, 5, NULL, NULL, NULL, 0),
	(7, 'Cine', 1, 1, 5, NULL, NULL, NULL, 0),
	(8, 'Cursos y talleres', 1, 1, 5, NULL, NULL, NULL, 0),
	(9, 'Turismo', 1, 2, 5, NULL, NULL, NULL, 0),
	(10, 'ferias', 1, 2, 5, NULL, NULL, NULL, 0),
	(11, 'Zonas Arqueologicas', 1, 2, 4, NULL, NULL, NULL, 0),
	(12, 'Paseos Culturales', 1, 2, 4, NULL, NULL, NULL, 0),
	(13, 'Descanso', 1, 2, 4, NULL, NULL, NULL, 0),
	(14, 'Rutas', 1, 2, 4, NULL, NULL, NULL, 0),
	(15, 'Todos', 1, 3, 4, NULL, NULL, NULL, 0),
	(16, 'Todos', 1, 4, 4, NULL, NULL, NULL, 0),
	(17, 'Lgtb', 1, 5, 4, NULL, NULL, NULL, 0),
	(18, 'Niños', 1, 5, 4, NULL, NULL, NULL, 0),
	(19, 'Emprendimiento', 1, 5, 4, NULL, NULL, NULL, 0),
	(20, 'Tecnologa', 1, 5, 4, NULL, NULL, NULL, 0),
	(21, 'Friki', 1, 5, 3, NULL, NULL, NULL, 0),
	(22, 'Gamer', 1, 5, 3, NULL, NULL, NULL, 0),
	(23, 'Mascotas', 1, 5, 3, NULL, NULL, NULL, 0),
	(24, 'Restaurantes', 1, 6, 3, NULL, NULL, NULL, 0);
/*!40000 ALTER TABLE `submenu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
