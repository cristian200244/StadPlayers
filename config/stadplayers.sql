-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-06-2023 a las 00:33:04
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
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `copas`
--

INSERT INTO `copas` (`id`, `nombre`) VALUES
(1, 'Copa Mundial'),
(2, 'Copa America'),
(3, 'Eurocopa'),
(4, 'Copa Africana de Naciones'),
(5, 'Asian Cup AFC'),
(6, ' Copa Oro de la Concacaf '),
(7, 'Copa Santander Libertadores'),
(8, 'Copa Suramericana'),
(9, 'Liga de Campeones de Europa'),
(10, 'Liga de Campeones de la COCACAF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` bigint UNSIGNED NOT NULL,
  `equipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `predeterminada` int DEFAULT '0',
  `tipo` int NOT NULL COMMENT 'tipo de jugador\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estadisticas`
--

INSERT INTO `estadisticas` (`id`, `nombre`, `descripcion`, `predeterminada`, `tipo`) VALUES
(1, 'Pases acertados', 'Entrega el balón corrctamente a su compañero', 1, 0),
(2, 'Pases errados', 'No entrega el balón a su compañero', 1, 0),
(3, 'Tiros al arco', 'Remates directos al arco', 1, 0),
(4, 'Asistencias de Gol', 'Ultimo pase antes del gol', 1, 0),
(5, 'Rechazos bien dirigidos', 'Ultimo pase antes del gol', 1, 0),
(6, 'Rechazos mal dirigidos', 'Ultimo pase antes del gol', 1, 0),
(7, 'Perdidas de balon', 'Pierde la posesion del balon', 1, 0),
(8, 'Perdidas de balon perjudiciales', 'perdidas que termina en gol del rival', 1, 0),
(9, 'Minutos Jugados', 'Por partido', 1, 0),
(10, 'Goles Anotados', 'Por partido', 1, 0),
(11, 'Amarillas Recibidas', 'Por partido', 1, 0),
(12, 'Roja Recibida', 'Por partido', 1, 0),
(13, 'Atajada Heroica', 'De remates inminentes a gol', 1, 1),
(14, 'Penales atajados', 'Por partido', 1, 1),
(15, 'exitos en mano a mano', 'enfrentamiento directo con el delantero como ultimo hombre', 1, 1),
(16, 'Gol de chilena', 'Remate en el aire de espaldas al arco', 0, 0),
(18, 'faltas cometidas', 'realizar faltas al oponente', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas_count`
--

CREATE TABLE `estadisticas_count` (
  `id` bigint UNSIGNED NOT NULL,
  `valor` int DEFAULT '0',
  `id_estadistica` bigint UNSIGNED NOT NULL,
  `id_encuentro_estadistica` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estadisticas_count`
--

INSERT INTO `estadisticas_count` (`id`, `valor`, `id_estadistica`, `id_encuentro_estadistica`) VALUES
(1, 2, 1, 4),
(2, 5, 2, 4),
(3, 1, 3, 4),
(4, 2, 4, 4),
(5, 1, 5, 4),
(6, 6, 6, 4),
(7, 2, 7, 4),
(8, 5, 8, 4),
(9, 88, 9, 4),
(10, 1, 10, 4),
(11, 0, 11, 4),
(12, 3, 12, 4),
(13, 8, 1, 5),
(14, 5, 2, 5),
(15, 2, 3, 5),
(16, 2, 4, 5),
(17, 1, 5, 5),
(18, 6, 6, 5),
(19, 1, 7, 5),
(20, 3, 8, 5),
(21, 75, 9, 5),
(22, 0, 10, 5),
(23, 1, 11, 5),
(24, 1, 12, 5),
(25, 6, 1, 6),
(26, 2, 2, 6),
(27, 1, 3, 6),
(28, 5, 4, 6),
(29, 5, 5, 6),
(30, 5, 6, 6),
(31, 2, 7, 6),
(32, 1, 8, 6),
(33, 95, 9, 6),
(34, 1, 10, 6),
(35, 0, 11, 6),
(36, 1, 12, 6),
(37, 9, 1, 7),
(38, 3, 2, 7),
(39, 1, 3, 7),
(40, 3, 4, 7),
(41, 4, 5, 7),
(42, 3, 6, 7),
(43, 1, 7, 7),
(44, 5, 8, 7),
(45, 90, 9, 7),
(46, 0, 10, 7),
(47, 0, 11, 7),
(48, 0, 12, 7),
(49, 2, 1, 1),
(50, 6, 2, 1),
(51, 1, 3, 1),
(52, 1, 4, 1),
(53, 5, 5, 1),
(54, 2, 6, 1),
(55, 1, 7, 1),
(56, 2, 8, 1),
(57, 70, 9, 1),
(58, 0, 10, 1),
(59, 0, 11, 1),
(60, 0, 12, 1),
(61, 5, 1, 1),
(62, 2, 2, 8),
(63, 0, 3, 8),
(64, 4, 4, 8),
(65, 3, 5, 8),
(66, 5, 6, 8),
(67, 3, 7, 8),
(68, 1, 8, 8),
(69, 80, 9, 8),
(70, 2, 10, 8),
(71, 1, 11, 8),
(72, 0, 12, 8),
(73, 5, 1, 9),
(74, 3, 2, 9),
(75, 1, 3, 9),
(76, 2, 4, 9),
(77, 4, 5, 9),
(78, 2, 6, 9),
(79, 3, 7, 9),
(80, 4, 8, 9),
(81, 40, 9, 9),
(82, 1, 10, 9),
(83, 0, 11, 9),
(84, 0, 12, 9),
(85, 10, 1, 10),
(86, 8, 2, 10),
(87, 1, 3, 10),
(88, 2, 4, 10),
(89, 4, 5, 10),
(90, 1, 6, 10),
(91, 3, 7, 10),
(92, 3, 8, 10),
(93, 70, 9, 10),
(94, 1, 10, 10),
(95, 1, 11, 10),
(96, 0, 12, 10),
(97, 12, 1, 11),
(98, 8, 2, 11),
(99, 3, 3, 11),
(100, 1, 4, 11),
(101, 3, 5, 11),
(102, 3, 6, 11),
(103, 1, 7, 11),
(104, 8, 8, 11),
(105, 60, 9, 11),
(106, 1, 10, 11),
(107, 0, 11, 11),
(108, 0, 12, 11),
(109, 7, 1, 12),
(110, 2, 2, 12),
(111, 2, 3, 12),
(112, 3, 4, 12),
(113, 6, 5, 12),
(114, 1, 6, 12),
(115, 2, 7, 12),
(116, 3, 8, 12),
(117, 90, 9, 12),
(118, 0, 10, 12),
(119, 0, 11, 12),
(120, 0, 12, 12),
(121, 3, 1, 2),
(122, 4, 2, 2),
(123, 1, 3, 2),
(124, 2, 4, 2),
(125, 4, 5, 2),
(126, 2, 6, 2),
(127, 2, 7, 2),
(128, 3, 8, 2),
(129, 95, 9, 2),
(130, 0, 10, 2),
(131, 1, 11, 2),
(132, 0, 12, 2),
(133, 10, 1, 3),
(134, 8, 2, 3),
(135, 3, 3, 3),
(136, 1, 4, 3),
(137, 4, 5, 3),
(138, 3, 6, 3),
(139, 1, 7, 3),
(140, 2, 8, 3),
(141, 70, 9, 3),
(142, 1, 10, 3),
(143, 0, 11, 3),
(144, 0, 12, 3),
(145, 8, 1, 13),
(146, 13, 2, 13),
(147, 2, 3, 13),
(148, 5, 4, 13),
(149, 6, 5, 13),
(150, 4, 6, 13),
(151, 6, 7, 13),
(152, 2, 8, 13),
(153, 87, 9, 13),
(154, 1, 10, 13),
(155, 0, 11, 13),
(156, 1, 12, 13),
(157, 20, 1, 14),
(158, 10, 2, 14),
(159, 2, 3, 14),
(160, 2, 4, 14),
(161, 4, 5, 14),
(162, 5, 6, 14),
(163, 6, 7, 14),
(164, 3, 8, 14),
(165, 50, 9, 14),
(166, 0, 10, 14),
(167, 0, 11, 14),
(168, 0, 12, 14),
(241, 10, 1, 19),
(242, 3, 2, 19),
(243, 0, 3, 19),
(244, 0, 4, 19),
(245, 5, 5, 19),
(246, 3, 6, 19),
(247, 1, 7, 19),
(248, 1, 8, 19),
(249, 95, 9, 19),
(250, 0, 10, 19),
(251, 0, 11, 19),
(252, 0, 12, 19),
(253, 5, 13, 19),
(254, 1, 14, 19),
(255, 6, 15, 19),
(256, 8, 1, 20),
(257, 2, 2, 20),
(258, 0, 3, 20),
(259, 0, 4, 20),
(260, 3, 5, 20),
(261, 2, 6, 20),
(262, 0, 7, 20),
(263, 0, 8, 20),
(264, 90, 9, 20),
(265, 0, 10, 20),
(266, 1, 11, 20),
(267, 0, 12, 20),
(268, 2, 13, 20),
(269, 2, 14, 20),
(270, 3, 15, 20),
(271, 16, 1, 21),
(272, 11, 2, 21),
(273, 1, 3, 21),
(274, 0, 4, 21),
(275, 5, 5, 21),
(276, 3, 6, 21),
(277, 2, 7, 21),
(278, 1, 8, 21),
(279, 75, 9, 21),
(280, 1, 10, 21),
(281, 2, 11, 21),
(282, 1, 12, 21),
(283, 4, 13, 21),
(284, 1, 14, 21),
(285, 6, 15, 21),
(286, 10, 1, 22),
(287, 8, 2, 22),
(288, 1, 3, 22),
(289, 0, 4, 22),
(290, 5, 5, 22),
(291, 3, 6, 22),
(292, 1, 7, 22),
(293, 1, 8, 22),
(294, 80, 9, 22),
(295, 5, 10, 22),
(296, 0, 11, 22),
(297, 0, 12, 22),
(298, 0, 13, 22),
(299, 0, 14, 22),
(300, 0, 15, 22),
(301, 1, 16, 22),
(303, 10, 1, 22),
(304, 8, 2, 22),
(305, 1, 3, 22),
(306, 0, 4, 22),
(307, 5, 5, 22),
(308, 3, 6, 22),
(309, 1, 7, 22),
(310, 1, 8, 22),
(311, 80, 9, 22),
(312, 5, 10, 22),
(313, 0, 11, 22),
(314, 0, 12, 22),
(315, 0, 13, 22),
(316, 0, 14, 22),
(317, 0, 15, 22),
(318, 1, 16, 22),
(319, 8, 18, 22),
(320, 28, 1, 23),
(321, 18, 2, 23),
(322, 4, 3, 23),
(323, 6, 4, 23),
(324, 8, 5, 23),
(325, 4, 6, 23),
(326, 1, 7, 23),
(327, 1, 8, 23),
(328, 90, 9, 23),
(329, 5, 10, 23),
(330, 1, 11, 23),
(331, 0, 12, 23),
(332, 0, 13, 23),
(333, 0, 14, 23),
(334, 0, 15, 23),
(335, 2, 16, 23),
(336, 3, 18, 23),
(337, 12, 1, 24),
(338, 6, 2, 24),
(339, 1, 3, 24),
(340, 2, 4, 24),
(341, 1, 5, 24),
(342, 2, 6, 24),
(343, 4, 7, 24),
(344, 3, 8, 24),
(345, 70, 9, 24),
(346, 3, 10, 24),
(347, 2, 11, 24),
(348, 1, 12, 24),
(349, 0, 13, 24),
(350, 0, 14, 24),
(351, 0, 15, 24),
(352, 1, 16, 24),
(353, 7, 18, 24),
(354, 2, 1, 25),
(355, 1, 2, 25),
(356, 1, 3, 25),
(357, 2, 4, 25),
(358, 3, 5, 25),
(359, 1, 6, 25),
(360, 1, 7, 25),
(361, 0, 8, 25),
(362, 1, 9, 25),
(363, 1, 10, 25),
(364, 1, 11, 25),
(365, 0, 12, 25),
(366, 0, 16, 25),
(367, 0, 18, 25),
(368, 0, 13, 26),
(369, 0, 14, 26),
(370, 0, 15, 26),
(371, 0, 1, 26),
(372, 0, 2, 26),
(373, 0, 3, 26),
(374, 0, 4, 26),
(375, 0, 5, 26),
(376, 0, 6, 26),
(377, 0, 7, 26),
(378, 0, 8, 26),
(379, 0, 9, 26),
(380, 0, 10, 26),
(381, 0, 11, 26),
(382, 0, 12, 26),
(383, 0, 16, 26),
(384, 0, 18, 26),
(385, 0, 1, 27),
(386, 0, 2, 27),
(387, 0, 3, 27),
(388, 0, 4, 27),
(389, 0, 5, 27),
(390, 0, 6, 27),
(391, 0, 7, 27),
(392, 0, 8, 27),
(393, 0, 9, 27),
(394, 0, 10, 27),
(395, 0, 11, 27),
(396, 0, 12, 27),
(397, 0, 16, 27),
(398, 0, 18, 27),
(399, 11, 1, 28),
(400, 5, 2, 28),
(401, 2, 3, 28),
(402, 1, 4, 28),
(403, 5, 5, 28),
(404, 2, 6, 28),
(405, 5, 7, 28),
(406, 1, 8, 28),
(407, 85, 9, 28),
(408, 3, 10, 28),
(409, 1, 11, 28),
(410, 0, 12, 28),
(411, 1, 16, 28),
(412, 5, 18, 28),
(413, 0, 13, 29),
(414, 0, 14, 29),
(415, 0, 15, 29),
(416, 0, 1, 29),
(417, 0, 2, 29),
(418, 0, 3, 29),
(419, 0, 4, 29),
(420, 0, 5, 29),
(421, 0, 6, 29),
(422, 0, 7, 29),
(423, 0, 8, 29),
(424, 0, 9, 29),
(425, 0, 10, 29),
(426, 0, 11, 29),
(427, 0, 12, 29),
(428, 0, 16, 29),
(429, 0, 18, 29),
(430, 0, 1, 30),
(431, 0, 2, 30),
(432, 0, 3, 30),
(433, 0, 4, 30),
(434, 0, 5, 30),
(435, 0, 6, 30),
(436, 0, 7, 30),
(437, 0, 8, 30),
(438, 0, 9, 30),
(439, 0, 10, 30),
(440, 0, 11, 30),
(441, 0, 12, 30),
(442, 0, 16, 30),
(443, 0, 18, 30),
(444, 11, 1, 31),
(445, 5, 2, 31),
(446, 5, 3, 31),
(447, 2, 4, 31),
(448, 8, 5, 31),
(449, 3, 6, 31),
(450, 5, 7, 31),
(451, 1, 8, 31),
(452, 91, 9, 31),
(453, 2, 10, 31),
(454, 1, 11, 31),
(455, 0, 12, 31),
(456, 1, 16, 31),
(457, 9, 18, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas_encuentro`
--

CREATE TABLE `estadisticas_encuentro` (
  `id` bigint UNSIGNED NOT NULL,
  `fecha_del_partido` date NOT NULL,
  `numero_partido` bigint NOT NULL,
  `id_tipo_partido` bigint UNSIGNED NOT NULL,
  `id_jugador` bigint UNSIGNED NOT NULL,
  `id_equipo` bigint UNSIGNED NOT NULL,
  `id_usuario` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estadisticas_encuentro`
--

INSERT INTO `estadisticas_encuentro` (`id`, `fecha_del_partido`, `numero_partido`, `id_tipo_partido`, `id_jugador`, `id_equipo`, `id_usuario`) VALUES
(1, '2017-04-26', 0, 1, 1, 1, 1),
(2, '2018-07-10', 0, 2, 2, 3, 1),
(3, '2023-05-10', 0, 3, 2, 5, 1),
(4, '2023-06-12', 0, 1, 6, 1, 2),
(5, '2023-06-25', 0, 1, 6, 1, 2),
(6, '2023-08-03', 0, 1, 6, 1, 2),
(7, '2023-10-10', 0, 1, 6, 1, 2),
(8, '2022-02-02', 0, 1, 1, 3, 3),
(9, '2022-05-12', 0, 1, 1, 4, 3),
(10, '2022-07-27', 0, 1, 1, 5, 3),
(11, '2022-09-08', 0, 1, 1, 6, 3),
(12, '2023-03-28', 0, 1, 1, 1, 3),
(13, '2021-02-10', 0, 1, 2, 2, 1),
(14, '2021-04-13', 0, 1, 2, 3, 1),
(19, '2021-05-02', 0, 1, 5, 1, 2),
(20, '2022-05-10', 0, 1, 5, 1, 2),
(21, '2023-11-13', 0, 1, 5, 1, 2),
(22, '2022-02-20', 0, 2, 6, 6, 1),
(23, '2022-03-10', 0, 2, 6, 6, 1),
(24, '2023-05-28', 0, 3, 6, 6, 3),
(25, '2023-05-16', 1, 1, 6, 1, 1),
(26, '2023-06-13', 1, 3, 5, 4, 1),
(27, '2012-12-12', 1, 1, 1, 2, 1),
(28, '2012-02-02', 1, 1, 11, 2, 21),
(29, '2020-10-10', 1, 1, 5, 5, 1),
(30, '2023-12-10', 1, 2, 2, 2, 1),
(31, '2021-06-24', 1, 1, 7, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generar_reporte`
--

CREATE TABLE `generar_reporte` (
  `id` bigint UNSIGNED NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date NOT NULL,
  `id_jugador` bigint UNSIGNED NOT NULL,
  `id_usuario` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `generar_reporte`
--

INSERT INTO `generar_reporte` (`id`, `fecha_inicial`, `fecha_final`, `id_jugador`, `id_usuario`) VALUES
(26, '2018-02-22', '2022-12-10', 1, 1),
(28, '2023-06-12', '2023-10-10', 6, 1),
(30, '2023-06-12', '2023-10-10', 6, 1),
(39, '2021-05-02', '2023-11-13', 5, 1),
(40, '2022-03-10', '2023-05-28', 6, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `historial_equipos`
--

INSERT INTO `historial_equipos` (`id`, `fecha_inicial`, `fecha_terminacion`, `id_equipo`, `id_jugador`) VALUES
(7, '2021-02-10 00:00:00', '2022-03-30 00:00:00', 7, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre_completo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apodo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `caracteristicas` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci,
  `id_usuario` bigint UNSIGNED NOT NULL,
  `id_equipo` bigint UNSIGNED NOT NULL,
  `id_liga` bigint UNSIGNED NOT NULL,
  `id_pais` bigint UNSIGNED NOT NULL,
  `id_contiente` bigint UNSIGNED NOT NULL,
  `id_posicion` bigint UNSIGNED NOT NULL,
  `id_perfil` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`id`, `nombre_completo`, `apodo`, `fecha_nacimiento`, `caracteristicas`, `id_usuario`, `id_equipo`, `id_liga`, `id_pais`, `id_contiente`, `id_posicion`, `id_perfil`) VALUES
(1, 'Rosito Mañaneiros', 'El 3am', '1999-10-14', NULL, 1, 3, 1, 5, 3, 6, 1),
(2, 'David Hernandez', 'La Cachaza', '1998-08-23', NULL, 2, 4, 1, 3, 1, 5, 1),
(5, 'Kevin Mier', 'La Araña', '2000-02-15', NULL, 1, 1, 1, 4, 1, 1, 1),
(6, 'Dorlan Pavon', 'Memín', '2000-05-22', NULL, 1, 1, 1, 3, 1, 9, 1),
(7, 'Albert Hass', 'El lentejo', '1999-12-23', NULL, 1, 5, 4, 8, 2, 3, 1),
(8, 'Alan Brito Delgado', 'El Flaco', '2003-05-02', NULL, 3, 3, 2, 4, 1, 5, 2),
(11, 'Aquiles Castro', 'La Gillotina', '2008-09-17', NULL, 2, 5, 3, 7, 5, 11, 1),
(19, 'Aquiles Castro Bueno', 'la loca', '2011-11-11', 'loca por naturaleza', 1, 2, 2, 4, 2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

CREATE TABLE `ligas` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
-- Estructura de tabla para la tabla `numero_partido`
--

CREATE TABLE `numero_partido` (
  `id` bigint NOT NULL,
  `num_partido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `numero_partido`
--

INSERT INTO `numero_partido` (`id`, `num_partido`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `olvido_password`
--

CREATE TABLE `olvido_password` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `token` varchar(225) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `olvido_password`
--

INSERT INTO `olvido_password` (`id`, `email`, `token`) VALUES
(1, 'josecanseco@gmail', 'cc0a0ddc847a77bda854be923f9938ae649a211a93692'),
(2, 'josecanseco@gmail', '1c658c00684dba61ea848c4598aabbcc649a2127102e4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre_pais` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id`, `nombre_pais`) VALUES
(1, 'Argentina'),
(2, 'Colombia'),
(3, 'Brasil'),
(4, 'Alemania'),
(5, 'Francia'),
(6, 'Inglaterra'),
(7, 'Senegal'),
(8, 'Camerun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
  `descripcion` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

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
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_partido`
--

INSERT INTO `tipo_partido` (`id`, `nombre`) VALUES
(1, 'Liga'),
(2, 'Seleccion'),
(3, 'Liertadores'),
(4, 'Recocha');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint UNSIGNED NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nickname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Email`, `nickname`, `password`) VALUES
(1, 'josecanseco@gmail', 'jose45', '123456'),
(2, 'asher@gmail', 'perritoal100%', '7777777'),
(3, 'canela@cansanciogmail.com', 'saltarina123', '333333'),
(21, 'pepita@gmail.com', 'peputa', 'e10adc3949ba59abbe56e057f20f883e'),
(22, 'santiago@gmail.com', 'santi23', '25f9e794323b453885f5181f1b624d0b'),
(24, 'danitalareina@gmail.com', 'danita12', '0bbaceed88f99dcf80aeb61da960f79a');

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
-- Indices de la tabla `estadisticas_count`
--
ALTER TABLE `estadisticas_count`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_encuentro_estadistica` (`id_encuentro_estadistica`),
  ADD KEY `id_estadistica` (`id_estadistica`);

--
-- Indices de la tabla `estadisticas_encuentro`
--
ALTER TABLE `estadisticas_encuentro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_partido` (`id_tipo_partido`),
  ADD KEY `id_jugador` (`id_jugador`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `numero_partido`
--
ALTER TABLE `numero_partido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `olvido_password`
--
ALTER TABLE `olvido_password`
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `copas`
--
ALTER TABLE `copas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `estadisticas_count`
--
ALTER TABLE `estadisticas_count`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT de la tabla `estadisticas_encuentro`
--
ALTER TABLE `estadisticas_encuentro`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `generar_reporte`
--
ALTER TABLE `generar_reporte`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `historial_equipos`
--
ALTER TABLE `historial_equipos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `numero_partido`
--
ALTER TABLE `numero_partido`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `olvido_password`
--
ALTER TABLE `olvido_password`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estadisticas_count`
--
ALTER TABLE `estadisticas_count`
  ADD CONSTRAINT `FK_encuentro_estad_id_count_estadisticas_id` FOREIGN KEY (`id_encuentro_estadistica`) REFERENCES `estadisticas_encuentro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_estadistica_id_count_estadisticas_id` FOREIGN KEY (`id_estadistica`) REFERENCES `estadisticas` (`id`);

--
-- Filtros para la tabla `estadisticas_encuentro`
--
ALTER TABLE `estadisticas_encuentro`
  ADD CONSTRAINT `FK_equipo_id_encuentro_estadisticas_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `FK_id_usuario_encuentro_estadisticas_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_jugador_id_encuentro_estadisticas_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`),
  ADD CONSTRAINT `FK_tipo_partido_id_encuentro_estadisticas_id` FOREIGN KEY (`id_tipo_partido`) REFERENCES `tipo_partido` (`id`);

--
-- Filtros para la tabla `generar_reporte`
--
ALTER TABLE `generar_reporte`
  ADD CONSTRAINT `FK_jugador_id_generar_reporte_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`),
  ADD CONSTRAINT `FK_usuario_id_generar_reporte_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `historial_equipos`
--
ALTER TABLE `historial_equipos`
  ADD CONSTRAINT `FK_equipo_id_historial_equipos_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `FK_jugador_id_historial_equipos_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `FK_continente_jugadores_id` FOREIGN KEY (`id_contiente`) REFERENCES `continentes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_equipo_jugadores_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `FK_jugador_usuarios_id` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FK_liga_jugadores_id` FOREIGN KEY (`id_liga`) REFERENCES `ligas` (`id`),
  ADD CONSTRAINT `FK_pais_jugadores_id` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id`),
  ADD CONSTRAINT `FK_perfil_jugadores_id` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id`),
  ADD CONSTRAINT `FK_posicion_jugadores_id` FOREIGN KEY (`id_posicion`) REFERENCES `posiciones` (`id`);

--
-- Filtros para la tabla `titulos_jugador`
--
ALTER TABLE `titulos_jugador`
  ADD CONSTRAINT `FK_copas_id_titulos_jugador_id` FOREIGN KEY (`id_copa`) REFERENCES `copas` (`id`),
  ADD CONSTRAINT `FK_equipos_id_titulos_jugador_id` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `FK_jugador_id_titulos_jugador_id` FOREIGN KEY (`id_jugador`) REFERENCES `jugadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
