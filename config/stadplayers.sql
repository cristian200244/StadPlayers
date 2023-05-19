-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-05-2023 a las 20:47:17
-- Versión del servidor: 8.0.30
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
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `continentes`
--

INSERT INTO `continentes` (`id`, `nombre`) VALUES
(1, 'America'),
(2, 'Africa'),
(3, 'Europa'),
(4, 'Asia'),
(5, 'Oceania');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copas`
--

CREATE TABLE `copas` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `copas`
--

INSERT INTO `copas` (`id`, `nombre`) VALUES
(1, 'Copa Mundial'),
(2, 'Copa America'),
(3, 'Eurocopa'),
(4, 'Copa Africana de Nciones'),
(5, 'Asian Cup AFC'),
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
  `id` bigint UNSIGNED NOT NULL,
  `valor` int DEFAULT '0',
  `id_estadistica` bigint UNSIGNED NOT NULL,
  `id_encuentro_estadistica` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `count_estadisticas`
--

INSERT INTO `count_estadisticas` (`id`, `valor`, `id_estadistica`, `id_encuentro_estadistica`) VALUES
(1, 2, 1, 1),
(2, 3, 2, 1),
(3, 4, 3, 1),
(4, 3, 4, 1),
(5, 1, 5, 1),
(6, 6, 6, 1),
(7, 2, 7, 1),
(8, 4, 8, 1),
(9, 1, 9, 1),
(10, 1, 10, 1),
(11, 0, 11, 1),
(12, 3, 1, 2),
(13, 1, 2, 2),
(14, 2, 3, 2),
(15, 1, 4, 2),
(16, 3, 5, 2),
(17, 4, 6, 2),
(18, 1, 7, 2),
(19, 3, 8, 2),
(20, 2, 9, 2),
(21, 0, 10, 2),
(22, 1, 11, 2),
(23, 1, 1, 3),
(24, 2, 2, 3),
(25, 1, 3, 3),
(26, 5, 4, 3),
(27, 2, 5, 3),
(28, 5, 6, 3),
(29, 2, 7, 3),
(30, 1, 8, 3),
(31, 1, 9, 3),
(32, 0, 10, 3),
(33, 0, 11, 3),
(34, 1, 12, 3),
(35, 3, 13, 3),
(36, 5, 14, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentro_estadisticas`
--

CREATE TABLE `encuentro_estadisticas` (
  `id` bigint UNSIGNED NOT NULL,
  `fecha_del_partido` datetime NOT NULL,
  `id_tipo_partido` bigint UNSIGNED NOT NULL,
  `id_jugador` bigint UNSIGNED NOT NULL,
  `id_equipo` bigint UNSIGNED NOT NULL,
  `id_liga` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `encuentro_estadisticas`
--

INSERT INTO `encuentro_estadisticas` (`id`, `fecha_del_partido`, `id_tipo_partido`, `id_jugador`, `id_equipo`, `id_liga`) VALUES
(1, '2017-04-26 00:00:00', 1, 1, 1, 1),
(2, '2018-07-10 00:00:00', 2, 2, 3, 2),
(3, '2023-05-10 00:00:00', 3, 2, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint UNSIGNED NOT NULL,
  `equipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
-- Estructura de tabla para la tabla `generar_reporte`
--

CREATE TABLE `generar_reporte` (
  `id` bigint UNSIGNED NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_final` datetime NOT NULL,
  `id_jugador` bigint UNSIGNED NOT NULL,
  `id_usuario` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_equipos`
--

CREATE TABLE `historial_equipos` (
  `id` bigint UNSIGNED NOT NULL,
  `fecha_inicial` datetime NOT NULL,
  `fecha_terminacion` datetime NOT NULL,
  `id_equipo` bigint UNSIGNED NOT NULL,
  `id_jugador` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `historial_equipos`
--

INSERT INTO `historial_equipos` (`id`, `fecha_inicial`, `fecha_terminacion`, `id_equipo`, `id_jugador`) VALUES
(2, '2000-01-02 00:00:00', '2000-12-23 00:00:00', 4, 2),
(3, '2007-06-02 00:00:00', '2009-12-15 00:00:00', 7, 1),
(4, '2015-06-14 00:00:00', '2022-12-20 00:00:00', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre_completo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apodo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `id_usuario` bigint UNSIGNED NOT NULL,
  `id_equipo` bigint UNSIGNED NOT NULL,
  `id_liga` bigint UNSIGNED NOT NULL,
  `id_pais` bigint UNSIGNED NOT NULL,
  `id_contiente` bigint UNSIGNED NOT NULL,
  `id_posicion` bigint UNSIGNED NOT NULL,
  `id_perfil` bigint UNSIGNED NOT NULL,
  `id_titulos_jugador` bigint UNSIGNED DEFAULT NULL,
  `id_historial_equipos` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre_completo`, `apodo`, `fecha_nacimiento`, `id_usuario`, `id_equipo`, `id_liga`, `id_pais`, `id_contiente`, `id_posicion`, `id_perfil`, `id_titulos_jugador`, `id_historial_equipos`) VALUES
(1, 'Rosito Mañaneiros', 'El 3am', '1999-10-14 00:00:00', 1, 3, 1, 5, 3, 6, 1, NULL, NULL),
(2, 'David Hernandez', 'La Cachaza', '1998-08-23 00:00:00', 2, 4, 1, 3, 1, 5, 1, NULL, NULL),
(5, 'Kevin Mier', 'La Araña', '2000-02-15 00:00:00', 3, 1, 1, 4, 1, 1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

CREATE TABLE `ligas` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`id`, `nombre`) VALUES
(1, 'Liga BetPlay'),
(2, 'Premier League'),
(3, 'La Liga'),
(4, 'Serie A'),
(5, 'Ligue 1'),
(6, 'Bundesliga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre_pais` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nombre_continente` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre_pais`, `nombre_continente`) VALUES
(1, 'Argentina', 'America'),
(2, 'Colombia', 'America'),
(3, 'Brasil', 'America'),
(4, 'Alemania', 'Europa'),
(5, 'Francia', 'Europa'),
(6, 'Inglaterra', 'Europa'),
(7, 'Senegal', 'Africa'),
(8, 'Camerun', 'Africa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `descripcion` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
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
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `num_de_partido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_partido`
--

INSERT INTO `tipo_partido` (`id`, `nombre`, `num_de_partido`) VALUES
(1, 'Liga', 1),
(2, 'Seleccion', 4),
(3, 'Liertadores', 2),
(4, 'Recocha', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos_jugador`
--

CREATE TABLE `titulos_jugador` (
  `id` bigint UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `id_equipo` bigint UNSIGNED NOT NULL,
  `id_copa` bigint UNSIGNED NOT NULL,
  `id_jugador` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `titulos_jugador`
--

INSERT INTO `titulos_jugador` (`id`, `fecha`, `id_equipo`, `id_copa`, `id_jugador`) VALUES
(2, '2015-06-22 00:00:00', 7, 1, 2),
(3, '1018-12-23 00:00:00', 2, 2, 1),
(4, '1017-02-03 00:00:00', 2, 2, 1),
(5, '2017-05-18 00:00:00', 4, 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint UNSIGNED NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nickname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Email`, `nickname`, `password`) VALUES
(1, 'josecanseco@gmail', 'jose45', '123456'),
(2, 'asher@gmail', 'perritoal100%', '7777777'),
(3, 'canela@cansanciogmail.com', 'saltarina123', '333333'),
(4, 'alejoecheverry33@gmail.com', 'alejoP19', '1980');

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
  ADD KEY `id_estadistica` (`id_estadistica`),
  ADD KEY `id_encuentro_estadistica` (`id_encuentro_estadistica`);

--
-- Indices de la tabla `encuentro_estadisticas`
--
ALTER TABLE `encuentro_estadisticas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_partido` (`id_tipo_partido`),
  ADD KEY `id_jugador` (`id_jugador`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_liga` (`id_liga`);

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
-- Indices de la tabla `generar_reporte`
--
ALTER TABLE `generar_reporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_jugador_id_generar_reporte_id` (`id_jugador`),
  ADD KEY `FK_usuario_id_generar_reporte_id` (`id_usuario`);

--
-- Indices de la tabla `historial_equipos`
--
ALTER TABLE `historial_equipos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_jugador` (`id_jugador`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_liga` (`id_liga`),
  ADD KEY `id_pais` (`id_pais`),
  ADD KEY `id_contiente` (`id_contiente`),
  ADD KEY `id_posicion` (`id_posicion`),
  ADD KEY `id_perfil` (`id_perfil`),
  ADD KEY `id_historial_equipos` (`id_titulos_jugador`),
  ADD KEY `id_historial_equipos_2` (`id_historial_equipos`);

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
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_copa` (`id_copa`),
  ADD KEY `id_jugador` (`id_jugador`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `copas`
--
ALTER TABLE `copas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `count_estadisticas`
--
ALTER TABLE `count_estadisticas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `encuentro_estadisticas`
--
ALTER TABLE `encuentro_estadisticas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generar_reporte`
--
ALTER TABLE `generar_reporte`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial_equipos`
--
ALTER TABLE `historial_equipos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tipo_partido`
--
ALTER TABLE `tipo_partido`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `titulos_jugador`
--
ALTER TABLE `titulos_jugador`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `count_estadisticas`
--
ALTER TABLE `count_estadisticas`
  ADD CONSTRAINT `FK_encuentro_estad_id_count_estadisticas_id` FOREIGN KEY (`id_encuentro_estadistica`) REFERENCES `encuentro_estadisticas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_estadistica_id_count_estadisticas_id` FOREIGN KEY (`id_estadistica`) REFERENCES `estadisticas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `encuentro_estadisticas`
--
ALTER TABLE `encuentro_estadisticas`
  ADD CONSTRAINT `FK_equipo_id_encuentro_estadisticas_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_jugador_id_encuentro_estadisticas_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_liga_id_encuentro_estadisticas_id` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_tipo_partido_id_encuentro_estadisticas_id` FOREIGN KEY (`id_tipo_partido`) REFERENCES `tipo_partido` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `generar_reporte`
--
ALTER TABLE `generar_reporte`
  ADD CONSTRAINT `FK_jugador_id_generar_reporte_id` FOREIGN KEY (`id_jugador`) REFERENCES `historial_equipos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_usuario_id_generar_reporte_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `historial_equipos`
--
ALTER TABLE `historial_equipos`
  ADD CONSTRAINT `FK_equipo_id_historial_equipos_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_jugador_id_historial_equipos_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `FK_continente_jugadores_id` FOREIGN KEY (`id_contiente`) REFERENCES `continentes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_copa_jugadores_id` FOREIGN KEY (`id_titulos_jugador`) REFERENCES `copas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_equipo_jugadores_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_historial_equipo_jugadores_id` FOREIGN KEY (`id_historial_equipos`) REFERENCES `historial_equipos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_jugador_usuarios_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_liga_jugadores_id` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_pais_jugadores_id` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_perfil_jugadores_id` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_posicion_jugadores_id` FOREIGN KEY (`id_posicion`) REFERENCES `posiciones` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_titulo_jugador_jugadores_id` FOREIGN KEY (`id_titulos_jugador`) REFERENCES `titulos_jugador` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `titulos_jugador`
--
ALTER TABLE `titulos_jugador`
  ADD CONSTRAINT `FK_copas_id_titulos_jugador_id` FOREIGN KEY (`id_copa`) REFERENCES `copas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_equipos_id_titulos_jugador_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_jugador_id_titulos_jugador_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
