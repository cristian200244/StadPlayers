-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.32 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para stadplayers
CREATE DATABASE IF NOT EXISTS `stadplayers` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `stadplayers`;

-- Volcando estructura para tabla stadplayers.continentes
CREATE TABLE IF NOT EXISTS `continentes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.continentes: ~5 rows (aproximadamente)
INSERT INTO `continentes` (`id`, `nombre`) VALUES
	(1, 'Africa'),
	(2, 'America'),
	(3, 'Europa'),
	(4, 'Asia'),
	(5, 'Oceania');

-- Volcando estructura para tabla stadplayers.copas
CREATE TABLE IF NOT EXISTS `copas` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.copas: ~10 rows (aproximadamente)
INSERT INTO `copas` (`id`, `nombre`) VALUES
	(1, 'Copa Mundial'),
	(2, 'Eurocopa'),
	(3, 'Copa Africana de Nciones'),
	(4, 'Asian Cup AFC'),
	(5, 'Copa America'),
	(6, ' Copa Oro de la Concacaf '),
	(7, 'Copa Santander Libertadores'),
	(8, 'Copa Suramericana'),
	(9, 'Liga de Campeones de Europa'),
	(10, 'Liga de Campeones de la COCACAF');

-- Volcando estructura para tabla stadplayers.count_estadisticas
CREATE TABLE IF NOT EXISTS `count_estadisticas` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `valor` int DEFAULT '0',
  `id_estadistica` bigint NOT NULL,
  `id_encuentro_estadistica` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_est_count_est_id_idx` (`id_estadistica`),
  KEY `FK_encuentro_estad_count_estad_id_idx` (`id_encuentro_estadistica`),
  CONSTRAINT `FK__count_est_est_id` FOREIGN KEY (`id_estadistica`) REFERENCES `estadisticas` (`id`),
  CONSTRAINT `FK_encuentro_estad_count_estad_id` FOREIGN KEY (`id_encuentro_estadistica`) REFERENCES `encuentro_estadisticas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.count_estadisticas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla stadplayers.encuentro_estadisticas
CREATE TABLE IF NOT EXISTS `encuentro_estadisticas` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `fecha_del_partido` datetime NOT NULL,
  `id_tipo_partido` bigint NOT NULL,
  `id_jugador` bigint NOT NULL,
  `id_equipo` bigint NOT NULL,
  `id_liga` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_jugador_estadisticas_jugador_id_idx` (`id_jugador`),
  KEY `FK_encuentro_estad_tipo_partido_id_idx` (`id_tipo_partido`),
  KEY `FK_equipos_encuentro_estad_id_idx` (`id_equipo`),
  KEY `FK_ligas_encuentro_estad_id_idx` (`id_liga`),
  CONSTRAINT `FK_encuentro_estad_tipo_partidos_id` FOREIGN KEY (`id_tipo_partido`) REFERENCES `tipo_partido` (`id`),
  CONSTRAINT `FK_equipos_encuentro_estad_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  CONSTRAINT `FK_jugador_estadisticas_jugador_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`),
  CONSTRAINT `FK_ligas_encuentro_estad_id` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.encuentro_estadisticas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla stadplayers.equipos
CREATE TABLE IF NOT EXISTS `equipos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `equipo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.equipos: ~8 rows (aproximadamente)
INSERT INTO `equipos` (`id`, `equipo`) VALUES
	(1, 'Atletico Nacional'),
	(2, 'America'),
	(3, 'Santa Fe'),
	(4, 'Millonarios'),
	(5, 'Real Madrid'),
	(6, 'Barcelona'),
	(7, 'Manchester City'),
	(8, 'Inter De Milan');

-- Volcando estructura para tabla stadplayers.estadisticas
CREATE TABLE IF NOT EXISTS `estadisticas` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `predeterminada` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.estadisticas: ~14 rows (aproximadamente)
INSERT INTO `estadisticas` (`id`, `nombre`, `descripcion`, `predeterminada`) VALUES
	(1, 'Pases acertados', 'Entrega el balón corrctamente a su compañero', 1),
	(2, 'Pases errados', 'No entrega el balón a su compañero', 1),
	(3, 'Tiros al arco', 'Remates directos al arco', 1),
	(4, 'Asistencias de Gol', 'Ultimo pase antes del gol', 1),
	(5, 'Rechazos bien dirigidos', 'Ultimo pase antes del gol', 1),
	(6, 'Rechazos mal dirigidos', 'Ultimo pase antes del gol', 1),
	(7, 'Perdidad de balon perjudiciales', 'perdidas que termina en gol del rival', 1),
	(8, 'Minutos Jugados', 'Por partido', 1),
	(9, 'Goles Anotados', 'Por partido', 1),
	(10, 'Amarillas Recibidas', 'Por partido', 1),
	(11, 'Roja Recibida', 'Por partido', 1),
	(12, 'Atajada Heroica', 'De remates inminentes a gol', 1),
	(13, 'Penales atajados', 'Por partido', 1),
	(14, 'éxitos en mano a mano', 'enfrentamiento directo con el delantero como ultimo hombre', 1);

-- Volcando estructura para tabla stadplayers.historial_equipos
CREATE TABLE IF NOT EXISTS `historial_equipos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_jugador` bigint NOT NULL,
  `fecha_inicial` datetime NOT NULL,
  `fecha_terminacion` datetime NOT NULL,
  `id_equipo` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_jugadores_equipos_id_idx` (`id_equipo`),
  KEY `FK_historial_equipos_jugadores` (`id_jugador`),
  CONSTRAINT `FK_historial_equipos_jugadores` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`),
  CONSTRAINT `FK_jugadores_equipos_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.historial_equipos: ~2 rows (aproximadamente)
INSERT INTO `historial_equipos` (`id`, `id_jugador`, `fecha_inicial`, `fecha_terminacion`, `id_equipo`) VALUES
	(1, 1, '2023-05-19 22:54:36', '2023-05-19 22:54:37', 2),
	(2, 1, '2023-05-26 22:22:37', '2023-05-26 22:22:38', 8);

-- Volcando estructura para tabla stadplayers.jugadores
CREATE TABLE IF NOT EXISTS `jugadores` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `apodo` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `caracteristicas` text CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci,
  `id_equipo` bigint NOT NULL,
  `id_liga` bigint NOT NULL,
  `id_pais` bigint NOT NULL,
  `id_contiente` bigint NOT NULL,
  `id_posicion` bigint NOT NULL,
  `id_perfil` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_equipos_jugador_id_idx` (`id_equipo`),
  KEY `FK_pais_jugador_id_idx` (`id_pais`),
  KEY `FK_liga_jugador_id_idx` (`id_liga`),
  KEY `FK_posicion_jugador_id_idx` (`id_posicion`),
  KEY `FK_perfil_jugador_id_idx` (`id_perfil`),
  KEY `FK_continete_jugadores_id_idx` (`id_contiente`),
  CONSTRAINT `FK_continete_jugadores_id` FOREIGN KEY (`id_contiente`) REFERENCES `continentes` (`id`),
  CONSTRAINT `FK_equipos_jugadores_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  CONSTRAINT `FK_ligas_jugadores_id` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`),
  CONSTRAINT `FK_paises_jugadores_id` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id`),
  CONSTRAINT `FK_perfiles_jugadores_id` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id`),
  CONSTRAINT `FK_posiciones_jugadores_id` FOREIGN KEY (`id_posicion`) REFERENCES `posiciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.jugadores: ~3 rows (aproximadamente)
INSERT INTO `jugadores` (`id`, `nombre_completo`, `apodo`, `fecha_nacimiento`, `caracteristicas`, `id_equipo`, `id_liga`, `id_pais`, `id_contiente`, `id_posicion`, `id_perfil`) VALUES
	(1, 'dsadsa', 'casa', '2023-05-19', 'feo', 1, 6, 1, 4, 3, 1),
	(40, 'vcdzgshfcgds', 'hgffdsdfgg', '2023-06-15', 'ghgfdsad', 2, 3, 3, 3, 2, 1);

-- Volcando estructura para tabla stadplayers.ligas
CREATE TABLE IF NOT EXISTS `ligas` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.ligas: ~6 rows (aproximadamente)
INSERT INTO `ligas` (`id`, `nombre`) VALUES
	(1, 'Liga BetPlay'),
	(2, 'Serie A'),
	(3, 'Ligue 1'),
	(4, 'Premier League'),
	(5, 'La Liga'),
	(6, 'Bundesliga');

-- Volcando estructura para tabla stadplayers.paises
CREATE TABLE IF NOT EXISTS `paises` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre_pais` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `nombre_continente` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.paises: ~18 rows (aproximadamente)
INSERT INTO `paises` (`id`, `nombre_pais`, `nombre_continente`) VALUES
	(1, 'Argentina', 'America'),
	(2, 'Argentina', 'America'),
	(3, 'Colombia', 'America'),
	(4, 'Colombia', 'America'),
	(5, 'Brasil', 'America'),
	(6, 'Brasil', 'America'),
	(7, 'Alemania', 'Europa'),
	(8, 'Alemania', 'Europa'),
	(9, 'Francia', 'Europa'),
	(10, 'Francia', 'Europa'),
	(11, 'Inglaterra', 'Europa'),
	(12, 'Inglaterra', 'Europa'),
	(13, 'Italia', 'Europa'),
	(14, 'Italia', 'Europa'),
	(15, 'Senegal', 'Africa'),
	(16, 'Senegal', 'Africa'),
	(17, 'Camerun', 'Africa'),
	(18, 'Camerun', 'Africa');

-- Volcando estructura para tabla stadplayers.perfiles
CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.perfiles: ~3 rows (aproximadamente)
INSERT INTO `perfiles` (`id`, `nombre`) VALUES
	(1, 'Diestro'),
	(2, 'Zurdo'),
	(3, 'Ambidiestro');

-- Volcando estructura para tabla stadplayers.posiciones
CREATE TABLE IF NOT EXISTS `posiciones` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.posiciones: ~13 rows (aproximadamente)
INSERT INTO `posiciones` (`id`, `descripcion`) VALUES
	(1, 'Arquero'),
	(2, 'Defensa Central Derecho'),
	(3, 'Defensa Central Izquierdo'),
	(4, 'Defensa Lateral Derecho'),
	(5, 'Defensa Lateral Izquierdo'),
	(6, 'Volante de Recuperacion'),
	(7, 'Volante De Salida'),
	(8, 'Volante De Creacion'),
	(9, 'Volante Mixto'),
	(10, 'Delantero Media Punta'),
	(11, 'Delantero Extremo Izquierdo'),
	(12, 'Delantero Extremo Derecho'),
	(13, 'Delantero Nueve');

-- Volcando estructura para tabla stadplayers.tipo_partido
CREATE TABLE IF NOT EXISTS `tipo_partido` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `num_de_partido` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.tipo_partido: ~6 rows (aproximadamente)
INSERT INTO `tipo_partido` (`id`, `nombre`, `num_de_partido`) VALUES
	(1, 'Liga', 1),
	(2, 'Seleccion', 4),
	(3, 'Liga', 2),
	(4, 'Liga', 5),
	(5, 'Liga', 10),
	(6, 'Liertadores', 2);

-- Volcando estructura para tabla stadplayers.titulos_jugador
CREATE TABLE IF NOT EXISTS `titulos_jugador` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `id_equipo` bigint NOT NULL,
  `id_copa` bigint NOT NULL,
  `id_jugador` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_titulos_jugador_equipos_idx` (`id_equipo`),
  KEY `FK_titulos_jugador_id_jugador_idx` (`id_jugador`),
  KEY `FK_titulos_jugador_id_copas` (`id_copa`),
  CONSTRAINT `FK_titulos_jugador_id_copas` FOREIGN KEY (`id_copa`) REFERENCES `copas` (`id`),
  CONSTRAINT `FK_titulos_jugador_id_equipos` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  CONSTRAINT `FK_titulos_jugador_id_jugador` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.titulos_jugador: ~0 rows (aproximadamente)

-- Volcando estructura para tabla stadplayers.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `nickname` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- Volcando datos para la tabla stadplayers.usuarios: ~0 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `Email`, `nickname`, `password`) VALUES
	(1, 'abc', 'abc', 'abc'),
	(2, 'abc@gmail.com', 'abc', 'abc'),
	(3, 'abcd@gmail.com', 'abc', 'abc');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
