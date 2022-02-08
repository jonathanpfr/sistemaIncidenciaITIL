
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for area
-- ----------------------------
DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_area` varchar(40) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of area
-- ----------------------------
INSERT INTO `area` VALUES ('1', 'Finanzas', '1');
INSERT INTO `area` VALUES ('2', 'Comercialización', '1');
INSERT INTO `area` VALUES ('3', 'Recursos humanos', '1');
INSERT INTO `area` VALUES ('4', 'Producción', '1');
INSERT INTO `area` VALUES ('5', 'Tesoreria', '0');
INSERT INTO `area` VALUES ('6', 'Planillas', '0');

-- ----------------------------
-- Table structure for cargo
-- ----------------------------
DROP TABLE IF EXISTS `cargo`;
CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cargo` varchar(70) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cargo
-- ----------------------------
INSERT INTO `cargo` VALUES ('8', 'Jefe del INIA', '1');
INSERT INTO `cargo` VALUES ('9', 'Secretario General', '1');
INSERT INTO `cargo` VALUES ('10', 'Directora de la Oficina de Planeamiento', '1');
INSERT INTO `cargo` VALUES ('12', 'Directora de la Oficina de Asesoría Jurídica', '1');
INSERT INTO `cargo` VALUES ('13', 'Director de la Oficina de Administración', '1');
INSERT INTO `cargo` VALUES ('14', 'Director de la Dirección de Desarrollo Tecnológico Agrario', '1');
INSERT INTO `cargo` VALUES ('15', 'Directora de la Dirección de Recursos Genéticos y Biotecnología', '1');
INSERT INTO `cargo` VALUES ('16', 'Director de la Dirección de Gestión de la Innovación Agraria', '1');
INSERT INTO `cargo` VALUES ('17', 'Director de la Dirección de Supervisión y Monitoreo en las Estaciones ', '1');
INSERT INTO `cargo` VALUES ('18', 'Jefe del Órgano de Control Institucional', '1');
INSERT INTO `cargo` VALUES ('19', 'Procurador Público', '1');
INSERT INTO `cargo` VALUES ('20', 'Jefe de Logistica', '1');
INSERT INTO `cargo` VALUES ('21', 'Forestales', '0');
INSERT INTO `cargo` VALUES ('22', 'prueba 1', '0');

-- ----------------------------
-- Table structure for detalle_ticket
-- ----------------------------
DROP TABLE IF EXISTS `detalle_ticket`;
CREATE TABLE `detalle_ticket` (
  `id_ticket` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_incidencia` int(11) NOT NULL,
  `observacion` varchar(100) NOT NULL,
  KEY `id_ticket` (`id_ticket`),
  KEY `id_equipo` (`id_equipo`),
  KEY `id_incidencia` (`id_incidencia`),
  CONSTRAINT `detalle_ticket_ibfk_1` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`),
  CONSTRAINT `detalle_ticket_ibfk_2` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipos`),
  CONSTRAINT `detalle_ticket_ibfk_3` FOREIGN KEY (`id_incidencia`) REFERENCES `incidencia` (`id_incidencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of detalle_ticket
-- ----------------------------
INSERT INTO `detalle_ticket` VALUES ('28', '10', '4', 'no detecta la impresora no puedo enviar documentos');
INSERT INTO `detalle_ticket` VALUES ('29', '15', '3', 'el computador se reinicia solo no me deja trabajar');
INSERT INTO `detalle_ticket` VALUES ('30', '16', '2', 'no se ve bien');
INSERT INTO `detalle_ticket` VALUES ('31', '13', '1', 'red lenta');
INSERT INTO `detalle_ticket` VALUES ('32', '13', '4', 'El cable se ha roto');
INSERT INTO `detalle_ticket` VALUES ('33', '8', '4', 'la red se ha caido');
INSERT INTO `detalle_ticket` VALUES ('34', '15', '5', 'virus');
INSERT INTO `detalle_ticket` VALUES ('35', '13', '1', 'se movio el switch');
INSERT INTO `detalle_ticket` VALUES ('36', '5', '1', '');
INSERT INTO `detalle_ticket` VALUES ('37', '5', '3', 'el switch se apago');
INSERT INTO `detalle_ticket` VALUES ('38', '14', '3', 'el switch se apago');
INSERT INTO `detalle_ticket` VALUES ('39', '15', '2', 'esta saliendo humo del monitor');
INSERT INTO `detalle_ticket` VALUES ('40', '14', '3', 'a veces deja de funcionar');
INSERT INTO `detalle_ticket` VALUES ('41', '15', '3', 'prueba wolf');
INSERT INTO `detalle_ticket` VALUES ('42', '16', '1', 'prueba final');
INSERT INTO `detalle_ticket` VALUES ('43', '13', '1', 'bhbjbkb');
INSERT INTO `detalle_ticket` VALUES ('44', '13', '1', 'kjgkjbkj');
INSERT INTO `detalle_ticket` VALUES ('45', '13', '1', 'wewr');
INSERT INTO `detalle_ticket` VALUES ('46', '13', '1', '');
INSERT INTO `detalle_ticket` VALUES ('47', '13', '1', '');
INSERT INTO `detalle_ticket` VALUES ('48', '13', '1', '');
INSERT INTO `detalle_ticket` VALUES ('49', '13', '1', '');
INSERT INTO `detalle_ticket` VALUES ('50', '13', '1', '');
INSERT INTO `detalle_ticket` VALUES ('51', '14', '3', 'el computador se demora en el registr de datos ..sale en blanco');
INSERT INTO `detalle_ticket` VALUES ('52', '16', '5', 'xxxxxxxxxxxx');
INSERT INTO `detalle_ticket` VALUES ('53', '13', '4', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
INSERT INTO `detalle_ticket` VALUES ('54', '13', '1', 'jajajajajajjajjjajjaa');
INSERT INTO `detalle_ticket` VALUES ('55', '14', '3', 'urgente');
INSERT INTO `detalle_ticket` VALUES ('56', '15', '3', 'urgente');
INSERT INTO `detalle_ticket` VALUES ('57', '14', '3', 'Urgente necesito imprimir');
INSERT INTO `detalle_ticket` VALUES ('58', '16', '2', 'si o si');
INSERT INTO `detalle_ticket` VALUES ('59', '13', '1', 'aaaaaaasasas');
INSERT INTO `detalle_ticket` VALUES ('60', '13', '1', 'aaaaaaaaaaaaaaaaaaaaaaaaaa');
INSERT INTO `detalle_ticket` VALUES ('61', '13', '1', 'j');
INSERT INTO `detalle_ticket` VALUES ('62', '13', '1', '');
INSERT INTO `detalle_ticket` VALUES ('63', '13', '1', 'x');
INSERT INTO `detalle_ticket` VALUES ('64', '13', '1', 'w');
INSERT INTO `detalle_ticket` VALUES ('65', '13', '1', 'r');
INSERT INTO `detalle_ticket` VALUES ('66', '13', '1', 'lala');
INSERT INTO `detalle_ticket` VALUES ('67', '13', '1', '1');
INSERT INTO `detalle_ticket` VALUES ('68', '13', '1', '2');
INSERT INTO `detalle_ticket` VALUES ('69', '13', '1', '10');
INSERT INTO `detalle_ticket` VALUES ('70', '13', '1', 'para');
INSERT INTO `detalle_ticket` VALUES ('71', '13', '1', 'ajajaj');
INSERT INTO `detalle_ticket` VALUES ('72', '13', '1', 'jose cutti');
INSERT INTO `detalle_ticket` VALUES ('73', '13', '1', 'prueba espera ticket');
INSERT INTO `detalle_ticket` VALUES ('74', '5', '1', 'prueba aver si funka');
INSERT INTO `detalle_ticket` VALUES ('75', '5', '1', 'qqqqqqqqqqqqqqqq');
INSERT INTO `detalle_ticket` VALUES ('76', '16', '3', 'no se puede escribir bien ayuda por favor');
INSERT INTO `detalle_ticket` VALUES ('77', '13', '1', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');
INSERT INTO `detalle_ticket` VALUES ('78', '13', '1', 'jjjjjjj');
INSERT INTO `detalle_ticket` VALUES ('79', '13', '1', 'ddddddddddddddddddd');
INSERT INTO `detalle_ticket` VALUES ('80', '14', '3', 'no hay bd');
INSERT INTO `detalle_ticket` VALUES ('81', '15', '2', 'se quemo el cable');
INSERT INTO `detalle_ticket` VALUES ('82', '16', '5', 'Hubo un corto circuito');
INSERT INTO `detalle_ticket` VALUES ('83', '14', '3', 'salen muchas ventanas');
INSERT INTO `detalle_ticket` VALUES ('84', '15', '3', 'entro virus creo');
INSERT INTO `detalle_ticket` VALUES ('85', '15', '2', 'se quemo el cable');
INSERT INTO `detalle_ticket` VALUES ('86', '14', '2', 'uuuuuuuuuuu');
INSERT INTO `detalle_ticket` VALUES ('87', '14', '1', 'Esta lento');
INSERT INTO `detalle_ticket` VALUES ('88', '15', '2', 'Urgente');
INSERT INTO `detalle_ticket` VALUES ('89', '14', '2', 'vengan rapido');
INSERT INTO `detalle_ticket` VALUES ('90', '14', '3', '32442');
INSERT INTO `detalle_ticket` VALUES ('91', '15', '2', '23242');
INSERT INTO `detalle_ticket` VALUES ('92', '14', '2', 'fdgdfgdf');
INSERT INTO `detalle_ticket` VALUES ('93', '7', '2', '3243');
INSERT INTO `detalle_ticket` VALUES ('94', '15', '1', 'dsda');
INSERT INTO `detalle_ticket` VALUES ('95', '13', '1', '11111111111111');
INSERT INTO `detalle_ticket` VALUES ('96', '15', '1', 'sdfsdf');
INSERT INTO `detalle_ticket` VALUES ('97', '15', '3', '23324243');
INSERT INTO `detalle_ticket` VALUES ('98', '14', '1', '23424');
INSERT INTO `detalle_ticket` VALUES ('99', '14', '3', 'aaaaaaaaaaaaaaaaa');
INSERT INTO `detalle_ticket` VALUES ('100', '15', '2', '3434');
INSERT INTO `detalle_ticket` VALUES ('101', '14', '5', 'se fue la luz');
INSERT INTO `detalle_ticket` VALUES ('102', '14', '1', 'xxxxxx');
INSERT INTO `detalle_ticket` VALUES ('103', '13', '3', 'dsfsfs');
INSERT INTO `detalle_ticket` VALUES ('104', '13', '2', 'aaaaaaaaaaaaa');
INSERT INTO `detalle_ticket` VALUES ('105', '14', '3', 'el monitor  se lagea mucho ');
INSERT INTO `detalle_ticket` VALUES ('106', '14', '2', 'qqqqqqqqqq');
INSERT INTO `detalle_ticket` VALUES ('107', '15', '3', 'se lageo el teclado');
INSERT INTO `detalle_ticket` VALUES ('108', '14', '3', 'se  reinicia  solo');
INSERT INTO `detalle_ticket` VALUES ('109', '14', '3', 'prueba de abel ');
INSERT INTO `detalle_ticket` VALUES ('110', '13', '2', 'se mueve mucho');
INSERT INTO `detalle_ticket` VALUES ('111', '14', '4', 'necesito presentar reportes');
INSERT INTO `detalle_ticket` VALUES ('112', '14', '2', 'una ves vi a un señor que lo echo agua aki');
INSERT INTO `detalle_ticket` VALUES ('113', '14', '3', 'asasasas');
INSERT INTO `detalle_ticket` VALUES ('114', '16', '4', 'asadsadasdasdasa');
INSERT INTO `detalle_ticket` VALUES ('115', '15', '2', 'qqqqqqqqqqssssssssssssssss');
INSERT INTO `detalle_ticket` VALUES ('116', '14', '2', 'aaaaaaaaaaaaa');
INSERT INTO `detalle_ticket` VALUES ('117', '14', '1', 'se acaba de reiniciar  y quiero recuperar mis datos para mandarle a un jefe');
INSERT INTO `detalle_ticket` VALUES ('118', '15', '1', 'aaaaaaaaa');
INSERT INTO `detalle_ticket` VALUES ('119', '14', '2', 'vengan rapido necesito hacer reportes');
INSERT INTO `detalle_ticket` VALUES ('120', '16', '3', 'necesito hacer reportes vengan rapido por favor');
INSERT INTO `detalle_ticket` VALUES ('121', '14', '3', 'a');
INSERT INTO `detalle_ticket` VALUES ('122', '14', '5', 'b');
INSERT INTO `detalle_ticket` VALUES ('123', '13', '3', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa');
INSERT INTO `detalle_ticket` VALUES ('124', '13', '1', 'URGENTE');
INSERT INTO `detalle_ticket` VALUES ('125', '16', '2', 'no me cuadra la informacion mostrada');
INSERT INTO `detalle_ticket` VALUES ('126', '14', '2', 'URGENTE');
INSERT INTO `detalle_ticket` VALUES ('127', '15', '1', 'no sale google');
INSERT INTO `detalle_ticket` VALUES ('128', '14', '5', 'la computadora no prende');
INSERT INTO `detalle_ticket` VALUES ('129', '14', '5', 'MI MONITOR NO PRENDE');
INSERT INTO `detalle_ticket` VALUES ('130', '14', '5', 'mi pantalla no prende');
INSERT INTO `detalle_ticket` VALUES ('131', '14', '5', 'la pc esta botando chispas, creoq le ha caido agua');
INSERT INTO `detalle_ticket` VALUES ('132', '14', '2', 'ninguna');
INSERT INTO `detalle_ticket` VALUES ('133', '14', '4', 'la pc se esta calentando mucho');

-- ----------------------------
-- Table structure for equipos
-- ----------------------------
DROP TABLE IF EXISTS `equipos`;
CREATE TABLE `equipos` (
  `id_equipos` int(11) NOT NULL AUTO_INCREMENT,
  `nom_equipos` varchar(40) NOT NULL,
  `id_area` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_equipos`),
  KEY `id_area` (`id_area`),
  CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of equipos
-- ----------------------------
INSERT INTO `equipos` VALUES ('1', 'PLA-PC1', '6', '1');
INSERT INTO `equipos` VALUES ('2', 'PLA-PC2', '6', '1');
INSERT INTO `equipos` VALUES ('3', 'PLA-PC3', '6', '1');
INSERT INTO `equipos` VALUES ('4', 'PLA-PC4', '6', '0');
INSERT INTO `equipos` VALUES ('5', 'FIN-PC1', '1', '1');
INSERT INTO `equipos` VALUES ('6', 'FIN-PC2', '1', '1');
INSERT INTO `equipos` VALUES ('7', 'FIN-PC3', '1', '1');
INSERT INTO `equipos` VALUES ('8', 'FIN-PC4', '1', '1');
INSERT INTO `equipos` VALUES ('9', 'FIN-PC5', '1', '1');
INSERT INTO `equipos` VALUES ('10', 'FIN-PC6', '1', '1');
INSERT INTO `equipos` VALUES ('11', 'COM-PC1', '2', '1');
INSERT INTO `equipos` VALUES ('12', 'COM-PC2', '2', '1');
INSERT INTO `equipos` VALUES ('13', 'RH-PC1', '3', '1');
INSERT INTO `equipos` VALUES ('14', 'RH-PC2', '3', '1');
INSERT INTO `equipos` VALUES ('15', 'RH-PC3', '3', '1');
INSERT INTO `equipos` VALUES ('16', 'RH-PC4', '3', '1');
INSERT INTO `equipos` VALUES ('17', 'PRO-PC1', '4', '1');
INSERT INTO `equipos` VALUES ('18', 'PRO-PC2', '4', '1');
INSERT INTO `equipos` VALUES ('19', 'PRO-PC3', '4', '1');
INSERT INTO `equipos` VALUES ('20', 'PRO-PC4', '4', '1');
INSERT INTO `equipos` VALUES ('21', 'TES-PC1', '5', '1');
INSERT INTO `equipos` VALUES ('22', 'TES-PC2', '5', '1');

-- ----------------------------
-- Table structure for estado_tec
-- ----------------------------
DROP TABLE IF EXISTS `estado_tec`;
CREATE TABLE `estado_tec` (
  `id_estado_tec` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tec_estado` varchar(40) NOT NULL,
  PRIMARY KEY (`id_estado_tec`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estado_tec
-- ----------------------------
INSERT INTO `estado_tec` VALUES ('1', 'ninguno');
INSERT INTO `estado_tec` VALUES ('2', 'espera');
INSERT INTO `estado_tec` VALUES ('3', 'ocupado');
INSERT INTO `estado_tec` VALUES ('4', 'En Observacion');

-- ----------------------------
-- Table structure for estado_ti
-- ----------------------------
DROP TABLE IF EXISTS `estado_ti`;
CREATE TABLE `estado_ti` (
  `id_estado_ti` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado_ti` varchar(40) NOT NULL,
  PRIMARY KEY (`id_estado_ti`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estado_ti
-- ----------------------------
INSERT INTO `estado_ti` VALUES ('1', 'Atendido');
INSERT INTO `estado_ti` VALUES ('2', 'Espera');
INSERT INTO `estado_ti` VALUES ('3', 'En Observacion');

-- ----------------------------
-- Table structure for incidencia
-- ----------------------------
DROP TABLE IF EXISTS `incidencia`;
CREATE TABLE `incidencia` (
  `id_incidencia` int(11) NOT NULL AUTO_INCREMENT,
  `nom_incidencia` varchar(70) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_incidencia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of incidencia
-- ----------------------------
INSERT INTO `incidencia` VALUES ('1', 'No hay conexion a Internet', '1');
INSERT INTO `incidencia` VALUES ('2', 'No funciona bien el monitor', '1');
INSERT INTO `incidencia` VALUES ('3', 'El computador Trabaja Lento', '1');
INSERT INTO `incidencia` VALUES ('4', 'No hay conexion con la impresora compartida', '1');
INSERT INTO `incidencia` VALUES ('5', 'otros', '1');
INSERT INTO `incidencia` VALUES ('6', 'pruebas', '0');

-- ----------------------------
-- Table structure for mensjaes
-- ----------------------------
DROP TABLE IF EXISTS `mensjaes`;
CREATE TABLE `mensjaes` (
  `id_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `id_trabajador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id_mensaje`),
  KEY `id_trabajador` (`id_trabajador`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `mensjaes_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id_trabajador`),
  CONSTRAINT `mensjaes_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mensjaes
-- ----------------------------
INSERT INTO `mensjaes` VALUES ('1', '7', '1', 'vengan aqui', '2015-05-04 00:00:00');
INSERT INTO `mensjaes` VALUES ('2', '7', '3', 'xq no vienen los estamos esperando', '2015-05-28 00:00:00');
INSERT INTO `mensjaes` VALUES ('3', '7', '4', 'mensajes nuevoooooo', '2015-05-29 23:21:16');
INSERT INTO `mensjaes` VALUES ('4', '7', '4', 'otro mensaje nuevo', '2015-05-29 23:22:47');
INSERT INTO `mensjaes` VALUES ('5', '7', '4', '', '2015-05-29 23:30:28');
INSERT INTO `mensjaes` VALUES ('6', '7', '4', 'un mensjae en tiempo real', '2015-05-30 00:02:09');
INSERT INTO `mensjaes` VALUES ('7', '7', '4', 'nuevo mensaje en tiempo real parte 2', '2015-05-30 00:03:23');
INSERT INTO `mensjaes` VALUES ('8', '7', '4', 'funciono el mensaje en tiempo real', '2015-05-30 00:03:38');
INSERT INTO `mensjaes` VALUES ('9', '7', '4', 'mensaje en tiempo real parte numero 3', '2015-05-30 00:04:16');
INSERT INTO `mensjaes` VALUES ('10', '7', '4', 'ultimo mensaje con menos tiempo', '2015-05-30 00:04:49');
INSERT INTO `mensjaes` VALUES ('11', '7', '4', 'VIENDO EN LA VENTANA NUMERO 2', '2015-05-30 00:05:34');
INSERT INTO `mensjaes` VALUES ('12', '7', '4', 'ENVIANDO UN SELECT <SELECT><OPTION>A</OPTION></SELECT>', '2015-05-30 00:06:23');
INSERT INTO `mensjaes` VALUES ('13', '7', '4', 'LO RECIBI TU SELECT XD', '2015-05-30 00:06:44');
INSERT INTO `mensjaes` VALUES ('14', '7', '4', 'assa', '2015-05-30 00:12:31');
INSERT INTO `mensjaes` VALUES ('15', '7', '4', 'saaa', '2015-05-30 00:12:36');
INSERT INTO `mensjaes` VALUES ('16', '7', '4', 'sasad', '2015-05-30 00:12:39');
INSERT INTO `mensjaes` VALUES ('17', '7', '4', 'sadsda', '2015-05-30 00:12:41');
INSERT INTO `mensjaes` VALUES ('18', '7', '4', 'asdasd', '2015-05-30 00:12:43');
INSERT INTO `mensjaes` VALUES ('19', '7', '4', 'ads', '2015-05-30 00:12:45');
INSERT INTO `mensjaes` VALUES ('20', '7', '4', '', '2015-05-30 00:12:46');
INSERT INTO `mensjaes` VALUES ('21', '7', '4', 'dsa', '2015-05-30 00:12:48');
INSERT INTO `mensjaes` VALUES ('22', '7', '4', '', '2015-05-30 00:12:49');
INSERT INTO `mensjaes` VALUES ('23', '7', '4', '', '2015-05-30 00:12:50');
INSERT INTO `mensjaes` VALUES ('24', '7', '4', '', '2015-05-30 00:12:50');
INSERT INTO `mensjaes` VALUES ('25', '7', '4', '', '2015-05-30 00:12:51');
INSERT INTO `mensjaes` VALUES ('26', '7', '4', '', '2015-05-30 00:12:52');
INSERT INTO `mensjaes` VALUES ('27', '7', '4', '', '2015-05-30 00:12:52');
INSERT INTO `mensjaes` VALUES ('28', '7', '4', '', '2015-05-30 00:12:53');
INSERT INTO `mensjaes` VALUES ('29', '7', '4', '', '2015-05-30 00:12:54');
INSERT INTO `mensjaes` VALUES ('30', '7', '4', '', '2015-05-30 00:12:54');
INSERT INTO `mensjaes` VALUES ('31', '7', '4', 'listo', '2015-05-30 00:31:16');
INSERT INTO `mensjaes` VALUES ('32', '7', '4', 'enviando un mensaje en tiempo real ', '2015-05-30 10:26:30');
INSERT INTO `mensjaes` VALUES ('33', '7', '4', 'asd', '2015-05-30 10:29:46');
INSERT INTO `mensjaes` VALUES ('34', '7', '4', '<select><option>mensaje</option><option>mensaje2</option></select>', '2015-05-30 10:31:00');
INSERT INTO `mensjaes` VALUES ('35', '7', '4', 'tiempo real', '2015-06-01 09:39:25');
INSERT INTO `mensjaes` VALUES ('36', '7', '4', 'as}saasassasasas', '2015-06-01 09:39:38');
INSERT INTO `mensjaes` VALUES ('37', '7', '4', 'aaaaaaaaaaaaa', '2015-06-01 09:39:44');
INSERT INTO `mensjaes` VALUES ('38', '7', '4', 'aaaaaaaaaaa', '2015-06-01 09:40:13');
INSERT INTO `mensjaes` VALUES ('39', '7', '4', 'jhoni', '2015-06-01 09:40:18');
INSERT INTO `mensjaes` VALUES ('40', '7', '4', 'jajaja', '2015-07-02 00:25:31');
INSERT INTO `mensjaes` VALUES ('41', '7', '4', 'ya ves jajaja ', '2015-07-02 00:25:39');
INSERT INTO `mensjaes` VALUES ('42', '7', '4', 'hola que tal', '2015-07-07 12:49:07');
INSERT INTO `mensjaes` VALUES ('43', '7', '4', 'ggg', '2015-07-07 12:54:07');
INSERT INTO `mensjaes` VALUES ('44', '7', '4', '', '2015-07-07 12:54:08');
INSERT INTO `mensjaes` VALUES ('45', '7', '4', '', '2015-07-07 12:54:09');
INSERT INTO `mensjaes` VALUES ('46', '7', '4', '', '2015-07-07 12:54:09');
INSERT INTO `mensjaes` VALUES ('47', '7', '4', '', '2015-07-07 12:54:10');
INSERT INTO `mensjaes` VALUES ('48', '7', '4', '', '2015-07-07 12:54:10');
INSERT INTO `mensjaes` VALUES ('49', '7', '4', '', '2015-07-07 12:54:10');
INSERT INTO `mensjaes` VALUES ('50', '7', '4', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2015-07-07 12:55:05');
INSERT INTO `mensjaes` VALUES ('51', '7', '4', 'ddddddddddddd    ', '2015-07-07 12:55:21');
INSERT INTO `mensjaes` VALUES ('52', '7', '4', 'lnj', '2015-07-07 14:45:11');

-- ----------------------------
-- Table structure for prioridad
-- ----------------------------
DROP TABLE IF EXISTS `prioridad`;
CREATE TABLE `prioridad` (
  `id_prioridad` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prioridad` varchar(40) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_prioridad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of prioridad
-- ----------------------------
INSERT INTO `prioridad` VALUES ('1', 'Muy Baja', '0');
INSERT INTO `prioridad` VALUES ('2', 'Baja', '0');
INSERT INTO `prioridad` VALUES ('3', 'Media', '0');
INSERT INTO `prioridad` VALUES ('4', 'Alta', '0');
INSERT INTO `prioridad` VALUES ('5', 'Muy Alta', '0');

-- ----------------------------
-- Table structure for sucursal
-- ----------------------------
DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sucursal` varchar(40) NOT NULL,
  `ubicacion` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_sucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucursal
-- ----------------------------
INSERT INTO `sucursal` VALUES ('1', 'Sede Central La Molina', 'Av. La Molina 1981 - La Molina.', '015501332', '1');
INSERT INTO `sucursal` VALUES ('2', 'Cede Lima Norte', 'Los Olivos', '998091666', '1');
INSERT INTO `sucursal` VALUES ('3', 'Cede Lima Sur', ' carabayllo 450', '5502332', '0');

-- ----------------------------
-- Table structure for tecnico
-- ----------------------------
DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE `tecnico` (
  `id_tecnico` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(50) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `id_estado_tec` int(11) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_tecnico`),
  KEY `id_estado_tec` (`id_estado_tec`),
  CONSTRAINT `tecnico_ibfk_1` FOREIGN KEY (`id_estado_tec`) REFERENCES `estado_tec` (`id_estado_tec`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tecnico
-- ----------------------------
INSERT INTO `tecnico` VALUES ('1', 'ninguno', 'ninguno', 'ninguno', 'ninguno', '1', '', '');
INSERT INTO `tecnico` VALUES ('2', 'rivero', '5501332', 'rivero@gmail.com', 'huaral', '2', 'tec001', '123');
INSERT INTO `tecnico` VALUES ('4', 'rocio', '4404040', 'rocio@gmail.com', 'puente nuevo crd 30', '4', 'tec003', '123');

-- ----------------------------
-- Table structure for ticket
-- ----------------------------
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `id_trabajador` int(11) NOT NULL,
  `id_prioridad` int(11) NOT NULL,
  `id_estado_ti` int(11) NOT NULL,
  `fecha_reporte` datetime NOT NULL,
  `id_tecnico` int(11) NOT NULL,
  PRIMARY KEY (`id_ticket`),
  KEY `id_trabajador` (`id_trabajador`),
  KEY `id_prioridad` (`id_prioridad`),
  KEY `id_estado_ti` (`id_estado_ti`),
  KEY `id_tecnico` (`id_tecnico`),
  CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_prioridad`) REFERENCES `prioridad` (`id_prioridad`),
  CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_estado_ti`) REFERENCES `estado_ti` (`id_estado_ti`),
  CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id_trabajador`),
  CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`id_tecnico`) REFERENCES `tecnico` (`id_tecnico`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ticket
-- ----------------------------
INSERT INTO `ticket` VALUES ('28', '10', '4', '1', '2015-06-02 19:27:35', '4');
INSERT INTO `ticket` VALUES ('29', '7', '4', '1', '2015-06-02 19:33:38', '4');
INSERT INTO `ticket` VALUES ('30', '7', '2', '1', '2015-06-02 19:41:32', '4');
INSERT INTO `ticket` VALUES ('31', '7', '3', '1', '2015-06-02 19:42:06', '2');
INSERT INTO `ticket` VALUES ('32', '7', '2', '1', '2015-06-02 19:46:09', '2');
INSERT INTO `ticket` VALUES ('33', '10', '2', '1', '2015-06-02 19:48:46', '4');
INSERT INTO `ticket` VALUES ('34', '7', '5', '1', '2015-06-02 19:51:12', '2');
INSERT INTO `ticket` VALUES ('35', '7', '1', '1', '2015-06-02 21:18:07', '4');
INSERT INTO `ticket` VALUES ('36', '10', '1', '1', '2015-06-02 21:19:31', '4');
INSERT INTO `ticket` VALUES ('37', '10', '3', '1', '2015-06-02 22:00:20', '4');
INSERT INTO `ticket` VALUES ('38', '7', '2', '1', '2015-06-02 22:12:22', '2');
INSERT INTO `ticket` VALUES ('39', '7', '5', '1', '2015-06-24 02:01:10', '4');
INSERT INTO `ticket` VALUES ('40', '7', '3', '1', '2015-06-24 02:38:19', '4');
INSERT INTO `ticket` VALUES ('41', '7', '5', '1', '2015-06-24 02:57:05', '2');
INSERT INTO `ticket` VALUES ('42', '7', '5', '1', '2015-06-24 03:00:16', '2');
INSERT INTO `ticket` VALUES ('43', '7', '1', '1', '2015-06-24 03:06:11', '2');
INSERT INTO `ticket` VALUES ('44', '7', '1', '1', '2015-06-24 03:06:25', '2');
INSERT INTO `ticket` VALUES ('45', '7', '1', '1', '2015-06-24 03:22:12', '2');
INSERT INTO `ticket` VALUES ('46', '7', '1', '1', '2015-06-24 03:33:52', '2');
INSERT INTO `ticket` VALUES ('47', '7', '1', '1', '2015-06-24 03:33:55', '2');
INSERT INTO `ticket` VALUES ('48', '7', '1', '1', '2015-06-24 03:34:12', '2');
INSERT INTO `ticket` VALUES ('49', '7', '1', '1', '2015-06-24 03:37:13', '4');
INSERT INTO `ticket` VALUES ('50', '7', '1', '1', '2015-06-24 03:37:21', '4');
INSERT INTO `ticket` VALUES ('51', '7', '3', '1', '2015-06-25 18:18:38', '4');
INSERT INTO `ticket` VALUES ('52', '7', '1', '1', '2015-06-25 18:27:32', '2');
INSERT INTO `ticket` VALUES ('53', '7', '4', '1', '2015-06-25 18:31:40', '2');
INSERT INTO `ticket` VALUES ('54', '7', '1', '1', '2015-06-25 18:34:18', '2');
INSERT INTO `ticket` VALUES ('55', '7', '3', '1', '2015-06-25 18:47:55', '2');
INSERT INTO `ticket` VALUES ('56', '7', '3', '1', '2015-06-25 19:39:21', '4');
INSERT INTO `ticket` VALUES ('57', '7', '3', '1', '2015-06-25 20:15:01', '2');
INSERT INTO `ticket` VALUES ('58', '7', '4', '1', '2015-07-01 09:52:10', '4');
INSERT INTO `ticket` VALUES ('59', '7', '1', '1', '2015-07-01 10:01:34', '4');
INSERT INTO `ticket` VALUES ('60', '7', '1', '1', '2015-07-01 10:02:30', '4');
INSERT INTO `ticket` VALUES ('61', '7', '1', '1', '2015-07-01 10:03:15', '4');
INSERT INTO `ticket` VALUES ('62', '7', '1', '1', '2015-07-01 10:05:34', '4');
INSERT INTO `ticket` VALUES ('63', '7', '1', '1', '2015-07-01 10:08:19', '4');
INSERT INTO `ticket` VALUES ('64', '7', '1', '1', '2015-07-01 10:10:15', '2');
INSERT INTO `ticket` VALUES ('65', '7', '1', '1', '2015-07-01 10:10:55', '2');
INSERT INTO `ticket` VALUES ('66', '7', '1', '1', '2015-07-01 10:12:31', '2');
INSERT INTO `ticket` VALUES ('67', '7', '1', '1', '2015-07-01 10:24:42', '4');
INSERT INTO `ticket` VALUES ('68', '7', '1', '1', '2015-07-01 10:27:29', '4');
INSERT INTO `ticket` VALUES ('69', '7', '1', '1', '2015-07-01 10:28:48', '2');
INSERT INTO `ticket` VALUES ('70', '7', '1', '1', '2015-07-01 10:39:46', '4');
INSERT INTO `ticket` VALUES ('71', '7', '1', '1', '2015-07-01 10:42:41', '4');
INSERT INTO `ticket` VALUES ('72', '7', '1', '1', '2015-07-01 11:20:19', '4');
INSERT INTO `ticket` VALUES ('73', '7', '1', '1', '2015-07-01 11:42:43', '4');
INSERT INTO `ticket` VALUES ('74', '10', '1', '1', '2015-07-01 12:14:06', '4');
INSERT INTO `ticket` VALUES ('75', '10', '1', '1', '2015-07-01 12:21:00', '2');
INSERT INTO `ticket` VALUES ('76', '7', '4', '1', '2015-07-01 12:35:03', '4');
INSERT INTO `ticket` VALUES ('77', '7', '1', '1', '2015-07-01 13:09:39', '2');
INSERT INTO `ticket` VALUES ('78', '7', '1', '1', '2015-07-01 13:21:52', '2');
INSERT INTO `ticket` VALUES ('79', '7', '1', '1', '2015-07-01 14:03:34', '2');
INSERT INTO `ticket` VALUES ('80', '7', '5', '1', '2015-07-01 17:02:51', '2');
INSERT INTO `ticket` VALUES ('81', '7', '1', '1', '2015-07-01 18:24:54', '2');
INSERT INTO `ticket` VALUES ('82', '7', '5', '1', '2015-07-01 18:54:00', '2');
INSERT INTO `ticket` VALUES ('83', '7', '3', '1', '2015-07-01 19:06:16', '4');
INSERT INTO `ticket` VALUES ('84', '7', '3', '1', '2015-07-01 19:08:32', '4');
INSERT INTO `ticket` VALUES ('85', '7', '3', '1', '2015-07-01 20:31:29', '4');
INSERT INTO `ticket` VALUES ('86', '7', '2', '1', '2015-07-01 20:35:15', '2');
INSERT INTO `ticket` VALUES ('87', '7', '1', '1', '2015-07-01 21:14:29', '2');
INSERT INTO `ticket` VALUES ('88', '7', '1', '1', '2015-07-01 21:32:24', '2');
INSERT INTO `ticket` VALUES ('89', '7', '2', '1', '2015-07-03 12:19:05', '4');
INSERT INTO `ticket` VALUES ('90', '7', '1', '1', '2015-07-03 12:20:12', '2');
INSERT INTO `ticket` VALUES ('91', '7', '4', '1', '2015-07-03 12:23:44', '2');
INSERT INTO `ticket` VALUES ('92', '7', '3', '1', '2015-07-03 12:38:30', '4');
INSERT INTO `ticket` VALUES ('93', '10', '2', '3', '2015-07-03 12:40:34', '4');
INSERT INTO `ticket` VALUES ('94', '7', '3', '1', '2015-07-03 12:42:58', '2');
INSERT INTO `ticket` VALUES ('95', '7', '1', '1', '2015-07-03 12:47:00', '2');
INSERT INTO `ticket` VALUES ('96', '7', '3', '1', '2015-07-03 12:47:29', '2');
INSERT INTO `ticket` VALUES ('97', '7', '2', '1', '2015-07-03 13:17:11', '2');
INSERT INTO `ticket` VALUES ('98', '7', '3', '1', '2015-07-03 13:23:25', '2');
INSERT INTO `ticket` VALUES ('99', '7', '3', '1', '2015-07-03 13:32:48', '2');
INSERT INTO `ticket` VALUES ('100', '7', '3', '1', '2015-07-03 13:37:02', '2');
INSERT INTO `ticket` VALUES ('101', '7', '5', '1', '2015-07-03 13:45:02', '2');
INSERT INTO `ticket` VALUES ('102', '7', '2', '1', '2015-07-04 07:41:45', '2');
INSERT INTO `ticket` VALUES ('103', '7', '4', '1', '2015-07-04 07:53:53', '2');
INSERT INTO `ticket` VALUES ('104', '7', '2', '1', '2015-07-04 13:41:34', '2');
INSERT INTO `ticket` VALUES ('105', '7', '1', '1', '2015-07-04 13:46:31', '2');
INSERT INTO `ticket` VALUES ('106', '7', '3', '1', '2015-07-04 13:58:46', '2');
INSERT INTO `ticket` VALUES ('107', '7', '1', '1', '2015-07-04 14:46:43', '2');
INSERT INTO `ticket` VALUES ('108', '7', '3', '1', '2015-07-04 16:02:33', '2');
INSERT INTO `ticket` VALUES ('109', '7', '4', '1', '2015-07-04 18:20:56', '2');
INSERT INTO `ticket` VALUES ('110', '7', '2', '1', '2015-07-05 13:13:38', '2');
INSERT INTO `ticket` VALUES ('111', '7', '5', '1', '2015-07-05 13:45:38', '2');
INSERT INTO `ticket` VALUES ('112', '7', '1', '1', '2015-07-05 22:13:34', '2');
INSERT INTO `ticket` VALUES ('113', '7', '2', '1', '2015-07-05 23:18:07', '2');
INSERT INTO `ticket` VALUES ('114', '7', '3', '1', '2015-07-05 23:22:34', '2');
INSERT INTO `ticket` VALUES ('115', '7', '5', '1', '2015-07-05 23:25:49', '2');
INSERT INTO `ticket` VALUES ('116', '7', '4', '1', '2015-07-05 23:28:18', '2');
INSERT INTO `ticket` VALUES ('117', '7', '1', '1', '2015-07-06 13:53:30', '2');
INSERT INTO `ticket` VALUES ('118', '7', '2', '1', '2015-07-06 14:01:36', '2');
INSERT INTO `ticket` VALUES ('119', '7', '2', '1', '2015-07-07 12:31:23', '2');
INSERT INTO `ticket` VALUES ('120', '7', '3', '1', '2015-07-07 12:35:41', '2');
INSERT INTO `ticket` VALUES ('121', '7', '5', '1', '2015-07-07 12:39:52', '2');
INSERT INTO `ticket` VALUES ('122', '7', '4', '1', '2015-07-07 12:40:19', '2');
INSERT INTO `ticket` VALUES ('123', '7', '1', '1', '2015-07-10 14:55:44', '2');
INSERT INTO `ticket` VALUES ('124', '7', '1', '1', '2015-07-14 19:51:10', '2');
INSERT INTO `ticket` VALUES ('125', '7', '5', '1', '2015-07-14 20:02:56', '2');
INSERT INTO `ticket` VALUES ('126', '7', '2', '1', '2015-07-14 20:49:13', '2');
INSERT INTO `ticket` VALUES ('127', '7', '3', '1', '2015-07-18 20:30:08', '2');
INSERT INTO `ticket` VALUES ('128', '7', '4', '1', '2016-04-03 10:16:34', '2');
INSERT INTO `ticket` VALUES ('129', '7', '4', '1', '2016-04-03 10:35:09', '2');
INSERT INTO `ticket` VALUES ('130', '7', '3', '1', '2016-04-03 10:40:08', '2');
INSERT INTO `ticket` VALUES ('131', '7', '1', '1', '2016-09-18 10:51:44', '2');
INSERT INTO `ticket` VALUES ('132', '7', '5', '1', '2016-09-18 10:54:33', '2');
INSERT INTO `ticket` VALUES ('133', '7', '5', '1', '2016-09-18 10:57:55', '2');

-- ----------------------------
-- Table structure for tipo_contrato
-- ----------------------------
DROP TABLE IF EXISTS `tipo_contrato`;
CREATE TABLE `tipo_contrato` (
  `id_tipo_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_contrato` varchar(40) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_contrato`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_contrato
-- ----------------------------
INSERT INTO `tipo_contrato` VALUES ('1', 'Contratos indefinidos', '1');
INSERT INTO `tipo_contrato` VALUES ('2', 'Contratos temporales', '1');
INSERT INTO `tipo_contrato` VALUES ('3', 'Contratos para la formación', '1');
INSERT INTO `tipo_contrato` VALUES ('4', 'Contratos en prácticas', '1');
INSERT INTO `tipo_contrato` VALUES ('5', 'Basico', '0');

-- ----------------------------
-- Table structure for trabajador
-- ----------------------------
DROP TABLE IF EXISTS `trabajador`;
CREATE TABLE `trabajador` (
  `id_trabajador` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(60) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_tipo_contrato` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fecha_cre` datetime NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_trabajador`),
  KEY `id_cargo` (`id_cargo`),
  KEY `id_tipo_contrato` (`id_tipo_contrato`),
  KEY `area` (`area`),
  KEY `id_sucursal` (`id_sucursal`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`),
  CONSTRAINT `trabajador_ibfk_2` FOREIGN KEY (`id_tipo_contrato`) REFERENCES `tipo_contrato` (`id_tipo_contrato`),
  CONSTRAINT `trabajador_ibfk_3` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id_sucursal`),
  CONSTRAINT `trabajador_ibfk_4` FOREIGN KEY (`area`) REFERENCES `area` (`id_area`),
  CONSTRAINT `trabajador_ibfk_5` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of trabajador
-- ----------------------------
INSERT INTO `trabajador` VALUES ('7', 'suarez melendes', '14', '2', '3', '1', '1', '8888888', '2015-05-26 02:19:03', 'carabayllo', 't001', '123', '1');
INSERT INTO `trabajador` VALUES ('10', 'pepito', '8', '1', '1', '1', '1', '015501332', '2015-06-01 23:07:53', 'villa', 't002', '123', '1');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `razon_social` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'Jorge Gomez Salazar', 'us001', '123', '015501332', 'los  olivos 230', '1');
INSERT INTO `usuario` VALUES ('2', 'Guillermo Bolaños Frida', 'us002', '123', '015273972', 'Puentes Piedra av. Argentina', '1');
INSERT INTO `usuario` VALUES ('3', 'Jorge Armando Falconi Castro', 'us004', '123', '5504244', 'jose olaya', '1');
INSERT INTO `usuario` VALUES ('4', 'Galvarino Castro Espinoza', 'us007', '123', '5508462', 'carabayllo', '1');
INSERT INTO `usuario` VALUES ('5', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '0');
