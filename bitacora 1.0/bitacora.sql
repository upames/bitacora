-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-06-2019 a las 20:44:37
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modificaciones`
--

INSERT INTO `modificaciones` (`id_commit`, `codigo`, `titulo`, `autor`, `fecha`, `entrada`, `salida`, `id_prueba`, `id_modulo`) VALUES
(1, '8bf0fcbee6dee589320fd8f68295b99bb63fb1bc', 'Se agrego versión 0', 'Nestor,Erick,Dolores', '2019-05-21', 'Se creo proyecto', 'Sin salida', 2, 3),
(2, 'eaad9c56577af76bb8e61accc21f7dd00d88cd18', 'buscar producto', 'Nestor,Erick,Dolores', '2019-05-23', 'Se creo formulario para buscar un producto', 'Nos marco un error en la base de datos, porque la tabla no existia', 2, 2),
(3, '6cb7eb3bd360faef68a2903b01077ddc166c7543', 'Se agrego tabla producto, formulario y menús', 'Nestor,Erick,Dolores', '2019-05-23', 'Se creo la tabla producto en la base de datos y se creo el formulario  para la inserción de un nuevo producto', 'Marco error al registrar un producto mediante ', 4, 3),
(4, 'e751272a5ba6520e481c0f5b723c8813a2fbba45', 'Update index.php se modifico la versión desde github', 'Dolores', '2019-05-27', 'Se agrego versión 1.0', 'Exitosa ', 2, 3),
(5, 'b1ffa5d47e380973fe83e011f91112994ce1ebff', 'Update index.php', 'Dolores', '2019-05-27', 'Se agrego versión 1.1', 'Exitosa ', 2, 3),
(6, '6c3a4c43469907d1b4f680f8a450918d9c2cdb54', 'Se agrego pagina procesa para registro y búsqueda de producto', 'Erick', '2019-05-27', 'Se hizo la conexión a la base de datos y validación de los datos ingresados', 'Funciono correctamente', 3, 3),
(7, '7acb2d52d87bedcb5f1e52bdc935e7fb570032de', 'Se modifico proceso de sesionBarras', 'Nestor', '2019-05-28', 'Se creo el formulario para iniciar sesión con barras ', 'No reconoció en automático la caja de texto, funcional', 4, 1),
(8, '42785a878b1cbb7d2345a75fb187af802dbe5b60', 'Se modifico proceso de sesionBarras 2', 'Nestor', '2019-05-28', 'Se le agrego el focus para que en automático tomara el código de barras en la caja de texto ', 'Funciono correctamente, ya que inicio sesion', 4, 1),
(9, '08396b14094d61af67f742bf58462f61264080bd', 'Modificacion sesionCodigoBarras y su proceso', 'Nestor', '2019-05-28', 'Se modifico el formulario para iniciar sesión con código de barras asi mismo se modifico el código php que valida que el código de barras leído se encuentra en la base de datos y asi poder iniciar sesión ', 'Error porque se modifico la base de datos y no se tenia que modificar', 3, 1),
(10, 'c04a12447e488a17529ccbfb1a2d1dce2a1b3855', 'Se agrego archivos para inicio de sesión con código de barras', 'Erick', '2019-05-29', 'Se creo un archivo para el registro de un usuario incluyendo un código de barras y un archivo para que inicie sesión el usuario mediante código de barras ', 'Solo se tenia interfaz la cual no era funcional', 2, 1),
(11, 'ea7388ce42800eec5d7a5f9435c659b704ed7853', 'se agrego un campo para el id del usuario', 'Dolores', '2019-05-30', 'Se agrego la caja de texto donde se almacena el código de barras del usuario', 'Se almaceno satisfactoriamente el producto con su respectivo codigo de barras', 2, 1),
(12, '8f1b42baaad6ddd365cc2b2cf566db1a0163b087', 'Se modifico sesión de código de barras', 'Erick', '2019-05-30', 'Se cambio la propiedad para re direccionar a una pagina, enviando el nombre del usuario ', 'Marco error al enviar los datos por el url', 4, 1),
(13, 'dd06679fef81ef1fa445b4cfd110ac61e35913aa', 'funcional 2', 'Dolores', '2019-05-30', 'Se le agrego la propiedad requerido al formulario ', 'No deja avanzar al usuario si no llena todos los campos de texto', 1, 1),
(14, '2754a79cd6bb0a3753d986b85db728b22a7f676f', '  Se modifico el tipo de dato del id de usuario', 'Dolores', '2019-06-03', 'Se cambio el tipo de dato del id del usuario en la base de datos  ', 'Almacenamiento del código de barras exitoso', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `id_modulos` int(6) NOT NULL,
  `nombre_modulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`id_modulos`, `nombre_modulo`) VALUES
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`id_modulos`);

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
  MODIFY `id_commit` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id_modulos` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id_prueba` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
