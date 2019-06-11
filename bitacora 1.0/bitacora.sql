-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-06-2019 a las 20:33:32
-- Versión del servidor: 8.0.14
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bitacora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modificaciones`
--

CREATE TABLE `modificaciones` (
  `id_commit` int(6) NOT NULL,
  `codigo` varchar(99) DEFAULT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `autor` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `entrada` varchar(1000) DEFAULT NULL,
  `salida` varchar(1000) DEFAULT NULL,
  `id_prueba` int(6) DEFAULT NULL,
  `id_modulo` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `modificaciones`
--

INSERT INTO `modificaciones` (`id_commit`, `codigo`, `titulo`, `autor`, `fecha`, `entrada`, `salida`, `id_prueba`, `id_modulo`) VALUES
(1, '8bf0fcbee6dee589320fd8f68295b99bb63fb1bc', 'Se agrego versión 0', 'Nestor,Erick,Dolores', '2019-05-21', 'Se creo proyecto', 'Sin salida', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `id_modulo` int(6) NOT NULL,
  `nombre_modulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`id_modulo`, `nombre_modulo`) VALUES
(1, 'Modulo de Sesión'),
(2, 'Modulo de Búsqueda'),
(3, 'Modulo General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id_prueba` int(6) NOT NULL,
  `nombre_prueba` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id_prueba`, `nombre_prueba`) VALUES
(1, 'Prueba de Rendimiento'),
(2, 'Prueba de Diseño'),
(3, 'Prueba de Validación de Datos'),
(4, 'Prueba de Funcionalidad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `modificaciones`
--
ALTER TABLE `modificaciones`
  ADD PRIMARY KEY (`id_commit`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id_prueba`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `modificaciones`
--
ALTER TABLE `modificaciones`
  MODIFY `id_commit` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id_modulo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id_prueba` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
