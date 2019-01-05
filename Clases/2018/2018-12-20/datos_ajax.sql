-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2018 a las 21:18:37
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ayudantia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_ajax`
--

DROP TABLE IF EXISTS `datos_ajax`;
CREATE TABLE `datos_ajax` (
  `id` int(11) NOT NULL,
  `dato` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `datos_ajax`
--

TRUNCATE TABLE `datos_ajax`;
--
-- Volcado de datos para la tabla `datos_ajax`
--

INSERT INTO `datos_ajax` (`id`, `dato`) VALUES
(5, 'francisco'),
(6, 'francisco'),
(7, 'francisco'),
(8, 'francisco'),
(9, 'francisco'),
(10, 'francisco'),
(11, 'francisco'),
(12, 'francisco'),
(13, 'priscila'),
(14, 'priscila'),
(15, 'priscila'),
(16, 'priscila'),
(17, 'cristian');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_ajax`
--
ALTER TABLE `datos_ajax`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_ajax`
--
ALTER TABLE `datos_ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
