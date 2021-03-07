drop database if exists sapce3;
create database sapce3;
use sapce3;

CREATE TABLE estado (
  idedo int(11) NOT NULL,
  edo varchar(30) NOT NULL,
  PRIMARY KEY  (idedo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla estado
--

INSERT INTO estado (idedo, edo) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Chiapas'),
(6, 'Chihuahua'),
(7, 'Coahuila de Zaragoza'),
(8, 'Colima'),
(9, 'Distrito Federal'),
(10, 'Durango'),
(11, 'Guanajuato'),
(12, 'Guerrero'),
(13, 'Estado de Hidalgo'),
(14, 'Jalisco'),
(15, 'Estado de M?xico'),
(16, 'Michoac?n de Ocampo'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo Le?n'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'Quer?taro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz de Ignacio de la Llav'),
(31, 'Yucatán'),
(32, 'Zacatecas'),
(33, 'Estados Unidos'),
(34, 'Canad'),
(35, 'Centro Am?rica y el Caribe'),
(36, 'Sudam?rica'),
(37, 'Africa'),
(38, 'Asia'),
(39, 'Europa'),
(40, 'Ocean'),
(41, 'Otro Pa');


CREATE TABLE control (
  id int NOT NULL,
  descrip varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  opcion int NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO control VALUES
(1, 'CONTROL DE SOLICITUD DE INSCRIPCION', 1698),
(2, 'CONTROL DE ASIGNACION DE NUMERO DE CONTROL', 0),
(3, 'CONTROL DE ASIGNAR CALIFICACIONES', 1),
(4, 'CONTROL DE FICHAS', 0),
(5, 'CONTROL DE NUMERO DE HORARIO', 2130),
(6, 'http://localhost', 0),
(7, 'ESLOGAN DE OFICIOS', 0),
(8, 'CONTROL DE NUMEROS DE HORARIO EXTRAESCOLAR COM', 0),
(9, 'CONTROL DE NUMEROS DE HORARIO DE INGLES', 0),
(10, 'CONTROL DE EVALUACION DE SERVICIOS', 36),
(11, 'Control de numero de folio de horarios', 1307),
(12, '2019-2', 0);

create table periodo(
    periodo varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci not null,
    noper int,
    descper varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
    reporte varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
    predet tinyint,
    primary key(periodo)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO periodo (periodo, noper, descper, reporte, predet) VALUES
('2009-2', 1, 'AGOSTO - DICIEMBRE 2009', 'AGOSTO - DICIEMBRE 2009', 0),
('2010-1', 2, 'ENERO - JULIO 2010', 'ENERO - JULIO 2010', 0),
('2010-2', 3, 'AGOSTO - DICIEMBRE 2010', 'AGOSTO - DICIEMBRE 2010', 0),
('2011-1', 4, 'ENERO - JULIO 2011', 'ENERO - JULIO 2011', 0),
('2011-2', 5, 'AGOSTO - DICIEMBRE 2011', 'AGOSTO - DICIEMBRE 2011', 0),
('2012-1', 6, 'ENERO - JULIO 2012', 'ENERO - JULIO 2012', 0),
('2012-2', 7, 'AGOSTO - DICIEMBRE 2012', 'AGOSTO - DICIEMBRE 2012', 0),
('2013-1', 8, '05/02/2013 AL 07/06/2013', 'ENERO - JULIO 2013', 0),
('2013-2', 9, 'AGOSTO - DICIEMBRE 2013', '19/08/2013 - 06/12/2013', 0),
('2014-1', 10, 'ENERO-JULIO 2014', '', 0),
('2014-2', 11, 'AGOSTO 2014 - ENERO 2015', '23/Agosto/14 - 12/Dic/14', 0),
('2015-1', 12, 'FEBRERO - JUNIO 2015', '', 0),
('2015-2', 13, 'AGOSTO 2015 - ENERO 2016', '', 0),
('2016-1', 14, 'ENERO - JULIO 2016', '', 0),
('2016-2', 16, 'AGOSTO - DICIEMBRE 2016', '', 0),
('2016-3', 15, 'JULIO - AGOSTO 2016', '', 0),
('2017-1', 17, 'FEBRERO - JUNIO 2017', '', 0),
('2017-2', 19, 'AGOSTO - DICIEMBRE 2017', '', 0),
('2017-V', 18, 'JUNIO - AGOSTO 2017', '', 0),
('2018-1', 20, 'FEBRERO - JUNIO 2018', '', 0),
('2018-2', 22, 'AGOSTO-DICIEMBRE 2018', '', 0),
('2018-V', 21, 'JUNIO - AGOSTO 2018 / VERANO', NULL, 0),
('2019-1', 23, 'ENERO-JUNIO 2019', '28/01/19-03/06/19', 0),
('2019-2', 25, 'AGOSTO 2019 - DICIEMBRE 2019', '26/08/2019 - 13/12/19', 0),
('2019-V', 24, 'JUNIO 2019 JULIO 2019', '17/06/19-26/07/19', 0),
('2020-1', 26, 'ENERO 2020 A JUNIO 2020', '27/01/2020.-12/06/2020', 1);

CREATE TABLE personal (
  rfcp varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci not null,
  nomdoc varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  passdoc varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  dirdoc varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  teldoc varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  maildoc varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  status int,
  contra int,
  PRIMARY KEY  (rfcp)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO personal VALUES
('AAHC8205301RA', 'LIC. ARAIZA HERRERA CINTHYA BERENICE', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '', '', '', 1, 0),
('ADRIANA', 'M. B. A. LUZ ADRIANA ESPINOSA SAMANIEGO', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', NULL, NULL, NULL, 1, 0),
('ALBERTO', 'LIC. SALMERON PEREZ ALBERTO JOVANNY', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 1, NULL),
('AMERICA', 'M. EN T. A.  GALLEGOS PEREZ AMERICA', 'c15eb4b55bd000f4a876c1d715bee42e62b3e576', '', '', '', 1, 0),
('ANA LILIA', 'MC.ANA LILIA LOPEZ VALDEZ', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('ANGEL', 'LIC. ANDRES MORALES ANGEL', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 1, NULL),
('ARMANDO', 'MATL. MONTES RIVERA ARMANDO', 'fbf180f26a64c0f074aba4e6fff4559d95575076', '', '', '', 1, 0),
('ARTURO', 'ING. FABIAN ARTURO CHAVARRIA LOMELI', '05c4710597a3245dae9fa4aac843f9be67375165', NULL, NULL, NULL, 1, 0),
('CACP850919UE5', 'LIC. CASTILLO CASTILLO PABLO', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'CENTAURO DEL NORTE', '5532414631', 'PABLO_1934@HOTMAIL.COM', 1, 1),
('CAGE780609IT8', 'QUIM. CANEDA GUZMAN ENRIQUE', 'd8803bb019f77ad8819e71b65424de7afe7910d0', '', '', '', 1, 0),
('CESAR', 'M. ISC. CESAR ALEJANDRO LOPEZ CASTAÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', NULL, NULL, NULL, 0, 0),
('CLAUDIA', 'REYES AVENDA?O CLAUDIA GABRIELA', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 1, NULL),
('COAP660518Q7A', 'LIC. PASCUAL CORAZA AGUIRRE', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, 0, 0),
('COPA630507HU9', 'ING. JOSE ANTONIO CONEJO PLATA', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, 0),
('CUBS740623', 'ING. SALVADOR CUEVAS BUSTOS', '4c1a1ea5815ea71ff728de121042b68877a6ee2f', NULL, NULL, NULL, 1, 0),
('CUELLAR', 'HUGO ERNESTO CUELLAR CARREON', '13e47666aeb1620ce1a81fead825fc6795293b0f', NULL, NULL, NULL, 1, NULL),
('DARIO', 'DARIO EMILIANO MENDOZA AVILA', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, 1, 0),
('DAVID', 'ING. RONQUILLO ARVIZU REY DAVID', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', 1, 0),
('DIEGO', 'LIC. ANTERO REYES DIEGO', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 1, NULL),
('DIVISION', 'DIVISION DE ESTUDIOS PROFESIONALES', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 1, 1),
('EERI830617J66', 'LIC. ECHEVERRIA RODRIGUEZ ISMAEL', 'db80b5b3cae5f079382e150d855da2d96908fee6', NULL, NULL, NULL, 1, 0),
('FABIAN', 'M. EN T.A. FABIAN GABRIEL PANTOJA NERIA', 'c15eb4b55bd000f4a876c1d715bee42e62b3e576', '', '', '', 1, 0),
('FEDERICO', 'ING. FEDERICO MEJIA CRUZ', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', NULL, NULL, NULL, 1, 0),
('FOLE820216Q45', 'LIC. FLORES LOPEZ EVA MARIA', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', '', '', '', 1, 0),
('FRANCISCO', 'ING. FRANCISCO MUNOZ BUSTOS', '30eb3272ef80dbd3affe8485925b4972164af439', NULL, NULL, NULL, 1, 0),
('GAAE850211UI7', 'FIS. EDUARDO GARCIA AMADOR', '2c6b6a1d0d76227b69f40c8f8548fc16bf97c8e5', '', '', '', 1, 0),
('GAOR770112', 'LIC. GARCIA ORTIZ REBECA ESTHER', 'fd1518f063f1067313eb950f97c3553c1987c123', '', '', '', 1, 0),
('GAWA7903109G4', 'LIC. GARCIA WALLE ANA CELSA', '19865795547116ae27f09115e72c74d2c517d0b2', '', '', 'CELSA_1507@HOTMAIL.COM', 1, 0),
('GERARDO', 'ING. PRADEL MU?OZ GERARDO', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 1, NULL),
('GOAI831020UY4', 'ING. GOMEZ AYALA IVAN ALEJANDRO', '293096c1c15e77a15fd19982b857a3507a890b81', NULL, NULL, NULL, 1, 0),
('HUGO', 'LIC. HUGO MACIAS MACEDO', '7e91fc74bdce4a3f16e20ba0a17815f93b37cf9f', NULL, NULL, NULL, 1, 0),
('INTERINO1', 'INTERINO1', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, NULL),
('INTERINO10', 'INTERINO10', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, NULL),
('INTERINO11', 'INTERINO11', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, NULL),
('INTERINO12', 'INTERINO12', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, NULL),
('INTERINO13', 'INTERINO13', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('INTERINO2', 'MC.ANA LILIA LOPEZ VALDEZ', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, NULL),
('INTERINO3', 'INTERINO3', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('INTERINO4', 'INTERINO4', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('INTERINO5', 'INTERINO5', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('INTERINO6', 'INTERINO6', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('INTERINO7', 'INTERINO7', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('INTERINO8', 'INTERINO8', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('INTERINO9', 'INTERINO9', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 0, NULL),
('ISELA', 'ING. ARELLANO GAMEZ ROSA ISELA', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 0, NULL),
('ITZEL', 'LIC. ITZEL CHAVARRIA SALINAS', '86649e5b48f410fa7f51222d1c93ea0fc248210c', NULL, NULL, NULL, 1, 0),
('JARR790328', 'ING. ROBERTO JARDON RODRIGUEZ', 'bfe54caa6d483cc3887dce9d1b8eb91408f1ea7a', NULL, NULL, NULL, 1, 0),
('JENNY', 'LIC. JENNY JANETE ESPINOSA ALVAREZ', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, 0),
('JESSICA', 'JESSICA YVONNE LUNA GALLEGOS', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, NULL),
('JILW840910VC2', 'ING. JIMENEZ LOPEZ WILLIAM', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', '', '', '', 1, 0),
('JONH', 'ING. YONATHAN ANGEL ALMANZA SANCHEZ', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', NULL, NULL, NULL, 1, 0),
('JOSE LUIS', 'LIC. JOSE LUIS ESTRADA GONZALES', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, NULL),
('KARINA', 'LIC. KARINA LÃ“PEZ ANDRES', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, 1, 1),
('LABE8408304C1', 'LIC. EDITH LLAMAS BECERRIL', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', NULL, NULL, NULL, 0, 0),
('LOCJ700629GE6', 'LIC. LOPEZ CRUZ JUANA BEATRIZ', '348162101fc6f7e624681b7400b085eeac6df7bd', '', '', '', 1, 0),
('LOCM820210152', 'ING. LOPEZ CELAYA MICHEL', 'dd5fef9c1c1da1394d6d34b248c51be2ad740840', '', '5560272484', 'MITCHESS25@HOTMAIL.COM', 1, 0),
('LUISALBERT', 'ING. LUIS ALBERTO SOLORZANO LUVIANO', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', NULL, NULL, NULL, 1, 1),
('MARANITO', 'MC. JUANA SANCHEZ OSORIO', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', NULL, NULL, NULL, 1, 0),
('MARCOS', 'LIC. MARCOS EDGAR BERNAL TAPIA', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', NULL, NULL, NULL, 0, 0),
('MARIA', 'MARIA DEL ROSARIO RODRIGUEZ VASQUEZ', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL),
('MARIO', 'LIC. MARIO ESQUIVEL GOMEZ', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, 0, 0),
('MARTHA', 'LIC. MARTHA BAZAN BETANZOS', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', NULL, NULL, NULL, 0, 0),
('MARTIN', 'ING. MARTIN RONQUILLO ARVIZU', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', '', '', '', 0, NULL),
('MERA881111NY7', 'LIC. ATZIRI YERALDIN MERLO RODR?GUEZ', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', NULL, NULL, NULL, 1, 0),
('MOCM721003', 'M.D. MONICA MONTANEZ CRUZ', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, 1, 0),
('NAHIM', 'MIC. DE LUNA MENDOZA NAIM', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 1, NULL),
('NC', 'CONTADORA', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, NULL, NULL, NULL),
('NO', 'POR ASIGNAR', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 1, NULL),
('NOHEMI', 'DRA. NOHEMÃ', 'ebb57006b88f48ea953d2cc9ebd4ff071bb986f0', NULL, NULL, NULL, 1, 1),
('OCTAVIO', 'ING. OCTAVIO CIENEGA CACERES', '8cb2237d0679ca88db6464eac60da96345513964', NULL, NULL, NULL, 1, 0),
('OOCR750829AF4', 'ING. OROZCO CELAYA ROBERTO', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', '', '', '', 1, 0),
('PRISCO', 'LIC. QUETZALCOATL PRISCO TORRES', '13e47666aeb1620ce1a81fead825fc6795293b0f', NULL, NULL, NULL, NULL, NULL),
('PUGA', 'ING. ANGEL EDUARDO RIVERA PUGA', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, 0, 0),
('RAPT7803212E2', 'MC. RAMIREZ PALMA TANIA ANGELICA', '86649e5b48f410fa7f51222d1c93ea0fc248210c', '', '', '', 1, 0),
('RIRL840211QA7', 'LIC. RINCON REAL LOURDES VIVIANA', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 1, NULL),
('ROAP4503305N6', 'LIC. PEDRO REGULO ROMO ALTAMIRANO', 'e26973e6ee8ab9cd8cb3f207d1b90f00d2669eff', '', '', '', 1, 0),
('ROGELIO', 'ING. CERVANTES ORTEGA ROGELIO', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', 1, 0),
('ROSARIO', 'QUIM. RAMIREZ PALMA MARIA DEL ROSARIO', '0babfd72b0f49bc2a65f833ebb4d183898b058af', '', '', '', 1, 0),
('RUCR830314FDA', 'ING. RUIZ CASTILLO RAFAEL', '86996514ba68aef84ddc8b72417318711cb4dcd0', '', '', '', 1, 0),
('SOGC8411097R7', 'LIC. SOSA GUZMAN CLAUDIA PATRICIA', '251dff5656f0f3e180db1b739b830feca9445d04', '', '', '', 1, 0),
('thishouldn', 'ZAP', '2ab9e73848a9934560caf045e0c8ef672008c6c6', NULL, NULL, NULL, 1, NULL),
('TOSCANO', 'TOSCANO', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 0, NULL),
('TUN', 'LIC. JULIAN ROMO TUN', 'f97a2c6cf3e600f0fa7a618159e29d0480061251', NULL, NULL, NULL, 1, 0),
('VAPM820913890', 'LIC. VACA PARRA MARIA', 'fbf180f26a64c0f074aba4e6fff4559d95575076', '', '', '', 1, 0),
('VIJV850720RV1', 'LIC. VICENTE JIMENEZ VICTOR IVAN', '2ab9e73848a9934560caf045e0c8ef672008c6c6', 'CENTAURO', '123', 'WELCAREA', 1, 1),
('VINCULACION', 'PLANEACION Y VINCULACION', '7be07aaf460d593a323d0db33da05b64bfdcb3a5', NULL, NULL, NULL, 1, 1),
('VIVL780905TG1', 'LIC. VICENTE VASQUEZ LUCELY', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '', 1, 0),
('YADIRA', 'TRINIDAD BELLO GLORIA YADIRA', '2ab9e73848a9934560caf045e0c8ef672008c6c6', '', '', '', 0, NULL);

CREATE TABLE cargo (
  idc varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  nomc varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (idc)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO cargo (idc, nomc) VALUES
('ACAD', 'SUBDIRECCION ACADEMICA'),
('ADM', 'SUBDIRECCION DE SERVICIOS ADMINISTRATIVOS'),
('CBAS', 'DEPARTAMENTO DE CIENCIAS BASICAS'),
('CI', 'DEPARTAMENTO DE CENTRO DE INFORMACION'),
('DEP', 'DIVISION DE ESTUDIOS PROFESIONALES'),
('DIR', 'DIRECCION'),
('ECOAD', 'DEPARTAMENTO DE CIENCIAS ECONOMICO ADMINISTRATIVAS'),
('EXT', 'DEPARTAMENTO DE ACTIVIDADES EXTRAESCOLARES'),
('ING', 'DEPARTAMENTO DE INGENIERIAS'),
('PLAN', 'SUBDIRECCION  DE PLANEACION Y VINCULACION'),
('PPP', 'DEPARTAMENTO DE PLANEACION,PROGRAMACION Y PRESUPUESTACION'),
('RF', 'DEPARTAMENTO DE RECURSOS FINANCIEROS '),
('RH', 'DEPARTAMENTO DE RECURSOS  HUMANOS'),
('RMAT', 'DEPARTAMENTO DE  RECURSOS MATERIALES  Y SERVICIOS'),
('SE', 'DEPARTAMENTO DE SERVICIOS ESCOLARES'),
('CTIC', 'COORDINADOR DE CARRERA TICS'),
('CADM', 'COORDINADOR DE CARRERA ADMINISTRACION'),
('CLOG', 'COORDINADOR DE CARRERA LOGISTICA'),
('VIN', 'DEPARTAMENTO DE GESTION TECNOLOGICA  Y VINCULACION');

create table encarga(
  idc varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  rfcp varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  fini date,
  ffin date,
  status int,
  primary key(idc,rfcp),
  foreign key (idc) references cargo(idc) on update cascade on delete cascade,
  foreign key (rfcp) references personal(rfcp) on update cascade on delete cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO encarga (idc, rfcp, fini, status,ffin) VALUES
('CI', 'AAHC8205301RA', '0000-00-00', 1, '0000-00-00'),
('DEP', 'FOLE820216Q45', '0000-00-00', 1, '0000-00-00'),
('RF', 'SOGC8411097R7', '0000-00-00', 1, '0000-00-00'),
('VIN', 'ITZEL', '2020-03-02', 1, '2020-02-02'),
('VIN', 'MERA881111NY7', '0000-00-00', 0, '2020-02-02');

create table rol(
 idr int not null primary key,
 tipo varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
insert into rol (idr, tipo) values 
(1,'Administrador'),
(2,'Control Escolar'),
(3,'Subdirección'),
(4,'Division de Estudios Profesionales'),
(5,'Vinculación'),
(6,'Recursos Financieros'),
(7,'Desarrollo Académico');

create table permisos(
    rfcp varchar(13) CHARACTER SET utf8 COLLATE utf8_spanish_ci not null,
    idr int not null,
    status tinyint,
    primary key(rfcp, idr),
    FOREIGN KEY(rfcp) REFERENCES personal(rfcp) on update cascade on delete cascade,
    FOREIGN KEY(idr) REFERENCES rol(idr) on update cascade on delete cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT into permisos (rfcp, idr, status) values 
('CUBS740623',1,1),
('CACP850919UE5',2,1),
('LOCM820210152',3,1),
('FOLE820216Q45',4,1);

CREATE TABLE carrera (
  idcar varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  descar varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  status tinyint,
  credito int,
  cvec varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  reticula varchar(4) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (idcar)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO carrera (idcar, descar, status, credito, cvec, reticula) VALUES
('IADM-2010-213', 'INGENIER?A EN ADMINISTRACI?N', 1, 260, '001', '2010'),
('ILOG-2009-202', 'INGENIERIA EN LOGISTICA', 1, 260, '003', '2009'),
('ITIC-2010-225', 'INGENIERIA EN TECNOLOGIAS DE LA INFORMACION Y COMUNICACIONES', 1, 260, '002', '2010'),
('POR ASIGNAR', 'CARRERA SIN ASIGNAR', 1, NULL, NULL, NULL);

CREATE TABLE alumno (
  matricula varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  nom varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  app varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  apm varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  sexo varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci ,
  curp varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  dialecto int,
  fecnac date default NULL,
  edociv varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  otro varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  calle varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  colonia varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  idedo int,
  ciudad varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  cp varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  telal varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  email varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  idesc int,
  otesc varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  prepa varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  propre float default NULL,
  secu varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  prose float default NULL,
  idcar varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  passal varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  status int(11) default NULL,
  nomtut varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  dirtut varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  teltut varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  insc tinyint(4) NOT NULL,
  bandera int(11) default NULL,
  fecalta date default NULL,
  discap int(11) default NULL,
  proc varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (matricula),
  KEY matricula (matricula),
  KEY idcar (idcar),
  FOREIGN KEY (idcar) REFERENCES carrera (idcar) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE especialidad (
  idesp varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  nomesp varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  status int,
  idcar varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (idesp),
  KEY idcar (idcar)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO especialidad (idesp, nomesp, status, idcar) VALUES
('IADM1', 'PRIMERA ESP DE ADMINISTRACION', 0, 'IADM-2010-213'),
('IADM2', 'SEGUNDA ESP ADMINISTRACION', 1, 'IADM-2010-213'),
('IADM3', 'ALTA DIRECCION E INTELIGENCIA ESTRATEGICA', 1, 'IADM-2010-213'),
('ILOG1', 'PRIMERA ESPECIALIDAD DE LOGISTICA', 0, 'ILOG-2009-202'),
('ILOG2', 'SEGUNDA ESP LOGISTICA', 1, 'ILOG-2009-202'),
('ILOG3', 'SEGURIDAD INDUSTRIAL', 1, 'ILOG-2009-202'),
('ITIC1', 'PRIMERA ESP EN TICS', 0, 'ITIC-2010-225'),
('ITIC2', 'SEGUNDA ESP EN TICS', 1, 'ITIC-2010-225'),
('ITIC3', 'DESARROLLO GESTION DE SISTEMAS Y DISPOSITIVOS ELECTRONICOS AVANZADOS', 1, 'ITIC-2010-225');



CREATE TABLE materia (
  idmat varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  nommat varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  credit int,
  habil tinyint,
  depto varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  unid int,
  cred varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  idesp varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (idmat)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE posee (
  idcar varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  idmat varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  sem int,
  cven varchar(7) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  tipom int,
  prerre int,
  ht int,
  hp int,
  orden int,
  renglon int,
  status varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (idcar,idmat),
  FOREIGN KEY (idcar) REFERENCES carrera (idcar) ON UPDATE CASCADE,
  FOREIGN KEY (idmat) REFERENCES materia (idmat) ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE oportunidad (
  opor int NOT NULL,
  descopor varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (opor)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE aula (
  ida int NOT NULL,
  aula varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (ida)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE semana (
  idia int(11) NOT NULL,
  dia varchar(10) default NULL,
  PRIMARY KEY  (idia)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO semana (idia, dia) VALUES
(1, 'LUNES'),
(2, 'MARTES'),
(3, 'MIERCOLES'),
(4, 'JUEVES'),
(5, 'VIERNES');

CREATE TABLE reloj (
idr int(11) NOT NULL,
hora varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
PRIMARY KEY (idr)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO reloj (idr, hora) VALUES
(1, '07-08'),
(2, '08-09'),
(3, '08-09'),
(4, '09-10'),
(5, '10-11'),
(6, '11-12'),
(7, '12-13'),
(8, '13-14'),
(9, '14-15'),
(10, '15-16'),
(11,'16-17'),
(12,'17-18'),
(13,'18-19'),
(14,'19-20'),
(15,'20-21');

CREATE TABLE horario (
  idh int NOT NULL,
  rfcp varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  idmat varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  periodo varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  num int ,
  cupo int ,
  folio varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY  (idh),
  KEY periodo (periodo),
  FOREIGN KEY (rfcp) REFERENCES personal (rfcp) ON UPDATE CASCADE,
  FOREIGN KEY (idmat) REFERENCES materia (idmat) ON UPDATE CASCADE,
  FOREIGN KEY (periodo) REFERENCES periodo (periodo) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE imparte (
  idh int(11) NOT NULL,
  idia int(11) NOT NULL,
  idr int(11) NOT NULL,
  ida int(11) NOT NULL,
  PRIMARY KEY  (idh,idia,idr,ida),
  KEY idh (idh),
  KEY idia (idia),
  KEY idr (idr),
  KEY ida (ida)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE cursa (
  idh int NOT NULL,
  matricula varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  opor int,
  fecing date,
  asigna varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  eval int,
  po1 float,
  so1 float,
  po2 float,
  so2 float,
  po3 float,
  so3 float,
  po4 float,
  so4 float,
  po5 float,
  so5 float,
  po6 float,
  so6 float,
  po7 float,
  so7 float,
  po8 float,
  so8 float,
  po9 float,
  so9 float,
  deser int,
  prom float,
  pso int,
  PRIMARY KEY  (idh,matricula,opor),
  KEY idh (idh,matricula),
  FOREIGN KEY (idh) REFERENCES horario (idh) ON UPDATE CASCADE,
  FOREIGN KEY (matricula) REFERENCES alumno (matricula) ON UPDATE CASCADE,
  FOREIGN KEY (opor) REFERENCES oportunidad (opor) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;