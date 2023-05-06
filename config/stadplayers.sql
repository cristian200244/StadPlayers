-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-05-2023 a las 01:44:53
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copas`
--

CREATE TABLE `copas` (
  `id` bigint NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` bigint NOT NULL,
  `nombre_pais` varchar(80) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `nombre_continente` varchar(45) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` bigint NOT NULL,
  `nombre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE `posiciones` (
  `id` bigint NOT NULL,
  `descripcion` varchar(45) COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_partido`
--

CREATE TABLE `tipo_partido` (
  `id` bigint NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `num_de_partido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

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
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `copas`
--
ALTER TABLE `copas`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_partido`
--
ALTER TABLE `tipo_partido`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

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
