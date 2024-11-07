-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2024 a las 03:06:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_evento_cardenas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

DROP TABLE IF EXISTS `asistentes`;
CREATE TABLE `asistentes` (
  `id` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `rut` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `codigo_qr` varchar(100) NOT NULL,
  `fecha_registro` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistentes`
--

INSERT INTO `asistentes` (`id`, `nombre`, `rut`, `email`, `telefono`, `imagen`, `codigo_qr`, `fecha_registro`) VALUES
(1, 'a', '20987855-0', 'a@gmail.com', '212323232', 'imagenes/xd.png', 'imagenes/qr_1.png', '2024-11-07 01:58:29.111710'),
(2, 'ab', '20987855-0', 'a@gmail.com', '212323232', 'imagenes/xd.png', 'imagenes/qr_2.png', '2024-11-07 02:04:07.198747');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
