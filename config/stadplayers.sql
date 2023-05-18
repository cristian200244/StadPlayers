-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2023 a las 03:32:44
-- Versión del servidor: 8.0.32
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stadplayers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `continentes`
--

CREATE TABLE `continentes` (
  `id` bigint NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `continentes`
--

INSERT INTO `continentes` (`id`, `nombre`) VALUES
(1, 'Africa'),
(2, 'America'),
(3, 'Europa'),
(4, 'Asia'),
(5, 'Oceania');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copas`
--

CREATE TABLE `copas` (
  `id` bigint NOT NULL,
  `nombre` varchar(50) COLLATE   NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `copas`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `count_estadisticas`
--

CREATE TABLE `count_estadisticas` (
  `id` bigint NOT NULL,
  `valor` int DEFAULT '0',
  `id_estadistica` bigint NOT NULL,
  `id_encuentro_estadistica` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentro_estadisticas`
--

CREATE TABLE `encuentro_estadisticas` (
  `id` bigint NOT NULL,
  `fecha_del_partido` datetime NOT NULL,
  `id_tipo_partido` bigint NOT NULL,
  `id_jugador` bigint NOT NULL,
  `id_equipo` bigint NOT NULL,
  `id_liga` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint NOT NULL,
  `equipo` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `equipo`) VALUES
(1, 'Atletico Nacional'),
(2, 'America'),
(3, 'Santa Fe'),
(4, 'Millonarios'),
(5, 'Real Madrid'),
(6, 'Barcelona'),
(7, 'Manchester City'),
(8, 'Inter De Milan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id` bigint NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `predeterminada` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `estadisticas`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_equipos`
--

CREATE TABLE `historial_equipos` (
  `id` bigint NOT NULL,
  `fecha_inicial` datetime NOT NULL,
  `fecha_terminacion` datetime NOT NULL,
  `id_equipo` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` bigint NOT NULL,
  `nombre_completo` varchar(100) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `apodo` varchar(30) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `caracteristicas` text COLLATE utf8mb3_spanish2_ci,
  `id_usuario` bigint NOT NULL,
  `id_equipo` bigint NOT NULL,
  `id_liga` bigint NOT NULL,
  `id_pais` bigint NOT NULL,
  `id_contiente` bigint NOT NULL,
  `id_posicion` bigint NOT NULL,
  `id_perfil` bigint NOT NULL,
  `id_historial_equipos` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

CREATE TABLE `ligas` (
  `id` bigint NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`id`, `nombre`) VALUES
(1, 'Liga BetPlay'),
(2, 'Serie A'),
(3, 'Ligue 1'),
(4, 'Premier League'),
(5, 'La Liga'),
(6, 'Bundesliga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` bigint NOT NULL,
  `nombre_pais` varchar(80) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `nombre_continente` varchar(45) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `paises`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` bigint NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `nombre`) VALUES
(1, 'Diestro'),
(2, 'Zurdo'),
(3, 'Ambidiestro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE `posiciones` (
  `id` bigint NOT NULL,
  `descripcion` varchar(45) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `posiciones`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_partido`
--

CREATE TABLE `tipo_partido` (
  `id` bigint NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `num_de_partido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_partido`
--

INSERT INTO `tipo_partido` (`id`, `nombre`, `num_de_partido`) VALUES
(1, 'Liga', 1),
(2, 'Seleccion', 4),
(3, 'Liga', 2),
(4, 'Liga', 5),
(5, 'Liga', 10),
(6, 'Liertadores', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos_jugador`
--

CREATE TABLE `titulos_jugador` (
  `id` bigint NOT NULL,
  `fecha` datetime NOT NULL,
  `id_equipo` bigint NOT NULL,
  `id_copa` bigint NOT NULL,
  `id_jugador` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint NOT NULL,
  `Email` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `nickname` varchar(50) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `continentes`
--
ALTER TABLE `continentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `copas`
--
ALTER TABLE `copas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `count_estadisticas`
--
ALTER TABLE `count_estadisticas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_est_count_est_id_idx` (`id_estadistica`),
  ADD KEY `FK_encuentro_estad_count_estad_id_idx` (`id_encuentro_estadistica`);

--
-- Indices de la tabla `encuentro_estadisticas`
--
ALTER TABLE `encuentro_estadisticas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_jugador_estadisticas_jugador_id_idx` (`id_jugador`),
  ADD KEY `FK_encuentro_estad_tipo_partido_id_idx` (`id_tipo_partido`),
  ADD KEY `FK_equipos_encuentro_estad_id_idx` (`id_equipo`),
  ADD KEY `FK_ligas_encuentro_estad_id_idx` (`id_liga`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial_equipos`
--
ALTER TABLE `historial_equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_jugadores_equipos_id_idx` (`id_equipo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_jugador_usuario_id_idx` (`id_usuario`),
  ADD KEY `FK_equipos_jugador_id_idx` (`id_equipo`),
  ADD KEY `FK_pais_jugador_id_idx` (`id_pais`),
  ADD KEY `FK_liga_jugador_id_idx` (`id_liga`),
  ADD KEY `FK_posicion_jugador_id_idx` (`id_posicion`),
  ADD KEY `FK_perfil_jugador_id_idx` (`id_perfil`),
  ADD KEY `FK_continete_jugadores_id_idx` (`id_contiente`),
  ADD KEY `FK_historial_equipos_jugadores_id_idx` (`id_historial_equipos`);

--
-- Indices de la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_partido`
--
ALTER TABLE `tipo_partido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `titulos_jugador`
--
ALTER TABLE `titulos_jugador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_titulos_jugador_equipos_idx` (`id_equipo`),
  ADD KEY `FK_titulos_jugador_id_jugador_idx` (`id_jugador`),
  ADD KEY `FK_titulos_jugador_id_copas` (`id_copa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `continentes`
--
ALTER TABLE `continentes`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `copas`
--
ALTER TABLE `copas`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `count_estadisticas`
--
ALTER TABLE `count_estadisticas`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuentro_estadisticas`
--
ALTER TABLE `encuentro_estadisticas`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `historial_equipos`
--
ALTER TABLE `historial_equipos`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_partido`
--
ALTER TABLE `tipo_partido`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `titulos_jugador`
--
ALTER TABLE `titulos_jugador`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `count_estadisticas`
--
ALTER TABLE `count_estadisticas`
  ADD CONSTRAINT `FK__count_est_est_id` FOREIGN KEY (`id_estadistica`) REFERENCES `estadisticas` (`id`),
  ADD CONSTRAINT `FK_encuentro_estad_count_estad_id` FOREIGN KEY (`id_encuentro_estadistica`) REFERENCES `encuentro_estadisticas` (`id`);

--
-- Filtros para la tabla `encuentro_estadisticas`
--
ALTER TABLE `encuentro_estadisticas`
  ADD CONSTRAINT `FK_encuentro_estad_tipo_partidos_id` FOREIGN KEY (`id_tipo_partido`) REFERENCES `tipo_partido` (`id`),
  ADD CONSTRAINT `FK_equipos_encuentro_estad_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `FK_jugador_estadisticas_jugador_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`),
  ADD CONSTRAINT `FK_ligas_encuentro_estad_id` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`);

--
-- Filtros para la tabla `historial_equipos`
--
ALTER TABLE `historial_equipos`
  ADD CONSTRAINT `FK_jugadores_equipos_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`);

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `FK_continete_jugadores_id` FOREIGN KEY (`id_contiente`) REFERENCES `continentes` (`id`),
  ADD CONSTRAINT `FK_equipos_jugadores_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `FK_historial_equipos_jugadores_id` FOREIGN KEY (`id_historial_equipos`) REFERENCES `historial_equipos` (`id`),
  ADD CONSTRAINT `FK_jugadores_usuarios_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_ligas_jugadores_id` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`),
  ADD CONSTRAINT `FK_paises_jugadores_id` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id`),
  ADD CONSTRAINT `FK_perfiles_jugadores_id` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id`),
  ADD CONSTRAINT `FK_posiciones_jugadores_id` FOREIGN KEY (`id_posicion`) REFERENCES `posiciones` (`id`);

--
-- Filtros para la tabla `titulos_jugador`
--
ALTER TABLE `titulos_jugador`
  ADD CONSTRAINT `FK_titulos_jugador_id_copas` FOREIGN KEY (`id_copa`) REFERENCES `copas` (`id`),
  ADD CONSTRAINT `FK_titulos_jugador_id_equipos` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `FK_titulos_jugador_id_jugador` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
