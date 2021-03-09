-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.17-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
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
  PRIMARY KEY (`idb`),
  KEY `FK__submenu` (`ids`),
  CONSTRAINT `FK__submenu` FOREIGN KEY (`ids`) REFERENCES `submenu` (`ids`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='contenido de los submenus';

-- Volcando datos para la tabla ctldb.basemenu: ~90 rows (aproximadamente)
/*!40000 ALTER TABLE `basemenu` DISABLE KEYS */;
INSERT INTO `basemenu` (`idb`, `descb`, `status`, `ids`) VALUES
	(1, 'Embajadas', 1, 1),
	(2, 'Organizaciones', 1, 1),
	(3, 'Secretarias', 1, 1),
	(4, 'Museos', 1, 2),
	(5, 'Galerias de Arte', 1, 2),
	(6, 'Centro Culturales', 1, 2),
	(7, 'Casas de cultura', 1, 2),
	(8, 'Infantil', 1, 3),
	(9, 'Inbal', 1, 3),
	(10, 'Cenart', 1, 3),
	(11, 'Unam', 1, 3),
	(12, 'Cartelera de teatro', 1, 3),
	(13, 'Teatro musical', 1, 3),
	(14, 'Otros', 1, 3),
	(15, 'Conciertos', 1, 4),
	(16, 'Orquestas', 1, 4),
	(17, 'Pop', 1, 4),
	(18, 'Festivales', 1, 4),
	(19, 'Recitales', 1, 4),
	(20, 'Clasica', 1, 4),
	(21, 'Sinfonicas', 1, 4),
	(22, 'Operas', 1, 4),
	(23, 'Pinturas', 1, 5),
	(24, 'Artistas Plasticos', 1, 5),
	(25, 'Arte', 1, 5),
	(26, 'Danza', 1, 5),
	(27, 'Presentaciones libro', 1, 6),
	(28, 'lecturas', 1, 6),
	(29, 'Recitales', 1, 6),
	(30, 'Club de lectura', 1, 6),
	(31, 'Narraciones', 1, 6),
	(32, 'Festivales', 1, 6),
	(33, 'Ferias de libros', 1, 6),
	(34, 'Clasico', 1, 7),
	(35, 'Niños', 1, 7),
	(36, 'Festivales', 1, 7),
	(37, 'Cineteca Nacional', 1, 7),
	(38, 'Cine comercial', 1, 7),
	(39, 'La casa del cine', 1, 7),
	(40, 'Filmoteca Unam', 1, 7),
	(41, 'Historia', 1, 8),
	(42, 'Galerias de Arte', 1, 8),
	(43, 'Centro Culturales', 1, 8),
	(44, 'Casas de cultura', 1, 8),
	(45, 'Otros', 1, 8),
	(46, 'Zonas culturales', 1, 9),
	(47, 'Zonas Arqueologicas', 1, 9),
	(48, 'Zonas Recreativas', 1, 9),
	(49, 'Zonas ecologicas', 1, 9),
	(50, 'Zonas Escolares', 1, 9),
	(51, 'Zonas senderismo', 1, 9),
	(52, 'regionales', 1, 10),
	(53, 'ferias del libro', 1, 10),
	(54, 'Feria de turismo', 1, 10),
	(55, 'otros', 1, 10),
	(56, 'Rutas', 1, 11),
	(57, 'Rcomendaciones', 1, 11),
	(58, 'Descubrimientos', 1, 11),
	(59, 'Destinos', 1, 11),
	(60, 'Reportajes', 1, 11),
	(61, 'Zonas Arqueologicas (Inah)', 1, 12),
	(62, 'Rutas (varias)', 1, 12),
	(63, 'Visitas Guiadas Museos', 1, 12),
	(64, 'Recomendaciones', 1, 13),
	(65, 'Rutas del queso y vino', 1, 14),
	(66, 'Ruta Zapata', 1, 14),
	(67, 'Ruta Centro Historico', 1, 14),
	(68, 'Ruta Conventos', 1, 14),
	(69, 'Ruta Museos', 1, 14),
	(70, 'Ruta Galerias', 1, 14),
	(71, 'Ruta Xochimilco', 1, 14),
	(72, 'Visitas Guiadas', 1, 14),
	(73, 'reportajes', 1, 15),
	(74, 'invitaciones', 1, 15),
	(75, 'videos', 1, 15),
	(76, 'Cursos y talleres', 1, 15),
	(77, 'Lugares', 1, 17),
	(78, 'Recomendaciones', 1, 17),
	(79, 'Gamer', 1, 17),
	(80, 'Turismo', 1, 17),
	(81, 'cultura empresarial', 1, 19),
	(82, 'avances tecnologicos', 1, 20),
	(83, 'manga', 1, 21),
	(84, 'comic', 1, 21),
	(85, 'Recomendaciones', 1, 22),
	(86, 'La madriguera del Doc', 1, 22),
	(87, 'Recomendaciones', 1, 23),
	(88, 'Mejores restaurantes', 1, 23),
	(89, 'Chef ', 1, 23),
	(90, 'Recetas', 1, 23);
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

-- Volcando datos para la tabla ctldb.configurate: ~5 rows (aproximadamente)
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

-- Volcando estructura para tabla ctldb.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `idepto` int(11) NOT NULL AUTO_INCREMENT,
  `nomdepto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idepto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.departamento: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` (`idepto`, `nomdepto`, `status`) VALUES
	(1, 'Diseño', 1),
	(2, 'Recursos Humanos', 1);
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
  PRIMARY KEY (`idgi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.giroemp: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `giroemp` DISABLE KEYS */;
INSERT INTO `giroemp` (`idgi`, `descg`, `status`) VALUES
	(1, 'industrial', 1),
	(2, 'servicios', 1),
	(3, 'comercial', 1);
/*!40000 ALTER TABLE `giroemp` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `idm` int(11) NOT NULL AUTO_INCREMENT,
  `descm` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idm`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='opciones principales de menú cabecera';

-- Volcando datos para la tabla ctldb.menu: ~9 rows (aproximadamente)
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
  `idm` int(11) DEFAULT NULL,
  `idrc` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`idp`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `idm` (`idm`),
  KEY `idpuesto` (`idpuesto`),
  KEY `idedo` (`idedo`),
  KEY `idgi` (`idgi`),
  KEY `idrc` (`idrc`),
  CONSTRAINT `idedo` FOREIGN KEY (`idedo`) REFERENCES `estado` (`idedo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `idgi` FOREIGN KEY (`idgi`) REFERENCES `giroemp` (`idgi`) ON UPDATE CASCADE,
  CONSTRAINT `idm` FOREIGN KEY (`idm`) REFERENCES `menu` (`idm`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `idpuesto` FOREIGN KEY (`idpuesto`) REFERENCES `puesto` (`idpuesto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `idrc` FOREIGN KEY (`idrc`) REFERENCES `rolcargo` (`idrc`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla ctldb.personal: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` (`idp`, `usuario`, `contra`, `nomp`, `app`, `email`, `idpuesto`, `idedo`, `idgi`, `idm`, `idrc`, `status`) VALUES
	(2, 'wendy28', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Wendy', 'Vicente Gutierez', 'wendy28@gmail.com', 1, 7, 1, 9, 1, 1);
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.puesto
CREATE TABLE IF NOT EXISTS `puesto` (
  `idpuesto` int(11) NOT NULL AUTO_INCREMENT,
  `descpuesto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `idepto` int(11) NOT NULL,
  PRIMARY KEY (`idpuesto`),
  KEY `idepto` (`idepto`),
  CONSTRAINT `idepto` FOREIGN KEY (`idepto`) REFERENCES `departamento` (`idepto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='puesto referente al departamento, esto se asigna al personal';

-- Volcando datos para la tabla ctldb.puesto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `puesto` DISABLE KEYS */;
INSERT INTO `puesto` (`idpuesto`, `descpuesto`, `status`, `idepto`) VALUES
	(1, 'publicista', 1, 1),
	(2, 'otro puesto', 1, 2);
/*!40000 ALTER TABLE `puesto` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.rolcargo
CREATE TABLE IF NOT EXISTS `rolcargo` (
  `idrc` int(11) NOT NULL AUTO_INCREMENT,
  `descc` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `idrg` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idrc`),
  KEY `idrg` (`idrg`),
  CONSTRAINT `idrg` FOREIGN KEY (`idrg`) REFERENCES `rolgral` (`idrg`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='contiene los cargos asignados a los usuarios en el rol general';

-- Volcando datos para la tabla ctldb.rolcargo: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `rolcargo` DISABLE KEYS */;
INSERT INTO `rolcargo` (`idrc`, `descc`, `status`, `idrg`) VALUES
	(1, 'Super Administrador', 1, 1),
	(2, 'Administardor programador', 1, 1),
	(3, 'Administrador gestion', 1, 1),
	(4, 'Contenidos o redactor ', 1, 2),
	(5, 'Autor activo', 1, 2),
	(6, 'Autor privilegios', 1, 2),
	(7, 'Creador', 1, 2),
	(8, 'Corrector', 1, 2),
	(9, 'SEO/SEM Manager', 1, 3),
	(10, 'Contenidos/Copywriter', 1, 3),
	(11, 'Diseñador/a gráfico/a: ', 1, 3),
	(12, 'Supervisor', 1, 4),
	(13, 'Aliados', 1, 4),
	(14, 'Colaborador', 1, 4),
	(15, 'Analista', 1, 4),
	(16, 'Agencias', 1, 4),
	(17, 'Anunciante', 1, 4);
/*!40000 ALTER TABLE `rolcargo` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.rolgral
CREATE TABLE IF NOT EXISTS `rolgral` (
  `idrg` int(11) NOT NULL,
  `descrg` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`idrg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='contiene los principales roles asignados a los usuarios';

-- Volcando datos para la tabla ctldb.rolgral: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `rolgral` DISABLE KEYS */;
INSERT INTO `rolgral` (`idrg`, `descrg`, `status`) VALUES
	(1, 'Grupo control', 1),
	(2, 'Grupo editores', 1),
	(3, 'Contenido', 1),
	(4, 'Grupo publicidad', 1);
/*!40000 ALTER TABLE `rolgral` ENABLE KEYS */;

-- Volcando estructura para tabla ctldb.submenu
CREATE TABLE IF NOT EXISTS `submenu` (
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `descs` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `idm` int(11) NOT NULL,
  PRIMARY KEY (`ids`),
  KEY `FK_submenu_menu` (`idm`),
  CONSTRAINT `FK_submenu_menu` FOREIGN KEY (`idm`) REFERENCES `menu` (`idm`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='contenido de menu principal';

-- Volcando datos para la tabla ctldb.submenu: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `submenu` DISABLE KEYS */;
INSERT INTO `submenu` (`ids`, `descs`, `status`, `idm`) VALUES
	(1, 'Internacional', 1, 1),
	(2, 'Exposiciones', 1, 1),
	(3, 'Teatro', 1, 1),
	(4, 'Musica', 1, 1),
	(5, 'Arte', 1, 1),
	(6, 'Literatura', 1, 1),
	(7, 'Cine', 1, 1),
	(8, 'Cursos y talleres', 1, 1),
	(9, 'Turismo', 1, 2),
	(10, 'ferias', 1, 2),
	(11, 'Zonas Arqueologicas', 1, 2),
	(12, 'Paseos Culturales', 1, 2),
	(13, 'Descanso', 1, 2),
	(14, 'Rutas', 1, 2),
	(15, 'Todos', 1, 3),
	(16, 'Todos', 1, 4),
	(17, 'Lgtb', 1, 5),
	(18, 'Niños', 1, 5),
	(19, 'Emprendimiento', 1, 5),
	(20, 'Tecnologa', 1, 5),
	(21, 'Friki', 1, 5),
	(22, 'Gamer', 1, 5),
	(23, 'Mascotas', 1, 5),
	(24, 'Restaurantes', 1, 6);
/*!40000 ALTER TABLE `submenu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
