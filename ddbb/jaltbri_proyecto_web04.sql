-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-05-2021 a las 10:01:57
-- Versión del servidor: 5.7.33-0ubuntu0.16.04.1
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jaltbri_proyecto_web04`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediciones`
--

CREATE TABLE `mediciones` (
  `idSonda` int(11) NOT NULL,
  `idPosicion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `temperatura` float NOT NULL,
  `humedad` int(11) NOT NULL,
  `salinidad` int(11) NOT NULL,
  `luminosidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mediciones`
--

INSERT INTO `mediciones` (`idSonda`, `idPosicion`, `fecha`, `temperatura`, `humedad`, `salinidad`, `luminosidad`) VALUES
(1, 1, '2021-05-12', 20.3, 45, 10, 80),
(2, 0, '2021-05-12', 30, 60, 20, 10),
(3, 3, '2021-05-12', 4, 23, 21, 45),
(4, 4, '2021-05-12', 3, 12, 12, 42),
(5, 5, '2021-05-12', 23, 12, 34, 80),
(3, 3, '2020-09-19', 46.79, 37, 82, 58),
(2, 3, '2020-09-09', 37.85, 95, 62, 41),
(5, 2, '2020-11-10', 3.9, 35, 34, 52),
(1, 1, '2021-05-12', 85.68, 55, 60, 59),
(5, 5, '2020-06-24', 28.02, 40, 70, 49),
(5, 3, '2021-04-28', 80.67, 58, 97, 58),
(5, 1, '2021-03-01', 10.8, 43, 36, 2),
(4, 5, '2020-08-15', 94.19, 90, 25, 46),
(2, 1, '2021-02-25', 65.72, 28, 89, 60),
(4, 5, '2020-05-06', 68.34, 24, 52, 52),
(5, 2, '2020-08-22', 70.32, 12, 50, 9),
(3, 5, '2020-08-28', 19.83, 68, 81, 54),
(2, 3, '2021-05-06', 74.82, 35, 12, 20),
(1, 4, '2020-10-06', 91.93, 33, 14, 92),
(3, 1, '2020-07-12', 51.22, 74, 83, 30),
(2, 4, '2020-08-18', 29.21, 20, 58, 42),
(1, 4, '2020-05-22', 97.35, 6, 53, 95),
(1, 1, '2021-03-07', 99.38, 79, 99, 7),
(3, 3, '2021-05-04', 24.37, 84, 30, 92),
(3, 3, '2020-05-18', 11.98, 29, 25, 9),
(2, 3, '2020-06-11', 92.5, 64, 67, 75),
(3, 2, '2020-09-27', 10.75, 5, 87, 29),
(4, 1, '2020-09-29', 35.55, 16, 8, 94),
(3, 2, '2020-05-21', 62.65, 37, 77, 25),
(5, 1, '2020-07-04', 82.51, 36, 5, 49),
(3, 4, '2020-12-25', 6.7, 95, 8, 40),
(3, 3, '2020-11-03', 72.44, 50, 32, 9),
(4, 5, '2020-10-07', 91.77, 23, 12, 97),
(2, 2, '2021-05-02', 55.53, 72, 64, 62),
(5, 2, '2021-04-19', 40.55, 3, 22, 49),
(5, 4, '2020-05-02', 67.31, 89, 40, 56),
(4, 5, '2020-09-22', 62.09, 25, 70, 22),
(3, 4, '2021-01-18', 37.47, 16, 58, 26),
(2, 2, '2020-09-25', 2.32, 61, 77, 25),
(3, 5, '2020-10-15', 59.38, 64, 14, 39),
(5, 4, '2020-07-10', 78.07, 48, 97, 41),
(1, 2, '2020-07-03', 17.56, 44, 51, 27),
(5, 5, '2020-05-24', 25.59, 66, 23, 40),
(4, 5, '2020-12-20', 84.66, 18, 28, 18),
(5, 1, '2020-08-08', 67.64, 24, 50, 19),
(1, 1, '2020-05-14', 26.08, 98, 57, 82),
(3, 4, '2021-03-07', 36.14, 28, 43, 90),
(3, 5, '2020-10-15', 27.22, 11, 87, 77),
(2, 2, '2020-06-13', 57.07, 72, 64, 19),
(3, 5, '2020-11-13', 64.83, 65, 19, 79),
(2, 3, '2020-08-01', 78.38, 91, 43, 24),
(5, 2, '2020-06-07', 26.31, 44, 79, 83),
(2, 1, '2021-04-05', 69.68, 17, 56, 94),
(3, 3, '2021-04-24', 38.86, 43, 22, 50),
(2, 5, '2020-08-26', 62.2, 28, 64, 53),
(2, 5, '2020-07-29', 45.45, 70, 69, 58),
(3, 2, '2020-09-24', 52.39, 89, 79, 10),
(1, 4, '2020-11-09', 42.85, 39, 33, 22),
(2, 5, '2021-05-04', 49.06, 62, 76, 44),
(5, 2, '2020-12-23', 22.66, 42, 20, 54),
(2, 3, '2020-10-20', 44.12, 40, 79, 62),
(5, 3, '2021-05-05', 45.42, 77, 2, 71),
(2, 2, '2020-05-03', 47.68, 75, 86, 45),
(2, 3, '2020-11-04', 52.15, 79, 61, 22),
(4, 4, '2020-05-16', 53.95, 71, 92, 84),
(3, 1, '2020-07-30', 38.72, 96, 47, 8),
(1, 5, '2021-04-14', 2.14, 16, 81, 93),
(2, 5, '2020-07-31', 73.5, 21, 49, 52),
(2, 5, '2020-07-05', 40.46, 95, 14, 30),
(3, 3, '2020-08-30', 67.59, 84, 48, 95),
(4, 5, '2020-11-19', 54.64, 46, 53, 12),
(3, 5, '2020-08-25', 53.29, 92, 84, 18),
(1, 2, '2020-07-03', 24.18, 1, 55, 54),
(2, 4, '2020-07-04', 9.34, 62, 75, 73),
(5, 3, '2020-05-19', 22.19, 40, 3, 33),
(2, 3, '2021-02-01', 60.03, 47, 41, 18),
(5, 4, '2020-08-17', 49.56, 98, 7, 1),
(1, 5, '2021-04-01', 50.84, 77, 24, 35),
(2, 2, '2020-09-23', 45.17, 31, 74, 10),
(2, 4, '2020-06-12', 47.41, 42, 6, 41),
(4, 5, '2021-04-29', 40.64, 57, 50, 42),
(3, 4, '2021-04-19', 22.07, 18, 40, 8),
(4, 5, '2021-04-27', 76.85, 12, 27, 76),
(4, 2, '2021-02-27', 67, 5, 24, 96),
(3, 5, '2020-08-14', 96.15, 15, 95, 12),
(5, 4, '2020-07-31', 32.17, 77, 79, 28),
(1, 4, '2020-09-16', 77.14, 40, 84, 61),
(3, 4, '2020-07-26', 67.75, 29, 64, 77),
(3, 2, '2020-08-29', 12.11, 22, 46, 70),
(4, 4, '2021-03-19', 22.08, 56, 9, 76),
(4, 4, '2020-05-23', 34.82, 37, 30, 12),
(2, 3, '2021-01-16', 65.23, 15, 89, 17),
(3, 4, '2020-11-01', 65.89, 75, 15, 34),
(3, 5, '2020-07-23', 75.14, 17, 73, 80),
(3, 2, '2021-04-05', 42.61, 3, 45, 47),
(1, 1, '2020-07-30', 66.77, 66, 63, 63),
(1, 3, '2021-04-11', 55.4, 24, 13, 47),
(3, 5, '2020-06-10', 1.91, 46, 45, 30),
(5, 4, '2020-06-24', 27.52, 44, 92, 84),
(4, 1, '2021-03-23', 82.28, 36, 85, 41),
(2, 3, '2020-05-19', 18.83, 50, 57, 68),
(5, 1, '2020-05-08', 27.95, 13, 42, 21),
(1, 3, '2020-09-29', 54.18, 77, 60, 4),
(4, 3, '2020-11-26', 47.54, 48, 42, 91),
(1, 5, '2020-05-16', 5.02, 5, 89, 59),
(1, 1, '2021-05-13', 30, 34, 23, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcela`
--

CREATE TABLE `parcela` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `color` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parcela`
--

INSERT INTO `parcela` (`id`, `nombre`, `color`) VALUES
(1, 'Parcela sandias ', 'red'),
(2, 'Parcela naranjas', 'orange');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcelas_usuarios`
--

CREATE TABLE `parcelas_usuarios` (
  `idParcela` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parcelas_usuarios`
--

INSERT INTO `parcelas_usuarios` (`idParcela`, `idUsuario`) VALUES
(1, 2),
(2, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posiciones`
--

CREATE TABLE `posiciones` (
  `id` int(11) NOT NULL,
  `latitud` double NOT NULL,
  `longitud` double NOT NULL,
  `idParcela` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posiciones`
--

INSERT INTO `posiciones` (`id`, `latitud`, `longitud`, `idParcela`) VALUES
(0, 38.9930171435846, -0.16523886566772727, 2),
(1, 38.98730651124778, -0.15769993544311411, 1),
(2, 38.99354553222656, -0.1656985878944397, 2),
(3, 38.98770523071289, -0.15828999876976013, 1),
(4, 38.98842239379883, -0.15845303237438202, 1),
(5, 38.99026920284915, -0.16347933655395774, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sonda`
--

CREATE TABLE `sonda` (
  `id` int(11) NOT NULL,
  `estado` enum('Activo','Apagado') NOT NULL,
  `frecuencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sonda`
--

INSERT INTO `sonda` (`id`, `estado`, `frecuencia`) VALUES
(1, 'Activo', 3),
(2, 'Activo', 2),
(3, 'Activo', 1),
(4, 'Activo', 5),
(5, 'Activo', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sondas_posiciones`
--

CREATE TABLE `sondas_posiciones` (
  `idSonda` int(11) NOT NULL,
  `idPosicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sondas_posiciones`
--

INSERT INTO `sondas_posiciones` (`idSonda`, `idPosicion`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contrasenya` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `rol` enum('admin','empleado','usuario') NOT NULL,
  `fechaAlta` date NOT NULL,
  `fotoPerfil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'user.png',
  `telefono` varchar(20) NOT NULL,
  `Apodo` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `contrasenya`, `correo`, `rol`, `fechaAlta`, `fotoPerfil`, `telefono`, `Apodo`, `Direccion`) VALUES
(1, 'admin', '1234', '', 'admin', '2021-04-27', 'staff.jpg', '0', '', ''),
(2, 'user', '1234', 'francisco@gmail.com', 'usuario', '2021-04-27', 'user.png', '+34 654 81 05 36', 'Francisco ', 'Calle de la Rosa 4'),
(3, 'user2', '1234', 'antonio@gmail.com', 'usuario', '2021-04-28', 'user.png', '+34 640 16 95 89', 'Antonio Manuel', 'Avenida Guadalupe, 23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vertices`
--

CREATE TABLE `vertices` (
  `idParcela` int(11) NOT NULL,
  `latitud` varchar(1000) NOT NULL COMMENT 'las latitudes deben estar en orden de la forma de la parcela y deben ir separadas por punto y coma '';'' un ejemplo seria:\r\n38.996243;38.9884501;38.9891091;38.9895365\r\n\r\n',
  `longitud` varchar(1000) NOT NULL COMMENT 'las longitudes deben estar en orden de la forma de la parcela y deben ir separadas por punto y coma '';'' un ejemplo seria: -0.168021;-0.1629897;-0.1610367;-0.1605593'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vertices`
--

INSERT INTO `vertices` (`idParcela`, `latitud`, `longitud`) VALUES
(2, '38.996243;38.9884501;38.9891091;38.9895365', '-0.168021;-0.1629897;-0.1610367;-0.1605593'),
(1, '38.9901701;38.9877401;38.9863041;38.9863041', '-0.1579057;-0.1601657;-0.1569937;-0.1569937');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `parcela`
--
ALTER TABLE `parcela`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sonda`
--
ALTER TABLE `sonda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `parcela`
--
ALTER TABLE `parcela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `posiciones`
--
ALTER TABLE `posiciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sonda`
--
ALTER TABLE `sonda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
