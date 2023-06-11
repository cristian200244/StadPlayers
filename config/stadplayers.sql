-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla stadplayers.continentes: ~5 rows (aproximadamente)
INSERT INTO `continentes` (`id`, `nombre`) VALUES
	(1, 'Africa'),
	(2, 'America'),
	(3, 'Europa'),
	(4, 'Asia'),
	(5, 'Oceania');

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

-- Volcando datos para la tabla stadplayers.count_estadisticas: ~0 rows (aproximadamente)

-- Volcando datos para la tabla stadplayers.encuentro_estadisticas: ~0 rows (aproximadamente)

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

-- Volcando datos para la tabla stadplayers.historial_equipos: ~2 rows (aproximadamente)
INSERT INTO `historial_equipos` (`id`, `id_jugador`, `fecha_inicial`, `fecha_terminacion`, `id_equipo`) VALUES
	(1, 1, '2023-05-19 22:54:36', '2023-05-19 22:54:37', 2),
	(2, 1, '2023-05-26 22:22:37', '2023-05-26 22:22:38', 8);

-- Volcando datos para la tabla stadplayers.jugadores: ~2 rows (aproximadamente)
INSERT INTO `jugadores` (`id`, `imagen`, `nombre_completo`, `apodo`, `fecha_nacimiento`, `caracteristicas`, `id_equipo`, `id_liga`, `id_pais`, `id_contiente`, `id_posicion`, `id_perfil`) VALUES
	(1, _binary '', 'dsadsa', 'casa', '2023-05-19', 'feo', 1, 6, 1, 4, 3, 1),
	(40, _binary '', 'vcdzgshfcgds', 'hgffdsdfgg', '2023-06-15', 'ghgfdsad', 2, 3, 3, 3, 2, 1),
	(42, _binary '', 'andres felipe', 'soler medina', '2002-03-20', 'rataaa', 2, 2, 2, 3, 2, 1),
	(43, _binary '', 'camilo ', 'felipe', '2003-06-22', 'soccer', 3, 2, 2, 1, 1, 1);

-- Volcando datos para la tabla stadplayers.ligas: ~6 rows (aproximadamente)
INSERT INTO `ligas` (`id`, `nombre`) VALUES
	(1, 'Liga BetPlay'),
	(2, 'Serie A'),
	(3, 'Ligue 1'),
	(4, 'Premier League'),
	(5, 'La Liga'),
	(6, 'Bundesliga');

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

-- Volcando datos para la tabla stadplayers.perfiles: ~3 rows (aproximadamente)
INSERT INTO `perfiles` (`id`, `nombre`) VALUES
	(1, 'Diestro'),
	(2, 'Zurdo'),
	(3, 'Ambidiestro');

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

-- Volcando datos para la tabla stadplayers.tipo_partido: ~6 rows (aproximadamente)
INSERT INTO `tipo_partido` (`id`, `nombre`, `num_de_partido`) VALUES
	(1, 'Liga', 1),
	(2, 'Seleccion', 4),
	(3, 'Liga', 2),
	(4, 'Liga', 5),
	(5, 'Liga', 10),
	(6, 'Liertadores', 2);

-- Volcando datos para la tabla stadplayers.titulos_jugador: ~0 rows (aproximadamente)

-- Volcando datos para la tabla stadplayers.usuarios: ~3 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `Email`, `nickname`, `password`) VALUES
	(1, 'abc', 'abc', 'abc'),
	(2, 'abc@gmail.com', 'abc', 'abc'),
	(3, 'abcd@gmail.com', 'abc', 'abc');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
