-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2021 a las 22:08:58
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_web04`
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
(0, 0, '2021-05-12', 30, 60, 20, 10),
(3, 3, '2021-05-12', 4, 23, 21, 45),
(4, 4, '2021-05-12', 3, 12, 12, 42),
(5, 5, '2021-05-12', 23, 12, 34, 80);

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
(1, 'Parcela sandías ', 'red'),
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
(0, 'Activo', 2),
(1, 'Activo', 3),
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
  `fechaAlta` datetime NOT NULL,
  `fotoPerfil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'user.png',
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `contrasenya`, `correo`, `rol`, `fechaAlta`, `fotoPerfil`, `telefono`) VALUES
(1, 'admin', '1234', '', 'admin', '2021-04-27 22:10:09', 'staff.jpg', 0),
(2, 'user', '1234', '', 'usuario', '2021-04-27 22:10:09', 'user.png', 0),
(3, 'user2', '1234', '', 'usuario', '2021-04-28 19:24:07', 'user.png', 0);

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
